<? 
	$team = carbon_get_theme_option('complex_team'); 
	if ($team) {
		$teamIndex = 0;
		foreach ($team as $item) {
			?>
        <div class="team__column">
          <div class="team__card">
            <div class="team__card-img">
              <img src="<?php echo wp_get_attachment_image_src($item['img_team'], 'large')[0]; ?>" loading="lazy" alt="<? the_title();?>">
            </div>
            <h5 class="team__card-name"><? echo $item['name_team']; ?></h5>
            <div class="team__card-line line-mini"></div>
            <div class="team__card-speciality"><? echo $item['specialization_team']; ?></div>
          </div>
        </div>
			<?
			$teamIndex++; 
		}
	}
	?>