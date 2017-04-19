<?php
/*
 * Template Name: Fitspot Trainer
 */
get_header('zahid');
?>



<h2><?php the_sub_field('heading'); ?></h2>

<div class="container-fluid margintop40">
    <div class="container">
        <div class="col-md-12 paddingsmlr0 paddingbottom30">

            <p class="With-Fitspot-You-Ca "><?php the_field('section_heading'); ?></p>

            <div class="col-md-12 paddingsmlr0 trainer-items margin40">

                <?php
// check if the repeater field has rows of data
                if (have_rows('post')):

                    // loop through the rows of data
                    while (have_rows('post')) : the_row();
                        $image = get_sub_field('image');
                        $heading = get_sub_field('heading');
                        $content = get_sub_field('content');
                        // display a sub field value
                        ?>
                        <div class="col-md-6 col-sm-6  trainer-item paddingbottom30">
                            <div class="col-md-12 paddingsmlr0">
                                <img class="img-responsive paddingbottom10" src="<?php echo $image['url']; ?>" />
                            </div>
                            <div class="col-md-12 paddingsmlr0 fitspot-trainer-text">
                                <span class=" paddingbottom10 ELEVATE-YOUR-CAREER"><?php the_sub_field('heading'); ?></span>
                                <span class=" We-take-care-of-mark"> <?php the_sub_field('content'); ?></span>
                            </div>
                        </div>
                        </li>
                        <?php
                    endwhile;
                else :
// no rows found
                endif;
                ?>
               
            </div>

        </div>
    </div>
</div>
<?php get_template_part("template-parts/fitspot-app-trainer"); ?>
<div class="success-stories">
    <div class="container ">
        <div class="col-md-12 paddingsmlr0">
            <p class="Trainer-Success-Stor">Trainer Success Stories</p>
        </div>
        <div class="col-md-12 margintop25 no-padding-left-right">
            <?php
            $query = new WP_Query(array('post_type' => 'team', 'category_name' => 'success-stories'));
            while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="col-sm-4 col-sm-6 col-xs-12  sections paddingbottom30">
                    <div class="col-md-12 paddinglr0 paddingsmlr0">
                        <?php
                        $img = get_field("headshot");
                        $imgURL = $img["sizes"]["thumbnail"];
                        ?>
                        <img class="img-responsive center-block responsive--full" src="<?php echo $imgURL; ?>" width="150" height="150" />
                    </div>
                    <div class="col-md-12 paddingsmlr0 paddinglr0 margintop25">
                        <span class="Trainer-Success-Stor-text"><?php the_content(); ?></span>
                        <div class="designation">
                            <span class="trainer_title">— <?php the_title(); ?>,</span>
                            <span class="trainer_job"><?php the_field("designation"); ?></span>
                        </div>
                    </div>
                </div>

                <?php
            endwhile;
            ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>

