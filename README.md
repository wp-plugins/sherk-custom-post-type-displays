=== Sherk Custom Post Type Displays ===
Contributors: sherkspear
Donate link: http://www.sherkspear.com/donate/
Tags: widget, shortcode, custom post type , list post type, display post type, custom post types
Requires at least: 3.0.1
Tested up to: 4.2.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html



== Description ==

Display custom post type items available in your choice using widgets and shortcodes.
From number of items, its order and elements to display. It's just too good to have that availability to add list of post types anywhere in your website.

You can email me directly for any plugin request or personal modification such as styles and templates at <a mailto="contact@sherkspear.com">contact@sherkspear.com</a> or contact me at <a href="http://sherkspear.com/contact">http://sherkspear.com/contact</a>


Plugin URI: <a href="http://www.sherkspear.com/portfolio-item/sherk-cptdisplays-wordpress-plugin/">http://www.sherkspear.com/portfolio-item/sherk-cptdisplays-wordpress-plugin/</a>


== Installation ==

<h3>This section describes how to install the plugin and get it working.</h3>

1. BACKUP everything before you install the plugin.
2. Upload sherk_cpt-displays directory to the '/wp-content/plugins/' directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Update the Permalinks on settings.

<h3>Display Sherk Custom Post Type Displays using Widget</h3>

1.	Go to Dashboard-> Appearance -> Widgets (/wp-admin/widgets.php)
2.	Look for Sherk Custom Post Type Displays and drag it to the widget region you would like it to be shown.
3.	Configure your Sherk Custom Post Type Displays, add a title, select the post type, select the display type , select the way it's ordered and the number of items to be displayed.
4.	Click Save button

<b>After installed check at Dashboard -> Tools -> Sherk CPT Displays (/wp-admin/tools.php?page=sherkcptdisplays_info)
for more detailed instructions.</b>

<h3>Display Sherk Custom Post Type Displays using Shortcode</h3>

Shortcode for Sherk Custom Post Type Displays is in the format of
<b>[sherkcptdisplays post_type="post" total_items=10 display_type="title_only" orderby="random"]</b>
Copy the shortcode, paste it to the content text editor and update the values of your shortcode parameters depends on what you need.


<h3>Parameters Available</h3>

<b>title</b><br/>
Header title of your list of custom post type<br/>
default: ''<br/>
options: string<br/><br/>

<b>post_type</b><br/>
Post type of the items to displayed in list (depends on your website, list below are automatically updated)<br/>
default: post<br/>
option: screcipe<br/>
option: sherk_banners<br/>
option: sherk_skills<br/>
option: book<br/>
option: post<br/><br/>

<b>display_type</b><br/>
Option on what elements to be shown on your list<br/>
default: title_only<br/>
options: title_only (Titles are only shown on the list with their links)<br/>
options: featured_image (Titles and Featured Image are only shown on the list with their links)<br/>
options: title_and_teaser (Titles and teasers are only shown on the list with their links)<br/>
options: all (All are shown from Titles, teasers and featured images on the list with their links)<br/><br/>

<b>total_items</b><br/>
Total number of items shown on the list<br/>
default: 5<br/>
options: integer<br/><br/>

<b>orderby</b><br/>
The way the list is ordered<br/>
default: random<br/>
option: random (List are ordered in random)<br/>
option: latest (List are ordered from latest item)<br/><br/>


== Frequently Asked Questions ==

= You have questions?
Contact me through email at contact@sherkspear.com or at http://sherkspear.com/contact.


== Screenshots ==

1. Sherk Custom Post Type Displays How To Use menu at Dashboard-> Tools
2. Dashboard -> Appearance -> Widgets -> Sherk Custom Post Type Display
3. Frontend result of the widget in list of custom post type items.
4. Edit page with Sherk Custom Post Type shortcode.
5. Frontend result of the shortcode.


== Upgrade Notice ==

= 1.0 =
* An initial update with the features added.


== Detailed Instructions ==
After installation, check at Dashboard -> Tools -> Sherk CPT Displays (/wp-admin/tools.php?page=sherkcptdisplays_info)
for more detailed instructions.
