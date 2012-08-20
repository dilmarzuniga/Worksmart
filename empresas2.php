<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Empresas</title>
<link rel="stylesheet" type="text/css" href="css/consultas.css">



</head>

<body>



<h1 align="center">Empresas Asociadas</h1>

<?php 
session_start();
include("consultas.php");
c_empresas();
 ?>
 
<p>&nbsp;</p>
<center>
<A HREF=javascript:javascript:history.go(-1)>
Atr&aacute;s</a>
</center>
</body>
</html>
