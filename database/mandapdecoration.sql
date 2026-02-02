-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2025 at 06:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mandapdecoration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'jaydip', '#jaydip'),
(2, 'admin', '#admin');

-- --------------------------------------------------------

--
-- Table structure for table `booknow`
--

CREATE TABLE `booknow` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `dayofdecoration` varchar(20) NOT NULL,
  `total` varchar(30) NOT NULL,
  `payment` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booknow`
--

INSERT INTO `booknow` (`id`, `name`, `image`, `price`, `dayofdecoration`, `total`, `payment`, `address`, `mobile`, `user_id`) VALUES
(3, 'Anniversary Party', 'anniversary-party1.webp', '15500', '1', '15500', 'Cash on Delivery', 'Madhuram junagadh', '8976543289', 1),
(4, 'Holi Decoration', 'holi-festival1.jpg', '3000', '1', '3000', 'Cash on Delivery', 'natavar nagar bagasara', '7865780956', 1),
(5, 'Wedding Decoration', 'wedding.jpg', '20000', '2', '40000', 'Cash on Delivery', 'natavar nagar bagasara', '9714032218', 4);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'party'),
(2, 'wedding'),
(3, 'festival');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` int(10) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(2, 'rohan', 'rohan@gmail.com', 2147483647, 'decoration', 'decoration in problem'),
(3, 'mohan', 'mohan@gmail.com', 2147483647, 'about', 'about page is not paid full ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `rating` varchar(45) NOT NULL,
  `message` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `rating`, `message`) VALUES
(1, 'thummar jaydip', 'thummarjaydip26@gmail.com', '5 star', 'made excellent website'),
(2, 'rohan', 'rohan@gmail.com', '4 star', 'your website work smoothly'),
(3, 'mohan', 'mohan@gmail.com', '1 star', 'your website is very bed');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `name`, `image`) VALUES
(7, 'anniversary party', 'anniversary-party1.webp'),
(8, 'anniversary party', 'anniversary-party2.jpeg'),
(9, 'birthday party', 'birthday-party.webp'),
(10, 'birthday party', 'birthday-party2.jpg'),
(11, 'diwali festival', 'diwali-festival.webp'),
(12, 'diwali festival', 'diwali-festival2.jpeg'),
(13, 'game party', 'game-party.webp'),
(14, 'game party', 'game-party2.jpg'),
(15, 'ganpati festival', 'ganpti-festival.jpg'),
(16, 'ganpati festival', 'ganpti-festival.webp'),
(17, 'haldi', 'haldi.jpeg'),
(18, 'haldi', 'haldi2.webp'),
(19, 'haldi', 'haldi3.jpeg'),
(20, 'holi festival', 'holi-festival.jpg'),
(21, 'holi festival', 'holi-festival1.jpg'),
(22, 'janmastmi festival', 'janmastmi-festival.jpg'),
(23, 'janmastmi festival', 'janmastmi-festival2.jpg'),
(24, 'kitty party', 'kitty-party.jpg'),
(25, 'kitty party', 'kitty-party2.jpg'),
(26, 'navratri festival', 'festival.jpeg'),
(27, 'navratri festival', 'navratri-festival2.jpg'),
(28, 'ras garba', 'ras-garba2.jpeg'),
(29, 'ras garba', 'ras-garba3.jpeg'),
(30, 'wedding ', 'wedding.jpg'),
(31, 'wedding ', 'wedding1.jpg'),
(32, 'wedding ', 'wedding2.jpg'),
(33, 'wedding ', 'wedding3.jpg'),
(34, 'party', 'party.jpg'),
(35, 'party', 'party2.webp'),
(36, 'festival', 'festival.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(100) NOT NULL,
  `subcategory_id` int(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` varchar(50) NOT NULL,
  `description` varchar(70) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `name`, `price`, `description`, `image`) VALUES
(6, 1, 1, 'Game Party', '1900', 'game party', 'game-party.webp'),
(7, 1, 1, 'Game Party', '15000', 'profestional game party', 'game-party2.jpg'),
(8, 1, 2, 'Anniversary Party', '15500', 'anniversary party', 'anniversary-party1.webp'),
(9, 1, 2, 'Anniversary Party', '10000', 'anniversary party', 'anniversary-party2.jpeg'),
(10, 1, 3, 'Kitty Party', '5000', 'kitty party', 'kitty-party.jpg'),
(11, 1, 3, 'Kitty Party', '1500', 'kitty party decoration', 'kitty-party2.jpg'),
(13, 1, 4, 'Birthday Party', '1700', 'birthday party decoration', 'birthday-party.webp'),
(14, 1, 4, 'Birthday Party', '2200', 'birthday party decoration', 'birthday-party2.jpg'),
(15, 2, 5, 'Haldi Decoration', '5000', 'haldi decoration', 'haldi.jpeg'),
(16, 2, 5, 'Haldi Decoration', '5500', 'haldi decoration', 'haldi2.webp'),
(17, 2, 5, 'Haldi Decoration', '6000', 'haldi decoration', 'haldi3.jpeg'),
(18, 2, 6, 'Ras Garba Decoration', '7000', 'ras garba decoration', 'ras-garba2.jpeg'),
(19, 2, 6, 'Ras Garba Decoration', '8000', 'ras garba decoration', 'ras-garba3.jpeg'),
(20, 2, 7, 'Wedding Decoration', '20000', 'wedding decoration', 'wedding.jpg'),
(21, 2, 7, 'Wedding Decoration', '25000', 'wedding decoration', 'wedding1.jpg'),
(22, 3, 8, 'Diwali Decoration', '7000', 'diwali festival decoration', 'diwali-festival.webp'),
(23, 3, 8, 'Diwali Decoration', '5000', 'diwali festival decoration', 'diwali-festival2.jpeg'),
(24, 3, 9, 'Holi Decoration', '1000', 'holi festival decoration', 'holi-festival.jpg'),
(25, 3, 9, 'Holi Decoration', '3000', 'holi festival decoration', 'holi-festival1.jpg'),
(26, 3, 10, 'Ganpati Decoration', '1500', 'ganpati festival decoration', 'ganpti-festival.jpg'),
(27, 3, 10, 'Ganpati Decoration', '2500', 'ganpati festival decoration', 'ganpti-festival.webp'),
(28, 3, 11, 'Janmashtami Decoration', '3000', 'janmashtami festival decoration', 'janmastmi-festival.jpg'),
(29, 3, 11, 'Janmashtami Decoration', '1500', 'janmashtami festival decoration', 'janmastmi-festival2.jpg'),
(30, 3, 12, 'Navaratri Decoration', '35000', 'navaratri festival decoration', 'navratri-festival.webp'),
(31, 3, 12, 'Navaratri Decoration', '5000', 'navaratri festival decoration ', 'navratri-festival2.jpg'),
(33, 1, 17, 'party decoration', '5500', 'party decoration', 'party.jpg'),
(34, 1, 17, 'party decoration', '4000', 'party decoration', 'party2.webp'),
(35, 2, 18, 'Wedding Decoration', '20000', 'wedding decoration', 'wedding2.jpg'),
(36, 2, 18, 'Wedding Decoration', '25000', 'wedding decoration', 'wedding3.jpg'),
(37, 3, 19, 'festival', '4000', 'festival decoration', 'festival.jpeg'),
(38, 3, 19, 'festival', '3000', 'festival decoration', 'festival2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `name`, `email`, `phone`, `password`, `gender`) VALUES
(1, 'jaydip', 'thummarraj26@gmail.com', 2147483647, 'jaydip123', 'male'),
(3, 'rohan', 'rohan@gmail.com', 2147483647, 'rohan123', 'male'),
(4, 'mohan', 'mohan@gmail.com', 2147483647, 'mohan123', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `category_id` int(100) NOT NULL,
  `subcategory_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `subcategory_name`) VALUES
(1, 1, 'game party'),
(2, 1, 'anniversary party'),
(3, 1, 'kitty party'),
(4, 1, 'birthday party'),
(5, 2, 'haldi decoration'),
(6, 2, 'ras-garba decoration'),
(7, 2, 'wedding decoration'),
(8, 3, 'diwali decoration'),
(9, 3, 'holi decoration'),
(10, 3, 'ganpati decoration'),
(11, 3, 'janmashtami decoration'),
(12, 3, 'navaratri decoration'),
(17, 1, 'party'),
(18, 2, 'wedding'),
(19, 3, 'festival');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booknow`
--
ALTER TABLE `booknow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booknow`
--
ALTER TABLE `booknow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
