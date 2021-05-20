-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 20 May 2021, 13:19:32
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

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

DROP TABLE IF EXISTS `etkinliktur`;
CREATE TABLE IF NOT EXISTS `etkinliktur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etkinlikAdi` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `süresi` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `etkinliktur`
--

INSERT INTO `etkinliktur` (`id`, `etkinlikAdi`, `süresi`) VALUES
(1, 'Network Toplantıları - 30 DK', '00:30:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `okul` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `eposta` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `kullaniciAdi` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `sifre` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `name`, `okul`, `eposta`, `kullaniciAdi`, `sifre`) VALUES
(1, 'ÖMER MERT TOSUN', 'ERCİYES ÜNİVERSİTESİ', 'omer@gmail.com', 'omer', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mentorler`
--

DROP TABLE IF EXISTS `mentorler`;
CREATE TABLE IF NOT EXISTS `mentorler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `kurum` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `ilgiAlani` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `eposta` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `kullaniciAdi` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `sifre` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `mentorler`
--

INSERT INTO `mentorler` (`id`, `adi`, `kurum`, `ilgiAlani`, `eposta`, `kullaniciAdi`, `sifre`) VALUES
(1, 'B. Aybars Gülensoy', 'Ankara Sanayi Odası Yetkinlik ve Dijital Dönüşüm Merkezi', 'Fotoğraf, Yalın Üretim, Dijital Dönüşüm', 'aybars@mf.com', 'aybars', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevular`
--

DROP TABLE IF EXISTS `randevular`;
CREATE TABLE IF NOT EXISTS `randevular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici` int(11) NOT NULL,
  `tarih` int(11) NOT NULL,
  `link` text COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `randevular`
--

INSERT INTO `randevular` (`id`, `kullanici`, `tarih`, `link`) VALUES
(1, 1, 1, 'deneme');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tarihler`
--

DROP TABLE IF EXISTS `tarihler`;
CREATE TABLE IF NOT EXISTS `tarihler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mentorId` int(11) NOT NULL,
  `baslangicTarihi` datetime NOT NULL,
  `etkinlikId` int(11) NOT NULL,
  `durum` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `tarihler`
--

INSERT INTO `tarihler` (`id`, `mentorId`, `baslangicTarihi`, `etkinlikId`, `durum`) VALUES
(1, 1, '2021-05-21 12:00:00', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
