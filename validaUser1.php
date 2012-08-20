<?PHP
session_start();
$ho = 'localhost';
$pa = '';
$us='root';
$bdd='empleos';

//$ho = 'mysql2.000webhost.com';
//$pa = 'scei1907';
//$us='a1813721_scei';
//$bdd='a1813721_scei';

//$en = $_REQUEST['EN'];
require_once 'admin/conexion.php';

echo("<link rel='stylesheet' href='css/estilo.css'>");
include("mensajes.php");
// Obtener valores introducidos en el formulario
$usuario = $_REQUEST['usuario'];
$pass = $_REQUEST['pass'];
$error = false;
// nombre usuario
if (trim($usuario) == "")
	{
		echo(msg_errores('UV'));
		$error = true;
	}
// password
if (trim($pass) == "")
{
	echo msg_errores('PV');
	$error = true;
}

// Si los datos son correctos, procesar formulario
if (isset($usuario) && $error==false)
{
	/*$conexion = mysql_connect ('localhost','root','') or die (msg_errores('CS'));
	mysql_select_db ($bdd) or die (msg_errores('SBD'));*/
	$salt = substr ($usuario, 0, 1);
    $clave_crypt = crypt ($pass, $salt);
    $instruccion = "select userName, nombres, apellidos, password, nivel from usuarios where userName = '$usuario'" . " and password = '$clave_crypt'";
	//print($instruccion);
    $consulta = mysql_query ($instruccion, $conexion) or die (msg_errores('FS'));
    $nfilas = mysql_num_rows ($consulta);
	$resultado = mysql_fetch_array ($consulta);

   mysql_close ($conexion);
	if ($nfilas == 1)
	{
        // Con register_globals On
        //session_register ('usuario_valido');
        // Con register_globals Off
        $_SESSION['usuario_valido'] = $resultado[3];//nombre db
        $_SESSION['nivel'] = $resultado[7];//nivel en db
		$_SESSION['ho'] = $ho;
		$_SESSION['com'] = $r[0]; //username sb

		$_SESSION['us'] = $us;
		$_SESSION['bdd'] = $bdd;
		$_SESSION['pa'] = $pa;
		header("location: admin/logemp.html");
	}
	else{echo(msg_errores('FC'));}
}
//
?>

