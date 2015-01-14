<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
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
    ?>
       <div data-role="content">
	
	<table border=0><tr><td align="center">
<map name="mapa1">
<area alt="Circle Pig" shape="CIRCLE" coords="175,68,8" href="#bareto.php">
<area alt="Parque" shape="CIRCLE" coords="270,592,8" href="#parque.php">
<area alt="Museo" shape="CIRCLE" coords="103,520,8" href="#museo.php">     
</map>
<img src="mapa.jpg" alt="Mapa de imágenes." border="0" usemap="#mapa1">
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