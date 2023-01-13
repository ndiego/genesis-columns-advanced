<?php
/**
 * Plugin Name: Genesis Columns Advanced
 * Plugin URI: https://www.nickdiego.com/plugins/genesis-columns-advanced
 * Description: Adds shortcodes to easily create up to 42 different columned layouts.
 * Version: 2.0.5
 * Author: Nick Diego
 * Author URI: https://www.nickdiego.com
 * Text Domain: genesis-columns-advanced
 * License: GPLv2
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, visit <http://www.gnu.org/licenses/>.
 */

defined( 'WPINC' ) or die;


class Genesis_Columns_Advanced {


	/**
	 * Constructor
	 *
	 * @since 2.0.0
	 */
	function __construct() {

		add_action( 'wp_loaded', array( $this, 'init') );
	}


	/**
	 * Initialize plugin.
	 *
	 * @since 2.0.0
	 */
	public function init() {

		load_plugin_textdomain( 'genesis-columns-advanced', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

		add_action('admin_init', array( $this, 'add_tinymce_button' ) );

		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts_enqueue' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'frontend_scripts_enqueue' ) );

		$this->add_shortcodes();

		add_filter( 'the_content', array( $this, 'shortcode_empty_paragraph_fix' ) );

		add_filter( 'plugin_row_meta', array( $this, 'plugin_row_meta' ), 10, 2 );
	}


	/**
	 * Initialize the columns shortcode tinymce button
	 *
	 * @since 1.0.0
	 */
	public function add_tinymce_button() {

		// Check user permissions
		if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
			return;
		}
		// Check if WYSIWYG is enabled
		if ( 'true' == get_user_option( 'rich_editing' ) ) {
			add_filter( 'mce_external_languages', array( $this, 'add_tinymce_translations' ) );
			add_filter( 'mce_external_plugins', array( $this, 'add_tinymce_plugin' ) );
			add_filter( 'mce_buttons', array( $this, 'register_tinymce_button' ) );
			add_action( 'admin_print_footer_scripts', array( $this, 'tinymce_popup' ), 100 );
		}
	}


	/**
	 * Declare script for new button
	 *
	 * @since 1.0.0
	 *
	 * @param array $plugins An array of all current TinyMCE plugins
	 * @return array $plugins Return the plugins array with our plugin added
	 */
	public function add_tinymce_plugin( $plugins ) {
		$plugins['gca_plugin'] = plugin_dir_url( __FILE__ ) . 'tinymce/js/plugin.js';
		return $plugins;
	}


	/**
	 * Add translations to TinyMCE button
	 *
	 * @since 2.0.0
	 *
	 * @param array $locales An array of all current TinyMCE translations
	 * @return array $locales Return the translations array with our translations added
	 */
	public function add_tinymce_translations( $locales ) {
		$locales['gca_translations'] = plugin_dir_path( __FILE__ ) . 'tinymce/plugin-translations.php';
		return $locales;
	}


	/**
	 * Register new button in the TinyMCE editor
	 *
	 * @since 1.0.0
	 *
	 * @param array $buttons An array of all current TinyMCE buttons
	 * @return array $buttons Return the buttons array with our button added
	 */
	public function register_tinymce_button( $buttons ) {
		array_push( $buttons, 'gca_plugin' );
		return $buttons;
	}


	/**
	 * Add the popup and the popup backdrop to the footer of admin page
	 *
	 * @since 1.0.0
	 */
	public function tinymce_popup() {
		include_once dirname( __FILE__ ) . '/tinymce/popup.php';
	}


	/**
	 * Loads scripts/styles to the admin
	 *
	 * @since 1.0.0
	 */
	function admin_scripts_enqueue() {

		wp_register_script( 'gca-popup-scripts', plugin_dir_url( __FILE__ ) . 'tinymce/js/popup.js' );
		wp_enqueue_script( 'gca-popup-scripts' );

		// Used for adding translations to javascript
		wp_localize_script(
			'gca-popup-scripts',
			'gca_localize_scripts',
			array(
				'first_column' 	 => __( 'Place your content for the first column here.', 'genesis-columns-advanced' ),
				'second_column'  => __( 'Place your content for the second column here.', 'genesis-columns-advanced' ),
				'third_column'	 => __( 'Place your content for the third column here.', 'genesis-columns-advanced' ),
				'fourth_column'  => __( 'Place your content for the fourth column here.', 'genesis-columns-advanced' ),
				'fifth_column'	 => __( 'Place your content for the fifth column here.', 'genesis-columns-advanced' ),
				'sixth_column'	 => __( 'Place your content for the sixth column here.', 'genesis-columns-advanced' ),
				'missing_layout' => __( 'You forgot to select a column layout!', 'genesis-columns-advanced' ),
				'show_titles'	 => __( 'Show Titles', 'genesis-columns-advanced' ),
				'hide_titles'	 => __( 'Hide Titles', 'genesis-columns-advanced' ),
			)
		);

		wp_enqueue_style( 'gca-popup-styles',  plugin_dir_url( __FILE__ ) . 'tinymce/css/popup.css' );
	}


	/**
	 * Loads the optional stylesheet to the frontend if Genesis is not active
	 *
	 * @since 1.0.0
	 */
	function frontend_scripts_enqueue() {

		// Load the columns stylesheet. Use filter to disable and load your own
		if ( apply_filters( 'gca_load_column_styles', true ) ) {
			wp_enqueue_style( 'gca-column-styles',  plugin_dir_url( __FILE__ ) . 'css/gca-column-styles.css' );
		}
	}


	public function add_shortcodes() {
		foreach ( $this->get_shortcodes() as $shortcode => $atts ) {
			add_shortcode( $shortcode, array( $this, 'shortcodes' ) );
		}
	}


	public function get_shortcodes() {

		static $all_shortcodes;

		if ( ! empty( $all_shortcodes ) ) {
			return $all_shortcodes;
		}

		// define shortcodes
		$shortcodes = apply_filters( 'NEED_shortcodes', array(
			'one-half' 			=> array( 'type' => 'column' ),
			'one-third' 		=> array( 'type' => 'column' ),
			'two-thirds' 		=> array( 'type' => 'column' ),
			'one-fourth' 		=> array( 'type' => 'column' ),
			'two-fourths' 		=> array( 'type' => 'column' ),
			'three-fourths' 	=> array( 'type' => 'column' ),
			'one-fifth' 		=> array( 'type' => 'column' ),
			'two-fifths' 		=> array( 'type' => 'column' ),
			'three-fifths' 		=> array( 'type' => 'column' ),
			'four-fifths' 		=> array( 'type' => 'column' ),
			'one-sixth' 		=> array( 'type' => 'column' ),
			'two-sixths' 		=> array( 'type' => 'column' ),
			'three-sixths' 		=> array( 'type' => 'column' ),
			'four-sixths' 		=> array( 'type' => 'column' ),
			'five-sixths' 		=> array( 'type' => 'column' ),

			'clearfix' 			=> array( 'type' => 'utility' ),
			'vertical-spacer' 	=> array( 'type' => 'utility' ),
			'columns-container' => array( 'type' => 'utility' ),
		));

		if ( ! $shortcodes ) {
			return array();
		}


		foreach ( $shortcodes as $shortcode => $atts ) {

			$all_shortcodes[$shortcode] =	array(
				'class' => $shortcode,
				'type'	=> $atts['type']
			);

			// If it's a utlity shortcode, don't add the corresponding first shortcode
			if ( $atts['type'] == 'column' ) {

				$all_shortcodes[$shortcode . '-first'] =	array(
					'class'	=> $shortcode . ' first',
					'type'	=> $atts['type']
				);
			}
		}

		return $all_shortcodes;
	}


	public function shortcodes( $atts, string $content = null, $name ) {

		$atts = shortcode_atts( array(
			'id' 	=> '',
			'class' => '',
			'style'	=> '',
		), $atts );

		// Get array of all shortcode to retrieve additional attributes
		$all_shortcodes = $this->get_shortcodes();

		// Determine the type of shortcode we are working with
		$type  = $all_shortcodes[$name]['type'];

		// Setup the markup and identifier (both filterable)
		$markup     = ( $type == 'utility' ) ? apply_filters( 'gca_utility_markup', 'div' ) : apply_filters( 'gca_column_markup', 'div' );
		$identifier = ( $type == 'utility' ) ? apply_filters( 'gca_utility_identifier_class', 'gca-utility' ) : apply_filters( 'gca_column_identifier_class', 'gca-column' );

		// Setup the id
		$id = sanitize_text_field( $atts['id'] );
		$id = ( $id != '' ) ? ' id="' . esc_attr( $id ) . '"' : '';

		// Setup the classes
		$class         = ' ' . $all_shortcodes[$name]['class'];
		$extra_classes = sanitize_text_field( $atts['class'] );
		$extra_classes = ( $extra_classes != '' ) ? ' ' . $extra_classes : '';
		$class         = ' class="' . esc_attr( $identifier ) . esc_attr( $class ) . esc_attr( $extra_classes ) . '"';

		// Setup the styles
		$style = sanitize_text_field( $atts['style'] );
		$style = ( $style != '' ) ? ' style="' . esc_attr( $style ) . '"' : '';

		// Setup the content
		$content = ( $content ) ? $this->content_strip_autop( $content ) : '';

		// Built output
		$output = '<' . esc_attr( $markup ) . $id . $class . $style . '>' . $content . '</' . esc_attr( $markup ) . '>';

		return $output;
	}


	/**
	 * Strip content of AutoP
	 * Courtesy of Mathew Smith (Genesis Easy Columns)
	 */
	public function content_strip_autop( $content ){
		$content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content );
		$content = do_shortcode( shortcode_unautop( trim( $content ) ) );
		return $content;
	}


	/**
	 * Filters the content to remove any extra paragraph or break tags caused by shortcodes.
	 *
	 * @since 1.0.0
	 *
	 * @param string $content The content entered into each column shortcode
	 * @return string A string of filtered content
	 */
	function shortcode_empty_paragraph_fix( $content ) {
		$array = array(
			'<p>['    => '[',
			']</p>'   => ']',
			']<br />' => ']'
		);
		return strtr( $content, $array );
	}


	/**
	 * Adds additional links to the plugin row meta links
	 *
	 * @since 2.0.0
	 *
	 * @param array $links   Already defined meta links
	 * @param string $file   Plugin file path and name being processed
	 * @return array $links  The new array of meta links
	 */
	public function plugin_row_meta( $links, $file ) {

		// If we are not on the correct plugin, abort
		if ( $file != 'genesis-columns-advanced/genesis-columns-advanced.php' ) {
			return $links;
		}

		$docs_link = esc_url( add_query_arg( array(
				'utm_source'   => 'gca',
				'utm_medium'   => 'plugin',
				'utm_campaign' => 'gca_links',
				'utm_content'  => 'plugins-page-link'
			), 'http://www.nickdiego.com/plugins/genesis-columns-advanced' )
		);

		$new_links = array(
			'<a href="' . $docs_link . '" target="_blank">' . esc_html__( 'Documentation', 'genesis-columns-advanced' ) . '</a>',
		);

		$links = array_merge( $links, $new_links );

		return $links;
	}

}

new Genesis_Columns_Advanced();
