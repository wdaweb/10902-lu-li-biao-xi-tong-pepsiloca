-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 07:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume_loca`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234'),
(2, 'root123', 'root123');

-- --------------------------------------------------------

--
-- Table structure for table `bottom`
--

CREATE TABLE `bottom` (
  `id` int(10) UNSIGNED NOT NULL,
  `bottom` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bottom`
--

INSERT INTO `bottom` (`id`, `bottom`) VALUES
(1, '頁尾');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE `exp` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`id`, `title`, `year`, `content`, `sh`) VALUES
(1, '龍璟興業股份有限公司', ' Mar 2018 ~ Aug 2019', '1.壁飾貼紙繪圖與編排\r\n2.筆記本封面繪圖設計\r\n3.流行性小貼紙與貼紙本設計與編排\r\n4.迪士尼授權貼紙編排設計', 1),
(2, '永丰宜禮品文具有限公司', 'Aug 2016 ~ Oct 2017', '1.文具禮品設計: 賀卡 / 包裝紙圖樣 / 擺飾品 / 手提袋 / 筆記本\r\n2.網路商城上架管理與FB粉絲團管理', 1),
(3, '譁榮企業股份有限公司', 'Apr 2012 ~ Oct 2015', '1.展場規劃與商品陳列\r\n2.產品包裝設計與排版\r\n3.商品拍攝\r\n4.海報 / 傳單 / 目錄平面印刷相關設計\r\n5.產品絲印 / 標貼設計', 1);

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `img`, `text`, `sh`) VALUES
(10, 'intro-bg.jpg', 'bg', 0),
(11, 'bg.jpg', 'bg1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `id` int(10) UNSIGNED NOT NULL,
  `total` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`id`, `total`) VALUES
(1, 777883);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
