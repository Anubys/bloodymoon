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
$menu=$_POST['menu'];
include("conexion.php");
include("sentencias.php");
$aleatorio1=rand(1,6);
$aleatorio2=rand(1,4);
$fuerza=$usuario['FUE'];
$cuchillo=rand(1,10);
$user_login=$usuario['nomusuario'];
$suma1=$cuchillo+$fuerza;
$suma2=$aleatorio2+$fuerza;
$ataque1=$suma1;
$ataque2=$suma1+2;
$ataque3=$suma2;
$tuvida=$usuario['vida_total'];
$id_usuario=$usuario['id'];
if(!isset($_SESSION['uid'])){
    echo "Tienes que estar logeado para ver esta pagina!";
}

if ($tuvida <=0) {
echo "Tu personaje esta muerto";
echo "<script> document.location.href='muerte_personaje.php';</script>";
}
$consultaTactores="SELECT * FROM actores where nombre='fornido'";
            $consultamultiple = mysql_query($consultaTactores);
               while($row = mysql_fetch_assoc($consultamultiple)){
        $vida_enemigo=$row['vida'];
        $id_enemigo=$row['ID'];
      }
      $query = "insert into `combate` (`id_usuario`,`id_enemigo`,`vida`) values
        ('$id_usuario','$id_enemigo','$vida_enemigo')";
        $result = mysql_query($query)
    ?>
	<div data-role="content">
            <?php
            if($menu=="1") {
echo "Te lanzas blandiendo el cuchillo hacia el, le haces $ataque1 puntos de daño";
$consulta2="SELECT * FROM combate where id_enemigo=$id_enemigo and id_usuario=$id_usuario";
    $consultavida = mysql_query($consulta2);
       while($row = mysql_fetch_assoc($consultavida)){
$vida_enemigo=$row['vida'];
}
   $daño=$vida_enemigo-$ataque1;
$upda=mysql_query("UPDATE `combate` SET `vida`='$daño'where id_enemigo=$id_enemigo and id_usuario=$id_usuario")or die(mysql_error());
if ($vida_enemigo <=0){
echo "Esta muerta";
$borrar=mysql_query("DELETE FROM `combate` where`id_usuario`='$id_usuario'")or die(mysql_error());
 echo "<script> document.location.href='muerte_contrincante.php';</script>";
}
} elseif ($menu=="2") {
  echo "Le das un temible garrazo con tus afiladas garras y le haces $ataque3 puntos de daño";
  $consulta2="SELECT * FROM combate where id_enemigo=$id_enemigo and id_usuario=$id_usuario";
      $consultavida = mysql_query($consulta2);
         while($row = mysql_fetch_assoc($consultavida)){
  $vida_enemigo=$row['vida'];
  }
    $daño=$vida_enemigo-$ataque2;
    $upda=mysql_query("UPDATE `combate` SET `vida`='$daño' where id_enemigo=$id_enemigo and id_usuario=$id_usuario")or die(mysql_error());
  if ($vida_enemigo <=0){
  echo "Esta muerta";
  $borrar=mysql_query("DELETE FROM `combate` where`id_usuario`='$id_usuario'")or die(mysql_error());
   echo "<script> document.location.href='muerte_contrincante.php';</script>";
  }
}  elseif ($menu=="3") {
  echo "Aciertas a golpearle con un puñetazo certero y le haces $ataque3 puntos de daño";
  $consulta2="SELECT * FROM combate where id_enemigo=$id_enemigo and id_usuario=$id_usuario";
      $consultavida = mysql_query($consulta2);
         while($row = mysql_fetch_assoc($consultavida)){
  $vida_enemigo=$row['vida'];
  }
     $daño=$vida_enemigo-$ataque3;
    $upda=mysql_query("UPDATE `combate` SET `vida`='$daño' where id_enemigo=$id_enemigo and id_usuario=$id_usuario")or die(mysql_error());
  if ($vida_enemigo <=0){
  echo "Esta muerta";
$borrar=mysql_query("DELETE FROM `combate` where`id_usuario`='$id_usuario'")or die(mysql_error());
   echo "<script> document.location.href='muerte_contrincante.php';</script>";
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
$consulta7="SELECT * FROM actores where nombre='fornido'";
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
    <form data-ajax="false" method="POST" action="crea_combate_universidad.php" >
<select name="menu">
<option value="1">Cuchillo</option>
<option value="2">Garra</option>
<option value="3">Mordisco</option>
</select>
<div><input type="submit" value="Volver A Atacar"/>
 </form>
</div>
<br>
        </div>
