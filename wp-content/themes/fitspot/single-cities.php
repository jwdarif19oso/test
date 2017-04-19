<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fitspot
 */
get_header('zahid');
?>
<div class="single-services-container">

    <div class="section-desciption-container">

        <div class="container">

            <div class="section-desciption">

                    <div class="description">

                    <h2>
                        <?php the_field("sub_title"); ?>
                    </h2>
                    <p>
                        <?php the_field("description"); ?>
                    </p>

                </div>

                <div class="form-only-instance">
                    <?php get_template_part('template-parts/workout-form'); ?>
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
                    <?php the_field("sub_title_pricing"); ?>
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

    <div class="section-team-container">

        <div class="container">

            <div class="section-team">

                <h2>
                    <?php the_field("title_team"); ?>
                </h2>



                <div class="team_content clearfix">

                    <div class="col-md-12 margintop25 no-padding-left-right">
                        <?php
                        $team = get_field('trainers_team');

                        foreach($team as $member) {
                            $id = $member->ID;
                            ?>
                            <div class="col-sm-4 col-sm-6 col-xs-12  sections paddingbottom30">
                                <div class="col-md-12 paddinglr0 paddingsmlr0">
                                    <?php
                                    $img = get_field("headshot", $id);
                                    $imgURL = $img["sizes"]["thumbnail"];
                                    ?>
                                    <img class="img-responsive center-block responsive--full" src="<?php echo $imgURL; ?>" width="150" height="150" />
                                </div>
                                <div class="col-md-12 paddingsmlr0 paddinglr0 margintop25">
                                    <div class="Trainer-Success-Stor-text"><?php echo get_post($id)->post_content; ?></div>
                                    <div class="designation">
                                        <span class="trainer_title">— <?php echo get_the_title($id); ?>,</span>
                                        <span class="trainer_job"><?php the_field("designation",$id); ?></span>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                        ?>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php
    $img = get_field("background_image_testimonials", 82);
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

    <div class="section-subdescription-container">

        <div class="container">

            <div class="section-subdescription">

                <h2>
                    <?php the_field("title_work_with_us"); ?>
                </h2>
                <p>
                    <?php the_field("description_work_with_us"); ?>
                </p>
                <a href="<?php echo the_field('link_url_work_with_us'); ?>">
                    <?php the_field('link_text_work_with_us'); ?>
                    <i class="fa fa-angle-right"></i>
                </a>

            </div>

        </div>

    </div>

</div>
<?php get_template_part("template-parts/workout-form"); ?>
<?php
get_footer();
?>
