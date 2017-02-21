-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 21 2017 г., 16:10
-- Версия сервера: 5.7.17-0ubuntu0.16.04.1
-- Версия PHP: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testwp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `like_id` int(11) DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `description`, `image`, `like_id`, `author_id`, `category_id`, `created_at`) VALUES
(1, 'fasd', '<p>fdasfads</p>\r\n', 'fas', 'img', 0, 1, 1, '2017-02-17 15:28:52'),
(2, 'thfd', '<p>sdfgs<s>sgdsfdg</s></p>\r\n', 'hdfdf', 'img', 0, 1, 1, '2017-02-17 17:17:54'),
(3, 'dasf', '<p>214</p>\r\n', '12', 'img', 0, 1, 1, '2017-02-17 17:51:32'),
(4, '341', '<p>2134</p>\r\n', '1234', 'img', 0, 1, 1, '2017-02-17 17:51:36'),
(5, '234', '<p>fdf</p>\r\n', '234', 'img', 0, 1, 1, '2017-02-17 17:51:39'),
(6, 'fasd', '<p>asf</p>\r\n', 'afs', 'img', 0, 1, 1, '2017-02-17 17:51:43'),
(7, 'asfd', '<p>asf</p>\r\n', 'asfd', 'img', 0, 1, 1, '2017-02-17 17:51:48'),
(8, 'adsf', '<p>asd</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'asdf', 'img', 0, 1, 1, '2017-02-17 17:51:53'),
(9, 'asdf', '<p>das</p>\r\n', 'fasdf', 'img', 0, 1, 1, '2017-02-17 17:51:57'),
(10, 'sda', '<p>sdf</p>\r\n', 'sad', 'img', 0, 1, 1, '2017-02-17 17:52:00'),
(11, 'asdf', '<p>ads</p>\r\n', 'asdf', 'img', 0, 1, 1, '2017-02-17 17:52:03'),
(12, '324r2', '<p>234</p>\r\n', '43143', 'img', 0, 1, 1, '2017-02-17 17:58:32'),
(13, '2134', '<p>2314</p>\r\n', '123', 'img', 0, 1, 1, '2017-02-17 17:58:37'),
(14, '1234', '<p>312</p>\r\n', '1234', 'img', 0, 1, 1, '2017-02-17 17:58:41'),
(15, 'Title', '<p>new jkj loer</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>fadsd&#39;</li>\r\n	<li>dfasdf</li>\r\n	<li>fasd</li>\r\n	<li><strong>fsdaf</strong></li>\r\n</ul>\r\n', 'dasd dsf sa asdf as df sdf as', 'img', 0, 1, 2, '2017-02-17 22:36:17'),
(16, 'sad', '<p>fdsa</p>\r\n', 'sadf', 'img', 0, 1, 1, '2017-02-17 23:03:19'),
(17, 'gfds', '<p>gfs</p>\r\n', 'fds', 'img', 0, 1, 1, '2017-02-17 23:26:50'),
(18, 'gfds', '<p>gfs</p>\r\n', 'fds', 'img', 0, 1, 1, '2017-02-17 23:28:29'),
(19, 'gfds', '<p>gfs</p>\r\n', 'fds', 'img', 0, 1, 1, '2017-02-17 23:29:33'),
(20, 'gfds', '<p>gfs</p>\r\n', 'fds', 'img', 0, 1, 1, '2017-02-17 23:30:04'),
(21, 'ndfhgdfh', '<p>ghffdhdfs a&nbsp;</p>\r\n\r\n<p>tgsdfg</p>\r\n\r\n<p>adsf</p>\r\n\r\n<p>sad</p>\r\n\r\n<p>f</p>\r\n\r\n<p>ads</p>\r\n\r\n<p>f</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>as</p>\r\n\r\n<p>df</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>asdfdsfkhsdajfhjosadjflkask;l</p>\r\n', 'hdhfg', 'img', 0, 1, 2, '2017-02-18 00:03:51'),
(22, 'ndfhgdfh', '<p>ghffdhdfs a&nbsp;</p>\r\n\r\n<p>tgsdfg</p>\r\n\r\n<p>adsf</p>\r\n\r\n<p>sad</p>\r\n\r\n<p>f</p>\r\n\r\n<p>ads</p>\r\n\r\n<p>f</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>as</p>\r\n\r\n<p>df</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>asdfdsfkhsdajfhjosadjflkask;l</p>\r\n', 'hdhfg', 'img', 0, 1, 2, '2017-02-18 00:04:52'),
(23, 'ndfhgdfh', '<p>ghffdhdfs a&nbsp;</p>\r\n\r\n<p>tgsdfg</p>\r\n\r\n<p>adsf</p>\r\n\r\n<p>sad</p>\r\n\r\n<p>f</p>\r\n\r\n<p>ads</p>\r\n\r\n<p>f</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>as</p>\r\n\r\n<p>df</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>asdfdsfkhsdajfhjosadjflkask;l</p>\r\n', 'hdhfg', 'img', 0, 1, 2, '2017-02-18 00:04:55'),
(24, 'ndfhgdfh', '<p>ghffdhdfs a&nbsp;</p>\r\n\r\n<p>tgsdfg</p>\r\n\r\n<p>adsf</p>\r\n\r\n<p>sad</p>\r\n\r\n<p>f</p>\r\n\r\n<p>ads</p>\r\n\r\n<p>f</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>as</p>\r\n\r\n<p>df</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>asdfdsfkhsdajfhjosadjflkask;l</p>\r\n', 'hdhfg', 'img', 0, 1, 2, '2017-02-18 00:04:57'),
(25, 'ghj', '<p>hlj</p>\r\n', 'ghk', 'img', 0, 1, 1, '2017-02-20 16:29:54'),
(26, 'ghj', '<p>hlj</p>\r\n', 'ghk', 'img', 0, 1, 1, '2017-02-20 16:30:38'),
(27, 'ghj', '<p>hlj</p>\r\n', 'ghk', 'img', 0, 1, 1, '2017-02-20 16:31:29'),
(28, 'ghj', '<p>hlj</p>\r\n', 'ghk', 'img', 0, 1, 1, '2017-02-20 16:32:05'),
(29, 'ghj', '<p>hlj</p>\r\n', 'ghk', 'img', 0, 1, 1, '2017-02-20 16:32:28'),
(30, 'sa', '<p>sdf</p>\r\n', 'sdx', '/images/1.jpg', 0, 1, 1, '2017-02-20 16:38:35'),
(31, 'sa', '<p>sdf</p>\r\n', 'sdx', '/images/1.jpg1487603319', 0, 1, 1, '2017-02-20 17:08:39'),
(32, 'sa', '<p>sdf</p>\r\n', 'sdx', '/images/1487603376-1.jpg', 0, 1, 1, '2017-02-20 17:09:36'),
(33, 'sa', '<p>sdf</p>\r\n', 'sdx', '/images/1487603628-1.jpg', 0, 1, 1, '2017-02-20 17:13:48'),
(34, 'dfsad', '<p>fdsa</p>\r\n', 'sdf', '/images/default.jpg', 0, 1, 1, '2017-02-20 17:14:51'),
(35, 'dfsad', '<p>fdsa</p>\r\n', 'sdf', '/images/default.jpg', 4, 1, 1, '2017-02-20 17:21:14'),
(36, 'dsfa', '<p>fasdfasdf</p>\r\n', 'dsaf', '/images/default.jpg', NULL, 1, 5, '2017-02-21 00:31:41');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Art'),
(2, 'Music'),
(3, 'Story'),
(4, 'New'),
(5, 'Adventure');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `text`, `user_id`, `article_id`, `status`, `created_at`) VALUES
(1, 'sdaf', 1, 35, 1, '2017-02-20 20:52:46'),
(2, 'fdsadfas', 1, 35, 1, '2017-02-21 00:08:29'),
(3, 'fcasdfacsf', 1, 35, 1, '2017-02-21 00:08:38'),
(4, 'fdsa', 1, 36, 1, '2017-02-21 14:59:06'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis consequat velit. Donec felis ipsum, malesuada sed nulla ac, euismod gravida metus. Fusce vehicula rutrum commodo. Nunc cursus nisl a lacinia sagittis. Mauris sit amet malesuada est. Sed lacinia accumsan mi at volutpat. Mauris iaculis purus nisi, eu porttitor justo varius hendrerit. In tristique rhoncus purus non ultricies. Nullam sit amet vestibulum nunc.', 1, 36, 1, '2017-02-21 16:05:56'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis consequat velit. Donec felis ipsum, malesuada sed nulla ac, euismod gravida metus. Fusce vehicula rutrum commodo. Nunc cursus nisl a lacinia sagittis. Mauris sit amet malesuada est. Sed lacinia accumsan mi at volutpat. Mauris iaculis purus nisi, eu porttitor justo varius hendrerit. In tristique rhoncus purus non ultricies. Nullam sit amet vestibulum nunc.', 1, 36, 1, '2017-02-21 16:06:00'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis consequat velit. Donec felis ipsum, malesuada sed nulla ac, euismod gravida metus. Fusce vehicula rutrum commodo. Nunc cursus nisl a lacinia sagittis. Mauris sit amet malesuada est. Sed lacinia accumsan mi at volutpat. Mauris iaculis purus nisi, eu porttitor justo varius hendrerit. In tristique rhoncus purus non ultricies. Nullam sit amet vestibulum nunc.', 1, 36, 1, '2017-02-21 16:06:03');

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `article_id`) VALUES
(7, 1, 35);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'test', 'test@test.test', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(2, 'dasf', 'test@test.test2', '5e6d599378cdad1055f52ed94ac90e24', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
