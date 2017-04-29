
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2017 at 02:52 PM
-- Server version: 10.0.28-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u629788952_stock`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=166 ;

--
-- Dumping data for table `t_image`
--

INSERT INTO `t_image` (`id`, `name`, `url`, `description`, `idProjet`, `created`, `createdBy`, `updated`, `updatedBy`) VALUES
(65, 'Fa&ccedil;ade', 'images/projects/58c972e4e319fCHOP-8.jpg', 'Fa&ccedil;ade 1 projet Annahda 1', 1, '2017-03-15 04:59:16', 'admin', NULL, NULL),
(66, 'SAlon', 'images/projects/58c9730da7d85IMG-20160510-WA0063-1024x767.jpg', 'Salon Marocain projet Annahda 1', 1, '2017-03-15 04:59:57', 'admin', NULL, NULL),
(67, 'Couloir', 'images/projects/58c973823f342IMG-20160510-WA0067-767x1024.jpg', 'Couloir  Projet Annahda', 1, '2017-03-15 05:01:54', 'admin', NULL, NULL),
(68, 'Cuisine ', 'images/projects/58c973a2408a6CHOP-454f083180cd3e.jpg', 'Cuisine Projet Annahda ', 1, '2017-03-15 05:02:26', 'admin', NULL, NULL),
(69, 'SAlon 2', 'images/projects/58c973f105dbaCHOP-554f083177af8e.jpg', 'Salon 2 Projet Annahda', 1, '2017-03-15 05:03:45', 'admin', NULL, NULL),
(70, 'Couloir 2', 'images/projects/58c974986de03IMG-20160510-WA0071-1024x767.jpg', 'Couloir 2 Projet Annahda', 1, '2017-03-15 05:06:32', 'admin', NULL, NULL),
(94, 'Couloir', 'images/projects/58c9b2e33eb7120170205_103713-576x1024.jpg', 'Couloir Projet Khattabi', 4, '2017-03-15 09:32:19', 'admin', NULL, NULL),
(93, 'toilette', 'images/projects/58c9b2c6324eb20160507_155506-768x1024.jpg', 'Toilette Projet Khattabi', 4, '2017-03-15 09:31:50', 'admin', NULL, NULL),
(92, 'Cuisine 1', 'images/projects/58c9b2a139be1IMG-20170130-WA0041-1024x768.jpg', 'Cuisine 1 Projet Khattabi', 4, '2017-03-15 09:31:13', 'admin', NULL, NULL),
(91, 'Salon 2', 'images/projects/58c9b265c6652IMG-20161205-WA0042-1024x616.jpg', 'Salon 2 Projet Khattabi', 4, '2017-03-15 09:30:13', 'admin', NULL, NULL),
(90, 'Salon 1', 'images/projects/58c9b23626388IMG-20161205-WA0046-1024x616.jpg', 'Salon 1 Projet Khattabi', 4, '2017-03-15 09:29:26', 'admin', NULL, NULL),
(89, 'Cuisine 1', 'images/projects/58c9b20fdce83IMG-20161205-WA0042-1024x616.jpg', 'Cuisine 1 Projet Khattabi', 4, '2017-03-15 09:28:47', 'admin', NULL, NULL),
(88, 'Porte Pricipale', 'images/projects/58c9a80082b2020170205_103417-576x1024.jpg', 'Porte Principale Projet Khattabi', 4, '2017-03-15 08:45:52', 'admin', NULL, NULL),
(87, 'Fa&ccedil;ade 2', 'images/projects/58c9a7988422dIMG-20161205-WA0020-1024x614.jpg', 'Fa&ccedil;ade 2 Projet Khattabi', 4, '2017-03-15 08:44:08', 'admin', NULL, NULL),
(86, 'Fa&ccedil;ade 1', 'images/projects/58c9a497c1c1aIMG-20161205-WA0063.jpg', 'Fa&ccedil;ade Projet Khattabi', 4, '2017-03-15 08:31:19', 'admin', NULL, NULL),
(85, 'Salon', 'images/projects/58c9a3bd811fdchop-20-3.jpg', 'Salon Projet Rafah', 3, '2017-03-15 08:27:41', 'admin', NULL, NULL),
(84, 'Couloir', 'images/projects/58c9a3991198echop-19-768x1024.jpg', 'Couloir Projet Rafah', 3, '2017-03-15 08:27:05', 'admin', NULL, NULL),
(83, 'Toilettes', 'images/projects/58c9a334a22c7IMG-20160502-WA0017-576x1024.jpg', 'Toilettes Projet Rafah', 3, '2017-03-15 08:25:24', 'admin', NULL, NULL),
(82, 'Cuisine 2', 'images/projects/58c9a3117e7a1IMG-20160524-WA0025-1024x576.jpg', 'Cuisine 2 Projet Rafah', 3, '2017-03-15 08:24:49', 'admin', NULL, NULL),
(81, 'Cuisine ', 'images/projects/58c9a2f3f2ac7IMG-20160615-WA0218.jpg', 'Cuisine 1 Projet Rafah', 3, '2017-03-15 08:24:19', 'admin', NULL, NULL),
(80, 'Porte principale', 'images/projects/58c9a2c1a9bf6IMG-20161018-WA0010-1024x768.jpg', 'Porte principale Projet Rafah', 3, '2017-03-15 08:23:29', 'admin', NULL, NULL),
(79, 'Fa&ccedil;ade', 'images/projects/58c9a1a2f041fIMG-20160803-WA0009.png', 'Fa&ccedil;ade Projet Rafah', 3, '2017-03-15 08:18:42', 'admin', NULL, NULL),
(78, 'Cuisine', 'images/projects/58c9798894187chop-10.jpg', 'Cuisine Projet Gaza', 2, '2017-03-15 05:27:36', 'admin', NULL, NULL),
(77, 'Salon ', 'images/projects/58c9795079560IMG-20170110-WA0004-768x1024.jpg', 'Salon Projet Gaza', 2, '2017-03-15 05:26:40', 'admin', NULL, NULL),
(76, 'Couloir', 'images/projects/58c9792b98970chop-13 (1).jpg', 'Couloir Projet Gaza', 2, '2017-03-15 05:26:03', 'admin', NULL, NULL),
(75, 'Escaliers 2', 'images/projects/58c978c4b175bchop-9.jpg', 'Escaliers 2 Projet Gaza', 2, '2017-03-15 05:24:20', 'admin', NULL, NULL),
(74, 'Escaliers', 'images/projects/58c9786b4ac3achop-16.jpg', 'Escaliers Projet Gaza', 2, '2017-03-15 05:22:51', 'admin', NULL, NULL),
(73, 'Porte ', 'images/projects/58c9782ce1ebfchop-1-2-1-768x1024.jpg', 'Porte principale Projet Gaza', 2, '2017-03-15 05:21:48', 'admin', NULL, NULL),
(71, 'Chambre Enfant', 'images/projects/58c974c76edcdCHOP-1354f08318dbf31.jpg', 'Chambre des Enfants  Projet Annahda', 1, '2017-03-15 05:07:19', 'admin', NULL, NULL),
(72, 'Fa&ccedil;ade', 'images/projects/58c977c30d56bchop-13.jpg', 'Fa&ccedil;ade Projet Gaza', 2, '2017-03-15 05:20:03', 'admin', NULL, NULL),
(95, 'Cuisine 2', 'images/projects/58c9b303ef18fIMG-20170110-WA0018-1024x576.jpg', 'Cuisine 2 Projet Khattabi ', 4, '2017-03-15 09:32:51', 'admin', NULL, NULL),
(96, 'Fa&ccedil;ade', 'images/projects/58c9baddf2394IMG-20160329-WA0005.jpg', 'Fa&ccedil;ade Projet Kamar', 5, '2017-03-15 10:06:21', 'admin', NULL, NULL),
(97, 'couloir', 'images/projects/58c9bb1a0d5c8IMG-20160426-WA0076-1024x768.jpg', 'Couloir Projet Kamar', 5, '2017-03-15 10:07:22', 'admin', NULL, NULL),
(98, 'Salon', 'images/projects/58c9bc5eefdc1IMG-20160506-WA0062-1024x768.jpg', 'Salon Projet Kamar', 5, '2017-03-15 10:12:46', 'admin', NULL, NULL),
(99, 'Portes', 'images/projects/58c9bcd6836c4IMG-20160426-WA0077-768x1024.jpg', 'Portes Projet Kamar', 5, '2017-03-15 10:14:46', 'admin', NULL, NULL),
(100, 'Chambre', 'images/projects/58c9bde7cc016chop-4-5-4.jpg', 'Chambre Projet Kamar', 5, '2017-03-15 10:19:19', 'admin', NULL, NULL),
(101, 'Fa&ccedil;ade ', 'images/projects/58c9c0cdd3afechop-6-2.png', 'Fa&ccedil;ade Projet Ahlam', 6, '2017-03-15 10:31:41', 'admin', NULL, NULL),
(102, 'Porte ', 'images/projects/58c9c0f21b9d3chop-1-6-1.jpg', 'Porte Projet Ahlam', 6, '2017-03-15 10:32:18', 'admin', NULL, NULL),
(103, 'Escaliers', 'images/projects/58c9c1a43d6eachop-3-6-768x1024.jpg', 'Escaliers Projet Ahlam', 6, '2017-03-15 10:35:16', 'admin', NULL, NULL),
(104, 'Chambre', 'images/projects/58c9c1c6462a7chop-3655dd8b8b309f0.jpg', 'Chambre Projet Ahlam', 6, '2017-03-15 10:35:50', 'admin', NULL, NULL),
(105, 'Couloir', 'images/projects/58c9c1e898cf2chop-2655d1b8581ee58.jpg', 'Couloir Projet Ahlam', 6, '2017-03-15 10:36:24', 'admin', NULL, NULL),
(106, 'Cuisine', 'images/projects/58c9c213b1d58chop-6-13.jpg', 'Cuisine Projet Ahlam', 6, '2017-03-15 10:37:07', 'admin', NULL, NULL),
(107, 'Fa&ccedil;ade', 'images/projects/58c9c3930426eIMG-20161011-WA0005.png', 'Fa&ccedil;ade Projet Riham', 7, '2017-03-15 10:43:31', 'admin', NULL, NULL),
(108, 'Porte ', 'images/projects/58c9c41f971d5IMG-20170218-WA0047-616x1024.jpg', 'Porte Projet Riham', 7, '2017-03-15 10:45:51', 'admin', NULL, NULL),
(109, 'Cuisine 1', 'images/projects/58c9c44399896IMG-20160502-WA0013.jpg', 'Cuisine 1 Projet Riham', 7, '2017-03-15 10:46:27', 'admin', NULL, NULL),
(110, 'Cuisine 2', 'images/projects/58c9c45ca49b1IMG-20160524-WA0025-1024x576.jpg', 'Cuisine 2 Projet Riham', 7, '2017-03-15 10:46:52', 'admin', NULL, NULL),
(111, 'Cuisine 3', 'images/projects/58c9c472aedcdIMG-20160502-WA0014-1024x576.jpg', 'Cuisine 3 Projet Riham', 7, '2017-03-15 10:47:14', 'admin', NULL, NULL),
(112, 'Salon', 'images/projects/58c9c5551068aIMG-20161017-WA0095-1024x768.jpg', 'Salon Projet Riham', 7, '2017-03-15 10:51:01', 'admin', NULL, NULL),
(113, 'Fa&ccedil;ade 1', 'images/projects/58c9c8f207b6cIMG-20160715-WA0025.png', 'Fa&ccedil;ade 1 Projet Sajed', 8, '2017-03-15 11:06:26', 'admin', NULL, NULL),
(114, 'Fa&ccedil;ade 2', 'images/projects/58c9c990bfc00IMG-20160630-WA0062-576x1024.jpg', 'Fa&ccedil;ade 2 Projet Sajed', 8, '2017-03-15 11:09:04', 'admin', NULL, NULL),
(115, 'Fa&ccedil;ade 3', 'images/projects/58c9c9b7a2ecfIMG-20160628-WA0157-1024x576.jpg', 'Fa&ccedil;ade 3 Projet Sajed', 8, '2017-03-15 11:09:43', 'admin', NULL, NULL),
(116, 'Salon', 'images/projects/58c9c9ef03e87IMG-20160419-WA0024-1-1024x767.jpg', 'Salon Projet Sajed', 8, '2017-03-15 11:10:39', 'admin', NULL, NULL),
(117, 'Chambre', 'images/projects/58c9ca0b24ffdIMG-20160419-WA0026-1024x767.jpg', 'Chambre Projet Sajed', 8, '2017-03-15 11:11:07', 'admin', NULL, NULL),
(118, 'Balcon', 'images/projects/58c9ca24ee7bbIMG-20160415-WA0044-767x1024.jpg', 'Balcon Projet Sajed', 8, '2017-03-15 11:11:32', 'admin', NULL, NULL),
(119, 'Fa&ccedil;ade', 'images/projects/58c9cc4ade757IMG-20161011-WA0011.png', 'Fa&ccedil;ade Projet Ghofran', 9, '2017-03-15 11:20:42', 'admin', NULL, NULL),
(120, 'Cuisine', 'images/projects/58c9cd7ccb119IMG-20160615-WA0218.jpg', 'Cuisine Projet Ghofran', 9, '2017-03-15 11:25:48', 'admin', NULL, NULL),
(121, 'Salon 1', 'images/projects/58c9cd9ebe290IMG-20161006-WA0007-1024x614.jpg', 'Salon 1 Projet Ghofran', 9, '2017-03-15 11:26:22', 'admin', NULL, NULL),
(122, 'Salon 2', 'images/projects/58c9cdb5d2e0eIMG-20161006-WA0008-1024x614.jpg', 'Salon 2 Projet Ghofran', 9, '2017-03-15 11:26:45', 'admin', NULL, NULL),
(123, 'Salon 3', 'images/projects/58c9cdd3cf6dfIMG-20161006-WA0009-1024x614.jpg', 'Salon 3 Projet Ghofran', 9, '2017-03-15 11:27:15', 'admin', NULL, NULL),
(124, 'Fa&ccedil;ade', 'images/projects/58c9cf905482a20170304_140600.png', 'Fa&ccedil;ade Projet Badr', 10, '2017-03-15 11:34:40', 'admin', NULL, NULL),
(125, 'Porte', 'images/projects/58c9cfdd7f95620170105_080428-768x1024.jpg', 'Porte Projet Badr', 10, '2017-03-15 11:35:57', 'admin', NULL, NULL),
(126, 'Escaliers 1', 'images/projects/58c9d052cce2020170304_134058-576x1024.jpg', 'Escaliers 1 Projet Badr', 10, '2017-03-15 11:37:54', 'admin', NULL, NULL),
(127, 'Escaliers 2', 'images/projects/58c9d06bf10d320170304_134045-576x1024.jpg', 'Escaliers 2 Projet Badr', 10, '2017-03-15 11:38:19', 'admin', NULL, NULL),
(128, 'Couloir', 'images/projects/58c9d0c0f0b8220170304_134147-1024x576.jpg', 'Couloir Projet Badr', 10, '2017-03-15 11:39:44', 'admin', NULL, NULL),
(129, 'Couloir 2', 'images/projects/58c9d0dddcf2615781347_1810951749161239_656093389353128342_n-1.jpg', 'Couloir 2 Projet Badr', 10, '2017-03-15 11:40:13', 'admin', NULL, NULL),
(130, 'Salon 1', 'images/projects/58c9d0f84837915781641_1810951705827910_3365561680787064724_n-1.jpg', 'Salon 1 Projet Badr', 10, '2017-03-15 11:40:40', 'admin', NULL, NULL),
(131, 'Salon 2', 'images/projects/58c9d10acdb6d15781683_1810952109161203_5275293170351699066_n-1.jpg', 'Salon 2 Projet Badr', 10, '2017-03-15 11:40:58', 'admin', NULL, NULL),
(132, 'Salon 3', 'images/projects/58c9d124620a815825866_1810951732494574_3046192416678380317_n-1.jpg', 'Salon 3 Projet Badr', 10, '2017-03-15 11:41:24', 'admin', NULL, NULL),
(133, 'Cuisine', 'images/projects/58c9d1414ee4515823201_1810951599161254_757351236605699025_n-1.jpg', 'Cuisine Projet Badr', 10, '2017-03-15 11:41:53', 'admin', NULL, NULL),
(134, 'Toilette', 'images/projects/58c9d15c0558a15871576_1810951989161215_5230860452962666546_n-1.jpg', 'Toilette Projet Badr', 10, '2017-03-15 11:42:20', 'admin', NULL, NULL),
(135, 'Balcon', 'images/projects/58c9d178edda8IMG-20170215-WA0115-1024x576.jpg', 'Balcon Projet Badr', 10, '2017-03-15 11:42:48', 'admin', NULL, NULL),
(136, 'Fa&ccedil;ade', 'images/projects/58c9d28d848f220170304_132417.jpg', 'Fa&ccedil;ade Projet Al Aksa', 11, '2017-03-15 11:47:25', 'admin', NULL, NULL),
(137, 'Porte', 'images/projects/58c9d37304dd0IMG-20170218-WA0048-616x1024.jpg', 'Porte Projet Al Aksa', 11, '2017-03-15 11:51:15', 'admin', NULL, NULL),
(138, 'Chambre', 'images/projects/58c9d38e0823320161119_111131-768x1024.jpg', 'Chambre Projet Al Aksa', 11, '2017-03-15 11:51:42', 'admin', NULL, NULL),
(139, 'Chambre 2', 'images/projects/58c9d3a55570d20161119_112350-768x1024.jpg', 'Chambre 2 Projet Al Aksa', 11, '2017-03-15 11:52:05', 'admin', NULL, NULL),
(140, 'Toilette', 'images/projects/58c9d3c61032920170304_132900-1024x576.jpg', 'Toilette Projet Al Aksa', 11, '2017-03-15 11:52:38', 'admin', NULL, NULL),
(141, 'Fa&ccedil;ade 3D', 'images/projects/58c9d616cbf6cSans-titre-2.jpg', 'Fa&ccedil;ade 3D Projet Lina', 12, '2017-03-16 12:02:30', 'admin', NULL, NULL),
(142, 'Fa&ccedil;ade 2', 'images/projects/58c9d7043102cIMG-20160715-WA0022-1024x767.jpg', 'Fa&ccedil;ade 2 Projet Al Aksa', 12, '2017-03-16 12:06:28', 'admin', NULL, NULL),
(143, 'Salon', 'images/projects/58c9d7bb449ecIMG-20170203-WA0002-1024x576.jpg', 'Salon Projet Al Aksa', 12, '2017-03-16 12:09:31', 'admin', NULL, NULL),
(144, 'Salon', 'images/projects/58c9d7cf54925IMG-20170207-WA0050-576x1024.jpg', 'Salon Projet Al Aksa', 12, '2017-03-16 12:09:51', 'admin', NULL, NULL),
(145, 'Carrelage', 'images/projects/58c9d7f3c2785IMG-20170204-WA0082-576x1024.jpg', 'Carrelage Projet Al Aksa', 12, '2017-03-16 12:10:27', 'admin', NULL, NULL),
(146, 'Fa&ccedil;ade', 'images/projects/58c9da230acc2IMG-20160318-WA0031-1024x819.jpg', 'Fa&ccedil;ade 1 Projet Haj Najib', 13, '2017-03-16 12:19:47', 'admin', NULL, NULL),
(147, '3D 1', 'images/projects/58c9da4f5a788apart-1-4-1024x683.jpg', '3D 1 Projet Haj Najib', 13, '2017-03-16 12:20:31', 'admin', NULL, NULL),
(148, '3D 2', 'images/projects/58c9da6bae187IMG-20170213-WA0019-1024x575.jpg', '3D 2 Projet Haj Najib', 13, '2017-03-16 12:20:59', 'admin', NULL, NULL),
(149, '3D 3', 'images/projects/58c9da875477bapart-1-1024x683.jpg', '3D 3 Projet Haj Najib', 13, '2017-03-16 12:21:27', 'admin', NULL, NULL),
(150, 'Chantier', 'images/projects/58c9daa76b2dbIMG-20170213-WA0022-1024x575.jpg', 'Chantier 1 Projet Haj Najib', 13, '2017-03-16 12:21:59', 'admin', NULL, NULL),
(151, '3D 3', 'images/projects/58c9dad05e1e3apart-2-1024x683.jpg', '3D 3 Projet Haj Najib', 13, '2017-03-16 12:22:40', 'admin', NULL, NULL),
(152, 'Chantier 3', 'images/projects/58c9daf4d9248IMG-20170214-WA0100-1024x616.jpg', 'Chantier 3 Projet Haj Najib', 13, '2017-03-16 12:23:16', 'admin', NULL, NULL),
(153, '3D 4', 'images/projects/58c9db24e8a6bapart-3-1024x683.jpg', '3D 4 Projet Haj Najib', 13, '2017-03-16 12:24:04', 'admin', NULL, NULL),
(154, 'Chantier 4', 'images/projects/58c9db51620c8IMG-20170228-WA0018-1024x575.jpg', 'Chantier 4 Projet Haj Najib', 13, '2017-03-16 12:24:49', 'admin', NULL, NULL),
(155, '3D 5', 'images/projects/58c9db9a3a011apart-4-1024x683.jpg', '3D 5 Projet Haj Najib', 13, '2017-03-16 12:26:02', 'admin', NULL, NULL),
(156, 'Chantier 6', 'images/projects/58c9dbc421ad1IMG-20170228-WA0018-1024x575.jpg', 'Chantier 6 Projet Haj Najib', 13, '2017-03-16 12:26:44', 'admin', NULL, NULL),
(157, '3D 6', 'images/projects/58c9dbe47796aapart-5-1024x683.jpg', '3D 6 Projet Haj Najib', 13, '2017-03-16 12:27:16', 'admin', NULL, NULL),
(158, 'Fa&ccedil;ade 1', 'images/projects/58c9dc2fa6fa3Sans-titre-1.png', 'Fa&ccedil;ade 1 Projet Jasmin', 14, '2017-03-16 12:28:31', 'admin', NULL, NULL),
(159, '3D 1', 'images/projects/58c9dc5c9d66e006-1024x725.jpg', '3D 1 Projet Jasmin', 14, '2017-03-16 12:29:16', 'admin', NULL, NULL),
(160, 'Chantier 1', 'images/projects/58c9df5cf253320170304_140429-576x1024.jpg', 'Chantier 1 Projet Jasmin', 14, '2017-03-16 12:42:04', 'admin', NULL, NULL),
(161, '3D 2', 'images/projects/58c9dfb5c1159007-1024x725.jpg', '3D 2 Projet Jasmin', 14, '2017-03-16 12:43:33', 'admin', NULL, NULL),
(162, 'Chantier 2', 'images/projects/58c9dfd96e85520170304_140440-1024x576.jpg', 'Chantier 2 Projet Jasmin', 14, '2017-03-16 12:44:09', 'admin', NULL, NULL),
(163, '3D 3', 'images/projects/58c9e00792fd4008-1024x725.jpg', '3D 3 Projet Jasmin', 14, '2017-03-16 12:44:55', 'admin', NULL, NULL),
(164, 'Chantier 4', 'images/projects/58c9e0352fab8IMG-20170303-WA0005-1024x575.jpg', 'Chantier 4 Projet Jasmin', 14, '2017-03-16 12:45:41', 'admin', NULL, NULL),
(165, '3D 4', 'images/projects/58c9e053b10cb009-1024x725.jpg', '3D 4 Projet Jasmin', 14, '2017-03-16 12:46:11', 'admin', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
