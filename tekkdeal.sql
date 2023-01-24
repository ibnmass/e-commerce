-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 13 déc. 2022 à 20:01
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tekkdeal`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `IdArticle` int(11) NOT NULL,
  `NomArticle` varchar(50) NOT NULL,
  `PrixUnitaire` double NOT NULL,
  `ImageArticle` varchar(50) NOT NULL,
  `IdCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `IdCategorie` int(11) NOT NULL,
  `NomCategorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `IdCommande` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL,
  `IdDetailCommande` int(11) NOT NULL,
  `IdArticle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `detailscommande`
--

CREATE TABLE `detailscommande` (
  `IdDetailCommande` int(11) NOT NULL,
  `NumeroCommande` varchar(10) NOT NULL,
  `DateComande` date NOT NULL,
  `HeureCommande` time NOT NULL,
  `EtatCommande` varchar(15) NOT NULL,
  `IdUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `IdUser` int(11) NOT NULL,
  `Matricule` varchar(15) DEFAULT NULL,
  `PrenomUser` varchar(40) NOT NULL,
  `NomUser` varchar(20) NOT NULL,
  `AdresseUser` varchar(50) DEFAULT NULL,
  `TelephoneUser` varchar(30) DEFAULT NULL,
  `EmailUser` varchar(50) DEFAULT NULL,
  `LoginUser` varchar(20) NOT NULL,
  `MotPasseUser` varchar(30) NOT NULL,
  `PrivilegeUser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`IdArticle`),
  ADD KEY `IdCategorie` (`IdCategorie`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`IdCategorie`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`IdCommande`),
  ADD KEY `IdDetailCommande` (`IdDetailCommande`),
  ADD KEY `IdArticle` (`IdArticle`);

--
-- Index pour la table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD PRIMARY KEY (`IdDetailCommande`),
  ADD KEY `IdUser` (`IdUser`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`IdUser`),
  ADD UNIQUE KEY `TelephoneUser` (`TelephoneUser`,`EmailUser`,`LoginUser`,`MotPasseUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `IdArticle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `IdCategorie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `IdCommande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `detailscommande`
--
ALTER TABLE `detailscommande`
  MODIFY `IdDetailCommande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`IdCategorie`) REFERENCES `categories` (`IdCategorie`);

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`IdDetailCommande`) REFERENCES `detailscommande` (`IdDetailCommande`),
  ADD CONSTRAINT `commandes_ibfk_2` FOREIGN KEY (`IdArticle`) REFERENCES `articles` (`IdArticle`);

--
-- Contraintes pour la table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD CONSTRAINT `detailscommande_ibfk_1` FOREIGN KEY (`IdUser`) REFERENCES `utilisateurs` (`IdUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
