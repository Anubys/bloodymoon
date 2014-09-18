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
echo "Te lanzas con los colmillos a su yugular y le haces $ataque1 puntos de daño";
} elseif ($menu=="2") {
echo "Sacas las garras y te lanzas hacia tu oponente realizando $ataque2 puntos de daño";
}  elseif ($menu=="3") {
	echo "Propinas un puñetazo que hace $ataque3 puntos de daño";
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
  $daño=$muestravida-$ataque1;
echo "le queda $daño de vida";
    ?>
        </div>
    
