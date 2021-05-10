<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="crossorigin=""/>
<style>
#mapid {
    height: 100%; 
    }</style>
 <title>leaflet</title>
</head>
<body>
 <div id="mapid"></div>
</body>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script>
var mymap = L.map('mapid').setView([-5.3556197,105.2855505], 15);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
maxZoom: 18,
id: 'mapbox/streets-v11',
tileSize: 512,
zoomOffset: -1,
accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
}).addTo(mymap);

var marker = L.marker([-5.3556197,105.2855505]).addTo(mymap);

var circle = L.circle([-5.3556197,105.2855505], {
 color: 'yellow',
 fillColor: '#f03',
 fillOpacity: 0.5,
 radius: 500
 }).addTo(mymap);// lingkaran

var polygon = L.polygon([
[-5.359027, 105.322022],
[-5.360009, 105.309491],
[-5.372435, 105.309663],
[-5.372589, 105.32313],
]).addTo(mymap);//polygon

var popup = L.popup();

function onMapClick(e) {
popup
.setLatLng(e.latlng)
.setContent("You clicked the map at " + e.latlng.toString())
.openOn(mymap);
 }
 mymap.on('click', onMapClick);

marker.bindPopup("Rumah").openPopup();
circle.bindPopup("Rumah");
polygon.bindPopup("lapangan");
</script>

</html>
