-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 24 2021 г., 18:30
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `first`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chosen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `heading`, `image`, `description`, `text`, `topic`, `link`, `city`, `chosen`) VALUES
(1, 'Курс биткоина превысил отметку 50.000$', '\\uploads\\bitcoin.jpg', 'Курс биткоина продолжает рост, несмотря на откат.', 'В ночь на 5 марта курс биткоина на криптобирже Binance опускался до $46,3 тыс., после чего начал расти. По состоянию на 18:30 котировки первой криптовалюты составляют $50 тыс. Сейчас рынок находится в стадии коррекции после того, как 21 февраля BTC обновил исторический максимум стоимости выше $58,3 тыс. Эксперты проанализировали ситуацию и дали прогнозы специально для «РБК-Крипто».', 'Экономика', 'bitcoin', '', ''),
(2, 'Рубль повышается к доллару и к евро.', '\\uploads\\rub.jpg', 'Рубль повышается против доллара и больше — к евро на фоне ослабления европейской валюты против американской.', 'Рубль повышается против доллара и больше — к евро на фоне ослабления европейской валюты против американской на форексе.\r\nОбновление рынком нефти максимумов с января 2020 года выше 69 долларов за баррель марки Brent продолжает поддерживать курс российской валюты, несмотря на санкционные риски, обострившиеся перед длинными выходными в РФ.\r\nКурс доллара расчетами \"завтра\" на 21.23 мск снижался на 40 копеек, до 74,3 рубля, курс евро — на 93 копейки, до 88,52 рубля, следует из данных Московской биржи.', 'Экономика', 'rub', '', 'added'),
(3, 'Путин привился от COVID', '\\uploads\\put.jpg', 'Президент чувствует себя хорошо, 24 марта у него будет полноценный рабочий день', 'Президент РФ Владимир Путин сделал прививку от коронавируса и чувствует себя хорошо. Как сообщил ТАСС во вторник пресс-секретарь российского лидера Дмитрий Песков, в среду у главы государства будет полноценный рабочий день.', 'Политика', 'put', '', ''),
(4, 'Сенат одобрил план Байдена по спасению экономики на $1,9 трлн.\r\n', '\\uploads\\baiden.jpg', 'Пакет мер подразумевает прямые выплаты американцам в размере $1,4 тыс., а также поддержку местных властей и бизнеса. За документ проголосовали 50 сенаторов, против — 49.', 'Сенат конгресса США одобрил пакет мер помощи национальной экономики, пострадавшей от пандемии коронавируса, сообщает CNBC. На ее стимуляцию пойдут $1,9 трлн, план основан на программе, предложенной президентом Джо Байденом.\r\nЗаконопроект поддержали 50 сенаторов, против выступили 49. При этом все республиканцы в верхней палате проголосовали против этой меры, а все демократы — за, уточняет USA Today. Один сенатор-республиканец — Дэн Салливан от штата Аляска — не присутствовал на голосовании.\r\n', 'Политика', 'baiden', '', ''),
(5, 'Кошка загавкала.', '\\uploads\\cat.jpg', 'Житель Уфы сообщил, что его кошка гавкает, а не мяукает', 'Кошка заболела неизвестной болезнью и теперь гавкает, а не мяукает. Хозяин кошки в шоке. Соседи не верят  своим ушам. Кошка будет отправлена в лучшую ветеринарную клинику Уфы.', 'Животные', 'cat', 'Уфа', ''),
(6, 'В Уфе ожидается аномальное потепление.', '\\uploads\\sun.jpg', 'Уфимцев ждет целая неделя теплой погоды. Южный ветер принесет с собой дополнительное тепло.', 'Несмотря на то, что за последние дни погода в Уфе сначала выдала 80% месячной нормы осадков, а потом — похолодание до -35 градусов, уже завтра, 15 января, в республике ожидается значительное потепление.\r\nВ пятницу минимальная температура будет -21 градус, и то лишь в отдельных районах. Средняя температурная отметка по республике составит -11, -16 градусов ночью и -4, -9 градусов днем.', 'Погода', 'sun', 'Уфа', ''),
(7, 'В Татарстан придет аномальное похолодание', '\\uploads\\cold.jpg', 'К концу недели в Казани температура опустится на 4−6 градусов ниже нормы, до 10−13 градусов мороза, а на востоке Татарстана аномалия будет достигать 6−8 градусов.', '«К концу недели будет похолодание в ряде регионов, на всей Волге и Урале. В районе Казани, Нижнего Новгорода аномалии будут достигать 4−6 градусов с четверга, в воскресенье-понедельник в Ростовской, Астраханской, Волгоградской областях, на севере Краснодарского края температура будет на 4 градуса ниже нормы, а на востоке Татарстана и в Екатеринбурге — даже на 6−8 градусов», — сказал синоптик.', 'Погода', 'cold', 'Татарстан', 'added');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;