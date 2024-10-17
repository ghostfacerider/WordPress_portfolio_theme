<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>
<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--========== BOXICONS ==========-->
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <!--========== SWIPER CSS ==========-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?v=<?php echo time(); ?>">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <?php wp_body_open();?>
    <div id="page" class="site">  
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'portfolio');?></a>
    <header id="masthead" class="site-header">
        <div class="nav_toggle" id="nav-toggle">
            <i class="uil uil-bars"></i>
        </div>
        <aside class="sidebar" id="sidebar">
            <nav class="nav">
                <div class="nav_logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav_logo-text"><?php bloginfo('name');?></a>
                </div>
                <div class="nav_menu">
                    <div class="menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary-menu',
                                'container'      => false, // Removes the <div> container
                                'menu_class'     => 'nav_list', // Ensures the same class is applied to the <ul> tag
                                'items_wrap'     => '<ul class="%2$s">%3$s</ul>', // Ensures the structure matches your hardcoded HTML
                                'walker'         => '', // You can implement a custom walker if needed for more control
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="btn_share">
                    <i class="uil uil-share-alt social_share"></i>
                </div>
                <div class="nav_close" id="nav-close">
                    <i class="uil uil-times"></i>
                </div>
            </nav>
        </aside>
    </header>
