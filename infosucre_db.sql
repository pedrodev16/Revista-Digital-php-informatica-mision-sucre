-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-infosucre.alwaysdata.net
-- Generation Time: Dec 14, 2024 at 04:13 PM
-- Server version: 10.11.9-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infosucre_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aldeas`
--

CREATE TABLE `aldeas` (
  `id` int(11) NOT NULL,
  `nombre_aldea` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aldeas`
--

INSERT INTO `aldeas` (`id`, `nombre_aldea`) VALUES
(1, 'Ramón F Feo'),
(2, 'Aldea Bicentenario de las Américas'),
(3, 'Aldea E.B América'),
(4, 'Aldea Liceo Alejandro Humboldt'),
(5, 'Aldea Ramón F Feo'),
(6, 'Aldea Antonio Estevez'),
(7, 'Aldea José Félix Ribas'),
(8, 'Aldea Felipe Dager'),
(9, 'Aldea Francisco Conde'),
(10, 'Todos');

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre_cat` varchar(100) NOT NULL,
  `DATE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre_cat`, `DATE`) VALUES
(26, 'Reporte de Actividades', '2024-11-22 07:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `NOTICES`
--

CREATE TABLE `NOTICES` (
  `ID` int(11) NOT NULL,
  `SECTION` varchar(100) DEFAULT NULL,
  `TITLE` varchar(155) DEFAULT NULL,
  `DESCRIPTION` mediumtext DEFAULT NULL,
  `IMAGE` varchar(255) DEFAULT NULL,
  `DATE` datetime DEFAULT NULL,
  `STATUS` varchar(10) NOT NULL,
  `aldea` varchar(100) NOT NULL,
  `pnf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `NOTICES`
--

INSERT INTO `NOTICES` (`ID`, `SECTION`, `TITLE`, `DESCRIPTION`, `IMAGE`, `DATE`, `STATUS`, `aldea`, `pnf`) VALUES
(6, '26', 'Charla informativa referente a la prevención del maltrato a la mujer en el marco de la GMVM', '<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: justify;\">El coordinador de aldea y los docentes facilitadores dictaron una charla a los triunfadores referente al maltrato a la mujer, tipos y leyes que protejen a las mujeres, con el fin de orientar a la poblaci&oacute;n estudiantil en general para que sean capaces de identificar cualquier maltrato en cualquiera de sus formas, todo esto enmarcado en la orientaci&oacute;n directas de la coordinaci&oacute;n regional y la GMVM.&nbsp; &nbsp;&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><img id=\"main_image_2q3g2727d8\" class=\"gallery2__item__img gallery2__item__base-width-on bx_allow_events \" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://fv5-3.files.fm/thumb_show.php?i=2q3g2727d8&amp;view&amp;v=1&amp;PHPSESSID=282cabb5a5cd358052b7b7239ab5e9175105b26d\" alt=\"\" width=\"457\" height=\"346\" data-image-loaded=\"true\"></p>\r\n<p><strong>Lugar:</strong> Carrera 4 entre calles 11 y 13 casco central,<br>Parroquia Calabozo, Municipio Miranda del Estado Gu&aacute;rico.</p>\r\n<p><strong>&nbsp;Fecha:</strong> 16/11/2024.</p>\r\n<p><strong>Instituciones presentes:</strong> Misi&oacute;n Sucre.</p>', 'a58849bb9954b93bb9c3f3a050ddfe95img.jpg', '2024-11-22 07:31:36', 'A', '1', '11'),
(7, '26', 'Daniel González Electo como Vocero Estudiantil de la Misión Sucre en las Elecciones Municipales del Municipio Miranda', '<p style=\"text-align: justify;\">El dia el jueves 13 de noviembre se llev&oacute; a cabo las elecciones municipales para elegir al vocero estudiantil que representara a los triunfadores de la Misi&oacute;n Sucre en la federaci&oacute;n venezolana de estudiantes universitarios con la participaci&oacute;n de las 8 aldeas que hacen vida activa en el municipio Miranda eje centro oeste &nbsp;bajo la coordinaci&oacute;n del profesor <em>Arduino Mendez</em>. D&oacute;nde result&oacute; electo el triunfador <em>Daniel Gonz&aacute;lez</em> estudiante del P.N.F Administraci&oacute;n de la aldea Universitaria Ram&oacute;n F Feo</p>\r\n<p>&nbsp;.<img id=\"main_image_8ney6q9kab\" class=\"gallery2__item__img gallery2__item__base-width-on bx_allow_events \" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://fv5-2.files.fm/thumb_show.php?i=8ney6q9kab&amp;view&amp;v=1&amp;PHPSESSID=282cabb5a5cd358052b7b7239ab5e9175105b26d\" alt=\"\" width=\"359\" height=\"269\" data-image-loaded=\"true\"></p>\r\n<p>&nbsp;</p>\r\n<p>Dicha actividad se realiz&oacute; en la cancha techada de la E.B Am&eacute;rica ubicada en la carrera 13 del casco Central de calabozo frente a la plaza bolivar.&nbsp; &nbsp; &nbsp;</p>', '8609c52c09dd14c4f2d9ed7b48d2e531img.jpg', '2024-11-22 07:54:00', 'A', '10', '11');

-- --------------------------------------------------------

--
-- Table structure for table `pnf`
--

CREATE TABLE `pnf` (
  `id` int(11) NOT NULL,
  `nombre_pnf` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pnf`
--

INSERT INTO `pnf` (`id`, `nombre_pnf`) VALUES
(1, 'Construcciones civiles '),
(2, 'Formación de educadores'),
(3, 'Administración'),
(4, 'Informatica'),
(5, 'Mecánica'),
(6, 'Tecnologia de la Produccion Agroalimentaria '),
(7, 'Agroecología '),
(8, 'Turismo'),
(9, 'Entrenamiento Deportivo'),
(10, 'Electricidad'),
(11, 'Todos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aldeas`
--
ALTER TABLE `aldeas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `NOTICES`
--
ALTER TABLE `NOTICES`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pnf`
--
ALTER TABLE `pnf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aldeas`
--
ALTER TABLE `aldeas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `NOTICES`
--
ALTER TABLE `NOTICES`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pnf`
--
ALTER TABLE `pnf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
