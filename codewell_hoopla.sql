-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 09:05 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codewell_hoopla`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_about`
--

CREATE TABLE `hoopla_about` (
  `idABOUT` int(11) NOT NULL,
  `title1ABOUT` varchar(70) NOT NULL,
  `desc1ABOUT` text NOT NULL,
  `title2ABOUT` varchar(70) NOT NULL,
  `desc2ABOUT` text NOT NULL,
  `link2ABOUT` varchar(100) NOT NULL,
  `title3ABOUT` varchar(70) NOT NULL,
  `desc3ABOUT` text NOT NULL,
  `link3ABOUT` varchar(100) NOT NULL,
  `title4ABOUT` varchar(70) NOT NULL,
  `desc4ABOUT` text NOT NULL,
  `link4ABOUT` varchar(100) NOT NULL,
  `createdateABOUT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateABOUT` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_about`
--

INSERT INTO `hoopla_about` (`idABOUT`, `title1ABOUT`, `desc1ABOUT`, `title2ABOUT`, `desc2ABOUT`, `link2ABOUT`, `title3ABOUT`, `desc3ABOUT`, `link3ABOUT`, `title4ABOUT`, `desc4ABOUT`, `link4ABOUT`, `createdateABOUT`, `updatedateABOUT`) VALUES
(1, 'Kalo bisa rental,  ngapain beli?', 'Hoopla merupakan penyedia jasa rental mainan serta perlengkapan bayi dan anak khusus buat anda yang berada di Kota Batam. Didirikan pada tahun 2016 lalu, Hoopla berkomitmen untuk terus dapat memberikan pelayanan terbaik dengan menyediakan produk-produk unggulan untuk menyenangkan buah hati anda, dan sesuai dengan motto kami: We deliver happiness to your home.', 'Kenapa harus menyewa?', 'Ada banyak alasan bagus kenapa kamu sebaiknya menyewa daripada membeli. Alasan pastinya, silakan ikuti link di bawah ini.', 'http://www.hooplarentalmainan.com/test/why/', 'That\'s all it!', 'Mau sewa mainan di Hoopla? Gampang banget caranya!', 'http://www.hooplarentalmainan.com/test/terms', 'Masih kurang?', 'Hoopla punya paket-paket menarik yang kami jamin it will save you a lot. Mau tahu paket-paket menarik yang ada di Hoopla?', 'http://www.hooplarentalmainan.com/test/product', '2017-10-16 13:46:43', '2017-11-17 04:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_age_join_rental`
--

CREATE TABLE `hoopla_age_join_rental` (
  `idAGEJOINRENTAL` int(11) NOT NULL,
  `idRENTAL` int(11) NOT NULL,
  `idAGE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_age_join_rental`
--

INSERT INTO `hoopla_age_join_rental` (`idAGEJOINRENTAL`, `idRENTAL`, `idAGE`) VALUES
(10, 1, 1),
(11, 3, 2),
(12, 4, 1),
(13, 5, 2),
(14, 6, 2),
(15, 7, 3),
(16, 8, 4),
(17, 9, 4),
(18, 10, 4),
(19, 11, 4),
(20, 12, 4),
(21, 13, 3),
(22, 14, 4),
(23, 15, 2),
(24, 16, 4),
(25, 17, 2),
(26, 18, 4),
(27, 19, 4),
(28, 20, 7),
(29, 21, 4),
(30, 22, 4),
(31, 23, 2),
(32, 24, 2),
(33, 25, 2),
(34, 26, 5),
(35, 27, 4),
(36, 28, 7),
(37, 29, 2),
(38, 30, 4),
(39, 31, 4),
(40, 32, 5),
(41, 33, 3),
(42, 33, 4),
(43, 34, 5),
(44, 34, 7),
(45, 35, 7),
(46, 36, 7),
(47, 36, 5),
(48, 37, 7),
(49, 37, 5),
(50, 38, 7),
(51, 38, 5),
(52, 39, 5);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_age_rental`
--

CREATE TABLE `hoopla_age_rental` (
  `idAGE` int(11) NOT NULL,
  `namaAGE` varchar(70) NOT NULL,
  `statusAGE` int(1) NOT NULL,
  `createdateAGE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateAGE` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_age_rental`
--

INSERT INTO `hoopla_age_rental` (`idAGE`, `namaAGE`, `statusAGE`, `createdateAGE`, `updatedateAGE`) VALUES
(1, 'For Mom', 1, '2017-10-02 13:33:54', '2017-11-01 02:38:13'),
(2, '0-4 Months', 1, '2017-10-02 13:34:05', '2017-11-01 10:01:28'),
(3, '4-6 Months', 1, '2017-11-04 08:05:00', NULL),
(4, '6-12 Months', 1, '2017-11-04 08:12:25', NULL),
(5, '12-18 Months', 1, '2017-11-04 08:25:12', NULL),
(6, '1-2 Years', 1, '2017-11-04 12:59:43', NULL),
(7, '2-3 Years', 1, '2017-11-04 12:59:54', NULL),
(8, '3-5 Years', 1, '2017-11-07 10:06:03', NULL),
(9, '5-7 Years', 1, '2017-11-07 10:06:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_barang_rental`
--

CREATE TABLE `hoopla_barang_rental` (
  `idRENTAL` int(11) NOT NULL,
  `idBRAND` int(11) NOT NULL,
  `idTYPE` int(11) NOT NULL,
  `namaRENTAL` varchar(70) NOT NULL,
  `harga2RENTAL` varchar(50) NOT NULL,
  `harga4RENTAL` varchar(50) NOT NULL,
  `descriptionRENTAL` text NOT NULL,
  `createdateRENTAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateRENTAL` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusRENTAL` int(1) NOT NULL,
  `popularRENTAL` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_barang_rental`
--

INSERT INTO `hoopla_barang_rental` (`idRENTAL`, `idBRAND`, `idTYPE`, `namaRENTAL`, `harga2RENTAL`, `harga4RENTAL`, `descriptionRENTAL`, `createdateRENTAL`, `updatedateRENTAL`, `statusRENTAL`, `popularRENTAL`) VALUES
(1, 1, 1, 'Bellefit Corset Size M', '170000', '240000', '<p style=\"text-align: justify;\">Mom tidak pede lingkar perut belum kembali seperti semula pasca melahirkan?! Bellefit solusinya! Bellefit corset bisa dipakai untuk persalinan csection dan normal. Bukaannya ada di bagian depan dengan model kait. Ada 2 kaitan sehingga dapat disesuaikan jika lingkar perut sudah mengecil.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p>&nbsp;Fitur :</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Bentuknya menyerupai celana dan dapat menjangkau hingga bawah payudara. Sehingga dapat menutupi seluruh perut</li>\r\n<li>Modelnya seperti celana jadi tidak mudah bergeser alias pakem di perut</li>\r\n<li>Terdapat pengait di bagian bawah, jadi memudahkan mom untuk buang air tanpa harus ribet melepas keseluruhan corset</li>\r\n<li>Terdapat 2 pengait yangdapat disesuaikan dengan linkar perut</li>\r\n<li>Bahan &ldquo;breathable&rdquo; sehingga nyaman dan tidak panas</li>\r\n<li>Latexfree dan hypoallerenic sehingga mencegah ruam-ruam dan atal jika kulit mom sensitif</li>\r\n<li>Terbukti banyak review postif terkaitkeberhasilan dari corset ini</li>\r\n</ul>', '2017-09-26 13:58:43', '2017-11-23 04:48:19', 1, 0),
(3, 3, 2, 'Nuna Leaf (Sky Blue)', '125000', '180000', '<p xss=removed>Dengan desain yang mewah dan elegan, Nuna leaf terinspirasi oleh gerakan daun yang tertiup angin sepoi-sepoi. Desainnya yang unik memang sengaja diciptakan berdasarkan sudut pandang bayi. Gerakan bouncer ini juga tidak berisik karena tanpa baterai/listrik/kabel, anda cukup mengayunkannya dan nuna leaf dapat bergerak secara langsung tanpa bantuan orang lain dengan ayunan yang lembut selama lebih dari 2 menit. Nunaleaf terbuat dari 100?han katun organik yang lembut dan ringan sehingga memberikan kenyamanan bagi si kecil. Dilengkapi pula dengan 3 safety-points untk keamanan bayi anda. Saran Penggunaan : Cocok untuk bayi baru lahir hingga berat maks 60 kg.</p>', '2017-09-27 13:16:55', '2017-11-19 13:15:34', 1, 1),
(4, 2, 1, 'Bellybuds', '80000', '120000', 'Tahukah Anda bahwa bayi dalam kandungan dapat tumbuh dan berkembang dengan mendengar sejak usia minggu ke 20, lalu pada minggu ke 30 sudah bisa merekam apa yang didengarnya.\r\nBellybuds dirancang khusus dan aman untuk ibu hamil dengan belt less design. Bellybuds dapat disambungkan dengan music portable untuk memperkenalkan musik klasik, ayat-ayat suci atau suara yang diinginkan secara langsung pada kandungan. Bellybuds memiliki ukuran yang praktis sehingga dapat digunakan kapan dan di mana saja Anda mau. \r\n\r\nFitur :\r\n1. Terdapat 2 modular bellyphones lembut yang mengikuti lengkungan perut seiring pertumbuhan janin\r\n2. Terdapat dual-sided skin safe sehingga alat ini nyaman digunakan oleh mom\r\n3. Hasil suara jernih sehingga dapat didengar dengan baik oleh si kecil\r\n4.  Terdapat audio splitter sehingga mom dapat mendengar apa yang sedang didengar oleh bayi dalam kandungan. Dan mom dapat menikmati alunan musik klasik atau ayat2 suci bersama dengan si kecil.\r\n5. Dilengkapi pengaturan volume pada headsetnya\r\n6. Dilengkapi dengan pouch cantik agar mudah dibawa kemana2 dan tidak tercecer', '2017-10-04 13:23:34', '2017-11-04 05:11:58', 1, 1),
(5, 4, 2, 'Bouncer Baby Elle', '60000', '90000', 'Fitur :\r\n- Dapat diatur 2 posisi , yaitu duduk dan sedikit tidur.\r\n- Bar mainan yang dapat dilepas.\r\n- Terdapat 3 titik pengaman.\r\n- Dengan kursi yang besar dan empuk memberikan kenyamanan untuk buah hati anda.\r\n- Dilengkapi dengan 7 melodi yang indah dan getaran untuk menenangkan buah hati anda.\r\n\r\nSaran Penggunaan : Dapat digunakan untuk newborn sampai berat maksimum 11 kg', '2017-11-04 08:06:08', '0000-00-00 00:00:00', 1, 0),
(6, 5, 2, 'Bouncer Sugar Baby', '55000', '85000', 'Sugar Baby Bouncer Premium Rocker Circus merupakan tempat tidur untuk bayi mulai dari newborn sampai dengan berat maksimal 20 kg yang di desain fun & playful. Baby bouncer ini dirancang sebagai ayunan serta dapat diaplikasikan sebagai kursi dan memiliki safety belt, 3 posisi sandaran, bar mainan yang dapat dilepas, bantal  dan canopy untuk melindungi bayi dari cahaya terang sinar matahari sehingga dapat pula digunakan untuk aktivitas menjemur bayi di pagi hari. Dengan bouncer ini aktivitas bermain si kecil pun menjadi lebih menyenangkan.', '2017-11-04 08:15:06', '0000-00-00 00:00:00', 1, 0),
(7, 6, 3, 'Ergobaby 360 Original', '165000', '225000', 'Ergobaby 360 dengan desain stylish dan ergonomis bagi orangtua agar tidak gampang pegal dan lelah saat menggendong bayi. Ergobaby adalah salah satu baby carrier terbaik di dunia, karena di desain dengan sangat ergonomis sehingga nyaman untuk bayi, serta  juga sudah diakui oleh International Hip Dysplasia Institute sebagai baby carrier yang aman untuk pinggul bayi. Ergobaby juga nyaman untuk bayi dengan bahan yang lembut 100% katun. \r\n\r\nFitur :\r\n1. Memberikan kepraktisan dan kemudahan pada saat berpergian bersama si kecil\r\n2. Dengan pendistribusian berat yang merata akan membuat orang tua menggendong dengan nyaman karena tidak merasa pegal.\r\n3. Memiliki 4 buah posisi yang dapat dirubah sesuai dengan kenyamanan orang tua dan bayi, yaitu gendong menghadap ke dalam (front-inward), gendong menghadap ke luar (front-outward), gendong menyamping (hip) dan gendong belakang (back)\r\n4. Terdapat sabuk pinggang yang empuk untuk menopang badan bayi dengan nyaman\r\n5. Tali bagian bahu yang empuk untuk memberikan kenyamanan tertinggi\r\n6. Terdapat penutup kepala untuk memberikan kenyamanan si kecil saat tidur, melindungi si kecil dari \r\nsinar matahari dan memberikan privasi saat Ibu menyusui si kecil\r\n\r\nSaran Penggunaan : \r\n1. Dapat digunakan untuk bayi yang sudah bisa menopang kepalanya sendiri sampai maksimal berat badan 20 kg\r\n2. Untuk usia newborn sampai 3 bulan dapat menggunakan fitur tambahan yaitu infant insert (Hoopla tidak menyediakan infant insert)', '2017-11-04 08:29:39', '0000-00-00 00:00:00', 1, 1),
(8, 7, 3, 'Pockit Cocolatte CL788 (Tosca)', '145000', '185000', 'Stroller pockit portable yang dapat diatur 2 posisi dan praktis ini cocok digunakan untuk berpergian, olahraga atau sekedar berjalan-jalan di mall dan taman. Dibuat dari bahan berkualitas terbaik agar si kecil nyaman. Anda sekarang tidak perlu repot menggendong si kecil yang semakin besar. \r\n\r\nKelebihan Pockit CL788 :\r\n1. Rangka yang ringan. Berat hanya 4.4 kg. Dimensi ketika dilipat 38x19x33 cm\r\n2. Mudah dimasukkan ke dalam kabin pesawat, mobil, bawah kursi dan hand carry\r\n3. Mudah digunakan dan dapat dilipat dengan cepat\r\n4. Sabuk pengaman 5 titik yang dapat menjaga bayi tetap aman\r\n5. Bisa diatur posisi duduk sebanyak 2 posisi. \r\n6. Terdapat senderan tempat duduk dan canopy \r\n\r\nSaran penggunaan :  Untuk bayi 6 bulan (sudah bisa duduk) hingga 3 tahun (maksimum berat 20kg)', '2017-11-04 13:02:24', '0000-00-00 00:00:00', 1, 0),
(9, 8, 4, 'Fisher Price Jumperoo Rain Forest', '115000', '170000', 'Si kecil dapat bermain melompat-lompat, menendang-nendang sehingga dapat membantu mengasah kemampuan motoriknya. Selain itu, kursi dapat berputar 360° sehingga si kecil dapat bermain dan berinteraksi dari berbagai arah dan banyak pula aktivitas meyenangkan lainnya karena si kecil ditemani figur hewan yang lucu, tombol permainan dengan lampu, suara dan musik serta banyak lagi! Warna-warna cerah serta musik-musik yang ceria dapat meningkatkan visualisasi dan pendengaran bayi.\r\n\r\nSARAN PENGGUNAAN:\r\n1. Dirancang untuk anak yang sudah dapat menopang kepalanya sendiri namun belum dapat memanjat ataupun berjalan.\r\n2. Digunakan untuk bayi dengan tinggi maksimum 81 cm dan berat maksimum 11.3 kg.', '2017-11-04 13:07:51', '0000-00-00 00:00:00', 1, 0),
(10, 9, 5, 'Bright Starts Around We Go Zippity Zoo', '135000', '210000', 'Around We Go memenangkan penghargaan untuk satu-satunya produk dari jenisnya yang dirancang untuk mengikuti pertumbuh bayi  hingga balita. Menampilkan kursi  inovatif yang dapat berputar 360 derajat mengelilingi meja aktivitas yang dapat menunjang otak serta motorik bayi.Bayi memiliki akses penuh untuk berinteraksi  ke semua mainan dan kegiatan pada meja aktivitas. Kursi berputar dapat dilepas dan meja aktifitas dapat digunakan oleh balita. Terdapat banyak mainan yang pastinya dapat menyenangkan si kecil karena dilengkapi pula dengan musik dan suara yang ceria. \r\n\r\nSaran Penggunaan :\r\n1. Kursi aktivitas dapat dipakai dari usia 6 bulan dan berat maksimal 11.3 kg. \r\n2. Meja aktivitas dapat dipakai untuk balita.', '2017-11-04 13:14:46', '2017-11-04 13:23:18', 1, 1),
(11, 9, 5, 'Bright Starts Around We Go Doodle BUgs', '135000', '210000', 'Around We Go memenangkan penghargaan untuk satu-satunya produk dari jenisnya yang dirancang untuk mengikuti pertumbuh bayi  hingga balita. Menampilkan kursi  inovatif yang dapat berputar 360 derajat mengelilingi meja aktivitas yang dapat menunjang otak serta motorik bayi.Bayi memiliki akses penuh untuk berinteraksi  ke semua mainan dan kegiatan pada meja aktivitas. Kursi berputar dapat dilepas dan meja aktifitas dapat digunakan oleh balita. Terdapat banyak mainan yang pastinya dapat menyenangkan si kecil karena dilengkapi pula dengan musik dan suara yang ceria. \r\n\r\nSaran Penggunaan :\r\n1. Kursi aktivitas dapat dipakai dari usia 6 bulan dan berat maksimal 11.3 kg. \r\n2. Meja aktivitas dapat dipakai untuk balita.', '2017-11-04 13:20:23', '0000-00-00 00:00:00', 1, 0),
(12, 9, 5, 'Bright Starts Around We Go Tropical Fun', '135000', '195000', 'Around We Go memenangkan penghargaan untuk satu-satunya produk dari jenisnya yang dirancang untuk mengikuti pertumbuh bayi  hingga balita. Menampilkan kursi  inovatif yang dapat berputar 360 derajat mengelilingi meja aktivitas yang dapat menunjang otak serta motorik bayi.Bayi memiliki akses penuh untuk berinteraksi  ke semua mainan dan kegiatan pada meja aktivitas. Kursi berputar dapat dilepas dan meja aktifitas dapat digunakan oleh balita. Terdapat banyak mainan yang pastinya dapat menyenangkan si kecil karena dilengkapi pula dengan musik dan suara yang ceria. \r\n\r\nSaran Penggunaan :\r\n1. Kursi aktivitas dapat dipakai dari usia 6 bulan dan berat maksimal 11.3 kg. \r\n2. Meja aktivitas dapat dipakai untuk balita.', '2017-11-04 13:26:26', '0000-00-00 00:00:00', 1, 0),
(13, 10, 6, 'Summer Infant 3-Stage Super Seat', '60000', '90000', 'Summer Infant 3 Stage Super Seat menawarkan kursi bayi (cocok untuk latihan duduk dan pemberian mpasi) kursi bermain dengan meja berputar 360? & booster seat semua dalam satu produk. Super seat ini dirancang dengan empat mainan lucu mengelilingi tray yang dapat dilepas dari Super seat. Dilengkapi juga soft foam support  dan 3 point harness sehingga nyaman dan aman untuk si kecil.\r\n\r\nKursi ini dapat digunakan dalam tiga tahap pertumbuhan anak :\r\nTAHAP 1: Infant support seat – kursi penopang dengan pelapis empuk untuk bayi yang sedang belajar duduk. \r\nTAHAP 2: Floor time activity seat – tersedia meja yang dapat diputar 360?, meja snack yang dapat dilepas pasang dan termasuk  mainan untuk melatih motorik bayi.\r\nTAHAP 3: Booster seat – untuk anak yang lebih besar, lepaskan lapisan kursi pendukung, kursi dapat diikat pada kursi dewasa agar anak dapat makan bersama keluarga dimeja makan.Terdapat tali pengaman untuk bayi dan juga tali pengaman saat booster seat diikat pada kursi dewasa\r\n\r\nSaran penggunaan: \r\n1. 5 bulan sampai berat anak 13 kg\r\n2. Soft Foam Support Seat & Activity Seat – Cocok jika bayi anda sudah dapat menopang kepalanya tanpa dibantu. \r\n3. Booster Seat – Cocok untuk balita', '2017-11-04 13:31:19', '0000-00-00 00:00:00', 1, 0),
(14, 10, 6, 'Deluxe Comfort Folding Booster Seat', '45000', '70000', 'Untuk mempermudah melatih anak makan sendiri, diperlukan adanya kursi. Anak yang belum bisa duduk dengan benar namun sudah ingin makan sendiri, memerlukan kursi agar dia lebih mudah bersandar. Cukup repot jika harus memegangi si kecil terus menerus sementara kita harus memperhatikan cara makannya. Summer Deluxe Comfort Folding Booster Seat dapat dipakai untuk bersantai maupun saat sedang makan. Booster Seat ini juga dapat diikatkan ke bangku orang dewasa sehingga si kecil pun bisa makan bersama di meja makan. Produk ini pun juga mudah dibawa saat berpergian ataupun saat disimpan karena bisa dilipat sehingga tidak memakan tempat.\r\n\r\nFitur :\r\n1. Bisa diatur dalam 2 ketinggian\r\n2. Dilengkapi dengan tray yang bisa diatur dalam 3 posisi (maju mundur)\r\n3. Tray bisa dilepas\r\n4. Kursi bisa dilipat sehingga dapat dibawa travelling\r\n5. Dilengkapi tali pengikat ke kursi dudukan\r\n6. Dilengkapi tali pengaman untuk bayi\r\n\r\nSaran penggunaan : Bisa dipakai untuk bayi dengan berat badan maksimal 15kg', '2017-11-04 14:09:58', '0000-00-00 00:00:00', 1, 0),
(15, 11, 4, 'Evenflo Exersaucer Triple Fun', '145000', '210000', 'ExerSaucer menawarkan tiga bentuk yang berbeda yang dapat disesuaikan dengan usia bayi 0 sampai 24 bulan dan dapat digunakan melatih kekuatan kaki, punggung dan otot leher bayi. Tiga bentuk yang ditawarkan adalah Playmat, Activity Centre dan Activity Table. Bayi memiliki akses penuh untuk berinteraksi dengan mainan yang disediakan. Terdapat 11 mainan sesuai usia dan musik yang menyenangkan membantu bayi mencapai 10 tonggak perkembangan seperti keterampilan motorik halus, eksplorasi objek, pengembangan taktil dan banyak lagi. \r\n1. Tahap pertama : Playmat dapat digunakan untuk bayi usia 0-4 bulan, dimana si kecil dapat belajar meraih mainan di atasnya dengan melihat karakter hewan yang menyenangkan\r\n2. Tahap kedua : Activity Centre, bayi dapat berputar 360 derajat mengelilingi meja aktivitas yang dapat menunjang perkembangan otak serta motorik bayi. Serta bayi dapat meloncat-loncat dengan saucer di bagian bawahnya sehingga Anda tidak perlu khawatir kaki bayi terbentur lantai. ExerSaucer ini memiliki 3 pengaturan level ketinggian yang dapat disesuaikan dengan mudah\r\n3. Tahap ketiga : Activity Table, bayi dapat bermain dan mengekplorasi mainan dan musik yang menyenangkan dengan posisi meja memanjang\r\n\r\nSaran Penggunaan :\r\n1. Posisi Playmat cocok untuk bayi berusia 0-4 bulan.\r\n2. Posisi Activity Center cocok untuk bayi berusia 4 bulan hingga usia belajar berjalan.\r\n3. Posisi Activity Table cocok untuk bayi dalam usia belajar berjalan hingga 24 bulan.', '2017-11-04 14:21:00', '0000-00-00 00:00:00', 1, 0),
(16, 12, 5, 'Vtech Grow And Go Piano Walker', '55000', '85000', 'Baby Walker multifungsi bisa didorong untuk melatih bayi anda berjalan dan bisa dimainkan sambil duduk sebagai piano dengan tombol2 suara dan tombol yang melatih motorik halus anak Anda. Terdapat kemudi kecil dan kaca spion unik seolah-olah si kecil sedang mengendarai mobil. Meja activity dapat dilepas dan dimainkan terpisah sambil duduk.\r\n\r\nFitur:\r\n1. Piano dengan lampu Setir + roller ball\r\n2. 3 mode bermain yang berbeda mengajarkan suara hewan, warna, huruf, angka dan bentuk.\r\n3. Dilengkapi suara dan musik ceria\r\n4. Terdapat rem yang dapat dioperasikan oleh orang tua\r\n\r\nSaran Penggunaan :\r\n1. Piano dapat dapat dilepas dan dimainkan untuk bayi yang belum dapat berdiri.\r\n2. Walker dapat digunakan untuk bayi yang sudah dapat berdiri.', '2017-11-04 14:33:44', '0000-00-00 00:00:00', 1, 0),
(17, 7, 7, 'Car Seat Cocolatte CL 888', '115000', '155000', 'Cocolatte Car Seat CL 888 adalah kursi yang dapat dipasangkan di mobil untuk kenyamanan dan keamanan si kecil saat berada di mobil. Car seat ini dibuat dari bahan yang empuk dan lembut serta ergonomis dengan bentuk tubuh si kecil. Dapat digunakan mulai dari newborn sampai 3 tahun.\r\n\r\nFitur :\r\n1. Group 0/2 (untuk anak berat 0-25 kg) \r\n2. Sandaran dapat diatur (3 posisi)\r\n3. Tali bahu dapat diatur\r\n4. Perlindungan pada kepala bayi\r\n5. 5 titik sabuk pengaman\r\n6. Bentuk ergonomis\r\n7. The European quality certificates ECE 44/04 \r\n\r\nSaran Penggunaaan : Dapat digunakan mulai dari newborn sampai 3 tahun dengan berat badan maksimal 25 kg.', '2017-11-07 09:53:06', '0000-00-00 00:00:00', 1, 0),
(18, 8, 5, 'Step N Play Piano', '155000', '225000', 'Tunjang perkembangan otak serta motorik buah hati Anda dengan mainan musikal yang lucu. Fisher Price Step N Play Piano memiliki banyak mainan yang pastinya dapat menyenangkan si kecil karena dilengkapi dengan musik dan suara yang ceria dan bayi dapat berinteraksi dengan berbagai macam instrumen yang berbeda. Dilengkapi pula dengan piano yang dapat diaktifkan dengan cara diinjak serta tempat duduk yang dapat berputar hingga 360 derajat sehingga anak Anda dapat bermain dengan leluasa dan tetap aman. Tempat duduk ini memungkinkan si kecil untuk bergeser horizontal sehingga memungkinkan bayi untuk berjalan bolak-balik.. Kursi dapat dilepas, sehingga balita juga dapat bermain dengan lebih leluasa.\r\n\r\nSaran Penggunaan : Kursi cocok untuk anak dengan umur minimal 6 bulan (atau sudah dapat menopang kepalanya sendiri) dan berat maksimal 11.3kg.', '2017-11-07 09:57:53', '0000-00-00 00:00:00', 1, 0),
(19, 7, 3, 'Stroller Pockit CL688 (Purple)', '145000', '185000', 'Stroller pockit portable dan praktis ini cocok digunakan untuk berpergian, olahraga atau sekedar berjalan-jalan ke mall dan taman. Dibuat dari bahan berkualitas terbaik agar si kecil nyaman. Mom sekarang gak perlu repot menggendong si kecil yang semakin besar. \r\n\r\nKelebihan Pockit CL788 :\r\n1. Rangka yang ringan. Berat hanya 4.4 kg. Dimensi ketika dilipat 38x19x33 cm\r\n2. Mudah dimasukkan ke dalam kabin pesawat, mobil, bawah kursi dan hand carry\r\n3. Mudah digunakan dan dapat dilipat dengan cepat\r\n4. Sabuk pengaman 5 titik yang dapat menjaga bayi tetap aman\r\n5. Terdapat senderan tempat duduk dan canopy \r\n\r\nSaran penggunaan :  Untuk bayi 6 bulan (sudah bisa duduk) hingga 3 tahun (maksimum berat 20kg)', '2017-11-07 10:01:46', '0000-00-00 00:00:00', 1, 0),
(20, 13, 8, 'Tobebe Kids 4 in 1 Slide With Swing', '155000', '235000', 'Hadirkan keceriaan di rumah dengan Tobebe Kids 4 in 1 Slide With Swing. Dibuat dari bahan berkualitas, playset ini dibalut dengan warna ceria yang memancarkan karakter cerah anak-anak. Anak-anak Anda dapat meningkatkan keterampilan motorik mereka dengan melakukan aktivitas menyenangkan di slide merah, bergoyang di ayunan dengan alunan melodi yang menyenangkan atau memasukkan bola di ring basket. . Kegunaan lainnya, tangganya dapat dijadikan rocker untuk bermain jungkat-jungkit. \r\nIndoor Use Only.\r\n\r\nDimensi : 160 (L)  x 158 (W) x 128 (H) cm\r\nSaran Penggunaan : Untuk maksimum berat badan 23 kg', '2017-11-07 10:07:46', '0000-00-00 00:00:00', 1, 0),
(21, 8, 4, 'Fisher Price Jumperoo Luv U Zoo', '115000', '170000', 'Si kecil dapat bermain melompat-lompat, menendang-nendang sehingga dapat membantu mengasah kemampuan motoriknya. Selain itu, kursi dapat berputar 360° sehingga si kecil dapat bermain dan berinteraksi dari berbagai arah dan banyak pula aktivitas meyenangkan lainnya karena si kecil ditemani figur hewan yang lucu, tombol permainan dengan lampu, suara dan musik serta banyak lagi! Warna-warna cerah serta musik-musik yang ceria dapat meningkatkan visualisasi dan pendengaran bayi.\r\n\r\nSARAN PENGGUNAAN:\r\n1. Dirancang untuk anak yang sudah dapat menopang kepalanya sendiri namun belum dapat memanjat ataupun berjalan.\r\n2. Digunakan untuk bayi dengan tinggi maksimum 81 cm dan berat maksimum 11.3 kg.', '2017-11-08 02:01:29', '0000-00-00 00:00:00', 1, 0),
(22, 11, 4, 'Jumperoo Safari Friends Evenflo', '135000', '195000', 'Si kecil dapat bergerak, berputar dan melompat-lompat di baby jumper dengan aman, dan dapat membantu mengasah kemampuan motoriknya. Banyak pula aktivitas meyenangkan lainnya karena si kecil ditemani figur hewan yang lucu, tombol permainan dengan lampu, suara dan musik serta banyak lagi. Warna-warna cerah serta musik-musik yang ceria dapat meningkatkan visualisasi dan pendengaran bayi. Kursi dapat berputar 360 derajat sehingga bayi dapat bermain dan berinteraksi dari berbagai arah. Sangat mudah untuk mengatur ketinggian dibandingkan tipe Jumperoo yang lainnya.\r\n\r\nSARAN PENGGUNAAN:\r\n1. Dirancang untuk anak yang sudah dapat menopang kepalanya sendiri namun belum dapat memanjat ataupun berjalan.\r\n2. Digunakan untuk bayi dengan tinggi maksimum 81 cm dan berat maksimum 11kg.', '2017-11-08 02:04:42', '0000-00-00 00:00:00', 1, 0),
(23, 14, 10, 'EM\'s 4 Bubs Baby Earmufff (Coral)', '75000', '105000', 'EM\'s 4 Bubs Earmuff adalah alat pelindung telinga pertama yang dirancang untuk bayi. Earmuff ini sangat berguna untuk melindungi si kecil saat berada di tempat bising seperti konser, mall, bioskop atau sangat baik digunakan saat berpergian dengan pesawat. Earmuff ini ringan, nyaman, dan dapat dengan mudah dibawa di tas Anda. Ukurannya pun dapat disesuaikan dengan menggunakan velcro.\r\n\r\nSaran Penggunaaan : Dapat digunakan untuk anak usia 0-18 bulan', '2017-11-08 02:10:16', '0000-00-00 00:00:00', 1, 0),
(24, 3, 2, 'Nuna Leaf (Dawn)', '125000', '180000', 'Dengan desain yang mewah dan elegan, Nuna leaf terinspirasi oleh gerakan daun yang tertiup angin sepoi-sepoi. Desainnya yang unik memang sengaja diciptakan berdasarkan sudut pandang bayi. \r\nGerakan bouncer ini juga tidak berisik karena tanpa baterai/listrik/kabel, anda cukup mengayunkannya dan nuna leaf dapat bergerak secara langsung tanpa bantuan orang lain dengan ayunan yang lembut selama lebih dari 2 menit. Nunaleaf terbuat dari 100?han katun organik yang lembut dan ringan sehingga memberikan kenyamanan bagi si kecil. Dilengkapi pula dengan 3 safety-points untk keamanan bayi anda.\r\nSaran Penggunaan : Cocok untuk bayi baru lahir hingga berat maks 60 kg.', '2017-11-08 02:16:39', '0000-00-00 00:00:00', 1, 0),
(25, 15, 11, 'Play Fence (pagar bayi) 12+2 panel', '135000', '160000', 'Play fence (12+2 panel) berfungsi sebagai pagar bermain anak. Dengan Play Fence ini si kecil dapat leluasa bermain dengan nyaman dan aman. Terdapat 12+2 panel sehingga ruang gerak si kecil lebih luas. Terdapat pintu sebagai akses keluar masuk yg dapat dikunci dengan  mudah. Sekarang Anda tidak perlu khawatir si kecil menjelajah rumah tanpa pengawasan. Sediakan area bermain yang aman untuk buah hati tercinta dan si kecil dapat memiliki arena bermainnya sendiri.', '2017-11-08 02:20:59', '0000-00-00 00:00:00', 1, 0),
(26, 16, 12, 'Baby Coupe Yaya', '105000', '155000', 'Mobil-mobilan yang dirancang khusus untuk menyenangkan buah hati anda. Anak-anak senang mengendarai mobil-mobilan ini dengan desainnya yang menarik serta kemudahannya untuk dikemudikan. Baby Coupe mendorong anak-anak bermain aktif, imajinasi, serta mengembangkan keterampilan motoriknya.\r\nFitur : \r\n1. 2 pintu yang dapat dibuka dan ditutup\r\n2. Papan kaki pengaman yang dapat dilepas\r\n3. Pegangan di bagian belakang sehingga orang tua dapat mendorong si kecil\r\n\r\nSaran Penggunaan : Dapat digunakan untuk usia 1 tahun ke atas dengan berat maksimum 20 kg', '2017-11-08 02:26:33', '0000-00-00 00:00:00', 1, 0),
(27, 17, 3, 'Babyzen Yoyo Plus  6+', '335000', '565000', 'Babyzen Yoyo+ terbaru tahun 2016 dengan banyak fitur penyempurnaan dari versi sebelumnya.\r\nStroller traveling terbaik dengan kualitas premium dan berkelas ini mudah dilipat dan dapat dibawa ke dalam kabin pesawat. Babyzen yoyo sudah terkenal dengan manuvernya yang halus dan nyaman di segala medan. Dengan Babyzen Yoyo+, Anda tidak perlu lagi repot saat membuka dan menutup stroller. Semua dapat dilakukan dengan satu tangan!\r\nFitur :\r\n\r\n1. Berat: 6,6 kg\r\n2. Bagasi stroller yang besar untuk penyimpanan barang lebih banyak\r\n3. Dapat dilipat dan dibawa ke dalam kabin pesawat\r\n4. Sangat mudah membuka dan melipat stroller\r\n5. Dilengkapi dengan kanopi untuk melindungi dari sinar matahari serta pelindung hujan yang dapat menutupi seluruh bagian stroller\r\n6. Dilengkapi dengan 4-wheel suspension dan sistem soft drive eksklusif untuk kenyamanan anak anda bahkan di jalan yang tidak rata sekalipun \r\n7. Memiliki tali bahu (padding) yang empuk  sehingga mengurangi pegal saat membawanya\r\n8. Terdapat kantong pada bagian belakang kanopi \r\n9. Posisi sandaran dapat diatur hingga 160°\r\n\r\nSaran penggunaan :  Untuk anak usia 6 bulan sampai berat badan maksimum 18 kg', '2017-11-08 02:29:52', '0000-00-00 00:00:00', 1, 1),
(28, 15, 8, 'Slide and Swing Colorful', '155000', '235000', 'Hadirkan keceriaan di rumah dengan Colorful Slide and Swing. Playset ini dibalut dengan warna-warni yang menyenangkan. Anak-anak Anda dapat meningkatkan keterampilan motorik mereka dengan melakukan aktivitas menyenangkan di slide merah, bergoyang di ayunan atau memasukkan bola di ring basket.  \r\n\r\nIndoor Use Only.\r\n\r\nSaran Penggunaan : Untuk maksimum berat badan 20 kg', '2017-11-08 02:35:31', '0000-00-00 00:00:00', 1, 0),
(29, 18, 3, 'Easywalker Minibugy Blazing Red', '150000', '235000', 'Easywalker Minibugy merupakan stroller premium yang terinspirasi dari mobil Mini Cooper yang mempunyai bentuk unik, mewah dan menawan. Mulai dari warna yang sama dengan desain mobil Mini Cooper aslinya, hingga logo Mini Cooper itu sendiri yang digunakan di beberapa bagian stroller, seperti di bagian roda, bagian samping stroller dan pada bagian sabuk pengaman. Stroller ini sangat ringan, hanya 6.5kg, sehingga mudah dibawa untuk berpergian\r\nFitur : \r\n1. 4 posisi sandaran\r\n2. Tempat duduk yang empuk sehingga nyaman untuk si kecil\r\n3. Pegangan yang terbuat dari bahan kulit dengan bentuk ergonomis\r\n4. Kanopi ekstra besar untuk melindungi si kecil dari sinar UV dan angin\r\n5. Suspensi roda untuk perjalanan ekstra nyaman\r\n6. Terdapat pengunci roda \r\n7. Kerangka terbuat dari aluminium yang berkualitas \r\n8. Dilengkapi dengan cup holder (fitur tambahan)\r\n\r\nSaran penggunaan :  Untuk newborn sampai usia  5 tahun (maksimum berat 20kg)', '2017-11-08 02:44:47', '0000-00-00 00:00:00', 1, 0),
(30, 19, 11, 'Edu-Play Baby Bear Zone Colourful Playard', '80000', '125000', 'Berikan ruang bermain yang aman untuknya dan ibu dapat tetap mengawasinya sembari beraktivitas.\r\nWahana bermain yang tepat untuk sikecil anda yang ceria. Dinding dilengkapi dengan cermin dan tombol musik yang menyenangkan. Play Room ini hadir dengan warna-warna cerah terbuat dari bahan PVC yang tidak beracun, sehingga aman untuk buah hati tercinta.\r\n \r\nDimensi : 117cm x 117cm x 60cm', '2017-11-08 02:51:06', '0000-00-00 00:00:00', 1, 0),
(31, 14, 10, 'EM\'s 4 Kids Audio', '85000', '115000', 'Pelindung penutup telinga sekaligus audio headphone pertama di dunia yang dirancang khusus untuk anak. Jadi, Anda tidak perlu khawatir si kecil bosan dan cranky ketika sedang nonton bioskop,  di pesawat,  perjalanan jauh atau di tempat2 bising,  karena earmuff ini dapat disambungkan ke perangkat audio seperti hp,  tablet dan entertainment di pesawat (tersedia konektor untuk audio pesawat). Penutup telinga ini menggunakan ikat kepala yang sesuai dengan tempat penutup telinga, mencegah tekanan tidak rata dikarenakan tidak sesuai tempat di sisi kepala anak seperti penutup telinga tradisional. \r\n\r\nFitur :\r\n1. Membantu mengurangi kebisingan eksternal dan meindungi telinga anak\r\n2. Dirancang dalam batasan volume, memastikan volume tidak sampai di atas 85dB (tingkat maksimum yang disarankan untuk penggunaan lama) volume dapat disesuaikan praktis, bisa dilipat\r\n3. Mudah dibawa kemana-mana karena terdapat hardcase sehingga tidak tercecer\r\n\r\nSaran Penggunaaan : Dapat dipakai untuk anak usia 10 bulan keatas', '2017-11-08 03:03:43', '0000-00-00 00:00:00', 1, 0),
(32, 20, 13, 'ELC Giant Wooden Activity Cube', '90000', '135000', 'Giant Wooden Activity Cube adalah kubus multi fungsi yang menampilkan 5 mainan dalam 1, yaitu Chalk board, bead maze, flip board, xylophone and clock. Si kecil dapat belajar tentang warna dan bentuk,angka, nama benda yang berbeda, memberi tahu waktu, dan juga musik. Labirin manik membantu memperkuat jari-jari kecil dan mendorong koordinasi tangan ke mata, dan sisi papan flip akan membuat mereka berpikir dan berhitung. Mereka juga bisa mengeksplorasi sisi kreatif mereka dan menggunakan papan tulis untuk menulis, menulis dan membuat sketsa. Mereka juga bisa mengeksplorasi sisi kreatif mereka dan menggunakan papan tulis untuk menulis, menulis dan membuat sketsa. Saat sedang tidak dimainkan, Bead Maze dapat diletakkan ke dalam kubus untuk penyimpanan yang lebih mudah.\r\n\r\n\r\nDimensi : 31,5 x 33,5 x 31,5 cm\r\nSaran Pengunaan : Untuk anak usia 1 tahun ke atas', '2017-11-08 03:12:53', '0000-00-00 00:00:00', 1, 0),
(33, 21, 11, 'Haenim Baby Play Room', '80000', '125000', '<p style=\"text-align: justify;\">Berikan ruang bermain yang aman untuknya dan ibu dapat tetap mengawasinya sembari beraktifitas. Haenim Baby Play Room, wahana bermain yang tepat untuk sikecil anda yang ceria. Dinding dilengkapi panel aktifitas untuk melatih motorik halusnya atau bermain dengan telephone. Play Room ini hadir dengan warna-warna cerah terbuat dari bahan PVC yang tidak beracun, sehingga aman untuk buah hati tercinta.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Fitur:</strong></p>\r\n<ol>\r\n<li>Luas 13 kaki persegi, dengan kunci pengaman pada pintu.</li>\r\n<li>Pagar Bermain yang juga dilengkapi mainan aktivitas pada dinding pagar</li>\r\n<li>Termasuk 6 jenis mainan aktifitas</li>\r\n<li>Permukaan bahan halus dan mudah dibersihkan</li>\r\n<li>Bahan PVC bebas racun, aman untuk anak</li>\r\n<li>Kombinasi dinding dapat diubah-ubah dan koneksi pagar yang fleksibel</li>\r\n<li>Mudah dan cepat dalam pemasangan, dan dapat dilepas untuk penyimpanan.</li>\r\n</ol>', '2017-11-23 10:03:46', '2017-11-23 10:04:24', 1, 0),
(34, 22, 13, 'Imaginarium 5 Way Activity Cube', '90000', '135000', '<p style=\"text-align: justify;\">Ajak si kecil bermain sambil belajar dengan &nbsp;Imaginarium 5 way Activity Cube. Setiap sisinya dilapIisi dengan warna cerah untuk menarik perhatian si kecil. Terdapat 5 sisi permainan edukatif untuk eksplorasi tangan anak anda yang terdiri dari &nbsp;<em>clock, shape sorter, turning gears, tracking maze and a bead maze</em>. Saat sedang tidak dimainkan, <em>Bead Maze</em> dapat diletakkan ke dalam kubus untuk penyimpanan yang lebih muda.</p>\r\n<p>&nbsp;</p>\r\n<p>Dimensi : 31 x 31 x 29 cm</p>\r\n<p><strong>Saran Pengunaan : Untuk anak usia 1 tahun ke atas</strong></p>', '2017-11-23 10:15:39', '0000-00-00 00:00:00', 1, 0),
(35, 23, 12, 'Lerado Wonderful Ride', '0', '0', '<p style=\"text-align: justify;\">Perhatikan wajah si kecil begitu ceria ketika mereka meluncur naik dan turun pada roller coaster yang seru ini. Dirancang dengan kekuatan dan daya tahan, menjaga keamanan anak saat bermain. Coaster ini dibuat dengan menggunakan warna-warna cerah yang menyenangkan. Landasan yang naik turun didisain sedemikian rupa untuk kenyamanan dan keamanan meluncur. &nbsp;</p>\r\n<p style=\"text-align: justify;\">Dilengkapi &nbsp;fitur 1 mobil coaster dengan bagian penopang punggung yang tinggi, pijakan kaki, pegangan, kontrol hambat pada roda sehingga anak-anak aman saat meluncur.</p>\r\n<p>Wahana yang sangat menyenangkan dan pasti disukai oleh anak-anak.</p>\r\n<p>Indoor Use Only.</p>\r\n<p>&nbsp;</p>\r\n<p>Dimensi produk : 310 (L) x 77 (H) x 35 (W)&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Saran Penggunaan : Usia Anak: 2 s/d 5 tahun dengan berat maksimal 20 kg</strong></p>', '2017-11-23 10:22:59', '2017-11-23 10:23:49', 1, 0),
(36, 24, 8, 'Qwikfold Fun Slide', '60000', '100000', '<p style=\"text-align: justify;\">Perosotan dari Grow &lsquo;n Up yang mudah dilipat. Terbuat dari plastik yang aman untuk anak anda. Perosotan ini yang dapat melatih motorik serta sensorik anak anda. Jika sedang tidak digunakan, penyimpanannya pun mudah dan tidak membutuhkan <em>space</em> besar.</p>\r\n<p>Indoor Use Only.</p>\r\n<p>&nbsp;</p>\r\n<p>Dimensi : 57 (W) x 110 (L) x 67 (H)</p>\r\n<p><strong>Saran Pengunaan : Untuk perosotan maksimum berat badan 28 kg</strong></p>', '2017-11-23 10:26:57', '0000-00-00 00:00:00', 1, 0),
(37, 13, 8, 'Tobebe Big Happy Playhouse', '0', '0', '<p style=\"text-align: justify;\">Berikan anak-anak Anda cara yang menyenangkan untuk mengeksplorasi sisi imajinatif mereka. Rumah besar dengan perosotan akan menjadi salah satu mainan yang menarik untuk anak Anda dan membuatnya betah bermain di rumah. Si kecil akan menikmati waktu luang mereka dengan teman-teman di dalam rumah-rumahan ini, saat bermain permainan peran lucu untuk mendorong kreativitas mereka.</p>\r\n<p style=\"text-align: justify;\">Rumah-rumahan ini dilengkapi dengan perosotan yang dapat dipindah-pindah menghadap luar ataupun dalam. Bisa digunakan sebagai mandi bola. Pagar juga bisa dilepas sehingga berbentuk rumah-rumahan saja.</p>\r\n<p>Indoor Use Only.</p>\r\n<p>&nbsp;</p>\r\n<p>Dimensi Produk : 188 cm (L) x 108 cm (W) x 119 cm (H)&nbsp;</p>\r\n<p><strong>Saran Penggunaan : Untuk perosotan maksimum berat badan 20 kg</strong></p>', '2017-11-23 10:29:14', '2017-11-23 10:30:14', 1, 1),
(38, 25, 8, 'Tree House Slide', '0', '0', '<p style=\"text-align: justify;\">Hadirkan keceriaan si kecil dengan Tree House Slide dari Ching-ching. Kombinasi yang menyenangkan mulai dari perosotan, basket, sepak bola dan terowongan dalam satu produk. Terbuat dari bahan plastik yang tidak beracun dan bahan yang kokoh.</p>\r\n<p>&nbsp;</p>\r\n<p>Dimensi : <strong>203</strong><strong> (L) </strong><strong>x 176</strong><strong> (W)</strong><strong> x &nbsp;120</strong><strong> (H)</strong><strong> cm</strong></p>\r\n<p><strong>Saran Pengunaan : Untuk maksimum berat badan 45 kg</strong></p>', '2017-11-23 10:34:27', '0000-00-00 00:00:00', 1, 0),
(39, 12, 5, 'Vtech Sit to Stand Ultimate Alphabet Train', '100000', '150000', '<p style=\"text-align: justify;\">Model kereta terbaru, aktifitas lebih banyak! Vtech Sit to Stand Ultimate Alphabet Train. Kereta api hebat ini dirancang agar dapat dimainkan mengikuti pertumbuhan anak Anda. Mainan multi fungsi yang dapat digunakan dari mulai bermain dilantai, dikendarai, hingga didorong. Saat masinis cilik Anda bertambah besar, gerbong kereta dapat ditransformasi menjadi gerobak yang dapat diisi aneka mainan si kecil lalu ditarik. Kereta api ini juga membantu melatih motorik halus anak ditemani aneka mainan manipulatif seperti buku cerita yang dapat dibolak balik, jam dinding, baut kunci, dan 13 balok huruf yang dapat dimasukkan kedalam sisi kereta untuk belajar huruf dan kosa kata sikecil. Ketika balok huruf ditempelkan di sisi kereta, kereta akan mengucapkan kosa kata yang ada pada balok tersebut. Kereta ajaib ini juga dapat menghitung tiap kali sikecil memasukkan balok kedalam cerobong.</p>\r\n<p>&nbsp;&nbsp;</p>\r\n<p><strong>Fitur:</strong></p>\r\n<ol>\r\n<li>Mainan multifungsi mengikuti tumbuh kembang anak.</li>\r\n<li>10 aktifitas Mainan Edukasi seperti buku, jam, kunci, balok, mengenalkan angka, huruf, warna dan lainnya.</li>\r\n<li>Bermain peran dengan walkie talkie.</li>\r\n<li>Tombol suara mengenalkan angka, nama hewan, berhitumg.</li>\r\n<li>100 lagu anak, melody dan kalimat sederhana.</li>\r\n<li>Kereta api dapat menghitung balok yang jatuh kedalam cerobong.</li>\r\n<li>Buku cerita mengajak sikecil bernyanyi bersama, dan bermain Music.</li>\r\n</ol>', '2017-11-23 10:38:01', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_barang_sale`
--

CREATE TABLE `hoopla_barang_sale` (
  `idSALE` int(11) NOT NULL,
  `namaSALE` varchar(70) NOT NULL,
  `brandSALE` varchar(80) NOT NULL,
  `hargaSALE` varchar(50) NOT NULL,
  `descriptionSALE` text NOT NULL,
  `idCATSALE` int(11) NOT NULL,
  `createdateSALE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateSALE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusSALE` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_barang_sale`
--

INSERT INTO `hoopla_barang_sale` (`idSALE`, `namaSALE`, `brandSALE`, `hargaSALE`, `descriptionSALE`, `idCATSALE`, `createdateSALE`, `updatedateSALE`, `statusSALE`) VALUES
(2, 'Mainan Mobil Pemadam Kebakaran', 'Hisatmisu', '230000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 3, '2017-09-21 14:31:37', '2017-10-04 01:16:50', 1),
(3, 'Mainan untuk mama dan untuk bapak', 'Santoryu', '1600000', 'Mainan untuk mama dan untuk bapak', 1, '2017-09-28 14:51:42', '2017-10-17 14:39:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_brand_rental`
--

CREATE TABLE `hoopla_brand_rental` (
  `idBRAND` int(11) NOT NULL,
  `namaBRAND` varchar(60) NOT NULL,
  `statusBRAND` int(1) NOT NULL,
  `createdateBRAND` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateBRAND` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_brand_rental`
--

INSERT INTO `hoopla_brand_rental` (`idBRAND`, `namaBRAND`, `statusBRAND`, `createdateBRAND`, `updatedateBRAND`) VALUES
(1, 'Bellefit', 1, '2017-09-26 13:48:13', '2017-11-01 02:37:08'),
(2, 'Bellybuds', 1, '2017-09-26 13:48:48', '2017-11-01 04:10:51'),
(3, 'Nuna', 1, '2017-11-01 10:00:30', '0000-00-00 00:00:00'),
(4, 'Baby Elle', 1, '2017-11-04 08:04:24', '0000-00-00 00:00:00'),
(5, 'Sugar Baby', 1, '2017-11-04 08:11:55', '0000-00-00 00:00:00'),
(6, 'Ergobaby', 1, '2017-11-04 08:24:35', '0000-00-00 00:00:00'),
(7, 'Cocolatte', 1, '2017-11-04 12:59:15', '0000-00-00 00:00:00'),
(8, 'Fisher Price', 1, '2017-11-04 13:05:45', '0000-00-00 00:00:00'),
(9, 'Bright Starts', 1, '2017-11-04 13:13:29', '0000-00-00 00:00:00'),
(10, 'Summer Infant', 1, '2017-11-04 13:29:10', '0000-00-00 00:00:00'),
(11, 'Evenflo', 1, '2017-11-04 14:18:27', '0000-00-00 00:00:00'),
(12, 'VTech', 1, '2017-11-04 14:28:41', '0000-00-00 00:00:00'),
(13, 'Tobebe', 1, '2017-11-07 10:05:23', '0000-00-00 00:00:00'),
(14, 'Em\'s', 1, '2017-11-08 02:06:41', '0000-00-00 00:00:00'),
(15, 'Others', 1, '2017-11-08 02:19:19', '0000-00-00 00:00:00'),
(16, 'Yaya', 1, '2017-11-08 02:24:38', '0000-00-00 00:00:00'),
(17, 'Babyzen', 1, '2017-11-08 02:26:54', '2017-11-08 02:27:22'),
(18, 'Easywalker', 1, '2017-11-08 02:41:38', '0000-00-00 00:00:00'),
(19, 'Edu Play', 1, '2017-11-08 02:47:37', '0000-00-00 00:00:00'),
(20, 'ELC', 1, '2017-11-08 03:09:05', '0000-00-00 00:00:00'),
(21, 'Haenim', 1, '2017-11-23 06:34:42', '0000-00-00 00:00:00'),
(22, 'Imaginarium', 1, '2017-11-23 10:11:28', '0000-00-00 00:00:00'),
(23, 'Lerado', 1, '2017-11-23 10:21:25', '0000-00-00 00:00:00'),
(24, 'Grow \'n Up', 1, '2017-11-23 10:25:31', '0000-00-00 00:00:00'),
(25, 'Ching-Ching', 1, '2017-11-23 10:33:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_category_sale`
--

CREATE TABLE `hoopla_category_sale` (
  `idCATSALE` int(11) NOT NULL,
  `namaCATSALE` varchar(60) NOT NULL,
  `statusCATSALE` int(1) NOT NULL,
  `createdateCATSALE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateCATSALE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_category_sale`
--

INSERT INTO `hoopla_category_sale` (`idCATSALE`, `namaCATSALE`, `statusCATSALE`, `createdateCATSALE`, `updatedateCATSALE`) VALUES
(1, 'Bellefit Corset Size M', 1, '2017-09-27 14:16:40', '2017-11-01 02:58:01'),
(2, 'Buat Baby', 1, '2017-09-27 14:16:52', '2017-09-27 14:16:58'),
(3, 'Mainan', 1, '2017-09-27 14:17:17', '2017-09-28 14:14:24'),
(5, 'Snack & Food', 1, '2017-09-28 14:13:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_category_trivia`
--

CREATE TABLE `hoopla_category_trivia` (
  `idCATTRIVIA` int(11) NOT NULL,
  `namaCATTRIVIA` varchar(60) NOT NULL,
  `statusCATTRIVIA` int(1) NOT NULL,
  `createdateCATTRIVIA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateCATTRIVIA` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_category_trivia`
--

INSERT INTO `hoopla_category_trivia` (`idCATTRIVIA`, `namaCATTRIVIA`, `statusCATTRIVIA`, `createdateCATTRIVIA`, `updatedateCATTRIVIA`) VALUES
(1, 'Tips & Trick', 1, '2017-09-27 14:16:40', '2017-09-28 14:54:18'),
(2, 'Parenting', 1, '2017-09-27 14:16:52', '2017-09-28 14:54:27'),
(3, 'Toys', 1, '2017-09-27 14:17:17', '2017-09-28 14:54:39');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_ci_sessions`
--

CREATE TABLE `hoopla_ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_ci_sessions`
--

INSERT INTO `hoopla_ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('ev1i9rpuh3k852oa1s2hsrinesrj7d5a', '66.102.6.228', 1511484352, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313438343335313b),
('42k2am13mj6258rnobl6ok61ab6pi0c8', '66.102.6.228', 1511484352, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313438343335313b),
('mrb38lodqj8u6ktko63jv13pvd7cc07d', '::1', 1511484924, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313438343932343b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('bab8bupb85tl94fkm7g0oenkm9uvk793', '::1', 1511485255, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313438353235353b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('td5k3vq303fqvh3su92lglujcbd9amub', '::1', 1511485831, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313438353833313b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('ic5r48vr4ief6vqs4apo00mh449dpfv4', '::1', 1511486255, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313438363235353b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('qsde8ra16por90fpln3thjnu9jnl7j07', '::1', 1511486573, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313438363537333b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('0bnctdpqt2b7gc6u0p79urssrpvisieq', '::1', 1511487319, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313438373331393b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('8abjdbrlp3gje96r9k49d21gr80ac7is', '::1', 1511487756, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313438373735363b),
('thaq9j9tqmakj9ksill00goukqgklltn', '::1', 1511487896, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313438373735363b6e6f745f666f756e64735f736f72745f62797c613a333a7b733a353a227469746c65223b733a363a224d6161662c20223b733a343a2274657874223b733a33373a22426172616e6720616e646120746964616b206461706174206b616d692074656d756b616e21223b733a343a2264657363223b733a33363a2253696c616b616e206d656c616b756b616e2070656e63617269616e206b656d62616c692e223b7d5f5f63695f766172737c613a313a7b733a31383a226e6f745f666f756e64735f736f72745f6279223b733a333a226f6c64223b7d),
('rdd7ftj2ofo14qvk37ptlv63n02jlk9s', '::1', 1511765407, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313736353430373b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('t629756vqqqv4gjvskp5ej67sq6pstdm', '::1', 1511765792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313736353739323b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('7utu1406cc7uutf1loof73m7qa39oa9j', '::1', 1511766116, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313736363131363b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('lf013m0h56jkek2dejeqmg3q9tjnbvgs', '::1', 1511766626, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313736363632363b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('dk97lr5mhih78ug5n4q2ta8n37lc5qj8', '::1', 1511766931, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313736363933313b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('tuod3qou72eue665m43ctn7g69nao5em', '::1', 1511767283, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313736373238333b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('7qnud3vose3su46t6urm4us727936d9s', '::1', 1511768189, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313736383138393b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('t2biqjashi0l2ube70mh48227htus5n1', '::1', 1511768491, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313736383439313b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a383a225761726e696e6721223b733a343a2274657874223b733a34363a22656d61696c2061746175206b6174612073616e64692079616e6720616e6461206d6173756b6b616e2073616c6168223b733a343a2274797065223b733a363a2264616e676572223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('suttu68eo9232khirj73f9bc7ghiof6b', '::1', 1511768849, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313736383834393b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('1khch88jiij6o2mkb00s92mrc7q63c66', '::1', 1511768849, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313736383834393b456d61696c7c733a32383a2261646d696e40686f6f706c6172656e74616c6d61696e616e2e636f6d223b696441444d494e7c733a313a2231223b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_contact`
--

CREATE TABLE `hoopla_contact` (
  `idCONTACT` int(255) NOT NULL,
  `namaCONTACT` varchar(60) NOT NULL,
  `emailCONTACT` varchar(100) NOT NULL,
  `descriptionCONTACT` text NOT NULL,
  `createdateCONTACT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_intro_sale`
--

CREATE TABLE `hoopla_intro_sale` (
  `idINTROSALE` int(11) NOT NULL,
  `titleINTROSALE` varchar(80) NOT NULL,
  `descINTROSALE` text NOT NULL,
  `createdateINTROSALE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateINTROSALE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_intro_sale`
--

INSERT INTO `hoopla_intro_sale` (`idINTROSALE`, `titleINTROSALE`, `descINTROSALE`, `createdateINTROSALE`, `updatedateINTROSALE`) VALUES
(1, 'For Sale', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2017-11-16 08:27:40', '2017-11-16 08:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_menus_admin`
--

CREATE TABLE `hoopla_menus_admin` (
  `idMENU` int(11) NOT NULL,
  `namaMENU` varchar(45) NOT NULL,
  `iconMENU` varchar(45) NOT NULL,
  `functionMENU` varchar(45) NOT NULL,
  `parentMENU` int(11) NOT NULL DEFAULT '0',
  `accessMENU` varchar(11) NOT NULL,
  `orderMENU` int(10) NOT NULL,
  `statusMENU` int(11) NOT NULL DEFAULT '1',
  `createdateMENU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoopla_menus_admin`
--

INSERT INTO `hoopla_menus_admin` (`idMENU`, `namaMENU`, `iconMENU`, `functionMENU`, `parentMENU`, `accessMENU`, `orderMENU`, `statusMENU`, `createdateMENU`) VALUES
(1, 'Dashboard', 'dashboard', 'dashboard', 0, '0', 1, 1, '2017-10-02 09:05:04'),
(2, 'Rental', 'favorite_border', 'rental', 0, '0', 2, 1, '2017-10-02 09:05:21'),
(3, 'Brand Rental', 'loyalty', 'brand_rental', 2, '0', 2, 1, '2017-10-02 09:06:44'),
(4, 'Type Rental', 'loyalty', 'type_rental', 2, '0', 3, 1, '2017-10-02 09:07:27'),
(5, 'Age Rental', 'loyalty', 'age_rental', 2, '0', 4, 1, '2017-10-02 09:08:25'),
(6, 'Sale', 'control_point_duplicate', 'sale', 0, '0', 3, 1, '2017-10-02 09:09:02'),
(7, 'Kategori Sale', 'content_paste', 'category_sale', 6, '0', 2, 1, '2017-10-02 09:09:49'),
(8, 'Trivia', 'library_books', 'trivia', 0, '0', 4, 1, '2017-10-02 09:10:22'),
(9, 'Kategori Triva', 'book', 'category_trivia', 8, '0', 2, 1, '2017-10-02 09:11:01'),
(10, 'Contact', 'rate_review', 'contact', 0, '0', 5, 1, '2017-10-02 09:11:18'),
(11, 'Daftar Rental', 'favorite_border', 'index_product', 2, '0', 1, 1, '2017-10-02 09:36:17'),
(12, 'Daftar Sale', 'control_point_duplicate', 'index_sale', 6, '0', 1, 1, '2017-10-02 09:36:49'),
(13, 'Daftar Trivia', 'library_books', 'index_trivia', 8, '0', 1, 1, '2017-10-02 09:37:12'),
(14, 'Beranda', 'dashboard', 'index_dashboard', 1, '0', 1, 1, '2017-10-02 13:24:50'),
(15, 'Daftar Kontak', 'rate_review', 'index_contact', 10, '0', 1, 1, '2017-10-02 13:26:37'),
(20, 'Tentang', 'textsms', 'about', 0, '0', 1, 1, '2017-10-16 13:15:38'),
(21, 'Daftar', 'textsms', 'index_about', 20, '0', 1, 1, '2017-10-16 13:16:10'),
(22, 'Pemesanan', 'book', 'terms', 0, '0', 1, 1, '2017-10-16 14:28:24'),
(23, 'Cara Pemesanan', 'book', 'index_terms', 22, '0', 1, 1, '2017-10-16 14:28:34'),
(24, 'Cara Titip Sewa', 'book', 'index_terms_cara_titipsewa', 22, '0', 1, 1, '2017-10-16 14:43:57'),
(25, 'Social', 'content_paste', 'social', 0, '0', 1, 1, '2017-10-17 15:45:07'),
(26, 'Daftar', 'content_paste', 'index_social', 25, '0', 1, 1, '2017-10-17 15:45:28'),
(27, 'Slider', 'slideshow', 'slider', 0, '0', 1, 1, '2017-10-22 03:53:50'),
(28, 'Daftar', 'slideshow', 'index_slider', 27, '0', 1, 1, '2017-10-22 03:54:06'),
(29, 'Kenapa Hoopla', 'question_answer', 'why', 0, '0', 1, 1, '2017-11-16 06:30:30'),
(30, 'Daftar', 'question_answer', 'index_why', 29, '0', 1, 1, '2017-11-16 06:30:37'),
(31, 'Kata Pembuka', 'content_paste', 'index_intro', 6, '0', 1, 1, '2017-11-16 08:24:50'),
(32, 'Paket', 'card_giftcard', 'package', 0, '0', 1, 1, '2017-11-23 04:50:58'),
(33, 'Daftar', 'card_giftcard', 'index_package', 32, '0', 1, 1, '2017-11-23 04:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_package`
--

CREATE TABLE `hoopla_package` (
  `idPAKET` int(11) NOT NULL,
  `titlePAKET` varchar(80) NOT NULL,
  `validPAKET` varchar(15) NOT NULL,
  `descPAKET` text NOT NULL,
  `tablePAKET` text NOT NULL,
  `titlebenefitPAKET` varchar(120) NOT NULL,
  `descbenefitPAKET` text NOT NULL,
  `titlebuttonPAKET` varchar(50) NOT NULL,
  `linkbuttonPAKET` varchar(120) NOT NULL,
  `featuredPAKET` int(1) NOT NULL,
  `createdatePAKET` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedatePAKET` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_package`
--

INSERT INTO `hoopla_package` (`idPAKET`, `titlePAKET`, `validPAKET`, `descPAKET`, `tablePAKET`, `titlebenefitPAKET`, `descbenefitPAKET`, `titlebuttonPAKET`, `linkbuttonPAKET`, `featuredPAKET`, `createdatePAKET`, `updatedatePAKET`) VALUES
(1, 'Paket Grow up with Hoopla', '23 Desember 201', '<p>Para orang tua pasti sudah tidak sabar menunggu kelahiran buah hatinya. Segala macam perlengkapan bayi tentunya sudah mulai dipersiapkan, begitu juga mainan-mainan untuk sang buah hati. Namun kami paham, harga mainan bayi tidaklah murah dan mungkin hanya tahan beberapa bulan. Oleh karena itu, Hoopla menawarkan alternatif penyewaan mainan selama satu tahun dengan harga yang sangat murah. Selain untuk meringankan orang tua, tujuan paket <span class=\"coolgreen\">Grow Up With Hoopla</span> adalah kami ingin melihat buah hati anda tumbuh kembang bersama Hoopla. Seperti motto kami, kebahagian buah hati anda adalah kebahagiaan kami.</p>\r\n<p>Di paket <span class=\"coolgreen\">Grow Up With Hoopla</span>, Penyewa akan mendapatkan 4 mainan dengan harga miring selama periode 1 (satu) tahun, antara lain:</p>\r\n<p>Berikut ilustrasi perbandingan dengan dan tanpa menggunakan Paket Grow Up With Hoopla:</p>', '<table>\r\n<thead>\r\n<tr>\r\n<th>Jenis Barang</th>\r\n<th>Harga Retail <br> + Ongkos Kirim</th>\r\n<th>Harga Sewa Normal <br> Per 52 Minggu</th>\r\n<th>Harga Sewa Paket Grow Up With Hoopla <br> Per 52 Minggu</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Nuna Leaf</td>\r\n<td>Rp 2.000.000</td>\r\n<td>Rp 585.000 <br> (12 minggu)</td>\r\n<td>Rp 2.000.000</td>\r\n</tr>\r\n<tr>\r\n<td>Jumperoo</td>\r\n<td>Rp 2.700.000</td>\r\n<td>Rp 585.000 <br> (12 minggu)</td>\r\n<td>Rp 2.000.000</td>\r\n</tr>\r\n<tr>\r\n<td>Around We Go</td>\r\n<td>Rp 2.600.000</td>\r\n<td>Rp 585.000 <br> (12 minggu)</td>\r\n<td>Rp 2.000.000</td>\r\n</tr>\r\n<tr>\r\n<td>Piano Baby Walker</td>\r\n<td>Rp 650.000</td>\r\n<td>Rp 170.000 <br> (8 minggu)</td>\r\n<td>Rp 2.000.000</td>\r\n</tr>\r\n<tr class=\"total\">\r\n<td>Total</td>\r\n<td>Rp 7.950.000</td>\r\n<td>Rp 2.240.000</td>\r\n<td>Rp 2.000.000</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Dilihat dari skema di atas, maka memilih paket Grow Up With Hoopla mempunyai beberapa kelebihan:', '[[\"Jauh lebih hemat\",\"Hanya dengan Rp 2.000.000, bayi berkesempatan untuk menggunakan 4 mainan yang berbeda sesuai dengan kebutuhan bayi.\"],[\"Pembayaran mudah\",\"Pembayaran dapat dicicil sebanyak 3 kali, yakni 50% ketika pemesanan, 30% di bulan ke 5, dan 20% di bulan ke 8.\"]]', 'Baiklah saya mau paket ini', 'http://localhost/codewell/hoopla-new-html/contact', 1, '2017-11-22 13:36:00', '2017-11-22 13:49:59'),
(2, 'Paket Happy Meal with Hoopla', '27 Desember 201', '<p>Para orang tua pasti sudah tidak sabar menunggu kelahiran buah hatinya. Segala macam perlengkapan bayi tentunya sudah mulai dipersiapkan, begitu juga mainan-mainan untuk sang buah hati. Namun kami paham, harga mainan bayi tidaklah murah dan mungkin hanya tahan beberapa bulan. Oleh karena itu, Hoopla menawarkan alternatif penyewaan mainan selama satu tahun dengan harga yang sangat murah. Selain untuk meringankan orang tua, tujuan paket <span class=\"coolgreen\">Grow Up With Hoopla</span> adalah kami ingin melihat buah hati anda tumbuh kembang bersama Hoopla. Seperti motto kami, kebahagian buah hati anda adalah kebahagiaan kami.</p>\r\n<p>Di paket <span class=\"coolgreen\">Grow Up With Hoopla</span>, Penyewa akan mendapatkan 4 mainan dengan harga miring selama periode 1 (satu) tahun, antara lain:</p>\r\n<p>Berikut ilustrasi perbandingan dengan dan tanpa menggunakan Paket Grow Up With Hoopla:</p>', '<table>\r\n<thead>\r\n<tr>\r\n<th>Jenis Barang</th>\r\n<th>Harga Retail <br> + Ongkos Kirim</th>\r\n<th>Harga Sewa Normal <br> Per 52 Minggu</th>\r\n<th>Harga Sewa Paket Grow Up With Hoopla <br> Per 52 Minggu</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Nuna Leaf</td>\r\n<td>Rp 2.000.000</td>\r\n<td>Rp 585.000 <br> (12 minggu)</td>\r\n<td>Rp 2.000.000</td>\r\n</tr>\r\n<tr>\r\n<td>Jumperoo</td>\r\n<td>Rp 2.700.000</td>\r\n<td>Rp 585.000 <br> (12 minggu)</td>\r\n<td>Rp 2.000.000</td>\r\n</tr>\r\n<tr>\r\n<td>Around We Go</td>\r\n<td>Rp 2.600.000</td>\r\n<td>Rp 585.000 <br> (12 minggu)</td>\r\n<td>Rp 2.000.000</td>\r\n</tr>\r\n<tr>\r\n<td>Piano Baby Walker</td>\r\n<td>Rp 650.000</td>\r\n<td>Rp 170.000 <br> (8 minggu)</td>\r\n<td>Rp 2.000.000</td>\r\n</tr>\r\n<tr class=\"total\">\r\n<td>Total</td>\r\n<td>Rp 7.950.000</td>\r\n<td>Rp 2.240.000</td>\r\n<td>Rp 2.000.000</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Dilihat dari skema di atas, maka memilih paket Grow Up With Hoopla mempunyai beberapa kelebihan:', '[[\"Jauh lebih hemat\",\"Hanya dengan Rp 2.000.000, bayi berkesempatan untuk menggunakan 4 mainan yang berbeda sesuai dengan kebutuhan bayi.\"],[\"Pembayaran mudah\",\"Pembayaran dapat dicicil sebanyak 3 kali, yakni 50% ketika pemesanan, 30% di bulan ke 5, dan 20% di bulan ke 8.\"]]', 'Baiklah saya mau paket ini', 'http://localhost/codewell/hoopla-new-html/contact', 1, '2017-11-22 13:36:00', '2017-11-22 13:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_post_trivia`
--

CREATE TABLE `hoopla_post_trivia` (
  `idTRIVIA` int(11) NOT NULL,
  `titleTRIVIA` varchar(70) NOT NULL,
  `idCATTRIVIA` int(11) NOT NULL,
  `descriptionTRIVIA` text NOT NULL,
  `featuredTRIVIA` int(1) NOT NULL DEFAULT '0',
  `createdateTRIVIA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateTRIVIA` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusTRIVIA` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_post_trivia`
--

INSERT INTO `hoopla_post_trivia` (`idTRIVIA`, `titleTRIVIA`, `idCATTRIVIA`, `descriptionTRIVIA`, `featuredTRIVIA`, `createdateTRIVIA`, `updatedateTRIVIA`, `statusTRIVIA`) VALUES
(3, 'Bagaimana membesarkan anak yang hilang 1 mata-nya?', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. \r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, '2017-09-28 15:07:32', '2017-10-22 04:44:32', 1),
(4, 'Tips & Trick Melihat anak kita lucu atau tidak', 1, 'orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '2017-10-22 04:30:37', '2017-10-22 04:43:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_slider`
--

CREATE TABLE `hoopla_slider` (
  `idSLIDER` int(11) NOT NULL,
  `titleSLIDER` varchar(50) NOT NULL,
  `descSLIDER` varchar(120) NOT NULL,
  `linkSLIDER` varchar(255) NOT NULL,
  `createdateSLIDER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateSLIDER` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_slider`
--

INSERT INTO `hoopla_slider` (`idSLIDER`, `titleSLIDER`, `descSLIDER`, `linkSLIDER`, `createdateSLIDER`, `updatedateSLIDER`) VALUES
(1, 'Selamat datang di dunia Hoopla!', 'Pusatnya sewa perlengkapan dan mainan bayi dan anak di kota Batam', '#', '2017-10-22 03:56:20', '0000-00-00 00:00:00'),
(2, 'Don\'t be strangers', 'Follow IG kami @hoopla_rentalmainan dan mari berteman', '#', '2017-10-22 03:57:07', '0000-00-00 00:00:00'),
(3, 'Kalo bisa sewa, <br> kenapa harus beli?', 'Temukan kenapa menyewa adalah pilihan terbaik saat ini', 'http://www.hooplarentalmainan.com/test/why/', '2017-10-22 03:57:45', '2017-11-19 13:42:40'),
(4, 'Tidak ada di list kami?', 'Well, silakan beritahu kami, dan akan kami sediakan untuk kamu', '#', '2017-10-22 03:58:28', '0000-00-00 00:00:00'),
(6, 'Cara pemesanan gampang.', 'Cukup dengan 4 langkah mudah, dan kamu sudah bisa menyewa semuanya di Hoopla.', '#', '2017-10-22 04:01:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_social`
--

CREATE TABLE `hoopla_social` (
  `idSOCIAL` int(11) NOT NULL,
  `waSOCIAL` varchar(15) NOT NULL,
  `lineSOCIAL` varchar(30) NOT NULL,
  `igSOCIAL` varchar(30) NOT NULL,
  `email1SOCIAL` varchar(40) NOT NULL,
  `email2SOCIAL` varchar(40) NOT NULL,
  `telpSOCIAL` varchar(15) NOT NULL,
  `createdateSOCIAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateSOCIAL` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_social`
--

INSERT INTO `hoopla_social` (`idSOCIAL`, `waSOCIAL`, `lineSOCIAL`, `igSOCIAL`, `email1SOCIAL`, `email2SOCIAL`, `telpSOCIAL`, `createdateSOCIAL`, `updatedateSOCIAL`) VALUES
(1, '085667651688', 'hoopla_rentalmainan', 'hoopla_rentalmainan', 'order@hooplatoyrental.com', 'info@hooplatoyrental.com', '0856 6765 1688', '2017-10-17 15:47:20', '2017-11-17 04:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_terms`
--

CREATE TABLE `hoopla_terms` (
  `idTERMS` int(11) NOT NULL,
  `title1TERMS` varchar(70) NOT NULL,
  `desc1TERMS` text NOT NULL,
  `title2TERMS` varchar(70) NOT NULL,
  `desc2TERMS` text NOT NULL,
  `title3TERMS` varchar(70) NOT NULL,
  `desc3TERMS` text NOT NULL,
  `title4TERMS` varchar(70) NOT NULL,
  `desc4TERMS` text NOT NULL,
  `deschargaplaceTERMS` varchar(80) NOT NULL,
  `harga1TERMS` varchar(20) NOT NULL,
  `place1TERMS` varchar(80) NOT NULL,
  `harga2TERMS` varchar(20) NOT NULL,
  `place2TERMS` varchar(80) NOT NULL,
  `harga3TERMS` varchar(20) NOT NULL,
  `place3TERMS` varchar(80) NOT NULL,
  `harga4TERMS` varchar(20) DEFAULT NULL,
  `place4TERMS` varchar(80) DEFAULT NULL,
  `createdateTERMS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateTERMS` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_terms`
--

INSERT INTO `hoopla_terms` (`idTERMS`, `title1TERMS`, `desc1TERMS`, `title2TERMS`, `desc2TERMS`, `title3TERMS`, `desc3TERMS`, `title4TERMS`, `desc4TERMS`, `deschargaplaceTERMS`, `harga1TERMS`, `place1TERMS`, `harga2TERMS`, `place2TERMS`, `harga3TERMS`, `place3TERMS`, `harga4TERMS`, `place4TERMS`, `createdateTERMS`, `updatedateTERMS`) VALUES
(1, 'Order by Whatsapp/Line/SMS', 'Pemesanan dan pengecekan ketersediaan barang dilakukan dengan mengirimkan chat ke admin Hoopla melalui WA, LINE atau SMS.', 'Mengisi formulir pemesanan', 'Setelah melakukan pemesanan melalui chat, Penyewa akan diminta untuk mengisi Form Penyewaan melalui Link yang dikirimkan oleh Hoopla melalui WA, LINE atau SMS. Di dalam Form tersebut, Penyewa akan mengisi data diri dan tipe mainan yang ingin disewa. Tenang, Cuma butuh 1 (satu) menit kok buat mengisi Form Penyewaan Hoopla :)', 'Bayar', 'Setelah Form Penyewaan di submit, Penyewa akan diberi tenggat waktu untuk membayar mainan yang akan disewa.', 'Kami antar mainannya!', 'Hoopla akan memberikan jadwal pengantaran dan mainan siap diantar!', 'Berapa biaya pengantarannya?', 'Rp 20.000,00', 'Kecamatan Batu Aji, Batu Ampar, Bengkong, Nongsa, Sagulung, Sei Beduk, Sekupang', 'Rp 15.000,00', 'Kecamatan Lubuk Baja', 'Rp 10.000,00', 'Kecamatan Batam Kota', 'Rp 10.000,00', 'Kecamatan Batam Kota', '2017-10-16 14:31:14', '2017-11-27 07:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_terms_caratitip`
--

CREATE TABLE `hoopla_terms_caratitip` (
  `idTERMSTITIP` int(11) NOT NULL,
  `titleTERMSTITIP` varchar(70) NOT NULL,
  `textTERMSTITIP` text NOT NULL,
  `syaratTERMSTITIP` text NOT NULL,
  `caraTERMSTITIP` text NOT NULL,
  `createdateTERMSTITIP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateTERMSTITIP` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_terms_caratitip`
--

INSERT INTO `hoopla_terms_caratitip` (`idTERMSTITIP`, `titleTERMSTITIP`, `textTERMSTITIP`, `syaratTERMSTITIP`, `caraTERMSTITIP`, `createdateTERMSTITIP`, `updatedateTERMSTITIP`) VALUES
(1, 'Mau titip barang kamu di Hoopla?', 'Bingung mainan anak mulai menumpuk dan mulai tidak terawat? Yuuk titip sewa di Hoopla, kami akan merawat barang Anda dan membayar Anda.', '<ul>\r\n<li>Kondisi barang sesuai dengan standar mainan di Hoopla.</li>\r\n<li>Diutamakan merek-merek yang premium dengan kondisi barang setidaknya 90% layak pakai.</li>\r\n<li>Titip sewa dilandaskan dengan asas kepercayaan.</li>\r\n</ul>', '<ul>\r\n<li>Kirim data barang (jenis, merek dan kondisi barang) beserta foto detail mainan melalui WA maupun Line.</li>\r\n<li>Hoopla akan menghubungi anda jika barang yang diajukan sesuai dengan standar dan kriteria Hoopla.</li>\r\n<li>Barang akan diantarkan langsung ke alamat Hoopla dalam keadaan bersih untuk dilakukan cek fisik barang secara langsung.</li>\r\n<li>Anda akan menandatangani Kontrak Titip Sewa dengan Hoopla (ditandatangani di atas materai 6000).</li>\r\n<li>Barang yang dititip akan masuk ke dalam Instagram dan Website Hoopla maksimal 3 hari setelah Kontrak Titip Sewa ditandatangani.</li>\r\n<li>Setelah Kontrak ditandatangani, barang yang di titip sewa akan berada dalam kepemilikan sementara Hoopla.</li>\r\n<li>Hoopla akan merawat barang yang dititip sewakan dengan sebaik-baiknya, namun Hoopla tidak bertanggung jawab jika kerusakan ditimbulkan oleh Penyewa.</li>\r\n<li>Anda akan menerima laporan barang pada tanggal 1 (satu) setiap bulannya.</li>\r\n<li>Jika dalam waktu 3 (tiga) bulan barang yang dititip tidak tersewa, maka Hoopla akan mengevaluasi dan berhak mengembalikan barang tersebut kepada Anda sebelum jangka waktu Kontrak berakhir.</li>\r\n</ul>', '2017-10-16 15:33:06', '2017-10-16 15:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_type_rental`
--

CREATE TABLE `hoopla_type_rental` (
  `idTYPE` int(11) NOT NULL,
  `namaTYPE` varchar(70) NOT NULL,
  `statusTYPE` int(1) NOT NULL,
  `createdateTYPE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateTYPE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_type_rental`
--

INSERT INTO `hoopla_type_rental` (`idTYPE`, `namaTYPE`, `statusTYPE`, `createdateTYPE`, `updatedateTYPE`) VALUES
(1, 'Mom\'s Stuff', 1, '2017-10-02 13:35:06', '2017-11-01 02:37:54'),
(2, 'Bouncer', 1, '2017-10-02 13:35:15', '2017-11-01 10:00:46'),
(3, 'Baby Carrier & Stroller', 1, '2017-11-04 08:24:55', '0000-00-00 00:00:00'),
(4, 'Jumperoo', 1, '2017-11-04 13:06:17', '0000-00-00 00:00:00'),
(5, 'Walker', 1, '2017-11-04 13:13:39', '0000-00-00 00:00:00'),
(6, 'Baby Chair', 1, '2017-11-04 13:29:29', '0000-00-00 00:00:00'),
(7, 'Car Seat', 1, '2017-11-07 09:51:47', '0000-00-00 00:00:00'),
(8, 'Playhouse, Slide and Swing', 1, '2017-11-07 10:05:37', '0000-00-00 00:00:00'),
(10, 'Earmuff', 1, '2017-11-08 02:07:05', '0000-00-00 00:00:00'),
(11, 'Safety', 1, '2017-11-08 02:19:35', '0000-00-00 00:00:00'),
(12, 'Ride On', 1, '2017-11-08 02:24:54', '0000-00-00 00:00:00'),
(13, 'Early Education', 1, '2017-11-08 03:10:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_users_admin`
--

CREATE TABLE `hoopla_users_admin` (
  `idADMIN` int(11) NOT NULL,
  `emailADMIN` varchar(40) NOT NULL,
  `passwordADMIN` varchar(129) NOT NULL,
  `createdateADMIN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusADMIN` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_users_admin`
--

INSERT INTO `hoopla_users_admin` (`idADMIN`, `emailADMIN`, `passwordADMIN`, `createdateADMIN`, `statusADMIN`) VALUES
(1, 'admin@hooplarentalmainan.com', '2ba84d7e1afe795f526943940fd40f48a6681b8d7b206fcab2fc6cbaf86f3244039f5ef1ddfc546ba76d74edf529645fdaa96109befa226eb56fb9cf05b2f441', '2017-09-26 10:04:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_visitor`
--

CREATE TABLE `hoopla_visitor` (
  `idVISITOR` int(11) NOT NULL,
  `ipVISITOR` varchar(18) NOT NULL,
  `dateVISITOR` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_visitor`
--

INSERT INTO `hoopla_visitor` (`idVISITOR`, `ipVISITOR`, `dateVISITOR`) VALUES
(1, '120.188.93.178', '2017-10-22'),
(2, '66.102.6.237', '2017-10-23'),
(3, '36.78.191.188', '2017-10-23'),
(4, '66.102.6.7', '2017-10-23'),
(5, '66.102.6.239', '2017-10-24'),
(6, '66.102.6.9', '2017-10-24'),
(7, '36.76.0.195', '2017-10-24'),
(8, '66.102.6.239', '2017-10-25'),
(9, '36.76.0.195', '2017-10-25'),
(10, '66.102.6.9', '2017-10-25'),
(11, '66.102.6.241', '2017-10-26'),
(12, '64.233.172.174', '2017-10-27'),
(13, '36.76.0.195', '2017-10-27'),
(14, '64.233.172.176', '2017-10-28'),
(15, '64.233.172.174', '2017-10-29'),
(16, '36.84.229.225', '2017-10-29'),
(17, '66.102.6.5', '2017-10-29'),
(18, '64.233.172.174', '2017-10-30'),
(19, '66.102.6.5', '2017-10-30'),
(20, '113.212.163.70', '2017-10-30'),
(21, '64.233.172.176', '2017-10-31'),
(22, '66.102.6.9', '2017-10-31'),
(23, '113.212.163.70', '2017-10-31'),
(24, '64.233.172.178', '2017-10-31'),
(25, '66.102.6.7', '2017-11-01'),
(26, '113.212.163.70', '2017-11-01'),
(27, '110.137.70.191', '2017-11-01'),
(28, '64.233.172.178', '2017-11-01'),
(29, '36.84.229.175', '2017-11-01'),
(30, '64.233.172.174', '2017-11-02'),
(31, '125.163.154.212', '2017-11-02'),
(32, '66.102.6.5', '2017-11-02'),
(33, '113.212.163.70', '2017-11-02'),
(34, '114.125.52.77', '2017-11-02'),
(35, '114.124.247.72', '2017-11-02'),
(36, '114.125.53.235', '2017-11-02'),
(37, '114.125.35.43', '2017-11-02'),
(38, '114.125.35.44', '2017-11-02'),
(39, '114.125.56.0', '2017-11-02'),
(40, '114.125.42.174', '2017-11-02'),
(41, '114.125.35.54', '2017-11-02'),
(42, '114.125.35.38', '2017-11-02'),
(43, '36.76.5.237', '2017-11-03'),
(44, '66.102.6.9', '2017-11-03'),
(45, '114.4.79.30', '2017-11-04'),
(46, '120.188.6.67', '2017-11-04'),
(47, '66.102.6.5', '2017-11-04'),
(48, '36.77.35.152', '2017-11-04'),
(49, '113.212.163.70', '2017-11-04'),
(50, '114.4.83.44', '2017-11-05'),
(51, '36.69.16.196', '2017-11-06'),
(52, '66.102.6.237', '2017-11-06'),
(53, '66.102.6.9', '2017-11-06'),
(54, '64.233.172.176', '2017-11-07'),
(55, '66.102.6.105', '2017-11-07'),
(56, '36.69.16.196', '2017-11-07'),
(57, '113.212.163.70', '2017-11-07'),
(58, '64.233.172.178', '2017-11-07'),
(59, '64.233.172.169', '2017-11-08'),
(60, '113.212.163.70', '2017-11-08'),
(61, '66.102.6.36', '2017-11-08'),
(62, '64.233.172.178', '2017-11-09'),
(63, '66.102.6.103', '2017-11-09'),
(64, '64.233.172.174', '2017-11-09'),
(65, '66.102.6.100', '2017-11-10'),
(66, '110.137.87.80', '2017-11-10'),
(67, '64.233.172.169', '2017-11-13'),
(68, '66.249.82.122', '2017-11-14'),
(69, '66.249.82.122', '2017-11-14'),
(70, '36.77.52.205', '2017-11-14'),
(71, '64.233.172.167', '2017-11-14'),
(72, '36.77.52.205', '2017-11-15'),
(73, '64.233.172.169', '2017-11-15'),
(74, '36.77.188.178', '2017-11-15'),
(75, '36.77.54.233', '2017-11-16'),
(76, '64.233.172.169', '2017-11-16'),
(77, '36.84.229.145', '2017-11-17'),
(78, '66.102.6.103', '2017-11-17'),
(79, '66.102.6.230', '2017-11-18'),
(80, '125.163.156.224', '2017-11-18'),
(81, '66.102.6.230', '2017-11-19'),
(82, '114.125.11.223', '2017-11-19'),
(83, '120.188.39.237', '2017-11-20'),
(84, '66.102.6.228', '2017-11-20'),
(85, '66.102.6.232', '2017-11-20'),
(86, '66.102.6.232', '2017-11-21'),
(87, '36.72.180.28', '2017-11-22'),
(88, '64.233.172.169', '2017-11-22'),
(89, '113.212.163.70', '2017-11-22'),
(90, '66.102.6.228', '2017-11-23'),
(91, '36.72.180.28', '2017-11-23'),
(92, '113.212.163.70', '2017-11-23'),
(93, '114.125.43.107', '2017-11-23'),
(94, '66.102.6.228', '2017-11-24'),
(96, '::1', '2017-11-24'),
(95, '130.67.12.11', '2017-11-27'),
(97, '::1', '2017-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `hoopla_why`
--

CREATE TABLE `hoopla_why` (
  `idWHY` int(11) NOT NULL,
  `titleWHY` varchar(80) NOT NULL,
  `descWHY` text NOT NULL,
  `pointWHY` text NOT NULL,
  `title2WHY` varchar(80) NOT NULL,
  `mustWHY` varchar(80) NOT NULL,
  `descmustWHY` text NOT NULL,
  `must2WHY` varchar(80) NOT NULL,
  `descmust2WHY` text NOT NULL,
  `createdateWHY` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateWHY` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoopla_why`
--

INSERT INTO `hoopla_why` (`idWHY`, `titleWHY`, `descWHY`, `pointWHY`, `title2WHY`, `mustWHY`, `descmustWHY`, `must2WHY`, `descmust2WHY`, `createdateWHY`, `updatedateWHY`) VALUES
(1, 'Kalo bisa rental, <br> ngapain beli?', 'Mainan terbukti dapat meningkatkan/menstimulasi gerak motorik bayi dan anak. Tapi tentunya tidak serta merta para orang tua harus membeli mainan yang diinginkan untuk si buah hati, karena saat ini mainan bayi dan anak bisa disewa. Banyak alasan mengapa menyewa mainan lebih baik daripada membeli:', '[[\"Harga mainan dengan brand bagus harganya sangat mahal\",\"Produk dengan brand premium seperti Fisher Price atau Evenflo Exercauser misalnya sangatlah mahal. Harga retail mainan baru untuk tipe jumperoo misalnya bisa mencapai Rp 2.000.000 lebih belum termasuk ongkos kirim, dan itu hanya untuk satu mainan. Bayangkan berapa banyak uang yang harus dikeluarkan oleh para orang tua apabila ingin membeli lebih dari satu mainan. Akan lebih bermanfaat jika uangnya disimpan untuk kebutuhan yang lain.\"],[\"Kebutuhan mainan setiap usia bayi dan anak berbeda.\",\"Dikarenakan cepatnya pertumbuhan pada bayi, setiap mainan biasanya hanya cocok untuk beberapa waktu saja, setelahnya bayi akan memberontak apabila dipaksakan menggunakan satu mainan. Contoh, produk Nuna Leaf sangat cocok untuk menenangkan bayi usia 1-5 bulan. Namun setelah itu bayi tidak akan betah lagi karena di atas 5 bulan bayi biasanya akan mulai berguling dan banyak gerak.\"],[\"Tidak semua bayi dan anak menyukai mainan.\",\"Tidak semua bayi dan anak suka dan betah apabila diletakkan di suatu mainan. Apabila bayi\\/anak tidak suka\\/tidak cocok terhadap suatu mainan, tentunya orang tua akan merasa menyesal telah mengeluarkan uang yang tidak sedikit untuk membeli suatu mainan.\"],[\"Mainan anak memakan tempat.\",\"Mainan-mainan anak saat ini besar-besar dan cukup memakan tempat di rumah. Apabila hanya 1-2 mainan mungkin masih ok, namun kalau di atas itu? Untuk beberapa orang, mungkin dengan banyaknya mainan akan membuat rumah terasa tidak nyaman dikarenakan keterbatasan tempat untuk menyimpan mainan-mainan tersebut.\"]]', 'Lalu, kenapa mesti <br> di Hoopla?', 'Bersih dan Aman', 'Kebersihan dan kehigienisan merupakan prioritas utama Hoopla. Seluruh mainan Hoopla selalu dibersihkan dengan cleaner anti-bacterial khusus mainan sebelum disewakan ke Penyewa. Selain itu, setelah setiap pemakaian, Hoopla selalu mengecek mainan untuk memastikan mainan dalam keadaan baik dan aman digunakan untuk Penyewa selanjutnya.', 'Hoopla Memiliki Paket Spesial', 'Hoopla juga menawarkan paket Grow Up With Hoopla dan paket Happy Mom, dimana Anda dapat menyewa mainan serta perlengkapan bayi dan anak dengan harga murah', '2017-11-16 06:52:38', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoopla_about`
--
ALTER TABLE `hoopla_about`
  ADD PRIMARY KEY (`idABOUT`);

--
-- Indexes for table `hoopla_age_join_rental`
--
ALTER TABLE `hoopla_age_join_rental`
  ADD PRIMARY KEY (`idAGEJOINRENTAL`);

--
-- Indexes for table `hoopla_age_rental`
--
ALTER TABLE `hoopla_age_rental`
  ADD PRIMARY KEY (`idAGE`);

--
-- Indexes for table `hoopla_barang_rental`
--
ALTER TABLE `hoopla_barang_rental`
  ADD PRIMARY KEY (`idRENTAL`);

--
-- Indexes for table `hoopla_barang_sale`
--
ALTER TABLE `hoopla_barang_sale`
  ADD PRIMARY KEY (`idSALE`);

--
-- Indexes for table `hoopla_brand_rental`
--
ALTER TABLE `hoopla_brand_rental`
  ADD PRIMARY KEY (`idBRAND`);

--
-- Indexes for table `hoopla_category_sale`
--
ALTER TABLE `hoopla_category_sale`
  ADD PRIMARY KEY (`idCATSALE`);

--
-- Indexes for table `hoopla_category_trivia`
--
ALTER TABLE `hoopla_category_trivia`
  ADD PRIMARY KEY (`idCATTRIVIA`);

--
-- Indexes for table `hoopla_ci_sessions`
--
ALTER TABLE `hoopla_ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `hoopla_contact`
--
ALTER TABLE `hoopla_contact`
  ADD PRIMARY KEY (`idCONTACT`);

--
-- Indexes for table `hoopla_intro_sale`
--
ALTER TABLE `hoopla_intro_sale`
  ADD PRIMARY KEY (`idINTROSALE`);

--
-- Indexes for table `hoopla_menus_admin`
--
ALTER TABLE `hoopla_menus_admin`
  ADD PRIMARY KEY (`idMENU`);

--
-- Indexes for table `hoopla_package`
--
ALTER TABLE `hoopla_package`
  ADD PRIMARY KEY (`idPAKET`);

--
-- Indexes for table `hoopla_post_trivia`
--
ALTER TABLE `hoopla_post_trivia`
  ADD PRIMARY KEY (`idTRIVIA`);

--
-- Indexes for table `hoopla_slider`
--
ALTER TABLE `hoopla_slider`
  ADD PRIMARY KEY (`idSLIDER`);

--
-- Indexes for table `hoopla_social`
--
ALTER TABLE `hoopla_social`
  ADD PRIMARY KEY (`idSOCIAL`);

--
-- Indexes for table `hoopla_terms`
--
ALTER TABLE `hoopla_terms`
  ADD PRIMARY KEY (`idTERMS`);

--
-- Indexes for table `hoopla_terms_caratitip`
--
ALTER TABLE `hoopla_terms_caratitip`
  ADD PRIMARY KEY (`idTERMSTITIP`);

--
-- Indexes for table `hoopla_type_rental`
--
ALTER TABLE `hoopla_type_rental`
  ADD PRIMARY KEY (`idTYPE`);

--
-- Indexes for table `hoopla_users_admin`
--
ALTER TABLE `hoopla_users_admin`
  ADD PRIMARY KEY (`idADMIN`);

--
-- Indexes for table `hoopla_visitor`
--
ALTER TABLE `hoopla_visitor`
  ADD PRIMARY KEY (`idVISITOR`);

--
-- Indexes for table `hoopla_why`
--
ALTER TABLE `hoopla_why`
  ADD PRIMARY KEY (`idWHY`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoopla_about`
--
ALTER TABLE `hoopla_about`
  MODIFY `idABOUT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoopla_age_join_rental`
--
ALTER TABLE `hoopla_age_join_rental`
  MODIFY `idAGEJOINRENTAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `hoopla_age_rental`
--
ALTER TABLE `hoopla_age_rental`
  MODIFY `idAGE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hoopla_barang_rental`
--
ALTER TABLE `hoopla_barang_rental`
  MODIFY `idRENTAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `hoopla_barang_sale`
--
ALTER TABLE `hoopla_barang_sale`
  MODIFY `idSALE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hoopla_brand_rental`
--
ALTER TABLE `hoopla_brand_rental`
  MODIFY `idBRAND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `hoopla_category_sale`
--
ALTER TABLE `hoopla_category_sale`
  MODIFY `idCATSALE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hoopla_category_trivia`
--
ALTER TABLE `hoopla_category_trivia`
  MODIFY `idCATTRIVIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hoopla_contact`
--
ALTER TABLE `hoopla_contact`
  MODIFY `idCONTACT` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hoopla_intro_sale`
--
ALTER TABLE `hoopla_intro_sale`
  MODIFY `idINTROSALE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoopla_menus_admin`
--
ALTER TABLE `hoopla_menus_admin`
  MODIFY `idMENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `hoopla_package`
--
ALTER TABLE `hoopla_package`
  MODIFY `idPAKET` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hoopla_post_trivia`
--
ALTER TABLE `hoopla_post_trivia`
  MODIFY `idTRIVIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hoopla_slider`
--
ALTER TABLE `hoopla_slider`
  MODIFY `idSLIDER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hoopla_social`
--
ALTER TABLE `hoopla_social`
  MODIFY `idSOCIAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoopla_terms`
--
ALTER TABLE `hoopla_terms`
  MODIFY `idTERMS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoopla_terms_caratitip`
--
ALTER TABLE `hoopla_terms_caratitip`
  MODIFY `idTERMSTITIP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoopla_type_rental`
--
ALTER TABLE `hoopla_type_rental`
  MODIFY `idTYPE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `hoopla_users_admin`
--
ALTER TABLE `hoopla_users_admin`
  MODIFY `idADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoopla_visitor`
--
ALTER TABLE `hoopla_visitor`
  MODIFY `idVISITOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `hoopla_why`
--
ALTER TABLE `hoopla_why`
  MODIFY `idWHY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
