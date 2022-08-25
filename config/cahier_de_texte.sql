-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 24 août 2022 à 15:24
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
-- Base de données : `cahier_de_texte`
--

-- --------------------------------------------------------

--
-- Structure de la table `censeur`
--

DROP TABLE IF EXISTS `censeur`;
CREATE TABLE IF NOT EXISTS `censeur` (
  `id_cen` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_cen`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `censeur`
--

INSERT INTO `censeur` (`id_cen`, `nom`, `email`, `mot_de_passe`) VALUES
(5, 'xsqxs', 'censeur@gmail.com', 'dfguyerfui'),
(6, 'eba', 'prunellengolong13@gmail.com', 'prunelle123');

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id_classe` int(11) NOT NULL AUTO_INCREMENT,
  `emploi_temps` varchar(255) COLLATE utf8_bin NOT NULL,
  `chef` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_classe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id_cours` int(11) NOT NULL AUTO_INCREMENT,
  `matricule_ens` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_matiere` int(11) NOT NULL,
  PRIMARY KEY (`id_cours`),
  KEY `id_matiere` (`id_matiere`),
  KEY `matricule_ens` (`matricule_ens`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `id_ele` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_class` int(11) NOT NULL,
  PRIMARY KEY (`id_ele`),
  KEY `id_class` (`id_class`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `matricule` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `profession` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`matricule`, `email`, `mot_de_passe`, `nom`, `profession`) VALUES
('20u1352', 'thymote@gmail.com', '251186535', 'EBANGA THYMOTHE', 'Professeur de physique'),
('546541hk', 'yjert@gmail.com', '23245y3', 'KEMOUE CHANTAL', 'Professur de philosophie');

-- --------------------------------------------------------

--
-- Structure de la table `ens_class`
--

DROP TABLE IF EXISTS `ens_class`;
CREATE TABLE IF NOT EXISTS `ens_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_class` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `matricule` (`matricule`),
  KEY `id_class` (`id_class`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `id_mat` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_mat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `parent`
--

DROP TABLE IF EXISTS `parent`;
CREATE TABLE IF NOT EXISTS `parent` (
  `id_parent` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  PRIMARY KEY (`id_parent`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parent`
--

INSERT INTO `parent` (`id_parent`, `nom`, `email`, `mot_de_passe`) VALUES
(1, 'claude kong', 'gtii@gmail.com', 'ghjjj');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_mat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cours_ibfk_2` FOREIGN KEY (`matricule_ens`) REFERENCES `enseignant` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `eleve_ibfk_1` FOREIGN KEY (`id_class`) REFERENCES `classes` (`id_classe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ens_class`
--
ALTER TABLE `ens_class`
  ADD CONSTRAINT `ens_class_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `enseignant` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ens_class_ibfk_2` FOREIGN KEY (`id_class`) REFERENCES `classes` (`id_classe`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
