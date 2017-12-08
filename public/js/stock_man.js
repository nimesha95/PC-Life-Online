var repeater;

$(document).ready(function () {
    syncCurr();
    syncDelivery();
});

jQuery(document).ready(function ($) {
    console.log("loaded");
    $(".clickable-row").click(function () {
        console.log("hh11 ");
        window.location = $(this).data("url");
    });
});

function syncCurr() {
    $.ajax({
        method: 'POST',
        url: url_curOrders,
        data: {body: "hey there", _token: token}
    })
        .done(function (msg) {
            var len = msg['msg'].length;
            //console.log(len);

            $('#curOrders tbody > tr').remove();

            for (var i = 0; i < len; i++) {
                var model = msg['msg'][i]['id'];
                $("#curOrders").find('tbody')
                //.append($("<tr class='clickable-row' data-url='www.google.com/"+model+"'>")
                    .append($('<tr onclick="window.location=\'stockmanager/getOrder/' + model + '\';">')
                        .append($('<td>')
                            .text(msg['msg'][i]['id'])
                        )
                        .append($('<td>')
                            .text(msg['msg'][i]['email'])
                        )
                        .append($('<td>')
                            .text(msg['msg'][i]['total'])
                        )
                        .append($('<td>')
                            .text(msg['msg'][i]['added'])
                        )
                    )
            }

            //     console.log("hh");
        })

    repeater = setTimeout(syncCurr, 10000);
}

function syncDelivery() {
    $.ajax({
        method: 'POST',
        url: url_deliOrders,
        data: {body: "hey there", _token: token}
    })
        .done(function (msg) {
            var len = msg['msg'].length;
            //console.log(len);

            $('#deliOrders tbody > tr').remove();

            for (var i = 0; i < len; i++) {
                var model = msg['msg'][i]['id'];
                $("#deliOrders").find('tbody')
                //.append($("<tr class='clickable-row' data-url='www.google.com/"+model+"'>")
                    .append($('<tr>')
                        .append($('<td>')
                            .text(msg['msg'][i]['id'])
                        )
                        .append($('<td>')
                            .text(msg['msg'][i]['email'])
                        )
                        .append($('<td>')
                            .text(msg['msg'][i]['total'])
                        )
                        .append($('<td>')
                            .text(msg['msg'][i]['added'])
                        )
                    )
            }

            // console.log("hh");
        })

    repeater = setTimeout(syncDelivery, 10000);
}


