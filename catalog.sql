-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 11 2022 г., 18:08
-- Версия сервера: 8.0.29
-- Версия PHP: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `catalog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `img`, `price`) VALUES
(1, 'CORT AD810M Акустическая гитара', '1.jpg', 2799),
(2, 'Crafter D6/N Акустическая гитара', '2.jpg', 12626),
(3, 'Crafter D7/N Акустическая гитара', '3.jpg', 13338),
(4, 'Crafter D8/N Акустическая гитара', '4.jpg', 13794),
(5, 'Crafter D8/TS Акустическая гитара', '5.jpg', 14165),
(6, 'Crafter GA30/N Акустическая гитара', '6.jpg', 22059),
(7, 'Crafter GA45/N Акустическая гитара', '7.jpg', 27075),
(8, 'CRAFTER GA6/N Акустическая гитара', '8.jpg', 12654),
(9, 'CRAFTER GA7/N акустическая гитара', '9.jpg', 13367),
(10, 'CRAFTER GA8/BK акустическая гитара', '10.jpg', 13794),
(11, 'CRAFTER GA8/N Акустическая гитара', '11.jpg', 13794),
(12, 'Crafter HiLITE-T CD/N Акустическая гитара', '12.jpg', 10175),
(13, 'Crafter J15/N акустическая гитара', '13.jpg', 16743),
(14, 'CRAFTER J18/N акустическая гитара. джамбо', '14.jpg', 17271),
(15, 'Crafter LITE-D SP/N Акустическая гитара', '15.jpg', 10545),
(16, 'Crafter MD-42/TR Акустическая гитара', '16.jpg', 9006),
(17, 'CRAFTER TA070/Light Amber Акустическая гитара', 'no-image.png', 20378);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `admin` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `admin`) VALUES
(1, 'admin@gmail.com', 'admin', 1),
(2, 'user1@gmail.com', 'u1', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
