<?php

/*
Template Name: Шаблон записи портфолио
WP Post Template: Шаблон записи портфолио
Template Post Type: post
*/ 

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section class="page-banner page-banner-services">
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

      <div class="page-section__portfolio">

				<div class="page-section__portfolio-slider">
					<div class="slider-bg-wrap ">
						<div class="portfolio-slider _swiper">
							<?
								$portfolioSl = carbon_get_post_meta(get_the_ID(),"portfolio_slider"); 
									if ($portfolioSl) {
								$portfolioSlIndex = 0;
									foreach ($portfolioSl as $item) {
							?>
								<div class="portfolio-slider__slide slider__slide">
									<img src="<?php echo wp_get_attachment_image_src($item['portfolio_img'], 'large')[0]; ?>" alt=""> 						
								</div>
							<?
								$portfolioSlIndex++;
									}
								}
							?> 
						</div>
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