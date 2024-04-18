-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 06 2024 г., 09:57
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
-- Структура таблицы `regkl`
--

CREATE TABLE `regkl` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `age` int NOT NULL,
  `tel` varchar(60) NOT NULL,
  `bal` int DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `regkl`
--

INSERT INTO `regkl` (`id`, `name`, `email`, `pass`, `age`, `tel`, `bal`, `data`) VALUES
(1, 'l;kihjoih', 'ffff@k.ru', '1212', 13, '5646', NULL, '2024-01-20 08:27:01'),
(2, 'Artem Art', 'in689fo@fix-travel.ru', '123', 123, '23213124', NULL, '2024-02-03 07:16:02'),
(3, 'Daniil Krekshin', 'daniil.krekshin@gmail.com', '456', 12, '1412424', NULL, '2024-02-03 07:27:45'),
(4, 'иван Егорович петров', '27i@mail.ru', '54', 16, '1234124', NULL, '2024-02-03 07:28:21'),
(5, 'Мага Иналов Рукманович', 'inalov17.m@mail.ru', '32', 14, '123213123213', NULL, '2024-02-03 07:31:54'),
(6, 'Artem Art3', '5mi@mail.ru', '123', 21, '89184255686', NULL, '2024-02-10 06:59:16'),
(7, 'Эмиль Валерьеви', 'emilart1@yandex.ru', '123', 12, '36346236343', NULL, '2024-02-10 07:01:40'),
(8, 'Artem Art', 'in689o@fix-travel.ru', '123', 123, '123124214124', NULL, '2024-02-10 07:15:02'),
(9, '', '', '123', 12, '+79879789799', NULL, '2024-03-30 08:11:02');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `regkl`
--
ALTER TABLE `regkl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `regkl`
--
ALTER TABLE `regkl`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
