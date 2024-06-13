  
function initMap() {
    // Latitude and Longitude
    var myLatLng = {lat: 21.2335166, lng: 72.8220434};

    var map = new google.maps.Map(document.getElementById('google-maps'), {
        zoom: 13,
        center: myLatLng
    });

    infoWindow = new google.maps.InfoWindow();

  const locationButton = document.createElement("button");

  locationButton.textContent = "Click to Find Current Location";
  locationButton.classList.add("custom-map-control-button");
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
  locationButton.addEventListener("click", () => {
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };

          infoWindow.setPosition(pos);
          infoWindow.setContent("Location found.");
          infoWindow.open(map);
          map.setCenter(pos);
        },
        () => {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      );
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
  });
  <?php
      include 'includes/db.php';
      $result = mysqli_query($con,"SELECT *FROM map");
      while($data = mysqli_fetch_array($result)){
  ?>
  // Markers
  var LatLng = {lat: <?php echo $data['lat']; ?>, lng: <?php echo $data['lng']; ?>};
    var marker = new google.maps.Marker({
      position: LatLng,
      map: map,
      title: '<?php echo $data['title']; ?>',
      infoWindow: {
        content: '<?php echo $data['title']; ?>'
    }
    
  });
  <?php } ?>
  
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(
    browserHasGeolocation
      ? "Error: The Geolocation service failed."
      : "Error: Your browser doesn't support geolocation."
  );
}