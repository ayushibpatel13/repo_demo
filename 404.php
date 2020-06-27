<?php get_header(); ?>
<div class="container">
	<div class="title text-center">
		<img src="http://localhost/branded/wp-content/uploads/2020/06/404_page_not_found.png">
		<br><br>
		<div class="cta-wrap">
			<a href="<?php echo get_site_url(); ?>" class="cta-btn cta-fill"><?php _e( 'Back To Homepage', 'branded' ); ?></a>
		</div><br>
	</div>
</div>
<?php get_footer();
