<?php get_header(); ?> 

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section class="page-banner page-banner-services">
		<div class="page-banner__nuar_blk nuar_blk"></div>
		<div class="page-banner__container _container">
			<h1 class="page-banner__title title">
        <? single_cat_title(); ?>
				<!-- Мы предлагаем <br>
				<span>НАШИ УСЛУГИ</span> -->
			</h1>
		</div>
	</section> 

	<section id="page-section" class="page-section">
		<div class="_container">
      <div class="blog__inner page-inner">
				<?php
					while (have_posts()) :
						the_post();
						get_template_part('template-parts/blog-elem');
					endwhile;
				?>
      </div>
	  </div>
	</section>

	</main>

<?php get_footer(); ?>  