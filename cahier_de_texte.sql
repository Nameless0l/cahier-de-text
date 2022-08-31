-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 31 août 2022 à 15:58
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
  `id_classe` int(11) NOT NULL,
  `date_heure` datetime NOT NULL,
  `id_matiere` int(11) NOT NULL,
  `trimestre` int(11) NOT NULL,
  `id_enseignant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `cahier`
--

CREATE TABLE `cahier` (
  `id` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `id_cens_en_charge` int(11) NOT NULL,
  `id_prof_principal` int(11) NOT NULL,
  `id_chef_classe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `cahier`
--

INSERT INTO `cahier` (`id`, `id_classe`, `id_cens_en_charge`, `id_prof_principal`, `id_chef_classe`) VALUES
(0, 0, 21, 0, 0),
(1, 0, 21, 0, 0),
(2, 0, 21, 0, 0),
(3, 0, 21, 0, 0),
(4, 0, 21, 0, 0),
(5, 0, 21, 0, 0),
(6, 0, 21, 0, 0),
(7, 0, 20, 0, 0),
(8, 0, 20, 0, 0),
(9, 0, 20, 0, 0),
(10, 2, 21, 0, 0),
(12, 2, 21, 0, 0),
(13, 2, 21, 0, 0),
(14, 0, 21, 0, 0),
(15, 2, 20, 0, 0),
(16, 3, 21, 0, 0),
(17, 3, 21, 0, 0),
(18, 3, 21, 0, 0),
(19, 3, 21, 0, 0),
(20, 4, 21, 0, 0),
(21, 4, 21, 0, 0),
(22, 4, 21, 0, 0),
(23, 5, 21, 0, 0),
(24, 5, 21, 0, 0),
(25, 6, 21, 0, 0),
(26, 6, 21, 0, 0),
(27, 6, 21, 0, 0),
(28, 6, 21, 0, 0),
(29, 0, 21, 0, 0),
(122, 0, 21, 0, 0),
(221, 0, 2, 0, 0);

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
  `matricule_cens` varchar(12) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `mot_de_pass` text COLLATE utf8_bin NOT NULL,
  `ville` varchar(50) COLLATE utf8_bin NOT NULL,
  `quartier` varchar(50) COLLATE utf8_bin NOT NULL,
  `derniere_connexion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `censeur`
--

INSERT INTO `censeur` (`id_cens`, `Nom`, `Prenom`, `matricule_cens`, `email`, `mot_de_pass`, `ville`, `quartier`, `derniere_connexion`) VALUES
(1, '[Mbassi]', 'Loic', '21koi', 'loic@gmail.com', 'Nameless', '[Yaounde]', '[odza]', '0000-00-00 00:00:00'),
(2, 'Maffo', 'Brenda', '21k270', 'natacha@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$OGlScVNqRmw0SUF3NVljMw$aYRp6jeBABloLqKFgRjCQivFW+fHs+rH7jdLmcXGFwo', 'Yaounde', 'Cite_rouge', '2022-08-31 06:07:35'),
(3, 'Mbassi Ewolo', 'Loic', 'Yaounde', 'aronloic@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$OGlScVNqRmw0SUF3NVljMw$aYRp6jeBABloLqKFgRjCQivFW+fHs+rH7jdLmcXGFwo', 'Odza', 'Mathematques', '2022-08-31 12:51:36'),
(4, 'ngolong', 'prunelle', '20u2578', 'prunellengolong13@gmail.com', 'prupru321', 'Yaounde', 'fougerol', '2022-08-31 11:38:24');

-- --------------------------------------------------------

--
-- Structure de la table `censeur_enseignant`
--

CREATE TABLE `censeur_enseignant` (
  `id_enseignant` int(11) NOT NULL,
  `id_censeur` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `censeur_enseignant`
--

INSERT INTO `censeur_enseignant` (`id_enseignant`, `id_censeur`, `id`) VALUES
(27, 3, 0),
(31, 3, 1),
(32, 3, 5),
(9, 3, 10),
(9, 3, 11),
(9, 3, 12),
(42, 3, 13),
(9, 3, 14),
(44, 3, 15),
(9, 3, 16),
(9, 3, 17),
(9, 3, 18),
(9, 3, 19),
(49, 2, 20),
(9, 3, 21);

-- --------------------------------------------------------

--
-- Structure de la table `chapitres`
--

CREATE TABLE `chapitres` (
  `id` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `id_matiere` int(11) NOT NULL,
  `id_enseignant` int(11) NOT NULL,
  `id_cahier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `nom_classe` varchar(255) COLLATE utf8_bin NOT NULL,
  `nbre_eleve` int(11) NOT NULL,
  `id_censeur_charge` int(255) NOT NULL,
  `id_chef_classe` int(11) NOT NULL,
  `id_prof_principal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `nom_classe`, `nbre_eleve`, `id_censeur_charge`, `id_chef_classe`, `id_prof_principal`) VALUES
(1, 'Tle C', 20, 21, 0, 0),
(2, 'Tle D', 20, 20, 0, 0),
(3, 'Tle A4 Esp1', 0, 21, 0, 0),
(4, 'Tle A4 Esp2', 0, 0, 0, 0),
(5, 'Tle A4 All', 0, 0, 0, 0),
(6, 'Pre D', 0, 0, 0, 0),
(7, 'Pre C', 0, 0, 0, 0),
(8, 'Pre A4 Esp2', 0, 0, 0, 0),
(9, 'Pre A4 All', 0, 0, 0, 0),
(10, '2nd C', 0, 0, 0, 0),
(12, '2nd A4 Esp2', 0, 0, 0, 0),
(13, '2nd A4 Esp1', 0, 0, 0, 0),
(14, 'Pre A4 Esp2', 0, 0, 0, 0),
(15, '2nd A4 All', 0, 0, 0, 0),
(16, '3ème A4 Esp1', 0, 0, 0, 0),
(17, '3ème A4 Esp1', 0, 0, 0, 0),
(18, '3ème A4 Esp2', 0, 0, 0, 0),
(19, '3ème A4 All', 0, 0, 0, 0),
(20, '4ème A4 Esp1', 0, 0, 0, 0),
(21, '4ème A4 Esp2', 0, 0, 0, 0),
(22, '4ème A4 All', 0, 0, 0, 0),
(23, '5ème I', 0, 0, 0, 0),
(24, '5ème II', 0, 0, 0, 0),
(25, '6ème I', 0, 0, 0, 0),
(26, '6ème II', 0, 0, 0, 0),
(27, '6ème III', 0, 0, 0, 0),
(28, '6ème IV', 0, 0, 0, 0),
(37, 'Pre A4 Esp1', 0, 0, 0, 0);

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
  `id_cahier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `emploi_de_temps`
--

CREATE TABLE `emploi_de_temps` (
  `id` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL
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
('vffdvfdvf', 'Ossamabenladel', 'vfcvfdv', 'sffsf', 'vsvsd', 'animateur pedagogique français', 'Mathematques', 14, '2nd C1', '$argon2id$v=19$m=65536,t=4,p=1$WFdrZDVJeHlPdXJEd0NWUA$3t1PixCssCixxea4ivqCZfvLk0q1vbg8+IFx8aAS8Mk', 'google@polytechnique.cm', '2022-08-26 04:38:12.556456'),
('21u', 'Mbassi Ewolo', 'Loic', 'odza', 'yaounde', 'Enseignant titulaire', 'Mathematques', 15, '5eme C', '$argon2id$v=19$m=65536,t=4,p=1$TFFuRldlZy9jWXpqYUNMNA$ospZY2lOcU6erOiQkNG48D5s6d7aJbGbKTpOt2aeFXI', 'jules@polytechnique.cm', '2022-08-26 04:38:12.556456'),
('21u', 'Mbassi Ewolo', 'Loic', 'odza', 'yaounde', 'animateurPedagogique Math', 'Mathematques', 16, 'PC 2', '$argon2id$v=19$m=65536,t=4,p=1$am9VTUdJa2Z0SlVGYUxQNw$4FeYLU5lFMVZUNyPGRQAb94TBbEvBQgFVPmjmxfdyFQ', 'wwmbassiloic@gmail.com', '2022-08-26 04:38:12.556456'),
('kjsfnmd', 'Sangoku', 'vsdfvfd', 'sdsf', 'vfds', 'Enseignant', 'Mathematques', 17, '2nd', '$argon2id$v=19$m=65536,t=4,p=1$WnMzTEtWTC9PVDFnMWpqWA$tyWG3BvzsuAKyeMZ4vKrnC58QKBeiVF5z2j5wDwvaeE', 'ddd', '2022-08-26 04:38:12.556456'),
('21u22dvf', 'Mbassi Ewolo', 'Loic', 'odza', 'yaounde', 'titulaire', 'Mathematques', 18, 'TleC', '$argon2id$v=19$m=65536,t=4,p=1$NWpFc0VnR2ducUhMb0toYw$MtInSNTTN6HOdKSbJWqFf+q/VOtFG/G3XHkD9LUysGI', 'wwwnameless@loic.com', '2022-08-26 04:38:12.556456'),
('21p340', 'Mbass Ewolo', 'Loic Aron', 'YAOUNDE', 'Odza', 'Enseignant', 'Mathematques', 19, 'dvdf', '$argon2id$v=19$m=65536,t=4,p=1$ZnFETlo3Z0oxMVZaMTY3bg$Atgb78yJNz74eLBRNC0JvqdU8WiYnd4e71fhEfG0odA', 'wwwmbassi@gmail.com', '2022-08-26 04:38:12.556456'),
('21gmds', 'jean', 'Oyono', 'Obala', 'ras', '', 'Physiques', 20, '', '$argon2id$v=19$m=65536,t=4,p=1$ZFZPdFRoSlU5ZkU4V0liMA$DQlsx4k277QdnLu03Slby0oYY2XxSx8TeDkxvQF5vAk', 'Jean@gmail.com', '2022-08-26 04:38:12.556456'),
('21P341', 'Mbeya', 'Joël ', 'Yaoundé ', 'Melen', '', 'Mathematques', 21, '', '$argon2id$v=19$m=65536,t=4,p=1$SWlKcE15Uk1KYmVHNmw3RQ$Af6LseA6tYKqMPEtGXcTia5XuWzCC9toLzOf9G1jnvQ', 'joel@gmail.com', '2022-08-26 20:17:42.405125'),
('21k340', 'Essah Mama', ' Francky Noel', 'Douala', 'PK15', '', 'Physiques', 22, '', '$argon2id$v=19$m=65536,t=4,p=1$NTRINHhBLkh3VDJjZlhGWQ$S3b4Y+7i1T3fLISnTfTddc4xxzU1PwuvHliHVuswg2M', 'francky@gmail.com', '2022-08-27 09:25:32.804266'),
('21o', 'Ebanda Ntomo', 'sdcsdc', 'scsdcds', 'sdcse', 'enseignant titulaire 3eme', 'Mathematques', 23, '3eme', '$argon2id$v=19$m=65536,t=4,p=1$OGlScVNqRmw0SUF3NVljMw$aYRp6jeBABloLqKFgRjCQivFW+fHs+rH7jdLmcXGFwo', 'etoo@polytechnique.cm', '2022-08-26 04:38:12.556456'),
('21p341', 'Poum', 'Olivier', 'Bamenda', 'Etoudi', '', 'Mathematques', 24, '', '$argon2id$v=19$m=65536,t=4,p=1$Y0pCSHVKb3hiRE1uNzllMQ$7uTyNTuYHCGyLBrGJdYiotpnpL07/icToWyc+wdtd0g', 'poum@gmail.com', '2022-08-30 13:29:41.220792'),
('21pnfd', 'Edoa', 'Apolinaire', 'Kribi', 'Kribi', '', 'Mathematques', 25, '', '$argon2id$v=19$m=65536,t=4,p=1$TXpRdmlwbmZlL1ppdzVnWA$lxBLO/ngKak4x3aprJSdWfoD5pQdHYvpNNFGDsMA3LE', 'Edoa@gmail.com', '2022-08-30 14:07:10.645162'),
('hnjcemdfede', 'svdfvfsvcdsvcsd', 'acds', 'jnjmnm', 'jnmnm', '', 'Mathematques', 26, '', '$argon2id$v=19$m=65536,t=4,p=1$MXZVY1BjZGJBWWU2ZkhNaw$ZKDlGb/40jwPZPzQedOABWBVKR79kFpIqhjT9q4xiJo', 'mnkmn2@lmkklmk', '2022-08-30 16:28:39.618418'),
('fdxffgcdfd', 'fcf', 'fcxfc', 'gfcgvcfgc', 'gfvcgfc ', '', 'Mathematques', 27, '', '$argon2id$v=19$m=65536,t=4,p=1$aFZ2U1NMVlZBNmxndjAvNQ$b7/ESKTQzPzYERN4nqCkcK7KONK8R6cO55v0c3BEMws', 'gfbvgc@cfc', '2022-08-30 16:35:40.219262'),
('fdxffgcdfd', 'fcf', 'fcxfc', 'gfcgvcfgc', 'gfvcgfc ', '', 'Mathematques', 28, '', '$argon2id$v=19$m=65536,t=4,p=1$cnpTblFmNGlyczVxVFdiNg$BtfT7L7P4+mK4OYWeVkSu2XH197FQ0BOxjEjPP49nrU', 'gfbvgc@cfc', '2022-08-30 16:36:00.515859'),
('fdxffgcdfd', 'fcf', 'fcxfc', 'gfcgvcfgc', 'gfvcgfc ', '', 'Mathematques', 29, '', '$argon2id$v=19$m=65536,t=4,p=1$R3J2MVMuN2p2MWxEaG9jMw$UctcgV3LchvYcS+kmGmjAYyY8DiM/wXmcDOoqbnTuEk', 'gfbvgc@cfc', '2022-08-30 16:37:26.883370'),
('fdxffgcdfd', 'fcf', 'fcxfc', 'gfcgvcfgc', 'gfvcgfc ', '', 'Mathematques', 30, '', '$argon2id$v=19$m=65536,t=4,p=1$cnZ1T3FualFFUEtJaWtNSA$7oqIieIbqNN/NJf8nqqp20iCFAexn/4JxDykWetxFpk', 'gfbvgc@cfc', '2022-08-30 16:38:32.461597'),
('ggfhfg', 'hvgvg', 'gvgvc', 'vgv', 'gvhv', '', 'Mathematques', 31, '', '$argon2id$v=19$m=65536,t=4,p=1$T2phUXR0OVhBV3E1LzY1WA$5bJk5zL43KSF6jmxcV6girRM+3QXcU3lJH2ekNYa88s', 'gvghjvg@gmail.com', '2022-08-30 16:41:52.940386'),
('21p027', 'Kengali', 'Fegue', 'Yaounde', 'melen', '', 'Mathematques', 32, '', '$argon2id$v=19$m=65536,t=4,p=1$RFozUG9SU3ZoajVJZ25nbA$kysSe1Twjc57e8aiEd9RndykyazwYRQ0E9OgGFBIH7E', 'kengali@gmail.com', '2022-08-30 16:50:09.281126'),
('', '', '', '', '', '', '', 35, '', '$argon2id$v=19$m=65536,t=4,p=1$TWhKbjM2dDNJU1l4d1RXRQ$FkkaCQ2M3eksfbeVU8DhpVyBXDixiE3W+b2ZjNujIx4', '', '2022-08-30 23:09:19.554370'),
('21pnfd', 'Doe', 'John', 'Paris', 'Mvog Ada', '', 'Mathematques', 42, '', '$argon2id$v=19$m=65536,t=4,p=1$ODdtWU1qNENnM2IxUFlmcw$QItH2F78sbrubSeHA2moHUkCKw95payhClllVmj12xA', 'jhon@gmail.com', '2022-08-30 23:51:30.482170'),
('kjvfrkj', 'jhjnkn', 'kjhjnjk', 'jhnkn', 'jhnj', '', 'Mathematques', 44, '', '$argon2id$v=19$m=65536,t=4,p=1$MHVqczh0Wnd1eDdmeUZ5Uw$rexJSv1gcUAILZUbUsTerL0vkLON4sUlWSkqXJQyOJ0', 'jkjnjn2@jhkjnhj.com', '2022-08-30 23:56:39.319156'),
('', '', '', '', '', '', '', 45, '', '$argon2id$v=19$m=65536,t=4,p=1$MkF5WWZ2MjRjZHVLbE0yYg$YJeqUTsW52F2B7nH/tXhM2OfQ3WPmGV6zLob5tgfegU', '', '2022-08-31 00:04:58.915519'),
('', '', '', '', '', '', '', 46, '', '$argon2id$v=19$m=65536,t=4,p=1$UVZlbmR1ZzlGc25aMFlCMw$GmQ8Aw4o3kqglF6sli4Q2poyxbv+b64o1P9QCNhzT3w', '', '2022-08-31 00:06:16.661442'),
('', '', '', '', '', '', '', 47, '', '$argon2id$v=19$m=65536,t=4,p=1$dEZhU2lGQTRQcVdoQXhvbA$yPj0lv1IKIgvjlWVf54lwgv/3vJw64lA4wK/bpLd3cY', '', '2022-08-31 00:06:48.766043'),
('', '', '', '', '', '', '', 48, '', '$argon2id$v=19$m=65536,t=4,p=1$QUVSZzVhMjJ2eUN0UjlsQg$heapXgiqcGrKql+JhkrsYiXAZ7JQCSihr/ZbjZIqePg', '', '2022-08-31 00:08:14.402837'),
('21kfjr', 'Akoumba', 'René', 'Obala', 'Lefok', '', 'Mathematques', 49, '', '$argon2id$v=19$m=65536,t=4,p=1$Z3Y4TVRzaElaSUhNSUEvcA$0okThqAoQ++2no3UP6JRFDdrFE5L+mVPIvgIIwIb4kI', 'rene@gmail.com', '2022-08-31 00:08:14.999526'),
('', '', '', '', '', '', '', 50, '', '$argon2id$v=19$m=65536,t=4,p=1$NklUd3FoL051OVdSUGRILg$EdjRxLbqfK0yQACzeyB9ChSLy3CspH7WSG/ExbNEY7E', '', '2022-08-31 00:35:35.596502');

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
  `copie_remise` binary(12) NOT NULL,
  `nbre_eleve_participe` int(11) NOT NULL,
  `nbre_note_inf_10` int(11) NOT NULL,
  `nbre_note_entre_10_12` int(11) NOT NULL,
  `nbre_note_sup_12` int(11) NOT NULL,
  `moy_classe` int(11) NOT NULL,
  `note_plus_forte` int(11) NOT NULL,
  `id_matiere` int(11) NOT NULL,
  `date_heure` datetime NOT NULL,
  `id_classe` int(11) NOT NULL,
  `trimestre` int(11) NOT NULL,
  `id_enseignant` int(11) NOT NULL
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
  `id` int(10) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `id_matiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `leçon`
--

CREATE TABLE `leçon` (
  `id` int(11) NOT NULL,
  `numero_du_module` int(11) NOT NULL,
  `titre_module` varchar(255) NOT NULL,
  `titre_leçon` varchar(255) NOT NULL,
  `numero_sequence_didactique` int(11) NOT NULL,
  `titre_sequence_didactique` varchar(255) NOT NULL,
  `opjectif_leçon` int(11) NOT NULL,
  `plan_leçon` text NOT NULL,
  `corpus` text NOT NULL,
  `fiche_preparation` text NOT NULL,
  `fiche_deroulement` text NOT NULL,
  `activite_apprentissage` text NOT NULL,
  `exo_application` text NOT NULL,
  `competence_sequence` text NOT NULL,
  `incident` text NOT NULL,
  `id_matiere` int(11) NOT NULL,
  `id_enseignant` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `trimestre` int(11) NOT NULL,
  `id_chapitre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `id` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `cycle` varchar(50) NOT NULL,
  `nom_matiere` varchar(255) NOT NULL,
  `id_enseignant` int(11) NOT NULL
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

-- --------------------------------------------------------

--
-- Structure de la table `travaux_pratiques`
--

CREATE TABLE `travaux_pratiques` (
  `id` int(11) NOT NULL,
  `titre_tp` varchar(255) NOT NULL,
  `nbre_eleve_participe` int(11) NOT NULL,
  `objectifs_vises` text NOT NULL,
  `ref_et_enonce_activite` text NOT NULL,
  `perf_eleve` text NOT NULL,
  `materiel` text NOT NULL,
  `incidents` text NOT NULL,
  `id_enseignant` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `date_heure` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite_integration`
--
ALTER TABLE `activite_integration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_classe` (`id_classe`),
  ADD KEY `id_matiere` (`id_matiere`),
  ADD KEY `id_enseignant` (`id_enseignant`);

--
-- Index pour la table `cahier`
--
ALTER TABLE `cahier`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_cens_en_charge` (`id_cens_en_charge`),
  ADD KEY `id_chef_classe` (`id_chef_classe`),
  ADD KEY `id_prof_principal` (`id_prof_principal`),
  ADD KEY `id_classe` (`id_classe`);

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
  ADD KEY `id_parent` (`id_parent`),
  ADD KEY `id_cahier` (`id_cahier`);

--
-- Index pour la table `censeur`
--
ALTER TABLE `censeur`
  ADD PRIMARY KEY (`id_cens`) USING BTREE,
  ADD UNIQUE KEY `id_cens` (`matricule_cens`) USING BTREE;

--
-- Index pour la table `censeur_enseignant`
--
ALTER TABLE `censeur_enseignant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_censeur` (`id_censeur`),
  ADD KEY `id_enseignant` (`id_enseignant`);

--
-- Index pour la table `chapitres`
--
ALTER TABLE `chapitres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cahier` (`id_cahier`),
  ADD KEY `id_classe` (`id_classe`),
  ADD KEY `id_enseignant` (`id_enseignant`),
  ADD KEY `id_matiere` (`id_matiere`);

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_censeur_charge` (`id_censeur_charge`),
  ADD KEY `id_chef_classe` (`id_chef_classe`),
  ADD KEY `id_prof_principal` (`id_prof_principal`);

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cahier` (`id_cahier`);

--
-- Index pour la table `emploi_de_temps`
--
ALTER TABLE `emploi_de_temps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_classe` (`id_classe`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_classe` (`id_classe`),
  ADD KEY `id_enseignant` (`id_enseignant`),
  ADD KEY `id_matiere` (`id_matiere`);

--
-- Index pour la table `inspecteur`
--
ALTER TABLE `inspecteur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_matiere` (`id_matiere`);

--
-- Index pour la table `leçon`
--
ALTER TABLE `leçon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_matiere` (`id_matiere`),
  ADD KEY `id_enseignant` (`id_enseignant`),
  ADD KEY `id_classe` (`id_classe`),
  ADD KEY `id_chapitre` (`id_chapitre`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_classe` (`id_classe`),
  ADD KEY `id_enseignant` (`id_enseignant`);

--
-- Index pour la table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `travaux_pratiques`
--
ALTER TABLE `travaux_pratiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_classe` (`id_classe`),
  ADD KEY `id_enseignant` (`id_enseignant`);

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
  MODIFY `id_cens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `censeur_enseignant`
--
ALTER TABLE `censeur_enseignant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `chapitres`
--
ALTER TABLE `chapitres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `emploi_de_temps`
--
ALTER TABLE `emploi_de_temps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `enseignant_matiere`
--
ALTER TABLE `enseignant_matiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inspecteur`
--
ALTER TABLE `inspecteur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `leçon`
--
ALTER TABLE `leçon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT pour la table `travaux_pratiques`
--
ALTER TABLE `travaux_pratiques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activite_integration`
--
ALTER TABLE `activite_integration`
  ADD CONSTRAINT `activite_integration_ibfk_1` FOREIGN KEY (`id_classe`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `activite_integration_ibfk_2` FOREIGN KEY (`id_matiere`) REFERENCES `matieres` (`id`),
  ADD CONSTRAINT `activite_integration_ibfk_3` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id`);

--
-- Contraintes pour la table `cahier`
--
ALTER TABLE `cahier`
  ADD CONSTRAINT `cahier_ibfk_1` FOREIGN KEY (`id_cens_en_charge`) REFERENCES `censeur` (`id_cens`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cahier_ibfk_2` FOREIGN KEY (`id_chef_classe`) REFERENCES `eleve` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cahier_ibfk_3` FOREIGN KEY (`id_prof_principal`) REFERENCES `enseignant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cahier_ibfk_4` FOREIGN KEY (`id_classe`) REFERENCES `classes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `cahier_parent_ibfk_2` FOREIGN KEY (`id_parent`) REFERENCES `parent` (`id`),
  ADD CONSTRAINT `cahier_parent_ibfk_3` FOREIGN KEY (`id_cahier`) REFERENCES `cahier` (`id`);

--
-- Contraintes pour la table `censeur_enseignant`
--
ALTER TABLE `censeur_enseignant`
  ADD CONSTRAINT `censeur_enseignant_ibfk_1` FOREIGN KEY (`id_censeur`) REFERENCES `censeur` (`id_cens`),
  ADD CONSTRAINT `censeur_enseignant_ibfk_2` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id`);

--
-- Contraintes pour la table `chapitres`
--
ALTER TABLE `chapitres`
  ADD CONSTRAINT `chapitres_ibfk_1` FOREIGN KEY (`id_cahier`) REFERENCES `cahier` (`id`),
  ADD CONSTRAINT `chapitres_ibfk_2` FOREIGN KEY (`id_classe`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `chapitres_ibfk_3` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id`),
  ADD CONSTRAINT `chapitres_ibfk_4` FOREIGN KEY (`id_matiere`) REFERENCES `matieres` (`id`);

--
-- Contraintes pour la table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`id_censeur_charge`) REFERENCES `censeur` (`id_cens`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `classes_ibfk_2` FOREIGN KEY (`id_chef_classe`) REFERENCES `eleve` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `classes_ibfk_3` FOREIGN KEY (`id_prof_principal`) REFERENCES `enseignant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `eleve_ibfk_1` FOREIGN KEY (`id_cahier`) REFERENCES `cahier` (`id`);

--
-- Contraintes pour la table `emploi_de_temps`
--
ALTER TABLE `emploi_de_temps`
  ADD CONSTRAINT `emploi_de_temps_ibfk_1` FOREIGN KEY (`id_classe`) REFERENCES `classes` (`id`);

--
-- Contraintes pour la table `enseignant_matiere`
--
ALTER TABLE `enseignant_matiere`
  ADD CONSTRAINT `enseignant_matiere_ibfk_1` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id`),
  ADD CONSTRAINT `enseignant_matiere_ibfk_2` FOREIGN KEY (`id_matiere`) REFERENCES `matieres` (`id`);

--
-- Contraintes pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`id_classe`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `evaluation_ibfk_2` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id`),
  ADD CONSTRAINT `evaluation_ibfk_3` FOREIGN KEY (`id_matiere`) REFERENCES `matieres` (`id`);

--
-- Contraintes pour la table `inspecteur`
--
ALTER TABLE `inspecteur`
  ADD CONSTRAINT `inspecteur_ibfk_1` FOREIGN KEY (`id_matiere`) REFERENCES `matieres` (`id`);

--
-- Contraintes pour la table `leçon`
--
ALTER TABLE `leçon`
  ADD CONSTRAINT `leçon_ibfk_1` FOREIGN KEY (`id_matiere`) REFERENCES `matieres` (`id`),
  ADD CONSTRAINT `leçon_ibfk_2` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id`),
  ADD CONSTRAINT `leçon_ibfk_3` FOREIGN KEY (`id_classe`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `leçon_ibfk_4` FOREIGN KEY (`id_chapitre`) REFERENCES `chapitres` (`id`);

--
-- Contraintes pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD CONSTRAINT `matieres_ibfk_1` FOREIGN KEY (`id_classe`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `matieres_ibfk_2` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id`);

--
-- Contraintes pour la table `travaux_pratiques`
--
ALTER TABLE `travaux_pratiques`
  ADD CONSTRAINT `travaux_pratiques_ibfk_1` FOREIGN KEY (`id_classe`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `travaux_pratiques_ibfk_2` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
