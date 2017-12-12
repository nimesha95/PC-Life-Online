$(document).ready(function () {
    $('#serialNo').focus();
});

$('#serialNo').keypress(function (e) {
    var key = e.which;
    var len = $(this).val().length + 1;
    $("#already_there").hide();
    if (len > 0 && len < 12) {
        $("#dataValid_span").show();
    }
    else {
        $("#dataValid_span").hide();
        if (key == 13)  // the enter key code
        {
            $.ajax({
                type: 'post',
                url: url1,
                data: $('form').serialize()
            })
                .done(function (msg) {
                    console.log(msg);
                    setTimeout(function () {
                        $.bootstrapGrowl("Item Added to Stock", {type: 'success'});
                    }, 500);
                    $('#serialNo').val('');
                    $('#serialNo').focus();
                })
                .fail(function () {
                    $("#already_there").show();
                    console.log("somethng bad happended");
                })
            return false;
        }
    }
});