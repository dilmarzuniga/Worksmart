<?php 

$mail='alemanposada@gmail.com'; 


$nombre = $_POST['nombre']; 
$apellido = $_POST['apellido']; 
$telefono = $_POST['telefono']; 
$email = $_POST['email']; 
$mensaje = $_POST['mensaje']; 

$thank="gracias.html"; 

$message = " 
nombre:".$nombre." 
apellido:".$apellido." 
telefono:".$telefono." 
email:".$email." 
mensaje:".$mensaje.""; 

if (mail($mail,"Formulario de Consulta",$message)) 
Header ("Location: $thank" ); 

?> 