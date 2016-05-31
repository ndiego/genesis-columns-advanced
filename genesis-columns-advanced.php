<?php
/*
Plugin Name: Genesis Columns Advanced
Plugin URI: http://www.outermostdesign.com
Description: Generates shortcodes for all 35 possible column layouts when using Genesis column classes.
Version: 1.1.0
Author: Nick Diego
Author URI: http://www.outermostdesign.com
Text Domain: genesis-custom-headers
License: GPLv2
*/

/*
Copyright 2016 Nick Diego

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

defined( 'WPINC' ) or die;

include_once dirname( __FILE__ ) . '/shortcodes.php';

add_action('admin_head', 'gca_mce_button');
/**
 * Adds our columns shortcode tinymce button
 */
function gca_mce_button() {
    // Check user permissions
    if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
        return;
    }
    // Check if WYSIWYG is enabled
    if ( 'true' == get_user_option( 'rich_editing' ) ) {
        add_filter( 'mce_external_plugins', 'gca_add_tinymce_plugin' );
        add_filter( 'mce_buttons', 'gca_register_mce_button' );
        add_filter( 'mce_external_languages', 'gca_add_tinymce_translations' );
    }
}

/**
 * Declare script for new button
 */
function gca_add_tinymce_plugin( $plugin_array ) {
    $plugin_array['gca_button'] = plugin_dir_url( __FILE__ ) . 'tinymce/js/plugin.js';
    return $plugin_array;
}

/**
 * Add translations to TinyMCE button and HTML popup
 */
function gca_add_tinymce_translations( $locales ) {
    $locales['gca_button'] = plugin_dir_url( __FILE__ ) . 'tinymce/gca-plugin-translations.php';
    return $locales;
}

/**
 * Register new button in the tinymce editor
 */
function gca_register_mce_button( $buttons ) {
    array_push( $buttons, 'gca_button' );
    return $buttons;
}

add_filter( 'the_content', 'gca_shortcode_empty_paragraph_fix' );
/**
 * Filters the content to remove any extra paragraph or break tags caused by shortcodes.
 */
function gca_shortcode_empty_paragraph_fix( $content ) {
    $array = array(
        '<p>['    => '[',
        ']</p>'   => ']',
        ']<br />' => ']'
    );
    return strtr( $content, $array );
}

add_action( 'wp_ajax_gca_insert_popup', 'gca_insert_popup_form' );
/**
 * Inserts the layout selector form into the tinymce popup via ajax
 */
function gca_insert_popup_form() {
	
	include dirname( __FILE__ ) . '/tinymce/popup.php';
	exit;
}

add_action( 'wp_enqueue_scripts', 'gca_frontend_scripts_enqueue' );
/**
 * Loads scripts to the frontend
 */
function gca_frontend_scripts_enqueue() {

	// Load our optional stylesheet if the Genesis Framework is not activated. This allows us to use GCA without Genesis
	if ( ! function_exists('genesis_pre') ) {
    	wp_enqueue_style( 'gca-optional-styles',  plugin_dir_url( __FILE__ ) . 'css/gca-optional-styles.css' );
    }
}

add_action( 'admin_enqueue_scripts', 'gca_admin_scripts_enqueue' );
/**
 * Loads scripts to the frontend
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


add_action( 'admin_print_footer_scripts', 'gca_popup', 100 );

function gca_popup() {
	include dirname( __FILE__ ) . '/tinymce/popup.php';
	exit;
}
