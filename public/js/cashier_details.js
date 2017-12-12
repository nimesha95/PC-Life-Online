jQuery('#discount').on('input', function () {
    var discount = $('#discount').val();
    var curTotal = $('#order_total').val();
    curTotal = curTotal.replace(',', '');
    var newTotal = (curTotal - curTotal * (discount / 100));

    $('#new_total').val(newTotal);

    //console.log(discount/100 * curTotal  );
    console.log('curtot ' + newTotal);
    console.log(jQuery.type(curTotal));
});

$('#discount').focus(
    function () {
        $(this).val('');
    });
$('#discount').focusout(
    function () {

        var discount = $('#discount').val();
        var curTotal = $('#order_total').val();
        curTotal = curTotal.replace(',', '');
        var newTotal = (curTotal - curTotal * (discount / 100));

        $('#new_total').val(newTotal);
    });