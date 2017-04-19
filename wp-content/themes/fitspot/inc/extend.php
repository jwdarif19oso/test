<?php

require get_template_directory() . '/inc/Shortcodes.php';
$shortcodes = new Shortcodes();



if (!function_exists('layer_setup')) {

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function layer_setup() {
        
    }

}
add_action('after_setup_theme', 'layer_setup');



/* Theme Settings Page ****** */
if (function_exists('acf_add_options_page')) {

    acf_add_options_page('Theme Settings');
}

/* SVG support */

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');


if (!function_exists('layer_scripts')) {

    /**
     * Enqueue scripts and styles.
     */
    function layer_scripts() {

        wp_enqueue_style('fonts-opensans', "https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i");

        wp_enqueue_style('bootstrap-min-css', get_template_directory_uri() . "/css/bootstrap.min.css");

        /* slick */
        wp_enqueue_style('slickcss', get_template_directory_uri() . "/css/slick.css");
        wp_enqueue_style('slickthemecss', get_template_directory_uri() . "/css/slick-theme.css");
        wp_enqueue_style('datepicker', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css');
        wp_enqueue_script('slickjs', get_template_directory_uri() . "/js/slick.min.js", array('jquery'));
        wp_enqueue_script('jqueryMigrate', get_template_directory_uri() . "/js/jquery-migrate-1.2.1.min.js", array('jquery'));
        wp_enqueue_script('jqueryUI', "https://code.jquery.com/ui/1.12.1/jquery-ui.js", array('jquery'));
         wp_enqueue_script('datepicker', "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js", array('jquery'));
        /*      wp_enqueue_style('slickcss', "//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css");
          wp_enqueue_script('slickjs', "//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"); */



        wp_enqueue_style('reset', get_template_directory_uri() . "/css/reset.css");

        wp_enqueue_style('stylesheet', get_template_directory_uri() . "/css/style.css");

        wp_enqueue_style('fitspot-custom-css', get_template_directory_uri() . '/css/custom.css');

        wp_enqueue_style('custom-zahid-css', get_template_directory_uri() . '/css/custom-zahid.css');

        wp_enqueue_style('fitspot-custom-umer-css', get_template_directory_uri() . '/css/custom-umer.css');

        wp_enqueue_style('responsive', get_template_directory_uri() . "/css/responsive.css");

        wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery', 'jqueryUI'));



        wp_enqueue_script('bootstrap.min.js', get_template_directory_uri() . "/js/bootstrap.min.js", array('jquery'));
    }

}
add_action('wp_enqueue_scripts', 'layer_scripts');


if (!function_exists('layer_widgets_init')) {

    /**
     * Register widget area.
     *
     * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
     */
    function layer_widgets_init() {
        register_sidebar(array(
            'name' => esc_html__('Footer Column 1', 'stance'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add first column widgets here.', 'stance'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Column 2', 'stance'),
            'id' => 'sidebar-2',
            'description' => esc_html__('Add 2nd column widgets here.', 'stance'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Column 3', 'stance'),
            'id' => 'sidebar-3',
            'description' => esc_html__('Add Third column widgets here.', 'stance'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Column 4', 'stance'),
            'id' => 'sidebar-4',
            'description' => esc_html__('Add Fourth column widgets here.', 'stance'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));
    }

}
add_action('widgets_init', 'layer_widgets_init');
