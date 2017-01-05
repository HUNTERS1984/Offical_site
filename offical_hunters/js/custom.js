(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-2436302-63', 'auto');
ga('send', 'pageview');


jQuery(document).scroll(function () {
    var scrollPosition = $(document).scrollTop();
    var scrollReference = $("header").height();
    if (scrollPosition > scrollReference) {
        jQuery("body").addClass("scroll-active");
    } else {
        jQuery("body").removeClass("scroll-active");
    }
});
// jQuery(".btn-sidemenu").click(function(){
//    jQuery("header .menu").slideToggle(300);
// });
