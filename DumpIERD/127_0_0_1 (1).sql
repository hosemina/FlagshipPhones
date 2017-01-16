-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2017 at 02:02 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flagshipphones`
--
CREATE DATABASE IF NOT EXISTS `flagshipphones` DEFAULT CHARACTER SET utf32 COLLATE utf32_slovenian_ci;
USE `flagshipphones`;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand` varchar(100) COLLATE utf32_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand`) VALUES
(1, 'Samsung'),
(2, 'Apple'),
(3, 'Microsoft'),
(4, 'Sony'),
(5, 'Nokia'),
(6, 'LG'),
(7, 'HTC'),
(8, 'Motorola'),
(9, 'Huawei'),
(10, 'Lenovo'),
(11, 'Xiaomi'),
(12, 'Acer'),
(13, 'Asus'),
(14, 'Oppo'),
(15, 'Oneplus'),
(16, 'Meizu'),
(17, 'Blackberry'),
(18, 'Alcatel'),
(19, 'ZTE'),
(20, 'Toshiba');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `naslov` varchar(200) COLLATE utf32_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf32_slovenian_ci NOT NULL,
  `slika` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `naslov`, `tekst`, `slika`) VALUES
(1, 'Apple may freshen up its iPhone 7 lineup with a shiny new ‘Jet White’ color', 'Appple initially announced its new and improved iPhone 7 will be available in five color options: Silver, Gold, Rose Gold, Matte Black and Jet Black. But it seems the Cupertino giant isn’t quite done introducing additional colors to its lineup.\nThe Big A is reportedly planning to refresh its iPhone 7 lineup with a new ‘Jet White’ color option, Japanese news outlet Mac Otakara reports.\nThe report makes no mention of when Apple might add the sixth color to its catalogue, but it speculates it will be available for both models – the standard iPhone 7 as well as the boosted 7 Plus.\nWhile Mac Otakara has accurately leaked information about upcoming Apple products in the past, the Japanese publication warns its source “may not be reliable” this time around – so don’t get too excited just yet.\nApple enthusiasts are well-known for sketching recreational mockups of some of the company’s most popular products. It wouldn’t be entirely out of the ordinary if it turns out the Jet White iPhone 7 rumor is merely another fan-made concept – much like this mockup of the AirPods in Jet Black.\n', 0x75706c6f6164732f736c696b6131302e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE `passwords` (
  `id` int(11) NOT NULL,
  `password` varchar(200) COLLATE utf32_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`id`, `password`) VALUES
(1, 'ee747f39419c43aa40cd500a5df5dca9'),
(2, '6776c469b79ed703b0f6620e21b7293a'),
(3, 'bd7f58072ad6db39eec637574a80d8d6'),
(4, 'd41d8cd98f00b204e9800998ecf8427e'),
(5, '3651849c361c9128de04d70888d20ae8'),
(6, '104cf36a87a377abedd9561cfb4dfa81'),
(7, '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` int(11) NOT NULL,
  `idbrand` int(11) NOT NULL,
  `naslov` varchar(200) COLLATE utf32_slovenian_ci NOT NULL,
  `slika` varchar(100) COLLATE utf32_slovenian_ci NOT NULL,
  `releaseddate` tinytext COLLATE utf32_slovenian_ci NOT NULL,
  `system` tinytext COLLATE utf32_slovenian_ci NOT NULL,
  `memory` tinytext COLLATE utf32_slovenian_ci NOT NULL,
  `cameraveliki` tinytext COLLATE utf32_slovenian_ci NOT NULL,
  `cameramali` tinytext COLLATE utf32_slovenian_ci NOT NULL,
  `displayveliki` tinytext COLLATE utf32_slovenian_ci NOT NULL,
  `displaymali` tinytext COLLATE utf32_slovenian_ci NOT NULL,
  `ramveliki` tinytext COLLATE utf32_slovenian_ci NOT NULL,
  `rammali` tinytext COLLATE utf32_slovenian_ci NOT NULL,
  `batteryveliki` tinytext COLLATE utf32_slovenian_ci NOT NULL,
  `batterymali` tinytext COLLATE utf32_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`id`, `idbrand`, `naslov`, `slika`, `releaseddate`, `system`, `memory`, `cameraveliki`, `cameramali`, `displayveliki`, `displaymali`, `ramveliki`, `rammali`, `batteryveliki`, `batterymali`) VALUES
(6, 1, 'Samsung Galaxy S7 Edge', 'uploads/slika3.jpg', 'Released 2016, March', 'Android OS, v6.0', '32/65GB storage, microSD card slot', '12MP', '2160p', '5.5', '1440x2560 pixels', '4GB RAM', 'Snapdragon 820', '3600mAh', 'Li-Ion'),
(8, 3, 'Microsoft Lumia 650', 'uploads/slika9.jpg', 'Released 2016, February', 'Microsoft Windows 10', '16GB storage, microSD card slot', '8MP', '720p', '5"', '720x1280 pixels', '1GB RAM', 'Snapdragon 212', '2000mAh', 'Li-Ion'),
(9, 2, 'Apple iPhone 7', 'uploads/slika10.png', 'Released 2016, September', 'iOS 10.01, up to iOS 10.2', '32/128/256GB storage, no card slot', '12MP', '2160p', '4.7"', '750x1334 pixels', '2GB RAM', 'Apple A10 Fusion', '1960mAh', 'Li-Ion'),
(10, 3, 'Microsoft Lumia 640 XL', 'uploads/slika11.jpg', 'Released 2015, April', 'Microsoft Windows Phone 8.1', '8GB storage, microSD card slot', '13MP', '1080p', '5.7"', '720x1280 pixels', '1GB RAM', 'Snapdragon 400', '3000mAh', 'Li-Ion'),
(11, 2, 'Apple iPhone 6', 'uploads/slika8.jpg', 'Released 2014, September', 'iOS 8, up to iOS 10.2', '16/64/128GB storage, no card slot', '8MP', '1080p', '4.7"', '750x1334 pixels', '1GB RAM', 'Apple A8', '1810mAh', 'Li-Po');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `naslov` varchar(200) COLLATE utf32_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf32_slovenian_ci NOT NULL,
  `slika` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `naslov`, `tekst`, `slika`) VALUES
(1, 'Samsung Galaxy S7 edge review', 'SAMSUNG GALAXY S7 EDGE – SCREEN\r\n5.5-inch quad-HD panel, dual curved edges\r\n\r\nIf the design of the S7 Edge is stunning, then the same word can be used to describe the display. Not a whole lot has changed from the outgoing flagships, but this still holds up as the best screen on a smartphone for a number of reasons.\r\n\r\nFirst up is the sheer amount of detail here. Samsung didn’t try and go all-out with a 4K display, but really when quad-HD (that’s 2560 x 1440) looks this good I don’t think there’s much of a need for more pixels. Maybe it would help make VR even better with the Gear VR headset, but that’ll probably come next year.\r\n\r\n\r\nRead more at http://www.trustedreviews.com/samsung-galaxy-s7-edge-review#O8wdFKgCmSkZhUlo.99', 0x75706c6f6164732f736c696b61312e6a7067),
(2, 'Apple iPhone 7 review', 'The iPhone 7 and 7 Plus are deeply unusual devices. They are full of aggressive breaks from convention while wrapped in cases that look almost exactly like their two direct predecessors. Even that continuity of design is a break from convention; after almost a decade of Apple’s steady two-year iPhone update pattern, merely retaining the same design for a third straight year plays against expectations.\r\n\r\nInside that case, everything else about the iPhone 7 is a decisive statement about the future. The dual cameras on the iPhone 7 Plus promise to usher in a new era in mobile photography. The iconic iPhone home button is no longer a physical button, but instead a sophisticated ballet of pressure sensors and haptic vibration motors that simulate the feel of a button. The new A10 Fusion processor blends two high-power cores that rival laptop performance with two low-power cores that combine with a much larger battery to extend run time by up to two hours.\r\n\r\nAnd, yes, Apple has removed the headphone jack.<iframe width="560" height="315" src="https://www.youtube.com/embed/DmQgcHjJuKo" frameborder="0" allowfullscreen></iframe>', 0x75706c6f6164732f736c696b61352e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf32_slovenian_ci NOT NULL,
  `password` varchar(200) COLLATE utf32_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `username`, `password`) VALUES
(1, 2, 'smajlovice', 'Caocao33'),
(2, 2, 'probniacc', '0c1d747628544c3259a4b53d5bbff4c6'),
(3, 2, 'ovojeproba', '83c78727e7ce42d9397191ce2ec22062'),
(4, 2, 'tolunay', ''),
(5, 2, 'eminaproba', 'Ovojeproba11'),
(6, 2, 'probaproba', 'Malaproba00'),
(7, 1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE `usertypes` (
  `id` int(11) NOT NULL,
  `type` varchar(100) COLLATE utf32_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci;

--
-- Dumping data for table `usertypes`
--

INSERT INTO `usertypes` (`id`, `type`) VALUES
(1, 'admin'),
(2, 'ordinaryuser');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idbrand` (`idbrand`) USING BTREE;

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `passwords`
--
ALTER TABLE `passwords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usertypes`
--
ALTER TABLE `usertypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `passwords`
--
ALTER TABLE `passwords`
  ADD CONSTRAINT `passwords_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `phones`
--
ALTER TABLE `phones`
  ADD CONSTRAINT `phones_ibfk_1` FOREIGN KEY (`idbrand`) REFERENCES `brands` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`type`) REFERENCES `usertypes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
