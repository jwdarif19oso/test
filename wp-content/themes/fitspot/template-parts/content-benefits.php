<?php
/**
 * Created by PhpStorm.
 * User: Jawad
 * Date: 3/28/2017
 * Time: 8:04 PM
 */

// WP_Query arguments
$args = array(
    'post_type' => array('benefits'),
    'post_status' => array('publish'),
    'order' => 'ASC',
    'orderby' => 'menu_order'

);

// The Query
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) {

    ?>

    <div class="benefits-items">

        <?php
        $count = 0;
        while ($query->have_posts()) {
            $query->the_post();
            $count++;

            $img = get_the_post_thumbnail_url(get_the_ID());
            $imgURL = $img;

            $imgWidth = get_field("image_width");
            $imgheight = get_field("image_height");
            $attr = "width='$imgWidth' height='$imgheight'";

            if(empty($imgWidth) || empty($imgheight)){
                $attr = "style='max-width: 66px; max-height: 66px'";
            }

            ?>

            <div class="benefits-item">

                <div class="item-details">
                    <div class="img">
                        <img src="<?php echo $imgURL; ?>"
                            <?php echo $attr; ?>
                            />
                    </div>
                    <div class="details">
                        <p class="title">
                            <?php the_title(); ?>
                        </p>

                        <div class="content">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>

            </div>

        <?php
            if($count%2 == 0){
                echo "</div>";
                echo "<div class='benefits-items'>";
            }
        } ?>

    </div>

<?php
} else {
    // no posts found
}

// Restore original Post Data
wp_reset_postdata();