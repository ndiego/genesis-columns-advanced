<?php

defined( 'WPINC' ) or die;

// Array of all available columns layouts
$all_layouts = array( 
	'two-columns' => array(
		'title' => __( 'Two Columns', 'genesis-columns-advanced' ),
		'layouts' => array(
			'two-column' => array ( 'title' => '1/2 - 1/2', 'image' => 'tinymce/images/layouts/halves.png' ),
			'onethird-twothirds' => array ( 'title' => '1/3 - 2/3', 'image' => 'tinymce/images/layouts/third_twothirds.png' ),
			'twothirds-onethird' => array ( 'title' => '2/3 - 1/3', 'image' => 'tinymce/images/layouts/twothirds_third.png' ),
			'onefourth-threefourths' => array ( 'title' => '1/4 - 3/4', 'image' => 'tinymce/images/layouts/fourth_threefourths.png' ),
			'threefourths-onefourth' => array ( 'title' => '3/4 - 1/4', 'image' => 'tinymce/images/layouts/threefourths_fourth.png' ),
			'onesixth-fivesixths' => array ( 'title' => '1/6 - 5/6', 'image' => 'tinymce/images/layouts/sixth_fivesixths.png' ),
			'fivesixths-onesixth' => array ( 'title' => '5/6 - 1/6', 'image' => 'tinymce/images/layouts/fivesixths_sixth.png' ),
		)
	),
	'three-columns' => array(
		'title' => __( 'Three Columns', 'genesis-columns-advanced' ),
		'layouts' => array(
			'three-column' => array ( 'title' => '1/3 - 1/3 - 1/3', 'image' => 'tinymce/images/layouts/thirds.png' ),
			'onefourth-onefourth-half' => array ( 'title' => '1/4 - 1/4 - 2/4', 'image' => 'tinymce/images/layouts/fourth_fourth_half.png' ),
			'half-onefourth-onefourth' => array ( 'title' => '2/4 - 1/4 - 1/4', 'image' => 'tinymce/images/layouts/half_fourth_fourth.png' ),
			'onefourth-half-onefourth' => array ( 'title' => '1/4 - 2/4 - 1/4', 'image' => 'tinymce/images/layouts/fourth_half_fourth.png' ),
			'onesixth-onesixth-foursixths' => array ( 'title' => '1/6 - 1/6 - 4/6', 'image' => 'tinymce/images/layouts/sixth_sixth_foursixths.png' ),
			'foursixths-onesixth-onesixth' => array ( 'title' => '4/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/foursixths_sixth_sixth.png' ),
			'onesixth-foursixths-onesixth' => array ( 'title' => '1/6 - 4/6 - 1/6', 'image' => 'tinymce/images/layouts/sixth_foursixths_sixth.png' ),
			'onesixth-twosixths-threesixths' => array ( 'title' => '1/6 - 2/6 - 3/6', 'image' => 'tinymce/images/layouts/sixth_twosixths_threesixths.png' ),
			'threesixths-twosixths-onesixth' => array ( 'title' => '3/6 - 2/6 - 1/6', 'image' => 'tinymce/images/layouts/threesixths_twosixths_sixth.png' ),
			'twosixths-onesixth-threesixths' => array ( 'title' => '2/6 - 1/6 - 3/6', 'image' => 'tinymce/images/layouts/twosixths_sixth_threesixths.png' ),
			'threesixths-onesixth-twosixths' => array ( 'title' => '3/6 - 1/6 - 2/6', 'image' => 'tinymce/images/layouts/threesixths_sixth_twosixths.png' ),
			'onesixth-threesixths-twosixths' => array ( 'title' => '1/6 - 3/6 - 2/6', 'image' => 'tinymce/images/layouts/sixth_threesixths_twosixths.png' ),
			'twosixths-threesixths-onesixth' => array ( 'title' => '2/6 - 3/6 - 1/6', 'image' => 'tinymce/images/layouts/twosixths_threesixths_sixth.png' ),
		)
	),
	'four-columns' => array(
		'title' => __( 'Four Columns', 'genesis-columns-advanced' ),
		'layouts' => array(
			'four-column' => array ( 'title' => '1/4 - 1/4 - 1/4 - 1/4', 'image' => 'tinymce/images/layouts/fourths.png' ),
			'onesixth-onesixth-onesixth-threesixths' => array ( 'title' => '1/6 - 1/6 - 1/6 - 3/6', 'image' => 'tinymce/images/layouts/sixth_sixth_sixth_threesixths.png' ),
			'threesixths-onesixth-onesixth-onesixth' => array ( 'title' => '3/6 - 1/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/threesixths_sixth_sixth_sixth.png' ),
			'onesixth-onesixth-threesixths-onesixth' => array ( 'title' => '1/6 - 1/6 - 3/6 - 1/6', 'image' => 'tinymce/images/layouts/sixth_sixth_threesixths_sixth.png' ),
			'onesixth-threesixths-onesixth-onesixth' => array ( 'title' => '1/6 - 3/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/sixth_threesixths_sixth_sixth.png' ),
			'onesixth-onesixth-twosixths-twosixths' => array ( 'title' => '1/6 - 1/6 - 2/6 - 2/6', 'image' => 'tinymce/images/layouts/sixth_sixth_twosixths_twosixths.png' ),
			'twosixths-twosixths-onesixth-onesixth' => array ( 'title' => '2/6 - 2/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/twosixths_twosixths_sixth_sixth.png' ),
			'onesixth-twosixths-onesixth-twosixths' => array ( 'title' => '1/6 - 2/6 - 1/6 - 2/6', 'image' => 'tinymce/images/layouts/sixth_twosixths_sixth_twosixths.png' ),
			'twosixths-onesixth-twosixths-onesixth' => array ( 'title' => '2/6 - 1/6 - 2/6 - 1/6', 'image' => 'tinymce/images/layouts/twosixths_sixth_twosixths_sixth.png' ),
			'onesixth-twosixths-twosixths-onesixth' => array ( 'title' => '1/6 - 2/6 - 2/6 - 1/6', 'image' => 'tinymce/images/layouts/sixth_twosixths_twosixths_sixth.png' ),
			'twosixths-onesixth-onesixth-twosixths' => array ( 'title' => '2/6 - 1/6 - 1/6 - 2/6', 'image' => 'tinymce/images/layouts/twosixths_sixth_sixth_twosixths.png' ),
		)
	),
	'five-columns' => array(
		'title' => __( 'Five Columns', 'genesis-columns-advanced' ),
		'layouts' => array(
			'twosixths-onesixth-onesixth-onesixth-onesixth' => array ( 'title' => '2/6 - 1/6 - 1/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/twosixths_sixth_sixth_sixth_sixth.png' ),
			'onesixth-twosixths-onesixth-onesixth-onesixth' => array ( 'title' => '1/6 - 2/6 - 1/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/sixth_twosixths_sixth_sixth_sixth.png' ),
			'onesixth-onesixth-twosixths-onesixth-onesixth' => array ( 'title' => '1/6 - 1/6 - 2/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/sixth_sixth_twosixths_sixth_sixth.png' ),
			'onesixth-onesixth-onesixth-twosixths-onesixth' => array ( 'title' => '1/6 - 1/6 - 1/6 - 2/6 - 1/6', 'image' => 'tinymce/images/layouts/sixth_sixth_sixth_twosixths_sixth.png' ),
			'onesixth-onesixth-onesixth-onesixth-twosixths' => array ( 'title' => '1/6 - 1/6 - 1/6 - 1/6 - 2/6', 'image' => 'tinymce/images/layouts/sixth_sixth_sixth_sixth_twosixths.png' ),
		)
	),
	'six-columns' => array(
		'title' => __( 'Six Columns', 'genesis-columns-advanced' ),
		'layouts' => array(
			'six-column' => array ( 'title' => '1/6 - 1/6 - 1/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/sixths.png' ),
		)
	),
);

?>
<form id="gca_popup_form" tabindex="-1">
	<div class="gca-popup-wrapper">
		<div class="gca-column-select" >
			<select id="gca_column_select">
				<option value="all"><?php _e( 'All Layouts', 'genesis-columns-advanced' );?></option>
				<option value="two-columns"><?php _e( 'Two Columns', 'genesis-columns-advanced' );?></option>
				<option value="three-columns"><?php _e( 'Three Columns', 'genesis-columns-advanced' );?></option>
				<option value="four-columns"><?php _e( 'Four Columns', 'genesis-columns-advanced' );?></option>
				<option value="five-columns"><?php _e( 'Five Columns', 'genesis-columns-advanced' );?></option>
				<option value="six-columns"><?php _e( 'Six Columns', 'genesis-columns-advanced' );?></option>
			</select>
			<span class="description">
				<?php _e( 'Filter by the number of columns', 'genesis-columns-advanced' );?>
			</span>
			<a href="#" id="gca_toggle_titles"><?php _e( 'Show Titles', 'genesis-columns-advanced' );?></a>
			
		</div>
		<div class="gca-column-layouts">
			<?php
			foreach ( $all_layouts as $column_type => $column_data ) {
				foreach ( $column_data['layouts'] as $layout_id => $layout_data ) {
					echo '<label title="' . $layout_data['title'] . '" class="layout ' . $column_type . '">';
					echo '<img src="' . plugins_url( $layout_data['image'], dirname( __FILE__ ) ) . '" alt="' . $layout_data['title'] . '" title="' . $layout_data['title'] . '"><br>';
					echo '<input type="radio" name="column-layout" id="' . $layout_id . '" value="' . $layout_id . '">';
					echo '<span class="layout-title">'. $layout_data['title'] .'</span>';
					echo '</label>';
				}
			}
			?>
		</div>
	</div>

	<div class="submitbox">
		<div class="button" id="gca_cancel"><?php _e( 'Cancel', 'genesis-columns-advanced' );?></div> 
		<div class="button button-primary" id="gca_insert_layout"><?php _e( 'Insert Selected Layout', 'genesis-columns-advanced' );?></div> 
	</div>
</form>

<?php ?>