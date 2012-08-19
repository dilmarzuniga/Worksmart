<link rel="stylesheet" href="../admin/css/estilo.css">
<?php
session_start();
include "../mensajes.php";
require_once '../admin/conexion.php';

$error=false;
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$nacimiento=$_REQUEST['nacimiento'];
$telefono=$_REQUEST['telefono'];
$dui=$_REQUEST['dui'];
$nit=$_REQUEST['nit'];
$direccion=$_REQUEST['direccion'];

$celular=$_REQUEST['celular'];
$direccion2=$_REQUEST['direccion2'];
$estado=$_REQUEST['estado'];
$correo=$_REQUEST['correo'];
$pais=$_REQUEST['pais'];
$mensaje=$_REQUEST['mensaje'];
$sexo=$_REQUEST['sexo'];


	$ver_user="Select * from curriculum order by id_curriculum";
	$consulta1 = mysql_query($ver_user, $conexion) or die (msg_errores('FS'));
	$resultado = mysql_fetch_array ($consulta1);
	$curri=$resultado[0];
	
	
    $comando = "Insert into curriculum(nombres, apellidos, fecha_nacimiento, telefono, dui, nit, direccion, celular, direccion2,estado_civil,correo,pais,mensaje_personal,sexo) values ('$nombre','$apellido','$nacimiento','$telefono','$dui','$nit','$direccion','$celular','$direccion2','$estado','$correo','$pais','$mensaje','$sexo')";// WHERE (username='$curri')";
    $consulta = mysql_query($comando,$conexion) or die (msg_errores('FI'));
    mysql_close($conexion);
	header("location:../curri_pas2.php");
?>