<?php

/**
 * @package CTravel Adven Lite
 */
require_once get_template_directory() . "/core/ctravel-adven-lite-customization.php";
require_once get_template_directory() . "/vendor/ctravel-adven-lite-style-functions.php";
require_once get_template_directory() . "/vendor/ctravel-adven-lite-page-functions.php";

function content($limit) {
    $content = explode(' ', get_the_excerpt(), $limit);
    if (count($content) >= $limit) {
        array_pop($content);
        $content = implode(" ", $content) . '...';
    } else {
        $content = implode(" ", $content);
    }
    $content = preg_replace('/\[.+\]/', '', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

/**
 * Registers an editor stylesheet in a sub-directory.
 */
function ctravel_adven_lite_add_editor_styles_sub_dir() {
    add_editor_style(trailingslashit(get_template_directory_uri()) . '/pub/css/ctravel-adven-lite-editor-style.css');
}

add_action('after_setup_theme', 'ctravel_adven_lite_add_editor_styles_sub_dir');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
add_action('after_setup_theme', 'ctravel_adven_lite_setups', 11);
if (!function_exists('ctravel_adven_lite_setups')) :

    function ctravel_adven_lite_setups() {
        add_theme_support('automatic-feed-links');
        add_theme_support('woocommerce');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-header');
        add_theme_support('title-tag');
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'ctravel-adven-lite')
        ));
        add_theme_support('custom-background', array(
            'default-color' => 'ffffff'
        ));

        $defaults = array(
            'default-image'      => get_template_directory_uri() . '/skin/images/slider.jpg',
            'default-text-color' => 'f03e3e',
            'width'              => 1400,
            'height'             => 500,
            'uploads'            => true,
            'wp-head-callback'   => 'ctravel_adven_lite_header_style',
        );
        add_theme_support('custom-header', $defaults);

//custom logo
        $ctravel_adven_lite_custom_logo = array(
            'height'      => 56,
            'width'       => 224,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
        );
        add_theme_support('custom-logo', $ctravel_adven_lite_custom_logo);
        /**
         * Add post-formats support.
         */
        add_theme_support(
                'post-formats',
                array(
                    'link',
                    'aside',
                    'gallery',
                    'image',
                    'quote',
                    'status',
                    'video',
                    'audio',
                    'chat',
                )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
                'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                    'navigation-widgets',
                )
        );

// Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

// Add support for Block Styles.
        add_theme_support('wp-block-styles');

// Add support for full and wide align images.
        add_theme_support('align-wide');

// Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

// Add support for custom line height controls.
        add_theme_support('custom-line-height');

// Add support for experimental link color control.
        add_theme_support('experimental-link-color');

// Add support for experimental cover block spacing.
        add_theme_support('custom-spacing');

// Add support for custom units.
// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
        add_theme_support('custom-units');

        add_theme_support('jetpack-content-options', array(
            'blog-display'       => 'content', // the default setting of the theme: 'content', 'excerpt' or array( 'content', 'excerpt' ) for themes mixing both display.
            'author-bio'         => true, // display or not the author bio: true or false.
            'author-bio-default' => false, // the default setting of the author bio, if it's being displayed or not: true or false (only required if false).
            'masonry'            => '.site-main', // a CSS selector matching the elements that triggers a masonry refresh if the theme is using a masonry layout.
            'post-details'       => array(
                'stylesheet' => 'themeslug-style', // name of the theme's stylesheet.
                'date'       => '.posted-on', // a CSS selector matching the elements that display the post date.
                'categories' => '.cat-links', // a CSS selector matching the elements that display the post categories.
                'tags'       => '.tags-links', // a CSS selector matching the elements that display the post tags.
                'author'     => '.byline', // a CSS selector matching the elements that display the post author.
                'comment'    => '.comments-link', // a CSS selector matching the elements that display the comment link.
            ),
            'featured-images'    => array(
                'archive'         => true, // enable or not the featured image check for archive pages: true or false.
                'archive-default' => false, // the default setting of the featured image on archive pages, if it's being displayed or not: true or false (only required if false).
                'post'            => true, // enable or not the featured image check for single posts: true or false.
                'post-default'    => false, // the default setting of the featured image on single posts, if it's being displayed or not: true or false (only required if false).
                'page'            => true, // enable or not the featured image check for single pages: true or false.
                'page-default'    => false, // the default setting of the featured image on single pages, if it's being displayed or not: true or false (only required if false).
            ),
        ));

        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
    }

endif; // ctravel_adven_lite_setups


if (!function_exists('ctravel_adven_lite_the_custom_logo')) :

    function ctravel_adven_lite_the_custom_logo() {
        the_custom_logo();
    }

endif;

function ctravel_adven_lite_widgets_init() {

    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'ctravel-adven-lite'),
        'description'   => esc_html__('Appears on sidebar', 'ctravel-adven-lite'),
        'id'            => 'sidebar-1',
        'before_widget' => '',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3><aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 1', 'ctravel-adven-lite'),
        'description'   => esc_html__('Appears on footer', 'ctravel-adven-lite'),
        'id'            => 'footer-1',
        'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-1 %2$s footercont">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 2', 'ctravel-adven-lite'),
        'description'   => esc_html__('Appears on footer', 'ctravel-adven-lite'),
        'id'            => 'footer-2',
        'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-2 %2$s footercont">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 3', 'ctravel-adven-lite'),
        'description'   => esc_html__('Appears on footer', 'ctravel-adven-lite'),
        'id'            => 'footer-3',
        'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-3 %2$s footercont">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 4', 'ctravel-adven-lite'),
        'description'   => esc_html__('Appears on footer', 'ctravel-adven-lite'),
        'id'            => 'footer-4',
        'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-3 %2$s footercont">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}

add_action('widgets_init', 'ctravel_adven_lite_widgets_init');

