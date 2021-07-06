-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Tem 2021, 12:44:48
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db_smyrna`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `id` tinyint(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `level` tinyint(4) NOT NULL,
  `showhomepage` tinyint(4) NOT NULL DEFAULT 1,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remove` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`id`, `title`, `description`, `level`, `showhomepage`, `image`, `status`, `remove`) VALUES
(1, 'Erkek', '', 0, 1, 'erkek.jpg', 0, 0),
(2, 'Lacoste', '<p>Lacoste Erkek Parfümü</p>', 1, 0, 'marka2.jpg', 0, 0),
(3, 'Kadın', '', 0, 1, 'kadin.jpg', 0, 0),
(4, 'Kenzo', '<p>Kenzo Kadın Parfümü</p>', 3, 0, 'marka1.jpg', 0, 1),
(5, 'Çocuk', '<p>Çocuk Parfüm Çeşitleri</p>', 0, 1, '5216.jpg', 0, 0),
(6, 'Aksesuar', '<p>Aksesuar Ürünlerimizi İnceleyin.</p>', 0, 1, 'pdp-fragrance-men-3-desktop.jpg', 0, 0),
(7, 'Parfüm Şişe', '<p>En güzel parfümler için şişeler..</p>', 6, 1, '5216 - Kopya.jpg', 0, 0),
(8, 'Kenzo', '<p>Kenzo parfümleri</p>', 3, 0, 'marka1.jpg', 0, 0),
(9, 'Chanel', '<p>Chanel Parfüm Çeşitleri</p>', 3, 0, 'marka3.jpg', 0, 0),
(10, 'Hediyelik', '<p>Hediye edeceğiniz ürünlerimiz</p>', 0, 1, 'hk_bg.jpg', 0, 0),
(11, 'Deodorant', '<p>Deodorant Çeşitlerimiz</p>', 0, 1, 'urun1.jpg', 0, 0),
(12, 'deneme', '<p>deneme</p>', 5, 0, '2.jpg', 0, 1),
(13, 'rolon', '', 11, 1, '2.jpg', 0, 0),
(14, 'odunsu koku', '', 13, 1, '', 0, 1),
(15, 'çam', '', 14, 1, '', 0, 1),
(16, 'Kenzo', '<p>Kenzo Erkek Parfümlerimiz</p>', 1, 1, '9522947391538.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content`
--

CREATE TABLE `content` (
  `id` tinyint(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `summary` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remove` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `content`
--

INSERT INTO `content` (`id`, `title`, `description`, `summary`, `status`, `remove`) VALUES
(1, 'Hakkımızda', '<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras volutpat dui ac nunc faucibus, ut semper justo dictum. Nullam id convallis mi. Curabitur neque est, luctus in velit at, pellentesque egestas elit. Phasellus eleifend consequat posuere.Nulla faucibus tristique sem eget placerat. Aenean sit amet facilisis arcu, eu pretium orci. Nam at est id purus volutpat laoreet. Praesent sit amet magna et nisi vulputate accumsan a ac orci. Integer rhoncus orci ac ex tempor ullamcorper. Mauris aliquam elit sed sem pharetra lobortis vitae in enim. Curabitur vel urna consectetur, porta purus vitae, mollis ipsum. Vestibulum facilisis non ex ut fermentum. Mauris arcu elit, porta pellentesque semper non, consequat ac neque. Pellentesque malesuada vestibulum mollis. Praesent sed nulla vel mi eleifend vulputate vitae ut mi. Duis dignissim, ipsum a ullamcorper commodo, enim tortor porta leo, nec varius ante nisi quis mi. Nunc suscipit eleifend sodales.</p>', '<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras volutpat dui ac nunc faucibus, ut semper justo dictum.&nbsp;</p><p>Nullam id convallis mi. Curabitur neque est, luctus in velit at, pellentesque egestas elit. Phasellus eleifend consequat posuere. Nulla faucibus tristique sem eget placerat. Aenean sit amet facilisis arcu, eu pretium orci. Nam at est id purus volutpat laoreet.</p>', 1, 0),
(2, 'Vizyon', '<p>Nullam fringilla arcu dui, sed ullamcorper augue fermentum eget. Pellentesque at odio quis tellus tincidunt porta ac id diam. Praesent fringilla, risus vitae facilisis aliquet, felis libero convallis diam, et efficitur nibh turpis eu dolor. Morbi eu tincidunt odio. Donec vitae dolor eu dolor hendrerit vulputate et nec arcu. Sed nec nisl sed massa tristique suscipit. Fusce ut est turpis. Mauris accumsan nunc vitae scelerisque vehicula. Vestibulum a lacinia nulla. Vestibulum aliquet bibendum pretium. Donec dapibus scelerisque lectus, in imperdiet ipsum lacinia dictum. Vivamus mattis sit amet mi quis dignissim. Nunc egestas ligula diam, nec dapibus ipsum vehicula sed. Vivamus gravida vehicula auctor.</p><p>Donec sagittis lorem ex, semper gravida tellus vulputate sit amet. Nulla lobortis orci vel felis laoreet, id euismod erat fringilla. Nam justo lacus, hendrerit et nisl vitae, finibus scelerisque mi. Praesent molestie erat tempor metus sagittis iaculis et nec libero. Integer finibus nibh nulla, id aliquam ex rhoncus sed. In faucibus metus ac dolor volutpat blandit. Integer at risus at eros pretium suscipit at sed magna. Aenean venenatis placerat orci vitae facilisis. Donec cursus mauris et dolor laoreet, non accumsan ligula imperdiet.</p>', '<p>Nullam fringilla arcu dui, sed ullamcorper augue fermentum eget. Pellentesque at odio quis tellus tincidunt porta ac id diam. Praesent fringilla, risus vitae facilisis aliquet, felis libero convallis diam, et efficitur nibh turpis eu dolor. Morbi eu tincidunt odio. Donec vitae dolor eu dolor hendrerit vulputate et nec arcu.</p>', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `description` text NOT NULL,
  `installment_options` text NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `stock` tinyint(4) NOT NULL DEFAULT 10,
  `age_range` varchar(255) NOT NULL,
  `best_product` tinyint(4) NOT NULL DEFAULT 1,
  `best_seller` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`id`, `title`, `summary`, `description`, `installment_options`, `price`, `sale_price`, `category`, `image`, `product_code`, `stock`, `age_range`, `best_product`, `best_seller`) VALUES
(4, 'Kenzo Homme', '<p>Esans: Meyveli, Oryantal Kenzo Pour Homme aromatik ve akuatik notalara sahip parfüm içeriği ve okyanus rengindeki şişe tasarımıyla vazgeçilmez bir klasik. Ferah ve dinamik nüanslarıyla Kenzo enerjik, modern ve sofistike erkeklere özgürlüğün ruhunu ve zevkini yansıtıyor. Tepe Notası: Adaçayı, Bergamot, Limon, Mahogani Kalp Notası: Hindistancevizi, Yasemin, Şeftali, Karanfil, Gül Dip Notası: Sandal, Amber, Misk, Vetiver, Sedir, Balsam</p>', '<p><strong>Cilt Tipleri</strong></p><p>Tüm cilt tipleri için uygundur.</p><p>&nbsp;</p><p><strong>Ürün Özellikleri</strong></p><p>Esans: Meyveli, Oryantal Kenzo Pour Homme aromatik ve akuatik notalara sahip parfüm içeriği ve okyanus rengindeki şişe tasarımıyla vazgeçilmez bir klasik. Ferah ve dinamik nüanslarıyla Kenzo enerjik, modern ve sofistike erkeklere özgürlüğün ruhunu ve zevkini yansıtıyor. Tepe Notası: Adaçayı, Bergamot, Limon, Mahogani Kalp Notası: Hindistancevizi, Yasemin, Şeftali, Karanfil, Gül Dip Notası: Sandal, Amber, Misk, Vetiver, Sedir, Balsam</p><p>&nbsp;</p><p><strong>Ürün Avantajları</strong></p><p>Günlük kullanıma uygundur.</p><p>&nbsp;</p><p><strong>Ürün Kullanımı</strong></p><p>Temiz tene ve kıyafete istenilen sıklıkta uygulanır.</p>', '<p>Taksitli alışveriş için sipariş tutarınız 300 TL ve üzerinde olmalıdır.</p><p>Yürürlükteki mevzuat gereğince, telekomünikasyon, kuyum, doğrudan pazarlama, yurtdışı harcamalar, yemek, gıda, kozmetik, ofis malzemesi, hediye kart ve hediye çeki gibi somut mal veya hizmet içermeyen ürünlere ilişkin alışverişlerde taksit uygulanamamaktadır.</p>', 588, 448, 16, '9522947391538.jpg', 'SMYRN1000', 100, '30-45', 0, 0),
(6, 'Kenzo Homme EDT 50 Ml', '<p>Esans: Meyveli, Oryantal Kenzo Pour Homme aromatik ve akuatik notalara sahip parfüm içeriği ve okyanus rengindeki şişe tasarımıyla vazgeçilmez bir klasik. Ferah ve dinamik nüanslarıyla Kenzo enerjik, modern ve sofistike erkeklere özgürlüğün ruhunu ve zevkini yansıtıyor. Tepe Notası: Adaçayı, Bergamot, Limon, Mahogani Kalp Notası: Hindistancevizi, Yasemin, Şeftali, Karanfil, Gül Dip Notası: Sandal, Amber, Misk, Vetiver, Sedir, Balsam</p>', '<p><strong>Cilt Tipleri</strong></p><p>Tüm cilt tipleri için uygundur.</p><p>&nbsp;</p><p><strong>Ürün Özellikleri</strong></p><p>Esans: Meyveli, Oryantal Kenzo Pour Homme aromatik ve akuatik notalara sahip parfüm içeriği ve okyanus rengindeki şişe tasarımıyla vazgeçilmez bir klasik. Ferah ve dinamik nüanslarıyla Kenzo enerjik, modern ve sofistike erkeklere özgürlüğün ruhunu ve zevkini yansıtıyor. Tepe Notası: Adaçayı, Bergamot, Limon, Mahogani Kalp Notası: Hindistancevizi, Yasemin, Şeftali, Karanfil, Gül Dip Notası: Sandal, Amber, Misk, Vetiver, Sedir, Balsam</p><p>&nbsp;</p><p><strong>Ürün Avantajları</strong></p><p>Günlük kullanıma uygundur.</p><p>&nbsp;</p><p><strong>Ürün Kullanımı</strong></p><p>Temiz tene ve kıyafete istenilen sıklıkta uygulanır.</p>', '<p>Taksitli alışveriş için sipariş tutarınız 300 TL ve üzerinde olmalıdır.</p><p>Yürürlükteki mevzuat gereğince, telekomünikasyon, kuyum, doğrudan pazarlama, yurtdışı harcamalar, yemek, gıda, kozmetik, ofis malzemesi, hediye kart ve hediye çeki gibi somut mal veya hizmet içermeyen ürünlere ilişkin alışverişlerde taksit uygulanamamaktadır.</p>', 588, 448, 16, '9522947391538.jpg', 'SMYRN1000', 100, '30-45', 0, 0),
(7, 'Kenzo Homme EDT 25 Ml', '<p>Esans: Meyveli, Oryantal Kenzo Pour Homme aromatik ve akuatik notalara sahip parfüm içeriği ve okyanus rengindeki şişe tasarımıyla vazgeçilmez bir klasik. Ferah ve dinamik nüanslarıyla Kenzo enerjik, modern ve sofistike erkeklere özgürlüğün ruhunu ve zevkini yansıtıyor. Tepe Notası: Adaçayı, Bergamot, Limon, Mahogani Kalp Notası: Hindistancevizi, Yasemin, Şeftali, Karanfil, Gül Dip Notası: Sandal, Amber, Misk, Vetiver, Sedir, Balsam</p>', '<p><strong>Cilt Tipleri</strong></p><p>Tüm cilt tipleri için uygundur.</p><p>&nbsp;</p><p><strong>Ürün Özellikleri</strong></p><p>Esans: Meyveli, Oryantal Kenzo Pour Homme aromatik ve akuatik notalara sahip parfüm içeriği ve okyanus rengindeki şişe tasarımıyla vazgeçilmez bir klasik. Ferah ve dinamik nüanslarıyla Kenzo enerjik, modern ve sofistike erkeklere özgürlüğün ruhunu ve zevkini yansıtıyor. Tepe Notası: Adaçayı, Bergamot, Limon, Mahogani Kalp Notası: Hindistancevizi, Yasemin, Şeftali, Karanfil, Gül Dip Notası: Sandal, Amber, Misk, Vetiver, Sedir, Balsam</p><p>&nbsp;</p><p><strong>Ürün Avantajları</strong></p><p>Günlük kullanıma uygundur.</p><p>&nbsp;</p><p><strong>Ürün Kullanımı</strong></p><p>Temiz tene ve kıyafete istenilen sıklıkta uygulanır.</p>', '<p>Taksitli alışveriş için sipariş tutarınız 300 TL ve üzerinde olmalıdır.</p><p>Yürürlükteki mevzuat gereğince, telekomünikasyon, kuyum, doğrudan pazarlama, yurtdışı harcamalar, yemek, gıda, kozmetik, ofis malzemesi, hediye kart ve hediye çeki gibi somut mal veya hizmet içermeyen ürünlere ilişkin alışverişlerde taksit uygulanamamaktadır.</p>', 588, 448, 16, '9522947391538.jpg', 'SMYRN1000', 100, '30-45', 0, 0),
(8, 'Kenzo Homme EDT 250 Ml', '<p>Esans: Meyveli, Oryantal Kenzo Pour Homme aromatik ve akuatik notalara sahip parfüm içeriği ve okyanus rengindeki şişe tasarımıyla vazgeçilmez bir klasik. Ferah ve dinamik nüanslarıyla Kenzo enerjik, modern ve sofistike erkeklere özgürlüğün ruhunu ve zevkini yansıtıyor. Tepe Notası: Adaçayı, Bergamot, Limon, Mahogani Kalp Notası: Hindistancevizi, Yasemin, Şeftali, Karanfil, Gül Dip Notası: Sandal, Amber, Misk, Vetiver, Sedir, Balsam</p>', '<p><strong>Cilt Tipleri</strong></p><p>Tüm cilt tipleri için uygundur.</p><p>&nbsp;</p><p><strong>Ürün Özellikleri</strong></p><p>Esans: Meyveli, Oryantal Kenzo Pour Homme aromatik ve akuatik notalara sahip parfüm içeriği ve okyanus rengindeki şişe tasarımıyla vazgeçilmez bir klasik. Ferah ve dinamik nüanslarıyla Kenzo enerjik, modern ve sofistike erkeklere özgürlüğün ruhunu ve zevkini yansıtıyor. Tepe Notası: Adaçayı, Bergamot, Limon, Mahogani Kalp Notası: Hindistancevizi, Yasemin, Şeftali, Karanfil, Gül Dip Notası: Sandal, Amber, Misk, Vetiver, Sedir, Balsam</p><p>&nbsp;</p><p><strong>Ürün Avantajları</strong></p><p>Günlük kullanıma uygundur.</p><p>&nbsp;</p><p><strong>Ürün Kullanımı</strong></p><p>Temiz tene ve kıyafete istenilen sıklıkta uygulanır.</p>', '<p>Taksitli alışveriş için sipariş tutarınız 300 TL ve üzerinde olmalıdır.</p><p>Yürürlükteki mevzuat gereğince, telekomünikasyon, kuyum, doğrudan pazarlama, yurtdışı harcamalar, yemek, gıda, kozmetik, ofis malzemesi, hediye kart ve hediye çeki gibi somut mal veya hizmet içermeyen ürünlere ilişkin alışverişlerde taksit uygulanamamaktadır.</p>', 588, 448, 16, '9522947391538.jpg', 'SMYRN1000', 100, '30-45', 0, 0),
(9, 'Kenzo Homme EDT 500 Ml', '<p>Esans: Meyveli, Oryantal Kenzo Pour Homme aromatik ve akuatik notalara sahip parfüm içeriği ve okyanus rengindeki şişe tasarımıyla vazgeçilmez bir klasik. Ferah ve dinamik nüanslarıyla Kenzo enerjik, modern ve sofistike erkeklere özgürlüğün ruhunu ve zevkini yansıtıyor. Tepe Notası: Adaçayı, Bergamot, Limon, Mahogani Kalp Notası: Hindistancevizi, Yasemin, Şeftali, Karanfil, Gül Dip Notası: Sandal, Amber, Misk, Vetiver, Sedir, Balsam</p>', '<p><strong>Cilt Tipleri</strong></p><p>Tüm cilt tipleri için uygundur.</p><p>&nbsp;</p><p><strong>Ürün Özellikleri</strong></p><p>Esans: Meyveli, Oryantal Kenzo Pour Homme aromatik ve akuatik notalara sahip parfüm içeriği ve okyanus rengindeki şişe tasarımıyla vazgeçilmez bir klasik. Ferah ve dinamik nüanslarıyla Kenzo enerjik, modern ve sofistike erkeklere özgürlüğün ruhunu ve zevkini yansıtıyor. Tepe Notası: Adaçayı, Bergamot, Limon, Mahogani Kalp Notası: Hindistancevizi, Yasemin, Şeftali, Karanfil, Gül Dip Notası: Sandal, Amber, Misk, Vetiver, Sedir, Balsam</p><p>&nbsp;</p><p><strong>Ürün Avantajları</strong></p><p>Günlük kullanıma uygundur.</p><p>&nbsp;</p><p><strong>Ürün Kullanımı</strong></p><p>Temiz tene ve kıyafete istenilen sıklıkta uygulanır.</p>', '<p>Taksitli alışveriş için sipariş tutarınız 300 TL ve üzerinde olmalıdır.</p><p>Yürürlükteki mevzuat gereğince, telekomünikasyon, kuyum, doğrudan pazarlama, yurtdışı harcamalar, yemek, gıda, kozmetik, ofis malzemesi, hediye kart ve hediye çeki gibi somut mal veya hizmet içermeyen ürünlere ilişkin alışverişlerde taksit uygulanamamaktadır.</p>', 588, 448, 16, '9522947391538.jpg', 'SMYRN1000', 100, '30-45', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remove` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`, `remove`) VALUES
(1, 'admin', '1234', 0, 0),
(2, 'root', '4321', 0, 0),
(3, 'asd', 'asd', 0, 1),
(4, 'qwe', 'qwe', 0, 1),
(5, 'zxc', 'zxc', 0, 1),
(6, 'asd', 'asd', 0, 0),
(7, 'admin', '1234', 0, 1),
(8, 'administrator', '1234', 0, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `content`
--
ALTER TABLE `content`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
