-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 11-04-2019 a las 22:26:26
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `post`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listpost`
--

CREATE TABLE `listpost` (
  `id` int(100) NOT NULL,
  `nombreblog` varchar(60) NOT NULL,
  `linkblog` varchar(60) NOT NULL,
  `autorblog` varchar(60) NOT NULL,
  `notasblog` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `listpost`
--

INSERT INTO `listpost` (`id`, `nombreblog`, `linkblog`, `autorblog`, `notasblog`) VALUES
(1, 'Javascript para dummies', 'javascript.org', 'Daniel Arango Villegas', 'Hola mundo este es mi primer Blog!!!!'),
(3, 'js como incio a la programacion!', 'js.com.co', 'Daniel Arango Villegas', 'Hola mundo desde send.php'),
(10, 'sds', 'dsds', 'dsdsd', 'dsdsdsds'),
(11, 'dsds', 'dsds', 'dsds', 'dsdsd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `listpost`
--
ALTER TABLE `listpost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `listpost`
--
ALTER TABLE `listpost`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
