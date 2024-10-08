<?php
/**
 * Custom Footer Template
 */
?>

<footer class="footer">
    <div class="footer_bg">
        <div class="footer_container container grid">
            <div>
                <h1 class="footer_title"><?php echo esc_html(get_bloginfo('name')); ?></h1>
                <span class="footer_subtitle">Junior Developer</span>
            </div>
            <ul class="footer_links">
                <li>
                    <a href="<?php echo esc_url(home_url('/service')); ?>" class="footer_link">Services</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/work')); ?>" class="footer_link">Work</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="footer_link">Contacts</a>
                </li>
            </ul>
            <div class="footer_socails">
                <a href="https://www.facebook.com" target="_blank" class="footer_social">
                    <i class="uil uil-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" class="footer_social">
                    <i class="uil uil-instagram"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="footer_social">
                    <i class="uil uil-twitter"></i>
                </a>
            </div>
        </div>
        <p class="footer_copy">&#169; All rights reserved</p>
    </div>
</footer>

<!-- Add your scripts in the footer -->
<?php wp_footer();?>