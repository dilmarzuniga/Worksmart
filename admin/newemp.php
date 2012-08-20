<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro Empresas</title>
<link rel="stylesheet" type="text/css" href="../css/consultas.css" />
<style type="text/css">
<!--
.Estilo1 {
	color: #000000;
	font-weight: bold;
}
.Estilo5 {color: #99FF33}
-->
</style>
<body>
<blockquote>
  <blockquote>
    <blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <h1 align="left">EMPRESAS</h1>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote>
  </blockquote>
</blockquote>
<form id="form1" name="form1" method="post" action="inserts/i_empresa.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="594" height="323" border="0" align="center">
    <tr>
      <td width="128" height="33"><div align="right">Nombre Usuario * </div></td>
      <td width="210"><label>
        <input name="username" type="text" id="username"/>
        </label>      </td>
      <td width="65"><div align="right">E-mail</div></td>
      <td width="173"><input name="mail" type="text" id="mail" /></td>
    </tr>
    <tr>
      <td height="32"><div align="right">Password * </div></td>
      <td><input name="pwd" type="password" id="pwd" /></td>
      <td><div align="right">Tel&eacute;fono</div></td>
      <td><input name="tel" type="text" id="tel" /></td>
    </tr>
    <tr>
      <td height="32"><div align="right"><span class="Estilo5">Nombre Completo*</span></div></td>
      <td><label>
        <input name="nombre" type="text" id="nombre" />
      </label></td>
      <td><div align="right">Fax</div></td>
      <td><input name="fax" type="text" id="fax" /></td>
    </tr>
    <tr>
      <td height="33"><div align="right">Persona Contacto</div></td>
      <td><input name="contacto" type="text" id="contacto" /></td>
      <td><div align="right">Tipo</div></td>
      <td><input name="tipo" type="text" id="tipo" /></td>
    </tr>
    <tr>
      <td height="33"><div align="right">Direccion </div></td>
      <td><input name="dir" type="text" id="dir" /></td>
      <td><div align="right">Descripci&oacute;n</div></td>
      <td><input name="dsc" type="text" id="dsc" /></td>
    </tr>
    <tr>
      <td height="24"><div align="right">Departamento </div></td>
      <td><label>
        <select name="dpto" type="text" size="1" id="dpto">
          <option value="Ahuachap&aacute;n">Ahuachap&aacute;n</option>
          <option value="Santa Ana">Santa Ana</option>
          <option value="Sonsonate">Sonsonate</option>
          <option value="Chalatenango">Chalatenango</option>
          <option value="La Libertad">La Libertad</option>
          <option value="San Salvador">San Salvador</option>
          <option value="Caba&ntilde;as">Caba&ntilde;as</option>
          <option value="Cuscatl&aacute;n">Cuscatl&aacute;n</option>
          <option value="La Paz">La Paz</option>
          <option value="San Vicente">San Vicente</option>
          <option value="Usulut&aacute;n">Usulut&aacute;n</option>
          <option value="San Miguel">San Miguel</option>
          <option value="Moraz&aacute;n">Moraz&aacute;n</option>
          <option value="La Uni&oacute;n">La Uni&oacute;n</option>
        </select>
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="33">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="261" border="0" align="center">
    <tr>
      <td><div align="center" class="Estilo1">* campo obligatorio </div></td>
    </tr>
    <tr>
      <td><label>
          <div align="center">
            <input type="submit" name="Submit" value="INSERTAR" />
          </div>
        </label></td>
    </tr>
  </table>
</form>
<p align="center" class="style4">&nbsp;</p>
</body>
</html>
