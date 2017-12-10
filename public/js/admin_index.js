var repeater;

$(document).ready(function () {
    syncNotificationData();
});


function syncNotificationData() {
    $.ajax({
        method: 'POST',
        url: url_sync,
        data: {body: "hey there", _token: token}
    })
        .done(function (msg) {
            //console.log(msg['msg']);
            $('#orders').text(msg['msg'][0]);
            $('#deliv').text(msg['msg'][1]);
        })

    repeater = setTimeout(syncNotificationData, 1000);
}