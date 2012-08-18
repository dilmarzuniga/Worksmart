<?php
	$conexion=mysql_connect ('localhost','root','') or die (msg_errores('CS'));
    mysql_select_db ("empleos") or die (msg_errores('SBD'));
?>