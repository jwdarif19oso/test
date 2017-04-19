<?php
/* Template Name: Our press */
?>

<?php get_header('zahid'); ?>




    <div class="container out_story_container">
        <div class="sidebar">
            <?php dynamic_sidebar("sidebar-2"); ?>
        </div>
        <div class="team_page_content press_page_content">
            <?php

            // WP_Query arguments
            $args = array(
                'post_type' => array('press'),
                'post_status' => array('publish'),
                'posts_per_page' => '-1',
                'order' => 'ASC',
                'orderby' => 'menu_order'

            );


            // The Query
            $query = new WP_Query($args);
            // The Loop
            if ($query->have_posts()) {

                while ($query->have_posts()) {
                    $query->the_post();
                    ?>
                    <div class="press_row">
                        <a href="<?php the_field('press_site_url')?>" target="_blank">
                            <h3 class="title-container">
                                <?php the_title(); ?>
                            </h3>
                            <div class="image-container">
                                <div class="image">
                                        <img src="<?php the_field('press_image'); ?>" >
                                </div>

                            </div>
                        </a>
                    </div>
                <?php
                }
            }else{
                echo "No Post";
            }
            wp_reset_postdata();
            ?>

        </div>

    </div>


<?php get_template_part("template-parts/workout-form"); ?>



<?php get_footer(); ?>