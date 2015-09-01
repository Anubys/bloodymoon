<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
</head>
<body>
    <div data-role="page">
    <div data-role="header">
        <h2>BloodyMoon</h2>
	<div data-role="navbar">
   <ul>
      <li><a href="ficha.php" data-icon="grid" >Ficha</a></li>      
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
	$user_login=$usuario['nomusuario'];
	$loc="catacumbas";
	$consulta_visita="SELECT visitada FROM escena where nombre='$loc'";
    $consultavisita = mysql_query($consulta_visita);
       while($row = mysql_fetch_assoc($consultavisita)){
$visita=$row['visitada'];
       }
if ($visita ==1){
 echo "Ya has visitado este lugar";
  //echo "<script> document.location.href='mapa.php';</script>";
       }
else
    ?>
    <div data-role="content">
    <!--<center><h2>Personaje</h2></center>-->
    <!--<table data-role="table" class="ui-responsive">
	<tr>
		    <tbody>
    <td>Sangre: <i><?php echo $usuario['sangre_rabia']; ?></i></td
		      
        </tr>
    </tbody>
    </table>
        <br />-->
	<?php
    $consulta="SELECT * FROM escena where nombre='catacumbas'";
    $resultado = mysql_query($consulta);
    while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["descripcion"];
    echo '<img src="'.$fila["imagen"].'">';
   }

mysql_free_result($resultado);

?>
<br>
<?php
echo "Detras esta esa cosa que en algun momento fue mi mujer, os dice el principe, con voz apenada, devolvedla al lugar de donde nunca debio salir, los brujos me dicen que esos sortilegios no aguantaran mucho mas, y con cada luna se vuelve mas poderosa, aunque ahora parece tranquila, comprobareis en un rato que esto no es asi.";
echo '<br/>';
echo "Solo mi sangre, puede romper esas cadenas, pero ella es muy fuerte y yo estoy muy debilitado, por lo que no podemos esperar mucho mas, abrire la puerta para que podais enfrentaros a ella y devolverla a su mundo,pero para no correr ningun riesgo mis brujos sellaran magicamente toda la sala cuando yo salga.";
echo '<br/>';
echo "El principe, se realiza un corte en la mano con un pequeño estilete, con la mano ensangrentada, toda las cadenas, las cuales empiezan a derretirse, mientras observais como las runas comienzan a desaparecer, Buena suerte la vais a necesitar,dice mientras abandona la sala, y sus brujos la sellan magicamente.";
echo '<br/>';
echo "Eric y tu os mirais, mientras escribe rapidamente varias palabras o frases del libro en el cuchillo en un idioma que no entiendes y te lo da, para que pueda caminar al otro lado y devolverla a su mundo, el demonio tiene que estar debilitado, esa es tu labor mientras yo preparo el sortilegio.";
echo '<br/>';
echo "En ese mismo momento las cadenas acaban de desaparecer y la puerta estalla en vuestras narices, dando paso a una horripilante criatura que en algun momento fue humana, con temibles garras y colmillos y aspecto tenebroso.";
echo '<br/>';
?>
<?php
$upda=mysql_query("UPDATE `usuario` SET `ultima_loc`='$loc' where`nomusuario`='$user_login'")or die(mysql_error());
$visitada=mysql_query("UPDATE `escena` SET `visitada`='1' where`nombre`='$loc'")or die(mysql_error());

?>
   

    
    <a href="xxx.php" data-role="button" data-theme="a">Continuar</a>
  </body>
    </div>
  <?php
}
//include("footer.php");
?>
    </div>
