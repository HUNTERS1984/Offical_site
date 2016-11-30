jQuery(".toggle-search").click(function () {
    if (jQuery(".header_top").hasClass("search-open")) {
        jQuery(".header_top").removeClass("search-open");
    } else {
        jQuery(".header_top").addClass("search-open");
    }
});
jQuery(".btn-close").click(function () {
    jQuery(".header_top").removeClass("search-open");
});
jQuery(".navbar-custom-menu>ul>li>a").click(function(){
    if(jQuery(this).parent().has("ul")){
        if(jQuery(this).parent().hasClass("open")){
            jQuery(this).parent().removeClass("open");
        }
        else{
            jQuery(".navbar-custom-menu>ul>li").removeClass("open");
            jQuery(this).parent().addClass("open");
        }
    }
});
jQuery(".navbar-custom-menu>ul>li>a.logout").click(function(){
    jQuery("#logout").fadeIn("300");
});
jQuery("#logout .fog").click(function(){
    jQuery("#logout").fadeOut("300");
});
jQuery("#dialog-logout a.btn-closedialog-logout").click(function(){
    jQuery("#logout").fadeOut("300");
});
jQuery(".account-name").click(function(){
    if(jQuery(this).hasClass("open")){
        jQuery(this).removeClass("open");
    }
    else{
        jQuery(this).addClass("open");
    }
})

$(".next1").click(function(){
                $('.step1').removeClass('active');
                $('.step2').addClass('active');
          });
        $(".next2").click(function(){

                $('.step2').removeClass('active');
                $('.step3').addClass('active');
          });
          $(".cancel2").click(function(){
            $('.step2').removeClass('active');
            $('.step1').addClass('active');
          });
		  



// =============


$("input[name='group2']").click(function () {
    $('#text1').css('display', ($(this).val() === 'a') ? 'block':'none');
    $('#text2').css('display', ($(this).val() === 'b') ? 'block':'none');
});
