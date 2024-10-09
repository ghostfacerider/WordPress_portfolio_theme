<?php
/**
 * Template Name: Skills Page
 */

get_header(); // Include the heade
?>
<main class="main">
    <!--========== Skills  ==========-->
    <section class="skills section" id="skills">
        <h2 data-heading="My Abilities" class="section_title">My Experience</h2>
        <div class="skills_container container grid">
            <div class="skills_tabs">
                <div class="skills_header skills_active" data-target="#frontend">
                    <i class="uil uil-brackets-curly skills_icon"></i>
                    <div>
                        <h1 class="skills_title">Frontend Developer</h1>
                        <span class="skills_subtitle">More than 1 year</span>
                    </div>
                    <i class="uil uil-angle-down skills_arrow"></i>
                </div>
                <div class="skills_header" data-target="#design">
                    <i class="uil uil-swatchbook skills_icon"></i>
                    <div>
                        <h1 class="skills_title">CMS and Frameworks</h1>
                        <span class="skills_subtitle">Less than 1 year</span>
                    </div>
                    <i class="uil uil-angle-down skills_arrow"></i>
                </div>
                <div class="skills_header" data-target="#backend">
                    <i class="uil uil-server-network skills_icon"></i>
                    <div>
                        <h1 class="skills_title">Backend Developer</h1>
                        <span class="skills_subtitle">Less than 1 year</span>
                    </div>
                    <i class="uil uil-angle-down skills_arrow"></i>
                </div>
            </div>
            <div class="skills_content">
                <div class="skills_group skills_active" data-content id="frontend">
                    <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">HTML</h3>
                                <span class="skills_number">90%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:90%"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">CSS</h3>
                                <span class="skills_number">80%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:80%"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">JavaScript</h3>
                                <span class="skills_number">30%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:30%"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">React</h3>
                                <span class="skills_number">30%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:30%"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skills_group" data-content id="design">
                    <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">WordPress</h3>
                                <span class="skills_number">50%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:50%"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Laravel</h3>
                                <span class="skills_number">60%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:60%"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">ASP.Net</h3>
                                <span class="skills_number">60%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:60%"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skills_group" data-content id="backend">
                    <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">PHP</h3>
                                <span class="skills_number">60%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:60%"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">MySQL</h3>
                                <span class="skills_number">60%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:60%"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Mongoose</h3>
                                <span class="skills_number">40%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width:40%"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer(); // Include the footer
?>