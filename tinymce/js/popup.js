// All of the js needed to run the advanced layouts TinyMCE popup
var gca_popup;

( function($) { 

	var editor, selected, layout, output, 
		inputs = {},
		firstColumnText   = gca_localize_scripts.first_column,
		secondColumnText  = gca_localize_scripts.second_column,
		thirdColumnText   = gca_localize_scripts.third_column,
		fourthColumnText  = gca_localize_scripts.fourth_column,
		fifthColumnText   = gca_localize_scripts.fifth_column,
		sixthColumnText   = gca_localize_scripts.sixth_column,
		missingLayout     = gca_localize_scripts.missing_layout,
		hideTitles		  = gca_localize_scripts.hide_titles,
		showTitles		  = gca_localize_scripts.show_titles;

	gca_popup = {
	
		init: function() {
			inputs.wrap     = $( '#gca_popup_wrap' );
			inputs.backdrop = $( '#gca_popup_backdrop' );
			inputs.insert   = $( '#gca_popup_insert' );
			inputs.reset    = $( '#gca_popup_reset' );
			inputs.close    = $( '#gca_popup_close' );
			
			inputs.columnSelect  = $( '#gca_column_select' );
			inputs.toggleTitles  = $( '#gca_toggle_titles' );
			inputs.layoutSelect  = $( '.gca-column-layouts input[type="radio"]' );
			inputs.classes       = $( '.gca-column-classes input' );
			
			// Insert shortcodes
			inputs.insert.click( function( event ) {
				event.preventDefault();
				gca_popup.insert();
			});
			
			// Reset all selection and classes in popup
			inputs.reset.click( function( event ) {
				event.preventDefault();
				gca_popup.reset();
			});
			
			// Close the popup
			inputs.close.add( inputs.backdrop ).add( '#gca_popup_cancel button' ).click( function( event ) {
				event.preventDefault();
				gca_popup.close();
			});
			
			// Toggle different column layouts
			inputs.columnSelect.change( function() {
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
			inputs.toggleTitles.click( function( event ) {
				event.preventDefault();
				
				$( '.layout-title' ).toggleClass( 'show-title' );
				$(this).toggleClass( 'show-title' );

				if ( $(this).hasClass( 'show-title' ) ) {
					$(this).text( hideTitles );
				} else {
					$(this).text( showTitles );
				}
			});
			
			// Generates colored border on selected layout and adds classes
			inputs.layoutSelect.click( function( event ) {
				event.preventDefault();
				
				// Remove selected class from all, then add to the selected layout
				$( '.gca-column-layouts label.layout' ).removeClass( 'selected' );
				$( event.target ).parent( 'label.layout' ).addClass( 'selected' );
				
				// Get all the classes from the selected layout
				var selectedColumnType = $( event.target ).parent( 'label.layout' ).prop( 'class' );
				
				// Reset the class on the gca-column-classes div and add the selected column layout class
				$( '.gca-column-classes' ).prop( 'class', 'gca-column-classes' );
				$( '.gca-column-classes' ).addClass( selectedColumnType ).removeClass( 'layout selected' );
			});
			
			// Make sure custom classes are actually custom classes
			inputs.classes.change( function() {
				var input = $(this).val();
				input = input.replace(/[^\w\-\s]/g, ''); // remove all characters that are not allowed
				input = input.replace(/\s\s+/g, ' '); // trim all excess whitepace
				$(this).val( input );
			});
		},
		
		open: function( editorId ) {
			
			// Use the builtin WP class that prevents background from scrolling when modal is open
			$( document.body ).addClass( 'modal-open' );
		
			if ( editorId ) {
				window.gcaActiveEditor = editorId;
			}

			if ( ! window.gcaActiveEditor ) {
				return;
			}
			
			if ( typeof window.tinymce !== 'undefined' ) {
				// Make sure the link wrapper is the last element in the body,
				// or the inline editor toolbar may show above the backdrop.
				$( document.body ).append( inputs.backdrop, inputs.wrap );
				
				editor = window.tinymce.get( window.gcaActiveEditor );
				
				if ( editor ) {
					selected = editor.selection.getContent();
		
					inputs.wrap.show();
					inputs.backdrop.show();
				}
			}
		},
		
		insert: function() {
		
			var columns, columnIndex, classes, classIndex, text,
				first = '', 
				
			// Reset output
			output = '';
			
			// Get the selected column layout
			layout = $( '.gca-column-layouts label.selected input' ).val();

			if ( layout != null ) {
					
				// Form the column classes array from the values provided
				classes = [ 
					$( '#gca_column_one_class' ).val(),
					$( '#gca_column_two_class' ).val(),
					$( '#gca_column_three_class' ).val(),
					$( '#gca_column_four_class' ).val(),
					$( '#gca_column_five_class' ).val(),
					$( '#gca_column_six_class' ).val(),
				];
			
				classIndex = 0;
			
				for ( classIndex = 0; classIndex < classes.length; ++classIndex ) {
					classes[classIndex] = ( classes[classIndex] != '' ? ( ' class="' + classes[classIndex] + '"' ) : '' );
				}
			
				// Form the column text array
				text = [ firstColumnText, secondColumnText, thirdColumnText, fourthColumnText, fifthColumnText, sixthColumnText ];
				
				// If content was highlighted, use that for the first column's text over default content
				text[0] = ( selected != '' ? selected : text[0] );
				
				// Form the column layout array
				columns = layout.split('_'),
					
				columnIndex = 0;
			
				for ( columnIndex = 0; columnIndex < columns.length; ++columnIndex ) {
				
					first = columnIndex == 0 ? '-first' : '';
				
					output += '[' + columns[columnIndex] + first + classes[columnIndex] + ']' + text[columnIndex] + '[/' + columns[columnIndex] + first + ']<br>';
				}
				
				// Insert shortcodes and close popup
				editor.insertContent( output );
				gca_popup.close();

			} else {
			
				// Throw alert if no layout was selected
				alert( missingLayout );
			}
		},
		
		reset: function() {
			
			// Deselect any selected column layout
			inputs.layoutSelect.parent().removeClass( 'selected' );
			inputs.layoutSelect.prop( 'checked', false );
			
			// Reset the class on the gca-column-classes div
			$( '.gca-column-classes' ).prop( 'class', 'gca-column-classes' );
			
			// Clear all classes
			$( '.gca-column-classes input' ).val( '' );
		},
		
		close: function() {
			
			$( document.body ).removeClass( 'modal-open' );
			
			inputs.wrap.hide();
			inputs.backdrop.hide();
		} 
	}
	
	$( document ).ready( gca_popup.init );
	
})( jQuery );
