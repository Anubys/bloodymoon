 <?php
include("conexion.php"); 

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head><title>Crear Ficha del Jugador</title> 
 <!--  Añadimos la linea de meta en UTF-8 por el tema de las ñ y demás caracteres especiales esta linea siempre va entre el head -->   
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
</head>
<body>
<FORM ACTION="crea_ficha.php" METHOD="post"> 
<center><b><strong><h2>Creacion de personaje</h2></strong>
<br></center></br><center>
<b> Nombre Personaje</b>  <INPUT TYPE="text" NAME="nombre_personaje" SIZE=20 MAXLENGTH=20>  <br />
Hombre:<input type="radio" value="hombre" name="genero">:<br />             //Estas 5 cosas es para crear en crear_ficha las comprobaciones y los insert
Mujer:<input type="radio" value="mujer" name="genero">:<br />
Escoge opciones::<br />
Uno:<input type="checkbox" value="uno" name="opciones[]">:<br />
Dos:<input type="checkbox" value="dos" name="opciones[]">:<br />
Tres:<input type="checkbox" value="tres" name="opciones[]">:<br />


<INPUT TYPE="hidden" NAME="creado" VALUE="FALSE"
<p></p>
<center><INPUT TYPE="submit" CLASS="boton" VALUE="CREAR PERSONAJE" size="20"></input></center>
</FORM>



</body>
</html>
            
            
