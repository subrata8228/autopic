-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 04:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csm`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `author`, `datetime`) VALUES
(1, 'Automobile', 'Piyush', 'March-31-2020 23:11:49'),
(3, 'Technology', 'Piyush', 'March-31-2020 23:13:33'),
(5, 'Account', 'Piyush', 'April-01-2020 13:54:55'),
(6, 'Sports', 'Piyush', 'April-02-2020 15:48:39'),
(7, 'Helmet', 'Piyush', 'April-07-2020 19:01:04'),
(8, 'Phones', 'Piyush', 'April-07-2020 19:01:25'),
(9, 'Building', 'Piyush', 'April-07-2020 19:02:57'),
(10, 'latest news', 'Piyush', 'April-10-2020 12:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `datetime` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `datetime`, `name`, `email`, `comment`) VALUES
(1, 'April-11-2020 13:49:22', 'subrata ghosh', 'subrataghosh8228@gmail.com', 'This is the best car.'),
(2, 'April-11-2020 13:49:25', 'subrata ghosh', 'subrataghosh8228@gmail.com', 'This is the best car.'),
(3, 'April-11-2020 13:49:34', 'subrata ghosh', 'subrataghosh8228@gmail.com', 'This is the best car.'),
(4, 'April-11-2020 13:50:23', 'Piyush ghosh', 'piyushghosh8228@gmail.com', 'very good car.'),
(5, 'April-11-2020 13:59:30', 'Piyush ghosh', 'piyushghosh8228@gmail.com', 'very good car.'),
(6, 'April-11-2020 13:59:57', 'Piyush ghosh', 'piyushghosh8228@gmail.com', 'very good car.'),
(7, 'April-11-2020 14:00:17', 'Piyush ghosh', 'piyushghosh8228@gmail.com', 'very good car.'),
(8, 'April-11-2020 14:06:57', 'Piyush ghosh', 'piyushghosh8228@gmail.com', 'very good car.');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `title` varchar(80) NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `post` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `datetime`, `title`, `category`, `author`, `image`, `post`) VALUES
(1, 'April-02-2020 20:10:59', 'Developer', 'Technology', 'Piyush', 'java.png', 'Java Developer'),
(2, 'April-02-2020 20:24:47', 'Designer', 'Automobile', 'Piyush', 'designer.JPG', 'Graphics designer'),
(3, 'April-05-2020 20:42:27', 'Income tax', 'Automobile', 'Piyush', 'incometax.jpg', '								Income tax.											'),
(5, 'April-05-2020 20:44:25', 'AI', 'Technology', 'Piyush', 'ai.jpg', 'This is for AI technology post.'),
(6, 'April-06-2020 23:15:46', 'corona virus', 'Automobile', 'Piyush', 'corona.jpg', '																							The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing.																		'),
(7, 'April-07-2020 19:23:59', 'Studds best helmet', 'Automobile', 'Piyush', 'studds.jpg', '																								STUDDS is one of the leading manufacturers and exporters of Helmets & two wheeler accessories in India.																					'),
(9, 'April-09-2020 20:41:49', 'Kia Seltos', 'Automobile', 'Piyush', 'seltos.jpg', 'Kia seltos is a compact suv.				'),
(10, 'April-11-2020 20:53:32', 'IPL 2020', 'Sports', 'Piyush', 'cricket.jpg', 'IPL got cancelled this year.'),
(11, 'April-11-2020 21:36:15', 'best dsrl photo', 'latest news', 'Piyush', 'catback.jpg', 'best pic '),
(12, 'April-11-2020 21:56:34', 'hello', 'Automobile', 'Piyush', '', 'hey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
