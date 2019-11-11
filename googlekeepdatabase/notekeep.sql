-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 07:35 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notekeep`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `archive_id` int(11) NOT NULL,
  `note_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`archive_id`, `note_id`, `user_id`, `title`, `content`) VALUES
(25, 18, 72, 'tuesday', 'egethyj7ik8o');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `note_id` int(11) NOT NULL,
  `archive_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`note_id`, `archive_id`, `user_id`, `title`, `content`) VALUES
(17, 26, 72, 'monday', 'xkjxlkw'),
(19, 23, 72, 'wednesday', 'jhskjl');

-- --------------------------------------------------------

--
-- Table structure for table `pwd_table`
--

CREATE TABLE `pwd_table` (
  `idpwd` int(6) NOT NULL,
  `emailVerify` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pwd_table`
--

INSERT INTO `pwd_table` (`idpwd`, `emailVerify`) VALUES
(17, 'guptamanishkumar987@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `roomImage` varchar(200) DEFAULT NULL,
  `roomType` varchar(200) DEFAULT NULL,
  `roomTitle` varchar(200) DEFAULT NULL,
  `roomAddress` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomID`, `userID`, `roomImage`, `roomType`, `roomTitle`, `roomAddress`, `type`, `Price`, `description`) VALUES
(5, 71, 'roomupload/2BHK.jpg', '3', ' jbkj', 'nhnbkgif', 'full', 45646, ' hgh'),
(6, 72, 'roomupload/social_share_room3.jpg', '3', '9000sqft', '143-B, 14th Floor, Mittal Court, Nariman Point, Mumbai, Maharashtra 400021', 'full', 25000, 'A very good 2 bhk flat for rent in nexus hyde park residency, manpada, mumbai thane. It is a superb property and offers an excellent view. The flat is semifurnished with multiple amenities and promise'),
(7, 75, 'roomupload/room2.jpg', '1', 'Orchid Villa', 'asdsasad', 'no', 40000, 'Dummy'),
(9, 72, 'roomupload/room2.jpg', '2', 'mansion', 'powai', 'full', 10000, 'the description'),
(10, 72, 'roomupload/room2.jpg', '2', 'villa', 'powai', 'full', 10000, 'the description');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `isUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `mobNumber` tinytext NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `userImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`isUsers`, `uidUsers`, `emailUsers`, `pwdUsers`, `mobNumber`, `address`, `country`, `state`, `userImage`) VALUES
(68, 'Mr.Useless', 'mr.useless404@gmail.com', '', '5954689489748', '97484ojidsjijuijuijui', 'oki[po0kpo0k[0poi', 'jujuiioki[o0ik[o0k', 'https://lh3.googleusercontent.com/a-/AAuE7mB-DfYkRpet5H4u-qxHiZm7RitdHxE9S2auDVF_'),
(70, 'hahah', 'haha@gmail.com', '$2y$10$t/CF7VuXfjcNjo/4h/lLhOJiKMBYS3jY3bDEd2qRc0A9VZGSSJOtG', '89383892932832898', 'uhhjkhkjh', 'jkjhjkj', 'india', 'user/userimages/'),
(72, 'manish', 'guptamanishkumar987@gmail.com', '$2y$10$bW./7BdhBw8Fntme6I1LreDqN4kQkh3ku94tEhSVGCvWp5Xe2hqOW', '9082426490', '76 sanjay gandhi nagar ,trombay road sion chunabhatti', 'Maharashtra', 'india', 'user/userimages/IMG_20190329_193650_862.jpg'),
(73, 'juili', 'juilihw@gmail.com', '$2y$10$CyvdaaQdjOwx.LNP/oJs2uLdHpGb1PYA9wJr6DzQRsN907VJTBIi.', '09082426490', '76 sanjay gandhi nagar ,trombay road sion chunabhatti', 'Maharashtra', 'australia', 'user/userimages/'),
(74, 'achal', 'achal@gmail.com', '$2y$10$mOtK.uZ2I9HaQ5Pp/FFaDOIZ19Y2DyAm8/RjcojVm3dEFGscW2f1.', '8652895413', 'bhandhup', 'Maharashtra', 'india', 'user/userimages/'),
(75, 'Agnel', 'agnelselvan007@gmail.com', '$2y$10$CxDTy7g6DfwfwLNHjJipx.OghxY7vJmz1vx5p9cli1kD8tOmUKNK.', '9678767767687', '53/2, Sonia gandhi rd', 'gghhh', 'india', 'user/userimages/RoomRental.PNG'),
(76, 'hahahahhha', 'uihhhui@gmail.com', '$2y$10$nmG8z5TYN0nRGjbCflRqce92ZvQVDW7LBsQP1w9oYhnbZU9Luioye', '09082426490', '76 sanjay gandhi nagar ,trombay road sion chunabhatti', 'Maharashtra', '', 'user/userimages/'),
(77, 'yash', 'jainyash566@gmail.com', '$2y$10$iV.aZGmNOnEoeg4LigDgjewCjyZPF0tFcmhMGoaWx11vE6wlndMQy', '09082426490', '76 sanjay gandhi nagar ,trombay road sion chunabhatti', 'Maharashtra', 'india', 'user/userimages/WIN_20191022_10_49_50_Pro.jpg'),
(79, 'rachel', 'rachel@gmail.com', '$2y$10$XuAgQ86ODAhfajfTJUyvuO/UeE0XZQSLSCVDUZTIInqgvC6iKcVVG', '09082426490', '76 sanjay gandhi nagar ,trombay road sion chunabhatti', 'Maharashtra', 'india', 'user/userimages/WIN_20191022_10_49_50_Pro.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`archive_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `pwd_table`
--
ALTER TABLE `pwd_table`
  ADD PRIMARY KEY (`idpwd`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`isUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `archive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pwd_table`
--
ALTER TABLE `pwd_table`
  MODIFY `idpwd` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `isUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
