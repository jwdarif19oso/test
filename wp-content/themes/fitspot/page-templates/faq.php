<?php
/*
 * Template Name: FAQ
 */
get_header('zahid');
?>
<div class="container-fluid faq-container" style="margin-top:75px; padding-bottom: 108px;">
    <div class="container paddingsmlr0">
        <div class="col-md-12 paddingsmlr0">
            
            <div id="tabs">
                <div class="col-md-12 faq-links">
                    <div class="col-md-12  faq-tab-width">
                    <ul class=" faq-tabs nav nav-tabs nav-justified">
                        <li class="active"><a href="#fitspotters">FOR FITSPOTTERS</a></li>
                        <li><a href="#trainers">FOR TRAINERS</a></li>
                        <li><a href="#gym">FOR GYM</a></li>
                    </ul>
                </div>
                </div>
                <div class="col-md-12 paddinglr0  paddingsmlr0 faq_tabs">
                     <div class=" col-md-12 paddingsmlr0">
                    <div class="panel-group" id="accordion">
                        <?php get_template_part("template-parts/for-fitspotters"); ?>
                        <?php get_template_part("template-parts/for-trainers"); ?>
                        <?php get_template_part("template-parts/for-gym"); ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part("template-parts/workout-form"); ?>
<?php get_template_part("template-parts/fitspot-app"); ?>

<script type="text/javascript">
    $(document).ready(function () {

        $('.faq-tabs li').click(function () {
            $('.faq-tabs li.active').removeClass("active");
            $(this).addClass("active");

        });
        $('#accordion2').collapse();

    });
</script>

<?php get_footer();
?>

