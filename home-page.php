<?php
/**
 * Template Name: Home Page
 */

get_header(); // Include the header
?>

<main class="main">
    <!--===== Home =====-->
    <section class="home" id="home">
        <div class="home_container container grid">
            <div class="home_social">
                <span class="home_social-follow"><?php esc_html_e('Follow Me', 'portfolio');?></span>
                <div class="home_social-links">
                    <a href="https://www.facebook.com" target="_blank" class="home_social-link"
                        rel="noopener noreferrer">
                        <i class="uil uil-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" class="home_social-link"
                        rel="noopener noreferrer">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="home_social-link" rel="noopener noreferrer">
                        <i class="uil uil-twitter"></i>
                    </a>
                </div>
            </div>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/blackman.jpg'); ?>"
                alt="<?php esc_attr_e('Gendy Image', 'portfolio');?>" class="home_img">
            <div class="home_data">
                <h1 class="home_titl"><?php esc_html_e('Hello, my name is Gendy', 'portfolio');?></h1>
                <h3 class="home_subtitle"><?php esc_html_e("I'm ", 'portfolio');?><span class="typing"></span>.</h3>
                <!-- <p class="home_description"><?php esc_html_e('I am in my second year at NSCC in the IT Web Programming program.', 'portfolio');?></p> -->
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="button">
                    <i class="uil uil-user button_icon"></i>
                    <?php esc_html_e('More About Me', 'portfolio');?>
                </a>
            </div>
            <div class="my_info">
                <div class="info_item">
                    <i class="uil uil-facebook-messenger info_icon"></i>
                    <div>
                        <h3 class="info_title"><?php esc_html_e('Messenger', 'portfolio');?></h3>
                        <span class="info_subtitle">user.fb123</span>
                    </div>
                </div>
                <div class="info_item">
                    <i class="uil uil-whatsapp info_icon"></i>
                    <div>
                        <h3 class="info_title"><?php esc_html_e('WhatsApp', 'portfolio');?></h3>
                        <span class="info_subtitle">999-888-777</span>
                    </div>
                </div>
                <div class="info_item">
                    <i class="uil uil-envelope-edit info_icon"></i>
                    <div>
                        <h3 class="info_title"><?php esc_html_e('Email', 'portfolio');?></h3>
                        <span class="info_subtitle">user@mail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); // Include the footer ?>