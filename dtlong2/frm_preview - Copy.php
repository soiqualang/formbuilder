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
    <link href="assets/css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<!--them map-->
	<link rel="stylesheet" href="nongnghiepangiang/css/leaflet.css" />
	<script src="nongnghiepangiang/js2/leaflet.js"></script>
	<script src="nongnghiepangiang/js2/jquery.min.js"></script>
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
<?php
	//echo 'hahaha';
	if(isset($_REQUEST['txtfrm'])){
		$txtfrm=$_REQUEST['txtfrm'];
		echo $txtfrm;
	}
?>
<script data-main="assets/js/main.js" src="assets/js/lib/require.js" ></script>
  </body>
</html>