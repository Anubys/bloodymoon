<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="estilo.css" >
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
</head>
<body>
     <div data-role="page">
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
    $consulta="SELECT ultima_loc FROM usuario where nomusuario='$nomusuario'";
    $consultaloc = mysql_query($consulta);
       while($row = mysql_fetch_assoc($consultaloc)){
$localizacion=$row['ultima_loc'];
}
switch($localizacion) {
	case "palacio":
        echo "<script> document.location.href='palacio.php';</script>";
        break;
		case "salon":
        echo "<script> document.location.href='salon.php';</script>";
        break;
		case "bareto":
        echo "<script> document.location.href='bareto.php';</script>";
        break;
		case "interior":
        echo "<script> document.location.href='interior.php';</script>";
        break;
		case "parque":
        echo "<script> document.location.href='parque.php';</script>";
        break;
		case "libreria_a":
        echo "<script> document.location.href='libreria_abierta.php';</script>";
        break;
		case "uni":
        echo "<script> document.location.href='universidad.php';</script>";
		case "fiesta":
        echo "<script> document.location.href='fiesta.php';</script>";
		case "zoo":
        echo "<script> document.location.href='fiesta.php';</script>";
        break;
		case "palacio_noentrar":
		echo "<script> document.location.href='palacio_noentrar.php';</script>";
        break;
   default:
       echo "<script> document.location.href='#jugar.php';</script>";
	  
}
			 
        }
    }
}else{
    echo "No tienes acceso para ver esta pagina!";
}





include("footer.php");
?>
     </div>