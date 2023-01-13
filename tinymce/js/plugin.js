// Add the columns shortcode TinyMCE button
(function() {

	// Make sure tinymce is running
	if ( typeof tinymce != 'undefined' ) {
		
		tinymce.PluginManager.add( 'gca_plugin', function( editor, url ) {
			
			// Get all the text translations
			var insert		  	 = editor.getLang( 'gca_translations.insert' ),
				twoColumns	 	 = editor.getLang( 'gca_translations.two_columns' ),
				threeColumns 	 = editor.getLang( 'gca_translations.three_columns' ),
				fourColumns	  	 = editor.getLang( 'gca_translations.four_columns' ),
				fiveColumns	  	 = editor.getLang( 'gca_translations.five_columns' ),
				sixColumns	 	 = editor.getLang( 'gca_translations.six_columns' ),
				advancedLayouts	 = editor.getLang( 'gca_translations.advanced_layouts' ),
				utilities	 	 = editor.getLang( 'gca_translations.utilities' ),
				clearfix	 	 = editor.getLang( 'gca_translations.clearfix' ),
				verticalSpacer	 = editor.getLang( 'gca_translations.vertical_spacer' ),
				columnsContainer = editor.getLang( 'gca_translations.columns_container' ),
				firstColumn  	 = editor.getLang( 'gca_translations.first_column' ),
				secondColumn 	 = editor.getLang( 'gca_translations.second_column' ),
				thirdColumn  	 = editor.getLang( 'gca_translations.third_column' ),
				fourthColumn 	 = editor.getLang( 'gca_translations.fourth_column' ),
				fifthColumn  	 = editor.getLang( 'gca_translations.fifth_column' ),
				sixthColumn  	 = editor.getLang( 'gca_translations.sixth_column' ),
				containerText    = editor.getLang( 'gca_translations.container_text' );
			
			// Render the columns plugin button
			editor.addButton( 'gca_plugin', {
				type: 'menubutton',
				title: insert,
				image: url + '/../images/icon.png',
				menu: [
					{ text: twoColumns, onclick: function() { editor.insertContent( '[one-half-first]' + ( editor.selection.getContent() != '' ? editor.selection.getContent() : firstColumn ) + '[/one-half-first]<br>[one-half]' + secondColumn + '[/one-half]<br>' ); }},
					{ text: threeColumns, onclick: function() { editor.insertContent( '[one-third-first]' + ( editor.selection.getContent() != '' ? editor.selection.getContent() : firstColumn ) + '[/one-third-first]<br>[one-third]' + secondColumn + '[/one-third]<br>[one-third]' + thirdColumn + '[/one-third]<br>' ); }},
					{ text: fourColumns, onclick: function() { editor.insertContent( '[one-fourth-first]' + ( editor.selection.getContent() != '' ? editor.selection.getContent() : firstColumn ) + '[/one-fourth-first]<br>[one-fourth]' + secondColumn + '[/one-fourth]<br>[one-fourth]' + thirdColumn + '[/one-fourth]<br>[one-fourth]' + fourthColumn + '[/one-fourth]<br>' ); }},
					{ text: fiveColumns, onclick: function() { editor.insertContent( '[one-fifth-first]' + ( editor.selection.getContent() != '' ? editor.selection.getContent() : firstColumn ) + '[/one-fifth-first]<br>[one-fifth]' + secondColumn + '[/one-fifth]<br>[one-fifth]' + thirdColumn + '[/one-fifth]<br>[one-fifth]' + fourthColumn + '[/one-fifth]<br>[one-fifth]' + fifthColumn + '[/one-fifth]<br>'); }},
					{ text: sixColumns, onclick: function() { editor.insertContent( '[one-sixth-first]' + ( editor.selection.getContent() != '' ? editor.selection.getContent() : firstColumn ) + '[/one-sixth-first]<br>[one-sixth]' + secondColumn + '[/one-sixth]<br>[one-sixth]' + thirdColumn + '[/one-sixth]<br>[one-sixth]' + fourthColumn + '[/one-sixth]<br>[one-sixth]' + fifthColumn + '[/one-sixth]<br>[one-sixth]' + sixthColumn + '[/one-sixth]<br>'); }},
					{ text: advancedLayouts, onclick: function() { window.gca_popup.open( editor.id ) } },
					{ text: utilities, menu: [
						{ text: clearfix, onclick: function() { editor.insertContent( '[clearfix]' ); } },
						{ text: verticalSpacer, onclick: function() { editor.insertContent( '[vertical-spacer]' ); } },
						{ text: columnsContainer, onclick: function() { editor.insertContent( '[columns-container class=""]' + ( editor.selection.getContent() != '' ? editor.selection.getContent() : containerText ) + '[/columns-container]' ); } },
					]}
				]
			});
		});
	};	
})();
