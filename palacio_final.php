<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="estilo.css">
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
	$eric=$usuario['historia_eric'];
	$user_login=$usuario['nomusuario'];
	$loc="palacio_final";
	$consulta_visita="SELECT visitada FROM escena where nombre='$loc'";
    $consultavisita = mysql_query($consulta_visita);
       while($row = mysql_fetch_assoc($consultavisita)){
$visita=$row['visitada'];
       }
if ($visita ==1){
 echo "Ya has visitado este lugar";
  //echo "<script> document.location.href='mapa.php';</script>";
       }
//else
if(($libro==1) && ($eric==1)){
	echo "<script> document.location.href='pasas_.php';</script>";
}
elseif (($libro==0) && ($eric==0)) {
	echo "<script> document.location.href='nopasas_palacio.php';</script>";
}	




    ?>
    <div data-role="content">
    <!--<center><h2>Personaje</h2></center>-->
    <!--<table data-role="table" class="ui-responsive">
	<tr>
		    <tbody>
    <td>Sangre: <i><?php echo $usuario['sangre_rabia']; ?></i></td
		      
        </tr>
    </tbody>
    </table>
        <br />-->
	<?php
    $consulta="SELECT * FROM escena where nombre='palacio_final'";
    $resultado = mysql_query($consulta);
    while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["descripcion"];
    echo '<img src="'.$fila["imagen"].'">';
   }

mysql_free_result($resultado);


$upda=mysql_query("UPDATE `usuario` SET `ultima_loc`='$loc' where`nomusuario`='$user_login'")or die(mysql_error());
$visitada=mysql_query("UPDATE `escena` SET `visitada`='1' where`nombre`='$loc'")or die(mysql_error());

?>
   

    
    <a href="catacumbas.php" data-role="button" data-theme="a">Continuar</a>
  </body>
    </div>
  <?php
}
//include("footer.php");
?>
    </div>