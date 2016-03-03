/*
 * Add our columns shortcode Tinymce button
 */
(function() {

	if ( typeof tinymce != 'undefined' ) {
	
		tinymce.PluginManager.add( 'gca_button', function( editor, url ) {
	
			editor.addButton( 'gca_button', {
				type: 'menubutton',
				title: 'Insert Columns',
				image: url + '/images/icon.png',
				menu: [
					{ text: '2 Columns', onclick: function() { editor.insertContent( '[one-half-first]' + ( editor.selection.getContent() != '' ? editor.selection.getContent() : 'Place your content for the first column here.' ) + '[/one-half-first]<br>[one-half]Place your content for the second column here.[/one-half]<br>' ); }},
					{ text: '3 Columns', onclick: function() { editor.insertContent( '[one-third-first]' + ( editor.selection.getContent() != '' ? editor.selection.getContent() : 'Place your content for the first column here.' ) + '[/one-third-first]<br>[one-third]Place your content for the second column here.[/one-third]<br>[one-third]Place your content for the third column here.[/one-third]<br>' ); }},
					{ text: '4 Columns', onclick: function() { editor.insertContent( '[one-fourth-first]' + ( editor.selection.getContent() != '' ? editor.selection.getContent() : 'Place your content for the first column here.' ) + '[/one-fourth-first]<br>[one-fourth]Place your content for the second column here.[/one-fourth]<br>[one-fourth]Place your content for the third column here.[/one-fourth]<br>[one-fourth]Place your content for the fourth column here.[/one-fourth]<br>' ); }},
					{ text: '6 Columns', onclick: function() { editor.insertContent( '[one-sixth-first]' + ( editor.selection.getContent() != '' ? editor.selection.getContent() : 'Place your content for the first column here.' ) + '[/one-sixth-first]<br>[one-sixth]Place your content for the second column here.[/one-sixth]<br>[one-sixth]Place your content for the third column here.[/one-sixth]<br>[one-sixth]Place your content for the fourth column here.[/one-sixth]<br>[one-sixth]Place your content for the fifth column here.[/one-sixth]<br>[one-sixth]Place your content for the sixth column here.[/one-sixth]<br>'); }},
					{ text: 'Advanced Layouts', onclick: function() { 
						editor.windowManager.open({
							title: 'Advanced Column Layouts',
							url: url + '/gca-popup.html', 
							width: 550,
							height: 540,
							inline: 1
						}, {
							selectedContent: editor.selection.getContent(), 
							onInsert: function( layout ) { editor.insertContent( layout ); } 
						});
					}},
					{ text: 'Utilities', menu: [
						{ text: 'Clearfix', onclick: function() { editor.insertContent( '[clearfix]' ); } },
						{ text: 'Vertical Spacer', onclick: function() { editor.insertContent( '[vertical-spacer]' ); } },
						{ text: 'Column Container', onclick: function() { editor.insertContent( '[column-container]' + ( editor.selection.getContent() != '' ? editor.selection.getContent() : 'Place your columns in this container.' ) + '[/column-container]' ); } },
					]}
				]
			}); // end addButton
			
		}); // end PluginManager
	
	};
	
})();
