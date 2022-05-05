-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 01:05 PM
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
  `corpseAddress` varchar(50) NOT NULL,
  `corpseReligion` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `adminapprove` varchar(20) NOT NULL,
  `gcash` varchar(50) NOT NULL,
  `bookimg` varchar(255) NOT NULL,
  `corpsetimestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='teest';

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `userid`, `fnamecorpse`, `lnamecorpse`, `nationality`, `gender`, `typegrave`, `dateBirth`, `dateDeath`, `corpseAddress`, `corpseReligion`, `payment`, `adminapprove`, `gcash`, `bookimg`, `corpsetimestamp`) VALUES
(4, 6, 'Jackson Gilliam', 'Chantale Mcpherson', 'Sit id nesciunt au', 'Female', 'Public', '1986-05-25', '1982-06-06', '', 'Enim itaque qui debi', 'pending', 'waiting', '09273743328', 'CemImg-622dbc025e41e6.19493725.facial service.jpg', '2022-03-13 17:40:09'),
(5, 6, 'Quyn Kirkland', 'Russell Dunlap', 'Ut pariatur Et comm', 'Male', 'Private', '1981-05-12', '2011-03-18', '', 'Veniam magnam nulla', 'pending', 'waiting', '09273743328', 'CemimgProfile-622ef95460f662.59037878.Gojo Satoru 2.jpg', '2022-03-13 17:42:06'),
(6, 6, 'Iris Carter', 'Libby Murphy', 'Aut qui reiciendis n', 'Female', 'Public', '2006-08-12', '2005-12-19', '', 'Officia sapiente vol', 'pending', 'Not Approve', '09273743328', 'CemimgProfile-622ef8759f0d31.23027155.junk.jpg', '2022-03-13 17:47:52'),
(8, 6, 'Preston Ashley', 'Ulysses Stein', 'Quam non blanditiis ', 'Female', 'Public', '2016-03-08', '1993-09-27', '', 'Explicabo At ad ten', 'queue', '', '', '', '2022-03-14 17:11:37'),
(10, 12, 'Hadassah Peters', 'Tyler Gaines', 'Est ad reprehenderit', 'Female', 'Public', '1975-08-19', '1972-07-26', '', 'Impedit at voluptat', 'queue', '', '', '', '2022-03-14 17:47:33'),
(11, 4, 'kyle', 'kyle', 'Filipino', 'Female', 'Public', '2017-03-08', '2022-03-09', '', 'Catholic', 'pending', 'waiting', 'sdfgdsfg', 'CemimgProfile-624a9606820e74.31055796.video showoff.png', '2022-04-04 14:53:58'),
(12, 4, 'Zeph Jacobs', 'Gretchen Wall', 'Magni pariatur Repr', 'Female', 'Public', '1993-10-05', '1974-06-01', '', 'Beatae reprehenderit', 'pending', 'Not Approve', 'Marksse', 'CemImg-62616c21354227.96628927.headercover.jpg', '2022-04-21 22:36:54'),
(13, 22, 'Preston Wall', 'Kasper Carver', 'Sed dolor pariatur ', 'Female', 'Private', '1993-08-15', '2006-09-07', '', 'Tenetur expedita und', 'Paid', 'Approve', '099999', 'CemimgProfile-626206ade08034.92071317.headercover.jpg', '2022-04-22 09:36:45'),
(14, 22, 'Charity Smith', 'Sybil Hebert', 'Ea aperiam voluptate', 'Male', 'Private', '2018-07-10', '2018-01-22', '', 'Sint reiciendis sunt', 'queue', '', '', '', '2022-04-22 09:58:56'),
(15, 22, 'Amelia Hartman', 'Shelly Mcmahon', 'Dolorem excepteur cu', 'Female', 'Public', '1982-04-08', '1973-04-01', '', 'Fugiat rerum atque s', 'queue', '', '', '', '2022-04-22 10:01:16'),
(16, 4, 'Harlan Holman', 'Aubrey Decker', 'Eu eos voluptatibus ', 'Male', 'Public', '2017-07-12', '2010-12-04', '', 'Modi sed exercitatio', 'Paid', 'Approve', '0999999', 'CemimgProfile-62620fe5dd3ac8.77989975.headercover.jpg', '2022-04-22 10:16:05');

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
  `userContact` int(200) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userMail` varchar(200) NOT NULL,
  `userPwd` varchar(200) NOT NULL,
  `userTimestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userFname`, `userLname`, `userContact`, `userAddress`, `userMail`, `userPwd`, `userTimestamp`) VALUES
(1, 'Admin', 'Pockey', 'Pepero', 666666, 'Realm of Reality', 'grimreaper@haven.hll', 'admin', '2021-10-15 23:43:28'),
(4, 'Marksse', 'Mark', 'Neo', 31213123, 'Realm of Reality', 'kyle@gmail.com', '123', '2021-10-20 09:12:26'),
(5, 'PockeyPepero', 'Rhysin', 'Villahermosa', 99999, 'Cawayan', 'rhysin@gmail.com', 'rhy123', '2021-10-17 19:44:13'),
(6, 'Mark', 'Mark Neo', 'Mamalias', 123123123, 'Argao', 'mark@gmail.com', 'mark123', '2021-10-17 19:44:55'),
(12, 'kylee', 'kyle', 'Amaquin', 123123, 'Dalaguete', 'kyle@gmail.com', 'kyle123', '2021-10-19 11:15:43'),
(21, 'posytumo', 'Buckminster Baxter', 'Jin Cobb', 1123123, 'Occaecat error in ad', 'zahe@mailinator.com', 'Pa$$w0rd!', '2022-03-19 18:26:54'),
(22, 'tosyvox', 'Quentin Marquez', 'Libby Kelley', 2147483647, 'Aperiam rerum sequi ', 'jikazo@mailinator.com', 'RHYSIN123', '2022-04-22 09:31:09');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `corpse`
--
ALTER TABLE `corpse`
  MODIFY `corpseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
