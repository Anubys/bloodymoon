<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
</head>
<body>
    <div data-role="page">
    <div data-role="header">
        <h2>Cabecera</h2>
	<div data-role="navbar">
   <ul>
      <li><a href="#b" data-icon="grid" >Ficha</a></li>
      <li><a href="#a" data-icon="plus">Objetos</a></li>
      <li><a href="logout.php" data-icon="star">Logout</a></li>
   </ul>
</div> 
    </div>
<?php
session_start();
include("conexion.php");
include("sentencias.php");
if(!isset($_SESSION['uid'])){
    echo "Tienes que estar logeado para ver esta pagina!";
}else{
    ?>
    <div data-role="content">
    <center><h2>Personaje</h2></center>
    <br />
    <table data-role="table" class="ui-responsive">
	         <tr>
		    <tbody>
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
        
    </tbody>
    </table>
    
<body>
    <div id="menu">
	<ul <ul data-role="listview">>
  <li>Ciudad</li>
  <li>Guarida</li>
  <li>Parque</li>
</ul>

    </div>
    <iframe src="mapa.php" name="SubHtml"
      width="400" height="500" scrolling="auto" frameborder="1">
      <p>Texto alternativo para navegadores que no aceptan iframes.</p>
    </iframe>
  </body>
    </div>
  <?php
}
include("footer.php");
?>
    </div>
