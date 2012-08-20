<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>WORK SMART</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
	<script type="text/javascript" src="unitpngfix.js"></script>
<![endif]--> 
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
	
	var n, a, t, c, cel, d, i;
	function validar_curripas1(nom, ape, tel, mail, celu, direc, iden)
{
	var nombres=/^[A-Za-zñÑáÁéÉíÍóÓúÚüÜ]{2,}/;
	var apellidos=/^[A-Za-zñÑáÁéÉíÍóÓúÚüÜ]{2,}([ ]{1}[A-Za-zñÑáÁéÉíÍóÓúÚüÜ]{2,})$/;
	var telefono=/^[0-9]{4}-[0-9]{4}$/;
	var correo=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var celular=/^[0-9]{4}-[0-9]{4}$/;
	var direccion=/^[A-Za-zñÑáÁéÉíÍóÓúÚüÜ]{2,}/;
	var identificacion=/^[A-Za-zñÑáÁéÉíÍóÓúÚüÜ]{2,}/;
	
	n=nombres.test(nom);
	a=apellidos.test(ape);
	t=telefono.test(tel);
	c=correo.test(mail); 
	cel=celular.test(celu);
	d=direccion.test(direc);
	i=identificacion.test(iden);	
	
	if (!n | !a | !t | !c | !cel | !d | !i) 
	
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
            	<h1>Ingresando Curriculum</h1>
            	<h2>Datos Personales</h2>


<h3>Paso 1 de 2...</h3> 
Ingresamos datos iniciales para saber m&aacute;s acerca de usted, estos datos no se publicar&aacute;n ni se mostrar&aacute;n publicamente solo el administrador y el empresario lo podran visualizar.
                    
                    <div class="contact_form">  
                     
					<div class="form_row">
                    <FORM id="formcurri1" name="form1" method="post" action="inserts/curriculum1.php">
                   <!-- <form name="frmcurri_pas1" action="inserts/curriculum1.php">-->
                    
                    <label class="contact" >Nombres:</label>
                    <input name="nombre" type="text" id="txtnombres" size ="30"/>
                    </div>  
                    
                   
                    <div class="form_row">
                    <label class="contact">Apellidos</label>
                    <input name="apellido" type="text"  id="txtapellidos" size ="30"/>
                    </div>
                    
                    <div class="form_row">
                    <label class="contact">Fecha de Nacumiento:</label>
                    <input name="nacimiento" type="text" id="txttelefono" size ="30"/>
                    </div>

		   
    				<div class="form_row">
                      <label class="contact">Telefono:</label>
                      <input name="telefono" type="text" id="txttelefono2" size ="30"/>
                    </div>
    				<div class="form_row">
                      <label class="contact">DUI:</label>
                      <input name="dui" type="text" id="txttelefono3" size ="30"/>
                    </div>
    				<div class="form_row">
                      <label class="contact">NIT:</label>
                      <input name="nit" type="text" id="txttelefono4" size ="30"/>
                    </div>
    				<div class="form_row">
                    <label class="contact">Direcci&oacute;n:</label>
                    <textarea name="direccion" cols=""  rows="" id="direccion" ></textarea>
                    </div>

           <div class="form_row">
                    <label class="contact"></label>
                    </div>  </div>

                
            
            </div> <!--End of left_content-->
            
    			
          
            
    		<div class="right_content">


                <h1>Informaci&oacute;n Adicional</h1>
                <p>La informaci&oacute;n adicional le ayudar&acute; en el proceso de admici&oacute;n en muchos trabajos. Le rogamos ingresar los datos correctamente. </p>
                <p>&nbsp;</p>
<div class="form_row">
                    <label class="contact">Celular:</label>
                    <input name="celular" type="text" id="txtcelular" size ="30"/>
                    </div>


         <div class="form_row">
                    <label class="contact">Direccion 2:</label>
                    <input name="direccion2" type="text" id="txtdireccion2" size ="30"/>
                    </div>


         <div class="form_row">
           <label class="contact">Estado Civil:</label>
           <input name="estado" type="text" id="txtdireccion" size ="30"/>
         </div>
<div class="form_row">
                    <label class="contact">Correo Electronico:</label>
                    <input name="correo" type="text" id="txtidentificacion" size ="30"/>
                    </div>

<div class="form_row">
  <label class="contact" size ="30">Pa&iacute;s de procedencia:  </label>
</div>
<p><span class="contact">
  <select name = "pais" id="pais" style = "Width: 300">
    </div>
    <option value="Afganist&aacute;n">Afganist&aacute;n </option>
    <option value="Albania">Albania </option>
    <option value="Alemania">Alemania </option>
    <option value="Andorra">Andorra </option>
    <option value="Angola">Angola </option>
    <option value="Anguilla">Anguilla </option>
    <option value="Ant&aacute;rtida">Ant&aacute;rtida </option>
    <option value="Antigua y Barbuda">Antigua y Barbuda </option>
    <option value="Antillas Holandesas">Antillas Holandesas </option>
    <option value="Arabia Saud&iacute;">Arabia Saud&iacute; </option>
    <option value="Argelia">Argelia </option>
    <option value="Argentina">Argentina </option>
    <option value="Armenia">Armenia </option>
    <option value="Aruba">Aruba </option>
    <option value="Australia">Australia </option>
    <option value="Austria">Austria </option>
    <option value="Azerbaiy&aacute;n">Azerbaiy&aacute;n </option>
    <option value="Bahamas">Bahamas </option>
    <option value="Bahrein">Bahrein </option>
    <option value="Bangladesh">Bangladesh </option>
    <option value="Barbados">Barbados </option>
    <option value="B&eacute;lgica">B&eacute;lgica </option>
    <option value="Belice">Belice </option>
    <option value="Benin">Benin </option>
    <option value="Bermudas">Bermudas </option>
    <option value="Bielorrusia">Bielorrusia </option>
    <option value="Birmania">Birmania </option>
    <option value="Bolivia">Bolivia </option>
    <option value="Bosnia y Herzegovina">Bosnia y Herzegovina </option>
    <option value="Botswana">Botswana </option>
    <option value="Brasil">Brasil </option>
    <option value="Brunei">Brunei </option>
    <option value="Bulgaria">Bulgaria </option>
    <option value="Burkina Faso">Burkina Faso </option>
    <option value="Burundi">Burundi </option>
    <option value="But&aacute;n">But&aacute;n </option>
    <option value="Cabo Verde">Cabo Verde </option>
    <option value="Camboya">Camboya </option>
    <option value="Camer&uacute;n">Camer&uacute;n </option>
    <option value="Canad&aacute;">Canad&aacute; </option>
    <option value="Chad">Chad </option>
    <option value="Chile">Chile </option>
    <option value="China">China </option>
    <option value="Chipre">Chipre </option>
    <option value="Ciudad del Vaticano">Ciudad del Vaticano </option>
    <option value="Colombia">Colombia </option>
    <option value="Comoras">Comoras </option>
    <option value="Congo">Congo </option>
    <option value="Congo, Rep&uacute;blica Democr&aacute;tica del">Congo, Rep. Dem </option>
    <option value="Corea">Corea </option>
    <option value="Corea del Norte">Corea del Norte </option>
    <option value="Costa de Marf&iacute;l">Costa de Marf&iacute;l </option>
    <option value="Costa Rica">Costa Rica </option>
    <option value="Croacia">Croacia </option>
    <option value="Cuba">Cuba </option>
    <option value="Dinamarca">Dinamarca </option>
    <option value="Djibouti">Djibouti </option>
    <option value="Dominica">Dominica </option>
    <option value="Ecuador">Ecuador </option>
    <option value="Egipto">Egipto </option>
    <option value="El Salvador">El Salvador </option>
    <option value="Emiratos &Aacute;rabes Unidos">Emiratos &Aacute;rabes Unidos </option>
    <option value="Eritrea">Eritrea </option>
    <option value="Eslovenia">Eslovenia </option>
    <option value="Espa&ntilde;a">Espa&ntilde;a </option>
    <option value="Estados Unidos">Estados Unidos </option>
    <option value="Estonia">Estonia </option>
    <option value="Etiop&iacute;a">Etiop&iacute;a </option>
    <option value="Fiji">Fiji </option>
    <option value="Filipinas">Filipinas </option>
    <option value="Finlandia">Finlandia </option>
    <option value="Francia">Francia </option>
    <option value="Gab&oacute;n">Gab&oacute;n </option>
    <option value="Gambia">Gambia </option>
    <option value="Georgia">Georgia </option>
    <option value="mundo">Ghana </option>
    <option value="Gibraltar">Gibraltar </option>
    <option value="Granada">Granada </option>
    <option value="Grecia">Grecia </option>
    <option value="Groenlandia">Groenlandia </option>
    <option value="Guadalupe">Guadalupe </option>
    <option value="Guatemala">Guatemala </option>
    <option value="Guayana">Guayana </option>
    <option value="Guayana Francesa">Guayana Francesa </option>
    <option value="Guinea">Guinea </option>
    <option value="Guinea Ecuatorial">Guinea Ecuatorial </option>
    <option value="Guinea-Bissau">Guinea-Bissau </option>
    <option value="Hait&iacute;">Hait&iacute; </option>
    <option value="Honduras">Honduras </option>
    <option value="Hong Kong, ZAE de la RPC">Hong Kong </option>
    <option value="Hungr&iacute;a">Hungr&iacute;a </option>
    <option value="India">India </option>
    <option value="Indonesia">Indonesia </option>
    <option value="Irak">Irak </option>
    <option value="Ir&aacute;n">Ir&aacute;n </option>
    <option value="Irlanda">Irlanda </option>
    <option value="Isla Bouvet">Isla Bouvet </option>
    <option value="Islandia">Islandia </option>
    <option value="Islas Caim&aacute;n">Islas Caim&aacute;n </option>
    <option value="Islas Malvinas">Islas Malvinas </option>
    <option value="Israel">Israel </option>
    <option value="Italia">Italia </option>
    <option value="Jamaica">Jamaica </option>
    <option value="Jap&oacute;n">Jap&oacute;n </option>
    <option value="Jordania">Jordania </option>
    <option value="Kazajist&aacute;n">Kazajist&aacute;n </option>
    <option value="Kenia">Kenia </option>
    <option value="Kirguizist&aacute;n">Kirguizist&aacute;n </option>
    <option value="Kiribati">Kiribati </option>
    <option value="Kuwait">Kuwait </option>
    <option value="Laos">Laos </option>
    <option value="Lesotho">Lesotho </option>
    <option value="Letonia">Letonia </option>
    <option value="L&iacute;bano">L&iacute;bano </option>
    <option value="Liberia">Liberia </option>
    <option value="Libia">Libia </option>
    <option value="Liechtenstein">Liechtenstein </option>
    <option value="Lituania">Lituania </option>
    <option value="Luxemburgo">Luxemburgo </option>
    <option value="Macao">Macao </option>
    <option value="Macedonia, Ex-Rep&uacute;blica Yugoslava de">Macedonia </option>
    <option value="Madagascar">Madagascar </option>
    <option value="Malasia">Malasia </option>
    <option value="Malawi">Malawi </option>
    <option value="Maldivas">Maldivas </option>
    <option value="Mal&iacute;">Mal&iacute; </option>
    <option value="Malta">Malta </option>
    <option value="Marruecos">Marruecos </option>
    <option value="Martinica">Martinica </option>
    <option value="Mauricio">Mauricio </option>
    <option value="Mauritania">Mauritania </option>
    <option value="M&eacute;xico">M&eacute;xico </option>
    <option value="Micronesia">Micronesia </option>
    <option value="Moldavia">Moldavia </option>
    <option value="M&oacute;naco">M&oacute;naco </option>
    <option value="Mongolia">Mongolia </option>
    <option value="Montserrat">Montserrat </option>
    <option value="Mozambique">Mozambique </option>
    <option value="Namibia">Namibia </option>
    <option value="Nauru">Nauru </option>
    <option value="Nepal">Nepal </option>
    <option value="Nicaragua">Nicaragua </option>
    <option value="N&iacute;ger">N&iacute;ger </option>
    <option value="Nigeria">Nigeria </option>
    <option value="Niue">Niue </option>
    <option value="Norfolk">Norfolk </option>
    <option value="Noruega">Noruega </option>
    <option value="Nueva Caledonia">Nueva Caledonia </option>
    <option value="Nueva Zelanda">Nueva Zelanda </option>
    <option value="Om&aacute;n">Om&aacute;n </option>
    <option value="Pa&iacute;ses Bajos">Pa&iacute;ses Bajos </option>
    <option value="Panam&aacute;">Panam&aacute; </option>
    <option value="Pap&uacute;a Nueva Guinea">Pap&uacute;a Nueva Guinea </option>
    <option value="Paquist&aacute;n">Paquist&aacute;n </option>
    <option value="Paraguay">Paraguay </option>
    <option value="Per&uacute;" selected="selected">Per&uacute; </option>
    <option value="Pitcairn">Pitcairn </option>
    <option value="Polonia">Polonia </option>
    <option value="Portugal">Portugal </option>
    <option value="Puerto Rico">Puerto Rico </option>
    <option value="Qatar">Qatar </option>
    <option value="Reino Unido">Reino Unido </option>
    <option value="Rep&uacute;blica Centroafricana">Rep&uacute;blica Centroafricana </option>
    <option value="Rep&uacute;blica Checa">Rep&uacute;blica Checa </option>
    <option value="Rep&uacute;blica de Sud&aacute;frica">Rep&uacute;blica de Sud&aacute;frica </option>
    <option value="Rep&uacute;blica Dominicana">Rep&uacute;blica Dominicana </option>
    <option value="Rep&uacute;blica Eslovaca">Rep&uacute;blica Eslovaca </option>
    <option value="Ruanda">Ruanda </option>
    <option value="Rumania">Rumania </option>
    <option value="Rusia">Rusia </option>
    <option value="Samoa">Samoa </option>
    <option value="Samoa Americana">Samoa Americana </option>
    <option value="San Marino">San Marino </option>
    <option value="Santa Luc&iacute;a">Santa Luc&iacute;a </option>
    <option value="Santo Tom&eacute; y Pr&iacute;ncipe">Santo Tom&eacute; y
      Pr&iacute;ncipe </option>
    <option value="Senegal">Senegal </option>
    <option value="Seychelles">Seychelles </option>
    <option value="Sierra Leona">Sierra Leona </option>
    <option value="Singapur">Singapur </option>
    <option value="Siria">Siria </option>
    <option value="Somalia">Somalia </option>
    <option value="Sri Lanka">Sri Lanka </option>
    <option value="St. Pierre y Miquelon">St. Pierre y Miquelon </option>
    <option value="Sud&aacute;n">Sud&aacute;n </option>
    <option value="Suecia">Suecia </option>
    <option value="Suiza">Suiza </option>
    <option value="Surinam">Surinam </option>
    <option value="Tailandia">Tailandia </option>
    <option value="Taiw&aacute;n">Taiw&aacute;n </option>
    <option value="Tanzania">Tanzania </option>
    <option value="Tayikist&aacute;n">Tayikist&aacute;n </option>
    <option value="Togo">Togo </option>
    <option value="Tonga">Tonga </option>
    <option value="Trinidad y Tobago">Trinidad y Tobago </option>
    <option value="T&uacute;nez">T&uacute;nez </option>
    <option value="Turkmenist&aacute;n">Turkmenist&aacute;n </option>
    <option value="Turqu&iacute;a">Turqu&iacute;a </option>
    <option value="Tuvalu">Tuvalu </option>
    <option value="Ucrania">Ucrania </option>
    <option value="Uganda">Uganda </option>
    <option value="Uruguay">Uruguay </option>
    <option value="Uzbekist&aacute;n">Uzbekist&aacute;n </option>
    <option value="Venezuela">Venezuela </option>
    <option value="Vietnam">Vietnam </option>
    <option value="Yemen">Yemen </option>
    <option value="Yugoslavia">Yugoslavia </option>
    <option value="Zambia">Zambia </option>
    <option value="Zimbabue">Zimbabue</option>
  </select>
</span></p>
<div class="form_row">
  <label class="contact" size ="30">Mensaje personal:</label>
  <textarea name="mensaje" cols=""  rows="" id="mensaje" ></textarea>
</div>
<p><p>      <label class="contact">Sexo</label>
					<input type="radio" name="sexo" value="Hombre" checked>
					Hombre
					<input type="radio" name="sexo" value="Mujer">
					Mujer<br>
           <br>
                   <input type="button" id="cdmValidaciondeTextBox" value="Validar Datos" onclick="validar_curripas1(document.frmcurri_pas1.txtnombres.value,document.frmcurri_pas1.txtapellidos.value,document.frmcurri_pas1.txttelefono.value,document.frmcurri_pas1.txtcorreo_electronico.value,document.frmcurri_pas1.txtcelular.value,document.frmcurri_pas1.txtdireccion2.value,document.frmcurri_pas1.txtidentificacion.value)";/>         
                   <label>
                   <input type="submit" name="Submit" value="Enviar"/>
                   </label>
				   
</form>
							

</div>
<P><P>


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