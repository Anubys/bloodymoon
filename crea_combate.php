<?php
session_start();
$menu=$_POST['menu'];
include("conexion.php");
include("sentencias.php");
$aleatorio1=rand(1,6);
$aleatorio2=rand(1,4);
$fuerza=$usuario['FUE'];
$suma1=$aleatorio1+$fuerza;
$suma2=$aleatorio2+$fuerza;
$ataque1=$suma1+1;
$ataque2=$suma1+2;
$ataque3=$suma2;
if(!isset($_SESSION['uid'])){
    echo "Tienes que estar logeado para ver esta pagina!";
}else{
    ?>
	<div data-role="content">
            <?php
            if($menu=="1") {
echo "Te lanzas con los colmillos a su yugular y le haces $ataque1 puntos de da�o";
} elseif ($menu=="2") {
echo "Sacas las garras y te lanzas hacia tu oponente realizando $ataque2 puntos de da�o";
}  elseif ($menu=="3") {
	echo "Propinas un pu�etazo que hace $ataque3 puntos de da�o";
	}
	else {
		echo "Tienes que seleccionar un ataque";
		}
                                                 }
                         ?>
                       <?php
    $consulta2="SELECT * FROM actores where nombre='mujer_punk'";
    $consultavida = mysql_query($consulta2);
       while($row = mysql_fetch_assoc($consultavida)){
$muestravida=$row['vida'];
}
  $da�o=$muestravida-$ataque1;
echo "le queda $da�o de vida";
$consulta4="SELECT * FROM escena where ID=9";
    $resultado = mysql_query($consulta4);
    while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["descripcion"];
    echo '<img src="'.$fila["imagen"].'">';
   }

mysql_free_result($resultado);
$consulta3="SELECT * FROM actores where nombre='mujer_punk'";
$consultafue = mysql_query($consulta3);
while($row = mysql_fetch_assoc($consultafue)){
    $muestrafuerza=$row['FUE'];
}
    $ataque_contrario=$aleatorio1+$muestrafuerza;
$vida=$usuario['vida'];
echo "Tu oponente contraataca con un formidable golpe realizandote  $ataque_contrario puntos de da�o";
$tu_da�o=$vida-$ataque_contrario;
echo "Te quedan $tu_da�o de vida";
$consulta5="SELECT * FROM escena where ID=10";
    $resultado = mysql_query($consulta5);
    while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["descripcion"];
    echo '<img src="'.$fila["imagen"].'">';
   }


    ?>
    
        </div>
    
