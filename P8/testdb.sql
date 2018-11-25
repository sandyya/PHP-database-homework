-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 
-- 伺服器版本: 10.1.10-MariaDB
-- PHP 版本： 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `testdb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `No` int(11) NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Address` text COLLATE utf8_unicode_ci NOT NULL,
  `Tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Birthday` date NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Priority` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`No`, `Name`, `Address`, `Tel`, `Birthday`, `Email`, `Priority`) VALUES
(1, '陳會安', '台北縣五股成泰路一段1000號', '02-11111111', '1967-09-03', 'hueyan@ms2.hinet.net', 'H'),
(2, '江小魚', '中和景平路1000號', '02-22222222', '1978-02-02', 'jane@msl.hinet.net', 'M'),
(3, '劉德華', '桃園市三民路1000號', '02-33333333', '0182-03-03', 'lu@tpts2.seed.net.tw', 'L'),
(4, '郭富城', '台中市中港路三段500號', '03-44444444', '1981-04-04', 'ko@gcn.net.net', 'H'),
(5, '離明', '台南市中正路1000號', '04-55555555', '1978-05-05', 'light@msll.hinet.net', 'M');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`No`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
