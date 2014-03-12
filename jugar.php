<?php 
@session_start();  
include("conexion.php");
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head><title>Pagina principal</title> 
</head>
<body>
<A HREF="combate.php">Combate!</A>   <br />  
<A HREF="seleccion.php">Seleciona Personaje!</A>    <br />  
<A HREF="crea_ficha.php">Crear tu personaje! (requiere activacion a creado=1 en personajes para aceptar la ficha)</A>      <br />  
</body>
</html>
