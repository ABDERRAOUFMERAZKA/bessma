-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Mar 10 Janvier 2017 à 15:58
-- Version du serveur: 5.5.27
-- Version de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `anglet`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Contenu` varchar(500) NOT NULL,
  `postulant` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `Contenu`, `postulant`) VALUES
(1, 'Bonjour, je veux participer a faire inscrire un enfant dans une ecole ? pourriez vous m''aider des demarches a suivre ?', 'raf'),
(2, 'Bonjour, vous pouvez appeler au numero au dessous de la page', 'Djaber'),
(3, 'bonjour, merci pour le boulot que vous fetes', 'Michael201'),
(4, 'sasa', 'raf'),
(5, 'salut jaber tu peux me repondre ?', 'raf'),
(6, 'oui, y a quelque chose ?', 'Djaber'),
(7, 'raf, jaber sales arabes ! rentrez chez vous ', 'Michael201'),
(8, 'raciste', 'raf');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(10) NOT NULL,
  `motdepasse` varchar(10) NOT NULL,
  `Pseudo` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `Login`, `motdepasse`, `Pseudo`) VALUES
(1, 'Raf', '1234a', 'raouf'),
(2, 'Djaber', 'DZ2020', 'TeffDjaber'),
(3, 'Michael201', '987FR', 'Michou');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
