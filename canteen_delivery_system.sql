-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 04:36 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen_delivery_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `item_name` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `Include` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`item_name`, `price`, `Include`) VALUES
('dosa plain', 24, 1),
('dosa masala', 34, 1),
('Sandwich  grilled', 35, 0),
('123', 123, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `username` varchar(20) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_qty` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` tinyint(1) NOT NULL DEFAULT 0,
  `Order_id` int(11) NOT NULL,
  `d_address` varchar(30) NOT NULL,
  `total_bill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`username`, `item_name`, `item_qty`, `timestamp`, `Status`, `Order_id`, `d_address`, `total_bill`) VALUES
('het', 'dosa plain', 2, '2019-11-20 03:09:07', 0, 12, 'N101', 0),
('het', 'dosa masal', 1, '2019-11-20 03:09:07', 0, 13, 'N101', 0),
('het', 'dosa plain', 1, '2019-11-20 03:21:39', 1, 14, 'n101', 0),
('het', 'dosa plain', 1, '2019-11-20 03:21:51', 0, 15, 'B101', 0),
('het', 'dosa masal', 1, '2019-11-20 03:21:51', 0, 16, 'B101', 0),
('het', 'dosa plain', 1, '2019-11-20 03:23:12', 0, 17, 'D101', 0),
('het', 'dosa plain', 1, '2019-11-20 05:01:21', 0, 18, 'd305', 0),
('Het', 'dosa masal', 5, '2022-04-15 14:22:02', 0, 19, '', 170),
('Het', 'dosa masal', 5, '2022-04-15 14:24:32', 0, 20, '', 170),
('Het', 'dosa masal', 5, '2022-04-15 14:28:56', 0, 21, '', 170),
('Het', 'dosa masala', 4, '2022-04-15 14:30:44', 0, 22, '', 136),
('Het', 'dosa masala', 3, '2022-04-15 14:31:37', 0, 23, '', 102),
('Het', 'dosa masala', 2, '2022-04-15 14:32:17', 0, 24, '', 68),
('Het', 'dosa masala', 10, '2022-04-15 14:34:13', 0, 25, '', 340),
('Het', 'dosa masala', 0, '2022-04-15 14:35:29', 0, 26, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `temp_order`
--

CREATE TABLE `temp_order` (
  `item_name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `credit_amount` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `type`, `credit_amount`) VALUES
('admin', 'admin', 1, 0),
('Het ', 'het', 0, 9952),
('Het Shah', 'het', 0, 392);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 04:36 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen_delivery_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `item_name` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `Include` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`item_name`, `price`, `Include`) VALUES
('dosa plain', 24, 1),
('dosa masala', 34, 1),
('Sandwich  grilled', 35, 0),
('123', 123, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `username` varchar(20) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_qty` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` tinyint(1) NOT NULL DEFAULT 0,
  `Order_id` int(11) NOT NULL,
  `d_address` varchar(30) NOT NULL,
  `total_bill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`username`, `item_name`, `item_qty`, `timestamp`, `Status`, `Order_id`, `d_address`, `total_bill`) VALUES
('het', 'dosa plain', 2, '2019-11-20 03:09:07', 0, 12, 'N101', 0),
('het', 'dosa masal', 1, '2019-11-20 03:09:07', 0, 13, 'N101', 0),
('het', 'dosa plain', 1, '2019-11-20 03:21:39', 1, 14, 'n101', 0),
('het', 'dosa plain', 1, '2019-11-20 03:21:51', 0, 15, 'B101', 0),
('het', 'dosa masal', 1, '2019-11-20 03:21:51', 0, 16, 'B101', 0),
('het', 'dosa plain', 1, '2019-11-20 03:23:12', 0, 17, 'D101', 0),
('het', 'dosa plain', 1, '2019-11-20 05:01:21', 0, 18, 'd305', 0),
('Het', 'dosa masal', 5, '2022-04-15 14:22:02', 0, 19, '', 170),
('Het', 'dosa masal', 5, '2022-04-15 14:24:32', 0, 20, '', 170),
('Het', 'dosa masal', 5, '2022-04-15 14:28:56', 0, 21, '', 170),
('Het', 'dosa masala', 4, '2022-04-15 14:30:44', 0, 22, '', 136),
('Het', 'dosa masala', 3, '2022-04-15 14:31:37', 0, 23, '', 102),
('Het', 'dosa masala', 2, '2022-04-15 14:32:17', 0, 24, '', 68),
('Het', 'dosa masala', 10, '2022-04-15 14:34:13', 0, 25, '', 340),
('Het', 'dosa masala', 0, '2022-04-15 14:35:29', 0, 26, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `temp_order`
--

CREATE TABLE `temp_order` (
  `item_name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `credit_amount` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `type`, `credit_amount`) VALUES
('admin', 'admin', 1, 0),
('Het ', 'het', 0, 9952),
('Het Shah', 'het', 0, 392);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 04:36 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen_delivery_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `item_name` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `Include` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`item_name`, `price`, `Include`) VALUES
('dosa plain', 24, 1),
('dosa masala', 34, 1),
('Sandwich  grilled', 35, 0),
('123', 123, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `username` varchar(20) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_qty` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` tinyint(1) NOT NULL DEFAULT 0,
  `Order_id` int(11) NOT NULL,
  `d_address` varchar(30) NOT NULL,
  `total_bill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`username`, `item_name`, `item_qty`, `timestamp`, `Status`, `Order_id`, `d_address`, `total_bill`) VALUES
('het', 'dosa plain', 2, '2019-11-20 03:09:07', 0, 12, 'N101', 0),
('het', 'dosa masal', 1, '2019-11-20 03:09:07', 0, 13, 'N101', 0),
('het', 'dosa plain', 1, '2019-11-20 03:21:39', 1, 14, 'n101', 0),
('het', 'dosa plain', 1, '2019-11-20 03:21:51', 0, 15, 'B101', 0),
('het', 'dosa masal', 1, '2019-11-20 03:21:51', 0, 16, 'B101', 0),
('het', 'dosa plain', 1, '2019-11-20 03:23:12', 0, 17, 'D101', 0),
('het', 'dosa plain', 1, '2019-11-20 05:01:21', 0, 18, 'd305', 0),
('Het', 'dosa masal', 5, '2022-04-15 14:22:02', 0, 19, '', 170),
('Het', 'dosa masal', 5, '2022-04-15 14:24:32', 0, 20, '', 170),
('Het', 'dosa masal', 5, '2022-04-15 14:28:56', 0, 21, '', 170),
('Het', 'dosa masala', 4, '2022-04-15 14:30:44', 0, 22, '', 136),
('Het', 'dosa masala', 3, '2022-04-15 14:31:37', 0, 23, '', 102),
('Het', 'dosa masala', 2, '2022-04-15 14:32:17', 0, 24, '', 68),
('Het', 'dosa masala', 10, '2022-04-15 14:34:13', 0, 25, '', 340),
('Het', 'dosa masala', 0, '2022-04-15 14:35:29', 0, 26, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `temp_order`
--

CREATE TABLE `temp_order` (
  `item_name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `credit_amount` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `type`, `credit_amount`) VALUES
('admin', 'admin', 1, 0),
('Het ', 'het', 0, 9952),
('Het Shah', 'het', 0, 392);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;