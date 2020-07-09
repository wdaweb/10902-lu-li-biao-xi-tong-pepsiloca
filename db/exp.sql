-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 07 月 09 日 03:00
-- 伺服器版本： 5.5.64-MariaDB
-- PHP 版本： 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1090206`
--

-- --------------------------------------------------------

--
-- 資料表結構 `exp`
--

CREATE TABLE `exp` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `exp`
--

INSERT INTO `exp` (`id`, `title`, `year`, `content`, `sh`) VALUES
(1, '龍璟興業股份有限公司', ' Mar 2018 ~ Aug 2019', '1.壁飾貼紙繪圖與編排\r\n2.筆記本封面繪圖設計\r\n3.流行性小貼紙與貼紙本設計與編排\r\n4.迪士尼授權貼紙編排設計', 1),
(2, '永丰宜禮品文具有限公司', 'Aug 2016 ~ Oct 2017', '1.文具禮品設計: 賀卡 / 包裝紙圖樣 / 擺飾品 / 手提袋 / 筆記本\r\n2.網路商城上架管理與FB粉絲團管理', 1),
(3, '譁榮企業股份有限公司', 'Apr 2012 ~ Oct 2015', '1.展場規劃與商品陳列\r\n2.產品包裝設計與排版\r\n3.商品拍攝\r\n4.海報 / 傳單 / 目錄平面印刷相關設計\r\n5.產品絲印 / 標貼設計', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
