-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 22 juin 2022 à 06:21
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `azome`
--
CREATE DATABASE IF NOT EXISTS `azome` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `azome`;

-- --------------------------------------------------------

--
-- Structure de la table `etudiantss`
--

DROP TABLE IF EXISTS `etudiantss`;
CREATE TABLE IF NOT EXISTS `etudiantss` (
  `matricule` float NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `idfilliere` int(11) NOT NULL,
  PRIMARY KEY (`matricule`),
  KEY `idfilliere` (`idfilliere`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiantss`
--

INSERT INTO `etudiantss` (`matricule`, `nom`, `prenom`, `idfilliere`) VALUES
(1, 'DANSOU', 'Gerrard', 7),
(2, 'HOUSOUN', 'Alberic', 7),
(3, 'TOSSOU', 'Julia', 8),
(4, 'GAGA', 'Franck', 1),
(5, 'ALLADYE', 'Eric', 2),
(6, 'ZAZA', 'Francis', 3),
(7, 'DOSSOU', 'Pierre', 2),
(8, 'SOSSOU', 'Pierre', 8),
(9, 'TOVI', 'Benoit', 1),
(10, 'VIGAN', 'Christian', 3);

-- --------------------------------------------------------

--
-- Structure de la table `fillieres`
--

DROP TABLE IF EXISTS `fillieres`;
CREATE TABLE IF NOT EXISTS `fillieres` (
  `idfilliere` int(11) NOT NULL AUTO_INCREMENT,
  `fillliere` varchar(25) NOT NULL,
  PRIMARY KEY (`idfilliere`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fillieres`
--

INSERT INTO `fillieres` (`idfilliere`, `fillliere`) VALUES
(1, 'IG1'),
(2, 'IG2'),
(3, 'IG3'),
(7, 'GBA1'),
(8, 'GBA2'),
(10, 'GBA3');

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

DROP TABLE IF EXISTS `matieres`;
CREATE TABLE IF NOT EXISTS `matieres` (
  `codMat` int(11) NOT NULL AUTO_INCREMENT,
  `nomMat` text NOT NULL,
  `credit` int(11) NOT NULL,
  `idfilliere` int(11) NOT NULL,
  PRIMARY KEY (`codMat`),
  KEY `idfilliere` (`idfilliere`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`codMat`, `nomMat`, `credit`, `idfilliere`) VALUES
(3, 'ALGEBRE', 2, 7),
(4, 'Math fine', 6, 7),
(5, 'Technique Financière', 6, 8),
(6, 'Comptabilite', 5, 8),
(9, 'Gestion des prêts', 4, 10),
(10, 'Analyse', 3, 10),
(25, 'ALGEBRE', 4, 1),
(26, 'ALGO', 4, 1),
(27, 'CAGE', 4, 2),
(28, 'POO', 6, 2),
(29, 'JAVA', 5, 3),
(30, 'Sécurité web', 5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

DROP TABLE IF EXISTS `resultat`;
CREATE TABLE IF NOT EXISTS `resultat` (
  `matricule` float NOT NULL,
  `codMat` int(11) NOT NULL,
  `idfilliere` int(11) NOT NULL,
  `notes` float NOT NULL,
  KEY `resultat_ibfk_1` (`matricule`),
  KEY `resultat_ibfk_2` (`codMat`),
  KEY `resultat_ibfk_3` (`idfilliere`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `resultat`
--

INSERT INTO `resultat` (`matricule`, `codMat`, `idfilliere`, `notes`) VALUES
(5, 28, 2, 13),
(1, 9, 7, 17),
(2, 9, 7, 13),
(9, 26, 1, 13),
(4, 26, 1, 14),
(7, 28, 2, 16),
(10, 29, 3, 9),
(6, 29, 3, 15),
(8, 5, 8, 17),
(3, 5, 8, 7),
(5, 29, 2, 12),
(4, 28, 1, 3),
(4, 28, 1, 3),
(4, 28, 1, 5),
(6, 30, 3, 4);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etudiantss`
--
ALTER TABLE `etudiantss`
  ADD CONSTRAINT `etudiantss_ibfk_1` FOREIGN KEY (`idfilliere`) REFERENCES `fillieres` (`idfilliere`);

--
-- Contraintes pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD CONSTRAINT `matieres_ibfk_1` FOREIGN KEY (`idfilliere`) REFERENCES `fillieres` (`idfilliere`);

--
-- Contraintes pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD CONSTRAINT `resultat_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `etudiantss` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resultat_ibfk_2` FOREIGN KEY (`codMat`) REFERENCES `matieres` (`codMat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resultat_ibfk_3` FOREIGN KEY (`idfilliere`) REFERENCES `fillieres` (`idfilliere`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
