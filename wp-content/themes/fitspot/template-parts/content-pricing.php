<?php
/**
 * Created by PhpStorm.
 * User: Jawad
 * Date: 3/28/2017
 * Time: 8:04 PM
 */

// WP_Query arguments
$args = array(
    'post_type' => array('pricing'),
    'post_status' => array('publish'),
    'order' => 'ASC',
    'orderby' => 'menu_order'
);

$categorySlug = get_field("category_slug_pricing");
if (is_singular('cities')) {
    $categorySlug = $categorySlug->slug;
}
if(strlen($categorySlug) > 0){
    $args["tax_query"] = array(
        array(
            'taxonomy' => 'cat_pricing',
            'field'    => 'slug',
            'terms'    => $categorySlug,
        )
    );
}


// The Query
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) {

    ?>

    <div class="pricing-items clearfix">

        <?php

        while ($query->have_posts()) {
            $query->the_post();

            if (!is_page_template('page-templates/B2B-Page.php')) {

                get_template_part("template-parts/item-pricing-home");

            }else{

                get_template_part("template-parts/item-pricing-b2b");
            }

            ?>

            <?php
        } ?>

    </div>

    <?php
} else {
    // no posts found
}

// Restore original Post Data
wp_reset_postdata();