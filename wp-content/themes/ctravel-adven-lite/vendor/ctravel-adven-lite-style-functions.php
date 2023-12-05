<?php

function ctravel_adven_lite_style() {
    wp_enqueue_style('ctravel-adven-lite-basic-style', get_stylesheet_uri());
    wp_enqueue_style('ctravel-adven-lite-style', get_template_directory_uri() . '/skin/css/ctravel-adven-lite-main.css');
    wp_enqueue_style('ctravel-adven-lite-responsive', get_template_directory_uri() . '/skin/css/ctravel-adven-lite-responsive.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/skin/css/font-awesome.css');
    wp_enqueue_script('ctravel-adven-lite-toggle', get_template_directory_uri() . '/skin/js/ctravel-adven-lite-toggle.js', array('jquery'));
    wp_enqueue_script('ctravel-adven-lite-customjs', get_template_directory_uri() . '/skin/js/ctravel-adven-lite-customjs.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'ctravel_adven_lite_style');
?>
<?php

function ctravel_adven_lite_header_style() {
    $ctravel_adven_lite_header_text_color = get_header_textcolor();
    if (get_theme_support('custom-header', 'default-text-color') === $ctravel_adven_lite_header_text_color) {
        return;
    }
    echo '<style id="ctravel-adven-lite-custom-header-styles" type="text/css">';
    if ('blank' !== $ctravel_adven_lite_header_text_color) {
        echo '.header_top .logo a,
            .blog-post h3 a,
            .blog-post .pageheading h1
			 {
				color: #' . esc_attr($ctravel_adven_lite_header_text_color) . '
			}';
    }
    echo '</style>';
}
