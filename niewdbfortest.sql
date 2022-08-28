-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 02:16 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cahier_de_texte`
--

-- --------------------------------------------------------

--
-- Table structure for table `activite_integration`
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
-- Table structure for table `cahierdetexte`
--

CREATE TABLE `cahierdetexte` (
  `id` int(11) NOT NULL,
  `nom_classe` varchar(255) COLLATE utf8_bin NOT NULL,
  `matricule_cens_en_charge` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cahierdetexte`
--

INSERT INTO `cahierdetexte` (`id`, `nom_classe`, `matricule_cens_en_charge`) VALUES
(0, 'Mbassi ewolo', '21p65656'),
(1, 'sixieme', '21S2324'),
(2, 'cinquieme', '21S2323');

-- --------------------------------------------------------

--
-- Table structure for table `censeur`
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
-- Dumping data for table `censeur`
--

INSERT INTO `censeur` (`id_cens`, `Nom`, `Prenom`, `matricule_cens`, `email`, `mot_de_pass`, `ville`, `quartier`, `classes`, `derniere_connexion`, `matieres`, `id_enseignant`) VALUES
(1, 'Mbassi', 'Loic', '21koi', 'loic@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$OGlScVNqRmw0SUF3NVljMw$aYRp6jeBABloLqKFgRjCQivFW+fHs+rH7jdLmcXGFwo', 'Yaounde', 'odza', '6eme', '2022-08-28 00:37:50.829807', '', 0),
(2, 'Maffo', 'Brenda', '21k270', 'natacha@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$OGlScVNqRmw0SUF3NVljMw$aYRp6jeBABloLqKFgRjCQivFW+fHs+rH7jdLmcXGFwo', 'Yaounde', 'Cite_rouge', 'TleC', '2022-08-28 00:37:50.829807', '', 0),
(3, 'Mbassi Ewolo', 'Loic', 'Yaounde', 'aronloic@gmail.com', , 'Odza', 'Mathematques', '3eme', '2022-08-26 04:38:12.556456', 'Maths', 0);
'$argon2id$v=19$m=65536,t=4,p=1$OGlScVNqRmw0SUF3NVljMw$aYRp6jeBABloLqKFgRjCQivFW+fHs+rH7jdLmcXGFwo'
-- --------------------------------------------------------

--
-- Table structure for table `classes`
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
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `nom_classe`, `nbre_eleve`, `matri_censeur_charge`, `chef_classe`, `prof_principal`, `emploi_temps`, `fiche_progression`) VALUES
(0, 'Mbassi ewolo', 50, 'Loic Aron', 'Nameless', 'Ras', 'CAHIER DE TEXTE ELECTRONIQUE.docx', 'CAHIER DE TEXTE ELECTRONIQUE.docx'),
(1, 'sixieme', 0, '', 'mboudageorges', 'kamenibertrand', '1290.jpg', ''),
(2, '', 2, '', '', '', '', ''),
(3, 'cinquieme', 0, '', 'mbouda', 'kameni', '4884517.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `eleve`
--

CREATE TABLE `eleve` (
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `classes` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `quartier` varchar(50) NOT NULL,
  `id` int(200) NOT NULL,
  `matr_cens_charge` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enseignant`
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
  `email` varchar(70) NOT NULL,
  `derniere_connexion` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enseignant`
--

INSERT INTO `enseignant` (`matricule`, `Nom`, `Prenom`, `ville`, `quartier`, `Statut`, `matieres`, `id_enseignant`, `classes`, `mot_de_pass`, `email`, `derniere_connexion`) VALUES
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
-- Table structure for table `ens_cens`
--

CREATE TABLE `ens_cens` (
  `matri_censeur` varchar(255) NOT NULL,
  `matri_ens` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
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
-- Table structure for table `inspecteur`
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
-- Table structure for table `parent`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `activite_integration`
--
ALTER TABLE `activite_integration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cahierdetexte`
--
ALTER TABLE `cahierdetexte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `censeur`
--
ALTER TABLE `censeur`
  ADD PRIMARY KEY (`id_cens`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id_enseignant`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspecteur`
--
ALTER TABLE `inspecteur`
  ADD PRIMARY KEY (`id_inspecteur`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activite_integration`
--
ALTER TABLE `activite_integration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `censeur`
--
ALTER TABLE `censeur`
  MODIFY `id_cens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id_enseignant` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `inspecteur`
--
ALTER TABLE `inspecteur`
  MODIFY `id_inspecteur` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
