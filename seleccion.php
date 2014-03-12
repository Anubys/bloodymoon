<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head><title>SELECCION PERSONAJE</title> 
 <!--  Añadimos la linea de meta en UTF-8 por el tema de las ñ y demás caracteres especiales esta linea siempre va entre el head -->   
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">     

</head>
<h1>SELECCION DE PERSONAJE.</h1>

<body>

<FORM ACTION="seleccion_pj.php" METHOD="post"> <div>
<select name="seleccion">
<option value="1" selected>(Selecciona Player)</option>
<option value="1">Id 1</option>
</select>
</div>
<div><input type="submit" value="Seleccion"></div>
</form>
<br>
<?php
session_start();
include("conexion.php");
//Ejecutamos la sentencia SQL 
$result=mysql_query("select * from personajes");
echo "<TABLE BORDER='2'>";
echo "<th>Id</th>";
echo "<th>Personaje</th>";
while ($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row["id_personaje"]."</td>";
echo "<td>".$row["nombre_personaje"]."</td>";
echo "</TR>";
}
mysql_free_result($result)
?>
</body>
</html>