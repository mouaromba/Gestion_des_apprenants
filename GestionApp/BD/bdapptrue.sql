-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 30 mars 2022 à 13:47
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
-- Base de données : `bdapptrue`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

DROP TABLE IF EXISTS `apprenant`;
CREATE TABLE IF NOT EXISTS `apprenant` (
  `codeApp` int(11) NOT NULL AUTO_INCREMENT,
  `codeTuteur` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `adresse` varchar(254) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `genre` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`codeApp`),
  KEY `FK_association1` (`codeTuteur`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`codeApp`, `codeTuteur`, `nom`, `prenom`, `adresse`, `phone`, `genre`) VALUES
(1, 1, 'DEVO', 'Robinson', 'Gounghin', 77441122, ''),
(2, 3, 'DJIMRAMADJI', 'Kennedy', 'Dassasgho', 54332626, ''),
(3, 5, 'BARBE', 'Prisca', 'SIAO', 76614040, ''),
(4, 2, 'SANGUITA', 'Fernando', 'Saaba', 70030102, ''),
(5, 6, 'KODJIM', 'Dieu-beni', 'Secteur 24', 72122211, '');

-- --------------------------------------------------------

--
-- Structure de la table `tuteur`
--

DROP TABLE IF EXISTS `tuteur`;
CREATE TABLE IF NOT EXISTS `tuteur` (
  `codeTuteur` int(11) NOT NULL AUTO_INCREMENT,
  `nomTuteur` varchar(254) DEFAULT NULL,
  `prenomTuteur` varchar(254) DEFAULT NULL,
  `adresseTuteur` varchar(254) DEFAULT NULL,
  `phoneTuteur` int(11) DEFAULT NULL,
  `genre` varchar(254) DEFAULT NULL,
  `profession` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`codeTuteur`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tuteur`
--

INSERT INTO `tuteur` (`codeTuteur`, `nomTuteur`, `prenomTuteur`, `adresseTuteur`, `phoneTuteur`, `genre`, `profession`) VALUES
(1, 'MBIAPOU', 'Cheryta', 'Ouaga 2000', 57070757, '', 'Data Analyst'),
(2, 'ISSA', 'Frank', '1200 Logements', 75588585, '', 'Economiste'),
(3, 'MAROUAMBA', 'Justin', 'Saaba', 63020101, '', 'Ingenieur RÃ©seaux'),
(4, 'MBAMBA', 'Leon', 'Wemtenga', 65511212, '', 'Commercant'),
(5, 'SOLOS', 'Fabrice', 'Zone 1', 78800304, '', 'Professeur'),
(6, 'NGAKOUTOU', 'Bethel', 'Saaba', 63323202, '', 'Trader');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
