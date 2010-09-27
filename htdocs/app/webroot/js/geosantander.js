var map = null;
var mgr = null;

function setupMap() {
  var myOptions = {
    zoom: 16, // 16,
    center: new google.maps.LatLng(43.462778, -3.805),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  map = new google.maps.Map(document.getElementById('map'), myOptions);
}
