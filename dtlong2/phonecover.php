<!DOCTYPE HTML>
<html>
<head>
    <title>Form Preview</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="https://html5up.net/massively" />
    <link rel="apple-touch-icon-precomposed" href="https://html5up.net/assets/icons/apple-touch-icon-precomposed.png" />
    <!--[if lte IE 8]><script src="https://html5up.net/assets/js/html5shiv.js" type="text/javascript"></script><![endif]-->
    <link rel="stylesheet" href="https://html5up.net/assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="https://html5up.net/assets/css/ie8.css" /><![endif]-->
	<script>
		function hahaha(){
			div1 = document.getElementById('li_div');
			//alert(div1.getAttribute("onclick"));​
			console.log(div1.getAttribute("onclick"));
		}
	</script>
</head>

<body id="demo" class="dark big-mobile" onload="hahaha();">
<input type="button" value="haha" onclick="hahaha();">
    <header id="demo-header">
        <div class="left">
            <h1><span>Form Preview</span></h1>
            <ul class="selector">
                <li class="active">Desktop</li>
                <li data-width="1040" data-height="768">Tablet</li>
                <li data-width="788" data-height="1000">Tablet (Portrait)</li>
                <li data-width="375" data-height="568" id="li_div">Mobile</li>
            </ul>
        </div>
    </header>
    <div id="demo-iframe-wrapper"><iframe id="demo-iframe" src="form2json.html" width="100%">-</iframe></div>
    <!--[if lte IE 8]><script src="https://html5up.net/assets/js/respond.js" type="text/javascript"></script><![endif]-->
    <script src="https://html5up.net/assets/js/bundle.js"></script>
</body>

</html>