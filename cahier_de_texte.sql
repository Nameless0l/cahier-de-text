-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 29 août 2022 à 13:21
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
-- Structure de la table `activite_integration`
--

CREATE TABLE `activite_integration` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `lieu` varchar(255) COLLATE utf8_bin NOT NULL,
  `nbre_eleve_participe` int(11) NOT NULL,
  `competence_vise` text COLLATE utf8_bin NOT NULL,
  `situation_probl` text COLLATE utf8_bin NOT NULL,
  `performance_eleve` text COLLATE utf8_bin NOT NULL,
  `nbre_groupe` int(11) NOT NULL,
  `repartition_materiel` text COLLATE utf8_bin NOT NULL,
  `classe` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_heure` datetime NOT NULL,
  `enseignant` varchar(255) COLLATE utf8_bin NOT NULL,
  `trimestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `cahier`
--

CREATE TABLE `cahier` (
  `id` int(11) NOT NULL,
  `nom_classe` varchar(255) COLLATE utf8_bin NOT NULL,
  `matricule_cens_en_charge` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `cahier`
--

INSERT INTO `cahier` (`id`, `nom_classe`, `matricule_cens_en_charge`) VALUES
(0, 'Mbassi ewolo', '21p65656'),
(1, 'sixieme', '21S2324'),
(2, 'cinquieme', '21S2323');

-- --------------------------------------------------------

--
-- Structure de la table `cahier_matiere`
--

CREATE TABLE `cahier_matiere` (
  `id_matiere` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `cahier_parent`
--

CREATE TABLE `cahier_parent` (
  `id_cahier` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `censeur`
--

CREATE TABLE `censeur` (
  `id_cens` int(11) NOT NULL,
  `Nom` varchar(70) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(70) COLLATE utf8_bin NOT NULL,
  `matricule_cens` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `mot_de_pass` text COLLATE utf8_bin NOT NULL,
  `ville` varchar(50) COLLATE utf8_bin NOT NULL,
  `quartier` varchar(50) COLLATE utf8_bin NOT NULL,
  `classes` varchar(250) COLLATE utf8_bin NOT NULL,
  `derniere_connexion` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `matieres` varchar(30) COLLATE utf8_bin NOT NULL,
  `id_enseignant` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `censeur`
--

INSERT INTO `censeur` (`id_cens`, `Nom`, `Prenom`, `matricule_cens`, `email`, `mot_de_pass`, `ville`, `quartier`, `classes`, `derniere_connexion`, `matieres`, `id_enseignant`) VALUES
(1, '[Mbassi]', 'Loic', '21koi', 'loic@gmail.com', 'Nameless', '[Yaounde]', '[odza]', '6eme', '0000-00-00 00:00:00.000000', '', 0),
(2, 'Maffo', 'Brenda', '21k270', 'natacha@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$OGlScVNqRmw0SUF3NVljMw$aYRp6jeBABloLqKFgRjCQivFW+fHs+rH7jdLmcXGFwo', 'Yaounde', 'Cite_rouge', 'TleC', '2022-08-28 00:37:50.829807', '', 0),
(3, 'Mbassi Ewolo', 'Loic', 'Yaounde', 'aronloic@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$OGlScVNqRmw0SUF3NVljMw$aYRp6jeBABloLqKFgRjCQivFW+fHs+rH7jdLmcXGFwo', 'Odza', 'Mathematques', '3eme', '2022-08-26 04:38:12.556456', 'Maths', 0);

-- --------------------------------------------------------

--
-- Structure de la table `censeur_cahier`
--

CREATE TABLE `censeur_cahier` (
  `id_censeur` int(11) NOT NULL,
  `id_cahier` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `censeur_enseigneur`
--

CREATE TABLE `censeur_enseigneur` (
  `id_enseignant` int(11) NOT NULL,
  `id_censeur` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `nom_classe` varchar(255) COLLATE utf8_bin NOT NULL,
  `nbre_eleve` int(11) NOT NULL,
  `matri_censeur_charge` varchar(255) COLLATE utf8_bin NOT NULL,
  `chef_classe` varchar(255) COLLATE utf8_bin NOT NULL,
  `prof_principal` varchar(255) COLLATE utf8_bin NOT NULL,
  `emploi_temps` text COLLATE utf8_bin NOT NULL,
  `fiche_progression` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `nom_classe`, `nbre_eleve`, `matri_censeur_charge`, `chef_classe`, `prof_principal`, `emploi_temps`, `fiche_progression`) VALUES
(0, 'Mbassi ewolo', 50, 'Loic Aron', 'Nameless', 'Ras', 'CAHIER DE TEXTE ELECTRONIQUE.docx', 'CAHIER DE TEXTE ELECTRONIQUE.docx'),
(1, 'sixieme', 0, '', 'mboudageorges', 'kamenibertrand', '1290.jpg', ''),
(2, '', 2, '', '', '', '', ''),
(3, 'cinquieme', 0, '', 'mbouda', 'kameni', '4884517.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `classes` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `quartier` varchar(50) NOT NULL,
  `id` int(200) NOT NULL,
  `matr_cens_charge` varchar(255) NOT NULL,
  `id_cahier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(200) NOT NULL,
  `classes` varchar(200) NOT NULL,
  `mot_de_pass` varchar(250) NOT NULL,
  `email` varchar(70) NOT NULL,
  `derniere_connexion` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`matricule`, `Nom`, `Prenom`, `ville`, `quartier`, `Statut`, `matieres`, `id`, `classes`, `mot_de_pass`, `email`, `derniere_connexion`) VALUES
('21p340', 'Ewolo Essah', 'Joseph clet', 'Yaounde', 'odza', 'Enseignant', 'Mathematques', 6, '6eme,5eme', 'Nameless', 'etudiant@polytechnique.cm', '2022-08-26 04:38:12.556456'),
('21unadsb', 'Owona', 'Mari', 'Douala', 'Olembe', 'Enseignant titulaire', 'phrançais', 7, 'TlaA4Esp', '[\"Nameless\"]', 'bdsnn@lasas.com', '2022-08-26 04:38:12.556456'),
('kn21', 'Traoré', 'Juliens', 'jijiij', 'ijiij', '', 'Mathematques', 9, '4eme', '\"Nameless\"', '', '2022-08-26 04:38:12.556456'),
('21o', 'Ebanda Ntomo', 'sdcsdc', 'scsdcds', 'sdcse', 'enseignant titulaire 3eme', 'Mathematques', 13, '3eme', '$argon2id$v=19$m=65536,t=4,p=1$OGlScVNqRmw0SUF3NVljMw$aYRp6jeBABloLqKFgRjCQivFW+fHs+rH7jdLmcXGFwo', 'etoo@polytechnique.cm', '2022-08-26 04:38:12.556456'),
('vffdvfdvf', 'Ossamabenladel', 'vfcvfdv', 'sffsf', 'vsvsd', 'animateur pedagogique français', 'Mathematques', 14, '2nd C1', '$argon2id$v=19$m=65536,t=4,p=1$WFdrZDVJeHlPdXJEd0NWUA$3t1PixCssCixxea4ivqCZfvLk0q1vbg8+IFx8aAS8Mk', 'google@polytechnique.cm', '2022-08-26 04:38:12.556456'),
('21u', 'Mbassi Ewolo', 'Loic', 'odza', 'yaounde', 'Enseignant titulaire', 'Mathematques', 15, '5eme C', '$argon2id$v=19$m=65536,t=4,p=1$TFFuRldlZy9jWXpqYUNMNA$ospZY2lOcU6erOiQkNG48D5s6d7aJbGbKTpOt2aeFXI', 'jules@polytechnique.cm', '2022-08-26 04:38:12.556456'),
('21u', 'Mbassi Ewolo', 'Loic', 'odza', 'yaounde', 'animateurPedagogique Math', 'Mathematques', 16, 'PC 2', '$argon2id$v=19$m=65536,t=4,p=1$am9VTUdJa2Z0SlVGYUxQNw$4FeYLU5lFMVZUNyPGRQAb94TBbEvBQgFVPmjmxfdyFQ', 'wwmbassiloic@gmail.com', '2022-08-26 04:38:12.556456'),
('kjsfnmd', 'Sangoku', 'vsdfvfd', 'sdsf', 'vfds', 'Enseignant', 'Mathematques', 17, '2nd', '$argon2id$v=19$m=65536,t=4,p=1$WnMzTEtWTC9PVDFnMWpqWA$tyWG3BvzsuAKyeMZ4vKrnC58QKBeiVF5z2j5wDwvaeE', 'ddd', '2022-08-26 04:38:12.556456'),
('21u22dvf', 'Mbassi Ewolo', 'Loic', 'odza', 'yaounde', 'titulaire', 'Mathematques', 18, 'TleC', '$argon2id$v=19$m=65536,t=4,p=1$NWpFc0VnR2ducUhMb0toYw$MtInSNTTN6HOdKSbJWqFf+q/VOtFG/G3XHkD9LUysGI', 'wwwnameless@loic.com', '2022-08-26 04:38:12.556456'),
('21p340', 'Mbass Ewolo', 'Loic Aron', 'YAOUNDE', 'Odza', 'Enseignant', 'Mathematques', 19, 'dvdf', '$argon2id$v=19$m=65536,t=4,p=1$ZnFETlo3Z0oxMVZaMTY3bg$Atgb78yJNz74eLBRNC0JvqdU8WiYnd4e71fhEfG0odA', 'wwwmbassi@gmail.com', '2022-08-26 04:38:12.556456'),
('21gmds', 'jean', 'Oyono', 'Obala', 'ras', '', 'Physiques', 20, '', '$argon2id$v=19$m=65536,t=4,p=1$ZFZPdFRoSlU5ZkU4V0liMA$DQlsx4k277QdnLu03Slby0oYY2XxSx8TeDkxvQF5vAk', 'Jean@gmail.com', '2022-08-26 04:38:12.556456'),
('21P341', 'Mbeya', 'Joël ', 'Yaoundé ', 'Melen', '', 'Mathematques', 21, '', '$argon2id$v=19$m=65536,t=4,p=1$SWlKcE15Uk1KYmVHNmw3RQ$Af6LseA6tYKqMPEtGXcTia5XuWzCC9toLzOf9G1jnvQ', 'joel@gmail.com', '2022-08-26 20:17:42.405125'),
('21k340', 'Essah Mama', ' Francky Noel', 'Douala', 'PK15', '', 'Physiques', 22, '', '$argon2id$v=19$m=65536,t=4,p=1$NTRINHhBLkh3VDJjZlhGWQ$S3b4Y+7i1T3fLISnTfTddc4xxzU1PwuvHliHVuswg2M', 'francky@gmail.com', '2022-08-27 09:25:32.804266'),
('21o', 'Ebanda Ntomo', 'sdcsdc', 'scsdcds', 'sdcse', 'enseignant titulaire 3eme', 'Mathematques', 23, '3eme', '$argon2id$v=19$m=65536,t=4,p=1$OGlScVNqRmw0SUF3NVljMw$aYRp6jeBABloLqKFgRjCQivFW+fHs+rH7jdLmcXGFwo', 'etoo@polytechnique.cm', '2022-08-26 04:38:12.556456');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant_matiere`
--

CREATE TABLE `enseignant_matiere` (
  `id_enseignant` int(11) NOT NULL,
  `id_matiere` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `epreuve` text COLLATE utf8_bin NOT NULL,
  `correction` text COLLATE utf8_bin NOT NULL,
  `incidence` text COLLATE utf8_bin NOT NULL,
  `copie_remise` varchar(12) COLLATE utf8_bin NOT NULL,
  `nbre_eleve_participe` int(11) NOT NULL,
  `nbre_note_inf_10` int(11) NOT NULL,
  `nbre_note_entre_10_12` int(11) NOT NULL,
  `nbre_note_sup_12` int(11) NOT NULL,
  `moy_classe` int(11) NOT NULL,
  `note_plus_forte` int(11) NOT NULL,
  `matiere` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_heure` datetime NOT NULL,
  `classe` varchar(255) COLLATE utf8_bin NOT NULL,
  `trimestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `inspecteur`
--

CREATE TABLE `inspecteur` (
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mot_de_pass` varchar(50) NOT NULL,
  `id_inspecteur` int(10) NOT NULL,
  `matricule` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `id` int(11) NOT NULL,
  `nom_classes` varchar(50) NOT NULL,
  `cycle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `parent`
--

CREATE TABLE `parent` (
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mot_de_pass` varchar(50) NOT NULL,
  `quartier` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite_integration`
--
ALTER TABLE `activite_integration`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cahier`
--
ALTER TABLE `cahier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cahier_matiere`
--
ALTER TABLE `cahier_matiere`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_classe` (`id_classe`),
  ADD KEY `cahier_matiere_ibfk_2` (`id_matiere`);

--
-- Index pour la table `cahier_parent`
--
ALTER TABLE `cahier_parent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cahiert` (`id_cahier`),
  ADD KEY `id_parent` (`id_parent`);

--
-- Index pour la table `censeur`
--
ALTER TABLE `censeur`
  ADD PRIMARY KEY (`id_cens`);

--
-- Index pour la table `censeur_cahier`
--
ALTER TABLE `censeur_cahier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cahier` (`id_cahier`),
  ADD KEY `id_censeur` (`id_censeur`);

--
-- Index pour la table `censeur_enseigneur`
--
ALTER TABLE `censeur_enseigneur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_censeur` (`id_censeur`),
  ADD KEY `id_enseignant` (`id_enseignant`);

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cahier` (`id_cahier`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `enseignant_matiere`
--
ALTER TABLE `enseignant_matiere`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_enseignant` (`id_enseignant`),
  ADD KEY `id_matiere` (`id_matiere`);

--
-- Index pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inspecteur`
--
ALTER TABLE `inspecteur`
  ADD PRIMARY KEY (`id_inspecteur`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activite_integration`
--
ALTER TABLE `activite_integration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cahier_matiere`
--
ALTER TABLE `cahier_matiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cahier_parent`
--
ALTER TABLE `cahier_parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `censeur`
--
ALTER TABLE `censeur`
  MODIFY `id_cens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `censeur_cahier`
--
ALTER TABLE `censeur_cahier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `censeur_enseigneur`
--
ALTER TABLE `censeur_enseigneur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `enseignant_matiere`
--
ALTER TABLE `enseignant_matiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inspecteur`
--
ALTER TABLE `inspecteur`
  MODIFY `id_inspecteur` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cahier_matiere`
--
ALTER TABLE `cahier_matiere`
  ADD CONSTRAINT `cahier_matiere_ibfk_1` FOREIGN KEY (`id_classe`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `cahier_matiere_ibfk_2` FOREIGN KEY (`id_matiere`) REFERENCES `matieres` (`id`);

--
-- Contraintes pour la table `cahier_parent`
--
ALTER TABLE `cahier_parent`
  ADD CONSTRAINT `cahier_parent_ibfk_1` FOREIGN KEY (`id_cahier`) REFERENCES `cahier` (`id`),
  ADD CONSTRAINT `cahier_parent_ibfk_2` FOREIGN KEY (`id_parent`) REFERENCES `parent` (`id`);

--
-- Contraintes pour la table `censeur_cahier`
--
ALTER TABLE `censeur_cahier`
  ADD CONSTRAINT `censeur_cahier_ibfk_1` FOREIGN KEY (`id_cahier`) REFERENCES `cahier` (`id`),
  ADD CONSTRAINT `censeur_cahier_ibfk_2` FOREIGN KEY (`id_censeur`) REFERENCES `censeur` (`id_cens`);

--
-- Contraintes pour la table `censeur_enseigneur`
--
ALTER TABLE `censeur_enseigneur`
  ADD CONSTRAINT `censeur_enseigneur_ibfk_1` FOREIGN KEY (`id_censeur`) REFERENCES `censeur` (`id_cens`),
  ADD CONSTRAINT `censeur_enseigneur_ibfk_2` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id`);

--
-- Contraintes pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `eleve_ibfk_1` FOREIGN KEY (`id_cahier`) REFERENCES `cahier` (`id`);

--
-- Contraintes pour la table `enseignant_matiere`
--
ALTER TABLE `enseignant_matiere`
  ADD CONSTRAINT `enseignant_matiere_ibfk_1` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id`),
  ADD CONSTRAINT `enseignant_matiere_ibfk_2` FOREIGN KEY (`id_matiere`) REFERENCES `matieres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
