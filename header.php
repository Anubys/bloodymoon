<html>
<head>
<title>BloodyMoon</title>
<link href="estilo.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="header">BloodyMoon(header)</div>
<div id="contenedor">
<div id="navegacion"><div id="navegacion_div">
<?php
if(isset($_SESSION['uid'])){
echo "Logeado";
}else{
    ?>
    <br />
     <form action="login.php" method="post">
     <b> Usuario</b>  <INPUT TYPE="text" NAME="nomusuario" size="10"><br />
     <b> Password</b> <INPUT TYPE="password" NAME="password" size="10"><br />
      <INPUT TYPE="submit" name="login" value="login"/>
     </form>
     <a href="registro.php">Crear Usuario</a> 
    <?php
   }
    ?>
</div></div>
<div id="contenido"><div id="contenido_div">