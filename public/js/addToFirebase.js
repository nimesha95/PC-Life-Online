var config = {
    apiKey: "AIzaSyBZbBlterW-jl0S536eVj1TTZ8Oa_uY_xc",
    authDomain: "group32-fc43b.firebaseapp.com",
    databaseURL: "https://group32-fc43b.firebaseio.com",
    projectId: "group32-fc43b",
    storageBucket: "group32-fc43b.appspot.com",
    messagingSenderId: "360796617326"
};

firebase.initializeApp(config);


function addToDeliveryTable(order_id) {
    $.ajax({
        method: 'POST',
        url: url_add_to_firebase,
        data: {body: order_id, _token: token}
    })
        .done(function (msg) {
            //var len = msg['msg'].length;
            console.log(msg);
            writeOrderData(msg['addr'], msg['phone'], msg['name'], msg['lat'], msg['long'], order_id);
        })
}


function writeOrderData(addr, phone, name, lat, long, orderid) {

    firebase.database().ref('curjobs/' + orderid).set({
        address: addr,
        comp_date: "0",
        completed: "no",
        contactNo: parseInt(phone),
        curLat: 0,
        curLong: 0,
        custName: name,
        itemCatagory: "computer items",
        lat: lat,
        long: long,
        orderID: orderid.toString(),
        timestamp: Math.round(+new Date() / 1000)
    });
}