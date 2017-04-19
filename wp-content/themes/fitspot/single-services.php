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
<div class="single-services-container container-fluid margintop25 paddingbottom30 padding-0-767">
    <div class="container">
        <div class="single-services-subcontainer col-md-12 margintop25 padding-0-767">
            <div class="col-md-3 col-sm-3 padding-0-767">
                <h3 class="SERVICES paddingbottom10">SERVICES</h3>
                <div id="service-links">
                    <?php dynamic_sidebar("sidebar-1"); ?>
                </div>
                <?php
/*                $query = new WP_Query(array('post_type' => 'services'));
                while ($query->have_posts()) : $query->the_post();
                    */?><!--
                    <div class="col-md-12 paddinglr0 ">
                        <ul class="service-links">
                            <li class="list-nostyle">
                                <a id="myID" class="icon Personal-Training-Bo  services-title"
                                   href="<?php /*the_permalink(); */?>">
                                    <p class=" alignleft">
                                        <?php /*echo the_title(); */?></p>
                                </a>
                            </li>
                        </ul>
                    </div>

                    --><?php
/*                endwhile;
                */?>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12" style="padding-bottom:40px">
                <div id="primary" class="content-area">
                    <main id="main" class=" single-service-content site-main" role="main">

                        <?php
                        while (have_posts()) : the_post();
                            ?>


                            <?php the_content(); ?>

                            <?php
                        endwhile; // End of the loop.
                        ?>

                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
        </div>
    </div>
</div>
<?php get_template_part("template-parts/workout-form"); ?>
<?php get_template_part("template-parts/fitspot-app"); ?>
<?php
get_footer();
?>
