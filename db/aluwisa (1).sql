-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 29 août 2025 à 05:35
-- Version du serveur : 9.1.0
-- Version de PHP : 8.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aluwisa`
--

-- --------------------------------------------------------

--
-- Structure de la table `fenetres`
--

DROP TABLE IF EXISTS `fenetres`;
CREATE TABLE IF NOT EXISTS `fenetres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `longueur` float NOT NULL,
  `largeur` float NOT NULL,
  `type_fenetre` varchar(50) NOT NULL,
  `profil_alu` varchar(50) NOT NULL,
  `type_vitre` varchar(50) NOT NULL,
  `surface` float NOT NULL,
  `prix` float NOT NULL,
  `nombre` float NOT NULL,
  `date_creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fenetres`
--

INSERT INTO `fenetres` (`id`, `longueur`, `largeur`, `type_fenetre`, `profil_alu`, `type_vitre`, `surface`, `prix`, `nombre`, `date_creation`) VALUES
(1, 1, 1, 'coulissante', 'K56', 'claire', 1, 460, 1, '2025-08-28 17:24:11'),
(2, 1.5, 2.6, 'coulissante', 'K56', 'claire', 3.9, 1, 1, '2025-08-28 17:25:24'),
(3, 2, 1.5, 'coulissante', 'K56', 'claire', 3, 1, 1, '2025-08-28 17:37:08'),
(4, 1.5, 12, 'coulissante', 'K56', 'claire', 18, 8, 1, '2025-08-28 17:37:16'),
(5, 1.5, 12, 'coulissante', 'K56', 'claire', 18, 8, 1, '2025-08-28 17:37:29'),
(6, 2, 1.5, 'coulissante', 'K56', 'claire', 3, 1, 1, '2025-08-28 17:37:32'),
(7, 1.5, 2, 'coulissante', 'K56', 'claire', 3, 0, 1, '2025-08-28 17:42:02'),
(8, 1, 1.5, 'coulissante', 'K56', 'claire', 1.5, 690, 1, '2025-08-28 17:42:53'),
(9, 2, 1.5, 'coulissante', 'K56', 'claire', 3, 1380000, 1, '2025-08-28 17:47:10'),
(10, 1.5, 2, 'coulissante', 'K56', 'claire', 3, 1380000, 1, '2025-08-28 17:47:54'),
(11, 2, 2.5, 'coulissante', 'K56', 'claire', 5, 2300000, 1, '2025-08-28 17:49:35'),
(12, 1, 1.5, 'coulissante', 'K56', 'claire', 1.5, 690000, 1, '2025-08-28 17:50:29'),
(13, 1.8, 1.9, 'coulissante', 'B65', 'claire', 3.42, 14364000, 10, '2025-08-29 05:29:32');

-- --------------------------------------------------------

--
-- Structure de la table `portes`
--

DROP TABLE IF EXISTS `portes`;
CREATE TABLE IF NOT EXISTS `portes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `longueur` float NOT NULL,
  `largeur` float NOT NULL,
  `type_porte` varchar(50) NOT NULL,
  `profil_alu` varchar(50) NOT NULL,
  `type_vitre` varchar(50) NOT NULL,
  `surface` float NOT NULL,
  `prix` float NOT NULL,
  `nombre` float NOT NULL,
  `date_creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `portes`
--

INSERT INTO `portes` (`id`, `longueur`, `largeur`, `type_porte`, `profil_alu`, `type_vitre`, `surface`, `prix`, `nombre`, `date_creation`) VALUES
(1, 1.5, 1.2, 'Toute vitré', 'T45', 'claire', 1.8, 972000, 1, '2025-08-28 18:03:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
