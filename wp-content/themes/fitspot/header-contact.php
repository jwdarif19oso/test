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
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
       <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
        <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
        <?php the_field('google_analytics', 'option'); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="page" class="site contact_page_main">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'fitspot'); ?></a>
            <div id="page-content-scrollable">
                <header id="masthead" class="header-c site-header animated" role="banner">
                    <div class="container">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!--  <div id="mobileMenuButton" class="pull-left">
                                  <a href="javascript:;">
                                      <i class="fa fa-bars"></i>
                                  </a>
                              </div>-->
                            <div class="site-branding pull-left">
                                <?php
                                $logo_2 = get_field("logo_dark", "option");
                                if (!empty($logo_2)) {
                                    ?>
                                    <a class="logo logo-dark logo-full" href="<?php echo get_site_url(); ?>">

                                        <img src="<?php echo $logo_2; ?>" width="131" height="47"
                                             alt="logo"/>
                                    </a>
                                <?php } ?>
                            </div>
                            <!-- .site-branding -->
                            <div class="contact_number pull-right">
                                <span><?php the_field('phone_text') ?> </span><b><a href="tel:<?php the_field('phone_number_2', 'options') ?>"><?php the_field('phone_number_2', 'options') ?></a></b>
                            </div>
                        </div>
                    </div>
                </header>
                <div id="content" class="site-content">