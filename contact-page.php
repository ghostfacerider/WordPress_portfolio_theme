<?php
/**
 * Template Name: Contact Page
 */

get_header(); // Include the heade
?>
<main class="main">
    <!--========== Contact ==========-->
    <section class="contact section" id="contact">
        <h2 data-heading="Get in touch" class="section_title">Book Me</h2>
        <div class="contact_container container grid">
            <div class="contact_content">
                <div class="contact_info">
                    <div class="contact_card">
                        <i class="uil uil-envelope-edit contact_card-icon"></i>
                        <h3 class="contact_card-title">Email</h3>
                        <span class="contact_card-data">user@gmail.com</span>
                        <span class="contact_button">
                            Write Me <i class="uil uil-arrow-right contact_button-icon"></i>
                        </span>
                    </div>
                    <div class="contact_card">
                        <i class="uil uil-whatsapp contact_card-icon"></i>
                        <h3 class="contact_card-title">Whatsapp</h3>
                        <span class="contact_card-data">999-888-777</span>
                        <span class="contact_button">
                            Write Me <i class="uil uil-arrow-right contact_button-icon"></i>
                        </span>
                    </div>
                    <div class="contact_card">
                        <i class="uil uil-facebook-messenger contact_card-icon"></i>
                        <h3 class="contact_card-title">Messenger</h3>
                        <span class="contact_card-data">user,bf123</span>
                        <span class="contact_button">
                            Write Me <i class="uil uil-arrow-right contact_button-icon"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="contact_content">
				<form action="" method="POST" class="contact_form">
					<?php wp_nonce_field('contact_form_nonce', 'contact_form_submit'); ?>
					<div class="input_container">
						<input type="text" name="username" class="input" required>
						<label for="username">UserName</label><span>Username</span>
					</div>
					<div class="input_container">
						<input type="email" name="email" class="input" required>
						<label for="email">Email</label><span>Email</span>
					</div>
					<div class="input_container">
						<input type="tel" name="phone" class="input" required>
						<label for="phone">Phone</label><span>Phone</span>
					</div>
					<div class="input_container textarea">
						<textarea name="message" class="input" id="" required></textarea>
						<label for="message">Message</label><span>Message</span>
					</div>
					<button type="submit" class="button">
						<i class="uil uil-navigator button_icon"></i>Send Message
					</button>
				</form>
				<div class="form-feedback">
					<?php echo handle_contact_form(); ?>
				</div>
			</div>
        </div>
    </section>
</main>

<?php
get_footer(); // Include the footer
?>
