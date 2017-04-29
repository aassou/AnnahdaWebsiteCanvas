-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 03:52 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `annahda_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_config`
--

CREATE TABLE IF NOT EXISTS `t_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `indexContent` int(12) DEFAULT NULL,
  `sliderType` int(12) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updatedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_config`
--

INSERT INTO `t_config` (`id`, `indexContent`, `sliderType`, `created`, `createdBy`, `updated`, `updatedBy`) VALUES
(1, 0, 1, '2016-01-30 00:00:00', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_image`
--

CREATE TABLE IF NOT EXISTS `t_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `url` text,
  `description` varchar(255) DEFAULT NULL,
  `idProjet` int(12) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updatedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_projet`
--

CREATE TABLE IF NOT EXISTS `t_projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `dateCreation` date DEFAULT NULL,
  `avancementConstruction` int(3) DEFAULT NULL,
  `avancementFinition` int(3) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updatedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `t_projet`
--

INSERT INTO `t_projet` (`id`, `name`, `description`, `adresse`, `dateCreation`, `avancementConstruction`, `avancementFinition`, `created`, `createdBy`, `updated`, `updatedBy`) VALUES
(1, 'Residence Annahda', NULL, NULL, NULL, 0, NULL, '2016-01-28 00:00:00', 'admin', NULL, NULL),
(2, 'Residence Gaza', NULL, NULL, NULL, 0, NULL, '2016-01-28 00:00:00', 'admin', NULL, NULL),
(3, 'Residence Rafah', 'Residence Rafah est un projet cree par le Groupe Annahda Lil Iaamar, afin  de repondre au besoins de ses clients dans la region de Nador. ', 'Rue ONDA 12301239 Nador', '2012-08-09', 50, 30, '2016-01-28 00:00:00', 'admin', '2016-05-13 05:09:53', 'admin'),
(4, 'Residence Khattabi', NULL, NULL, NULL, 0, NULL, '2016-01-28 00:00:00', 'admin', NULL, NULL),
(5, 'Residence Kamar', NULL, NULL, NULL, 0, NULL, '2016-01-28 00:00:00', 'admin', NULL, NULL),
(6, 'Residence Ahlam', NULL, NULL, NULL, 0, NULL, '2016-01-28 00:00:00', 'admin', NULL, NULL),
(7, 'Residence Riham', NULL, NULL, NULL, 0, NULL, '2016-01-28 00:00:00', 'admin', NULL, NULL),
(8, 'Residence Sajed', NULL, NULL, NULL, 0, NULL, '2016-01-28 00:00:00', 'admin', NULL, NULL),
(9, 'Residence Ghofran', NULL, NULL, NULL, 0, NULL, '2016-01-28 00:00:00', 'admin', NULL, NULL),
(10, 'Residence Badr', NULL, NULL, NULL, 0, NULL, '2016-01-28 00:00:00', 'admin', NULL, NULL),
(11, 'Residence Al Aksa', NULL, NULL, NULL, 0, NULL, '2016-01-28 00:00:00', 'admin', NULL, NULL),
(12, 'Residence Annahda 11', NULL, NULL, NULL, 0, NULL, '2016-01-28 00:00:00', 'admin', NULL, NULL),
(13, 'Residence Annahda 12', NULL, NULL, NULL, 0, NULL, '2016-01-28 00:00:00', 'admin', NULL, NULL),
(14, 'Residence Annahda 13', 'Le projet Residence Annahda 13 est une suite des succ&egrave;s des projets ant&eacute;c&eacute;dants du Groupe Annahda Lil Iaamar', 'ONDA 49 Nador', '2015-02-01', 0, NULL, '2016-01-29 06:17:18', 'admin', '2016-01-29 06:40:35', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_sliderimage`
--

CREATE TABLE IF NOT EXISTS `t_sliderimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `url` text,
  `description` text,
  `created` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updatedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `t_sliderimage`
--

INSERT INTO `t_sliderimage` (`id`, `name`, `url`, `description`, `created`, `createdBy`, `updated`, `updatedBy`) VALUES
(1, 'Projets de Qualit&eacute;', 'http://www.amli.com/AMLIcontent/files/apartments/dallas/escena/amenity-exterior/escena-amenity-exterior-building-exterior-2_B.jpg', 'Des projets &agrave; la hauteur de vos ambitions', '2016-01-29 11:04:27', 'admin', NULL, NULL),
(2, 'Groupe Annahda', 'https://luxuryflatsforsale.files.wordpress.com/2015/10/luxury-apartments.jpeg', 'Bienvenue chez Groupe Annahda Lil Iaamar', '2016-01-29 11:07:09', 'admin', NULL, NULL),
(3, 'Nous construisons le lux', 'https://arhitekturaplus.files.wordpress.com/2012/01/hyde061.jpg', 'Vous offrir le lux de vos r&ecirc;ves est notre mission', '2016-01-29 11:08:14', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_slidervideo`
--

CREATE TABLE IF NOT EXISTS `t_slidervideo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `url` text,
  `description` text,
  `created` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updatedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_slidervideo`
--

INSERT INTO `t_slidervideo` (`id`, `name`, `url`, `description`, `created`, `createdBy`, `updated`, `updatedBy`) VALUES
(1, 'Video 1', 'https://www.youtube.com/embed/qKXulOrjRCE?autoplay=1&rel=0&loop=1&controls=2', 'Grouep Annahda Presentation 1', '2016-01-29 11:09:10', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `profil` varchar(30) NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `login`, `password`, `created`, `profil`, `status`) VALUES
(7, 'admin', 'admin', '2016-01-28', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_video`
--

CREATE TABLE IF NOT EXISTS `t_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `url` text,
  `description` text,
  `idProjet` int(12) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updatedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `t_video`
--

INSERT INTO `t_video` (`id`, `name`, `url`, `description`, `idProjet`, `created`, `createdBy`, `updated`, `updatedBy`) VALUES
(1, 'Video 1', 'zl8NWAXCvEM', 'GROUPE ANNAHDA LIL IAAMAR', 3, '2016-01-29 04:35:17', 'admin', NULL, NULL),
(2, 'Video 2', 'BpudnReRkJM', 'groupe annahda lil iaamar projet 2 hay al matar\r\n', 3, '2016-01-29 04:52:23', 'admin', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
