-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 10 2020 г., 14:09
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `online_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `job_title`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jasur', 'jasur.uzb10@gmail.com', NULL, '$2y$10$aXNKKEyOz9Pup2AdAmCxm.KRIvaFb51XGGpmCc3rZdWm4PSK3siMm', NULL, NULL, '2020-05-08 02:15:06', '2020-05-08 02:15:06');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, '2020-05-08 02:02:59', '2020-05-08 02:02:59', 'Iphone'),
(2, '2020-05-08 02:03:00', '2020-05-08 02:03:00', 'Ipad'),
(3, '2020-05-08 02:03:00', '2020-05-08 02:03:00', 'IMac'),
(4, '2020-05-08 02:03:00', '2020-05-08 02:03:00', 'Macbook Pro'),
(5, '2020-05-08 02:03:00', '2020-05-08 02:03:00', 'Macbook Air'),
(6, '2020-05-08 02:03:00', '2020-05-08 02:03:00', 'IWatch'),
(7, '2020-05-08 02:03:00', '2020-05-08 02:03:00', 'AirPods');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone_number`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '1234567890', 'test contact us', 'Lorem Ipsum is simply dummy text of the printing and typesetting', '2020-05-08 14:09:55', '2020-05-08 14:09:55'),
(2, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting', '2020-05-08 14:11:02', '2020-05-08 14:11:02'),
(3, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test contact us', 'dadaaExpected response code 250 but got code \"530\", with message \"530 5.7.1 Authentication required\r\n \"', '2020-05-08 14:13:05', '2020-05-08 14:13:05'),
(4, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test contact us', 'r since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2020-05-08 14:14:26', '2020-05-08 14:14:26'),
(5, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test contact us', 'fssf', '2020-05-08 14:17:29', '2020-05-08 14:17:29'),
(6, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'tewf', '2020-05-08 14:19:43', '2020-05-08 14:19:43'),
(7, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test contact us', 'hgfh', '2020-05-09 01:16:57', '2020-05-09 01:16:57'),
(8, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'sf', '2020-05-09 01:30:15', '2020-05-09 01:30:15'),
(9, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'sf', '2020-05-09 01:30:25', '2020-05-09 01:30:25'),
(10, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'dgdg', '2020-05-09 01:32:30', '2020-05-09 01:32:30'),
(11, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'fs', 'sfs', '2020-05-09 01:44:26', '2020-05-09 01:44:26'),
(12, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'bcc', '2020-05-09 01:45:31', '2020-05-09 01:45:31'),
(13, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '343535', 'sf', 'cbcb', '2020-05-09 02:16:42', '2020-05-09 02:16:42'),
(14, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'da', 'zc', '2020-05-09 02:52:01', '2020-05-09 02:52:01'),
(15, 'Jasurkhon', 'visajo9191@oriwijn.com', '1234567890', 'dgdg', 'adadad', '2020-05-09 02:55:21', '2020-05-09 02:55:21'),
(16, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '1234567890', 'Test', 'dfs', '2020-05-09 03:02:54', '2020-05-09 03:02:54'),
(17, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '343535', 'da', ',,', '2020-05-09 03:08:41', '2020-05-09 03:08:41'),
(18, 'Jasurkhon', 'visajo9191@oriwijn.com', '343535', 'sf', 'jnmn', '2020-05-09 03:10:40', '2020-05-09 03:10:40'),
(19, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'sf', 'fsfs', '2020-05-09 09:49:20', '2020-05-09 09:49:20'),
(20, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'dgdg', '2020-05-09 15:10:04', '2020-05-09 15:10:04'),
(21, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'fsf', '2020-05-09 15:29:21', '2020-05-09 15:29:21'),
(22, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'ssvdvdbfb', '2020-05-09 15:41:37', '2020-05-09 15:41:37'),
(23, 'Jasurkhon', 'visajo9191@oriwijn.com', '+998934351706', 'da', 'adadada', '2020-05-09 15:45:51', '2020-05-09 15:45:51'),
(24, 'Jasurkhon', 'visajo9191@oriwijn.com', '+998934351706', 'da', 'adadada', '2020-05-09 15:50:26', '2020-05-09 15:50:26'),
(25, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'testing', '2020-05-09 15:53:46', '2020-05-09 15:53:46'),
(26, 'RYAN', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'fef', '2020-05-09 15:59:18', '2020-05-09 15:59:18'),
(27, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'dgd', '2020-05-09 16:08:50', '2020-05-09 16:08:50'),
(28, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'sfs', '2020-05-09 20:05:13', '2020-05-09 20:05:13'),
(29, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'sfs', '2020-05-09 20:07:59', '2020-05-09 20:07:59'),
(30, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'sfs', '2020-05-09 20:11:31', '2020-05-09 20:11:31'),
(31, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'cbc', 'cbcbc', '2020-05-09 20:15:37', '2020-05-09 20:15:37'),
(32, 'RYAN', 'visajo9191@oriwijn.com', '+998934351706', 'test', 'ere', '2020-05-09 20:36:49', '2020-05-09 20:36:49'),
(33, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'sfs', 'sfsfs', '2020-05-10 01:52:17', '2020-05-10 01:52:17'),
(34, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'sfsfs', 'sfsf', '2020-05-10 02:18:53', '2020-05-10 02:18:53'),
(35, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'sgdg', '2020-05-10 02:41:45', '2020-05-10 02:41:45'),
(36, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'sfsf', '2020-05-10 02:47:25', '2020-05-10 02:47:25'),
(37, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'dgdgd', '2020-05-10 02:50:40', '2020-05-10 02:50:40'),
(38, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'ada', 'adad', '2020-05-10 02:52:59', '2020-05-10 02:52:59'),
(39, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'gjg', 'dfg', '2020-05-10 03:00:17', '2020-05-10 03:00:17'),
(40, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'gjg', 'dfg', '2020-05-10 03:03:19', '2020-05-10 03:03:19'),
(41, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'gjg', 'dfg', '2020-05-10 03:03:24', '2020-05-10 03:03:24'),
(42, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'gjg', 'dfg', '2020-05-10 03:03:28', '2020-05-10 03:03:28'),
(43, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'dgd', 'dd', '2020-05-10 03:05:19', '2020-05-10 03:05:19'),
(44, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'dgd', 'dd', '2020-05-10 03:08:14', '2020-05-10 03:08:14'),
(45, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '1234567890', 'test', 'dfkhgddgdg', '2020-05-10 03:10:46', '2020-05-10 03:10:46'),
(46, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'fh', 'dhf', '2020-05-10 03:13:46', '2020-05-10 03:13:46'),
(47, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'fh', 'hbfhf', '2020-05-10 03:15:58', '2020-05-10 03:15:58'),
(48, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'wr', 'wrw', '2020-05-10 03:17:25', '2020-05-10 03:17:25'),
(49, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'ssfsf', '2020-05-10 03:19:00', '2020-05-10 03:19:00'),
(50, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'ssfsf', '2020-05-10 03:21:19', '2020-05-10 03:21:19'),
(51, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test contact us', 'gdgd', '2020-05-10 03:23:43', '2020-05-10 03:23:43'),
(52, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'ete', 'tete', '2020-05-10 03:25:27', '2020-05-10 03:25:27'),
(53, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'wrw', 'erww', '2020-05-10 03:33:14', '2020-05-10 03:33:14'),
(54, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'wrw', 'erww', '2020-05-10 03:38:12', '2020-05-10 03:38:12'),
(55, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'adas', '2020-05-10 03:39:59', '2020-05-10 03:39:59'),
(56, 'Jasurkhon', 'jasur.uzb10@gmail.com', '+998934351706', 'sfs', 'sfs', '2020-05-10 03:42:30', '2020-05-10 03:42:30'),
(57, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'khhk', '2020-05-10 03:43:49', '2020-05-10 03:43:49'),
(58, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'gddg', '2020-05-10 03:46:04', '2020-05-10 03:46:04'),
(59, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'dg', 'gdd', '2020-05-10 04:26:18', '2020-05-10 04:26:18'),
(60, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'sf', 'sfs', '2020-05-10 05:08:19', '2020-05-10 05:08:19'),
(61, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'test', 'lm,', '2020-05-10 05:48:02', '2020-05-10 05:48:02'),
(62, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', '+998934351706', 'sfs', 'fsfs', '2020-05-10 05:49:49', '2020-05-10 05:49:49');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
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
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_02_201220_create_admins_table', 1),
(5, '2020_05_03_131541_create_products_table', 1),
(6, '2020_05_06_082402_create_product_user_table', 1),
(7, '2020_05_07_074813_create_orders_table', 1),
(8, '2020_05_07_082206_create_contacts_table', 1),
(9, '2020_05_07_134946_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jasurkhonbakhramov@gmail.com', '$2y$10$PZG7ywmAmhBhbUBzN8EEkeS0SJpRPmCt3hlBKFvfnEZqUpoNHHkK6', '2020-05-09 09:14:34');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(19, 'jajhja', 'adadada', 500, '1589067092.apple-macbook-pro-15-inch-2017-14.webp', 6, '2020-05-09 18:31:32', '2020-05-09 18:31:32'),
(20, 'Iphone 8+', 'dgdgdd', 879, '1589070950.ipho4.png', 1, '2020-05-09 19:35:50', '2020-05-09 19:35:50'),
(21, 'Iphone 5', 'The iPhone 5 was Apple\'s flagship 10th anniversary iPhone featuring a 5.8-inch OLED display, facial recognition and 3D camera functionality, a glass body, and an A11 Bionic processor. Launched November 3, 2017, discontinued with the launch of the iPhone XR, XS, and XS Max.', 200, '1589100878.iphone e5.jpg', 1, '2020-05-10 03:54:38', '2020-05-10 03:54:38'),
(22, 'Iphone 4', 'The iPhone 4 was Apple\'s flagship 10th anniversary iPhone featuring a 5.8-inch OLED display, facial recognition and 3D camera functionality, a glass body, and an A11 Bionic processor. Launched November 3, 2017, discontinued with the launch of the iPhone XR, XS, and XS Max.', 90, '1589100898.ipho4.png', 1, '2020-05-10 03:54:58', '2020-05-10 03:54:58'),
(23, 'iphone X', 'The iPhone  X was Apple\'s flagship 10th anniversary iPhone featuring a 5.8-inch OLED display, facial recognition and 3D camera functionality, a glass body, and an A11 Bionic processor. Launched November 3, 2017, discontinued with the launch of the iPhone XR, XS, and XS Max.', 699, '1589100921.1.jpg', 1, '2020-05-10 03:55:21', '2020-05-10 03:55:21'),
(24, 'Iphone 6', 'The iPhone 6 was Apple\'s flagship 10th anniversary iPhone featuring a 5.8-inch OLED display, facial recognition and 3D camera functionality, a glass body, and an A11 Bionic processor. Launched November 3, 2017, discontinued with the launch of the iPhone XR, XS, and XS Max.', 500, '1589100936.iphone 6.jpg', 1, '2020-05-10 03:55:36', '2020-05-10 03:55:36'),
(25, 'iphone 7', 'The iPhone 7 was Apple\'s flagship 10th anniversary iPhone featuring a 5.8-inch OLED display, facial recognition and 3D camera functionality, a glass body, and an A11 Bionic processor. Launched November 3, 2017, discontinued with the launch of the iPhone XR, XS, and XS Max.', 555, '1589100965.iphone 7.jpg', 1, '2020-05-10 03:56:05', '2020-05-10 03:56:05'),
(26, 'Iphone 11 pro', 'The iPhone 11 pro was Apple\'s flagship 10th anniversary iPhone featuring a 5.8-inch OLED display, facial recognition and 3D camera functionality, a glass body, and an A11 Bionic processor. Launched November 3, 2017, discontinued with the launch of the iPhone XR, XS, and XS Max.', 1000, '1589100984.iphone_11.jpg', 1, '2020-05-10 03:56:24', '2020-05-10 03:56:24'),
(27, 'Ipad pro', 'The ipad pro  was Apple\'s flagship 10th anniversary iPhone featuring a 5.8-inch OLED display, facial recognition and 3D camera functionality, a glass body, and an A11 Bionic processor. Launched November 3, 2017, discontinued with the launch of the iPhone XR, XS, and XS Max.', 1000, '1589101352.ipad pro.jpg', 2, '2020-05-10 04:02:32', '2020-05-10 04:02:32'),
(28, 'Imac', 'The imac was Apple\'s flagship 10th anniversary iPhone featuring a 5.8-inch OLED display, facial recognition and 3D camera functionality, a glass body, and an A11 Bionic processor. Launched November 3, 2017, discontinued with the launch of the iPhone XR, XS, and XS Max.', 1000, '1589101421.imac-215-config-hero-201706_FMT_WHH.jpg', 1, '2020-05-10 04:03:41', '2020-05-10 04:03:41'),
(29, 'Imac', 'The imac was Apple\'s flagship 10th anniversary iPhone featuring a 5.8-inch OLED display, facial recognition and 3D camera functionality, a glass body, and an A11 Bionic processor. Launched November 3, 2017, discontinued with the launch of the iPhone XR, XS, and XS Max.', 1000, '1589101446.imac-215-config-hero-201706_FMT_WHH.jpg', 3, '2020-05-10 04:04:06', '2020-05-10 04:04:06'),
(30, 'Imac pro', 'The imac pro was Apple\'s flagship 10th anniversary iPhone featuring a 5.8-inch OLED display, facial recognition and 3D camera functionality, a glass body, and an A11 Bionic processor. Launched November 3, 2017, discontinued with the launch of the iPhone XR, XS, and XS Max.', 1200, '1589101468.imac_pro.jpg', 3, '2020-05-10 04:04:28', '2020-05-10 04:04:28'),
(31, 'Airpods 1', 'The airpods 1 was Apple\'s flagship 10th anniversary iPhone featuring a 5.8-inch OLED display, facial recognition and 3D camera functionality, a glass body, and an A11 Bionic processor. Launched November 3, 2017, discontinued with the launch of the iPhone XR, XS, and XS Max.', 699, '1589101496.airpods 1.jpg', 7, '2020-05-10 04:04:56', '2020-05-10 04:04:56'),
(32, 'Airpods 2', 'The airpods 2 Apple\'s flagship 10th anniversary iPhone featuring a 5.8-inch OLED display, facial recognition and 3D camera functionality, a glass body, and an A11 Bionic processor. Launched November 3, 2017, discontinued with the launch of the iPhone XR, XS, and XS Max.', 1000, '1589101526.airpods 2.jpg', 7, '2020-05-10 04:05:26', '2020-05-10 04:05:26');

-- --------------------------------------------------------

--
-- Структура таблицы `product_user`
--

CREATE TABLE `product_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
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
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jasurkhon', 'jasurkhonbakhramov@gmail.com', NULL, '$2y$10$y/ASCZibUuXiv/UHsgA1QePr1MPgiszI0P3QYcVutnD/wTbqQuk7W', NULL, '2020-05-08 02:25:39', '2020-05-08 02:25:39');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_user`
--
ALTER TABLE `product_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `product_user`
--
ALTER TABLE `product_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
