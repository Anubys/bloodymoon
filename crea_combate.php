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
echo "Has seleccionado Mordisco y has echo $ataque1 puntos de daño";
} elseif ($menu=="2") {
echo "Has seleccionado Garra y has echo $ataque2 puntos de daño";
}  elseif ($menu=="3") {
	echo "Has seleccionado puñetazo y has echo $ataque3 puntos de daño";
	}
	else {
		echo "Tienes que seleccionar un ataque";
		}
                                                }
                         ?>
                         <script>
     $(location).attr('href', 'combate.php');
 </script>                            </div>
