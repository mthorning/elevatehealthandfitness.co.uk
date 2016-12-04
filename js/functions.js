function updateMenu(menu) {
    //clear menu
    $(menu).html('');
    //populate menu
    $.ajax({
        type: 'GET'
        , url: 'blogs.json'
        , data: { get_param: 'value'}
        , dataType: 'json'
        , success: function (blog) {
            $.each(blog, function (index, element) {
                $(menu).prepend('<li><a href="blog.php#' + element.id + '">' + element.title + '</a></li>');
            });
        }
        , error: function (XMLHttpRequest, textStatus, errorThrown) {
            if (textStatus == 'Unauthorized') {
                console.log('Unauthorized Status Error: ' + errorThrown);
            } else {
                console.log('Other Error: ' + errorThrown);
            }
        }

    });
}

function updateContent(id) {

    //clear content
    $('#content').html('');    

    $.ajax({
        type: 'GET'
        , url: 'blogs.json'
        , data: { get_param: 'value'}
        , dataType: 'json'
        , success: function (blog) {
            $.each(blog, function (index, element) {
                var idCheck = element.id;
                //of subjects match:
                if (idCheck == id) {
                    var title = element.title;
                    //write img div
                    $('#content').append('<div class="headImg" style="background-image: url(' + element.imageUrl + ');"></div>');
                    //write title
                    $('#content').append('<h1>' + title + '</h1>');
                    //write bodyOfText
                    $.each(element.paragraph, function (index, paragraph) {
                        $('#content').append('<p>' + paragraph + '</p>');
                    })
                    
                }
            });
             equaliseHeights();
        }
        , error: function () {
            alert('The XML document could not be read.');
        }
    });
}

function equaliseHeights() {
    $('#menu').css('height', 'auto');
    $('#contentContainer').css('height', 'auto');
    var menuHeight = $('#menu').height();
    var contentHeight = $('#contentContainer').height();

    if (contentHeight > menuHeight) {
        $('#menu').height(contentHeight);
    }
}