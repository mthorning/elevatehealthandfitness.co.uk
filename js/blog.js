$(function () {
    
    var id = '';
    var location = '';
    
    updateMenu('#menuItems');
    
    $(window).on('hashchange', function () {
        location = window.location.href;
        id = window.location.hash.substring(1);
        updateContent(id);
    });    
    
    $('#navBlog').delegate('li a', 'click', function () {
        if ($window.width() < 769) {
            $('#navToggleButton').trigger('click');
        }
    });
    
    $(window).trigger('hashchange');
});


    