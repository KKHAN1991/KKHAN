jQuery(function($) {

    smoothScroll.init();
    new WOW().init();

    var body = $('body');
    $('.menu-toggle').bind('click', function() {
        body.toggleClass('menu-open');
        return false;
    });

    $(window).resize(function() {
        $('.full-page').height($(window).height());
    }).resize();
});

