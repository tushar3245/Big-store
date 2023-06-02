-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 06:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `big_store_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bigstores`
--

CREATE TABLE `bigstores` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', 1, '2022-04-16 11:44:05', '2022-04-16 11:44:05'),
(2, 'Laptop', 1, '2022-04-16 11:44:28', '2022-04-16 11:44:28'),
(3, 'Ac', 1, '2022-04-22 03:58:00', '2022-04-22 03:58:00'),
(4, 'Refrigerator', 1, '2022-05-24 23:13:12', '2022-05-24 23:13:12'),
(5, 'Bike', 1, '2022-05-24 23:14:19', '2022-05-24 23:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Asus X515FA Intel Core i3', 'montaha@gmail.com', 'jo8ijiji98o', '2022-06-29 08:23:52', '2022-06-29 08:23:52');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2022_03_07_104350_create_bigstores_table', 1),
(5, '2022_03_19_172907_create_categories_table', 1),
(6, '2022_03_24_102959_create_sub_categories_table', 1),
(7, '2022_04_15_095812_create_products_table', 1),
(8, '2022_05_23_051140_create_orders_table', 2),
(9, '2022_05_23_054621_create_order_details_table', 2),
(10, '2022_06_28_162548_create_contacts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_quantity` int(11) DEFAULT NULL,
  `total_price` decimal(16,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(16,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `discounted_price` double(8,2) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_featured` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `sub_category_id`, `price`, `discounted_price`, `image`, `status`, `description`, `created_at`, `updated_at`, `is_featured`) VALUES
(24, 'Galaxy A33', 1, 4, 37599.00, 37590.00, 'uploads/202205290657Screenshot 2022-05-29 at 12-53-54 https __www.daraz.com.bd.png', 1, '<ul class=\"\"><li class=\"\">No Return applicable if seal is broken</li><li class=\"\">Size:162.1mm (6.4\" full rectangle) / 158.7mm (6.2\" rounded corners)</li><li class=\"\">Rear Camera:48.0 MP + 8.0 MP + 5.0 MP + 2.0 MP</li><li class=\"\">Front Camera - Resolution:13.0 MP</li><li class=\"\">RAM_Size (GB): 8 GB</li><li class=\"\">ROM Size (GB):128GB</li><li class=\"\" data-spm-anchor-id=\"a2a0e.pdp.product_detail.i0.3a88DyC7DyC7qp\">Available Memory (GB):102.0</li></ul><p><span class=\" pdp-price pdp-price_type_normal pdp-price_color_orange pdp-price_size_xl\"></span></p>', '2022-05-29 00:57:10', '2022-05-29 01:05:10', 0),
(25, 'Asus VivoBook 15', 2, 1, 49000.00, 46200.00, 'uploads/202205290702Screenshot 2022-05-29 at 13-00-26 https __www.daraz.com.bd.png', 1, '<p>DescriptionAsus VivoBook 15 X515FA Core i3 10th Gen 15.6\" FHD LaptopAsus\r\n VivoBook 15 X515FA powered by Intel Core i3-10110U Processor (4M Cache,\r\n 2.10 GHz up to 4.10 GHz) with Intel UHD Graphics. This Vivobook \r\ndelivers powerful performance and immersive visuals. Its NanoEdge \r\ndisplay boasts wide 178° viewing angles and a matte anti-glare coating \r\nfor a truly engaging experience. </p>', '2022-05-29 01:02:33', '2022-05-29 01:02:33', 0),
(26, 'ASUS ROG Zephyrus G14', 2, 1, 185900.00, 185900.00, 'uploads/202205290709Screenshot 2022-05-29 at 13-06-51 https __www.daraz.com.bd.png', 1, '<ul class=\"\"><li class=\"\">Eclipse Gray with AniMe Matrix</li><li class=\"\">AMD Ryzen™ 9-5900HS Processor</li><li class=\"\">16GB  DDR4 3200MHz SDRAM</li><li class=\"\">1TB M.2 NVMe PCIe 3.0 SSD</li><li class=\"\">NVIDIA® GeForce® RTX3060 MAX-Q 6GB GDDR6</li></ul><p></p>', '2022-05-29 01:09:18', '2022-05-29 01:09:18', 0),
(27, 'TVS Stryker 125cc', 5, 7, 124999.00, 124900.00, 'uploads/202205290714Screenshot 2022-05-29 at 13-12-18 https __www.daraz.com.bd.png', 1, '<p>0% EMI available through credit cards only (No cash EMI).\'No return \r\npolicy\' is applicable for all kinds of motorbike.Motorbike will be \r\ndelivered from the designated showroom.Seller/Supplier/Brand is \r\nresponsible for </p>', '2022-05-29 01:14:35', '2022-05-29 01:14:35', 1),
(30, 'LG DUAL INVERTER AC', 3, 5, 91500.00, 91000.00, 'uploads/202205311427Screenshot 2022-05-31 at 20-15-19 https __www.daraz.com.bd.png', 1, '<h2 class=\"pdp-mod-section-title outer-title\">Product details of LG DUAL INVERTER 1.5 TON AC</h2><ul class=\"\"><li class=\"\">Model No: LG S4UQ18KL3AB</li><li class=\"\">Ton: 1.5 Ton</li><li class=\"\">Up to 70% Energy Savings</li><li class=\"\">Active Energy Control</li><li class=\"\">LED Display</li><li class=\"\">Himalaya Cool/Jet Cool</li><li class=\"\">Gold Fin (CU) Condenser</li><li class=\"\">High Voltage Protection</li><li class=\"\" data-spm-anchor-id=\"a2a0e.pdp.product_detail.i0.1f00f3yNf3yNZB\">Compressor Type: Twin Rotary</li></ul><p></p>', '2022-05-31 08:27:05', '2022-05-31 08:38:29', 1),
(31, 'Samsung Galaxy A12', 1, 4, 15999.00, 15134.00, 'uploads/202205311435Screenshot 2022-05-31 at 20-31-34 https __www.daraz.com.bd.png', 1, '<h2 class=\"pdp-mod-section-title outer-title\">Product details of Samsung Galaxy A12 (4/128 GB)</h2><ul class=\"\"><li class=\"\">NO RETURN applicable if the seal is broken</li><li class=\"\">Battery 5,000mAh &amp; 15 watt fast charging</li><li class=\"\">Dimensions 164 x 75.8 x 8.9 mm</li><li class=\"\">Front Camera 8 MP</li><li class=\"\">Rear Camera 48 MP</li><li class=\"\">Chipset Mediatek MT6765 Helio P35 (12nm)</li><li class=\"\">GPU PowerVR GE8320</li><li class=\"\" data-spm-anchor-id=\"a2a0e.pdp.product_detail.i0.5dc0rbyUrbyU7a\">Operating System Android 10</li></ul><p></p>', '2022-05-31 08:35:25', '2022-05-31 08:35:25', 1),
(32, 'Dell Inspiron 15 3501', 2, 2, 51000.00, 45500.00, 'uploads/202205311444Screenshot 2022-05-31 at 20-42-13 https __www.daraz.com.bd.png', 1, '<h2 class=\"pdp-mod-section-title outer-title\">Product details of Dell \r\nInspiron 15 3501 11th Gen Intel Core i3 1115G4 (Up to 4.10GHz, 4GB DDR4,\r\n 1TB HDD, No-ODD) 15.6 Inch FHD (1920x1080) Display, Win 10, Silver \r\nNotebook BULLN315TGL21051021POPP-2Y</h2><ul class=\"\"><li class=\"\">Model Dell Inspiron 15 3501</li><li class=\"\">Notebook Series Inspiron</li><li class=\"\">Part No BULLN315TGL21051021POPP-2Y</li><li class=\"\">Country Of Origin USA</li><li class=\"\">Made in/ Assemble China</li><li class=\"\">Processor Brand Intel</li><li class=\"\">Generation 11th</li><li class=\"\">Processor Model Core i3 1115G4</li><li class=\"\">Processor Max Turbo Frequency 4.10 GHz</li><li class=\"\">Processor Core 2</li><li class=\"\">Processor Thread 4</li><li class=\"\">CPU Cache 6MB</li><li class=\"\">RAM 4GB</li><li class=\"\">RAM Type DDR4</li><li class=\"\">RAM Bus (MHz) 3200 MHz</li><li class=\"\">Storage 1TB HDD</li><li class=\"\">Installed HDD Type SATA3</li><li class=\"\">HDD RPM 5400 RPM</li><li class=\"\">M.2/SSD Expansion Slot 1</li><li class=\"\">Graphics Chipset Intel UHD Graphics</li><li class=\"\">Graphics Memory Accesibility Integrated</li><li class=\"\">Graphics Memory Shared</li><li class=\"\" data-spm-anchor-id=\"a2a0e.pdp.product_detail.i0.518531bR31bRl8\">Display Size (Inch) 15.6</li></ul><p></p>', '2022-05-31 08:44:00', '2022-05-31 08:44:00', 1),
(33, 'TVS Apache RTR', 5, 7, 174900.00, 174500.00, 'uploads/202205311448Screenshot 2022-05-31 at 20-46-26 https __www.daraz.com.bd.png', 1, '<h2 class=\"pdp-mod-section-title outer-title\">Product details of TVS Apache RTR 160CC Motor Cycle (SD) - Red</h2><ul class=\"\"><li class=\"\">For more details about this product, please dial 09610002345 to get assistance from our expert agents.</li><li class=\"\">Type: 4 stroke, air cooled, single cylinder OHC</li><li class=\"\">Cylinder bore: 62 mm</li><li class=\"\">Stroke: 52.5 mm</li><li class=\"\">Piston displacement: 159.7 cc</li><li class=\"\">Compression ratio: 9.5:1</li><li class=\"\" data-spm-anchor-id=\"a2a0e.pdp.product_detail.i0.3fd1z04pz04pSN\">Carburetor: Ucal BS-26</li></ul><p></p>', '2022-05-31 08:48:29', '2022-05-31 08:48:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Asus', 1, 2, '2022-04-16 11:45:17', '2022-04-16 11:45:17'),
(2, 'Dell', 1, 2, '2022-04-16 11:45:38', '2022-04-16 11:45:38'),
(3, 'Apple', 1, 2, '2022-04-16 11:46:04', '2022-04-16 11:46:04'),
(4, 'Samsung', 1, 1, '2022-04-16 11:46:31', '2022-04-16 11:46:31'),
(5, 'LG', 1, 3, '2022-04-22 03:59:16', '2022-04-22 03:59:16'),
(6, 'Walton', 1, 4, '2022-05-24 23:16:12', '2022-05-24 23:16:12'),
(7, 'TVS', 1, 5, '2022-05-24 23:16:50', '2022-05-24 23:16:50');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(2, 'test', 'test@gmail.com', NULL, '123456', NULL, '2022-05-21 21:09:51', '2022-05-21 21:09:51', 'customer'),
(3, 'tushar', 'tushar@gmail.com', NULL, '$2y$10$JzLf6m9u7g5uC4NSPdCek.B2OkWuR/AoTMI8.6RtHDIQdvRFD44Ae', NULL, '2022-09-24 05:14:57', '2022-09-24 05:14:57', 'customer'),
(4, 'rakib', 'rakib@gmail.com', NULL, '$2y$10$9ZN1KXQ/SyZ4E/lrZT0GOeW2N5j/w5IumNo1Eo4q4XrMh3m.ZVnsy', NULL, '2023-04-08 11:04:07', '2023-04-08 11:04:07', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bigstores`
--
ALTER TABLE `bigstores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `bigstores`
--
ALTER TABLE `bigstores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
