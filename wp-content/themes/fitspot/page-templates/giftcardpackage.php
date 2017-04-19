<?php
/*
 * Template Name: Gift Card Packages
 */
get_header('zahid');
?>

<div class="container-fluid Rectangle-9">
    <div class="margin216">
        <div class="Give-the-Gift-of-Fit">
            <span><?php the_field("heading"); ?></span>
            <p class="All-sessions-are-60">
                <?php the_field("subheading"); ?>
            </p>
        </div>

        <div class=" clearfix main-rectangle">
            <div class="col-md-12 margintop30 session-section">
                <?php
                $query = new WP_Query(array('post_type' => 'gift_card', 'posts_per_page' => -1));
                while ($query->have_posts()) : $query->the_post();

                    $discount = get_field("percent");
                    $discountText = get_field("discount_text");
                    $hasDiscount = false;
                    $hasDiscountClasses = "no-discount";
                    if(strlen($discount) != "" && $discount > 0){
                        $hasDiscount = true;
                        $hasDiscountClasses = "has-discount";
                    }

                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-6 sections giftcard-item <?php echo $hasDiscountClasses; ?>">
                        <div class="col-md-12 col-sm-12 col-xs-12  Rectangle-copy section-right">
                            <p class="-Session">
                                <?php the_field('title'); ?>
                            </p>
                            <p class="layer">
                                $<?php the_field('price_card'); ?>
                            </p>
                            <?php


                            if($hasDiscount){
                                ?>
                                <div class="discount">
                                    <?php echo $discount . " " . $discountText; ?>
                                </div>
                            <?php } ?>

                            <div class="buynow col-md-12 col-sm-12   col-xs-12 ">
                                <a href="#" class="buy-now ">Buy Now</a>
                            </div>

                        </div>
                    </div>

                    <?php
                endwhile;
                ?>

            </div>

        </div>
    </div>
</div>

<?php get_template_part("template-parts/workout-form"); ?>

<?php get_footer(); ?>

