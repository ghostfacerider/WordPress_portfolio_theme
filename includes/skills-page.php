<?php
class Skillspage
{
    private static $instance = null;

    private function __construct()
    {
        

        // Register ACF blocks
        add_action('acf/init', [$this, 'portfolio_skills']); // Register the Skills block

        
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

    public static function get_instance()
    {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}

// Initialize the theme
Skillspage::get_instance();