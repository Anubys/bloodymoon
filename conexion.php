<?php
@session_start();
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="vampiro"; // aqui debes ingresar el nombre de usuario
                     // para acceder a la base
$dbpassword="v@mpir0"; // password de acceso para el usuario de la
                     // linea anterior
$db="juego";        // Seleccionamos la base con la cual trabajar
$conexion = @mysql_connect($dbhost, $dbusuario, $dbpassword);
if($conexion == false){
  // hay error, entonces puedes redireccionar a otra página con un mensaje
 echo "<script>window.location = 'pagina_error.php';</script>";exit;
}  
mysql_select_db($db, $conexion);
?>
