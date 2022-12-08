-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Tem 2022, 08:38:45
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_zopim` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_google` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_bakım` enum('0','1') COLLATE utf8mb4_turkish_ci NOT NULL DEFAULT '1',
  `ayar_keywords` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_title`, `ayar_description`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_ilce`, `ayar_il`, `ayar_adres`, `ayar_mesai`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakım`, `ayar_keywords`) VALUES
(0, '', 'PHP E-TİCARET                                          ', 'E-ticaret Eğitimi       ', 'X   ', '212 356 78 45    ', '555 555 55 55    ', '212 356 78 46    ', 'info@mail.com', 'KADIKÖY    ', 'İSTANBUL    ', 'BOSTANCI CADDESİ İMRAN MAHALLESİ FENERBAHÇE SOKAK NURSEREN APT. NO15    ', '  HAFTAİÇİ SABAH 9:00 AKŞAM 18:00    ', 'ayar_maps ', 'ayar_analysti    ', 'ayar_zopim     ', 'www.facebook.com ', 'www.twitter.com ', 'www.google.com ', 'www.youtube.com ', 'mail.alanadi.com    ', 'user    ', 'password    ', '587    ', '1', 'php,eticaret,egitim,udemy      ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(6) NOT NULL,
  `hakkimizda_baslik` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkimizda_vizyon` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkimizda_misyon` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'Hakkımızda Başlık        ', '<p><strong><em>Udemy Php Eğitim Kursu B&ouml;l&uuml;m 124</em></strong></p>\r\n\r\n<p><strong><em>i&ccedil;erik bilgisi admin panelinde site ayarları/hakkımızda ayarlar kısmında i&ccedil;erik kısmına yazılacak</em></strong></p>\r\n\r\n<p><strong><em>H&Uuml;SEYİN ŞUAN YANIMDA</em></strong></p>\r\n\r\n<p><strong><em>SS</em></strong></p>\r\n', '4jM2iTUfAns           ', 'hakkımızda vizyon içeriği verisi                  ', 'hakkımızda vizyon içeriği verisi                  ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(5) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT current_timestamp(),
  `kullanici_resim` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_tc` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_gsm` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_password` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_adres` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_il` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_ad`, `kullanici_mail`, `kullanici_gsm`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_yetki`, `kullanici_durum`) VALUES
(1, '2022-07-14 10:02:04', '', '258954874112          ', 'admin', 'admin', '12323  ', 'admin', 'x    ', 'ADRESS', 'İstanbul', 'beşiktaş', 'Orgeneral', '9', 1),
(5, '2022-07-14 10:02:04', '', '258954874112          ', 'kullanici2', 'admin', '12323  ', '21232f297a57a5a743894a0e4a801fc3', 'x    ', 'ADRESS', 'İstanbul', 'beşiktaş', 'Orgeneral', '9', 1),
(6, '2022-07-14 10:02:04', '', '258954874112          ', 'kullanici3', 'admin', '12323  ', '21232f297a57a5a743894a0e4a801fc3', 'x    ', 'ADRESS', 'İstanbul', 'beşiktaş', 'Orgeneral', '9', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_ust` varchar(50) NOT NULL,
  `menu_ad` varchar(100) NOT NULL,
  `menu_detay` text NOT NULL,
  `menu_url` varchar(100) NOT NULL,
  `menu_sıra` varchar(50) NOT NULL,
  `menu_durum` enum('0','1') NOT NULL,
  `menu_seourl` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ust`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sıra`, `menu_durum`, `menu_seourl`) VALUES
(1, '0', 'Hakkımızda', 'menu_detay', 'hakkımızda.php', '5', '1', ''),
(2, '0', 'Menu AD', 'MENU DETAY 2', 'MENU URL 2', '85', '1', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
