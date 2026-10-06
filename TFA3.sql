-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2026 at 08:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'james', 'hehe@gmail.com', '2026-10-01 17:09:55', '2026-10-01 18:06:51'),
(2, 'hihi', 'hihi@gmail.com', '2026-10-01 18:06:47', NULL),
(3, 'germi', 'germi@gmail.com', '2026-10-06 05:54:17', '2026-10-06 05:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `task_date` date NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `status`, `task_date`, `created_at`) VALUES
(1, 'Finish Web System Technologies activity', 'pending', '2026-09-19', '2026-09-19 08:00:00'),
(2, 'Review CodeIgniter MVC', 'completed', '2026-09-19', '2026-09-19 09:00:00'),
(3, 'Submit database export', 'pending', '2026-09-19', '2026-09-19 10:00:00'),
(4, 'Study Networking 2', 'pending', '2026-09-20', '2026-09-19 11:00:00'),
(5, 'Complete System Analysis activity', 'pending', '2026-09-20', '2026-09-19 12:00:00'),
(6, 'Review PHP notes', 'completed', '2026-09-20', '2026-09-19 13:00:00'),
(7, 'Work on project documentation', 'pending', '2026-09-21', '2026-09-19 14:00:00'),
(8, 'Check GitHub repository', 'pending', '2026-09-21', '2026-09-19 15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `avatar`, `created_at`) VALUES
(1, 'sean', 'Sean Kyle Fetalvero', 'kylefetalvero@gmail.com', '1790876552_4e3949c342ac1092a229.jpg', '2026-09-19 08:00:00'),
(2, 'sean_123', 'tester', 'hehe@gmail.com', '1790877979_9a543485d0f52c58485c.jpeg', '2026-10-01 17:27:42'),
(3, 'huhu', 'testing', '', NULL, '2026-10-01 18:05:59'),
(4, 'ryen', 'ryenjevs', 'ryen@gmail.com', '1791266162_c9bb0760664b74ac06de.png', '2026-10-06 05:55:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
