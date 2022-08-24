-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 août 2022 à 12:52
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
-- Structure de la table `cahierdetexte`
--

CREATE TABLE `cahierdetexte` (
  `id` int(11) NOT NULL,
  `nom_classe` varchar(255) COLLATE utf8_bin NOT NULL,
  `matricule_cens_en_charge` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `cahierdetexte`
--

INSERT INTO `cahierdetexte` (`id`, `nom_classe`, `matricule_cens_en_charge`) VALUES
(1, 'sixieme', '21S2324'),
(2, 'cinquieme', '21S2323');

-- --------------------------------------------------------

--
-- Structure de la table `censeur`
--

CREATE TABLE `censeur` (
  `id_cens` int(11) NOT NULL,
  `matricule_cens` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `mot_de_passe` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `nom_classe` varchar(255) COLLATE utf8_bin NOT NULL,
  `nbre_eleve` int(11) NOT NULL,
  `censeur` varchar(255) COLLATE utf8_bin NOT NULL,
  `chef_classe` varchar(255) COLLATE utf8_bin NOT NULL,
  `prof_principal` varchar(255) COLLATE utf8_bin NOT NULL,
  `emploi_temps` text COLLATE utf8_bin NOT NULL,
  `fiche_progression` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `nom_classe`, `nbre_eleve`, `censeur`, `chef_classe`, `prof_principal`, `emploi_temps`, `fiche_progression`) VALUES
(1, 'sixieme', 0, '', 'mboudageorges', 'kamenibertrand', '1290.jpg', ''),
(2, '', 2, '', '', '', '', ''),
(3, 'cinquieme', 0, '', 'mbouda', 'kameni', '4884517.jpg', '');

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
-- Structure de la table `leçons`
--

CREATE TABLE `leçons` (
  `id` int(11) NOT NULL,
  `numero_du_module` int(11) NOT NULL,
  `titre_du_module` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre_leçon` varchar(255) COLLATE utf8_bin NOT NULL,
  `numero_sequence_didactique` int(11) NOT NULL,
  `tittre_sequence_didactique` varchar(255) COLLATE utf8_bin NOT NULL,
  `objectifs_leçon` text COLLATE utf8_bin NOT NULL,
  `plan_leçon` text COLLATE utf8_bin NOT NULL,
  `corpus` text COLLATE utf8_bin NOT NULL,
  `fiche_preparation` text COLLATE utf8_bin NOT NULL,
  `fiche_deroulement` text COLLATE utf8_bin NOT NULL,
  `activite_apprentissage` text COLLATE utf8_bin NOT NULL,
  `evaluation_diagnostique` text COLLATE utf8_bin NOT NULL,
  `exo_application` text COLLATE utf8_bin NOT NULL,
  `devoir` text COLLATE utf8_bin NOT NULL,
  `competence_sequence` text COLLATE utf8_bin NOT NULL,
  `incidents` text COLLATE utf8_bin NOT NULL,
  `matiere` varchar(255) COLLATE utf8_bin NOT NULL,
  `enseignant` varchar(255) COLLATE utf8_bin NOT NULL,
  `classe` varchar(255) COLLATE utf8_bin NOT NULL,
  `trimestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `id` int(11) NOT NULL,
  `nom_matiere` varchar(255) COLLATE utf8_bin NOT NULL,
  `classe` varchar(255) COLLATE utf8_bin NOT NULL,
  `enseignant` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `travaux_pratiques`
--

CREATE TABLE `travaux_pratiques` (
  `id` int(11) NOT NULL,
  `titre_tp` varchar(255) COLLATE utf8_bin NOT NULL,
  `nbre_eleve_participe` int(11) NOT NULL,
  `objectifs_vises` text COLLATE utf8_bin NOT NULL,
  `ref_et_enonce_activite` text COLLATE utf8_bin NOT NULL,
  `perf_eleve` text COLLATE utf8_bin NOT NULL,
  `materiel` text COLLATE utf8_bin NOT NULL,
  `incidents` text COLLATE utf8_bin NOT NULL,
  `matiere` varchar(255) COLLATE utf8_bin NOT NULL,
  `enseignant` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_heure` datetime NOT NULL,
  `trimestre` int(11) NOT NULL,
  `classe` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite_integration`
--
ALTER TABLE `activite_integration`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cahierdetexte`
--
ALTER TABLE `cahierdetexte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `censeur`
--
ALTER TABLE `censeur`
  ADD PRIMARY KEY (`id_cens`);

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `leçons`
--
ALTER TABLE `leçons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `travaux_pratiques`
--
ALTER TABLE `travaux_pratiques`
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
-- AUTO_INCREMENT pour la table `cahierdetexte`
--
ALTER TABLE `cahierdetexte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `censeur`
--
ALTER TABLE `censeur`
  MODIFY `id_cens` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `leçons`
--
ALTER TABLE `leçons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `travaux_pratiques`
--
ALTER TABLE `travaux_pratiques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
