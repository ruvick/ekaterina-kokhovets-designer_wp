<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section id="slider-main" class="slider-main">

	<div class="slider-bg-wrap ">
		<div class="slider-bg _swiper">
		<?
			$pict = carbon_get_theme_option('slider_index');
			if ($pict) {
				$pictIndex = 0;
				foreach ($pict as $item) {
					?>
						<div class="slider-bg__slide slider__slide" style="background-image: url(<?php echo wp_get_attachment_image_src($item['slider_img'], 'full')[0]; ?>);">
							<div class="bg-top"></div>
							<div class="nuar_blk"></div>
							<div class="slider-bg__container _container">
								<? if (!empty($item['slider_title'])) { ?>
									<h1 class="slider-bg__title title"><? echo $item['slider_title']; ?></h1>
								<? } ?>
								<? if (!empty($item['slider_link_text'])) { ?>
									<a href="<? echo $item['slider_link']; ?>" class="slider-bg__link btn _popup-link"><? echo $item['slider_link_text']; ?></a>
								<? } ?>
							</div>
						</div>
					<?
					$pictIndex++;
				}
			}
			?> 
		</div>
		<div class="product-sl-paggination sl-main-paggination swiper-paggination"></div>
	</div>

</section>

<? $abouttc = carbon_get_theme_option("about_home");
	if (!empty($abouttc)) { ?>
<section id="about" class="about section">
	<div class="_container">
		<h2 class="about__title title"><?php echo carbon_get_theme_option('about_home_title'); ?></h2>
		<? echo $abouttc; ?>
	</div>
</section>
<? } ?>

<section id="objects" class="objects section">
	<div class="_container">

		<h2 class="objects__title title">
			Жилые помещения <br>
			<span>КВАРТИРЫ, ДОМА</span>
		</h2>

		<div class="objects__inner">
			<?php 
					$posts = get_posts( array(
						'numberposts' => 3,
						'category'    =>13,
						'orderby'     => 'date',
						'order'       => 'ASC',
						'include'     => array(),
						'exclude'     => array(),
						'meta_key'    => '',
						'meta_value'  =>'',
						'post_type'   => 'post',
						'suppress_filters' => true,
					) );
					$result = wp_get_recent_posts( $args );
						foreach( $posts as $post ){
							get_template_part('template-parts/portfolio-elem');
					} 
				?>
		</div>

		<h2 class="objects__title title">
			Общественные помещения <br>
			<span>РЕСТОРАНЫ, КАФЕ, ОТЕЛИ, ОФИСЫ</span>
		</h2>

		<div class="objects__inner">
			<?php 
					$posts = get_posts( array(
						'numberposts' => 3,
						'category'    =>14,
						'orderby'     => 'date',
						'order'       => 'ASC',
						'include'     => array(),
						'exclude'     => array(), 
						'meta_key'    => '',
						'meta_value'  =>'',
						'post_type'   => 'post',
						'suppress_filters' => true,
					) );
					$result = wp_get_recent_posts( $args );
						foreach( $posts as $post ){
							get_template_part('template-parts/portfolio-elem');
					} 
				?>
		</div>

		<a href="<?php echo get_category_link(4);?>" class="objects__btn btn btn_white">Смотреть все портфолио</a>

	</div>
</section>

<section id="banner" class="banner">
	<div class="nuar_blk"></div>
	<div class="_container">
		<h2 class="banner__title title">
			Создадим для Вас <br>
			<span>ИНТЕРЬЕР МЕЧТЫ</span>
		</h2>
	</div>
</section>

<section id="services" class="services section">
	<div class="_container">
		<h2 class="services__title title">
			Мы предллагаем <br>
			<span>НАШИ УСЛУГИ</span>
		</h2>
	</div>
	<div class="services__wrap">
		<div class="_container">
			<div class="services__inner">
				<?php 
					$posts = get_posts( array(
						'numberposts' => 3,
						'category'    => 5,
						'orderby'     => 'date',
						'order'       => 'ASC',
						'include'     => array(),
						'exclude'     => array(),
						'meta_key'    => '',
						'meta_value'  =>'',
						'post_type'   => 'post',
						'suppress_filters' => true,
					) );
					$result = wp_get_recent_posts( $args );
						foreach( $posts as $post ){
							get_template_part('template-parts/services-elem');
					} 
				?>
			</div>
		</div>
	</div>
</section>

<section id="reviews" class="reviews section">
	<div class="_container">
		<h2 class="reviews__title title">
			Клиенты о нас <br>
			<span>ОТЗЫВЫ</span>
		</h2>
		<div class="reviews__inner">
			<?php query_posts('orderby=rand&showposts=2&cat=6'); ?>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); 
					get_template_part('template-parts/otzyvy-elem');
 				endwhile; endif; 
			?>
		</div>
	</div>
</section>

<section id="team" class="team section">
	<div class="_container">
		<h2 class="team__title title">
			Мы рады помочь Вам <br>
			<span>НАША КОМАНДА</span>
		</h2>
	</div>

	<? $teamPost = carbon_get_theme_option("team_text");
	  if (!empty($teamPost)) { ?>
			<div class="team__wrap">
				<div class="team__bg"></div>
				 <div class="_container">
					<div class="team__img">
            <img src="<?php echo wp_get_attachment_image_src(carbon_get_theme_option("team_images"), 'full')[0];?>" alt="<? the_title();?>">						
          </div>
					<div class="team__descp">
						<h5 class="team__descp-title"><?php echo carbon_get_theme_option('team_title'); ?></h5>
						<p class="team__descp-subtitle"><?php echo carbon_get_theme_option('team_subtitle'); ?></p>
						<div class="team__descp-text-block">
              <? echo $teamPost; ?>
						</div>
					</div>
				</div>
			</div>
  <? } ?>

	<div class="_container">
		<div class="team__inner">
			<?php get_template_part('template-parts/team-elem');?>
		</div>
	</div>
</section>

<section id="consultation" class="consultation section">
	<!-- <div class="consultation__nuar_blk nuar_blk"></div> -->
	<div class="_container">
		<h2 class="consultation__title title">
			Консультация дизайнера <br>
			<span>У Вас остались вопросы? Мы поможем!</span>
		</h2>
		<form action="#" id="consultation-form" class="consultation__form">
			<div class="consultation__form-column">
				<input type="hidden" name = "form_name" data-valuem = "Название формы" value = "Форма на главной">
				<input type="hidden" name = "page_lnk" data-valuem = "Адрес страницы" value = "<? echo (is_home())?"https://xn----7sblmei2a5bi4i.xn--p1ai/":get_the_permalink()?>">
				<input required type="text" name = "name_consultation-form-tel" data-valuem = "Телефон" placeholder="Введите Ваш телефон*" class="consultation__form-input input">
			</div>
			<div class="consultation__form-column">
				<input required type="text" name = "name_consultation-form-mess" data-valuem = "Имя" placeholder="Сообщение" class="consultation__form-input input">
				<label for="check" class="consultation__form-checkbox checkbox">
					<input id="check" data-error="Ошибка" class="checkbox__input" type="checkbox" value="1" name="form[]">
					<span class="checkbox__text"><span> Я согласен на обработку персональных данных</span></span>
				</label>
				<button type="submit" data-formid="consultation-form" class="consultation__form-btn new_send_btn btn">Получить консультацию</button>
			</div>
		</form>
	</div>
</section>

<section id="blog" class="blog section">
	<div class="_container">
		<h2 class="blog__title title">
			Полезные материалы <br>
			<span>БЛОГ</span>
		</h2>
		<div class="blog__inner">
			<?php 
				$posts = get_posts( array(
					'numberposts' => 4,
					'category'    => 8,
					'orderby'     => 'date',
					'order'       => 'ASC',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  =>'',
					'post_type'   => 'post',
					'suppress_filters' => true,
				) );
				$result = wp_get_recent_posts( $args );
					foreach( $posts as $post ){
						get_template_part('template-parts/blog-elem');
				} 
			?>
		</div>
	</div>
</section>

</main>

<?php get_footer(); ?> 