<?php
/* Template Name: Our Team */
?>

<?php get_header('zahid'); ?>




<div class="container out_story_container">
    <div class="sidebar">
        <?php dynamic_sidebar("sidebar-2"); ?>
    </div>
    <div class="team_page_content">


        <?php




        // WP_Query arguments
        $args = array(
            'post_type' => array('team'),
            'post_status' => array('publish'),
            'posts_per_page' => '-1',
            'order' => 'ASC',
            'orderby' => 'menu_order'

        );

        $categorySlug = get_field("category_slug_team");
        if(strlen($categorySlug) > 0){
            $args["tax_query"] = array(
                array(
                    'taxonomy' => 'cat_team',
                    'field'    => 'slug',
                    'terms'    => 'management',
                    'include_children' => false
                )
            );
        }


        // The Query
        $query = new WP_Query($args);
        ?>
        <h3>Management</h3>
        <?php
        // The Loop
        $count = 0;
        if ($query->have_posts()) {

            ?>

            <div class="team-members">

                <?php

                while ($query->have_posts()) {
                    $query->the_post();


                    $img = get_field("headshot");
                    $imgURL = $img["sizes"]["thumbnail"];
                    ?>


                    <div class="team-container  teamMember-<?php echo $count++; ?>">
                        <div class="personal-info">
                            <a href="#myModal<?php  echo get_the_ID(); ?>" data-toggle="modal" data-target="#myModal<?php  echo get_the_ID(); ?>">
                                <img src="<?php echo $imgURL ?>">
                                <h4><?php echo the_title(); ?></h4>
                                <p><?php echo the_field("designation"); ?></p>
                            </a>
                        </div>
                    </div>


                <?php
                } ?>

            </div>

        <?php
        } else {
            // no posts found
        }

        // Restore original Post Data
        wp_reset_postdata();



        ?>




        <?php




        // WP_Query arguments
        $args = array(
            'post_type' => array('team'),
            'post_status' => array('publish'),
            'posts_per_page' => '-1',
            'order' => 'ASC',
            'orderby' => 'menu_order'

        );

        $categorySlug = get_field("category_slug_team");
        if(strlen($categorySlug) > 0){
            $args["tax_query"] = array(
                array(
                    'taxonomy' => 'cat_team',
                    'field'    => 'slug',
                    'terms'    => 'management',
                    'include_children' => false
                )
            );
        }


        // The Query
        $query = new WP_Query($args);

        // The Loop
        $count = 0;
        if ($query->have_posts()) {

            ?>

            <div class="team-members">

                <?php

                while ($query->have_posts()) {
                    $query->the_post();


                    $img = get_field("headshot");
                    $imgURL = $img["sizes"]["thumbnail"];
                    ?>


                    <!-- Modal -->
                    <div id="myModal<?php  echo get_the_ID(); ?>" class="modal fade myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="top-border"></div>
                                    <div class="close-button">
                                        <button type="button" class="close" data-dismiss="modal">&times; Close</button>
                                    </div>
                                    <div class="modal-body-content">
                                        <div class="header-container">
                                            <div class="image-container">
                                                <img src="<?php echo $imgURL ?>">
                                            </div>
                                            <div class="person-post-content">
                                                <h4><?php echo the_title(); ?></h4>
                                                <p><?php echo the_field("designation"); ?></p>
                                                <a target="_blank" href="<?php echo the_field("linkedin_profile_url_"); ?>"> <img src="<?php bloginfo('template_url')?>/images/linked-in-logo.png"></a>
                                            </div>
                                        </div>

                                        <div class="modal-body-text">
                                            <?php
                                            if( !$field = get_field('team_member_portfolio_description') ){ ?>
                                                <p>No Detail</p>
                                            <?php }else{echo the_field("team_member_portfolio_description"); } ?>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>








                <?php
                } ?>

            </div>

        <?php
        } else {
            // no posts found
        }

        // Restore original Post Data
        wp_reset_postdata();



        ?>



    </div>





</div>


<?php get_template_part("template-parts/workout-form"); ?>



<?php get_footer(); ?>