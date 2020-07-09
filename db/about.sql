-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 07 月 09 日 17:46
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
-- 資料表結構 `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `about`
--

INSERT INTO `about` (`id`, `intro`, `bio`, `sh`) VALUES
(1, '擅長兒童插畫，從事平面設計工作。\r\n正在學習網頁設計，希望未來從事網頁前端設計相關工作。', '除了平面設計外，插畫也是我的興趣和專長。常利用工作之餘藉由閱讀相關書籍以及參加課程來增進插畫的專業技術。曾與國語日報、聯合報與慈濟人文志業配合製作了許多插畫作品。2016年也在新北市美麗永安舉辦插畫班師生聯合插畫展，2019年初更和童書作家合作成功出版了第一本繪本。經過數年在職場上的經驗，累積了許多對設計及插畫的心得以及成果，期許往後在創作上不斷有精采的作品。', 0),
(2, '網頁設計/UI/UX設計師', '我非常喜愛接觸人群及團隊合作。和他人相處或跨界交換意見時，了解不同的專業知識與想法不僅讓我更有活力，過程中更能激發出許多創意，讓公司的產品與服務更好。平時在書店或參觀展覽時習慣藉機分析、了解市場趨勢。深信多元化接觸相關領域可增進自己的專業知識與技能。\r\n\r\n謝謝代表貴公司閱讀此篇自傳的您，期待近日內即有機會到貴公司面試，並進一步以我的專業為貴公司服務！', 1),
(3, '擅長兒童插畫，從事平面設計工作。\r\n正在學習網頁設計，希望未來從事網頁前端設計相關工作。', '除了平面設計外，插畫也是我的興趣和專長。常利用工作之餘藉由閱讀相關書籍以及參加課程來增進插畫的專業技術。曾與國語日報、聯合報與慈濟人文志業配合製作了許多插畫作品。2016年也在新北市美麗永安舉辦插畫班師生聯合插畫展，2019年初更和童書作家合作成功出版了第一本繪本。經過數年在職場上的經驗，累積了許多對設計及插畫的心得以及成果，期許往後在創作上不斷有精采的作品。', 0),
(4, '網頁設計/UI/UX設計師', '我非常喜愛接觸人群及團隊合作。和他人相處或跨界交換意見時，了解不同的專業知識與想法不僅讓我更有活力，過程中更能激發出許多創意，讓公司的產品與服務更好。平時在書店或參觀展覽時習慣藉機分析、了解市場趨勢。深信多元化接觸相關領域可增進自己的專業知識與技能。\r\n\r\n謝謝代表貴公司閱讀此篇自傳的您，期待近日內即有機會到貴公司面試，並進一步以我的專業為貴公司服務！', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
