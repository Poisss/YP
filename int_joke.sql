-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июн 16 2023 г., 17:05
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `int_joke`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE `author` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`id`, `name`, `email`) VALUES
(1, 'Светов Павел', 'svetov.p@mail.ru'),
(2, 'Лукин Иван', 'lukin.i@yandex.ru'),
(7, 'fefef123', 'fefe@fggf');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'О д\' Артаньяне'),
(2, 'Через дорогу'),
(3, 'Об адвокатах'),
(4, 'Новый год');

-- --------------------------------------------------------

--
-- Структура таблицы `joke`
--

CREATE TABLE `joke` (
  `id` int NOT NULL,
  `joketext` text COLLATE utf8mb4_unicode_ci,
  `jokedate` date NOT NULL,
  `authorid` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `joke`
--

INSERT INTO `joke` (`id`, `joketext`, `jokedate`, `authorid`) VALUES
(1, 'Зачем цыпленок перешел дорогу? Чтобы попасть на другую сторону!', '2017-04-01', 1),
(2, '\"Королеве - подвески, Констанции - подвязки, Портосу - подтяжки ...\", - повторял, чтобы не перепутать, д\\\'Артанян по дороге в Англию', '2017-04-01', 1),
(4, 'Родители долго думали, чем заняться на майские праздники. Вовочка решил все за них: принес из школы кишечный вирус.', '2023-06-14', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `jokecategory`
--

CREATE TABLE `jokecategory` (
  `jokeid` int NOT NULL,
  `categoryid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `jokecategory`
--

INSERT INTO `jokecategory` (`jokeid`, `categoryid`) VALUES
(2, 1),
(1, 2),
(4, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `joke`
--
ALTER TABLE `joke`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authorid` (`authorid`);

--
-- Индексы таблицы `jokecategory`
--
ALTER TABLE `jokecategory`
  ADD PRIMARY KEY (`jokeid`,`categoryid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `joke`
--
ALTER TABLE `joke`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `joke`
--
ALTER TABLE `joke`
  ADD CONSTRAINT `joke_ibfk_1` FOREIGN KEY (`authorid`) REFERENCES `author` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `jokecategory`
--
ALTER TABLE `jokecategory`
  ADD CONSTRAINT `jokecategory_ibfk_1` FOREIGN KEY (`jokeid`) REFERENCES `joke` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `jokecategory_ibfk_2` FOREIGN KEY (`categoryid`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
