# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.21)
# Database: laptop
# Generation Time: 2018-07-30 14:26:30 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table branch
# ------------------------------------------------------------

DROP TABLE IF EXISTS `branch`;

CREATE TABLE `branch` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` int(10) unsigned NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `branch_shop_id_foreign` (`shop_id`),
  CONSTRAINT `branch_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;

INSERT INTO `branch` (`id`, `shop_id`, `location`, `address`, `phone`, `image`, `email`, `created_at`, `updated_at`)
VALUES
	(1,1,'Myay Ni Gone','No 331, Pyi Road, Near Myanmar Myaing bus-stop','01503511, 503522','images/1532750222.kmd.jpg',NULL,'2018-07-28 03:57:02','2018-07-28 03:57:02'),
	(2,1,'Pan Soe Dan','174-182 , Pan Soe Dan Road (middle block)','01245180,01385177,01381035','images/1532750345.kmd.jpg',NULL,'2018-07-28 03:59:05','2018-07-28 03:59:05'),
	(3,1,'လမ္းမေတာ္','၉ ၀၊ လွည္းတန္းလမ္း၊ လမ္းမေတာ္ျမိဳ့နယ္','၀၁၂၃၀၃၀၈၂','images/1532750440.kmd.jpg',NULL,'2018-07-28 04:00:40','2018-07-28 04:01:11'),
	(4,2,'Kyauktada Tsp','No.186-188, Maha Bandoola Garden Street (Middle Block)','01 376 566','images/1532751937.citicom.jpg',NULL,'2018-07-28 04:25:37','2018-07-28 04:28:15'),
	(5,3,'Kyauktada Township','No.162-170, 36th Street, Middle Block, Kyauktada Township, Yangon, Myanmar\r\nYangon','09 254 839 225 Ext 30','images/1532752033.technoland.jpg',NULL,'2018-07-28 04:27:13','2018-07-28 04:27:13');

/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` int(10) unsigned NOT NULL,
  `branch_id` int(10) unsigned NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `memory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hardisk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `battery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `items_shop_id_foreign` (`shop_id`),
  KEY `items_branch_id_foreign` (`branch_id`),
  CONSTRAINT `items_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`) ON DELETE CASCADE,
  CONSTRAINT `items_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;

INSERT INTO `items` (`id`, `shop_id`, `branch_id`, `brand`, `model`, `cpu`, `price`, `memory`, `hardisk`, `display`, `battery`, `image`, `created_at`, `updated_at`)
VALUES
	(1,1,1,'Lenovo','Ideapad 120s-11IAP','Celeron N3350',269,'4GB RAM','500GB HD','11.6\" Display','2 Cells Battery','images/1532754167.11IAP.jpg','2018-07-28 05:02:47','2018-07-28 05:02:47'),
	(2,1,1,'Lenovo','Ideapad 320-14IKBN','Celeron N3350',309,'4GB RAM','500GB HD','14\" Display','3 Cells Battery','images/1532754244.11IAP.jpg','2018-07-28 05:04:04','2018-07-28 05:04:04'),
	(3,1,1,'Lenovo','Ideapad 320-14AST','A4-9120 Processor',309,'4GB RAM','500GB HD','14\" Display','2 Cells Battery','images/1532754298.11IAP.jpg','2018-07-28 05:04:58','2018-07-28 05:04:58'),
	(4,1,1,'Dell','Inspiron 3567','Core i3-6006U',399,'4GB RAM','1TB HD','15.6\" Display','4 Cells Battery','images/1532754447.dell.png','2018-07-28 05:07:27','2018-07-28 05:07:27'),
	(5,1,1,'Dell','Inspiron 3462','Pentium N4200',359,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532754519.dell.png','2018-07-28 05:08:39','2018-07-28 05:12:46'),
	(6,1,1,'Acer','ES1432','Celeron N3350',299,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532855120.acer.jpg','2018-07-29 09:05:20','2018-07-29 09:05:20'),
	(7,1,1,'Acer','ES1432','Pentium N4200',335,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532855193.acer.jpg','2018-07-29 09:06:33','2018-07-29 09:06:33'),
	(8,1,1,'MSI','GS63 7RD','Core i7 7700 HQ',1100,'8GB RAM','1TB HDD','15.6\" Display','3 Cells Battery','images/1532855425.msi.jpg','2018-07-29 09:10:25','2018-07-29 09:10:25'),
	(9,1,1,'MSI','PL62 7RC','Core i7 7700 HQ',799,'8GB RAM','1TB HDD','15.6\" Display','6 Cells Battery','images/1532855637.msi.jpeg','2018-07-29 09:11:39','2018-07-29 09:13:57'),
	(10,1,1,'Hp','14-bs579TU','Core i3-6006U',399,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532856339.hp.jpg','2018-07-29 09:18:34','2018-07-29 09:43:09'),
	(11,1,1,'Hp','14-bs076TX','Core i3-6006U',399,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532856282.hp.jpg','2018-07-29 09:20:07','2018-07-29 09:25:05'),
	(12,1,1,'Asus','X441NA','Celeron N3350',299,'4GB RAM','500GB HDD','14\" Display','3 Cells Battery','images/1532856099.asus.jpg','2018-07-29 09:21:39','2018-07-29 09:21:39'),
	(13,1,1,'Asus','X541NA','Celeron N3350',309,'4GB RAM','500GB HDD','15.6\" Display','3 Cells Battery','images/1532856157.asus.jpg','2018-07-29 09:22:37','2018-07-29 09:22:37'),
	(14,1,2,'Lenovo','Ideapad 120s-11IAP','Celeron N3350',269,'4GB RAM','500GB HD','11.6\" Display','2 Cells Battery','images/1532754167.11IAP.jpg','2018-07-28 05:02:47','2018-07-28 05:02:47'),
	(15,1,2,'Lenovo','Ideapad 320-14IKBN','Celeron N3350',309,'4GB RAM','500GB HD','14\" Display','3 Cells Battery','images/1532754244.11IAP.jpg','2018-07-28 05:04:04','2018-07-28 05:04:04'),
	(16,1,2,'Lenovo','Ideapad 320-14AST','A4-9120 Processor',309,'4GB RAM','500GB HD','14\" Display','2 Cells Battery','images/1532754298.11IAP.jpg','2018-07-28 05:04:58','2018-07-28 05:04:58'),
	(17,1,2,'Dell','Inspiron 3567','Core i3-6006U',399,'4GB RAM','1TB HD','15.6\" Display','4 Cells Battery','images/1532754447.dell.png','2018-07-28 05:07:27','2018-07-28 05:07:27'),
	(18,1,2,'Dell','Inspiron 3462','Pentium N4200',359,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532754519.dell.png','2018-07-28 05:08:39','2018-07-28 05:12:46'),
	(19,1,2,'Acer','ES1432','Celeron N3350',299,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532855120.acer.jpg','2018-07-29 09:05:20','2018-07-29 09:05:20'),
	(20,1,2,'Acer','ES1432','Pentium N4200',335,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532855193.acer.jpg','2018-07-29 09:06:33','2018-07-29 09:06:33'),
	(21,1,2,'MSI','GS63 7RD','Core i7 7700 HQ',1100,'8GB RAM','1TB HDD','15.6\" Display','3 Cells Battery','images/1532855425.msi.jpg','2018-07-29 09:10:25','2018-07-29 09:10:25'),
	(22,1,2,'MSI','PL62 7RC','Core i7 7700 HQ',799,'8GB RAM','1TB HDD','15.6\" Display','6 Cells Battery','images/1532855637.msi.jpeg','2018-07-29 09:11:39','2018-07-29 09:13:57'),
	(23,1,2,'Lenovo','14-bs579TU','Core i3-6006U',399,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532856339.hp.jpg','2018-07-29 09:18:34','2018-07-29 09:25:39'),
	(24,1,2,'Hp','14-bs076TX','Core i3-6006U',399,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532856282.hp.jpg','2018-07-29 09:20:07','2018-07-29 09:25:05'),
	(25,1,2,'Asus','X441NA','Celeron N3350',299,'4GB RAM','500GB HDD','14\" Display','3 Cells Battery','images/1532856099.asus.jpg','2018-07-29 09:21:39','2018-07-29 09:21:39'),
	(26,1,2,'Asus','X541NA','Celeron N3350',309,'4GB RAM','500GB HDD','15.6\" Display','3 Cells Battery','images/1532856157.asus.jpg','2018-07-29 09:22:37','2018-07-29 09:22:37'),
	(27,1,3,'Lenovo','Ideapad 120s-11IAP','Celeron N3350',269,'4GB RAM','500GB HD','11.6\" Display','2 Cells Battery','images/1532754167.11IAP.jpg','2018-07-28 05:02:47','2018-07-28 05:02:47'),
	(28,1,3,'Lenovo','Ideapad 320-14IKBN','Celeron N3350',309,'4GB RAM','500GB HD','14\" Display','3 Cells Battery','images/1532754244.11IAP.jpg','2018-07-28 05:04:04','2018-07-28 05:04:04'),
	(29,1,3,'Lenovo','Ideapad 320-14AST','A4-9120 Processor',309,'4GB RAM','500GB HD','14\" Display','2 Cells Battery','images/1532754298.11IAP.jpg','2018-07-28 05:04:58','2018-07-28 05:04:58'),
	(30,1,3,'Dell','Inspiron 3567','Core i3-6006U',399,'4GB RAM','1TB HD','15.6\" Display','4 Cells Battery','images/1532754447.dell.png','2018-07-28 05:07:27','2018-07-28 05:07:27'),
	(31,1,3,'Dell','Inspiron 3462','Pentium N4200',359,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532754519.dell.png','2018-07-28 05:08:39','2018-07-28 05:12:46'),
	(32,1,3,'Acer','ES1432','Celeron N3350',299,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532855120.acer.jpg','2018-07-29 09:05:20','2018-07-29 09:05:20'),
	(33,1,3,'Acer','ES1432','Pentium N4200',335,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532855193.acer.jpg','2018-07-29 09:06:33','2018-07-29 09:06:33'),
	(34,1,3,'MSI','GS63 7RD','Core i7 7700 HQ',1100,'8GB RAM','1TB HDD','15.6\" Display','3 Cells Battery','images/1532855425.msi.jpg','2018-07-29 09:10:25','2018-07-29 09:10:25'),
	(35,1,3,'MSI','PL62 7RC','Core i7 7700 HQ',799,'8GB RAM','1TB HDD','15.6\" Display','6 Cells Battery','images/1532855637.msi.jpeg','2018-07-29 09:11:39','2018-07-29 09:13:57'),
	(36,1,3,'Lenovo','14-bs579TU','Core i3-6006U',399,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532856339.hp.jpg','2018-07-29 09:18:34','2018-07-29 09:25:39'),
	(37,1,3,'Hp','14-bs076TX','Core i3-6006U',399,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532856282.hp.jpg','2018-07-29 09:20:07','2018-07-29 09:25:05'),
	(38,1,3,'Asus','X441NA','Celeron N3350',299,'4GB RAM','500GB HDD','14\" Display','3 Cells Battery','images/1532856099.asus.jpg','2018-07-29 09:21:39','2018-07-29 09:21:39'),
	(39,1,3,'Asus','X541NA','Celeron N3350',309,'4GB RAM','500GB HDD','15.6\" Display','3 Cells Battery','images/1532856157.asus.jpg','2018-07-29 09:22:37','2018-07-29 09:22:37'),
	(40,2,4,'Lenovo','Ideapad 120s-11IAP','Celeron N3350',271,'4GB RAM','500GB HD','11.6\" Display','2 Cells Battery','images/1532754167.11IAP.jpg','2018-07-28 05:02:47','2018-07-28 05:02:47'),
	(41,2,4,'Lenovo','Ideapad 320-14IKBN','Celeron N3350',311,'4GB RAM','500GB HD','14\" Display','3 Cells Battery','images/1532754244.11IAP.jpg','2018-07-28 05:04:04','2018-07-28 05:04:04'),
	(42,2,4,'Lenovo','Ideapad 320-14AST','A4-9120 Processor',311,'4GB RAM','500GB HD','14\" Display','2 Cells Battery','images/1532754298.11IAP.jpg','2018-07-28 05:04:58','2018-07-28 05:04:58'),
	(43,2,4,'Dell','Inspiron 3567','Core i3-6006U',400,'4GB RAM','1TB HD','15.6\" Display','4 Cells Battery','images/1532754447.dell.png','2018-07-28 05:07:27','2018-07-28 05:07:27'),
	(44,2,4,'Dell','Inspiron 3462','Pentium N4200',360,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532754519.dell.png','2018-07-28 05:08:39','2018-07-28 05:12:46'),
	(45,2,4,'Acer','ES1432','Celeron N3350',301,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532855120.acer.jpg','2018-07-29 09:05:20','2018-07-29 09:05:20'),
	(46,2,4,'Acer','ES1432','Pentium N4200',336,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532855193.acer.jpg','2018-07-29 09:06:33','2018-07-29 09:06:33'),
	(47,2,4,'MSI','GS63 7RD','Core i7 7700 HQ',1111,'8GB RAM','1TB HDD','15.6\" Display','3 Cells Battery','images/1532855425.msi.jpg','2018-07-29 09:10:25','2018-07-29 09:10:25'),
	(48,2,4,'MSI','PL62 7RC','Core i7 7700 HQ',800,'8GB RAM','1TB HDD','15.6\" Display','6 Cells Battery','images/1532855637.msi.jpeg','2018-07-29 09:11:39','2018-07-29 09:13:57'),
	(49,2,4,'Lenovo','14-bs579TU','Core i3-6006U',400,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532856339.hp.jpg','2018-07-29 09:18:34','2018-07-29 09:25:39'),
	(50,2,4,'Hp','14-bs076TX','Core i3-6006U',400,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532856282.hp.jpg','2018-07-29 09:20:07','2018-07-29 09:25:05'),
	(51,2,4,'Asus','X441NA','Celeron N3350',301,'4GB RAM','500GB HDD','14\" Display','3 Cells Battery','images/1532856099.asus.jpg','2018-07-29 09:21:39','2018-07-29 09:21:39'),
	(52,2,4,'Asus','X541NA','Celeron N3350',311,'4GB RAM','500GB HDD','15.6\" Display','3 Cells Battery','images/1532856157.asus.jpg','2018-07-29 09:22:37','2018-07-29 09:22:37'),
	(53,3,5,'Lenovo','Ideapad 120s-11IAP','Celeron N3350',272,'4GB RAM','500GB HD','11.6\" Display','2 Cells Battery','images/1532754167.11IAP.jpg','2018-07-28 05:02:47','2018-07-28 05:02:47'),
	(54,3,5,'Lenovo','Ideapad 320-14IKBN','Celeron N3350',313,'4GB RAM','500GB HD','14\" Display','3 Cells Battery','images/1532754244.11IAP.jpg','2018-07-28 05:04:04','2018-07-28 05:04:04'),
	(55,3,5,'Lenovo','Ideapad 320-14AST','A4-9120 Processor',312,'4GB RAM','500GB HD','14\" Display','2 Cells Battery','images/1532754298.11IAP.jpg','2018-07-28 05:04:58','2018-07-28 05:04:58'),
	(56,3,5,'Dell','Inspiron 3567','Core i3-6006U',401,'4GB RAM','1TB HD','15.6\" Display','4 Cells Battery','images/1532754447.dell.png','2018-07-28 05:07:27','2018-07-28 05:07:27'),
	(57,3,5,'Dell','Inspiron 3462','Pentium N4200',361,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532754519.dell.png','2018-07-28 05:08:39','2018-07-28 05:12:46'),
	(58,3,5,'Acer','ES1432','Celeron N3350',302,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532855120.acer.jpg','2018-07-29 09:05:20','2018-07-29 09:05:20'),
	(59,3,5,'Acer','ES1432','Pentium N4200',337,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532855193.acer.jpg','2018-07-29 09:06:33','2018-07-29 09:06:33'),
	(60,1,1,'MSI','GS63 7RD','Core i7 7700 HQ',1112,'8GB RAM','1TB HDD','15.6\" Display','3 Cells Battery','images/1532857420.msi.jpeg','2018-07-29 09:10:25','2018-07-29 09:43:40'),
	(61,3,5,'MSI','PL62 7RC','Core i7 7700 HQ',801,'8GB RAM','1TB HDD','15.6\" Display','6 Cells Battery','images/1532855637.msi.jpeg','2018-07-29 09:11:39','2018-07-29 09:13:57'),
	(62,3,5,'Lenovo','14-bs579TU','Core i3-6006U',401,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532856339.hp.jpg','2018-07-29 09:18:34','2018-07-29 09:25:39'),
	(63,3,5,'Hp','14-bs076TX','Core i3-6006U',401,'4GB RAM','500GB HDD','14\" Display','4 Cells Battery','images/1532856282.hp.jpg','2018-07-29 09:20:07','2018-07-29 09:25:05'),
	(64,3,5,'Asus','X441NA','Celeron N3350',302,'4GB RAM','500GB HDD','14\" Display','3 Cells Battery','images/1532856099.asus.jpg','2018-07-29 09:21:39','2018-07-29 09:21:39'),
	(65,3,5,'Asus','X541NA','Celeron N3350',312,'4GB RAM','500GB HDD','15.6\" Display','3 Cells Battery','images/1532856157.asus.jpg','2018-07-29 09:22:37','2018-07-29 09:22:37');

/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2018_07_27_033903_create_shop_table',1),
	(4,'2018_07_27_044641_create_branch_table',1),
	(5,'2018_07_27_064023_create_item_tables',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table shops
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shops`;

CREATE TABLE `shops` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `shops` WRITE;
/*!40000 ALTER TABLE `shops` DISABLE KEYS */;

INSERT INTO `shops` (`id`, `name`, `image`, `created_at`, `updated_at`)
VALUES
	(1,'KMD','images/1532749332.kmd.jpg','2018-07-28 03:42:12','2018-07-28 03:42:12'),
	(2,'Citicom','images/1532749360.citicom.jpg','2018-07-28 03:42:40','2018-07-28 03:42:40'),
	(3,'Technoland','images/1532749789.technoland.jpg','2018-07-28 03:42:55','2018-07-28 03:49:49');

/*!40000 ALTER TABLE `shops` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'thura','mgaungthurawin@gmail.com','$2y$10$CSRyGAt09ifFFk87XXGenuz6UvExVABgnkyTWNLlM8Q2LFOa6gVb2',NULL,'2018-07-28 03:40:28','2018-07-28 03:40:28');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
