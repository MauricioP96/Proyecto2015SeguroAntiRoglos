<?php
require_once('../modelo/consulta_cuotas_de_alumno_para_API.php');
//$origin=$_SERVER['HTTP_ORIGIN'];
header("Access-Control-Allow-Origin:*");
if(!empty($_REQUEST['dni'])&&(!empty($_REQUEST['anio']))){
	$cuotas_pagas=consultar_cuotas_pagas_de_alumno($_REQUEST['dni'],$_REQUEST['anio']);
	echo json_encode($cuotas_pagas);
	//echo '[{"fecha":"2015-11-17","numero":"123"},{"fecha":"2015-11-03","numero":"22"},{"fecha":"2015-11-03","numero":"345"}]';
}
else{
	echo 'no envie parametros';
}

?>