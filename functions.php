<?php

//выводить ошибки
ini_set('display_errors','On');
error_reporting('E_ALL');

//удалить пустое пространство под панель
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

//добавить пункт "меню" в админку
if (function_exists('register_nav_menus')){
	register_nav_menus(
		array( // создаём любое количество областей
		  'header_menu' => 'Главное меню', // 'имя' => 'описание'
		)
	);
}

// Пагинация
add_filter('wp_pagenavi_class_pages', 'theme_pagination_pages_class');
add_filter('wp_pagenavi_class_page', 'theme_pagination_page_class');
add_filter('wp_pagenavi_class_current', 'theme_pagination_page_current');
add_filter('wp_pagenavi_class_first', 'theme_pagination_page_first');
add_filter('wp_pagenavi_class_last', 'theme_pagination_page_last');
add_filter('wp_pagenavi_class_previouspostslink', 'theme_pagination_page_prev');
add_filter('wp_pagenavi_class_nextpostslink', 'theme_pagination_page_next');

function theme_pagination_pages_class($class_name) {
     return 'pagination__item';
}

function theme_pagination_page_class($class_name) {
    return 'pagination__item pagination__page';
}

function theme_pagination_page_current($class_name) {
    return 'pagination__item pagination__current';
}

function theme_pagination_page_prev($class_name) {
    return 'pagination__item pagination__prev';
}

function theme_pagination_page_next($class_name) {
    return 'pagination__item pagination__next';
}

function theme_pagination_page_first($class_name) {
    return 'pagination__item pagination__first';
}

function theme_pagination_page_last($class_name) {
    return 'pagination__item pagination__last';
}

//Создать
add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type('projects',
        array(
        'labels' => array(
            'name' => 'Проекты',
            'all_items' => 'Все проекты',
            'singular_name' => 'Проект',
            'add_new' => 'Добавить',
            'add_new_item' => 'Добавить проект',
            'edit' => 'Редактировать',
            'edit_item' => 'Редактировать проект',
            'new_item' => 'Новый проект',
            'view' => 'Смотреть',
            'view_item' => 'Смотреть проект',
            'search_items' => 'Искать проект',
            'not_found' => 'Проект не найден',
            'not_found_in_trash' => 'Нет проекта в корзине'
        ),
		'show_in_rest' => true,
        'public' => true,
        'hierarchical' => false,
        'has_archive' => false,
    	'menu_position' => 5,
    	'menu_icon' => 'dashicons-welcome-widgets-menus',
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'can_export' => true,
        'taxonomies' => array()
    ));
}
