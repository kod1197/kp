-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 29 2017 г., 11:49
-- Версия сервера: 5.5.52-0+deb8u1
-- Версия PHP: 5.6.27-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `kibirev`
--

-- --------------------------------------------------------

--
-- Структура таблицы `eTot`
--

CREATE TABLE IF NOT EXISTS `eTot` (
`id` int(255) NOT NULL,
  `idImg` int(255) NOT NULL,
  `idTag` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `eTot`
--

INSERT INTO `eTot` (`id`, `idImg`, `idTag`) VALUES
(14, 39, 1),
(15, 40, 3),
(16, 41, 1),
(17, 42, 1),
(18, 43, 1),
(19, 44, 1),
(20, 45, 1),
(21, 46, 1),
(22, 47, 1),
(23, 53, 1),
(24, 54, 1),
(25, 55, 1),
(26, 56, 1),
(27, 57, 1),
(28, 58, 1),
(29, 59, 1),
(30, 60, 1),
(31, 61, 1),
(32, 62, 1),
(33, 63, 1),
(34, 64, 7),
(35, 65, 7),
(36, 66, 7),
(37, 67, 1),
(38, 68, 1),
(39, 69, 1),
(40, 70, 1),
(41, 71, 1),
(42, 72, 1),
(43, 73, 1),
(44, 74, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE IF NOT EXISTS `img` (
`id` int(11) unsigned NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idUser` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `img`
--

INSERT INTO `img` (`id`, `img`, `name`, `text`, `idUser`) VALUES
(71, 'c06124829f6589f038cef82feac7c1e7.png', '1', '1', 0),
(72, '8a4cd81cffab02e7d64da12759a6740e.png', '1', '1', 0),
(73, 'd16c2f59673144ea3f201517711b71bd.png', '1', '1', 0),
(74, '931c4bb8fd9d0cf83f3f157cfb4e9686.png', '1', '1', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
`id` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tag`
--

INSERT INTO `tag` (`id`, `name`) VALUES
(1, 'forest'),
(3, 'sun'),
(5, 'lake'),
(7, 'meadow');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `eTot`
--
ALTER TABLE `eTot`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `img`
--
ALTER TABLE `img`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Индексы таблицы `tag`
--
ALTER TABLE `tag`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `eTot`
--
ALTER TABLE `eTot`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT для таблицы `tag`
--
ALTER TABLE `tag`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
