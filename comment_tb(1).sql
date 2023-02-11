-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2023 at 09:51 AM
-- Server version: 8.0.31-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_tb`
--

CREATE TABLE `comment_tb` (
  `id` int NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(32) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ip` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment_tb`
--

INSERT INTO `comment_tb` (`id`, `name`, `email`, `description`, `ip`, `time`, `approved`, `deleted`) VALUES
(60, 'John Doe', 'simple@test.com', 'Este é um comentário exemplo para testes.<br/>Loren Ipsum Dolor Sit Amed!', '127.0.0.1', '2023-01-13 22:09:01', 0, 1),
(61, 'dsasda', 'test@rio.com', '<p>csacasc</p>', '127.0.0.1', '2023-01-13 22:09:32', 0, 1),
(62, 'vsvsa', 'test@rio.com', '<p>svav</p>', '127.0.0.1', '2023-01-13 22:29:15', 0, 1),
(63, 'Teste', 'test@rio.com', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>', '127.0.0.1', '2023-01-14 22:56:51', 0, 1),
(64, 'vsav', 'test@rio.com', '<p>svavas</p>', '127.0.0.1', '2023-01-15 17:16:40', 0, 1),
(65, 'csac', 'test@rio.com', '<p>aaaaaaaaaaaaaaaaaaaa</p>', '127.0.0.1', '2023-01-15 17:17:46', 0, 1),
(66, 'cascsac', 'csa@das.com', '<p>csacascsacsac</p>', '127.0.0.1', '2023-01-24 22:11:36', 0, 1),
(67, 'csascasc', 'csa@das.com', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>', '127.0.0.1', '2023-01-24 22:52:40', 0, 0),
(68, 'cas', 'test@rio.com', '<p>você é muito linda</p>', '127.0.0.1', '2023-01-29 15:44:47', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_tb`
--
ALTER TABLE `comment_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_tb`
--
ALTER TABLE `comment_tb`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
