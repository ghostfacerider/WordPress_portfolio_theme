<?php
/**
 * Portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package portfolio
 */

// URL to the theme folder
define('THEME_DIR_URI', get_template_directory_uri());
// The directory path to the theme
define('THEME_DIR', get_template_directory());

class Portfolio_Theme
{
    private static $instance = null;

    private function __construct()
    {
        // Call the version method to define _S_VERSION
        $this->version();

        // Hook the portfolio_scripts method to wp_enqueue_scripts
        add_action('wp_enqueue_scripts', [$this, 'portfolio_scripts']);

        // Register the sidebar
        add_action('widgets_init', [$this, 'portfolio_register_sidebar']);

        // Register ACF blocks

        include THEME_DIR . './includes/about-page.php'; // Register the About Me block
        include THEME_DIR . './includes/contact-page.php'; // Register the Contact Me block
        include THEME_DIR . './includes/services-page.php'; // Register the Services block
        include THEME_DIR . './includes/skills.php'; // Register the Skills block
        include THEME_DIR . './includes/portfolio.php'; // Register the Portfolio block
        add_action('after_setup_theme', 'portfolio_register_menus');

    }

    public function version()
    {
        if (!defined('_S_VERSION')) {
            // Replace the version number of the theme on each release.
            define('_S_VERSION', '1.0.0');
        }
    }

    /**
     * Register Sidebar
     */
    public function portfolio_register_sidebar()
    {
        register_sidebar(array(
            'primary' => __('Primary Menu', 'portfolio'),
            'id' => 'main-sidebar',
            'before_widget' => '<div class="sidebar-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));
    }

    public function portfolio_register_menus()
    {
        register_nav_menus(array(
            'primary-menu' => __('Primary Menu', 'portfolio'),
        ));
    }

/**
 * Enqueue scripts and styles.
 */
    public function portfolio_scripts()
    {
        wp_enqueue_style('portfolio-style', get_stylesheet_uri(), array(), _S_VERSION);
        wp_style_add_data('portfolio-style', 'rtl', 'replace');

        // Enqueue additional scripts
        wp_enqueue_script('typed-js', 'https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js', array(), null, true);
        wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/mixitup.min.js', array(), null, true);
        wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, true);
        wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }

    public static function get_instance()
    {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}

// Initialize the theme
Portfolio_Theme::get_instance();