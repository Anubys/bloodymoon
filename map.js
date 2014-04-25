window.onload = function(){
    var options = {
        zoom: 15
        , center: new google.maps.LatLng(37.7577,-122.4376)
        , mapTypeId: google.maps.MapTypeId.ROADMAP
    };
 
    var map = new google.maps.Map(document.getElementById('map'), options);
 
    var marker = new google.maps.Marker({
        position: map.getCenter()
        , map: map
        , title: 'Pulsa aquí'
        , icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/orange/blank.png'
    });
 
    var popup = new google.maps.InfoWindow({
        content: 'Prueba'
    });
 
    google.maps.event.addListener(marker, 'click', function(){
        popup.open(map, marker);
    });
};