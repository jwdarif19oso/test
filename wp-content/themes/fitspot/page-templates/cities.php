<?php
/* Template Name: Training Cities */
?>

<?php get_header('zahid'); ?>




<div class="container out_story_container">
    <div class="sidebar cities_page">
        <?php dynamic_sidebar("sidebar-2"); ?>
    </div>
    <div class="team_page_content locations">
        <div class="available_in_cities">
            <h3><?php the_field('available_cities_title'); ?></h3>


            <?php
            $args = array(
                'post_type' => array('cities'),
                'post_status' => array('publish'),
                'order' => 'ASC',
                'orderby' => 'menu_order'
            );
            // The Query
            $query = new WP_Query($args);

            // The Loop
            if ($query->have_posts()):

                while ( $query->have_posts() ) :  $query->the_post();

                    ?>
                        <p><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> </p>
                    <?php

                endwhile;

            else :
                echo "no rows found";
            endif;

            wp_reset_postdata();

            ?>



        </div>
        <div class="coming_soon_cities">
            <h3><?php the_field('coming_soon_cities_title'); ?></h3>

            <?php

            if( have_rows('coming_soon_cities_name') ):

                while ( have_rows('coming_soon_cities_name') ) : the_row();

                    ?>
                    <p><?php the_sub_field('city_name'); ?></p>
                <?php

                endwhile;

            else :
                echo "no rows found";
            endif;

            ?>
        </div>
    </div>

</div>


<?php get_template_part("template-parts/workout-form"); ?>



<?php get_footer(); ?>