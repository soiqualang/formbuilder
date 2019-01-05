<?php
/**
 * Licensed under Creative Commons 3.0 Attribution
 * Copyright Adam Wulf 2013
 */

include("config.php");
include("include.classloader.php");

$classLoader->addToClasspath(ROOT);


$mysql = new MySQLConn(DATABASE_HOST, DATABASE_NAME, DATABASE_USER, DATABASE_PASS);

$db = new JSONtoMYSQL($mysql);

$txt='{"textinput-0":"1111","selectbasic-0":"Làm đòng","filebutton-0":"C:\\fakepath\\Anh_Khu_Do_Thi_Binh_Nguyen_2.jpg","filebutton-1":"","filebutton-2":"","imgfilebutton-0":"","imgfilebutton-1":"","imgfilebutton-2":""}';
$txt=str_replace('\\', '/', $txt);
// create some json
$obj = json_decode($txt);

// save it to a table
$db->save($obj, "app1");


?>