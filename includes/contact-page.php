<?php


class Contactpage
{
    private static $instance = null;

    private function __construct()
    {
        // Register ACF blocks
        add_action('acf/init', [$this, 'portfolio_contact_me']); // Register the Contact Me block
   
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

    public static function get_instance()
    {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}

// Initialize the theme
Contactpage::get_instance();