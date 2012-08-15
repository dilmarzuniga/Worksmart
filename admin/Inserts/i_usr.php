<link rel="stylesheet" href="../../css/consultas.css">
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php
session_start();
include "../../mensajes.php";

$error = false;
$username = $_REQUEST['username'];
$nombre = $_REQUEST['nombre'];
$pwd = $_REQUEST['pwd'];
$nivel = $_REQUEST['nivel'];

if ($username=='')
{
    $error = true;
    $errores["codigo"]="El Campo <strong>NOMBRE DE USUARIO</strong> es Obligatorio";
}
if ($nombre=='')
{
    $error = true;
    $errores["nombre"]="El Campo <strong>NOMBRE</strong> es Obligatorio";
}
if ($pwd=='')
{
    $error = true;
    $errores["pwd"]="El Campo <strong>PASSWORD</strong> es Obligatorio";
}
if (!is_numeric($nivel) or $nivel=='')
{
    $error = true;
    $errores["nivel"]="El Campo <strong>NIVEL</strong> es Obligatorio y debe ser número entero";
}
if ($error == true)
{
    print("<STRONG>DATOS CON ERRORES</STRONG><br>");
    print($errores['codigo']."</BR>");
    print($errores['nombre']."</BR>");
    print($errores['pwd']."</BR>");
    print(msg_errores('V')) ;
}
else
{
    $salt = substr ($username, 0, 1);
	$pwd_crypt = crypt ($pwd, $salt);
	
	
	//$conexion = mysql_connect ($_SESSION['ho'], $_SESSION['us'], $_SESSION['pa'])
	//or die (msg_errores('CS'));
	$conexion = mysql_connect ('localhost','root','') or die (msg_errores('CS'));
    
    mysql_select_db ("empleos") or die (msg_errores('SBD'));
    $comando = "Insert into usuario(userName,nombre,password,nivel) values('$username','$nombre','$pwd_crypt',$nivel)";
    $consulta = mysql_query($comando,$conexion) or die (msg_errores('FI')) ;
    mysql_close($conexion);
	if ($nivel==3){
	header("location:../newuser.php");
	}
	else if($nivel==1)
	{
	header("location:../new_admin.php");
	}
	
}
?>