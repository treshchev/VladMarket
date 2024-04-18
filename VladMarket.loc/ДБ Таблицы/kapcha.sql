-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 06 2024 г., 09:56
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vladmarket_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `kapcha`
--

CREATE TABLE `kapcha` (
  `id` int NOT NULL,
  `word` varchar(15) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `kapcha`
--

INSERT INTO `kapcha` (`id`, `word`, `picture`) VALUES
(1, 'w68hp', 'kapcha1.jpg'),
(2, 'qGphJD', 'kapcha2.jpg'),
(3, 'broken', 'kapcha.jpg'),
(4, '8anF', 'kapcha4.jpg'),
(5, 'ee61Dc', 'kapcha5.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `kapcha`
--
ALTER TABLE `kapcha`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `kapcha`
--
ALTER TABLE `kapcha`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
