<link rel="stylesheet" href="../css/estilo.css">
<?php
session_start();
include "../../mensajes.php";

$error = false;
$username = $_REQUEST['username'];
$pwd = $_REQUEST['pwd'];
$nombre = $_REQUEST['nombre'];
$persona = $_REQUEST['contacto'];
$dir= $_REQUEST['dir'];
$depto= $_REQUEST['dpto'];
$email= $_REQUEST['mail'];
$tel= $_REQUEST['tel'];
$fax= $_REQUEST['fax'];
$tipo= $_REQUEST['tipo'];
$dsc= $_REQUEST['dsc'];
$nivel = $_REQUEST['nivel'];

if ($username=='')
{
    $error = true;
    $errores["codigo"]="El Campo <strong>NOMBRE DE USUARIO</strong> es Obligatorio";
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
    print($errores['nivel']."</BR>");
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
   // $comando = "Insert into empresas(id_empresa,nombre,password, persona_contacto, direccion, departamento, email, telefono, fax, tipo, descripcion) values('$username','$nombre','$pwd_crypt',$persona, $dir, $depto, $email, $tel, $fax, $ tipo, $dsc)";
    
	$comando = "insert into empresas('id_empresa') values ($username)";

	$consulta = mysql_query($comando,$conexion) or die (msg_errores('FI')) ;
    mysql_close($conexion);
	header("location:../newemp.php");
}//fin else
?>