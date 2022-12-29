-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Ara 2022, 18:27:06
-- Sunucu sürümü: 8.0.30
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dipyatirim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisimId` int NOT NULL,
  `adi_soyadi` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `konu` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisimId`, `adi_soyadi`, `email`, `konu`, `mesaj`) VALUES
(1, 'asdasd', 'asda@gdsaf.com', 'sadada', 'ASDASDAD'),
(2, 'asdasd', 'asda@gdsaf.com', 'SAD', 'SADAD'),
(3, 'asd', 'asda@gdsaf.com', 'asd', 'asda'),
(4, 'asdasd', 'asda@gdsaf.com', 'SAD', 'asd'),
(5, 'asd', 'asda@gdsaf.com', 'asdsa', 'asdad'),
(6, 'asdasd', 'asda@gdsaf.com', 'sadada', 'asdasdad'),
(7, 'asdasd', 'asda@gdsaf.com', '211123', '1231wqd12d12'),
(8, 'asdasd', 'asda@gdsaf.com', '211123', '1231wqd12d12'),
(9, 'asdasd', 'asda@gdsaf.com', '211123', '1231wqd12d12'),
(10, 'asdasd', 'asda@gdsaf.com', '211123', '1231wqd12d12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rapor_icerik`
--

CREATE TABLE `rapor_icerik` (
  `icerikId` int NOT NULL,
  `icerik_knm_adi` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `rapor_icerik`
--

INSERT INTO `rapor_icerik` (`icerikId`, `icerik_knm_adi`, `icerik`) VALUES
(1, 'Rapor konumu', 'Güncel araştırma raporlarımıza Dip Yatırım Araştırma sitesinden ulaşabilirsiniz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `uyeId` int NOT NULL,
  `uyeAdi` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `uyeSoyadi` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullaniciAdi` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullaniciSifre` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uyeId`, `uyeAdi`, `uyeSoyadi`, `kullaniciAdi`, `email`, `kullaniciSifre`) VALUES
(53, 'admin', 'root', 'Rootadmin1', 'ahmet@gmail.com', '$2y$10$3vWHav2AxR838CB04JJIy.NP2sz8vLr75eZ.uvH8d8gT.OBR.hkva'),
(70, 'Ahmet', 'asdfghjkl', 'Ahmet123', 'ahmet@gmail.com', '$2y$10$bwsonaaD1QzPAsSOMlXsWOif3EXosiYDYFCESpGm.vrMQtneA9Gfq');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisimId`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uyeId`),
  ADD UNIQUE KEY `kullaniciAdi` (`kullaniciAdi`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisimId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uyeId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
