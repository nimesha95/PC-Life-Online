jQuery('#discount').on('input', function () {
    var discount = $('#discount').val();
    var curTotal = $('#order_total').val();
    var newTotal = curTotal - (curTotal * (discount / 100));

    $('#new_total').val(newTotal);

});

$('#discount').focus(
    function () {
        $(this).val('');
    });
$('#discount').focusout(
    function () {
        var discount = $('#discount').val();
        var curTotal = $('#order_total').val();
        var newTotal = curTotal - (curTotal * (discount / 100));

        $('#new_total').val(newTotal);
    });