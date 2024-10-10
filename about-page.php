<?php
/**
 * Template Name: About Page
 */

get_header(); // Include the header
?>

<main class="main">
    <!--===== About =====-->
    <section class="about section" id="about">
        <h2 data-heading="My Intro" class="section_title"><?php esc_html_e('About Me', 'portfolio');?></h2>
        <div class="about_container container grid">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/blackman.jpg'); ?>"
                alt="<?php esc_attr_e('Image of Gendy', 'portfolio');?>" class="about_img">
            <div class="about_data">
                <h3 class="about_heading"><?php esc_html_e('Hi, I am Gendy, based in Canada', 'portfolio');?></h3>
                <p class="about_description">
                    <?php esc_html_e('I am in my second year at NSCC in the IT Web Programming program. I am a Web Developer, Programmer, and Entrepreneur. That being said, I am also a person with a disability, but that has not stopped me from achieving my goals.', 'portfolio');?>
                </p>
                <div class="about_info grid">
                    <div class="about_box">
                        <i class="uil uil-award about_icon"></i>
                        <h3 class="about_title"><?php esc_html_e('Experience', 'portfolio');?></h3>
                        <span class="about_subtitle">2 Years</span>
                    </div>
                    <div class="about_box">
                        <i class="uil uil-suitcase-alt about_icon"></i>
                        <h3 class="about_title"><?php esc_html_e('Completed', 'portfolio');?></h3>
                        <span class="about_subtitle">5 Projects</span>
                    </div>
                    <div class="about_box">
                        <i class="uil uil-headphones-alt about_icon"></i>
                        <h3 class="about_title"><?php esc_html_e('Support', 'portfolio');?></h3>
                        <span class="about_subtitle"><?php esc_html_e('Online 24/7', 'portfolio');?></span>
                    </div>
                </div>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button">
                    <i class="uil uil-navigator button-icon"></i>
                    <?php esc_html_e('Contact Me', 'portfolio');?>
                </a>
            </div>
        </div>
    </section>

    <!--===== Qualification =====-->
    <section class="qualification sections">
        <h2 data-heading="My Journey" class="section_title"><?php esc_html_e('Qualification', 'portfolio');?></h2>
        <div class="qualification_container container grid">
            <div class="education">
                <h3 class="qualification_title">
                    <i class="uil uil-graduation-cap"></i>
                    <?php esc_html_e('Education', 'portfolio');?>
                </h3>
                <div class="timeline">
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">
                            <?php esc_html_e('NSCC - Institute of Technology Campus - Halifax, NS', 'portfolio');?></h3>
                        <p class="timeline_text"><?php esc_html_e('IT Web Programming', 'portfolio');?></p>
                        <span class="timeline_date">
                            <i class="uil uil-calendar-alt"></i>
                            <?php esc_html_e('2021 - Present', 'portfolio');?>
                        </span>
                    </div>
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">
                            <?php esc_html_e('Mount Saint Vincent University - Halifax, NS', 'portfolio');?></h3>
                        <p class="timeline_text">
                            <?php esc_html_e('Bachelor of Hospitality and Tourism Management', 'portfolio');?></p>
                        <span class="timeline_date">
                            <i class="uil uil-calendar-alt"></i>
                            <?php esc_html_e('2016 - 2020', 'portfolio');?>
                        </span>
                    </div>
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title"><?php esc_html_e('Algonquin College - Ottawa, Ont', 'portfolio');?>
                        </h3>
                        <p class="timeline_text"><?php esc_html_e('Diploma in Culinary Management', 'portfolio');?></p>
                        <span class="timeline_date">
                            <i class="uil uil-calendar-alt"></i>
                            <?php esc_html_e('2006 - 2007', 'portfolio');?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="experience">
                <h3 class="qualification_title">
                    <i class="uil uil-suitcase"></i>
                    <?php esc_html_e('Experience', 'portfolio');?>
                </h3>
                <div class="timeline">
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">
                            <?php esc_html_e('Maritimes Lens & Equipment Rentals, Halifax, Nova Scotia', 'portfolio');?>
                        </h3>
                        <p class="timeline_text"><?php esc_html_e('Founder', 'portfolio');?></p>
                        <span class="timeline_date">
                            <i class="uil uil-calendar-alt"></i>
                            <?php esc_html_e('Aug 2020 - Present', 'portfolio');?>
                        </span>
                    </div>
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">
                            <?php esc_html_e('Nova Scotia Health, Halifax, Nova Scotia', 'portfolio');?></h3>
                        <p class="timeline_text"><?php esc_html_e('Central Laundry', 'portfolio');?></p>
                        <span class="timeline_date">
                            <i class="uil uil-calendar-alt"></i>
                            <?php esc_html_e('March 2011 - Present', 'portfolio');?>
                        </span>
                    </div>
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">
                            <?php esc_html_e('Nova Scotia Health, Halifax, Nova Scotia', 'portfolio');?></h3>
                        <p class="timeline_text"><?php esc_html_e('Food & Nutrition Services', 'portfolio');?></p>
                        <span class="timeline_date">
                            <i class="uil uil-calendar-alt"></i>
                            <?php esc_html_e('March 2020 - March 2021', 'portfolio');?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer(); // Include the footer
?>