<?php
if(isset($_REQUEST['func'])){
	$func=$_REQUEST['func'];
	if($func=='form2db'){
		$form=$_REQUEST['form'];
		echo $form;
	}
}
?>