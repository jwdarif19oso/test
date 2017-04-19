<?php
/* Template Name: Home */
?>

<?php get_header(); ?>


    <?php  if( have_rows('logos') ) { ?>

    <div class="section-clients-container">

        <div class="container">

            <div class="clients-team">

                <div class="clients_content clearfix">

                    <?php

                    // check if the repeater field has rows of data

                        // loop through the rows of data
                        while (have_rows('logos')) : the_row();

                            // display a sub field value
                            $img = get_sub_field('image');
                            $imgURL = $img["url"];

                        ?>

                            <div class="img <?php if(get_sub_field("hidden_on_mobile") == true){ echo 'hidden-xs'; } ?> ">

                                <img src="<?php echo $imgURL; ?>" />

                            </div>
                            <?php

                        endwhile;

                    ?>

                </div>

            </div>

        </div>


    </div>

    <?php } ?>

    <div class="section-team-container">

        <div class="container">

            <div class="section-team">

                <h2 class="hidden-xs">
                    <?php the_field("title_team"); ?>
                </h2>

                <h2 class="visible-xs">
                    <?php the_field("title_mobile_team"); ?>
                </h2>


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


    <div class="section-services-container">

        <div class="container">

            <div class="section-services">

                <h2>
                    <?php the_field("title_services"); ?>
                </h2>


                <div class="services_content clearfix">

                    <?php get_template_part("template-parts/content-services"); ?>

                </div>

                <div class="center">
                    <a class="btn-center btn btn-green" href="<?php the_field("button_link_services"); ?>">
                        <?php the_field("button_text_services"); ?>
                    </a>
                </div>

            </div>

        </div>

    </div>

    <?php
        $img = get_field("background_image_testimonials");
        $imgURL = $img["url"];
    ?>
    <div class="section-testimonials-container" style="background: url('<?php echo $imgURL; ?>');">

        <div class="container">

            <div class="testimonials-services">

                <h2>
                    <?php the_field("title_testimonials"); ?>
                </h2>


                <div class="testimonials_content clearfix">

                    <?php get_template_part("template-parts/content-testimonials"); ?>

                </div>


            </div>

        </div>

    </div>


    <div class="section-benefits-container">

        <div class="container">

            <div class="section-benefits">

                <h2>
                    <?php the_field("title_benefits"); ?>
                </h2>

                <div class="details">
                    <?php the_field("details_benefits"); ?>
                </div>


                <div class="benefits_content clearfix">

                    <?php get_template_part("template-parts/content-benefits"); ?>

                </div>

                <div class="center links">
                    <a class="btn-center btn btn-green" href="<?php the_field("button_link_benefits"); ?>">
                        <?php the_field("button_text_benefits"); ?>
                    </a>

                    <a class="refer" href="<?php the_field("refer_link_benefits"); ?>">
                        <?php the_field("refer_text_benefits"); ?>
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

                <div class="details">
                    <?php the_field("details_pricing"); ?>
                </div>


                <div class="benefits_content clearfix">

                    <?php get_template_part("template-parts/content-pricing"); ?>

                </div>

                <div class="visible-xs">

                    <div class="features-mobile clearfix">

                        <?php

                        // check if the repeater field has rows of data

                        // loop through the rows of data
                        while (have_rows('features_mobile_pricing')) : the_row();

                            // display a sub field value
                            $img = get_sub_field('image');
                            $imgURL = $img["url"];

                            ?>

                            <div class="col-xs-6 item">
                                <div class="item-content clearfix">
                                    <img class="pull-left" src="<?php echo $imgURL; ?>" width="28" height="28" />
                                    <h3 class="pull-left" >
                                        <?php the_sub_field('text'); ?>
                                    </h3>
                                </div>
                            </div>

                            <?php

                        endwhile;

                        ?>

                    </div>

                </div>

                <div class="booknow">
                    <a class="btn-center btn btn-green btn-small" href="<?php echo "javascript:;"; ?>">
                        <?php echo __("Book My Workout", "fitspot"); ?>
                    </a>
                </div>

            </div>

        </div>

    </div>


<?php get_footer(); ?>