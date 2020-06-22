-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 22 Haz 2020, 16:31:49
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `electrician`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `history_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `history_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `abouts`
--

INSERT INTO `abouts` (`id`, `history_image`, `history_text`, `mission_image`, `mission_text`, `vision_image`, `vision_text`, `created_at`, `updated_at`) VALUES
(1, 'history-image.jpeg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.', 'mission-image.jpeg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s. It has survived not only five centuries Lorem Ipsum has been the industry\'s standard.', 'vision-image.jpeg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33.', NULL, '2020-06-22 08:35:21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_address_short` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_address_long` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_fax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_googleplus_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `contacts`
--

INSERT INTO `contacts` (`id`, `contact_text`, `contact_address_short`, `contact_address_long`, `contact_email`, `contact_phone`, `contact_fax`, `contact_facebook_link`, `contact_twitter_link`, `contact_instagram_link`, `contact_googleplus_link`, `contact_linkedin_link`, `created_at`, `updated_at`) VALUES
(1, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', '778-9383 Weirton IN', '778-9383 Suspendisse Av.Weirton IN 93479', 'electrician@gmail.com', '90444888444', '90444888666', 'http://facebook.com', 'http://twitter.com', 'http://instagram.com', 'http://googleplus.com', 'http://linkedin.com', NULL, '2020-06-20 10:42:09');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `generations`
--

CREATE TABLE `generations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `generation_origin` int(11) NOT NULL,
  `generation_caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generation_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `generation_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `generations`
--

INSERT INTO `generations` (`id`, `generation_origin`, `generation_caption`, `generation_text`, `generation_image`, `created_at`, `updated_at`) VALUES
(1, 1988, 'caption', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.', 'generation-image.jpg', NULL, '2020-06-22 09:01:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `helps`
--

CREATE TABLE `helps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `help_caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `help_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decide_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decide_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reach_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reach_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consult_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consult_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_service_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_service_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `helps`
--

INSERT INTO `helps` (`id`, `help_caption`, `help_keywords`, `decide_image`, `decide_text`, `reach_image`, `reach_text`, `consult_image`, `consult_text`, `get_service_image`, `get_service_text`, `created_at`, `updated_at`) VALUES
(1, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', 'Trustful, competent, thougtful', 'decide-image.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', 'reach-image.png', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.', 'consult-image.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.', 'get-service-image.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. The point of using Lorem Ipsum.', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_08_193126_create_slides_table', 1),
(5, '2020_03_08_193201_create_generations_table', 1),
(6, '2020_03_08_193351_create_team_table', 1),
(7, '2020_03_08_193414_create_help_table', 1),
(8, '2020_03_08_193443_create_services_table', 1),
(9, '2020_03_08_193506_create_references_table', 1),
(10, '2020_03_08_193526_create_about_table', 1),
(11, '2020_03_08_193537_create_contact_table', 1),
(12, '2020_03_08_193605_create_site_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `references`
--

CREATE TABLE `references` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reference_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `references`
--

INSERT INTO `references` (`id`, `reference_title`, `reference_image`, `reference_link`, `created_at`, `updated_at`) VALUES
(1, 'Toyota', 'toyota.png', 'http://toyota.com', '2020-06-20 10:31:30', '2020-06-20 10:31:30'),
(2, 'Mercedes', 'mercedes.jpeg', 'http://mercedes.com', '2020-06-20 10:31:51', '2020-06-20 10:33:20'),
(3, 'VolksWagen', 'volkswagen.jpeg', 'http://volkswagen.com', '2020-06-20 10:32:18', '2020-06-20 10:32:18'),
(4, 'Mitsubishi', 'mitsubishi.jpeg', 'http://mitsubishi.com', '2020-06-20 10:35:44', '2020-06-20 10:35:44'),
(5, 'BMW', 'bmw.png', 'http://bmw.com', '2020-06-20 10:36:03', '2020-06-20 10:36:03'),
(6, 'Volvo', 'volvo.png', 'http://volvo.com', '2020-06-20 10:36:23', '2020-06-20 10:36:23'),
(7, 'Lamborghini', 'lamborghini.png', 'http://lamborghini.com', '2020-06-20 10:37:31', '2020-06-20 10:37:31'),
(8, 'Mustang', 'mustang.jpeg', 'http://mustang.com', '2020-06-20 10:38:32', '2020-06-20 10:38:32'),
(9, 'Ferrari', 'ferrari.jpeg', 'http://ferrari.com', '2020-06-20 10:40:08', '2020-06-20 10:40:08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_importance` tinyint(1) NOT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_slug`, `service_description`, `service_text`, `service_importance`, `service_image`, `service_cover`, `created_at`, `updated_at`) VALUES
(1, 'Led Decoration', 'led-decoration', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece classical Latin literature from. Lorem Ipsum is not simply random text. It has roots in a piece of classical.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.', 1, 'led-decoration.jpeg', 'led-decoration-cover.jpeg', '2020-06-20 09:49:54', '2020-06-22 09:37:13'),
(2, 'Air Conditioner Design', 'air-conditioner-design', 'Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics. Extremes of Good and Evil.', 'The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident.', 1, 'air-conditioner-design.jpeg', 'air-conditioner-design-cover.jpeg', '2020-06-20 09:53:48', '2020-06-22 09:37:06'),
(3, 'Plug Change', 'plug-change', 'But also the leap into electronic typesetting, remaining essentially unchanged. leap into electronic typesetting, remaining into electronic typesetting, remaining essentially unchanged.', 'it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 0, 'plug-change.jpeg', 'plug-change-cover.jpeg', '2020-06-20 09:59:12', '2020-06-22 09:36:04'),
(4, 'Transformer Installation', 'transformer-installation', 'Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.', 1, 'transformer-installation.jpeg', 'transformer-installation-cover.jpeg', '2020-06-20 10:05:18', '2020-06-22 09:36:58'),
(5, 'Cable Installation', 'cable-installation', 'When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. scrambled it to make a type specimen book. It has survived.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.', 0, 'cable-installation.jpeg', 'cable-installation-cover.jpeg', '2020-06-20 10:07:47', '2020-06-22 09:32:54'),
(6, 'Chandelier Decoration', 'chandelier-decoration', 'Latin words, consectetur, from Lorem Ipsum passage, and going through the cites of the word. consectetur, Ipsum passage, and going through the cites of the word in classical literature.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. English versions from the 1914 translation by H. Rackham. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, 'chandelier-decoration.jpeg', 'chandelier-decoration-cover.jpeg', '2020-06-20 10:11:58', '2020-06-22 09:35:49');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sites`
--

CREATE TABLE `sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_year` int(11) NOT NULL,
  `site_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `references_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `references_caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sites`
--

INSERT INTO `sites` (`id`, `site_name`, `site_year`, `site_description`, `references_cover`, `about_cover`, `contact_cover`, `services_cover`, `references_caption`, `about_caption`, `contact_caption`, `services_caption`, `team_caption`, `created_at`, `updated_at`) VALUES
(1, 'Competent Electrician', 2020, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 'references-image.png', 'about-image.jpg', 'contact-cover.jpeg', 'services-cover.jpeg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', NULL, '2020-06-22 08:40:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide_caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `slides`
--

INSERT INTO `slides` (`id`, `slide_caption`, `slide_text`, `slide_image`, `created_at`, `updated_at`) VALUES
(1, '24 / 7 Service', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '24-7-service.jpeg', '2020-06-20 09:16:14', '2020-06-20 09:42:54'),
(2, 'Friendly Conversations', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'friendly-conversations.jpeg', '2020-06-20 09:18:52', '2020-06-20 09:18:52'),
(3, 'Competent Team', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', 'competent-team.jpeg', '2020-06-20 09:21:08', '2020-06-20 09:21:08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_mission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `teams`
--

INSERT INTO `teams` (`id`, `member_name`, `member_surname`, `member_mission`, `member_facebook`, `member_instagram`, `member_twitter`, `member_image`, `created_at`, `updated_at`) VALUES
(1, 'Michael', 'Old', 'Electrician', 'http://facebook.com', 'http://instagram.com', 'http://twitter.com', 'michael-old.jpeg', '2020-06-20 09:36:24', '2020-06-20 09:36:24'),
(2, 'David', 'Young', 'Electrician', 'http://facebook.com', 'http://instagram.com', 'http://twitter.com', 'david-young.jpeg', '2020-06-20 09:36:47', '2020-06-20 09:36:47'),
(3, 'Andrey', 'Young', 'Electrician', 'http://facebook.com', 'http://instagram.com', 'http://twitter.com', 'andrey-young.jpeg', '2020-06-20 09:37:26', '2020-06-20 09:37:26');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Mert', 'mert@electrician.com', NULL, '$2y$10$L4LoNVwu2A5YoMOpalH6GezKddZ/SWzjzCufsTmt2X4/4uZ5ViFbe', NULL, '2020-06-22 08:42:15', '2020-06-22 08:42:15');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `generations`
--
ALTER TABLE `generations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `references_reference_title_unique` (`reference_title`);

--
-- Tablo için indeksler `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_service_title_unique` (`service_title`),
  ADD UNIQUE KEY `services_service_slug_unique` (`service_slug`);

--
-- Tablo için indeksler `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slides_slide_caption_unique` (`slide_caption`);

--
-- Tablo için indeksler `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `generations`
--
ALTER TABLE `generations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `helps`
--
ALTER TABLE `helps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `references`
--
ALTER TABLE `references`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `sites`
--
ALTER TABLE `sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
