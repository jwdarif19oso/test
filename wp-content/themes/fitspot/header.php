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

        $backgroudImage = "";
        $backgroudImageurl = "";
        $backgroudImageClasses = "";


        if (is_home() || is_front_page() || is_page_template('page-templates/B2B-Page.php')) {
            $backgroudImage = get_field("backgroud_banner");
            $backgroudImageurl = $backgroudImage["url"];
            $backgroudImageClasses = "home_banner";

            $backgroudImageMobile = get_field("backgroud_mobile_banner");
            $backgroudImageMobileurl = $backgroudImageMobile["url"];
        }

2
        ?>

        <?php if (is_page_template('page-templates/B2B-Page.php')) {
            $backgroudImageClasses = "b2b_page_banner";
        }

        ?>

        <div class="banner <?php echo $backgroudImageClasses; ?> ">
            <style>
                .banner {
                    background: url('<?php echo $backgroudImageurl; ?>');
                }

                @media (max-width: 500px) {
                    .banner {
                        background: url('<?php echo $backgroudImageMobileurl; ?>');
                    }
                }
            </style>

            <header id="masthead" class="site-header animated" role="banner">

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
                                    <img src="<?php echo $logo_2; ?>" width="92" height="33" alt="logo"/>
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

            <div class="banner-content">

                <div class="container">

                    <h1>
                        <?php the_field("headline_banner"); ?>
                    </h1>

                    <h2 class="hidden-xs">
                        <?php the_field("sub-headline_banner"); ?>
                    </h2>

                    <h2 class="visible-xs">
                        <?php $subMobile = get_field("sub-headline_mobile_banner");

                        if(strlen($subMobile) <= 0)
                            $subMobile = get_field("sub-headline_banner");

                        echo $subMobile;

                         ?>
                    </h2>
                    <?php if (is_page_template('page-templates/B2B-Page.php')) { ?>
                        <div class="register_btn">
                            <a href="<?php the_field('button_url') ?>">
                                <button><?php the_field('button_text') ?></button>
                            </a>
                            <div class="call_text">
                                <p><?php the_field('call_text') ?><span> <a href="tel:<?php the_field('call_number'); ?>"><?php the_field('call_number'); ?></a> </span></p>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (!is_page_template('page-templates/B2B-Page.php')) { ?>
                        <div class="form-container">
                            <form class="clearfix">

                                <div class="first select">
                                    <select class=" formFirstElement">
                                        <option>Personal Training</option>
                                    </select>
                                </div>

                                <div class="second select">
                                    <select class=" formMiddleElement">
                                        <option>Los Angeles</option>
                                    </select>

                                </div>

                                <div class=" third select">
                                    <select class=" formMiddleElement">
                                        <option>Today</option>
                                    </select>

                                </div>

                                <input class="formLastElement submit" type="submit" value="Download the App">

                            </form>
                        </div>
                    <?php } ?>

                </div>

            </div>

        </div>

        <div id="content" class="site-content">
