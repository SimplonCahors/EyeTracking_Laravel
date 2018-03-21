-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2018 at 01:43 PM
-- Server version: 5.7.21-0ubuntu0.17.10.1
-- PHP Version: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eye_tracking`
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
  `fk_use_oid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE `medias` (
  `med_oid` int(11) NOT NULL,
  `med_type` varchar(45) DEFAULT NULL,
  `med_filename` varchar(45) DEFAULT NULL,
  `med_path` varchar(450) DEFAULT NULL,
  `fk_are_oid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
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

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nicocofer@hotmail.com', '$2y$10$lXKO2zSPykBp4wMFtosbK.3WiAseQ2wvl1OiajM8yw/nyVBHb7yAe', '2018-03-20 06:58:53'),
('Ela@ela.fr', '$2y$10$hDpO/TLpgZrB785SyEJVwewMIWqPypcaMS541UyJpfpppj2bgYc7a', '2018-03-20 12:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pag_oid`),
  ADD KEY `fk_com_oid_idx` (`fk_com_oid`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
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
  MODIFY `are_oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `comics`
--
ALTER TABLE `comics`
  MODIFY `com_oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `med_oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `pag_oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
