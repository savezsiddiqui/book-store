-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 08:58 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookfiesta`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `author` varchar(30) NOT NULL,
  `desc` varchar(300) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `img_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`name`, `price`, `qty`, `author`, `desc`, `isbn`, `img_name`) VALUES
('sherlock holmes', 20, 2, 'Sir Arthur Conan Doyle', 'Sherlock Holmes is a fictional private detective created by British author Sir Arthur Conan Doyle. Referring to himself as a \"consulting detective\" ', '0895772779', 'sherlock.jpg'),
('to kill a mocking bird', 5, 4, 'harper lee', 'no one ever forgets this book', '0446310786', 'to_kill_a_mockingbird.jpg'),
('one indian girl', 1, 1, 'chetan bhagat', 'three prunes (men) before  a low life wanker (woman) , none of them who gets her. i would personally suggest not to buy this shit but if you have billy as your father you sure can afford this shit.', '8129142147', '9788129142146-a2298.jpg'),
('the subtle art of not giving a', 4, 10, 'mark manson', 'fuck the facade of not giving fucks and read this.', '0062641549', '28257707._UY400_SS400_.jpg'),
('shiver', 2, 3, 'maggie stiefvater', 'tired of real life? this will help you live your freaking romantic fantasy.', '97805451232', 'shiver.jpg'),
('the boy who loved', 3, 2, 'durjoy dutta', 'the name is a fucking travesty , it is actually about a boy who never did as he said.', '0143426575', '61iTI4olCEL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `password`, `contact`, `city`, `address`) VALUES
('savez siddiqui', 'savez@outlook.com', 'MAKESHIFT17#a', '7408963464', 'allahabad', '231 A, Katghar, Allahabad'),
('rohit jain', 'rohitjain00@gmail.com', 'abc#', '7878787878', 'jodhpur', 'will not tell');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
