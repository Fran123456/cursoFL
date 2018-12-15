-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-04-2018 a las 21:57:52
-- Versión del servidor: 10.1.31-MariaDB-cll-lve
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sparuipu_cursoFl2018`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos_extras`
--

CREATE TABLE IF NOT EXISTS `archivos_extras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `archivos_extras`
--

INSERT INTO `archivos_extras` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Bases de regueton', 'http://bit.ly/2BfOH0Y', '2018-02-06 12:23:33', '2018-02-06 12:23:33'),
(2, 'Efectos', 'http://bit.ly/2nKbU3V', '2018-02-06 12:23:33', '2018-02-06 12:23:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulos`
--

CREATE TABLE IF NOT EXISTS `capitulos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nivel_id` int(10) unsigned NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descarga_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descarga_material` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `capitulos_slug_unique` (`slug`),
  KEY `capitulos_nivel_id_foreign` (`nivel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `capitulos`
--

INSERT INTO `capitulos` (`id`, `nivel_id`, `name`, `slug`, `body`, `url`, `descarga_video`, `descarga_material`, `created_at`, `updated_at`) VALUES
(1, 1, 'Introducción al curso', 'introducción-al-curso', 'Video de introducción al curso. Sean bienvenidos todos.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6ca0uq" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2pJr3WH', 'Nulla.', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(2, 1, 'Introducción a FL Studio (parte 1)', 'introducción-a-fl-studio-parte-1', 'Introducción al FL Studio parte 1 donde explicamos menus necesarios antes de iniciar.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6chbmc" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2q4PxJP', 'Nulla.', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(3, 1, 'Introducción a FL Studio (parte 2)', 'introducción-a-fl-studio-parte-2', 'Introducción al FL Studio parte 2 donde explicamos menus necesarios antes de iniciar.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6chb48" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2DFFpcL', 'Nulla.', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(4, 1, 'Herramientas', 'esse-dolorem-libero-iste-odio', 'Herramientas utlices que necesitaremos.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6clh2n" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2CAH1bs', 'Nulla.', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(5, 1, 'Agregar librerias y Adobe Audition', 'agregar-libreria-y-adobe-audition', 'Aquí veremos como agregar nuestra libreria y anexarla al FL Studio, tambien vamos a ver las formas de obtener adobe Audition.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6cloje" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2CCon2Z', 'http://bit.ly/2CCjabw', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(6, 2, 'Mixer y generalides de efectos', 'mixer-y-generalidades-de-efectos', 'Veremos como es el uso del mixer y diferenciar entre el canal master y los canales especificos', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6cnwkg" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2CHtQ8B', 'Nulla.', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(7, 2, 'Volumen y herramientas de un audio individual', 'volumen-y-herramientas-de-audio-individual', 'Utilización de los clip de volumenes y caracteristicas que puede tener un audio individualmente', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6cpcx7" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2m4KjZv', 'Nulla.', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(8, 2, 'BPM , automatizaciones y extended', 'bpm-automatizaciones-extended', 'Explicación de que es el bpm, como calcular el bpm, utilización de las automatizaciones y la introducción a que es un extended', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6cpe9p" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2qCjl0C', 'Nulla.', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(9, 2, 'Extraer bajo de una canción', 'extraer-bajo-de-una-canción', 'Explicación de como extraer el bajo de una canción utlizando fruty paramtric HQ 2', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6cqo2r" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2F5Xu53', 'Nulla.', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(10, 2, 'Primer extended (parte 1)', 'primer-extended-parte-1', 'Aplicaremos los conceptos aprendidos en videos anteriores y haremos nuestro primer extended', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6cqoq3" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2m7ha0v', 'https://bit.ly/2ABxJpU', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(11, 2, 'Primer extended (parte 2)', 'primer-extended-parte-2', 'Aplicaremos los conceptos aprendidos en videos anteriores y haremos nuestro primer extended', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6cqph3" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2m9pUmL', 'Nulla.', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(12, 2, 'Extended de cumbia (parte 1)', 'extended-de-cumbia-parte-1', 'Aplicaremos los conceptos aprendidos y crearemos un extended de cumbia, DESCARGA LOS MATERIALES', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6cyxcv" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2DptuAJ', 'http://bit.ly/2D71yns', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(13, 2, 'Extended de cumbia (Parte 2)', 'extended-de-cumbia-parte-2', 'Continuación al video anterior.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6cyz3y" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2CWYeYS', 'Nulla.', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(14, 2, 'Extended de Salsa (Parte 1)', 'extended-de-salsa-parte-1', 'DESCARGA LOS MATERIALES - Crearemos un extended de salsa.e.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6czmwm" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2AW3El4', 'http://bit.ly/2Db2CqE', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(15, 2, 'Extended de Salsa (Parte 2) + NUEVO EFECTO', 'extended-de-salsa-parte-2-efecto-nuevo', 'Continuación del video anterior pero tambien aprenderemos un nuevo efecto, ATENTOS!!', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6czp0s" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2D7bBK4', 'Nulla.', '2018-02-06 12:23:33', '2018-02-06 12:23:33'),
(16, 2, 'Extended regueton Old.', 'extended-regueton-old', 'Eos autem praesentium eligendi debitis soluta.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6e13i2" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2Eb2aZT', 'http://bit.ly/2DZG4Kv', '2018-02-06 12:23:33', '2018-02-06 12:23:33'),
(17, 2, 'Extended de balada (parte 1)', 'extended-de-balada-parte-1', 'En esta sección vamos a realizar un extended de balada que rondan entre 80bpm y 100bpm', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6dhcs1" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2mXzVmQ', 'http://bit.ly/2DnWE2i', '2018-02-06 12:23:33', '2018-02-06 12:23:33'),
(18, 2, 'Extended de balada (parte 2)', 'extended-de-balada-parte-2', 'Continuación del video anterior', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6dhdz1" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2mXzVmQ', 'Nulla.', '2018-02-06 12:23:33', '2018-02-06 12:23:33'),
(19, 2, 'Extended de bachata (parte 1)', 'extended-de-bachata-parte-1', 'crearemos un extended de bachata', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6e14ee" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2E0d2X6', 'http://bit.ly/2BUeRmw', '2018-02-06 12:23:33', '2018-02-06 12:23:33'),
(20, 2, 'Extended de bachata (parte 2)', 'extended-de-bachata-parte-2', 'crearemos un extended de bachata', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6e19e0" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2DYuxLr', 'Nulla.', '2018-02-06 12:23:33', '2018-02-06 12:23:33'),
(21, 2, 'Crear un Mix con remixes', 'crear-un-mix-con-remixes', 'Aqui en este video vamos a ver la estructura de como crear un mix utilizando nuestros propios remixes ya creados o descargardos.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6ei28x" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2BhQpPr', 'Nulla.', '2018-02-09 05:00:00', '2018-02-09 07:00:00'),
(24, 2, 'creación de extended de rock en español', 'creación-extended-rock-español', 'Ultimo video del modulo de basico I , aqui aprenderemos a crear un extended de rock en español y tambien a trabajar con bases que no se adieren facilmente.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6ele48" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2BSP5U7', 'http://bit.ly/2BSPaan', '2018-02-12 15:25:13', '2018-02-12 10:08:00'),
(25, 3, 'creación de Mix de bachata (parte 1) - Iniciando', 'creación-de-mix-de-bachata-parte-1', 'primer video del modulo de basico II donde nos enfocaremos en aprender a crear mixes de calidad.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6em65y" allowfullscreen allow="autoplay"></iframe>\r\n', 'http://bit.ly/2BUxbjX', 'http://bit.ly/2F4JvNd', '2018-02-12 14:25:13', '2018-02-12 10:08:00'),
(26, 3, 'creación de Mix de bachata (parte 2) - BPM', 'creación-de-mix-de-bachata-parte-2', 'Aprenderemos asignar un BPM al mix y ubicaremos nuestra primer canción', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6em65y" allowfullscreen allow="autoplay"></iframe>\r\n', 'http://bit.ly/2G6OpbN', 'Nulla.', '2018-02-12 14:25:13', '2018-02-12 10:08:00'),
(27, 3, 'creación de Mix de bachata (parte 3) - Trabajando primera canción', 'creación-de-mix-de-bachata-parte-3', 'Aquí estaremos ya editando nuestro proyecto interactuando con las canciones y observando que efecto podemos agregar.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6eti3h" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2otQDuB', 'Nulla.', '2018-02-15 05:00:00', '2018-02-15 05:00:00'),
(28, 3, 'creación de Mix de bachata (parte 4) - intro entre canción', 'creacion-de-mix-de-bachata-parte-4', 'Aqui crearemos un intro entre dos canciones para poder hacer la transicion correspondiente.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6etl0d" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2CG4fba', 'Nulla.', '2018-02-23 05:00:00', '2018-02-23 05:00:00'),
(29, 3, 'creación de Mix de bachata (parte 5) - tercera canción', 'creacion-de-mix-de-bachata-parte-5', 'Aqui vamos a integrar la tercera canción en nuestro mix.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6etmkk" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2oogcyf', 'Nulla.', '2018-02-23 05:00:00', '2018-02-23 05:00:00'),
(30, 3, 'creación de Mix de bachata (parte 6) - cuarta canción', 'creacion-de-mix-de-bachata-parte-6', 'Aqui vamos a integrar la cuarta canción en nuestro mix.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6g3aju" allowfullscreen allow="autoplay"></iframe>', 'http://bit.ly/2Ik1wbt', 'Nulla.', '2018-02-23 05:00:00', '2018-02-23 05:00:00'),
(31, 3, 'Cuadrar canciones - Ableton live ', 'cuadrar-canciones-con-ableton-live', 'veremos como cuadrar canciones utlizando la herramienta de ableton live ', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6gt81l" allowfullscreen allow="autoplay"></iframe>', 'https://bit.ly/2DSVRpp', 'Nulla.', '2018-02-23 05:00:00', '2018-02-23 05:00:00'),
(32, 3, 'Cuadrar canciones - Fl studio', 'cuadrar-canciones-con-fl-studio', 'veremos como cuadrar canciones utlizando fl studio', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6gy8pa" allowfullscreen allow="autoplay"></iframe>', 'https://bit.ly/2GjtiDP', 'Nulla.', '2018-02-23 05:00:00', '2018-02-23 05:00:00'),
(33, 3, 'Mix banda romantica (Parte 1)', 'mix-banda-romantica-parte-1', 'INICIAMOS UN NUEVO PROYECTO - MIX DE BANDA ROMANTICA!!', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6h3l88" allowfullscreen allow="autoplay"></iframe>', 'https://bit.ly/2pTXWwF', 'https://bit.ly/2GpWCbA', '2018-02-23 05:00:00', '2018-02-23 05:00:00'),
(34, 3, 'Mix banda romantica (Parte 2)', 'mix-banda-romantica-parte-2', 'MIX DE BANDA ROMANTICA.', '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x6hg1lb" allowfullscreen allow="autoplay"></iframe>', 'https://bit.ly/2qccKaJ', 'Nulla.', '2018-02-23 05:00:00', '2018-02-23 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(44, '2014_10_12_000000_create_users_table', 1),
(45, '2014_10_12_100000_create_password_resets_table', 1),
(46, '2018_02_06_034424_create_nivels_table', 1),
(47, '2018_02_06_034545_create_capitulos_table', 1),
(48, '2018_02_06_060450_create_novedades_table', 1),
(49, '2018_02_06_060553_create_archivos_extras_table', 1),
(50, '2018_02_06_060651_create_reviciones_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivels`
--

CREATE TABLE IF NOT EXISTS `nivels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nivels_slug_unique` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `nivels`
--

INSERT INTO `nivels` (`id`, `name`, `slug`, `body`, `file`, `created_at`, `updated_at`) VALUES
(1, 'GENERALIDADES', 'generalidades', 'Aqui podras ver las generalidades, programas a utilizar, introducción a ellos, etc.\r\n\r\nEspero que sea de tu agrado', 'https://image.ibb.co/bSmnWH/GENERALIDADES.jpg', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(2, 'NIVEL BASICO 1', 'nivel-basico-1', 'Aquí iniciaremos con el curso de fl studio donde veremos las cosas necesarias para hacer extended y mixes sencillos', 'https://image.ibb.co/gDpPBH/basico1.jpg', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(3, 'NIVEL BASICO 2', 'nivel-basico-2', 'Crearemos nuestro primer mix desde cero, aprenderemos hacer intros, remixes, etc', 'https://image.ibb.co/ijjudx/basico_II.jpg', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(4, 'NIVEL INTERMEDIO 1', 'nivel-intermedio-1', 'crear mixes de calidad y nuevos estilos de remix', 'https://image.ibb.co/hoH2WH/INTERMEDIO_I.jpg', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(5, 'NIVEL INTERMEDIO 2', 'nivel-intermedio-2', 'Aui haremos un repaso de lo aprendido y utilizaremos nuevas tecnicas', 'https://image.ibb.co/dnojBH/INTERMEDIO_II.jpg', '2018-02-06 12:23:32', '2018-02-06 12:23:32'),
(6, 'AVANZADO', 'avanzado', 'Aquí puliremos nuestros conocimientos', 'https://image.ibb.co/nQzPBH/AVANZADO.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE IF NOT EXISTS `novedades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`id`, `name`, `body`, `created_at`, `updated_at`) VALUES
(1, 'NUEVO VIDEO: CREACIÓN DE MIX DE BANDA ROMANTICA (PARTE 2) - SUBIDO: 6/ABRIL/2018', 'PUEDES VERLO AQUI: \r\n\r\n\r\n<a class="btn btn-info btn-sm" href="https://cursofl.djfrankremixer.com/home/video/mix-banda-romantica-parte-2"> VER VIDEO </a>', '2018-02-06 12:23:33', '2018-02-06 12:23:33'),
(2, 'ATENCIÓN!! MIRA VIDEO DE COMO INSTALAR ABLETON LIVE', 'VER VIDEO DE COMO INSTALAR ABLETON LIVE\r\n<br>\r\n<br>\r\n<a class="btn btn-success btn-lg" href="https://mega.nz/#!8GoSXTqR!MlHyanom-4SjnlGf_GSuL74UNFO_eE-IEr8tAhQC_rI"> DESCARGA ARCHIVO </a>\r\n<br>\r\n<br>\r\n\r\n<iframe width="760" height="515" src="https://www.youtube.com/embed/xlcCE56aceM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>\r\n<br>\r\n<br>\r\n\r\nsi tienen algun problema, pueden escribirme a mi facebook personal o dejar su inquietud en el chat del aula.', '2018-02-06 12:23:33', '2018-02-06 12:23:33'),
(4, 'LINK DE MATERIAL DEL VIDEO: Primer extended (parte 1) Areglado!!', 'PUEDES VERLO AQUI: \r\n\r\n<a class="btn btn-info btn-sm" href="https://cursofl.djfrankremixer.com/home/video/primer-extended-parte-1"> VER VIDEO </a>', '2018-02-06 12:23:33', '2018-02-06 12:23:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reviciones`
--

CREATE TABLE IF NOT EXISTS `reviciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `reviciones`
--

INSERT INTO `reviciones` (`id`, `name`, `body`, `created_at`, `updated_at`) VALUES
(1, 'REVISIÓN 1', 'enviado por: Dj Alex\r\n\r\n<div class="text-center">\r\n<br>\r\n<h3> Titulo: Pedacito de mi vida (Remix) </h3>\r\n<br>\r\n<br>\r\n\r\n<p> revisión: Buen día, primero agradecer que envien sus edits para poder revisar sus avances. Al iniciar a escuchar\r\nel remix noto que utilizo una base que se ha usado mucho, pero "OJO" no es una critica porque muchas de las veces \r\nuna base así como la que uso suenan perfectas con ciertas canciones y eso es lo que sucedio en este caso. Me gusto\r\nrecordar un poco que una canción de cumbia sea editada con una base popular ya de hace años. Por lo siguiente\r\nal iniciar el bajo estuvo bien ya que le da un plus, suena mas rico por decirlo así ya en confianza. \r\n<br>\r\n<br>\r\nPor lo del intro, pues simplemente quizas subirle un poquito de volumen nada más, y quizas aplicarle un "efecto de telefono"\r\na razón de que suene más suave, pero si seria bueno que tomara en cuenta el subir un poco más el volumen de todas las partes\r\ndel audio que involucran el intro.\r\n<br>\r\n<br>\r\nPor lo siguiente, la canción la encontre bien calibrada, no sonaba dispareja con la base y eso que conozco esa canción y \r\naveces da un poco de problema a la hora de ir cuadrandola, es de ir haciendola trozos.\r\n<br>\r\n<br>\r\nExcelente, espero que siga así mejorando cada día. Y a los demás siempre invitarlos a que suban sus edits no tengan pena, aquí\r\ntodos estamos aprendiendo!!\r\n<br>\r\n\r\n\r\n<img class="" src="http://2bkaribbean.com/wp-content/uploads/2015/07/DJ-Cover-Image.png" heigh="200px" width="200px">\r\n\r\n</p>\r\n</div>', '2018-02-06 12:23:33', '2018-02-06 12:23:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Francisco Navas', 'navasfran98@gmail.com', '$2y$10$HS/VR1P9bVnMxUlKkSXlf.5.jgA9pwVLDLfv2STrsmnh/lIjZYL56', 'rCUGJhPfFnIpvOXxa99tYOYCEh1v1XeKzZXtmkR0NZKLBA5dX0CRwKNHIcPi', '2018-02-06 12:24:49', '2018-02-06 12:24:49'),
(2, 'Alex', 'jefferson_gutierrez19@hotmail.com', '$2y$10$Ak6uW8r3zdxQAwMBfj7EVe0tjUKK02pWdyQVwGx0enHvL2OjPVSti', 'hwixIAstRA5YJxjD940iW36dJhnQTjyy7H1bet5E0zcsELkhiaViaOkAMJVH', '2018-02-09 06:52:51', '2018-02-09 06:52:51'),
(4, 'Oscar perez', 'oscarperez8477@gemail.com', '$2y$10$Qd/HjBGgI7ydGxBjkbvhvOveeFfS45xl92B5COU3Bzx5.YbijaSdC', 'sSecanQ2THo9onOIECP44dOh5natLWFZCNmr8mJhhRoGQdskteGvWgE0s50T', '2018-02-13 06:50:27', '2018-02-13 06:50:27'),
(5, 'oscar perez', 'oscarperez8477@gmail.com', '$2y$10$G8Vfh7nwPfd88foRAyfZhu/aomwc3AEfRzkHLUNRxaP7KKqnQNOti', 'XXg044VvxsWCa9irHNgYdvf54BPDmSF8E43rVXiej7eRIxKwoPXB8kywWDcE', '2018-02-13 06:56:59', '2018-02-13 06:56:59'),
(6, 'Dash', 'dashhernandez@hotmail.com', '$2y$10$8Cc.7Cc9y8r9GZ/ms/fNauTYjJPfHnlVcLWjjNFjzPuqV1J2FUU/O', '2qFYZTuQnqnlXGwc9Vfoi7q7r0kbAnbjFe5XYwJ6RopYz9hoQzuHcs3oNRUl', '2018-02-13 21:36:22', '2018-02-13 21:36:22'),
(7, 'Alonso Dj', 'josealonso04@hotmail.com', '$2y$10$7bg1/WNjzZ41RPepUTO.s.Zf7NADY7Rt4kpS31E9zla7PWSrEd9HO', NULL, '2018-02-18 09:19:02', '2018-02-18 09:19:02'),
(8, 'Manuel Rivera', 'manuel.rivera42033@upedagogica.edu.sv', '$2y$10$xIJLyRGzZ8agL5LRWRB0f.0h4BTUZ6F/r5zC52d/eksvC8BON/q.O', NULL, '2018-02-18 09:41:12', '2018-02-18 09:41:12'),
(9, 'Dj Lex ID', 'kevinkid0741@gmail.com', '$2y$10$e/ue1GsWZJ9rZzdL1fmBzOfNz1IsAqf7VB.0TTrDcHrbB7N3fsn5W', 'Edp1gKJim6MHyiGpREJ1qXky3XBQOKPYxXRRfyibddEWdJDZqfIVjTHfp05m', '2018-02-18 23:32:49', '2018-02-18 23:32:49'),
(10, 'fredy mendez', 'mfredy1992@gmail.com', '$2y$10$WIbinSiOi2AX.BHxQWOjOeXllQ5dNyBTJIOjheXrVc6VOzhPdlYZa', NULL, '2018-03-24 05:04:32', '2018-03-24 05:04:32'),
(11, 'Andres Montano', 'andres_style617@hotmail.com', '$2y$10$HvE41HOazdNLZop6m.rCCOpx0Hwxuicvtp.7vUVdhFrPwEaq.T0k.', 'TvJx4nuxQiKWKd05y40jLqBU6z1mduh4mayGR4OYwPleKoelTZblWrf01tvS', '2018-03-25 03:12:14', '2018-03-25 03:12:14'),
(12, 'fredy mendez', 'mfredy1992@hotmail.com', '$2y$10$.vXZb3d8er173U3sMEYqu.dTg8kb8w.vks2H2cB3mmGZsPZRlLtcK', NULL, '2018-03-28 07:29:14', '2018-03-28 07:29:14'),
(13, 'dj bunkero', 'armandosaavedra002@gmail.com', '$2y$10$oEvVEz5MkMlGiq4jRTBUcudXCerVMa6zFQB9z8J60RkSASxwOu3X6', '7qGfkAgQdoh9rbMxgCBC07qPmGK5X4XtOVR9iuFpBffgw6j9yXjWbVlVSvIW', '2018-03-31 03:40:44', '2018-03-31 03:40:44');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD CONSTRAINT `capitulos_nivel_id_foreign` FOREIGN KEY (`nivel_id`) REFERENCES `nivels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
