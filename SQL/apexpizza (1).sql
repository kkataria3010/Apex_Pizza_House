-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 08:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apexpizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartitems`
--

CREATE TABLE `cartitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Veg Pizza', '2021-05-21 00:42:17', '2021-05-21 00:43:26'),
(2, 'Non Veg Pizza', '2021-05-21 00:43:54', '2021-05-21 00:43:54'),
(3, 'Wrap', '2021-05-21 00:44:23', '2021-05-21 00:44:23'),
(4, 'Pasta', '2021-05-21 00:44:35', '2021-05-21 00:44:35'),
(5, 'Beverages', '2021-05-21 00:44:49', '2021-05-21 00:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `name`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Margherita', 120, 'Margherit.jpg', '2021-05-21 00:48:12', '2021-05-21 00:48:12'),
(2, 1, 'Double Cheese Margherita', 180, 'Double_Cheese_Margherita.jpg', '2021-05-21 00:51:25', '2021-05-21 00:51:25'),
(3, 1, 'Farmhouse', 180, 'Farmhouse.jpg', '2021-05-21 00:52:58', '2021-05-21 00:52:58'),
(4, 1, 'Deluxe Veggie', 220, 'Deluxe_Veggie.jpg', '2021-05-21 00:54:43', '2021-05-21 00:55:37'),
(5, 1, 'Mexican Green Wave', 220, 'Mexican_Green_Wave.jpg', '2021-05-21 00:57:14', '2021-05-21 00:57:14'),
(6, 1, 'Peppy Paneer', 250, 'Peppy_Paneer.jpg', '2021-05-21 00:58:09', '2021-05-21 00:58:09'),
(7, 2, 'Chicken Golden Delight', 200, 'Chicken_Golden_Delight.jpg', '2021-05-21 01:02:20', '2021-05-21 01:02:20'),
(8, 2, 'Dominator', 220, 'Dominator.jpg', '2021-05-21 01:03:11', '2021-05-21 01:03:59'),
(9, 2, 'Chicken Sausage', 220, 'Chicken_Sausage.jpg', '2021-05-21 01:05:14', '2021-05-21 01:05:14'),
(10, 2, 'Pepper Barbeque', 220, 'Pepper_Barbeque.jpg', '2021-05-21 01:06:34', '2021-05-21 01:06:34'),
(11, 2, 'Pepper Barbeque & Onion', 250, 'Pepper_Barbeque_&_Onion.jpg', '2021-05-21 01:07:55', '2021-05-21 01:07:55'),
(12, 2, 'Non-Veg Supreme', 300, 'Non-Veg_Supreme.jpg', '2021-05-21 01:09:31', '2021-05-21 01:09:31'),
(13, 3, 'Grilled Vegetable Wrap', 80, 'Grilled-Vegetable-Wrap.jpg', '2021-05-21 01:11:41', '2021-05-21 01:11:41'),
(14, 3, 'Italian Veg Pinwheels', 120, 'Italian-Veg-Pinwheels.jpg', '2021-05-21 01:12:48', '2021-05-21 01:12:48'),
(15, 3, 'Italian Chicken Wrap', 160, 'Italian-Chicken-Wrap.jpg', '2021-05-21 01:14:10', '2021-05-21 01:14:10'),
(16, 4, 'Italian Penne Pasta', 100, 'Italian_Penne_Pasta.jpg', '2021-05-21 01:20:47', '2021-05-21 01:20:47'),
(17, 4, 'Fettuccine Alfredo', 140, 'Fettuccine_Alfredo.jpg', '2021-05-21 01:21:55', '2021-05-21 01:21:55'),
(18, 4, 'Italian Herb Chicken Penne Pasta', 180, 'Italian_Herb_Chicken_Penne_Pasta.jpg', '2021-05-21 01:23:09', '2021-05-21 01:23:09'),
(19, 5, 'Coca Cola', 50, 'Coca_Cola.jpg', '2021-05-21 01:25:14', '2021-05-21 01:25:14'),
(20, 5, 'Fanta', 50, 'Fanta.jpg', '2021-05-21 01:25:58', '2021-05-21 01:25:58'),
(21, 5, 'Sprite', 50, 'Sprite.jpg', '2021-05-21 01:26:50', '2021-05-21 01:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_01_151435_create_categories_table', 1),
(5, '2020_12_01_151539_create_items_table', 1),
(6, '2020_12_01_151617_create_orders_table', 1),
(7, '2020_12_01_153832_create_orderitems_table', 1),
(8, '2020_12_03_031855_delete_ord_col_category', 1),
(9, '2020_12_03_033938_del_ord_col_items', 1),
(10, '2020_12_08_155029_create_cartitems_table', 1),
(11, '2020_12_09_065546_chane_price_type', 1),
(12, '2020_12_09_070801_changetype', 1),
(13, '2020_12_09_074316_add_order_status', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@apexpizza.in', '2021-05-21 07:13:54', '$2y$10$ovueBuxqWEn5zcP.9TBpg.ETtLEMALO21lDIEim4fCvE/SXu3eb/.', 'Apex Pizza House,Opp. 123 Bus Stand, Naroda, Ahmeadabad-328923', '7DC0YO8bP0WR0XlWu7ZtkKnG7b2wq0CixSyHkNHud2YRJQ0cGDIJZUUHjQ84', '2021-05-21 01:36:19', '2021-05-21 01:42:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cartitems_user_id_foreign` (`user_id`),
  ADD KEY `cartitems_item_id_foreign` (`item_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_category_id_foreign` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderitems_order_id_foreign` (`order_id`),
  ADD KEY `orderitems_item_id_foreign` (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartitems`
--
ALTER TABLE `cartitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD CONSTRAINT `cartitems_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `cartitems_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `orderitems_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
