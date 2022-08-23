-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 juil. 2021 à 15:45
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `encheres`
--

-- --------------------------------------------------------

--
-- Structure de la table `condition`
--

CREATE TABLE `condition` (
  `id` int(11) NOT NULL,
  `condition` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `condition`
--

INSERT INTO `condition` (`id`, `condition`) VALUES
(1, 'Neuf'),
(2, 'Occasion'),
(3, 'Neuf sans gomme'),
(4, 'Gomme originale'),
(5, 'Utilisation postale');

-- --------------------------------------------------------

--
-- Structure de la table `enchere`
--

CREATE TABLE `enchere` (
  `id` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `prix_plancher` double NOT NULL,
  `pieces` int(11) NOT NULL,
  `archive` tinyint(1) DEFAULT NULL,
  `timbre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enchere`
--

INSERT INTO `enchere` (`id`, `date_debut`, `date_fin`, `prix_plancher`, `pieces`, `archive`, `timbre_id`) VALUES
(1, '2021-07-12', '2021-07-22', 205, 3, 0, 1),
(2, '2021-07-15', '2021-07-21', 500, 4, 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `image_principale` tinyint(1) NOT NULL,
  `timbre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `id` int(11) NOT NULL,
  `prix` double DEFAULT NULL,
  `enchere_id` int(11) NOT NULL,
  `usager_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `timbre`
--

CREATE TABLE `timbre` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `date_creation` year(4) DEFAULT NULL,
  `pays_origine` varchar(50) NOT NULL,
  `couleur` varchar(255) DEFAULT NULL,
  `dimensions` varchar(50) DEFAULT NULL,
  `certificat` varchar(25) DEFAULT NULL,
  `condition_id` int(11) NOT NULL,
  `usager_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `timbre`
--

INSERT INTO `timbre` (`id`, `nom`, `date_creation`, `pays_origine`, `couleur`, `dimensions`, `certificat`, `condition_id`, `usager_id`) VALUES
(1, 'Hall of classics invert - Chine 1915', 1913, 'Chine', 'blue foncé et blanc', '5cm x 4cm', 'CH95874325', 2, 3),
(3, 'First Official U.S. Airmail Flight 24¢ Jenny', 1918, 'États-Unis', 'Carmine rose et bleu', '5.5cm x 4.3cm', 'US982473555', 2, 3),
(11, 'Hall of classics invert - Chine 1915', 1935, 'Canada', 'violet', '5cm x 4cm', 'BH110-1524Z', 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `usager`
--

CREATE TABLE `usager` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `privilege` varchar(45) NOT NULL,
  `pays_residence` varchar(50) NOT NULL,
  `date_register` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `usager`
--

INSERT INTO `usager` (`id`, `username`, `password`, `nom`, `prenom`, `privilege`, `pays_residence`, `date_register`) VALUES
(1, 'levi@gmail.com', '$2y$12$RfnGSWvrqmT48un8udcs4udiQG.2FO4STCmfDh5KNpQ', 'Lesieur', 'Vincent', 'client', 'Chine', '2021-05-20'),
(2, 'forma@hotmail.com', '$2y$12$OU68gEP.QsfgI9K0x7poEugV12tUfPSAw3x39Ir9bae', 'Fortin', 'Marc-Antoine', 'client', 'Canada', '2021-07-14'),
(3, 'stampee@gmail.com', '$2y$12$ZTWM6RNeqtUj8HvpuNPHp.eMeANzrIJpPwDY2JKZZij', 'Stampee', 'Reginald', 'admin', 'Angleterre', '2021-06-16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `condition`
--
ALTER TABLE `condition`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `enchere`
--
ALTER TABLE `enchere`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_enchere_timbre1_idx` (`timbre_id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_images_timbre_idx` (`timbre_id`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_offre_enchere1_idx` (`enchere_id`),
  ADD KEY `fk_offre_usager1_idx` (`usager_id`);

--
-- Index pour la table `timbre`
--
ALTER TABLE `timbre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_timbre_condition1_idx` (`condition_id`),
  ADD KEY `fk_timbre_usager1_idx` (`usager_id`);

--
-- Index pour la table `usager`
--
ALTER TABLE `usager`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `condition`
--
ALTER TABLE `condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `enchere`
--
ALTER TABLE `enchere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `timbre`
--
ALTER TABLE `timbre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `usager`
--
ALTER TABLE `usager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enchere`
--
ALTER TABLE `enchere`
  ADD CONSTRAINT `fk_enchere_timbre1` FOREIGN KEY (`timbre_id`) REFERENCES `timbre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_timbre` FOREIGN KEY (`timbre_id`) REFERENCES `timbre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `fk_offre_enchere1` FOREIGN KEY (`enchere_id`) REFERENCES `enchere` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_offre_usager1` FOREIGN KEY (`usager_id`) REFERENCES `usager` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `timbre`
--
ALTER TABLE `timbre`
  ADD CONSTRAINT `fk_timbre_condition1` FOREIGN KEY (`condition_id`) REFERENCES `condition` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_timbre_usager1` FOREIGN KEY (`usager_id`) REFERENCES `usager` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
