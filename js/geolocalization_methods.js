function findCoordinates() {
    // Verify if browser supports geolocation
    if (navigator.geolocation)
        navigator.geolocation.getCurrentPosition(showPosition);
    else
        document.getElementById("coordinate").innerHTML = "Geolocalizzazione non supportata dal browser.";
    }

function showPosition(position) {
    // Code to execute when we get the position...

    /*
        Useful variables:
            1- Latitude: position.coords.latitude
            2- Longitude: position.coords.longitude

        Embed Google Maps map from coordinates (example):
        document.getElementById("map").innerHTML = '<iframe width="100%" height="500" src="https://maps.google.com/maps?q=' + position.coords.latitude + ',' + position.coords.longitude + '&output=embed"></iframe>';
    */
}