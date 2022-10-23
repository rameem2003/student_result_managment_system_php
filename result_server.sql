-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 05:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result_server`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_user` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_user`, `admin_pass`) VALUES
(1, 'rameem', '451638');

-- --------------------------------------------------------

--
-- Table structure for table `semester_6th_data`
--

CREATE TABLE `semester_6th_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `regi` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pse_mn` int(255) NOT NULL,
  `pse_pn` int(255) NOT NULL,
  `pse_cn` int(255) NOT NULL,
  `mi_mn` int(255) NOT NULL,
  `mi_pn` int(255) NOT NULL,
  `mi_cn` int(255) NOT NULL,
  `ma_mn` int(255) NOT NULL,
  `ma_pn` int(255) NOT NULL,
  `ma_cn` int(255) NOT NULL,
  `db_mn` int(255) NOT NULL,
  `db_pn` int(255) NOT NULL,
  `db_cn` int(255) NOT NULL,
  `wm_mn` int(255) NOT NULL,
  `wm_pn` int(255) NOT NULL,
  `wm_cn` int(255) NOT NULL,
  `es_mn` int(255) NOT NULL,
  `es_pn` int(255) NOT NULL,
  `es_cn` int(255) NOT NULL,
  `im_mn` int(255) NOT NULL,
  `im_pn` int(255) NOT NULL,
  `im_cn` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester_6th_data`
--

INSERT INTO `semester_6th_data` (`id`, `name`, `roll`, `regi`, `f_name`, `m_name`, `phone`, `email`, `pse_mn`, `pse_pn`, `pse_cn`, `mi_mn`, `mi_pn`, `mi_cn`, `ma_mn`, `ma_pn`, `ma_cn`, `db_mn`, `db_pn`, `db_cn`, `wm_mn`, `wm_pn`, `wm_cn`, `es_mn`, `es_pn`, `es_cn`, `im_mn`, `im_pn`, `im_cn`) VALUES
(1, 'Mahmood Hassan Rameem', '451638', '1502020501', 'ANM Mudassir Hossain', 'NIjhum Akter', '01310346825', 'rameem2019@gmail.com', 25, 50, 50, 25, 50, 40, 25, 50, 50, 25, 50, 50, 25, 50, 40, 30, 0, 40, 25, 0, 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester_6th_data`
--
ALTER TABLE `semester_6th_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `semester_6th_data`
--
ALTER TABLE `semester_6th_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
