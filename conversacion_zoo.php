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
//header('Content-Type: text/html; charset=UTF-8'); 
session_start();
include("conexion.php");
include("sentencias.php");
$user_login=$usuario['nomusuario']
if(!isset($_SESSION['uid'])){
    echo "Tienes que estar logeado para ver esta pagina!";
}else{
	$loc="conversacion_zoo";
$consulta_visita="SELECT visitada FROM escena where nombre='$loc'";
    $consultavisita = mysql_query($consulta_visita);
       while($row = mysql_fetch_assoc($consultavisita)){
$visita=$row['visitada'];
       }
if ($visita ==1){
echo "<script> document.location.href='sin_salida.php';</script>";
 echo '<a href="mapa.php" data-role="button" data-mini="true">Salida</a>';
         }
		 else {
    ?>
    <div data-role="content">
    <!--<center><h2>Texto</h2></center>-->
    <?php
    $consulta2="SELECT * FROM escena where ID=19";
    $resultado = mysql_query($consulta2);
    while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["descripcion"];
    echo '<img src="'.$fila["imagen"].'">';
   }

mysql_free_result($resultado);
$upda=mysql_query("UPDATE `usuario` SET `ultima_loc`='$loc' where`nomusuario`='$user_login'")or die(mysql_error());
$visitada=mysql_query("UPDATE `escena` SET `visitada`='1' where`nombre`='$loc'")or die(mysql_error());
?>
<br>
<?php
echo "Maldicion, alguien viene, seguro que el principe, tiene a mas personas buscandome aparte de ti, rapido sigueme.";
?>
<br>
<a href="combate.php" data-role="button" data-mini="true">Te vienes a ver al principe</a>
<a href="refugio.php" data-role="button" data-mini="true">Salgamos de aqui pitando</a>
       </body>
    </div>
  <?php
}
}
//include("footer.php");
?>
    </div>

    