<?php

/**
 * This file was created by the Form Tools Form Builder module.
 */
require_once('D:\sync\websvr\xampp\formbuilder\formtools/global/library.php');
use FormTools\Core;
Core::init(array("auto_logout" => false));
$root_dir = Core::getRootDir();
$published_form_id = 1;
$filename  = "test1.php";
require_once("$root_dir/modules/form_builder/form.php");