-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 18 juil. 2020 à 21:06
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdfilms`
--
CREATE DATABASE IF NOT EXISTS `bdfilms` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bdfilms`;

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `codeUsager` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('membre','admin') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'membre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`codeUsager`, `passe`, `role`) VALUES
('admin@gmail.com', 'admin@gmail.com', 'admin'),
('jean123@gmail.com', '123', 'membre'),
('pierre456@gmail.com', '456', 'membre');

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `idf` smallint(6) NOT NULL,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `realisateur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `duree` smallint(6) NOT NULL,
  `prix` float NOT NULL,
  `pochette` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `preview` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`idf`, `titre`, `date`, `realisateur`, `categorie`, `duree`, `prix`, `pochette`, `preview`) VALUES
(1, 'Assiégés', '2020-07-02', 'Rod Lurie', 'Guerre', 123, 8.99, 'hPkqY2EMqWUnFEoedukilIUieVG.jpg', 'https://youtu.be/f4LM9a02q9Q?t=5'),
(2, 'Parallax', '2020-07-10', 'Michael Bachochin', 'Thriller', 94, 7.99, 'nRYx4zpDhGuM85ESFbAhzmAWoEn.jpg', 'https://youtu.be/2RgDjhs0T5o?t=3'),
(3, 'Uncle Tom', '2020-06-19', 'Justin Malone', 'Documentaire', 103, 7.99, '3OU5U2aERnQ0epiIOXrFWNzcmrI.jpg', 'https://youtu.be/QVLj-zARCv8?t=3'),
(4, 'Suspect numéro un', '2020-07-10', 'Daniel Roby', 'Thriller', 135, 6.99, 'dms7OZf4glA7FVTOyTbZcmtauMi.jpg', 'https://youtu.be/fRae49rnFOQ?t=3'),
(5, 'Le colis', '2019-12-12', 'Zackary Adler', 'Action', 99, 6.99, 'x4HUl1uSqz6A5WdS7pDYiFKrcrT.jpg', 'https://youtu.be/YOi1lvmTXtc?t=2'),
(6, 'The Tent', '2020-06-20', 'Kyle Couch', 'Drame', 85, 7.99, '1UhlW331wvhhmVHb8bnzSvXTNMp.jpg', 'https://youtu.be/hxDnuNdayQk?t=1'),
(7, 'cracka', '2020-07-01', 'Dale Resteghini', 'Mystère', 97, 5.99, 'uKQCLp4CHe9OGajBhDM2s6fgAj0.jpg', 'https://youtu.be/GI9Ajx2aoRA?t=4'),
(8, 'Scandale', '2019-12-20', 'Jay Roach', 'Drame', 108, 8.99, '56wB6nnRa8SZmingZcC6EnBqLI8.jpg', 'https://youtu.be/T2U4XpBErjU?t=8'),
(9, 'Emma.', '2020-02-21', 'Autumn de Wilde', 'Romance', 124, 7.99, '2w3MLpikizRfTBtuEv2EegQc33u.jpg', 'https://youtu.be/coMikL82Wnk?t=3'),
(10, 'Escape from Pretoria', '2020-03-20', 'Francis Annan', 'Thriller', 102, 8.99, 'atDtQJuleMmIdXyqtcaMuxXq7Vj.jpg', 'https://youtu.be/R_GFMbq4JPo?t=3'),
(11, 'La voix du succès', '2020-06-20', 'Nisha Ganatra', 'Romance', 113, 7.99, 'ajTAW4TOWNbjZJMq6HWy9iMf6xo.jpg', 'https://youtu.be/MzEO9-wxpRU?t=2'),
(12, 'Ria', '2020-07-15', 'Richard Colton', 'Aventure', 95, 6.99, 'zzDGXbFU8VIbT8V6skOFn3nGn0i.jpg', 'https://youtu.be/PepkuyHTHZ4?t=3');

-- --------------------------------------------------------

--
-- Structure de la table `locations`
--

CREATE TABLE `locations` (
  `idf` int(11) NOT NULL,
  `idm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `locations`
--

INSERT INTO `locations` (`idf`, `idm`) VALUES
(4, 1),
(2, 1),
(1, 1),
(3, 3),
(2, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `idm` int(11) NOT NULL,
  `courriel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`idm`, `courriel`, `prenom`, `nom`) VALUES
(1, 'peter.pan@gmail.com', 'Peter', 'Pan'),
(2, 'admin@gmail', 'admin', 'admin'),
(3, 'lucky.luke@gmail.com', 'Lucky', 'Luke'),
(4, 'mickey.mouse@gmail.com', 'Mickey', 'Mouse'),
(5, 'paul.biya@gmail.com', 'Paul', 'Biya'),
(6, 'bob.morane@gmail.com', 'Bob', 'Morane');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`idf`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`idm`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `idf` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
