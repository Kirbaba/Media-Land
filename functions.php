<?php

define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

require_once TM_DIR . '/lib/Parser.php';

function add_style(){
    wp_enqueue_style( 'my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_style( 'font-ewesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/css/style.css', array(), '1');
    wp_enqueue_style( 'my-sass', get_template_directory_uri() . '/sass/style.css', array(), '1');
    wp_enqueue_style( 'slick-css', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css', array(), '1');
}

function add_script(){
   wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '1');
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1');
    wp_enqueue_script( 'slick-js', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js', array(), '1');
}

function add_admin_script(){
    wp_enqueue_script('admin',get_template_directory_uri() . '/js/admin.js', array(), '1');
    wp_enqueue_style( 'my-bootstrap-extension-admin', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array(), '1');
    wp_enqueue_script( 'fotorama-js', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js', array(), '1');
    wp_enqueue_style( 'my-style-admin', get_template_directory_uri() . '/css/admin.css', array(), '1');
}

add_action('admin_enqueue_scripts', 'add_admin_script');
add_action( 'wp_enqueue_scripts', 'add_style' );
add_action( 'wp_enqueue_scripts', 'add_script' );

function prn($content) {
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r ( $content );
    echo '</pre>';
}

function my_pagenavi() {
    global $wp_query;

    $big = 999999999; // уникальное число для замены

    $args = array(
        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) )
    ,'format' => ''
    ,'current' => max( 1, get_query_var('paged') )
    ,'total' => $wp_query->max_num_pages
    );

    $result = paginate_links( $args );

    // удаляем добавку к пагинации для первой страницы
    $result = str_replace( '/page/1/', '', $result );

    echo $result;
}

function excerpt_readmore($more) {
    return '... <br><a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Читать далее' . '</a>';
}
add_filter('excerpt_more', 'excerpt_readmore');


if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );

/*-------------------------- ПОСУДА ---------------------------------------*/

/*  регистрируем новый тип постов*/
add_action('init', 'my_custom_init_dishes');
function my_custom_init_dishes()
{
    $labels = array(
        'name' => 'Посуда', // Основное название типа записи
        'singular_name' => 'Товар', // отдельное название записи типа Book
        'add_new' => 'Добавить товар',
        'add_new_item' => 'Добавить новый товар',
        'edit_item' => 'Редактировать товар',
        'new_item' => 'Новый товар',
        'view_item' => 'Посмотреть товар',
        'search_items' => 'Найти товар',
        'not_found' =>  'Товаров не найдено',
        'not_found_in_trash' => 'В корзине товаров не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Посуда'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail')
    );
    register_post_type('dishes',$args);
}

/*------------------------ ПОСУДА -----------------------------------------*/

/*-------------------------- КОМПЛЕКТЫ ПОСУДЫ -----------------------------*/

/*  регистрируем новый тип постов*/
add_action('init', 'my_custom_init_package');
function my_custom_init_package()
{
    $labels = array(
        'name' => 'Комплекты', // Основное название типа записи
        'singular_name' => 'Комплект', // отдельное название записи типа Book
        'add_new' => 'Добавить комплект',
        'add_new_item' => 'Добавить новый комплект',
        'edit_item' => 'Редактировать комплект',
        'new_item' => 'Новый комплект',
        'view_item' => 'Посмотреть комплект',
        'search_items' => 'Найти комплект',
        'not_found' =>  'Комплектов не найдено',
        'not_found_in_trash' => 'В корзине комплектов не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Комплекты'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail')
    );
    register_post_type('package',$args);
}

/*------------------------ КОМПЛЕКТЫ ПОСУДЫ -------------------------------*/



/* Вывод посуды */
function dishes_sc(){
    if($_POST['num']){
        $page = $_POST['num'];
    }else{
        $page = 1;
    }

    $args = array(
        'post_type' => 'dishes',
        'post_status' => 'publish',
        'posts_per_page' => 8,
        'paged'=> $page
    );

    $my_query = null;
    $my_query = new WP_Query($args);

   // prn($my_query);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/dishes.php', ['my_query' => $my_query]);

    if($_POST['num']){
        die();
    }

}
add_shortcode('dishes', 'dishes_sc');

/* Вывод комплектов */
function packages_sc(){
    if($_POST['num']){
        $page = $_POST['num'];
    }else{
        $page = 1;
    }

    $args = array(
        'post_type' => 'package',
        'post_status' => 'publish',
        'posts_per_page' => 8,
        'paged'=> $page
    );

    $my_query = null;
    $my_query = new WP_Query($args);

   // prn($my_query);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/packages.php', ['my_query' => $my_query]);

    if($_POST['num']){
        die();
    }

}
add_shortcode('packages', 'packages_sc');

/* Вывод комплектов */
function any_sc(){
    if($_POST['num']){
        $page = $_POST['num'];
    }else{
        $page = 1;
    }

    $args = array(
        'post_type' => array('dishes','package'),
        'post_status' => 'publish',
        'posts_per_page' => 8,
        'paged'=> $page
    );

    $my_query = null;
    $my_query = new WP_Query($args);

    // prn($my_query);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/any.php', ['my_query' => $my_query]);

    if($_POST['num']){
        die();
    }

}
add_shortcode('any', 'any_sc');


/* аякс запросы */

add_action('wp_ajax_nopriv_show_more_dishes', 'dishes_sc');
add_action('wp_ajax_show_more_dishes', 'dishes_sc');
add_action('wp_ajax_nopriv_show_more_packages', 'packages_sc');
add_action('wp_ajax_show_more_packages', 'packages_sc');
add_action('wp_ajax_nopriv_show_more_any', 'any_sc');
add_action('wp_ajax_show_more_any', 'any_sc');


// ------------------ Слайдер ------------------ //
function register_slider_page(){
    add_menu_page(
        'Слайдер', 'Слайдер', 'manage_options', 'slider', 'admin_slider_page', '', 200
    );
}

function admin_slider_page(){
    global $wpdb;
    $parser = new Parser();

    if(isset($_GET['del'])){
        $wpdb->delete( 'slider', ['id'=>$_GET['del']] );
    }
    if(isset($_POST['title'])){
        //prn($_POST);
        $wpdb->insert('slider', ['title'=>$_POST['title'], 'descr'=>$_POST['text'], 'img'=>$_POST['attachment_url']]);
    }

    if (function_exists('wp_enqueue_media')) {
        wp_enqueue_media();
    } else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }

    $slider = $wpdb->get_results("SELECT * FROM slider", ARRAY_A);

    $parser->render(TM_DIR . '/view/admin_slider_page.php', ['slider' => $slider]);
}

function slider_sc(){
    global $wpdb;
    $parser = new Parser();

    $slider = $wpdb->get_results("SELECT * FROM slider", ARRAY_A);

    $parser->render(TM_DIR . '/view/slider.php', ['slider' => $slider]);
}

add_shortcode('slider', 'slider_sc');
add_action( 'admin_menu', 'register_slider_page' );



