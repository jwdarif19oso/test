<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitspot
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head(); ?>
        <?php the_field('google_analytics', 'option'); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'fitspot'); ?></a>

            <div class="blackOverlay"></div>
            <div class="mobileMenu">
                <div class="innerContent1">
                    <div class="innerContent2">
                        <?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu')); ?>
                    </div>
                </div>

                <div id="closeBtn" class="closeBtn">
                    <a href="javascript:;">
                        <i class="fa fa-close"></i>
                    </a>
                </div>

            </div>

            <div id="page-content-scrollable">

                <?php
                $backgroudImageClasses = "";

                if (is_page_template('page-templates/story.php')) {
                    $backgroudImageClasses = "our_story_banner";
                } else if (is_page_template('page-templates/team.php')) {
                    $backgroudImageClasses = "our_team_banner";
                } else {
                    $backgroudImageClasses = "giftcard-header";
                }
                ?>
                <?php
//                if (is_page_template('page-templates/giftcardpackage.php')) {
//                    $backgroudImage = get_field("page_banner");
//                    $backgroudImageurl = $backgroudImage["url"];
//                    $backgroudImageClasses = "page_banner";
//                }
                ?>
                <?php
                if (is_page_template('page-templates/fitspot-trainer.php') || is_page_template('page-templates/faq.php') || is_singular('single-service.php')) {
                    $backgroudImage = get_field("page_banner");
//                    $backgroudImageurl = $backgroudImage["url"];
                    $backgroudImageClasses = "page_banner";
                    $mobilebanner = get_field("mobile_banner");
                }
                ?>
                 
               
                <?php
                if (is_page_template('single-service.php')) {

                    $backgroudImage = get_field("page_banner");
                    $backgroudImageClasses = "page_banner";
                    $backgroudImageClasses = "page_banner";
                    $mobilebanner = get_field("mobile_banner");

                } else if (is_singular('fitspot_jobs')) {


                    $backgroudImage = get_field("banner_single_job", 'options');
                    $backgroudImageClasses = "page_banner";
                    $backgroudImageClasses = "page_banner";
                    $mobilebanner = get_field("banner_mobile_single_job", 'options');

                } else{

                    $backgroudImage = get_field("page_banner");
                    $backgroudImageClasses = "page_banner";
                    $backgroudImageClasses = "page_banner";
                    $mobilebanner = get_field("mobile_banner");

                }


                ?>

                <header id="masthead" class="header-z site-header visible-xs visible-sm animated" role="banner">

                    <div class="container">
                        <div class="col-lg-12">

                            <div id="mobileMenuButton" class="pull-left">
                                <a href="javascript:;">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                            <div class="site-branding pull-left">
                                <?php
                                $logo_1 = get_field("logo_light", "option");
                                if (!empty($logo_1)) {
                                    ?>
                                    <a class="logo logo-light logo-full" href="<?php echo get_site_url(); ?>">

                                        <img src="<?php echo $logo_1; ?>" width="126" height="45"
                                             alt="logo"/>

                                    </a>
                                <?php } ?>

                                <?php
                                $logo_2 = get_field("logo_dark", "option");
                                if (!empty($logo_2)) {
                                    ?>
                                    <a class="logo logo_dark logo-full" href="<?php echo get_site_url(); ?>">

                                        <img src="<?php echo $logo_2; ?>" width="92" height="33"
                                             alt="logo"/>

                                    </a>
                                <?php } ?>

                            </div>
                            <!-- .site-branding -->


                        </div>

                    </div>

                </header>

                <div class="banner banner-small img-responsive <?php echo $backgroudImageClasses ?>">

                    <style>
                        .our_team_banner
                        {
                            background-size: 100% !important;
                        }
                        .banner {
                            background: url('<?php echo $backgroudImage; ?>');
                        }

                        <?php if (!empty($mobilebanner)){ ?>

                        .banner {
                            background: url('<?php echo $backgroudImage; ?>');
                        }
                        @media only screen and  (max-width: 767px) {
                            .banner {
                                background: url('<?php echo $mobilebanner; ?>')!important;
                            }

                        }


                        <?php } ?>

                    </style>

                    <header id="masthead" class="site-header hidden-xs hidden-sm animated" role="banner">

                        <div class="container">
                            <div class="col-lg-12">

                                <div class="site-branding pull-left">
                                    <?php
                                    $logo_1 = get_field("logo_light", "option");
                                    if (!empty($logo_1)) {
                                        ?>
                                        <a class="logo logo-light logo-full" href="<?php echo get_site_url(); ?>">

                                            <img src="<?php echo $logo_1; ?>" width="126" height="45"
                                                 alt="logo"/>

                                        </a>
                                    <?php } ?>

                                    <?php
                                    $logo_2 = get_field("logo_dark", "option");
                                    if (!empty($logo_2)) {
                                        ?>
                                        <a class="logo logo_dark logo-full" href="<?php echo get_site_url(); ?>">

                                            <img src="<?php echo $logo_2; ?>" width="92" height="33"
                                                 alt="logo"/>

                                        </a>
                                    <?php } ?>

                                </div>
                                <!-- .site-branding -->

                                <nav id="site-navigation" class="main-navigation pull-right" role="navigation">
                                    <?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu')); ?>
                                </nav>

                            </div>

                        </div>

                    </header>

                    <p class=" GIFT-CARDS">
                        <?php
                        if (is_singular('fitspot_jobs')) {
                            $pagetitle=get_field('title_single_job', 'options');
                            $pagetitleMobile=get_field('title_mobile_single_job', 'options');
                            echo "<span class='hidden-xs'>".strtoupper($pagetitle)."</span>";
                            echo "<span class='visible-xs'>".strtoupper($pagetitleMobile)."</span>";
                        } else {
                            $pagetitle=get_the_title();
                            echo strtoupper($pagetitle) ;
                        }
                        ?>
                    </p>

                </div>

                <div id="content" class="site-content">