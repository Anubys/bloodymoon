<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <li><a href="mapa.php" data-icon="plus">Localizaciones</a></li>
      <li><a href="logout.php" data-icon="star">Logout</a></li>
   </ul>
</div> 
    </div>
    <?php
session_start();
include("conexion.php");
include("sentencias.php");
$caza_aleatoria=rand(1,9);
$tusangre=$usuario['sangre_rabia'];
$user_login=$usuario['nomusuario'];
if(!isset($_SESSION['uid'])){
    echo "Tienes que estar logeado para ver esta pagina!";
    }else{
    ?>
    <div data-role="content">
	<?php
    $consulta2="SELECT * FROM escena where ID=11";
    $resultado = mysql_query($consulta2);
    while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["descripcion"];
    echo '<img src="'.$fila["imagen"].'">';
   }

mysql_free_result($resultado);
echo '</br>';
echo "A tu enemigo todavia le queda algo de sangre por lo que decides, intentar beber algo de sus sangre";
echo '</br>';
$recupera_sangre=$tusangre+$caza_aleatoria;
$upda=mysql_query("UPDATE `usuario` SET `sangre_rabia`='$recupera_sangre' where`nomusuario`='$user_login'")or die(mysql_error());
echo "recuperas $caza_aleatoria de sangre";

 ?>
   <a href="fiesta.php" data-role="button" data-theme="a">Continuar</a>
  </body>
    </div>
  <?php
}
//include("footer.php");
?>
    </div>