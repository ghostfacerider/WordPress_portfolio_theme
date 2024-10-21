<?php
/**
 * Template Name: Work
 */

get_header(); // Include the header
?>

<main class="main">
        <!--========== Work  ==========-->
        <section class="work section" id="work">
            <h2 data-heading="My Portfolio" class="section_title">Recent Works</h2>
            <div class="work_filters">
                <span class="work_item active-work mixitup-control-active" data-filter="all">All</span>
                <span class="work_item" data-filter=".web">Web</span>
                <span class="work_item" data-filter=".cms">CMS</span>
                <!-- <span class="work_item" data-filter=".design">Design</span> -->
            </div>
            <div class="work_container container grid" id="MixItUp72996E">
                <div class="work_card mix web">
                    <img src="/wp-content/uploads/2024/10/dotnet.jpg" width="1890" height="795" alt="NSCC Course Map" class="work_img">
                    <h3 class="work_title">Web</h3>
                    <span class="work_button">Demo
                        <i class="uil uil-arrow-right work_button-icon"></i>
                    </span>
                    <div class="portfolio_item-details">
                        <h3 class="details_title">NSCC Course Map</h3>
                        <p class="details_description">For this project, I used Microsoft dotnet 7 framework with razor page. Using dotnet, commands to generate each pages front-and and back-end. The dotnet frameworks allows you to build websites, for all three operating systems, Windows, Mac, and Linux.  </p>
                        <ul class="details_info">
                            <li> Created - <span>4 Jan 2023</span></li>
                            <li> Technologies - <span> dotnet, razor pages</span></li>
                            <li>Role - <span>Frontend and Backend</span></li>
                            <li>View - <span><a href="https://nscccoursemap-w0202057.azurewebsites.net" target="_blank">Course Map</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="work_card mix web">
                    <img src="/wp-content/uploads/2024/10/laravel.jpg" width="1902" height="965" alt="Laravel Framwork" class="work_img">
                    <h3 class="work_title">Web</h3>
                    <span class="work_button">Demo
                        <i class="uil uil-arrow-right work_button-icon"></i>
                    </span>
                    <div class="portfolio_item-details">
                        <h3 class="details_title">Blog Site.</h3>
                        <p class="details_description">The PHP framework, Laravel framework was used to create this blog site, learned how, the MVC model, the use of models, controllers, and view. The built in functions make it easy to to create sites. In a few lines of code it was easy to create a login and authenticate a user. Such frameworks like Laravel make it easy to get up and running in a few weeks. </p>
                        <ul class="details_info">
                            <li> Created - <span>4 Nov 2022</span></li>
                            <li> Technologies - <span> Laravel Framwork</span></li>
                            <li>Role - <span>Frontend and Backend</span></li>
                            <!-- <li>View - <span><a href="#" target="_blank">www.domain.com</a></span></li> -->
                        </ul>
                    </div>
                </div>
                <div class="work_card mix web">
                    <img src="/wp-content/uploads/2024/10/react.jpg" width="1891" height="909" alt="React" class="work_img">
                    <h3 class="work_title">Web</h3>
                    <span class="work_button">Demo
                        <i class="uil uil-arrow-right work_button-icon"></i>
                    </span>
                    <div class="portfolio_item-details">
                        <h3 class="details_title">React</h3>
                        <p class="details_description">I created a players API using react as the front-end and MongoDB, Express and Node for the back-end (The MERN stack). This was my first time creating a site using node, node is full of features that traditional HTML, CSS and JavaScript doesn’t provide. The added benefits is that you can pull in packages and/or models to use. </p>
                        <ul class="details_info">
                            <li> Created - <span>1 Oct 2022</span></li>
                            <li> Technologies - <span> MongoDB, Express, React, and Node</span></li>
                            <li>Role - <span>Frontend and Backend</span></li>
                            <li>View - <span><a href="https://w0202057-fullstack.onrender.com" target="_blank">React site</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="work_card mix cms">
                    <img src="/wp-content/uploads/2024/10/port.jpg" width="1615" height="929" alt="Portfolio website" class="work_img">
                    <h3 class="work_title">CMS</h3>
                    <span class="work_button">Demo
                        <i class="uil uil-arrow-right work_button-icon"></i>
                    </span>
                    <div class="portfolio_item-details">
                        <h3 class="details_title">Portfolio website</h3>
                        <p class="details_description">This is my first  WordPress theme. Which was a Portfolio website, it allowed the user to showcase their work, and allows them to post blog post as well, WordPress, file layout is no different then basic HTML. Since WordPress is PHP base, coding WordPress sites are a bit easier, to do when you know PHP. They have a well written documentation on how to create a theme. Understanding. </p>
                        <ul class="details_info">
                            <li> Created - <span>15 Jan 2023</span></li>
                            <li> Technologies - <span> WordPress, Bootstrap</span></li>
                            <li>Role - <span>Frontend </span></li>
                            <!-- <li>View - <span><a href="#" target="_blank">www.domain.com</a></span></li> -->
                        </ul>
                    </div>
                </div>
                <div class="work_card mix cms">
                    <img src="/wp-content/uploads/2024/10/thenews.jpg" width="1720" height="966" alt="News Website" class="work_img">
                    <h3 class="work_title">CMS</h3>
                    <span class="work_button">Demo
                        <i class="uil uil-arrow-right work_button-icon"></i>
                    </span>
                    <div class="portfolio_item-details">
                        <h3 class="details_title">News Website</h3>
                        <p class="details_description">This is my second WordPress theme. Which was a news website, it allowed the user to create post and display it to clients. WordPress, file layout is no different then basic HTML. Since WordPress is PHP base, coding WordPress sites are a bit easier, to do when you know PHP. They have a well written documentation on how to create a theme. Understanding 
                            </p><li> Created - <span>20 Jan 2023</span></li>
                            <li> Technologies - <span> WordPress, Bootstrap</span></li>
                            <li>Role - <span>Frontend</span></li>
                            <!-- <li>View - <span><a href="#" target="_blank">www.domain.com</a></span></li> -->
                        
                    </div>
                </div>
                <!-- g -->
            </div>
        </section>
        <!--========== Portfolio Popup  ==========-->
        <div class="portfolio_popup">
            <div class="portfolio_popup-inner">
                <div class="portfolio_popup-content grid">
                    <span class="portfolio_popup-close"><i class="uil uil-times"></i></span>
                    <div class="pp_thumbnail">
                        <img src="img/dotnet.webp" alt="" class="portfolio_popup-img">
                    </div>
                    <div class="portfolio_popup-info">
                        <div class="portfolio_popup-subtitle">Featured - <span> Design</span></div>
                        <div class="portfolio_popup-body">
                            <h3 class="details_title">App for technology &amp; services</h3>
                            <p class="details_description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo vero aliquam laborum minus, totam sed architecto reiciendis numquam officia officiis, at dolore, consequuntur cum ex mollitia ut. Aperiam, ipsum ullam!
                                Quas eos corrupti similique dolore odio corporis laboriosam cumque. Debitis cupiditate totam animi expedita iusto odit eum rem sequi pariatur distinctio perspiciatis quod, libero reiciendis suscipit assumenda harum a natus. </p>
                            <ul class="details_info">
                                <li> Created - <span>4 dec 2020</span></li>
                                <li> Technologies - <span> HTML, CSS</span></li>
                                <li>Role - <span>Frontend</span></li>
                                <li>View - <span><a href="#" target="_blank">www.domain.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</main>

<?php
get_footer(); // Include the footer
?>
