<?php
include"conexion.php";
$aleatorio=rand(1,4);
switch($aleatorio) {
	case 1:
        echo "<script> document.location.href='vendedora.php';</script>";
        break;
		case 2:
        echo "<script> document.location.href='parentela.php';</script>";
        break;
		case 3:
        echo "<script> document.location.href='entrada.php';</script>";
        break;
		case 4:
        echo "<script> document.location.href='llamada.php';</script>";
        break;
		   default:
       echo "<script> document.location.href='#mapa.php';</script>";
}
?>
