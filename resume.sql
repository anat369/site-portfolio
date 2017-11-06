-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 04 2017 г., 01:14
-- Версия сервера: 5.7.16
-- Версия PHP: 7.0.14

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `resume`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` text NOT NULL
) ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `url`) VALUES
(1, 'php', 'http://mysam.store/'),
(2, 'mysql', 'http://mysam.online/'),
(3, 'html5', 'http://analyzer22.online/'),
(4, 'css3', 'http://analyzer22.tech/'),
(5, 'jquery', '0'),
(6, 'ajax', '0'),
(7, 'bootstrap', '0'),
(8, 'wordpress', '0'),
(9, 'gulp', '0'),
(10, 'less', '0'),
(12, 'js', '0'),
(13, 'composer', '0'),
(14, 'puphpet', '0'),
(15, 'vagrant', '0'),
(16, 'gulp', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `declaration` text NOT NULL
) ;

--
-- Дамп данных таблицы `site`
--

INSERT INTO `site` (`id`, `number`, `title`, `url`, `declaration`) VALUES
(1, 1, 'Интернет-магазин', 'http://mysam.store/', 'Простой интернет магазин, состоит из множества статичных html страниц.'),
(2, 2, 'Интернет-магазин', 'http://mysam.online/', 'Усовершенствованная версия интернет-магазина на php, построена на шаблоне проектирования mvc.'),
(3, 3, 'Landing page', 'http://analyzer22.online/', 'Пример одностраничного рекламного сайта компании.'),
(4, 4, 'Сайт компании', 'http://analyzer22.tech/', 'Сайт строительной компании на Wordpress.'),
(5, 5, 'Сайт-портфолио', 'http://mysam.tech/', 'Такой же сайт, как и этот, но сделан на html5, css3, jquery с помощью сборщика Gulp.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
