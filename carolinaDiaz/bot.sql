-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-11-2024 a las 21:41:18
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'hola', 'Hola ¿Cómo estás?'),
(2, 'hola', 'Hola ¿Cómo estás?'),
(3, 'me siento triste', 'Lamento que te sientas mal, te gustaria hablar mas acerca de tu problema???'),
(4, 'si quiero', 'Esta bien Por favor dame tu nombre'),
(6, 'Carolina', 'Esta bien carolina, cuentame que te pasa?'),
(7, 'siento estres', 'que mal, Lamento que estés sintiendo estrés. Es una respuesta común, pero puede ser difícil de manejar. Aquí te doy algunas sugerencias para relajarte:Respira profundamente, Haz una pausa,Haz ejercicio o estiramientos.                                   Quieres Hablar con un humano?'),
(8, 'necesito ayuda profesional', 'Esta bien dame tu numero de teléfono para que uno de nuestros expertos te pueda contactar.'),
(9, '3138411658', 'Se registro el numero 3138411658, manten la calma ya uno de nuestros expertos te llamara.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
