-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-10-2022 a las 20:04:55
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sru_3vf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'Test@12345', '28-12-2016 11:42:05 AM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulacion`
--

CREATE TABLE `postulacion` (
  `id` int(11) NOT NULL,
  `profesorasignatura` varchar(255) DEFAULT NULL,
  `profesorId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `arancel` int(11) DEFAULT NULL,
  `postulacionDate` varchar(255) DEFAULT NULL,
  `postulacionTime` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `userStatus` int(11) DEFAULT NULL,
  `profesorStatus` int(11) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postulacion`
--

INSERT INTO `postulacion` (`id`, `profesorasignatura`, `profesorId`, `userId`, `arancel`, `postulacionDate`, `postulacionTime`, `postingDate`, `userStatus`, `profesorStatus`, `updationDate`) VALUES
(3, 'Programacion Web I', 7, 6, 600, '2019-06-29', '9:15 AM', '2019-06-23 17:31:28', 1, 0, '2022-10-23 15:32:03'),
(4, 'Redes y Seguridad', 5, 5, 8050, '2019-11-08', '1:00 PM', '2019-11-05 08:28:54', 1, 1, '2022-10-23 15:32:16'),
(5, 'Derecho Internacional', 9, 7, 500, '2019-11-30', '5:30 PM', '2019-11-10 16:41:34', 1, 0, '2022-10-23 15:32:28'),
(6, 'Marketing I', 6, 2, 2500, '2022-07-22', '6:30 PM', '2022-07-15 20:24:38', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesorasignatura`
--

CREATE TABLE `profesorasignatura` (
  `id` int(11) NOT NULL,
  `asignatura` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesorasignatura`
--

INSERT INTO `profesorasignatura` (`id`, `asignatura`, `creationDate`, `updationDate`) VALUES
(1, 'Programacion Web I', '2022-10-28 04:37:25', '2022-10-23 17:58:00'),
(2, 'Redes y seguridad', '2016-12-28 04:38:12', '2022-10-23 15:29:05'),
(3, 'Etica', '2016-12-28 04:38:48', '2022-10-23 15:29:21'),
(4, 'Introduccion a la Programacion', '2016-12-28 04:39:26', '2022-10-23 15:29:49'),
(5, 'Derecho Procesal I', '2016-12-28 04:39:51', '2022-10-23 15:30:05'),
(6, 'Derecho Internacional', '2016-12-28 04:40:08', '2022-10-23 15:30:20'),
(7, 'Administracion de Empresas I', '2016-12-28 04:41:18', '2022-10-23 15:30:36'),
(9, 'Marketing I', '2016-12-28 05:37:39', '2022-10-23 15:30:48'),
(10, 'Contabilidad y Costos', '2017-01-07 06:07:53', '2022-10-23 15:31:04'),
(11, 'Administracion de Operacion', '2019-06-23 16:51:06', '2022-10-23 15:31:16'),
(12, 'Integracion de software', '2019-11-10 16:36:36', '2022-10-23 15:31:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `asignatura` varchar(255) DEFAULT NULL,
  `profesorName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `arancel` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `profEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `asignatura`, `profesorName`, `address`, `arancel`, `contactno`, `profEmail`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'Programacion Web I', 'Javier Miranda', 'Campus Viña', '2.500.000', 8285703354, '', 'f925916e2754e5e03f75dd58a5733251', '2016-12-29 04:25:37', '2022-10-23 17:58:21'),
(10, 'Redes y seguridad', 'Javier Miranda', 'Campus Viña', '2500000', 988997755, 'jmiranda@gmail.com', '7f5da2b2686999d3789a7d713170df9b', '2022-10-23 15:36:45', NULL),
(11, 'Derecho Internacional', 'Carlos Zarate', 'Campus Santiago', '1800000', 922334455, 'cazar@gmail.com', '2e6b005720b3b217ccc3388242d3a7e1', '2022-10-23 17:56:38', NULL),
(12, 'Derecho Procesal I', 'Diego San Martin', 'Campus Santiago', '2500000', 933445566, 'diesanma@gmail.com', '50ea4f848b6e497222dfc499c3dec832', '2022-10-23 18:00:02', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesoreslog`
--

CREATE TABLE `profesoreslog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesoreslog`
--

INSERT INTO `profesoreslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(20, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2022-07-15 19:59:57', '16-07-2022 02:30:39 AM', 1),
(21, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2022-07-15 20:25:47', '16-07-2022 02:56:57 AM', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblacademichistory`
--

CREATE TABLE `tblacademichistory` (
  `ID` int(10) NOT NULL,
  `AlumnoID` int(10) DEFAULT NULL,
  `NotaInicial` varchar(200) DEFAULT NULL,
  `NotaSemestral` varchar(200) NOT NULL,
  `NotaAnual` varchar(100) DEFAULT NULL,
  `PromedioNotas` varchar(200) DEFAULT NULL,
  `InfAcad` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblacademichistory`
--

INSERT INTO `tblacademichistory` (`ID`, `AlumnoID`, `NotaInicial`, `NotaSemestral`, `NotaAnual`, `PromedioNotas`, `InfAcad`, `CreationDate`) VALUES
(2, 3, '5.6', '4.5', '5.6', '4.8', 'Estudiante es promovido a siguiente ciclo\r\n', '2022-10-23 15:26:59'),
(3, 2, '5.4', '4.5', '4.8', '4.7', 'Estudiante es promivido al siguiente ciclo', '2022-10-23 15:27:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblalumno`
--

CREATE TABLE `tblalumno` (
  `ID` int(10) NOT NULL,
  `Profid` int(10) DEFAULT NULL,
  `AlumnoName` varchar(200) DEFAULT NULL,
  `AlumnoContno` bigint(10) DEFAULT NULL,
  `AlumnoEmail` varchar(200) DEFAULT NULL,
  `AlumnoGender` varchar(50) DEFAULT NULL,
  `AlumnoAdd` mediumtext DEFAULT NULL,
  `AlumnoAge` int(10) DEFAULT NULL,
  `AlumnoInfAcad` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblalumno`
--

INSERT INTO `tblalumno` (`ID`, `Profid`, `AlumnoName`, `AlumnoContno`, `AlumnoEmail`, `AlumnoGender`, `AlumnoAdd`, `AlumnoAge`, `AlumnoInfAcad`, `CreationDate`, `UpdationDate`) VALUES
(1, 1, '', 0, '', 'Male', '', 0, '', '2020-10-04 19:38:06', '2022-10-23 15:41:09'),
(2, 5, 'Daniel Rodriguez', 9797977979, 'drodriguez@gmail.com', 'Male', 'Rosario Norte 3243, Apartmento 405, Las Condes, Santiago', 39, 'No', '2019-11-05 08:40:13', '2019-11-05 09:53:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `IsRead` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `fullname`, `email`, `contactno`, `message`, `PostingDate`, `AdminRemark`, `LastupdationDate`, `IsRead`) VALUES
(4, 'Sergio Gonzalez', 'scerda@mail.com', 977668855, ' Valor arancel e inicio de clases programacion Web i ', '2022-10-23 15:43:21', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(24, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-15 19:57:20', NULL, 0),
(25, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-15 19:57:57', '16-07-2022 02:29:28 AM', 1),
(26, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-15 20:11:12', '16-07-2022 02:55:17 AM', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(2, 'Sergio Cerda', 'Viña del Mar', 'Valparaiso', 'male', 'test@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-30 03:34:39', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `postulacion`
--
ALTER TABLE `postulacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesorasignatura`
--
ALTER TABLE `profesorasignatura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesoreslog`
--
ALTER TABLE `profesoreslog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblacademichistory`
--
ALTER TABLE `tblacademichistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblalumno`
--
ALTER TABLE `tblalumno`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `postulacion`
--
ALTER TABLE `postulacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `profesorasignatura`
--
ALTER TABLE `profesorasignatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `profesoreslog`
--
ALTER TABLE `profesoreslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tblacademichistory`
--
ALTER TABLE `tblacademichistory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tblalumno`
--
ALTER TABLE `tblalumno`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
