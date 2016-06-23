<?php 

defined( 'WPINC' ) or die;


// Make sure the _WP_Editors exists, if not, load it
if ( ! class_exists( '_WP_Editors' ) ) {
    require( ABSPATH . WPINC . '/class-wp-editor.php' );
}


/**
 * Setup all of the text needed for the TinyMCE popup
 * Code borrowed heavily from: https://codex.wordpress.org/Plugin_API/Filter_Reference/mce_external_languages
 *
 * @since 2.0.0
 *
 * @return array $translated An array of all translated strings
 */
function gca_translations() {
    $strings = array(
        'insert' 	 		=> __( 'Insert Columns', 'genesis-columns-advanced' ),
        'two_columns' 		=> __( '2 Columns', 'genesis-columns-advanced' ),
        'three_columns' 	=> __( '3 Columns', 'genesis-columns-advanced' ),
        'four_columns' 		=> __( '4 Columns', 'genesis-columns-advanced' ),
        'five_columns' 		=> __( '5 Columns', 'genesis-columns-advanced' ),
        'six_columns' 		=> __( '6 Columns', 'genesis-columns-advanced' ),
        'advanced_layouts'  => __( 'Advanced Layouts', 'genesis-columns-advanced' ),
        'utilities'  		=> __( 'Utilities', 'genesis-columns-advanced' ),
        'clearfix'   		=> __( 'Clearfix', 'genesis-columns-advanced' ),
        'vertical_spacer'   => __( 'Vertical Spacer', 'genesis-columns-advanced' ),
        'columns_container' => __( 'Columns Container', 'genesis-columns-advanced' ),
        'first_column'  	=> __( 'Place your content for the first column here.', 'genesis-columns-advanced' ),
        'second_column' 	=> __( 'Place your content for the second column here.', 'genesis-columns-advanced' ),
        'third_column'  	=> __( 'Place your content for the third column here.', 'genesis-columns-advanced' ), 
        'fourth_column'  	=> __( 'Place your content for the fourth column here.', 'genesis-columns-advanced' ), 
        'fifth_column'  	=> __( 'Place your content for the fifth column here.', 'genesis-columns-advanced' ), 
        'sixth_column'  	=> __( 'Place your content for the sixth column here.', 'genesis-columns-advanced' ), 
        'container_text'  	=> __( 'Place your columns in this container.', 'genesis-columns-advanced' ), 
    );
    
    $locale = _WP_Editors::$mce_locale;
    $translated = 'tinyMCE.addI18n("' . $locale . '.gca_translations", ' . json_encode( $strings ) . ");\n";

    return $translated;
}


// Add our translated strings to the global $strings variable
$strings = gca_translations(); 
