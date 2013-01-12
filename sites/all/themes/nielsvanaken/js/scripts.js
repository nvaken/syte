var menuTop;

jQuery(document).ready(function () {

    menuTop = jQuery('.sidebar .menu li:first-child').offset().top;

    jQuery(window).scroll(function () {
        var documentTop = jQuery(document).scrollTop() + 10;
        if (documentTop > menuTop) {
            jQuery('.sidebar').css('marginTop', documentTop - menuTop);
        }
    });

    console.log(jQuery('.sidebar'));

    jQuery(document).ready(function() {
        jQuery("abbr.timeago").timeago();
    });
});
