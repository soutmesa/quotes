-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2016 at 08:27 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quotes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbAuthors`
--

CREATE TABLE `tbAuthors` (
  `id` int(6) UNSIGNED NOT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `national` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `picId` int(6) UNSIGNED DEFAULT NULL,
  `langId` int(6) UNSIGNED DEFAULT NULL,
  `authorName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbCategories`
--

CREATE TABLE `tbCategories` (
  `cateId` int(6) UNSIGNED NOT NULL,
  `cateName` varchar(100) NOT NULL,
  `cateType` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `langId` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbLanguages`
--

CREATE TABLE `tbLanguages` (
  `id` int(6) UNSIGNED NOT NULL,
  `langName` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `picId` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbPictures`
--

CREATE TABLE `tbPictures` (
  `picId` int(6) UNSIGNED NOT NULL,
  `picName` varchar(30) NOT NULL,
  `picCate` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `langId` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbPosts`
--

CREATE TABLE `tbPosts` (
  `postId` int(6) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `cateId` int(6) UNSIGNED DEFAULT NULL,
  `picId` int(6) UNSIGNED DEFAULT NULL,
  `postTitle` varchar(100) DEFAULT NULL,
  `langId` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbSongs`
--

CREATE TABLE `tbSongs` (
  `songId` int(6) UNSIGNED NOT NULL,
  `songName` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cate_type` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id` int(6) UNSIGNED DEFAULT NULL,
  `langId` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbUsers`
--

CREATE TABLE `tbUsers` (
  `userId` int(6) UNSIGNED NOT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `token_password` varchar(200) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `picId` int(6) UNSIGNED DEFAULT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `langId` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbUsers`
--

INSERT INTO `tbUsers` (`userId`, `sex`, `date_of_birth`, `phone`, `email`, `address`, `password`, `token_password`, `type`, `created_at`, `updated_at`, `picId`, `userName`, `langId`) VALUES
(2, 'm', '1993-04-21 00:00:00', '0123456789', 'soutmesa3@gmail.com', NULL, '202cb962ac59075b964b07152d234b70', NULL, 'admin', NULL, NULL, NULL, 'mesa', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbAuthors`
--
ALTER TABLE `tbAuthors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `picid` (`picId`),
  ADD KEY `author_langId` (`langId`);

--
-- Indexes for table `tbCategories`
--
ALTER TABLE `tbCategories`
  ADD PRIMARY KEY (`cateId`),
  ADD KEY `cate_langId` (`langId`);

--
-- Indexes for table `tbLanguages`
--
ALTER TABLE `tbLanguages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pic_id` (`picId`);

--
-- Indexes for table `tbPictures`
--
ALTER TABLE `tbPictures`
  ADD PRIMARY KEY (`picId`),
  ADD UNIQUE KEY `picName` (`picName`),
  ADD KEY `pic_langId` (`langId`);

--
-- Indexes for table `tbPosts`
--
ALTER TABLE `tbPosts`
  ADD PRIMARY KEY (`postId`),
  ADD KEY `cate_id` (`cateId`),
  ADD KEY `post_picId` (`picId`),
  ADD KEY `post_langId` (`langId`);

--
-- Indexes for table `tbSongs`
--
ALTER TABLE `tbSongs`
  ADD PRIMARY KEY (`songId`),
  ADD UNIQUE KEY `songName` (`songName`),
  ADD KEY `song_authorId` (`id`),
  ADD KEY `song_langId` (`langId`);

--
-- Indexes for table `tbUsers`
--
ALTER TABLE `tbUsers`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD KEY `user_picId` (`picId`),
  ADD KEY `user_langId` (`langId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbAuthors`
--
ALTER TABLE `tbAuthors`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbCategories`
--
ALTER TABLE `tbCategories`
  MODIFY `cateId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbLanguages`
--
ALTER TABLE `tbLanguages`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbPictures`
--
ALTER TABLE `tbPictures`
  MODIFY `picId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbPosts`
--
ALTER TABLE `tbPosts`
  MODIFY `postId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbSongs`
--
ALTER TABLE `tbSongs`
  MODIFY `songId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbUsers`
--
ALTER TABLE `tbUsers`
  MODIFY `userId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbAuthors`
--
ALTER TABLE `tbAuthors`
  ADD CONSTRAINT `author_langId` FOREIGN KEY (`langId`) REFERENCES `tbLanguages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `picid` FOREIGN KEY (`picId`) REFERENCES `tbPictures` (`picId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbCategories`
--
ALTER TABLE `tbCategories`
  ADD CONSTRAINT `cate_langId` FOREIGN KEY (`langId`) REFERENCES `tbLanguages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbLanguages`
--
ALTER TABLE `tbLanguages`
  ADD CONSTRAINT `pic_id` FOREIGN KEY (`picId`) REFERENCES `tbPictures` (`picId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbPictures`
--
ALTER TABLE `tbPictures`
  ADD CONSTRAINT `pic_langId` FOREIGN KEY (`langId`) REFERENCES `tbLanguages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbPosts`
--
ALTER TABLE `tbPosts`
  ADD CONSTRAINT `cate_id` FOREIGN KEY (`cateId`) REFERENCES `tbCategories` (`cateId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_langId` FOREIGN KEY (`langId`) REFERENCES `tbLanguages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_picId` FOREIGN KEY (`picId`) REFERENCES `tbPictures` (`picId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbSongs`
--
ALTER TABLE `tbSongs`
  ADD CONSTRAINT `song_authorId` FOREIGN KEY (`id`) REFERENCES `tbAuthors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `song_langId` FOREIGN KEY (`langId`) REFERENCES `tbLanguages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbUsers`
--
ALTER TABLE `tbUsers`
  ADD CONSTRAINT `user_langId` FOREIGN KEY (`langId`) REFERENCES `tbLanguages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_picId` FOREIGN KEY (`picId`) REFERENCES `tbPictures` (`picId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
