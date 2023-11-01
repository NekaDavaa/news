-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Време на генериране:  1 ное 2023 в 16:42
-- Версия на сървъра: 10.3.39-MariaDB-log-cll-lve
-- Версия на PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данни: `miagodco_customnews`
--

-- --------------------------------------------------------

--
-- Структура на таблица `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `category`
--

INSERT INTO `category` (`id`, `cat_title`) VALUES
(7, 'Laravel'),
(6, 'WordPress'),
(8, 'PHP'),
(11, 'International News');

-- --------------------------------------------------------

--
-- Структура на таблица `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'Anonymous',
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unapproved'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `website`, `body`, `status`) VALUES
(1, 10, 'asd', 'asd@abv.bg', '', 'asd', 'unapproved'),
(2, 10, 'Anonymous', 'asd@abv.bg', '', 'asdsad', 'unapproved'),
(3, 11, 'asd', 'asd@abv.bg', '', 'asdasdasd', 'unapproved');

-- --------------------------------------------------------

--
-- Структура на таблица `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `likes`
--

INSERT INTO `likes` (`id`, `user`, `post_id`, `type`) VALUES
(1, 'Antonio', 12, 'like'),
(2, 'Antonio', 6, 'like'),
(3, 'Antonio', 5, 'un_like'),
(4, 'Antonio', 9, 'like'),
(5, 'Antonio', 11, 'un_like');

-- --------------------------------------------------------

--
-- Структура на таблица `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `post_category` varchar(255) NOT NULL,
  `post_cat_id` int(11) NOT NULL,
  `post_image` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `tags` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'draft',
  `type` varchar(100) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `num_comments` int(11) NOT NULL,
  `num_views` int(11) NOT NULL,
  `timestamped` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `added_by`, `post_category`, `post_cat_id`, `post_image`, `date`, `tags`, `status`, `type`, `num_likes`, `num_comments`, `num_views`, `timestamped`) VALUES
(1, 'SAMPLE POST', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Justo eget magna fermentum iaculis eu non. Sit amet justo donec enim diam vulputate ut pharetra sit. Tempus imperdiet nulla malesuada pellentesque elit eget. Donec et odio pellentesque diam volutpat commodo sed egestas. Rhoncus dolor purus non enim praesent elementum facilisis leo. Nisl suscipit adipiscing bibendum est ultricies integer quis. Eget mauris pharetra et ultrices neque ornare aenean euismod elementum. Egestas erat imperdiet sed euismod nisi porta. Nisi lacus sed viverra tellus. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. Nunc mattis enim ut tellus elementum sagittis vitae. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Nunc lobortis mattis aliquam faucibus purus in. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Vestibulum lectus mauris ultrices eros in cursus. Sed tempus urna et pharetra pharetra massa massa. Dictum at tempor commodo ullamcorper a.', 'Antonio Pavlov', 'Laravel', 7, 'news_images/653fb77905c7a3.64833515.jpg', '2023-10-30 16:02:33', 'Monbe, ND', 'Published', 'Breaking News', 0, 0, 10, '2023-10-31 16:43:14'),
(2, 'TEST', 'Test', 'Antonio Pavlov', 'Laravel', 7, 'news_images/653ff04e220717.82996033.png', '2023-10-30 20:05:02', 'test', 'Published', 'Breaking News', 0, 0, 2, '2023-11-01 15:48:05'),
(3, 'ASDASD', 'sadasdasd', 'Antonio Pavlov', 'Laravel', 7, 'news_images/6540b0b110dd14.44588578.jpg', '2023-10-31 09:45:53', 'asdasd', 'Published', 'Breaking News', 0, 0, 1, '2023-10-31 16:01:10'),
(4, 'DASDASD', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus et malesuada fames ac turpis. Ut enim blandit volutpat maecenas volutpat blandit. Dictum sit amet justo donec enim diam vulputate ut pharetra. Lacus vel facilisis volutpat est velit egestas. Enim sit amet venenatis urna cursus eget nunc scelerisque. Mattis nunc sed blandit libero volutpat sed cras. Vulputate odio ut enim blandit volutpat maecenas volutpat. Orci sagittis eu volutpat odio facilisis mauris sit amet massa. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Viverra orci sagittis eu volutpat odio facilisis mauris sit amet. Non consectetur a erat nam at lectus urna duis convallis. Pretium fusce id velit ut tortor. Molestie ac feugiat sed lectus vestibulum mattis.', 'Antonio Pavlov', 'Laravel', 7, 'news_images/6540b7fa8593a6.57951895.jpg', '2023-10-31 10:16:58', 'asd', 'Published', 'Breaking News', 0, 0, 3, '2023-11-01 15:20:05'),
(5, 'ASDASD', 'asdasdasd', 'Antonio Pavlov', 'Laravel', 7, 'news_images/6540c159d423a4.94516442.jpg', '2023-10-31 10:56:57', 'adasd', 'Published', 'Casual News', 0, 0, 20, '2023-11-01 15:29:04'),
(6, 'ASDA', 'sdasdasdas', 'Antonio Pavlov', 'PHP', 8, 'news_images/6540cfa70b4593.20452517.jpg', '2023-10-31 11:57:59', 'asdasdasd', 'Published', 'Breaking News', 1, 0, 6, '2023-11-01 15:23:31'),
(7, 'DSADASD', 'asdasdasd', 'Antonio Pavlov', 'WordPress', 6, 'news_images/6540cfa70b4593.20452517.jpg', '2023-10-31 11:58:14', 'ddd', 'Published', 'Breaking News', 0, 0, 25, '2023-10-31 17:28:53'),
(8, 'DASDAS', 'dasdsad', 'Antonio Pavlov', 'Laravel', 7, 'news_images/6540f3d22c4af3.75046499.png', '2023-10-31 14:32:18', 'asdasdasd', 'Published', 'Breaking News', 0, 0, 0, '2023-10-31 14:32:16'),
(9, 'DSAD', 'asdasd', 'Antonio Pavlov', 'Laravel', 7, 'news_images/6540f46265b605.59433855.jpg', '2023-10-31 14:34:42', 'dsada', 'Published', 'Breaking News', 1, 0, 23, '2023-11-01 14:47:38'),
(10, 'ASDA', 'sdasdas', 'Antonio Pavlov', 'International News', 11, 'news_images/65410ddd0f4095.52277385.png', '2023-10-31 16:23:25', '', 'Published', 'Breaking News', 0, 0, 12, '2023-11-01 15:05:42'),
(11, 'ASDAS', 'dasda', 'Antonio Pavlov', 'International News', 11, 'news_images/65415d8138b072.05440209.jpg', '2023-10-31 22:03:13', 'asdasda', 'Published', 'Breaking News', 0, 0, 37, '2023-11-01 15:18:31'),
(12, 'ASD', 'asd', 'Antonio Pavlov', 'PHP', 8, 'news_images/654227f3ea60a8.30292550.jpg', '2023-11-01 12:26:59', 'asdasd', 'Published', 'Breaking News', 1, 0, 27, '2023-11-01 15:25:50'),
(13, 'ASDAS', 'dasdas', 'Antonio Pavlov', 'International News', 11, 'news_images/65426392ac3c69.75138380.jpg', '2023-11-01 16:41:22', 'sadasdas', 'Published', 'Breaking News', 0, 0, 0, '2023-11-01 16:41:20');

-- --------------------------------------------------------

--
-- Структура на таблица `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `password`) VALUES
(1, 'Antonio', 'antonio@abv.bg', '$2y$10$dFKooxYzjtQZJ0phMBtfVOHmWNlNMLNRV2O9dt53N4VYfdf/bsQ.K');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `profile_pic` text NOT NULL,
  `role` varchar(255) NOT NULL,
  `num_posts` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `profile_pic`, `role`, `num_posts`) VALUES
(9, 'dsdasd dsaasd', 'dsdasd', 'dsaasd', 'asd@abv.bg', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'assets/images/profile_pics/default/profile_pic_1.jpg', 'Admin', 0),
(2, 'Antonio1 Pavlov1', 'Antonio1', 'Pavlov1', 'email', 'f20da799054abae41ad850f3870b560b', 'assets/images/profile_pics/default/profile_pic_1', 'Admin', 0),
(3, 'Antonio2 Pavlov2', 'Antonio2', 'Pavlov2', 'root@abv.bg', 'dc283ef1f8709b71442bd2d311cfef4f', 'assets/images/profile_pics/default/profile_pic_2', 'Admin', 0),
(7, 'GGGG GGGGG', 'GGGG', 'GGGGG', 'ggg@abv.bg', 'fa2a5da521b91fadc05d1e3cf7923ff1', 'assets/images/profile_pics/default/profile_pic_1.jpg', 'Admin', 0),
(5, 'Boni Boni', 'Boni', 'Boni', 'boni@abv.bg', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'assets/images/profile_pics/default/profile_pic_3', 'Admin', 0),
(6, 'Antonio Pavlov', 'Antonio', 'Pavlov', 'kkozmo@abv.bg', 'bfd59291e825b5f2bbf1eb76569f8fe7', '../assets/images/profile_pics/default/asdIMG_20190804_104835.jpg', 'Admin', 0),
(8, 'Andre Andre', 'Andre', 'Andre', 'andre@abv.bg', 'dd573120e473c889140e34e817895495', 'assets/images/profile_pics/default/profile_pic_2.jpg', 'Admin', 0),
(10, 'asd ', 'asd', '', 'kkozmo@abv.bg', 'bfd59291e825b5f2bbf1eb76569f8fe7', '../assets/images/profile_pics/default/head_1.png', 'Admin', 0),
(11, ' asd', '', 'asd', 'kkozmo@abv.bg', 'bfd59291e825b5f2bbf1eb76569f8fe7', '../assets/images/profile_pics/default/head_1.png', 'Admin', 0),
(12, 'asda das', 'asda', 'das', 'kkozmo@abv.bg', 'bfd59291e825b5f2bbf1eb76569f8fe7', '../assets/images/profile_pics/default/head_1.png', 'Admin', 0),
(13, 'Antonio Pavlov', 'Antonio', 'Pavlov', 'kkozmo@abv.bg', 'bfd59291e825b5f2bbf1eb76569f8fe7', '../assets/images/profile_pics/default/head_1.png', 'Admin', 0),
(14, 'ASD ASD', 'ASD', 'ASD', 'kkozmo@abv.bg', 'bfd59291e825b5f2bbf1eb76569f8fe7', '../assets/images/profile_pics/default/head_1.png', 'Admin', 0),
(15, 'asdAntonio asdPavlov', 'asdAntonio', 'asdPavlov', 'abv@abv.bg', 'bfd59291e825b5f2bbf1eb76569f8fe7', '../assets/images/profile_pics/default/head_1.png', 'Admin', 0),
(16, 'Profile Profile', 'Profile', 'Profile', 'profile@abv.bg', 'bfd59291e825b5f2bbf1eb76569f8fe7', '../assets/images/profile_pics/default/profile_pic_1.jpg', 'Admin', 0);

--
-- Indexes for dumped tables
--

--
-- Индекси за таблица `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
