<?php
/**
 * Let`s Rock functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Let`s_Rock
 */

if (!function_exists('lets_rock_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function lets_rock_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Let`s Rock, use a find and replace
         * to change 'lets-rock' to the name of your theme in all the template files.
         */
        load_theme_textdomain('lets-rock', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'gallery',
            'chat',
            'link',
            'audio',
            'status',
            'quote',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('lets_rock_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 76,
            'width' => 121,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'lets_rock_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lets_rock_content_width()
{
    $GLOBALS['content_width'] = apply_filters('lets_rock_content_width', 640);
}

add_action('after_setup_theme', 'lets_rock_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lets_rock_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'lets-rock'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'lets-rock'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'lets_rock_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function lets_rock_scripts()
{

    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('js', get_template_directory_uri() . '/source-js/main.js');
}

add_action('wp_enqueue_scripts', 'lets_rock_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

function wbp_custom_new_menu()
{
    register_nav_menus(array(
            'header-nav-menu' => _('Header nav menu'),
            'header-socials-menu' => _('Header social links'),
            'footer-nav-menu' => _('Footer nav menu'),
        )
    );
}

add_action('init', 'wbp_custom_new_menu');

function enqueue_font_awesome()
{
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'enqueue_font_awesome');

function letsrock_customize_register($wp_customize)
{
    $wp_customize->add_setting('footer_copy', array(
        'default' => __('Copyright &copy; 2009-2016 <span id="cantus-link">cantus</span> their respective owners. Shipped from Salem, Mass. USA.', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_section('copyright_section', array(
        'title' => __('Copyright settings', 'lets_rock'),
        'priority' => 30,
    ));
    $wp_customize->add_control(
        'footer_copy', array(
            'label' => __('Copyright info in footer', 'lets_rock'),
            'section' => 'copyright_section',
            'settings' => 'footer_copy',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting('header_image', array(
        'default' => __('<h1 class="main-heading">LET`S ROCK<span class="subheading">With Cantus</span></h1>discover more', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_section('header_image_section', array(
        'title' => __('Background image settings', 'lets_rock'),
        'priority' => 30,
    ));
    $wp_customize->add_control(
        'header_image', array(
            'label' => __('Main heading in header', 'lets_rock'),
            'section' => 'header_image_section',
            'settings' => 'header_image',
            'type' => 'textarea',
        )
    );
}

add_action( 'customize_register', 'letsrock_customize_register');






