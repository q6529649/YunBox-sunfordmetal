
<?php $wl_theme_options = kadima_get_options(); ?>
<div class="content-grid">
	<h3><?php echo esc_attr($wl_theme_options['port_heading']); ?></h3>
	<div class="col-md-12 product-bj" style="padding-top: 20px;padding-bottom: 20px;">
		<?php for($i=1 ; $i<=5; $i++) { ?>
			<div class="col-md-3 box_2">
				<div id="bk_<?php echo $i; ?>" class="bk">
					<div class="search_y" id="bk_sy_<?php echo $i; ?>"><a href="<?php echo esc_url($wl_theme_options['port_link_'.$i]); ?>"><img src="./wp-content/themes/kadima/images/search_y.png" alt="<?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?>"/></a></div>
					<div class="biankuang biankuang_1" id="bk_<?php echo $i; ?>_1" style="height: 0px;"></div>
					<div class="biankuang biankuang_2" id="bk_<?php echo $i; ?>_2" style="height: 0px;"></div>
					<div class="biankuang biankuang_3" id="bk_<?php echo $i; ?>_3" style="height: 0px;"></div>
					<div class="biankuang biankuang_4" id="bk_<?php echo $i; ?>_4" style="height: 0px;"></div>
					<a class="mask" href="<?php echo esc_url($wl_theme_options['port_link_'.$i]); ?>">
						<img class="img-responsive" src="<?php echo esc_url($wl_theme_options['port_img_'.$i]); ?>" alt="<?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?>">
					</a>
				</div>
				<div class="most-1">
					<h5><a href="<?php echo esc_url($wl_theme_options['port_link_'.$i]); ?>"><?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?></a></h5>
					<p><a href="<?php echo esc_url($wl_theme_options['port_link_'.$i]); ?>" class="button" style="padding: 0.8em 2em !important; color:#fff;">VIEW</a></p>
				</div>
			</div>
		<?php } ?>
		<div class="clearfix"> </div>
	</div>
</div>
<div style="background-color: #333;">
	<div class="col-md-12" style="background:url(./wp-content/themes/kadima/images/contact-us-bj.jpg) no-repeat 0px 0px;">
		<h3 style="color: #fff;font-size: 2.5em;"><?php echo esc_attr($wl_theme_options['footer_customizations']); ?></h3>
	</div>
</div>