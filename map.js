window.onload = function(){
    var options = {
        zoom: 15
        , center: new google.maps.LatLng(-31.4289,-62.0844)
        , mapTypeId: google.maps.MapTypeId.ROADMAP
 
        , backgroundColor: '#ffffff'
        , noClear: true
        , disableDefaultUI: true
        , keyboardShortcuts: false
        , disableDoubleClickZoom: true
        , draggable: false
        , scrollwheel: false
        , draggableCursor: 'move'
        , draggingCursor: 'move'
 
        , mapTypeControl: true
        , mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_MENU
            , position: google.maps.ControlPosition.TOP_LEFT
            , mapTypeIds: [
                google.maps.MapTypeId.SATELLITE
            ]
        }
        , navigationControl: true
        , streetViewControl: true
        , navigationControlOptions: {
            position: google.maps.ControlPosition.TOP_RIGHT
            , style: google.maps.NavigationControlStyle.ANDROID
        }
        , scaleControl: true
        , scaleControlOptions: {
            position: google.maps.ControlPosition.TOP_LEFT
            , style: google.maps.ScaleControlStyle.DEFAULT
        }
    };
    var map = new google.maps.Map(document.getElementById('map'), options);
	new google.maps.Marker({
		position: map.getCenter()
		, map: map
		, title: 'Pulsa aquí'
		, icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/green/blank.png'
		, cursor: 'default'
		, draggable: true
	});
};
	
	
	
	
};

