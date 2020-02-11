-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2019 at 01:31 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Admin_Id` varchar(50) NOT NULL,
  `APwd` varchar(255) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Photo` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Admin_Id`, `APwd`, `FName`, `LName`, `Photo`) VALUES
('bdsakl@shal', 'c9b4b8dd2831a746e8653d7bcea33fe0', 'bdsaln', 'dalkn', NULL),
('sa@pa', 'f1099c93329da2ff153d102373ce48f7', 'dfbgdb', 'dfbsdfb', NULL),
('sa@padfxbc', 'ef206d17628658329ff431cfddde9297', 'dfbgdb', 'dfbsdfb', NULL),
('sachin@gmail.com', '15285722f9def45c091725aee9c387cb', 'skal', 'bdsakj', NULL),
('sachin@gmail.com1', 'e605625224a9ed6250552c394be6b396', 'dlsan', 'ndlak', NULL),
('sachin@gmail.com234544', '5a0f55cf2f6c83c6d28e547d991d26d7', 'ldanl', 'ndlsa', NULL),
('sachinpandey9918784075@gmail.com', '39b90359f12d4ff25178e6a88d05b13f', 'slaknd', 'dkanl', NULL),
('vaibhav131099@gmail.com', '310a87565a48526e9d096f917007dbfe', 'vaibhav', 'pandey', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `Club_Id` varchar(50) NOT NULL,
  `CName` varchar(50) NOT NULL,
  `CPhoto` longblob,
  `Description` longtext NOT NULL,
  `Followers` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`Club_Id`, `CName`, `CPhoto`, `Description`, `Followers`) VALUES
('Batti', 'Sparkonics', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do', 0),
('bdla', 'bdaln', NULL, 'ndaslkn', 0),
('bdlasb', 'ndsla', NULL, 'bdaln', 0),
('bdslanl', 'dsabnln', NULL, 'sdnal', 0),
('nbdksaa', 'bdsal', NULL, 'bkdas', 0),
('ndsal', 'ndsal', NULL, 'ndsalk', 0),
('tyrte', 'dfgbdsbs', NULL, 'dfghfygjmdfgsx', 0),
('tyrtedfxg', 'dfgbdsbs', NULL, 'dfghfygjmdfgsx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Comment_Id` int(11) NOT NULL,
  `User_Id` varchar(50) NOT NULL,
  `Post_Id` int(11) NOT NULL,
  `Comment_Date` datetime NOT NULL,
  `CValue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Comment_Id`, `User_Id`, `Post_Id`, `Comment_Date`, `CValue`) VALUES
(1, 'shrish@gmail.com', 18, '2019-11-14 10:32:25', 'hello sachin'),
(2, 'shrish@gmail.com', 18, '2019-11-14 10:37:17', 'hello vaibhav'),
(3, 'rizwan@gmail.com', 18, '2019-11-14 10:39:05', 'hello shrish'),
(4, 'sachin@gmail.com', 18, '2019-11-14 10:42:46', 'hello'),
(5, 'sachin@gmail.com', 19, '2019-11-14 10:44:34', 'good'),
(6, 'shrish@gmail.com', 19, '2019-11-14 10:44:58', 'what'),
(7, 'rizwan@gmail.com', 19, '2019-11-14 10:45:34', 'hello sachin and rizwan'),
(8, 'sachin@gmail.com', 20, '2019-11-14 11:19:57', 'sefrtjykfulgiu'),
(9, 'shrish@gmail.com', 21, '2019-11-14 11:20:52', 'csvdfnxb'),
(10, 'shrish@gmail.com', 21, '2019-11-14 11:30:17', 'erwte4yrjctkygvhbjk'),
(11, 'sachin@gmail.com', 22, '2019-11-14 16:18:49', 'are you fine'),
(12, 'rizwan@gmail.com', 22, '2019-11-14 16:19:51', 'yes i am fine'),
(13, 'shrish@gmail.com', 23, '2019-11-14 18:23:51', 'hello sachin'),
(14, 'sachin@gmail.com', 23, '2019-11-14 18:24:14', 'hello shrish');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `poster_Id` varchar(50) NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Club_Id` varchar(50) NOT NULL,
  `Dtext` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`poster_Id`, `Date_Time`, `Club_Id`, `Dtext`) VALUES
('', '2019-11-14 02:05:27', 'bdslanl', 'hello'),
('', '2019-11-14 02:05:35', 'bdslanl', 'hello'),
('', '2019-11-14 02:12:30', 'bdslanl', 'bkandla\r\n'),
('', '2019-11-14 02:14:08', 'bdslanl', 'sachin'),
('rizwan@gmail.com', '2019-11-14 03:48:02', 'bdslanl', 'Hello guys I am rizwan the don'),
('rizwan@gmail.com', '2019-11-14 11:04:36', 'Batti', 'hello shrish'),
('rizwan@gmail.com', '2019-11-14 11:36:34', 'Batti', 'I am Rizwan Khan Bikers ki shan'),
('rizwan@gmail.com', '2019-11-14 16:21:10', 'bdslanl', ' k al ad lkbnlan  akda'),
('sachin@gmail.com', '2019-11-14 02:15:25', 'bdslanl', 'sachin'),
('sachin@gmail.com', '2019-11-14 02:15:45', 'bdslanl', 'hello guys how are you all?'),
('sachin@gmail.com(admin)', '2019-11-14 02:17:13', 'bdslanl', 'hello'),
('sachin@gmail.com(admin)', '2019-11-14 02:20:59', 'bdslanl', 'my name is khan'),
('sachin@gmail.com(admin)', '2019-11-14 02:48:07', 'bdslanl', 'hello shrish'),
('sachin@gmail.com(admin)', '2019-11-14 02:48:17', 'bdslanl', 'how are you'),
('sachin@gmail.com(admin)', '2019-11-14 02:49:52', 'bdslanl', 'dsvzxbgbf '),
('sachin@gmail.com(admin)', '2019-11-14 03:45:44', 'bdslanl', 'yes i am'),
('sachin@gmail.com(admin)', '2019-11-14 16:20:33', 'bdslanl', 'hello'),
('sachin@gmail.com(admin)', '2019-11-14 16:20:42', 'bdslanl', 'bcskahblan  jbdka\r\n'),
('shrish@gmail.com', '2019-11-14 02:46:03', 'Batti', 'hello'),
('shrish@gmail.com', '2019-11-14 02:47:01', 'bdslanl', 'hello\r\n'),
('shrish@gmail.com', '2019-11-14 02:48:34', 'bdslanl', 'I am fine '),
('shrish@gmail.com', '2019-11-14 02:48:42', 'bdslanl', 'what about you'),
('shrish@gmail.com', '2019-11-14 03:45:20', 'bdslanl', 'hello sachin are you active'),
('shrish@gmail.com', '2019-11-14 09:47:12', 'nbdksaa', 'mjhmfkyhyjyu'),
('shrish@gmail.com', '2019-11-14 11:27:44', 'bdslanl', 'kkhkgho'),
('shrish@gmail.com', '2019-11-14 11:28:53', 'bdslanl', 'kkhkgho'),
('shrish@gmail.com', '2019-11-14 11:33:42', 'Batti', 'nldkanl'),
('shrish@gmail.com', '2019-11-14 11:35:26', 'Batti', ''),
('shrish@gmail.com', '2019-11-14 11:35:31', 'Batti', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `followings`
--

CREATE TABLE `followings` (
  `User_Id` varchar(50) NOT NULL,
  `Club_Id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `followings`
--

INSERT INTO `followings` (`User_Id`, `Club_Id`) VALUES
('rizwan@gmail.com', 'Batti'),
('rizwan@gmail.com', 'bdlasb'),
('rizwan@gmail.com', 'ndsal'),
('shrish@gmail.com', 'Batti'),
('shrish@gmail.com', 'bdla'),
('shrish@gmail.com', 'bdlasb'),
('shrish@gmail.com', 'bdslanl'),
('shrish@gmail.com', 'nbdksaa');

-- --------------------------------------------------------

--
-- Table structure for table `isadmin`
--

CREATE TABLE `isadmin` (
  `Admin_Id` varchar(50) NOT NULL,
  `Club_Id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isadmin`
--

INSERT INTO `isadmin` (`Admin_Id`, `Club_Id`) VALUES
('bdsakl@shal', 'ndsal'),
('sa@pa', 'tyrte'),
('sa@padfxbc', 'tyrtedfxg'),
('sachin@gmail.com', 'bdslanl'),
('sachin@gmail.com1', 'nbdksaa'),
('sachin@gmail.com234544', 'bdlasb'),
('sachinpandey9918784075@gmail.com', 'bdla'),
('vaibhav131099@gmail.com', 'Batti');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `Photo_Id` int(11) NOT NULL,
  `PValue` longblob NOT NULL,
  `Post_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Post_Id` int(11) NOT NULL,
  `Club_Id` varchar(50) DEFAULT NULL,
  `Post_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Post_Id`, `Club_Id`, `Post_Date`) VALUES
(3, 'bdslanl', '0000-00-00 00:00:00'),
(4, 'bdslanl', '2019-11-13 20:29:38'),
(5, 'bdslanl', '2019-11-13 20:31:14'),
(6, 'bdslanl', '2019-11-13 21:48:12'),
(7, 'bdslanl', '2019-11-13 21:52:07'),
(8, 'bdslanl', '2019-11-13 22:06:14'),
(9, 'bdslanl', '2019-11-13 22:19:19'),
(10, 'bdslanl', '2019-11-13 22:20:14'),
(11, 'bdslanl', '2019-11-13 22:23:58'),
(12, 'bdslanl', '2019-11-13 23:01:56'),
(13, 'bdslanl', '2019-11-13 23:53:25'),
(14, 'Batti', '2019-11-14 01:05:39'),
(15, 'bdslanl', '2019-11-14 02:02:47'),
(16, 'bdslanl', '2019-11-14 02:49:42'),
(17, 'bdslanl', '2019-11-14 03:02:03'),
(18, 'bdslanl', '2019-11-14 03:44:28'),
(19, 'bdslanl', '2019-11-14 10:44:24'),
(20, 'bdslanl', '2019-11-14 10:57:56'),
(21, 'bdslanl', '2019-11-14 11:20:29'),
(22, 'bdslanl', '2019-11-14 16:18:36'),
(23, 'bdslanl', '2019-11-14 18:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `Text_Id` int(11) NOT NULL,
  `Theading` varchar(225) DEFAULT NULL,
  `TValue` text NOT NULL,
  `Post_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`Text_Id`, `Theading`, `TValue`, `Post_Id`) VALUES
(3, 'hi', 'vaibhav', 3),
(4, 'vai', 'bhav', 4),
(5, 'Yo', 'Got it', 5),
(6, 'sachin', 'pandey', 6),
(7, 'hello', 'Today is very hectic day', 7),
(8, 'sahil', 'my name is sahil', 8),
(9, 'rizwan', 'good developer', 9),
(10, 'dkankl', 'bdskabnlsanlo ahdosahojs lah', 10),
(11, 'rituraj', 'dlsadkmfvsdjb', 11),
(12, 'gurpreet', 'very hardworking guy', 12),
(13, 'Ravi Kisan', 'present -Candidate Master\r\nUpcoming-Master', 13),
(14, 'welcome', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 14),
(15, '', 'hello', 15),
(16, 'fsdghyg', 'rsyghrtjudgt', 16),
(17, 'afsgrdhtfygsgdhtfsgrhnf', 'sfzgdxfdnxgxzcsdvxfc', 17),
(18, 'sachin', 'hello mr how do you do', 18),
(19, 'estrhdyjug', 'wferstdhyjugkt', 19),
(20, 'Welcome to Database Lab', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20),
(21, 'dsgdfh,jk', 'sagsrhdtbdfgbrthgb', 21),
(22, 'Rishab', 'How are you', 22),
(23, 'Shashank', 'hello how ', 23);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` varchar(50) NOT NULL,
  `UPwd` varchar(255) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Login_Date` date DEFAULT NULL,
  `Photo` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `UPwd`, `FName`, `LName`, `Login_Date`, `Photo`) VALUES
('lhiukh@kuh', 'd41d8cd98f00b204e9800998ecf8427e', 'klihlk', 'klhuj', NULL, NULL),
('rizwan@gmail.com', '12d6bf6231f55e3df7e53ce3a58cd90f', 'Rizwan', 'Khan', NULL, NULL),
('sachin.pandey92102@facebook.com', '7fb31b4d1a84bd164d771dbfacfcca5e', 'bdsalbl', 'ldasnl', NULL, NULL),
('sachin@gmail.c', '971965bf2a35fb6f672fcb4bda2e5e87', 'bdsalbl', 'ldasnl', NULL, NULL),
('sachin@gmail.co', '378547b191b896bb2232ee6811238781', 'bdsalbl', 'ldasnl', NULL, NULL),
('sachin@gmail.com', 'sachin', 'sachin', 'pandey', NULL, NULL),
('sachin@gmail.com2345', '8c6024f694eff1495752480b3b9a4eb1', 'bdsalbl', 'ldasnl', NULL, NULL),
('sachin@gmail.com23455', 'f2f2aec953227b4a11ee5f7b3af572c0', 'bdsalbl', 'ldasnl', NULL, NULL),
('shrish@gmail.com', 'd8158e82b978e4d794ee91a4c5226fd4', 'shrish', 'sharma', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`Club_Id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Comment_Id`),
  ADD KEY `Comments_Ufk` (`User_Id`),
  ADD KEY `Comments_Pfk` (`Post_Id`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`poster_Id`,`Date_Time`,`Club_Id`),
  ADD KEY `DisC_fk` (`Club_Id`);

--
-- Indexes for table `followings`
--
ALTER TABLE `followings`
  ADD PRIMARY KEY (`User_Id`,`Club_Id`),
  ADD KEY `Followings_Ckf` (`Club_Id`);

--
-- Indexes for table `isadmin`
--
ALTER TABLE `isadmin`
  ADD PRIMARY KEY (`Admin_Id`,`Club_Id`),
  ADD KEY `Followings_Ckf1` (`Club_Id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`Photo_Id`),
  ADD KEY `Photos_fk` (`Post_Id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Post_Id`),
  ADD KEY `Post_fk` (`Club_Id`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`Text_Id`),
  ADD KEY `Text_fk` (`Post_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `Comment_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `Photo_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `Text_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Comments_Pfk` FOREIGN KEY (`Post_Id`) REFERENCES `posts` (`Post_Id`),
  ADD CONSTRAINT `Comments_Ufk` FOREIGN KEY (`User_Id`) REFERENCES `users` (`User_Id`);

--
-- Constraints for table `discussion`
--
ALTER TABLE `discussion`
  ADD CONSTRAINT `DisC_fk` FOREIGN KEY (`Club_Id`) REFERENCES `clubs` (`Club_Id`);

--
-- Constraints for table `followings`
--
ALTER TABLE `followings`
  ADD CONSTRAINT `Followings_Ckf` FOREIGN KEY (`Club_Id`) REFERENCES `clubs` (`Club_Id`),
  ADD CONSTRAINT `Followings_Ukf` FOREIGN KEY (`User_Id`) REFERENCES `users` (`User_Id`);

--
-- Constraints for table `isadmin`
--
ALTER TABLE `isadmin`
  ADD CONSTRAINT `Followings_Akf` FOREIGN KEY (`Admin_Id`) REFERENCES `admins` (`Admin_Id`),
  ADD CONSTRAINT `Followings_Ckf1` FOREIGN KEY (`Club_Id`) REFERENCES `clubs` (`Club_Id`);

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `Photos_fk` FOREIGN KEY (`Post_Id`) REFERENCES `posts` (`Post_Id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `Post_fk` FOREIGN KEY (`Club_Id`) REFERENCES `clubs` (`Club_Id`);

--
-- Constraints for table `texts`
--
ALTER TABLE `texts`
  ADD CONSTRAINT `Text_fk` FOREIGN KEY (`Post_Id`) REFERENCES `posts` (`Post_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
