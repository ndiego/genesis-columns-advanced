<?php

defined( 'WPINC' ) or die;


// Array of all available columns layouts
$gca_all_layouts = array( 
	'two-columns' => array(
		'title' => __( 'Two Columns', 'genesis-columns-advanced' ),
		'layouts' => array(
			'one-half_one-half'			=> array ( 'title' => '1/2 - 1/2', 'image' => 'tinymce/images/layouts/halves.png' ),
			
			'one-third_two-thirds' 		=> array ( 'title' => '1/3 - 2/3', 'image' => 'tinymce/images/layouts/third_twothirds.png' ),
			'two-thirds_one-third' 		=> array ( 'title' => '2/3 - 1/3', 'image' => 'tinymce/images/layouts/twothirds_third.png' ),
			
			'one-fourth_three-fourths' 	=> array ( 'title' => '1/4 - 3/4', 'image' => 'tinymce/images/layouts/fourth_threefourths.png' ),
			'three-fourths_one-fourth' 	=> array ( 'title' => '3/4 - 1/4', 'image' => 'tinymce/images/layouts/threefourths_fourth.png' ),
			
			'one-fifth_four-fifths' 	=> array ( 'title' => '1/5 - 4/5', 'image' => 'tinymce/images/layouts/fifth_fourfifths.png' ),
			'four-fifths_one-fifth' 	=> array ( 'title' => '4/5 - 1/5', 'image' => 'tinymce/images/layouts/fourfifths_fifth.png' ),
			'two-fifths_three-fifths' 	=> array ( 'title' => '2/5 - 3/5', 'image' => 'tinymce/images/layouts/twofifths_threefifths.png' ),
			'three-fifths_two-fifths' 	=> array ( 'title' => '3/5 - 2/5', 'image' => 'tinymce/images/layouts/threefifths_twofifths.png' ),
			
			'one-sixth_five-sixths' 	=> array ( 'title' => '1/6 - 5/6', 'image' => 'tinymce/images/layouts/sixth_fivesixths.png' ),
			'five-sixths_one-sixth' 	=> array ( 'title' => '5/6 - 1/6', 'image' => 'tinymce/images/layouts/fivesixths_sixth.png' ),
		)
	),
	'three-columns' => array(
		'title' => __( 'Three Columns', 'genesis-columns-advanced' ),
		'layouts' => array(
			'one-third_one-third_one-third' 	=> array ( 'title' => '1/3 - 1/3 - 1/3', 'image' => 'tinymce/images/layouts/thirds.png' ),
			
			'one-fourth_one-fourth_two-fourths' => array ( 'title' => '1/4 - 1/4 - 2/4', 'image' => 'tinymce/images/layouts/fourth_fourth_half.png' ),
			'two-fourths_one-fourth_one-fourth' => array ( 'title' => '2/4 - 1/4 - 1/4', 'image' => 'tinymce/images/layouts/half_fourth_fourth.png' ),
			'one-fourth_two-fourths_one-fourth' => array ( 'title' => '1/4 - 2/4 - 1/4', 'image' => 'tinymce/images/layouts/fourth_half_fourth.png' ),
			
			'one-fifth_one-fifth_three-fifths'  => array ( 'title' => '1/5 - 1/5 - 3/5', 'image' => 'tinymce/images/layouts/fifth_fifth_threefifths.png' ),
			'three-fifths_one-fifth_one-fifth'  => array ( 'title' => '3/5 - 1/5 - 1/5', 'image' => 'tinymce/images/layouts/threefifths_fifth_fifth.png' ),
			'one-fifth_three-fifths_one-fifth'  => array ( 'title' => '1/5 - 3/5 - 1/5', 'image' => 'tinymce/images/layouts/fifth_threefifths_fifth.png' ),
			'one-fifth_two-fifths_two-fifths'   => array ( 'title' => '1/5 - 2/5 - 2/5', 'image' => 'tinymce/images/layouts/fifth_twofifths_twofifths.png' ),
			'two-fifths_two-fifths_one-fifth'   => array ( 'title' => '2/5 - 2/5 - 1/5', 'image' => 'tinymce/images/layouts/twofifths_twofifths_fifth.png' ),
			'two-fifths_one-fifth_two-fifths'   => array ( 'title' => '2/5 - 1/5 - 2/5', 'image' => 'tinymce/images/layouts/twofifths_fifth_twofifths.png' ),
			
			'one-sixth_one-sixth_four-sixths' 	=> array ( 'title' => '1/6 - 1/6 - 4/6', 'image' => 'tinymce/images/layouts/sixth_sixth_foursixths.png' ),
			'four-sixths_one-sixth_one-sixth' 	=> array ( 'title' => '4/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/foursixths_sixth_sixth.png' ),
			'one-sixth_four-sixths_one-sixth' 	=> array ( 'title' => '1/6 - 4/6 - 1/6', 'image' => 'tinymce/images/layouts/sixth_foursixths_sixth.png' ),
			'one-sixth_two-sixths_three-sixths' => array ( 'title' => '1/6 - 2/6 - 3/6', 'image' => 'tinymce/images/layouts/sixth_twosixths_threesixths.png' ),
			'three-sixths_two-sixths_one-sixth' => array ( 'title' => '3/6 - 2/6 - 1/6', 'image' => 'tinymce/images/layouts/threesixths_twosixths_sixth.png' ),
			'two-sixths_one-sixth_three-sixths' => array ( 'title' => '2/6 - 1/6 - 3/6', 'image' => 'tinymce/images/layouts/twosixths_sixth_threesixths.png' ),
			'three-sixths_one-sixth_two-sixths' => array ( 'title' => '3/6 - 1/6 - 2/6', 'image' => 'tinymce/images/layouts/threesixths_sixth_twosixths.png' ),
			'one-sixth_three-sixths_two-sixths' => array ( 'title' => '1/6 - 3/6 - 2/6', 'image' => 'tinymce/images/layouts/sixth_threesixths_twosixths.png' ),
			'two-sixths_three-sixths_one-sixth' => array ( 'title' => '2/6 - 3/6 - 1/6', 'image' => 'tinymce/images/layouts/twosixths_threesixths_sixth.png' ),
		)
	),
	'four-columns' => array(
		'title' => __( 'Four Columns', 'genesis-columns-advanced' ),
		'layouts' => array(
			'one-fourth_one-fourth_one-fourth_one-fourth'	=> array ( 'title' => '1/4 - 1/4 - 1/4 - 1/4', 'image' => 'tinymce/images/layouts/fourths.png' ),
			
			'one-fifth_one-fifth_one-fifth_two-fifths'  	=> array ( 'title' => '1/5 - 1/5 - 1/5 - 2/5', 'image' => 'tinymce/images/layouts/fifth_fifth_fifth_twofifths.png' ),
			'one-fifth_one-fifth_two-fifths_one-fifth'  	=> array ( 'title' => '1/5 - 1/5 - 2/5 - 1/5', 'image' => 'tinymce/images/layouts/fifth_fifth_twofifths_fifth.png' ),
			'one-fifth_two-fifths_one-fifth_one-fifth'  	=> array ( 'title' => '1/5 - 2/5 - 1/5 - 1/5', 'image' => 'tinymce/images/layouts/fifth_twofifths_fifth_fifth.png' ),
			'two-fifths_one-fifth_one-fifth_one-fifth'  	=> array ( 'title' => '2/5 - 1/5 - 1/5 - 1/5', 'image' => 'tinymce/images/layouts/twofifths_fifth_fifth_fifth.png' ),
			
			'one-sixth_one-sixth_one-sixth_three-sixths' 	=> array ( 'title' => '1/6 - 1/6 - 1/6 - 3/6', 'image' => 'tinymce/images/layouts/sixth_sixth_sixth_threesixths.png' ),
			'three-sixths_one-sixth_one-sixth_one-sixth' 	=> array ( 'title' => '3/6 - 1/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/threesixths_sixth_sixth_sixth.png' ),
			'one-sixth_one-sixth_three-sixths_one-sixth' 	=> array ( 'title' => '1/6 - 1/6 - 3/6 - 1/6', 'image' => 'tinymce/images/layouts/sixth_sixth_threesixths_sixth.png' ),
			'one-sixth_three-sixths_one-sixth_one-sixth' 	=> array ( 'title' => '1/6 - 3/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/sixth_threesixths_sixth_sixth.png' ),
			'one-sixth_one-sixth_two-sixths_two-sixths' 	=> array ( 'title' => '1/6 - 1/6 - 2/6 - 2/6', 'image' => 'tinymce/images/layouts/sixth_sixth_twosixths_twosixths.png' ),
			'two-sixths_two-sixths_one-sixth_one-sixth' 	=> array ( 'title' => '2/6 - 2/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/twosixths_twosixths_sixth_sixth.png' ),
			'one-sixth_two-sixths_one-sixth_two-sixths' 	=> array ( 'title' => '1/6 - 2/6 - 1/6 - 2/6', 'image' => 'tinymce/images/layouts/sixth_twosixths_sixth_twosixths.png' ),
			'two-sixths_one-sixth_two-sixths_one-sixth' 	=> array ( 'title' => '2/6 - 1/6 - 2/6 - 1/6', 'image' => 'tinymce/images/layouts/twosixths_sixth_twosixths_sixth.png' ),
			'one-sixth_two-sixths_two-sixths_one-sixth' 	=> array ( 'title' => '1/6 - 2/6 - 2/6 - 1/6', 'image' => 'tinymce/images/layouts/sixth_twosixths_twosixths_sixth.png' ),
			'two-sixths_one-sixth_one-sixth_two-sixths' 	=> array ( 'title' => '2/6 - 1/6 - 1/6 - 2/6', 'image' => 'tinymce/images/layouts/twosixths_sixth_sixth_twosixths.png' ),
		)
	),
	'five-columns' => array(
		'title' => __( 'Five Columns', 'genesis-columns-advanced' ),
		'layouts' => array(
			'one-fifth_one-fifth_one-fifth_one-fifth_one-fifth'  => array ( 'title' => '1/5 - 1/5 - 1/5 - 1/5 - 1/5', 'image' => 'tinymce/images/layouts/fifths.png' ),

			'two-sixths_one-sixth_one-sixth_one-sixth_one-sixth' => array ( 'title' => '2/6 - 1/6 - 1/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/twosixths_sixth_sixth_sixth_sixth.png' ),
			'one-sixth_two-sixths_one-sixth_one-sixth_one-sixth' => array ( 'title' => '1/6 - 2/6 - 1/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/sixth_twosixths_sixth_sixth_sixth.png' ),
			'one-sixth_one-sixth_two-sixths_one-sixth_one-sixth' => array ( 'title' => '1/6 - 1/6 - 2/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/sixth_sixth_twosixths_sixth_sixth.png' ),
			'one-sixth_one-sixth_one-sixth_two-sixths_one-sixth' => array ( 'title' => '1/6 - 1/6 - 1/6 - 2/6 - 1/6', 'image' => 'tinymce/images/layouts/sixth_sixth_sixth_twosixths_sixth.png' ),
			'one-sixth_one-sixth_one-sixth_one-sixth_two-sixths' => array ( 'title' => '1/6 - 1/6 - 1/6 - 1/6 - 2/6', 'image' => 'tinymce/images/layouts/sixth_sixth_sixth_sixth_twosixths.png' ),
		)
	),
	'six-columns' => array(
		'title' => __( 'Six Columns', 'genesis-columns-advanced' ),
		'layouts' => array(
			'one-sixth_one-sixth_one-sixth_one-sixth_one-sixth_one-sixth' => array ( 'title' => '1/6 - 1/6 - 1/6 - 1/6 - 1/6', 'image' => 'tinymce/images/layouts/sixths.png' ),
		)
	),
);
?>
<div id="gca_popup_backdrop" style="display: none"></div>
<div id="gca_popup_wrap" style="display: none" role="dialog" aria-labelledby="">
	<form id="gca_popup_form" tabindex="-1">
		<h1 id="gca_popup_title"><?php _e( 'Advanced Column Layouts', 'genesis-columns-advanced' ) ?></h1>
		<button type="button" id="gca_popup_close"><span class="screen-reader-text"><?php _e( 'Close', 'genesis-columns-advanced' ); ?></span></button>
		
		<div id="gca_popup_content_wrap">
		
			<div class="gca-column-layouts-container">
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
						<?php _e( 'Filter by the number of columns.', 'genesis-columns-advanced' );?>
					</span>
					<a href="#" id="gca_toggle_titles"><?php _e( 'Show Titles', 'genesis-columns-advanced' );?></a>
			
				</div>
				<div class="gca-column-layouts">
					<?php
					foreach ( $gca_all_layouts as $column_type => $column_data ) {
						foreach ( $column_data['layouts'] as $layout_id => $layout_data ) {
							echo '<label title="' . $layout_data['title'] . '" class="layout ' . $column_type . '">';
							echo '<img src="' . plugins_url( $layout_data['image'], dirname( __FILE__ ) ) . '" alt="' . $layout_data['title'] . '" title="' . $layout_data['title'] . '"><br>';
							echo '<input type="radio" name="gca-column-layout" id="' . $layout_id . '" value="' . $layout_id . '">';
							echo '<span class="layout-title">'. $layout_data['title'] .'</span>';
							echo '</label>';
						}
					}
					?>
				</div>
			</div>
		
			<div class="gca-column-classes-container">
				<span class="description"><?php _e( 'Optionally, add custom CSS classes to each column. Multiple classes must be separated by a space.', 'genesis-columns-advanced' ); ?></span>
				<div class="gca-column-classes">
					<?php
		
					$column_classes = array(
						'gca_column_one_class'   => array( 'title' => __( 'Column One', 'genesis-columns-advanced' ), 'class' => 'column-one' ),
						'gca_column_two_class'   => array( 'title' => __( 'Column Two', 'genesis-columns-advanced' ), 'class' => 'column-two' ),
						'gca_column_three_class' => array( 'title' => __( 'Column Three', 'genesis-columns-advanced' ), 'class' => 'column-three' ),
						'gca_column_four_class'  => array( 'title' => __( 'Column Four', 'genesis-columns-advanced' ), 'class' => 'column-four' ),
						'gca_column_five_class'  => array( 'title' => __( 'Column Five', 'genesis-columns-advanced' ), 'class' => 'column-five' ),
						'gca_column_six_class'   => array( 'title' => __( 'Column Six', 'genesis-columns-advanced' ), 'class' => 'column-six' )
					);
		
					foreach( $column_classes as $class_id => $atts ) {
						echo '<label class="' . $atts['class'] . '"><span>' . $atts['title'] . '</span><input type="text" id="' . $class_id . '" value=""></label>';
					}
					?>
				</div>
			</div>
		
		</div>
		
		<div id="gca_popup_footer">
			<div id="gca_popup_cancel">
				<button type="button" class="button"><?php _e( 'Cancel', 'genesis-columns-advanced' );?></button>
			</div>
			<div id="gca_popup_reset">
				<button type="button" class="button"><?php _e( 'Reset', 'genesis-columns-advanced' );?></button>
			</div>
			<div id="gca_popup_insert">
				<button type="button" class="button button-primary"><?php _e( 'Insert Selected Layout', 'genesis-columns-advanced' );?></button>
			</div> 
		</div>
	</form>
</div>
<?php ?>