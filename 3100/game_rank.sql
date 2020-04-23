-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 
-- 伺服器版本： 10.4.10-MariaDB
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `game_rank`
--

-- --------------------------------------------------------

--
-- 資料表結構 `chess`
--

DROP TABLE IF EXISTS `chess`;
CREATE TABLE IF NOT EXISTS `chess` (
  `username` varchar(10) NOT NULL,
  `win` int(11) NOT NULL,
  `played` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `chess`
--

INSERT INTO `chess` (`username`, `win`, `played`) VALUES
('test', 3, 6),
('tyy', 1, 1),
('test3', 9, 9),
('test2', 31, 41);

-- --------------------------------------------------------

--
-- 資料表結構 `matching`
--

DROP TABLE IF EXISTS `matching`;
CREATE TABLE IF NOT EXISTS `matching` (
  `username` varchar(10) NOT NULL,
  `cnt` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `matching`
--

INSERT INTO `matching` (`username`, `cnt`) VALUES
('test', 20),
('test2', 36);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
