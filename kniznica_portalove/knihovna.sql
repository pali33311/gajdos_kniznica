-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 04:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knihovna`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `about` text NOT NULL,
  `views` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `about`, `views`, `rating`, `image`) VALUES
(1, 'Nam vitae odio', '<p class=\"tm-margin-b-p\">Suspendisse suscipit tortor eu nunc fermentum pellentesque. Donec vaius diam ut velit porttitor accumsan. Cras ac porttitor urna, in vehicula diam. Ut ultricies leo dapibus, facilisis justo vel, dignissim tortor.</p>\r\n                        <p class=\"tm-margin-b-p\">Ut iaculis vel libero a auctor. Integer arcu orci, vaius id velit sed, lacinia venenatis felis. Integer in facilisis tortor. Vivamus facilisis mattis finibus. Vestibulum in aliquam nisl. Nunc pretium elementum posuere.</p>\r\n                        <p class=\"tm-margin-b-p\">Nunc vulputate placerat pulvinar. Integer ornare, enim et vestibulum mattis, dolor lacus congue sapien, eget tempor sapien est ut mauris.</p>', 10890, 4, 'img/image-01.jpg'),
(2, 'Integer ornare', '<p class=\"tm-margin-b-p\">Suspendisse suscipit tortor eu nunc fermentum pellentesque. Donec vaius diam ut velit porttitor accumsan. Cras ac porttitor urna, in vehicula diam. Ut ultricies leo dapibus, facilisis justo vel, dignissim tortor.</p>\r\n                        <p class=\"tm-margin-b-p\">Ut iaculis vel libero a auctor. Integer arcu orci, vaius id velit sed, lacinia venenatis felis. Integer in facilisis tortor. Vivamus facilisis mattis finibus. Vestibulum in aliquam nisl. Nunc pretium elementum posuere.</p>\r\n                        <p class=\"tm-margin-b-p\">Nunc vulputate placerat pulvinar. Integer ornare, enim et vestibulum mattis, dolor lacus congue sapien, eget tempor sapien est ut mauris.</p>', 10890, 4, 'img/image-02.jpg'),
(3, 'Cras non augue', '<p class=\"tm-margin-b-p\">Suspendisse suscipit tortor eu nunc fermentum pellentesque. Donec vaius diam ut velit porttitor accumsan. Cras ac porttitor urna, in vehicula diam. Ut ultricies leo dapibus, facilisis justo vel, dignissim tortor.</p>\r\n                        <p class=\"tm-margin-b-p\">Ut iaculis vel libero a auctor. Integer arcu orci, vaius id velit sed, lacinia venenatis felis. Integer in facilisis tortor. Vivamus facilisis mattis finibus. Vestibulum in aliquam nisl. Nunc pretium elementum posuere.</p>\r\n                        <p class=\"tm-margin-b-p\">Nunc vulputate placerat pulvinar. Integer ornare, enim et vestibulum mattis, dolor lacus congue sapien, eget tempor sapien est ut mauris.</p>', 10890, 4, 'img/image-03.jpg'),
(4, 'Dolor lacus', '<p class=\"tm-margin-b-p\">Suspendisse suscipit tortor eu nunc fermentum pellentesque. Donec vaius diam ut velit porttitor accumsan. Cras ac porttitor urna, in vehicula diam. Ut ultricies leo dapibus, facilisis justo vel, dignissim tortor.</p>\r\n                        <p class=\"tm-margin-b-p\">Ut iaculis vel libero a auctor. Integer arcu orci, vaius id velit sed, lacinia venenatis felis. Integer in facilisis tortor. Vivamus facilisis mattis finibus. Vestibulum in aliquam nisl. Nunc pretium elementum posuere.</p>\r\n                        <p class=\"tm-margin-b-p\">Nunc vulputate placerat pulvinar. Integer ornare, enim et vestibulum mattis, dolor lacus congue sapien, eget tempor sapien est ut mauris.</p>', 10890, 4, 'img/image-04.jpg'),
(5, 'Quisque velit', '<p class=\"tm-margin-b-p\">Suspendisse suscipit tortor eu nunc fermentum pellentesque. Donec vaius diam ut velit porttitor accumsan. Cras ac porttitor urna, in vehicula diam. Ut ultricies leo dapibus, facilisis justo vel, dignissim tortor.</p>\r\n                        <p class=\"tm-margin-b-p\">Ut iaculis vel libero a auctor. Integer arcu orci, vaius id velit sed, lacinia venenatis felis. Integer in facilisis tortor. Vivamus facilisis mattis finibus. Vestibulum in aliquam nisl. Nunc pretium elementum posuere.</p>\r\n                        <p class=\"tm-margin-b-p\">Nunc vulputate placerat pulvinar. Integer ornare, enim et vestibulum mattis, dolor lacus congue sapien, eget tempor sapien est ut mauris.</p>', 10890, 4, 'img/image-05.jpg'),
(6, 'Suspendisse suscipit', '<p class=\"tm-margin-b-p\">Suspendisse suscipit tortor eu nunc fermentum pellentesque. Donec vaius diam ut velit porttitor accumsan. Cras ac porttitor urna, in vehicula diam. Ut ultricies leo dapibus, facilisis justo vel, dignissim tortor.</p>\r\n                        <p class=\"tm-margin-b-p\">Ut iaculis vel libero a auctor. Integer arcu orci, vaius id velit sed, lacinia venenatis felis. Integer in facilisis tortor. Vivamus facilisis mattis finibus. Vestibulum in aliquam nisl. Nunc pretium elementum posuere.</p>\r\n                        <p class=\"tm-margin-b-p\">Nunc vulputate placerat pulvinar. Integer ornare, enim et vestibulum mattis, dolor lacus congue sapien, eget tempor sapien est ut mauris.</p>', 10890, 4, 'img/image-06.jpg'),
(7, 'Facilisis justo', '<p class=\"tm-margin-b-p\">Suspendisse suscipit tortor eu nunc fermentum pellentesque. Donec vaius diam ut velit porttitor accumsan. Cras ac porttitor urna, in vehicula diam. Ut ultricies leo dapibus, facilisis justo vel, dignissim tortor.</p>\r\n                        <p class=\"tm-margin-b-p\">Ut iaculis vel libero a auctor. Integer arcu orci, vaius id velit sed, lacinia venenatis felis. Integer in facilisis tortor. Vivamus facilisis mattis finibus. Vestibulum in aliquam nisl. Nunc pretium elementum posuere.</p>\r\n                        <p class=\"tm-margin-b-p\">Nunc vulputate placerat pulvinar. Integer ornare, enim et vestibulum mattis, dolor lacus congue sapien, eget tempor sapien est ut mauris.</p>', 10890, 4, 'img/image-07.jpg'),
(8, 'Vivamus facilisis', '<p class=\"tm-margin-b-p\">Suspendisse suscipit tortor eu nunc fermentum pellentesque. Donec vaius diam ut velit porttitor accumsan. Cras ac porttitor urna, in vehicula diam. Ut ultricies leo dapibus, facilisis justo vel, dignissim tortor.</p>\r\n                        <p class=\"tm-margin-b-p\">Ut iaculis vel libero a auctor. Integer arcu orci, vaius id velit sed, lacinia venenatis felis. Integer in facilisis tortor. Vivamus facilisis mattis finibus. Vestibulum in aliquam nisl. Nunc pretium elementum posuere.</p>\r\n                        <p class=\"tm-margin-b-p\">Nunc vulputate placerat pulvinar. Integer ornare, enim et vestibulum mattis, dolor lacus congue sapien, eget tempor sapien est ut mauris.</p>', 10890, 4, 'img/image-08.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_has_category`
--

CREATE TABLE `book_has_category` (
  `book_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_has_category`
--

INSERT INTO `book_has_category` (`book_id`, `category_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'New Story'),
(2, 'Epic'),
(3, 'Popular');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `name`, `email`, `message`, `date`) VALUES
(6, 'Juro', 'juro@gmail.com', 'Toto je sprava!!!!!', '2022-12-01 16:48:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_has_category`
--
ALTER TABLE `book_has_category`
  ADD PRIMARY KEY (`book_id`,`category_id`),
  ADD KEY `fk_book_has_category_category1_idx` (`category_id`),
  ADD KEY `fk_book_has_category_book_idx` (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
