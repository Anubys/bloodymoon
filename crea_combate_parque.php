<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
      <li><a href="mapa.php" data-icon="plus">Mapa</a></li>
      <li><a href="logout.php" data-icon="star">Salir</a></li>
   </ul>
</div> 
    </div>
<?php
session_start();
$menu=$_POST['menu'];
include("conexion.php");
include("sentencias.php");
$aleatorio1=rand(1,6);
$aleatorio2=rand(1,4);
$fuerza=$usuario['FUE'];
$user_login=$usuario['nomusuario'];
$suma1=$aleatorio1+$fuerza;
$suma2=$aleatorio2+$fuerza;
$ataque1=$suma1+1;
$ataque2=$suma1+2;
$ataque3=$suma2;
$tuvida=$usuario['vida_total'];
if(!isset($_SESSION['uid'])){
    echo "Tienes que estar logeado para ver esta pagina!";
}
if ($tuvida <=0) {
echo "Tu personaje esta muerto";
echo "<script> document.location.href='muerte_personaje.php';</script>";
}
    ?>
	<div data-role="content">
            <?php
            if($menu=="1") {
echo "Te lanzas con los colmillos a su yugular y le haces $ataque1 puntos de daño";
 $consulta2="SELECT * FROM actores where nombre='gorila'";
    $consultavida = mysql_query($consulta2);
       while($row = mysql_fetch_assoc($consultavida)){
$muestravida=$row['vida'];
}
  $daño=$muestravida-$ataque1;
$upda=mysql_query("UPDATE `actores` SET `vida`='$daño' where`nombre`='gorila'")or die(mysql_error());
//echo "le queda $daño de vida";
if ($muestravida <=0){
echo "Esta muerta";
 echo "<script> document.location.href='muerte_contrincante_parque.php';</script>";
}
} elseif ($menu=="2") {
echo "Sacas las garras y te lanzas hacia tu oponente realizando $ataque2 puntos de daño";
$consulta3="SELECT * FROM actores where nombre='gorila'";
    $consultavida = mysql_query($consulta3);
       while($row = mysql_fetch_assoc($consultavida)){
$muestravida=$row['vida'];
       }
$daño=$muestravida-$ataque2;
$upda=mysql_query("UPDATE `actores` SET `vida`='$daño' where`nombre`='gorila'")or die(mysql_error());
//echo "le queda $daño de vida";
if ($muestravida <=0){
echo "Esta muerta";
 echo "<script> document.location.href='muerte_contrincante_parque.php.php';</script>";
}
}  elseif ($menu=="3") {
	echo "Propinas un puñetazo que hace $ataque3 puntos de daño";
	$consulta4="SELECT * FROM actores where nombre='gorila'";
    $consultavida = mysql_query($consulta4);
       while($row = mysql_fetch_assoc($consultavida)){
$muestravida=$row['vida'];
       }
       $daño=$muestravida-$ataque3;
       $upda=mysql_query("UPDATE `actores` SET `vida`='$daño' where`nombre`='gorila'")or die(mysql_error());
//echo "le queda $daño de vida";
if ($muestravida <=0) {
echo "Esta muerta";
 echo "<script> document.location.href='muerte_contrincante_parque.php';</script>";
}
       	}
	else {
		echo "Tienes que seleccionar un ataque";
		}
?>
<?php
		       
$consulta6="SELECT * FROM escena where ID=9";
    $resultado = mysql_query($consulta6);
    while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["descripcion"];
    echo '<img src="'.$fila["imagen"].'">';
   }

mysql_free_result($resultado);
$consulta7="SELECT * FROM actores where nombre='gorila'";
$consultafue = mysql_query($consulta7);
while($row = mysql_fetch_assoc($consultafue)){
    $muestrafuerza=$row['FUE'];
}
    $ataque_contrario=$aleatorio1+$muestrafuerza;
echo "Tu oponente contraataca con un formidable golpe realizandote  $ataque_contrario puntos de daño";
$tu_daño=$tuvida-$ataque_contrario;
$upda=mysql_query("UPDATE `usuario` SET `vida_total`='$tu_daño' where`nomusuario`='$user_login'")or die(mysql_error());
echo "Te quedan $tu_daño de vida";
if ($tuvida <=0) {
echo "Tu personaje esta muerto";
 echo "<script> document.location.href='muerte_personaje.php';</script>";
}
$consulta5="SELECT * FROM escena where ID=10";
    $resultado = mysql_query($consulta5);
    while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["descripcion"];
    echo '<img src="'.$fila["imagen"].'">';
   }

    ?>
    <form data-ajax="false" method="POST" action="crea_combate_parque.php" >
<select name="menu">
<option value="1">Mordisco</option>
<option value="2">Garra</option>
<option value="3">Puñetazo</option>
</select>
<div><input type="submit" value="Volver A Atacar"/>
 </form>
</div>
<br>
        </div>  
