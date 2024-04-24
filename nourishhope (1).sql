-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 11:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nourishhope`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `U Id` int(10) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`U Id`, `userName`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `CId` int(10) NOT NULL,
  `CName` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Problem` varchar(100) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `DateReg` date NOT NULL,
  `SId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`CId`, `CName`, `DoB`, `Gender`, `Problem`, `Address`, `Country`, `Image`, `DateReg`, `SId`) VALUES
(1, 'Bushra ', '0000-00-00', 'female', 'Mlanutritions', 'CANADA', 'India', 'images/baby.jpg', '2023-04-25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `D Id` int(10) NOT NULL,
  `DName` varchar(50) NOT NULL,
  `Amount` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `paymentMethod` varchar(50) NOT NULL,
  `cardNumber` varchar(50) NOT NULL,
  `cvv` varchar(50) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`D Id`, `DName`, `Amount`, `Email`, `paymentMethod`, `cardNumber`, `cvv`, `year`) VALUES
(1, 'Bushra Samreen', '10', 'bushrasamreen73@gmail.com', '', '', '145', 2025),
(2, 'Bushra Samreen', '20', 'bushrasamreen73@gmail.com', 'credit_card', '4587451245', '125', 2025);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `P Id` int(10) NOT NULL,
  `PName` varchar(50) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `S Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `SId` int(10) NOT NULL,
  `SName` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `PhoneNo` varchar(15) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Type of Sponsorship` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `C Id` int(10) NOT NULL,
  `P Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`SId`, `SName`, `Gender`, `PhoneNo`, `Email`, `Address`, `Country`, `Type of Sponsorship`, `UserName`, `Password`, `C Id`, `P Id`) VALUES
(1, 'Bushra Samreen', '', '', '', '', '', '', '', '', 0, 0),
(2, 'Bushra Samreen', 'female', '8745542187', 'bushrasamreen73@gmail.com', '', '', '', 'bushrasamreen', '123456', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `V Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `TypeOfWork` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Why` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`V Id`, `Name`, `TypeOfWork`, `Email`, `PhoneNumber`, `Why`) VALUES
(1, 'Bushra Samreen', 'OfficeWork', 'bushrasamreen73@gmail.com', '8745542187', '                    helping out a charitable cause');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`U Id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`CId`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`D Id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`P Id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`SId`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`V Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `U Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `CId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `D Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `P Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `SId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `V Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
