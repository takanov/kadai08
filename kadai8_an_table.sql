-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 6 月 30 日 05:42
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kadai8_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai8_an_table`
--

CREATE TABLE `kadai8_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `address` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kadai8_an_table`
--

INSERT INTO `kadai8_an_table` (`id`, `name`, `email`, `content`, `lat`, `lng`, `address`, `indate`) VALUES
(6, 'test', 'test2@sample.com', 'テスト', 35.6679, 138.053, 'M393+54 日本、長野県大鹿村', '2023-06-30 12:35:40'),
(7, 'test', 'test2@sample.com', 'ここにカブトムシいたよ', 35.4534, 138.185, 'F53M+9V 日本、静岡県静岡市葵区', '2023-06-30 12:36:20'),
(8, '恐竜がいたよ', 'トリケラトプス', 'トリケラトプスの仲間化石が出たみたい', 35.5295, 137.536, '日本、〒508-0006 岐阜県中津川市落合２４７７', '2023-06-30 12:39:17'),
(9, 'ネプチューンオオカブト', 'カブトムシ', '90cmの大きいカブトムシ', 13.4619, 121.66, 'FM65+QR フィリピン マリンドゥケ ボアク', '2023-06-30 12:40:49');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai8_an_table`
--
ALTER TABLE `kadai8_an_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kadai8_an_table`
--
ALTER TABLE `kadai8_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
