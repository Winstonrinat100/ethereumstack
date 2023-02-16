-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 16 fév. 2023 à 22:29
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ether`
--

-- --------------------------------------------------------

--
-- Structure de la table `stack`
--

CREATE TABLE `stack` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(270) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mdp` varchar(280) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stack`
--

INSERT INTO `stack` (`id`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 'azer', 'root', 'ranti2005@outlook.com', '0000'),
(2, 'azer', 'root', 'ranti2005@outlook.com', '0000'),
(3, 'azer', 'root', 'ranti2005@outlook.com', '0000'),
(4, 'azer', 'root', 'ranti2005@outlook.com', '0000'),
(5, 'azer', 'root', 'ranti2005@outlook.com', '0000'),
(6, 'azer', 'root', 'ranti2005@outlook.com', '0000'),
(7, 'azer', 'root', 'ranti2005@outlook.com', '0000');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `stack`
--
ALTER TABLE `stack`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `stack`
--
ALTER TABLE `stack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
