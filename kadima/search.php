<?php get_header(); ?>
<div class="kadima_header_breadcrum_title">	
	<div class="container">
		<div class="row">
		<?php if(have_posts()) :?>
			<div class="col-md-12">
			<h1><?php printf( __( 'Search Results for: %s', 'kadima' ), '<span>' . get_search_query() . '</span>'  ); ?>
			</h1>
			</div>
		<?php endif; ?>
		<?php rewind_posts(); ?>
		</div>
	</div>	
</div>
<div class="container">	
	<div class="row kadima_blog_wrapper">
	<?php get_sidebar(); ?>
		<div class="col-md-8">
		<?php 
			if ( have_posts()): 
			while ( have_posts() ): the_post();
				get_template_part('post','content'); ?>	
			<?php endwhile;
				kadima_navigation();
			else :
				get_template_part('nocontent');
			endif;
			?>
		</div>	
	</div>
</div>
<?php get_footer(); ?>