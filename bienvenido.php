<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Home</title>
		<link rel="stylesheet" href="css/home.css" />
	</head>
	<body>
	<div id="ad">
		<p>Bienvenido, Gracias por registrarte!</p>
    	<p>
    		Para empezar tu b&uacute;squeda por favor inicia sesion
    		<br />
    		Recuerda Tambi&eacute;n llenar tu curriculum 
    	</p>
    </div>
   	<form class="borde" action="validaUser.php" name="x" method="POST" enctype="multipart/form-data">
  			<p class="login">
				Escriba su Usuario y Contrase&ntilde;a para iniciar sesion
				<br />
				<br />
				Nombre de Usuario:
  				<br />
  				<label>
  					<input name="usuario" type="text" id="usuario" />
  				</label>
  				<br />
				Password:
				<br />
				<label>
  					<input name="pass" type="password" id="pass" />
				</label>
				<br />
  				<input name="aceptar" type="submit" id="aceptar" value="Aceptar" />
    		</p>
		</form>
		<p>
			<a href="modcurri.php">curriculum</a>
		</p>
</body>
</html>
