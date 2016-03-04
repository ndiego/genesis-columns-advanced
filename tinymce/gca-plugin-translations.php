<?php

// This file is based on wp-includes/js/tinymce/langs/wp-langs.php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( '_WP_Editors' ) ) {
    require( ABSPATH . WPINC . '/class-wp-editor.php' );
}

function gca_create_tinymce_translations() {
    $strings = array(
        'insert' 	 => __( 'Insert Columns', 'genesis-columns-advanced' ),
        'col2-title' => __( '2 Columns', 'genesis-columns-advanced' ),
        'col3-title' => __( '3 Columns', 'genesis-columns-advanced' ),
        'col4-title' => __( '4 Columns', 'genesis-columns-advanced' ),
        'col6-title' => __( '6 Columns', 'genesis-columns-advanced' ),
        'advanced'   => __( 'Advanced Layouts', 'genesis-columns-advanced' ),
        'advanced-title' => __( 'Advanced Column Layouts', 'genesis-columns-advanced' ),
        'utilities'  => __( 'Utilities', 'genesis-columns-advanced' ),
        'clearfix'   => __( 'Clearfix', 'genesis-columns-advanced' ),
        'vertical'   => __( 'Vertical Spacer', 'genesis-columns-advanced' ),
        'container'  => __( 'Column Container', 'genesis-columns-advanced' ),
        'col1-text'  => __( 'Place your content for the first column here.', 'genesis-columns-advanced' ),
        'col2-text'  => __( 'Place your content for the second column here.', 'genesis-columns-advanced' ),
        'col3-text'  => __( 'Place your content for the third column here.', 'genesis-columns-advanced' ), 
        'col4-text'  => __( 'Place your content for the fourth column here.', 'genesis-columns-advanced' ), 
        'col5-text'  => __( 'Place your content for the fifth column here.', 'genesis-columns-advanced' ), 
        'col6-text'  => __( 'Place your content for the sixth column here.', 'genesis-columns-advanced' ), 
        'insert-html'	=> __( 'Select your desired column configuration.', 'genesis-columns-advanced' ), 
        'col2-title-html' => __( 'Two Columns', 'genesis-columns-advanced' ),
        'col3-title-html' => __( 'Three Columns', 'genesis-columns-advanced' ),
        'col4-title-html' => __( 'Four Columns', 'genesis-columns-advanced' ),
        'col5-title-html' => __( 'Five Columns', 'genesis-columns-advanced' ),
        'insert-html' => __( 'Insert Selected Layout', 'genesis-columns-advanced' ),
        'cancel-html' => __( 'Cancel', 'genesis-columns-advanced' ),
    );
    $locale = _WP_Editors::$mce_locale;
    $translated = 'tinyMCE.addI18n( "' . $locale . '", ' . wp_json_encode( $strings ) . " );\n";

    return $translated;
}

$strings = gca_create_tinymce_translations(); 