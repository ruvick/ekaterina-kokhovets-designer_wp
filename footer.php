<footer id="footer" class="footer">

<div class="footer__top">
  <div class="_container">
    <div class="footer__top-inner d-flex">

      <a href="<? bloginfo("url"); ?>" class="logo-icon footer__logo"></a>

      <div class="footer__top-menu d-flex">
        <div class="footer__top-menu-column">
          <h6 class="footer__top-menu-title">УСЛУГИ</h6>
          <?php wp_nav_menu( array('theme_location' => 'menu_services','menu_class' => 'footer__top-menu-list',
						'container_class' => 'footer__top-menu-list','container' => false )); ?> 
        </div>
        <div class="footer__top-menu-column">
          <h6 class="footer__top-menu-title">ПОРТФОЛИО</h6>
          <?php wp_nav_menu( array('theme_location' => 'menu_portfolio','menu_class' => 'footer__top-menu-list',
						'container_class' => 'footer__top-menu-list','container' => false )); ?> 
        </div>
        <div class="footer__top-menu-column">
          <h6 class="footer__top-menu-title">КОНТАКТЫ</h6>
          <? $tel = carbon_get_theme_option("as_phones_1"); 
					if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="footer__top-menu-phone contacts__phone"><? echo $tel; ?></a><?}?> 
          <div class="footer__top-menu-soc-block soc-block">
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
          <p class="footer__top-menu-soc-text">Мы в соцсетях</p>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="footer__bottom">
  <div class="_container">
    <div class="footer__bottom-inner">
      <p class="footer__bottom-text">© 2019-2022 Студия дизайна интерьера Екатерины Коховец</p>
      <span>/</span>
      <a href="#" class="footer__bottom-policy">Политика конфиденциальности</a>
    </div>
  </div>
</div>

</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>