<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitspot
 */
?>
</div><!-- #content -->
<?php if (get_field("show_download_the_fitspot_app")) {
    get_template_part("template-parts/fitspot-app");
}
?>
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="subfooter container">
        <div class="col-lg-12 clearfix">
            <div class="col-md-3 col-sm-12 col-1">
                <?php dynamic_sidebar("sidebar-1"); ?>
            </div>
            <div class="col-md-2 col-sm-12 col-2">
                <?php dynamic_sidebar("sidebar-2"); ?>
            </div>
            <div class="col-md-3 col-sm-12 col-3">
                <?php dynamic_sidebar("sidebar-3"); ?>
            </div>
            <div class="col-md-3 col-md-offset-1 col-xs-12 col-4">
                <div class="logo_footer">
                    <?php
                    $logo_1 = get_field("logo_light", "option");
                    if (!empty($logo_1)) {
                        ?>
                        <a class="logo logo-full" href="<?php echo get_site_url(); ?>">

                            <img src="<?php echo $logo_1; ?>" width="126" height="45"
                                 alt="logo"/>
                        </a>
                    <?php } ?>
                </div>
                <div class="social_footer">
                    <?php echo do_shortcode("[social_icons position='footer']"); ?>
                </div>
                <?php dynamic_sidebar("sidebar-4"); ?>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-12 copyright">
                <?php echo get_field("copyright", "option"); ?>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page-content-scrollable -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
