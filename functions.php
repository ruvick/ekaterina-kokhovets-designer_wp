<?php

define("COMPANY_NAME", "Новый сайт");
define("MAIL_RESEND", "noreply@ultrakresla.ru"); 

//----Подключене carbon fields
//----Инструкции по подключению полей см. в комментариях themes-fields.php
include "carbon-fields/carbon-fields-plugin.php";

use Carbon_Fields\Container; 
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options'); 
function crb_attach_theme_options()
{
	require_once __DIR__ . "/themes-fields.php";
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once('carbon-fields/vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}


// Menu ===========================================================================================================
//-----Блок описания вывода меню =========================================================================
// 1. Осмысленные названия для алиаса и для описания на русском.
// если это меню в подвали пишем - Меню в подвале 
// если в шапке то пишем - Меню в шапке 
// если 2 меню в шапке пишем  - Меню в шапке (верхняя часть)

add_action('after_setup_theme', function () {
	register_nav_menus([
		// 'menu_hot' => 'Меню актуальных предложений (рядом с каталогом)',
		'menu_main' => 'Меню основное',
		'menu_services' => 'Меню Услуги (в подвале)',
		'menu_portfolio' => 'Меню Портфолио (в подвале)',
		// 'menu_corp' => 'Общекорпоративное меню (верхняя шапка)', 
	]);
});


// Добавление стилей к пунктам меню li
// add_filter('nav_menu_css_class', 'change_menu_item_css_classes', 10, 4);

// function change_menu_item_css_classes($classes, $item, $args, $depth)
// {
// 	if ($item->ID  && 'menu_cat' === $args->theme_location) {
// 		$classes[] = 'footer-top-wrap-list-item-sublist-item';
// 	}

// 	if ($item->ID  && 'menu_company' === $args->theme_location) {
// 		$classes[] = 'footer-top-wrap-list-item-sublist-item';
// 	}

// 	if ($item->ID  && 'menu_main' === $args->theme_location) {
// 		$classes[] = 'header-bottom-wrap-menu-item';
// 	}

// 	return $classes;
// }


// Добавляет атрибут class к ссылке в пунктах меню menu_main
// add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);
// function filter_nav_menu_link_attributes($atts, $item, $args, $depth)
// {
// 	if (in_array($args->theme_location, ['menu_main'])) {
// 		$atts['class'] = 'header-bottom-wrap-menu-item__link';

// 		if ($item->current) {
// 			$atts['class'] .= ' menu-link--active'; //активный пункт меню
// 		}
// 	}
// 	return $atts;
// }


// Добавляет иконку к ссылкам меню, прикрепленное к области меню menu_main
// function change_menu_item_args($args)
// {
// 	if ($args->theme_location == 'menu_main') {
// 		$args->link_after = '<img src="' . get_template_directory_uri() . '/img/home/header-menu-arrow-down.svg" alt="" class="header-bottom-wrap-menu-item-down__img">';
// 	}

// 	return $args;
// }
// add_filter('nav_menu_item_args', 'change_menu_item_args');


// Добавляем класс к submenu, прикрепленное к области меню menu_main
// add_filter('nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3);

// function change_wp_nav_menu($classes, $args, $depth)
// {
// 	if ($args->theme_location == 'menu_main') {
// 		$classes[] = 'header-bottom-wrap-menu-item-submenu';
// 		// $classes[] = 'my-css-2';
// 	}

// 	return $classes;
// }


// Изменить css класс submenu 
// add_filter('nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3);

// function change_wp_nav_menu($classes, $args, $depth)
// {
// 	foreach ($classes as $key => $class) {
// 		if ($class == 'sub-menu') {
// 			$classes[$key] = 'header-bottom-wrap-menu-item-submenu';
// 		}
// 	}

// 	return $classes;
// }
// === Menu End ========================================================================================================



add_theme_support('post-thumbnails');
set_post_thumbnail_size(185, 185);

add_post_type_support('page', 'excerpt');

// Подключение стилей и nonce для Ajax в админку 
add_action('admin_head', 'my_assets_admin');
function my_assets_admin()
{
	wp_enqueue_style("style-adm", get_template_directory_uri() . "/style-admin.css");

	wp_localize_script('jquery', 'allAjax', array(
		'nonce'   => wp_create_nonce('NEHERTUTLAZIT')
	));
}

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 
add_action('wp_enqueue_scripts', 'my_assets');
function my_assets()
{

	// Подключение стилей 

	$style_version = "1.0.1";
	$scrypt_version = "1.0.1"; 

	// wp_enqueue_style("style-modal", get_template_directory_uri() . "/css/jquery.arcticmodal-0.3.css", array(), $style_version, 'all'); //Модальные окна (стили)
	// wp_enqueue_style("style-lightbox", get_template_directory_uri() . "/css/lightbox.min.css", array(), $style_version, 'all'); //Лайтбокс (стили)
	// wp_enqueue_style("style-slik", get_template_directory_uri() . "/css/slick.css", array(), $style_version, 'all'); //Слайдер (стили)
	// wp_enqueue_style("style-fancybox", get_template_directory_uri() . "/css/fancybox.css", array(), $style_version, 'all'); //fancybox (стили)

	wp_enqueue_style("main-style", get_stylesheet_uri(), array(), $style_version, 'all'); // Подключение основных стилей в самом конце

	// Подключение скриптов

	wp_enqueue_script('jquery'); 

	// wp_enqueue_script('forms', get_template_directory_uri() . '/js/forms.js', array(), $scrypt_version, true); //Формы отправки и валидация
	// wp_enqueue_script('slick', get_template_directory_uri() . '/js/sliders/slick.min.js', array(), $scrypt_version, true); //Слайдер Slick
	// wp_enqueue_script('swiper', get_template_directory_uri() . '/js/sliders/swiper.js', array(), $scrypt_version, true); //Слайдер Swiper
	// wp_enqueue_script('functions', get_template_directory_uri() . '/js/functions.js', array(), $scrypt_version, true); //Спойлеры, табы и прочий функционал
	// wp_enqueue_script('amodal', get_template_directory_uri() . '/js/jquery.arcticmodal-0.3.min.js', array(), $scrypt_version, true); //Модальные окна
	// wp_enqueue_script('mask', get_template_directory_uri() . '/js/jquery.inputmask.bundle.js', array(), $scrypt_version, true); //маска для инпутов
	// wp_enqueue_script('lightbox', get_template_directory_uri() . '/js/imageGallery/lightbox.min.js', array(), $scrypt_version, true); //Лайтбокс
	// wp_enqueue_script('fslightbox', get_template_directory_uri() . '/js/imageGallery/fslightbox.js', array(), $scrypt_version, true); //Лайтбокс JS 
	// wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/imageGallery/jquery.fancybox.min.js', array(), $scrypt_version, true); //fancybox
	// wp_enqueue_script('html2pdf', get_template_directory_uri() . '/js/html2pdf.bundle.js', array(), $scrypt_version, true); //Create PDF-page 
	// wp_enqueue_script('scroll', get_template_directory_uri() . '/js/scroll.js', array(), $scrypt_version, true); //Scroll
	wp_enqueue_script('sender', get_template_directory_uri() . '/js/sender.js', array(), $scrypt_version, true); //Отправщик JS
		// wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), $scrypt_version, true); //jquery код
	wp_enqueue_script('vendors', get_template_directory_uri() . '/js/vendors.min.js', array(), $scrypt_version, true); //Библиотеки

	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), $scrypt_version, true); // Подключение основного скрипта в самом конце

	wp_localize_script('main', 'allAjax', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce'   => wp_create_nonce('NEHERTUTLAZIT')
	));
}


// Заготовка для вызова ajax
add_action('wp_ajax_aj_fnc', 'aj_fnc');
add_action('wp_ajax_nopriv_aj_fnc', 'aj_fnc');

function aj_fnc()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}



// Пагинация
function wp_corenavi($query = null) {
	global $wp_query;
	$main_query = (empty($query))?$wp_query:$query;
  $total = isset( $main_query->max_num_pages ) ? $main_query->max_num_pages : 1;
  $a['total'] = $total;
  $a['mid_size'] = 3; // сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; // сколько ссылок показывать в начале и в конце
  $a['prev_text'] = ''; // текст ссылки "Предыдущая страница"
  $a['next_text'] = ''; // текст ссылки "Следующая страница"

  if ( $total > 1 ) echo '<nav class="pagination catalog-sec__pagination d-flex">';
  echo paginate_links( $a );
  if ( $total > 1 ) echo '</nav>';
}


/* Отправка почты
		
			$headers = array(
				'From: Сайт '.COMPANY_NAME.' <MAIL_RESEND>',
				'content-type: text/html',
			);
		
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			
			$adr_to_send = <Присваиваем поле карбона c адресами для отправки>;
			$mail_content = "<Тело письма>";
			$mail_them = "<Тема письма>";

			if (wp_mail($adr_to_send, $mail_them, $mail_content, $headers)) {
				wp_die(json_encode(array("send" => true )));
			}
			else {
				wp_die( 'Ошибка отправки!', '', 403 );
			}
	*/


/*	Заготовка шорткода
		function true_url_external( $atts ) {
			$params = shortcode_atts( array( // в массиве укажите значения параметров по умолчанию
				'anchor' => 'Миша Рудрастых', // параметр 1
				'url' => 'https://misha.blog', // параметр 2
			), $atts );
			return "<a href='{$params['url']}' target='_blank'>{$params['anchor']}</a>";
		}
		add_shortcode( 'trueurl', 'true_url_external' );
	*/


// Отправка формы из модального окна
add_action('wp_ajax_sendphone', 'sendphone');
add_action('wp_ajax_nopriv_sendphone', 'sendphone');

function sendphone()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {

		$headers = array(
			'From: Сайт ' . COMPANY_NAME . ' <' . MAIL_RESEND . '>',
			'content-type: text/html',
		);

		add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
		if (wp_mail(carbon_get_theme_option('as_email_send'), 'Заказ звонка', '<strong>Имя:</strong> ' . $_REQUEST["name"] . ' <br/> <strong>Телефон:</strong> ' . $_REQUEST["tel"], $headers))
			wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
		else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}

	/**
	* Возможность загружать изображения для элементов указанных таксономий: категории, метки.
	*
	* Пример получения ID и URL картинки термина:
	* $image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );
	* $image_url = wp_get_attachment_image_url( $image_id, 'thumbnail' );
	*
	* @author: Kama (http://wp-kama.ru)
	*
	* @ver: 2.8
	*/
	if( is_admin() && ! class_exists('Term_Meta_Image') ) {
		// init
		//add_action('current_screen', 'Term_Meta_Image_init');
		add_action('admin_init', 'Term_Meta_Image_init');
		function Term_Meta_Image_init() {
			$GLOBALS['Term_Meta_Image'] = new Term_Meta_Image();
		}

		class Term_Meta_Image {

			// для каких таксономий включить код. По умолчанию для всех публичных
			static $taxes = Array(); // пример: array('category', 'post_tag');

			// название мета ключа
			static $meta_key = '_thumbnail_id';

			// URL пустой картинки
			static $add_img_url = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkAQMAAABKLAcXAAAABlBMVEUAAAC7u7s37rVJAAAAAXRSTlMAQObYZgAAACJJREFUOMtjGAV0BvL/G0YMr/4/CDwY0rzBFJ704o0CWgMAvyaRh+c6m54AAAAASUVORK5CYII=';

			public function __construct() {
				if ( isset($GLOBALS['Term_Meta_Image']) ) 
				return $GLOBALS['Term_Meta_Image']; // once

				$taxes = self::$taxes ? self::$taxes : get_taxonomies( Array( 'public'=>true ), 'names' );

				foreach ( $taxes as $taxname ) {
					add_action("{$taxname}_add_form_fields",   Array( & $this, 'add_term_image' ),     10, 2 );
					add_action("{$taxname}_edit_form_fields",  Array( & $this, 'update_term_image' ),  10, 2 );
					add_action("created_{$taxname}",           Array( & $this, 'save_term_image' ),    10, 2 );
					add_action("edited_{$taxname}",            Array( & $this, 'updated_term_image' ), 10, 2 );

					// add_filter("manage_edit-{$taxname}_columns",  Array( & $this, 'add_image_column' ) );
					// add_filter("manage_{$taxname}_custom_column", Array( & $this, 'fill_image_column' ), 10, 3 );
				}
			}

			## поля при создании термина
			public function add_term_image( $taxonomy ) {
				wp_enqueue_media(); // подключим стили медиа, если их нет

				add_action('admin_print_footer_scripts', array( & $this, 'add_script' ), 99 );
				$this->css(); ?>
				<div class="form-field term-group">
					<label><?php _e('Image', 'default'); ?></label>
					<div class="term__image__wrapper">
						<a class="termeta_img_button" href="#">
							<img src="<?php echo self::$add_img_url ?>" alt="">
						</a>
						<input type="button" class="button button-secondary termeta_img_remove" value="<?php _e( 'Remove', 'default' ); ?>" />
					</div>

					<input type="hidden" id="term_imgid" name="term_imgid" value="">
				</div>
				<?php
			}

			## поля при редактировании термина
			public function update_term_image( $term, $taxonomy ) {
					wp_enqueue_media(); // подключим стили медиа, если их нет

					add_action('admin_print_footer_scripts', array( & $this, 'add_script' ), 99 );

					$image_id = get_term_meta( $term->term_id, self::$meta_key, true );
					$image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'thumbnail' ) : self::$add_img_url;
					$this->css();
					?>
					<tr class="form-field term-group-wrap">
						<th scope="row"><?php 
						_e( 'Image', 'default' ); 
					?></th>
					<td>
						<div class="term__image__wrapper">
							<a class="termeta_img_button" href="#">
								<?php echo '<img src="'. $image_url .'" alt="">'; ?>
							</a>
							<input type="button" class="button button-secondary termeta_img_remove" value="<?php _e( 'Remove', 'default' ); ?>" />
						</div>
						<input type="hidden" id="term_imgid" name="term_imgid" value="<?php echo $image_id; ?>">
					</td>
				</tr>
				<?php
			}

			public function css() {
				?>
				<style>
					.termeta_img_button{ display:inline-block; margin-right:1em; }
					.termeta_img_button img{ display:block; float:left; margin:0; padding:0; min-width:100px; max-width:150px; height:auto; background:rgba(0,0,0,.07); }
					.termeta_img_button:hover img{ opacity:.8; }
					.termeta_img_button:after{ content:''; display:table; clear:both; }
				</style>
				<?php
			}

			## Add script
			public function add_script() {
					// выходим если не на нужной странице таксономии
					//$cs = get_current_screen();
					//if( ! in_array($cs->base, array('edit-tags','term')) || ! in_array($cs->taxonomy, (array) $this->for_taxes) )
					//  return;

				$title = __('Featured Image', 'default');
				$button_txt = __('Set featured image', 'default');
				?>
				<script>
					jQuery(document).ready(function($) {
						var frame,
						$imgwrap = $('.term__image__wrapper'),
						$imgid   = $('#term_imgid');

									// добавление
									$('.termeta_img_button').click(function(ev) {
										ev.preventDefault();

										if ( frame ) { 
											frame.open(); 
											return; 
										}

											// задаем media frame
											frame = wp.media.frames.questImgAdd = wp.media({
												states: [
												new wp.media.controller.Library({
													title:    '<?php echo $title ?>',
													library:   wp.media.query({ type: 'image' }),
													multiple: false,
																	//date:   false
																})
												],
												button: {
													text: '<?php echo $button_txt ?>', // Set the text of the button.
												}
											});

									// выбор
									frame.on('select', function() {
										var selected = frame.state().get('selection').first().toJSON();
										if ( selected ) {
											$imgid.val( selected.id );
											$imgwrap.find('img').attr('src', selected.sizes.thumbnail.url );
										}
									});

									// открываем
									frame.on('open', function() {
										if ( $imgid.val() ) 
											frame.state().get('selection').add( wp.media.attachment( $imgid.val() ) );
									});

									frame.open();
								});

							// удаление
							$('.termeta_img_remove').click(function() {
								$imgid.val('');
								$imgwrap.find('img').attr('src','<?php echo self::$add_img_url ?>');
							});
						});
					</script>

					<?php
				}

			## Добавляет колонку картинки в таблицу терминов
				public function add_image_column($columns) {
					// подправим ширину колонки через css
					add_action('admin_notices', function() {
						echo '<style>.column-image{ width:50px; text-align:center; }</style>';
					});

					$num = 1; // после какой по счету колонки вставлять

					$new_columns = Array( 'image' => '' ); // колонка без названия...

					return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );
				}

				public function fill_image_column( $string, $column_name, $term_id ) {
					// если есть картинка
					if ( $image_id = get_term_meta( $term_id, self::$meta_key, 1 ) )
						$string = '<img src="' . wp_get_attachment_image_url( $image_id, 'thumbnail' ) .'" width="50" height="50" alt="" style="border-radius:4px;" />';

					return $string;
				}

			## Save the form field
				public function save_term_image( $term_id, $tt_id ) {
					if ( isset($_POST['term_imgid']) && $image = (int) $_POST['term_imgid'] )
						add_term_meta( $term_id, self::$meta_key, $image, true );
				}

			## Update the form field value
				public function updated_term_image($term_id, $tt_id) {
					if ( !isset($_POST['term_imgid']) )
						return;

					if ( $image = (int) $_POST['term_imgid'] )
						update_term_meta($term_id, self::$meta_key, $image);
					else
						delete_term_meta($term_id, self::$meta_key);
				}

			}
		}

// include "sender.php"

