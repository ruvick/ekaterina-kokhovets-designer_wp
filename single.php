<?php

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section class="page-banner page-banner-services">
		<div class="bg-top"></div>
		<div class="page-banner__nuar_blk nuar_blk"></div>
		<div class="page-banner__container _container">
			<h1 class="page-banner__title title"><? the_title();?></h1>
		</div>
	</section>

	<section id="page-section" class="page-section">
		<div class="_container">
      <div class="page-inner">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<picture>
						<?php echo get_the_post_thumbnail( $post->ID, "turImg", array("alt" => $post->post_title, "title" => $post->post_title));?>
					</picture>
					<?php the_content();?> 
				<?php endwhile;?>
			<?php endif; ?>
      
      </div>
	  </div>
	</section>

	</main>

<?php get_footer();