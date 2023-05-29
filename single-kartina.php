<?php

/*
Template Name: Картины
WP Post Template: Шаблон записи Картины
Template Post Type: post
*/ 

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section class="page-banner page-banner-services">
		<div class="bg-top"></div>
		<div class="page-banner__nuar_blk nuar_blk"></div>
		<div class="page-banner__container _container">
			<h1 class="page-banner__title title">
                Картины<br>
				<span><?php the_title(); ?></span>
            </h1>
		</div>
	</section>

	<section id="page-section" class="page-section">
		<div class="_container">
        <div class="uni_text_blk uni_text_blk_incat">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content();?> 
                    <?php endwhile;?>
                <?php endif; ?>
        
        </div>
	  </div>
	</section>

	</main>

<?php get_footer();