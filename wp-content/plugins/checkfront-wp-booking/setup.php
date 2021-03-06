<?php 
if(isset($_POST['checkfront_host'])) {
	$Checkfront->mode = $_POST['checkfront_mode'];
	if($host = $Checkfront->valid_host($_POST['checkfront_host'])) {
		update_option('checkfront_host',trim($host));
		$Checkfront->host = $host;
		$cf_msg = "Updated!";
	} else {
		$cf_msg = "Invalid URL!";
	}
}
?>
<div style="width: 800px">
<script type="text/javascript">
jQuery(document).ready(function() {

	function clean(str) {
		return str.replace(/[^\d\w\-\_ , "]/ig,'');
	}

	jQuery('#shortcode_generator').click(function() {
		height = 600;
		width = 1150;
		var cwidth=(window.screen.width-width)/2;
		var cheight=(window.screen.height-height)/2;var param="location=yes,status=yes,resizable=yes,scrollbars=yes,menubar=yes,toolbar=yes,width="+width+',height='+height+',left='+cwidth+',top='+cheight;
		var sw=window.open(this.href,'',param);sw.focus();return false;
	});
});

</script>
<div style="width: 500px; float: left">
<h1>Online Bookings For Wordpress</h1>
<p style="font-size: 1.1em; padding-right: 2em">Checkfront is a powerful online booking system that allows businesses to manage their inventories, centralize reservations, and process payments.<br /><br /><strong>All bookings with Checkfront are <u>commission free</u>.</strong></p>

<h3>Quick Start</h3>
<ul style="font-size: 16px">
<li style="padding: 5px 0; height: 25px; line-height: 25px;"><strong style="margin-right: 10px; background-color: #ccc; border-radius: 20px; clear: none; color: #000; display: inline-block; float: left; font-style: normal; height: 25px; font-weight: bold; line-height: 25px;font-size:14px; text-align: center; width: 25px;">1</strong> Create and configure <a href="https://www.checkfront.com/start/?src=wp-setup" target="_blank">your Checkfront account</a>.</li>
<li style="padding: 5px 0; height: 25px; line-height: 25px;"><strong style="margin-right: 10px; background-color: #ccc; border-radius: 20px; clear: none; color: #000; display: inline-block; float: left; font-style: normal; height: 25px; font-weight: bold; line-height: 25px;font-size:14px; text-align: center; width: 25px;">2</strong> Supply your Checkfront URL and optional settings <a href="#checkfront_setup">below</a>.</li>
<li style="padding: 5px 0; height: 25px; line-height: 25px;"><strong style="margin-right: 10px; background-color: #ccc; border-radius: 20px; clear: none; color: #000; display: inline-block; float: left; font-style: normal; height: 25px; font-weight: bold; line-height: 25px;font-size:14px; text-align: center; width: 25px;">3</strong> Create a new page and supply the <a href="#shortcode">short code</a> you created.</li>
<li style="padding: 5px 0; height: 25px; line-height: 25px;"><strong style="margin-right: 10px; background-color: #ccc; border-radius: 20px; clear: none; color: #000; display: inline-block; float: left; font-style: normal; height: 25px; font-weight: bold; line-height: 25px;font-size:14px; text-align: center; width: 25px;">4</strong> Start accepting online bookings.</li>
<li style="padding: 5px 0; height: 25px; line-height: 25px;"><strong style="margin-right: 10px; background-color: #ccc; border-radius: 20px; clear: none; color: #000; display: inline-block; float: left; font-style: normal; height: 25px; font-weight: bold; line-height: 25px;font-size:14px; text-align: center; width: 25px;">5</strong> Have questions?  <a href="https://www.checkfront.com/support/?src=wp-setup">We're here to help</a>.</li>
</ul>
</div>
<div style="margin-top: 1em; float: right; width: 235px; box-shadow: 0 0 2px #ddd; border-radius: 6px; background-color: #fff; border: solid 1px #ddd; padding: 25px;">
<div style="text-align: center">
<a href="https://www.checkfront.com/?src=wp-setup"><img src="//www.checkfront.com/images/brand/Checkfront-Logo-45.png" height="40" alt="Checkfront" /></a><br />
<strong>Smart, Simplified Online Bookings</strong><br /><br />
</div>
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fcheckfront.bookings&amp;send=false&amp;layout=button_count&amp;width=250&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=132896805841" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:290px; margin-bottom: 10px; height:21px;" allowTransparency="true"></iframe>
<!-- Place this tag in your head or just before your close body tag -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<!-- Place this tag where you want the +1 button to render -->
<div class="g-plusone" data-size="small" data-annotation="inline" data-href="https://www.checkfront.com/?src=wp-setup"></div>
<br />
<br />
<a href="https	://twitter.com/Checkfront" style="text-decoration: none; background: url('https://www.checkfront.com/images/Twitter-icon-32.png') left center no-repeat; background-size: 16px; padding: 5px 5px 5px 20px" target="_blank">Follow us on Twitter</a><br /><br />
<a href="https://www.checkfront.com/login/?src=wp-setup" style="text-decoration: none; background: url('https://www.checkfront.com/images/logo/Checkfront-Icon-32.png') left center no-repeat; background-size: 16px; padding: 5px 5px 5px 20px;" target="_blank">Secure Booking Admin Login</a><br /><br />
<a href="https://www.checkfront.com/wordpress/?src=wp-setup" style="text-decoration: none; background: url('https://www.checkfront.com/images/Wordpress-icon-32.png') left center no-repeat; background-size: 18px; padding: 5px 5px 5px 20px;" target="_blank">Checkfront Wordpress Setup Guide</a>
</div>
<br style="clear: both" />
<form method="post" action="">
	<div class="metabox-holder meta-box-sortables pointer">
		<div class="postbox">
			<h3 class="hndle">Setup</h3>
<?php
if(isset($cf_msg)){?>
<div style="background-color: rgb(255, 251, 204); margin:1em 1em 0em 1em" id="message" class="updated fade"><p><strong><?php echo $cf_msg?></strong></p></div>
<?php }?>
			<div class="inside" style="padding: 0 10px">
				<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row"><label for="checkfront_email">Checkfront Host Url:</label></th>
						<td nowrap>https://<input name="checkfront_host" style="width: 15em;font-weight: bold" id="CF_id" value="<?php echo $Checkfront->host?>" class="regular-text" type="text" /><br /><em style="color: #888">Eg: demo.checkfront.com</em> </td>
						<td id="CF_status"><em>Location of your Checkfront Admin</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="submit" class="button-primary" value=" Update " /> 
						</td>
						<td>
							Don't have a Checkfront account?
							<a href="https://www.checkfront.com/start?src=wp-setup" target="_blank">Start Your Free Trial</a> or get a <a href="https://www.checkfront.com/developers?src=wp-setup">Free Developer Account</a>.</em>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<a name="shortcode"></a>
	<div class="metabox-holder meta-box-sortables pointer">
		<div class="postbox">
			<h3 class="hndle">Use</h3>
			<div class="inside" style="padding: 0 10px">
				<table class="form-table">
					<tbody>
						<?php if($Checkfront->host) {?>
						<tr valign="top">
							<td scope="row" colspan="2">You can embed the Checkfront booking portal into any page by pasting in this shortcode where you'd like it to appear:</td>
						</tr>
						<tr>
							<td scope="row" colspan="2">
								<strong style="font-size: 14px">[checkfront]</strong> &nbsp; &nbsp; 
								<a  class="button-primary" href="https://<?php echo trim($Checkfront->host)?>/manage/extend/integrate/droplet/?src=wordpress" value=" Update " target="_blank" id="shortcode_generator"/>Launch Shortcode Generator</a>
							</td>
					</tr>
<?php }?>
					<tr>
						<td colspan="2"><strong>Quick Setup Guide</strong> <small>4 minutes</small></td></tr>
					</tr>
					<tr>
						<td colspan="3">
						<script type="text/javascript" id="vidyard_embed_code_xy2nWQ15WkbqfRjtE1nc9i" src="//play.vidyard.com/xy2nWQ15WkbqfRjtE1nc9i.js?v=3.1.1&type=inline"></script>
						</td>
					</tr>
					<tr>
						<td><strong>Require more help?</strong>  Please see our <a href="https://www.checkfront.com/wordpress?src=wp-setup">wordpress setup guide</a> in our  <a href="https://www.checkfront.com/support/?src=wp-setup">support library</a> or <a href="https://www.checkfront.com/contact/?src=wp-setup">contact us</a> and we'd be happy to assist.</td>
						</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</form>
<div>

<p style="float: left; color: #555">&copy; Checkfront Inc 2008 - <?php print date('Y')?></p>

<p style="float: right; color: #999">
<a style="color: #777;  font-size: 11px" href="https://www.checkfront.com/?src=wp-setup">Learn More</a>
&nbsp;|&nbsp; 
<a style="color: #777;  font-size: 11px" href="https://www.checkfront.com/?src=wp-setup">Blog</a>
&nbsp;|&nbsp; 
<a style="color: #777;  font-size: 11px" href="https://www.checkfront.com/updates?src=wp-setup">Recent Updates</a>
&nbsp;|&nbsp; 
<a style="color: #777;  font-size: 11px" href="https://www.checkfront.com/support?src=wp-setup">Support</a>
&nbsp;|&nbsp; 
<a style="color: #777;  font-size: 11px" href="https://www.checkfront.com/developers?src=wp-setup">Developers</a>
&nbsp;|&nbsp; 
<a style="color: #777;  font-size: 11px" href="https://www.checkfront.com/privacy?src=wp-setup">Privacy</a>
&nbsp;|&nbsp; 
<a style="color: #777;  font-size: 11px" href="https://www.checkfront.com/terms?src=wp-setup">Terms of Service</a> 
</p>
</div>
</div>
