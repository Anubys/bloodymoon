<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="estilo.css">
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
	$existe_libro=$usuario['existe_libro'];
	$libro=$usuario['tiene_libro'];
	$eric=$usuario['historia_eric'];
	$existe_eric=$usuario['tiene_eric'];
	$user_login=$usuario['nomusuario'];
	$loc="palacio";
		if(($libro==1) && ($existe_eric==1) && ($eric==1) && ($existe_libro==1)){
	echo "<script> document.location.href='palacio_entrada.php';</script>";
}
if (($libro==0) && ($eric==0) && ($existe_eric==0) && ($existe_libro==0)) {
	echo "<script> document.location.href='palacio_noentrar.php';</script>";
}
if (($libro==0) && ($existe_eric==1)) {
	echo "<script> document.location.href='entrega_eric.php';</script>";
}
else {
	echo "<script> document.location.href='palacio_noentrar.php';</script>";
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
    $consulta="SELECT * FROM escena where nombre='palacio'";
    $resultado = mysql_query($consulta);
    while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["descripcion"];
    echo '<img src="'.$fila["imagen"].'">';
   }

mysql_free_result($resultado);


//$upda=mysql_query("UPDATE `usuario` SET `ultima_loc`='$loc' where`nomusuario`='$user_login'")or die(mysql_error());

?>
        <a href="salon.php" data-role="button" data-theme="a">Continuar</a>
  </body>
    </div>
  <?php
}
//include("footer.php");
?>
    </div>
