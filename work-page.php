<?php
/**
 * Template Name: Work Page
 */

get_header(); // Include the heade
?>
<?php
// Assuming you're using ACF to get the portfolio items, you might loop through a repeater field.
$portfolio_items = get_field('portfolio_items'); // Change 'portfolio_items' to your ACF field name

if ($portfolio_items): ?>
<main class="main">
    <!--========== Work  ==========-->
    <section class="work section" id="work">
        <h2 data-heading="My Portfolio" class="section_title">Recent Works</h2>
        <div class="work_filters">
            <span class="work_item active-work" data-filter="all">All</span>
            <span class="work_item" data-filter=".web">Web</span>
            <span class="work_item" data-filter=".cms">CMS</span>
        </div>
        <div class="work_container container grid">
            <?php foreach ($portfolio_items as $item): ?>
            <div class="work_card mix <?php echo esc_attr($item['category']); ?>">
                <img src="<?php echo esc_url($item['image']); ?>" alt="" class="work_img">
                <h3 class="work_title"><?php echo esc_html($item['type']); ?></h3>
                <span class="work_button">Demo
                    <i class="uil uil-arrow-right work_button-icon"></i>
                </span>
                <div class="portfolio_item-details">
                    <h3 class="details_title"><?php echo esc_html($item['title']); ?></h3>
                    <p class="details_description"><?php echo esc_html($item['description']); ?></p>
                    <ul class="details_info">
                        <li> Created - <span><?php echo esc_html($item['created']); ?></span></li>
                        <li> Technologies - <span><?php echo esc_html($item['technologies']); ?></span></li>
                        <li>Role - <span><?php echo esc_html($item['role']); ?></span></li>
                        <?php if ($item['view_link']): ?>
                        <li>View - <span><a href="<?php echo esc_url($item['view_link']); ?>" target="_blank">View
                                    Project</a></span></li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </section>
</main>
<?php endif;?>

<?php
get_footer(); // Include the footer
?>