-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 28 Mars 2018 à 14:38
-- Version du serveur :  5.7.21-0ubuntu0.17.10.1
-- Version de PHP :  7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eye_tracking`
--

-- --------------------------------------------------------

--
-- Structure de la table `areas`
--

CREATE TABLE `areas` (
  `are_oid` int(11) NOT NULL,
  `are_coord` longtext,
  `area_trigger` int(11) DEFAULT NULL,
  `fk_pag_oid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `areas`
--

INSERT INTO `areas` (`are_oid`, `are_coord`, `area_trigger`, `fk_pag_oid`) VALUES
(1, NULL, 2, NULL),
(2, NULL, 50, NULL),
(3, NULL, 40, NULL),
(4, NULL, 1, NULL),
(5, NULL, 2, NULL),
(6, NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `comics`
--

CREATE TABLE `comics` (
  `com_oid` int(11) NOT NULL,
  `com_title` varchar(255) DEFAULT NULL,
  `com_author` varchar(45) DEFAULT NULL,
  `com_publisher` varchar(45) DEFAULT NULL,
  `com_miniature_url` varchar(100) NOT NULL,
  `com_timestamp` varchar(45) DEFAULT NULL,
  `fk_use_oid` int(11) DEFAULT NULL,
  `com_publication` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `comics`
--

INSERT INTO `comics` (`com_oid`, `com_title`, `com_author`, `com_publisher`, `com_miniature_url`, `com_timestamp`, `fk_use_oid`, `com_publication`) VALUES
(2, 'bb', 'bb', 'bb', 'row_1802crop.jpg', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE `medias` (
  `med_oid` int(11) NOT NULL,
  `med_type` varchar(45) DEFAULT NULL,
  `med_filename` varchar(255) DEFAULT NULL,
  `med_path` varchar(450) DEFAULT NULL,
  `fk_are_oid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`med_oid`, `med_type`, `med_filename`, `med_path`, `fk_are_oid`) VALUES
(4, 'img', 'row_1802crop.jpg', 'medias/n1UVrct5Exg0KQReGZzB8NOqzBIkqwFsbzOetEZg.jpeg', NULL),
(5, 'img', 'row_1802crop.jpg', 'medias/aj1x0qTmTxeLsIi3VgxVkvx5QCNQwojrGnXijgCA.jpeg', NULL),
(6, 'img', 'maxresdefault.jpg', 'medias/vjofajrgXyv63ol0E1iWSCIlGOs6nzOCpsxRiDe2.jpeg', NULL),
(7, 'img', 'maxresdefault.jpg', 'medias/yfpvKRC9vkd8EEdGemBi6nhcRg7nhU134CjT9aMx.jpeg', 5),
(8, 'img', 'untitled_page.png', 'medias/DMBYnvth9K2vHBDuWHNxPQb2yt6T7igz0e5WIwNS.png', 6);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `pag_oid` int(11) NOT NULL,
  `pag_image` varchar(45) DEFAULT NULL,
  `pag_number` varchar(45) DEFAULT NULL,
  `fk_com_oid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pages`
--

INSERT INTO `pages` (`pag_oid`, `pag_image`, `pag_number`, `fk_com_oid`) VALUES
(1, '2', '1', 2),
(3, 'test', '2', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nicocofer@hotmail.com', '$2y$10$lXKO2zSPykBp4wMFtosbK.3WiAseQ2wvl1OiajM8yw/nyVBHb7yAe', '2018-03-20 06:58:53'),
('Ela@ela.fr', '$2y$10$hDpO/TLpgZrB785SyEJVwewMIWqPypcaMS541UyJpfpppj2bgYc7a', '2018-03-20 12:16:48');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `rol_oid` int(11) NOT NULL,
  `rol_rolename` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user_role`
--

CREATE TABLE `user_role` (
  `fk_use_oid` int(11) NOT NULL,
  `fk_rol_oid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`are_oid`),
  ADD KEY `fk_pag_oid_idx` (`fk_pag_oid`);

--
-- Index pour la table `comics`
--
ALTER TABLE `comics`
  ADD PRIMARY KEY (`com_oid`),
  ADD KEY `fk_use_oid_idx` (`fk_use_oid`);

--
-- Index pour la table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`med_oid`),
  ADD KEY `fk_are_oid_idx` (`fk_are_oid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pag_oid`),
  ADD KEY `fk_com_oid_idx` (`fk_com_oid`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rol_oid`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`fk_use_oid`,`fk_rol_oid`),
  ADD KEY `fk_rol_oid_idx` (`fk_rol_oid`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `areas`
--
ALTER TABLE `areas`
  MODIFY `are_oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `comics`
--
ALTER TABLE `comics`
  MODIFY `com_oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `med_oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `pag_oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `fk_pag_oid` FOREIGN KEY (`fk_pag_oid`) REFERENCES `pages` (`pag_oid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `comics`
--
ALTER TABLE `comics`
  ADD CONSTRAINT `fk_use_oid` FOREIGN KEY (`fk_use_oid`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `medias`
--
ALTER TABLE `medias`
  ADD CONSTRAINT `fk_are_oid` FOREIGN KEY (`fk_are_oid`) REFERENCES `areas` (`are_oid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `fk_com_oid` FOREIGN KEY (`fk_com_oid`) REFERENCES `comics` (`com_oid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `fk_rol_oid` FOREIGN KEY (`fk_rol_oid`) REFERENCES `roles` (`rol_oid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_oid` FOREIGN KEY (`fk_use_oid`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
