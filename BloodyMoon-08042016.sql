-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2016 a las 13:55:32
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `juego`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actores`
--

CREATE TABLE IF NOT EXISTS `actores` (
`ID` tinyint(2) NOT NULL,
  `nombre` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `charla` text COLLATE utf8_spanish_ci NOT NULL,
  `FUE` int(10) NOT NULL,
  `RES` int(10) NOT NULL,
  `vida` tinyint(2) NOT NULL,
  `vida_total` tinyint(2) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `actores`
--

INSERT INTO `actores` (`ID`, `nombre`, `charla`, `FUE`, `RES`, `vida`, `vida_total`, `imagen`) VALUES
(1, 'camarero', 'Buenas noches, desea una mesa para cenar, tengo una muy buena, al lado de la ventana, desde hay podrá disfrutar de unas magnificas vistas de Chicago mientras degusta nuestros platos.', 0, 0, 0, 0, ''),
(2, 'eric', 'Me despierto por la noches con visiones, que me muestran rodeado de otros como yo, criaturas mitad lobo mitad humano reunidos junto al fuego en un claro a la luz de la luna, ellos me dicen que yo soy un caminante como ellos y que tengo el poder de pasear entre este mundo y el mundo espiritual,es una autentica pesadilla.Creo que el príncipe quiere usarme como moneda de cambio, para recuperar algo.Pero tengo vagos recuerdos, solo recuerdo una imagen de mi blandiendo un cuchillo y recitando un texto de un libro sobre un cuerpo inerte.', 0, 0, 60, 60, ''),
(3, 'fornido', '', 6, 6, 40, 40, ''),
(5, 'gorila', '', 5, 4, 30, 30, ''),
(6, 'librero', 'Ya le dije a Marcell que ese maldito ritual iba a traer problemas, pero el se empeño en traer de vuelta a su fallecida mujer y ahora no pueden detener lo que han despertado. Lo que era una vez una gentil mujer, ahora se torna como un demonio despiadado y cruel, Marcell la quiere pero sus brujos no podrán mantenerla encerrada mucho mas,mucho me temo, que la única persona que puede pararlo es aquel que lo ha invocado, un joven descendiente de la tribu de los caminantes de sueños que rapto,necesita el libro y el joven para devolver a ese demonio al lugar de donde provino.Pero este ha escapado y no sabemos donde esta, es por eso que te encomendó a ti buscarle,toma el libro.', 0, 0, 0, 0, 'librero.jpg'),
(7, 'lobo', '', 9, 9, 40, 40, ''),
(8, 'mujer_punk', 'Vaya vaya así que el príncipe ha mandado a otro perrito faldero a hacerle el trabajo sucio, no se que te habrá contado de todo esto, pero tu presencia no es bienvenida, tu y los malditos chupa sangres de tu especie podéis largaros por donde habéis venido.LARGATE AHORA MISMO, O LAMENTARAS HABER VENIDO.', 5, 5, 25, 25, ''),
(9, 'principe', 'Te hemos echo llamar porque necesitamos de tu ayuda, tenemos un problema importante y pensamos que puedes ser la persona adecuada para resolverlo,necesitamos encontrar a esta persona, toma esta una foto,es muy importante que la traigas ante nosotros viva por supuesto.Te proporcionaremos un mapa, de los sitios donde se le vio por ultima vez,es una misión importante, para la que seras ampliamente recompensado.', 0, 0, 0, 0, ''),
(10, 'profesor', 'Antes de que puedas contestar a la pregunta empieza a hablar sobre la exposición,es una de mis preferidas todos los artefactos que se exponen fueron traídos de un túmulo indio, al oeste de Milwaukee, la exposición se llama "Camina al otro lado" y tiene ese nombre en honor a la tribu donde fueron encontrados, las leyendas dicen que tenían la posibilidad de viajar al "otro lado" realizando ciertos rituales.Si quieres mas información sobre el tema,  te recomiendo que leas mi libro "caminantes de sueños".\r\nPerdona tengo un poco de prisa me tengo que ir\r\n', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combate`
--

CREATE TABLE IF NOT EXISTS `combate` (
  `id_usuario` tinyint(2) NOT NULL,
  `id_enemigo` tinyint(2) NOT NULL,
  `vida` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escena`
--

CREATE TABLE IF NOT EXISTS `escena` (
`ID` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `escena`
--

INSERT INTO `escena` (`ID`, `nombre`, `descripcion`, `imagen`) VALUES
(0, 'palacio', 'Un fastuoso palacio de arquitectura neogotica se levanta ante ti, sus muros negros como la noche y sus fuertes puertas, diseñan una fortaleza perfecta para proteger a la realeza vampirica.', 'palacio.jpg'),
(4, 'salon', 'Un salón inmenso se abre ante ti, la majustuosidad del mismo, te nubla la visión.\r\n\r\nDelante de ti, aparecen varias personas, impecablemente vestidas sus pálidas pieles reflejan su naturaleza vampirica.\r\n\r\nUna de ellas, se dirige hacia ti, es el príncipe Marcell el máximo responsable vampiro de tu ciudad.', 'salon.jpg'),
(5, 'bareto', 'El purpple pig, es uno de los mejores restaurantes de chicago, cocina Europea, contemporanea,un lugar ideal, para tomar unas cerverzas y disfrutar de un buen plato de cerdo.\r\n\r\nEn el interior no encuentras muchos rastros de vampiros, seguramente estos prefieron lugares mas elitistas y sofisticados, pero los contactos del principe dijeron que la persona que buscas suele frecuentar este sitio.', 'purpple.jpg'),
(6, 'interior_bareto', 'Te convences, que para no levantar sospechas lo mejor que puedes hacer es tomar acomodo en la mesa que te han ofrecido.\r\n\r\nEs una magnifica mesa, con buenas vistas, la comida parece exquisita aunque evidentemente no puedas ni probarla.\r\n\r\nMientras que simulas que comes, te das cuenta que hay una mujer alta de pelo oscuro y vestimenta punk que esta preguntando al camarero y señalándote.\r\n\r\n', 'purpple_interior.jpg'),
(7, 'salida', 'Todavia eres muy joven para recibir la muerte "definitiva" asi que decides que una retirada a tiempo es una victoria.\r\n</br>\r\no por lo menos eso dicen los cobardes', 'salida.jpg'),
(8, 'combate', 'Decides que a veces es necesario enfrentarse a los problemas por lo que decides, enfrentarte, dejandole ver tus temibles garras y afilados colmillos.', 'combate.jpg'),
(9, 'enfrentamiento', '', 'enfrentamiento.jpg'),
(10, 'contraataque', '', 'contraataque.jpg'),
(11, 'muerte_contrincante', 'Por fin acabas con tu contrincante, mientras te deleitas, viendo como tiñe de sangre el terreno en el que te encuentras.\r\n', 'muerte.jpg'),
(12, 'personaje_muerto', 'Sientes un dolor extraño,agudo y fuerte mientras ves como tu no-vida se va apagando lentamentamente, tu final definitivo ha llegado.', 'personaje_muerto.jpg'),
(13, 'parque', 'Sabes que el Millenium park , es un lugar muy frecuentado por los turistas, y un autentico atractivo para los turistas que vienen a chicago, pero el lugar marcado en el mapa es una zona alejada de la muchedumbre en la parte mas oscura del parque donde se reunen las  bandas nocturnas y  la peor escoria que te puedas encontrar, pero tienes una misión y no vas a dejarte amedrentar por nadie, el parque esta oscuro, mas oscuro de lo habitual, hay varias farolas con las bombillas rotas, lo que provocan el parque este sumido en las penumbras, empiezas a avanzar por el parque, en los lados hay grupos de chavales y no tan chavales fumando y bebiendo en los bancos y en el suelo, al fondo se escucha una estridente música de rock metal, y varias luces de coches. Parece una fiesta dentro de un pequeño edificio abandonada en medio del parque y los dos gorilas de la puerta parecen indicarte que no estas invitado. Uno de ellos te agarra por el brazo.\r\n\r\n', 'parque.jpg'),
(14, 'fiesta', 'Una vez que te has desecho de los guardias, sin levantar sospechas sobre tu naturaleza, te adentras en la fiesta, muchos chicos y chicas jóvenes con varias copas de mas, pero ni rastro de tu presa. Empiezas a investigar por las distintas estancias del lugar intentando no levantar sospechas.\r\n\r\nLa mayoria de las habitaciones estan practicamente llenas de gente bebiendo y fumando, mientras conversan o escuchan musica estridente', 'fiesta.jpg'),
(15, 'conversa_fiesta', 'Decides quedarte en la fiesta y intentar averiguar algo sobre el extraño de la ventana, la pelea con los gorilas de la puerta te ha echo perder mucha sangre.\r\n\r\nTus conversciones con los participantes en la fiesta no llegan a buen puerto, la mayoria estan borrarchos o muy drogados, solo consigues sacar en claro, que a la mayoria le parece que ultimamente acuden personas extrañas a las fiestas.\r\n\r\nCuando ibas a marcharte encuentras una entrada para el Chicaco Cultural Center.', 'conversar.jpg'),
(16, 'caza', 'Mientras avanzas de manera elegante por todo el recinto, vas eligiendo selectivamente a tus victimas, hay tantas personas es un avanzado estado de imbriaguez que esta va a ser una suculenta cena sin problemas.', 'caza.jpg'),
(17, 'museo', '\r\nAccedes con tu entrada, el museo esta totalmente repleto, pero en la esquina te del mismo hay una persona muy parecida a la que estas buscando, esta jugueteando con un cuchillo ritual, mientras observa la gigantesca pantalla donde se reproducen, representaciones animadas de los distintos tipos de rituales.\r\n', 'museo.jpg'),
(18, 'zoo', 'Es rapido muy rapido, pero tu tambien lo eres, le persigues hasta una zona alejada del parque donde se encuentra un abandonado zoo, el olor nauseabundo de las jaulas de los animales te tira para detras, las jaulas estan totalmente abandonadas y destruidas, los animales fueron trasladados a un nuevo zoo al otro lado de la ciudad y esta a quedado en deshuso. Avanzas lentamente entre las jaulas intentando no hacer mucho ruido cuando de repente oyes unos fuertes "gruñidos" detras de ti al darte la vuelta, observas dos lobos de piel oscura como la noche y  ojos brillantes mirandote firmemente con cara de muy pocos amigos.\r\n', 'lobo.jpg'),
(19, 'conversa_zoo', 'En el mismo momento en que terminas con al vida del lobo, el otro lobo que habia permanecido al margen se transforma en la persona que buscas, un hombre joven, vestido como un trampero o sacado de alguna tribu india.\r\n\r\nNo me mates, porfavor permiteme explicarme y si cuando termine todavia quieres hacerlo adelante.\r\n\r\nEn realidad el principe te ha estado manipulando para sus propios intereses, yo fui capturado por esbirros del principe en las zonas montañosas de Milwaukee y ha permanecido encerrado en el palacio largos años, hasta que ha podido escaparme, estos años el principe no ha parado de hacerme preguntas sobre mi origen, pero la verdad es que no recuerdo absolutamente nada de mi pasado,  solo ha estado haciendo lo que su propia naturaleza me pedia, ¿acaso es eso un crimen? ". Os ruego que me dejeis en paz.', 'eric.jpg'),
(20, 'despertar', 'Miras expectante por la ventana de tu refugio como el sol se oculta son las ocho de la noche y chicago esa ciudad magica te espera, y a los vampiros nos gusta ser puntuales. Mientras sales hacia afuera suena el movil, parece ser la voz de Aston la mano derecha del lider vampiro de tu ciudad, quiere verte,asi que te diriges a su fastuoso palacio.', 'despertar.jpg'),
(21, 'huida', 'Su ataque ha sido brutal, el cuchillo estaba tan afilado que ha desgarrado parte de tus tejidos, el dolor es insoportable, apenas puedes mantenerte en pie, cuando le ves saltar por la ventana y deslizarse por la escalera de incendios.\r\n\r\nTu estado no permite seguirle, por lo que lo mejor sera investigar por la estancia o largarse del lugar.\r\n', 'huida.jpg'),
(22, 'investiga_museo', 'Decides investigar un poco por la estancia y observas a una persona de unos 50 años, con ropa bastante anacronica, colocando unas basijas en una estanteria, en la solapa tiene una tarjetas identificativa con un nombre Profesor Beagle.\r\n', 'profesor.jpg'),
(23, 'refugio_eric', 'Decides confiar en eric y salir rapidamente del lugar, este te lleva por los alrededores de la universidad, hasta encontrar un pequeño agujero cerca de una arboleda, bajais hasta lo que parece un  pasaje escavado en la tierra.Caminais por el angosto pasaje hasta q1ue al fondo vislumbrais une pequela luz artificil, Ya hemos llegado comenta Eric.\r\n\r\nAnte ti se muestra un pequeño habitaculo, que parece que sirve de refugio a Eric.', 'refugio.jpg'),
(24, 'libreria', ' La librería situada en la calle St Lake es una vieja librería,en proceso de enbargo por impago, todos los libros se encuentran apilados por toda la estancia,con una buena capa de polvo en ellos, el propietario parece que esta recogiendo todo el material que quiere salvar el embargo en varios cajas y embalajes.\r\n', 'libreria.jpg'),
(25, 'libreria_cerrada', 'La libreria totalmente cerrada, con un cartel que lo indica, tal vez puedas volver en otro momento, cuando tengas algo que buscar.', 'libreria_cerrada.jpg'),
(26, 'universidad', 'El campus de la universidad de chicago esta desoladamente vacio por las noches, las puertas de la entrada le dan un aspecto lugubre que hacen que sientas un halo de misterio, cuando las cruzas,un grito de terror interrumpe ese halo, parece venir de dentro del campus, decides acudir y cual es tu sorpresa al ver que un par de vampiros de aspecto fornidos se llevan a tu presa, cogido del brazo, a uno de ellos se le cae un afilado cuchillo que te han quitado al chico.\r\n', 'universidad.jpg'),
(27, 'historia_libro', 'Tengo, el libro que ves en tus sueños, es un libro ritual de una antigua tribu de hombres lobo, de la que tu provienes que pueden viajar al mundo de los espíritus, el príncipe te capturo para que caminaras al mundo espiritual y trajeras de vuelta a su mujer fallecida, pero algo ha salido mal,y lo que ha vuelto, es un incontrolable demonio que tienen encerrado en el castillo, pero o por mucho tiempo. Es por eso por lo que el príncipe te esta buscando, para que vuelvas a realizar el ritual, para devolver a ese demonio al lugar de donde procede\r\nPara que esto acabe bien para ti y para mi\r\n\r\n\r\n', 'libro.jpg'),
(28, 'historia_sinlibro', 'No, se a que libro te refieres, lo mejor es que vayamos a ver al principe y nos explique que pasa, todo esto me huele muy raro.\r\n\r\nVamos hacia, palacio', 'hacia_palacio.jpg'),
(29, 'palacio_entrada', 'Os adentrais en el palacio, cuando la seguridad de marcell os para, marcell esta detras de ellos,le haces un gesto a marcell y le indicas que conoceis toda la historia y habeis venido ayudar, este aparta a sus guardias y os invita a entrar.\r\n', 'palacio_final.jpg'),
(30, 'catacumbas', ' No hay palacio que se precie que no disponga de sus catacumbas y este no iba a ser la excepcion,marcell os conduce por las catacumbas hasta una sala iluminada por varias antorchas, al fondo hay una gran puerta de acero con multiples cadenas y cerrojos llena de runas y lo que parecen ser sortilegios por toda ella.\r\n\r\n', 'catacumbas.jpg'),
(31, 'palacio_noentrar', 'No vas a volver al palacio sin intentar cumplir con la misión que te ha encomendado el príncipe, Marcell no es conocido por ser tolerante con aquellos que le fallan.\r\nSera mejor seguir buscando.', 'palacio.jpg'),
(32, 'entrega_eric', 'Llevas a Eric al palacio del príncipe, los guardias se abalanzan contra eric y lo inmovilizan antes de que puedas mediar palabra,el gesto de eric es de sumisión, mientras se lo llevan, Marcell sale a tu encuentro para darle la enhorabuena, su recompensa sera suculenta, pero algo te dice que toda esta historia tiene mas fondo de lo que te han contado.\r\n', 'prisionero.jpg'),
(33, 'museo_cerrado', 'El centro cultural de chicago, es un impresionante edificio un templo de la ciencia y del arte que permenece abierto hasta altas horas de la noche, el el museo podemos encontrar todo tipo de presentaciones, guerra mundial. trasnportes de los años 90, coches de los años 60, esta semana la exposicion principal, es sobre arte precolumbino, y sus sangrientos rituales.', 'museo_cerrado.jpg'),
(34, 'vendedora', 'A la salida te das de bruces con  un puesto de venta ambulante, la mujer que lo regenta va vestida con la indumentaria típica de los gitanos romaní, y te invita a comprar algo en tu puesto, en su muestrario hay varios amuletos de hueso que indican que sirven como "protección contra los espíritus"', 'vendedora.jpg'),
(35, 'parentela', 'Mientras caminas por un callejón oscuro, vislumbras lo que parece la figura de una mujer joven entre las sombras, al acercarte lo primero que hace es enseñarte una foto de la persona a la que buscas, con voz aterciopelada te pregunta si le conoces.', 'girl.jpg'),
(36, 'entrada', 'Al salir del lugar, mientras caminas en otra dirección, te das cuenta que has pisado algo, al levantar el pie para ver lo que has pisado te das cuenta que es una entrada para la "Exposición Precolombina" del museo y que todavía está en vigor, por, lo que decides guardarla por si acaso es necesaria en el futuro.', 'entrada.png'),
(37, 'llamada', 'Recibes una llamada de la mano derecha del príncipe, te dice que acudas a la librería situada en la calle Lake St y que adquieras el libro "Caminantes de sueños" que ha encargado, este encargo te molesta profundamente, pero no suele ser  buena idea  enojar al príncipe de tu ciudad.', 'llamada.jpg'),
(38, 'sin_salida', 'Volver a lugares que ya has visitado, no te reportara emociones, ni encuentros interesantes, lo mejor sera seguir investigando y descubriendo nuevos lugares que visitar.', 'sin_salida.png'),
(39, 'comprar', 'Es un magnifico amuleto echo de hueso, con la que parece ser la cabeza de un halcón,algún tipo de reliquia india que se utiliza para protegerse de los malos espíritus.\r\n\r\n', 'amuletoindio.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) NOT NULL,
  `nomusuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `raza` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `FUE` int(10) NOT NULL,
  `AGI` int(10) NOT NULL,
  `INT` int(10) NOT NULL,
  `CAR` int(10) NOT NULL,
  `RES` int(10) NOT NULL,
  `sangre_rabia` int(10) NOT NULL,
  `vida` int(100) NOT NULL,
  `vida_total` tinyint(2) NOT NULL,
  `ultima_loc` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `existe_libro` tinyint(1) NOT NULL DEFAULT '0',
  `tiene_libro` tinyint(1) NOT NULL DEFAULT '0',
  `amuleto` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `entrada` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `libro` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `historia_eric` tinyint(1) NOT NULL DEFAULT '0',
  `tiene_eric` tinyint(1) NOT NULL DEFAULT '0',
  `bareto` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `universidad` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `museo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `parque` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `libreria` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=62 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nomusuario`, `password`, `email`, `raza`, `FUE`, `AGI`, `INT`, `CAR`, `RES`, `sangre_rabia`, `vida`, `vida_total`, `ultima_loc`, `existe_libro`, `tiene_libro`, `amuleto`, `entrada`, `libro`, `historia_eric`, `tiene_eric`, `bareto`, `universidad`, `museo`, `parque`, `libreria`) VALUES
(61, 'paco', '311020666a5776c57d265ace682dc46d', '', 'Vampiro', 7, 8, 5, 7, 6, 13, 35, 4, 'vendedora', 0, 0, 'amuleto', '', '', 0, 0, '1', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actores`
--
ALTER TABLE `actores`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `combate`
--
ALTER TABLE `combate`
 ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `escena`
--
ALTER TABLE `escena`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actores`
--
ALTER TABLE `actores`
MODIFY `ID` tinyint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `escena`
--
ALTER TABLE `escena`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
