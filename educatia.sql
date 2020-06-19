-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 02:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educatia`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `img_src` varchar(1000) NOT NULL,
  `tagline` varchar(200) NOT NULL,
  `head` varchar(200) NOT NULL,
  `link_text` varchar(20) NOT NULL,
  `link_src` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `img_src`, `tagline`, `head`, `link_text`, `link_src`) VALUES
(1, 'ad1.jpg', 'High quality courses', 'Read & Learn in an easy way', 'Learn more', ''),
(2, 'ad2.png', 'High quality courses', 'Learning to Earning', 'Learn more', ''),
(3, 'ad3.jpg', 'High quality courses', 'Learn from great teachers', 'Learn more', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(60) NOT NULL,
  `cat_img_src` varchar(500) NOT NULL,
  `cat_color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_img_src`, `cat_color`) VALUES
(1, 'Photography', 'kipso-icon-camera', '#2da397'),
(2, 'Music', 'kipso-icon-music-player', '#f16101'),
(3, 'Marketing', 'kipso-icon-targeting', '#2da397'),
(4, 'Development', 'kipso-icon-web-programming', '#1888c9');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `img_src` varchar(100) NOT NULL,
  `old_price` varchar(30) NOT NULL,
  `new_price` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `lang` varchar(30) NOT NULL,
  `overview` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cat_id`, `name`, `rating`, `img_src`, `old_price`, `new_price`, `level`, `lang`, `overview`) VALUES
(1, 1, 'Learn photography skills online', '4', 'photo-course.jpg', 'Rs. 1599/-', 'FREE', 'Beginner', 'English', 'Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\n\r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of lorem ipsum amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.'),
(2, 4, 'Learn development skills online', '4.8', 'dev-course.jpg', 'Rs. 1599/-', 'FREE', 'Beginner', 'English', 'Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\n\r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of lorem ipsum amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.'),
(3, 2, 'Learn music online', '3.1', 'music-course.jpg', 'Rs. 1599/-', 'FREE', 'Beginner', 'English', 'Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\n\r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of lorem ipsum amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(2048) NOT NULL,
  `message` varchar(2048) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `img_src` varchar(1024) NOT NULL,
  `heading` varchar(1024) NOT NULL,
  `descr` longtext NOT NULL,
  `date` date NOT NULL,
  `author` varchar(200) NOT NULL DEFAULT 'Admin',
  `slug` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `img_src`, `heading`, `descr`, `date`, `author`, `slug`) VALUES
(1, 'news1.jpg', 'Event Heading', 'Something about the event. A small description for the image like a seminar held at some place.', '2020-06-01', '', 'Event-heading'),
(2, 'news2.jpg', 'Another Event ', ' Something about the event. A small description for the image like a seminar held at some place.Something about the event. A small description for the image like a seminar held at some place.', '2020-03-17', '', 'Another-event '),
(3, 'news3.jpg', 'Yet Another Event', 'Something about the event. A small description for the image like a seminar held at some place.', '2020-06-18', '', 'Yet-another-event');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `img_src` varchar(1024) NOT NULL,
  `content` varchar(2048) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `img_src`, `content`, `name`) VALUES
(1, 'feedback-1.jpg', 'tae nulla eaque quis dolores incidunt? Ea in molestiae perferendis necessitatibus doloremque nam libero beatae. Aut debitis vitae eius?', 'kaniel'),
(2, 'feedback-3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam consequatur quaerat beatae nulla eaque quis dolores incidunt? Ea in molestiae perferendis necessitatibus doloremque nam libero beatae. Aut debitis vitae eius?', 'outis');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img_src` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img_src`) VALUES
(1, 'p1.jpg'),
(2, 'p2.png'),
(3, 'p3.jpg'),
(4, 'p4.png'),
(5, 'p5.jpg'),
(6, 'p6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `know_us`
--

CREATE TABLE `know_us` (
  `id` int(11) NOT NULL,
  `link` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `know_us`
--

INSERT INTO `know_us` (`id`, `link`) VALUES
(1, 'https://www.youtube.com/embed/vdggw54pNI4');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `img_src` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `img_src`, `name`) VALUES
(1, 'ram-raj-logo.png', 'Ramraj services'),
(2, 'cluebix-logo.png', 'Cluebix softwares'),
(3, 'tas-logo', 'TotalAgri Solutions');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(500) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'active',
  `role` varchar(15) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `pwd`, `fname`, `lname`, `email`, `status`, `role`) VALUES
(1, 'adminrrs', '$2y$10$NG9k47y4y8qJWOCKYyd30O45/c2GWe3p2SnMYYVr7W5QWqUwwbUaW', 'Demo', 'User', 'info.ramrajservices@gmail.com', '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `webprofile`
--

CREATE TABLE `webprofile` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `whatsapp_no` varchar(50) NOT NULL,
  `address_line1` varchar(50) NOT NULL,
  `address_line2` varchar(50) NOT NULL,
  `fblink` varchar(50) NOT NULL,
  `instalink` varchar(50) NOT NULL,
  `twitterlink` varchar(50) NOT NULL,
  `youtubelink` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webprofile`
--

INSERT INTO `webprofile` (`id`, `email`, `phone1`, `phone2`, `whatsapp_no`, `address_line1`, `address_line2`, `fblink`, `instalink`, `twitterlink`, `youtubelink`) VALUES
(1, 'ramrajservices@gmail.com', '9630022515\r\n\r\n', '', '9630022515\r\n\r\n', '', '', 'https://facebook.com', 'https://instagram.com', 'https://twitter.com', 'https://youtube.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `know_us`
--
ALTER TABLE `know_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `webprofile`
--
ALTER TABLE `webprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `know_us`
--
ALTER TABLE `know_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `webprofile`
--
ALTER TABLE `webprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
