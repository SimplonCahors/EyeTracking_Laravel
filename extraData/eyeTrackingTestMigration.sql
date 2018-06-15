-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 15 juin 2018 à 11:32
-- Version du serveur :  5.7.22-0ubuntu18.04.1
-- Version de PHP :  7.2.5-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eyeTrackingTestMigration`
--

-- --------------------------------------------------------

--
-- Structure de la table `areas`
--

CREATE TABLE `areas` (
  `area_id` int(10) UNSIGNED NOT NULL,
  `area_coord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_trigger` int(11) NOT NULL,
  `fk_board_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `boards`
--

CREATE TABLE `boards` (
  `board_id` int(10) UNSIGNED NOT NULL,
  `board_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_number` int(11) NOT NULL,
  `fk_comic_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `boards`
--

INSERT INTO `boards` (`board_id`, `board_image`, `board_number`, `fk_comic_id`, `created_at`, `updated_at`) VALUES
(1, '', 1, 3, NULL, NULL),
(2, '', 2, 3, NULL, NULL),
(3, '', 3, 3, NULL, NULL),
(4, '', 4, 3, NULL, NULL),
(5, '', 5, 3, NULL, NULL),
(6, '', 6, 3, NULL, NULL),
(7, '', 7, 3, NULL, NULL),
(8, '', 1, 4, NULL, NULL),
(9, '', 2, 4, NULL, NULL),
(10, '', 3, 4, NULL, NULL),
(11, '', 4, 4, NULL, NULL),
(12, '', 5, 4, NULL, NULL),
(13, '', 1, 5, NULL, NULL),
(14, '', 2, 5, NULL, NULL),
(15, '', 3, 5, NULL, NULL),
(16, '', 4, 5, NULL, NULL),
(17, '', 5, 5, NULL, NULL),
(18, '', 1, 1, NULL, NULL),
(19, '', 2, 1, NULL, NULL),
(20, '', 1, 2, NULL, NULL),
(21, '', 2, 2, NULL, NULL),
(22, '', 3, 2, NULL, NULL),
(23, '', 4, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `comics`
--

CREATE TABLE `comics` (
  `comic_id` int(10) UNSIGNED NOT NULL,
  `comic_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comic_author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comic_publisher` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comic_miniature_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comic_publication` tinyint(1) NOT NULL,
  `fk_user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comics`
--

INSERT INTO `comics` (`comic_id`, `comic_title`, `comic_author`, `comic_publisher`, `comic_miniature_url`, `comic_publication`, `fk_user_id`, `created_at`, `updated_at`) VALUES
(1, 'Les insectes en BD', 'Cazenove, Vodarzac & Cosby', 'Bamboo Édition', '', 1, 1, NULL, NULL),
(2, 'Zéphirin le presque justicier', 'Zéphirin & Morice', 'Hephez', '', 0, 5, NULL, NULL),
(3, 'Dans la combi de Thomas Pesquet', 'Marion Montaigne', 'Dargaud', '', 1, 3, NULL, NULL),
(4, 'l\'homme brouillé', 'Serge Lehman et Frederik Peeters', 'Delcourt ', '', 0, 3, NULL, NULL),
(5, 'la porte au ciel', 'Sicomoro', 'Galerie Napoleon ', '', 1, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE `medias` (
  `media_id` int(10) UNSIGNED NOT NULL,
  `media_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_area_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_06_100312_create_comics_table', 1),
(4, '2018_06_14_080328_create_areas_table', 1),
(5, '2018_06_14_080411_create_medias_table', 1),
(6, '2018_06_14_080437_create_boards_table', 1),
(7, '2018_06_14_080514_create_roles_table', 1),
(8, '2018_06_14_080616_create_user_roles_table', 1),
(9, '2018_06_14_194420_create_foreign_keys_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_rolename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`role_id`, `role_rolename`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'client', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Paul Auchon', 'paulauchon@gmail.com', '1234', NULL, NULL, NULL),
(2, 'Joe Bidjoba', 'joebidjoba@gmail.com', '1234', NULL, NULL, NULL),
(3, 'Gina Forka', 'ginaforka@gmail.com', '1234', NULL, NULL, NULL),
(4, 'Lara Pasternak', 'larapasternak@gmail.com', '1234', NULL, NULL, NULL),
(5, 'Joan Baez', 'joanbaez@gmail.com', '1234', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user_roles`
--

CREATE TABLE `user_roles` (
  `fk_role_id` int(10) UNSIGNED NOT NULL,
  `fk_user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_roles`
--

INSERT INTO `user_roles` (`fk_role_id`, `fk_user_id`) VALUES
(1, 3),
(1, 2),
(2, 5),
(2, 4),
(2, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `areas_fk_board_id_foreign` (`fk_board_id`);

--
-- Index pour la table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`board_id`),
  ADD KEY `boards_fk_comic_id_foreign` (`fk_comic_id`);

--
-- Index pour la table `comics`
--
ALTER TABLE `comics`
  ADD PRIMARY KEY (`comic_id`),
  ADD KEY `comics_fk_user_id_foreign` (`fk_user_id`);

--
-- Index pour la table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `medias_fk_area_id_foreign` (`fk_area_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD KEY `user_roles_fk_role_id_foreign` (`fk_role_id`),
  ADD KEY `user_roles_fk_user_id_foreign` (`fk_user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `areas`
--
ALTER TABLE `areas`
  MODIFY `area_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `boards`
--
ALTER TABLE `boards`
  MODIFY `board_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `comics`
--
ALTER TABLE `comics`
  MODIFY `comic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `media_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_fk_board_id_foreign` FOREIGN KEY (`fk_board_id`) REFERENCES `boards` (`board_id`);

--
-- Contraintes pour la table `boards`
--
ALTER TABLE `boards`
  ADD CONSTRAINT `boards_fk_comic_id_foreign` FOREIGN KEY (`fk_comic_id`) REFERENCES `comics` (`comic_id`);

--
-- Contraintes pour la table `comics`
--
ALTER TABLE `comics`
  ADD CONSTRAINT `comics_fk_user_id_foreign` FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `medias`
--
ALTER TABLE `medias`
  ADD CONSTRAINT `medias_fk_area_id_foreign` FOREIGN KEY (`fk_area_id`) REFERENCES `areas` (`area_id`);

--
-- Contraintes pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_fk_role_id_foreign` FOREIGN KEY (`fk_role_id`) REFERENCES `roles` (`role_id`),
  ADD CONSTRAINT `user_roles_fk_user_id_foreign` FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
