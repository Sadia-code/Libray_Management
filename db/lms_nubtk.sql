-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 09:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_nubtk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `username`, `email`, `job`, `password`) VALUES
(1, 'Sadia Dipa', 'sadia_123', '', 'admin_1', '91b5cd208feabcc9b01cd14b7e4e83ad'),
(2, 'Zannatul Oyshi', 'oyshi_123', '', 'admin_2', '7b0de5d985dc9298a0e8a0fb6b76540f'),
(8, 'Afsana Yeasmin', 'afsana_123', '', 'admin_3', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'Adminstrator', 'admin_123', '', 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'sadia', 'sadia', 'sadiadipa99999@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`) VALUES
(0, 'sadiadipa99999@gmail.com', '0c3658158e149012ba2fe353ca47ae5eb17017e8ed8b4d1b1a31a50949224b9f9594f4012b45f569b1ace78a15d018ac0601'),
(0, 'sadiadipa99999@gmail.com', '1dc937fc09e75cbb04cb08b2c40321a2e27c08b3514affe6429e6ede8d9ef20800ea1705d01dfdf65fcc4aba86cb66cce3d6'),
(0, 'sadiadipa99999@gmail.com', '21a6b28513c5a24c3c33fba8f202d099bac1b599293b67803e15217e1e4648e79acff0b08f47d7ecd57be1d3fe32c096ccf7'),
(0, 'sadiadipa99999@gmail.com', '22142ea789df100d99833d86a3c0647ca40ccadd92823a52bd218874a5578ca5f49e88e7241c8c6d032211d0178c845b4a5f'),
(0, 'sadiadipa99999@gmail.com', '371817c63f0786d918090555e1d1b1c3be5e905a4fe95c7ace8e00af77f7464d8d092cba710878afa08fe5b055959faa6223'),
(0, 'sadiadipa99999@gmail.com', '39176e41717083a85ef01219d8ff99ee5cd4d2ec5632c8cb7e3035f14aa1e32ba870dc4f480f2c4d2f881292b902fd72429a'),
(0, 'sadiadipa99999@gmail.com', '3fcc11a55f04ff17974e95149dcb1d9efbf0f6a57cefa0703b0b5359ec31ba9177774d380d9db86d23683876dfcc852825aa'),
(0, 'sadiadipa99999@gmail.com', '4f9f4c8e5e222049f8d0216e1aca0dfd24a271e35975397ebb4f697f43b8ea18825cbbf461262639eaf154225f3a8ebbe709'),
(0, 'sadiadipa99999@gmail.com', '55b50f47befc9c53be5a0e3cc5a1e290016a7aefd50a981ae45ebd4589d3d9dbd201d5acb50441f8f4085dc9d7716da33e8c'),
(0, 'sadiadipa99999@gmail.com', '72edd9fabe3e1362cd07863cd89c1bde0dcec5b4b61bcf36053d948d6acd602eedf119a1a4bf4faa0175010b589f7d395501'),
(0, 'sadiadipa99999@gmail.com', '871b7541b56525f5d9c77693c9d7deb48a4da2b34ceed007e68b8eb469c04099609204e8cb2fc218295c4ffaa2f38883ee38'),
(0, 'sadiadipa99999@gmail.com', '91c844dfc610347c722f4398fd94c878592997f06901e5c46cfaa7996fe6248b365bd4d6a03181484c4b71f6e4e54fcf370f'),
(0, 'sadiadipa99999@gmail.com', 'a9dafb3214cc074e4f7dfc3c5b64082ffa23478222cd8fe696a2fb608242ed2e0500f7960ec432ed1c36494364e98b74e95b'),
(0, 'sadiadipa99999@gmail.com', 'b53e2e90997bba4017bcaad464239c0bf1f92cad546466a96784811678e2857a5a6b40ef0ee9d8e6f7a8dd6304d7958e7ada');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `father's_name` varchar(225) NOT NULL,
  `mother's_name` varchar(225) NOT NULL,
  `department` varchar(225) NOT NULL,
  `dob` varchar(225) DEFAULT NULL,
  `mail` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `contact` varchar(225) DEFAULT NULL,
  `img` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `father's_name`, `mother's_name`, `department`, `dob`, `mail`, `status`, `contact`, `img`, `password`) VALUES
('11180120226', 'Sadia Sultana', 'kuytre', 'jkhgf', 'CSE', 'jhgf', 's@gmail.com', 'Student', '01780077068', '', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
