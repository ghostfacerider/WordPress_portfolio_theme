<?php
/**
 * Portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Portfolio
 */

// Define theme constants
define('THEME_DIR_URI', get_template_directory_uri());
define('THEME_DIR', get_template_directory());

if (!class_exists('Portfolio_Theme')) {
    class Portfolio_Theme
    {
        private static $instance = null;

        private function __construct()
        {
            // Define theme version
            $this->define_version();

            // Hook into actions
            add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
            add_action('after_setup_theme', [$this, 'register_menus']);

            // Include ACF block registrations
            $this->include_acf_blocks();
        }

        private function define_version()
        {
            if (!defined('_S_VERSION')) {
                define('_S_VERSION', '1.0.0');
            }
        }

        /**
         * Register navigation menus.
         */
        public function register_menus()
        {
            register_nav_menus([
                'primary-menu' => __('Primary Menu', 'portfolio'),
            ]);
        }

        /**
         * Enqueue scripts and styles.
         */
        public function enqueue_scripts()
        {
            wp_enqueue_style('portfolio-style', get_stylesheet_uri(), [], _S_VERSION);
            wp_style_add_data('portfolio-style', 'rtl', 'replace');

            // Enqueue additional scripts
            wp_enqueue_script('typed-js', 'https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js', [], null, true);
            wp_enqueue_script('mixitup', THEME_DIR_URI . '/assets/js/mixitup.min.js', [], null, true);
            wp_enqueue_script('swiper', THEME_DIR_URI . '/assets/js/swiper-bundle.min.js', [], null, true);
            wp_enqueue_script('main-js', THEME_DIR_URI . '/assets/js/main.js', [], null, true);

            // Load comment reply script on singular pages
            if (is_singular() && comments_open() && get_option('thread_comments')) {
                wp_enqueue_script('comment-reply');
            }
        }

        /**
         * Include ACF blocks.
         */
        private function include_acf_blocks()
        {
            $blocks = [
                'about-page',
                'contact-page',
                'services-page',
                'skills-page',
                'portfolio-page',
            ];

            foreach ($blocks as $block) {
                include THEME_DIR . "/includes/{$block}.php"; // Register each block
            }
        }

        public static function get_instance()
        {
            if (self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
        }
    }

    // Initialize the theme
    Portfolio_Theme::get_instance();
}
