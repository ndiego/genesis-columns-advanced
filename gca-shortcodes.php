<?php

defined( 'WPINC' ) or die;


// Turns Timymce editor auto format off
	
remove_filter( 'the_content', 'wpautop' );
	
	
// Utility Shortcodes
	
function gca_clearfix( $atts ) {
	return '<div class="clearfix"></div>';
}
add_shortcode('clearfix','gca_clearfix');
	
function gca_spacer( $atts ) {
	return '<div class="gca-vertical-spacer" style="clear: both; margin-bottom: 30px"></div>';
}
add_shortcode('vertical-spacer','gca_spacer');	
	
// Column Shortcodes - HALVES
	
function gca_onehalf_first( $atts, $content = null ) {
	return '<div class="one-half first">'.do_shortcode($content).'</div>';
}
add_shortcode("one-half-first","gca_onehalf_first");

function gca_onehalf( $atts, $content = null ) {
	return '<div class="one-half">'.do_shortcode($content).'</div>';
}
add_shortcode('one-half','gca_onehalf');
	
	

// Column Shortcodes - THIRDS

function gca_onethird_first( $atts, $content = null ) {
	return '<div class="one-third first">' .do_shortcode($content). '</div>';
}
add_shortcode("one-third-first","gca_onethird_first");

function gca_onethird( $atts, $content = null ) {
	return '<div class="one-third">' .do_shortcode($content). '</div>';
}
add_shortcode('one-third','gca_onethird');
	
function gca_twothirds_first( $atts, $content = null ) {
	return '<div class="two-thirds first">' .do_shortcode($content). '</div>';
}
add_shortcode("two-thirds-first","gca_twothirds_first");

function gca_twothirds( $atts, $content = null ) {
	return '<div class="two-thirds">' .do_shortcode($content). '</div>';
}
add_shortcode('two-thirds','gca_twothirds');
	
	

// Column Shortcodes - FOURTHS
	
function gca_onefourth_first( $atts, $content = null ) {
	return '<div class="one-fourth first">' .do_shortcode($content). '</div>';
}
add_shortcode("one-fourth-first","gca_onefourth_first");

function gca_onefourth( $atts, $content = null ) {
	return '<div class="one-fourth">' .do_shortcode($content). '</div>';
}
add_shortcode('one-fourth','gca_onefourth');

function gca_twofourths_first( $atts, $content = null ) {
	return '<div class="two-fourths first">' .do_shortcode($content). '</div>';
}
add_shortcode("two-fourth-first","gca_twofourths_first");

function gca_twofourths( $atts, $content = null ) {
	return '<div class="two-fourths">' .do_shortcode($content). '</div>';
}
add_shortcode('two-fourth','gca_twofourths');
	
function gca_threefourths_first( $atts, $content = null ) {
	return '<div class="three-fourths first">' .do_shortcode($content). '</div>';
}
add_shortcode("three-fourths-first","gca_threefourths_first");

function gca_threefourths( $atts, $content = null ) {
	return '<div class="three-fourths">' .do_shortcode($content). '</div>';
}
add_shortcode('three-fourths','gca_threefourths');



// Column Shortcodes - SIXTHS

function gca_onesixth_first( $atts, $content = null ) {
	return '<div class="one-sixth first">' .do_shortcode($content). '</div>';
}
add_shortcode("one-sixth-first","gca_onesixth_first");

function gca_onesixth( $atts, $content = null ) {
	return '<div class="one-sixth">' .do_shortcode($content). '</div>';
}
add_shortcode('one-sixth','gca_onesixth');
	
function gca_twosixths_first( $atts, $content = null ) {
	return '<div class="two-sixths first">' .do_shortcode($content). '</div>';
}
add_shortcode("two-sixths-first","gca_twosixths_first");

function gca_twosixths ( $atts, $content = null ) {
	return '<div class="two-sixths">' .do_shortcode($content). '</div>';
}
add_shortcode("two-sixths","gca_twosixths");
	
function gca_threesixths_first( $atts, $content = null ) {
	return '<div class="three-sixths first">' .do_shortcode($content). '</div>';
}
add_shortcode("three-sixths-first","gca_threesixths_first");

function gca_threesixths( $atts, $content = null ) {
	return '<div class="three-sixths">' .do_shortcode($content). '</div>';
}
add_shortcode("three-sixths","gca_threesixths");
	
function gca_foursixths_first( $atts, $content = null ) {
	return '<div class="four-sixths first">' .do_shortcode($content). '</div>';
}
add_shortcode("four-sixths-first","gca_foursixths_first");
	
function gca_foursixths( $atts, $content = null ) {
	return '<div class="four-sixths">' .do_shortcode($content). '</div>';
}
add_shortcode("four-sixths","gca_foursixths");
	
function gca_fivesixths_first( $atts, $content = null ) {
	return '<div class="five-sixths first">' .do_shortcode($content). '</div>';
}
add_shortcode("five-sixths-first","gca_fivesixths_first");
	
function gca_fivesixths( $atts, $content = null ) {
	return '<div class="five-sixths">' .do_shortcode($content). '</div>';
}
add_shortcode("five-sixths","gca_fivesixths");
	
	
	
// Turns Timymce editor auto format back on
	
add_filter( 'the_content', 'wpautop' , 12);
	
	
	