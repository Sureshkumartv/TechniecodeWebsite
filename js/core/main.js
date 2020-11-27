
var SITE_ROOT = document.location.origin;
var PAGE_PATH = document.location.pathname;

$(function () {
    
    highlight_PageName();
    
});


function highlight_PageName() {
    var cnt = 0;
    $('ul.navigation > li').each(function() {
        if (PAGE_PATH.indexOf($(this).find('a').attr('href')) != -1) {
            cnt++;
            $(this).addClass('current');
        }
    });
    
    if (cnt == 0) {
        $('.home_link').addClass('current');
    }
}

