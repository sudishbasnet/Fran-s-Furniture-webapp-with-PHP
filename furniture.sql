-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 01:39 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'Bed'),
(4, 'Sofas'),
(5, 'Wardrobes'),
(6, 'Dinning Set');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE IF NOT EXISTS `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `enquiry` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `performer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `mail`, `contact`, `enquiry`, `status`, `performer`) VALUES
(1, 'Alex Basnet', 'alex@mail.com', '123456789', 'Last week i bought  a shopa and it was damaged ..', 'Completed', 'Sudish Basnet'),
(2, 'Sita Thapa Basnet', 'suta@mai.com', '123456789', 'I got problem with the tea table which was bough a month ago', 'pending', ''),
(3, 'rita karki', 'rita@mai.com', '123456789', 'I got problem with the tea table which was bough a month ago', 'Completed', 'admin'),
(4, 'hari pandey Basnet', 'hari@mail.com', '123456789', 'I got problem with the tea table which was bough a month ago', 'Completed', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE IF NOT EXISTS `furniture` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `visibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'visible',
  `furniture_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`id`, `name`, `description`, `price`, `categoryId`, `visibility`, `furniture_condition`) VALUES
(1, 'Four Poster', 'A beautiful four poster double bed.', '999.00', 2, 'hided', 'second hand'),
(10, 'King', 'A king sized bed with a modern style', '659.00', 2, 'visible', 'second hand'),
(11, 'Corner Sofa', 'A modern styled corner sofa', '699.00', 4, 'visible', 'second hand'),
(12, 'Black Leather Sofa', 'A stylish classic. A black leather sofa, not out of place in any home!', '499.00', 4, 'visible', 'new'),
(13, 'Oak Wardrobe', 'An Oak Wardrobe, two drawers and space to hang all your clothes', '399.00', 5, 'visible', 'new'),
(14, 'Dinning Set', 'A well furnished dinning with a very comfortable \r\nfood time with family', '999.99', 6, 'visible', 'new'),
(15, 'Oval Tea table', 'Tea table for comfort ness', '300.00', 6, 'visible', 'second hand');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `furniture_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `furniture_id`) VALUES
(1, '1.jpg', 1),
(3, '0.jpg', 13),
(5, '11.jpg', 11),
(6, 'dinningset1.jpg', 14),
(7, 'dinningset2.jpg', 14),
(8, 'dinningset3.jpg', 14),
(9, '103a_2.jpg', 10),
(10, 'queen-bed-1724-1.jpg', 10),
(11, 'wardrobe11.jpg', 13),
(12, 'wardrobe22.jpg', 13),
(13, 'sofa33.jpg', 12),
(14, 'tessa-black-faux-leather-sofa.jpg', 12),
(15, 'shofa86.jpg', 12),
(16, '18.jpg', 15),
(17, '.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `name`, `contact`, `mail`, `address`, `password`) VALUES
(1, 'admin', 'admin', '123456789', '', 'sankhamul/kathmandu', 'admin'),
(2, 'sudish', 'Sudish Basnet', '123456789', 'sudishbasnet@gmail.com', 'new baneshwor/ kathmandu', 'sudish');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE IF NOT EXISTS `updates` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `title`, `description`, `date`) VALUES
(1, 'Dashain-Tihar office time', 'On the occasion of dashain and tihar our shop has planned to change in opening hours as per the customers requirement.\r\n\r\nThe time will be 11-5 from Monday to Saturday and shop remains closed on Sunday.\r\n\r\nThank you!! ', '2019-04-28 15:18:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
