-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2021 at 07:32 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(80) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('gayathrinair', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book_add`
--

CREATE TABLE `book_add` (
  `Student_id` varchar(80) NOT NULL,
  `Student_name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Father_name` int(100) NOT NULL
  'Standard' varchar() NOT NULL
  'Division' varchar() NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_add`
--

INSERT INTO `kids_add` (`Student_id`, `Student_name`, `Address`, `Date_of_birth`, `Father_name` , 'Standard' ,'Division') VALUES
('001', 'Amalu', 'Ak.House,Varkala', '20-05-2016', 'Siva' ,"LKG" ,'c');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
