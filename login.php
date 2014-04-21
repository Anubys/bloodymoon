<?php
session_start();
include("header.php");
include("conexion.php");
if(isset($_POST['login'])){
    if(isset($_SESSION['uid'])){
        echo "ya estas logeao!";
    }else{
        $nomusuario = ($_POST['nomusuario']);
        $password = ($_POST['password']);
        
        $login_check = mysql_query("SELECT `id` FROM `usuario` WHERE `nomusuario`='$nomusuario' AND `password`='".md5($password)."'") or die(mysql_error());
        if(mysql_num_rows($login_check) == 0){
            echo "Usuario/password invalido!";
        }else{
            $get_id = mysql_fetch_assoc($login_check);
            $_SESSION['uid'] = $get_id['id'];
            header("Location: jugar.php");
        }
    }
}else{
    echo "No tienes acceso para ver esta pagina!";
}



include("footer.php");
?>