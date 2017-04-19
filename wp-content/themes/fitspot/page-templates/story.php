<?php
/* Template Name: Our Story */
?>

<?php get_header('zahid'); ?>




<div class="container out_story_container">
    <div class="sidebar">
        <?php dynamic_sidebar("sidebar-2"); ?>
    </div>
    <div class="story_page_content">

    <?php
        if(have_posts()) {
            while (have_posts())
                the_post();
            the_content();
        }
    ?>

    </div>





</div>


<?php get_template_part("template-parts/workout-form"); ?>



<?php get_footer(); ?>