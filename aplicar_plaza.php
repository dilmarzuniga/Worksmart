<?php
$id_plaza=$_GET['id'];
@$error=$_GET['error'];
?>
<link rel="stylesheet" href="css/consultas.css" />
<FORM CLASS="borde" ACTION="validar.php?id=<?php echo $_GET['id']?>" NAME="x" METHOD="POST" ENCTYPE="multipart/form-data">
  <p>
  
<table width="346" height="318" border="0" align="center" cellpadding="1" cellspacing="1">
<tr>
  <td height="34">&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td height="188">&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td height="32" colspan="2"><p>Para aplicar a esta plaza Escriba su usuario y contrase&ntilde;a</p>
    <br><?php echo $error?></td>
  </tr>
<tr>
<td width="185" height="34">Nombre de Usuario: </td>
<td width="154"><label>
  <input name="usuario" type="text" id="usuario" />
</label></td>
</tr>

<tr>
<td>Password:</td>
<td><label>
  <input name="pass" type="password" id="pass" />
</label></td>
</tr>
</table>
<table width="261" border="0" align="center">
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <input name="aceptar" type="submit" id="aceptar" value="Aceptar" />
    	</div>
	</td>
  </tr>
</table>

</FORM>