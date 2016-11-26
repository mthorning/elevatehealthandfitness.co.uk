function updateMenu(menu) {
    //side menu creation
    var itemId = '';
    //clear menu
    $(menu).html('');
    //populate menu
    $.ajax({
        type: 'GET'
        , url: 'xml/blogs.xml'
        , dataType: 'xml'
        , success: function (xml) {
            $(xml).find('section').each(function () {
                var itemName = $(this).find('title').text();
                itemId = $(this).find('id').text();
                $(menu).prepend('<li><a href="blog.php#' + itemId + '">' + itemName + '</a></li>');
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
    
    var imageUrl = 'img/blogPage/' + id + '.jpg';
    

    $.ajax({
        type: 'GET'
        , url: 'xml/blogs.xml'
        , dataType: 'xml'
        , success: function (xml) {
            $(xml).find('section').each(function () {
                var idCheck = $(this).find('id').text();
                //of subjects match:
                if (idCheck == id) {
                    var title = $(this).find('title').text();
                    //write img div
                    $('#content').append('<div class="headImg" style="background-image: url(' + imageUrl + ');"></div>');
                    // change FB share image
                    $('meta[name=og\\:url]').attr('content', imageUrl);
                    //write title
                    $('#content').append('<h1>' + title + '</h1>');
                    //write paragraphs
                    var i = 0;
                    $(this).find('para').each(function () {
                        var para = $(this).html();
                        $('#content').append('<p>' + para + '</p>');
                    });
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