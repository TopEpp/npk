$(function () {

    $('#search-btn').click(function () {
        $.ajax({
            method: "POST",
            url: domain + 'receive/getTax',
            data: {
                keyword: $('#search').val(),
            }
        }).done(function (msg) {
            if (msg) {
                console.log(msg);
                $('#div_table').html(msg);
            }
        });

    });

});