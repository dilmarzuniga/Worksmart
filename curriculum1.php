<link rel="stylesheet" href="../admin/css/estilo.css">
<?php
session_start();
include "../mensajes.php";
require_once 'admin/conexion.php';

$error=false;
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$telefono=$_REQUEST['telefono'];
$correo=$_REQUEST['correo'];
$direccion=$_REQUEST['direccion'];
$pais=$_REQUEST['pais'];
$celular=$_REQUEST['celular'];
$direccion2=$_REQUEST['direccion2'];
$mensaje=$_REQUEST['mensaje'];
$dui=$_REQUEST['dui'];
//$sexo=$_REQUEST['sexo'];
$sexo='sexo';
//$username=$_SESSION['username'];


	/*$conexion = mysql_connect ('localhost','root','') or die (msg_errores('CS'));
    
    mysql_select_db ("empleos") or die (msg_errores('SBD'));*/
    $comando = "Insert into curriculum(nombres,apellidos,telefono,correo,direccion,pais,celular,direccion2,mensaje,dui,sexo) values('$nombre','$apellido',$telefono,'$correo','$direccion','$pais',$celular,'$direccion2','$mensaje','$dui','$sexo')";
    $consulta = mysql_query($comando,$conexion) or die (msg_errores('FI')) ;
    mysql_close($conexion);
	header("location:../curri_pas2.php");
?>