<!-- portfolio section -->
<?php $wl_theme_options = kadima_get_options(); ?>
<div class="content-grid">
		<h3><?php echo esc_attr($wl_theme_options['port_heading']); ?></h3>
		<div class="col-md-12 product-bj" style="padding-top: 20px;padding-bottom: 20px;">
			<?php for($i=1 ; $i<=5; $i++) { ?>
				<div class="col-md-3 box_2" >
						<a class="mask" href="<?php echo esc_url($wl_theme_options['port_img_'.$i]); ?>">
							<img class="img-responsive zoom-img" src="<?php echo esc_url($wl_theme_options['port_img_'.$i]); ?>" alt="<?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?>">
						</a>
						<div class="most-1">
								<h5><a href="<?php echo esc_url($wl_theme_options['port_link_'.$i]); ?>"><?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?></a></h5>
								<p><a href="<?php echo esc_url($wl_theme_options['port_link_'.$i]); ?>" class="button" style="padding: 0.8em 2em !important; color:#fff;">VIEW</a></p>
						</div>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
		</div>
</div>
