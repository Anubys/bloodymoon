<?php
//conecto con la base de datos
include"conexion.php";
//Sentencia SQL para buscar un usuario con esos datos
$nombre_usuario=$_POST['nombre_usuario'];
$clave_usuario=$_POST['clave_usuario'];
$ssql =mysql_query ("select * from usuarios where nombre_usuario='$nombre_usuario' and validado='1'");

//vemos si el usuario y contraseña es valido
//si la ejecución de la sentencia SQL nos da algún resultado
//es que si que existe esa conbinación usuario/contraseña
if (mysql_num_rows($ssql)!=0){
    //usuario y contraseña válidos
    //defino una sesion y guardo datos
    session_start();
    session_register("autentificado");
    $autentificado = "SI";
    header ("Location: jugar.php");
    
    
}else {
    //si no existe le mando otra vez a login 
     
       header("Location: login.php?novalidado");
       
      
}


mysql_free_result($ssql);
?> 
