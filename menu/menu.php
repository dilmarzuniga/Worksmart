<?php

function mostrarMenu(){
echo "

<div id='cssmenu'>
<ul>
   <li class='active '><a href='Tips2.php'><span>PRINCIPAL</span></a></li>
  
   <li class='has-sub '><a href='#'><span>Curriculum Vitae</span></a>
      <ul>
        <li class='active '><a href='Tips_CVredaccion.php'><span>Como redactar tu Curriculum Vitae</span></a> 
	
        <li class='active '><a href='Tips_primpas.php'><span>Primeros Pasos</span></a> 
	  
		<li class='has-sub '><a href='#'><span>Tipos Curriculum</span></a>
      		<ul>
			<li class='active '><a href='Tips_CVtipocron.php'><span>Cronol&oacute;gico</span></a> 
			<li class='active '><a href='Tips_CVtipofun.php'><span>Funcional</span></a> 
	
		</ul>
       </li>
      </ul>
   </li>

   
      <li class='has-sub '><a href='#'><span>Entrevista</span></a>
      		<ul>
			<li class='active '><a href='Tips_presentacionpers.php'><span>Presentaci&oacute;n Personal</span></a> 
			<li class='active '><a href='Tips_errorentrevist.php'><span>Errores Frecuentes</span></a> 
	  		<li class='active '><a href='Tips_loqdebohacer.php'><span>Lo que debes hacer</span></a> 
			<li class='active '><a href='Tips_Preguntas.php'><span>Preguntas</span></a> 
		
		</ul>
       </li>

  	<li class='has-sub '><a href='#'><span>Carta de Presentaci&oacute;n</span></a>
      		<ul>
			<li class='active '><a href='Tips_CVquered.php'><span>&#191;Qu&eacute; es?</span></a> 
			<li class='active '><a href='Tips_CVredacar.php'><span>Redacci&oacute;n</span></a> 
	  		<li class='active '><a href='Tips_CVconsejos.php'><span>Consejos</span></a> 

		</ul>
       </li>

	<li class='has-sub '><a href='#'><span>Secci&oacute;n Multimedia</span></a>
      		<ul>
			<li class='active '><a href='videos1.php'><span>Videos Tips</span></a> 
			<li class='active '><a href='Tips.php'><span>Descubre tu especialidad</span></a> 
		</ul>
       </li>
 
</ul>
</div>
<div style='clear:both; margin: 0 0 30px 0;'>&nbsp;</div>";
}
?>
