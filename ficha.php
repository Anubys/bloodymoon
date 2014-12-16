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
        <h2>BloodyMoon</h2>
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
	</div>
	<?php
}
include("footer.php");
?>
		 </div>