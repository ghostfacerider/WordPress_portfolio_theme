<?php
/**
 * Template Name: Service Page
 */

get_header(); // Include the heade
?>
<main class="main">
    <!--========== Services  ==========-->
    <section class="services section" id="services">
        <h2 data-heading="Services" class="section_title"><?php the_field('services_title'); ?></h2>
        <div class="services_container container grid">
            <?php if (have_rows('services')): ?>
            <?php while (have_rows('services')): the_row(); ?>
            <div class="services_content">
                <div>
                    <i class="<?php the_sub_field('service_icon'); ?> services_icon"></i>
                    <h3 class="services_title"><?php the_sub_field('service_title'); ?></h3>
                </div>
                <span class="services_button">
                    View More <i class="uil uil-arrow-right services_button-icon"></i>
                </span>
                <div class="services_modal">
                    <div class="services_modal-content">
                        <i class="uil uil-times services_modal-close"></i>
                        <h3 class="services_modal-title"><?php the_sub_field('modal_title'); ?></h3>
                        <p class="services_modal-description"><?php the_sub_field('modal_description'); ?></p>
                        <ul class="services_modal-services grid">
                            <?php if (have_rows('modal_services')): ?>
                            <?php while (have_rows('modal_services')): the_row(); ?>
                            <li class="services_modal-service">
                                <i class="uil uil-check-circle services_modal-icon"></i>
                                <p class="services_modal-info"><?php the_sub_field('service_info'); ?></p>
                            </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer(); // Include the footer
?>