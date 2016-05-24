
jQuery(document).ready(function($){
	

	// Insert the shortcodes of the selected layout on button click
	$( document ).on( 'click', '#gca_insert_layout', function() {

		// Get the selected content, if there is any
		var selectedContent = top.tinymce.activeEditor.windowManager.getParams().selectedContent;
		
		// Set up variable to contain our layout input value
		var column_layout = $( 'input:radio[name=column-layout]:checked' ).val();
 
		// Set up output variable
		var output = '';
		
		var first_column  = ( selecvtedContent != '' ? selectedContent : 'Place your content for the first column here.' );
		var second_column = 'Place your content for the second column here.';
		var third_column  = 'Place your content for the third column here.';
		var fourth_column = 'Place your content for the fourth column here.';
		var fifth_column  = 'Place your content for the fifth column here.';
		var sixth_column  = 'Place your content for the sixth column here.';

		switch ( column_layout ) {

			// Output for general column configurations	
			case 'two-column':
				output += '[one-half-first]' + first_column + '[/one-half-first]<br>[one-half]' + second_column + '[/one-half]';
				break;
			case 'three-column':	
				output += '[one-third-first]' + first_column + '[/one-third-first]<br>[one-third]' + second_column + '[/one-third]<br>[one-third]' + third_column + '[/one-third]';
				break;
			case 'four-column':
				output += '[one-fourth-first]' + first_column + '[/one-fourth-first]<br>[one-fourth]' + second_column + '[/one-fourth]<br>[one-fourth]' + third_column + '[/one-fourth]<br>[one-fourth]' + fourth_column + '[/one-fourth]';
				break;
			case 'six-column':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[one-sixth]' + third_column + '[/one-sixth]<br>[one-sixth]' + fourth_column + '[/one-sixth]<br>[one-sixth]' + fifth_column + '[/one-sixth]<br>[one-sixth]' + sixth_column + '[/one-sixth]';
				break;

			// Output for advanced Two-Column configurations
			case 'twothirds-onethird':
				output += '[two-thirds-first]' + first_column + '[/two-thirds-first]<br>[one-third]' + second_column + '[/one-third]';
				break;
			case 'onethird-twothirds':
				output += '[one-third-first]' + first_column + '[/one-third-first]<br>[two-thirds]' + second_column + '[/two-thirds]';
				break;
			case 'onefourth-threefourths':
				output += '[one-fourth-first]' + first_column + '[/one-fourth-first]<br>[three-fourths]' + second_column + '[/three-fourths]';
				break;
			case 'threefourths-onefourth':
				output += '[three-fourths-first]' + first_column + '[/three-fourths-first]<br>[one-fourth]' + second_column + '[/one-fourth]';
				break;
			case 'onesixth-fivesixths':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[five-sixths]' + second_column + '[/five-sixths]';
				break;
			case 'fivesixths-onesixth':
				output += '[five-sixths-first]' + first_column + '[/five-sixths-first]<br>[one-sixth]' + second_column + '[/one-sixth]';
				break;

			// Output for advanced Three-Column configurations
			case 'onefourth-onefourth-half':
				output += '[one-fourth-first]' + first_column + '[/one-fourth-first]<br>[one-fourth]' + second_column + '[/one-fourth]<br>[two-fourths]' + third_column + '[/two-fourths]';
				break;
			case 'half-onefourth-onefourth':
				output += '[two-fourths-first]' + first_column + '[/two-fourths-first]<br>[one-fourth]' + second_column + '[/one-fourth]<br>[one-fourth]' + third_column + '[/one-fourth]';
				break;
			case 'onefourth-half-onefourth':
				output += '[one-fourth-first]' + first_column + '[/one-fourth-first]<br>[two-fourths]' + second_column + '[/two-fourths]<br>[one-fourth]' + third_column + '[/one-fourth]';
				break;
			case 'onesixth-onesixth-foursixths':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[four-sixths]' + third_column + '[/four-sixths]';
				break;
			case 'foursixths-onesixth-onesixth':
				output += '[four-sixths-first]' + first_column + '[/four-sixths-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[one-sixth]' + third_column + '[/one-sixth]';
				break;
			case 'onesixth-foursixths-onesixth':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[four-sixths]' + second_column + '[/four-sixths]<br>[one-sixth]' + third_column + '[/one-sixth]';
				break;
			case 'onesixth-twosixths-threesixths':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[two-sixths]' + second_column + '[/two-sixths]<br>[three-sixths]' + third_column + '[/three-sixths]';
				break;
			case 'threesixths-twosixths-onesixth':
				output += '[three-sixths-first]' + first_column + '[/three-sixths-first]<br>[two-sixths]' + second_column + '[/two-sixths]<br>[one-sixth]' + third_column + '[/one-sixth]';
				break;
			case 'twosixths-onesixth-threesixths':
				output += '[two-sixths-first]' + first_column + '[/two-sixths-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[three-sixths]' + third_column + '[/three-sixths]';
				break;
			case 'threesixths-onesixth-twosixths':
				output += '[three-sixths-first]' + first_column + '[/three-sixths-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[two-sixths]' + third_column + '[/two-sixths]';
				break;
			case 'onesixth-threesixths-twosixths':
				output += '[one-sixths-first]' + first_column + '[/one-sixths-first]<br>[three-sixth]' + second_column + '[/three-sixth]<br>[two-sixths]' + third_column + '[/two-sixths]';
				break;
			case 'twosixths-onesixth-onesixth':
				output += '[two-sixths-first]' + first_column + '[/two-sixths-first]<br>[three-sixth]' + second_column + '[/three-sixth]<br>[one-sixths]' + third_column + '[/one-sixths]';
				break;

			// Output for advanced Four-Column configurations		
			case 'onesixth-onesixth-onesixth-threesixths':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[one-sixth]' + third_column + '[/one-sixth]<br>[three-sixths]' + fourth_column + '[/three-sixths]';
				break;
			case 'threesixths-onesixth-onesixth-onesixth':
				output += '[three-sixths-first]' + first_column + '[/three-sixths-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[one-sixth]' + third_column + '[/one-sixth]<br>[one-sixth]' + fourth_column + '[/one-sixth]';
				break;
			case 'onesixth-threesixths-onesixth-onesixth':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[three-sixths]' + second_column + '[/three-sixths]<br>[one-sixth]' + third_column + '[/one-sixth]<br>[one-sixth]' + fourth_column + '[/one-sixth]';
				break;
			case 'onesixth-onesixth-threesixths-onesixth':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[three-sixths]' + third_column + '[/three-sixths]<br>[one-sixth]' + fourth_column + '[/one-sixth]';
				break;
			case 'onesixth-onesixth-twosixths-twosixths':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[two-sixths]' + third_column + '[/two-sixths]<br>[two-sixths]' + fourth_column + '[/two-sixths]';
				break;
			case 'twosixths-twosixths-onesixth-onesixth':
				output += '[two-sixths-first]' + first_column + '[/two-sixths-first]<br>[two-sixths]' + second_column + '[/two-sixths]<br>[one-sixth]' + third_column + '[/one-sixth]<br>[one-sixth]' + fourth_column + '[/one-sixth]';
				break;
			case 'onesixth-twosixths-onesixth-twosixths':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[two-sixths]' + second_column + '[/two-sixths]<br>[one-sixth]' + third_column + '[/one-sixth]<br>[two-sixths]' + fourth_column + '[/two-sixths]';
				break;	
			case 'twosixths-onesixth-twosixths-onesixth':
				output += '[two-sixths-first]' + first_column + '[/two-sixths-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[two-sixths]' + third_column + '[/two-sixths]<br>[one-sixth]' + fourth_column + '[/one-sixth]';
				break;	
			case 'onesixth-twosixths-twosixths-onesixth':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[two-sixths]' + second_column + '[/two-sixths]<br>[two-sixths]' + third_column + '[/two-sixths]<br>[one-sixth]' + fourth_column + '[/one-sixth]';
				break;
			case 'twosixths-onesixth-onesixth-twosixths':
				output += '[two-sixths-first]' + first_column + '[/two-sixths-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[one-sixth]' + third_column + '[/one-sixth]<br>[two-sixths]' + fourth_column + '[/two-sixths]';
				break;

			// Output for advanced Five-Column configurations
			case 'onesixth-onesixth-onesixth-onesixth-twosixths':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[one-sixth]' + third_column + '[/one-sixth]<br>[one-sixth]' + fourth_column + '[/one-sixth]<br>[two-sixths]' + fifth_column + '[/two-sixths]';
				break;
			case 'onesixth-onesixth-onesixth-twosixths-onesixth':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[one-sixth]' + third_column + '[/one-sixth]<br>[two-sixths]' + fourth_column + '[/two-sixths]<br>[one-sixth]' + fifth_column + '[/one-sixth]';
				break;
			case 'onesixth-onesixth-twosixths-onesixth-onesixth':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[two-sixths]' + third_column + '[/two-sixths]<br>[one-sixth]' + fourth_column + '[/one-sixth]<br>[one-sixth]' + fifth_column + '[/one-sixth]';
				break;
			case 'onesixth-twosixths-onesixth-onesixth-onesixth':
				output += '[one-sixth-first]' + first_column + '[/one-sixth-first]<br>[two-sixths]' + second_column + '[/two-sixths]<br>[one-sixth]' + third_column + '[/one-sixth]<br>[one-sixth]' + fourth_column + '[/one-sixth]<br>[one-sixth]' + fifth_column + '[/one-sixth]';
				break;
			case 'twosixths-onesixth-onesixth-onesixth-onesixth':
				output += '[two-sixths-first]' + first_column + '[/two-sixths-first]<br>[one-sixth]' + second_column + '[/one-sixth]<br>[one-sixth]' + third_column + '[/one-sixth]<br>[one-sixth]' + fourth_column + '[/one-sixth]<br>[one-sixth]' + fifth_column + '[/one-sixth]';
				break;

			default:
				output += 'error';
		
		} //end switch
		
		// If a layout has been selected, do stuff 
		if ( output != 'error' ) {
			// Insert the column selection into tinymce
			top.tinymce.activeEditor.windowManager.getParams().onInsert( output );
	
			// Close the window once we have added the output to tinymce
			top.tinymce.activeEditor.windowManager.close();
		}
	});	


	// Close the popup if the cancel button is clicked
	$( document ).on( 'click', '#gca_cancel', function() {
		top.tinymce.activeEditor.windowManager.close();	
	});
	
	
	// Generates colored border on selected layout
	$( document ).on( 'click', ".gca-column-layouts input[type='radio']", function() {
		$( '.gca-column-layouts label.layout' ).removeClass( 'selected' );
		$( event.target ).parent( 'label.layout' ).addClass( 'selected' );
	});
	
	
	// Toggle different column layouts
	$(document).on( 'change', '#gca_column_select', function(){
	
		var layouts = $(this).parent().siblings( '.gca-column-layouts' );
	
		if ( $(this).val() == 'all' ) {
			layouts.children().show();
		} else {
			layouts.children().hide();
		
			if ( $(this).val() == 'two-columns' ) {
				layouts.children( '.two-columns' ).show();
			} else if ( $(this).val() == 'three-columns' ) {
				layouts.children( '.three-columns' ).show();
			} else if ( $(this).val() == 'four-columns' ) {
				layouts.children( '.four-columns' ).show();
			} else if ( $(this).val() == 'five-columns' ) {
				layouts.children( '.five-columns' ).show();
			} else if ( $(this).val() == 'six-columns' ) {
				layouts.children( '.six-columns' ).show();
			} 
		}
	});


	// Toggle the layout titles
	$( document ).on( 'click', "#gca_toggle_titles", function() {
		$( '.layout-title' ).toggleClass( 'show-title' );
		$(this).toggleClass( 'show-title' );
		
		if ( $(this).hasClass( 'show-title' ) ) {
			$(this).text( 'Hide Titles' );
		} else {
			$(this).text( 'Show Titles' );
		}
	});

	
});