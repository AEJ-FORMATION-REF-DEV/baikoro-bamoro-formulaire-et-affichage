-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 21 août 2021 à 18:23
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
-- Base de données : `geek`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscris`
--

CREATE TABLE `inscris` (
  `id_inscris` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `aej` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `domaine` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscris`
--

INSERT INTO `inscris` (`id_inscris`, `nom`, `prenom`, `aej`, `tel`, `email`, `domaine`) VALUES
(1, 'BAIKORO', 'BAMORO', '1234567788899', 759156647, 'Mabounata@gmail.com', 'referent digital'),
(2, 'rahis', 'ibrahim', '4599999999999999', 759156647, 'groupwidis@gmail.com', 'referent digital'),
(3, 'kouamé', 'eric', '4878403836', 67908356, 'kouaeric@hotmail.fr', 'developpement data IA'),
(4, 'ouattara', 'karim', '4599999999999999', 101010101, 'ouatta@outlook.com', 'referent digital');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `inscris`
--
ALTER TABLE `inscris`
  ADD PRIMARY KEY (`id_inscris`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inscris`
--
ALTER TABLE `inscris`
  MODIFY `id_inscris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
