-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-12-28 09:25:10
-- 伺服器版本: 5.7.14
-- PHP 版本： 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `online_store`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `balance` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `account`
--

INSERT INTO `account` (`user_id`, `user_name`, `password`, `birthday`, `phone`, `address`, `email`, `balance`) VALUES
(1, 'demo', 'demo', NULL, NULL, NULL, 'demo@gmail.com', 2048),
(2, 'test', 'test', NULL, NULL, NULL, 'test@gmail.com', 0),
(3, 'test2', 'test2', NULL, NULL, NULL, 'test2@gmail.com', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `cart`
--

CREATE TABLE `cart` (
  `user_id` int(10) NOT NULL,
  `pNo` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `cart`
--

INSERT INTO `cart` (`user_id`, `pNo`, `amount`, `total`) VALUES
(1, 5, 1, 149);

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `pNo` int(10) NOT NULL,
  `pName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `unitPrice` int(10) NOT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `img_url` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `product`
--

INSERT INTO `product` (`pNo`, `pName`, `unitPrice`, `category`, `description`, `img_url`) VALUES
(1, '聖誕禮盒', 499, '禮盒', '聖誕超值組合包\r\n內含:<br>\r\n1. 棒冰棒<br>\r\n2. 紅豆刨冰<br>\r\n3. 攻擊藥丸<br>\r\n4. 魔力藥丸<br>\r\n5. 命中藥丸<br>', 'uploads/1.jpg'),
(2, '英雄造型1', 199, '造型', '', 'uploads/2.jpg'),
(3, '英雄造型2', 199, '造型', '', ''),
(4, '忍者武士刀', 299, '武器', '', ''),
(5, '酷炫頭巾', 149, '帽子', '', ''),
(6, '時髦大衣', 149, '上衣', '', ''),
(7, '運動短褲', 129, '褲裙', '', ''),
(8, '幸運禮盒', 599, '禮盒', '超值組合包<br>\r\n內含:<br>\r\n1. 隨機英雄造型*3<br>\r\n2. 人物特效*1<br>\r\n3. 經典武器*1<br>\r\n4. 武器強化券*10<br>', '');

-- --------------------------------------------------------

--
-- 資料表結構 `transactions`
--

CREATE TABLE `transactions` (
  `tNo` int(10) NOT NULL,
  `transMid` int(10) NOT NULL,
  `method` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `transTime` datetime(6) NOT NULL,
  `detailNo` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `transactions`
--

INSERT INTO `transactions` (`tNo`, `transMid`, `method`, `transTime`, `detailNo`) VALUES
(4, 1, '貨到付款', '2018-12-24 11:21:51.000000', 'user_1_1545664911');

-- --------------------------------------------------------

--
-- 資料表結構 `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `detailNo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pNo` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `transaction_detail`
--

INSERT INTO `transaction_detail` (`detailNo`, `pNo`, `amount`) VALUES
('user_1_1545664911', 1, 2),
('user_1_1545664911', 2, 1);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 資料表索引 `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`user_id`,`pNo`),
  ADD KEY `pNo` (`pNo`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pNo`);

--
-- 資料表索引 `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`tNo`,`transMid`,`transTime`),
  ADD KEY `transMid` (`transMid`),
  ADD KEY `detail` (`detailNo`);

--
-- 資料表索引 `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`detailNo`,`pNo`),
  ADD KEY `pNo` (`pNo`),
  ADD KEY `detailNo` (`detailNo`),
  ADD KEY `detailNo_2` (`detailNo`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `account`
--
ALTER TABLE `account`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `pNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用資料表 AUTO_INCREMENT `transactions`
--
ALTER TABLE `transactions`
  MODIFY `tNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`pNo`) REFERENCES `product` (`pNo`);

--
-- 資料表的 Constraints `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`transMid`) REFERENCES `account` (`user_id`);

--
-- 資料表的 Constraints `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD CONSTRAINT `transaction_detail_ibfk_1` FOREIGN KEY (`pNo`) REFERENCES `product` (`pNo`),
  ADD CONSTRAINT `transaction_detail_ibfk_2` FOREIGN KEY (`detailNo`) REFERENCES `transactions` (`detailNo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
