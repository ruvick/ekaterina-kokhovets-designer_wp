<?php

/*
Template Name: Шаблон записи портфолио
WP Post Template: Шаблон записи портфолио
Template Post Type: post
*/ 

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<?php 
		$banner = wp_get_attachment_image_src(carbon_get_the_post_meta('page-banner'), 'full')[0];
			if(empty($banner)) {
		$banner = get_template_directory_uri() . '/img/banner-team.jpg'; 
	} 
?>

	<section class="page-banner" style="background-image: url(<?php echo $banner?>);">
		<div class="bg-top"></div>
		<div class="page-banner__nuar_blk nuar_blk"></div>
		<div class="page-banner__container _container">
			<h1 class="page-banner__title title">
				<? the_title();?> <br>
				<span><?echo carbon_get_post_meta(get_the_ID(),"portfolio_subtitle"); ?></span>
			</h1>
		</div>
	</section>

	<section id="page-section" class="page-section">
		<div class="_container">

		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
		?>
      <div class="page-section__portfolio">

				<div class="page-section__portfolio-slider">
					<div class="slider-bg-wrap slider-bg-wrap-portfolio">
						<div class="portfolio-slider _swiper">
							<?
								$portfolioSl = carbon_get_post_meta(get_the_ID(),"portfolio_slider"); 
									if ($portfolioSl) {
								$portfolioSlIndex = 0;
									foreach ($portfolioSl as $item) {
							?>
								<div class="portfolio-slider__slide slider__slide" >
									<div class="galery_blur" style="background-image: url(<?php echo wp_get_attachment_image_src($item['portfolio_img'], 'large')[0]; ?>);" ></div>
									<img src="<?php echo wp_get_attachment_image_src($item['portfolio_img'], 'large')[0]; ?>" alt=""> 						
								</div>
							<?
								$portfolioSlIndex++;
									}
								}
							?> 
						</div>
						<!-- Кнопки-стрлеки -->
						<div class="portfolio-slider__swiper-button-block swiper-button-block">
							<div class="portfolio-slider__swiper-button-next swiper-button swiper-button-next"></div>
							<div class="portfolio-slider__swiper-button-prev swiper-button swiper-button-prev"></div> 
						</div>
						<!-- Кнопки-стрлеки End -->
						<div class="product-sl-paggination portfolio-paggination swiper-paggination"></div>
					</div>
				</div>

				<div class="page-section__service-content content">
					<?php the_content(); ?>
				</div>
				<a href="#callback" class="page-section__service-link btn _popup-link">Получить консультацию</a>
      </div>

	  </div>
	</section>

	</main>

<?php get_footer();