<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
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
    ?>
       <div data-role="content">
	
	<table border=0><tr><td align="center">
<map name="mapa1">
<area alt="Circle Pig" shape="CIRCLE" coords="140,47,60" href="#bareto.php">
<area alt="Parque" shape="CIRCLE" coords="218,578,80" href="#parque.php">
<area alt="Museo" shape="CIRCLE" coords="81,494,60" href="#museo.php"> 
<area alt="libreria" shape="CIRCLE" coords="189,345,64"href="#libreria.php">
<area alt="universidad" shape="CIRCLE" coords="150,147,90"href="#universidad.php"> 
<area alt="palacio" shape="CIRCLE" coords="57,319,90"href="#palacio.php">

</map>
<img src="mapa.jpg" alt="Mapa de im�genes." border="0" usemap="#mapa1">
<br>
</td></tr></table> 
        
       </div>
       </body>
    </div>
     <?php
}
//include("footer.php");
?>
      </div>
