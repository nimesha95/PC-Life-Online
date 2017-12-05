var map;
var marker;

function initMap() {
    var uluru = {lat: 6.9271, lng: 79.8612};
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
    });
}

$(document).ready(function () {
    initMap();
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

dbObjectRef.on('value', snap = > {
    var lat = snap.val().curLat;
var longi = snap.val().curLong;

var newLatLng = new google.maps.LatLng(lat, longi);

marker = new google.maps.Marker({
    position: newLatLng,
    map: map,
    draggable: true
});

})
;    //not a syntax error

