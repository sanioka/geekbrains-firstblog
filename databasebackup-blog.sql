-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 14 2016 г., 12:37
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`) VALUES
(1, 'Заголовок1', 'Текст статьи 12123123', '2015-03-01'),
(2, 'Заголовок2', 'Lorem ipsum dolor блаблабла\r\nsd\r\nfs\r\ndf\r\nsd\r\nfs\r\ndf\r\nsd\r\nf\r\nsdf\r\nsd\r\nf\r\nsd\r\nfsd\r\nf', '2016-03-31'),
(7, 'Длинная статья', 'Южная Корея и США начинают крупнейшие с 2010 года военные учения\r\nСЕУЛ, 7 марта. /Корр. ТАСС Станислав Варивода/. Республика Корея и США проведут с 7 марта по 30 апреля масштабные совместные военные учения Key Resolve и Foal Eagle. Как сообщило министерство национальной обороны страны, в нынешнем году в них примут участие более 300 тыс. южнокорейских и 15 тыс. американских военнослужащих — в два раза больше, чем в предыдущие годы.\r\n\r\n\r\n© Reuters\r\nЭто крупнейшие американско-южнокорейские военные учения с 2010 года, когда, как утверждают в Сеуле и Вашингтоне, в результате северокорейской торпедной атаки был уничтожен южнокорейский корвет «Чхонан» и погибли более 40 моряков.\r\n\r\nЦИТАТА\r\nСовместно военные двух стран будут на практике отрабатывать так называемый Оперативный план 5015, цель которого — нейтрализация оружия массового уничтожения КНДР и подготовка к превентивному удару в случае нападения со стороны Северной Кореи', '2016-03-30');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
