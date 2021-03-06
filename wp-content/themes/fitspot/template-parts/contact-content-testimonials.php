<?php
/**
 * Created by PhpStorm.
 * User: Jawad
 * Date: 3/28/2017
 * Time: 8:04 PM
 */

// WP_Query arguments
$args = array(
    'post_type' => array('testimonials'),
    'post_status' => array('publish'),
    'order' => 'DSC',
    'orderby' => 'menu_order'
);

$categorySlug = get_field("category_slug_testimonial");
if(strlen($categorySlug) > 0){
    $args["tax_query"] = array(
        array(
            'taxonomy' => 'cat_testimonials',
            'field'    => 'slug',
            'terms'    => $categorySlug,
        )
    );
}

$testimonailsCount = get_field("page_testimonial_count");
if(strlen($testimonailsCount) > 0){
    $args["posts_per_page"] = $testimonailsCount;
    $args["order"] = 'rand';
    $args["orderby"] = '';
}

// The Query
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) {

    ?>

    <div class="testimonials-items clearfix contact-page-testimonial">

        <?php
        while ($query->have_posts()) {
            $query->the_post();


            $img = get_the_post_thumbnail_url(get_the_ID());
            $imgURL = $img;
            ?>

            <div class="testimonials-item col-xs-12 col-md-12">

                <div class="details">
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                    <p class="title">
                        — <?php the_field("by"); ?>
                    </p>
                    <div class="image-testimonial">
                        <?php if (get_field('Client_image')) { ?>
                            <img src="<?php the_field('Client_image') ?>" alt="Client Image">
                        <?php } ?>
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