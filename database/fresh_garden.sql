-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 12:10 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fresh_garden`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `display_order` int(11) NOT NULL,
  `is_external` tinyint(4) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `thumbnail`, `link`, `display_order`, `is_external`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'public/images/upload/banner/banner1.jpg', '', 1, 0, 1, '2021-09-03 08:43:00', '2021-09-03 08:43:00'),
(2, NULL, 'public/images/upload/banner/banner2.jpg', NULL, 2, 1, 1, '2021-09-03 08:43:17', '2021-09-03 08:43:17'),
(3, NULL, 'public/images/upload/banner/banner3.jpg', NULL, 3, 1, 1, '2021-09-03 08:43:27', '2021-09-03 08:43:27'),
(6, 'Banner 1', 'public/images/upload/banner/1631351840thumbnail.png', '', 1, 0, 0, '2021-09-11 09:17:20', '2021-09-11 09:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `display_order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `thumbnail`, `parent_id`, `type`, `status`, `display_order`, `created_at`, `updated_at`) VALUES
(1, 'Bánh Trung thu', 'public/images/upload/category/1631349401thumbnail.png', 10, 1, 0, 1, '2021-09-03 08:26:54', '2021-09-03 08:26:54'),
(2, 'Bánh mì tươi', 'public/images/upload/category/banhtrungthu.jpg', 1, 1, 1, 2, '2021-09-03 08:35:18', '2021-09-03 08:35:18'),
(3, 'Bánh kem tươi', 'public/images/upload/category/banhtrungthu.jpg', NULL, 1, 1, 3, '2021-09-03 08:35:41', '2021-09-03 08:35:41'),
(4, 'Bánh pizza', 'public/images/upload/category/banhtrungthu.jpg', NULL, 1, 1, 4, '2021-09-03 08:36:05', '2021-09-03 08:36:05'),
(10, 'Bánh mì chảo', 'public/images/upload/category/1631349959thumbnail.png', 1, 1, 0, 1, '2021-09-11 08:45:59', '2021-09-11 08:45:59'),
(11, 'Bánh hoa quả', 'public/images/upload/category/1631434102download (1).png', 10, 1, 1, 12, '2021-09-12 08:08:22', '2021-09-12 08:08:22'),
(12, 'Form title 123', NULL, 2, 1, 1, 12, '2021-09-12 08:10:18', '2021-09-12 08:10:18'),
(16, 'Form title 123', NULL, NULL, 1, 1, 1, '2021-09-12 08:19:39', '2021-09-12 08:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `title`, `status`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Sáng', 1, 'http://localhost/fresh-garden/public/images/upload/collection/collection1.jpg', '2021-09-03 10:53:11', '2021-09-03 10:53:11'),
(2, 'Trưa', 1, 'http://localhost/fresh-garden/public/images/upload/collection/collection2.jpg', '2021-09-03 10:54:52', '2021-09-03 10:54:52'),
(3, 'Chiều', 1, 'http://localhost/fresh-garden/public/images/upload/collection/collection3.jpg', '2021-09-03 10:55:00', '2021-09-03 10:55:00'),
(4, 'Tối', 1, 'http://localhost/fresh-garden/public/images/upload/collection/collection4.jpg', '2021-09-03 10:55:08', '2021-09-03 10:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_money` int(11) NOT NULL,
  `total_quatity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quatity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `original_price` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `include` varchar(255) DEFAULT NULL,
  `thumbnail` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `quatity` int(11) NOT NULL DEFAULT 0,
  `is_hot` tinyint(4) NOT NULL DEFAULT 0,
  `views` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `collection_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `original_price`, `price`, `description`, `content`, `include`, `thumbnail`, `status`, `quatity`, `is_hot`, `views`, `category_id`, `collection_id`, `created_at`, `updated_at`) VALUES
(1, 'Hộp 4 bánh (Dòng truyền thống)', 350000, 200000, 'Dòng bánh Fresh Garden lan tỏa giá trị truyền thống, giá trị nguyên bản và tích cực về sống chậm, được cảm nhận rõ qua nét thi vị của mùa trăng hiện đại với sự đa dạng sắc vị thơm ngon, vừa quen vừa lạ như nhân đậu xanh táo đỏ, nhân đậu đỏ, nhân sữa dừa, nhân khoai môn, nhân hạt sen mè đen, nhân hạt sen hạt dưa, nhân đậu xanh 1 trứng, nhân thập cẩm 1 trứng', 'Dòng bánh Fresh Garden lan tỏa giá trị truyền thống, giá trị nguyên bản và tích cực về sống chậm, được cảm nhận rõ qua nét thi vị của mùa trăng hiện đại với sự đa dạng sắc vị thơm ngon, vừa quen vừa lạ như nhân đậu xanh táo đỏ, nhân đậu đỏ, nhân sữa dừa, nhân khoai môn, nhân hạt sen mè đen, nhân hạt sen hạt dưa, nhân đậu xanh 1 trứng, nhân thập cẩm 1 trứng', 'Hộp gồm 4 bánh nhân tuỳ chọn truyền thống.', 'public/images/upload/product/product1.jpg', 1, 10, 1, NULL, 1, 1, '2021-09-03 09:06:07', '2021-09-03 09:06:07'),
(2, 'Hộp 6 bánh Thu hoa viên (Dòng cao cấp)', 350000, 200000, '<p>Dòng bánh Fresh Garden lan tỏa giá trị truyền thống, giá trị nguyên bản và tích cực về sống chậm, được cảm nhận rõ qua nét thi vị của mùa trăng hiện đại với sự đa dạng sắc vị thơm ngon, vừa quen vừa lạ như nhân đậu xanh táo đỏ, nhân đậu đỏ, nhân sữa dừa, nhân khoai môn, nhân hạt sen mè đen, nhân hạt sen hạt dưa, nhân đậu xanh 1 trứng, nhân thập cẩm 1 trứng</p>', '<p>Dòng bánh Fresh Garden lan tỏa giá trị truyền thống, giá trị nguyên bản và tích cực về sống chậm, được cảm nhận rõ qua nét thi vị của mùa trăng hiện đại với sự đa dạng sắc vị thơm ngon, vừa quen vừa lạ như nhân đậu xanh táo đỏ, nhân đậu đỏ, nhân sữa dừa, nhân khoai môn, nhân hạt sen mè đen, nhân hạt sen hạt dưa, nhân đậu xanh 1 trứng, nhân thập cẩm 1 trứng</p>', '            Hộp gồm 6 bánh nhân tùy chọn dòng cao cấp, có túi đi kèm          ', 'public/images/upload/product/product1.jpg', 1, 10, 1, NULL, 1, 1, '2021-09-03 09:06:07', '2021-09-03 09:06:07'),
(5, 'Bánh trứng', 100000, 80000, '<p>1234</p>', '<p>1234</p>', '1234', 'public/images/upload/product/1631359855thumbnail.png', 1, 10, 1, NULL, 1, 1, '2021-09-11 11:30:55', '2021-09-11 11:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 1, 'http://localhost/fresh-garden/public/images/upload/product-image/product-image-1.jfif', '2021-09-03 10:15:40', '2021-09-03 10:15:40'),
(2, 1, 'http://localhost/fresh-garden/public/images/upload/product-image/product-image-2.jfif', '2021-09-03 10:15:40', '2021-09-03 10:15:40'),
(3, 1, 'http://localhost/fresh-garden/public/images/upload/product-image/product-image-3.jfif', '2021-09-03 10:15:47', '2021-09-03 10:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `address`, `phone`, `thumbnail`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '123', 'admin@gmail.com', 'hanoi', '0973793711', NULL, 2, 'a206da55c9956f9a747a95e7e32d16b8', '2021-09-05 10:55:52', '2021-09-05 10:55:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_fk` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id_fk` (`order_id`),
  ADD KEY `product_id_fkk` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id_fk` (`category_id`),
  ADD KEY `collection_id_fkk` (`collection_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id_fk` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_id_fk` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id_fkk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `collection_id_fkk` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_id_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
