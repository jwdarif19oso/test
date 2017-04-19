<?php

class Shortcodes
{

    public function __construct()
    {
        add_shortcode('address', array($this, 'address_func'));

        add_shortcode('phone_number', array($this, 'phone_number_func'));
        add_shortcode('phone_number_mobile', array($this, 'phone_number_mobile_func'));
        add_shortcode('phone_number_desktop', array($this, 'phone_number_desktop_func'));

        add_shortcode('email_hello', array($this, 'email_1_func'));
        add_shortcode('email_1', array($this, 'email_1_func'));

        add_shortcode('email_support', array($this, 'email_2_func'));
        add_shortcode('email_2', array($this, 'email_2_func'));

        add_shortcode('social_icons', array($this, 'social_func'));


        add_shortcode( 'link', array($this, 'link_shortcode') );
    }

    //links shortcode
    function link_shortcode( $atts, $content = null ) {

        $a = shortcode_atts( array(
            'class' => '',
            'target' => '',
            'external' => ''
        ), $atts );

        return '<a class="link anchor '.esc_attr($a['class']).' ">' . $content . '</span>';
    }


    // [address]
    public function address_func($atts)
    {
        /*$attr = "";
        $attr = shortcode_atts(array(
            'foo' => 'something',
            'bar' => 'something else',
        ), $atts);*/

        return get_field('address', 'option');
    }

    // [phone_number linked="yes" title="Call"]
    public function phone_number_func($atts, $deviceClasses)
    {
        $attr = "";
        $attr = shortcode_atts(array(
            'linked' => 'yes',
            'title' => ''
        ), $atts);

        $option_value = get_field('phone_number', 'option');
        $linked = $attr['linked'];
        $title = $attr['title'];


        if (strtolower($linked) != "yes") {
            return "<span x-ms-format-detection='none' class='".$deviceClasses."'>".$option_value."</span>";
        }

        if (empty($title)) {
            return "<a href='tel:{$option_value}' title='Phone Number' class='phone_number ".$deviceClasses."'>{$option_value}</a>";
        }

        return "<a href='tel:{$option_value}' title='Phone Number' class='phone_number ".$deviceClasses."'>{$title}</a>";
    }

    // [phone_number linked="yes" title="Call"]
    public function phone_number_mobile_func($atts)
    {
        return $this->phone_number_func($atts, " hidden-sm hidden-md hidden-lg ");
    }

    // [phone_number linked="yes" title="Call"]
    public function phone_number_desktop_func($atts)
    {
        return $this->phone_number_func($atts, "  hidden-xs ");
    }


    // [email_1 linked="yes" title="Email"]
    public function email_1_func($atts)
    {
        $attr = "";
        $attr = shortcode_atts(array(
            'linked' => 'yes',
            'title' => '',
        ), $atts);

        $option_value = get_field('email_1', 'option');
        $linked = $attr['linked'];
        $title = $attr['title'];

        if (strtolower($linked) != "yes") {
            return $option_value;
        }

        if (empty($title)) {
            return "<a href='mailto:{$option_value}' title='Email' class='email email_1'>{$option_value}</a>";
        }

        return "<a href='mailto:{$option_value}' title='Email' class='email email_1'>{$title}</a>";
    }

    // [email_2 linked="yes" title="Email"]
    public function email_2_func($atts)
    {
        $attr = "";
        $attr = shortcode_atts(array(
            'linked' => 'yes',
            'title' => '',
        ), $atts);

        $option_value = get_field('email_2', 'option');
        $linked = $attr['linked'];
        $title = $attr['title'];

        if (strtolower($linked) != "yes") {
            return $option_value;
        }

        if (empty($title)) {
            return "<a href='mailto:{$option_value}' title='Email' class='email email_1'>{$option_value}</a>";
        }

        return "<a href='mailto:{$option_value}' title='Email' class='email email_1'>{$title}</a>";
    }

    // [social_icons position="header/footer"]
    public function social_func($atts)
    {
        $attr = "";
        $attr = shortcode_atts(array(
            'position' => 'header'
        ), $atts);

        $html = "";
        $position = $attr['position'];

        if (have_rows('social_icons', 'option')) {

            $html .= "<ul class='social-icons clearfix'>";

            // loop through the rows of data
            while (have_rows('social_icons', 'option')) {
                the_row();

                $link = get_sub_field('link');
                $icon = get_sub_field('icon');
                $img = get_sub_field('image');
                $header = get_sub_field('header');
                $footer = get_sub_field('footer');


                if(($position == "header" && $header == true) ||
                    ($position == "footer" && $footer == true)) {

                    $html .= "<li>";
                    $html .= "<a href='{$link}' target='_blank'>";

                    if (empty($img)) {
                        $html .= $icon;
                    } else {
                        $url = $img['sizes']['thumbnail'];
                        $html .= "<img src='{$url}' alt='social icon' />";
                    }

                    $html .= "</a>";
                    $html .= "</li>";

                }

            }

            $html .= "</ul>";
        }

        return $html;


    }

}