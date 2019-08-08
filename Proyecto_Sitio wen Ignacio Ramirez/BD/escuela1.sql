-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-08-2019 a las 22:13:55
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `curp_Alumno` varchar(15) NOT NULL,
  `nombreAlumno` varchar(30) DEFAULT NULL,
  `contrasena_Alum` varchar(15) DEFAULT NULL,
  `id_Grupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`curp_Alumno`),
  KEY `id_Grupo` (`id_Grupo`),
  KEY `curp_Alumno` (`curp_Alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`curp_Alumno`, `nombreAlumno`, `contrasena_Alum`, `id_Grupo`) VALUES
('DJ48', 'David Josue', '12345e', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

DROP TABLE IF EXISTS `calificaciones`;
CREATE TABLE IF NOT EXISTS `calificaciones` (
  `id_Calificacion` int(11) NOT NULL AUTO_INCREMENT,
  `calificacion` int(11) DEFAULT NULL,
  `curp_Profesor` varchar(15) DEFAULT NULL,
  `id_Materias` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Calificacion`),
  KEY `id_Calificacion` (`id_Calificacion`),
  KEY `curp_Profesor` (`curp_Profesor`),
  KEY `id_Materias` (`id_Materias`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id_Calificacion`, `calificacion`, `curp_Profesor`, `id_Materias`) VALUES
(2, 5, '56', 1),
(4, 5, '56', 1),
(7, 10, '9804', 2),
(8, 10, '9804', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegiaturas`
--

DROP TABLE IF EXISTS `colegiaturas`;
CREATE TABLE IF NOT EXISTS `colegiaturas` (
  `id_Colegiatura` int(11) NOT NULL,
  `curp_Alumno` varchar(15) DEFAULT NULL,
  `ficha` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Colegiatura`),
  KEY `curp_Alumno` (`curp_Alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `colegiaturas`
--

INSERT INTO `colegiaturas` (`id_Colegiatura`, `curp_Alumno`, `ficha`) VALUES
(1, 'DJ48', 1234),
(2, 'DJ48', 333546);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_Comentario` int(11) NOT NULL AUTO_INCREMENT,
  `contenidoCon` text,
  `fechaC` date DEFAULT NULL,
  `Id_noticia` varchar(50) NOT NULL,
  `curp_Usuario` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_Comentario`),
  KEY `curp_Usuario` (`curp_Usuario`),
  KEY `Id_noticia` (`Id_noticia`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_Comentario`, `contenidoCon`, `fechaC`, `Id_noticia`, `curp_Usuario`) VALUES
(1, 'hola', '2019-06-18', '', 'er56'),
(2, '<p>\n	holajeje</p>\n', '2019-06-25', '', '67'),
(4, 'hola ggege', '2019-06-18', '2', '67');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `idEvento` int(11) NOT NULL,
  `nombreE` varchar(50) NOT NULL,
  `fechaE` date NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `Curp_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idEvento`),
  KEY `Idusuario` (`Curp_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`idEvento`, `nombreE`, `fechaE`, `lugar`, `Curp_usuario`) VALUES
(0, 'Dia de las madres', '2019-08-07', 'El patio sivico', 7),
(3, 'festival', '2019-08-08', 'El patio civico', 700),
(1, 'Quermez', '2019-08-17', 'El patio civico', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

DROP TABLE IF EXISTS `grupos`;
CREATE TABLE IF NOT EXISTS `grupos` (
  `id_Grupo` int(11) NOT NULL AUTO_INCREMENT,
  `nombreGrupo` varchar(10) DEFAULT NULL,
  `curp_profesor` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_Grupo`),
  KEY `id_Grupo` (`id_Grupo`),
  KEY `curp_profesor` (`curp_profesor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_Grupo`, `nombreGrupo`, `curp_profesor`) VALUES
(1, '64', '56'),
(3, '6C', '56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE IF NOT EXISTS `materias` (
  `id_Materias` int(11) NOT NULL,
  `nombreMateria` varchar(15) DEFAULT NULL,
  `curp_Profesor` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_Materias`),
  KEY `id_Materias` (`id_Materias`),
  KEY `curp_Profesor` (`curp_Profesor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_Materias`, `nombreMateria`, `curp_Profesor`) VALUES
(1, 'adiminitracion', '56'),
(2, 'diseño', '9804');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id_Noticia` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(50) NOT NULL,
  `contenido` text,
  `fechaN` date DEFAULT NULL,
  `Curp_usuario` varchar(15) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`id_Noticia`),
  KEY `Curp_usuario` (`Curp_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_Noticia`, `Titulo`, `contenido`, `fechaN`, `Curp_usuario`, `imagen`) VALUES
(1, 'tengo problemas ', '<p>\n	sdasd</p>\n', '2019-06-11', '67', '29865-428288f294e3cdcc3ba78c3f12f2ab49d8c54de1_hq.jpg'),
(3, 'Se murio jose', '<p>\n	se murio AAA</p>\n', '2019-06-25', '67', ''),
(4, 'jabon', 'fsdgsdgsdgs', '2019-08-04', '67', ''),
(6, 'Jabon en barrA', '<p>\n	HOLA&nbsp;</p>\n', '2019-08-04', '67', '89141-62245877_327342577962705_740466960424239104_n.jpg'),
(8, 'Re apertura', '<p>\n	se inician las clases&nbsp;</p>\n', '2019-08-28', '67', 'dfa0b-img-20190702-wa0005.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

DROP TABLE IF EXISTS `privilegios`;
CREATE TABLE IF NOT EXISTS `privilegios` (
  `id_Privilegios` int(11) NOT NULL,
  `nombrePrivilegios` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_Privilegios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `privilegios`
--

INSERT INTO `privilegios` (`id_Privilegios`, `nombrePrivilegios`) VALUES
(1, 'adiministrador'),
(2, 'profesor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

DROP TABLE IF EXISTS `profesores`;
CREATE TABLE IF NOT EXISTS `profesores` (
  `curp_Profesor` varchar(15) NOT NULL,
  `nombreProfesor` varchar(30) DEFAULT NULL,
  `correoProfesor` varchar(30) DEFAULT NULL,
  `contraseniaProfe` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`curp_Profesor`),
  KEY `curp_Profesor` (`curp_Profesor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`curp_Profesor`, `nombreProfesor`, `correoProfesor`, `contraseniaProfe`) VALUES
('56', 'chrish', 'a@a.com', '12345'),
('9804', 'rodo', 'rodo@rodo.com', '1234'),
('fsdf46yfhd', '56456', 'fgdfgfdgdfgdfgdf', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `curp_usuario` varchar(20) NOT NULL,
  `nombreUsuario` varchar(30) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `contrasenia` varchar(15) DEFAULT NULL,
  `id_Privilegios` int(11) DEFAULT NULL,
  PRIMARY KEY (`curp_usuario`),
  KEY `curp_usuario` (`curp_usuario`),
  KEY `id_Privilegios` (`id_Privilegios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`curp_usuario`, `nombreUsuario`, `correo`, `contrasenia`, `id_Privilegios`) VALUES
('67', 'juan', 'pepe@pep.com', '1234', 1),
('EATK880623MGTHKL09', 'Katy Estrada', 'katy.estrada@gmail.com', '12345', 2),
('er56', 'pepe', 'pepe@pepe.com', '1234', 1),
('SILA9804980413HGTLNL', 'Alan', 'Alu_sl@outblook.com', 'Devilmaycry4', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`curp_Profesor`) REFERENCES `profesores` (`curp_Profesor`),
  ADD CONSTRAINT `calificaciones_ibfk_3` FOREIGN KEY (`id_Materias`) REFERENCES `materias` (`id_Materias`);

--
-- Filtros para la tabla `colegiaturas`
--
ALTER TABLE `colegiaturas`
  ADD CONSTRAINT `colegiaturas_ibfk_1` FOREIGN KEY (`curp_Alumno`) REFERENCES `alumnos` (`curp_Alumno`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`curp_Usuario`) REFERENCES `usuarios` (`curp_usuario`);

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`curp_profesor`) REFERENCES `profesores` (`curp_Profesor`);

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`Curp_usuario`) REFERENCES `usuarios` (`curp_usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_Privilegios`) REFERENCES `privilegios` (`id_Privilegios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
