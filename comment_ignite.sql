-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 05:38 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comment_ignite`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `slug_ref` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `commented_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `slug_ref`, `user_comment`, `commented_on`) VALUES
(39, 'tempor-incididunt', 'tempor incididunt', '2021-11-16 13:50:44'),
(40, 'sunt-invelit-esse-cillum', 'sunt invelit esse cillum', '2021-11-16 14:05:52'),
(41, 'do-eiusmod-tempor', 'do eiusmod tempor', '2021-11-16 14:06:25'),
(42, 'tempor-incididunt', 'tempor incididunt 2', '2021-11-16 14:06:41'),
(43, 'Now-its-working', 'lets see if it workd', '2021-11-16 14:26:27'),
(44, 'Now-its-working', 'works i mean', '2021-11-16 14:26:37'),
(45, 'do-eiusmod-tempor', '55555', '2021-11-16 14:42:51'),
(46, 'sunt-invelit-esse-cillum', 'yyy', '2021-11-17 09:23:50'),
(47, 'this-is-my-bla', 'are you sure', '2021-11-17 09:41:14'),
(48, 'this-is-my-bla', 'yyyyyyy', '2021-11-17 09:42:07'),
(49, 'You-should-try-it-out', 'great blog', '2022-01-13 05:31:42'),
(50, 'You-should-try-it-out', 'yes its great', '2022-01-13 05:31:53'),
(51, 'You-can-also-add-a-blog-to-the-list', 'Have you added yours', '2022-01-13 05:32:28'),
(52, 'You-can-also-add-a-blog-to-the-list', 'Then you should', '2022-01-13 05:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `slug`, `created_at`) VALUES
(7, 'You should try it out', 'Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"\r\n                ', 'You-should-try-it-out', '2022-01-13 05:29:38'),
(8, 'You can also add a blog to the list', 'quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus', 'You-can-also-add-a-blog-to-the-list', '2022-01-13 05:31:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
