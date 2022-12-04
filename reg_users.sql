-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 04 2022 г., 05:31
-- Версия сервера: 8.0.31
-- Версия PHP: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `reg_users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `shop_category`
--

CREATE TABLE `shop_category` (
  `id` int NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `shop_category`
--

INSERT INTO `shop_category` (`id`, `name`) VALUES
(1, 'Фон'),
(2, 'Рамки'),
(3, 'Шрифты');

-- --------------------------------------------------------

--
-- Структура таблицы `shop_items`
--

CREATE TABLE `shop_items` (
  `id_shop_item` int NOT NULL,
  `name_item` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `class` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `shop_items`
--

INSERT INTO `shop_items` (`id_shop_item`, `name_item`, `price`, `class`, `id_category`) VALUES
(1, 'красный', 50, 'shop_red', 1),
(2, 'зеленый', 30, 'shop_blue', 1),
(3, 'италик', 10, NULL, 3),
(4, 'красивая рамка', 25, NULL, 2),
(5, 'фон 2', 40, NULL, 1),
(6, 'фон 3', 50, NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `login` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `avatar` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `balls` int DEFAULT NULL,
  `classes` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`, `balls`, `classes`) VALUES
(1, 'ФИО', 'ivanov', 'ivanov@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'uploads/1668928450photo_2022-10-31_16-21-02.jpg', 1, 'shop_blue'),
(3, 'Винниченко Илья Николаевич', 'rikkivesk', 'rikkivesk@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'uploads/1668929346photo_2022-09-29_21-06-57.jpg', 0, 'shop_red'),
(4, 'Данилов Кирилл', 'danilov', 'danilov@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'uploads/1668930505photo_2022-10-31_16-21-02.jpg', 0, 'shop_red'),
(5, 'Зароченцев', 'zaro', 'zaro@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'uploads/1668930629photo_2022-10-31_16-21-02.jpg', 0, 'shop_red'),
(6, 'Иванов Сергей', 'sergeev', 'sergee@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'uploads/1669013795photo_2022-10-31_16-21-02.jpg', 0, 'shop_red'),
(7, 'Винниченко', 'ilay', 'rikkivesk@gmail.com', '202cb962ac59075b964b07152d234b70', 'uploads/166911488716690455908670.jpg', 0, 'shop_red'),
(8, 'Родион', 'rodion', 'rodya@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'uploads/166918079916690455908670.jpg', 0, 'shop_red'),
(9, 'Родион', 'rodya', 'rodyaga@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'uploads/166918089616690455908670.jpg', 0, 'shop_red'),
(10, 'Сестра', 'UnaTallean', 'unatallean@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'uploads/166922796516690455908670.jpg', 0, 'shop_red'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, 'shop_red');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `shop_category`
--
ALTER TABLE `shop_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shop_items`
--
ALTER TABLE `shop_items`
  ADD PRIMARY KEY (`id_shop_item`),
  ADD KEY `key_category` (`id_category`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `shop_category`
--
ALTER TABLE `shop_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `shop_items`
--
ALTER TABLE `shop_items`
  MODIFY `id_shop_item` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `shop_items`
--
ALTER TABLE `shop_items`
  ADD CONSTRAINT `key_category` FOREIGN KEY (`id_category`) REFERENCES `shop_category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
