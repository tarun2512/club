-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2021 at 01:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15403713_manutd`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `id` int(50) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `position` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id`, `name`, `dob`, `position`) VALUES
(3, 'Ed Woodward', '1971-11-09', 'Chairman'),
(4, 'Sir Alex Ferguson', '1941-12-31', 'Director'),
(5, 'Sir Booby Charlton', '1937-10-11', 'Director');

-- --------------------------------------------------------

--
-- Table structure for table `def`
--

CREATE TABLE `def` (
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `height` int(4) NOT NULL,
  `jersy_no` int(3) NOT NULL,
  `pos` text COLLATE utf8_unicode_ci NOT NULL,
  `bpos` text COLLATE utf8_unicode_ci NOT NULL,
  `apper` int(5) NOT NULL,
  `tackel` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `def`
--

INSERT INTO `def` (`name`, `nationality`, `dob`, `height`, `jersy_no`, `pos`, `bpos`, `apper`, `tackel`) VALUES
('Eric Bailly', 'England', '1994-04-12', 187, 3, 'Defender', 'CB', 60, 94),
('Harry Maguire', 'England', '1993-03-05', 194, 5, 'Defender', 'CB', 156, 204),
('Aaron Wan Bissaka', 'England', '1997-11-26', 183, 29, 'Defender', 'RB', 92, 336);

-- --------------------------------------------------------

--
-- Table structure for table `fix`
--

CREATE TABLE `fix` (
  `id` int(50) NOT NULL,
  `com` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `home` text COLLATE utf8_unicode_ci NOT NULL,
  `away` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` text COLLATE utf8_unicode_ci NOT NULL,
  `sec` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fix`
--

INSERT INTO `fix` (`id`, `com`, `home`, `away`, `date`, `time`, `sec`) VALUES
(3, 'Premier League', 'Man Utd', 'Liverpool', '2021-01-17', '10:30', 'PM'),
(4, 'Premier League', 'Man Utd', 'Fulham', '2021-01-21', '1:45', 'AM'),
(5, 'FA Cup', 'Liverpool', 'Manchester United', '2021-01-24', '10:30', 'PM');

-- --------------------------------------------------------

--
-- Table structure for table `gk`
--

CREATE TABLE `gk` (
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `height` int(5) NOT NULL,
  `jersy_no` int(4) NOT NULL,
  `pos` text COLLATE utf8_unicode_ci NOT NULL,
  `bpos` text COLLATE utf8_unicode_ci NOT NULL,
  `apper` int(5) NOT NULL,
  `save` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gk`
--

INSERT INTO `gk` (`name`, `nationality`, `dob`, `height`, `jersy_no`, `pos`, `bpos`, `apper`, `save`) VALUES
('David de Gea', 'Spain', '1990-11-07', 192, 1, 'Goal keeper', 'GK', 118, 898),
('Sergio Romero', 'Argentina', '1987-02-22', 192, 22, 'Sub Goal keeper', 'GK', 7, 20);

-- --------------------------------------------------------

--
-- Table structure for table `mid`
--

CREATE TABLE `mid` (
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `height` int(4) NOT NULL,
  `jersy_no` int(3) NOT NULL,
  `pos` text COLLATE utf8_unicode_ci NOT NULL,
  `bpos` text COLLATE utf8_unicode_ci NOT NULL,
  `apper` int(10) NOT NULL,
  `goal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mid`
--

INSERT INTO `mid` (`name`, `nationality`, `dob`, `height`, `jersy_no`, `pos`, `bpos`, `apper`, `goal`) VALUES
('Paul Pogba', 'France', '1993-03-15', 191, 6, 'Midfilder', 'CMF', 125, 27),
('Bruno Fernandes', 'Portugal', '1994-09-08', 179, 18, 'Midfilder', 'AMF', 31, 19),
('Nemania Matic', 'Serbia', '1988-08-01', 194, 31, 'Midfilder', 'DMF', 218, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pinfo`
--

CREATE TABLE `pinfo` (
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `nationality` text COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `height` int(11) NOT NULL,
  `jersy_no` int(11) NOT NULL,
  `pos` text COLLATE utf8_unicode_ci NOT NULL,
  `bpos` text COLLATE utf8_unicode_ci NOT NULL,
  `apper` int(11) NOT NULL,
  `goal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pinfo`
--

INSERT INTO `pinfo` (`name`, `nationality`, `dob`, `height`, `jersy_no`, `pos`, `bpos`, `apper`, `goal`) VALUES
('Marcus Rashford', 'England', '1997-10-31', 180, 10, 'Forward', 'LWF', 159, 516),
('Mason Greenwood', 'England', '2001-10-01', 181, 11, 'Forward', 'RWF', 45, 11);

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`email`, `pass`) VALUES
('nikhil15600@gmail.com', 'manutd'),
('sairevanth0007@gmail.com', 'man143utd');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(50) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `position` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `dob`, `position`) VALUES
(1, 'Ole Gunner', '1973-02-26', 'Manager'),
(3, 'Mike Phelan', '1962-09-24', 'Assistant Manager'),
(4, 'Michael Carrick', '1981-07-28', 'First Team Coach');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `height` int(5) NOT NULL,
  `jersy_no` int(5) NOT NULL,
  `pos` text COLLATE utf8_unicode_ci NOT NULL,
  `bpos` text COLLATE utf8_unicode_ci NOT NULL,
  `apper` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`name`, `nationality`, `dob`, `height`, `jersy_no`, `pos`, `bpos`, `apper`) VALUES
('Aliou Traore', 'France', '2001-01-08', 188, 15, 'Forward', 'RWF', 1),
('Axel Tuanzebe', 'Congolese', '1997-11-14', 182, 38, 'Defender', 'CB', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `def`
--
ALTER TABLE `def`
  ADD PRIMARY KEY (`jersy_no`);

--
-- Indexes for table `fix`
--
ALTER TABLE `fix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gk`
--
ALTER TABLE `gk`
  ADD PRIMARY KEY (`jersy_no`);

--
-- Indexes for table `mid`
--
ALTER TABLE `mid`
  ADD PRIMARY KEY (`jersy_no`);

--
-- Indexes for table `pinfo`
--
ALTER TABLE `pinfo`
  ADD PRIMARY KEY (`jersy_no`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`jersy_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fix`
--
ALTER TABLE `fix`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
