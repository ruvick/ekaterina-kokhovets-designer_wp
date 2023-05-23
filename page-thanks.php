<?php 

/*
Template Name: Страница Благодарности
Template Post Type: page
*/

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
				Благодарим за обращение! 
				<!-- <span>Наши менеджеры свяжутся с вами в ближайшее время</span> -->
			</h1>
      <p class="page-banner-thanks__subtitle">Наши менеджеры свяжутся с вами в ближайшее время</p>
		</div>
	</section>

  <!-- <section id="page-section" class="page-section">
		<div class="_container">
      <?php the_content();?>
	  </div>
	</section> -->

	</main>

  <?php get_footer(); 