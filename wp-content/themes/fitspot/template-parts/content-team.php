<?php
/**
 * Created by PhpStorm.
 * User: Jawad
 * Date: 3/28/2017
 * Time: 8:04 PM
 */

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
            'terms'    => $categorySlug,
        )
    );
}


// The Query
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) {

    ?>

    <div class="team-members">

        <?php

        while ($query->have_posts()) {
            $query->the_post();


            $img = get_field("headshot");
            $imgURL = $img["sizes"]["thumbnail"];
            ?>

            <div class="team-member">

                <img src="<?php echo $imgURL; ?>" width="150" height="150" />
                <div class="details">
                    <p class="title">
                        <?php the_title(); ?>
                    </p>
                    <p class="designation">
                        <?php the_field("designation"); ?>
                    </p>
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