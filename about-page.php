<?php
/**
 * Template Name: About Page
 */

get_header(); // Include the header

?>

<main class="main">
    <!--===== About =====-->
    <section class="about section" id="about">
        <h2 data-heading="My Intro" class="section_title">About Me</h2>
        <div class="about_container container grid">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/blackman.jpg" alt="" class="about_img">
            <div class="about_data">
                <h3 class="about_heading">Hi, I am Gendy, based in Canada</h3>
                <p class="about_description">I am in my second year at NSCC in the IT Web Programming program. I am a
                    Web Developer,
                    Programmer, and Entrepreneur. That being said, I am also a person with a disability, but that has
                    not stopped me
                    from achieving my goals.</p>
                <div class="about_info grid">
                    <div class="about_box">
                        <i class="uil uil-award about_icon"></i>
                        <h3 class="about_title">Experience</h3>
                        <span class="about_subtitle">2 Years</span>
                    </div>
                    <div class="about_box">
                        <i class="uil uil-suitcase-alt about_icon"></i>
                        <h3 class="about_title">Completed</h3>
                        <span class="about_subtitle">5 Projects</span>
                    </div>
                    <div class="about_box">
                        <i class="uil uil-headphones-alt about_icon"></i>
                        <h3 class="about_title">Support</h3>
                        <span class="about_subtitle">Online 24/7</span>
                    </div>
                </div>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button">
                    <i class="uil uil-navigator button-icon"></i>
                    Contact Me
                </a>
            </div>
        </div>
    </section>
    <!--===== Qualification =====-->
    <section class="qualification sections">
        <h2 data-heading=" My Journey" class="section_title">Qualification</h2>
        <div class="qualification_container container grid">
            <div class="education">
                <h3 class="qualification_title">
                    <i class="uil uil-graduation-cap"></i>
                    Education
                </h3>
                <div class="timeline">
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">NSCC - Institute of Technology Campus - Halifax, NS</h3>
                        <p class="timeline_text">IT Web Programming</p>
                        <span class="timeline_date">
                            <i class="uil uil-calendar-alt"></i>
                            2021 - Present
                        </span>
                    </div>
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">Mount Saint Vincent University - Halifax, NS</h3>
                        <p class="timeline_text">Bachelor of Hospitality and Tourism Management</p>
                        <span class="timeline_date">
                            <i class="uil uil-calendar-alt"></i>
                            2016 - 2020
                        </span>
                    </div>
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">Algonquin College - Ottawa, Ont</h3>
                        <p class="timeline_text">Diploma in Culinary Management</p>
                        <span class="timeline_date">
                            <i class="uil uil-calendar-alt"></i>
                            2006 - 2007
                        </span>
                    </div>
                </div>
            </div>
            <div class="experience">
                <h3 class="qualification_title">
                    <i class="uil uil-suitcase"></i>
                    Experience
                </h3>
                <div class="timeline">
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">Maritimes Lens & Equipment Rentals, Halifax, Nova Scotia</h3>
                        <p class="timeline_text">Founder</p>
                        <span class="timeline_date">
                            <i class="uil uil-calendar-alt"></i>
                            Aug 2020 - Present
                        </span>
                    </div>
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">Nova Scotia Health, Halifax, Nova Scotia</h3>
                        <p class="timeline_text">Central Laundry</p>
                        <span class="timeline_date">
                            <i class="uil uil-calendar-alt"></i>
                            March 2011 - Present
                        </span>
                    </div>
                    <div class="timeline_item">
                        <div class="circle_dot"></div>
                        <h3 class="timeline_title">Nova Scotia Health, Halifax, Nova Scotia</h3>
                        <p class="timeline_text">Food & Nutrition Services</p>
                        <span class="timeline_date">
                            <i class="uil uil-calendar-alt"></i>
                            March 2020 - March 2021
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
