<?php get_header('zahid'); ?>




    <div class="container out_story_container">
        <div class="sidebar">
            <?php dynamic_sidebar("sidebar-2"); ?>
        </div>

        <div class="team_page_content jobs_page_content">
            <?php
            $id=get_the_ID();
            $post = get_post($id);
            $content = apply_filters('the_content', $post->post_content);

            $job_title = get_the_title();
            if(strlen(get_field('display_title')) > 0)
                $job_title = get_field('display_title');

            echo '<h3>Apply to be a <span>'.$job_title.'</span></h3>';
            ?>

            <div class="job-description">
                <?php the_field("description"); ?>
            </div>

            <h4>JOB REQUIREMENTS</h4>

            <?php


            // check if the repeater field has rows of data
            if( have_rows('job_requirements') ):

                // loop through the rows of data
                $count=1;
                echo '<div class="core_values_main">';
                while ( have_rows('job_requirements') ) : the_row();

                    if($count%2!=0)
                    {
                        echo '<div class="core_values_row">';
                    }

                    ?>

                    <div class="core_values <?php echo $count ?>">
                        <h5><?php the_sub_field('set_requirements'); ?></h5>
                    </div>

                    <?php

                    if($count%2==0)
                    {
                        echo '</div>';
                    }
                    $count++;

                endwhile;



            else :
                echo "no rows found";
                // no rows found

                $count--;
                if($count%2!=0)
                {
                    echo '</div>';
                }

            endif;
            echo '</div>';
            ?>




            <style>
                .employee_perks_row:last-child
                {
                    border-bottom: solid 1px #efefef;
                }
            </style>
            <?php

            // check if the repeater field has rows of data
            if( have_rows('good_to_have') ):

                // loop through the rows of data
                $count_perk=1;
                echo '<div class="perk_benefits_main">';

                ?>

                <h4 class="nice_to_have">NICE TO HAVES</h4>

                <?php

                while ( have_rows('good_to_have') ) : the_row();

                    if($count_perk%2!=0)
                    {
                        echo '<div class="employee_perks_row">';
                    }

                    ?>

                    <div class="core_values <?php echo $count_perk ?> ">
                        <h5><?php the_sub_field('good_if_you_have'); ?></h5>
                        <p>
                            <?php the_sub_field('employee_benefit_description'); ?>
                        </p>
                    </div>

                    <?php

                    if($count_perk%2==0)
                    {
                        echo '</div>';
                    }
                    $count_perk++;

                endwhile;

            else :
                echo "no rows found";
                // no rows found


                $count_perk--;
                if($count_perk%2!=0)
                {
                    echo '</div>';
                }



            endif;
            echo '</div>';



            $howToAppy = get_field("how_to_apply_single_job_options", 'options');
            if(strlen(get_field('how_to_apply_single')) > 0 ) {
                $howToAppy = get_field("how_to_apply_single");
            }

            ?>
            </div>
            <div class="clear"></div>
            <div class="company_jobs_main clearfix">


                <h4>Apply Now</h4>

                <div><?php echo $howToAppy; ?></div>


            </div>

            <?php


            $query = new WP_Query($args1);
            if ($query->have_posts()) {

            ?>
            <div class="trainer_jobs_main">

                <?php

                }


                echo '</div>';



                ?>
            </div>

        </div>

    </div>


<?php get_template_part("template-parts/workout-form"); ?>



<?php get_footer(); ?>