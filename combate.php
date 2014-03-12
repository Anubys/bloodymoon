<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head><title>COMBATE</title> 
 <!--  Añadimos la linea de meta en UTF-8 por el tema de las ñ y demás caracteres especiales esta linea siempre va entre el head -->   
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">     

</head>
<h1>EJEMPLO DE COMBATE(en desarrollo) </h1>

<body>

<FORM ACTION="crea_combate.php" METHOD="post"> <div>
<select name="menu">
<option value="0" selected>(Elige ataque)</option>
<option value="1">Mordisco</option>
<option value="2">Garra</option>
<option value="3">Puñetazo</option>
</select>
</div>
<div><input type="submit" value="Ataca"></div>
</form>
<br>
<?php
@session_start();
include("conexion.php");
//Ejecutamos la sentencia SQL 
$result=mysql_query("select * from personajes");
echo "<TABLE BORDER='2'>";
echo "<th>Fuerza</th>";
echo "<th>Resistencia</th>";
while ($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row["fue"]."</td>";
echo "<td>".$row["res"]."</td>";
echo "</TR>";
}
mysql_free_result($result)
?>
</body>
</html>