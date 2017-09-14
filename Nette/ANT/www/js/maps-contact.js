
var markers = [];
var infoWindows = [];
var map;

function initMap() {
    var mapEle = document.getElementById('gm-contact-map');
    if (!mapEle) {
        return;
    }

    map = new google.maps.Map(mapEle, {
        center: {lat: 49.1950602, lng: 16.606837100000007},
        zoom: 13,
        clickableIcons: false
    });

    // Create the search box and link it to the UI element.
    var input = document.getElementById('gm-autocomplete-input');
    var searchBox = new google.maps.places.SearchBox(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
    });

    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length > 0) {
            removeMarkers();
            removeInfoWidows();
        }

        if (places.length == 1) {
            setMarker(places[0], true);
        } else if (places.length > 1) {
            setMarkers(places);
        }
    });


    var placeId = document.getElementById('gm-place-id').innerText;
    getPlaceById(placeId, function(place) {
        setMarker(place, true);
    });
}


function getPlaceById(placeId, callback) {
    if (placeId) {
        var service = new google.maps.places.PlacesService(map);
        service.getDetails({
            placeId: placeId
        }, function(place, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                return callback(place);
            }
        });
    }
}


function setMarker(place, focusOnMarker) {
    var infoWindow = setInfoWindow(place);
    var marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29),
        position: place.geometry.location
    });

    marker.addListener('mouseover', function() {
        removeInfoWidows();
        infoWindow.open(map, this);
    });

    marker.addListener('click', function() {
        focusOnPlace(place);
        setPlaceId(place.place_id);
    });


    if (focusOnMarker) {
        infoWindow.open(map, marker);
        setPlaceId(place.place_id);
        focusOnPlace(place);
    }

    markers.push(marker);
}


function setInfoWindow(place) {
    var infoWindow = new google.maps.InfoWindow();
    var address = place.formatted_address;

    //var infowindowContent = document.getElementById('gm-infowindow-content');
    //infoWindow.setContent(infowindowContent);
    //infowindowContent.children['gm-place-icon'].src = place.icon;
    //infowindowContent.children['gm-place-title'].textContent = place.name;
    //infowindowContent.children['gm-place-description'].textContent = address;

    infoWindow.setContent(address);

    infoWindows.push(infoWindow);
    return infoWindow;
}


function setPlaceId(placeId) {
    document.getElementById('gm-place-id').textContent = placeId;
}


function focusOnPlace(place) {
    if (place.geometry.viewport) {
        map.fitBounds(place.geometry.viewport);
    } else {
        map.setCenter(place.geometry.location);
        map.setZoom(17);
    }
}


function setMarkers(places) {
    var bounds = new google.maps.LatLngBounds();

    places.forEach(function(place) {

        setMarker(place, false);

        if (place.geometry.viewport) {
            bounds.union(place.geometry.viewport);
        } else {
            bounds.extend(place.geometry.location);
        }
    });

    map.fitBounds(bounds);
}


function removeMarkers() {
    markers.forEach(function(marker) {
        marker.setMap(null);
    });
    markers = [];
}

function removeInfoWidows() {
    infoWindows.forEach(function(infowindow) {
        infowindow.close();
    });
}


function parseAddressComponents(components) {
    var route = '';
    var neighborhood = '';
    var street_number = '';
    var premise = '';
    var locality = '';
    var postal_code = '';

    $.each(components, function(index, component) {
        $.each(component.types, function(index, type) {
            if (type === 'neighborhood') {
                neighborhood = component.long_name;
            }
            if (type === 'route') {
                route = component.long_name;
            }
            if (type === 'street_number') {
                street_number = component.long_name;
            }
            if (type === 'premise') {
                premise = component.long_name + '/';
            }
            if (type === 'locality') {
                locality = component.long_name;
            }
            if (type === 'postal_code') {
                postal_code = component.long_name;
            }
        });
    });

    var secondPart = premise + street_number;
    var firstPart = route + neighborhood + (secondPart ? ' ' : '');
    var thirdPart = (firstPart ? ', ' : ' ')  + postal_code + ' ' + locality;

    return firstPart + secondPart + thirdPart;
}

