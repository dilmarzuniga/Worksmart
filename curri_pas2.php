<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>WORK SMART</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
	<script type="text/javascript" src="unitpngfix.js"></script>
<![endif]-->
<style type="text/css">
<!--
.Estilo1 {
	font-size: 16px;
	font-weight: bold;
}
.Estilo2 {color: #666666}
-->
</style>
<script type="text/javascript" language="javascript">
	function confirmacion (pagina)
	{
		confirm("¿Esta seguro que desea abandonar esta página?");
		if(confirm=true)
		{
			window.location.href=pagina;
		}
		else
		{
			
		}
	}
	
	// ESTA ES LA FUNCION QUE VALIDA TODOS LOS TEXTBOX DE ESTA PAGINA A TRAVES DE EXPRESIONES REGULARES...
	
	var u, f, l, d, n, p, es, r1;//, pr1;//, tr1, er1, r2, pr2, tr2, er2;  //ACA EL PROBLEMA ES CON LA SEGUNDA COLUMNA DEL FORMULARIO... 
	function validar_curripas2(usu, fec, lug, du, ni, prof, stad, ref1)//, pref1)//, tref1, eref1, ref2, pref2, tref2, eref2)
{
	var usuario=/^[A-Za-zñÑáÁéÉíÍóÓúÚüÜ]{2,}/;
	var fecha_nac=/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
	var lugar_nac=/^[A-Za-zñÑáÁéÉíÍóÓúÚüÜ]{2,}/;
	var dui=/^[0-9]{8}-[0]{1}$/;
	var nit=/^[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}$/;
	var profesion=/^[A-Za-zñÑáÁéÉíÍóÓúÚüÜ]{2,}/;
	var estado_civil=/^[A-Za-zñÑáÁéÉíÍóÓúÚüÜ]{2,}/;
	var refencia1=/^[A-Za-zñÑáÁéÉíÍóÓúÚüÜ]{2,}/;
	
	/*var referencia_perso1=/^[A-Za-zñÑáÁéÉíÍóÓúÚüÜ]{2,}/;
	var profesion_ref1=/^[A-Za-zñÑáÁéÉíÍóÓúÚüÜ]{2,}/;*/
		
	u=usuario.test(usu);
	f=fecha_nac.test(fec);
	l=lugar_nac.test(lug);
	d=dui.test(du); 
	n=nit.test(ni);
	p=profesion.test(prof);
	es=estado_civil.test(stad);
	r1=referencia1.test(ref1);
	
	/*rp1=referencia_perso1.test(ref1);
	pr1=profesion_ref_perso1.test(pref1);*/
	
	if (!u | !f | !l | !d | !n | !p | !es | !r1)//| !r1 | !pr1)// | !tr1 | !er1 |!r2 | !pr2 |!tr2 | !er2) 
	
	{
		alert("Uno de los campos esta mal escrito, favor revisar, el campo es: ");
	}
	else
	{
		alert("Registro Exitoso");
	}	 
}
	
</script>
</head>
<body class="details">
<div class="wrap">
   
	
        
        <div id="menu">
            <ul>                                                                       
            <li><a href="Index.php">Inicio</a></li>
            <li><a href="Registrarse.php">Registrate</a></li>
            <li><a href="Empresas.php">Empresas</a></li>
            <li><a href="Contactanos.php">Cont&aacute;ctanos</a></li>
            <li><a href="Acerca de.php">Acerca de</a></li>
          
            </ul>
        </div>
  
  <div class="header">
    	 <div class="logo"><a href="Index.php"><br><br><br><p><img src="images/logo1.png" border="0" /></a></div>
</div> <!--Fin del encabezado-->
  
<div class="main_content">
    		<div class="left_content">
            
            	<h1>Formacion Academica </h1>
                
            	<p class="Estilo1">Paso 2 de 2</p>
				          	<p class="Estilo1">Estudios Realizados</p>
           	    <div class="contact_form"><div class="form_row">
                
           	    <label class="contact">Estudios B&aacute;sicos:</label>
				<FORM id="formcurri2" name="form2" method="post" action="inserts/curriculum2.php">
		            <input name="estudios" type="text" id="txtusuario"  size ="30"/>
		</div>  

                    <div class="form_row">
                    <label class="contact">Bachillerato: </label>
                    <input name="bachillerato" type="text" id="txtfecha" size ="30"/>
                    </div>
                    
                    <div class="form_row">
                    <label class="contact">Estudios Superiores:</label>
                    <input name="superiores" type="text" id="txtlugar" size ="30"/>
                    </div>

		   
    			<div class="form_row">
                    <label class="contact">Experiencia Laboral:</label>
                    <input name="experiencia" type="text" id="txtdui" size ="30"/>
                </div>
	
                <div class="form_row">
                    <label class="contact">Profesion:</label>
                    <input name="profesion" type="text" id="txtprofesion" size ="30"/>
                </div>
				
				</div>
           	    <div align="center"><a href="Index.php"><button><b> - Cancelar - </b></a>
			</div>
            </div> <!--End of left_content-->
                  
    		<div class="right_content">

                <h1>Datos Importantes</h1>
La informaci&oacute;n que usted ingresara en este momento es importante a la hora de realizar tramites.
<p>
<hr>
<div class="form_row">
                    <label class="contact"></label>
      </div>
				
          <div class="form_row">
                    <label class="contact">Referencia Personal:</label>
                    <input name="ref_personal" type="text" id="txtreferencia1"  size ="30"/>
</div>
  <div class="form_row">
                    <label class="contact">Profesion:</label>
                    <input name="profesion_referencia" type="text" id="txtprofesionref1"  size ="30"/>
</div>

  <div class="form_row">
                    <label class="contact">Tel. referencia personal:</label>
                    <input name="tel_referencia" type="text" id="txttelref1"  size ="30"/>
</div>
  <div class="form_row">
                    <label class="contact">Email ref. Personal:</label>
                    <p>
                      <input name="mail_referencia" type="text" id="txtemailref1"  size ="30"/>
                    </p>
                    <p>&nbsp;</p>
                    <p>
                      <input name="Bot&oacute;n" type="button" id="cdmValidar" value="Validar Datos" onclick="validar_curripas2(document.frmcurri_pas2.txtusuario.value,document.frmcurri_pas2.txtfecha.value,document.frmcurri_pas2.txtlugar.value,document.frmcurri_pas2.txtdui.value,document.frmcurri_pas2.txtnit.value,document.frmcurri_pas2.txtprofesion.value,document.frmcurri_pas2.txtestado.value,document.frmcurri_pas2.txtreferencia1.value);"/>
                      <input type="submit" name="Submit" value="Enviar" />
                    </p>
					</form>
                    <span class="Estilo2">He escrito correctamente mis datos</span></div>
  <p></div>
</p>
<P align="center">

<P>

</div> <!--End of right_content-->          
            <div></div>
<div class="clear"></div>
    </div><!--End of main_content-->
    
   
</div><!--End of wrap-->

<div class="footer">
	<div class="footer_content">
    	<div class="footer_tab1">
        	<h2>Cont&aacute;ctanos</h2>
        	<span class="email">Email:enterprise_solutionssv@gmail.com</span>
        	<div class="footer_info">
                <span class="orange">Tel&eacute;fono:</span>
                <p class="info">70088215</p>           
          </div> 
            <div class="footer_copyrights">
            <img src="images/logo_abajo.png" alt="" width="187" height="54" title="" /><br />
            &copy; 2009 All Rights Reserved
          </div>    
            
        
        </div> <!--End of footer_tab1-->
        
    	<div class="footer_tab2">
        	<h2>&iquest;Tu primera entrevista? Aqu&iacute; te decimos qu&eacute; hacer </h2>
            <div class="favorites_box">
                <span class="fav_nr">1</span>
                <p class="favorites">Forma correcta de crear tu curriculum Vitae, qu&eacute; hacer y qu&eacute; se debe evitar....<a href="#"> ver m&aacute;s</a> .                </p>           
          </div> 
            
<div class="favorites_box">
                <span class="fav_nr">2</span>
                <p class="favorites">Preparando tu entrevista de trabajo. Ac&aacute; de presentamos una gu&iacute;a completa desde qu&eacute; debes decir hasta... <a href="#">ver m&aacute;s </a></p>           
          </div>        
            
            <div class="favorites_box">
                <span class="fav_nr">3</span>
                <p class="favorites">Innovando de la mano de la tecnolog&iacute;a, VIDEOCURRICULUM en nuestro centro multimedia...<a href="#"> ver m&aacute;s </a></p>           
          </div>        
 
      </div> <!--End of footer_tab2--> 
        
        
        
    	<div class="footer_tab3">
        	<h2>Enlaces</h2>
                <div class="footer_links">
                    <ul>
                    <li><a href="Index.php" onclick="confirmacion('file:///C:/Users/Rodrigo/Desktop/Site/Index.php');">Inicio</a></li>
                    <li><a href="Registrarse.php" onclick="confirmacion('file:///C:/Users/Rodrigo/Desktop/Site/Registrarse.php');">Regístrate</a></li>
                    <li><a href="#" onclick="confirmacion('file:///C:/Users/Rodrigo/Desktop/Site/Empresas.php');">Ingresa tu empresa </a></li>
                    <li><a href="#">Buscar trabajo </a></li>
                    <li><a href="curri_pas1.php" onclick="confirmacion('file:///C:/Users/Rodrigo/Desktop/Site/curri_pas1.php');">Sube tu curriculum </a></li>
                    <li><a href="Tips2.php" onclick="confirmacion('file:///C:/Users/Rodrigo/Desktop/Site/Tips2.php');">Trucos y consejos </a></li>
                    <li><a href="Contactanos.php" onclick="confirmacion('file:///C:/Users/Rodrigo/Desktop/Site/Contactanos.php');">Contact&aacutectanos</a></li>
                    </ul>
                </div> 
        </div> <!--End of footer_tab3-->      
      
        
        
             
        
    <div class="clear"></div>
	</div> <!--End of footer_content-->
</div><!--End of footer-->

</body>
</html>