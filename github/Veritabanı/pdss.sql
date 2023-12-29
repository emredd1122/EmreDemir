SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `pdss`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayakkabilar`
--

DROP TABLE IF EXISTS `ayakkabilar`;
CREATE TABLE IF NOT EXISTS `ayakkabilar` (
  `ayakkabi_id` int(3) NOT NULL AUTO_INCREMENT,
  `ayakkabi_turu` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ayakkabi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayakkabilar`
--

INSERT INTO `ayakkabilar` (`ayakkabi_id`, `ayakkabi_turu`) VALUES
(1, 'Klasik'),
(2, 'Rugan'),
(3, 'Süet'),
(4, 'Nubuk'),
(5, 'Bot');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adi` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kullanici_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `kullanici_adi`, `kullanici_sifre`) VALUES
(1, 'emredemir', '12345');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veriler`
--

DROP TABLE IF EXISTS `veriler`;
CREATE TABLE IF NOT EXISTS `veriler` (
  `veri_id` int(11) NOT NULL AUTO_INCREMENT,
  `ayakkabi_id` int(3) NOT NULL,
  `tarih` date NOT NULL,
  `satis_miktari` int(11) NOT NULL,
  `iade_miktari` int(11) NOT NULL,
  `stok_miktari` int(11) NOT NULL,
  `trend_orani` int(2) NOT NULL,
  PRIMARY KEY (`veri_id`),
  KEY `ayakkabi_id` (`ayakkabi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `veriler`
--

INSERT INTO `veriler` (`veri_id`, `ayakkabi_id`, `tarih`, `satis_miktari`, `iade_miktari`, `stok_miktari`, `trend_orani`) VALUES
(1, 1, '2019-01-01', 12438, 592, 1424, 42),
(2, 1, '2019-02-01', 10623, 452, 1623, 32),
(3, 1, '2019-03-01', 9284, 390, 1550, 21),
(4, 1, '2019-04-01', 10284, 442, 1253, 36),
(5, 1, '2019-05-01', 11852, 523, 1425, 40),
(6, 2, '2019-01-01', 1873, 121, 284, 17),
(7, 2, '2019-02-01', 1942, 423, 192, 21),
(8, 2, '2019-03-01', 2085, 142, 250, 22),
(9, 2, '2019-04-01', 2231, 155, 244, 24),
(10, 2, '2019-05-01', 2432, 170, 280, 27),
(11, 3, '2019-01-01', 417, 42, 243, 10),
(12, 3, '2019-02-01', 381, 34, 264, 7),
(13, 3, '2019-03-01', 512, 62, 213, 14),
(14, 3, '2019-04-01', 913, 84, 184, 27),
(15, 3, '2019-05-01', 3794, 152, 152, 64),
(16, 4, '2019-01-01', 6243, 452, 92, 52),
(17, 4, '2019-02-01', 6582, 524, 73, 49),
(18, 4, '2019-03-01', 6324, 420, 83, 54),
(19, 4, '2019-04-01', 6142, 403, 80, 57),
(20, 4, '2019-05-01', 6523, 1104, 91, 53),
(21, 5, '2019-01-01', 21523, 1242, 3123, 82),
(22, 5, '2019-02-01', 27532, 1524, 1423, 94),
(23, 5, '2019-03-01', 16249, 842, 823, 72),
(24, 5, '2019-04-01', 5432, 425, 524, 42),
(25, 5, '2019-05-01', 1423, 132, 320, 13);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `veriler`
--
ALTER TABLE `veriler`
  ADD CONSTRAINT `veriler_ibfk_1` FOREIGN KEY (`ayakkabi_id`) REFERENCES `ayakkabilar` (`ayakkabi_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
