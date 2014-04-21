<?php
$get_usuario = mysql_query("SELECT * FROM `usuario` WHERE `id`='".$_SESSION['uid']."'") or die(mysql_error());
$usuario = mysql_fetch_assoc($get_usuario);
?>