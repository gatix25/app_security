-- --------------------------------------------------------
-- Hostitel:                     127.0.0.1
-- Verze serveru:                8.0.30 - MySQL Community Server - GPL
-- OS serveru:                   Win64
-- HeidiSQL Verze:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Exportování struktury databáze pro
CREATE DATABASE IF NOT EXISTS `my_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `my_db`;

-- Exportování struktury pro tabulka my_db.logins
CREATE TABLE IF NOT EXISTS `logins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportování dat pro tabulku my_db.logins: ~42 rows (přibližně)
/*!40000 ALTER TABLE `logins` DISABLE KEYS */;
INSERT INTO `logins` (`id`, `email`, `created_at`, `updated_at`, `type`, `ip`) VALUES
	(1, 'blahakarel@email.cz', '2024-07-20 11:05:01', '2024-07-20 11:05:01', 'login', NULL),
	(2, 'blahakarel@email.cz', '2024-07-20 11:12:19', '2024-07-20 11:12:19', 'login', NULL),
	(3, 'blahakarel@email.cz', '2024-07-20 11:22:16', '2024-07-20 11:22:16', 'logout', NULL),
	(4, 'blahakarel@email.cz', '2024-07-20 11:22:20', '2024-07-20 11:22:20', 'login', NULL),
	(5, 'blahakarel@email.cz', '2024-07-20 11:22:48', '2024-07-20 11:22:48', 'logout', NULL),
	(6, 'blahakarel@email.cz', '2024-07-20 11:22:51', '2024-07-20 11:22:51', 'login', NULL),
	(7, 'blahakarel@email.cz', '2024-07-20 11:27:33', '2024-07-20 11:27:33', 'logout', NULL),
	(8, 'blahakarel@email.cz', '2024-07-20 11:27:37', '2024-07-20 11:27:37', 'login', NULL),
	(9, 'blahakarel@email.cz', '2024-07-20 11:28:42', '2024-07-20 11:28:42', 'login', NULL),
	(10, 'blahakarel@email.cz', '2024-07-20 11:30:04', '2024-07-20 11:30:04', 'login', NULL),
	(11, 'blahakarel@email.cz', '2024-07-20 11:35:02', '2024-07-20 11:35:02', 'logout', NULL),
	(12, 'blahakarel@email.cz', '2024-07-20 11:35:37', '2024-07-20 11:35:37', 'login', NULL),
	(13, 'blahakarel@email.cz', '2024-07-20 11:37:12', '2024-07-20 11:37:12', 'logout', NULL),
	(14, 'blahakarel@email.cz', '2024-07-20 11:37:30', '2024-07-20 11:37:30', 'login', NULL),
	(15, 'blahakarel@email.cz', '2024-07-20 11:37:48', '2024-07-20 11:37:48', 'logout', NULL),
	(16, 'blahakarel@email.cz', '2024-07-20 13:10:06', '2024-07-20 13:10:06', 'login', NULL),
	(17, 'blahakarel@email.cz', '2024-07-20 13:13:15', '2024-07-20 13:13:15', 'logout', NULL),
	(18, 'blahakarel@email.cz', '2024-07-20 13:29:45', '2024-07-20 13:29:45', 'login', NULL),
	(19, 'blahakarel@email.cz', '2024-07-20 14:10:45', '2024-07-20 14:10:45', 'login', NULL),
	(20, 'blahakarel@email.cz', '2024-07-20 14:41:40', '2024-07-20 14:41:40', 'login', NULL),
	(21, 'blahakarel@email.cz', '2024-07-20 15:03:19', '2024-07-20 15:03:19', 'logout', NULL),
	(22, 'blahakarel@email.cz', '2024-07-20 15:03:22', '2024-07-20 15:03:22', 'login', NULL),
	(23, 'blahakarel@email.cz', '2024-07-20 15:03:41', '2024-07-20 15:03:41', 'logout', NULL),
	(24, 'blahakarel@email.cz', '2024-07-20 15:03:55', '2024-07-20 15:03:55', 'login', NULL),
	(25, 'blahakarel@email.cz', '2024-07-20 19:26:09', '2024-07-20 19:26:09', 'login', NULL),
	(26, 'blahakarel@email.cz', '2024-07-20 19:26:28', '2024-07-20 19:26:28', 'login', NULL),
	(27, 'blahakarel@email.cz', '2024-07-20 19:27:36', '2024-07-20 19:27:36', 'logout', NULL),
	(28, 'blahakarel@email.cz', '2024-07-20 19:27:57', '2024-07-20 19:27:57', 'login', NULL),
	(29, 'blahakarel@email.cz', '2024-07-20 19:37:04', '2024-07-20 19:37:04', 'login', NULL),
	(30, 'blahakarel@email.cz', '2024-07-20 20:06:48', '2024-07-20 20:06:48', 'login', NULL),
	(31, 'blahakarel@email.cz', '2024-07-20 20:09:01', '2024-07-20 20:09:01', 'login', NULL),
	(32, 'blahakarel@email.cz', '2024-07-20 20:19:21', '2024-07-20 20:19:21', 'login', NULL),
	(33, 'blahakarel@email.cz', '2024-07-20 20:20:55', '2024-07-20 20:20:55', 'logout', NULL),
	(34, 'blahakarel@email.cz', '2024-07-20 20:29:52', '2024-07-20 20:29:52', 'login', NULL),
	(35, 'blahakarel@email.cz', '2024-07-20 20:37:13', '2024-07-20 20:37:13', 'login', NULL),
	(36, 'blahakarel@email.cz', '2024-07-20 20:37:56', '2024-07-20 20:37:56', 'login', NULL),
	(37, 'blahakarel@email.cz', '2024-07-20 20:40:16', '2024-07-20 20:40:16', 'login', NULL),
	(38, 'blahakarel@email.cz', '2024-07-20 20:40:55', '2024-07-20 20:40:55', 'logout', NULL),
	(39, 'michalkovajana@email.cz', '2024-07-20 20:41:06', '2024-07-20 20:41:06', 'login', NULL),
	(40, 'michalkovajana@email.cz', '2024-07-20 20:45:46', '2024-07-20 20:45:46', 'logout', NULL),
	(41, 'michalkovajana@email.cz', '2024-07-20 20:45:55', '2024-07-20 20:45:55', 'login', NULL),
	(42, 'michalkovajana@email.cz', '2024-07-20 20:46:24', '2024-07-20 20:46:24', 'logout', NULL),
	(43, 'michalkovajana@email.cz', '2024-07-21 10:18:10', '2024-07-21 10:18:10', 'login', NULL),
	(44, 'michalkovajana@email.cz', '2024-07-22 13:26:04', '2024-07-22 13:26:04', 'login', NULL),
	(45, 'michalkovajana@email.cz', '2024-07-22 13:28:12', '2024-07-22 13:28:12', 'logout', NULL),
	(46, 'cernaeva@email.cz', '2024-07-22 14:22:16', '2024-07-22 14:22:16', 'login', NULL),
	(47, 'cernaeva@email.cz', '2024-07-22 14:24:16', '2024-07-22 14:24:16', 'logout', NULL),
	(48, 'cernaeva@email.cz', '2024-07-22 14:24:19', '2024-07-22 14:24:19', 'login', '127.0.0.1'),
	(49, 'cernaeva@email.cz', '2024-07-22 14:38:23', '2024-07-22 14:38:23', 'logout', NULL),
	(50, 'cernaeva@email.cz', '2024-07-22 14:38:30', '2024-07-22 14:38:30', 'login', '127.0.0.1'),
	(51, 'cernaeva@email.cz', '2024-07-22 14:38:33', '2024-07-22 14:38:33', 'logout', NULL),
	(52, 'dlouhykamil@email.cz', '2024-07-22 14:55:41', '2024-07-22 14:55:41', 'login', '127.0.0.1'),
	(53, 'dlouhykamil@email.cz', '2024-07-22 15:28:55', '2024-07-22 15:28:55', 'login', '127.0.0.1'),
	(54, 'dlouhykamil@email.cz', '2024-07-22 15:36:10', '2024-07-22 15:36:10', 'login', '127.0.0.1'),
	(55, 'dlouhykamil@email.cz', '2024-07-22 18:42:33', '2024-07-22 18:42:33', 'login', '127.0.0.1'),
	(56, 'dlouhykamil@email.cz', '2024-07-22 18:48:35', '2024-07-22 18:48:35', 'login', '127.0.0.1'),
	(57, 'dlouhykamil@email.cz', '2024-07-22 18:52:57', '2024-07-22 18:52:57', 'login', '127.0.0.1'),
	(58, 'dlouhykamil@email.cz', '2024-07-22 19:03:41', '2024-07-22 19:03:41', 'login', '127.0.0.1'),
	(59, 'dlouhykamil@email.cz', '2024-07-22 19:05:15', '2024-07-22 19:05:15', 'login', '127.0.0.1'),
	(60, 'dlouhykamil@email.cz', '2024-07-22 19:20:06', '2024-07-22 19:20:06', 'login', '127.0.0.1'),
	(61, 'dlouhykamil@email.cz', '2024-07-22 19:41:23', '2024-07-22 19:41:23', 'logout', NULL),
	(62, 'dlouhykamil@email.cz', '2024-07-22 19:41:27', '2024-07-22 19:41:27', 'login', '127.0.0.1'),
	(63, 'dlouhykamil@email.cz', '2024-07-22 19:47:50', '2024-07-22 19:47:50', 'login', '127.0.0.1'),
	(64, 'dlouhykamil@email.cz', '2024-07-22 20:10:25', '2024-07-22 20:10:25', 'logout', NULL),
	(65, 'dlouhykamil@email.cz', '2024-07-22 20:10:37', '2024-07-22 20:10:37', 'login', '127.0.0.1'),
	(66, 'dlouhykamil@email.cz', '2024-07-22 20:12:13', '2024-07-22 20:12:13', 'logout', NULL),
	(67, 'dlouhykamil@email.cz', '2024-07-22 20:12:17', '2024-07-22 20:12:17', 'login', '127.0.0.1'),
	(68, 'dlouhykamil@email.cz', '2024-07-22 20:20:33', '2024-07-22 20:20:33', 'logout', NULL),
	(69, 'dlouhykamil@email.cz', '2024-07-22 20:22:38', '2024-07-22 20:22:38', 'login', '127.0.0.1'),
	(70, 'dlouhykamil@email.cz', '2024-07-22 20:23:30', '2024-07-22 20:23:30', 'logout', NULL),
	(71, 'dlouhykamil@email.cz', '2024-07-22 20:23:49', '2024-07-22 20:23:49', 'login', '127.0.0.1'),
	(72, 'dlouhykamil@email.cz', '2024-07-22 20:23:52', '2024-07-22 20:23:52', 'logout', NULL),
	(73, 'dlouhykamil@email.cz', '2024-07-22 20:24:57', '2024-07-22 20:24:57', 'login', '127.0.0.1'),
	(74, 'dlouhykamil@email.cz', '2024-07-22 20:25:41', '2024-07-22 20:25:41', 'logout', NULL),
	(75, 'dlouhykamil@email.cz', '2024-07-22 20:33:46', '2024-07-22 20:33:46', 'login', '127.0.0.1'),
	(76, 'dlouhykamil@email.cz', '2024-07-22 20:34:53', '2024-07-22 20:34:53', 'logout', NULL),
	(77, 'dlouhykamil@email.cz', '2024-07-22 20:41:32', '2024-07-22 20:41:32', 'login', '127.0.0.1'),
	(78, 'dlouhykamil@email.cz', '2024-07-22 20:41:38', '2024-07-22 20:41:38', 'logout', NULL),
	(79, 'dlouhykamil@email.cz', '2024-07-22 20:49:53', '2024-07-22 20:49:53', 'login', '127.0.0.1'),
	(80, 'dlouhykamil@email.cz', '2024-07-22 20:52:35', '2024-07-22 20:52:35', 'logout', NULL),
	(81, 'dlouhykamil@email.cz', '2024-07-22 20:53:00', '2024-07-22 20:53:00', 'login', '127.0.0.1'),
	(82, 'sovaales@email.cz', '2024-07-22 20:54:32', '2024-07-22 20:54:32', 'login', '127.0.0.1'),
	(83, 'sovaales@email.cz', '2024-07-22 20:54:43', '2024-07-22 20:54:43', 'logout', NULL),
	(84, 'sovaales@email.cz', '2024-07-22 20:54:50', '2024-07-22 20:54:50', 'login', '127.0.0.1'),
	(85, 'sovaales@email.cz', '2024-07-22 20:54:56', '2024-07-22 20:54:56', 'logout', NULL);
/*!40000 ALTER TABLE `logins` ENABLE KEYS */;

-- Exportování struktury pro tabulka my_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportování dat pro tabulku my_db.migrations: ~10 rows (přibližně)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_07_19_110627_create_logins_table', 2),
	(7, '2024_07_19_115959_add_name_to_users_table', 3),
	(9, '2024_07_19_142838_remove_name_from_users_table', 4),
	(10, '2024_07_20_085207_add_last_login_to_users_table', 5),
	(11, '2024_07_20_105049_add_type_to_logins_table', 6),
	(12, '2024_07_20_110303_remove_password_from_logins', 7),
	(14, '2024_07_22_133906_add_ip_to_users_table', 8),
	(15, '2024_07_22_141827_add_ip_to_logins_table', 9),
	(17, '2024_07_22_152006_remove_email_verified_at_and_remember_token_from_users_table', 10);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Exportování struktury pro tabulka my_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportování dat pro tabulku my_db.users: ~3 rows (přibližně)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`, `ip`) VALUES
	(1, 'blahakarel@email.cz', '$2y$12$ThCymwxdjhuYl5RBKnvJOuZHRAk/torobQTt47q3pTe8YWIPSzTz6', '2024-07-19 12:09:09', '2024-07-19 12:09:09', NULL),
	(2, 'tesarjiri@email.cz', '$2y$12$4QDm2sqjzQHpwDdImY1QUOflDbAZYi93r2MgFT/575CfWq.Sr5rgK', '2024-07-19 15:51:32', '2024-07-19 15:51:32', NULL),
	(3, 'sovaales@email.cz', '$2y$12$RsalqoeAvr8alykPIR0k3uinzX9QCZXvYYPdpexXWZph87aNK5L/e', '2024-07-19 15:53:09', '2024-07-19 15:53:09', NULL),
	(4, 'michalkovajana@email.cz', '$2y$12$Ta6B1VtpqSL8iTOG6iYdMOL4gDLvHfWKF49rXLOs.NN2FgXHCxBOu', '2024-07-19 20:57:04', '2024-07-19 20:57:04', NULL),
	(5, 'test@example.com', '$2y$12$Te30rd0b55ylOPoEYreOfe4c.LGVp0AEjjKaWEPyhXJwMn1JqjTZK', '2024-07-20 09:04:22', '2024-07-20 09:04:22', NULL),
	(6, 'cernaeva@email.cz', '$2y$12$0k3tNQrGYeitwDVov1ZsB.osXnIpHZ4.ck9.r/HgweR.Lfv.fd./S', '2024-07-22 13:51:05', '2024-07-22 13:51:05', NULL),
	(7, 'skacelpetr@email.cz', '$2y$12$8sO3VFHZ2A7zs0itib0iP.nWZayKnpIu/nW//2alhoqQ/ECVUIM/C', '2024-07-22 14:01:39', '2024-07-22 14:01:39', '127.0.0.1'),
	(8, 'dlouhykamil@email.cz', '$2y$12$a5HkseB3RxBNQUNDjn5.8O8/5pQqIE3I8hiT.OkKoyvQq2Z6w7QFq', '2024-07-22 14:55:26', '2024-07-22 14:55:26', '127.0.0.1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
