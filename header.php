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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <?php wp_body_open();?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'portfolio');?></a>

        <header id="masthead" class="site-header">
            <div class="site-branding">
                <?php
the_custom_logo();
if (is_front_page() && is_home()):
?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                        rel="home"><?php bloginfo('name');?></a></h1>
                <?php
else:
?>
                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                        rel="home"><?php bloginfo('name');?></a></p>
                <?php
endif;
$portfolio_description = get_bloginfo('description', 'display');
if ($portfolio_description || is_customize_preview()):
?>
                <p class="site-description">
                    <?php echo $portfolio_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped      ?>
                </p>
                <?php endif;?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu"
                    aria-expanded="false"><?php esc_html_e('Primary Menu', 'portfolio');?></button>
                <?php
wp_nav_menu(
    array(
        'theme_location' => 'primary-menu',
        'menu_id' => 'primary-menu',
    )
);
?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->