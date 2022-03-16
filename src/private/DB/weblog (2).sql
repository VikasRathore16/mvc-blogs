-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Mar 16, 2022 at 05:30 AM
-- Server version: 8.0.19
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `blog_id` int NOT NULL,
  `post_user_id` int NOT NULL,
  `title` varchar(20) NOT NULL,
  `article` text NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Pending',
  `trending` varchar(5) NOT NULL DEFAULT 'No',
  `description` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`blog_id`, `post_user_id`, `title`, `article`, `status`, `trending`, `description`, `date`) VALUES
(5000, 102, '    War    ', '    I get it now.\r\nNothing made sense until today, when Germany announced that it plans to keep buying oil and natural gas from Russia, even as Vladimir Putin continues committing every war crime on the books. China also recently came out in support of Russia, refusing to condemn the invasion of Ukraine and calling them a chief “strategic partner.”\r\nNow, everything makes sense.\r\nThe German Chancellor’s remarks remind me of 2008, back when Americans were asked to bail out the very banks and predatory lenders that crashed the economy. Those CEOs used our money to reward themselves with huge bonuses and buy back stocks, even while they hiked up prices and laid off workers. None of them saw a single day of justice. They went right back to doing all the same things that are about to collapse the economy again. We asked why. We were told these banks were simply “too big to fail.” In other words, we relied on our enemy.\r\nIt’s a bad situation to be in.\r\nAnd yet, here we are.    ', 'Published', 'Yes', '    Vladimir Putin Has Already Won', '2022-03-10 12:42:05'),
(5001, 109, 'Phalcon', 'To generate the link for the <a> tag, we use the Phalcon\\Tag component. This is a utility class that offers an easy way to build HTML tags with framework conventions in mind. This class is also a service registered in the Dependency Injector so we can use $this->tag to access its functionality.', 'Pending', 'Yes', 'Designing a Sign-up Form', '2022-03-15 09:08:32'),
(5004, 138, '        hre        ', '        Warning: count(): Parameter must be an array or an object that implements Countable in /var/www/html/vendor/php-activerecord/php-    ', 'Published', 'Yes', 'hello', '2022-03-16 04:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Restricted',
  `role` varchar(40) NOT NULL DEFAULT 'Editor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `status`, `role`) VALUES
(100, 'admin', 'admin@gmail.com', 'admin', 'Approved', 'Admin'),
(105, 'ads', 'bum@gmail.com', '123', 'Approved', 'Editor'),
(106, 'ads', 'bum@gmail.com', '123', 'Approved', 'Editor'),
(138, 'vikas', 'vikas@cedcoss.com', '123', 'Approved', 'Editor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `blog_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5005;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
