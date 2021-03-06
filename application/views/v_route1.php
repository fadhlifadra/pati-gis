<div id="mapid" style="width: 100%; height: 500px;"></div>

<script>
    var map = L.map('mapid').setView([-6.75347, 111.03999], 15);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
    }).addTo(map);

    L.Routing.control({
    waypoints: [
        L.latLng(-6.7537,111.0399),
        L.latLng(-6.7426,111.0315)
    ]
    }).addTo(map);
</script>