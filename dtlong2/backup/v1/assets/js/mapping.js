/*-------
Localtion
--------*/
function getLocation() {
	var x = document.getElementById("status");
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition);
	} else { 
		x.innerHTML = "Geolocation is not supported by this browser.";
	}
}

function showPosition(position) {
	//alert($('#lat').value);
	document.getElementById('lat').value=position.coords.latitude;
	document.getElementById('lon').value=position.coords.longitude;
	//document.itemForm.lat.value=position.coords.latitude;
	//document.itemForm.lon.value=position.coords.longitude;
	loc2mark(position.coords.latitude,position.coords.longitude);
}

function loc2mark(lat,lon){
	removemark();
	marker = new L.marker([lat,lon], {draggable:'true'}).addTo(map);
	map.panTo(new L.LatLng(lat, lon));
	map.setZoom(16);
	marker.on('dragend', function(event){
		marker = event.target;
		var position = marker.getLatLng();
		marker.setLatLng(new L.LatLng(position.lat, position.lng),{draggable:'true'});
		map.panTo(new L.LatLng(position.lat, position.lng));
		map.setZoom(16);
		//document.itemForm.lat.value=position.lat;
		//document.itemForm.lon.value=position.lng;
		document.getElementById('lat').value=position.lat;
		document.getElementById('lon').value=position.lng;
	});
}
function removemark(){
	if(marker!=''){
		map.removeLayer(marker);
	}
}

$(document).ready(function () {
	map = L.map('map',{
		fullscreenControl: {
			pseudoFullscreen: false
		}
	}).setView([10.78205, 106.67038], 9);
	var osmlyr = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 18,
		minZoom: 9,
		//attribution: 'OSM'
	//});
	}).addTo(map);
	
	var vetinhmap = L.tileLayer('http://mt0.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
		maxZoom: 18,
		minZoom: 9,
	});
	
	var baseMaps = {
		"Nền Vệ tinh": vetinhmap,
		"OpenStreetMap": osmlyr
	};
	/*var overlayMaps = {
		"Cities": cities
	};*/
	
	L.control.layers(baseMaps).addTo(map);
	
	newMarkerGroup = new L.LayerGroup();
	marker='';
	map.on('click', function(e){
	//map.once('click', function(e){
		//map.removeLayer(marker);
		removemark();
		marker = new L.marker(e.latlng, {draggable:'true'}).addTo(map);
		var coord = e.latlng.toString().split(',');
		var lat = coord[0].split('(');
		var lng = coord[1].split(')');
		//document.itemForm.lat.value=lat[1];
		//document.itemForm.lon.value=lng[0];
		document.getElementById('lat').value=lat[1];
		document.getElementById('lon').value=lng[0];
		//alert("You clicked the map at latitude: " + lat[1] + " and longitude: " + lng[0]);
		//alert(marker.getLatLng());
		marker.on('dragend', function(event){
			marker = event.target;
			var position = marker.getLatLng();
			marker.setLatLng(new L.LatLng(position.lat, position.lng),{draggable:'true'});
			map.panTo(new L.LatLng(position.lat, position.lng));
			//document.itemForm.lat.value=position.lat;
			//document.itemForm.lon.value=position.lng;
			document.getElementById('lat').value=position.lat;
			document.getElementById('lon').value=position.lng;
		});
	});
	
	//load huong dan
	//$('#huongdandiv').load('huongdandienthoai/index.html');
	
})