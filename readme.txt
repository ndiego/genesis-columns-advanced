=== Genesis Columns Advanced ===
Contributors: ndiego, outermostdesign
Donate Link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=D2LLR72CD82JJ
Tags: columns, shortcode, genesis, Genesis Framework, genesiswp, TinyMCE, admin
Requires at least: 3.6
Tested up to: 4.5
Stable tag: 2.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds shortcodes to easily create up to 42 different columned layouts.

== Description ==

This plugin was originally designed to generate shortcodes for every column configuration available with the column classes provided by the [Genesis Framework](http://www.studiopress.com), hence the name. We are pleased to announce that as of version 2.0, the plugin is completely standalone and does not require Genesis. The plugin now loads its own CSS styles, which can be disabled if you desire. See the FAQ for more details. By moving away from Genesis, we have been able to add new features, such as the inclusion of fifths, and it opens the door to more enhancements in the future!

Shortcodes are easily added using a custom button in your Wordpress editor. They can also be added manually if you so choose. See the FAQ for more details. Check out the video below for a short demo on the plugin.

https://www.youtube.com/watch?v=ortnpInn_YE

= Plugin Highlights =
* **New** Version 2.0 brings massive UI and UX improvements
* **New** Plugin is now fully translatable, .pot file included
* **New** Plugin now loads its own CSS column classes and does not require Genesis
* **New** Plugin now includes fifths so you can finally add 5 even columns!
* 42 different responsive column configurations available
* Add custom CSS classes to any column
* Includes three utility shortcodes to assist with layout, see the FAQ for more info
* Only adds one button to your Wordpress editor
* No plugin settings to configure
* Custom button and TinyMCE popup design integrates seamlessly with the core Wordpress aesthetic

If you have questions or would like to request additional features, such as additional utility shortcodes, please let me know in the plugin support forum.
 

= Support This Plugin = 

There are a few ways you can help support the development of this plugin:

1. Rate this plugin! The best show of support is to leave a review.
1. Submit a translation to [info@outermostdesign.com](mailto:info@outermostdesign.com)
1. If you spot an error or bug, please let us know in the support forums. The issue will be diagnosed and a new release pushed out as soon as possible.
1. [Donate](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=D2LLR72CD82JJ). Time is money, and contributions from users like you really help us dedicate more hours to the continual development and support of this plugin.


== Installation ==

1. You have a couple options:
	* Go to Plugins->Add New and search for "Genesis Columns Advanced”. Once found, click "Install".
	* Download the folder from Wordpress.org and zip the folder. Then upload via Plugins->Add New->Upload.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. From the 'Plugins' page, head to a post/page and check out the new button in your editor.
4. If you have any implementation questions, please post in the plugin support forum.

== Frequently Asked Questions ==

= How do I add columns shortcodes? =

**Standard Method** - The easiest way is to click the "Insert Columns" icon that is added to the top bar of your WordPress editor. This will open a dropdown where you can quickly select a standard column layout. You can also choose "Advanced Layouts" to launch a popup window where you can then choose from any one of the 42 available layouts. Click insert, and the correct shortcodes will be added to your editor's content field. 

**Manual Method** - If you don't want to bother with the popup interface, or want to use the shortcodes outside the editor, you can manually type out the shortcodes. Below is all the available shortcodes that this plugin supports. Note that the "first" shortcodes are used for the first column in a row of columns.

**Main Column Shortcodes**

`
[one-half-first] …Column Content… [/one-half-first]
[one-half] …Column Content… [/one-half]

[one-third-first] …Column Content… [/one-third-first]
[one-third] …Column Content…[ /one-third]
[two-thirds-first] …Column Content… [/two-thirds-first]
[two-thirds] …Column Content…[ /two-thirds]

[one-fourth-first] …Column Content… [/one-fourth-first]
[one-fourth] …Column Content… [/one-fourth]
[two-fourths-first] …Column Content… [/two-fourths-first]
[two-fourths] …Column Content…[ /two-fourths]
[three-fourths-first] …Column Content… [/three-fourths-first]
[three-fourths] …Column Content…[ /three-fourths]

[one-fifth-first] …Column Content… [/one-fifth-first]
[one-fifth] …Column Content…[ /one-fifth]
[two-fifths-first] …Column Content… [/two-fifths-first]
[two-fifths] …Column Content…[ /two-fifths]
[three-fifths-first] …Column Content… [/three-fifths-first]
[three-fifths] …Column Content…[ /three-fifths]
[four-fifths-first] …Column Content… [/four-fifths-first]
[four-fifths] …Column Content…[ /four-fifths]

[one-sixth-first] …Column Content… [/one-sixth-first]
[one-sixth] …Column Content… [/one-sixth]
[two-sixths-first] …Column Content… [/two-sixths-first]
[two-sixths] …Column Content…[ /two-sixths]
[three-sixths-first] …Column Content… [/three-sixths-first]
[three-sixths] …Column Content…[ /three-sixths]
[four-sixths-first] …Column Content… [/four-sixths-first]
[four-sixths] …Column Content…[ /four-sixths]
[five-sixths-first] …Column Content… [/five-sixths-first]
[five-sixths] …Column Content…[ /five-sixths]
`

**Utility Shortcodes**

`
[clearfix] - Adds a clearfix
[vertical-spacer] – Adds a clear as well as some vertical separation
[columns-container] …Column Content… [/columns-container] – Useful for wrapping column rows
`

= Can I add attributes to columns? =

Yes! All column and utility shortcodes currently support three attributes: id, class, and style. Multiple classes can be specified, but they must be space separated and all style requires proper markup. See below for usage examples:

`
[one-half-first id="main_column" class="col1" style="color:red; border: 1px solid #333"] …Column Content… [/one-half-first]
[clearfix class="class1 class2"]
[columns-container class="wrapper-class" style="background-color: green"] …Column Content… [/columns-container]
`

= How do I disable the built-in stylesheet? =
If you are already using a Genesis theme, it is likely that it includes column classes. In which case you might not want to use the built-in styles that come with this plugin. You can easily disable the stylesheet using the filter below. Just add it to your functions.php file. **Note: Genesis themes do not support fifths, so if you disable this plugin's built-in stylesheet, the fifths shortcodes won't do anything.**

`
add_filter( 'gca_load_column_styles', '__return_false' );
`

= Will you be adding more utility shortcodes or additional features? = 
Let us know what you are looking for in the support forums, and we will do our best to make it happen, pending the request is reasonable of course!

== Screenshots ==

1. A screenshot of columns button in editor and available options. 
2. A screenshot of Advanced Options popup where you can select from all 42 column configurations.
3. A screenshot of the frontend featuring a two column and six column layout with all columns evenly spaced.
4. A screenshot of the frontend featuring an advanced three column and an advanced two column layout. 

== Changelog ==

= 2.0.2 (2016-8-14) =
* Added default styling to columns-container shortcode to fix styling bug

= 2.0.1 =
* Fixed bug with missing styles for the vertical-spacer shortcode (Thanks DanaE23!)

= 2.0.0 =
* Complete plugin overhaul to comply with WP standards
* Plugin is now fully translatable
* Plugin is now completely standalone, does not require the Genesis Framework
* Added brand new UI for the TinyMCE popup
* Added fifths
* Added id and style attributes to all shortcodes

= 1.1.0 =
* Added class attributes to all shortcodes
* Added the columns container utility shortcode

= 1.0.4 =
* Updated readme
* Added new banner and icon

= 1.0.3 =
* Fixed bug associated with adding columns on HTTPS websites

= 1.0.2 =
* Fixed bug associated with columns with a width of two-fourths

= 1.0.1 =
* Fixed bug associated with wpautop

= 1.0.0 =
* Initial Release

