
$(function () {
    $.ajax({
        url: "templates/header.html",
        type: 'GET',
        async: false,
        success: function (data, textStatus, jqXHR) {
            $('#header').html(data);
        }
    });
    
});

$(function () {
    $.ajax({
        url: "templates/footer.html",
        type: 'GET',
        async: false,
        success: function (data, textStatus, jqXHR) {
            $('#footer').html(data);
        }
    });
    
});
