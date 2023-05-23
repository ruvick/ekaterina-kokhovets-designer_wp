<div class="services__column">
	<div class="services__card">
		<div class="services__card-descp">
			<h5 class="services__card-descp-name"><? the_title();?></h5>
			<span class="services__card-descp-name-line line-mini"></span>
			<p class="services__card-descp-text">
				<?php 
					$maxchar = 100;
					$text = strip_tags( get_the_excerpt() );
						echo mb_substr( $text, 0, $maxchar );
				?>
			</p>
		</div>
		<div class="services__card-slider ">
			<div class="services__card-slider-inner servicesSl _swiper">
			<? 
				$servPict = carbon_get_post_meta(get_the_ID(),"service_picture"); 
					if ($servPict) {
				$servPictIndex = 0;
					foreach ($servPict as $item) {
			?>
				<div class="services__card-slider-slide slider-slide">
					<img src="<?php echo wp_get_attachment_image_src($item['service_img'], 'large')[0]; ?>" alt=""> 						
				</div>
			<?
				$servPictIndex++; 
					}
				}
			?>
			</div>
			<div class="product-sl-paggination servicesSl-paggination"></div> 
		</div>
		<a href="<?echo get_the_permalink(get_the_ID());?>" class="services__card-btn btn btn_white">Подробнее</a>
	</div>
</div>