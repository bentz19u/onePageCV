-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 20 fév. 2018 à 10:54
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

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id`, `nom`, `link`, `id_langue`, `id_groupe`) VALUES
(36, 'html', NULL, 2, 1),
(37, 'css', NULL, 2, 1),
(38, 'css framework', NULL, 2, 1),
(39, 'CSS Pre-Processors(sass)', NULL, 2, 1),
(40, 'javascript', NULL, 2, 2),
(41, 'DOM', NULL, 2, 2),
(42, 'ajax', NULL, 2, 2),
(43, 'web service access', NULL, 2, 2),
(44, 'jquery', NULL, 2, 2),
(45, 'MVC (Vue.js)', NULL, 2, 2),
(46, 'aspx(basic knowledge)', NULL, 2, 2),
(47, 'Architecture MVC', NULL, 2, 3),
(48, 'URL Rewriting', NULL, 2, 3),
(49, 'micro-framework(slim)', NULL, 2, 3),
(50, 'templates', NULL, 2, 3),
(51, 'ORM', NULL, 2, 3),
(52, 'sessions', NULL, 2, 3),
(53, 'authentification', NULL, 2, 3),
(54, 'security', NULL, 2, 3),
(55, 'PHP', NULL, 2, 3),
(56, '.net(c#)', NULL, 2, 3),
(57, 'APIs', NULL, 2, 4),
(58, 'XML,JSON', NULL, 2, 4),
(59, 'REST', NULL, 2, 4),
(60, 'RDBMS', NULL, 2, 5),
(61, 'Sql Server', NULL, 2, 5),
(62, 'MySQL', NULL, 2, 5),
(63, 'SQLBase', NULL, 2, 5),
(64, 'overview of NoSQL(mongo)', NULL, 2, 5),
(65, 'Windows', NULL, 2, 6),
(66, 'Ubuntu', NULL, 2, 6),
(67, 'French(langue natal)', NULL, 2, 7),
(68, 'English(TOEIC : 910)', '', 2, 7),
(69, 'Korean(Intermediate : level 3 in Hongik University)', '', 2, 7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
