function initMap() {
	var myLatLng = {lat: 45.524167, lng: -122.6816826};

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 14,
		center: myLatLng,
		scrollwheel: false
	});

	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'Gerding Theater at The Armory'
	});

	var contentString = '<div id="content">'+
		'<p><strong>Gerding Theater at The Armory</strong></p>'+
		'<p> ' + '128 NW 11th Ave Portland, OR 97209' +
		'</p>'+
		'</div>';

	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});

	marker.addListener('click', function() {
		infowindow.open(map, marker);
	});
}