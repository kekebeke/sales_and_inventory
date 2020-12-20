-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 09:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_xyt_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `check_number` varchar(11) DEFAULT NULL,
  `check_amount` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `name`, `branch`, `check_number`, `check_amount`) VALUES
(1, 'BDO', 'Buhangin', '0918238329', 3000.00),
(2, 'BPI', 'Tagum', '2118223329', 5000.00),
(3, 'BDO', 'Matina', '0918238329', 3000.00),
(4, 'BDO', 'Maa', '0918238329', 5000.00),
(5, 'BDO', 'Maa', '1231232', 3000.00),
(6, 'BPI', 'Toril', '0918238329', 5000.00),
(7, 'BDO', 'Tagum', '0918238329', 5000.00),
(8, 'BPI', 'Buhangin', '1231232', 50000.00),
(9, 'BPI', 'Buhangin', '0918238329', 50000.00),
(10, 'BDO', 'Matina', '0918238329', 3000.00),
(11, 'BPI', 'Buhangin', '0918238329', 5000.00),
(12, 'BDO', 'Maa', '1231232', 3000.00),
(13, 'BDO', 'Maa', '0918238329', 3000.00),
(14, 'BDO', 'Tagum', '1231232', 5000.00),
(15, 'BDO', 'Matina', '0918238329', 50000.00),
(16, 'BDO', 'Matina', '2118223329', 50000.00),
(17, 'BDO', 'Maa', '1231232', 5000.00);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(100) NOT NULL,
  `cart_code` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `quantity`, `cart_code`) VALUES
(339, -1, 1023, 1, 702001),
(340, -1, 1023, 1, 702002),
(341, -1, 1023, 1, 702003),
(342, -1, 1023, 1, 702004),
(343, -1, 1023, 1, 702005),
(344, -1, 1011, 1, 702006),
(345, 100012, 1010, 1, 702007),
(346, 100009, 1000, 1, 702008),
(347, -1, 1012, 1, 702009),
(349, -1, 1023, 1, 702010),
(350, -1, 1023, 1, 702011),
(351, -1, 1023, 1, 702012),
(352, -1, 1023, 1, 702013),
(355, -1, 1023, 1, 702014),
(356, -1, 1023, 1, 702014),
(357, 100013, 1023, 1, 702015),
(358, -1, 1023, 1, 702016),
(359, -1, 1023, 1, 702017),
(360, -1, 1023, 1, 702018),
(361, -1, 1023, 1, 702019),
(362, 100012, 1023, 1, 702020),
(363, -1, 1011, 1, 702021),
(364, -1, 1023, 1, 702022),
(365, -1, 1011, 1, 702023),
(367, -1, 1023, 1, 702024),
(368, 100013, 1023, 1, 702025),
(369, 100013, 1011, 1, 702025),
(370, -1, 1023, 1, 702026),
(372, -1, 1010, 1, 702027),
(375, -1, 1011, 1, 702031),
(383, 100013, 1011, 1, 702028),
(384, 100013, 1011, 1, 702029),
(385, 100013, 1012, 2, 702030),
(415, 100011, 1023, 12, 702032),
(420, -1, 1027, 2, 702033),
(431, -1, 1028, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`) VALUES
(0, 'Unclassified item', 1),
(1, 'Motorcyle Parts', 1),
(2, 'Auto Parts', 1),
(13, 'Gloves', 1),
(14, 'Helmet', 1),
(15, 'Tires', 1),
(16, 'Mirror', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(65) NOT NULL,
  `description` text NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(100) NOT NULL,
  `sold` int(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `quantity`, `sold`, `category_id`, `supplier_id`, `status`, `created_at`) VALUES
(1000, 'RED REV Super Limiter Cut', 'Exclusive Part for RaceExclusive Japan Spec. Vehicle*It will not work properly in case of replacing it with full scale meter.*The vehicle that powered up by mounting the RED REV is limited to NSR250R (90-93), RVF400, ZEPHYR400χ.Other vehicle is a speed limiter cut.*The graph data on the photo is RVF400.', 2499.12, 1, 2, 1, 100002, 1, '2020-09-15 17:42:02'),
(1010, 'GOODS	Half Helmet FLAMES', 'Color: BlueSize: FreeA simple half-helmet.Simple half-helmet with Flames design.Ideal for painted bases.*There is some fading, discoloration, etc. for long-term storage products. Please purchase on a paint basis.*This is a decorative helmet. Please do not wear when riding a motorcycle.', 1294.90, 308, 33, 1, 100003, 1, '2020-12-02 17:42:02'),
(1011, 'DRC Street Radiator Hose Set', 'Color: RedSilicon Radiator HoseIt reinforced by a multilayer structure of silicon material and high strength fiber that withstand from minus 40 to 260 degrees.It is excellent resistance to pressure and heat, minimizing the expansion of hoses even under harsh conditions.The engine performance is fully pulled out securing a stable cooling water flow.', 500.00, 276, 69, 0, 0, 1, '2020-04-10 17:42:02'),
(1012, 'TANAX	Cowling Mirror 7', '[Color] Black[Material]Housing/Bracket: Aluminum Die CastingBase: Zinc Die Casting[Quantity] Mirror Body x1pc.It is a new type cowling mirror appearance.It adopted the anti-dazzling ', 2807.99, 26, 25, 16, 100002, 1, '2020-02-21 17:42:02'),
(1023, 'Dogs', '                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam laborum incidunt voluptatum, reprehenderit molestiae, aspernatur eius error similique vitae temporibus laboriosam unde? Deserunt amet labore eligendi explicabo, possimus fugiat sint?', 75.25, 1076, 72, 2, 100003, 1, '2020-12-06 23:30:07'),
(1027, 'EK CHAIN	QX-ring Seal Chain', '', 2498.42, 121, 2, 1, 0, 1, '2020-12-15 17:21:33'),
(1028, 'BEAMSUniversal Silencer', '', 13083.84, 2, 0, 1, 0, 1, '2020-12-15 17:37:36'),
(1029, 'NOLAN	N405 GT', '', 12058.11, 32, 0, 14, 100004, 1, '2020-12-15 17:39:54'),
(1030, 'GK-132 Rain Over Gloves', '', 1627.67, 21, 0, 1, 100003, 1, '2020-12-15 17:42:02'),
(1031, 'YG-084R All-Weather Glove', '', 1627.67, 233, 0, 13, 100004, 1, '2020-12-15 17:43:24'),
(1032, 'Half Finger Gloves', '', 2148.64, 1232, 0, 2, 0, 1, '2020-12-15 17:44:28'),
(1033, 'Titanium Caliper Bolt', '', 10174.58, 23, 0, 2, 100002, 1, '2020-12-15 17:53:29'),
(1034, 'Radial Monoblock Caliper Kit', 'fajlkdjf;awefawefawefawef', 26442.52, 4, 0, 1, 0, 1, '2020-12-15 17:55:05'),
(1035, 'PRO Phil Air Chuck', '', 3076.76, 12, 0, 2, 100002, 1, '2020-12-15 17:56:53'),
(1036, 'Rear Sets 4 Position', '', 26233.39, 0, 0, 0, 0, 1, '2020-12-15 17:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subtotal` float(10,2) NOT NULL DEFAULT 0.00,
  `discount` float(10,2) DEFAULT 0.00,
  `total` float(10,2) NOT NULL,
  `payment_method` varchar(50) DEFAULT 'Cash Payment',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`order_id`, `user_id`, `subtotal`, `discount`, `total`, `payment_method`, `created_at`) VALUES
(702002, -1, 0.00, 15.05, 60.20, 'Cash Payment', '2020-12-14 05:07:28'),
(702003, -1, 0.00, 0.00, 75.25, 'Cash Payment', '2020-12-14 05:07:56'),
(702025, 100013, 0.00, 115.05, 529.23, 'Check Payment', '2020-12-14 06:04:19'),
(702026, -1, 0.00, 0.00, 84.28, 'Cash Payment', '2020-12-14 06:05:23'),
(702027, -1, 0.00, 0.00, 1450.29, 'Cash Payment', '2020-12-14 06:08:59'),
(702028, 100013, 0.00, 0.00, 560.00, 'Cash on Delivery', '2020-12-15 16:57:30'),
(702029, 100013, 0.00, 0.00, 560.00, 'Cash on Delivery', '2020-12-15 17:05:59'),
(702030, 100013, 0.00, 0.00, 6289.90, 'Cash on Delivery', '2020-12-15 17:15:26'),
(702031, -1, 0.00, 0.00, 560.00, 'Cash Payment', '2020-12-15 18:58:45'),
(702032, 100011, 0.00, 0.00, 1011.36, 'Cash Payment', '2020-12-17 17:45:32'),
(702033, -1, 0.00, 999.37, 4597.09, 'Cash Payment', '2020-12-08 17:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `address`, `phone_number`, `status`) VALUES
(100002, 'Samya', 'Japan Ambots', '+639192791759', 1),
(100003, 'NCCC', 'Tagum', '+639192791759', 0),
(100004, 'Viva Royal Trading CO.', 'Taiwan, Province Of China', '+639192791759', 1),
(100005, 'Continental Engines LTD', 'Southern Asia India', '+639192791753', 1),
(100006, 'SANWU ELECTRIC INDUSTRY CO.', 'DISTRICT, GUANGZHOU,CHINA', '+639192791751', 1),
(100007, 'LUNG KU MACHINERY CO., LTD', 'ROAD TALI CITY, TAICHUNG TW', '+639123789162', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text DEFAULT 'No address inputted',
  `email` varchar(200) NOT NULL,
  `password` varchar(128) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `email`, `password`, `type`, `status`, `created_at`) VALUES
(100010, 'Gisan Geff Raniego', 'No address inputted', 'geff@gmail.com', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 1, 1, '2020-12-15 17:42:02'),
(100011, 'Carlos Echavez', 'No address inputted', 'kekebeke@gmail.com', '3ef5f67410cc79ab1578bb12a753720c8a62a0306441e7c3fa99484cdf2944f363b05f772878ba28155b5d0e29de49bdac746e08a07928d1a08ff1db71814aa5', 1, 1, '2020-12-20 17:25:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=432;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1038;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100021;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
