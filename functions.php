<?php
/**
 * Portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Portfolio
 */

// Define theme constants
define('THEME_DIR_URI', get_template_directory_uri());
define('THEME_DIR', get_template_directory());

if (!class_exists('Portfolio_Theme')) {
    class Portfolio_Theme
    {
        private static $instance = null;

        private function __construct()
        {
            // Define theme version
            $this->define_version();

            // Hook into actions
            add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
            add_action('after_setup_theme', [$this, 'register_menus']);

            // Include ACF block registrations
            //$this->include_acf_blocks();
        }

        private function define_version()
        {
            if (!defined('_S_VERSION')) {
                define('_S_VERSION', '1.0.0');
            }
        }

        /**
         * Register navigation menus.
         */
        public function register_menus()
        {
            register_nav_menus([
                'primary-menu' => __('Primary Menu', 'portfolio'),
            ]);
        }

        /**
         * Enqueue scripts and styles.
         */
        public function enqueue_scripts()
        {
            wp_enqueue_style('portfolio-style', get_stylesheet_uri(), [], _S_VERSION);
            wp_style_add_data('portfolio-style', 'rtl', 'replace');

            // Enqueue additional scripts
            wp_enqueue_script('typed-js', 'https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js', [], null, true);
            wp_enqueue_script('mixitup', THEME_DIR_URI . '/assets/js/mixitup.min.js', [], null, true);
            wp_enqueue_script('swiper', THEME_DIR_URI . '/assets/js/swiper-bundle.min.js', [], null, true);
            wp_enqueue_script('main-js', THEME_DIR_URI . '/assets/js/main.js', [], null, true);

            // Load comment reply script on singular pages
            if (is_singular() && comments_open() && get_option('thread_comments')) {
                wp_enqueue_script('comment-reply');
            }
        }

        /**
         * Include ACF blocks.
         */
        private function include_acf_blocks()
        {
            $blocks = [
                'about-page',
                'contact-page',
                'services-page',
                'skills-page',
                'portfolio-page',
            ];

            foreach ($blocks as $block) {
                include THEME_DIR . "/includes/{$block}.php"; // Register each block
            }
        }

        public static function get_instance()
        {
            if (self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
        }
    }

    // Initialize the theme
    Portfolio_Theme::get_instance();
}

// Theme support
function sonuk_theme_setup() {
    add_theme_support( 'widgets' );
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));
    add_theme_support('threaded-comments');
}

add_action('after_setup_theme', 'sonuk_theme_setup');

function handle_contact_form() {
    // Initialize a variable to store messages
    $form_feedback = '';

    if ( isset($_POST['contact_form_submit']) && wp_verify_nonce($_POST['contact_form_submit'], 'contact_form_nonce') ) {

        // Initialize an array to store errors
        $errors = array();

        // Sanitize and validate form inputs
        $username = sanitize_text_field( $_POST['username'] );
        $email = sanitize_email( $_POST['email'] );
        $phone = sanitize_text_field( $_POST['phone'] );
        $message = sanitize_textarea_field( $_POST['message'] );

        // Check if fields are empty
        if ( empty($username) ) {
            $errors[] = 'Username is required.';
        }
        if ( !is_email($email) ) {
            $errors[] = 'A valid email is required.';
        }
        if ( empty($phone) ) {
            $errors[] = 'Phone number is required.';
        }
        if ( empty($message) ) {
            $errors[] = 'Message is required.';
        }

        // If there are no errors, proceed with sending the email
        if ( empty($errors) ) {
            $to = 'test@example.in'; // Change this to your desired email address
            $subject = "New Contact Form Submission from $username";
            $body = "Username: $username\nEmail: $email\nPhone: $phone\nMessage: $message";
            $headers = array('Content-Type: text/plain; charset=UTF-8');

            // Send email
            if ( wp_mail( $to, $subject, $body, $headers ) ) {
                $form_feedback = '<p class="success">Thank you for your message. We will get back to you soon!</p>';
            } else {
                $form_feedback = '<p class="error">There was an issue sending your message. Please try again later.</p>';
            }
        } else {
            // Display errors
            foreach ( $errors as $error ) {
                $form_feedback .= '<p class="error">' . $error . '</p>';
            }
        }
    }

    // Return the feedback for use later
    return $form_feedback;
}
