<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>" />
	<?php $wl_theme_options = kadima_get_options(); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($wl_theme_options['upload_image_favicon']); ?>" />
	<?php } ?>
	<?php
		if (is_home()) {
			echo '<meta http-equiv="x-dns-prefetch-control" content="on" />
			<link rel="dns-prefetch" href="//cdn.yunclever.com">
			<link rel="dns-prefetch" href="//cdn.bootcss.com">
			<link rel="dns-prefetch" href="//static.addtoany.com">';
		} elseif (isset($_COOKIE['yc_visit_cookie'])) {
			echo '';
		}
		else {
			echo '<meta http-equiv="x-dns-prefetch-control" content="on" />
			<link rel="dns-prefetch" href="//cdn.yunclever.com">
			<link rel="dns-prefetch" href="//cdn.bootcss.com">
			<link rel="dns-prefetch" href="//static.addtoany.com">';
		}
	?>
	<?php wp_head(); ?>
	<script type="text/javascript">
	  var visitor_id;
	  var _paq = _paq || [];
	  _paq.push(["setCookieDomain", "*.sunfordmetal.com"]);
	  _paq.push(["setDomains", ["*.sunfordmetal.com"]]);
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
		var u="//dc.yunclever.com/piwik/";
		_paq.push(['setTrackerUrl', u+'piwik.php']);
		_paq.push(['setSiteId', '9']);
		_paq.push([ function() { visitor_id = this.getVisitorId(); }]);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>

</head>
<body <?php body_class(); ?>>
<div>
	<!-- header -->
	  <div class="header" id="home" style="background-color: #333 !important;">
	    <div class="container">
	        <div class="header-bottom">
	            <div class="logo">
								<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<?php if($wl_theme_options['upload_image_logo']){ ?>
									<img class="img-responsive" src="<?php echo $wl_theme_options['upload_image_logo']; ?>" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "80"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "200"; } ?>px;" />
									<?php } else {
										echo get_bloginfo('name');
									} ?>
								</a>
	            </div>
	            <div class="top-menu">
	                
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
											<span class="sr-only"><?php _e('Toggle navigation','kadima');?></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div id="menu" class="collapse navbar-collapse ">
									<?php wp_nav_menu( array(
											'theme_location' => 'primary',
											'menu_class' => 'nav cl-effect-5',
											'fallback_cb' => 'kadima_fallback_page_menu',
											'walker' => new kadima_nav_walker(),
											)
											);	?>
											<div id="google_translate_element"></div>
									</div>
	            </div>
	            <div class="search-box">
	                <div id="sb-search" class="sb-search sb-search-open">
	                    <form role="search" method="get" class="navbar-form navbar-left" action="<?php echo home_url( '/' ); ?>">
	                        <!--input class="sb-search-input" type="search" name="search" id="search"-->							
							<label class="screen-reader-text" for="s">Search for:</label>
							<input class="sb-search-input" type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Enter your search term..." />
	                        <input class="sb-search-submit" type="submit" value="">
	                        <span class="sb-icon-search"> </span>
	                    </form>
	                </div>
	            </div>			
	        </div>
	    </div>
	</div>
