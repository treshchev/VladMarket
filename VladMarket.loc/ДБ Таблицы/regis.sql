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
-- Структура таблицы `regis`
--

CREATE TABLE `regis` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `age` int NOT NULL,
  `tel` varchar(30) NOT NULL,
  `ball` int DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `regis`
--

INSERT INTO `regis` (`id`, `name`, `email`, `pass`, `age`, `tel`, `ball`, `data`) VALUES
(1, 'Эмиль Валерьевич Маргарян', 'emilart1@yandex.ru', '123', 12, '21`31234124124', NULL, '2024-02-03 07:36:44'),
(2, 'Daniil Krekshin1111', 'daniil.krekshin11@gmail.com', '123', 12, '23123412312341234', NULL, '2024-02-03 08:29:56'),
(3, '', '', '456', 33, '43252525', NULL, '2024-03-30 08:17:36');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `regis`
--
ALTER TABLE `regis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
