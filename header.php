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
    </div>
    <div data-role="content">
<?php
if(isset($_SESSION['uid'])){
echo "Logeado";
}else{
    ?>
    <br />
     <form data-ajax="false" method="post" action="login.php" >
     <b> Usuario</b>  <INPUT TYPE="text" NAME="nomusuario" size="10"><br />
     <b> Password</b> <INPUT TYPE="password" NAME="password" size="10"><br />
      <INPUT TYPE="submit" name="login" value="Iniciar Sesion"/>
     </form>
              <?php
   }
    ?>
        <div data-role="footer">
        <h2>BloodyMoon</h2>
    </div>
</div>
