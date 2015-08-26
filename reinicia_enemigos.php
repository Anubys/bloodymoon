<?php
include"conexion.php";
mysql_query("UPDATE `actores` SET `vida`=25 WHERE `nombre`='mujer_punk'") or die(mysql_error());
mysql_query("UPDATE `actores` SET `vida`=40 WHERE `nombre`='lobo'") or die(mysql_error());
mysql_query("UPDATE `actores` SET `vida`=30 WHERE `nombre`='gorila'") or die(mysql_error());
mysql_query("UPDATE `actores` SET `vida`=40 WHERE `nombre`='fornido'") or die(mysql_error());
mysql_query("UPDATE `actores` SET `vida`=50 WHERE `nombre`='eric'") or die(mysql_error());
?>