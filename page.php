
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package light_market
 */

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section class="page-banner page-banner-services">
		<div class="page-banner__nuar_blk nuar_blk"></div>
		<div class="page-banner__container _container">
			<h1 class="page-banner__title title">
				Мы предлагаем <br>
				<span>НАШИ УСЛУГИ</span>
			</h1>
		</div>
	</section>

	<section id="page-section" class="page-section">
		<div class="_container">

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