
$(document).ready(function () {

    $("#show-events-calendar").on("click", function() {
        $("#google-events-calendar").toggle();
        $(this).text(function(i, text){
            return text === "zobrazit v kalendáři" ? "skrýt kalendář" : "zobrazit v kalendáři";
        });
    });

    $("#show-events-map").on("click", function() {
        $("#gm-events-map").toggle();
        $(this).text(function(i, text){
            return text === "zobrazit na mapě" ? "skrýt mapu" : "zobrazit na mapě";
        });

        initEventsMap();
    });

    $("#show-event-map").on("click", function() {
        $("#gm-event-map").toggle();
        $(this).text(function(i, text){
            return text === "zobrazit mapu" ? "skrýt mapu" : "zobrazit mapu";
        });

        initEventMap();
    });

    function initEventsMap() {
        var map = new google.maps.Map(document.getElementById("gm-events-map"), {
            center: { lat: 49.741807, lng: 15.335125},
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var bounds = new google.maps.LatLngBounds();
        var events = $("#snippet-concerts-futureConcertsList").find(".event");

        events.each(function() {
            var event = $(this).data("event");

            if (typeof event === 'undefined')
                return true;

            var content =
                "<div class='gm-place-title'>" + event.title +
                "</div><div class='gm-place-description'>" + event.datetime +
                "</div><div class='gm-place-description'>" + event.place +
                "</div><a class='gm-place-url' href='" + event.url + "'>Odkaz na událost</a>";

            var marker = setMarker(map, event, content);

            bounds.extend(marker.getPosition());
        });

        map.fitBounds(bounds);
        google.maps.event.addListenerOnce(map, 'bounds_changed', function() {
            this.setZoom(map.getZoom()-1);
        });
    }

    function initEventMap() {
        var event = $("#event-place").data("place");
        var map = new google.maps.Map(document.getElementById("gm-event-map"), {
            zoom: 14,
            center: new google.maps.LatLng(event.lat, event.lng),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        setMarker(map, event, event.place);
    }


    function setMarker(map, event, content) {
        var marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(event.lat, event.lng)
        });

        var infowindow = new google.maps.InfoWindow({
            content: content
        });

        google.maps.event.addListener(marker, "click", function () {
            infowindow.open(map, marker);
        });

        infowindow.open(map, marker);

        return marker;
    }
});