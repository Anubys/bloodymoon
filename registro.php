<?php
session_start();
include("header.php");
include("conexion.php");
?>
<br /><br />
<?php
if(isset($_POST['registro'])){
    $nomusuario = ($_POST['nomusuario']);
    $password = ($_POST['password']);
    $email = ($_POST['email']);
	$raza = ($_POST['raza']);
    
    if($nomusuario == "" || $password == "" || $email == ""){
        echo "Por favor complementa todos los campos!";
    }elseif(strlen($nomusuario) > 20){
        echo "El nombre del usuario no puede contener mas de 20 caracteres!";
    }elseif(strlen($email) > 100){
        echo "El campo de e-mail no puede contener mas de 100 caracteres!";
    }else{
        $register1 = mysql_query("SELECT `id` FROM `usuario` WHERE `nomusuario`='$nomusuario'") or die(mysql_error());
        $register2 = mysql_query("SELECT `id` FROM `usuario` WHERE `email`='$email'") or die(mysql_error());
        if(mysql_num_rows($register1) > 0){
            echo "Este usuario ya esta en uso!";
        }elseif(mysql_num_rows($register2) > 0){
            echo "Este e-mail ya esta en uso!";
        }else{
                        $ins3 = mysql_query("INSERT INTO `usuario` (`nomusuario`,`password`,`email`,`raza`,`FUE`,`AGI`,`INT`,`CAR`,`RES`) VALUES ('$nomusuario','".md5($password)."','$email','$raza','5','5','5','5','5')") or die(mysql_error());
                         if($raza=="Vampiro"){
                            
            echo "Has elegido vampiro";
            $upda=mysql_query("UPDATE `usuario` SET FUE=FUE+2,AGI=AGI+3,INT=INT+2,CAR=CAR+2,RES=RES+1" ) or die(mysql_error());
            }
            
            echo "Registro completo!";
        }
    }
}
?>
<form action="registro.php" method="POST">
Usuario: <input type="text" name="nomusuario"/><br />
Password: <input type="password" name="password"/><br />
E-mail: <input type="text" name="email"/><br />
 <label>Raza:</label>
<select name="raza">
<option value="Vampiro">Vampiro</option>
<option value="Hombre Lobo">Hombre Lobo</option>
<option value="Humano">Humano</option>
</select>
<input type="submit" name="registro" value="Registro"/>
</form>
<?php
include("footer.php");
?>