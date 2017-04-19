<?php
$img = get_the_post_thumbnail_url(get_the_ID());
$imgURL = $img;
?>

<div class="pricing-item col-sm-4 col-md-4">

    <div class="item-details">

        <div class="details clearfix">

            <div class="row1">
                <p class="title">
                    <?php the_title(); ?>
                </p>

                <p class="subheading">
                    <?php the_field("sub-heading"); ?>
                </p>
            </div>

            <div class="row2">
                <p class="price">
                    <?php the_field("price"); ?>
                </p>

                <p class="charge_frequecy">
                    <?php the_field("charge_frequecy"); ?>
                </p>
            </div>
        </div>

        <div class="features">

        </div>
        <?php if (!is_page_template('page-templates/B2B-Page.php')) { ?>
            <div class="booknow">
                <a class="btn-center btn btn-green btn-small" href="<?php echo "javascript:;"; ?>">
                    <?php echo __("Book Now", "fitspot"); ?>
                </a>
            </div>
        <?php } ?>
    </div>
</div>