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
      <li><a href="mapa.php" data-icon="plus">Localizaciones</a></li>
      <li><a href="logout.php" data-icon="star">Logout</a></li>
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
    <!--<center><h2>Personaje</h2></center>-->
    <table data-role="table" class="ui-responsive">
	<tr>
		    <tbody>
    <td>Sangre: <i><?php echo $usuario['sangre_rabia']; ?></i></td
		      
        </tr>
    </tbody>
    </table>
        <br />
	<?php
    $consulta="SELECT * FROM escena where nombre='palacio'";
    $resultado = mysql_query($consulta);
    while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["descripcion"];
    echo '<img src="'.$fila["imagen"].'">';
   }

mysql_free_result($resultado);

?>
   

    
    <a href="salon.php" data-role="button" data-theme="a">Continuar</a>
  </body>
    </div>
  <?php
}
//include("footer.php");
?>
    </div>
