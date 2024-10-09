<?php
class Portfoliopage
{
    private static $instance = null;

    private function __construct()
    {
        

        // Register ACF blocks
        add_action('acf/init', [$this, 'portfolio_portfolio_block']); // Register the Portfolio block

        
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
Portfoliopage::get_instance();