-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 19 fév. 2018 à 22:30
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `moncv`
--
CREATE DATABASE IF NOT EXISTS `moncv` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `moncv`;

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` int(11) NOT NULL,
  `link` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description_court` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `id_langue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id`, `nom`, `description_court`, `description`, `lieu`, `date`, `id_langue`) VALUES
(1, 'Dicsit Informatique', 'Développeur logiciel', 'Analyse et développement d\'un logiciel de reprise de données des bases de données concurrentes vers notre base (SQL Base puis SQL Server).\r\n\r\nDéveloppement et maintenance d\'une application web de gestion de données médicales et de patients (antHADine) développé en Gupta ainsi que de son interface internet en C# (Asp.NET MVC).\r\n\r\nDéveloppement d\'une interface entre deux logiciels par format XML.\r\nRelation avec les clients', 'Bezaumont', '07/2011 - 02/2017', 1),
(2, 'INPL Nancy', 'Centre de Ressources Informatique (stage de 3 mois)', 'Développement de deux projets d\'application métier en Cakephp', 'Nancy-Brabois', '04/2010 - 06/2010', 1),
(3, 'CHU de Nancy-Brabois', 'Technicien de laboratoire', '', 'Nancy-Brabois', '05/2008 - 10/2008', 1),
(4, 'Dicsit Informatique', 'Software déveloper', 'Analysis and development of a software to transfer data from another\r\nconcurrent\'s databases inside our database.\r\n\r\nDevelopment of a software using Gupta language and the web interface\r\nof this software using C#.\r\n\r\nDevelopment of an interface between two softwares to share data using\r\nXML files.\r\n\r\nWork effectively both independently and part of the team with minimal\r\nsupervision.', 'Bezaumont', '07/2011 - 02/2017', 2),
(5, 'INPL Nancy', 'Central informatics service (internship : 3 months)', 'Development of two projects of business application using CakePHP', 'Nancy-Brabois', '04/2010 - 06/2010', 2),
(6, 'CHU de Nancy – Brabois (Hospital)', 'Laboratory technician at nuclear medicine laboratory', '', 'Nancy-Brabois', '05/2008 - 10/2008', 2);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description_court` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `id_langue` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_langue` (`id_langue`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `nom`, `description_court`, `description`, `lieu`, `date`, `id_langue`) VALUES
(1, 'Licence Pro CISIIE', 'Licence Concepteur Intégrateur de Systèmes Internet/Intranet pour l\'Entreprise.', 'La licence professionnelle « CISIIE » permet à des étudiants maitrisant déjà la programmation de se spécialiser dans la conception et le développement d’applications Web. \r\n\r\nLes compétences visées principalement concernent l\'architecture, la programmation et la mise en œuvre d\'applications web du côté du serveur (backend) : API, frameworks, gestion des données \r\net sur le client (frontend) : interfaces actives, frameworks, Javascript, clients mobiles, ainsi que l\'intégration de services web et d\'applications métiers.\r\n\r\nProjet tutoré : Progressive Image Loading\r\nObjectif : Fournir une solution open source permettant aux clients de proposer aux utilisateurs de leurs sites un service d’upload d’image. Ces images seront restituées via du progressive image loading avec un effet sélectionné par le client dans la liste des effets que nous lui proposons.', 'IUT Charlemagne de Nancy', '09/2017 - actuellement', 1),
(2, 'Développeur Logiciel', 'Titre Professionnel de niveau III correspondant au BTS/DUT de Développeur(s) logiciel.', 'Cette formation se concentre principalement sur les bases de développement web (html, css, php, mysql) et sur du développement logiciel (c#, sql server).\r\nL\'enseignement est semi-autonome, les élèves ont une partie cours et une partie développement avec un objectif à atteindre.', 'AFPA de Pompey', '2009 - 2010', 1),
(3, 'BTS Analyse Biologique', 'La formation professionnelle porte sur la Biochimie, la Microbiologie, l’Hématologie, l’Immunologie, le prélèvement sanguin (théorie) et la connaissance du milieu professionnel.', '', 'Lycée Varoquaux de Tomblaine', '2005 - 2007', 1),
(4, 'Baccalauréat STL BGB', 'STL Biochimie Génie Biologique', '', 'Lycée Stanislas de Villers Les Nancy', '2004', 1),
(5, 'Bachelor\'s degree CISIIE', 'Web developer\'s bachelor degree', 'This degree give to students who already have a development background a specialization about developing web application.\r\n\r\nCourses include web-based architecture, development and application deployment on the server side (backend) : API, framework and data managment\r\nand on the client side (frontend) : active interface, frameworks, Javascript, mobile development and web integration.', 'IUT Charlemagne at Nancy', '09/2017 - current', 2),
(6, 'Software Developer', '2 year technical degree', 'This degree program focuses on web development (HTML, CSS, PHP, MYSQL) and on software development (C#, SQLSERVER).\r\n\r\nThe training is semi-autonomous, we had teaching parts and some projects. We had to work on our own on these projects with the help of the teachers if we needed it.', 'AFPA at Pompey', '2009 - 2010', 2),
(7, 'BTS Biological analysis', '2 year technical degree', 'This degree program focuses  on biology, microbiology, haematology and immunology.', 'Varoquaux high school at Tomblaine', '2005 - 2007', 2),
(8, 'high school diploma STL BGB', 'Biochemistry & microbiology', '', 'Stanislas high school at Villers Les Nancy', '2004', 2);

-- --------------------------------------------------------

--
-- Structure de la table `groupecompetence`
--

DROP TABLE IF EXISTS `groupecompetence`;
CREATE TABLE IF NOT EXISTS `groupecompetence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

DROP TABLE IF EXISTS `langue`;
CREATE TABLE IF NOT EXISTS `langue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`id`, `nom`) VALUES
(1, 'Francais'),
(2, 'Anglais');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
