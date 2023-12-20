function findCoordinates() {
    // Verify if browser supports geolocation
    if (navigator.geolocation)
        navigator.geolocation.getCurrentPosition(showPosition);
    else
        document.getElementById("coordinate").innerHTML = "Geolocalizzazione non supportata dal browser.";
}

function showPosition(position) {
    // Code to execute when we get the position...

    // Useful variables:
    // 1- Latitude: position.coords.latitude
    // 2- Longitude: position.coords.longitude

    // Embed Google Maps map from coordinates
    const mapUrl = `https://maps.google.com/maps?q=${position.coords.latitude},${position.coords.longitude}&output=embed`;
    document.getElementById("map").innerHTML = `<iframe width="100%" height="500" src="${mapUrl}"></iframe>`;

    // Display the coordinates
    document.getElementById("coordinate").innerHTML = `Latitude: ${position.coords.latitude}, Longitude: ${position.coords.longitude}`;
}

// Call the findCoordinates function when the page loads
findCoordinates();
