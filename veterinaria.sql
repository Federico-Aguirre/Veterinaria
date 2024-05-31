-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2024 a las 22:25:52
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
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id` int(100) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `DNI` varchar(30) NOT NULL,
  `CUIL_CUIT` varchar(30) NOT NULL,
  `Dirección` varchar(30) NOT NULL,
  `Piso` varchar(10) NOT NULL,
  `Departamento` varchar(10) NOT NULL,
  `Localidad` varchar(30) NOT NULL,
  `Teléfono` varchar(30) NOT NULL,
  `Celular` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id`, `Nombre`, `Apellido`, `DNI`, `CUIL_CUIT`, `Dirección`, `Piso`, `Departamento`, `Localidad`, `Teléfono`, `Celular`, `Email`, `Usuario`, `Contraseña`) VALUES
(3, 'fede', 'agui', '131313', '', 'asdasd', '1', 'd', '3', '13123', '134434', 'sedent333@gmail.com', 'sedent', '1234'),
(4, 'qweqwe', 'asdasd', '123123', '', '34', '1231', 'asdasd', '123', '123123', '13123', 'sdasd@gmail.com', 'asdasd', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `Id` int(255) NOT NULL,
  `Id_cliente` int(255) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Nombre` text NOT NULL,
  `Correo_electronico` varchar(50) NOT NULL,
  `Asunto` varchar(50) NOT NULL,
  `Comentarios` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `Id` int(100) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Raza` varchar(30) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Edad` varchar(10) NOT NULL,
  `Nro_de_microchip` varchar(30) NOT NULL,
  `Vacuna_antirrábica` varchar(50) NOT NULL,
  `Tratamiento_antiparasitario` varchar(50) NOT NULL,
  `Otras_vacunas` varchar(50) NOT NULL,
  `Información_adicional` varchar(50) NOT NULL,
  `Id_cliente` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`Id`, `Nombre`, `Raza`, `Sexo`, `Edad`, `Nro_de_microchip`, `Vacuna_antirrábica`, `Tratamiento_antiparasitario`, `Otras_vacunas`, `Información_adicional`, `Id_cliente`) VALUES
(2, 'b', 'b', 'b', '2', '2', 'b', 'b', 'b', 'b', 0),
(5, 'Bethoven', 'Bulldog', 'macho', '5', '1', 'no', 'no', 'no', 'no', 3),
(6, 'dd', 'dd', 'dd', '1', '1', 'd', 'd', 'd', 'd', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `Id` int(255) NOT NULL,
  `Id_cliente` int(255) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Mascota_a_atender` varchar(50) NOT NULL,
  `Asunto_a_atender` varchar(255) NOT NULL,
  `Mensaje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`Id`, `Id_cliente`, `Fecha`, `Mascota_a_atender`, `Asunto_a_atender`, `Mensaje`) VALUES
(10, 3, '2024-06-28 21:48:00', 'Bethoven', 'a', 'a'),
(11, 3, '2024-10-24 20:48:00', 'Bethoven', 'r', 'r');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
