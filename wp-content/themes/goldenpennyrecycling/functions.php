<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 23-Nov-16
 * Time: 10:53 AM
 */

include('include/include/options.php');


//remove_filter('the_content','wpautop');
////decide when you want to apply the auto paragraph
//add_filter('the_content','my_custom_formatting');
//function my_custom_formatting($content){
//    if(get_post_type()=='testimonial') //if it does not work, you may want to pass the current post object to get_post_type
//        return $content;//no autop
//    else
//        return wpautop($content);
//}


add_action('init', 'register_my_menu');
function register_my_menu()
{
    register_nav_menu('header-menu', __('Primary Menu'));
    register_nav_menu('footer', __('Footer Menu'));

}

//<-------------- custom logo----------------->
add_action('customize_register', 'themeslug_theme_customizer');
function themeslug_theme_customizer($wp_customize)
{
    $wp_customize->add_section('themeslug_logo_section', array(
        'title' => __('Logo', 'themeslug'),
        'priority' => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ));
    $wp_customize->add_setting('themeslug_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'themeslug_logo', array(
        'label' => __('Logo', 'themeslug'),
        'section' => 'themeslug_logo_section',
        'settings' => 'themeslug_logo',
    )));
}

//<-------------- custom logo----------------->
add_theme_support('post-thumbnails');

//---------------------------home page slider-----------------
add_action('init', 'codex_homepost_init');
function codex_homepost_init()
{
    $labels = array(
        'name' => _x('Home posts', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Home posts', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Home posts', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Home posts', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New', 'Home posts', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Home posts', 'your-plugin-textdomain'),
        'new_item' => __('New Home posts', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Home posts', 'your-plugin-textdomain'),
        'view_item' => __('View Home posts', 'your-plugin-textdomain'),
        'all_items' => __('All Home posts', 'your-plugin-textdomain'),
        'search_items' => __('Search Home posts', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Home posts:', 'your-plugin-textdomain'),
        'not_found' => __('No Home posts found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No Home posts found in Trash.', 'your-plugin-textdomain')
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'homepost'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail', 'editor')
    );

    register_post_type('homepost', $args);
}

/**
 * Register Post Type photo
 */
add_action('init', 'codex_photo_init');
function codex_photo_init()
{
    $labels = array(
        'name' => _x('Photos', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Photo', 'post type singular name', 'your-plugin-textdomain'),
        'add_new' => 'Add photo',
        'all_items' => 'All photo',
        'edit_item' => 'Edit photo',
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'photo'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments')
    );
    register_post_type('photo', $args);
}

/**
 * Register Post Type scrapmetals
 */
add_action('init', 'codex_scrap_init');
function codex_scrap_init()
{
    $labels = array(
        'name' => _x('Scrapmetalss', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Scrapmetals', 'post type singular name', 'your-plugin-textdomain'),
        'add_new' => 'Add Scrapmetals',
        'all_items' => 'All Scrapmetals',
        'edit_item' => 'Edit Scrapmetals',
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'scrap'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments', 'custom-fields')
    );
    register_post_type('scrap', $args);
}

/**
 * Register Post Type bottlexchange
 */
add_action('init', 'codex_bottle_init');
function codex_bottle_init()
{
    $labels = array(
        'name' => _x('Bottle xchanges', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Bottle xchange', 'post type singular name', 'your-plugin-textdomain'),
        'add_new' => 'Add Bottlexchange',
        'all_items' => 'All Bottlexchange',
        'edit_item' => 'Edit Bottlexchange',
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'bottle'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments', 'custom-fields')
    );
    register_post_type('bottle', $args);
}

