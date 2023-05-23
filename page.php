
<?php

get_header(); ?>

<?php get_template_part('template-parts/header-section');?> 

<main class="page">

<?php 
		$banner = wp_get_attachment_image_src(carbon_get_the_post_meta('page-banner'), 'full')[0];
			if(empty($banner)) {
		$banner = get_template_directory_uri() . '/img/banner-team.jpg'; 
	} ?>

	<section class="page-banner" style="background-image: url(<?php echo $banner?>);">
		<div class="bg-top"></div>
		<div class="page-banner__nuar_blk nuar_blk"></div>
		<div class="page-banner__container _container">
			<h1 class="page-banner__title title">
				<?php the_title();?>
				<!-- Мы предлагаем <br>
				<span>НАШИ УСЛУГИ</span> -->
			</h1>
		</div>
	</section>

	<section id="page-section" class="page-section">
		<div class="_container">
			<div class="page-inner">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
					<?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 

			</div>
	  </div>
	</section>

	</main>

	<!-- <main id="primary" class="page site-main">  

		<section class="content"> 
			<div class="_container">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
					<?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 

			</div>
		</section>
	</main> -->

<?php get_footer();