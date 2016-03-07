-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 07 Mars 2016 à 13:14
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bouteille`
--

-- --------------------------------------------------------

--
-- Structure de la table `hydratation`
--

CREATE TABLE IF NOT EXISTS `hydratation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_hydra` datetime NOT NULL,
  `pourcentage` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `hydratation`
--

INSERT INTO `hydratation` (`id`, `date_hydra`, `pourcentage`) VALUES
(1, '0000-00-00 00:00:00', 100),
(2, '2016-03-06 15:40:08', 0),
(3, '2016-03-06 15:45:02', 0),
(4, '2016-03-06 15:45:32', 0),
(5, '2016-03-06 15:49:15', 0),
(6, '2016-03-06 15:51:24', 0),
(7, '2016-03-06 15:51:25', 0),
(8, '2016-03-06 15:51:26', 0),
(9, '2016-03-06 15:51:55', 0),
(10, '2016-03-06 15:51:57', 0),
(11, '2016-03-07 10:23:23', 100),
(12, '2016-03-07 10:48:05', 0),
(13, '2016-03-07 11:02:22', 50),
(14, '2016-03-07 11:06:22', 50);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
