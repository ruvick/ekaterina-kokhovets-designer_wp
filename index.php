<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section id="slider-main" class="slider-main">

	<div class="slider-bg-wrap ">
		<div class="slider-bg _swiper">

			<div class="slider-bg__slide slider__slide slider-main__slide-1">
				<div class="nuar_blk"></div>
				<div class="slider-bg__container _container">
					<h1 class="slider-bg__title title">
						Представьте <br>
						<span>СВОЙ БУДУЩИЙ ДОМ</span> 
					</h1>
					<a href="#callback" class="slider-bg__link btn _popup-link">Дома и квартиры</a>
				</div>
			</div>

			<div class="slider-bg__slide slider__slide slider-main__slide-1">
				<div class="nuar_blk"></div>
				<div class="slider-bg__container _container">
					<h1 class="slider-bg__title title">
						Представьте <br>
						<span>СВОЙ БУДУЩИЙ ДОМ</span>
					</h1>
					<a href="#callback" class="slider-bg__link btn _popup-link">Дома и квартиры</a>
				</div>
			</div>

			<div class="slider-bg__slide slider__slide slider-main__slide-1">
				<div class="nuar_blk"></div>
				<div class="slider-bg__container _container">
					<h1 class="slider-bg__title title">
						Представьте <br>
						<span>СВОЙ БУДУЩИЙ ДОМ</span>
					</h1>
					<a href="#callback" class="slider-bg__link btn _popup-link">Дома и квартиры</a>
				</div>
			</div>

		</div>
		<div class="product-sl-paggination swiper-paggination"></div>
	</div>

</section>

<? $abouttc = carbon_get_theme_option("about_home");
	if (!empty($abouttc)) { ?>
<section id="about" class="about section">
	<div class="_container">
		<h2 class="about__title title"><?php echo carbon_get_theme_option('about_home_title'); ?></h2>
		<? echo $abouttc; ?>
	</div>
</section>
<? } ?>

<section id="objects" class="objects section">
	<div class="_container">

		<h2 class="objects__title title">
			Жилые помещения <br>
			<span>КВАРТИРЫ, ДОМА</span>
		</h2>

		<div class="objects__inner">

			<div class="objects__column">
				<a href="page-house.html" class="card-objects">
					<div class="card-objects__img">
						<div class="card-objects__img-nuar_blk nuar_blk"></div>
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/objects/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/objects/01.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<div class="card-objects__descp">
						<h3 class="card-objects__descp-title">
							Дома <br>
							<span>КОТТЕДЖ В ЛЕСУ</span>
						</h3>
					</div>
				</a>
			</div>

			<div class="objects__column">
				<a href="" class="card-objects">
					<div class="card-objects__img">
						<div class="card-objects__img-nuar_blk nuar_blk"></div>
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/objects/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/objects/01.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<div class="card-objects__descp">
						<h3 class="card-objects__descp-title">
							Квартиры <br>
							<span>УЮТНАЯ КВАРТИРА</span>
						</h3>
					</div>
				</a>
			</div>

			<div class="objects__column">
				<a href="" class="card-objects">
					<div class="card-objects__img">
						<div class="card-objects__img-nuar_blk nuar_blk"></div>
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/objects/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/objects/01.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<div class="card-objects__descp">
						<h3 class="card-objects__descp-title">
							Дома <br>
							<span>ТАУНХАУС</span>
						</h3>
					</div>
				</a>
			</div>

		</div>

		<h2 class="objects__title title">
			Общественные помещения <br>
			<span>РЕСТОРАНЫ, КАФЕ, ОТЕЛИ, ОФИСЫ</span>
		</h2>

		<div class="objects__inner">

			<div class="objects__column">
				<a href="" class="card-objects">
					<div class="card-objects__img">
						<div class="card-objects__img-nuar_blk nuar_blk"></div>
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/objects/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/objects/04.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<div class="card-objects__descp">
						<h3 class="card-objects__descp-title">
							Рестораны и кафе <br>
							<span>РЕСТОРАН В СОЧИ</span>
						</h3>
					</div>
				</a>
			</div>

			<div class="objects__column">
				<a href="" class="card-objects">
					<div class="card-objects__img">
						<div class="card-objects__img-nuar_blk nuar_blk"></div>
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/objects/05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/objects/05.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<div class="card-objects__descp">
						<h3 class="card-objects__descp-title">
							Рестораны и кафе <br>
							<span>КАФЕ В ПИТЕРЕ</span>
						</h3>
					</div>
				</a>
			</div>

			<div class="objects__column">
				<a href="" class="card-objects">
					<div class="card-objects__img">
						<div class="card-objects__img-nuar_blk nuar_blk"></div>
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/objects/06.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/objects/06.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<div class="card-objects__descp">
						<h3 class="card-objects__descp-title">
							Отели <br>
							<span>У МОРЯ</span>
						</h3>
					</div>
				</a>
			</div>

		</div>

		<a href="#" class="objects__btn btn btn_white">Смотреть все портфолио</a>

	</div>
</section>

<section id="banner" class="banner">
	<div class="nuar_blk"></div>
	<div class="_container">
		<h2 class="banner__title title">
			Создадим для Вас <br>
			<span>ИНТЕРЬЕР МЕЧТЫ</span>
		</h2>
	</div>
</section>

<section id="services" class="services section">
	<div class="_container">
		<h2 class="services__title title">
			Мы предллагаем <br>
			<span>НАШИ УСЛУГИ</span>
		</h2>
	</div>
	<div class="services__wrap">
		<div class="_container">

			<div class="services__inner">

				<div class="services__column">
					<div class="services__card">
						<div class="services__card-descp">
							<h5 class="services__card-descp-name">УСЛУГА №1</h5>
							<span class="services__card-descp-name-line line-mini"></span>
							<p class="services__card-descp-text">
								Разработка дизайн-проектов квартир, коттеджей, домов,
								ресторанов, баров, кафе, офисов, гостиниц
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
						<div class="services__card-btn btn btn_white">Подробнее</div>
					</div>
				</div>

				<div class="services__column">
					<div class="services__card">
						<div class="services__card-descp">
							<h5 class="services__card-descp-name">УСЛУГА №2</h5>
							<span class="services__card-descp-name-line line-mini"></span>
							<p class="services__card-descp-text">
								Разработка дизайн-проектов квартир, коттеджей, домов,
								ресторанов, баров, кафе, офисов, гостиниц
							</p>
						</div>
						<div class="services__card-slider ">
							<div class="services__card-slider-inner servicesSl _swiper">
								<div class="services__card-slider-slide slider-slide">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/services/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/services/02.jpg?_v=1658398529275" alt=""></picture>
								</div>
								<div class="services__card-slider-slide slider-slide">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/services/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/services/03.jpg?_v=1658398529275" alt=""></picture>
								</div>
								<div class="services__card-slider-slide slider-slide">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/services/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/services/01.jpg?_v=1658398529275" alt=""></picture>
								</div>
							</div>
							<div class="servicesSl-swiper-paggination"></div>
						</div>
						<div class="services__card-btn btn btn_white">Подробнее</div>
					</div>
				</div>

				<div class="services__column">
					<div class="services__card">
						<div class="services__card-descp">
							<h5 class="services__card-descp-name">УСЛУГА №3</h5>
							<span class="services__card-descp-name-line line-mini"></span>
							<p class="services__card-descp-text">
								Разработка дизайн-проектов квартир, коттеджей, домов,
								ресторанов, баров, кафе, офисов, гостиниц
							</p>
						</div>
						<div class="services__card-slider ">
							<div class="services__card-slider-inner servicesSl _swiper">
								<div class="services__card-slider-slide slider-slide">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/services/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/services/03.jpg?_v=1658398529275" alt=""></picture>
								</div>
								<div class="services__card-slider-slide slider-slide">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/services/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/services/01.jpg?_v=1658398529275" alt=""></picture>
								</div>
								<div class="services__card-slider-slide slider-slide">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/services/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/services/02.jpg?_v=1658398529275" alt=""></picture>
								</div>
							</div>
							<div class="servicesSl-swiper-paggination"></div>
						</div>
						<a href="page-service.html" class="services__card-btn btn btn_white">Подробнее</a>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>

<section id="reviews" class="reviews section">
	<div class="_container">
		<h2 class="reviews__title title">
			Клиенты о нас <br>
			<span>ОТЗЫВЫ</span>
		</h2>

		<div class="reviews__inner">

			<!-- <div class="reviews__column"> -->
			<div class="reviews__card">
				<div class="reviews__card-descp">
					<h5 class="reviews__card-descp-name">Алексей</h5>
					<div class="reviews__card-descp-date">18 сентября 2020</div>
					<div class="reviews__card-descp-line"></div>
					<div class="reviews__card-descp-text">
						<p>Здравствуйте!</p>
						<p>
							Хотим отметить Венеру, как грамотного специалиста, добросовестного работника и чуткого человека.
							Благодаря ей мы оперативно и выгодно продали одну квартиру и приобрели две новые. Венера сумела
							найти общий язык со всеми участниками сделок, обойти всё острые углы и ,проявив невероятное
							терпение, удовлетворила интересы каждого:) От души благодарим!
						</p>
					</div>
					<a href="" class="reviews__card-descp-link">Читать отзыв в Vk</a>
				</div>
				<div class="reviews__card-slider ">
					<div class="reviews__card-slider-inner reviewsSl _swiper">
						<div class="reviews__card-slider-slide slider-slide">
							<picture><source srcset="<?php echo get_template_directory_uri();?>/img/reviews/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/reviews/01.jpg?_v=1658398529275" alt=""></picture>
						</div>
						<div class="reviews__card-slider-slide slider-slide">
							<picture><source srcset="<?php echo get_template_directory_uri();?>/img/reviews/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/reviews/02.jpg?_v=1658398529275" alt=""></picture>
						</div>
					</div>
					<!-- <div class="servicesSl-swiper-paggination"></div> -->
				</div>
			</div>
			<!-- </div> -->

			<!-- <div class="reviews__column"> -->
			<div class="reviews__card">
				<div class="reviews__card-descp">
					<h5 class="reviews__card-descp-name">Михаил</h5>
					<div class="reviews__card-descp-date">18 сентября 2020</div>
					<div class="reviews__card-descp-line"></div>
					<div class="reviews__card-descp-text">
						<p>Здравствуйте!</p>
						<p>
							Хотим отметить Венеру, как грамотного специалиста, добросовестного работника и чуткого человека.
							Благодаря ей мы оперативно и выгодно продали одну квартиру и приобрели две новые. Венера сумела
							найти общий язык со всеми участниками сделок, обойти всё острые углы и ,проявив невероятное
							терпение, удовлетворила интересы каждого:) От души благодарим!
						</p>
					</div>
					<a href="" class="reviews__card-descp-link">Читать отзыв в Vk</a>
				</div>
				<div class="reviews__card-slider ">
					<div class="reviews__card-slider-inner reviewsSl _swiper">
						<div class="reviews__card-slider-slide slider-slide">
							<picture><source srcset="<?php echo get_template_directory_uri();?>/img/reviews/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/reviews/02.jpg?_v=1658398529275" alt=""></picture>
						</div>
						<div class="reviews__card-slider-slide slider-slide">
							<picture><source srcset="<?php echo get_template_directory_uri();?>/img/reviews/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/reviews/01.jpg?_v=1658398529275" alt=""></picture>
						</div>
					</div>
					<div class="product-sl-paggination servicesSl-swiper-paggination"></div>
				</div>
			</div>
			<!-- </div> -->

		</div>

	</div>
</section>

<section id="team" class="team section">
	<div class="_container">
		<h2 class="team__title title">
			Мы рады помочь Вам <br>
			<span>НАША КОМАНДА</span>
		</h2>
	</div>

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
						Идейные соображения высшего порядка, а также выбранный нами инновационный путь требует от нас анализа
						благоприятных перспектив. Значимость этих проблем настолько очевидна, что внедрение современных
						методик, а также свежий взгляд на привычные вещи — безусловно открывает новые горизонты для анализа
						существующих паттернов поведения.
					</p>
					<p>
						Таким образом, сплочённость команды профессионалов, в своём классическом представлении, допускает
						внедрение укрепления моральных ценностей. С другой стороны, начало повседневной работы по формированию
						позиции требует определения и уточнения кластеризации усилий. Однозначно, представители современных
						социальных резервов представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и
						должны быть описаны максимально подробно.
					</p>
				</div>
			</div>
		</div>

	</div>

	<div class="_container">

		<div class="team__inner">

			<div class="team__column">
				<div class="team__card">
					<div class="team__card-img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/01.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<h5 class="team__card-name">
						НАТАЛЬЯ
						Александровна
					</h5>
					<div class="team__card-line line-mini"></div>
					<div class="team__card-speciality">проектировщик</div>
				</div>
			</div>

			<div class="team__column">
				<div class="team__card">
					<div class="team__card-img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/02.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<h5 class="team__card-name">
						СЕРГЕЙ
						Александрович
					</h5>
					<div class="team__card-line line-mini"></div>
					<div class="team__card-speciality">
						руководитель <br>
						по строительству
					</div>
				</div>
			</div>

			<div class="team__column">
				<div class="team__card">
					<div class="team__card-img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/03.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<h5 class="team__card-name">
						ДЕНИС
						Владимирович
					</h5>
					<div class="team__card-line line-mini"></div>
					<div class="team__card-speciality">визуалист</div>
				</div>
			</div>

			<div class="team__column">
				<div class="team__card">
					<div class="team__card-img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/04.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<h5 class="team__card-name">
						ТАТЬЯНА
						Валентиновна
					</h5>
					<div class="team__card-line line-mini"></div>
					<div class="team__card-speciality">
						архитектор, <br>
						проектировщик
					</div>
				</div>
			</div>

			<div class="team__column">
				<div class="team__card">
					<div class="team__card-img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/team/05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/team/05.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<h5 class="team__card-name">
						РОМАН
						Александрович
					</h5>
					<div class="team__card-line line-mini"></div>
					<div class="team__card-speciality">визуалист</div>
				</div>
			</div>

		</div>

	</div>
</section>

<section id="consultation" class="consultation section">
	<div class="consultation__nuar_blk nuar_blk"></div>
	<div class="_container">
		<h2 class="consultation__title title">
			Консультация дизайнера <br>
			<span>У Вас остались вопросы? Мы поможем!</span>
		</h2>
		<form action="#" class="consultation__form">
			<div class="consultation__form-column">
				<input type="text" name="" placeholder="Введите Ваш телефон*" class="consultation__form-input input">
			</div>
			<div class="consultation__form-column">
				<input type="text" name="" placeholder="Сообщение" class="consultation__form-input input">
				<label for="check" class="consultation__form-checkbox checkbox">
					<input id="check" data-error="Ошибка" class="checkbox__input" type="checkbox" value="1" name="form[]">
					<span class="checkbox__text"><span> Я согласен на обработку персональных данных</span></span>
				</label>
				<button type="submit" class="consultation__form-btn btn">Получить консультацию</button>
			</div>
		</form>
	</div>
</section>

<section id="blog" class="blog section">
	<div class="_container">
		<h2 class="blog__title title">
			Полезные материалы <br>
			<span>БЛОГ</span>
		</h2>

		<div class="blog__inner">

			<div class="blog__column">
				<div class="blog__card">
					<div class="blog__card-img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/blog/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/blog/01.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<div class="blog__card-descp">
						<h5 class="blog__card-descp-title">Ремонт квартир и домов</h5>
						<div class="blog__card-descp-line line-mini"></div>
						<p class="blog__card-descp-text">
							На кухне установлена газовая плита и, согласно нормативам, кухню требовалось отделить от гостиной.
							Авторы проекта предусмотрели между двумя помещениями откатную перегородку, а остальные
						</p>
					</div>
					<a href="#" class="blog__card-btn btn btn_white">Подробнее</a>
				</div>
			</div>

			<div class="blog__column">
				<div class="blog__card">
					<div class="blog__card-img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/blog/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/blog/02.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<div class="blog__card-descp">
						<h5 class="blog__card-descp-title">Правильное освещение</h5>
						<div class="blog__card-descp-line line-mini"></div>
						<p class="blog__card-descp-text">
							На кухне установлена газовая плита и, согласно нормативам, кухню требовалось отделить от гостиной.
							Авторы проекта предусмотрели между двумя помещениями откатную перегородку, а остальные
						</p>
					</div>
					<a href="#" class="blog__card-btn btn btn_white">Подробнее</a>
				</div>
			</div>

			<div class="blog__column">
				<div class="blog__card">
					<div class="blog__card-img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/blog/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/blog/03.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<div class="blog__card-descp">
						<h5 class="blog__card-descp-title">Гармоничный интерьер</h5>
						<div class="blog__card-descp-line line-mini"></div>
						<p class="blog__card-descp-text">
							На кухне установлена газовая плита и, согласно нормативам, кухню требовалось отделить от гостиной.
							Авторы проекта предусмотрели между двумя помещениями откатную перегородку, а остальные
						</p>
					</div>
					<a href="#" class="blog__card-btn btn btn_white">Подробнее</a>
				</div>
			</div>

			<div class="blog__column">
				<div class="blog__card">
					<div class="blog__card-img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/blog/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/blog/04.jpg?_v=1658398529275" alt=""></picture>
					</div>
					<div class="blog__card-descp">
						<h5 class="blog__card-descp-title">Интерьер и природа</h5>
						<div class="blog__card-descp-line line-mini"></div>
						<p class="blog__card-descp-text">
							На кухне установлена газовая плита и, согласно нормативам, кухню требовалось отделить от гостиной.
							Авторы проекта предусмотрели между двумя помещениями откатную перегородку, а остальные
						</p>
					</div>
					<a href="#" class="blog__card-btn btn btn_white">Подробнее</a>
				</div>
			</div>

		</div>

	</div>
</section>

</main>

<?php get_footer(); ?> 