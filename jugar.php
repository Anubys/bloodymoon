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
		<td>Raza:</td>
            <td><i><?php echo $usuario['raza']; ?></i></td>
        </tr>
		<td>Caracteristicas:</td>
            <td>Fuerza:<i><?php echo $usuario['FUE']; ?></i></td>
			<td>Agilidad:<i><?php echo $usuario['AGI']; ?></i></td>
			<td>Inteligencia:<i><?php echo $usuario['INT']; ?></i></td>
			<td>Carisma:<i><?php echo $usuario['CAR']; ?></i></td>
			<td>Resistencia:<i><?php echo $usuario['RES']; ?></i></td>
        </tr>
        
    </table>
    
<body>
    <iframe src="mapa.php" name="SubHtml"
      width="400" height="500" scrolling="auto" frameborder="1">
      <p>Texto alternativo para navegadores que no aceptan iframes.</p>
    </iframe>
  </body>
  <?php
}
include("footer.php");
?>
