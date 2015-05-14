<div class="wrap">
  
  <h2>Sherk Custom Post Type Displays WordPress Plugin</h2>

  <div id="dashboard-widgets-wrap">
	<div id="dashboard-widgets">
		<div id="postbox-container-1" class="postbox-container">
			<div id="normal-sortables" class="meta-box-sortables ui-sortable">
				<div class="postbox ">
			
				<div class="inside">
					<div class="main">
		
			<p>
				<h3>Thank you and Enjoy!</h3>
				Welcome to Sherk Custom Post Type Displays WordPress Plugin.<br/>
				Display custom post type items available in your choice using widgets and shortcodes.<br/>
				From number of items, its order and elements to display.
				It's just too good to have that availability to add list of post types anywhere in your website.
			</p>
			
			<h3>Installation</h3>
			<ol>
				<li>BACKUP everything before you install the plugin.</li>
				<li>Upload sherk-custom-post-type-displays directory to the '/wp-content/plugins/' directory</li>
				<li>Activate the plugin through the 'Plugins' menu in WordPress</li>	
				<li>Update the Permalinks on settings.</li>
			</ol>
			
			
			<h3>Display Sherk Custom Post Type Displays using Widget</h3>
            <ol>			
				<li>Go to Dashboard-> Appearance -> Widgets (/wp-admin/widgets.php)</li>
				<li>Look for Sherk Custom Post Type Displays and drag it to the widget region you would like it to be shown.</li>
				<li>Configure your Sherk Custom Post Type Displays, add a title, select the post type, select the display type , select the way it's ordered and the number of items to be displayed.</li>
				<li>Click Save button</li>
			</ol>
			<h3>Display Sherk Custom Post Type Displays using Shortcode</h3>
			<ol>
				<li>Shortcode for Sherk Custom Post Type Displays is in the format of<br/>
				<b>[sherkcptdisplays post_type="post" total_items=10 display_type="title_only" orderby="random"]</b>
				<li>Copy the shortcode, paste it to the content text editor and update the values of your shortcode parameters depends on what you need.</li>
			</ol>
			<h3>Parameters Available</h3>

				<h4><b>title</b></h4>
				Header title of your list of custom post type<br/>
				default: ''<br/>
				option: <b>string</b><br/><br/>
				
				<h4><b>post_type</b></h4>
				Post type of the items to displayed in list<br/>
				default: post<br/>
				<?php
					$sherkPostTypes=get_post_types(array('_builtin'=>false));
					array_push($sherkPostTypes,'post');
					foreach($sherkPostTypes as $sherkPostType){
						$optionPosts.='option: <b>'.$sherkPostType.'</b><br/>';
					}
					echo $optionPosts;
				?>
				<br/>

				<h4><b>display_type</b></h4>
				Option on what elements to be shown on your list<br/>
				default: title_only<br/>
				option: <b>title_only</b> (Titles are only shown on the list with their links)<br/>
				option: <b>featured_image</b> (Titles and Featured Image are only shown on the list with their links)<br/>
				option: <b>title_and_teaser<b> (Titles and teasers are only shown on the list with their links)<br/>
				option: <b>all</b> (All are shown from Titles, teasers and featured images on the list with their links)<br/><br/>

				<h4><b>total_items</b></h4>
				Total number of items shown on the list<br/>
				default: 5<br/>
				options: <b>integer</b><br/><br/>

				<h4><b>orderby</b></h4>
				The way the list is ordered<br/>
				default: random<br/>
				option: <b>random</b> (List are ordered in random)<br/>
				option: <b>latest</b> (List are ordered from latest item)<br/><br/>

				
				
				<h3>Styles Customization and Template Customization</h3>
				<p>Contact me at <a href="http://www.sherkspear.com/contact" target="_blank">SherkSpear</a> .</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="postbox-container-2" class="postbox-container">
			<div id="normal-sortables" class="meta-box-sortables ui-sortable">
					<div class="postbox ">
				
					<div class="inside">
						<div class="main">
						
						
			<p style="background:#191919;padding: 10px;text-align:center">
				<a target="_blank" href="http://www.sherkspear.com"><img src="<?php echo SherkCPTDisplays::get_plugin_url();?>assets/images/logo.png" align="center" width="350"/></a>
			</p>
			<p>
				<b>Sherk Custom Post Type Displays WordPress Plugin</b> is created by <a target="_blank" href="http://www.sherkspear.com"><b>SherkSpear</b></a>.<br/>
				<a target="_blank" href="http://www.sherkspear.com"><b>SherkSpear</b></a> is an IT provider which makes use of the Agile methodology for web development to create innovative websites from simple Blog sites, or with WordPress websites, Drupal, and such.<br/>It also provides web services like a quick fix to your website bugs, IT consultations, and providing reasonable quotes to your projects. <br/><hr/>
				<h3>SherkSpear Offered Services:</h3>
				<ul>
					<li><b><a href="http://www.sherkspear.com/contact/?help=http://www.sherkspear.com/contact/?help=Consultation" target="_blank">Website Consultations</a><b/></li>
					<li><b><a href="http://www.sherkspear.com/contact/?help=Quick%20Fix" target="_blank">Quick Fix a bug</a><b/></li>
					<li><b><a href="http://www.sherkspear.com/contact/?help=Report%20Bugs" target="_blank">Report a bug</a><b/></li>
					<li><b><a href="http://www.sherkspear.com/contact/?help=I%20want%20to%20hire%20you" target="_blank">Hiring</a><b/></li>
					<li><b><a href="http://www.sherkspear.com/contact/?help=Asking%20for%20a%20Quote" target="_blank">Quote Inquiry</a><b/></li>
				
				</ul><br/><br/>
				<hr/>
				<b>Portfolio:<b/> <a target="_blank" href="http://www.sherkspear.com/portfolio"><i>SherkSpear's Portfolio</i></a> <br/>
				<b>Resume:<b/> <a target="_blank" href="http://www.sherkspear.com/resume"><i>SherkSpear's Resume</i></a> <br/>
				<b>Browse my other WordPress Plugins:<b/> <a target="_blank" href="https://profiles.wordpress.org/sherkspear/#content-plugins"><i>SherkSpear's WordPress Plugins</i></a> <br/>
			</p>
			<p>
			   Feel free to <a target="_blank" href="http://www.sherkspear.com/contact">contact me</a> in case of issues you might encounter and/or customization regarding this plugin or any <a href="http://www.sherkspear.com/contact/?help=Suggestions" target="_blank">suggestions</a>. You can contact me through email <a href="mailto:contact@sherkspear.com" target="_blank">contact@sherkspear</a> or fill the form provided at <a href="http://www.sherkspear.com/contact" target="_blank">SherkSpear Contact</a>.
			</p>
			<p style="text-align:center">
			    <div style="text-align:center" class="float-none"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="H8GHAJZQA2B86">
<input type="image" src="http://www.sherkspear.com/wp-content/uploads/2015/05/sendPaypal1.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
			</p>
			
			
						</div>
					</div>
				</div>
			</div>
		</div>


	  </div><!--dashboard-widgets-->
	</div><!--dashboard-widgets-wrap-->
</div><!--wrap-->


<!--
created by:
  _________.__                  __      _________
 /   _____/|  |__   ___________|  | __ /   _____/_____   ____ _____ _______
 \_____  \ |  |  \_/ __ \_  __ \  |/ / \_____  \\____ \_/ __ \\__  \\_  __ \
 /        \|   Y  \  ___/|  | \/    <  /        \  |_> >  ___/ / __ \|  | \/
/_______  /|___|  /\___  >__|  |__|_ \/_______  /   __/ \___  >____  /__|
        \/      \/     \/           \/        \/|__|        \/     \/

http://www.sherkspear.com
-->