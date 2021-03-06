<?php
add_action('wp_enqueue_scripts', 'medical_styles');
add_action('wp_enqueue_scripts', 'medical_scripts');
add_action('after_setup_theme', 'menu');
add_filter('login_errors',create_function('$a', "return null;"));
remove_action('wp_head', 'wp_generator');
function medical_styles() {
    wp_enqueue_style('glide-style', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css');
    wp_enqueue_style('font-awesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_style('montserrat-style', 'http://fonts.cdnfonts.com/css/montserrat');
    wp_enqueue_style('bootstrap-style', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css');
    // if (is_page(164)){
	// 	wp_enqueue_style('magnific-style', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js');
	// 	} 
	wp_enqueue_style('medical-style', get_stylesheet_uri());
};
function medical_scripts() {
    wp_enqueue_script('glide-script', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-script', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js', array(), null, true);
    wp_enqueue_script('jquery-script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
    // if (is_page(164)){
	// 	wp_enqueue_script('popup-script', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', array(), null, true);
	// 	} 
	wp_enqueue_script('script-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery-script'), null, true);
	
};
function menu() {
    register_nav_menus([
        'header-menu' => 'Главное Меню'
    ]);
};


add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );
add_filter('nav_menu_link_attributes', 'filter_main_menu_link', 10, 3);

function filter_main_menu_link($atts, $item, $args) {
    if ($args->theme_location === 'header-menu') {
        $atts['class'] = 'nav-link link';
    }
    return $atts;
}
add_action('init', function() {
	pll_register_string('online-appointment', 'online appointment');
	pll_register_string('График работы', 'График работы');
	pll_register_string('Новости', 'Новости');
	pll_register_string('Пн-Пт', 'Пн-Пт');
	pll_register_string('Сб-Вс', 'Сб-Вс');
	pll_register_string('Последние новости медицнского центра', 'Последние новости медицнского центра');
	pll_register_string('Команда опытных врачей возглавляет нашу клинику! Познакомьтесь с нашими сотрудниками и посетите нас для решения следующей проблемы!', 'Команда опытных врачей возглавляет нашу клинику! Познакомьтесь с нашими сотрудниками и посетите нас для решения следующей проблемы!');
	pll_register_string('Все новости', 'Все новости');
	pll_register_string('Общее количество коек', 'Общее количество коек');
	pll_register_string('Количество свободных коек', 'Количество свободных коек');
	pll_register_string('Количество занятых коек', 'Количество занятых коек');
	pll_register_string('Знайте наши офисы и филиалы. Свяжитесь с нами сегодня.', 'Знайте наши офисы и филиалы. Свяжитесь с нами сегодня.');
	pll_register_string('Посетите нашу страницу записи на прием, чтобы найти удобное для вас время', 'Посетите нашу страницу записи на прием, чтобы найти удобное для вас время');
	pll_register_string('Адрес', 'Адрес');
	pll_register_string('Часы работы', 'Часы работы');
	pll_register_string('Читать полностью', 'Читать полностью');
	pll_register_string('Министерство здравоохранения Республики Узбекистан', 'Министерство здравоохранения Республики Узбекистан');
	pll_register_string('Правительственный портал Республики Узбекистан', 'Правительственный портал Республики Узбекистан');
	pll_register_string('Единый портал интерактивных государственных услуг', 'Единый портал интерактивных государственных услуг');
	pll_register_string('Портал открытых данных Республики Узбекистан', 'Портал открытых данных Республики Узбекистан');
	pll_register_string('Посмотрите видеоролик о нашем центре', 'Посмотрите видеоролик о нашем центре');
	pll_register_string('Погрузитесь', 'Погрузитесь');
	pll_register_string('Данные областных', 'Данные областных');
	pll_register_string('Регион', 'Регион');
	pll_register_string('ФИО главного врача', 'ФИО главного врача');
	pll_register_string('Номер телефона', 'Номер телефона');
	pll_register_string('Погрузитесь', 'Погрузитесь');
	pll_register_string('Республиканский специализированный научно - ', 'Республиканский специализированный научно - ');
	pll_register_string('практический медицинский центр фтизиатрии и пульмонологии', 'практический медицинский центр фтизиатрии и пульмонологии');
	pll_register_string('Всего:', 'Всего:');
	pll_register_string('сум', 'сум');
	pll_register_string('Наименование услуги:', 'Наименование услуги:');
	pll_register_string('Цена', 'Цена');
	pll_register_string('Резидент', 'Резидент');
	pll_register_string('Не Резидент', 'Не Резидент');
	pll_register_string('Республиканский специализированный', 'Республиканский специализированный');
	pll_register_string('научно - практический медицинский центр', 'научно - практический медицинский центр');
	pll_register_string('фтизиатрии и пульмонологии', 'фтизиатрии и пульмонологии');
	pll_register_string('Прием', 'Прием');
	pll_register_string('Подробнее', 'Подробнее');
	pll_register_string('Выходной', 'Выходной');
	pll_register_string('Информация о койках на', 'Информация о койках на');
	

	
  });
$my_lang = '-' . pll_current_language();  
if ($my_lang == '-ru') {
	$my_lang = '';
}
/**
 * Cuts the specified text up to specified number of characters.
 * Strips any of shortcodes.
 *
 * Important changes:
 * 2.8.0 - Improved logic to work with HTML tags in cutting text.
 * 2.7.2 - Cuts direct URLs from content.
 * 2.7.0 - `sanitize_callback` parameter.
 * 2.6.5 - `ignore_more` parameter.
 * 2.6.2 - Regular to remove blocky shortcodes like: [foo]some data[/foo].
 * 2.6   - Removed the `save_format` parameter and replaced it with two parameters `autop` and `save_tags`.
 *
 * @author Kama (wp-kama.ru)
 * @version 2.8.0
 *
 * @param string|array $args {
 *     Optional. Arguments to customize output.
 *
 *     @type int       $maxchar            Max number of characters.
 *     @type string    $text               The text to be cut. The default is `post_excerpt` if there is no `post_content`.
 *                                         If the text has `<!--more-->`, then `maxchar` is ignored and everything
 *                                         up to `<!--more-->` is taken including HTML.
 *     @type bool      $autop              Replace the line breaks with `<p>` and `<br>` or not?
 *     @type string    $more_text          The text of `Read more` link.
 *     @type string    $save_tags          Tags to be left in the text. For example `<strong><b><a>`.
 *     @type string    $sanitize_callback  Text cleaning function.
 *     @type bool      $ignore_more        Whether to ignore `<!--more-->` in the content.
 *
 * }
 *
 * @return string HTML
 */
function kama_excerpt( $args = '' ){
	global $post;

	if( is_string( $args ) ){
		parse_str( $args, $args );
	}

	$rg = (object) array_merge( [
		'maxchar'           => 350,
		'text'              => '',
		'autop'             => true,
		'more_text'         => 'Читать дальше...',
		'ignore_more'       => false,
		'save_tags'         => '<strong><b><a><em><i><var><code><span>',
		'sanitize_callback' => static function($text, $rg ){
			return strip_tags( $text, $rg->save_tags );
		},
	], $args );

	$rg = apply_filters( 'kama_excerpt_args', $rg );

	if( ! $rg->text ){
		$rg->text = $post->post_excerpt ?: $post->post_content;
	}

	$text = $rg->text;
	// strip content shortcodes: [foo]some data[/foo]. Consider markdown
	$text = preg_replace( '~\[([a-z0-9_-]+)[^\]]*\](?!\().*?\[/\1\]~is', '', $text );
	// strip others shortcodes: [singlepic id=3]. Consider markdown
	$text = preg_replace( '~\[/?[^\]]*\](?!\()~', '', $text );
	// strip direct URLs
	$text = preg_replace( '~(?<=\s)https?://.+\s~', '', $text );
	$text = trim( $text );

	// <!--more-->
	if( ! $rg->ignore_more && strpos( $text, '<!--more-->' ) ){

		preg_match( '/(.*)<!--more-->/s', $text, $mm );

		$text = trim( $mm[1] );

		$text_append = sprintf( ' <a href="%s#more-%d">%s</a>', get_permalink( $post ), $post->ID, $rg->more_text );
	}
	// text, excerpt, content
	else {

		$text = call_user_func( $rg->sanitize_callback, $text, $rg );
		$has_tags = false !== strpos( $text, '<' );

		// collect html tags
		if( $has_tags ){
			$tags_collection = [];
			$nn = 0;

			$text = preg_replace_callback( '/<[^>]+>/', static function( $match ) use ( & $tags_collection, & $nn ){
				$nn++;
				$holder = "~$nn";
				$tags_collection[ $holder ] = $match[0];

				return $holder;
			}, $text );
		}

		// cut text
		$cuted_text = mb_substr( $text, 0, $rg->maxchar );
		if( $text !== $cuted_text ){

			// del last word, it not complate in 99%
			$text = preg_replace( '/(.*)\s\S*$/s', '\\1...', trim( $cuted_text ) );
		}

		// bring html tags back
		if( $has_tags ){
			$text = strtr( $text, $tags_collection );
			$text = force_balance_tags( $text );
		}
	}

	// add <p> tags. Simple analog of wpautop()
	if( $rg->autop ){

		$text = preg_replace(
			[ "/\r/", "/\n{2,}/", "/\n/" ],
			[ '', '</p><p>', '<br />' ],
			"<p>$text</p>"
		);
	}

	$text = apply_filters( 'kama_excerpt', $text, $rg );

	if( isset( $text_append ) ){
		$text .= $text_append;
	}

	return $text;
}

?>