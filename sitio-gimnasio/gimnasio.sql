-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-03-2024 a las 14:15:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gimnasio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `dni` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `gym` varchar(20) NOT NULL,
  `plan` varchar(250) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `dni`, `edad`, `sexo`, `telefono`, `gym`, `plan`, `fecha`) VALUES
(1, 'Facundo Homola', 39092195, 22, 'Masculino', '2664330323', 'San Luis', '4000', '2023-09-20'),
(2, 'Silvia Sanchez', 14296377, 63, 'Femenino', '2664152212', 'San Luis', '2800', '2023-09-20'),
(3, 'Raul Homola', 13772570, 63, 'Masculino', '2664112233', 'San Luis', '2800', '2023-09-20'),
(4, 'Rauly Homola', 30300122, 31, 'Masculino', '2664901817', 'San Luis', '5500', '2023-09-20'),
(5, 'Lucio Urioste', 40120321, 25, 'Masculino', '2664099922', 'San Luis', '5500', '2023-09-20'),
(6, 'Ana Sanchez', 13550690, 65, 'Femenino', '2664567789', 'San Luis', '2800', '2023-09-20'),
(7, 'Josep Guardiola', 20912221, 47, 'Masculino', '2551233244', 'San Luis', '2800', '2023-10-03'),
(8, 'Raul Gonzalez ', 22091211, 40, 'Masculino', '2664923211', 'San Luis', '4000', '2023-10-11'),
(9, 'Facundo Rodriguez', 42092210, 21, 'Masculino', '2664901818', 'Villa Mercedes', '2800', '2023-10-11'),
(10, 'Facundo Altamirano', 40221009, 21, 'Masculino', '255220011', 'San Luis', 'Musculación - Libre', '2023-11-06'),
(11, 'Mercedes', 11111111, 23, 'Femenino', '123456', 'San Luis', 'Spinning - 2 días', '2023-11-17'),
(12, 'Octa Riccardo', 30019992, 28, 'Masculino', '2553221122', 'San Luis', 'Musculación - 3 días', '2023-11-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenadores`
--

CREATE TABLE `entrenadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `dni` int(11) NOT NULL,
  `especialidad` varchar(250) NOT NULL,
  `gym` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entrenadores`
--

INSERT INTO `entrenadores` (`id`, `nombre`, `dni`, `especialidad`, `gym`) VALUES
(1, 'Jose Antonio', 37001992, 'Pilates', 'San Luis'),
(2, 'Oscar Cordoba', 20120991, 'Musculación', 'Ambos'),
(3, 'Luis Advincula', 28001992, 'Musculación', 'San Luis'),
(4, 'Rodrigo Sanchez', 20112992, 'Pilates - Musculación', 'Villa Mercedes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `dni` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`, `nombre`, `dni`, `id_cargo`) VALUES
(1, 'facundo', '12345', 'Facundo Homola', 39092195, 2),
(2, 'administrador', 'administrador', 'Raul Perez', 20123321, 1),
(4, 'agustin', 'agustin', 'Agustin Fernandez', 42221001, 2),
(5, 'jose09', 'jose09', 'Jose Sanchez', 30221008, 2),
(6, 'empleado2', 'empleado2', 'Carlos Alberto', 30221009, 2),
(7, 'user1', 'user1', 'Usuario Uno', 1599920001, 2),
(8, 'raul60', 'raul69', 'Raul Homola', 13772570, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
