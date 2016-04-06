<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="estilo.css" >
<link rel="stylesheet" href="jquery.mobile-1.0a4.1.min.css" />
	<script type="text/javascript" src="jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="jquery.mobile-1.0a4.1.min.js"></script>
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
		$loc="libreria_c";
$user_login=$usuario['nomusuario'];
$upda=mysql_query("UPDATE `usuario` SET `ultima_loc`='$loc' where`nomusuario`='$user_login'")or die(mysql_error());
$upda=mysql_query("UPDATE `usuario` SET `tiene_libro`='1' where`nomusuario`='$user_login'")or die(mysql_error());
$upda3=mysql_query("UPDATE `usuario` SET `libro`='libro' where`nomusuario`='$user_login'")or die(mysql_error());

					    ?>
    <div data-role="content">

<?php
    $consulta3="SELECT * FROM actores where nombre='librero'";
    $resultado2 = mysql_query($consulta3);
    while ($fila = mysql_fetch_assoc($resultado2)) {
	 echo '<img src="'.$fila["imagen"].'">';
     echo $fila["charla"];

   }
   mysql_free_result($resultado2);
   ?>
<a href="mapa.php" data-role="button" data-mini="true">Salir</a>
       </body>
    </div>
  <?php
}
//include("footer.php");
?>
    </div>
