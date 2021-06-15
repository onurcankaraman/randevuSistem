-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Haz 2021, 23:39:21
-- Sunucu sürümü: 10.4.13-MariaDB
-- PHP Sürümü: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `randevusistem`
--
CREATE DATABASE IF NOT EXISTS `randevusistem` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `randevusistem`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinliktur`
--

CREATE TABLE `etkinliktur` (
  `id` int(11) NOT NULL,
  `etkinlikAdi` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `süresi` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `etkinliktur`
--

INSERT INTO `etkinliktur` (`id`, `etkinlikAdi`, `süresi`) VALUES
(1, 'Network Toplantıları - 30 DK', '00:30:00'),
(2, 'Network Toplantıları - 60 dk', '01:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `okul` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `eposta` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `kullaniciAdi` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `sifre` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `name`, `okul`, `eposta`, `kullaniciAdi`, `sifre`) VALUES
(12, 'ONUR CAN KARAMAN', 'DENEME', 'onurcankaraman340@gmail.com', 'onurcankaraman', '123'),
(13, 'Aybars Gülensoy', 'Model FAbrika', 'aybars@gmail.com', 'aybarsgulensoy', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mentorler`
--

CREATE TABLE `mentorler` (
  `id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `kurum` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `ilgiAlani` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `eposta` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `kullaniciAdi` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `sifre` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `link` text COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `mentorler`
--

INSERT INTO `mentorler` (`id`, `adi`, `kurum`, `ilgiAlani`, `eposta`, `kullaniciAdi`, `sifre`, `link`) VALUES
(1, 'B. Aybars Gülensoy', 'Ankara Sanayi Odası Yetkinlik ve Dijital Dönüşüm Merkezi', 'Fotoğraf, Yalın Üretim, Dijital Dönüşüm', 'aybars@mf.com', 'aybars', '123456', 'https://www.google.com/'),
(2, 'ÖZGÜR SAYGI', 'CFO FINANS', 'Finans', 'ozgur.saygı@gmail.com', 'ozgursaygi', '123456', 'https://www.google.com/tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevular`
--

CREATE TABLE `randevular` (
  `id` int(11) NOT NULL,
  `kullanici` int(11) NOT NULL,
  `tarih` int(11) NOT NULL,
  `link` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `randevular`
--

INSERT INTO `randevular` (`id`, `kullanici`, `tarih`, `link`) VALUES
(31, 13, 1, 'https://www.google.com/'),
(30, 12, 3, 'https://www.google.com/tr'),
(29, 12, 3, 'https://www.google.com/tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tarihler`
--

CREATE TABLE `tarihler` (
  `id` int(11) NOT NULL,
  `mentorId` int(11) NOT NULL,
  `baslangicTarihi` datetime NOT NULL,
  `etkinlikId` int(11) NOT NULL,
  `durum` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `tarihler`
--

INSERT INTO `tarihler` (`id`, `mentorId`, `baslangicTarihi`, `etkinlikId`, `durum`) VALUES
(1, 1, '2021-05-21 12:00:00', 1, 1),
(2, 2, '2021-05-23 00:00:00', 2, 0),
(3, 2, '2021-05-26 00:00:00', 1, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `etkinliktur`
--
ALTER TABLE `etkinliktur`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `eposta` (`eposta`) USING HASH,
  ADD UNIQUE KEY `kullaniciAdi` (`kullaniciAdi`) USING HASH;

--
-- Tablo için indeksler `mentorler`
--
ALTER TABLE `mentorler`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link` (`link`) USING HASH;

--
-- Tablo için indeksler `randevular`
--
ALTER TABLE `randevular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tarihler`
--
ALTER TABLE `tarihler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `etkinliktur`
--
ALTER TABLE `etkinliktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `mentorler`
--
ALTER TABLE `mentorler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `randevular`
--
ALTER TABLE `randevular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `tarihler`
--
ALTER TABLE `tarihler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
