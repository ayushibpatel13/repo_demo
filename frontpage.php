<?php
/*
**Template Name: frontpage
*/
get_header(); ?>
<!-- Banner Section Start -->
<?php $banner_image = get_field( 'banner_image' );
$banner_title = get_field( 'banner_title' );
$banner_button = get_field( 'banner_button' );
if( $banner_image || $banner_title || $banner_button ) : ?>
	<div class="banner-section home-banner d-flex align-items-center" style="background-image: url('<?php echo $banner_image['url']; ?>);">
		<div class="container">
			<?php if( $banner_title || $banner_button ) : ?>
				<div class="banner-wrap content-white">
					<?php if( $banner_title ) : ?>
						<div class="title">
							<h1><?php echo $banner_title; ?></h1>
						</div>
					<?php endif; 
					if( $banner_button ) : ?>
						<div class="cta-wrap">
							<a href="<?php echo $banner_button['url']; ?>" class="cta-btn cta-fill"><?php echo $banner_button['title']; ?></a>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>
<!-- Banner Section End -->

<!-- Home About Us Section Start -->
<?php $about_title = get_field( 'about_title' );

$about_image = get_field( 'about_image');
$about_content = get_field( 'about_content' );
if( $about_title || $about_image || $about_content ) : ?>	
	<div class="home-about">
		<div class="container">
			<?php if( $about_title ) : ?>
			<div class="title title-line">
				<h2><?php echo $about_title; ?></h2>
			</div>
			<?php endif;
			if( $about_content || $about_image ) :  ?>
				<div class="two-cols row">
					<?php echo $about_content; 
					if( $about_image ) : ?>
						<div class="col-lg-6">
							<div class="img-wrap">
								<img src="<?php echo $about_image['sizes']['about_image']; ?>" alt="<?php echo $about_image['alt']; ?>">
							</div>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>
<!-- Home About Us Section End -->

<!-- Full Image Section Start -->
<?php $full_image = get_field( 'full_image' );
if( $full_image ) : ?>
<div class="full-img">
	<img src="<?php echo $full_image['url']; ?>" alt="<?php echo $full_image['alt']; ?>">
</div>
<?php endif; ?>
<!-- Full Image Section End -->

<!-- Home Our Services Section Start -->
<div class="home-our-services">
	<div class="container">
		<?php $services_title = get_field( 'services_title' );
		if( $services_title ) : ?>
			<div class="title title-line">
				<h2><?php echo $services_title; ?></h2>
			</div>
		<?php endif; ?>
		<div class="two-cols row">
			<?php $services_content = get_field( 'services_content' ); 
			echo $services_content;
			if( have_rows( 'services_images_repeater' ) ):  ?>
				<div class="col-lg-6">
					<div class="img-wrap">
						<div class="img-slider">
							<?php while( have_rows( 'services_images_repeater' ) ): the_row(); 
								$image = get_sub_field( 'image' ); 
								if( $image ) : ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>">
								<?php endif; 
							endwhile;  ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- Home Our Services Section End -->
<?php get_footer(); 