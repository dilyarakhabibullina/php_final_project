-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 14 2022 г., 00:13
-- Версия сервера: 8.0.19
-- Версия PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id_basket` int NOT NULL,
  `id_good` int NOT NULL,
  `id_order` int NOT NULL,
  `counts` int DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id_basket`, `id_good`, `id_order`, `counts`, `status`) VALUES
(163, 1, 77, 1, NULL),
(164, 11, 77, 1, NULL),
(165, 10, 77, 1, NULL),
(166, 1, 25, 1, NULL),
(167, 1, 48, 1, NULL),
(168, 11, 48, 1, NULL),
(169, 1, 49, 1, NULL),
(170, 3, 49, 1, NULL),
(171, 7, 50, 1, NULL),
(172, 3, 50, 7, NULL),
(173, 4, 50, 12, NULL),
(174, 1, 51, 1, NULL),
(175, 2, 51, 1, NULL),
(176, 1, 52, 1, NULL),
(177, 2, 52, 1, NULL),
(178, 3, 52, 4, NULL),
(179, 1, 53, 1, NULL),
(180, 2, 53, 6, NULL),
(181, 4, 54, 5, NULL),
(182, 1, 55, 4, NULL),
(183, 1, 56, 1, NULL),
(184, 7, 56, 3, NULL),
(185, 3, 57, 1, NULL),
(186, 4, 57, 3, NULL),
(187, 1, 57, 1, NULL),
(188, 1, 58, 2, NULL),
(189, 1, 0, 1, NULL),
(190, 2, 0, 1, NULL),
(191, 2, 57, 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id_category` int NOT NULL,
  `status` int NOT NULL,
  `categoryname` varchar(50) NOT NULL,
  `parent_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_category`, `status`, `categoryname`, `parent_id`) VALUES
(1, 0, 'Электроника', NULL),
(2, 0, 'Смартфоны', 1),
(3, 0, 'Аксесуары', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `image`, `title`, `description`, `price`, `status`) VALUES
(1, '1.png', 'Coat', 'Known her sculptural takes on traditional tailoring, Australian\r\narbiter of cool Kym Ellery teams up with Moda Operandi', 800, 0),
(2, '2.png', 'Skirt', 'Known her sculptural takes on traditional tailoring, Australian\r\narbiter of cool Kym Ellery teams up with Moda Operandi', 500, 0),
(3, '3.png', 'Shirt', 'Known her sculptural takes on traditional tailoring, Australian\r\narbiter of cool Kym Ellery teams up with Moda Operandi', 300, 0),
(4, '4.png', 'Dress', 'Known her sculptural takes on traditional tailoring, Australian\r\narbiter of cool Kym Ellery teams up with Moda Operandi', 900, 0),
(5, '5.png', 'T-shirt', 'Known her sculptural takes on traditional tailoring, Australian\r\narbiter of cool Kym Ellery teams up with Moda Operandi', 200, 0),
(6, '6.png', 'SkirtNew', 'Known her sculptural takes on traditional tailoring, Australian\r\narbiter of cool Kym Ellery teams up with Moda Operandi', 700, 0),
(7, '7.png', 'Trouses', 'Known her sculptural takes on traditional tailoring, Australian\r\narbiter of cool Kym Ellery teams up with Moda Operandi', 860, 0),
(8, '8.png', 'Socks', 'Known her sculptural takes on traditional tailoring, Australian\r\narbiter of cool Kym Ellery teams up with Moda Operandi', 9, 0),
(9, '9.png', 'top', 'very nice top', 500, 0),
(10, '10.png', 'Furcoat', 'Very nice warm furcoat', 10000, 0),
(11, '11.png', 'Shoes', 'Leather brown shoes ', 1200, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`) VALUES
(44, 3),
(45, 3),
(46, 3),
(47, 5),
(48, 5),
(49, 1),
(50, 1),
(51, 5),
(52, 0),
(53, 0),
(54, 0),
(55, 0),
(56, 4),
(57, 4),
(58, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_id_order` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `last_id_order`) VALUES
(1, 'Dilyara', 'di', '123', NULL),
(2, 'Администратор', 'admin', '321', NULL),
(3, 'nat', 'nut', '222', NULL),
(4, 'Гуля', 'surgeon', '789', 57),
(5, 'Dilyara', 'dilyarakhabibullina', '111', NULL),
(7, '9999', 'nini', '987', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id_basket`,`id_good`,`id_order`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id_basket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
