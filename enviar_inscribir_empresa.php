<?php 

$mail='alemanposada@gmail.com'; 


$nombre_empresa = $_POST['nombre_empresa']; 
$encargado = $_POST['encargado']; 
$telefono = $_POST['telefono']; 
$fax = $_POST['fax']; 
$email = $_POST['email'];
$web = $_POST['web'];  
$mensaje = $_POST['mensaje']; 

$thank="gracias.html"; 

$message = " 
empresa:".$nombre_empresa." 
encargado:".$encargado." 
telefono:".$telefono." 
fax:".$fax." 
email:".$email." 
web:".$web." 
mensaje:".$mensaje.""; 

if (mail($mail,"Formulario de Consulta",$message)) 
Header ("Location: $thank" ); 

?> 