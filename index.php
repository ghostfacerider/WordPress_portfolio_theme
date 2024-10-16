<?php
/**
 * Template Name: My Home Page
 */

get_header(); // Include the header

?>

     <!--===== Home =====-->
        <section class="home" id="home">
            <div class="home_container container grid">
                <div class="home_social">
                    <span class="home_social-follow">Follow Me</span>
                    <div class="home_social-links">
                        <a href="https://www.facebook.com" target="_blank" class="home_social-link">
                            <i class="uil uil-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank" class="home_social-link">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="home_social-link">
                            <i class="uil uil-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="home_data">
                    <h1 class="home_titl">Hello, my name is  Gendy</h1>
                    <h3 class="home_subtitle">I'm <span class="typing"></span>. </h3>
                    <!-- <p class="home_description">I am in my second year at NSCC in the IT Web Programming, program.</p> -->
                    <a href="about.php" class="button">
                        <i class="uil uil-user button_icon"></i>
                        More About Me
                    </a>
                </div>
                <div class="my_info">
                    <div class="info_item">
                        <i class="uil uil-facebook-messenger info_icon"></i>
                        <div>
                            <h3 class="info_title">Messenger</h3>
                            <span class="info_subtitle">user.fb123</span>
                        </div>
                    </div>
                    <div class="info_item">
                        <i class="uil uil-whatsapp info_icon"></i>
                        <div>
                            <h3 class="info_title">WhatsApp</h3>
                            <span class="info_subtitle">999-888-777</span>
                        </div>
                    </div>
                    <div class="info_item">
                        <i class="uil uil-envelope-edit info_icon"></i>
                        <div>
                            <h3 class="info_title">Email</h3>
                            <span class="info_subtitle">user@mail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php

get_footer(); // Include the footer
?>
