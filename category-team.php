<?php get_header(); ?> 

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section class="page-banner page-banner-services">
		<div class="page-banner__nuar_blk nuar_blk"></div>
		<div class="page-banner__container _container">
			<h1 class="page-banner__title title">
        <? single_cat_title(); ?>
				<!-- Мы предлагаем <br>
				<span>НАШИ УСЛУГИ</span> -->
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
      <h5 class="team__title">ЕКАТЕРИНА КОХОВЕЦ</h5>
      <p class="team__subtitle">руководитель по дизайну</p>
      <div class="team__descp-text-block">
        <p>
          А также непосредственные участники технического прогресса, вне зависимости от их уровня, должны быть
          подвергнуты целой серии независимых исследований! В частности, сплочённость команды профессионалов
          требует от нас анализа распределения внутренних резервов и ресурсов.
        </p>
        <p>
          Идейные соображения высшего порядка, а также выбранный нами инновационный путь требует от нас
          анализа
          благоприятных перспектив. Значимость этих проблем настолько очевидна, что внедрение современных
          методик, а также свежий взгляд на привычные вещи — безусловно открывает новые горизонты для анализа
          существующих паттернов поведения.
        </p>
        <p>
          Таким образом, сплочённость команды профессионалов, в своём классическом представлении, допускает
          внедрение укрепления моральных ценностей. С другой стороны, начало повседневной работы по
          формированию
          позиции требует определения и уточнения кластеризации усилий. Однозначно, представители современных
          социальных резервов представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом
          и
          должны быть описаны максимально подробно.
        </p>
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