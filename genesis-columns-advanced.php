<?php
/**
 * Plugin Name: Genesis Columns Advanced
 * Plugin URI: http://www.nickdiego.com/genesis-columns-advanced
 * Description: Generates shortcodes for all 37 possible column layouts when using Genesis column classes.
 * Version: 2.0.0
 * Author: Nick Diego
 * Author URI: http://www.nickdiego.com
 * Text Domain: genesis-columns-advanced
 * License: GPLv2
 *
 * Blox is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Blox is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Blox. If not, visit <http://www.gnu.org/licenses/>.
 */

defined( 'WPINC' ) or die;


include_once dirname( __FILE__ ) . '/shortcodes.php';

    
add_action( 'plugins_loaded', 'gca_load_textdomain' );
/**
 * Load the plugin textdomain
 *
 * @since 2.0.0
 */
function gca_load_textdomain() {
	load_plugin_textdomain( 'genesis-columns-advanced', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}


add_action('admin_init', 'gca_init_tinymce_button');
/**
 * Initialize the columns shortcode tinymce button
 *
 * @since 1.0.0
 */
function gca_init_tinymce_button() {

    // Check user permissions
    if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
        return;
    }
    // Check if WYSIWYG is enabled
    if ( 'true' == get_user_option( 'rich_editing' ) ) {
    	add_filter( 'mce_external_languages', 'gca_add_tinymce_translations' );
        add_filter( 'mce_external_plugins', 'gca_add_tinymce_plugin' );
        add_filter( 'mce_buttons', 'gca_register_tinymce_button' );
        add_action( 'admin_print_footer_scripts', 'gca_tinymce_popup', 100 );
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
function gca_add_tinymce_plugin( $plugins ) {
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
function gca_add_tinymce_translations( $locales ) {
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
function gca_register_tinymce_button( $buttons ) {
    array_push( $buttons, 'gca_plugin' );
    return $buttons;
}


/**
 * Add the popup and the popup backdrop to the footer of admin page
 *
 * @since 1.0.0
 */
function gca_tinymce_popup() {
	include dirname( __FILE__ ) . '/tinymce/popup.php';
	exit;
}


add_filter( 'the_content', 'gca_shortcode_empty_paragraph_fix' );
/**
 * Filters the content to remove any extra paragraph or break tags caused by shortcodes.
 *
 * @since 1.0.0
 *
 * @param string $content The content entered into each column shortcode
 * @return string A string of filtered content
 */
function gca_shortcode_empty_paragraph_fix( $content ) {
    $array = array(
        '<p>['    => '[',
        ']</p>'   => ']',
        ']<br />' => ']'
    );
    return strtr( $content, $array );
}


add_action( 'admin_enqueue_scripts', 'gca_admin_scripts_enqueue' );
/**
 * Loads scripts/styles to the admin
 *
 * @since 1.0.0
 */
function gca_admin_scripts_enqueue() {
		
	wp_register_script( 'gca-popup-scripts', plugin_dir_url( __FILE__ ) . 'tinymce/js/popup.js' );
	wp_enqueue_script( 'gca-popup-scripts' );
	
	// Used for adding local blocks via ajax 
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


add_action( 'wp_enqueue_scripts', 'gca_frontend_scripts_enqueue' );
/**
 * Loads the optional stylesheet to the frontend if Genesis is not active
 *
 * @since 1.0.0
 */
function gca_frontend_scripts_enqueue() {

	// Load our optional stylesheet if the Genesis Framework is not activated. This allows us to use GCA without Genesis
	if ( ! function_exists('genesis_pre') ) {
    	wp_enqueue_style( 'gca-optional-styles',  plugin_dir_url( __FILE__ ) . 'css/gca-optional-styles.css' );
    }
}


add_filter( 'plugin_row_meta', 'gca_plugin_row_meta', 10, 2 );
/**
 * Adds additional links to the plugin row meta links
 *
 * @since 2.0.0
 *
 * @param array $links   Already defined meta links
 * @param string $file   Plugin file path and name being processed
 * @return array $links  The new array of meta links
 */
function gca_plugin_row_meta( $links, $file ) {

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
