<!-- kadima Callout Section -->
<?php $wl_theme_options = kadima_get_options(); ?>
	<div style="background-color: #333;">
			
			<div class="col-md-12" style="background-color: #747474;padding-top: 10px;padding-bottom: 10px;">
			    <div class="copyright-right wow fadeInRight animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
			        <ul >
								<?php if($wl_theme_options['fb_link']!='') { ?>
									 <li class="twitter" title="Facebook"><a class="twitter" href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"></a></li>
								<?php } if($wl_theme_options['twitter_link']!='') { ?>
								<li class="twitter facebook" title="Twitter"><a class="twitter facebook" href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"></a></li>
								<?php } if($wl_theme_options['linkedin_link']!='') { ?>
								<li class="twitter chrome" title="Linkedin"><a class="twitter chrome" href="<?php echo esc_url($wl_theme_options['linkedin_link']) ; ?>"></a></li>
								<?php } if($wl_theme_options['youtube_link']!='') { ?>
								<li class="twitter pinterest" title="Youtube"><a class="twitter pinterest" href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"></a></li>
												<?php } if($wl_theme_options['gplus']!='') { ?>
								<li class="twitter linkedin" title="gplus"><a class="twitter linkedin" href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"></a></li>
												<?php } if($wl_theme_options['instagram']!='') { ?>
								<li class="instagram" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"></a></li>
												<?php } ?>
			        </ul>
			    </div>
			    <div class="clearfix"> </div>
			    <!--a href="#home" id="toTop" class="scroll" style="display: none;"><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a-->
			</div>
	</div>
</div>
<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
</a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
</body>
</html>
