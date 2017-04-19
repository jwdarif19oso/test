<?php
/* Template Name: Contact Us */
?>

<?php get_header('zahid'); ?>




<div class="container out_story_container">
    <div class="sidebar">
        <?php dynamic_sidebar("sidebar-2"); ?>
    </div>
    <div class="story_page_content contact_us_now">
        <div class="contact_form">
            <?php
            if(have_posts()) {
                while (have_posts())
                    the_post();
                the_content();
            }

            echo do_shortcode( get_post_meta( get_the_id(), 'enter_short_code', true ) );

            ?>

        </div>


        <div class="contact_us_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6612.098285967793!2d-118.27176637337539!3d34.042610483765685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c7b85f6c7359%3A0xe51e34447c8cdb69!2sSTAPLES+Center%2C+1111+S+Figueroa+St%2C+Los+Angeles%2C+CA+90015!5e0!3m2!1sen!2s!4v1491555476856" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            <div class="office_address">
                <?php the_field('office_address_1'); ?>
            </div>
        </div>


    </div>





</div>


<?php get_template_part("template-parts/workout-form"); ?>



<?php get_footer(); ?>