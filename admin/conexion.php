<?php
	$conexion=mysql_connect ('localhost','root','123456') or die (msg_errores('CS'));
    mysql_select_db ("empleos") or die (msg_errores('SBD'));
?>
