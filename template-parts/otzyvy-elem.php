			<!-- <div class="reviews__column"> -->
			<div class="reviews__card">
				<div class="reviews__card-descp">
					<h5 class="reviews__card-descp-name"><? the_title();?></h5>
					<div class="reviews__card-descp-date"><?php the_time('j F Y'); ?></div> 
					<div class="reviews__card-descp-line"></div>
					<div class="reviews__card-descp-text"> 
						<?php the_content(); ?>
					</div>
					<? $otzlink = carbon_get_post_meta(get_the_ID(),"otzyvy_link");
						if (!empty($otzlink)) { ?>
						<a href="<? echo $otzlink; ?>" class="reviews__card-descp-link">Читать отзыв в Vk</a>
					<? } ?>
				</div>
				<div class="reviews__card-slider ">
					<div class="reviews__card-slider-inner reviewsSl _swiper">
					<? 
						$otzPict = carbon_get_post_meta(get_the_ID(),"otzyvy_picture"); 
							if ($otzPict) {
						$otzPictIndex = 0;
							foreach ($otzPict as $item) {
					?>
						<div class="reviews__card-slider-slide slider-slide">
							<img src="<?php echo wp_get_attachment_image_src($item['otzyvy_img'], 'large')[0]; ?>" alt=""> 						
						</div>
					<?
						$otzPictIndex++; 
							}
						}
					?>
					</div>
					<!-- Кнопки-стрлеки -->
					<div class="reviews__card-slider__swiper-button-block swiper-button-block">
						<div class="reviews__card-slider__swiper-button-next swiper-button swiper-button-next"></div>
						<div class="reviews__card-slider__swiper-button-prev swiper-button swiper-button-prev"></div>
					</div>
					<!-- Кнопки-стрлеки End -->
				</div>
			</div>
			<!-- </div> -->