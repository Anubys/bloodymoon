<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" >
  <link rel="stylesheet" type="text/css" href="estilo.css" >
 <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
</head>
<body>
    <div data-role="page">
    <div data-role="header">
        <h2>BloodyMoon</h2>
	<div data-role="navbar">
   <ul>
      <li><a href="ficha.php" data-icon="grid" >Ficha</a></li>
      <li><a href="mapa.php" data-icon="plus">Mapa</a></li>
      <li><a href="logout.php" data-icon="star">Salir</a></li>
   </ul>
</div> 
    </div>
    
    <?php
session_start();
include("conexion.php");
include("sentencias.php");
if(!isset($_SESSION['uid'])){
    echo "Tienes que estar logeado para ver esta pagina!";
    }else{
		$user_login=$usuario['nomusuario'];
		$loc="bareto";
		$consulta_visita="SELECT bareto FROM usuario where `nomusuario`='$user_login'";
    $consultavisita = mysql_query($consulta_visita);
       while($row = mysql_fetch_assoc($consultavisita)){
$visita=$row['bareto'];
	   }
	   if ($visita==1)
	   {
echo "Ya has visitado este lugar";
echo '<a href="mapa.php" data-role="button" data-mini="true">Salida</a>';	 
	   }
	   else
 { 
$visitada=mysql_query("UPDATE `usuario` SET `bareto`='1'where`nomusuario`='$user_login'")or die(mysql_error());
?>
<div data-role="content">
    <!--<center><h2>Texto</h2></center>-->
    <?php
    $consulta2="SELECT * FROM escena where ID=5";
    $resultado = mysql_query($consulta2);
    while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["descripcion"];
    echo '<img src="'.$fila["imagen"].'">';
   }

mysql_free_result($resultado);
$upda=mysql_query("UPDATE `usuario` SET `ultima_loc`='$loc' where`nomusuario`='$user_login'")or die(mysql_error());
?>
<br>
<?php
echo "Un camarero, alto y bien formado se acerca hacia ti, dedicandote una magnifica sonrisa";
?>
<br>
<?php
    $consulta3="SELECT * FROM actores where nombre='camarero'";
    $resultado2 = mysql_query($consulta3);
    while ($fila = mysql_fetch_assoc($resultado2)) {
    echo $fila["charla"];
       
   }
   mysql_free_result($resultado2);
  }
?>    
   </div>
<a href="interior.php" data-role="button" data-mini="true">Si,gracias</a>
<a href="mapa.php" data-role="button" data-mini="true">No,me largo</a>
       </div>
    </body>
	</html>
<?php
}
//include("footer.php");
?>	