$(document).ready(function() {
    $(".like").bind("click", function() {
        var link = $(this);
        var id = link.data('id');
        $.ajax({
            url: "/add-like-json",
            type: "POST",
            data: {id:id},
            dataType: "json",
            success: function(result) {
                if (result.status == 'add'){
                    link.addClass('active');
                } else {
                    link.removeClass('active');
                }

                $('.counter',link).html(result.count);
            }
        });
    });

});