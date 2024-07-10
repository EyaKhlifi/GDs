-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 09 fév. 2023 à 14:32
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `parc-info`
--

-- --------------------------------------------------------

--
-- Structure de la table `inventaire`
--

CREATE TABLE `inventaire` (
  `id` int(11) NOT NULL,
  `mark` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `code_inventaire` varchar(220) NOT NULL,
  `num_serie` varchar(225) NOT NULL,
  `emplacement` varchar(250) NOT NULL,
  `etat` varchar(200) NOT NULL,
  `annee_inventaire` int(11) NOT NULL,
  `date_achat` date NOT NULL,
  `garantie` varchar(200) NOT NULL,
  `date_creation` date NOT NULL,
  `nom_utilisateur` varchar(100) DEFAULT NULL,
  `categorie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inventaire`
--

INSERT INTO `inventaire` (`id`, `mark`, `model`, `code_inventaire`, `num_serie`, `emplacement`, `etat`, `annee_inventaire`, `date_achat`, `garantie`, `date_creation`, `nom_utilisateur`, `categorie`) VALUES
(53, 'lenovo', 'lenovo thinkbook 15', ' A000101', 'mp219jOK', 'IT', 'Fonction', 2022, '2022-06-08', 'Oui', '2022-05-08', 'Hamza', 2),
(54, 'HP', '15-dw3014nk', 'A000210', 'cnd1444mc5', 'Qualite', 'Fonction', 2022, '2022-01-20', 'Oui', '2022-01-20', '', 2),
(55, 'ASUS', 'RTL8821CE', 'A000029', 'M3NOCX10R807124', 'RH', 'Panne', 2022, '2022-03-21', 'Oui', '2022-03-25', '', 2),
(56, 'HP', '15-dw3014nk', 'A00010', 'CND1444TSP', 'Qualite', 'Fonction', 2022, '2022-05-25', 'Oui', '2022-07-01', '', 2),
(57, 'HP', 'HP260G4 Desktop mini pc', 'A000214', '8CC14C1HM7', 'Prodction', 'Fonction', 2022, '2022-06-02', 'Oui', '2022-06-12', '', 3),
(58, 'HP', 'HP260G4 Desktop mini pc', 'A000151', '1CR1060LFW', 'Prodction', 'Fonction', 2022, '2022-10-12', 'Oui', '2022-10-16', '', 3),
(59, 'HP', 'HP260G4 Desktop mini pc', 'A000075', '1CR1060LHG', 'Prodction', 'Panne', 2022, '2022-10-12', 'Non', '2022-10-17', '', 3),
(60, 'HP', 'HP260G4 Desktop mini pc', 'A000073', '1CR1060LMC', 'Prodction', 'Fonction', 2022, '2022-11-12', 'Non', '2022-12-18', '', 3),
(61, 'HP', 'HPP21BG4 Desktop mini pc', 'A00062', '1CR1330NZ2', 'Prodction', 'Panne', 2022, '2022-05-22', 'Non', '2022-06-10', '', 3),
(63, 'PANTUM', 'PANTUMPP3010', 'A000094', 'p3300', 'IT', 'Fonction', 2022, '2022-12-12', 'Oui', '2022-05-17', '', 4),
(64, 'ZEBARA', 'zebra ZD421', ' A000202', 'D6J213100249', 'Prodction', 'Fonction', 2022, '2022-02-12', 'Oui', '2022-02-15', '', 4),
(65, 'PANTUM', 'PANTUMPP3010', 'A000093', 'P3300DN', 'IT', 'Fonction', 2022, '2022-06-12', 'Oui', '2022-06-30', '', 4),
(66, 'ZEBARA', 'zebra ZD620', 'A00020', 'D1J211100818', 'Prodction', 'Panne', 2022, '2022-04-05', 'Oui', '2022-02-16', '', 4),
(67, 'ZEBARA', 'zebra ZT230', 'A000046', 'ZT23042-TOE200FZ', 'Prodction', 'Fonction', 2022, '2022-07-15', 'Oui', '2022-10-15', '', 4),
(68, 'PANTUM', 'P3010', 'A000091', 'P3300DN', 'RH', 'Panne', 2022, '2022-03-12', 'Non', '2022-04-05', '', 4),
(69, 'ZEBARA', 'zebra ZD421', 'A000203', 'D6J213100269', 'Prodction', 'Panne', 2022, '2022-04-05', 'Oui', '2022-05-18', '', 4),
(70, 'ZEBARA', 'zebra DS2208', 'A000019-8', '22049010559667', 'Prodction', 'Fonction', 2022, '2023-01-09', 'Oui', '2023-01-25', '', 6),
(71, 'ZEBARA', 'zebra DS2208', 'A000272-9', '22049010559663', 'Prodction', 'Fonction', 2022, '2022-05-11', 'Oui', '2022-05-25', '', 6),
(72, 'ZEBARA', 'zebra DS2208', 'A000272-2', '22049010559681', 'Prodction', 'Panne', 2022, '2022-05-14', 'Non', '2022-05-21', '', 6),
(73, 'ZEBARA', 'zebra DS2208', 'A000272-6', '22049010559664', 'Prodction', 'Panne', 2022, '2022-02-16', 'Oui', '2022-02-20', '', 6),
(74, 'ZEBARA', 'zebra DS2208', 'A000272-1', '21302010552764', 'Prodction', 'Panne', 2022, '2022-12-15', 'Oui', '2022-12-20', '', 6),
(75, 'ZEBARA', 'zebra DS2208', 'A000204-7', '21012010563243', 'Prodction', 'Panne', 2022, '2022-04-14', 'Non', '2022-04-25', '', 6),
(76, 'ZEBARA', 'zebra DS2208', 'A000272-3', '21302010552755', 'Prodction', 'Fonction', 2022, '2022-09-09', 'Non', '2022-09-15', '', 6),
(77, 'XIAOMI', 'redmi 10', 'A000102', '35210f1wd00', 'IT', 'Panne', 2022, '2022-03-03', 'Oui', '2022-03-12', '', 9),
(78, 'XIAOMI', 'redmi 10', 'A000097', '35210f1wd33', 'RH', 'Fonction', 2022, '2022-04-03', 'Oui', '2022-04-27', '', 9),
(79, 'XIAOMI', 'redmi 10', 'A000097', '35210f1wd22', 'Qualite', 'Panne', 2022, '2022-12-03', 'Oui', '2022-12-17', '', 9),
(80, 'XIAOMI', 'redmi 10', 'A000099', '35210f1wd44', 'IT', 'Fonction', 2022, '2022-12-03', 'Oui', '2022-12-25', '', 9),
(81, 'XIAOMI', 'redmi 10', 'A000099', '35210f1wd55', 'RH', 'Panne', 2022, '2023-01-05', 'Non', '2023-05-20', '', 9),
(82, 'XIAOMI', 'redmi 10', 'A000100', '35210f1wd77', 'Qualite', 'Fonction', 2022, '2023-01-22', 'Oui', '2023-02-10', '', 9),
(83, 'HP', 'HP260G4 Desktop PC', 'A000241', 'CND13828YV', 'Qualite', 'Fonction', 2022, '2022-01-12', 'Oui', '2022-01-22', '', 1),
(86, 'ubiquitilnc', 'usw-pro-24', 'A000150-11', '245A4C972FC4', 'Qualite', 'Fonction', 2022, '2022-12-12', 'Oui', '2022-12-15', '', 8),
(87, 'ubiquitilnc', 'usw-pro-24', 'A000150-12', '245A4C972E56', 'Qualite', 'Fonction', 2022, '2022-02-05', 'Oui', '2022-02-10', '', 8),
(88, 'ubiquitilnc', 'usw-pro-24', 'A000150-13', '2454C9731E0', 'RH', 'Fonction', 2022, '2022-11-10', 'Oui', '2022-11-15', '', 8),
(89, 'ubiquitilnc', 'usw-pro-24', 'A000150-5', '2454C972E4', 'Prodction', 'Panne', 2022, '2022-08-31', 'Non', '2022-09-05', '', 8),
(90, 'ubiquitilnc', 'usw-pro-24', 'A000150-6', '245A4C611820', 'RH', 'Panne', 2022, '2022-05-12', 'Oui', '2022-05-15', '', 8),
(91, 'ubiquitilnc', 'usw-pro-24', ' A000150-9', '245A4C972DC3', 'RH', 'Fonction', 2022, '2022-06-05', 'Oui', '2022-06-10', '', 8),
(92, 'HPE PROLIANT', 'DL 380 GEN10', 'A000320', 'CZ200237', 'IT', 'Fonction', 2022, '2022-02-12', 'Oui', '2022-02-25', '', 7),
(93, 'DELL', 'POWER EDG 610', 'A000149', '573JD37', 'IT', 'Fonction', 2022, '2022-06-15', 'Non', '2022-07-15', '', 7),
(94, 'lenovo', 'G27c-10', 'A00038', '1S66A3GACBWWUGWO59D7', 'RH', 'Fonction', 2022, '2022-06-18', 'Oui', '2022-06-22', '', 5),
(95, 'lenovo', 'lenovo v130-20IGMAIO', 'A000103', 'yj17vhj', 'Qualite', 'Fonction', 2022, '2022-03-03', 'Oui', '2022-03-10', '', 1),
(96, 'benq', 'ID', 'A000224', 'ET75M0067004U', 'RH', 'Fonction', 2022, '2022-05-12', 'Oui', '2022-06-12', '', 5),
(97, 'ZEBARA', 'zebra DS2208', 'A000019-10', '2130201055278', 'Prodction', 'Fonction', 2022, '2022-09-18', 'Oui', '2022-09-21', '', 6),
(98, 'ubiquitilnc', 'usw-pro-24', 'A000150-8', '245A4C972DCF', 'IT', 'Fonction', 2022, '2022-09-12', 'Oui', '2022-09-25', '', 8),
(99, 'ubiquitilnc', 'usw-pro-24', 'A000150-10', '245A4C972DEF', 'IT', 'Panne', 2022, '2022-05-12', 'Non', '2022-05-27', '', 8);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'naima', 'naima@gmail.com', '123'),
(4, 'mariem', 'mariem@gmail.com', '1234'),
(5, 'mariem', 'mariem@gmail.com', '1234'),
(6, 'amine', 'amine@gmail.com', '1230'),
(7, 'rami', 'rami@gmail.com', '1236');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `inventaire`
--
ALTER TABLE `inventaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inventaire`
--
ALTER TABLE `inventaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
