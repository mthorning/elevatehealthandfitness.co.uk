$(function () {
    
    var id = '';
    var location = '';
    
    updateMenu('#menuItems', 'xmlChange');
    
    $(window).on('hashchange', function () {
        location = window.location.href;
        id = window.location.hash.substring(1);
        updateContent(id);
    });    
    
    $(window).trigger('hashchange');
});


    