-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 01 Mars 2017 à 00:49
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `onelife`
--
DROP DATABASE IF EXISTS `onelife`;
CREATE DATABASE IF NOT EXISTS `onelife` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `onelife`;

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` tinytext,
  `password_hash` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `account`
--

INSERT INTO `account` (`id`, `username`, `password_hash`) VALUES
(1, 'ONELIFEADM', 'cdfdb7334c1aa21e13e3bc0605e0f86eb9137ecc');

-- --------------------------------------------------------

--
-- Structure de la table `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` tinytext NOT NULL,
  `description` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `config`
--

INSERT INTO `config` (`id`, `name`, `value`, `description`) VALUES
(1, 'phone', '514-775-2338', 'Phone Number'),
(2, 'mail', 'onelifexxx@onelifexxx.com', 'Email');

-- --------------------------------------------------------

--
-- Structure de la table `girls`
--

DROP TABLE IF EXISTS `girls`;
CREATE TABLE `girls` (
  `id` int(11) NOT NULL,
  `working` int(1) NOT NULL DEFAULT '0',
  `img_1` mediumtext,
  `img_2` mediumtext,
  `img_3` mediumtext,
  `img_4` mediumtext,
  `img_5` mediumtext,
  `img_6` mediumtext,
  `name` tinytext,
  `age` tinytext,
  `size` tinytext,
  `weight` tinytext,
  `chest` tinytext,
  `hairs` tinytext,
  `eyes` tinytext,
  `quality` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `girls`
--

INSERT INTO `girls` (`id`, `working`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`, `name`, `age`, `size`, `weight`, `chest`, `hairs`, `eyes`, `quality`) VALUES
(1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `girls`
--
ALTER TABLE `girls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
