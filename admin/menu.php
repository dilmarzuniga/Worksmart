<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Work Smart</title>
<link rel="stylesheet" type="text/css" href="../css/consultas.css" />

<script type="text/javascript" src="stmenu.js"></script>
</head>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<br />
<font color="#006600" size="">

<?php 
session_start();
@$nombre=$_SESSION['nombre'];
if(strlen($nombre)==0){
echo("Inicie Sesion para continuar clic<A HREF=javascript:javascript:history.go(-1)>aqui</a> para regresar");
//echo("location:<A HREF=javascript:javascript:history.go(-1)>");
}
else{
echo("Bienvenido"); 
echo ($nombre);
 }
 ?>
 </font>
 <br />
 <a href="login.php" target="_parent">Cerrar Session</a>
<br>
<br>
<p>
  <script id="sothink_widgets:dwwidget_dhtmlmenu8_12_2010_4.pgt" type="text/javascript">
<!--
stm_bm(["menu0a7f",800,"","blank.gif",0,"","",0,0,250,50,1000,1,0,0,"","",0,0,1,1,"default","hand",""],this);
stm_bp("p0",[1,4,0,0,1,2,13,0,100,"progid:DXImageTransform.Microsoft.Fade(overlap=.5,enabled=0,Duration=0.40)",-2,"",-2,70,0,0,"#7F7F7F","#F2F2F2","",3,0,0,"#666666"]);
stm_ai("p0i0",[0,"Administrador","","",-1,-1,0,"","_self","","","","",13,0,0,"","",0,0,0,0,1,"#8AAEC6",0,"#8AAEC6",0,"","",3,3,0,0,"#FFFFFF","#FFFFFF","#003366","#003366","bold 8pt Arial","bold 8pt Arial",0,0],174,20);
stm_aix("p0i1","p0i0",[0,"Home","","",-1,-1,0,"main.html","mainFrame","","","","",0,0,0,"","",0,0,0,0,0,"#FFFFFF",1,"#B7CEE2",0,"fade.gif","",3,3,0,0,"#CCCCCC","#FFFFFF","#999999","#000000","8pt Arial","8pt Arial"],174,0);
stm_aix("p0i2","p0i0",[0,"Empresas"],174,20);
stm_aix("p0i3","p0i1",[0,"Ver Empresas","","",-1,-1,0,"empresas.php","mainFrame"],174,0);
stm_aix("p0i4","p0i1",[0,"Editar Empresas","","",-1,-1,0,"edit_empresas.php","mainFrame"],174,0);
stm_aix("p0i5","p0i1",[0,"Nueva Empresa","","",-1,-1,0,"newemp.php","mainFrame"],174,0);
stm_aix("p0i6","p0i0",[0,"Publico"],174,20);
stm_aix("p0i7","p0i4",[0,"Ver Usuarios","","",-1,-1,0,"ver_user.php"],174,0);
stm_aix("p0i8","p0i4",[0,"Editar Usuarios","","",-1,-1,0,"edit_user.php"],174,0);
stm_aix("p0i9","p0i4",[0,"Nuevo Usuario","","",-1,-1,0,"newuser.php"],174,0);
stm_aix("p0i10","p0i0",[0,"Administracion"],174,20);
stm_aix("p0i11","p0i4",[0,"Ver Administradores","","",-1,-1,0,"ver_admin.php"],174,0);
stm_aix("p0i12","p0i4",[0,"Nuevo Administrador","","",-1,-1,0,"new_admin.php"],174,0);
stm_ep();
stm_em();
//-->
</script>
</p>



</body>
</html>
