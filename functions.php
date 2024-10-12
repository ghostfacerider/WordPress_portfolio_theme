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

        add_action('acf/init', [$this, 'portfolio_about_me']); // Register the About Me block
        add_action('acf/init', [$this, 'portfolio_contact_me']); // Register the Contact Me block
        add_action('acf/init', [$this, 'portfolio_services']); // Register the Services block
        add_action('acf/init', [$this, 'portfolio_skills']); // Register the Skills block

        // Register the ACF Portfolio block
        add_action('acf/init', [$this, 'portfolio_portfolio_block']); // Register the Portfolio block
    }

    public function version()
    {
        if (!defined('_S_VERSION')) {
            // Replace the version number of the theme on each release.
            define('_S_VERSION', '1.0.0');
        }
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

    /**
     * Register the ACF About Me block
     */
    public function portfolio_about_me()
    {
        acf_register_block_type(array(
            'name' => 'about',
            'title' => __('About Me'),
            'description' => __('A block to display about me section.'),
            'render_template' => 'template-parts/blocks/about/about.php',
            'category' => 'common',
            'icon' => 'id',
            'keywords' => array('about', 'me'),
            'enqueue_style' => get_template_directory_uri() . '/blocks/about/about.css',
        ));
    }

    /**
     * Register the ACF Contact Me block
     */
    public function portfolio_contact_me()
    {
        acf_register_block_type(array(
            'name' => 'contact',
            'title' => __('Contact Me'),
            'description' => __('A block to display contact information and a form.'),
            'render_template' => 'template-parts/blocks/contact/contact.php',
            'category' => 'common',
            'icon' => 'mail',
            'keywords' => array('contact', 'form', 'get in touch'),
            'enqueue_style' => get_template_directory_uri() . '/blocks/contact/contact.css',
        ));
    }

    /**
     * Register the ACF Services block
     */
    public function portfolio_services()
    {
        acf_register_block_type(array(
            'name' => 'services',
            'title' => __('Services'),
            'description' => __('A block to display services offered.'),
            'render_template' => 'template-parts/blocks/services/services.php',
            'category' => 'common',
            'icon' => 'briefcase',
            'keywords' => array('services', 'offer', 'business'),
            'enqueue_style' => get_template_directory_uri() . '/blocks/services/services.css',
        ));
    }

    /**
     * Register the ACF Skills block
     */
    public function portfolio_skills()
    {
        acf_register_block_type(array(
            'name' => 'skills',
            'title' => __('Skills'),
            'description' => __('A block to display my skills and experience.'),
            'render_template' => 'template-parts/blocks/skills/skills.php',
            'category' => 'common',
            'icon' => 'awards',
            'keywords' => array('skills', 'experience', 'abilities'),
            'enqueue_style' => get_template_directory_uri() . '/blocks/skills/skills.css',
        ));
    }

    /**
     * Register the ACF Portfolio block
     */
    public function portfolio_portfolio_block()
    {
        acf_register_block_type(array(
            'name' => 'portfolio',
            'title' => __('Portfolio'),
            'description' => __('A block to display my recent works.'),
            'render_template' => 'template-parts/blocks/portfolio/portfolio.php',
            'category' => 'common',
            'icon' => 'portfolio',
            'keywords' => array('portfolio', 'works', 'projects'),
            'enqueue_style' => get_template_directory_uri() . '/blocks/portfolio/portfolio.css',
        ));
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

add_action( 'after_setup_theme', 'portfolio_register_menus' );

function portfolio_register_menus() {
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'portfolio' ),
    ) );
}
