-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-12 20:33:04
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `lost_animals`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Account` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`ID`, `Account`, `Password`) VALUES
(1, 'admin', '12345678');

-- --------------------------------------------------------

--
-- 資料表結構 `adopted_animal`
--

CREATE TABLE `adopted_animal` (
  `ID` int(11) NOT NULL,
  `Animal_ID` int(11) NOT NULL,
  `Owner_ID` int(11) NOT NULL,
  `Adopted_date` date NOT NULL,
  `Mark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `animals`
--

CREATE TABLE `animals` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Sex` enum('公','母') NOT NULL,
  `Age` int(3) NOT NULL,
  `Birthday` date NOT NULL,
  `Find_Date` datetime NOT NULL,
  `Lost` tinyint(1) NOT NULL,
  `Adobted` tinyint(1) NOT NULL,
  `Mark` varchar(100) NOT NULL,
  `Pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `animals`
--

INSERT INTO `animals` (`ID`, `Name`, `Sex`, `Age`, `Birthday`, `Find_Date`, `Lost`, `Adobted`, `Mark`, `Pic`) VALUES
(3, 'Kevin', '公', 13, '2022-06-08', '2022-06-22 01:08:22', 0, 0, '品種：混種狗<br>\r\n類別：犬<br>\r\n性別：母<br>\r\n來源：板橋區', 'pradog1.jpg'),
(4, 'Majjor', '母', 13, '2022-06-08', '2022-06-24 01:08:59', 0, 0, '', 'pradog2.jpg'),
(6, 'pradog6', '', 0, '2022-06-09', '2022-06-29 00:00:00', 0, 0, '這狗會飛', 'pradog61.jpg'),
(7, 'Majjor', '', 0, '2022-06-01', '2022-07-06 00:00:00', 0, 0, 'he can fly', 'pradog62.jpg'),
(8, 'waterfish', '', 0, '2022-06-08', '2022-06-16 00:00:00', 0, 0, '他會飛', 'pradog19.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `animals2`
--

CREATE TABLE `animals2` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Sex` enum('公','母') NOT NULL,
  `Age` int(3) NOT NULL,
  `Birthday` date NOT NULL,
  `Find_Date` datetime NOT NULL,
  `Lost` tinyint(1) NOT NULL,
  `Adobted` tinyint(1) NOT NULL,
  `Mark` varchar(100) NOT NULL,
  `Pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `animals2`
--

INSERT INTO `animals2` (`ID`, `Name`, `Sex`, `Age`, `Birthday`, `Find_Date`, `Lost`, `Adobted`, `Mark`, `Pic`) VALUES
(3, 'Kevin', '公', 13, '2022-06-08', '2022-06-22 01:08:22', 0, 0, '品種：混種狗<br>\r\n類別：犬<br>\r\n性別：母<br>\r\n來源：板橋區', 'pradog1.jpg'),
(6, 'Majjor', '', 0, '2022-06-01', '2022-07-06 00:00:00', 0, 0, 'she can fly\r\n', 'pradog63.jpg'),
(7, 'magic cat', '', 0, '2022-06-08', '2022-06-15 00:00:00', 0, 0, '這隻貓他住在板橋區，非常可愛', 'pradog181.jpg'),
(8, 'magic cat 2', '', 0, '2022-06-08', '2022-06-15 00:00:00', 0, 0, '他住在淡水', 'pradog101.jpg'),
(9, 'magic cat 3', '', 0, '2022-06-08', '2022-06-15 00:00:00', 0, 0, '他住在高雄', 'pradog182.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `applicationform`
--

CREATE TABLE `applicationform` (
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `petID` int(11) NOT NULL,
  `Sendtime` varchar(20) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `applicationform`
--

INSERT INTO `applicationform` (`ID`, `userID`, `petID`, `Sendtime`) VALUES
(1, 0, 5, '0'),
(2, 20, 5, '0'),
(3, 20, 5, '1655052292'),
(4, 20, 5, '1655052317'),
(5, 20, 5, '22'),
(6, 20, 5, '2022'),
(7, 20, 5, '2022'),
(8, 20, 5, '2022'),
(9, 20, 5, '2022-06-12 18:48:08'),
(10, 20, 6, '2022-06-12 18:52:21'),
(11, 20, 6, '2022-06-12 19:36:23'),
(12, 20, 6, '2022-06-12 19:37:36'),
(13, 20, 6, '2022-06-12 19:47:01'),
(14, 20, 6, '2022-06-12 19:47:53'),
(15, 20, 6, '2022-06-12 19:49:43'),
(16, 20, 6, '2022-06-12 19:49:46'),
(17, 20, 8, '2022-06-12 19:54:47');

-- --------------------------------------------------------

--
-- 資料表結構 `q&a`
--

CREATE TABLE `q&a` (
  `ID` int(11) NOT NULL,
  `Upload_user` int(11) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `Answer` varchar(500) NOT NULL,
  `Top` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(8) NOT NULL,
  `Account` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Sex` enum('男','女') NOT NULL,
  `Age` int(3) NOT NULL,
  `PetsAmount` int(3) NOT NULL,
  `Salary` int(10) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Qualification` tinyint(1) NOT NULL,
  `Mark` varchar(100) NOT NULL,
  `Identity` varchar(50) NOT NULL,
  `Permission` enum('是','否') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`ID`, `Name`, `Account`, `Password`, `Sex`, `Age`, `PetsAmount`, `Salary`, `Phone`, `Qualification`, `Mark`, `Identity`, `Permission`) VALUES
(1, 'Majjor', 'abcd', '12345678', '男', 21, 2, 50000, '', 1, 'None', '', '是'),
(2, 'Kevin', 'ab', 'dsf', '男', 55, 215, 55555, '', 1, 'None', '', '是'),
(20, 'Majjor', 'admin', '12345678', '男', 21, 2, 50000, '', 1, '', '', '是'),
(22, '1123123', 'Majjor34', '12345678', '', 0, 0, 0, '', 0, 'None', 'Majjor340.jpg,', '是'),
(23, '1123123', 'Majjor34555', '12345678', '', 0, 0, 0, '0955080381', 0, 'None', 'Majjor345550.jpg,Majjor345551.jpg,', '是');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `adopted_animal`
--
ALTER TABLE `adopted_animal`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `animals2`
--
ALTER TABLE `animals2`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `applicationform`
--
ALTER TABLE `applicationform`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `q&a`
--
ALTER TABLE `q&a`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `adopted_animal`
--
ALTER TABLE `adopted_animal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `animals`
--
ALTER TABLE `animals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `animals2`
--
ALTER TABLE `animals2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `applicationform`
--
ALTER TABLE `applicationform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `q&a`
--
ALTER TABLE `q&a`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
