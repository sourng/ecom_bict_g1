-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 03:47 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_khmerlokk.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brands`
--

CREATE TABLE `tbl_brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) DEFAULT NULL,
  `brand_icon` varchar(50) DEFAULT NULL,
  `brand_img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) DEFAULT NULL,
  `cat_icon` varchar(50) DEFAULT NULL,
  `cat_img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`cat_id`, `cat_name`, `cat_icon`, `cat_img`) VALUES
(1, 'Clothing', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(250) DEFAULT NULL,
  `cus_email` varchar(250) DEFAULT NULL,
  `cus_password` varchar(250) DEFAULT NULL,
  `cus_phone` varchar(250) DEFAULT NULL,
  `cus_address` text,
  `cus_avtar` varchar(250) DEFAULT NULL,
  `cus_status` enum('Y','N') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `ord_id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `ord_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders_detail`
--

CREATE TABLE `tbl_orders_detail` (
  `ord_detail_id` int(11) NOT NULL,
  `ord_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `disacount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `pro_id` int(11) NOT NULL,
  `pro_cat_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `pro_name` varchar(250) DEFAULT NULL,
  `pro_feature` varchar(250) DEFAULT NULL,
  `pro_img_folder` varchar(250) DEFAULT NULL,
  `pro_price` float DEFAULT NULL,
  `pro_detail` text,
  `pro_des` varchar(250) DEFAULT NULL,
  `pro_keyword` text,
  `pro_status` enum('Y','N') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`pro_id`, `pro_cat_id`, `cat_id`, `pro_name`, `pro_feature`, `pro_img_folder`, `pro_price`, `pro_detail`, `pro_des`, `pro_keyword`, `pro_status`) VALUES
(1, NULL, 1, 'Floral Print Buttoned', 'p1.jpg', NULL, 800, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', NULL, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_categories`
--

CREATE TABLE `tbl_products_categories` (
  `pro_cat_id` int(11) NOT NULL,
  `pro_cat_name` varchar(50) DEFAULT NULL,
  `Pro_cat_icon` varchar(50) DEFAULT NULL,
  `pro_cat_img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `tbl_orders_detail`
--
ALTER TABLE `tbl_orders_detail`
  ADD PRIMARY KEY (`ord_detail_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `FK_tbl_products_tbl_categories` (`cat_id`);

--
-- Indexes for table `tbl_products_categories`
--
ALTER TABLE `tbl_products_categories`
  ADD PRIMARY KEY (`pro_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_orders_detail`
--
ALTER TABLE `tbl_orders_detail`
  MODIFY `ord_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_products_categories`
--
ALTER TABLE `tbl_products_categories`
  MODIFY `pro_cat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD CONSTRAINT `FK_tbl_products_tbl_categories` FOREIGN KEY (`cat_id`) REFERENCES `tbl_categories` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
