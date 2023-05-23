<?php get_header(); ?> 

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<?php 
	$term_id = get_queried_object_id();
	$image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );
	$image_url = wp_get_attachment_image_url( $image_id, 'full' );
?>

	<section class="page-banner" style="background-image: url(<?php echo $image_url ?>);"> 
		<div class="bg-top"></div>
		<div class="page-banner__nuar_blk nuar_blk"></div>
		<div class="page-banner__container _container">
			<h1 class="page-banner__title title">
				Дизайн-проекты <br>
				<span><? single_cat_title(); ?></span>
			</h1>
		</div>
	</section>

	<section id="page-section" class="page-section">
		<div class="_container">

		<?php get_template_part('template-parts/portfolio-cats');?>

      	<div class="objects__inner page-inner">
				<?php
					while (have_posts()) :
						the_post();
						get_template_part('template-parts/portfolio-elem');
					endwhile;
				?>
      	</div>
	  </div>
	</section>

	</main>

<?php get_footer(); ?>  