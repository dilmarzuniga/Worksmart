<link rel="stylesheet" type="text/css" href="css/consultas.css" />
<?php
function msg_errores($tipo)
{
	switch($tipo)
	{
		//Fallo el Update
		case 'FU':
			$r = "<A HREF=javascript:javascript:history.go(-1)>
			Fallo al ACTUALIZAR, Revise sus credenciales <BR>O contacte al administrador del sistema";
			break;
		//Fallo el Insert
		case 'FI':
			$r = "<A HREF=javascript:javascript:history.go(-1)>
			Fallo al INSERTAR, Revise sus credenciales <BR>O contacte al administrador del sistema";
			break;
		//Fallo la eliminacion
		case 'E':
			$r= "<A HREF=javascript:javascript:history.go(-1)>
			Fallo la ELIMINACION, Revise sus credenciales o Contacte al administrador </a>";
			break;
		//Fallo la seleccion de la base de datos
		case 'SBD':
			$r = "<BR>No se puede seleccionar la base de datos, Contacte al Administrador del Sistema";
			break;
		//Fallo la conexion al servidor
		case 'CS':
			$r = "No se puede conectar con el servidor, Contacte al administrador";
			break;
		//Fallaron las validaciones, link para regresar a la pagina anterior
		case 'V':
			$r = "<A HREF=javascript:javascript:history.go(-1)>
			Revise los Errores<br>Regrese a la pagina anterior</A>";
			break;
		//Fallo el SELECT
		case 'FS':
			$r = "<div align = 'center'><A HREF=javascript:javascript:history.go(-1)>
			Fallo la consulta a la tabla. Revise sus permisos.
			<br>Contacte al administrador del Sistema
			<br>Regrese a la pagina anterior</A></div>";
			break;
		//Fallo Usuario Vacio
		case 'UV':
			$r = "<div align = 'center'><A HREF=javascript:javascript:history.go(-1)>
			Debe Digitar Nombre de Usuario</A></div>";
			break;
		//Fallo Password Vacio
		case 'PV':
			$r = "<div align = 'center'><A HREF=javascript:javascript:history.go(-1)>
			Debe Digitar Contraseña asignada</A></div>";
			break;
		//Fallo Sesion
		case 'FSE':
			$r = "<div align = 'center'>No Ha Iniciado Ninguna Session!</div>
			      <BR><BR><P ALIGN='CENTER'>Conexión finalizada</P><P ALIGN='CENTER'>
				  [ <A HREF='Index.php' target = '_parent'>Conectar</A> ]</P>\n";
			break;
		//Fallo Login
		case 'FC':
			$r = "<A HREF=javascript:javascript:history.go(-1)><div align = 'center'>Sus Credenciales no son correctas!</div>
			      <BR><BR><P ALIGN='CENTER'>Conexión finalizada</P><P ALIGN='CENTER'>
				  </a></P>\n";
			break;
	}
return $r;
}
//------------------------------------
function msg_varios($tipo)
{
	switch($tipo)
	{
		//Tabla Vacia
		case 'TV':
			$r = "<center>No se encontraron datos</center><BR>";
			break;
		//No Tiene Permisos para consulta
		case 'NPC':
			$r = "<center>Su usuario no tiene permisos para consultar la informacion</center><BR>";
			break;
	}
return $r;
}
?>
