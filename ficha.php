<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="estilo.css" >
<link rel="stylesheet" href="jquery.mobile-1.0a4.1.min.css" />
	<script type="text/javascript" src="jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="jquery.mobile-1.0a4.1.min.js"></script>
</head>
<body>
		 <div data-role="page">
    <div data-role="header">
        <h2>BloodyMoon</h2>
        <div data-role="navbar">
         <ul>
            <li><a href="ficha.php" data-icon="grid" >Ficha</a></li>
            <li><a href="mapa.php" data-icon="plus">Mapa</a></li>
            <li><a href="logout.php" data-icon="star">Salir</a></li>
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

		        <td>FUE:<i><?php echo $usuario['FUE']; ?></i></td>
			<td>AGI:<i><?php echo $usuario['AGI']; ?></i></td>
			</tr>
			<td>INT:<i><?php echo $usuario['INT']; ?></i></td>
			<td>CAR:<i><?php echo $usuario['CAR']; ?></i></td>
			<td>REST:<i><?php echo $usuario['RES'];?></i></td>
			</tr>
		 <td>Reserva de Sangre:</td>
	<td><i><?php echo $usuario['sangre_rabia']; ?></i></td>
	</tr>
		 <td>Vida:</td>
        <td><i><?php echo $usuario['vida_total']; ?></i></td>

        </tr>
    </tbody>
    </table>
		Cuando tu vida este por debajo de tu reserva de sangre, puedes gastar sangre para recuperar vida.

	<form <form data-ajax="false" method="post" action="actualiza_vida.php">
	<label for="slider-0">Vida:</label>
   <input type="range" name="slider" id="slider-0" value=<?php echo $usuario['vida_total']; ?> min=<?php echo $usuario['vida_total']; ?> max=<?php echo $usuario['sangre_rabia']; ?>  />
	<input type="submit" data-inline="false" value="Actualiza">
	</form>
	<table data-role="table" class="ui-responsive">
	<tr>
		    <tbody>
           <td>Inventario:</td>
		   </tr>
		   <td><i><?php echo $usuario['amuleto']; ?></i></td>
		   <td><i><?php echo $usuario['entrada']; ?></i></td>
		   <td><i><?php echo $usuario['libro']; ?></i></td>
	 </tr>
	 	 	</tbody>
    </table>
	</div>
	<?php
}
include("footer.php");
?>
		 </div>
