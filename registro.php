<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery.mobile-1.0a4.1.min.css" />
	<script type="text/javascript" src="jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="jquery.mobile-1.0a4.1.min.js"></script>
</head>
<body>
    <div data-role="page">
    <div data-role="header">
        <h2>BloodyMoon</h2>
    </div>
    <?php
session_start();
include("conexion.php");
?>
<br /><br />
<?php
if(isset($_POST['registro'])){
    $nomusuario = ($_POST['nomusuario']);
    $password = ($_POST['password']);
    //$email = ($_POST['email']);
	$raza = ($_POST['raza']);

    if($nomusuario == "" || $password == ""){
        echo "Por favor complementa todos los campos!";
    }elseif(strlen($nomusuario) > 20){
        echo "El nombre del usuario no puede contener mas de 20 caracteres!";
    //}elseif(strlen($email) > 100){
        //echo "El campo de e-mail no puede contener mas de 100 caracteres!";
    }else{
        $register1 = mysql_query("SELECT `id` FROM `usuario` WHERE `nomusuario`='$nomusuario'") or die(mysql_error());
        //$register2 = mysql_query("SELECT `id` FROM `usuario` WHERE `email`='$email'") or die(mysql_error());
        if(mysql_num_rows($register1) > 0){
            echo "Este usuario ya esta en uso!";
        }//elseif(mysql_num_rows($register2) > 0){
            //echo "Este e-mail ya esta en uso!";
        else{
                        $ins3 = mysql_query("INSERT INTO `usuario` (`nomusuario`,`password`,`raza`,`FUE`,`AGI`,`INT`,`CAR`,`RES`,`sangre_rabia`,`vida`,`vida_total`) VALUES ('$nomusuario','".md5($password)."','$raza','5','5','5','5','5','10','35','35')") or die(mysql_error());
                         if($raza=="Vampiro"){
                        $upda=mysql_query("UPDATE `usuario` SET FUE=FUE+2,AGI=AGI+3,CAR=CAR+2,RES=RES+1 WHERE `nomusuario`='$nomusuario'and `raza`='$raza'")or die(mysql_error());
                  echo "Registro completado!";
                  echo '</br>';
                  echo "<td><a href='header.php'>Iniciar Sesion</a></td>";
            }else if ($raza=="Hombre Lobo") {
				echo "Has elegido Hombre lobo";
				$upda2=mysql_query("UPDATE `usuario` SET FUE=FUE+3,AGI=AGI+3,CAR=CAR+2,RES=RES+4 WHERE `nomusuario`='$nomusuario' and `raza`='$raza'")or die(mysql_error());

			}

            	     //echo "<script> document.location.href='header.php';</script>";
        }
    }
}
?>
<div data-role="content">
<form data-ajax="false" method="POST" action="registro.php" >
Usuario: <input type="text" name="nomusuario"/><br />
Password: <input type="password" name="password"/><br />
<!--E-mail: <input type="text" name="email"/><br /-->
 <label>Raza:</label>
<select name="raza">
<option value="Vampiro">Vampiro</option>
<!--<option value="Hombre Lobo">Hombre Lobo</option>-->
<!--<option value="Humano">Humano</option>-->
</select>
<input type="submit" name="registro" value="Registro"/>
</form>
    </div>
<div data-role="footer">
        <h2>Pie</h2>
    </div>
    </div>
