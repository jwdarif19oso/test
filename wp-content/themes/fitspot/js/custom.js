/*
 -----------------------
 Custom JS
 -----------------------
 */
var $ = jQuery;
var windowHeight = getWindowHeight();
var ScreenHeight = getWindowOuterHeight();
var scroll = 0;
var header = "";
var paddingtop = "";
var headerHeight = "";

function getWindowHeight() {

    return $(window).height();
}

function getWindowOuterHeight() {

    if ($(window).width() <= 1024) {
        return window.screen.height;
    }

    return $(window).outerHeight();
}

jQuery(document).ready(function () {

    $("#mobileMenuButton").click(function (e) {
        openMobileMenu();
    })

    $(".blackOverlay, #closeBtn").click(function (e) {
        closeMobileMenu();
    })

    msieversion();


//    For Date picker

    var date_input = $('input[name="date"]'); //our date input has the name "date"
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    });
    //For Tabs


    $("#tabs").tabs();


    $('#accordion').on('hidden.bs.collapse', function () {
//do something...
    });

    $('#accordion .accordion-toggle').click(function () {
        if($(this).siblings("i.indicator").hasClass("glyphicon-chevron-right")){
            $(this).siblings("i.indicator").removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
        }
        else{
//        
            $(this).siblings("i.indicator").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
            }
        
//        var chevState = $(this).siblings("i.indicator").toggleClass('glyphicon-chevron-down glyphicon-chevron-right');
//        $("i.indicator").not(chevState).removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");

    });
    
    
$('.service-links li').click(function(){
    $(this).addClass('active');
});

});


function msieversion() {

    // Get IE or Edge browser version
    var version = detectIE();

    if (version === false) {
    } else if (version >= 12) {
        /*document.getElementById('result').innerHTML = 'Edge ' + version;*/
        $("html").addClass("ie");
    } else {
        $("html").addClass("ie");
        /*document.getElementById('result').innerHTML = 'IE ' + version;*/
    }
}

function openMobileMenu() {

    $(".mobileMenu").addClass("isOpen");

    $(".blackOverlay").css("display", "block");
    setTimeout(function () {
        $(".blackOverlay").addClass("isOpen");
    }, 10)

}

function closeMobileMenu() {

    $(".mobileMenu").removeClass("isOpen");


    $(".blackOverlay").removeClass("isOpen");
    setTimeout(function () {
        $(".blackOverlay").css("display", "none");
    }, 500)

}





/*
 // add details to debug result
 document.getElementById('details').innerHTML = window.navigator.userAgent;*/

/**
 * detect IE
 * returns version of IE or false, if browser is not Internet Explorer
 */
function detectIE() {
    var ua = window.navigator.userAgent;

    var msie = ua.indexOf('MSIE ');
    if (msie > 0) {
        /* // IE 10 or older => return version number*/
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    }

    var trident = ua.indexOf('Trident/');
    if (trident > 0) {
        /*// IE 11 => return version number*/
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
    }

    var edge = ua.indexOf('Edge/');
    if (edge > 0) {
        /*// Edge (IE 12+) => return version number*/
        return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
    }

    // other browser
    return false;
}

function Check_Version() {
    var rv = -1; // Return value assumes failure.

    if (navigator.appName == 'Microsoft Internet Explorer') {

        var ua = navigator.userAgent,
                re = new RegExp("MSIE ([0-9]{1,}[\\.0-9]{0,})");

        if (re.exec(ua) !== null) {
            rv = parseFloat(RegExp.$1);
        }
    } else if (navigator.appName == "Netscape") {
        /// in IE 11 the navigator.appVersion says 'trident'
        /// in Edge the navigator.appVersion does not say trident
        if (navigator.appVersion.indexOf('Trident') === -1)
            rv = 12;
        else
            rv = 11;
    }

    return rv;
}



$(window).load(function () {

    testimonialsSlider();
});

$(window).scroll(function (e) {

    /* stickyHeader();*/

});

/*$(window).resize(function () {
 
 
 });*/

function scrollTop() {
    $("#scorll_top").click(function () {
        doScroll()
    })
}

function doScroll() {
    var body = $("html, body");
    body.stop().animate({scrollTop: 0}, 1000, 'swing', function () {
    });
}

function showLoader() {

    var siteloaderImg = $("#siteLoader img");
    siteloaderImg.css({
        "opacity": 1
    });

}

function hideLoader() {

    var siteloader = $("#siteLoader");

    siteloader.css({
        "opacity": 0
    }).queue(function () {

        setTimeout(function () {

            siteloader.remove();

        }, 500);
        $(this).dequeue();

    });

}


function stickyHeader() {

    scroll = $(window).scrollTop();

    if (scroll >= (windowHeight)) {
        header.addClass("sticky fadeInDown");
        header.removeClass("fadeOutUp");
        header.css({
            "position": "fixed",
            "top": 0
        });
        /* $("#content").css("padding-top", (headerHeight + paddingtop) + "px");*/
    } else {
        header.removeClass("sticky fadeInDown");
        header.addClass("fadeOutUp");
        header.css({
            "position": "absolute",
            "top": windowHeight + "px"
        });
        /* $("#content").css("padding-top", (paddingtop) + "px");*/
    }

}

function isHighDensity() {
    return ((window.matchMedia && (window.matchMedia('only screen and (min-resolution: 124dpi), only screen and (min-resolution: 1.3dppx), only screen and (min-resolution: 48.8dpcm)').matches || window.matchMedia('only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (min--moz-device-pixel-ratio: 1.3), only screen and (min-device-pixel-ratio: 1.3)').matches)) || (window.devicePixelRatio && window.devicePixelRatio > 1.3));
}


function isRetina() {
    return ((window.matchMedia && (window.matchMedia('only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx), only screen and (min-resolution: 75.6dpcm)').matches || window.matchMedia('only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (min--moz-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2)').matches)) || (window.devicePixelRatio && window.devicePixelRatio >= 2)) && /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
}

$.fn.isOnScreen = function () {

    var win = $(window);

    var viewport = {
        top: win.scrollTop(),
        left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    //bounds.bottom = bounds.top + win.height()/2;


    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

};

function testimonialsSlider() {

    if ($(window).width() > 991)
        return;

    if ($(".testimonials-items").length < 1)
        return;

    if ($(".testimonials-items .testimonials-item").length > 1) {

        jQuery(".testimonials-items").slick({
            accessibility: true,
            autoplay: false,
            dots: false,
            lazyLoad: true,
            mobileFirst: true,
            pauseOnFocus: true,
            pauseOnHover: true,
            dots: true,
            arrows: true,
            fade: true

        });

    }

}

function loadImagesSlider() {

    if (isRetina()) {

        $(".to-change-bg-thumbnail").each(function (index) {
            $(this).css("background-image", "url('" + $(this).attr("data-srcfull") + "')");
        });

    } else {

        var src = "src";
        if ($(window).width() >= 768)
            src = "srcfull";

        $(".to-change-bg-thumbnail").each(function (index) {
            $(this).css("background-image", "url('" + $(this).attr("data-srcfull") + "')");
        });

    }

}

