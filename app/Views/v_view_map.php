<div id="map" style="width: 900px; height: 400px;"></div>

<script>

	const map = L.map('map').setView([-8.17148348315624, 113.70093706604453], 13);

	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	

</script>