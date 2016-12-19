-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 20 2016 г., 01:08
-- Версия сервера: 5.5.48
-- Версия PHP: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kulibin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `competition`
--

CREATE TABLE IF NOT EXISTS `competition` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `image` int(11) NOT NULL,
  `text` varchar(5000) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `competition`
--

INSERT INTO `competition` (`id`, `name`, `date`, `image`, `text`, `description`) VALUES
(1, '0', '2016-12-17', 0, 'Сделать то и то, принести туда и туда. Если вам кажется, что это сложно, то это не для вас! Простите!)', 'Сделать то, до чего еще никто не додумался!)');

-- --------------------------------------------------------

--
-- Структура таблицы `interesting`
--

CREATE TABLE IF NOT EXISTS `interesting` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(5000) NOT NULL,
  `smalldescription` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `interesting`
--

INSERT INTO `interesting` (`id`, `name`, `date`, `description`, `smalldescription`) VALUES
(1, 'http://www.konferencii.ru', '2016-12-18', 'http://www.konferencii.ru - научный портал, на котором вы можете отслеживать различные научные конференции, регистрироваться и принимать в них участие.', 'Открытый каталог научных конференций, выставок и семинаров.');

-- --------------------------------------------------------

--
-- Структура таблицы `invention`
--

CREATE TABLE IF NOT EXISTS `invention` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `image` int(11) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `smalldescription` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `invention`
--

INSERT INTO `invention` (`id`, `name`, `date`, `image`, `description`, `smalldescription`) VALUES
(1, 'Круглогубка', '2016-12-17', 0, 'Круглогубка - это блабалаблааблабалаблааблабалаблааблабалаблааблабалаблааблабалаблааблабалаблааблабалаблааблабалаблаа', 'Круглогубка изменит вашу жизнь раз и навсегда! Не верите? Попробуйте сами!');

-- --------------------------------------------------------

--
-- Структура таблицы `inventors`
--

CREATE TABLE IF NOT EXISTS `inventors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `area` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `inventors`
--

INSERT INTO `inventors` (`id`, `name`, `date`, `area`) VALUES
(1, 'Никола Тесла', '1856-07-10', 'Широко известен благодаря своему вкладу в создание устройств, работающих на переменном токе, многофазных систем, синхронного генератора и асинхронного электродвигателя, позволивших совершить так называемый второй этап промышленной революции.');

-- --------------------------------------------------------

--
-- Структура таблицы `my_invention`
--

CREATE TABLE IF NOT EXISTS `my_invention` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(5000) NOT NULL,
  `smalldescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `image` int(11) NOT NULL,
  `text` varchar(5000) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `date`, `image`, `text`, `description`) VALUES
(8, 'НЛО3', '2016-12-17', 0, 'На крыше 6 общаги приземлилось УЖЕ ТРЕТЬЕ НЛО! Все валим в Балабаново', 'УЖЕ 3 НЛО!!!!'),
(9, 'НЛО3', '2016-12-17', 0, 'На крыше 6 общаги приземлилось УЖЕ ТРЕТЬЕ НЛО! Все валим в Балабаново\r\nНа крыше 6 общаги приземлилось УЖЕ ТРЕТЬЕ НЛО! Все валим в Балабаново\r\nНа крыше 6 общаги приземлилось УЖЕ ТРЕТЬЕ НЛО! Все валим в Балабаново', 'УЖЕ 3 НЛО!!!!\r\nУЖЕ 3 НЛО!!!!\r\nУЖЕ 3 НЛО!!!!'),
(10, 'Изобретение 22 века', '2016-12-17', 0, '17.12.2016 произошло самое непредсказуемое события, некто Г.Г. изобрел машину времени, что позволит беспрепятственно перемещаться во времени! Этого изобретения ждали слишком долго! Возможно теперь мир изменится!', 'Изобретение машины времени изменит не только нашу жизнь, но и наш мир!');

-- --------------------------------------------------------

--
-- Структура таблицы `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `male` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `registration`
--

INSERT INTO `registration` (`id`, `name`, `login`, `birthday`, `email`, `password`, `male`) VALUES
(16, 'ara', 'ara', '2016-12-02', 'ara@ara', 'ara', ''),
(17, 'ruvi', 'ruvi', '2016-12-09', 'ruvi@ruvi.r', 'ruvi', '');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `text` varchar(5000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `date`, `text`) VALUES
(2, 'Задача', '2016-12-19', 'Текст задачи');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `interesting`
--
ALTER TABLE `interesting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `invention`
--
ALTER TABLE `invention`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `inventors`
--
ALTER TABLE `inventors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `my_invention`
--
ALTER TABLE `my_invention`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `competition`
--
ALTER TABLE `competition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `interesting`
--
ALTER TABLE `interesting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `invention`
--
ALTER TABLE `invention`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `inventors`
--
ALTER TABLE `inventors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `my_invention`
--
ALTER TABLE `my_invention`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
