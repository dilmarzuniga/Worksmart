<?php


require_once("admin/conexion.php");
//tomando datos
$nombre_empresa = $_POST['nombre_empresa']; 
$encargado = $_POST['encargado']; 
$telefono = $_POST['telefono']; 
$fax = $_POST['fax']; 
$email = $_POST['email'];
$web = $_POST['web'];  
$tipo_empresa = $_POST['tipo_empresa']; 

$direccion = $_POST['direccion'];
$departamento = $_POST['departamento'];


$contra1 = $_POST['contra'];
$contra2 = $_POST['contra2'];

// validaciones

$contra_encryptada = md5($contra1);


$qr = "insert into empresas values('" .$nombre_empresa."','".$nombre_empresa."','".$contra_encryptada."','".$encargado."','".$direccion."','".$departamento."','".$email."','".$telefono."','".$fax."','".$tipo_empresa."','".$tipo_empresa."',2);";

// ejecutando sentencia
mysql_query($qr);

?>
