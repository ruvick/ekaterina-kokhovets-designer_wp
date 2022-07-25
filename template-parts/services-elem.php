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
				<div class="services__card-slider-slide slider-slide">
					<picture><source srcset="<?php echo get_template_directory_uri();?>/img/services/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/services/01.jpg?_v=1658398529275" alt=""></picture>
				</div>
				<div class="services__card-slider-slide slider-slide">
					<picture><source srcset="<?php echo get_template_directory_uri();?>/img/services/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/services/02.jpg?_v=1658398529275" alt=""></picture>
				</div>
				<div class="services__card-slider-slide slider-slide">
					<picture><source srcset="<?php echo get_template_directory_uri();?>/img/services/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/services/03.jpg?_v=1658398529275" alt=""></picture>
				</div>
			</div>
			<div class="servicesSl-swiper-paggination"></div>
		</div>
		<a href="<?echo get_the_permalink(get_the_ID());?>" class="services__card-btn btn btn_white">Подробнее</a>
	</div>
</div>