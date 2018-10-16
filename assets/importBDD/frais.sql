-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 16 oct. 2018 à 14:40
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `frais`
--

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

DROP TABLE IF EXISTS `agents`;
CREATE TABLE IF NOT EXISTS `agents` (
  `id_agent` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id_agent`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agents`
--

INSERT INTO `agents` (`id_agent`, `nom`, `prenom`, `service`, `grade`, `login`, `mdp`) VALUES
(8, 'Dumarey', 'Thibaut', 'Informatique', 'Agent', 'login2', '12345'),
(7, 'Charette', 'Denis', 'Informatique', 'Agent', 'login1', '12345'),
(6, 'Baguette', 'Bruno', 'Informatique', 'Agent', 'login', '12345'),
(9, 'Deom', 'Mathieu', 'Informatique', 'Agent', 'login3', '12345'),
(10, 'Scaut', 'Nicolas', 'Informatique', 'Agent', 'login4', '12345');

-- --------------------------------------------------------

--
-- Structure de la table `trajets`
--

DROP TABLE IF EXISTS `trajets`;
CREATE TABLE IF NOT EXISTS `trajets` (
  `id_trajet` int(11) NOT NULL AUTO_INCREMENT,
  `id_agent` int(11) NOT NULL,
  `date_trajet` varchar(255) NOT NULL,
  `heure_administrative` varchar(255) NOT NULL,
  `heure_domicile` varchar(255) NOT NULL,
  `nom_commune` varchar(255) NOT NULL,
  `heure_arrivee` varchar(255) NOT NULL,
  `heure_depart` varchar(255) NOT NULL,
  `fin_mission` varchar(255) NOT NULL,
  `km_aglomeration` varchar(255) NOT NULL,
  `km_hors` varchar(255) NOT NULL,
  `transport` varchar(255) NOT NULL,
  `motif` text NOT NULL,
  `status_trajet` varchar(255) NOT NULL,
  PRIMARY KEY (`id_trajet`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `trajets`
--

INSERT INTO `trajets` (`id_trajet`, `id_agent`, `date_trajet`, `heure_administrative`, `heure_domicile`, `nom_commune`, `heure_arrivee`, `heure_depart`, `fin_mission`, `km_aglomeration`, `km_hors`, `transport`, `motif`, `status_trajet`) VALUES
(12, 7, '2018-10-02', '', '11:00', 'Spa', '12:10', '14:20', '16:00', '45', '12', '', 'motif 3', 'En cours'),
(11, 7, '2018-09-07', '10:00', '', 'Malines', '11:11', '12:00', '15:00', '12', '14', '', 'motif 2', 'En cours'),
(10, 7, '2018-07-20', '09:00', '', 'Mons', '10:00', '17:00', '18:00', '5', '2', '', 'motif 1', 'En cours'),
(9, 6, '2018-10-15', '08:00', '', 'bruxelles', '09:00', '16:00', '16:30', '30', '4', '', 'motif 3', 'En cours'),
(8, 6, '2018-09-21', '', '08:00', 'Liege', '09:00', '14:00', '15:00', '3', '9', '', 'motif 2', 'En cours'),
(7, 6, '2018-08-08', '08:00', '', 'Namur', '08:30', '10:00', '10:30', '10', '11', '', 'motif 1', 'En cours'),
(13, 7, '2018-10-10', '10:20', '', 'Anvers', '11:00', '12:00', '13:20', '2', '3', '', 'motif 4', 'En cours'),
(14, 7, '2018-10-16', '11:00', '', 'Charleroi', '11:30', '13:00', '15:20', '9', '11', '', 'motif 5', 'En cours'),
(15, 8, '2018-09-03', '08:30', '', 'Mons', '10:00', '11:30', '14:00', '13', '14', '', 'motif 1', 'En cours'),
(16, 8, '2018-10-12', '09:00', '', 'Malines', '10:20', '13:30', '15:00', '30', '10', '', 'motif 2', 'En cours'),
(17, 8, '2018-10-08', '', '10:00', 'Spa', '13:30', '14:00', '15:00', '21', '23', '', 'motif 3', 'En cours'),
(18, 9, '2018-05-09', '', '08:30', 'Charleroi', '10:00', '11:00', '15:20', '21', '14', '', 'motif 1', 'En cours'),
(19, 9, '2018-08-02', '08:30', '', 'Louvain', '09:00', '10:00', '11:30', '13', '2', '', 'motif 2', 'En cours'),
(20, 9, '2018-10-16', '09:20', '', 'Namur', '10:00', '14:00', '15:30', '10', '0', '', 'motif 3', 'En cours'),
(21, 10, '2018-08-22', '', '09:00', 'Liege', '10:00', '11:30', '14:00', '2', '12', '', 'motif 1', 'En cours'),
(22, 10, '2018-09-05', '09:20', '', 'Louvain', '10:00', '16:00', '17:20', '25', '17', '', 'motif 2', 'En cours'),
(23, 10, '2018-10-16', '08:30', '', 'Namur', '09:00', '10:00', '16:30', '21', '2', '', 'motif 3', 'En cours'),
(24, 6, '2017-09-12', '14:01', '', 'Namur', '07:05', '07:05', '07:57', '7', '7', '', '7557575', 'En cours'),
(25, 7, '2017-09-13', '04:52', '', 'rtghrtgh', '04:05', '05:05', '05:05', '75', '7', '', '7777', 'En cours'),
(26, 7, '2018-10-01', '', '14:00', 'Marchienne', '14:30', '15:30', '17:00', '20', '11', '', 'un autre motif', 'En cours'),
(27, 6, '2018-10-02', '12:12', '12:12', 'tfyjfkjfk', '12:12', '12:12', '12:12', '1', '12', '', '', 'En cours');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
