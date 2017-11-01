//checkout modal next button
$('#toNext').click(function (e) {
    e.preventDefault();
    $('#tabContent a[href="#deliveryTab"]').tab('show');
})


//requesting address information of the user from server
$("#deliveryDrop").change(function () {
    var end = this.value;
    if (end == 1) {
        $.ajax({
            method: 'POST',
            url: url,
            data: {body: "just a simple request", _token: token}
        })
            .done(function (msg) {
                var line1 = msg['line1'];
                var line2 = msg['line2'];
                var city = msg['city'];
                var phone = msg['phone'];
                var nullvalues = msg['isnull'];

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
});