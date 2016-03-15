<?php
include"conexion.php";
include("sentencias.php");
$user_login=$usuario['nomusuario'];
$vida_extra=$_POST['slider'];
$sangre=$usuario['sangre_rabia'];
$sangre_total=$sangre-$vida_extra;
$upda=mysql_query("UPDATE `usuario` SET `vida_total`='$vida_extra' where`nomusuario`='$user_login'")or die(mysql_error());
$upda2=mysql_query("UPDATE `usuario` SET `sangre_rabia`='$sangre_total' where`nomusuario`='$user_login'")or die(mysql_error());
//header ("Location: ficha.php")
echo "<script> document.location.href='ficha.php';</script>";
?>
