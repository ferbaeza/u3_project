-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2021 a las 19:57:49
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaretro26`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `console`
--

CREATE TABLE `console` (
  `id_console` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `made_in` varchar(50) DEFAULT NULL,
  `imagen` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `console`
--

INSERT INTO `console` (`id_console`, `name`, `made_in`, `imagen`) VALUES
(1, 'Nintendo', 'Japon', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/NES_logo.svg/1024px-NES_logo.svg.png'),
(2, 'Super Nintendo', 'Japon', 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Logo_SNES.png'),
(3, 'Master System', 'Japon', 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Sega-master-system-logo.png'),
(4, 'Sega Megadrive', 'Japon', 'https://i.pinimg.com/originals/01/ee/c3/01eec345948ec8f3df350d447494ac04.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game`
--

CREATE TABLE `game` (
  `id_game` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `description` varchar(800) DEFAULT NULL,
  `id_console` int(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `game`
--

INSERT INTO `game` (`id_game`, `name`, `year`, `img`, `description`, `id_console`, `price`, `stock`) VALUES
(1, 'Super Mario Bros 3', 1991, 'https://i.3djuegos.com/juegos/5329/super_mario_bros_3/fotos/ficha/super_mario_bros_3-1698434.webp', 'La saga se despidió de NES con un cartucho memorable que marcó el tope técnico y jugable de la consola', 1, '30', 50),
(2, 'The Legend Of Zelda', 1987, 'https://i.3djuegos.com/juegos/5266/the_legend_of_zelda/fotos/ficha/the_legend_of_zelda-1698095.jpg', 'Situado en la tierra de Hyrule, la trama se centra en un chico llamado Link, el protagonista jugable que tiene como objetivo rescatar a la princesa Zelda de las garras de la antagonista principal, Ganon, mediante la recopilación de los ocho fragmentos de la Trifuerza, un poderoso artefacto.', 1, '30', 50),
(3, 'Urban Champion', 1986, 'https://gamefaqs.gamespot.com/a/box/8/8/6/49886_front.jpg', 'Sencillo juego de lucha 1 vs 1, en el que avanzamos por la ciudad, pantalla a pantalla, a medida que eliminamos a los malotes. Para soltar adrenalina.', 1, '30', 50),
(4, 'Metal Gear', 1988, 'https://www.anaitgames.com/images/uploads/2011_06/metal_gear_nes.jpg', 'Primer título de la saga de Hideo Kojima. Infiltración en territorio enemigo con Solid Snake... y todo el carisma que esperas de un MG.', 1, '36', 50),
(5, 'Adventure Island', 1988, 'http://www.juegomania.org/Adventure+Island/foto/nes/0/20/20_c.jpg/Foto+Adventure+Island.jpg', 'Apartado técnico más que vistoso y diversión sencilla, en un curioso arcade en el que los huevos ocultan patinetes. Muy parecido al Wonder Boy de SEGA.', 1, '23', 50),
(6, 'Ghost´n Goblins', 1989, 'https://imagen.nextn.es/wp-content/uploads/2016/11/1611-06-Ghosts%C2%B4n-Goblins-1.jpg?strip=all&lossy=1&ssl=1', 'Conversión de una de las recreativas de más éxito de Capcom. La cruzada de Sir Arthur contra los seres sobrenaturales es tan divertida… como difícil.', 1, '40', 50),
(7, 'Bubble Bobble', 1990, 'https://www.retroplace.com/pics/nes/packshots/551--bubble-bobble-2.png', 'Una de las melodías más reconocibles para uno de los arcades más divertidos y versionados de siempre. En cooperativo es genial.', 1, '19', 50),
(8, 'Final fight', 1989, 'https://www.gamulator.com/img/roms/final-fight-cp-system-1-cover-usa.jpg', 'Uno de los referentes del género de los beat em up. Aunque en la versión de SNES falta Guy y el modo para dos jugadores, Final Fight sigue siendo un estupendo título, quizás un poco complicado, pero con una duración nada desdeñables dentro de su género.', 2, '26', 50),
(9, 'Street Fighter II', 1992, 'https://m.media-amazon.com/images/I/51aqQ0RJtxL._AC_.jpg', 'La otra gran saga de los juegos de lucha de SNES junto a Mortal Kombat. Street Fighter II Turbo se trataba de una versión más completa del clásico de Capcom nos permitía jugar con los cuatro jefes del juego y, como su nombre indica, añadía un modo turbo.', 2, '31', 50),
(10, 'Turtles In Time', 1992, 'https://robotgamesblog.files.wordpress.com/2017/10/descarga-13.jpg?w=267&h=&zoom=2', 'Videojuegos de las Tortugas Ninja hay muchos, unos mejores que otros, pero si hubiese que elegir uno de los más destacados ese sería sin duda TMNT IV: Turtles in Time, uno de los beat em up más sobresalientes de la SNES y que ganaba más puntos gracias a su multijugador para dos personas.', 2, '28', 50),
(11, 'Donkey Kong Country', 1994, 'https://i2.wp.com/wtfonline.mx/wp-content/uploads/2017/12/donkey-kong-country-au_m5fu.jpg?resize=1024%2C750&ssl=1', 'Satisfactoria mecánica de rodar para arrollar enemigos y enlazar con saltos más largos, y una selección de niveles variados, con fases de vagonetas, barriles lanzadores y demás. Su antológica banda sonora puso el broche de oro y ambientó todo ello a la absoluta perfección.', 2, '33', 50),
(12, 'Super Mario Kart', 1992, 'https://m.media-amazon.com/images/I/61QqTAGbt3L._AC_.jpg', 'Un juego que nos invitaba a apuntarnos a la carrera del siglo de la mano de Mario, Peach, Luigi, Bowser; Donkey Kong y compañía. Cada uno de ellos con habilidades y cualidades diferentes en cuanto a velocidad y manejo, que nos trasportaba de lleno a circuitos ambientados en zonas de Super Mario World ', 2, '36', 50),
(13, 'Super BomberMan', 1993, 'https://uvejuegos.com/img/caratulas/3929/Super-Bomberman-EU.jpg', 'Con un sistema simple, pero entretenido, nos desplazabámos por la pantalla con el objetivo de disparar bombas para destruir los muros y los enemigos que obstaculizaban nuestro camino a la vez que recogiamos ítems. Con su fantástico modo multiplayer de batallas entre los 4 jugadores y la tentadora idea de rodear a los enemigos con las bombas y hacerlos explotar nos daba cuerda para rato...', 2, '30', 50),
(14, 'Mortal Kombat II', 1992, 'https://m.media-amazon.com/images/I/51nX-iRGM8L._AC_.jpg', '12 luchadores se enfrentaban en una encarnizada lucha. Con algunos jugadores conocidos como Scorpion y otros nuevos como Reptile, (que contaban con movimientos únicos y especiales) nos golpearon al instante en combates más dinámicos y brutales desarrollados en un mayor número de escenarios ofrenciendo a los gamers aficionados al género fighter', 2, '30', 50),
(15, 'Altered Beast', 1988, 'https://uvejuegos.com/img/caratulas/3147/Altered-Beast-MD-EU.jpg', 'Éramos un gran guerrero resucitado por el mismísimo Zeus con la misión de rescatar del inframundo, a la diosa Atenea que había sido secuestrada por el malvado Neff. Durante nuestro periplo hasta y en el hogar de los muertos recorríamos todo tipo de parajes siniestros, cementerios, grutas, palacios...', 4, '32', 50),
(16, 'Eartworm Jin', 1994, 'https://uvejuegos.com/img/caratulas/3183/Earthworm-Jim-MD-EU.jpg', 'Un supergusano con nombre propio de novela de piratas, Jim, era el protagonista de este juego de plataformas. Embutido en un traje cibernético y armado con una pistola Jim recorría el universo conocido en busca de la princesa \"Cuál es su nombre\", prisionera del malvado Psy-Crow, el cazarrecompensas intergaláctico.', 4, '20', 50),
(17, 'Eartworm Jin', 1994, 'https://uvejuegos.com/img/caratulas/2248/Golden-Axe-MD-EU.jpg', 'En la tierra de Yuria, dominada por la espada y la brujería, Death Adder, el tirano, impone su propia ley. Sus huestes han invadido las villas y secuestrado al rey y a su hija. También han conseguido robar la Golden Axe (hacha dorada), el objeto mas sagrado del reino. Tres héroes, Tyris Flare, la amazona, ágil espadachina que invoca el fuego a su antojo, Ax Battler, el bárbaro capaz de despertar el poder dormido de los volcanes, y Gilius Thunderhead, el enano que controla el trueno y es invencible con su hacha, se revelarán contra el despótico Death Adder.', 4, '26', 50),
(18, 'Gunstar Heroes ', 1993, 'https://americansgameocio.com/3158-thickbox_default/gunstar-heroes.jpg', 'El argumento trata sobre los Gunstar, que han protegido el planeta G9 durante generaciones y tendrán que seguir haciéndolo. Primero vino Golden Silver, un androide destructor que quería robarnos los recursos naturales, y después apareció Smash Daisaku, un cruel dictador megalomaniaco que pretendía apoderarse de las cuatro Gemas Místicas. Daisaku trazará un ingenioso plan para llevarse las gemas, autonombrándose el noveno Gunstar', 4, '31', 50),
(19, 'Sonic The Hedgehog ', 1993, 'https://uvejuegos.com/img/caratulas/1977/Sonic-the-Hedgehog-MD-EU.jpg', 'Dr.Robotnik (Dr. Eggman en Japón), quiere dominar el mundo habitado por Sonic, y para ello necesita hacerse con las seis esmeraldas del caos. El malvado doctor se valdrá de los animales, a los que ha transformado en robots asesinos, para alcanzar su objetivo. En su camino se interpondrá nuestro formidable erizo, Sonic, que ayudará al resto de los animalitos, e intentará neutralizar los planes maquiavélicos del Dr.Robotnik.', 4, '30', 50),
(20, 'Streets of Rage II ', 1992, 'https://uvejuegos.com/img/caratulas/2252/563344_88089_front.jpg', 'Mr. X había vuelto a la ciudad (milagrosamente, porque lo liquidamos en el primero), sembraba el caos a su paso, y como venganza hacia nuestros amigos había secuestrado a uno de los personajes del juego original, Adam.', 4, '26', 50),
(21, 'Decap Attack ', 1991, 'https://uvejuegos.com/img/caratulas/4170/586135_198065_front.jpg', 'Lanzado originalmente en 1990 en Japón y adaptado un año más tarde para las versiones occidentales de la 16 bits de SEGA, Decap Attack propone cruzar siete islas plataformeras en la piel de Chuck D. Head, una momia creada por el Dr. Frank N. Stein para derrotar a Max D. Cap, un demonio con ansias de conquista mundial. Pero Chuck no es una momia cualquiera: es más, ¡ni siquiera tiene cabeza!\r\n', 4, '29', 50),
(22, 'Alex Kidd in Miracle World ', 1991, 'http://www.juegomania.org/Alex+Kidd+in+Miracle+World/foto/sms/0/5/c3.jpg/Foto+Alex+Kidd+in+Miracle+World.jpg', 'Trata de un plataformas brillante (con ligeros toques de rol y estrategia) de gran factura técnica que era capaz de hacer frente al Super Mario Bros. de NES. Por desgracia, y como os estáis imaginando, el fontanero salió ganando, pero eso no impidió que por un tiempo el pequeño Alex fuese la mascota de la compañía.', 3, '30', 50),
(23, 'Zillion', 1987, 'https://uvejuegos.com/img/caratulas/24439/0_grande.jpg', 'Debemos abrirnos paso a través de una base enemiga subterránea haciendo uso de una pistola láser (que más tarde fue utilizada como modelo para el periférico Light Phaser, la pistola de Master System) que podíamos mejorar a medida que progresaba el juego para superar obstáculos de otra manera imposibles. Auténtico espíritu metroidvania.', 3, '30', 50),
(24, 'Wonderboy', 1986, 'https://www.mobygames.com/images/covers/l/55689-wonder-boy-sega-master-system-front-cover.jpg', 'Niveles amplios muy diferenciados (bosques, montañas, cuevas, palacios de hielo...), power-ups (hacha de piedra para lanzar, monopatín y protección angelical) y saltos, muchos saltos. Además, esta versión incluía dos nuevos niveles que no estaban presentes en la versión original, ampliando aún más la aventura. ¡Ojo con los huevos malos!', 3, '26', 50),
(25, 'Phantasy Star ', 1987, 'https://portal.33bits.net/wp-content/uploads/2018/11/Phantasy-Star-Portada-1080x1535.jpg', 'la joven que se ve  envuelta en una trama de intrigas políticas y que, junto a sus compañeros de viaje, tendrá que hacer frente al estado totalitario en que se encuentra sumido el reino de Algol. Un juego gigantesco para su época.', 3, '20', 50),
(26, 'Out Run ', 1992, 'https://uvejuegos.com/img/caratulas/21621/led.jpg', 'A bordo de nuestro flamante Ferrari Testarossa. Fue un hito en la historia de los juegos de conducción, pues hasta ese momento la mayoría habían utilizado la vista de pájaro. La banda sonora compuesta por tres canciones (presentadas en forma de emisoras de radio) ha pasado a ser una de las más recordadas en la historia de los videojuegos.', 3, '30', 50),
(27, 'Master of Darkness ', 1992, 'https://uvejuegos.com/img/caratulas/9002/master%20of%20darkness%20sms.jpg', 'Un investigador que trata de descubrir el misterio tras unos asesinatos que se le atribuyen a Jack el Destripador. Viajando a través de varias localizaciones de un Londres de lo más tenebroso, debemos enfrentarnos a enemigos salidos directamente de historias de terror mediante armas tales como hachas, cuchillos, pistolas, bombas... ¿Adivináis quién es el auténtico jefe final del juego?', 3, '33', 50),
(28, 'Astérix ', 1991, 'https://www.mobygames.com/images/covers/l/238527-asterix-and-the-secret-mission-sega-master-system-front-cover.jpg', 'Controlando a cualquiera de los dos carismáticos personajes (Astérix es rápido y ágil, Obélix lento y fuerte) nos abríamos paso a través de niveles de lo más variopintos al tiempo que hacíamos saltar los dientes a todos los romanos que nos salían al paso.', 3, '26', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_line`
--

CREATE TABLE `order_line` (
  `id_order_line` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_prices` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  `passwd` varchar(70) DEFAULT NULL,
  `mail` varchar(250) NOT NULL,
  `rol` varchar(50) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `user`, `passwd`, `mail`, `rol`, `phone_number`) VALUES
(1, 'fer', '1', 'baezeta@gmail.com', NULL, NULL),
(2, 'vic', '1', 'vic@mail.com', NULL, 9090),
(3, 'henry', '1', 'henry@mil.com', NULL, 8978767),
(4, 'henry2', '1', 'h@hotmail.com', 'customer', 12121212);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`id_console`);

--
-- Indices de la tabla `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`),
  ADD KEY `Game_fk0` (`id_console`);

--
-- Indices de la tabla `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indices de la tabla `order_line`
--
ALTER TABLE `order_line`
  ADD PRIMARY KEY (`id_order_line`),
  ADD KEY `fk_id_order` (`id_order`),
  ADD KEY `fk_id_game` (`id_game`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `console`
--
ALTER TABLE `console`
  MODIFY `id_console` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `game`
--
ALTER TABLE `game`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `order_line`
--
ALTER TABLE `order_line`
  MODIFY `id_order_line` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `Game_fk0` FOREIGN KEY (`id_console`) REFERENCES `console` (`id_console`);

--
-- Filtros para la tabla `order_line`
--
ALTER TABLE `order_line`
  ADD CONSTRAINT `order_line_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_line_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
