<!--========== SIDEBAR ==========-->
<div class="nav_toggle" id="nav-toggle">
    <i class="uil uil-bars"></i>
</div>
<aside class="sidebar" id="sidebar">
    <nav class="nav">
        <div class="nav_logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="nav_logo-text">GB</a>
        </div>
        <div class="nav_menu">
            <div class="menu">
                <ul class="nav_list">
                    <?php
$uri = $_SERVER['REQUEST_URI'];

$menu_items = array(
    'index' => 'Home',
    'skills' => 'Skills',
    'work' => 'Work',
    'service' => 'Service',
    'about' => 'About',
    'contact' => 'Contacts',
);

foreach ($menu_items as $slug => $name) {
    $active_class = str_ends_with($uri, $slug) ? 'active-link' : '';
    echo '<li class="nav_item">
                            <a href="' . esc_url(home_url($slug)) . '" class="nav_link ' . esc_attr($active_class) . '">' . esc_html($name) . '</a>
                        </li>';
}
?>
                </ul>
            </div>
        </div>
        <div class="btn_share">
            <i class="uil uil-share-alt social_share"></i>
        </div>
        <div class="nav_close" id="nav-close">
            <i class="uil uil-times"></i>
        </div>
    </nav>
</aside>