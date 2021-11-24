/** google_map js **/

function myMap() {
  var mapProp = {
    center: new google.maps.LatLng(10.88003, 106.80635),
    zoom: 18,
  };
  var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
