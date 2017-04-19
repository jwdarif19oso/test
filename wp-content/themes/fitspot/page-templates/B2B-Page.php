<?php
/* Template Name: B2B Page */
?>

<?php get_header(); ?>

    <div id="b2b_page_main">
        <?php if (have_rows('logos')) { ?>

            <div class="section-clients-container">

                <div class="container">

                    <div class="clients-team">

                        <div class="clients_content clearfix">
                            <p>Used by</p>
                            <?php

                            // check if the repeater field has rows of data

                            // loop through the rows of data
                            while (have_rows('logos')) : the_row();

                                // display a sub field value
                                $img = get_sub_field('image');
                                $imgURL = $img["url"];

                                ?>

                                <div class="img <?php if (get_sub_field("hidden_on_mobile") == true) {
                                    echo 'hidden-xs';
                                } ?> ">

                                    <img src="<?php echo $imgURL; ?>"/>

                                </div>
                                <?php

                            endwhile;

                            ?>

                        </div>

                    </div>

                </div>


            </div>

        <?php } ?>

        <div class="section-performance-container">

            <div class="container">

                <div class="section-performance">
                    <ul>
                        <?php if (have_rows('performance_section')) {
                            while (have_rows('performance_section')) {
                                the_row();
                                ?>
                                <li class="col-sm-4 col-md-4">
                                    <h2 class="performance_heading">
                                        <?php the_sub_field("title_performance"); ?>
                                    </h2>

                                    <div class="performance_des">
                                        <?php the_sub_field("performance_description"); ?>
                                    </div>
                                </li>
                                <?php
                            }
                        } ?>
                    </ul>
                </div>

            </div>

        </div>
        <div class="section-benefits-container">

            <div class="container">

                <div class="section-benefits">

                    <h2>
                        <?php the_field("title_benefits"); ?>
                    </h2>

                    <div class="benefits_content clearfix">

                        <?php get_template_part("template-parts/content-benefits"); ?>

                    </div>

                    <div class="btnRow visible-xs">
                        <a class="btn-center btn btn-green btn-small" href="<?php the_field('button_url'); ?>">
                            <?php echo __("Request a Consultation", "fitspot"); ?>
                        </a>
                    </div>

                </div>

            </div>

        </div>

        <div class="section-pricing-container">

            <div class="container">

                <div class="section-pricing">

                    <h2>
                        <?php the_field("title_pricing"); ?>
                    </h2>

                    <div class="details hidden-xs">
                        <?php the_field("details_pricing"); ?>
                    </div>


                    <div class="benefits_content clearfix">

                        <?php get_template_part("template-parts/content-pricing"); ?>

                        <div class="hidden-xs clearfix center col-lg-12 pricing_btn">
                            <a class="btn-center btn btn-green" href="<?php the_field("pricing_button_link"); ?>">
                                <?php the_field("pricing_button_text"); ?>
                            </a>
                        </div>
                    </div>



                </div>

            </div>

        </div>

        <div class="section-services-container" style="background-image: <?php the_field('section_services_bg') ?>">

            <div class="container">

                <div class="section-services">

                    <h2 class="hidden-xs">
                        <?php the_field("title_services"); ?>
                    </h2>

                    <h2 class="visible-xs">
                        <?php the_field("title_services_mobile"); ?>
                    </h2>


                    <div class="services_content clearfix">

                        <?php get_template_part("template-parts/content-services"); ?>

                    </div>

                    <div class="booknow visible-xs">
                        <a class="btn-center btn btn-green btn-small" href="<?php the_field('button_url'); ?>">
                            <?php echo __("Request a Consultation", "fitspot"); ?>
                        </a>
                    </div>

                </div>

            </div>

        </div>

        <div class="section-team-container">

            <div class="container">

                <div class="section-team">

                    <h2 class="hidden-xs">
                        <?php the_field("title_team"); ?>
                    </h2>

                    <h2 class="visible-xs">
                        <?php the_field("title_mobile_team"); ?>
                    </h2>
                    <div class="team-detail">
                        <?php the_field("team_description"); ?>
                    </div>

                    <div class="team_content clearfix">
                        <?php get_template_part("template-parts/content-team"); ?>
                    </div>
                    <div class="center">
                        <a class="btn-center btn btn-green" href="<?php the_field("button_link_team"); ?>">
                            <?php the_field("button_text_team"); ?>
                        </a>
                    </div>
                </div>

            </div>

        </div>


        <div class="section-testimonials-container">

            <div class="container">

                <div class="testimonials-services">

                    <h2>
                        <?php the_field("title_testimonials"); ?>
                    </h2>


                    <div class="testimonials_content clearfix">

                        <?php get_template_part("template-parts/b2b-content-testimonials"); ?>


                    </div>


                </div>

            </div>

        </div>
    </div>
<?php get_footer(); ?>