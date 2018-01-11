var line1;
var line2;
var city;
var phone;
var nullvalues;

var deliveryMethod = 0; //0 is pickup   1 is delivery
var paymentMethod = "pickup";

//saving payment method to a global variable
$(document).ready(function () {
    $('input[type=radio][name=payment]').change(function () {
        paymentMethod = this.value;
        console.log("bbb " + this.value);
    });
});


//checkout modal next button
$('#toNext').click(function (e) {
    e.preventDefault();
    $('#tabContent a[href="#checkoutTab"]').tab('show');
})


//track modal tab change
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    var target = $(e.target).attr("href") // activated tab
    if (target == "#checkoutTab") {
        console.log(deliveryMethod + " " + paymentMethod);

        if (paymentMethod == "pickup") {
            $('#pay_meth').text("Pay when pickup");
        }
        else if (paymentMethod == "bank") {
            $('#pay_meth').text("Bank Deposit");
        }
        else if (paymentMethod == "paypal") {
            $('#pay_meth').text("Paypal Deposit");
        }

        if (deliveryMethod == 1) {
            console.log("stuff" + deliveryMethod);
            $('#line1x').text(line1);
            $('#line2x').text(line2);
            $('#cityx').text(city);
            $('#phonex').text(phone);

            document.getElementById("addr_infoX").style.display = "block";
        }
        else {
            document.getElementById("addr_infoX").style.display = "none";
        }
    }
});


//requesting address information of the user from server
$("#deliveryDrop").change(function () {
    var end = this.value;
    deliveryMethod = end;

    if (end == 1) {
        $.ajax({
            method: 'POST',
            url: url,
            data: {body: "just a simple request", _token: token}
        })
            .done(function (msg) {
                line1 = msg['line1'];
                line2 = msg['line2'];
                city = msg['city'];
                phone = msg['phone'];
                nullvalues = msg['isnull'];

                $('#line1').text(line1);
                $('#line2').text(line2);
                $('#city').text(city);
                $('#phone').text(phone);

                document.getElementById("addr_info").style.display = "block";

                if (nullvalues) {
                    document.getElementById("set_addr").style.display = "block";
                }
                else {
                    document.getElementById("address_info").style.display = "block";
                }


                console.log(nullvalues);
                console.log(line1 + line2 + city + phone);
            })
    }
    else {
        document.getElementById("addr_info").style.display = "none";
    }

    $('input[name="name_here"]').attr('disabled', 'disabled');
});

$("#orderSubmit").click(function () {
    $.ajax({
        method: 'POST',
        url: submitURL,
        data: {deliveryMethod: deliveryMethod, paymentMethod: paymentMethod, _token: token}
    })
        .done(function (msg) {
            console.log(msg['returnURL']);
            //location.reload();
            if (msg['outstock']) {

                alert(msg['outstock'] + " is out of stock. Please come back later!");
            }
            else {
                if (msg['returnURL'] == "pay_later") {
                    location.reload(true);
                }
                else {
                    window.location.href = msg['returnURL'];
                }
            }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            alert('Error: ' + jqXHR);
        })

});
