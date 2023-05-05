-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 05 mai 2023 à 16:30
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gite`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `ID` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Capacite` int(11) NOT NULL,
  `Prix` decimal(10,2) NOT NULL,
  `Vue` varchar(255) DEFAULT NULL,
  `Commodites` varchar(255) DEFAULT NULL,
  `Etage` int(11) DEFAULT NULL,
  `Numero` int(255) DEFAULT NULL,
  `Disponibilite` tinyint(1) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Etat` varchar(255) DEFAULT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`ID`, `Type`, `Capacite`, `Prix`, `Vue`, `Commodites`, `Etage`, `Numero`, `Disponibilite`, `Description`, `Etat`, `Nom`, `Image`) VALUES
(1019, 'Double', 1, 109.00, 'Vue sur le rocher de Cornus', 'Wifi , téléphone', 1, 22, 1, 'Notre chambre est spacieuse et lumineuse, avec une vue imprenable sur la campagne environnante. Les murs sont peints dans des tons doux et apaisants, créant une ambiance chaleureuse et invitante.\n\nLe lit double est équipé d\'un matelas confortable et de draps de qualité supérieure, vous garantissant une bonne nuit de sommeil. Il y a également des tables de chevet pratiques de chaque côté du lit, avec des lampes pour vous permettre de lire ou de travailler confortablement dans la soirée.', 'Très bon état', 'Chambre du sud', 'uploads/moisaque3.png'),
(1029, 'S', 0, 0.00, 'S', 'S', 0, 0, 1, 'S', 'S', 'S', 'uploads/'),
(1030, 's', 0, 0.00, 's', 's', 0, 0, 1, 's', 's', 's', 'uploads/moisaque3.png'),
(1034, 'as', 0, 0.00, 'as', 'as', 0, 0, 1, 'as', 'as', 'sa', 'uploads/'),
(1035, 'as', 0, 0.00, 'as', 'as', 0, 0, 1, 'as', 'as', 'sa', 'uploads/PDP.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `configurations`
--

CREATE TABLE `configurations` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prix` float NOT NULL,
  `id_entree` int(11) NOT NULL,
  `id_plat` int(11) NOT NULL,
  `id_dessert` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `configurations`
--

INSERT INTO `configurations` (`id`, `nom`, `prix`, `id_entree`, `id_plat`, `id_dessert`) VALUES
(2, 'Menu 1', 19.5, 12, 4, 240);

-- --------------------------------------------------------

--
-- Structure de la table `dessert`
--

CREATE TABLE `dessert` (
  `nomdessert` varchar(100) NOT NULL,
  `id_dessert` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `dessert`
--

INSERT INTO `dessert` (`nomdessert`, `id_dessert`) VALUES
('sa', 0),
('Tiramisu', 240),
('TiramSDQDSQ', 12);

-- --------------------------------------------------------

--
-- Structure de la table `entree`
--

CREATE TABLE `entree` (
  `nomentree` varchar(100) DEFAULT NULL,
  `id_entree` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `entree`
--

INSERT INTO `entree` (`nomentree`, `id_entree`) VALUES
('cococococ', 8),
('assadgsffdg', 9),
('assa', 10),
('Salade César', 12),
('sa', 13);

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `nomplat` varchar(100) DEFAULT NULL,
  `id_plat` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`nomplat`, `id_plat`) VALUES
('boeuf bourguignon', 6),
('Moule Marinière', 8);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pseudo` varchar(70) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `password`, `pseudo`, `details`) VALUES
(1, 'salut@gmail.com', '1234', 'Lucifer', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`nomdessert`);

--
-- Index pour la table `entree`
--
ALTER TABLE `entree`
  ADD PRIMARY KEY (`id_entree`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`id_plat`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1036;

--
-- AUTO_INCREMENT pour la table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `entree`
--
ALTER TABLE `entree`
  MODIFY `id_entree` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
  MODIFY `id_plat` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `configurations`
--
ALTER TABLE `configurations`
  ADD CONSTRAINT `id_dessert` FOREIGN KEY (`id_dessert`) REFERENCES `dessert` (`id_dessert`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
