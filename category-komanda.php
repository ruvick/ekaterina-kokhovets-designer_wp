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
				Мы рады помочь вам <br>
				<span><? single_cat_title(); ?></span>
			</h1>
		</div>
	</section> 

  <section id="page-section" class="page-section">

<div class="team__wrap">
  <div class="team__bg"></div>
  <div class="_container">

    <div class="team__img">
      <picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/1-1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/1-1.jpg?_v=1658398529275" alt=""></picture>
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

<div class="_container">

  <div class="team__inner page-inner">
    <?php
			while (have_posts()) :
				the_post();
				get_template_part('template-parts/team-elem');
			endwhile;
		?>
  </div>

</div>

</div>
</section>

	</main>

<?php get_footer(); ?>  