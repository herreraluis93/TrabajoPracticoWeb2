-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2020 a las 23:14:45
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infonete`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` varchar(5000) DEFAULT NULL,
  `enlace` varchar(100) DEFAULT NULL,
  `georeferencia` varchar(100) DEFAULT NULL,
  `imagenes` varchar(100) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_publicacion` int(11) DEFAULT NULL,
  `id_seccion` int(11) DEFAULT NULL,
  `habilitado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo`, `texto`, `enlace`, `georeferencia`, `imagenes`, `tipo`, `id_usuario`, `id_publicacion`, `id_seccion`, `habilitado`) VALUES
(1, 'Verónica Ojeda sobre el encuentro de Dieguito con Maradona: “Fue emotivo ver cómo él consolaba a su papá”', 'En medio del conflicto que Diego Maradona mantiene con todo su entorno, apareció la voz que faltaba en esta encrucijada. En una charla con Intrusos, Verónica Ojeda contó cómo se dio el encuentro entre Dieguito Fernando y su padre. De antemano, brindó detalles: ¿surgió volver a hablar con el técnico de Gimnasia? “El día que la hermana de mi hijo (Dalma) dijo que su papá no lo atendía, que la habían bloqueado, lo llamé al número que me pasaron y me atendió Diego, él directamente”, comenzó.\r\n\r\n“Lo noté que se quedó sorprendido hasta que le pregunté si quería ver a Dieguito y me dijo: ‘¿Cómo está él?, hace un montón que no lo veo\'. Le dije que el nene lo quería ver, que está re grande, divino. Lo que yo quería era primero hablar con él, quería saber cómo estaba la situación, porque tenía un montón de versiones sobre su salud. Entonces, por todo eso, quería hablar, porque estuve 9 años de novia con él y sé cuando está mal y cuando está bien, sé cómo hablar con él para darme cuenta”.', 'enlace', 'georeferencia', 'noticia1.jpg', 'G', 4, 1, 1, 1),
(3, 'Titulo 2', 'texto de noticia 2', 'enlace2', 'georeferencia2', NULL, 'P', 4, 1, 1, 0),
(4, 'Título 3', 'noticia 3', 'enlace3', 'georeferencia3', 'noticia3.jpg', 'P', 4, 1, 1, 0),
(21, '10 consejos para cuidar tu jardín', '¿Eres de los afortunados que tienen jardín propio? Si es así, no lo desaproveches y disfruta del buen tiempo, en el mejor entorno, sin salir de tu casa. Te damos los 10 cuidados de un jardín que no debes pasar por alto:\r\n\r\n \r\n\r\n1- El suelo. La limpieza y el buen mantenimiento del suelo es básico para poder disfrutar de un jardín perfectamente acondicionado.\r\n\r\n2- Aire. Evidentemente nuestro jardín debe ser un espacio aireado, en el que las plantas puedan crecer sin problemas. La falta de ventilación puede provocar la aparición de hongos.\r\n\r\n3. Espacio. Debemos dejar que nuestras plantas y arbustos tengan espacio entre ellas, ya que, de lo contrario, pueden producirse malformaciones en el crecimiento de las mismas y, también, hay más facilidad para que se propaguen enfermedades o plagas de una planta a otra.\r\n\r\n4- Insectos. Es fundamental controlar las plagas de insectos y bacterias que atacan a las plantas. Hay infinidad de productos en el mercado, como repelentes o bactericidas, que pueden ayudarte a conseguirlo.\r\n\r\n5- Abonado. Abonar el jardín es un aspecto básico de la jardinería. Hay que tener en cuenta que debe hacerse en función de la demanda, es decir, si nuestro jardín tiene un elevado número de plantas con flores, requerirá mayor cantidad de abono y mayor frecuencia. También es importante saber que la época propicia para abonar es en los meses de primavera y verano.\r\n\r\n6- Malas hierbas. Es fundamental quitar esas hierbas que crecen donde no deben. Es saludable para el jardín y, además, mejora la imagen y el aspecto del mismo.\r\n\r\n7- Riego. Es fundamental regar el jardín, sin embargo, hay que hacerlo con precaución: debemos evitar el exceso de humedad, ya que puede provocar que las plantas se pudran. Además, es necesario saber que la mejor forma de regar es mediante aspersión porque resulta menos dañina para las plantas y el agua penetra poco a poco en el suelo.\r\n\r\n8- Siembra de bulbos. Resulta básico conocer y respetar los períodos concretos para plantar los diferentes tipos de plantas y arbustos. Existen diferentes épocas de floración y de cultivo.\r\n\r\n9- La poda. Al igual que con la siembra, debemos saber que cada planta o árbol tiene un momento concreto para ser podado. Los arbustos que florecen desde finales de invierno hasta principios de primavera, deben ser podados después de la floración, mientras que las plantas que florecen a finales de primavera o en verano, deben ser podadas durante el invierno.\r\n\r\n10- Combinación de plantas. Ésta, quizá,  sea una de las partes preferidas de los apasionados del mundo vegetal, Crear un jardín, terraza o patio con nuestras flores y plantas preferidas es un lujo. Geranios con petunias y margaritas con tulipanes son algunas de las combinaciones que darán un aspecto genial a tus macetas.', 'enlace4', 'georeferencia4', 'noticia4.jpg', 'G', 4, 4, 7, 1),
(22, 'La Messi App: así quedaría con la camiseta de cada posible destino', 'La bomba estalló en España y el temblor sacudió a cada uno de los rincones del planeta fútbol. La po', 'enlace5', 'georeferencia5', 'imagen_messi.jpg', 'P', 4, 1, 2, 1),
(23, 'CUIDADOS DEL CÉSPED EN INVIERNO', 'Está claro que si hemos aplicado una buena capa de abono de liberación lenta durante el otoño habremos protegido, a priori, el césped del invierno. Sin embargo, y más allá de esta precaución, es importante llevar a cabo algunas tareas añadidas vitales para su mantenimiento.\r\n\r\nPara empezar, es importante retirar con un rastrillo las hojas secas y húmedas que estarán comenzando a descomponerse sobre el césped. Lejos de pensar que puede ser un buen abono natural, lo cierto es que la presencia de bajas temperaturas y hielo puede convertir las hojas no solo en una ayuda perfecta para que el césped se pudra sino, además, en una fuente ideal para uno de los grandes enemigos del césped: los hongos.', 'enlace5', 'georeferencia5', 'imagen5.jpg', 'G', 4, 4, 7, 1),
(24, 'Título 6', 'Texto de noticia 6', 'enlace6', 'georeferencia6', 'noticia6.jpg', 'P', 4, 4, 1, 1),
(25, '¿Gaich se va a Rusia?', 'No es ninguna novedad que Adolfo Gaich es una de las grandes joyitas de la cantera que tiene San Lorenzo. Es uno de los jugadores del plantel que más cantidad de millones cotiza y todos saben que no se quedará mucho tiempo más en el club. Incluso, casi a diario aparecen versiones sobre clubes de Europa que lo tienen en la mira, aunque pocas llegan a concretarse en ofertas formales. Sin embargo, esta vez hay un interés real que llega desde Rusia.\r\n\r\nSus grandes rendimientos y goles en la Sub 20, que incluso lo llevaron a ser convocado por Lionel Scaloni para la Selección Mayor; sumado a lo que mostró en la Primera del Ciclón cuando le tocó jugar, lo hacen un delantero muy prometedor y por eso desde los clubes más importantes del mundo lo siguen de cerca.', 'enlace7', 'georeferencia7', 'noticia7.jpg', 'G', 4, 2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id_publicacion` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `fecha_public` date DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `habilitado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id_publicacion`, `nombre`, `tipo`, `fecha_public`, `numero`, `habilitado`) VALUES
(1, 'Diario', 'Diario', '2020-06-20', 1, 1),
(2, 'Diario', 'Diario', '2020-06-21', 2, 1),
(3, 'Ole', 'Diario', '2020-06-28', 1, 0),
(4, 'Ole', 'Revista', '2020-03-07', 1, 0),
(5, 'Olé', 'Diario', '2020-07-05', 21, 0),
(6, 'Diario', 'Diario', '2020-07-06', 22, 0),
(7, 'Diario', 'Diario', '2020-07-07', 23, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id_seccion` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `habilitado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id_seccion`, `descripcion`, `habilitado`) VALUES
(1, 'Espectáculo', 1),
(2, 'Deporte', 1),
(3, 'Policial', 1),
(4, 'Economía', 1),
(6, 'Fútbol', 1),
(7, 'Jardín', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion`
--

CREATE TABLE `suscripcion` (
  `id_suscripcion` int(11) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `fecha_ini` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscrip_pertenece_publi`
--

CREATE TABLE `suscrip_pertenece_publi` (
  `id_suscripcion` int(11) NOT NULL,
  `id_publicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `email`, `password`, `rol`) VALUES
(2, 'Luis', 'Herrera', 'herreraluis.93@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'lector'),
(4, 'Luis', 'Herrera', 'herreraluis.93@infonete.com', '827ccb0eea8a706c4c34a16891f84e7b', 'contenidista'),
(5, 'Andrea', 'Descous', 'andrea22_casanova@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_publicacion` (`id_publicacion`),
  ADD KEY `id_seccion` (`id_seccion`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id_publicacion`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id_seccion`);

--
-- Indices de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`id_suscripcion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `suscrip_pertenece_publi`
--
ALTER TABLE `suscrip_pertenece_publi`
  ADD PRIMARY KEY (`id_suscripcion`,`id_publicacion`),
  ADD KEY `id_publicacion` (`id_publicacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id_publicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id_seccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  MODIFY `id_suscripcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `noticia_ibfk_2` FOREIGN KEY (`id_publicacion`) REFERENCES `publicacion` (`id_publicacion`),
  ADD CONSTRAINT `noticia_ibfk_3` FOREIGN KEY (`id_seccion`) REFERENCES `seccion` (`id_seccion`);

--
-- Filtros para la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD CONSTRAINT `suscripcion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `suscrip_pertenece_publi`
--
ALTER TABLE `suscrip_pertenece_publi`
  ADD CONSTRAINT `suscrip_pertenece_publi_ibfk_1` FOREIGN KEY (`id_suscripcion`) REFERENCES `suscripcion` (`id_suscripcion`),
  ADD CONSTRAINT `suscrip_pertenece_publi_ibfk_2` FOREIGN KEY (`id_publicacion`) REFERENCES `publicacion` (`id_publicacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
