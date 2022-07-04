-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 08:12 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cemetery`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `fnamecorpse` varchar(150) NOT NULL,
  `lnamecorpse` varchar(150) NOT NULL,
  `nationality` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `typegrave` varchar(150) NOT NULL,
  `dateBirth` date NOT NULL,
  `dateDeath` date NOT NULL,
  `RefNum` varchar(50) NOT NULL,
  `corpseReligion` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `adminapprove` varchar(20) NOT NULL,
  `gcash` varchar(50) NOT NULL,
  `bookimg` varchar(255) NOT NULL,
  `corpsetimestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `dateWalkIn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='teest';

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `userid`, `fnamecorpse`, `lnamecorpse`, `nationality`, `gender`, `typegrave`, `dateBirth`, `dateDeath`, `RefNum`, `corpseReligion`, `payment`, `adminapprove`, `gcash`, `bookimg`, `corpsetimestamp`, `dateWalkIn`) VALUES
(1, 2, 'Judith Chapman', 'Hadley Watkins', 'Sint ut sunt expli', 'Male', 'Private', '2019-02-04', '1996-10-10', '4', 'Saepe totam quia occ', 'pending', 'waiting', '09273743328', 'CemimgProfile-62befaf872bed2.12848950.', '2022-07-01 21:47:36', '0000-00-00'),
(2, 2, 'Luke Mitchell', 'Elmo Santos', 'Occaecat aut et quia', 'Female', 'Public', '1973-10-15', '1992-11-19', '', 'Rerum consequatur s', 'pending', 'Walk In Not Approve', '', '', '2022-07-03 11:53:10', '2022-07-20'),
(3, 2, 'Kibo Hardin', 'Francis Webster', 'Odio minima quos rer', 'Male', 'Private', '2022-10-18', '1986-04-04', '2', 'Pariatur Non sed eu', 'pending', 'waiting', '09273743328', 'CemImg-62befa4b21cb08.14804738.', '2022-07-01 21:42:03', '0000-00-00'),
(4, 2, 'Sylvester Pitts', 'Nissim Graham', 'Cillum minus soluta ', 'Male', 'Public', '1981-02-15', '2019-11-15', '3', 'Nisi adipisicing in ', 'pending', 'waiting', '09273743328', 'CemImg-62befa6fe69638.81958508.', '2022-07-01 21:44:52', '0000-00-00'),
(5, 2, 'Forrest Chandler', 'Noble Rosario', 'Quia et eiusmod labo', 'Male', 'Public', '1986-08-03', '1982-03-17', '1', 'Placeat sunt lorem', 'pending', 'Gcash Not Approve', '09273743328', 'CemImg-62befe1b722343.17564740.', '2022-07-03 11:54:00', '0000-00-00'),
(6, 2, 'Kyle Sheppard', 'Nathaniel Cruz', 'Sunt sit est conseq', 'Female', 'Private', '2018-12-02', '2004-12-28', '', 'Non duis dolore pers', 'Walk In', 'Walk In Approve', '', '', '2022-07-02 11:59:16', '2022-07-04'),
(7, 2, 'Yuri Herring', 'Thaddeus Riley', 'Aliquam sint dolorem', 'Female', 'Public', '1984-09-15', '1993-09-07', '', 'Alias expedita eum u', 'Walk In', 'Walk In Approve', '', '', '2022-07-03 10:25:27', '2022-06-27'),
(8, 2, 'Jacob Duran', 'Nolan Young', 'Aut voluptatem reru', 'Female', 'Private', '1995-06-04', '1983-05-23', '5', 'Qui tempor unde aliq', 'Gcash Paid', 'Gcash Approve', '09273743328', 'CemimgProfile-62bfb48c71c565.36861361.', '2022-07-02 10:59:24', '0000-00-00'),
(9, 2, 'Wade Kerr', 'Elaine Hatfield', 'Magna quisquam maior', 'Male', 'Private', '2003-06-28', '1976-12-01', '6', 'Odio mollitia id ni', 'Gcash Paid', 'Gcash Approve', '09273743328', 'CemImg-62c124f46e73d5.82393057.cakeee.jpg', '2022-07-03 13:11:29', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `corpse`
--

CREATE TABLE `corpse` (
  `corpseid` int(11) NOT NULL,
  `cfname` varchar(50) NOT NULL,
  `clname` varchar(50) NOT NULL,
  `cmname` varchar(50) NOT NULL,
  `cdob` date NOT NULL,
  `cdod` date NOT NULL,
  `dtimestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corpse`
--

INSERT INTO `corpse` (`corpseid`, `cfname`, `clname`, `cmname`, `cdob`, `cdod`, `dtimestamp`) VALUES
(1, 'Marks', 'Neo', 'Mamalias', '2021-10-05', '2021-10-07', '2021-10-19 03:55:24'),
(3, 'Rhysin', 'Villahermosa', 'Quilaton', '1978-10-03', '2000-10-20', '2021-10-19 03:57:42'),
(4, 'Kyle', 'Amaquin', 'kyaaaa', '2000-01-20', '2021-10-10', '2021-10-19 05:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(200) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `userFname` varchar(200) NOT NULL,
  `userLname` varchar(200) NOT NULL,
  `userContact` varchar(250) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userMail` varchar(200) NOT NULL,
  `userPwd` varchar(200) NOT NULL,
  `userTimestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userFname`, `userLname`, `userContact`, `userAddress`, `userMail`, `userPwd`, `userTimestamp`) VALUES
(1, 'Admin', 'Pockey', 'Pepero', '09273743328', 'Cawayan Dalaguete Cebu', 'rhysinvillahermosa16@gmail.com', 'Admin!@#', '2022-07-01 21:36:23'),
(2, 'Kyleee', 'Kyle', 'Amaquin', '09273743328', 'Cebu City', 'kyle@gmail.com', 'kyle123', '2022-07-01 21:38:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corpse`
--
ALTER TABLE `corpse`
  ADD PRIMARY KEY (`corpseid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `corpse`
--
ALTER TABLE `corpse`
  MODIFY `corpseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
