-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 12 2024 г., 20:41
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
-- Структура таблицы `technic`
--

CREATE TABLE `technic` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `photo` varchar(60) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `technic`
--

INSERT INTO `technic` (`id`, `name`, `photo`, `price`) VALUES
(1, 'Айфон 15 Pro Max', 'iphone.jpg', '1.500'),
(2, 'Станция Алиса', 'alisa.jpg', '300'),
(3, 'Клавиатура  HyperX', 'klava.jpg', '250'),
(4, 'Красивый корпус', 'korpus.jpg', '500'),
(5, 'Игровой монитор 144Гц', 'monik.jpg', '670'),
(6, 'Наушники HyperX', 'naush.jpg', '435'),
(7, 'Игровой Ноутбук', 'nout.jpg', '12.000'),
(8, '128 Гб ОП', 'operativka.jpg', '900'),
(9, 'Play Station 5 Pro', 'playstation.jpg', '8.000'),
(10, 'Лазерный принтер', 'printer.jpg', '7.000'),
(11, 'ВидеоКарта RTX 4070', 'videok.jpg', '29.000'),
(12, 'Процессор Core i9', 'proc.jpg', '23.000');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `technic`
--
ALTER TABLE `technic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `technic`
--
ALTER TABLE `technic`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
