<?php
//conecto con la base de datos
include"conexion.php";
//Sentencia SQL para buscar un usuario con esos datos
$nombre_personaje=$_POST['nombre_personaje'];
$ssql =mysql_query ("select * from personajes where nombre_personaje='$nombre_personaje' and creado='1'");    
//creado = 1 lo ponemos nosotros cuando la ficha esta completa correctamente CADA FICHA DE ESTA FORMA SE APRUEBA INDIVIDUALMENTE.

//vemos si el personaje esta creado, o lo que es lo mismo, que hemos aceptado su ficha...
//si la ejecución de la sentencia SQL nos da algún resultado
//es que si que existe esta creado el pj listo para jugar.
if (mysql_num_rows($ssql)!=0){
    //personaje valido
    //defino una sesion y guardo datos
    session_start();
    session_register("creado");
    $creado = "SI";
    header ("Location: jugar.php");
    
    
}else {
    //si no esta creado le remito a ficha para que acabe de completar el registro
     
       header("Location: ficha.php?CompletaLaFichaCorrectamenteYesperaAserCreada_Aprobada");
         
       
          }


mysql_free_result($ssql);
?> 

 
