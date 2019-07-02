<?php

function pr($a)
{
    echo '<pre>' . print_r($a, true) . '</pre>';
}

function mytheme_add_woocommerce_support2() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support2' );

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);


function custom_assets()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('swiper', get_template_directory_uri().'/assets/css/swiper.min.css');
    // style zawsze na końcu
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');


    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js');
    wp_enqueue_script('vendor-js', get_template_directory_uri() . '/assets/js/vendor.js');
    wp_enqueue_script('slick-js', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js");
    wp_enqueue_script('swiper-js', get_template_directory_uri().'/assets/js/swiper.min.js');
    //custom zawsze na końcu
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom1.js');


}

add_action('wp_enqueue_scripts', 'custom_assets');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title' 	=> 'Ustawienia motywu',
        'menu_title'	=> 'Ustawienia motywu',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ]);
}

add_filter('show_admin_bar', '__return_false');

function manufacturers_init() {

    $args = array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => true,
        'has_archive' => true,
        'rewrite' => true,
        'label'  => 'Producenci',
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type( 'producenci', $args );
}

add_action( 'init', 'manufacturers_init' );

function manufacturers_cats_tax_init() {
    $tax_args = array(
        'hierarchical' => true,
        'label' => 'Kategorie',
        'rewrite' => array('slug' => 'kategorie-producentow', 'with_front' => false)
    );
    register_taxonomy('kategorie-producentow', 'producenci', $tax_args);
}
add_action( 'init', 'manufacturers_cats_tax_init' );


function implementations_init() {

    $args = array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => true,
        'has_archive' => true,
        'rewrite' => true,
        'label'  => 'Implementacje',
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type( 'implementacje', $args );
}

add_action( 'init', 'implementations_init' );

function implementations_cats_tax_init() {
    $tax_args = array(
        'hierarchical' => true,
        'label' => 'Kategorie',
        'rewrite' => array('slug' => 'kategorie-implementacji', 'with_front' => false)
    );
    register_taxonomy('kategorie-implementacji', 'implementacje', $tax_args);
}
add_action( 'init', 'implementations_cats_tax_init' );

function short_text($text, $size)
{
    $text = strip_tags($text);
    if (strlen($text) > $size) {
        $index = strpos($text, ' ', $size);
        if ($index == false) {
            return $text;
        }
        return mb_substr($text, 0, $index) . '...';
    }
    return $text;
}

add_filter('wpcf7_autop_or_not', '__return_false');





function site_menu()
{
    register_nav_menus(array(
        'left' => 'Menu lewe',
        'bottom' => 'Menu dolne',
    ));
}

add_action('init', 'site_menu');

function producers_products_tax_init() {
    $tax_args = array(
        'hierarchical' => true,
        'label' => 'Producenci',
        'rewrite' => array('slug' => 'produkty_producenci', 'with_front' => false)
    );
    register_taxonomy('produkty_producenci', 'product', $tax_args);
}
add_action( 'init', 'producers_products_tax_init' );


function date_local( $date=null ){
    $months = array(
        'January' => 'Styczeń',
        'February' => 'Luty',
        'March' => 'Marzec',
        'April' => 'Kwiecień',
        'May' => 'Maj',
        'June' => 'Czerwiec',
        'July' => 'Lipiec',
        'August' => 'Sierpień',
        'September' => 'Wrzesień',
        'October' => 'Październik',
        'November' => 'Listopad',
        'December' => 'Grudzień'
    );

    $output = '';
    $i = 12;
    foreach ($months as $k => $item){
        $output = str_replace($k,$item,$date);
        if ($output != $date)
            echo $output;

    }
}