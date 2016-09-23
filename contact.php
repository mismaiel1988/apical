<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Apical</title>
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/examples.css" />
	<link rel="shortcut icon" href="/imgs/logo.png" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<script src="js/jquery%20tabs/tabs.js"></script>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="js/javascript.js"></script>
	<script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
	<script type="text/javascript" src="js/examples.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['firstPage'],
				sectionsColor: ['#4A6FB1'],
				autoScrolling: false,
				css3: true,
				fitToSection: false
			});
		});
	</script>
	<script type="text/javascript">
		google.maps.event.addDomListener(window, 'load', init);

		function init() {
			var mapOptions = {
				zoom: 13,
				center: new google.maps.LatLng(37.481603, -122.203364), // New York
				styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#08304b"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#146474"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#021019"}]}],
				scrollwheel: false
			};

			var mapElement = document.getElementById('map');

			var map = new google.maps.Map(mapElement, mapOptions);

			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(37.481603, -122.203364),
				map: map,
				title: 'Snazzy!'
			});
		}
	</script>
</head>
<body>

<div class="pk">
	<div class="contact">
		<?php include 'menu.php';?>
		<div style="margin-top:235px;text-align: -webkit-center;width: 70%;position: absolute;font-size: 64px;font-weight: bold;margin-left: 15%;color:#4d4e4c;">
			Contact Us
		</div>
	</div>

	<div style="padding: 60px;">
		<div style="color:#9fa09e;line-height: 60px;">Mountain View</div>
		<div style="width:245px;margin-bottom:15px;">
			2971 Spring St,
			Redwood City, CA 94063
		</div>
		<div style="width:260px;">
			+1 650 967 1030
			info@piclinstr.com
		</div>
	</div>

	<div id="map"></div>

	<div style="background-color: #58595B;text-align: center;">
		<img style="width:100px;margin-top:20px;" src="imgs/footer_logo@2x.png">
		<div style="color: white;font-size: 12px;padding-bottom:20px;">2971 Spring St., Redwood City, CA 94063</div>
	</div>
</div>
</body>
</html>