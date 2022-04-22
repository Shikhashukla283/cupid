-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 11:57 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cupidproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` int(11) NOT NULL,
  `annual_income` int(11) DEFAULT NULL,
  `occupation` int(11) DEFAULT NULL,
  `family_type` int(11) DEFAULT NULL,
  `manglik` int(11) DEFAULT NULL,
  `expected_income` varchar(100) DEFAULT NULL,
  `partner_occupation` int(11) DEFAULT NULL,
  `partner_family_type` int(11) DEFAULT NULL,
  `partner_manglik` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `dob`, `gender`, `annual_income`, `occupation`, `family_type`, `manglik`, `expected_income`, `partner_occupation`, `partner_family_type`, `partner_manglik`, `created_at`, `updated_at`) VALUES
(1, 'Shikha', 'Shukla', 'shikhashukla283@gmail.com', '$2y$10$vr0lJkPySM1nGvuojfwaZeiV.UZgLtaI12gM4LDVyrjlSnVyq9sYS\r\n', '4567-03-12', 2, 456789, 1, 1, 2, '$75 - $300', 2, 2, 1, '2022-04-21 10:13:22', '2022-04-21 10:13:22'),
(2, '0SkryaoRog', 'zf7ySqzmaO', 'P0N3TY2iue@gmail.com', '$2y$10$3nB0b0NXJzj294INTTgDjOtUOiQNMG4SYG20fSp7CD2qUEWsOWH/.', '2000-02-01', 1, 66789, 1, 1, 1, '7890-78999', 1, 1, 1, '2022-04-21 19:18:54', '2022-04-21 19:18:54'),
(3, 'utuiMRe3HT', 'IsS0Bdi30W', 'pgyBzxSEf5@gmail.com', '$2y$10$L6WgEqCDucHrw83tlC6p9OPYffzmUGLCEE1L/E8TFr1Uu.tcau5Yy', '2000-02-01', 1, 67899, 1, 1, 1, '7890-78999', 1, 1, 1, '2022-04-21 19:26:02', '2022-04-21 19:26:02'),
(4, 'HwSFZ4SmEf', 'oVPymkHP96', '591JhIyQ6V@gmail.com', '$2y$10$nKO6xF2rDIN2gdpOPgP3r.pvRtpZUbBhwHnzAJrELkNbBtoKN.VQO', '2000-02-01', 1, 6289990, 1, 1, 1, '$7890-$7899', 2, 2, 1, '2022-04-22 12:04:16', '2022-04-22 12:04:16'),
(5, 'MKmiFfn2Lx', 'VSNeQtaDYY', 'IqDtTbbXS0@gmail.com', '$2y$10$nwlvRjAG1E2pU2jvoRpsVuEplG1364A.DI14P4/7sb8J1rJ56w/pS', '2000-02-01', 2, 67889, 1, 1, 1, '$7890-$7999', 2, 2, 1, '2022-04-22 12:04:19', '2022-04-22 12:04:19'),
(6, 'jEEOXRsDub', 'lXmPVTVRn3', 'ST5uuN8eNP@gmail.com', '$2y$10$xNIpuGkZ.iDa1P/w7tkf8OCQvPXj7CnaKCuj4Y1h/kJCLX.yt6P0y', '2000-02-01', 2, 6787, 1, 1, 1, '$7890-$78999', 1, 1, 1, '2022-04-22 12:04:21', '2022-04-22 12:04:21'),
(7, 'pCnSEbwVqk', 'UOecNVgK92', 'w5sZagwDjs@gmail.com', '$2y$10$86y94uSFyD4ayKVViDxhs.S5nily4ielT9pvW6LzkTHqbifaDIxxy', '2000-02-01', 1, 98865, 1, 1, 1, '$7890-$78999', 1, 1, 1, '2022-04-22 12:04:22', '2022-04-22 12:04:22'),
(8, 'WZFL4hm323', 'KIPjdMtuAB', 'uI1llmxXUL@gmail.com', '$2y$10$tPQF2iLogW/9FTY5vwSkVONsjdcwZayGwuHmi4VkVXPYudWTRq0BC', '2000-02-01', 2, 6789, 1, 1, 1, '$7890-$78999', 2, 2, 1, '2022-04-22 12:04:24', '2022-04-22 12:04:24'),
(9, 'nDa3J8DD9Y', 'BMpKXj8HHy', 'l36RW9ON8y@gmail.com', '$2y$10$hZIcAtJmKNer2PAPDY0rbOf5jysAgVMrmfodPpXULjy7YsQpw8piq', '2000-02-01', 1, 23456, 1, 1, 1, '$7890-$78999', 1, 1, 1, '2022-04-22 12:04:38', '2022-04-22 12:04:38'),
(10, 'GntZzYEgxX', 'URlxzgeV57', 'ojo7GiLsk6@gmail.com', '$2y$10$nzozBD7N5Z3As.XOLWqyBedPkmJz6aaKZDUbYGdGgdgdp3axrDy5m', '2000-02-01', 2, 6789, 1, 1, 1, '$7890-$78999', 1, 2, 1, '2022-04-22 12:04:40', '2022-04-22 12:04:40'),
(11, '4kNDZCS4tS', '99P3d64Com', '7imrIIxpYU@gmail.com', '$2y$10$cFgFSmXLfHPso1GsXzfIm.8CR02IhB0rZpWccmdfDXQfpd/P9pz62', '2000-02-01', 1, 45679, 1, 1, 1, '$7890-$78999', 1, 1, 1, '2022-04-22 12:04:42', '2022-04-22 12:04:42'),
(12, 'nRESBbYXAL', 'iG0Lv9L1uH', 'Ka7hosVTfD@gmail.com', '$2y$10$JMcUhr8jfOLfOlI1Q/xZO.0POBNIwi3FQ0Y2flb08JdHRvJ.IiffC', '2000-02-01', 1, 6789, 1, 1, 1, '$7890-$78999', 2, 2, 1, '2022-04-22 12:15:24', '2022-04-22 12:15:24'),
(13, 'Nwkupt4QIp', 'ZDuCAI8K6j', 'Qh76PjDwZB@gmail.com', '$2y$10$b5/JVwMMs.G5wO4sbdg8aOMgvbZuE.zDSr1y3FIInYQV/U8imRgRW', '2000-02-01', 1, 56789, 1, 1, 1, '$7890-$78999', 2, 2, 1, '2022-04-22 12:16:03', '2022-04-22 12:16:03'),
(14, 'oroty0kHpP', '8DnOHnD696', 'iCDDiJfFR0@gmail.com', '$2y$10$/VA5XGHfE1ztoZBnrz1vWeWEXq8ppMorbm/cr.qDOg0VZdM4Cmhuq', '2000-02-01', 1, 6789, 1, 1, 1, '$7890-$78999', 2, 2, 1, '2022-04-22 12:16:05', '2022-04-22 12:16:05'),
(15, 'WhfOOhuRs3', 'DQdFJJivaJ', 'V0qgNM0u2o@gmail.com', '$2y$10$.lLVbGWkmgWusmWccF8YgehWbFDTS1DLkFrb3JIRCt25dmXbIWO8K', '2000-02-01', 1, 98765, 1, 1, 1, '$7890-$78999', 2, 2, 1, '2022-04-22 12:16:06', '2022-04-22 12:16:06'),
(16, 'vrta6FXu7P', '7KJQUdRZJj', 'UeivGBTBv4@gmail.com', '$2y$10$Co8Wn4zlQcpwD9o8.h/9s.BwaKudtWt9NE/r7gqT89LtsmGu.lkQm', '2000-02-01', 1, 6789, 2, 2, 1, '$7890-$78999', 2, 2, 1, '2022-04-22 12:17:02', '2022-04-22 12:17:02'),
(17, 'vB4ZzUVKYC', 'ZWAa3NwzB1', 'nwM4oKA40P@gmail.com', '$2y$10$pToJD3XaE7ke3xc1uHk5aeTCjgbpUHzQX.99We0odGDOTXqUmKmNW', '2000-02-01', 1, 76856589, 2, 2, 1, '$7890-$78999', 2, 2, 1, '2022-04-22 12:17:04', '2022-04-22 12:17:04'),
(18, 'CR695jX4aM', 'K9MISygS5G', 'WzaCPlIOza@gmail.com', '$2y$10$rHogsDVmi2jxi/9pY1jKIOW0BKXM3PKfCV/.LNR/jVIOhVJOBRc7a', '2000-02-01', 1, 896757686, 2, 2, 1, '$7890-$78999', 2, 2, 1, '2022-04-22 12:17:04', '2022-04-22 12:17:04'),
(19, 'M3hpj9hp6g', 'uKvN8wnyYr', 'gj6PGWyrQb@gmail.com', '$2y$10$x4ts2sO95I.URYUeNlYDj.vUGpPWQfLSz8YtT8h8T8yaAL1FZr1M2', '2000-02-01', 1, 4536709, 2, 2, 1, '$7890-$78999', 2, 2, 1, '2022-04-22 12:17:06', '2022-04-22 12:17:06'),
(20, 'm6W9Va2y9F', 'QNSrxLPl5z', 'mY3FjJcXLq@gmail.com', '$2y$10$Yb6kGM.SpjDSIy6Ao1/B4O6e.neLZR.KYgX74EErh0CqlbwHyePJS', '2000-02-01', 1, 6789, 2, 2, 1, '$7890-$78999', 2, 2, 1, '2022-04-22 12:17:07', '2022-04-22 12:17:07'),
(21, 'KPGJB54Rkp', 'QnMw3L93hk', 'oq5jdlFX6A@gmail.com', '$2y$10$Iu9gQzKWbHY.khtysYh/V.O/WAYyj5lCAm2UGjLhpVVG49m6hN96a', '2000-02-01', 1, 7656376, 2, 2, 1, '$7890-$78999', 2, 2, 1, '2022-04-22 12:17:08', '2022-04-22 12:17:08'),
(22, 'D9SJPKVW4P', 'Ou0qK87xp9', 'qJ1KrJd6mJ@gmail.com', '$2y$10$HdRtUlYKbbEEl1bzCzkh7e8nqFA9l0snPRcgGgRzWsQ5m0wzel4N2', '2000-02-01', 1, 6789, 2, 2, 1, '$7890-$78999', 2, 2, 1, '2022-04-22 12:17:09', '2022-04-22 12:17:09'),
(23, 'Admin', 'Admin', 'admin@gmail.com', '$2y$10$601DnOriohUDQ.SYbiS2n.ojL9J0yPxlySpM3uYm8d.1maY6ZFP2G', '2000-02-01', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-22 13:11:13', '2022-04-22 13:11:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
