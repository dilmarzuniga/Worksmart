<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<SCRIPT src="./slip_venregistro_files/jquery.tools.min.js"></SCRIPT>
	 

	<!-- standalone page styling (can be removed) -->
	<LINK rel="stylesheet" type="text/css" href="./slip_venregistro_files/standalone.css">	


	<!-- accordion styling -->	
	<LINK rel="stylesheet" type="text/css" href="./slip_venregistro_files/tabs-accordion-horizontal.css"> 
	
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>..:::Registro - Usuarios:::..</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
	<script type="text/javascript" src="unitpngfix.js"></script>
<![endif]--> 
<style type="text/css">
<!--
.Estilo2 {font-size: 18px}
.Estilo4 {
	font-size: 18px;
	color: #0000FF;
	font-weight: bold;
}
-->
</style></head>
<script language="javascript" type="text/javascript">
//funcion que valida el checkbox
function validacion()
{
	if(document.frmregistro.check_aceptar.checked==true)
	{	
		document.frmregistro.cmd_aceptar.disabled=false;
		
	}
	else if(document.frmregistro.check_aceptar.checked==false)
	{
		document.frmregistro.cmd_aceptar.disabled=true;
		
	}	
}

</script>
<body class="details">
<div class="wrap">
<div class="header">
    	<div class="logo"><a href="Index.php"><img src="images/logo1.png" alt="" width="350" height="114" vspace="27" border="0" title="" /></a></div>
        
        <div id="menu">
            <ul>                                                                       
            <li><a href="Index.php">Inicio</a></li>
            
            <li class="selected"><a href="Registrarse.php">Registrate</a></li>
            
            <li><a href="Empresas.php">Empresas</a></li>
            <li><a href="Contactanos.php">Cont&aacute;ctanos</a><a href="Acerca de.php">Acerca de</a>
            <li></li>
            </ul>
        </div>
           
    </div> <!--End of header-->

    
    <div class="main_content">
	  <div class="left_content">
	    <h1>Smart Work</h1>

            	<p><h4>Para iniciar solamente tienes que registrarte, para crear tu cuenta y agregarte a nuestra base de datos.</span></p></h4>
				
            <legend>Reglas antes de continuar</legend> <p>
				
				<table cellpadding="0" cellspacing="3" border="0" width="100%"> 
				<form action="Nuevo_Usuario.php" name="frmregistro">
				<tr> 
					<td>Para seguir, debes de estar de acuerdo con las siguientes normas:</td> 
				</tr> 
				<tr> 
					<td> 
						<div class="page" style="border:thin inset; padding:6px; height:175px; overflow:auto"> 
 
							
 
							<!-- regular forum rules --> 
							<p><strong>Reglas del Foro</strong></p> 
 
<p>El registro a este sitio es gratuito! Nosotros insistimos en que respetes las normas y las políticas detalladas mas abajo. Si aceptas estas condiciones, por favor marca la casilla 'Acepto' y pulsa el botón 'Registrar'.
Si quieres cancelar el registro, haz clic <a href="Index.php">aquí</a> para volver al índice del foro.</p> 
							<p>Aunque los administradores y moderadores de esta web site "Smart Work" intentarán editar todos los mensajes inaceptables, es imposible revisarlos todos .  Todos los mensajes expresan el punto de vista del autor y ni los propietarios de SmartWork aceptan responsabilidad por el contenido de cualquier mensaje.</p> 
 
<p>Aceptando estas reglas, garantizas que no escribirás ningún mensaje que sea obsceno, vulgar, sexualmente orientado, odioso o de algún otro modo que infrinja cualquier regla.</p> 
 
<p>Los propietarios de este sitio - SmartWork se reservan el derecho de eliminar, editar, mover o cerrar cualquier informacion por cualquier razón.</p> 
<p>Esperamos que Disfrute de nuestros beneficios que le ofrecemos, gracias a esto estamos ayudando a muchas personas a encontrar un trabajo estable dentro de el pais correspondiente. Le deseamos mucha suerte. </p> 

<p>Gracias Por Preferirnos</p>
<p>Ate. El Equipo de WorkSmart Organization.</p>


							<!-- regular forum rules --> 
 
						</div> <p>
						<div><label for="cb_rules_agree"><input type="checkbox" name="acepto" id="check_aceptar" value="1"   onclick="validacion();" /><strong>He leído, y estoy de acuerdo en cumplir las normas de SmartWork Org. </strong></label></div> 
						<p><p>
						<input type="submit" class="button" value="Registrarse" name="cmd_aceptar" id="cmd_aceptar" disabled="true" onclick="document.frmregistro.check_aceptar.checked=false;"  accesskey="s" /> 
					</td> 
				</tr> 
				</form>
				</table> 
			</fieldset> 
		</div> 

     
	
    		<!--End of left_content-->
            
    		<div class="right_content">

              <h1>¿O Prefieres Iniciar Sesi&oacute;n? </h1>
             	<p><h4>Si prefieres puede iniciar con tu nombre de usuario y tu cuenta ID: que posees para observar tu actividad de la informacion que te han enviado las empresas.</span></p></h4>
 <center>
	<IMG src="./images/people.png"  border=0 >

<h3 align=right>
<form id="form1" name="form1" method="post" action="validaUser.php">
				  <table width="200" border="0">
                    <tr>
                      <td>Usuario</td>
                      <td><label>
                        <input type="text" name="usuario" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>Contrase&ntilde;a</td>
                      <td><label>
                      <input type="password" name="pass" />
                      </label></td>
                    </tr>
                  </table>
                  <label>
                  <div align="center"><p><p>
                    <input type="submit" name="Submit" value="Iniciar Sesion" />
                  </div>
                  </label>
				</form>
				</center>
      </div> <!--End of right_content-->          
            <div class="clear"></div>
    </div><!--End of main_content-->
  
    
</div><!--fin-->

<div class="footer">
	<div class="footer_content">
      


<div  align=Center  >

<h2>¿Porque estar Registrado? ¿Mis primeros Pasos?</h2>


<DIV id="accordion">

	<!-- accordion header #1 -->
	<IMG src="./slip_venregistro_files/streaminge.png" class="current" align="center">
	
	<DIV style="width: 200px; display: block; ">
		<H3>Confianza</H3>
		<P>
			Antes que nada queremos de que estes totalmente seguro que tus datos estan en buenas manos.
		</P>
	</DIV>
	
	<IMG src="./slip_venregistro_files/flash.png">
	
	<DIV>
		<H3>Seguridad</H3>
		<P>
			Estos datos no se dibulgaran a Nadie en particular. Queremos que tus datos esten lo mas seguro posible.
		</P>
	</DIV>

	<IMG src="./slip_venregistro_files/streaming.png">
	
	<DIV>
		<H3>Estamos para Servirte</H3>
		<P>
			El empleo es lo que mas nos interesa darte, por tales razones siempre estamos a tu lado apoyandote.
		</P>
	</DIV>	

	<IMG src="./slip_venregistro_files/gnome_fs_fifo.png" class="current" align="center">
	
	<DIV >
		<H3>Rapidez</H3>
		<P>
			Accion rapida de empleos al instante, y ademas confiamos en que encuentres ese empleo que andas buscando.
		</P>
	</DIV>

</DIV>
<!-- activate tabs with JavaScript -->
<SCRIPT>
$(function() {

$("#accordion").tabs("#accordion div", {
	tabs: 'img', 
	effect: 'horizontal'
});
});
</SCRIPT>
<p><br>
    <h4>Copyright SmartWork Todos los derechos reservados</h4>

	
		
        </div> <!--End of footer_tab1-->
        
     
        
        
        
             
        



</body>
</html>