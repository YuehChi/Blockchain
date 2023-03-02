-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-11 16:32:34
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ycrent`
--

-- --------------------------------------------------------

--
-- 資料表結構 `contact`
--

CREATE TABLE `contact` (
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `contact`
--

INSERT INTO `contact` (`email`, `name`, `subject`, `message`) VALUES
('musicblockchain110@gmail.com', '幹', '123', '456'),
('musicblockchain110@gmail.com', '幹', '123', '456'),
('musicblockchain110@gmail.com', 'YA', '123', 'HI'),
('sdd@gmail.com', '陳妙麗', 'ewdffew', 'wefwe'),
('sdd@gmail.com', '陳妙麗', 'ewdffew', 'wefwe'),
('sdd@gmail.com', '陳妙麗', 'ewdffew', 'r'),
('musicchain@gmail.com', '陳妙麗', '音樂區塊鍊', '謝謝觀賞!'),
('musicchain@gmail.com', '陳妙麗', '音樂區塊鏈', '謝謝觀賞!'),
('zzzzzz@gmail.com', 'YYAA', 'HI', 'HELLO');

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
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tId` int(5) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `tEth` int(10) NOT NULL,
  `pName` varchar(50) NOT NULL,
  `pType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `transaction`
--

INSERT INTO `transaction` (`email`, `tId`, `startDate`, `endDate`, `tEth`, `pName`, `pType`) VALUES
('musicchain@gmail.com', 1, '2020-10-07', '2020-10-09', 2, 'violin', '1'),
('musicchain@gmail.com', 2, '2020-10-15', '2020-10-16', 2, 'piano', '2'),
('test1015@gmail.com', 3, '2020-10-07', '2020-10-08', 2, 'violin', '1'),
('musicchain@gmail.com', 4, '2020-11-03', '2020-11-15', 2, 'guitar', '1');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `snumber` varchar(20) NOT NULL,
  `cellphone` varchar(20) NOT NULL,
  `iwallet` int(11) NOT NULL,
  `bd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`email`, `password`, `username`, `snumber`, `cellphone`, `iwallet`, `bd`) VALUES
('asd@gmail.com', 'zxcvbn', 'YA', 'O123456789', '0123456789', 753159, '1995-05-07'),
('asdf@gmail.com', 'qazwsx', 'YA', 'O123456789', '09999999', 753159, '2020-09-24'),
('asdg@gmail.com', 'wsxedc', 'YA', 'O123456789', '09999999', 753159, '2020-09-28'),
('musicchain@gmail.com', 'mis110', '陳妙麗', 'N123456789', '0912345678', 0, '2020-10-07'),
('test1015@gmail.com', 'mis110', 'test1015', 'T123456789', '0123456789', 0, '2020-10-15'),
('test1018@gmail.com', '8520741963', 'YAA', 'O223456780', '0123456789', 0, '2020-11-01'),
('zxc@gmail.com', 'cxznbv', 'YA', 'O123456789', '09999999', 753159, '1995-05-07');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tId`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`,`snumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
