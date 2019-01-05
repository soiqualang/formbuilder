<?php
include('functions/configtion.php');
include('functions/function.php');
include('functions/lib.php');

if(isset($_REQUEST['func'])){
	$func=$_REQUEST['func'];
	if($func=='form2db'){
		$formbase64=$_REQUEST['frmbase64'];
		//echo base64_decode($frmbase64);
		$iduser=1;
		$field=array('iduser','formbase64');
		$value=array($iduser,$formbase64);
		insert_table('list_forms',$field,$value,$connection);
		echo 'Đã lưu';
	}
}
?>