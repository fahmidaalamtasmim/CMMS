-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 09:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmms`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `address`, `email`, `phone`, `status`) VALUES
(1, 'Cha-61,North Badda,Dhaka-1234', 'club@gmail.com', 123456789, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `description`) VALUES
(7, 'Uncategorized', 'Uncategorized-should not be deleted. System will crush if deleted'),
(9, 'Member requirement', 'Take member for the club'),
(10, 'Competition', 'Compete and win prize'),
(12, 'Problem Solving', 'Problem solving is the act of defining a problem; determining the cause of the problem; identifying, prioritizing, and selecting alternatives for a solution; and implementing a solution. The problem-solving process. Problem solving resources.');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `chat` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `admin_id`, `chat`, `date`) VALUES
(50, 0, 'fdf', '2022-12-30 17:47:41'),
(51, 0, 'dsfdf', '2022-12-30 17:47:43'),
(52, 45, 'fdfd', '2022-12-30 17:50:55'),
(53, 0, 'dfdf', '2022-12-30 17:50:57'),
(54, 0, 'dffdd', '2022-12-30 17:51:00'),
(55, 0, 'kjjgfdsfghj', '2022-12-30 17:51:10'),
(56, 0, ',.jhgfdsrdtfyghj', '2022-12-30 17:51:20'),
(57, 45, 'dfd', '2022-12-30 17:53:25'),
(58, 45, 'xd', '2022-12-30 17:53:29'),
(59, 45, 'fdfdfd', '2022-12-30 17:53:31'),
(60, 45, 'ddfty', '2022-12-30 17:53:35'),
(61, 45, 'ddfd', '2022-12-30 17:53:50'),
(62, 45, 'fsfff', '2022-12-30 17:53:52'),
(63, 45, 'ff', '2022-12-30 17:53:53'),
(64, 45, 'fdfd', '2022-12-30 17:54:01'),
(65, 3, 'de', '2022-12-30 17:54:48'),
(66, 3, 'byr bye', '2022-12-30 17:54:54'),
(67, 45, 'eer', '2022-12-30 17:55:04'),
(68, 45, 'er', '2022-12-30 17:55:05'),
(69, 45, 'rrr', '2022-12-30 17:55:08'),
(70, 45, 'errer', '2022-12-30 17:55:11'),
(71, 45, 'rrrr', '2022-12-30 17:55:12'),
(72, 45, 'rrr', '2022-12-30 17:55:14'),
(73, 3, 'rrr', '2022-12-30 17:55:24'),
(74, 3, 'r', '2022-12-30 17:55:27'),
(75, 3, 'jfgdjkh', '2022-12-30 18:59:38'),
(76, 3, 'xds', '2022-12-30 21:38:34'),
(77, 45, 'Hello', '2022-12-30 21:49:55'),
(78, 3, 'fdsf', '2022-12-30 22:24:56'),
(79, 3, 'ccccccccc', '2022-12-30 22:41:14'),
(80, 3, 'Hello', '2022-12-30 22:55:26'),
(81, 3, 'Hey cuteee', '2022-12-30 22:58:19'),
(82, 45, 'Whats up?', '2022-12-30 22:58:37'),
(83, 45, 'let me send you a cat pic', '2022-12-30 22:58:49'),
(84, 3, 'Bruh its a rat pic', '2022-12-30 22:59:30'),
(85, 46, 'Hello there', '2022-12-31 20:00:53'),
(86, 3, 'jkhfdf', '2022-12-31 20:02:16'),
(87, 3, 'bye', '2022-12-31 21:07:02'),
(88, 3, 'hey', '2023-01-01 00:40:21'),
(89, 47, 'HEY bud', '2023-01-01 00:47:49'),
(90, 47, 'HII', '2023-01-01 00:48:09'),
(91, 3, 'how are you', '2023-01-01 00:49:29'),
(92, 47, 'I am good', '2023-01-01 00:50:45'),
(93, 3, 'Great to here that', '2023-01-01 00:51:04'),
(94, 47, 'what are you doing', '2023-01-01 00:51:44'),
(95, 3, 'about to sleep', '2023-01-01 00:51:57'),
(96, 47, 'ok good night', '2023-01-01 00:52:17'),
(97, 49, 'hey', '2023-01-01 18:45:38'),
(98, 3, 'hiii', '2023-01-01 18:46:42'),
(99, 3, 'hi', '2023-01-01 19:11:42'),
(100, 3, 'bye', '2023-01-01 19:52:24'),
(101, 3, 'hello', '2023-01-02 02:42:54'),
(102, 3, 'hi', '2023-01-02 03:06:39'),
(103, 3, 'hi', '2023-01-02 03:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `club` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id`, `club`, `status`) VALUES
(1, 'OUR CLUB IS THE BEST CLUB (^^)/', 1),
(4, 'I WOULD LIKE TO INVITE YOU IN OUR CLUB', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_posts`
--

CREATE TABLE `event_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_posts`
--

INSERT INTO `event_posts` (`id`, `title`, `description`, `thumbnail`, `date_time`, `category_id`, `admin_id`, `is_featured`) VALUES
(36, 'Problem solving session', 'Diagnose the situation so that your focus is on the problem, not just its symptoms. Helpful problem-solving techniques include using flowcharts to identify the expected steps of a process and cause-and-effect diagrams to define and analyze root causes.\r\n\r', '36.jpg', '2023-01-01 15:48:53', 12, 3, 0),
(37, 'COMPETE and WIN', 'Diagnose the situation so that your focus is on the problem, not just its symptoms. Helpful problem-solving techniques include using flowcharts to identify the expected steps of a process and cause-and-effect diagrams to define and analyze root causes.\r\n\r\nThe sections below help explain key problem-solving steps. These steps support the involvement of interested parties, the use of factual information, comparison of expectations to reality, and a focus on root causes of a problem. You should beg', '37.jpg', '2023-01-01 15:51:38', 10, 3, 0),
(38, 'co', 'errr', '38.jpg', '2023-01-02 03:39:30', 7, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `file`, `admin_id`) VALUES
(26, 'crms.pptx.pptx', 3),
(27, 'fff.png', 3),
(28, 'jkl.docx', 3),
(29, 'crms.pptx', 3),
(30, 'ui.docx', 3),
(31, 'pexels-alexas-fotos-2189599.jpg', 45),
(32, 'ui.docx', 3),
(33, 'Parking Lot Finder App Pitch Deck by Slidesgo.pptx', 3),
(34, 'Parking Lot Finder App Pitch Deck by Slidesgo.pptx', 3),
(35, 'Parking Lot Finder App Pitch Deck by Slidesgo.pptx', 3),
(36, 'ui.docx', 3),
(37, 'crms.pptx', 3),
(38, 'pexels-luis-gomes-546819.jpg', 3),
(39, 'pexels-thirdman-5257759.jpg', 3),
(40, 'pexels-malte-luk-5310563.jpg', 3),
(41, 'ui.docx', 3),
(42, 'ui.docx', 3),
(43, 'ui (1).docx', 3);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`) VALUES
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `status`) VALUES
(2, '2.png', 1),
(5, '5.webp', 0),
(8, '8.png', 0),
(11, '11.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `name`, `email`, `msg`, `date_time`, `status`) VALUES
(19, 'Tasmim', 'fahmidaalamtasmim@gmail.com', 'hi', '2023-01-02 09:38:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `room` int(100) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `room`, `topic`, `time`) VALUES
(5, 309, 'meeting', '12:5,12/2/23'),
(6, 203, 'meeting', '12:5');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `icon`, `link`, `status`) VALUES
(1, 'uil uil uil-facebook-f', 'https://www.facebook.com/', 1),
(3, 'uil uil uil-instagram', 'https://www.instagram.com/', 1),
(4, 'uil uil uil-telegram', 'https://web.telegram.org/z/', 1),
(5, 'uil uil uil-linkedin', 'https://www.linkedin.com/', 1),
(6, 'uil uil uil-twitter', 'https://twitter.com/', 1),
(8, 'uil uil uil-facebook', 'rrr', 1);

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `text`, `status`) VALUES
(8, 'TODAY is a good day', 0),
(10, 'meow', 0),
(12, 'WELCOMEEEEE!!!!!', 0),
(13, 'In union there is strength', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `user_type`, `photo`) VALUES
(3, 'tasmim', 'weak@gmail.com', 789, '$2y$10$Y9oFmL60PBx53uI9T6x40eK8n61JrJYyIIrfeiL4Sp6bxxmUauqzi', 'admin', '3.jpg'),
(47, 'Cat', 'cat@gmail.com', 123456789, '$2y$10$GaYfgs.KGuO8/L4ejQcXv.C4jTROAwpOLPfVDe4j.DTq7d8fuQUPu', 'admin', '47.jpg'),
(48, 'user', 'user@gmail.com', 1234567890, '$2y$10$pc75oFnNejfO6wnKYAmPKuRCmUfEHt/sIC.MHVNqyEAVFWPYGO1TS', 'user', '48.jpg'),
(49, 'Hacker', 'hacker@gmail.com', 123456789, '$2y$10$DJaZvDvNvp2OtiBaGu2Wgud2Sop/eL4D5zuFjEih5xNmqeR3ab3ja', 'admin', '49.jpg'),
(50, 'doggy_chan', 'tasu@gmail.com', 1234567890, '$2y$10$0SUppYb7SWNpi90HNraaEua6lkwgRMmzXzm1olRGJ9HzyKapcMfH.', 'user', '50.jpg'),
(51, 'Taas', 'rat@gmail.com', 1234567890, '$2y$10$Q2lWqu9C/SGv1Zss4hQYDeqafW3ylEJojC2kdtgIfRVJ7sMSR3H.6', 'user', '51.jpg'),
(53, 'Senku', 'senku@gmail.com', 123456789, '$2y$10$o8YFGesvMUNPzdDacc9bt.O0701KSQKCa2mx2EV8GLOQIByZBWFv2', 'user', '53.jpg'),
(54, 'rasna', 'rasna@gmail.com', 1941159944, '$2y$10$7zwrzvb0DZ88F45QoTpo.ejTiMZRH1fZhINK3qVueuwZpWCxLM3um', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_posts`
--
ALTER TABLE `event_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_category` (`category_id`),
  ADD KEY `FK_admin` (`admin_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_posts`
--
ALTER TABLE `event_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_posts`
--
ALTER TABLE `event_posts`
  ADD CONSTRAINT `FK_admin` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_cmms_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
