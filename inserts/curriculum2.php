<link rel="stylesheet" href="../admin/css/estilo.css">
<?php
session_start();
include "../mensajes.php";
require_once '../admin/conexion.php';

$error=false;
$estudios=$_REQUEST['estudios'];
$bach=$_REQUEST['bachillerato'];
$superiores=$_REQUEST['superiores'];
$experiencia=$_REQUEST['experiencia'];
$profesion=$_REQUEST['profesion'];
$refper=$_REQUEST['ref_personal'];
$profref=$_REQUEST['profesion_referencia'];
$telref=$_REQUEST['tel_referencia'];
$mailref=$_REQUEST['mail_referencia'];

	/*$conexion = mysql_connect ('localhost','root','') or die (msg_errores('CS'));
    mysql_select_db ("empleos") or die (msg_errores('SBD'));*/
	$ver_user="Select * from curriculum order by id_curriculum";
	$consulta1 = mysql_query($ver_user, $conexion) or die (msg_errores('FS'));
	$resultado = mysql_fetch_array ($consulta1);
	$curri=$resultado[0];
	
	
    $comando = "Insert into curriculum(estudios_basicos,bachillerato,est_superiores,exp_laboral,profesion,ref_personal,prof_ref,tel_ref,mail_ref) values ('$estudios','$bach','$superiores','$experiencia','$profesion','$refper','$profref','$telref','$mailref')";
    $consulta = mysql_query($comando,$conexion) or die (msg_errores('FI'));
    mysql_close($conexion);
	header("location:../curri_pas.html");
?>