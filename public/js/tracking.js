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
initMap(lat, longi);
})
;    //not a syntax error

function initMap(lat, lon) {
    var uluru = {lat: lat, lng: lon};
    //var uluru = {lat: -25.363, lng: 131.044};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}