<?php
$validado=$_POST['validado'];
$nombre_usuario=$_POST['nombre_usuario'];
$clave_usuario=$_POST['clave_usuario'];
$email=$_POST['email'];
include"conexion.php";
$query = "insert into `usuarios` (`validado`,`nombre_usuario`,`clave_usuario`,`email`) values
('$validado','$nombre_usuario','$clave_usuario','$email')";
$result = mysql_query($query)
or die("'Lo mas probable es que el usuario ya existe o a habido un error'");
header("location:index.php");
?>
       
       
                          