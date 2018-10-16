---
title: 'Mapping from external JSON'
date: '2018-09-18'
twig_first: true
process:
    markdown: true
    twig: true
template: 'item'
---

It's only a proof of concept, so far.

But I'm getting there (which is as it should be for mapping)

===

<div id="mapid" style="width: 100%; height: 400px;"></div>
<script>

var myTiles = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
	maxZoom: 18,
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
		'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	id: 'mapbox.streets'
}); // Creates the actual map tiles .addTo(mymap) remnoved

$.getJSON("http://localhost:8888/grav-admin/walks/mapping-test/early.json", function(data) {
	var geojson = L.geoJson(data, {
//		onEachFeature: function (feature, layer) { Don't need for now
//			layer.bindPopup(feature.properties.name); Don't need for now
//		}
});

var map = L.map('mapid').fitBounds(geojson.getBounds());
	myTiles.addTo(map);
	geojson.addTo(map);
});
</script>

