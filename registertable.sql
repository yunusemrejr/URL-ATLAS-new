-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 09, 2022 at 12:32 PM
-- Server version: 10.3.34-MariaDB-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webswptt_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `registertable`
--

CREATE TABLE `registertable` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registertable`
--

INSERT INTO `registertable` (`name`, `password`) VALUES
(' ', ' '),
(' 1', '1'),
(' 16', '1'),
(' yunus', ' '),
('1', '1'),
('11', '11'),
('4', '4'),
('434343', '434'),
('5', '5'),
('55', '55'),
('Caaa', 'caaa'),
('cabbar1', 'CABBAR'),
('d', 'd'),
('dd', 'dd'),
('demo', 'demo'),
('ff', 'ff'),
('fred', 'fred'),
('jACK', '$2y$10$rYhJyFkGfKV63H6onJ81n4W'),
('lolippo', 'nooon'),
('red', 'red'),
('test', 'test'),
('tree', 'tree'),
('trees', 'trees'),
('trghrthtr', 'hrthrtht'),
('yunusemre', 'vurgun'),
('yun7754', '$2y$10$1CkIXUMNMDSnDhwjCDtIAp5Dqq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registertable`
--
ALTER TABLE `registertable`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
