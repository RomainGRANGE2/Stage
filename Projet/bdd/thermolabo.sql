-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 24 jan. 2022 à 15:13
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `thermolabo`
--

-- --------------------------------------------------------

--
-- Structure de la table `enregistrements`
--

CREATE TABLE `enregistrements` (
  `numéroDeSérie` int(10) NOT NULL,
  `Statut` varchar(20) NOT NULL,
  `dateDépotDonnées` date NOT NULL,
  `dateDébutEnregistrement` date NOT NULL,
  `dateFinEnregistrement` date NOT NULL,
  `référenceProduit` varchar(20) NOT NULL,
  `référenceTransport` varchar(20) NOT NULL,
  `Organisation` varchar(20) NOT NULL,
  `Fichier` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enregistrements`
--

INSERT INTO `enregistrements` (`numéroDeSérie`, `Statut`, `dateDépotDonnées`, `dateDébutEnregistrement`, `dateFinEnregistrement`, `référenceProduit`, `référenceTransport`, `Organisation`, `Fichier`) VALUES
(6, 'nouveau', '2022-01-13', '2022-01-01', '2022-01-11', 'dzzdQ', 'DFGVS', 'dsfqfsqfqfsfqfqf', 'retour_JULES.pdf'),
(9, 'ok', '2022-01-06', '2022-01-06', '2022-01-13', 'nnnng', 'kkkkk', 'mmmmm', 'retour_JULES.pdf'),
(20, 'vu', '2022-01-15', '2022-01-06', '2022-01-21', 'gdgsdg', 'sqgsgsg', '9q9gq4', 'carte identité Romain.pdf'),
(47, 'ko', '2022-01-02', '2022-01-28', '2022-02-04', '7fs7', 'f7s7', 'fdfdfdfdf', 'Order-DisplayReturnVoucherPDF.');

-- --------------------------------------------------------

--
-- Structure de la table `enregistreurs`
--

CREATE TABLE `enregistreurs` (
  `numéroDeSérie` varchar(20) NOT NULL,
  `fichierDéposé` varchar(10) NOT NULL,
  `organisation` varchar(20) NOT NULL,
  `dateExpiration` date NOT NULL,
  `document` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
