<?php 

/*
Template Name: Страница Команда
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?> 

<main class="page">

			<section class="page-banner page-banner-team">
				<div class="page-banner__nuar_blk nuar_blk"></div>
				<div class="page-banner__container _container">
					<h1 class="page-banner__title title">
						Мы рады помочь Вам <br>
						<span><?php the_title();?></span>
					</h1>
				</div>
			</section>

			<section id="page-section" class="page-section">
        <? $teamPost = carbon_get_theme_option("team_text");
	        if (!empty($teamPost)) { ?>
				  <div class="team__wrap">
					  <div class="team__bg"></div>
					  <div class="_container">
						  <div class="team__img">
                <img src="<?php echo wp_get_attachment_image_src(carbon_get_theme_option("team_images"), 'full')[0];?>" alt="<? the_title();?>">						
              </div>
						  <div class="team__descp">
							  <h5 class="team__title"><?php echo carbon_get_theme_option('team_title'); ?></h5>
							  <p class="team__subtitle"><?php echo carbon_get_theme_option('team_subtitle'); ?></p>
							  <div class="team__descp-text-block">
                  <? echo $teamPost; ?>
							  </div>
						  </div>
					  </div>
				  </div>
        <? } ?>

				<div class="_container">
					<div class="team__inner page-inner">
            <?php get_template_part('template-parts/team-elem');?>
					</div>
				</div>
	    </section>

	</main>

  <?php get_footer(); 