-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 03:16 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `susailordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendsc`
--

CREATE TABLE `attendsc` (
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `paid` enum('yes','no') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendsc`
--

INSERT INTO `attendsc` (`sid`, `cid`, `paid`) VALUES
(1, 1, 'yes'),
(1, 2, 'yes'),
(1, 3, 'yes'),
(1, 4, 'no'),
(1, 5, 'yes'),
(2, 1, 'yes'),
(2, 4, 'yes'),
(2, 10, 'no'),
(3, 1, 'yes'),
(4, 1, 'no'),
(5, 1, 'yes'),
(5, 2, 'yes'),
(6, 1, 'yes'),
(7, 1, 'yes'),
(8, 1, 'yes'),
(8, 6, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `attendse`
--

CREATE TABLE `attendse` (
  `sid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `paid` enum('yes','no') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendse`
--

INSERT INTO `attendse` (`sid`, `eid`, `paid`) VALUES
(1, 1, 'yes'),
(1, 2, 'yes'),
(1, 3, 'yes'),
(1, 4, 'yes'),
(1, 5, 'yes'),
(2, 1, 'yes'),
(2, 4, NULL),
(3, 1, 'no'),
(4, 1, 'yes'),
(5, 1, 'yes'),
(5, 2, 'no'),
(5, 3, 'no'),
(5, 4, 'no'),
(5, 5, 'no'),
(5, 6, 'no'),
(5, 7, 'no'),
(6, 1, 'yes'),
(6, 2, 'no'),
(6, 3, 'no'),
(6, 4, 'no'),
(6, 5, 'no'),
(6, 6, 'no'),
(6, 7, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `boats`
--

CREATE TABLE `boats` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `capacity` int(11) NOT NULL,
  `notes` varchar(144) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boats`
--

INSERT INTO `boats` (`id`, `name`, `capacity`, `notes`) VALUES
(1, 'gullu', 45, 'kizimin ismi'),
(2, 'selma', 30, 'kizimin ismi'),
(3, 'yavuz', 67, 'kizimin ismi'),
(4, 'hacer', 15, 'kizimin ismi'),
(5, 'sheila', 156, 'kizimin ismi'),
(6, 'hatice', 50, 'cok guzel tekne'),
(7, 'guzeltekne', 32, 'very nice boat'),
(8, 'haziran gecesi', 2, 'roamntik bir tekne');

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `sid` int(11) NOT NULL,
  `iid` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`sid`, `iid`, `start_date`, `end_date`) VALUES
(2, 1, '2017-03-16', '2017-03-21'),
(2, 1, '2017-03-19', '2017-03-20'),
(3, 1, '2017-03-22', '2017-04-20'),
(4, 1, '2017-03-25', '2017-04-20'),
(5, 1, '2017-05-26', '2017-06-20'),
(2, 2, '2017-03-20', '2017-04-20'),
(3, 2, '2017-03-23', '2017-04-20'),
(2, 3, '2017-03-21', '2017-04-20'),
(3, 3, '2017-03-24', '2017-04-20'),
(2, 4, '2017-03-19', '2017-03-20'),
(5, 4, '2017-03-26', '2017-04-20'),
(2, 4, '2017-05-16', '2017-05-09'),
(6, 5, '2017-03-27', '2017-04-20'),
(2, 5, '2017-05-16', '2017-05-19'),
(2, 6, '2017-05-11', '2017-05-23'),
(2, 7, '2017-05-12', '2017-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `committees`
--

CREATE TABLE `committees` (
  `name` varchar(20) NOT NULL,
  `budget` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committees`
--

INSERT INTO `committees` (`name`, `budget`) VALUES
('ayakyolu', 456),
('egitim komitesi', 800),
('heyhey', 134),
('heyheykomitesi', 400),
('iletisim komitesi', 900),
('kaldirim isleri', 0),
('new komite', 567),
('susam isleri', 560),
('yaris komitesi', 344);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `term` varchar(6) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `level`, `term`, `year`, `price`) VALUES
(1, 3, 'spring', 2016, 450),
(2, 2, 'fall', 2015, 350),
(3, 3, 'spring', 2017, 750),
(4, 3, 'fall', 2014, 550),
(5, 3, 'spring', 2016, 250),
(6, 2, '', 4567, 598),
(7, 2, '', 4567, 598),
(8, 2, 'spring', 4567, 354),
(9, 5, 'spring', 4567, 354),
(10, 7, 'fall', 2007, 120),
(11, 2, 'fall', 2018, 500);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `name`, `type`, `price`) VALUES
(1, '2017-03-08', 'DogayÄ± temizlemece', 'adalar gezisi', 567),
(2, '2017-03-08', 'cop toplamaca', 'adalar gezisi', 57),
(3, '2017-03-09', 'cop toplama1ca', 'adalar gezisi4', 75),
(4, '2017-03-04', 'cop toplamac2a', 'adalar gezisi5', 5667),
(5, '2017-04-08', 'cop toplamaca3', 'adalar gezisi6', 56),
(6, '2017-01-08', 'cop toplamac4', 'adalar gezisi7', 23),
(7, '2017-05-18', 'efhefh', '3thgbe3', 56);

-- --------------------------------------------------------

--
-- Table structure for table `has`
--

CREATE TABLE `has` (
  `sid` int(11) NOT NULL,
  `emergency_name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `has`
--

INSERT INTO `has` (`sid`, `emergency_name`, `phone`) VALUES
(2, 'Murat', '5439876576'),
(3, 'Beyonce', '5399875647'),
(4, 'Ahmet', '5439834566'),
(5, 'Jay-Z', '5395555647'),
(6, 'Betül', '5422276576'),
(7, 'Snoop Dogg', '5349876576');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` enum('available','unavailable') NOT NULL,
  `notes` varchar(144) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `status`, `notes`) VALUES
(1, 'su', 'available', '3 lt su '),
(2, 'cikolata', 'available', '5 lt cikolata '),
(3, 'yazilim', 'available', '5 kg yazilim '),
(4, 'stand', 'available', 'ayagi kirik'),
(5, 'gemi', 'available', 'kocaman'),
(6, 'masa', 'available', 'cok guzel bir masa'),
(7, 'KALEMLÄ°K', 'available', 'gÃ¼zel bir kalemlik');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `gender` varchar(3) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `pword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `phone`, `gender`, `level`, `pword`) VALUES
(1, 'cagrithenew', 'email3', '68357373', 'kiz', 2, 'erok'),
(2, 'sinan', 'sinan@smail.com', '5784675635', 'erk', 3, '12345'),
(3, 'cagri', 'email2', '5674895743', 'erk', 3, 'frnrg'),
(4, 'baris', 'email3', '5678970607', 'erk', 3, 'jbf94jg'),
(5, 'Egemen', 'Email4', '5673465858', 'erk', 0, 'nbjsl'),
(6, 'KayseriLee', 'Email4', '5673465858', 'erk', 0, 'dfh4th'),
(7, 'Burcu', 'Email6', '5253464674', 'kiz', 2, 'rt4bgg'),
(8, 'barkin', 'barkinkaplan', '5673984565', 'erk', 0, 'heyhey'),
(9, 'egemen', 'barkinkaplan', '5673984565', 'erk', 0, 'heyhey'),
(10, 'bora', 'ozdemir', '4547375', 'erk', 3, '56789');

-- --------------------------------------------------------

--
-- Table structure for table `purchasesfor`
--

CREATE TABLE `purchasesfor` (
  `cname` varchar(30) NOT NULL,
  `iid` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchasesfor`
--

INSERT INTO `purchasesfor` (`cname`, `iid`, `date`, `amount`) VALUES
('egitim komitesi', 2, '2017-03-25', 34),
('egitim komitesi', 3, '2017-03-24', 34),
('kaldirim isleri', 1, '2017-03-21', 34),
('kaldirim isleri', 2, '2017-03-20', 34),
('susam isleri', 1, '2017-03-29', 34),
('susam isleri', 2, '2017-03-29', 34),
('susam isleri', 3, '2017-03-28', 34),
('susam isleri', 5, '2017-03-22', 34),
('yaris komitesi', 2, '2017-03-29', 34),
('yaris komitesi', 4, '2017-03-27', 34);

-- --------------------------------------------------------

--
-- Table structure for table `purchasesfrom`
--

CREATE TABLE `purchasesfrom` (
  `sid` int(11) NOT NULL,
  `iid` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchasesfrom`
--

INSERT INTO `purchasesfrom` (`sid`, `iid`, `date`, `amount`) VALUES
(1, 2, '2015-01-05', 34),
(1, 3, '2017-03-31', 53),
(1, 4, '2017-03-31', 53),
(1, 5, '2017-03-11', 53),
(2, 2, '2015-01-03', 31),
(2, 3, '2015-01-06', 35),
(2, 4, '2015-01-07', 36),
(3, 1, '2017-03-19', 34),
(4, 1, '2015-01-04', 34),
(5, 5, '2015-01-13', 37);

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `sid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`sid`, `bid`, `date`) VALUES
(1, 1, '1970-01-01'),
(1, 1, '2015-06-23'),
(1, 1, '2015-06-24'),
(8, 1, '2017-05-06'),
(1, 2, '2017-05-24'),
(2, 2, '2017-05-09'),
(5, 2, '2015-06-02'),
(6, 2, '2015-06-03'),
(3, 3, '2015-06-29'),
(4, 3, '2015-06-01'),
(3, 4, '2015-06-03'),
(3, 4, '2015-06-27'),
(4, 4, '2015-06-28'),
(2, 5, '2015-06-25'),
(2, 5, '2015-06-26'),
(5, 5, '2017-05-18'),
(1, 6, '2017-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `worksin`
--

CREATE TABLE `worksin` (
  `sid` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worksin`
--

INSERT INTO `worksin` (`sid`, `cname`) VALUES
(5, 'egitim komitesi'),
(2, 'susam isleri'),
(3, 'susam isleri'),
(4, 'susam isleri'),
(7, 'susam isleri'),
(6, 'yaris komitesi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendsc`
--
ALTER TABLE `attendsc`
  ADD PRIMARY KEY (`sid`,`cid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `attendse`
--
ALTER TABLE `attendse`
  ADD PRIMARY KEY (`sid`,`eid`),
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `boats`
--
ALTER TABLE `boats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`iid`,`start_date`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `has`
--
ALTER TABLE `has`
  ADD PRIMARY KEY (`sid`,`emergency_name`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchasesfor`
--
ALTER TABLE `purchasesfor`
  ADD PRIMARY KEY (`cname`,`iid`),
  ADD KEY `iid` (`iid`);

--
-- Indexes for table `purchasesfrom`
--
ALTER TABLE `purchasesfrom`
  ADD PRIMARY KEY (`sid`,`iid`),
  ADD KEY `iid` (`iid`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`sid`,`bid`,`date`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `worksin`
--
ALTER TABLE `worksin`
  ADD PRIMARY KEY (`sid`,`cname`),
  ADD KEY `cname` (`cname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boats`
--
ALTER TABLE `boats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendsc`
--
ALTER TABLE `attendsc`
  ADD CONSTRAINT `attendsc_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `attendsc_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `courses` (`id`);

--
-- Constraints for table `attendse`
--
ALTER TABLE `attendse`
  ADD CONSTRAINT `attendse_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `attendse_ibfk_2` FOREIGN KEY (`eid`) REFERENCES `events` (`id`);

--
-- Constraints for table `borrows`
--
ALTER TABLE `borrows`
  ADD CONSTRAINT `borrows_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `borrows_ibfk_2` FOREIGN KEY (`iid`) REFERENCES `inventory` (`id`);

--
-- Constraints for table `has`
--
ALTER TABLE `has`
  ADD CONSTRAINT `has_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `members` (`id`);

--
-- Constraints for table `purchasesfor`
--
ALTER TABLE `purchasesfor`
  ADD CONSTRAINT `purchasesfor_ibfk_1` FOREIGN KEY (`cname`) REFERENCES `committees` (`name`),
  ADD CONSTRAINT `purchasesfor_ibfk_2` FOREIGN KEY (`iid`) REFERENCES `inventory` (`id`);

--
-- Constraints for table `purchasesfrom`
--
ALTER TABLE `purchasesfrom`
  ADD CONSTRAINT `purchasesfrom_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `purchasesfrom_ibfk_2` FOREIGN KEY (`iid`) REFERENCES `inventory` (`id`);

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `reserves_ibfk_2` FOREIGN KEY (`bid`) REFERENCES `boats` (`id`);

--
-- Constraints for table `worksin`
--
ALTER TABLE `worksin`
  ADD CONSTRAINT `worksin_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `worksin_ibfk_2` FOREIGN KEY (`cname`) REFERENCES `committees` (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
