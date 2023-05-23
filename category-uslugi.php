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
				Мы предлагаем <br>
				<span><? single_cat_title(); ?></span>
			</h1>
		</div>
	</section>

	<section id="page-section" class="page-section">
		<div class="_container">

		<div class="uni_text_blk uni_text_blk_incat">
			<?echo category_description();?>
		</div>
	

      <div class="services__inner page-inner">
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
	</section>

	</main>

<?php get_footer(); ?>  