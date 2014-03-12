<?php
session_start();  
include("conexion.php");
//Sentencia SQL para buscar un usuario con esos datos
$seleccion=$_POST['seleccion'];
$result=mysql_query("select * from personajes");
$personaje1=mysql_query("select * from personajes where id_usuario='$seleccion'"); 
 
{
if($seleccion=="1") {           
  echo "Has seleccionado a $seleccion y su nombre es $result" ;
}
  else {
  echo "Selecciona Personaje";
        }
        }
        mysql_free_result($result)
        ?>
        
        
        
        
        
        
        
        