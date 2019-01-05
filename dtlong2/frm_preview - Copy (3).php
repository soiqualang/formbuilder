<?php
header('X-XSS-Protection:0');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Form Builder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap-responsive.min.css" rel="stylesheet">
	<!--them map-->
	<link rel="stylesheet" href="nongnghiepangiang/css/leaflet.css" />
	<script src="nongnghiepangiang/js2/leaflet.js"></script>
	<script src="nongnghiepangiang/js2/jquery.min.js"></script>
	<!--phone review-->
	<link rel="stylesheet" href="devices.css-master/assets/devices.min.css" type="text/css">
	
	
	<link href='nongnghiepangiang/js2/leaflet_fullscreen/leaflet.fullscreen.css' rel='stylesheet' />
	<script src='nongnghiepangiang/js2/leaflet_fullscreen/Leaflet.fullscreen.min.js'></script>
	
	<link href="assets/css/switch.css" rel="stylesheet">
	<script src='assets/js/redrose.js'></script>
	<style>
	#map {
		height: 300px;
		width: 100%;
	}
	.leaflet-left,.leaflet-top,.leaflet-right,.leaflet-left,.leaflet-bottom {
		z-index: 0;
	}
	</style>
	<script src='assets/js/mapping.js'></script>
  </head>
  <body>
  <div class="marvel-device iphone5s silver">
		<div class="top-bar"></div>
		<div class="sleep"></div>
		<div class="volume"></div>
		<div class="camera"></div>
		<div class="sensor"></div>
		<div class="speaker"></div>
		<div class="screen" style="overflow-y: scroll;">
			<?php
				//echo 'hahaha';
				if(isset($_REQUEST['txtfrm'])){
					$txtfrm=$_REQUEST['txtfrm'];
					echo $txtfrm;
				}
			?>
		</div>
		<div class="home"></div>
		<div class="bottom-bar"></div>
	</div>
  </body>
</html>