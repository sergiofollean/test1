<?php

add_action('wp_ajax_get_cat', 'get_cat');
add_action('wp_ajax_nopriv_get_cat', 'get_cat');

add_action('wp_ajax_get_page', 'get_page_ajax');
add_action('wp_ajax_nopriv_get_page', 'get_page_ajax');

function get_page_ajax(){
	$offset = (5*$_POST['page'])-5;
	if($_POST['cat'] == '0'){
		$taxquery = "";
	}
	else{
		$taxquery = array(
				array(
					'taxonomy' => 'dish_type',
					'field' => 'slug',
					'terms' => $_POST['cat_slug']
				)
			);
	}
	$posts = get_posts(array(
		'post_type' => 'dish',
		'numberposts' => 6,
		'offset' => $offset,
		'tax_query' => $taxquery
		
	));
	foreach($posts as $post)
	{ ?>
		<div class="col-md-4">
			<div class="dish">
				<div class="dish_image" style="background-image: url('<?= get_the_post_thumbnail_url($post->ID); ?>');"></div>
				<span id="title"><?= $post->post_title ?></span>
				<div id="info"><b>Calories:</b> <?= get_field('calories'); ?> <b>Carbs:</b> <?= get_field('carbs'); ?> <b>Protein:</b> <?= get_field('protein'); ?> <b>Fat:</b> <?= get_field('fat'); ?></div>
				<p><?= $post->post_excerpt ?></p>
				<img src="<?= get_template_directory_uri() ?>/img/brocolli.png" class="img-fluid" style="margin-left: 20px;">
				<img src="<?= get_template_directory_uri() ?>/img/acorn.png" class="img-fluid" style="margin-left: 10px;">
			</div>
		</div>
	<?php
	}
	wp_die();
}

function get_cat(){
	if($_POST['cat_slug'] == '0'){
		$taxquery = "";
	}
	else{
		$taxquery = array(
				array(
					'taxonomy' => 'dish_type',
					'field' => 'slug',
					'terms' => $_POST['cat_slug']
				)
			);
	}
	$posts = get_posts(array(
		'post_type' => 'dish',
		'numberposts' => 6,
		'tax_query' => $taxquery
		
	));
	foreach($posts as $post)
	{ ?>
		<div class="col-md-4">
			<div class="dish">
				<div class="dish_image" style="background-image: url('<?= get_the_post_thumbnail_url($post->ID); ?>');"></div>
				<span id="title"><?= $post->post_title ?></span>
				<div id="info"><b>Calories:</b> <?= get_field('calories'); ?> <b>Carbs:</b> <?= get_field('carbs'); ?> <b>Protein:</b> <?= get_field('protein'); ?> <b>Fat:</b> <?= get_field('fat'); ?></div>
				<p><?= $post->post_excerpt ?></p>
				<img src="<?= get_template_directory_uri() ?>/img/brocolli.png" class="img-fluid" style="margin-left: 20px;">
				<img src="<?= get_template_directory_uri() ?>/img/acorn.png" class="img-fluid" style="margin-left: 10px;">
			</div>
		</div>
	<?php
	}
	wp_die();
}

add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){
	// список параметров: http://wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('dish_type', array('dish'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории',
			'singular_name'     => 'Категория',
			'search_items'      => 'Поиск категорий',
			'all_items'         => 'Все категории',
			'view_item '        => 'Посмотреть категорию',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительская:',
			'edit_item'         => 'Редактировать',
			'update_item'       => 'Обновить',
			'add_new_item'      => 'Добавить',
			'new_item_name'     => 'Название',
			'menu_name'         => 'Категория',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => true,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}

add_theme_support( 'post-thumbnails' );

// Регистрируем слайдер на главной
add_action('init', 'dish_post_type');
function dish_post_type(){
	register_post_type('dish', array(
		'labels'             => array(
			'name'               => 'Блюда', // Основное название типа записи
			'singular_name'      => 'Блюдо', // отдельное название записи типа Book
			'add_new'            => 'Добавить',
			'add_new_item'       => 'Добавить',
			'edit_item'          => 'Редактировать',
			'new_item'           => 'Новое блюдо',
			'view_item'          => 'Посмотреть блюдо',
			'search_items'       => 'Найти блюдо',
			'not_found'          =>  'Блюд не найдено',
			'not_found_in_trash' => 'В корзине блюд не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Блюда'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );

	register_post_type('plans', array(
		'labels'             => array(
			'name'               => 'Тарифы', // Основное название типа записи
			'singular_name'      => 'Тариф', // отдельное название записи типа Book
			'add_new'            => 'Добавить',
			'add_new_item'       => 'Добавить',
			'edit_item'          => 'Редактировать',
			'new_item'           => 'Новый тариф',
			'view_item'          => 'Посмотреть тариф',
			'search_items'       => 'Найти тариф',
			'not_found'          =>  'Тариф не найдено',
			'not_found_in_trash' => 'В корзине тарифов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Тарифы'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );

	register_post_type('testimotionals', array(
		'labels'             => array(
			'name'               => 'Отзывы', // Основное название типа записи
			'singular_name'      => 'Отзыв', // отдельное название записи типа Book
			'add_new'            => 'Добавить',
			'add_new_item'       => 'Добавить',
			'edit_item'          => 'Редактировать',
			'new_item'           => 'Новый отзыв',
			'view_item'          => 'Посмотреть отзыв',
			'search_items'       => 'Найти отзыв',
			'not_found'          =>  'Отзыв не найдено',
			'not_found_in_trash' => 'В корзине отзывов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Отзывы'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}

?>