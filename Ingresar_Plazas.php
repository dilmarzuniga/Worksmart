<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>WORK SMART</title>

<script type="text/javascript" src="stmenu.js"></script>
<script src="jquery.tools.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="tooltip.css" />

<!--[if IE 6]>
	<script type="text/javascript" src="unitpngfix.js"></script>
<![endif]--> 
</head>
<body class="details">
<div class="wrap">
	<div class="wrap">
<div class="header">
    	<div class="logo"><a href="Index.php"><img src="images/logo1.png" alt="" width="350" height="114" vspace="27" border="0" title="" /></a></div>
        
        <div id="menu">
            <ul>                                                                       
            <li><a href="Index.php">Inicio</a></li>
            <li><a href="Registrarse.php">Registrate</a></li>
            <li><a href="Empresas.php">Empresas</a></li>
            <li><a href="Contactanos.php">Cont&aacute;ctanos</a></li>
            <li><a href="Acerca de.php">Acerca de</a></li>
           
            </ul>
        </div>
          
    </div> <!--End of header-->

    <div class="menutips">
		
	    <?php
	session_start(); 
	@$id_empresa=$_SESSION['nombre'];
	if( strlen($id_empresa)==0){
	echo("<script>alert('Inicie Sesion para acceder al menu de empresas');</script>");
	header("location:Empresas.php?error=2");
	}	
		echo("<font size=5>$id_empresa</font>");
		?>
	      <br />
	        <a href="login.php">Cerrar Sesion</a>
	        <script type='text/javascript' src='menu_empresas.js'></script>
    </div>
    <div class="tipsizquierdo">
    		<div class="left_content">
            	<h1>Ingreso de plazas </h1>
                
              	<div class="contact_form">         
                    <form id="frmplazas" name="frmplazas" method="post" action="inserts/i_plazas.php?accion=new&empresa=<?php echo $id_empresa?>">
					<div class="form_row">
                    <label class="contact">Nombre de la plaza :</label>
                    <input type="text" class="contact_input" name="nombre_plaza" title="Ingresa el nombre de la plaza"/>
                    </div> 

					<div class="form_row">
					
                    <label class="contact">Salario:</label>
                    <input type="text"  title="Salario fijo ó de acuerdo a las capacidades del trabajador" class="contact_input" name="salario" />
                    </div>
					
                  <div class="form_row">
                    <label class="contact">Descripci&oacute;n:</label>
                    <textarea name="descripcion" title="Ingrese una peque&ntilde;a descripción sobre la plaza" id="descrip" class="contact_textarea" cols="" rows="" ></textarea>
					
                  </div>
					
					
                  <div class="form_row">
                    <label class="contact">Requisitos de empleo :</label>
                    <textarea name="requisitos" title="Enliste uno a uno los requisitos para la plaza recordando que la experiencia no debe ser obligatoria"  class="contact_textarea" cols=" " rows="" > </textarea>
				</div>
				<div class="form_row">
					<label class="contact"> Tipo de contrato: </label>
					
					<select name="combo_tipo" title="Seleccione el tipo de contrataci&oacute;n">
							<option value="Medio Tiempo">Medio Tiempo </option>
							<option value="Tiempo Completo">Tiempo completo </option>
							<option value="Temporal">Temporal </option>
							<option value="Desde casa">Desde casa </option>
						</select>
                  </div>
				 <div class="form_row">
				 	<label class="contact" > Género </label>
					<select name="genero" size="1" title="g&eacute;nero del trabajador">
						<option value="Femenino"> Femenino</option>
						<option value="Indiferente"> Indiferente</option>
						<option value="Masculino"> Masculino</option>
					</select>
				 </div>
				 <div class="form_row">
				 	<label class="contact"> Rango de Edad </label>
				 	<input type="text" class="contact_input" name="rango" title="Rango separado por un guión" />
				 </div>
				 <div class="form_row">
				 	<label class="contact" > Vehículo </label>
					<select name="vehiculo" size="1" title="Indicar si es necesario un veh&iacute;culo">
						<option value="Indiferente"> Indiferente </option>
						<option value="Requerido"> Requerido </option>
					
					</select>
				 </div>
				 <div class="form_row">
				 	<label class="contact"> Departamento de Plaza: </label>
				    <select name="combo_depto" title="Departamento de la plaza">
							 <option value="Ahuachapan" >Ahuachapán
							 <option value="Caba&ntilde;as">Cabañas
                             <option value="chalatenango" >Chalatenango
                             <option value="cuscatl&aacute;n" >Cuscatlán
                             <option value="libertad" >La Libertad
                             <option value="La Paz" >La Paz
                             <option value="La Union" >La Unión
                             <option value="Moraz&aacute;n" >Morazán
   						     <option value="San miguel" >San Miguel
							 <option value="San Salvador" >San Salvador
							 <option value="San vicente" >San Vicente
							 <option value="Santa Ana" >Santa Ana
							 <option value="Sonsonate" >Sonsonate
  							 <option value="Usulut&aacute;n" >Usulután
						</select>
				 </div>                    
                      
				  <div class="form_row">
				  	<label class="contact" > Categoría: </label>
					<select name="combo_categoria" title="En caso de no encontrar una categor&iacute;a seleccionar OTROS"> 
                          <option value="Administraci&oacute;n Oficinas" >Administración/Oficina
						  <option value="arte Diseño" >Arte/Diseño/Medios
						  <option value="informatica" >Informática/Telecom.
						  <option value="call Center" > Recepción/call center
						  <option value="Contabilidad" >Economía/Contabilidad
						  <option value="Turismo" >Hostelería/Turismo
  						  <option value="servicio al cliente" > Servicio al cliente/meseros/bar tender
						  <option value="ventas" >Ventas
						  <option value="medicina" >Medicina/Salud
						  <option value="otros" >Otros
 
                        </select>
				  	
				  </div>
				  <div class="form_row">
                    <input type="image" src="images/enviar.gif" class="send"/>
                  </div>    
                </form>
				
				</div> 
				<script> 
// execute your scripts when the DOM is ready. this is a good habit
					$(function() 
					{
					
// select all desired input fields and attach tooltips to them
						$("#frmplazas :input").tooltip({position: "center right",offset: [-2, 10],effect: "fade",opacity: 0.7});
					});
			</script> 
    
                
            
            </div> <!--End of left_content-->
           
			
    		<div class="right_content">
    		  <div class="contact_info">
    		    <p class="info_contact">Ingresa tu plaza para que as&iacute; podamos conseguirle a tu empresa personal joven capacitado para el trabajo que deseas..                        </p>           
              </div>

                    <div class="employe_box_left">
                      <p><span class="blue">Secretaria de oficina </span><br />
                        <span class="orange">Salario: </span> $150<br />
                        <span class="orange">Descripci&oacute;n: </span> Digitaci&oacute;n de Documentos importantes, atender llamadas, planificaci&oacute;n de agenda. 
						<span class="orange">Requisitos: </span><p>-Conocimientos de Microsoft Office <br /> -Manejo de Internet Explorer<br />
                          <img src="images/secretaria.jpg" alt="" width="168" height="118" title="" />                </p> 
                </div>   
                    <div class="employe_box_right">
                   
				   		  <p><span class="blue">Recepcionista</span><br />
                        <span class="orange">Salario: </span> $200<br />
                        <span class="orange">Descripci&oacute;n: </span> Atención de llamadas, recibir y dar información. 
					  <span class="orange">Requisitos: </span><p>-Facilidad de Expresión con los clientes<br />-Excelente presentación</p>
                          <img src="images/recepcion.jpg" alt="" width="181" height="133" title="" />                </p> 
              </div>             
            
      </div> <!--End of right_content-->          
            
    	<div class="clear"></div>
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
                <p class="info">
                (+503)22255212
                </p>
				<span class="orange"> Dirección de oficina </span>
				<p class="info">
					Res. Santa Elena poligono "F" frente a ex-embajada
				</p>          
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
                <p class="favorites">Forma correcta de crear tu curriculum Vitae, qu&eacute; hacer y qu&eacute; se debe evitar...<a href="Tips_CVredaccionphp"> ver m&aacute;s</a> </p>           
            </div> 
            
            <div class="favorites_box">
                <span class="fav_nr">2</span>
                <p class="favorites">Preparando tu entrevista de trabajo. Ac&aacute; de presentamos una gu&iacute;a completa desde qu&eacute; debes decir hasta... <a href="tips_EntrevistaPres.html">ver m&aacute;s </a></p>           
            </div>        
            
            <div class="favorites_box">
                <span class="fav_nr">3</span>
                <p class="favorites">Innovando de la mano de la tecnolog&iacute;a, VIDEOCURRICULUM en nuestro centro multimedia...<a href="tips_multimedia.html"> ver m&aacute;s </a></p>           
            </div>        
 
        </div>
        <!--End of footer_tab2-->
<div class="footer_tab3">
        	<h2>Enlaces</h2>
                <div class="footer_links">
                    <ul>
                    <li><a href="Index.php">Inicio</a></li>
                    <li><a href="Registrarse.php">Reg&iacute;strate</a></li>
                    <li><a href="Empresas.php">Ingresa tu empresa </a></li>
                    <li><a href="#">Buscar trabajo </a></li>
                    <li><a href="curri_pas1.php">Sube tu curriculum </a></li>
                    <li><a href="tips2.html">Trucos y consejos </a></li>
                    <li><a href="Contactanos.php">Contact&aacute;ctanos</a></li>
                    </ul>
                </div> 
      </div> <!--End of footer_tab3-->      
        
        
        
             
        
    <div class="clear"></div>
	</div> <!--End of footer_content-->
</div><!--End of footer-->

</body>
</html>