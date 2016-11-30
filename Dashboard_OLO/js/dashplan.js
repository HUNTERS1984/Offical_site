jQuery("#dialog-contain .fog").click(function(){
    jQuery("#dialog-contain").fadeOut("300");
});
jQuery("#dialog-upgrade a.btn-closedialog-logout").click(function(){
    jQuery("#dialog-contain").fadeOut("300");
});
jQuery(".btn-upgrade-plan").click(function(){
    jQuery("#dialog-contain").fadeIn("300");
});