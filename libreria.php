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
		$libro=$usuario['existe_libro'];
if($libro==1){
	echo "<script> document.location.href='libreria_abierta.php';</script>";
}
elseif ($libro==0) {
	echo "<script> document.location.href='libreria_cerrada.php';</script>";
}
			    ?>
    <div data-role="content">
    <!--<center><h2>Texto</h2></center>-->
    <?php
    $consulta2="SELECT * FROM escena where ID=24";
    $resultado = mysql_query($consulta2);
    while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["descripcion"];
    echo '<img src="'.$fila["imagen"].'">';
   }

mysql_free_result($resultado);
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
   ?>
<a href="interior.php" data-role="button" data-mini="true">Si,gracias</a>
<a href="interior.php" data-role="button" data-mini="true">No,solo voy a echar un vistazo</a>
       </body>
    </div>
  <?php
}
//include("footer.php");
?>
    </div>

    