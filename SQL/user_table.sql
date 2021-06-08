-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 08, 2021 at 08:03 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `transfer_id` int(11) DEFAULT NULL,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`transfer_id`, `sender`, `receiver`, `amount`, `date`) VALUES
(NULL, 'Kunal Jayraj', 'Amey Nagmode', 250, '2021-06-07 09:31:12'),
(NULL, 'Kunal Jayraj', 'Rameshwar Malode', 100, '2021-06-07 10:33:07'),
(NULL, 'Kunal Jayraj', 'Aniket pandit', 100, '2021-06-07 11:06:24'),
(NULL, 'Kunal Jayraj', 'Aniket pandit', 100, '2021-06-07 11:06:53'),
(NULL, 'Dhiraj Shinde', 'Rameshwar Malode', 200, '2021-06-07 11:14:12'),
(NULL, 'Dhiraj Shinde', 'Rameshwar Malode', 200, '2021-06-08 06:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `acc_no` int(12) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `city` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `acc_no`, `phone`, `email`, `city`, `amount`) VALUES
(1, 'Dhiraj Shinde', 154702628, 2147481630, 'dhiraj@email.com', 'Amravati', 55600),
(2, 'Amey Nagmode', 154702629, 2147481631, 'amey@email.com', 'Aurangabad', 56650),
(3, 'Sandeep Raut', 154702630, 2147481632, 'sandeep@email.com', 'Nashik', 21258),
(4, 'Rameshwar Malode', 154702631, 2147481633, 'ram@email.com', 'Washim', 8900),
(5, 'Shivanshu Suryakar', 154702632, 2147481634, 'shivanshu@email.com', 'Yavatmal', 28000),
(6, 'Aaib Shekuwale', 154702633, 2147481635, 'aaqib@email.com', 'Pune', 30588),
(7, 'Yuvraj Chimane', 154702634, 2147481636, 'yuvraj@email.com', 'Akola', 31989),
(8, 'Aniket pandit', 154702635, 2147481637, 'aniket@email.com', 'Jalgaon', 10160),
(9, 'Kunal Jayraj', 154702636, 2147481638, 'kunal@email.com', 'Nagpur', 19520),
(10, 'Hrishikesh Kale', 154702637, 2147481639, 'hk@email.com', 'Kolhapur', 45000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
