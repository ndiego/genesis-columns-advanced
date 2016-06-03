<?php

defined( 'WPINC' ) or die;


/**
 * Strip content of AutoP
 * Courtesy of Mathew Smith (Genesis Easy Columns)
 */
function gca_strip_autop( $content ){
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace( '#^<\/p>|<p>$#', '', $content );
	return $content;
}

	
/*------------- Utility Shortcodes -------------*/

add_shortcode( 'clearfix', 'gca_clearfix' );
/**
 * Add the clearfix utility shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @return string
 */
function gca_clearfix( $atts ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="clearfix ' . $atts['class'] . '"></div>';
}


add_shortcode( 'vertical-spacer', 'gca_vertical_spacer' );
/**
 * Add the Vertical Spacer utility shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @return string
 */
function gca_vertical_spacer( $atts ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="gca-vertical-spacer ' . $atts['class'] . '" style="clear: both; margin-bottom: 30px"></div>';
}


add_shortcode( 'columns-container', 'gca_columns_container' );
/**
 * Add the Vertical Spacer utility shortcode
 *
 * @since 1.1.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */
function gca_columns_container( $atts, $content = null ) {
    $atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="' . $atts['class'] . '" style="overflow: auto;">' . gca_strip_autop( $content ) . '</div>';
}

	
/*------------- Column Shortcodes - HALVES -------------*/

add_shortcode( 'one-half-first', 'gca_onehalf_first' );
/**
 * Add the one-half-first shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */
function gca_onehalf_first( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="one-half first ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'one-half', 'gca_onehalf' );
/**
 * Add the one-half shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */
function gca_onehalf( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="one-half ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}

	
/*------------- Column Shortcodes - THIRDS -------------*/

add_shortcode( 'one-third-first', 'gca_onethird_first' );
/**
 * Add the one-third-first shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */
function gca_onethird_first( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="one-third first ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'one-third', 'gca_onethird' );
/**
 * Add the one-third shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */
function gca_onethird( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="one-third ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'two-thirds-first', 'gca_twothirds_first' );
/**
 * Add the two-thirds-first shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */
function gca_twothirds_first( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="two-thirds first ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'two-thirds', 'gca_twothirds' );
/**
 * Add the two-thirds shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */
function gca_twothirds( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="two-thirds ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}

	
/*------------- Column Shortcodes - FOURTHS -------------*/

add_shortcode( 'one-fourth-first', 'gca_onefourth_first' );
/**
 * Add the one-fourth-first shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_onefourth_first( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="one-fourth first ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'one-fourth', 'gca_onefourth' );
/**
 * Add the one-fourth shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_onefourth( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="one-fourth ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'two-fourths-first', 'gca_twofourths_first');
/**
 * Add the two-fourths-first shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_twofourths_first( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="two-fourths first ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'two-fourths', 'gca_twofourths' );
/**
 * Add the two-fourths shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_twofourths( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="two-fourths ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'three-fourths-first', 'gca_threefourths_first' );	
/**
 * Add the three-fourths-first shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_threefourths_first( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="three-fourths first ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'three-fourths', 'gca_threefourths' );
/**
 * Add the three-fourths shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_threefourths( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="three-fourths ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


/*------------- Column Shortcodes - SIXTHS -------------*/

add_shortcode( 'one-sixth-first', 'gca_onesixth_first' );
/**
 * Add the one-sixth-first shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_onesixth_first( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="one-sixth first ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'one-sixth', 'gca_onesixth' );
/**
 * Add the one-sixth shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_onesixth( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="one-sixth ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'two-sixths-first', 'gca_twosixths_first' );
/**
 * Add the two-sixths-first shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_twosixths_first( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="two-sixths first ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'two-sixths', 'gca_twosixths' );
/**
 * Add the two-sixths shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_twosixths ( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="two-sixths ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'three-sixths-first', 'gca_threesixths_first' );
/**
 * Add the three-sixths-first shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_threesixths_first( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="three-sixths first ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'three-sixths', 'gca_threesixths' );
/**
 * Add the three-sixths shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_threesixths( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="three-sixths ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'four-sixths-first', 'gca_foursixths_first' );
/**
 * Add the four-sixths-first shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_foursixths_first( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="four-sixths first ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'four-sixths', 'gca_foursixths' );
/**
 * Add the three-sixths shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_foursixths( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="four-sixths ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'five-sixths-first', 'gca_fivesixths_first' );
/**
 * Add the five-sixths-first shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_fivesixths_first( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="five-sixths first ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}


add_shortcode( 'five-sixths', 'gca_fivesixths' );
/**
 * Add the five-sixths shortcode
 *
 * @since 1.0.0
 *
 * @param array $atts Array of all shortcode attributes, only truly accepts "class"
 * @param string $content This is the content of the column, defualts to none
 * @return string
 */	
function gca_fivesixths( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'class' => '' ), $atts );
	return '<div class="five-sixths ' . $atts['class'] . '">' . gca_strip_autop( $content ) . '</div>';
}
