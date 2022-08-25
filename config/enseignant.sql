-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 août 2022 à 13:40
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

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
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `matricule` varchar(30) NOT NULL,
  `Nom` varchar(70) NOT NULL,
  `Prenom` varchar(70) NOT NULL,
  `ville` varchar(70) NOT NULL,
  `quartier` varchar(70) NOT NULL,
  `Statut` varchar(30) NOT NULL,
  `matieres` varchar(50) NOT NULL,
  `id_enseignant` int(200) NOT NULL,
  `classes` varchar(200) NOT NULL,
  `mot_de_pass` varchar(250) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`matricule`, `Nom`, `Prenom`, `ville`, `quartier`, `Statut`, `matieres`, `id_enseignant`, `classes`, `mot_de_pass`, `email`) VALUES
('21p340', 'Mbassi Ewolo', 'Loic Aron', 'Yaounde', 'odza', '', 'Mathematques', 6, '', '', ''),
('sdfds', 'jjhjhjhjhjhjjhh', 'jhjhh', 'nnbb', 'jhjhj', '', 'Mathematques', 7, '', '[\"Nameless\"]', ''),
('kn21', 'kjkjk', 'jijjj', 'jijiij', 'ijiij', '', 'Mathematques', 9, '', '\"Nameless\"', ''),
('21o', 'scdc', 'sdcsdc', 'scsdcds', 'sdcse', '', 'Mathematques', 13, '', '$argon2id$v=19$m=65536,t=4,p=1$OGlScVNqRmw0SUF3NVljMw$aYRp6jeBABloLqKFgRjCQivFW+fHs+rH7jdLmcXGFwo', 'nameless'),
('vffdvfdvf', 'fvfvfd', 'vfcvfdv', 'sffsf', 'vsvsd', '', 'Mathematques', 14, '', '$argon2id$v=19$m=65536,t=4,p=1$WFdrZDVJeHlPdXJEd0NWUA$3t1PixCssCixxea4ivqCZfvLk0q1vbg8+IFx8aAS8Mk', 'vffdvfdvf'),
('21u', 'Mbassi Ewolo', 'Loic', 'odza', 'yaounde', '', 'Mathematques', 15, '', '$argon2id$v=19$m=65536,t=4,p=1$TFFuRldlZy9jWXpqYUNMNA$ospZY2lOcU6erOiQkNG48D5s6d7aJbGbKTpOt2aeFXI', '21u'),
('21u', 'Mbassi Ewolo', 'Loic', 'odza', 'yaounde', '', 'Mathematques', 16, '', '$argon2id$v=19$m=65536,t=4,p=1$am9VTUdJa2Z0SlVGYUxQNw$4FeYLU5lFMVZUNyPGRQAb94TBbEvBQgFVPmjmxfdyFQ', 'www');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id_enseignant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id_enseignant` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
