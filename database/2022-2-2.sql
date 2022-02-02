-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.5.10-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table php_shop.admin_setting
CREATE TABLE IF NOT EXISTS `admin_setting` (
  `directory` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.admin_setting: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin_setting` DISABLE KEYS */;
INSERT INTO `admin_setting` (`directory`) VALUES
	('admin');
/*!40000 ALTER TABLE `admin_setting` ENABLE KEYS */;

-- Dumping structure for table php_shop.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.brands: ~7 rows (approximately)
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
	(8, 'samsung', 'public/uploads/brands/AYxIHjAcXoOUApRFsqyVpmRBjhhITmEGaGBLDYPuY.png', '2021-12-30 09:34:35', '2021-12-30 10:05:44'),
	(9, 'lg', 'public/uploads/brands/hmtCntiJBQLKOqTPFfCGSwGQrDuqufzfitSsRhUze.png', '2021-12-30 09:35:59', '2021-12-30 10:10:02'),
	(11, 'lenovo', 'public/uploads/brands/HLTAoVwJtsHRgIqHyjiGiefgRNIuWSjQphsCChHXr.png', '2021-12-31 06:26:43', '2022-01-01 02:26:34'),
	(14, 'nvidia', 'public/uploads/brands/KfonHygvAiVnIJPgqfDTtLFiFhroTxMcveVGCrxBq.png', '2022-01-03 06:22:16', '2022-01-03 06:24:17'),
	(15, 'huawei', 'public/uploads/brands/uFESibNYzTLQxUGjDeiozFThUkGSuoWdlZwGLhSrr.png', '2022-01-04 12:30:28', '2022-01-04 12:30:28'),
	(16, 'ایزی دو', 'public/uploads/brands/izFetbsiijBmovpwtgimadQjiIQUIHodGGMvWfQNz.png', '2022-01-04 02:09:56', '2022-01-04 02:09:56'),
	(17, 'گیگیابایت', 'public/uploads/brands/XkRwRuAfXECnrSMCJBmmsVdWWoOHwCQwayAvGymRG.png', '2022-01-16 10:21:36', '2022-01-16 10:21:36');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;

-- Dumping structure for table php_shop.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.categories: ~9 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `category_id`, `title`, `created_at`, `updated_at`) VALUES
	(8, NULL, 'کالای دیجیتال', '2022-01-02 10:40:40', '2022-01-15 10:38:44'),
	(9, 8, 'گوشی موبایل', '2022-01-02 10:41:03', '2022-01-15 04:59:53'),
	(10, 9, ' سامسونگ', '2022-01-02 10:41:21', '2022-01-19 07:44:44'),
	(12, 8, 'لوازم جانبی گوشی', '2022-01-03 12:42:58', '2022-01-03 12:42:58'),
	(13, 9, 'هواوی', '2022-01-03 01:22:35', '2022-01-03 01:22:35'),
	(14, NULL, 'مد و پوشاک', '2022-01-04 02:05:32', '2022-01-04 02:05:32'),
	(15, 14, 'لباس مردانه', '2022-01-04 02:06:03', '2022-01-04 02:06:03'),
	(16, 15, 'پیراهن', '2022-01-04 02:06:23', '2022-01-04 02:06:23'),
	(37, 8, 'لب تاپ', '2022-01-16 10:18:48', '2022-01-16 10:18:48'),
	(38, 37, 'لپ تاپ و الترابوک', '2022-01-16 10:19:38', '2022-01-16 10:19:38');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table php_shop.category_property_group
CREATE TABLE IF NOT EXISTS `category_property_group` (
  `property_group_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  KEY `category_id` (`category_id`),
  KEY `property_group` (`property_group_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.category_property_group: ~4 rows (approximately)
/*!40000 ALTER TABLE `category_property_group` DISABLE KEYS */;
INSERT INTO `category_property_group` (`property_group_id`, `category_id`) VALUES
	(1, 8),
	(3, 8),
	(1, 38),
	(3, 38);
/*!40000 ALTER TABLE `category_property_group` ENABLE KEYS */;

-- Dumping structure for table php_shop.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `content` text COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.comments: ~2 rows (approximately)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `product_id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
	(6, 3, 23, 'ddddd', '2022-01-23 04:22:53', '2022-01-23 04:22:53'),
	(9, 6, 23, 'سلام', '2022-01-29 11:11:15', '2022-01-29 11:11:15');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table php_shop.discounts
CREATE TABLE IF NOT EXISTS `discounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(11) NOT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `discounts_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.discounts: ~0 rows (approximately)
/*!40000 ALTER TABLE `discounts` DISABLE KEYS */;
INSERT INTO `discounts` (`id`, `product_id`, `value`, `created_at`, `updated_at`) VALUES
	(10, 6, 50, '2022-01-22 01:08:12', '2022-01-22 01:08:12');
/*!40000 ALTER TABLE `discounts` ENABLE KEYS */;

-- Dumping structure for table php_shop.likes
CREATE TABLE IF NOT EXISTS `likes` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.likes: ~8 rows (approximately)
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
INSERT INTO `likes` (`user_id`, `product_id`) VALUES
	(25, 6),
	(25, 5),
	(25, 3),
	(25, 1),
	(25, 4),
	(23, 6),
	(23, 5),
	(23, 4);
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;

-- Dumping structure for table php_shop.offers
CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) NOT NULL,
  `code` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `starts_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.offers: ~0 rows (approximately)
/*!40000 ALTER TABLE `offers` DISABLE KEYS */;
/*!40000 ALTER TABLE `offers` ENABLE KEYS */;

-- Dumping structure for table php_shop.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` bigint(20) NOT NULL,
  `address` text COLLATE utf8_persian_ci NOT NULL,
  `transaction_id` bigint(20) DEFAULT NULL,
  `payment_status` varchar(50) COLLATE utf8_persian_ci NOT NULL DEFAULT 'unknown',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `random` int(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.orders: ~15 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `amount`, `address`, `transaction_id`, `payment_status`, `created_at`, `updated_at`, `random`) VALUES
	(28, 46449000, 'aaaaaaaaaaaaa', 748270, 'OK', '2022-01-24 11:03:45', '2022-01-24 11:03:45', 508532980),
	(29, 46449000, 'ssssssssssssssssssssssssssssssssssssssssssssssssssssss', 748281, 'OK', '2022-01-24 11:22:31', '2022-01-24 11:22:31', 540780737),
	(30, 262449000, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 748282, 'OK', '2022-01-24 11:28:19', '2022-01-24 11:28:19', 55770998),
	(31, 262449000, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 748284, 'OK', '2022-01-24 11:31:55', '2022-01-24 11:31:55', 376141325),
	(32, 262449000, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 748285, 'OK', '2022-01-24 11:32:57', '2022-01-24 11:32:57', 276428799),
	(33, 55463000, 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 748286, 'NOK', '2022-01-24 11:33:21', '2022-01-24 11:33:21', 845427822),
	(34, 36000000, 'تهران خیابان تهران', 749454, 'unknown', '2022-01-26 11:41:33', '2022-01-26 11:41:33', 700320953),
	(35, 52339000, 'تهران خیابان تهران', 749457, 'OK', '2022-01-26 11:42:59', '2022-01-26 11:42:59', 407900547),
	(36, 61750000, 'test', 752215, 'NOK', '2022-01-29 11:08:13', '2022-01-29 11:08:13', 357509005),
	(37, 36000000, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 752984, 'OK', '2022-01-30 06:39:00', '2022-01-30 06:39:00', 130103810),
	(38, 46449000, 'a', 754712, 'OK', '2022-02-01 06:58:38', '2022-02-01 06:58:38', 970470791),
	(39, 41890000, 'تهران', 754905, 'OK', '2022-02-01 11:18:22', '2022-02-01 11:18:22', 158379406),
	(40, 108000000, 'aaaa', 755012, 'OK', '2022-02-02 01:41:09', '2022-02-02 01:41:09', 292258959),
	(41, 10449000, 'a', 755055, 'OK', '2022-02-02 02:16:02', '2022-02-02 02:16:02', 365361315),
	(42, 5890000, 'nnn', 755059, 'OK', '2022-02-02 02:19:40', '2022-02-02 02:19:40', 956990842);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table php_shop.order_details
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `order_id` bigint(20) unsigned NOT NULL,
  `unit_amount` bigint(20) unsigned NOT NULL,
  `total_amount` bigint(20) unsigned NOT NULL,
  `status` varchar(50) COLLATE utf8_persian_ci NOT NULL DEFAULT 'unknown',
  `cost` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.order_details: ~28 rows (approximately)
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` (`id`, `user_id`, `product_id`, `order_id`, `unit_amount`, `total_amount`, `status`, `cost`, `created_at`, `updated_at`) VALUES
	(9, 23, 6, 28, 36000000, 36000000, 'send', 1, '2022-01-24 11:03:45', '2022-01-24 11:03:45'),
	(10, 23, 5, 28, 10449000, 10449000, 'send', 1, '2022-01-24 11:03:45', '2022-01-24 11:03:45'),
	(11, 23, 6, 29, 36000000, 36000000, 'send', 1, '2022-01-24 11:22:31', '2022-01-24 11:22:31'),
	(12, 23, 5, 29, 10449000, 10449000, 'send', 1, '2022-01-24 11:22:31', '2022-01-24 11:22:31'),
	(13, 23, 6, 30, 36000000, 252000000, 'send', 7, '2022-01-24 11:28:20', '2022-01-24 11:28:20'),
	(14, 23, 5, 30, 10449000, 10449000, 'send', 1, '2022-01-24 11:28:20', '2022-01-24 11:28:20'),
	(15, 23, 6, 31, 36000000, 252000000, 'send', 7, '2022-01-24 11:31:55', '2022-01-24 11:31:55'),
	(16, 23, 5, 31, 10449000, 10449000, 'send', 1, '2022-01-24 11:31:55', '2022-01-24 11:31:55'),
	(17, 23, 6, 32, 36000000, 252000000, 'send', 7, '2022-01-24 11:32:57', '2022-01-24 11:32:57'),
	(18, 23, 5, 32, 10449000, 10449000, 'send', 1, '2022-01-24 11:32:57', '2022-01-24 11:32:57'),
	(19, 23, 3, 33, 5890000, 5890000, 'NOK', 1, '2022-01-24 11:33:21', '2022-01-24 11:33:21'),
	(20, 23, 5, 33, 10449000, 10449000, 'NOK', 1, '2022-01-24 11:33:21', '2022-01-24 11:33:21'),
	(21, 23, 6, 33, 36000000, 36000000, 'NOK', 1, '2022-01-24 11:33:21', '2022-01-24 11:33:21'),
	(22, 23, 7, 33, 3124000, 3124000, 'NOK', 1, '2022-01-24 11:33:21', '2022-01-24 11:33:21'),
	(23, 23, 6, 34, 36000000, 36000000, 'unknown', 1, '2022-01-26 11:41:33', '2022-01-26 11:41:33'),
	(24, 23, 5, 35, 10449000, 10449000, 'send', 1, '2022-01-26 11:42:59', '2022-01-26 11:42:59'),
	(25, 23, 3, 35, 5890000, 5890000, 'send', 1, '2022-01-26 11:42:59', '2022-01-26 11:42:59'),
	(26, 23, 6, 35, 36000000, 36000000, 'send', 1, '2022-01-26 11:42:59', '2022-01-26 11:42:59'),
	(27, 23, 6, 36, 36000000, 36000000, 'NOK', 1, '2022-01-29 11:08:13', '2022-01-29 11:08:13'),
	(28, 23, 8, 36, 25750000, 25750000, 'NOK', 1, '2022-01-29 11:08:13', '2022-01-29 11:08:13'),
	(29, 23, 6, 37, 36000000, 36000000, 'send', 1, '2022-01-30 06:39:01', '2022-01-30 06:39:01'),
	(30, 23, 5, 38, 10449000, 10449000, 'send', 1, '2022-02-01 06:58:38', '2022-02-01 06:58:38'),
	(31, 23, 6, 38, 36000000, 36000000, 'send', 1, '2022-02-01 06:58:38', '2022-02-01 06:58:38'),
	(32, 23, 3, 39, 5890000, 5890000, 'send', 1, '2022-02-01 11:18:22', '2022-02-01 11:18:22'),
	(33, 23, 6, 39, 36000000, 36000000, 'send', 1, '2022-02-01 11:18:22', '2022-02-01 11:18:22'),
	(34, 23, 6, 40, 36000000, 108000000, 'send', 3, '2022-02-02 01:41:09', '2022-02-02 01:41:09'),
	(35, 23, 5, 41, 10449000, 10449000, 'send', 1, '2022-02-02 02:16:02', '2022-02-02 02:16:02'),
	(36, 23, 3, 42, 5890000, 5890000, 'send', 1, '2022-02-02 02:19:40', '2022-02-02 02:19:40');
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;

-- Dumping structure for table php_shop.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `token` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.password_resets: ~5 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('sinamohammadi83a@gmail.com', 'vSkxKwOZFVBmeTIXxYiPLMYygSECxN', '2022-01-27 01:41:47'),
	('sinamohammadi83a@gmail.com', 'AMBIbDbTmMFcZfMPMXtCZRiuXLMgTi', '2022-01-27 01:52:27'),
	('sinamohammadi83a@gmail.com', 'qUGIXPivffxHnCeuMYBklnNdwBThrn', '2022-01-27 01:54:31'),
	('sinamohammadi83a@gmail.com', 'sTfYMGfciMPXiuuKWsWIEnpiENPxbM', '2022-01-27 14:23:13'),
	('sinamohammadi83a@gmail.com', 'FwQkEqoHlEbWuovlcBGqZzLNlRqjfH', '2022-01-27 15:21:26'),
	('sinamohammadi83a@gmail.com', 'lHpiUnAiUlUVPxbkKiihCkGvrChfmd', '2022-02-02 01:37:46');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table php_shop.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `label` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.permissions: ~35 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `title`, `label`) VALUES
	(1, 'admin-dashboard', 'داشبورد ادمین'),
	(2, 'user-dashboard', 'داشبورد کاربر'),
	(3, 'read-category', 'مشاهده دسته بندی'),
	(4, 'create-category', 'ایجاد دسته بندی'),
	(5, 'update-category', 'ویرایش دسته بندی'),
	(6, 'delete-category', 'حذف دسته بندی'),
	(7, 'read-brand', 'مشاهده برند'),
	(8, 'create-brand', 'ایجاد برند'),
	(9, 'update-brand', 'ویرایش برند'),
	(10, 'delete-brand', 'حذف برند'),
	(11, 'read-product', 'مشاهده محصول'),
	(12, 'create-product', 'ایجاد محصول'),
	(13, 'update-product', 'ویرایش محصول'),
	(14, 'delete-product', 'حذف محصول'),
	(15, 'read-user', 'مشاهده کاربر'),
	(16, 'create-user', 'ایجاد کاربر'),
	(17, 'update-user', 'ویرایش کاربر'),
	(18, 'delete-user', 'حذف کاربر'),
	(19, 'read-role', 'مشاهده نقش'),
	(20, 'create-role', 'ایجاد نقش'),
	(21, 'update-role', 'ویرایش نقش'),
	(22, 'delete-role', 'حذف نقش'),
	(23, 'update-settingadmin', 'ویرایش تنظیمات ادمین'),
	(24, 'update-settinguser', 'ویرایش تنظیمات کاربر'),
	(25, 'update-settingsite', 'ویرایش تنظیمات سایت'),
	(26, 'read-slider', 'مشاهده اسلایدر'),
	(27, 'create-slider', 'ایجاد اسلایدر'),
	(28, 'update-slider', 'ویرایش اسلایدر'),
	(29, 'delete-slider', 'حذف اسلایدر'),
	(30, 'read-property_group', 'مشاهده گروه مشخصات'),
	(31, 'create-property_group', 'ایجاد گروه مشخصات'),
	(32, 'update-property_group', 'ویرایش گروه مشخصات'),
	(33, 'delete-property_group', 'حذف گروه مشخصات'),
	(34, 'read-property', 'مشاهد مشخصات'),
	(35, 'create-property', 'ایجاد مشخصات'),
	(36, 'update-property', 'ویرایش مشخصات'),
	(37, 'delete-property', 'حذف مشخصات'),
	(38, 'read-offer', 'مشاهده کد تخفیف'),
	(39, 'create-offer', 'ایجاد کد تخفیف'),
	(40, 'update-offer', 'ویرایش کد تخفیف'),
	(41, 'delete-offer', 'حذف کد تخفیف'),
	(42, 'read-comment', 'مشاهده نظر'),
	(43, 'create-comment', 'ایجاد نظر'),
	(44, 'update-comment', 'ویرایش نظر'),
	(45, 'delete-comment', 'حذف نظر');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table php_shop.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.permission_role: ~48 rows (approximately)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
	(1, 1),
	(1, 2),
	(1, 3),
	(1, 4),
	(1, 5),
	(1, 6),
	(1, 7),
	(1, 8),
	(1, 9),
	(1, 10),
	(1, 11),
	(1, 12),
	(1, 13),
	(1, 14),
	(1, 15),
	(1, 16),
	(1, 17),
	(1, 18),
	(1, 19),
	(1, 20),
	(1, 21),
	(1, 22),
	(1, 23),
	(1, 24),
	(1, 25),
	(1, 26),
	(1, 27),
	(1, 28),
	(1, 29),
	(1, 30),
	(1, 31),
	(1, 32),
	(1, 33),
	(1, 34),
	(1, 35),
	(1, 36),
	(1, 37),
	(1, 38),
	(1, 39),
	(1, 40),
	(1, 41),
	(1, 42),
	(1, 43),
	(1, 44),
	(1, 45),
	(2, 2),
	(5, 1),
	(5, 2);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Dumping structure for table php_shop.pictures
CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pictures_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.pictures: ~2 rows (approximately)
/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;
INSERT INTO `pictures` (`id`, `product_id`, `path`) VALUES
	(8, 6, 'public/uploads/products/pictures/IdSfxlVxCoDrODktidemQEgYBwvrizlMyCSuiUmAa.jpeg'),
	(9, 6, 'public/uploads/products/pictures/IRsBLwIqRywOWlcsifiPTmNJOqsiRPNicrPJSYVuS.jpeg'),
	(10, 6, 'public/uploads/products/pictures/CquIkLXubpZSNOQWTajvLiZZHahbybRJmllhjsELM.jpeg');
/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;

-- Dumping structure for table php_shop.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` bigint(50) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `cost` bigint(20) NOT NULL,
  `image` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `is_published` enum('0','1') COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_brand_id_foreign` (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.products: ~5 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `cost`, `image`, `slug`, `is_published`, `description`, `created_at`, `updated_at`) VALUES
	(1, 10, 8, 'گوشی موبایل سامسونگ مدل Galaxy M22 SM-M225FV/DS دو سیم‌ کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت', 5424000, 'public/uploads/products/rtjiDgTXewfDJNctEbsfPiGuuUvfXtRTuXzAKubok.jpg', 'گوشی-موبایل-سامسونگ-مدل-Galaxy-M22-SM-M225FV/DS-دو-سیم‌-کارت-ظرفیت-64-گیگابایت-و-رم-4-گیگابایت', '1', 'سری M و A گوشی‌های هوشمند میان‌رده سامسونگ توانسته‌اند تا به امروز با بهره بردن از مشخصات فنی مناسب، عملکرد بسیار خوب و قابل قبولی را به‌نمایش بگذارند و در بازار فروش هم جزو گوشی‌های پرفروش‌ شناخته می‌شوند. سامسونگ گلکسی M22 هم یکی از گوشی‌های هوشمند میان‌رده این شرکت است که به مشخصات فنی مناسب و قدرتمندی مجهز شده است. در نمای رو‌به‌رویی این گوشی به صفحه‌نمایش 6.4 اینچ از نوع سوپرامولد مجهز شده است. صفحه‌نمایشی که در هر اینچ توانایی نمایش 274 پیکسل را دارد و از‌جمله مشخصات این صفحه‌نمایش، توانایی ارائه نرخ بروزرسانی 90 هرتز است. حداکثر روشنایی 600 نیت (شمع در متر مربع) هم سبب شده تا در شرایط نوری متنوع، شاهد وضوح تصویر با‌کیفیت و خوبی از این صفحه‌نمایش باشیم. در قسمت پشتی هم یک سنسور دوربین اصلی با رزولوشن 48 مگاپیکسل از نوع عریض، سنسور 8 مگاپیکسل از نوع فوق عریض با زاویه دید 123 درجه و دو سنسور با رزولوشن 2 مگاپیکسل از نوع ماکرو و سنجش عمق، سنسور‌های دوربین چهار‌گانه سامسونگ گلکسی M22 را تشکیل می‌دهند. در بخش مشخصات سخت‌افزاری هم این گوشی میان‌رده به پردازنده هلیو G80 شرکت مدیاتک (Mediatek Helio G80) مجهز شده است که در اجرای بازی و فعالیت‌های روزمره، عملکرد خوب و قابل قبولی دارد. در بخش باتری هم همانند اکثر گوشی‌های هوشمند میان‌رده سری M سامسونگ، این گوشی هم به باتری قدرتمند با میزان ظرفیت 5000 میلی‌آمپر‌ساعت مجهز شده است. شارژر 25 واتی مجهز به فناوری شارژ سریع هم از دیگر مشخصات در نظر گرفته شده است.\r\n', NULL, '2022-01-04 12:50:38'),
	(3, 13, 15, 'گوشی موبایل هوآوی مدل Nova 7i JNY-LX1 دو سیم کارت ظرفیت 128 گیگابایت', 5890000, 'public/uploads/products/BDQjuAEGVjmEGIyFGxxhLKnAYGRyvfsuavOmAXdGc.jpg', 'گوشی-موبایل-هوآوی-مدل-Nova-7i-JNY-LX1-دو-سیم-کارت-ظرفیت-128-گیگابایت', '1', 'شرکت هوآوی اخیراً گوشی‌ جدید خود را با نام «Nova 7i» معرفی کرد که می‌توان آن را یکی از زیباترین گوشی‌های 4 دوربین دانست. در این گوشی از یک صفحه‌نمایش 6.4 اینچی با فناوری IPS استفاده شده است که تقریباً 83.5 درصد از بدنه را تشکیل داده است. این نمایشگر از رزولوشن بالایی برخوردار است؛ به‌طوری‌که حدود 398 پیکسل را در هر اینچ جا داده است. این گوشی از یک دوربین اصلی چهارگانه بهره می‌برد که شامل یک لنز عریض 48 مگاپیکسلی، یک لنز فوق عریض 8 مگاپیکسلی ، یک لنز تله فوتو 2 مگاپیکسلی و یک سنسورعمق 2 مگاپیکسلی است. هوآوی برای دوربین سلفی این مدل هم از یک سنسور 16 مگاپیکسلی استفاده کرده است. در بخش سخت افزار هم Nova 7i به چیپست Kirin 810 مجهز شده است و یک پردازنده قدرتمند 8 هسته‌ای و 8 گیگابایت رم آن را همراهی می‌کنند. سنسور اثر انگشت در گوشی Nova 7i بر روی لبه کناری قرار گرفته است تا دسترسی به آن آسان‌تر باشد. منبع تغذیه این گوشی هم یک باتری لیتیوم-پلیمر با ظرفیت 4200 میلی‌آمپر ساعت است که شارژ سریع باتری با توان 40 وات پشتیبانی می‌کند.\r\n', '2022-01-04 01:18:28', '2022-01-05 07:08:56'),
	(4, 16, 16, 'پیراهن مردانه ایزی دو مدل 218113270', 662000, 'public/uploads/products/dTwftNslWiBOfGwCaXOxnVWNyapWmOPzVmSlgPqVu.jpg', 'پیراهن-مردانه-ایزی-دو-مدل-218113270', '1', '.....', '2022-01-04 02:10:28', '2022-01-04 02:59:35'),
	(5, 10, 8, 'گوشی موبایل سامسونگ مدل A52s 5G SM-A528B-DS دو سیم‌کارت ظرفیت 256 گیگابایت و رم 8 گیگابایت', 10449000, 'public/uploads/products/xefldPisSinGMJwwbEWOTgbfPridEoERbgqACwxtF.jpg', 'گوشی-موبایل-سامسونگ-مدل-A52s-5G-SM-A528B-DS-دو-سیم‌کارت-ظرفیت-256-گیگابایت-و-رم-8-گیگابایت', '1', 'این نسخه از گوشی موبایل Galaxy A52s با رم 8 گیگابایتی و حافظه داخلی 256 گیگابایت به عنوان یکی از جدیدترین میان‌رده‌های سامسونگ با تکنولوژی 5G روانه بازار شده است. این محصول دارای صفحه‌نمایش سوپر آمولد است و ظاهر زیبایی دارد. سامسونگ تلاش کرده است حاشیه را در این تولید جدید خود تا حد امکان کم کند. این گوشی قاب پشتی از جنس پلاستیک دارد و قاب جلویی آن را شیشه پوشانده که البته جلوه‌ی زیبایی به گوشی داده است. این محصول سامسونگ با نسخه 11 از سیستم‌عامل اندروید روانه بازار شده است تا از هر نظر گوشی مدرن به‌حساب بیاید. صفحه‌نمایش استفاده‌شده در این گوشی 6.5 اینچ با رزولوشن FullHD+ است که با استفاده از فناوری Super AMOLED و پنل OLED تصاویر شفاف و بی‌نظیری را به نمایش می‌گذارد. این صفحه‌نمایش در هر اینچ 407 پیکسل را نشان می‌دهد که این یعنی جزئیات و وضوح تصویر عالی است. همچنین روکش این نمایشگر لایه‌ی محافظ Corning Gorilla Glass است که از خط‌وخش و ضربه جلوگیری می‌کند. تراشه‌ی این محصول، Snapdragon 778G 5G از تراشه‌های 6 نانومتری سامسونگ است که به همراه 8 گیگابایت رم عرضه می‌شود. تراشه‌ی گرافیکی Adreno 642L هم برای پخش ویدئو و بازی مناسب است. این نسخه از گوشی با حافظه 256 گیگابایتی عرضه شده است. دوربین اصلی A52s سنسور 64 مگاپیکسلی دارد و از نوع عریض (Wide) است. یک سنسور 12مگاپیکسلی و دو سنسور 5 دیگر هم در کنار این دوربین اصلی مجموعه دوربین‌های قاب پشتی A52s را تشکیل داده‌اند. دوربین سلفی 32مگاپیکسلی هم در قاب جلویی این گوشی به کار گرفته شده است. باتری 4500 میلی‌آمپرساعتی، پشتیبانی از فناوری شارژ سریع 25 واتی، درگاه USB Type-C و حسگر اثرانگشت در زیر قاب اصلی هم از دیگر ویژگی‌های این تازه‌وارد است. سامسونگ در ساخت این گوشی از جدیدترین فناوری‌های ساخت گوشی استفاده کرده است تا میان‌رده‌ای با قابلیت‌های نزدیک به یک بالارده خوش‌ساخت را روانه بازار کند.', '2022-01-16 09:48:10', '2022-01-16 09:48:10'),
	(6, 38, 17, 'لپ‌تاپ گیمینگ 15 اینچی آئورس مدل AORUS 15G YC', 72000000, 'public/uploads/products/TwAaYDhtPKdxvhykbgzkbllYkUvvKwCiNtxQxpFxW.jpeg', 'لپ‌تاپ-گیمینگ-15-اینچی-آئورس-مدل-AORUS-15G-YC', '1', 'گیگابایت (GIGABYTE)، در ابتدا سال ۲۰۲۱ اقدام به معرفی دو سری از لپتاپ‌های خود تحت ساب برند آئورس (AORUS) و ایرو (AERO) با شعار «بازدهی در راس هر چیز دیگری» کرد. دو سری مذکور به ترتیب برای قشر گیمر و طراحان حرفه‌ای ساخته شده‌اند و هر یک از مزایای ویژه‌ای برخوردار هستند. لپتاپ گیمینگ ۱۵ اینچی آئورس مدل AORUS 15G YC، نیز یکی از این مدل لپتاپ‌ها‌ است که کاربری آن تماما مخصوص بازی‌ست.۱۵G KC از یک صفحه‌نمایش ۱۵.۶ اینچی مجهز به فناوری Thin Bezel (فناوری که وظیفه‌ی ارائه صفحه نمایشی با حاشیه کم را دارد) با وضوح تصویر FHD 1920x1080 بهره می‌برد. این صفحه‌نمایش مبتنی بر یک پنل IPS است و نرخ تازه‌سازی آن به عدد خارق‌العاده ۲۴۰ هرتز می‌رسد. گیگابایت در درون این مدل از یک پردازنده مرکزی نسل دهمی اینتل مدل CORE i7-10870H استفاده کرده است و وظیفه پردازش گرافیکی را به یک پردازنده گرافیکی یکپارچه INTEL UHD GRAPHICS 630 و یک پردازنده گرافیکی مجزا GEFORCE RTX 3080Q انویدیا با ۸ گیگابایت حافظه GDDR6 سپرده است. آئورس 15G YC از دو اسلات حافظه M.2 SSD با ظرفیت یک ترابایت در کنار 32GB رم (دو ماژول 16GB) با فرکانس ۳۲۰۰ مگاهرتز برخوردار است. گیگابایت در این مدل دو بلندگو ۲ وات، وب کم HD، باتری لیتیوم پلیمری ۹۹wh، بلوتوث V5.0 + LE و مودم Wi-Fi 6 نیز قرار داده است. تمامی این موارد، موجب خلق محصولی با وزن باورنکردنی تنها ۲ کیلوگرم شده است که آئورس 15G YC را در دسته‌ی لپتاپ‌های مخصوص بازی سبک وزن قرار می‌دهد.\r\n\r\n', '2022-01-16 10:23:00', '2022-01-16 10:23:00'),
	(7, 10, 8, 'گوشی موبایل سامسونگ مدل Galaxy A03s SM-A037F-DS دو سیم کارت ظرفیت 32 گیگابایت و رم 3 گیگابایت', 3124000, 'public/uploads/products/pZZyrBUPfvGriosyYiVlwMaeRvHGmZKGiPckIrKGM.jpg', 'گوشی-موبایل-سامسونگ-مدل-Galaxy-A03s-SM-A037F-DS-دو-سیم-کارت-ظرفیت-32-گیگابایت-و-رم-3-گیگابایت', '1', 'گوشی موبایل سامسونگ مدل Galaxy A03s SM-A037F/DS که 32 گیگابایت و رم 3 گیگابایت ظرفیت دارد از محصولات مقرون‌به‌صرفه و پایین‌رده شرکت سامسونگ است که به تازگی معرفی و روانه بازار شد. با تمام این تفاسیر این گوشی دارای یک پردازنده 8 هسته‌ای است. این محصول دارای صفحه نمایش 6.5 اینچ با رزولوشن 720x1600 پیکسل است که این صفحه‌نمایش در هر اینچ 270 پیکسل را نشان می‌دهد. تراشه این محصول از نوع MediaTek MT6765 Helio P35 (12nm) Chipset است که برای کاربرد روزمره و متوسط رو به پایین از نظر پردازشی مناسب خواهد بود. سامسونگ مدل Galaxy A03s SM-A037F/DS با حافظه 32 گیگابایتی و رم 3 گیگابایتی برای افرادی که از موبایل خود فقط برای کارهای روزمره و نه انجام بازی‌های سنگین و یا کار با نرم‌افزارهای حرفه‌ای استفاده می‌کنند، مناسب و به اندازه نیاز است. همچنین در نظر داشته باشید که با استفاده از یک کارت حافظه‌ی جانبی قادر خواهید بود این میزان از حافظه را افزایش دهید. قاب پشتی این گوشی موبایل 3 ماژول دوربین دارد. منبع انرژی گوشی Galaxy A03 باتری لیتیوم-پولیمری با ظرفیت 5000 میلی‌آمپرساعت است که برای این گوشی با کارایی و ویژگی‌هایی که دارد کافی و مناسب خواهد بود. این موبایل برای کسانی که استفاده‌ی روزمره‌ای از گوشی موبایل دارند و قصد انجام کارهای حرفه‌ای و تخصصی نظیر ادیت فیلم، بازی‌های سنگین و دیگر کارها را با گوشی خود ندارند، گزینه‌ی اقتصادی و به صرفه‌ای است.\r\n', '2022-01-18 12:44:45', '2022-01-18 12:44:45'),
	(8, 38, 17, 'لپ تاپ 14 اینچی ایسوس مدل ZenBook 14 UM425UA-KI174', 25750000, 'public/uploads/products/lgrSiQLzObMyLImQlggYWxUuhCIiuwVGRRXazRaEO.jpg', 'لپ-تاپ-14-اینچی-ایسوس-مدل-ZenBook-14-UM425UA-KI174', '1', 'لپ ‌تاپ ZenBook 14 UM425UA-KI174 از محصولات شرکت «ایسوس» محسوب می‌شود که با طراحی زیبا روانه بازار شده است. بدنه‌ شیک آلومینیومی UM425UA-KI174 به‌ گونه‌ای طراحی شده که لپ‌ تاپی‌رده ‌بالا را نوید می‌‌دهد. این بدنه 15.3 میلی‌‌متر ضخامت و 1.22 کیلوگرم وزن دارد و برای جا‌به‌‌جایی دائمی آن مشکل خاصی نخواهید داشت. صفحه ‌نمایش 14 اینچی این محصول دارای وضوح تصویر Full HD است. وجود بلندگو‌های قوی ایسوس هم کاربری این لپ ‌تاپ را به‌ عنوان یک محصول مالتی‌مدیا تقویت می‌کند. پورت‌های USB Type-C و HDMI روی لبه‌‌های این مدل از ایسوس دیده می‌‌شود که با استفاده از آن‌‌ها می‌توان انواع ابزارهای جانبی را بدون نیاز به هیچ مبدلی به این لپ‌ تاپ متصل و از آن ‌ها استفاده کرد. ایسوس در کنار این امکانات متعدد، از سخت‌‌افزارهای بسیار خوبی هم در این محصول استفاده کرده است. پردازنده مرکزی کم‌‌مصرف اما بسیار قوی AMD مدل Ryzen 5500U با ضریب مالتی‌پر باز، پردازشگر گرافیکی Radeon R7 Graphics و 8 گیگابایت رم از نوع DDR4 و 512 گیگابایت حافظه از نوع SSD (درایو حالت جامد) (Solid State Drive) مجموعه‌ سخت‌‌افزاری بسیار قدرتمند این لپ‌تاپ را تشکیل می‌‌دهند که برای کاربری گیمینگ، مهندسی، محاسباتی، پردازشی، مالتی‌مدیا، ادیت، میکس‌ومستر، انیمیشن، فیلم‌سازی و روزانه بسیار بسیار مطلوب و ایده‌آل هستند. در مجموع اگر به دنبال خرید یک لپ ‌تاپ خوش‌‌ساخت و مطلوب در همه جوانب هستید، مدل ZenBook 14 UM425UA-KI174 ایسوس می‌‌تواند یکی از انتخاب‌‌های شما باشد.\r\n', '2022-01-19 07:47:23', '2022-01-19 07:47:23');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table php_shop.product_property
CREATE TABLE IF NOT EXISTS `product_property` (
  `product_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `property_id` (`property_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.product_property: ~18 rows (approximately)
/*!40000 ALTER TABLE `product_property` DISABLE KEYS */;
INSERT INTO `product_property` (`product_id`, `property_id`, `value`, `created_at`, `updated_at`) VALUES
	(1, 6, '2.50 تا 3.02', '2022-01-15 11:53:46', '2022-01-16 09:27:37'),
	(1, 1, '8GB', '2022-01-16 12:28:30', '2022-01-16 09:27:37'),
	(6, 6, '2.2GHz-5.0GHz', '2022-01-16 10:48:00', '2022-01-16 10:48:00'),
	(6, 10, 'Intel Core i7', '2022-01-16 10:48:00', '2022-01-16 10:48:00'),
	(6, 11, 'Intel', '2022-01-16 10:48:00', '2022-01-16 10:48:00'),
	(6, 12, '10th Gen Intel Core i7-10870H', '2022-01-16 10:48:00', '2022-01-16 10:48:00'),
	(6, 13, '16M Cache', '2022-01-16 10:48:00', '2022-01-16 10:48:00'),
	(6, 1, '32 گیگابایت', '2022-01-16 10:48:00', '2022-01-16 10:48:00'),
	(6, 14, 'DDR4 Slots (2x16GB)', '2022-01-16 10:48:00', '2022-01-16 10:48:00'),
	(6, 15, '3200 مگاهرتز', '2022-01-16 10:48:00', '2022-01-16 10:48:00'),
	(8, 6, '4.0', '2022-01-19 07:50:18', '2022-01-19 07:50:18'),
	(8, 10, 'Ryzen 5', '2022-01-19 07:50:18', '2022-01-19 07:50:18'),
	(8, 11, 'AMD', '2022-01-19 07:50:18', '2022-01-19 07:50:18'),
	(8, 12, '5500U', '2022-01-19 07:50:18', '2022-01-19 07:50:18'),
	(8, 13, 'هشت مگابایت', '2022-01-19 07:50:18', '2022-01-19 07:50:18'),
	(8, 1, '8 گیگابایت', '2022-01-19 07:50:18', '2022-01-19 07:50:18'),
	(8, 14, 'DDR4', '2022-01-19 07:50:18', '2022-01-19 07:50:18'),
	(8, 15, '-', '2022-01-19 07:50:18', '2022-01-19 07:50:18');
/*!40000 ALTER TABLE `product_property` ENABLE KEYS */;

-- Dumping structure for table php_shop.properties
CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_group_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `property_group_id` (`property_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.properties: ~11 rows (approximately)
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` (`id`, `property_group_id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 3, 'ظرفیت حافظه RAM', '2022-01-15 07:56:09', '2022-01-16 10:33:38'),
	(6, 1, 'فرکانس پردازنده', '2022-01-15 11:52:50', '2022-01-16 10:32:28'),
	(7, 4, 'ابعاد', '2022-01-16 10:24:07', '2022-01-16 10:24:07'),
	(8, 4, 'وزن', '2022-01-16 10:24:22', '2022-01-16 10:24:22'),
	(9, 4, 'نوع', '2022-01-16 10:24:30', '2022-01-16 10:24:30'),
	(10, 1, 'سری پردازنده', '2022-01-16 10:32:11', '2022-01-16 10:32:11'),
	(11, 1, 'پردازنده', '2022-01-16 10:32:44', '2022-01-16 10:32:44'),
	(12, 1, 'مدل پردازنده', '2022-01-16 10:32:57', '2022-01-16 10:32:57'),
	(13, 1, 'حافظه‌ی Cache', '2022-01-16 10:33:11', '2022-01-16 10:33:11'),
	(14, 3, 'نوع حافظه RAM', '2022-01-16 10:33:53', '2022-01-16 10:33:53'),
	(15, 3, 'توضیحات حافظه RAM', '2022-01-16 10:34:04', '2022-01-16 10:34:04');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;

-- Dumping structure for table php_shop.property_groups
CREATE TABLE IF NOT EXISTS `property_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.property_groups: ~3 rows (approximately)
/*!40000 ALTER TABLE `property_groups` DISABLE KEYS */;
INSERT INTO `property_groups` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'پردازنده‌ی مرکزی', '2022-01-15 01:48:50', '2022-01-16 10:31:27'),
	(3, 'حافظه RAM', '2022-01-15 02:17:18', '2022-01-16 10:31:52'),
	(4, 'مشخصات کلی', '2022-01-16 10:23:54', '2022-01-16 10:23:54');
/*!40000 ALTER TABLE `property_groups` ENABLE KEYS */;

-- Dumping structure for table php_shop.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.roles: ~3 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'admin', NULL, '2022-01-22 02:44:50'),
	(2, 'normal-user', NULL, '2022-01-13 09:39:43'),
	(5, 'editor', '2022-01-10 06:56:11', '2022-01-22 03:11:01');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table php_shop.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(50) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `url` text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.sliders: ~2 rows (approximately)
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `title`, `image`, `url`) VALUES
	(3, 'گوشی سامسونگ', 'public/uploads/sliders/OJTebiKMGyWgiTBGTZTUIIRiilFOyMjSZAseIYTzV.jpg', 'http://localhost/php_shop/index.php?c=product&a=show&product=%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D9%87%D9%88%D8%A2%D9%88%DB%8C-%D9%85%D8%AF%D9%84-Nova-7i-JNY-LX1-%D8%AF%D9%88-%D8%B3%DB%8C%D9%85-%DA%A9%D8%A7%D8%B1%D8%AA-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-128-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA'),
	(5, 'موبایل هوآوی', 'public/uploads/sliders/AZTlsLJMjYSCTgvEppyuNEkLzUljftijaKXeyNdiS.jpg', 'http://localhost/php_shop/index.php?c=product&a=show&product=%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%B3%D8%A7%D9%85%D8%B3%D9%88%D9%86%DA%AF-%D9%85%D8%AF%D9%84-Galaxy-M22-SM-M225FV/DS-%D8%AF%D9%88-%D8%B3%DB%8C%D9%85%E2%80%8C-%DA%A9%D8%A7%D8%B1%D8%AA-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-64-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA-%D9%88-%D8%B1%D9%85-4-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Dumping structure for table php_shop.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `email_verifyed_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `image`, `email_verifyed_at`) VALUES
	(23, 1, 'sina', 'sinamohammadi83a@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'public/uploads/users/MLYNrBYyZDUbIjBOAPFLFDoZrKBnpvcbBPJjymQhJ.jpg', '2022-01-01 06:39:27'),
	(27, 2, 'saman', 'saman.mohammadi.1509@gmail.com', 'b81c23b4564e4212e3832fd0a91c6a30', '', '2022-01-23 07:06:14');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table php_shop.verify_register
CREATE TABLE IF NOT EXISTS `verify_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `token` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- Dumping data for table php_shop.verify_register: ~1 rows (approximately)
/*!40000 ALTER TABLE `verify_register` DISABLE KEYS */;
/*!40000 ALTER TABLE `verify_register` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
