-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 01:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theorganizer`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`) VALUES
(3, 'Kashmir');

-- --------------------------------------------------------

--
-- Table structure for table `destintion`
--

CREATE TABLE `destintion` (
  `id` int(11) NOT NULL,
  `dest` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destintion`
--

INSERT INTO `destintion` (`id`, `dest`) VALUES
(7, 'f,jakfasd'),
(9, 'ljluwefwe');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `hotelName` varchar(255) NOT NULL,
  `city` varchar(120) NOT NULL,
  `featureImg` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `map` varchar(1200) NOT NULL,
  `services` varchar(20) NOT NULL,
  `price` varchar(11) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotelName`, `city`, `featureImg`, `images`, `map`, `services`, `price`, `description`) VALUES
(4, 'narann', 'hunzaaa', '', '', 'dhsfhsdjkfhasjkfhjkaslh', 'nashta', '13500', '3 dayst tour'),
(8, 'naran', 'hunza', '', '', 'dhsfhsdjkfhasjkfhjkaslh', 'nashta', '20000', '5 days hunza'),
(9, 'kumrat & chitrafdl', 'kpk', 'pexels-sagui-andrea-618833.jpg', 'images.jpeg,grocerapp-kashmir-banaspati-pouch-5e6c3b29d3312.jpeg,0_a8__BlPyJgnS0bXa.jpg,stock-vector-common-supermarket-grocery-products-flat-vector-illustration-set-cooking-ingredients-everyday-1589944774.jpg,donated-toiletries-web.jpg,download (5).jpeg', 'dhsfhsdjkfhasjkfhjkaslh', 'nashta', '12301333', '3 days kumrat'),
(10, 'adfnaj', '', '', '', '', '', '', ''),
(11, 'Hilton Hotel', 'Naran', 'WhatsApp Image 2023-07-30 at 9.06.05 PM.jpeg', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1702829.7498542645!2d75.26496015!3d33.5315621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e1092499ffa89d%3A0x6567a6d4697e7f1!2sJammu%20and%20Kashmir!5e0!3m2!1sen!2s!4v1691063430526!5m2!1sen!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'nashta diner', '6000', 'daksfjafjadajf'),
(12, 'Land mark', 'Naran', 'order now.png', 'First Board meeting (2).jpg,WhatsApp Image 2023-07-30 at 8.50.16 PM.jpeg,WhatsApp Image 2023-07-30 at 8.48.10 PM.jpeg,WhatsApp Image 2023-07-30 at 8.42.11 PM.jpeg,WhatsApp Image 2023-07-30 at 8.42.17 PM.jpeg,WhatsApp Image 2023-07-30 at 8.42.23 PM.jpeg', '', 'this is services', '35,000', 'adlfhasdklfahfjlahfajfhajfahadlfhasdklfahfjlahfajfhajfahadlfhasdklfahfjlahfajfhajfahadlfhasdklfahfjlahfajfhajfahadlfhasdklfahfjlahfajfhajfahadlfhasdklfahfjlahfajfhajfahadlfhasdklfahfjlahfajfhajfahadlfhasdklfahfjlahfajfhajfahadlfhasdklfahfjlahfajfhajfahadlfhasdklfahfjlahfajfhajfahadlfhasdklfahfjlahfajfhajfahadlfhasdklfahfjlahfajfhajfahadlfhasdklfahfjlahfajfhajfah'),
(13, 'kashmir', '', '', '', '', 'hote;', '', ''),
(14, 'Honey Moon new', 'Swat', 'Study Abroad (2).png', '0301-3132578 (4).png,$5.png,Rs.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6498.272841471127!2d72.58482843954944!3d35.47616837775106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dcfb9bd8ddfc7d%3A0x8bddbaff43540773!2sNew%20Honey%20Moon%20Hotel%20%26%20Restaurant!5e0!3m2!1sen!2s!4v1705233091028!5m2!1sen!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'nashta, dinner , hea', '35,000', '10 Best Pakistan Honeymoon Resorts & Hotels for 2024 Pick from 9 Pakistan Honeymoon Resorts & Hotels with updated room rates, reviews, and availability. Most hotels are fully refundable. · Bella View Lounge ..');

-- --------------------------------------------------------

--
-- Table structure for table `hotelcategory`
--

CREATE TABLE `hotelcategory` (
  `id` int(11) NOT NULL,
  `hcategory` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotelcategory`
--

INSERT INTO `hotelcategory` (`id`, `hcategory`) VALUES
(1, ''),
(2, 'deluxf'),
(3, ''),
(4, ''),
(5, 'delux'),
(6, 'ladfjf');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `Hotel` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `services`, `image`, `price`, `Hotel`) VALUES
(7, 'delux', 'this is services', 'First Board meeting (2).jpg', '8987', '9'),
(8, 'honey moon', 'dfjkahdafhajfadhashfasjh', 'dark.png', '2500', '8'),
(9, 'honey moon', 'special Honey moon', '469af2b5-8b76-4d48-96d0-de007fd7e6c6.jpg', '15000', '9'),
(10, '', '', '', '', '4'),
(11, '', '', '', '', '4'),
(12, 'delux', 'nashta,2 persons,heater', '40427749762_85b206c870_b.jpg', '35,000', '4'),
(13, 'delux', 'nashta,HEATER,4,Gizer', 'First Board meeting.jpg', '8987', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destintion`
--
ALTER TABLE `destintion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelcategory`
--
ALTER TABLE `hotelcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `destintion`
--
ALTER TABLE `destintion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hotelcategory`
--
ALTER TABLE `hotelcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
