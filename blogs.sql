-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 03:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `description`, `image`, `comments`, `created_at`, `updated_at`) VALUES
(3, 'Manifest Positive Energy in Your Life', 'Manifestation is all about how your positive thoughts can bring good things into your everyday life. That also is the essence of how to manifest positive energy. Positive changes happen often through positive vibes.', '1703770768.png', 'Immerse in Nature. .', '2023-12-28 08:09:28', '2023-12-28 08:09:28'),
(4, 'Nature Conservation', 'Nature provides so many benefits that it\'s hard to see what it doesn\'t do. Spirituality, religion, health, happiness, excitement, education, money… nature provides it all. Lina – The sense of belonging to the Earth; to the community of nature.', '1703771402.jpg', 'Nature is not a place to visit, it is home.', '2023-12-28 08:20:02', '2023-12-28 08:20:02'),
(5, 'Personality Developement', 'Personality can be broadly explained as a set of characteristic features of people that define how they behave, respond to different situations, and how they react emotionally', '1703772442.jpg', 'Personality is often structured by environmental and social factors', '2023-12-28 08:37:22', '2023-12-28 08:37:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
