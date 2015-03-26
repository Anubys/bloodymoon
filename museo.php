<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
//header('Content-Type: text/html; charset=UTF-8'); 
session_start();
include("conexion.php");
include("sentencias.php");
if(!isset($_SESSION['uid'])){
    echo "Tienes que estar logeado para ver esta pagina!";
}else{
	$loc="museo";
$user_login=$usuario['nomusuario'];
$upda=mysql_query("UPDATE `usuario` SET `ultima_loc`='$loc' where`nomusuario`='$user_login'")or die(mysql_error())
    ?>
    <div data-role="content">
    <!--<center><h2>Texto</h2></center>-->
    <?php
    $consulta2="SELECT * FROM escena where ID=17";
    $resultado = mysql_query($consulta2);
    while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["descripcion"];
    echo '<img src="'.$fila["imagen"].'">';
   }

mysql_free_result($resultado);

?>
<br>
<?php
echo "Un momento parece que se ha percatado de tu presencia ¿como es posible? Coge el cuchillo y se realiza un corte en la mano rapidamente mientras valvucea algo en un idioma imcomprensible, de repente toda la sala se llena de silencio, las personas que la habitaban parecen congeladas, inmoviles, tu objetivo se lanza sobre ti blandiendo el cuchillo.";
?>
<br>
<a href="combate_museo.php" data-role="button" data-mini="true">Voy a enfrentarme</a>
<a href="salida.php" data-role="button" data-mini="true">Mejor salir por patas</a>
       </body>
    </div>
  <?php
}
//include("footer.php");
?>
    </div>

    