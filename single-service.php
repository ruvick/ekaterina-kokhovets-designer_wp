<?php

/*
Template Name: Шаблон записи Услуга
WP Post Template: Шаблон записи Услуга
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
				Мы предлагаем <br>
				<span><? the_title();?></span>
			</h1> 
		</div>
	</section>

	<section id="page-section" class="page-section page-section-single">
		<div class="_container">

      <div class="page-section__service">

				<div class="page-section__service-content content uni_text_blk">
					<?php the_content(); ?>
				</div>

				<div class="page-section__service-inner">

					<div class="page-section__service-slider">
						<div class="slider-bg-wrap ">
							<div class="service-slider _swiper">
							<?
								$serviceSl = carbon_get_post_meta(get_the_ID(),"service_picture"); 
									if ($serviceSl) {
								$serviceSlIndex = 0;
									foreach ($serviceSl as $item) {
							?>
								<div class="service-slider__slide slider__slide">
									<img src="<?php echo wp_get_attachment_image_src($item['service_img'], 'large')[0]; ?>" alt=""> 						
								</div>
							<?
								$serviceSlIndex++;
									}
								}
							?> 
							</div>
							<!-- Кнопки-стрлеки -->
							<div class="service-slider__swiper-button-block swiper-button-block">
								<div class="service-slider__swiper-button-next swiper-button swiper-button-next"></div>
								<div class="service-slider__swiper-button-prev swiper-button swiper-button-prev"></div>
							</div>
							<!-- Кнопки-стрлеки End -->
							<div class="product-sl-paggination service-paggination swiper-paggination"></div>
						</div>
					</div>

					<div class="page-section__service-form">
						<h5 class="page-section__service-form-title">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</h5>
						<form action="#" class="page-section__service-form-form">
							<input type="text" name="name" placeholder="Имя*" class="page-section__service-form-form-input input">
							<input type="text" name="tel" placeholder="Телефон*" class="page-section__service-form-form-input input">
							<label for="check-service" class="service-form-form-checkbox checkbox">
								<input id="check-service" data-error="Ошибка" class="checkbox__input" type="checkbox" value="1" name="form[]">
								<span class="checkbox__text"><span>Заполняя и отправляя данную форму вы даете свое согласие 
									на обработку персональных данных</span></span>
							</label>
							<button type="submit" class="page-section__service-form-form-btn btn">Получить консультацию</button>
						</form>
					</div>				

      	</div>

				<h5 class="page-section__service-file-title">ПАКЕТ ДОКУМЕНТОВ:</h5>

			</div>

	  </div>
	</section>

	<section id="flieBlock-section" class="flieBlock-section">
		<div class="_container">
			<div class="flieBlock-section__inner flie-card__inner">

			<?
				$serviceDoc = carbon_get_post_meta(get_the_ID(),"service_docs"); 
					if ($serviceDoc) {
				$serviceDocIndex = 0;
					foreach ($serviceDoc as $item) {
			?>
				<a href="<?php echo wp_get_attachment_url($item['service_docs_file']) ?>" download class="flie-card">
					<span class="flie-card__item-icon"></span>
					<p class="flie-card__item-descp"><? echo $item['service_docs_nmae']?></p>
				</a>
			<?
				$serviceSlIndex++;
					}
				}
			?> 

			</div>

		</div>
	</section>

	</main>

<?php get_footer();