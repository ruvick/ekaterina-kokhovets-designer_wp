<header id="header" class="header">
	<div class="header__container _container">

		<div class="header__row d-flex">

			<a href="<? bloginfo("url"); ?>" class="logo-icon header__logo"></a> 

			<ul class="menu-list header__menu-list d-flex">
				<li class="menu-list__item"><a href="index.html" class="menu-list__link">Главная</a></li>
				<li class="menu-list__item"><a href="page-portfolio.html" class="menu-list__link">Портфолио</a></li>
				<li class="menu-list__item"><a href="page-services.html" class="menu-list__link">Услуги</a></li>
				<li class="menu-list__item"><a href="#" class="menu-list__link">Отзывы</a></li>
				<li class="menu-list__item"><a href="page-team.html" class="menu-list__link">Команда</a></li>
				<li class="menu-list__item"><a href="page-blog.html" class="menu-list__link">Блог</a></li>
				<li class="menu-list__item"><a href="#" class="menu-list__link">Картины</a></li>
				<li class="menu-list__item"><a href="#footer" class="menu-list__link">Контакты</a></li>
			</ul>
			<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu__list',
						'container_class' => 'menu__list','container' => false )); ?>  -->

			<div class="header__contacts contacts d-flex">
				<div class="header__soc-block soc-block">
					<? $ok = carbon_get_theme_option("as_ok"); if (!empty($ok)){?>
					<a href="<? echo $ok; ?>" class="soc-block__icon soc-block__icon_01"></a><?}?>
					<? $insta = carbon_get_theme_option("as_insta"); if (!empty($insta)){?>
					<a href="<? echo $insta; ?>" class="soc-block__icon soc-block__icon_02"></a><?}?>
					<? $vk= carbon_get_theme_option("as_vk"); if (!empty($vk)){?>
					<a href="<? echo $vk; ?>" class="soc-block__icon soc-block__icon_03"></a><?}?>
					<? $telegr= carbon_get_theme_option("as_insta"); if (!empty($telegr)){?>
					<a href="<? echo $telegr; ?>" class="soc-block__icon soc-block__icon_04"></a><?}?>
					<? $whatsapp= carbon_get_theme_option("as_whatsapp"); if (!empty($whatsapp)){?>
					<a href="<? echo $whatsapp; ?>" class="soc-block__icon soc-block__icon_05"></a><?}?>
				</div>
				<? $tel = carbon_get_theme_option("as_phones_1"); 
					if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="contacts__phone header__phone"><? echo $tel; ?></a><?}?> 
			</div>
			<a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="mob-phone-icon header__mob-phone-icon"></a>

			<div class="icon-menu" aria-label="Бургер меню">
				<span></span>
				<span></span>
				<span></span>
			</div>

		</div>
</header>

<!-- Мобильное меню -->
<div class="mob-menu header__mob-menu">
	<ul class="mob-menu__list">
		<li class="mob-menu__item"><a href="index.html" class="mob-menu__link">Главная</a></li>
		<li class="mob-menu__item"><a href="page-portfolio.html" class="mob-menu__link">Портфолио</a></li>
		<li class="mob-menu__item"><a href="page-services.html" class="mob-menu__link">Услуги</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Отзывы</a></li>
		<li class="mob-menu__item"><a href="page-team.html" class="mob-menu__link">Команда</a></li>
		<li class="mob-menu__item"><a href="page-blog.html" class="mob-menu__link">Блог</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Картины</a></li>
		<li class="mob-menu__item"><a href="#footer" class="mob-menu__link">Контакты</a></li>
	</ul>
	<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
		'container_class' => 'mob-menu__list','container' => false )); ?>  -->
	<a href="#callback" class="header__popup-link header__popup-link_mob btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div>