-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 août 2022 à 02:35
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données : `scolaricxv1`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE `apprenant` (
  `id` int(11) NOT NULL,
  `matricule_apprenant` varchar(250) NOT NULL,
  `code_classe` varchar(250) DEFAULT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL,
  `nom_apprenant` varchar(250) NOT NULL,
  `prenom_apprenant` varchar(250) NOT NULL,
  `telephone` varchar(250) DEFAULT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `contact_parentale` varchar(250) DEFAULT NULL,
  `information_tierce` varchar(250) DEFAULT NULL,
  `pssw` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

CREATE TABLE `calendrier` (
  `id` int(11) NOT NULL,
  `code_classe` varchar(250) NOT NULL,
  `code_discipline` varchar(250) NOT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL,
  `jour` varchar(250) NOT NULL,
  `horaire` varchar(250) NOT NULL,
  `week` varchar(250) NOT NULL,
  `lieu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id` int(11) NOT NULL,
  `code_classe` varchar(250) NOT NULL,
  `id_niveau` int(250) DEFAULT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL,
  `nom_classe` varchar(250) NOT NULL,
  `scolarite` varchar(250) NOT NULL,
  `ini` varchar(50) NOT NULL,
  `pssw` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compta`
--

CREATE TABLE `compta` (
  `id` int(11) NOT NULL,
  `id_tranche` int(11) DEFAULT NULL,
  `matricule_apprenant` varchar(250) NOT NULL,
  `code_classe` varchar(250) DEFAULT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL,
  `montant` int(250) NOT NULL,
  `date_paiement` varchar(250) NOT NULL,
  `nom_validateur` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `discipline`
--

CREATE TABLE `discipline` (
  `id` int(250) NOT NULL,
  `code_discipline` varchar(250) NOT NULL,
  `code_matiere` varchar(250) DEFAULT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL,
  `nom_discipline` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `discipline_classe`
--

CREATE TABLE `discipline_classe` (
  `id` int(11) NOT NULL,
  `code_discipline` varchar(250) DEFAULT NULL,
  `code_classe` varchar(250) DEFAULT NULL,
  `matricule_enseignant` varchar(250) DEFAULT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL,
  `heure` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id` int(11) NOT NULL,
  `matricule_enseignant` varchar(250) NOT NULL,
  `nom_enseignant` varchar(250) NOT NULL,
  `prenom_enseignant` varchar(250) NOT NULL,
  `telephone` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `disponibilite` varchar(250) DEFAULT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL,
  `pass` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

CREATE TABLE `etablissement` (
  `id` int(11) NOT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL,
  `nom_etablissement` varchar(250) NOT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `date_creation` varchar(250) NOT NULL,
  `statut` varchar(250) NOT NULL,
  `slogan` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tel` varchar(250) DEFAULT NULL,
  `director` varchar(250) NOT NULL,
  `web` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `examen`
--

CREATE TABLE `examen` (
  `id` int(11) NOT NULL,
  `code_examen` varchar(250) NOT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL,
  `nom_examen` varchar(250) NOT NULL,
  `periode` varchar(250) NOT NULL,
  `note_valid` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id` int(11) NOT NULL,
  `code_matiere` varchar(250) NOT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL,
  `nom_matiere` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` varchar(255) NOT NULL,
  `outgoing_msg_id` varchar(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `matricule_etablissement` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id` int(250) NOT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL,
  `nom_niveau` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `code_discipline` varchar(250) NOT NULL,
  `note` double NOT NULL DEFAULT 0,
  `code_examen` varchar(250) NOT NULL,
  `matricule_apprenant` varchar(250) NOT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

CREATE TABLE `operation` (
  `id` int(11) NOT NULL,
  `matricule_utilisateur` varchar(250) NOT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL,
  `libelle` varchar(250) NOT NULL,
  `date_operation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id` int(11) NOT NULL,
  `nom_salle` varchar(50) NOT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tranche_paiement`
--

CREATE TABLE `tranche_paiement` (
  `id` int(11) NOT NULL,
  `code_classe` varchar(50) DEFAULT NULL,
  `matricule_etablissement` varchar(250) NOT NULL,
  `date_academique` varchar(250) NOT NULL,
  `montant` varchar(250) NOT NULL,
  `echeance` varchar(250) DEFAULT NULL,
  `nom_tranche` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status_` varchar(255) NOT NULL,
  `matricule_etablissement` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `matricule_utlisateur` mediumtext NOT NULL,
  `nom_utilisateur` mediumtext NOT NULL,
  `prenom_utilisateur` mediumtext NOT NULL,
  `email_utilisateur` mediumtext NOT NULL,
  `telephone_utilisateur` mediumtext DEFAULT NULL,
  `pssw` mediumtext NOT NULL,
  `role` mediumtext NOT NULL,
  `matricule_etablissement` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`matricule_apprenant`,`matricule_etablissement`,`date_academique`) USING BTREE,
  ADD UNIQUE KEY `unicity` (`nom_apprenant`,`prenom_apprenant`,`code_classe`) USING BTREE,
  ADD KEY `id` (`id`),
  ADD KEY `code_classe` (`code_classe`);

--
-- Index pour la table `calendrier`
--
ALTER TABLE `calendrier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_classe` (`code_classe`),
  ADD KEY `code_discipline` (`code_discipline`),
  ADD KEY `date_academique` (`date_academique`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`code_classe`) USING BTREE,
  ADD UNIQUE KEY `unicity` (`nom_classe`,`id_niveau`,`date_academique`,`matricule_etablissement`) USING BTREE,
  ADD KEY `id` (`id`) USING BTREE,
  ADD KEY `classe_ibfk_1` (`id_niveau`),
  ADD KEY `pssw` (`pssw`);

--
-- Index pour la table `compta`
--
ALTER TABLE `compta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricule_apprenant` (`matricule_apprenant`),
  ADD KEY `code_classe` (`code_classe`),
  ADD KEY `compta_ibfk_3` (`id_tranche`);

--
-- Index pour la table `discipline`
--
ALTER TABLE `discipline`
  ADD PRIMARY KEY (`code_discipline`) USING BTREE,
  ADD KEY `id` (`id`),
  ADD KEY `code_matiere` (`code_matiere`);

--
-- Index pour la table `discipline_classe`
--
ALTER TABLE `discipline_classe`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `code_discipline` (`code_discipline`,`code_classe`,`date_academique`,`matricule_etablissement`),
  ADD KEY `discipline_classe_ibfk_2` (`code_classe`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`matricule_enseignant`,`matricule_etablissement`,`date_academique`) USING BTREE,
  ADD KEY `id` (`id`);

--
-- Index pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD PRIMARY KEY (`matricule_etablissement`,`date_academique`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`code_examen`,`id`) USING BTREE,
  ADD KEY `id` (`id`),
  ADD KEY `date_academique` (`date_academique`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`code_matiere`,`matricule_etablissement`,`date_academique`) USING BTREE,
  ADD KEY `id` (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id`,`matricule_etablissement`,`date_academique`) USING BTREE,
  ADD KEY `matricule_etablissement` (`matricule_etablissement`,`date_academique`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date_academique` (`date_academique`),
  ADD KEY `note_ibfk_1` (`code_examen`),
  ADD KEY `note_ibfk_2` (`matricule_apprenant`),
  ADD KEY `code_discipline` (`code_discipline`);

--
-- Index pour la table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`nom_salle`),
  ADD KEY `index` (`id`),
  ADD KEY `matricule_etablissement` (`matricule_etablissement`),
  ADD KEY `date_academique` (`date_academique`);

--
-- Index pour la table `tranche_paiement`
--
ALTER TABLE `tranche_paiement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_classe` (`code_classe`),
  ADD KEY `date_academique` (`date_academique`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`matricule_utlisateur`(250),`pssw`(250)) USING BTREE,
  ADD UNIQUE KEY `id_2` (`id`) USING HASH;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `calendrier`
--
ALTER TABLE `calendrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compta`
--
ALTER TABLE `compta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `discipline`
--
ALTER TABLE `discipline`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `discipline_classe`
--
ALTER TABLE `discipline_classe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etablissement`
--
ALTER TABLE `etablissement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `examen`
--
ALTER TABLE `examen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `operation`
--
ALTER TABLE `operation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tranche_paiement`
--
ALTER TABLE `tranche_paiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD CONSTRAINT `apprenant_ibfk_1` FOREIGN KEY (`code_classe`) REFERENCES `classe` (`code_classe`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `calendrier`
--
ALTER TABLE `calendrier`
  ADD CONSTRAINT `calendrier_ibfk_1` FOREIGN KEY (`code_classe`) REFERENCES `classe` (`code_classe`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calendrier_ibfk_2` FOREIGN KEY (`code_discipline`) REFERENCES `discipline` (`code_discipline`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `classe`
--
ALTER TABLE `classe`
  ADD CONSTRAINT `classe_ibfk_1` FOREIGN KEY (`id_niveau`) REFERENCES `niveau` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `compta`
--
ALTER TABLE `compta`
  ADD CONSTRAINT `compta_ibfk_1` FOREIGN KEY (`id_tranche`) REFERENCES `tranche_paiement` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `discipline_classe`
--
ALTER TABLE `discipline_classe`
  ADD CONSTRAINT `discipline_classe_ibfk_1` FOREIGN KEY (`code_discipline`) REFERENCES `discipline` (`code_discipline`) ON UPDATE CASCADE,
  ADD CONSTRAINT `discipline_classe_ibfk_2` FOREIGN KEY (`code_classe`) REFERENCES `classe` (`code_classe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`code_discipline`) REFERENCES `discipline_classe` (`code_discipline`) ON UPDATE CASCADE,
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`code_examen`) REFERENCES `examen` (`code_examen`) ON UPDATE CASCADE,
  ADD CONSTRAINT `note_ibfk_3` FOREIGN KEY (`matricule_apprenant`) REFERENCES `apprenant` (`matricule_apprenant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tranche_paiement`
--
ALTER TABLE `tranche_paiement`
  ADD CONSTRAINT `tranche_paiement_ibfk_1` FOREIGN KEY (`code_classe`) REFERENCES `classe` (`code_classe`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
