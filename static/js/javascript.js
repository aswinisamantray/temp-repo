$(function() {
    $(document).scroll(function() {
        var $nav = $("#mainNavbar");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    });
});


jQuery(document).ready(function($) {
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});


// jQuery(document).ready(function() {
//     var hideit = jQuery("#hideit").clone(true);

//     jQuery(window).resize(function() {
//         var innerWidth = window.innerWidth;

//         if (innerWidth < 500) {
//             jQuery("#hideit").detach();
//         } else if (innerWidth > 500) {
//             if (!jQuery("#hideit").length) {
//                 jQuery("body").append(hideit);
//             }
//         }
//     });
// });

var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
if (mobile) {
    $('#hideit').css('display', 'none');
} else {
    $('#hideit').css('display', 'block');
}