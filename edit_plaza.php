<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>WORK SMART</title>
<link rel="stylesheet" type="text/css" href="style.css" />
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
			<script type="text/javascript" src="stmenu.js"></script>
	  <script type='text/javascript' src='menu_empresas.js'></script>
	</div>
	<?php
	//Incluyendo conexion
	require_once 'admin/conexion.php';
	
	$id_plaza=$_GET['plaza'];
	$empresa=$_GET['empresa'];
		
	$queEmp = "SELECT * FROM plazas WHERE id_empleo = '$id_plaza'";	
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
	$totEmp = mysql_num_rows($resEmp);	   
	if ($totEmp> 0) {
 		while ($rowEmp = mysql_fetch_assoc($resEmp)) {	
		//$rowEmp = mysql_fetch_assoc($resEmp);
		$id=$rowEmp["id_empleo"];
		$plaza = $rowEmp["nomb_empleo"];
		$pago=$rowEmp["salario"];
		$dsc=$rowEmp["descripcion"];
		$rq=$rowEmp["requisitos_empleo"];
		$contrato=$rowEmp["tipo_contrato"];
		$genero=$rowEmp["genero"];
		$rango=$rowEmp["Edad_rango"];
		$vehiculo=$rowEmp["vehiculo"];
		$dpto=$rowEmp["depto_plaza"];
		$cat=$rowEmp["Categoria"];
		
		}
	}	
	//include("procesos.php");
	?>
    <div class="tipsizquierdo">
    		<div class="left_content">
            	<h1>Editar Plaza </h1>
                
              	<div class="contact_form">         
                    <form id="frmplazas" name="frmplazas" method="post" action="inserts/i_plazas.php?accion=update&plaza=<?php echo $id?>">
					<div class="form_row">
                    <label class="contact">Nombre de la plaza :</label>
                    <input type="text" class="contact_input" name="nombre_plaza" value="<?php echo $plaza?>"/>
                    </div> 

					<div class="form_row">
					
                    <label class="contact">Salario:</label>
                    <input id="salario" type="text" class="contact_input" name="salario" value="<?php echo $pago?>"/>
                    </div>
					
                  <div class="form_row">
                    <label class="contact">Descripci&oacute;n:</label>
                    <textarea name="descripcion" id="descrip" class="contact_textarea" cols="" rows="" ><?php echo $dsc ?>
                    </textarea>
					
                  </div>
					
					
                  <div class="form_row">
                    <label class="contact">Requisitos de empleo :</label>
                    <textarea name="requisitos"  class="contact_textarea" cols=" " rows="" > <?php echo $rq ?>  </textarea>
				</div>
				<div class="form_row">
					<label class="contact"> Tipo de contrato: </label>
					
					<select name="combo_tipo">
					<option value="<?php echo $contrato ?>"><?php echo $contrato ?> </option>
							<option value="Medio Tiempo">Medio Tiempo </option>
							<option value="Tiempo Completo">Tiempo completo </option>
							<option value="Temporal">Temporal </option>
							<option value="Desde casa">Desde casa </option>
				  </select>
                  </div>
				 <div class="form_row">
				 	<label class="contact"> Género </label>
					<select name="genero" size="1">
					<option value="<?php echo $genero ?>"> <?php echo $genero ?></option>
						<option value="Femenino"> Femenino</option>
						<option value="Indiferente"> Indiferente</option>
						<option value="Masculino"> Masculino</option>
					</select>
				 </div>
				 <div class="form_row">
				 	<label class="contact"> Rango de Edad </label>
				 	<input type="text" class="contact_input" name="rango" value="<?php echo $rango?>" />
				 </div>
				 <div class="form_row">
				 	<label class="contact"> Vehículo </label>
					<select name="vehiculo" size="1">
						<option value="<?php echo $vehiculo?>"> <?php echo $vehiculo?> </option>
						<option value="Indiferente"> Indiferente </option>
						<option value="Requerido"> Requerido </option>
					
					</select>
				 </div>
				 <div class="form_row">
				 	<label class="contact"> Departamento de Plaza: </label>
				    <select name="combo_depto">
							 <option value="<?php echo $dpto?>" ><?php echo $dpto?>
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
				  	<label class="contact"> Categoría: </label>
					<select name="combo_categoria"> 
                          <option value="<?php echo $cat?>" ><?php echo $cat?>
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