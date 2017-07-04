-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 04 2017 г., 14:14
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `checkme`
--

-- --------------------------------------------------------

--
-- Структура таблицы `check`
--

CREATE TABLE IF NOT EXISTS `check` (
  `id` int(10) NOT NULL,
  `check` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `check`
--

INSERT INTO `check` (`id`, `check`) VALUES
(1, '1 Fizz 3 Fizz Buzz Fizz 7 Fizz 9 FizzBuzz 11 Fizz 13 Fizz Buzz Fizz 17 Fizz 19 FizzBuzz 21 Fizz 23 Fizz Buzz Fizz 27 Fizz 29 FizzBuzz 31 Fizz 33 Fizz Buzz Fizz 37 Fizz 39 FizzBuzz 41 Fizz 43 Fizz Buzz');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rating` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `rating`) VALUES
(1, 'Sergey', 'sada@ds.css', '123', NULL),
(2, ':name', ':email', ':password', NULL),
(3, ':name', ':email', ':password', NULL),
(4, 'admin', 'gdg@tsdg.sdx', '123', NULL),
(5, 'header', 'gdg222@tsdg.sdx', '123', NULL),
(6, 'admin', '111@11.com', '123', NULL),
(7, 'admin', 'rwer', '123', NULL),
(11, 'header', 'gdg@tsdg.sdx', '123', NULL),
(12, 'header', 'gdg@tsdg.sdx', '123', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `check`
--
ALTER TABLE `check`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `check`
--
ALTER TABLE `check`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
