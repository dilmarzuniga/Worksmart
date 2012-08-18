<link rel="stylesheet" href="../admin/css/estilo.css">
<?php
session_start();
include "../mensajes.php";
require_once '../admin/conexion.php';

$error=false;
$nombre=$_REQUEST['name'];
$username=$_REQUEST['username'];
$pwd=$_REQUEST['pwd'];
$pwd2=$_REQUEST['pwd2'];
$correo=$_REQUEST['mail'];
$nivel=3;
$nom=0;
$pw=0;
$usr=0;


if ($username=='')
{
    $error = true;
    $usr=1;
}

if ($nombre=='')
{
    $error = true;
    $nom=1;
}
if ($pwd=='')
{
    $error = true;
    $pw=1;
}
if ($pwd2=='')
{
    $error = true;
    $pwd=1;
}
if ($pwd != $pwd2)
{
    $error = true;
    $pwd=2;
}


if($_POST["enviado"]==1){

        if($_POST["captcha"]==$_SESSION["captcha"])
		{ /* comparamos si el captcha  enviado por el usuario es igual al generado y almacenado en la sesión */
               echo "Eres un humano!";
        }
		else
		{

               echo "Eres un Bot!";
			   $error=true;
        }
}
if ($error == true)
{
    header("location:../Nuevo_Usuario.php?e_name=1&e_pwd=$pw&e_usr=$usr");
}

else
{
    $salt = substr ($username, 0, 1);
	$pwd_crypt = crypt ($pwd, $salt);
	
    $comando="Insert into usuario(userName,nombre,password,nivel) values('$username','$nombre','$pwd_crypt',$nivel)";
    $consulta = mysql_query($comando,$conexion) or die (mysql_error()) ;
	$comando2="Insert into curriculum (username) VALUES ('$username')";
   $consulta2 = mysql_query($comando2,$conexion) or die (mysql_error()) ;
   mysql_close($conexion);
   //session_start();
	header("location:../bienvenido.php");
}
?>