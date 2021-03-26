-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 26 mars 2021 à 15:47
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `base_contrôle_plats_cuisinés`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

CREATE TABLE `ingredients` (
  `id_ingredient` bigint(20) UNSIGNED NOT NULL,
  `libelle_ingredient` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ingredients`
--

INSERT INTO `ingredients` (`id_ingredient`, `libelle_ingredient`, `created_at`, `updated_at`) VALUES
(3, 'Sel', '2021-03-26 13:46:01', '2021-03-26 13:46:01');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_03_22_153859_ingredient', 1),
(6, '2021_03_22_153936_type_nourriture', 1),
(7, '2021_03_22_153937_type_plat', 1),
(8, '2021_03_22_153938_origine', 1),
(9, '2021_03_22_153952_plat', 1),
(10, '2021_03_22_153953_panier', 1),
(11, '2021_03_22_153955_plat_ingredient', 1);

-- --------------------------------------------------------

--
-- Structure de la table `origines`
--

CREATE TABLE `origines` (
  `id_origine` bigint(20) UNSIGNED NOT NULL,
  `libelle_origine` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `origines`
--

INSERT INTO `origines` (`id_origine`, `libelle_origine`, `created_at`, `updated_at`) VALUES
(13, 'Arabe', '2021-03-26 12:44:27', '2021-03-26 12:44:27'),
(14, 'Musulman', '2021-03-26 12:44:43', '2021-03-26 12:44:43');

-- --------------------------------------------------------

--
-- Structure de la table `paniers`
--

CREATE TABLE `paniers` (
  `id_personne` bigint(20) UNSIGNED NOT NULL,
  `id_plat` bigint(20) UNSIGNED NOT NULL,
  `quantite` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

CREATE TABLE `plats` (
  `id_plat` bigint(20) UNSIGNED NOT NULL,
  `id_origine` bigint(20) UNSIGNED NOT NULL,
  `id_type_plat` bigint(20) UNSIGNED NOT NULL,
  `id_type_nourriture` bigint(20) UNSIGNED NOT NULL,
  `prix` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `libelle_plat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `plats`
--

INSERT INTO `plats` (`id_plat`, `id_origine`, `id_type_plat`, `id_type_nourriture`, `prix`, `poids`, `libelle_plat`, `created_at`, `updated_at`) VALUES
(5, 13, 2, 2, 3, 3, 'Soupe', '2021-03-26 12:53:01', '2021-03-26 12:53:01'),
(6, 13, 2, 2, 3, 1, 'Chèvre', '2021-03-26 12:53:10', '2021-03-26 12:53:10');

-- --------------------------------------------------------

--
-- Structure de la table `plat_ingredients`
--

CREATE TABLE `plat_ingredients` (
  `id_plat` bigint(20) UNSIGNED NOT NULL,
  `id_ingredient` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `plat_ingredients`
--

INSERT INTO `plat_ingredients` (`id_plat`, `id_ingredient`, `created_at`, `updated_at`) VALUES
(5, 3, '2021-03-26 13:46:05', '2021-03-26 13:46:05');

-- --------------------------------------------------------

--
-- Structure de la table `type_nourritures`
--

CREATE TABLE `type_nourritures` (
  `id_type_nourriture` bigint(20) UNSIGNED NOT NULL,
  `libelle_type_nourriture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_nourritures`
--

INSERT INTO `type_nourritures` (`id_type_nourriture`, `libelle_type_nourriture`, `created_at`, `updated_at`) VALUES
(2, 'Vegan', '2021-03-26 12:22:01', '2021-03-26 12:22:01');

-- --------------------------------------------------------

--
-- Structure de la table `type_plats`
--

CREATE TABLE `type_plats` (
  `id_type_plat` bigint(20) UNSIGNED NOT NULL,
  `libelle_type_plat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_plats`
--

INSERT INTO `type_plats` (`id_type_plat`, `libelle_type_plat`, `created_at`, `updated_at`) VALUES
(2, 'Entrée', '2021-03-26 12:21:55', '2021-03-26 12:21:55');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Florentin', 'fpupiervalade@edenschool.fr', NULL, '$2y$10$xaRvHPI9KKsnSxJWYakQWeFxQIEwo8IiyfDZirm2LGcNlcVwcGkgm', NULL, NULL, 1, NULL, '2021-03-24 09:59:18', '2021-03-24 09:59:18');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id_ingredient`),
  ADD UNIQUE KEY `ingredients_libelle_ingredient_unique` (`libelle_ingredient`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `origines`
--
ALTER TABLE `origines`
  ADD PRIMARY KEY (`id_origine`),
  ADD UNIQUE KEY `origines_libelle_origine_unique` (`libelle_origine`);

--
-- Index pour la table `paniers`
--
ALTER TABLE `paniers`
  ADD KEY `paniers_id_personne_foreign` (`id_personne`),
  ADD KEY `paniers_id_plat_foreign` (`id_plat`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `plats`
--
ALTER TABLE `plats`
  ADD PRIMARY KEY (`id_plat`),
  ADD UNIQUE KEY `plats_libelle_plat_unique` (`libelle_plat`),
  ADD KEY `plats_id_origine_foreign` (`id_origine`),
  ADD KEY `plats_id_type_plat_foreign` (`id_type_plat`),
  ADD KEY `plats_id_type_nourriture_foreign` (`id_type_nourriture`);

--
-- Index pour la table `plat_ingredients`
--
ALTER TABLE `plat_ingredients`
  ADD KEY `plat_ingredients_id_plat_foreign` (`id_plat`),
  ADD KEY `plat_ingredients_id_ingredient_foreign` (`id_ingredient`);

--
-- Index pour la table `type_nourritures`
--
ALTER TABLE `type_nourritures`
  ADD PRIMARY KEY (`id_type_nourriture`),
  ADD UNIQUE KEY `type_nourritures_libelle_type_nourriture_unique` (`libelle_type_nourriture`);

--
-- Index pour la table `type_plats`
--
ALTER TABLE `type_plats`
  ADD PRIMARY KEY (`id_type_plat`),
  ADD UNIQUE KEY `type_plats_libelle_type_plat_unique` (`libelle_type_plat`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id_ingredient` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `origines`
--
ALTER TABLE `origines`
  MODIFY `id_origine` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `plats`
--
ALTER TABLE `plats`
  MODIFY `id_plat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type_nourritures`
--
ALTER TABLE `type_nourritures`
  MODIFY `id_type_nourriture` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `type_plats`
--
ALTER TABLE `type_plats`
  MODIFY `id_type_plat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `paniers`
--
ALTER TABLE `paniers`
  ADD CONSTRAINT `paniers_id_personne_foreign` FOREIGN KEY (`id_personne`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paniers_id_plat_foreign` FOREIGN KEY (`id_plat`) REFERENCES `plats` (`id_plat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `plats`
--
ALTER TABLE `plats`
  ADD CONSTRAINT `plats_id_origine_foreign` FOREIGN KEY (`id_origine`) REFERENCES `origines` (`id_origine`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plats_id_type_nourriture_foreign` FOREIGN KEY (`id_type_nourriture`) REFERENCES `type_nourritures` (`id_type_nourriture`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plats_id_type_plat_foreign` FOREIGN KEY (`id_type_plat`) REFERENCES `type_plats` (`id_type_plat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `plat_ingredients`
--
ALTER TABLE `plat_ingredients`
  ADD CONSTRAINT `plat_ingredients_id_ingredient_foreign` FOREIGN KEY (`id_ingredient`) REFERENCES `ingredients` (`id_ingredient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plat_ingredients_id_plat_foreign` FOREIGN KEY (`id_plat`) REFERENCES `plats` (`id_plat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
