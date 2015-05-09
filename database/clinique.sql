-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 09 Mai 2015 à 11:56
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `clinique`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte_rendu`
--

CREATE TABLE IF NOT EXISTS `compte_rendu` (
  `idCR` int(11) NOT NULL,
  `idConsultation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE IF NOT EXISTS `consultation` (
  `idConsultation` int(11) NOT NULL,
  `idMedecin` int(11) NOT NULL,
  `idPatient` int(11) NOT NULL,
  `idSpe` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE IF NOT EXISTS `medecin` (
  `idMedecin` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `accepte` tinyint(1) NOT NULL DEFAULT '0',
  `idSpe` int(11) NOT NULL,
  `idQuestionnaire` int(11) NOT NULL,
  PRIMARY KEY (`idMedecin`),
  KEY `idMedecin` (`idMedecin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Contenu de la table `medecin`
--

INSERT INTO `medecin` (`idMedecin`, `nom`, `prenom`, `mail`, `pwd`, `accepte`, `idSpe`, `idQuestionnaire`) VALUES
(48, '', '', '', '', 0, 0, 0),
(49, 'Duroux', 'Jeanne', 'jeanne.duroux@gmail.fr', '000', 1, 1, 0),
(50, 'Duroux', 'Jeanne', 'jeanne.duroux@gmail.fr', '000', 1, 1, 0),
(51, 'cha', 'cha', 'cha@r.fr', 'e0c9035898dd52fc65c41454cec9c4', 0, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `idPatient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `accepte` tinyint(1) NOT NULL DEFAULT '0',
  `idMedecin` int(11) NOT NULL,
  `idSpe` int(11) NOT NULL,
  `idQuestionnaire` int(11) NOT NULL,
  PRIMARY KEY (`idPatient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `questionnaire`
--

CREATE TABLE IF NOT EXISTS `questionnaire` (
  `idQuestionnaire` int(11) NOT NULL,
  `idPatient` int(11) NOT NULL,
  `idDescription` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE IF NOT EXISTS `specialite` (
  `idSpe` int(11) NOT NULL AUTO_INCREMENT,
  `nomSpe` varchar(30) NOT NULL,
  `idMedecin` int(11) NOT NULL,
  PRIMARY KEY (`idSpe`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`idSpe`, `nomSpe`, `idMedecin`) VALUES
(1, 'gynecologie', 0),
(2, 'geriatrie', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
