<?php
$id_plaza=$_GET['id'];
@$error=$_GET['error'];
?>
<link rel="stylesheet" href="css/aply.css" />
<form action="validar.php?id=<?php echo $_GET['id']?>" name="x" method="POST" enctype="multipart/form-data">
 <p>Para aplicar a esta plaza Escriba su usuario y contrase&ntilde;a
 <br />
    <?php echo $error?>
    <br />
Nombre de Usuario:
  <input name="usuario" type="text" id="usuario" />
Password:
  <input name="pass" type="password" id="pass" />
      <input name="aceptar" type="submit" id="aceptar" value="Aceptar" />
      </p>
</form>