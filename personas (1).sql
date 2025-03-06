-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2025 a las 00:33:08
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
-- Base de datos: `personas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `ID` int(11) NOT NULL,
  `Cedula` bigint(20) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`ID`, `Cedula`, `Nombre`, `Apellido`, `Usuario`, `Clave`) VALUES
(1, 123456789, 'Juan', 'Pérez', 'juanperez', 'clave123'),
(2, 987654321, 'María', 'González', 'mariagonzalez', 'clave234'),
(4, 223344556, 'Ana', 'López', 'analopez', 'clave456'),
(5, 334455667, 'Pedro', 'Martínez', 'pedromartinez', 'clave567'),
(6, 445566778, 'Lucía', 'Hernández', 'luciahernandez', 'clave678'),
(7, 556677889, 'José', 'García', 'josegarcia', 'clave789'),
(8, 667788990, 'Laura', 'Sánchez', 'laurasanchez', 'clave890'),
(9, 778899001, 'Manuel', 'Álvarez', 'manuelalvarez', 'clave901'),
(10, 889900112, 'Elena', 'Castro', 'elenacastro', 'clave012'),
(11, 990011223, 'Tomás', 'Mendoza', 'tomasmendoza', 'clave1234'),
(12, 101112334, 'Isabel', 'Vargas', 'isabelvargas', 'clave2345'),
(13, 121314445, 'Ricardo', 'Jiménez', 'ricardojimenez', 'clave3456'),
(14, 131415556, 'Mónica', 'Ruiz', 'monicaruiz', 'clave4567'),
(15, 141617667, 'Andrés', 'Torres', 'andrestorres', 'clave5678'),
(16, 151718778, 'Patricia', 'Ramírez', 'patriciaramirez', 'clave6789'),
(17, 161819889, 'Karen', 'Fernández', 'franciscofernandez', 'clave7890'),
(18, 171920990, 'Silvia', 'Jiménez', 'silviajimenez', 'clave8901'),
(19, 182021101, 'Alejandro', 'Morales', 'alejandromorales', 'clave9012'),
(20, 192122212, 'Rosa', 'González', 'rosagonzalez', 'clave0123'),
(21, 202223323, 'Luis', 'Hernández', 'luishernandez', 'clave1235'),
(22, 212324434, 'Gabriela', 'Pérez', 'gabrielaperez', 'clave2346'),
(23, 222425545, 'David', 'Ramírez', 'davidramirez', 'clave3457'),
(24, 232526656, 'Sandra', 'Sánchez', 'sandrasanchez', 'clave4568'),
(25, 242627767, 'Javier', 'Martínez', 'javiermartinez', 'clave5679'),
(26, 252728878, 'Raquel', 'Rodríguez', 'raquelrodriguez', 'clave6780'),
(27, 262829989, 'Eduardo', 'Álvarez', 'eduardoalvarez', 'clave7891'),
(28, 272930100, 'Carmen', 'Vargas', 'carmenvargas', 'clave8902'),
(29, 282031211, 'Rubén', 'Castro', 'rubencastro', 'clave9013'),
(30, 292132322, 'Nuria', 'Torres', 'nuriatorres', 'clave0124');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `cedula` (`Cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
