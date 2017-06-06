-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2017 at 05:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robot`
--

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` int(6) NOT NULL,
  `poster` varchar(30) NOT NULL,
  `txt` text,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `poster`, `txt`, `reg_date`) VALUES
(34, 'Owen', '<span style=\"font-family:Arial\">\r\n<h1>Title</h1>\r\n<h4>User</h4>\r\nTEXT HERE<br>\r\n<b>Bolded Text</b><br>\r\n<i>Italicized Text</i>\r\n\r\n</span>\r\n		', '2017-06-05 21:30:47'),
(35, '123p10', '<span style=\"font-family:Arial\">\r\n<h1>New Announcement</h1>\r\n<h4>Owen</h4>\r\nKush is bad at Code!!!\r\n</span>\r\n		', '2017-06-06 15:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(6) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `text` mediumtext,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `date`, `text`, `name`) VALUES
(1, '2017-06-04 23:11:09', 'hello', '123p10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `priv` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `priv`) VALUES
(11, '123p10', '$2y$10$2x4LyvQGqE0qlE5RwZALauFUYBEcaG/ILpzjfMmnEK.K5fdNQlrQW', 'My Password is great', 1),
(12, 'TarjTandel', '$2y$10$I4cKwUYHhQssZizndlvxG.3ZaUDYRNOdCE4jL88JnboK.GWf1dRCO', 'MY PASSWORD IS IN THE NAME', 1),
(13, 'KushParhar', '$2y$10$2abj5BMfNihDG.ThyeuGduVy1ldZn8G3xKv4suJwXaB2EiloW9Qp2', 'This is a good password', 1);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `url`, `user`) VALUES
(1, 'Vex 62 Skyrise', 'uploads/VexTeam62.mp4', '123p10'),
(2, 'AntiChamber Stacking Test', 'https://www.youtube.com/watch?v=vQMENmdMCsg&ab_channel=Antichamberteam80110H', '123p10'),
(3, 'AntiChamber Closeup', 'https://www.youtube.com/watch?v=vQMENmdMCsg&ab_channel=Antichamberteam80110H', '123p10'),
(4, '<script>alert(\"Prevent XSS\");</script>', '<script>alert(\"Prevent XSS\");</script>', '123p10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
