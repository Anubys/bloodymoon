-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2015 a las 13:05:50
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
  `nombre` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `charla` text COLLATE utf8_spanish_ci NOT NULL,
  `FUE` int(10) NOT NULL,
  `RES` int(10) NOT NULL,
  `vida` tinyint(2) unsigned NOT NULL,
  `vida_total` int(100) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actores`
--

INSERT INTO `actores` (`nombre`, `charla`, `FUE`, `RES`, `vida`, `vida_total`, `imagen`) VALUES
('camarero', 'Buenas noches\r\n\r\nDesea una mesa para cenar, tengo una muy buena, al lado de la ventana, desde hay podra disfrutar de unas magnificas vistas de chicago mientras degusta nuestros platos.', 0, 0, 0, 0, ''),
('eric', 'Me despierto por la noches con visiones, que me muestran rodeado de otros como yo, criaturas mitad lobo mitad humano reunidos junto al fuego en un claro a la luz de la luna, ellos me dicen que yo soy un caminante como ellos y que tengo el poder de pasear entre este mundo y el mundo espiritual,es una autentica pesadilla.\r\nCreo que el principe quiere usarme como moneda de cambio, para recuperar algo.\r\nPero tengo vagos recuerdos, solo recuerdo una imagen de mi blandiendo un cuchillo y recitando un texto de un libro sobre un cuerpo inerte.\r\n \r\n\r\n\r\n', 10, 10, 50, 50, 'eric.jpg'),
('fornido', '', 6, 6, 40, 40, ''),
('gorila', '', 5, 4, 30, 30, ''),
('librero', 'Ya le dije a Marcell que ese maldito ritual iba a traer problemas, pero el se empeño en traer de vuelta a su fallecida mujer y ahora no pueden detener lo que han despertado. Lo que era una vez una gentil mujer, ahora se torna como un demonio despiadado y cruel, Marcell la quiere pero sus brujos no podran mantenerla encerrada mucho mas.\r\n\r\nMucho me temo, que la unica persona que puede pararlo es aquel que lo ha invocado, un joven descendiente de la tribu de los caminantes de sueños que rapto,necesita el libro y el joven para devolver a ese demonio al lugar de donde provino.\r\n\r\nPero este ha escapado y no sabemos donde esta.\r\n\r\nEs por eso que te encomendo a ti buscarle.\r\n\r\nEn fin, toma el libro.', 0, 0, 0, 0, 'librero.jpg'),
('lobo', '', 9, 9, 40, 40, ''),
('mujer_punk', 'Vaya vaya así que el príncipe ha mandado a otro perrito faldero a hacerle el trabajo sucio, no se que te habrá contado de todo esto, pero tu presencia no es bienvenida, tu y los malditos chupa sangres de tu especie podéis largaros por donde habéis venido.\r\n\r\nLARGATE AHORA MISMO, O LAMENTARAS HABER VENIDO.', 5, 5, 25, 25, ''),
('principe', 'Te hemos echo llamar porque necesitamos de tu ayuda, tenemos un problema importante y pensamos que puedes ser la persona adecuada para resolverlo.\r\nNecesitamos encontrar a esta persona, toma esta una foto,es muy importante que la traigas ante nosotros viva por supuesto.\r\nTe proporcionaremos un mapa, de los sitios donde se le vio por ultima vez. \r\nEs una misión importante, para la que seras ampliamente recompensado.', 0, 0, 0, 0, ''),
('profesor', 'Antes de que puedas contestar a la pregunta empieza a hablar sobre la exposicion.\r\n\r\nEs una de mis preferidas todos los artefactos que se exponen fueron traidos de un tumulo indio, al oeste de Milwaukee, la exposicion se llama "Camina al otro lado" y tiene ese nombre en honor a la tribu donde fueron encontrados, las leyendas dicen que tenian la posibilidad de viajar al "otro lado" realizando ciertos rituales.\r\n\r\nSi quieres mas informacion sobre el tema,  te recomiendo que leas mi libro "caminantes de sueños" \r\n\r\nPerdona tengo un poco de prisa me tengo que ir ', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escena`
--

CREATE TABLE IF NOT EXISTS `escena` (
`ID` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `visitada` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `escena`
--

INSERT INTO `escena` (`ID`, `nombre`, `descripcion`, `imagen`, `visitada`) VALUES
(0, 'palacio', 'Un fastuoso palacio de arquitectura neogotica se levanta ante ti, sus muros negros como la noche y sus fuertes puertas, diseñan una fortaleza perfecta para proteger a la realeza vampirica.', 'palacio.jpg', 1),
(4, 'salon', 'Un salón inmenso se abre ante ti, la majustuosidad del mismo, te nubla la visión.\r\n\r\nDelante de ti, aparecen varias personas, impecablemente vestidas sus pálidas pieles reflejan su naturaleza vampirica.\r\n\r\nUna de ellas, se dirige hacia ti, es el príncipe Marcell el máximo responsable vampiro de tu ciudad.', 'salon.jpg', 1),
(5, 'bareto', 'El purpple pig, es uno de los mejores restaurantes de chicago, cocina Europea, contemporanea,un lugar ideal, para tomar unas cerverzas y disfrutar de un buen plato de cerdo.\r\n\r\nEn el interior no encuentras muchos rastros de vampiros, seguramente estos prefieron lugares mas elitistas y sofisticados, pero los contactos del principe dijeron que la persona que buscas suele frecuentar este sitio.', 'purpple.jpg', 1),
(6, 'interior_bareto', 'Te convences, que para no levantar sospechas lo mejor que puedes hacer es tomar acomodo en la mesa que te han ofrecido.\r\n\r\nEs una magnifica mesa, con buenas vistas, la comida parece exquisita aunque evidentemente no puedas ni probarla.\r\n\r\nMientras que simulas que comes, te das cuenta que hay una mujer alta de pelo oscuro y vestimenta punk que esta preguntando al camarero y señalándote.\r\n\r\n', 'purpple_interior.jpg', 0),
(7, 'salida', 'Todavia eres muy joven para recibir la muerte "definitiva" asi que decides que una retirada a tiempo es una victoria.\r\n</br>\r\no por lo menos eso dicen los cobardes', 'salida.jpg', 0),
(8, 'combate', 'Decides que a veces es necesario enfrentarse a los problemas por lo que decides, enfrentarte, dejandole ver tus temibles garras y afilados colmillos.', 'combate.jpg', 0),
(9, 'enfrentamiento', '', 'enfrentamiento.jpg', 0),
(10, 'contraataque', '', 'contraataque.jpg', 0),
(11, 'muerte_contrincante', 'Por fin acabas con tu contrincante, mientras te deleitas, viendo como tiñe de sangre el terreno en el que te encuentras.\r\n', 'muerte.jpg', 0),
(12, 'personaje_muerto', 'Sientes un dolor extraño,agudo y fuerte mientras ves como tu no-vida se va apagando lentamentamente, tu final definitivo ha llegado.', 'personaje_muerto.jpg', 0),
(13, 'parque', 'Sabes que el Millenium park , es un lugar muy frecuentado por los turistas, y un autentico atractivo para los turistas que vienen a chicago, pero el lugar marcado en el mapa es una zona alejada de la muchedumbre en la parte mas oscura del parque donde se reunen las  bandas nocturnas y  la peor escoria que te puedas encontrar, pero tienes una misión y no vas a dejarte amedrentar por nadie, el parque esta oscuro, mas oscuro de lo habitual, hay varias farolas con las bombillas rotas, lo que provocan el parque este sumido en las penumbras, empiezas a avanzar por el parque, en los lados hay grupos de chavales y no tan chavales fumando y bebiendo en los bancos y en el suelo, al fondo se escucha una estridente música de rock metal, y varias luces de coches. Parece una fiesta dentro de un pequeño edificio abandonada en medio del parque y los dos gorilas de la puerta parecen indicarte que no estas invitado. Uno de ellos te agarra por el brazo.\r\n\r\n', 'parque.jpg', 0),
(14, 'fiesta', 'Una vez que te has desecho de los guardias, sin levantar sospechas sobre tu naturaleza, te adentras en la fiesta, muchos chicos y chicas jóvenes con varias copas de mas, pero ni rastro de tu presa. Empiezas a investigar por las distintas estancias del lugar intentando no levantar sospechas.\r\n\r\nLa mayoria de las habitaciones estan practicamente llenas de gente bebiendo y fumando, mientras conversan o escuchan musica estridente', 'fiesta.jpg', 0),
(15, 'conversa_fiesta', 'Decides quedarte en la fiesta y intentar averiguar algo sobre el extraño de la ventana, la pelea con los gorilas de la puerta te ha echo perder mucha sangre.\r\n\r\nTus conversciones con los participantes en la fiesta no llegan a buen puerto, la mayoria estan borrarchos o muy drogados, solo consigues sacar en claro, que a la mayoria le parece que ultimamente acuden personas extrañas a las fiestas.\r\n\r\nCuando ibas a marcharte encuentras una entrada para el Chicaco Cultural Center.', 'conversar.jpg', 0),
(16, 'caza', 'Mientras avanzas de manera elegante por todo el recinto, vas eligiendo selectivamente a tus victimas, hay tantas personas es un avanzado estado de imbriaguez que esta va a ser una suculenta cena sin problemas.', 'caza.jpg', 0),
(17, 'museo', 'El centro cultural de chicago, es un impresionante edificio un templo de la ciencia y del arte que permenece abierto hasta altas horas de la noche, el el museo podemos encontrar todo tipo de presentaciones, guerra mundial. trasnportes de los años 90, coches de los años 60, esta semana la exposicion principal, es sobre arte precolumbino, y sus sangrientos rituales.\r\n\r\nEl museo esta totalmente repleto, pero en la esquina puedes observar al que parece tu presa, esta jugueteando con un chuchillo ritual, mientras observa la gigantesca pantalla donde se reproducen, representaciones animadas de los distintos tipos de rituales.\r\n', 'museo.jpg', 0),
(18, 'zoo', 'Es rapido muy rapido, pero tu tambien lo eres, le persigues hasta una zona alejada del parque donde se encuentra un abandonado zoo, el olor nauseabundo de las jaulas de los animales te tira para detras, las jaulas estan totalmente abandonadas y destruidas, los animales fueron trasladados a un nuevo zoo al otro lado de la ciudad y esta a quedado en deshuso. Avanzas lentamente entre las jaulas intentando no hacer mucho ruido cuando de repente oyes unos fuertes "gruñidos" detras de ti al darte la vuelta, observas dos lobos de piel oscura como la noche y  ojos brillantes mirandote firmemente con cara de muy pocos amigos.\r\n', 'lobo.jpg', 0),
(19, 'conversa_zoo', 'En el mismo momento en que terminas con al vida del lobo, el otro lobo que habia permanecido al margen se transforma en la persona que buscas, un hombre joven, vestido como un trampero o sacado de alguna tribu india.\r\n\r\nNo me mates, porfavor permiteme explicarme y si cuando termine todavia quieres hacerlo adelante.\r\n\r\nEn realidad el principe te ha estado manipulando para sus propios intereses, yo fui capturado por esbirros del principe en las zonas montañosas de Milwaukee y ha permanecido encerrado en el palacio largos años, hasta que ha podido escaparme, estos años el principe no ha parado de hacerme preguntas sobre mi origen, pero la verdad es que no recuerdo absolutamente nada de mi pasado,  solo ha estado haciendo lo que su propia naturaleza me pedia, ¿acaso es eso un crimen? ". Os ruego que me dejeis en paz.', 'eric.jpg', 0),
(20, 'despertar', 'Miras expectante por la ventana de tu refugio como el sol se oculta son las ocho de la noche y chicago esa ciudad magica te espera, y a los vampiros nos gusta ser puntuales. Mientras sales hacia afuera suena el movil, parece ser la voz de Aston la mano derecha del lider vampiro de tu ciudad, quiere verte,asi que te diriges a su fastuoso palacio.', 'despertar.jpg', 0),
(21, 'huida', 'Su ataque ha sido brutal, el cuchillo estaba tan afilado que ha desgarrado parte de tus tejidos, el dolor es insoportable, apenas puedes mantenerte en pie, cuando le ves saltar por la ventana y deslizarse por la escalera de incendios.\r\n\r\nTu estado no permite seguirle, por lo que lo mejor sera investigar por la estancia o largarse del lugar.\r\n', 'huida.jpg', 0),
(22, 'investiga_museo', 'Decides investigar un poco por la estancia y observas a una persona de unos 50 años, con ropa bastante anacronica, colocando unas basijas en una estanteria, en la solapa tiene una tarjetas identificativa con un nombre Profesor Beagle.\r\n', 'profesor.jpg', 0),
(23, 'refugio_eric', 'Decides confiar en eric y salir rapidamente del lugar, este te lleva por corredores laberinticos dentro del zoo hasta encontrar un pequeño agujero, parece un pasaje escavado en la tierra para acceder a otro sitio. Caminais por el angosto pasaje hasta q1ue al fondo vislumbrais une pequela luz artificil, Ya hemos llegado comenta Eric.\r\n\r\nAnte ti se muestra un pequeño habitaculo, que parece que sirve de refugio a Eric.', 'refugio.jpg', 0),
(24, 'libreria', ' La librería situada en la calle St Lake es una vieja librería,en proceso de enbargo por impago, todos los libros se encuentran apilados por toda la estancia,con una buena capa de polvo en ellos, el propietario parece que esta recogiendo todo el material que quiere salvar el embargo en varios cajas y embalajes.\r\n', 'libreria.jpg', 0),
(25, 'libreria_cerrada', 'La libreria totalmente cerrada, con un cartel que lo indica, tal vez puedas volver en otro momento, cuando tengas algo que buscar.', 'libreria_cerrada.jpg', 0),
(26, 'universidad', 'El campus de la universidad de chicago esta desoladamente vacio por las noches, las puertas de la entrada le dan un aspecto lugubre que hacen que sientas un halo de misterio, cuando las cruzas,un grito de terror interrumpe ese halo, parece venir de dentro del campus, decides acudir y cual es tu sorpresa al ver que un par de vampiros de aspecto fornidos se llevan a tu presa, cogido del brazo, a uno de ellos se le cae un afilado cuchillo que te han quitado al chico.\r\n', 'universidad.jpg', 0),
(27, 'historia_libro', 'Tengo, el libro que ves en tus sueños, es un libro ritual de una antigua tribu de hombres lobo, de la que tu provienes que pueden viajar al mundo de los espiritus, el principe te capturo para que caminaras al mundo espiritual y trajeras de vuelta a su mujer fallecida, pero algo ha salido mal,y lo que ha vuelto, es un incontrolable demonio que tienen encerrado en el castillo, pero o por mucho tiempo. Es por eso por lo que el principe te esta buscando, para que vuelvas a realizar el ritual, para devolver a ese demonio al lugar de donde procede.', 'libro.jpg', 0),
(28, 'historia_sinlibro', 'No, se a que libro te refieres, lo mejor es que vayamos a ver al principe y nos explique que pasa, todo esto me huele muy raro.\r\n\r\nVamos hacia, palacio', 'hacia_palacio.jpg', 0),
(29, 'palacio_entrada', 'Os adentrais en el palacio, cuando la seguridad de marcell os para, marcell esta detras de ellos,le haces un gesto a marcell y le indicas que conoceis toda la historia y habeis venido ayudar, este aparta a sus guardias y os invita a entrar.\r\n', 'palacio_final.jpg', 1),
(30, 'catacumbas', ' No hay palacio que se precie que no disponga de sus catacumbas y este no iba a ser la excepcion,marcell os conduce por las catacumbas hasta una sala iluminada por varias antorchas, al fondo hay una gran puerta de acero con multiples cadenas y cerrojos llena de runas y lo que parecen ser sortilegios por toda ella.\r\n\r\n', 'catacumbas.jpg', 1),
(31, 'palacio_noentrar', 'No vas a volver al palacio sin intentar cumplir con la misión que te ha encomendado el príncipe, Marcell no es conocido por ser tolerante con aquellos que le fallan.\r\nSera mejor seguir buscando.', 'palacio.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
`id` int(11) NOT NULL,
  `sangre_rabia` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `sangre_rabia`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE IF NOT EXISTS `lugares` (
  `id` int(11) NOT NULL,
  `nombre` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `vida_total` tinyint(2) unsigned NOT NULL,
  `ultima_loc` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `existe_libro` tinyint(1) NOT NULL DEFAULT '0',
  `historia_eric` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nomusuario`, `password`, `email`, `raza`, `FUE`, `AGI`, `INT`, `CAR`, `RES`, `sangre_rabia`, `vida`, `vida_total`, `ultima_loc`, `existe_libro`, `historia_eric`) VALUES
(16, 'lestat', '94069795da9215c462352301f84bec8b', 'lestat', 'Vampiro', 7, 8, 5, 7, 6, 10, 35, 35, 'palacio_noentrar', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actores`
--
ALTER TABLE `actores`
 ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `escena`
--
ALTER TABLE `escena`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `escena`
--
ALTER TABLE `escena`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
