-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2024 at 08:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps_countries`
--

CREATE TABLE `apps_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `apps_countries`
--

INSERT INTO `apps_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'AS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TL', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GG', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'YT', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Eswatini'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `city` text NOT NULL,
  `persons` int(11) NOT NULL,
  `type` text NOT NULL,
  `auto` int(11) NOT NULL DEFAULT 1,
  `engine` text NOT NULL,
  `price` text NOT NULL,
  `description` text NOT NULL,
  `brand` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`ID`, `title`, `image`, `city`, `persons`, `type`, `auto`, `engine`, `price`, `description`, `brand`, `status`) VALUES
(1, 'Fiat Egea', '256-v.png', 'Istanbul', 5, 'Eco', 0, 'Petrol', '45', '', 'Fiat', 1),
(2, 'Citroen Elysee', '31-v.png', 'Ankara', 5, 'Eco', 0, 'Petrol', '56', '', 'Citroen', 1),
(3, 'Citroen C3', '162-v.png', 'Ankara', 4, 'Medium', 1, 'Petrol', '79', '', 'Citroen', 1),
(4, 'Peugeot 2008', '192-v.png', 'Izmir', 5, 'Luxury', 1, 'Petrol', '120', '', 'Peugeot', 1),
(5, 'Peugeot 508', 'Peugeot-508-2021-black.webp', 'Istanbul', 5, 'Luxury', 1, 'Petrol', '165', '', 'Peugeot', 1),
(6, 'Mercedes CLA 200', 'Mercedes-Benz-CLA-200-2014-gray.webp', 'Istanbul', 5, 'Luxury', 1, 'Petrol', '153', '', 'Mercedes-Benz', 1),
(7, 'BMW 218i', 'BMW-218i-2021-white.webp', 'Ankara', 5, 'Luxury', 1, 'Petrol', '102', '', 'BMW', 1),
(8, 'BMW 318i', 'BMW-318i-2018-black.webp', 'Ankara', 5, 'Luxury', 1, 'Petrol', '124', '', 'BMW', 1),
(9, 'Audi A3', 'Audi-A3-2016-black.webp', 'Izmir', 5, 'Luxury', 1, 'Petrol', '96', '', 'Audi', 1),
(10, 'Mercedes G 400', 'Mercedes-G400-2021-white.webp', 'Istanbul', 5, 'Luxury', 1, 'Petrol', '190', '', 'Mercedes-Benz', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `ID` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `User_ID` int(11) NOT NULL,
  `car_ID` int(11) NOT NULL,
  `date` text NOT NULL,
  `off_road` int(11) NOT NULL,
  `barbecue_kit` int(11) NOT NULL,
  `camping_kit` int(11) NOT NULL,
  `child_seat` int(11) NOT NULL,
  `gps` int(11) NOT NULL,
  `special` text NOT NULL,
  `driver_first_name` text NOT NULL,
  `driver_last_name` text NOT NULL,
  `country` text NOT NULL,
  `phone` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`ID`, `first_name`, `last_name`, `User_ID`, `car_ID`, `date`, `off_road`, `barbecue_kit`, `camping_kit`, `child_seat`, `gps`, `special`, `driver_first_name`, `driver_last_name`, `country`, `phone`, `status`) VALUES
(1, 'hossein', 'faramarzi', 2, 7, '30 September - 1 January', 0, 0, 0, 0, 0, 'no', 'ali', 'rezai', 'IR', '09019437340', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`ID`, `name`, `value`) VALUES
(1, 'site_url', 'http://localhost:8080/car/'),
(2, 'site_name_en', 'Verto'),
(3, 'site_name_du', 'Verto'),
(4, 'site_name_tr', 'Verto'),
(5, 'sub_text_en', 'this is a test page'),
(6, 'sub_text_tr', 'this is a test page'),
(7, 'sub_text_du', 'this is a test page');

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `ID` int(11) NOT NULL,
  `en` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tr` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `du` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`ID`, `en`, `tr`, `du`) VALUES
(1, 'The best car rental site', 'En iyi araç kiralama sitesi', 'Die beste Autovermietungsseite'),
(2, 'Welcome to our live chat!', 'Canlı sohbetimize hoş geldiniz!', 'Willkommen zu unserem Live-Chat!'),
(3, 'Write your message', 'Mesajınızı yazın', 'Schreiben Sie Ihre Nachricht'),
(4, 'Home', 'Ev', 'Heim'),
(5, 'Reservation', 'Rezervasyon', 'Reservierung'),
(6, 'Subscription', 'Abonelik', 'Abonnement'),
(7, 'LOGIN', 'GİRİŞ YAPMAK', 'LOGIN'),
(8, 'REGISTER', 'KAYIT OLMAK', 'REGISTRIEREN'),
(9, 'Rent a car', 'Araba kiralamak', 'Mietwagen'),
(10, 'Easy, Fast & Precise', 'Kolay, Hızlı ve Kesin', 'Einfach, schnell und präzise'),
(11, 'search, find and enjoy your trip with a good car', 'iyi bir araba ile seyahatinizi arayın, bulun ve keyfini çıkarın', 'Suchen, finden und genießen Sie Ihre Reise mit einem guten Auto'),
(12, 'Where will you rent a car?', 'Arabayı nereden kiralayacaksınız?', 'Wo werden Sie ein Auto mieten?'),
(13, 'Search City', 'Şehir Ara', 'Suche Stadt'),
(14, 'Search', 'Aramak', 'Suchen'),
(15, 'Affordable & Premium Car For Rent', 'Uygun Fiyatlı ve Premium Kiralık Araba', 'Erschwingliche und hochwertige Mietwagen'),
(16, 'Make it happen and rent your car!', 'Haydi, siz de aracınızı kiralayın!', 'Machen Sie es wahr und mieten Sie Ihr Auto!'),
(17, 'Rent Now', 'Şimdi Kirala', 'Jetzt mieten'),
(18, 'The minimum number of characters for the search is 4', 'Arama için minimum karakter sayısı 4\'tür', 'Die Mindestanzahl der Zeichen für die Suche beträgt 4'),
(19, 'Search For', 'Ara', 'Suchen nach'),
(20, 'No datas found', 'Veri bulunamadı', 'Keine Daten gefunden'),
(21, 'Reservation Date', 'Rezervasyon Tarihi', 'Reservierungsdatum'),
(22, 'Driver`s information', 'Sürücü bilgileri', 'Fahrerinformationen'),
(23, 'First name', 'İlk adı', 'Vorname'),
(24, 'Last name', 'Soy isim', 'Nachname'),
(25, 'Add ons', 'Eklentiler', 'Add-ons'),
(26, 'Off road', 'Yol dışı', 'Gelände'),
(27, 'Barbecue Kit', 'Barbekü Seti', 'Grillset'),
(28, 'Camping Kit', 'Kamp Seti', 'Camping-Ausrüstung'),
(29, 'Child Seat', 'Çocuk Koltuğu', 'Çocuk Koltuğu'),
(30, 'GPS System', 'GPS Sistemi', 'GPS-System'),
(31, 'Special requests', 'Özel istekler', 'Sonderwünsche'),
(32, 'write your request here...', 'isteğinizi buraya yazın...', 'schreiben Sie hier Ihr Anliegen...'),
(33, 'Continue', 'Devam etmek', 'Weitermachen'),
(34, 'Please enter first name', 'Lütfen adınızı giriniz', 'Bitte geben Sie den Vornamen ein'),
(35, 'Please enter last name', 'Lütfen soyadınızı giriniz', 'Bitte geben Sie den Nachnamen ein'),
(36, 'Authentication', 'Kimlik doğrulama', 'Authentifizierung'),
(37, 'Don\'t have an account?', 'Hesabınız yok mu?', 'Hesabınız yok mu?'),
(38, 'Email', 'E-posta', 'E-Mail'),
(39, 'Password', 'Şifre', 'Şifre'),
(40, 'Keep me logged in', 'Oturumumu açık tut', 'Eingeloggt bleiben'),
(41, 'Log in now', 'Şimdi giriş yapın', 'Jetzt anmelden'),
(42, 'Email or password is incorrect', 'E-posta veya şifre yanlış', 'E-Mail oder Passwort ist falsch'),
(43, 'Please enter the name', 'Lütfen adı girin', 'Bitte geben Sie den Namen ein'),
(44, 'The email is incorrect', 'E-posta yanlış', 'Die E-Mail ist falsch'),
(45, 'Email is already registered', 'E-posta zaten kayıtlı', 'E-Mail ist bereits registriert'),
(46, 'Password must be at least 8 characters long', 'Şifre en az 8 karakter uzunluğunda olmalıdır', 'Das Passwort muss mindestens 8 Zeichen lang sein'),
(47, 'Do you have an account?', 'Hesabınız var mı?', 'Haben Sie ein Konto?'),
(48, 'Name', 'isim', 'Name'),
(49, 'Register Now', 'Şimdi Kayıt Olun', 'Jetzt registrieren'),
(50, 'Logout', 'Çıkış Yap', 'Ausloggen'),
(51, 'Until date ', 'Tarihe kadar', 'miteinander ausgehen'),
(52, 'Driver information', 'Sürücü bilgileri', 'Fahrerinformationen'),
(53, 'Who`s driving?', 'Arabayı kim kullanıyor?', 'Wer fährt?'),
(54, 'Country', 'ülke', 'Land'),
(55, 'Phone Number', 'Telefon Numarası', 'Telefonnummer'),
(56, 'Submit', 'Göndermek', 'Einreichen'),
(57, 'Payment', 'ödeme', 'Zahlung'),
(58, 'We use secure transmission', 'We use secure transmission', 'Wir verwenden eine sichere Übertragung'),
(59, 'Name on Card', 'Kart Üzerindeki İsim', 'Name auf der Karte'),
(60, 'Debit/Credit card number', 'Banka/Kredi kartı numarası', 'Debit-/Kreditkartennummer'),
(61, 'Expiration date', 'Expiration date', 'Verfallsdatum'),
(62, 'Security code', 'Güvenlik kodu', 'Sicherheitscode'),
(63, 'Reserve now', 'Şimdi rezervasyon yapın', 'Jetzt buchen'),
(64, 'Please enter all fields correctly', 'Lütfen tüm alanları doğru girin', 'Bitte füllen Sie alle Felder korrekt aus'),
(65, 'Your request has been successfully registered', 'Talebiniz başarıyla kaydedildi', 'Ihre Anfrage wurde erfolgreich registriert'),
(66, 'Accident report', 'Kaza raporu', 'Unfallbericht'),
(67, 'Accident image', 'Kaza görüntüsü', 'Unfallbild'),
(68, 'Upload', 'Yüklemek', 'Hochladen'),
(69, 'Date of accident', 'Date of accident', 'Unfalldatum');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `password`) VALUES
(2, 'hossein', 'hosseinfaramarzi20@gmail.com', 'QElyYW4yMGlyYW4yMA==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps_countries`
--
ALTER TABLE `apps_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps_countries`
--
ALTER TABLE `apps_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
