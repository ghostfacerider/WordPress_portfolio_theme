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

class Aboutpage
{
    private static $instance = null;

    private function __construct()
    {
        

        // Register ACF blocks
        add_action('acf/init', [$this, 'portfolio_about_me']); // Register the About Me block
        
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


    public static function get_instance()
    {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}

// Initialize the theme
Aboutpage::get_instance();