<?php

class Servicepage
{
    private static $instance = null;

    private function __construct()
    {
        

        // Register ACF blocks
        add_action('acf/init', [$this, 'portfolio_services']); // Register the Services block

        
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


    public static function get_instance()
    {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}

// Initialize the theme
Servicepage::get_instance();