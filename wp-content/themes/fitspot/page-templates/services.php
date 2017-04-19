<?php
/* Template Name: Our Services */
?>

<?php get_header('zahid'); ?>




<div class="container out_story_container">
    <div class="sidebar">
        <?php dynamic_sidebar("sidebar-1"); ?>
    </div>
    <div class="team_page_content our_services">
        <?php
            if(have_posts()) {
                while (have_posts())
                    the_post();
                the_content();
            }
        ?>

        <div class="service_container">


                <?php

                if( have_rows('our_services') ):


                    $count=1;

                    while ( have_rows('our_services') ) : the_row();


                ?>
                    <div class="service_content">
                        <div class="core_values">
                           <div class="img">
                               <div>
                                   <img src="<?php the_sub_field('service_image_icon') ?>" >
                               </div>
                           </div>
                            <h5><?php the_sub_field('title_of_service'); ?></h5>
                            <?php the_sub_field('service_description'); ?>
                            <a href="#">Read More ></a>
                        </div>
                    </div>
                        <?php


                    $count++;

                    endwhile;

                    else :
                        echo "no rows found";
                        $count--;
                        if($count%2!=0)
                        {
                            echo '</div>';
                        }
                endif;
                ?>

            </div>
        </d iv>

    </div>
</div>


<?php get_template_part("template-parts/workout-form"); ?>



<?php get_footer(); ?>