<?php

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