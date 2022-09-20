-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 05:59 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `bus_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `price` int(30) NOT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL,
  `bus_id` varchar(30) NOT NULL,
  `seats` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`source`, `destination`, `bus_name`, `date`, `price`, `departure`, `arrival`, `bus_id`, `seats`) VALUES
('delhi', 'firozabad', 'UP state Road Transport', '2017-04-17', 590, '05:00:00', '10:30:00', 'Upd', 234),
('agra', 'delhi', 'Amar Travels', '2017-04-19', 200, '04:21:00', '00:00:00', '', 0),
('agra', 'delhi', 'Amar travels', '2017-04-18', 200, '04:30:00', '00:00:00', '', 0),
('agra', 'delhi', 'Amar travels', '2017-04-19', 200, '05:00:00', '00:00:00', '', 0),
('agra', 'delhi', 'Amar travels', '2017-04-19', 200, '07:30:00', '09:00:00', 'Aa', 55);

-- --------------------------------------------------------

--
-- Table structure for table `enquirybus`
--

CREATE TABLE `enquirybus` (
  `busid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobileno` bigint(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passenger` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquirybus`
--

INSERT INTO `enquirybus` (`busid`, `name`, `mobileno`, `email`, `passenger`) VALUES
('Upd', 'hey', 9993332442, 'gar.dal@gmail.com', '2');

-- --------------------------------------------------------

--
-- Table structure for table `enquiryflight`
--

CREATE TABLE `enquiryflight` (
  `flightid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobileno` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passenger` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiryflight`
--

INSERT INTO `enquiryflight` (`flightid`, `name`, `mobileno`, `email`, `passenger`) VALUES
('spice1', 'ridhima garg', 2147483647, 'garg.ridhima20021997@gmail.com', 2),
('indi1', 'sakshi', 2147483647, 'garg.ridhima70@gmail.com', 4),
('spice1', 'hs', 2147483647, 'garg.anshika@gmail.com', 3),
('spiceM', 'ridhima garg', 2147483647, 'gar.dal@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `enquirytrain`
--

CREATE TABLE `enquirytrain` (
  `trainid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobileno` bigint(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passenger` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquirytrain`
--

INSERT INTO `enquirytrain` (`trainid`, `name`, `mobileno`, `email`, `passenger`) VALUES
('masd', 'anshika', 9990002224, 'garg.anshika@gmail.com', 2),
('chm', 'ghshv', 9997455345, 'garg.ridhima20021997@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `enquirytrainfirst`
--

CREATE TABLE `enquirytrainfirst` (
  `trainid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobileno` bigint(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passenger` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquirytrainfirst`
--

INSERT INTO `enquirytrainfirst` (`trainid`, `name`, `mobileno`, `email`, `passenger`) VALUES
('', 'ridhima', 9997455345, 'garg.ridhima70@gmail.com', 3),
('Submit', 'mitali', 8979675620, 'garg.ridhima2001997@gmail.com', 2),
('', '', 0, '', 0),
('Submit', 'ridhima garg', 55675, 'garg.ridhima20021997@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `query` text NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`query`, `email`) VALUES
('\r\n	hjvvk', ''),
('\r\n	hajxbnmx', 'garg.ridhima20021997@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `flight_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `price` int(30) NOT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL,
  `image` text NOT NULL,
  `flight_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`source`, `destination`, `flight_name`, `date`, `price`, `departure`, `arrival`, `image`, `flight_id`) VALUES
('chennai', 'delhi', 'agrajet', '2017-04-05', 0, '00:00:00', '00:00:00', 'hot1.jpg', ''),
('delhi', 'mumbai', 'IndiGo', '2017-04-17', 6000, '10:00:00', '12:30:00', '', 'indi1'),
('delhi', 'mumbai', 'SpiceJet', '2017-04-18', 5500, '07:36:00', '09:40:11', '', 'spice1'),
('mumbai', 'banglore', 'SpiceJet', '2017-04-18', 4000, '04:26:00', '06:00:00', '', 'spiceM'),
('mumbai', 'banglore', 'AirGo', '2017-04-19', 5000, '13:27:00', '15:33:00', '', 'airM'),
('delhi', 'mumbai', 'SpiceJet', '2017-04-17', 4000, '03:00:00', '11:00:00', '', 'spiceD'),
('banglore', 'chennai', 'AirGo', '2017-04-20', 2000, '18:00:00', '20:00:00', '', 'airB'),
('gujrat', 'delhi', 'SpiceJet', '2017-04-18', 50000, '13:00:00', '16:00:00', '', 'spiceG');

-- --------------------------------------------------------

--
-- Table structure for table `function`
--

CREATE TABLE `function` (
  `transport` varchar(30) NOT NULL,
  `trans_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function`
--

INSERT INTO `function` (`transport`, `trans_id`) VALUES
('flights', 1),
('train', 2),
('buses', 3),
('hotels', 4),
('train first', 5);

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `train_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `price` int(30) NOT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL,
  `train_id` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`source`, `destination`, `train_name`, `date`, `price`, `departure`, `arrival`, `train_id`, `day`) VALUES
('delhi', 'chennai', 'MAS Duronto EXP', '2017-04-19', 6773, '07:50:00', '18:00:00', 'masd', 'day 2'),
('delhi', 'chennai', 'G T Express', '2017-04-19', 4000, '10:00:00', '00:53:00', 'Gd', 'day 3'),
('mumbai', 'chennai', 'chennai express', '2017-04-20', 510, '10:00:00', '00:10:00', 'cm', 'day 1'),
('mumbai', 'chennai', 'chennai mail', '2017-04-20', 550, '08:00:00', '15:00:00', 'chm', 'day 2'),
('agra', 'delhi', 'taj express', '2017-04-20', 150, '05:00:00', '08:40:00', 'ta', 'day 1');

-- --------------------------------------------------------

--
-- Table structure for table `traincategory`
--

CREATE TABLE `traincategory` (
  `category` varchar(30) NOT NULL,
  `id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traincategory`
--

INSERT INTO `traincategory` (`category`, `id`) VALUES
('sleeper', 1),
('first', 2);

-- --------------------------------------------------------

--
-- Table structure for table `train_first`
--

CREATE TABLE `train_first` (
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `train_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `price` int(30) NOT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL,
  `train_id` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_first`
--

INSERT INTO `train_first` (`source`, `destination`, `train_name`, `date`, `price`, `departure`, `arrival`, `train_id`, `day`) VALUES
('delhi', 'jhansi', 'shatabdi express', '2017-04-19', 690, '07:00:00', '13:29:00', 'sd', 'day 1'),
('agra', 'delhi', 'taj express', '2017-04-26', 130, '09:00:00', '00:36:00', 'ta', 'day 1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
