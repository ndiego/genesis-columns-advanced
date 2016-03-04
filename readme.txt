=== Genesis Columns Advanced ===
Contributors: ndiego, outermostdesign
Donate Link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=D2LLR72CD82JJ
Tags: columns, shortcode, genesis, Genesis Framework, genesiswp, TinyMCE, admin
Requires at least: 3.6
Tested up to: 4.4.2
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Generates shortcodes for all 35 possible column layouts when using Genesis column classes.

== Description ==

This plugin generates shortcodes for every column configuration available with the column classes provided by the Genesis Framework by [StudioPress](http://www.studiopress.com). Shortcodes are easily added using a custom button in your Wordpress editor.

= Plugin Highlights =
* **New** All shortcodes now support the "class" attribute
* **New** A column container utility shortcode has been added, see the FAQ for more info
* 35 different responsive column configurations available
* Includes two utility shortcodes to assist with layout
* Only adds one button to your Wordpress editor
* Custom button design integrates seamlessly with the core Wordpress aesthetic
* Developed for Genesis Framework users but usable by all! (See note on Installation page)

If you have questions or would like to request additional features, such as additional utility shortcodes, please let me know in the plugin support forum.

**Please Note:** This plugin was not developed by Studiopress, the makers of Genesis, and we have no affiliation with the company. We just love the Framework and like building useful tools for Genesis users. 

= Support This Plugin = 

There are a few ways you can help support the development of this plugin:

1. If you spot an error or bug, please let us know in the support forums. The issue will be diagnosed an a new release push out as soon as possible.
1. [Donate](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=D2LLR72CD82JJ). Time is money, and contributions from users like you really help us dedicate more hours to the continual development and support of this plugin.


== Installation ==

1. You have a couple options:
	* Go to Plugins->Add New and search for "Genesis Columns Advanced”. Once found, click "Install".
	* Download the folder from Wordpress.org and zip the folder. Then upload via Plugins->Add New->Upload.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. From the ‘Plugins’ page, head to a post/page and check out the new button in your editor.
4. If you have any implementation questions, please post in the plugin support forum.

**Please Note:** This plugin was designed for Genesis Framework users. Genesis is a premium product by [StudioPress](http://www.studiopress.com). However, if you are a non-Genesis user, this plugin will still activate. A special stylesheet (gca-optional-styles.css) will be applied to the frontend of your site so that you can generate columns too! 

== Frequently Asked Questions ==

= Why is there no option for five even columns, or columns broken down by fifths? =

This was a conscious decision in order for the plugin to stay inline with the column classes offered by the Genesis Framework. The informational page on Genesis’s column classes can be found on [Studiopress.com](http://my.studiopress.com/tutorials/content-column-classes/). As of Genesis v2.1.2, there unfortunately is no option for fifths. If this changes in the future, I will update this plugin. 

= What are the available shortcodes that this plugin generates = 

**Main Column Shortcodes**

The “first” shortcodes are used for the first column in a row of columns.

* [one-half-first] …Column Content… [/one-half-first]
* [one-half] …Column Content… [/one-half]
* [one-third-first] …Column Content… [/one-third-first]
* [one-third] …Column Content…[ /one-third]
* [one-fourth-first] …Column Content… [/one-fourth-first]
* [one-fourth] …Column Content… [/one-fourth]
* [one-sixth-first] …Column Content… [/one-sixth-first]
* [one-sixth] …Column Content… [/one-sixth]

**Utility Shortcodes**

* [clearfix] - Adds a clearfix
* [vertical-spacer] – Adds a clear as well as some vertical separation
* [column-container] …Column Content… [/column-container] – Useful for wrapping column rows

**Class Attribute**

All shortcodes accept a "class" attribute. This allows you to add classes to any column or utility function. Classes should be space separated. See below for usage examples:

* [one-half-first class="col1"] …Column Content… [/one-half-first]
* [clearfix class="class1 class2"]
* [column-container class="wrapper-class"] …Column Content… [/column-container]

Have an idea for another utility shortcode? Let us know in the support forums. 

== Screenshots ==

1. A screenshot of columns button in editor and available options. 
2. A screenshot of Advanced Options popup were you can select from all 35 column configurations.
3. A screenshot of the frontend featuring a two column and six column layout with all columns evenly spaced.
4. A screenshot of the frontend featuring an advanced three column and an advanced two column layout. 

== Changelog ==

= 1.1.0 =
* Added class attributes to all shortcodes
* Added the column container utility shortcode

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

