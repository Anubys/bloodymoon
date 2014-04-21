<?php
session_start();
include("header.php");
include("conexion.php");
include("sentencias.php");
if(!isset($_SESSION['uid'])){
    echo "Tienes que estar logeado para ver esta pagina!";
}else{
    ?>
    <center><h2>Personaje</h2></center>
    <br />
    <table cellpadding="3" cellspacing="5">
        <tr>
            <td>Usuario:</td>
            <td><i><?php echo $usuario['nomusuario']; ?></i></td>
        </tr>
        
    </table>
    
                       <?php
}
include("footer.php");
?>
