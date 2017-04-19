<?php
/* Template Name: Jobs Page */
?>

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
            echo '<h3>'. get_field('core_values_before_description') .'</h3>';
        ?>
        <h4>OUR CORE VALUES</h4>
        <p>
            <?php the_field('core_values_description')?>
        </p>


        <?php
        

        // check if the repeater field has rows of data
        if( have_rows('core_values') ):

            // loop through the rows of data
            $count=1;
            echo '<div class="core_values_main">';
            while ( have_rows('core_values') ) : the_row();

                if($count%2!=0)
                {
                    echo '<div class="core_values_row">';
                }

                ?>

                <div class="core_values">
                    <h5><?php echo $count ?> ) <?php the_sub_field('core_value_title'); ?></h5>
                    <p>
                        <?php the_sub_field('core_value_description'); ?>
                    </p>
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


        <h4>EMPLOYEE PERKS</h4>
        <p>
            <?php the_field('employee_perks_detail')?>
        </p>

<style>
    .employee_perks_row:last-child
    {
        border-bottom: solid 1px #efefef;
    }
</style>
        <?php

        // check if the repeater field has rows of data
        if( have_rows('employee_perks_benifits') ):

            // loop through the rows of data
            $count_perk=1;
            echo '<div class="perk_benefits_main">';
            while ( have_rows('employee_perks_benifits') ) : the_row();

                if($count_perk%2!=0)
                {
                    echo '<div class="employee_perks_row">';
                }

                ?>

                <div class="core_values">
                    <h5><?php echo $count_perk ?> ) <?php the_sub_field('employee_benefit_title'); ?></h5>
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






        // WP_Query arguments
        $args = array(
            'post_type' => array('fitspot_jobs'),
            'post_status' => array('publish'),
            'posts_per_page' => '-1',
            'order' => 'ASC',
            'orderby' => 'menu_order'

        );

        $term_obj_company = get_field("category_company_jobs");
        $args["tax_query"] = array(
            array(
                'taxonomy' => 'categories',
                'field'    => 'slug',
                'terms'    => $term_obj_company->slug
            )
        );



        $query = new WP_Query($args);
if ($query->have_posts()){

    ?>
<div class="company_jobs_main">


    <h4><?php the_field("title_company_jobs"); ?></h4>

    <p class="hidden-xs"><?php the_field("description_company_jobs"); ?></p>
    <p class="visible-xs"><?php the_field("description_mobile_company_jobs"); ?></p>


    <div class="company_jobs_container">
        <?php
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="jobs_title">
                <a href="<?php the_permalink(); ?>">
                    <h5><?php the_title(); ?></h5>
                </a>
            </div>


            <?php
        }
        // Restore original Post Data
        wp_reset_postdata();
        ?>
    </div>
<?php

}
    echo '</div>';




        $args = array(
            'post_type' => array('fitspot_jobs'),
            'post_status' => array('publish'),
            'posts_per_page' => '-1',
            'order' => 'ASC',
            'orderby' => 'menu_order'

        );

    $term_obj_trainer = get_field("category_trainer_jobs");
        $args["tax_query"] = array(
            array(
                'taxonomy' => 'categories',
                'field'    => 'slug',
                'terms'    => $term_obj_trainer->slug
            )
        );



        $query = new WP_Query($args);
        if ($query->have_posts()) {

            ?>
            <div class="trainer_jobs_main">
            <h4><?php the_field("title_trainer_jobs"); ?></h4>

            <p class="hidden-xs"><?php the_field("description_trainer_jobs"); ?></p>
            <p class="visible-xs"><?php the_field("description_mobile_trainer_jobs"); ?></p>

            <?php
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <div class="jobs_title">
                    <a href="<?php the_permalink(); ?>">
                        <h5><?php the_title(); ?></h5>
                    </a>
                </div>
                <?php


            }
            wp_reset_postdata();


        }


            echo '</div>';



        ?>
</div>

    </div>

</div>


<?php get_template_part("template-parts/workout-form"); ?>



<?php get_footer(); ?>