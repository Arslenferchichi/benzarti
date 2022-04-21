-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 14 avr. 2022 à 02:53
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `asm`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirm` varchar(255) NOT NULL,
  `Date_de_naissance` varchar(255) NOT NULL,
  `Nationalite` varchar(255) NOT NULL,
  `Num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id`, `Nom`, `Prenom`, `Email`, `Login`, `Password`, `Confirm`, `Date_de_naissance`, `Nationalite`, `Num`) VALUES
(6, 'aaa', 'bbb', 'arslen@esprit.tn', 'ddd', '123', '123', '554', 'ccc', '111'),
(8, 'hfz', 'fzefe', 'arslen@esprit.tn', 'efef', '123', '123', '2021-11-02', 'lklklk', '45454'),
(9, 'zzzz', 'aaaa', 'arslen@esprit.tn', 'sd', '15', '15', '', 'ccc', '5544'),
(10, 'test', 'test2', 'afafe@gmail.com', 'lg', '1234', '1234', '2021-11-09', 'mar', '255'),
(12, 'aaaa', 'zzzz', 'tete@esprit.tn', 'ok', '0000', '0000', '2022-04-05', 'rrrr', '11111');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
