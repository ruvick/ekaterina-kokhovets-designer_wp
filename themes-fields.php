<?

// Описание полей для Carbon_Fields производим только в этом файле
// 1. В начале идет описание полей - Настройки темы  далее категорий (если необходимо) в конце аблонов страниц и записей
// 2. Префиксы проставляем каждый раз новые осмысленно по имени проекта 
// 3. Для Полей которые входят в состав составново схема именования следующая <Общий префикс>_<название составного поля>_<имя поля>
// 4. Название секций Так же придумываем осмысленные на русском языке чтобы небыло сплошных Доп. полей
// 5. Каждый блок комментируем


use Carbon_Fields\Container;
use Carbon_Fields\Field; 

Container::make( 'theme_options', __( 'Настройки темы', 'crb' ) )
    ->add_tab('Главная', array(
      // Field::make( 'image', 'as_logo', 'Логотип в шапке')
      //   ->set_width(30),
      // Field::make( 'image', 'as_logo_white', 'Логотип в подвале')
      //   ->set_width(30),
      Field::make('text', 'about_home_title', 'Заголовок на главной'), 
      Field::make('rich_text', 'about_home', 'О нашей компании')
    ))
    ->add_tab('Слайдер', array(
      Field::make('complex', 'slider_index', 'Слайдер на главной')
        ->add_fields(array(
          Field::make('image', 'slider_img', 'Картинка слайдера')
            ->set_width(50),
          Field::make('text', 'slider_title', 'Заголовок слайдера')
            ->set_width(50),
          Field::make('text', 'slider_link', 'Ссылка в кнопке')
            ->set_width(50),
          Field::make('text', 'slider_link_text', 'Текст в кнопке')
            ->set_width(50),
        ))
    ))
    ->add_tab('Команда', array(
      Field::make('image', 'team_images', 'Картинка блока')
      ->set_width(10),
      Field::make('text', 'team_title', 'Заголовок')   
      ->set_width(30),
      Field::make('text', 'team_subtitle', 'Подзаголовок')   
      ->set_width(30),
      Field::make('rich_text', 'team_text', 'Текст')   
      ->set_width(100),
      Field::make('complex', 'complex_team', 'Выводим карточки Команды')
      // ->set_max(3) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make('image', 'img_team', 'Фото')
        ->set_width(10),
        Field::make('text', 'name_team', 'Имя')   
        ->set_width(10),
        Field::make('text', 'specialization_team', 'Специализация')   
        ->set_width(10),
        )) 
    ))
    // ->add_tab('Отзывы', array(
    //   Field::make('complex', 'complex_reviews', 'Выводим Отзывы')
    //   // ->set_max(3) // Можно будет выбрать только 5 постов
    //   ->add_fields(array(
    //     Field::make('image', 'img_reviews', 'Фото')
    //     ->set_width(10),
    //     Field::make('text', 'name_reviews', 'Имя')   
    //     ->set_width(10),
    //     Field::make('text', 'data_reviews', 'Дата')   
    //     ->set_width(10),
    //     Field::make('text', 'descp_reviews', 'Текст')   
    //     ->set_width(30),
    //     Field::make('text', 'link_reviews', 'Ссылка')   
    //     ->set_width(10),
    //     )) 
    // ))
    ->add_tab('Вставки внешних кодов', array(
      Field::make('text', 'code_yandex_metrica', 'Код для Яндекс.Метрики')   
      ->set_width(50),
      Field::make('text', 'code_google_counter', 'Код для Google счётчика')   
      ->set_width(50),
      Field::make('text', 'additional_code_head', 'Дополнительный код перед закрывающим тегом head')   
      ->set_width(50),
      Field::make('text', 'additional_code_body', 'Дополнительный код после тега body')   
      ->set_width(50),
    ))
    ->add_tab('Контакты', array(
        Field::make( 'text', 'as_company', __( 'Название' ) )
          ->set_width(50),
        Field::make( 'text', 'as_schedule', __( 'Режим работы' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phones_1', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_2', __( 'Телефон дополнительный' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email', __( 'Email' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email_send', __( 'Email для отправки' ) ) 
          ->set_width(50),
        Field::make( 'text', 'as_inn', __( 'ИНН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_orgn', __( 'ОРГН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_kpp', __( 'КПП' ) )
          ->set_width(50),
        Field::make( 'text', 'as_address', __( 'Адрес' ) )
          ->set_width(50),
        Field::make( 'text', 'as_bik', __( 'БИК' ) )
          ->set_width(50),
        Field::make( 'text', 'as_rs', __( 'Р/С' ) )
          ->set_width(50),
        Field::make( 'text', 'as_ks', __( 'К/С' ) )
          ->set_width(50),
        Field::make( 'text', 'as_bank', __( 'БАНК' ) )
          ->set_width(50),
        Field::make( 'text', 'as_ok', __( 'ok' ) )
          ->set_width(50),
        Field::make( 'text', 'as_insta', __( 'instagram' ) )
          ->set_width(50),
        Field::make( 'text', 'as_vk', __( 'Вконтакте' ) )
          ->set_width(50),
        Field::make( 'text', 'as_telegr', __( 'telegram' ) )
          ->set_width(50),
        Field::make( 'text', 'as_whatsapp', __( 'whatsapp' ) )
          ->set_width(50),
        Field::make('text', 'map_point', 'Координаты карты')
          ->set_width(50),
        Field::make('text', 'text_map', 'Текст метки карты')
          ->set_width(50),
    ) );
    Container::make('post_meta', 'page', 'Доп поля')
    ->show_on_template(array('page.php', 'page-team.php', 'single-service.php', 'single-portfolio.php', 'page-contacts.php'))
        ->add_fields(array(   
          Field::make('image', 'page-banner', 'Банер страницы' )->set_width(50),
    ));
    Container::make('post_meta', 'Доп поля для Портфолио')
    ->show_on_template('single-portfolio.php')
    ->add_fields(array(
      Field::make('text', 'portfolio_subtitle', 'Подзаголовок')->set_width(30),
      Field::make( 'complex', 'portfolio_slider', "Картинки" )
      ->add_fields( array(
        Field::make('image', 'portfolio_img', 'Изображение' )->set_width(30),   
      ) ),
    ));
    Container::make('post_meta', 'Доп поля для Отзывы')
    ->show_on_template('single-otzyvy.php')
    ->add_fields(array(
      Field::make( 'complex', 'otzyvy_picture', "Картинки отзыва" )
      ->add_fields( array(
        Field::make('image', 'otzyvy_img', 'Изображение' )->set_width(30),   
      ) ),
      Field::make('text', 'otzyvy_link', 'Ссылка на отзыв')->set_width(30),
    ));
    Container::make('post_meta', 'Доп поля для Услуги')
    ->show_on_template('single-service.php')
    ->add_fields(array(
      Field::make( 'complex', 'service_docs', "Документы" )
      ->add_fields( array(
        Field::make('file', 'service_docs_file', 'Файл' )->set_width(30),   
        Field::make('text', 'service_docs_nmae', 'Файл' )->set_width(30),   
      ) ),
      Field::make( 'complex', 'service_picture', "Картинки услуги" )
      ->add_fields( array(
        Field::make('image', 'service_img', 'Изображение' )->set_width(30),   
      ) ),
    ));
    Container::make('post_meta', 'Доп поля для Портфолио')
    ->show_on_template('category.php')
    ->add_fields(array(
      Field::make('text', 'category_subtitle', 'Подзаголовок')->set_width(30),
    ));

?>