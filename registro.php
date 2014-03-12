<?php 
include("conexion.php");
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head><title>Registro Usuario</title> 
 <!--  Añadimos la linea de meta en UTF-8 por el tema de las ñ y demás caracteres especiales esta linea siempre va entre el head -->   
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
</head>
<body>
<FORM ACTION="registra_usuario.php" METHOD="post"> 
<center><b><strong><h2>Creacion de personaje</h2></strong></b><br></center>
</br><center>
<b> Usuario</b>  <INPUT TYPE="text" NAME="nombre_usuario" SIZE=10 MAXLENGTH=10>
<b> Password</b> <INPUT TYPE="password" NAME="clave_usuario" SIZE=10 MAXLENGTH=10>
<b> E-mail</b>   <INPUT TYPE="text" NAME="email" SIZE=10 MAXLENGTH=10
<INPUT TYPE="hidden" NAME="validado" VALUE="FALSE"
<p></p>
<center><INPUT TYPE="submit" CLASS="boton" VALUE="CREAR PERSONAJE" size="20"></input></center>
</FORM>
</body>
</html>
 

