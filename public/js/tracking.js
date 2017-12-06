var myLatLng;

function initialize() {
    myLatLng = new google.maps.LatLng(6.9271, 79.8612),
        myOptions = {
            zoom: 15,
            center: myLatLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        },
        map = new google.maps.Map(document.getElementById('map'), myOptions),
        marker = new google.maps.Marker({position: myLatLng, map: map});

    marker.setMap(map);
    //moveMarker( map, marker );
}

function moveMarker(map, marker, latitude, longitude) {

    marker.setPosition(new google.maps.LatLng(latitude, longitude));
    map.setZoom(15);
    map.panTo(new google.maps.LatLng(latitude, longitude));
};


$(document).ready(function () {
    initialize();
});


var config = {
    apiKey: "AIzaSyBZbBlterW-jl0S536eVj1TTZ8Oa_uY_xc",
    authDomain: "group32-fc43b.firebaseapp.com",
    databaseURL: "https://group32-fc43b.firebaseio.com",
    projectId: "group32-fc43b",
    storageBucket: "group32-fc43b.appspot.com",
    messagingSenderId: "360796617326"
};
firebase.initializeApp(config);

const dbObjectRef = firebase.database().ref().child('curjobs').child('job1');
dbObjectRef.on('value', function (snapshot) {
    var lat = snapshot.val().curLat;
    var longi = snapshot.val().curLong;
    // console.log(lat);
    moveMarker(map, marker, lat, longi);
});


