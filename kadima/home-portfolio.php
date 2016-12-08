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
<div style="background-color: #333;">
			<div class="col-md-12" style="background:url(./wp-content/themes/kadima/images/contact-us-bj.jpg) no-repeat 0px 0px;">
					<h3 style="color: #fff;font-size: 2.5em;"><?php echo esc_attr($wl_theme_options['footer_customizations']); ?></h3>
							<div class="icon2" style="color: #fff;">
									<div class="col-md-12" style="margin-top: 2em;text-align: center;margin-bottom: 2em;">
											<div class="col-md-3" >
											<ul style=";padding: 0;">
													<li style="display: inline-block;padding: 0.1em 0;"><i class="indicate"></i></li>
													<li style="display: inline-block;padding: 0.1em 0;"><p class="label1">funford@sunfordmetal.com</p></li>
											</ul>
											</div>
											<div class="col-md-3" >
											<ul style=";padding: 0;" style=";padding: 0;margin-top: 1.5em;">
													<li style="display: inline-block;padding: 0.1em 0;"><i class="phone"></i></li>
													<li style="display: inline-block;padding: 0.1em 0;"><p class="label1">+86-592-5165692</p></li>
											</ul>
											</div>
											<div class="col-md-3" >
											<ul style=";padding: 0;" style=";padding: 0;margin-top: 1.5em;">
													<li style="display: inline-block;padding: 0.1em 0;"><i class="message"></i></li>
													<li style="display: inline-block;padding: 0.1em 0;"><p class="label1">cnsunfordf</p></li>
											</ul>
											</div>
											<div class="col-md-3" >
											<ul style=";padding: 0;" style=";padding: 0;margin-top: 1.5em;">
													<li style="display: inline-block;padding: 0.1em 0;"><i class="skype"></i></li>
													<li style="display: inline-block;padding: 0.1em 0;"><p class="label1">13666079207</p></li>
											</ul>
											</div>
									</div>
							</div>
			</div>
	
	</div>
</div>
</div>