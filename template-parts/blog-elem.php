<div class="blog__column">
	<div class="blog__card">
		<a href="<?echo get_the_permalink(get_the_ID());?>"class="blog__card-img">
			<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
		</a>
		<div class="blog__card-descp">
			<h5 class="blog__card-descp-title"><? the_title();?></h5>
			<div class="blog__card-descp-line line-mini"></div>
			<p class="blog__card-descp-text">
				<?php 
					$maxchar = 200;
					$text = strip_tags( get_the_excerpt() );
						echo mb_substr( $text, 0, $maxchar );
				?>
			</p>
		</div>
		<a href="<?echo get_the_permalink(get_the_ID());?>" class="blog__card-btn btn btn_white">Подробнее</a> 
	</div>
</div>