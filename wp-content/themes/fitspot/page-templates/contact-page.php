<?php
/* Template Name: Contact Page */
?>

<?php get_header('contact'); ?>

<div id="contact_page">
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

    <div class="section-benefits-container">

        <div class="container">

            <div class="section-contact-form">

                <div class="form_content clearfix pull-left col-lg-7 col-md-7 col-sm-12 col-xs-12">

                    <h2>
                        <?php the_field("form_title"); ?>
                    </h2>
                    <div class="contact_form">
                        <?php
                        $form = get_field("contact_form_7_shortcode");
                        echo do_shortcode($form);
                        ?>
                    </div>
                </div>
                <div class="people_say col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="section-testimonials-container">

                            <div class="testimonials-services">

                                <div class="testimonials_content clearfix">
                                    <h2>
                                        <?php the_field('testimonial_title') ?>
                                    </h2>
                                    <?php get_template_part("template-parts/contact-content-testimonials"); ?>


                                </div>


                            </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>



