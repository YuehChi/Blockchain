-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-09-30 18:20:51
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `product`
--

-- --------------------------------------------------------

--
-- 資料表結構 `m_member`
--

CREATE TABLE `m_member` (
  `m_id` int(10) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_address` varchar(100) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `m_member`
--

INSERT INTO `m_member` (`m_id`, `m_name`, `m_email`, `m_address`, `PASSWORD`) VALUES
(1, 'test1', 'test1@testmail.com', 'TESTTESTTESTTESTTESTTESTTESTTEST', 'test1'),
(2, 'test2', 'test2@testmail.com', 'TESTTESTTESTTESTTESTTESTTESTTEST', 'test2'),
(3, 'test3', 'test3@testmail.com', 'TESTTESTTESTTESTTESTTESTTESTTEST', 'test3'),
(4, 'test4', 'test4@testmail.com', 'TESTTESTTESTTESTTESTTESTTESTTEST', 'test4'),
(5, 'test5', 'test5@testmail.com', 'TESTTESTTESTTESTTESTTESTTESTTEST', 'test5');

-- --------------------------------------------------------

--
-- 資料表結構 `m_product`
--

CREATE TABLE `m_product` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_price` decimal(10,2) NOT NULL,
  `p_manufacturer` varchar(50) NOT NULL,
  `p_certificate` varchar(100) NOT NULL,
  `p_MFD` date NOT NULL,
  `p_times` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `m_product`
--

INSERT INTO `m_product` (`p_id`, `p_name`, `p_price`, `p_manufacturer`, `p_certificate`, `p_MFD`, `p_times`) VALUES
(1, 'test', '999999.00', 'TestTestTest', 'https://unsplash.com/photos/gnLeC4fYDhQ', '2020-09-16', 2),
(2, 'Test2', '8888888.00', 'TestTestTest2', 'https://unsplash.com/photos/5ISYA40gj60', '2020-09-16', 3),
(3, 'Test3', '7777777.00', 'TestTestTest3', 'https://unsplash.com/photos/YNQrwks9uG8', '2020-09-16', 2),
(3, 'Test3', '6666666.00', 'TestTestTest3', 'https://unsplash.com/photos/kvpSa5kIPsg', '2020-09-16', 2),
(4, 'Test4', '5555555.00', 'TestTestTest4', 'https://unsplash.com/photos/iskEeuNgki0', '2020-09-16', 2),
(5, 'Test5', '444444.00', 'TestTestTest5', 'https://unsplash.com/photos/FAWmgSZIyvU', '2020-09-16', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `transaction`
--

CREATE TABLE `transaction` (
  `tId` int(10) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `tEth` int(10) NOT NULL,
  `pName` varchar(50) NOT NULL,
  `pType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `transaction`
--

INSERT INTO `transaction` (`tId`, `startDate`, `endDate`, `tEth`, `pName`, `pType`) VALUES
(24, '2020-09-30', '2020-10-01', 5, 'pName', 'A');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tId`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
