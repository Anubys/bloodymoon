
<?php
session_start();
include("conexion.php");
include("sentencias.php");
if(!isset($_SESSION['uid'])){
    echo "Tienes que estar logeado para ver esta pagina!";
}else{
    ?>
    <div data-role="content">
    <center><h2>Texto</h2></center>
    <?php
    $consulta="SELECT * FROM escena";
    $resultado = mysql_query($consulta);
    while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["descripcion"];
   }

mysql_free_result($resultado);

?>
  </body>
    </div>
  <?php
}
//include("footer.php");
?>
    </div>
