-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 05:07 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruwaiskita`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `uid` int(11) NOT NULL,
  `Usr_id` varchar(20) NOT NULL,
  `Usr_pwd` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Nickname` varchar(10) NOT NULL,
  `Address_grp` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Usr_level` varchar(5) NOT NULL,
  `Usr_status` int(1) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Phone1` varchar(20) NOT NULL,
  `Phone2` varchar(20) NOT NULL,
  `Phone_ext` varchar(20) NOT NULL,
  `Phone_emg` varchar(50) NOT NULL,
  `Created_at` int(11) NOT NULL,
  `Update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`uid`, `Usr_id`, `Usr_pwd`, `Name`, `Nickname`, `Address_grp`, `Address`, `Position`, `Usr_level`, `Usr_status`, `Email`, `Photo`, `Phone1`, `Phone2`, `Phone_ext`, `Phone_emg`, `Created_at`, `Update_at`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'Admin', 'Ruwais-1/2', '', 'Administrator', '5', 1, 'admin@ruwaiskita.com', 'admin.png', '999', '', '', '', 0, '2019-11-04 15:59:37'),
(2, 'umu_ahyar', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Neng Hamdiyah', 'Umu Ahyar', 'Ruwais-3', 'RHC#3, Building Y-5651', 'Sekertaris', '3', 1, 'umu_ahyar@yahoo.co.id', 'umu_ahyar.png', '0563723995', '', '', '', 0, '2019-11-04 06:04:52'),
(3, 'bude_joko', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Bude Joko', 'Bude Joko', 'Ruwais-3', 'Bldg', 'user', '1', 1, 'bude_joko@yahoo.com', 'girl-user.jpg', '123456', '', '', '', 1572687910, '2019-11-20 08:10:16'),
(4, 'maulahaz', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'maulana', '', 'Ruwais-5', '', 'user', '1', 1, 'maulahaz2@yahoo.co.id', '', '456', '', '', '', 1571760661, '2019-11-03 09:34:00'),
(5, 'bunda_yuna', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'bunda_yuna', 'Ana', 'Ruwais-3', 'Bldg', 'user', '1', 1, 'bunda_yuna@yahoo.com', 'girl-user.jpg', '123456', '', '', '', 1572687910, '2019-11-20 08:10:16'),
(6, 'sabar', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Sabar Abu Hafshah', 'Sabar', 'Ruwais-4', 'Ruwais 3, Building 80', 'Presiden', '4', 1, 'sabar_abuhafsah@yahoo.com.sg', '', '221', '', '', '', 1572688330, '2020-12-23 04:34:18'),
(8, 'fera_ijo', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Fera Uminya Kesar', 'Fera', 'Ruwais-3', '', '', '1', 1, 'feraoke@yahoo.com', '', '', '', '', '', 1573028613, '2020-12-23 04:14:42'),
(9, 'muardi', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'muardi', 'Muardi Abu', 'Ruwais-1/2', 'Test', 'user', '1', 1, 'Muardi@borouge.com', '', '08785453322', '', '', '', 1573972407, '2019-11-17 06:34:48'),
(10, 'sdf', '9a6747fc6259aa374ab4e1bb03074b6ec672cf99', 'sdf', '', '', '', 'user', '1', 1, 'cbzsdg@dhdf.cgfhf', '', '', '', '', '', 1573972587, '2019-11-17 06:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `uid` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Headline` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Date_posted` int(11) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `Comment` text NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Keyword` text NOT NULL,
  `Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`uid`, `Title`, `Category`, `Headline`, `Content`, `Author`, `Date_posted`, `URL`, `Comment`, `Status`, `Keyword`, `Picture`) VALUES
(1, 'Ayam Geprek', 'Resep', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facere.lorem5 Lorem ipsum dolor sit amet.', '<p>Bahan-bahan 1/2 kg ayam (buat adonan basah & adonan kering secara terpisah) Adonan basah nya menggunakan tepung yg sama tapi di beri air es Tepung serbaguna Sasa klo ga ada bisa pke terigu biasa+ royco Bahan A: 2 siung bawang putih 1/2 sdt ladaku Seujung jari jahe (geprek) Bahan Sambel : 1 buah cabai merah besar / 4 cabe keriting 20 buah cabai rawit 4 siung bawang putih 1 siung bawang merah Sepotong terasi ABC Langkah Potong ayam menjadi beberapa bagian/ sesuai selera. Resep aslinya hanya ambil dagingnya saja tp Kalau saya lebih memilih utk tidak buang tulangnya, krn saya suka bgt gtu makan daging yg nempel2 di tulang ?(kaya ada tantangannya)wkwk Kalau dagingnya. Lebih baik dipotong tipis tapi lebar. Agar bumbunya merasa di dagingnya Baluri ayam dengan bawang putih, merica, kaldu (Royco)yg telah di haluskan Ayam Geprek (masakan rumahan sederhana) recipe step 4 photo Ambil ayam satu persatu dan masukkan ke piring yang telah diisi tepung serbaguna kering. Tekan& cubit2 agar tepungnya menempel. Ayam Geprek (masakan rumahan sederhana) recipe step 5 photo Lalu celupkan ayam ke adonan tepung yang basah. Lalu ke adonan kering lagi. Ulangi sampai 5kali atau sesuai selera ya Ayam Geprek (masakan rumahan sederhana) recipe step 6 photo Setelah tepung sudah menempel lumayan tebal.Goreng ayam dengan minyak yang agak banyakan. Agar ayam nya crispy dan cantik. Ayam Geprek (masakan rumahan sederhana) recipe step 7 photo Setalah ayam berubah warna menjadi kuning keemasan, angkat ayam. Tiriskan. Ayam Geprek (masakan rumahan sederhana) recipe step 8 photo Bumbu Sambel (cabe, bawang, terasi) di haluskan. Ayam Geprek (masakan rumahan sederhana) recipe step 9 photo Geprek ayam tadi, lalu sirami ayam dengan bumbu sambel yang sudah di goreng. Dan ayam geprek pun siap dinikmati</p>\r\n<p><img src=\"C:\\\\\\\\Users\\\\\\\\abu_ahyar\\\\\\\\Pictures\\\\\\\\Adam.jpg\" alt=\"My alt text\" width=\"354\" height=\"116\"></p>', 'Chika', 1558510927, 'Ayam-Geprek', '', 'Published', '', 'ayam-geprek.jpg'),
(2, 'Bothok Teri Pepaya Jepang', 'Resep', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facere.lorem5 Lorem ipsum dolor sit amet.', 'Beli kelapa parutnya 500 gram, sebagian dibikin untuk menu krucils, sebagian lagi untuk menu umma & abanya\r\n\r\nIni daun pepaya jepangnya hasil panen di samping rumah ? ga perlu beli, kapan mau tinggal petik aja.   ', 'Diah Didi', 1558535054, 'Bothok-Teri-Pepaya-Jepang', '', 'Published', '', 'kk-unicorn.jpg'),
(3, 'Ayam kecap ', 'Resep', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facere.lorem5 Lorem ipsum dolor sit amet.', '\r\nBahan-bahan\r\n\r\n    1/2 kg ayam (potong menjadi beberapa bagian)\r\n    Minyak goreng\r\n    air bersih\r\n    Bumbu A :\r\n    4 siung bawang merah\r\n    3 siung bawang putih\r\n    1 sdt ketumbar\r\n    1 sdt merica\r\n    1 buah kemiri\r\n    Bumbu B :\r\n    3 sdm makan gula merah yg telah disisir\r\n    2 sdm kecap manis\r\n    Royco\r\n    Rempah :\r\n    2 ruas lengkuas (geprek)\r\n    1 batang serai (memarkan)\r\n    2 helai daun salam\r\n    Sedikit asam jawa\r\n\r\nLangkah\r\n\r\n    Goreng setengah matang ayam, tiriskan (supaya bumbu menyerap sampai ke dalam daging dan tekstur daging lembut)\r\n\r\n    Ulek halus bawang2, merica dan ketumbar. Lalu oseng bumbu dengan menggunakan 4 sdm minyak goreng\r\n    Ayam kecap (masakan rumahan sederhana) recipe step 2 photo\r\n\r\n    Masukkan lengkuas, salam dan serai. Oseng bumbu sampai harum\r\n    Ayam kecap (masakan rumahan sederhana) recipe step 3 photo\r\n\r\n    Setelah bumbu harum, tambahkan 3 gelas air putih bersih. Tunggu mendidih sambil di aduk\r\n    Ayam kecap (masakan rumahan sederhana) recipe step 4 photo\r\n\r\n    Setelah mendidih, masukkan ayam. Tambahkan juga gula merah dan royco juga asam jawa\r\n    Ayam kecap (masakan rumahan sederhana) recipe step 5 photo\r\n\r\n    Aduk lagi lalu tutup wajan supaya ayamnya makin empuk dan aroma mya tidak kabur. Kecilkan nyala api nya.\r\n    Ayam kecap (masakan rumahan sederhana) recipe step 6 photo\r\n\r\n    Setelah 5 menit, balikkan ayam agar bumbu nya merata ke bagian ayam yang lain.\r\n    Ayam kecap (masakan rumahan sederhana) recipe step 7 photo\r\n\r\n    Koreksi rasa lalu tambahkan kecap. tunggu sampai air nya surut\r\n    Ayam kecap (masakan rumahan sederhana) recipe step 8 photo\r\n\r\n    Ketika air nya surut dan mengental, aduk sebentar. Lalu matikan kompor dan ayam kecap siap di nikmati ^^\r\n', 'Farida Cooking', 1523509200, 'Ayam-kecap ', '', 'Published', '', 'Ayam-kecap.jpg'),
(4, 'Balado ikan asin pakang', 'Resep', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facere.lorem5 Lorem ipsum dolor sit amet.', 'Bumbu dasarnya sama dengan yg di resep balado teri, tapi karena gak punya cabe merah besar saya gnti dengan cabe merah keriting\r\n\r\nTIPS:\r\nTunggu tumisan bumbu balado dingin baru dicampur dengan ikan pakang supaya ikan nya awet kriuk\r\n\r\nBahan-bahan\r\n\r\n    1 bungkus ikan asin pakang\r\n    10 buah cabe merah keriting\r\n    5 siung bawang merah\r\n    3 siung bawang putih\r\n    Secukupnya garam (tidak perlu banyak2 krn ikan sdh asin)\r\n    1-2 sdt gula\r\n    1 sdt kaldu bubuk\r\n    Secukupnya minyak\r\n\r\nLangkah\r\n\r\n    Panaskan minyak, goreng ikan dengan api kecil (hati2 mudah gosong krn ikan ny tipis sekali) sampai kriuk. Sisihkan\r\n\r\n    Haluskan cabe dan bawang2 (bisa diulek/blender). Tumis bumbu hingga matang. Bumbui dengan garam, gula dan kaldu. Sisihkan\r\n\r\n    Ketika tumisan bumbu sudah dingin, campur dengan ikan pakang. Sajikan\r\n', 'Chika', 1523509200, 'Balado-ikan-asin-pakang', '', 'Published', '', 'balado-ikan-asin.jpg'),
(5, 'Sup Tomat Daging Sapi', 'Resep', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facere.lorem5 Lorem ipsum dolor sit amet.', '\r\n\r\nSup Tomat Daging Sapi yang satu ini memang tepat tersaji untuk segala musim. Terlebih di saat musim penghujan, kehangatan sup ini bakal menyatukan seluruh keluarga di meja makan. Bayangkan betapa lahapnya mereka menikmati sup ini, pasti ibu manapun akan bahagia melihatnya!\r\n\r\nSelain sebagai menu pendamping ataupun menu utama, yang namanya resep sup selalu cocok bagi mereka juga yang tengah menjalani masa pemulihan. Selain Nasi Tim, berbagai resep yang mudah dicerna lainnya umumnya datang dari kategori sup. Selain Sup Tomat ini, perkenalkanlah resep-resep sup lainnya seperti Sup Jamur, Sup Krim Jagung, ataupun Sup Kimlo. Rasa lezatnya akan membuat siapapun menjadi bersemangat makan!\r\n\r\nSekarang, mari kita berbelanja berbagai kebutuhan untuk membuat sup ini dan segera memasak di rumah. Isi dari sup ini begitu bervariasi, tidak sulit untuk dibuat, dan sangat bernutrisi. Pasti teman-teman sekalian akan bersemangat membuatnya!\r\nBahan-bahan\r\nRoyco Kaldu Rasa Sapi\r\nYang diperlukan:\r\nRoyco Kaldu Sapi\r\nBahan\r\n\r\n    350 g daging sapi cincang\r\n    400 g tomat merah, potong dadu kecil\r\n    2 buah kentang, potong dadu 1 cm\r\n    2 buah wortel, potong dadu kecil\r\n    1 sdm minyak, untuk menumis\r\n    1 buah bawang bombay, potong kotak kecil\r\n    3 siung bawang putih, cincang\r\n    800 ml air\r\n    ¼ sdt merica putih bubuk\r\n    1 sdm Royco Kaldu Sapi\r\n    ½ sdm gula pasir\r\n    1.5 sdt daun basil kering\r\n    1.5 sdt daun oregano kering\r\n    1 sdt daun thyme kering\r\n    150 g makaroni, rebus\r\n\r\nCara membuat\r\nMenumis bahan sup tomat daging sapi.\r\n1\r\n\r\nPanaskan minyak, tumis bawang bombay dan bawang putih hingga harum.\r\nMenumis daging untuk sup tomat.\r\n2\r\n\r\nMasukkan daging sapi cincang, wortel, dan tomat. Tumis hingga daging matang.\r\nMemasak kuah sup tomat.\r\n3\r\n\r\nTuang air, merica, dan Royco Kaldu Sapi, aduk rata.\r\nMenambahkan sayuran ke dalam kuah sup tomat.\r\n4\r\n\r\nMasukkan kentang, gula, daun basil, oregano, dan thyme. Masak kembali di atas api sedang hingga kentang matang.\r\nSup tomat tersaji di atas mangkuk putih.\r\n5\r\n\r\nMasukkan makaroni, aduk sebentar. Angkat. Sajikan.\r\n\r\nMudah bukan cara membuatnya? Sekarang tinggal menunggu waktu makan untuk menyantapnya bersama keluarga tercinta. Selamat menikmati!\r\n', 'Royco', 1523509200, 'Sup-Tomat-Daging-Sapi', '', 'Published', '', 'Sup-Tomat-Daging-Sapi.jpg'),
(8, 'Resep Keroket Enak', 'Resep', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facere.lorem5 Lorem ipsum dolor sit amet.', ' Contoh upload resep keroket', 'Fera', 1558697592, 'Resep-Keroket-Enak', '', 'Published', '', 'kroket-50310251.jpg'),
(9, 'Cara Membuat Es Cendol & Resep Es Cendol Pandan Yang Segar', 'Resep', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facere.lorem5 Lorem ipsum dolor sit amet.', '<p xss=removed>Biasanya minuman es cendol tidak jauh berbeda dengan Es Dawet Ayu Khas kota Banjar Negara Kabupaten Banyumas, akan tetapi sebutan di tiap daerah tidaklah sama untuk menyatakan minuman yang berjeniskan sama. Es cendol serta merta tidak serupa di tiap daerahnya rata rata perbedaan sanggup diliat dari komposisi atau bahan pelengkapnya. Pemanis dipakai juga kadang tidak serupa antara daerah satu dan lainnya, ada yg memanfaatkan gula merah atau gula Jawa dan ada pun yg memanfaatkan gula pasir sebagai bahan pemanisnya. Keduanya mempunyai citarasa yang tentunya nyaris sama tergantung anda lebih senang memakai mana.</p>\r\n<p xss=removed>Disaat waktu pada masa kemarau terutama di Indonesia rata-rata bakul es cendol di serang pembeli sampai anda tidak jarang ada yang tak kebagian pula. Nah kami dapat memberikan resep es cendol pada anda supaya anda dapat membuatnya sendiri di rumah anda dan tak butuh khawatir anda beli diluar rumah. Untuk hal itu simak saja resep es cendol yang berikut ini kami berikan pada anda.</p>\r\n<h2 xss=removed>Bahan-Bahan Untuk Membuat Es Cendol Pandan Yang Segar</h2>\r\n<ul xss=removed>\r\n<li xss=removed>Siapkan 125 gr tepung beras</li>\r\n<li xss=removed>Siapkan 75 gr tepung kanji</li>\r\n<li xss=removed>Siapkan 25 gr tepung hunkwe</li>\r\n<li xss=removed>Siapkan 150 ml air suji (dibuat dari 20 lembar daun suji yg dihaluskan ditambah dgn 175 ml air)</li>\r\n<li xss=removed>Siapkan 500 ml air ditambahkan 1 tetes pasta pandan</li>\r\n<li xss=removed>Siapkan 1 sendok makan air kapur sirih</li>\r\n<li xss=removed>Siapkan Es batu secukupnya</li>\r\n<li xss=removed>Siapkan 10 daging buah nangka, yang telah dipotong-potong sesuai selera anda</li>\r\n</ul>\r\n<h2 xss=removed>CaraMembuat Membuat Santan/Saus Santan Es Cendol Pandan Segar</h2>\r\n<ul xss=removed>\r\n<li xss=removed>1 liter santan yg telah dibuat dari 1 butir parutan kelapa</li>\r\n<li xss=removed>5 lembar daun dari pandan</li>\r\n<li xss=removed>1/2 sendok teh garam (secukupnya)</li>\r\n<li xss=removed>Seluruhnya bahan dimasak bersamaan sampai kemudian mendidih</li>\r\n</ul>\r\n<h2 xss=removed>Buat Membuat Juruh atau Saus Gula Merah Es Cendol</h2>\r\n<ul xss=removed>\r\n<li xss=removed>200 gr dari gula merah</li>\r\n<li xss=removed>50 gr gula pasir</li>\r\n<li xss=removed>Kemudian 100 ml air</li>\r\n</ul>\r\n<h2 xss=removed>Cara Untuk Membuat Es Cendol Pandan Segar dan Harum</h2>\r\n<ul xss=removed>\r\n<li xss=removed>Pertama campurkan tepung beras, tepung hunkwe, tepung kanji, air pasta pandan, air suji dan air kapur sirih.</li>\r\n<li xss=removed>Masaklah sambil terus di aduk-aduk sampai mengental dan meletup-letup.</li>\r\n<li xss=removed>Saring bersama dengan cetakan cendol di atas wadah yg telah diisi bersama air dingin.</li>\r\n<li xss=removed>Tekan-tekan adonan cendol sampai adonan habis jadi cendol.</li>\r\n<li xss=removed>Saringlah cendol yg telah menjadi dan kemudian tiriskan.</li>\r\n<li xss=removed>Sajikan cendol ke dalam gelas dengan penambahan saus santan pula juruh atau saus gula merah, kemudian potongan daging buah nangka dan pasti saja pecahan es batu biar cendol semakin mantap dan segar.</li>\r\n</ul>\r\n<p xss=removed>Hmm segar banget kan diwaktu cuaca panas seperti waktu panas ini. Selamat coba dan berkreasi dirumah ya. Baca juga Resep Membuat Combro Berasa Renyah dan Pedas</p>', 'fera_ijo', 1558752672, 'Cara-Membuat-Es-Cendol-Resep-Es-Cendol-Pandan-Yang-Segar', '', 'Published', '', 'web-Es_Cendol.jpg'),
(10, 'Sambal Ati Ampela Ayam', 'Resep', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facere.lorem5 Lorem ipsum dolor sit amet.', '<section id=\"ingredients\" class=\"ingredients-container document__section\">\r\n<div class=\"document__title-container split-header\">\r\n<div class=\"split-header__secondary shrink-xs subtle\">\r\n<div id=\"serving_recipe_9987799\" data-record=\"/id/resep?partial=serving\"> </div>\r\n</div>\r\n</div>\r\n<div class=\"ingredient-list card-sm\">\r\n<ol id=\"new_ingredient\" class=\"list-unstyled ingredient-list__contents ui-sortable\" data-behavior=\"sortable\" data-sort-url=\"/id/recipes/9987799-sambal-ati-ampela-ayam/ingredients/sort\" data-record-list=\"  <li class=\" data-record=\"/id/recipes/9987799-sambal-ati-ampela-ayam/ingredients\">\r\n<li id=\"ingredient_38668439\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">5 buah</span> Ati Ayam tanpa Ampela (bisa pake ampela juga, karna saya ga suka jadi ga pake)</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668440\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">1 ons</span> cabe merah keriting</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668441\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">5 siung</span> bawang putih</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668442\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">3 siung</span> bawang merah</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668443\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">1 buah</span> tomat</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668444\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">Secukupnya</span> garam</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668445\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">Secukupnya</span> gula</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668446\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">Secukupnya</span> masako</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668447\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">Secukupnya</span> air</div>\r\n</div>\r\n</li>\r\n</ol>\r\n</div>\r\n</section>\r\n<section id=\"steps\" class=\"steps-container document__section\">\r\n<div class=\"document__title-container split-header\">\r\n<h2 class=\"document__title split-header__main\">Langkah</h2>\r\n<div class=\"split-header__secondary shrink-xs subtle\">\r\n<div id=\"cooking_time_recipe_9987799\" data-record=\"/id/resep?partial=cooking_time\"> </div>\r\n</div>\r\n</div>\r\n<ol id=\"new_step\" class=\"numbered-list ui-sortable\" data-behavior=\"sortable\" data-sort-url=\"/id/recipes/9987799-sambal-ati-ampela-ayam/steps/sort\" data-record-list=\"  <li class=\" data-record=\"/id/recipes/9987799-sambal-ati-ampela-ayam/steps\">\r\n<li id=\"step_25836826\" class=\"step numbered-list__item card-sm\" data-record=\"/id/recipes/9987799-sambal-ati-ayam/steps\">\r\n<div data-field-group=\"\">\r\n<div class=\"numbered-list__contents\">\r\n<div class=\"step__description\">\r\n<div class=\"prose\">\r\n<div data-field=\"textarea\" data-field-name=\"description\" data-field-hint=\"Tekan ENTER untuk menambah langkah\" data-placeholder=\"Bagaimana membuatnya?\" data-maxlength=\"500\">\r\n<p>Rebus ati ayam yang sudah di bersihkan sampai matang, angkat lalu potong-potong sesuai selera.Haluskan cabai, bawang merah, bawang putih, dan tomat. (Bisa menggunakan blender, dan jangan lupa saat memblender di beri minyak sedikit) (bisa juga di giling di cobek)Tumis bumbu yang telah d haluskan di wajan dengan diberi sedikit minyak sampai harum. Masukkan garam 1/4 sdt, gula 1sdm, dan masako 1/4 sdt ke dalam 1/4 gelas air, aduk lalu masukkan ke tumisan cabai. Masak sampai airnya mengering dan cabai matang dengan sempurna lalu masukkan potong ati ayam. Aduk sebentar lalu angkat dan sajikan.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</li>\r\n</ol>\r\n</section>', 'fera_ijo', 1564450411, 'Sambal-Ati-Ampela-Ayam', '', 'Published', '', 'sambal-ati-ampela.jpg'),
(11, 'Sambal Goreng Tahu Nangka', 'Resep', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facere.lorem5 Lorem ipsum dolor sit amet.', 'Content is here...<section id=\"ingredients\" class=\"ingredients-container document__section\">\r\n<div class=\"document__title-container split-header\">\r\n<p class=\"MsoNormal\" xss=removed><strong><span xss=removed>Bahan-bahan</span></strong></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>1. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>10 buah</span></strong><span xss=removed> tahu Sumedang</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>2. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>12 batang</span></strong><span xss=removed> kacang panjang, petiki</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>3. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>500 gram</span></strong><span xss=removed> nangka muda, potong2</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>4. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>Secukupnya</span></strong><span xss=removed> gula, garam, kaldu bubuk</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>5. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>3 lembar</span></strong><span xss=removed> daun salam</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>6. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>1 jempol</span></strong><span xss=removed> lengkuas, memarkan</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>7. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>50 gram</span></strong><span xss=removed> fiber creme + 200ml air hangat aduk rata/santan)</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>8. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>Secukupnya</span></strong><span xss=removed> air</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>9. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>Secukupnya</span></strong><span xss=removed> tulang iga sapi, st 3 besar2</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>10.<span xss=removed>            </span></span></span>&lt;!--[endif]--&gt;<span xss=removed>Bumbu halus:</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>11.<span xss=removed>            </span></span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>7 buah</span></strong><span xss=removed> cabe merah besar (sy yg tdk pedas)</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>12.<span xss=removed>            </span></span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>5 buah</span></strong><span xss=removed> cabe merah keriting</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>13.<span xss=removed>            </span></span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>8 siung</span></strong><span xss=removed> bawang merah</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>14.<span xss=removed>            </span></span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>5 siung</span></strong><span xss=removed> bawang putih</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>15.<span xss=removed>            </span></span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>1 bungkus kecil</span></strong><span xss=removed> terasi ABC</span></p>\r\n<p class=\"MsoNormal\" xss=removed><strong><span xss=removed>Langkah</span></strong></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>1.<span xss=removed>     </span></span></span>&lt;!--[endif]--&gt;<span xss=removed>Rebus iga hingga empuk dan mnegeluarkan kaldu dengan api kecil. Lalu masukan nangka muda. Masak hingga empuk. Lalu masukan kacang panjang. Masak 1/2 matang.</span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/e270fbe9a89513b5\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"_x0000_t75\" coordsize=\"21600,21600\" o:spt=\"75\" o:preferrelative=\"t\" path=\"m@4@5l@4@11@9@11@9@5xe\" filled=\"f\" stroked=\"f\">\r\n <v joinstyle=\"miter\">\r\n <v>\r\n  <v eqn=\"if lineDrawn pixelLineWidth 0\">\r\n  <v eqn=\"sum @0 1 0\">\r\n  <v eqn=\"sum 0 0 @1\">\r\n  <v eqn=\"prod @2 1 2\">\r\n  <v eqn=\"prod @3 21600 pixelWidth\">\r\n  <v eqn=\"prod @3 21600 pixelHeight\">\r\n  <v eqn=\"sum @0 0 1\">\r\n  <v eqn=\"prod @6 1 2\">\r\n  <v eqn=\"prod @7 21600 pixelWidth\">\r\n  <v eqn=\"sum @8 21600 0\">\r\n  <v eqn=\"prod @7 21600 pixelHeight\">\r\n  <v eqn=\"sum @10 21600 0\">\r\n </v>\r\n <v o:extrusionok=\"f\" gradientshapeok=\"t\" o:connecttype=\"rect\">\r\n <o v:ext=\"edit\" aspectratio=\"t\">\r\n</v><v id=\"Picture_x0020_11\" o:spid=\"_x0000_i1035\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\" href=\"https://cookpad.com/id/step/images/e270fbe9a89513b5\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image001.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image001.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/e86d71a1d9285b14\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_10\" o:spid=\"_x0000_i1034\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\" href=\"https://cookpad.com/id/step/images/e86d71a1d9285b14\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image002.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image002.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/9eaa61ad47693993\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_9\" o:spid=\"_x0000_i1033\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\" href=\"https://cookpad.com/id/step/images/9eaa61ad47693993\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image003.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image003.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>2.<span xss=removed>     </span></span></span>&lt;!--[endif]--&gt;<span xss=removed>Tumis bumbu halus hingga harum bersama dengan lengkuas dan daun salam. Masukann dalam panci rebusan sayur. Beri gula garam dan kaldu bubuk. Masak hingga mendidih. Masukan tahu.</span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/c89619ade5e3cd4b\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_8\" o:spid=\"_x0000_i1032\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\" href=\"https://cookpad.com/id/step/images/c89619ade5e3cd4b\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image004.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image004.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/2f3ae2222800bf21\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_7\" o:spid=\"_x0000_i1031\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\" href=\"https://cookpad.com/id/step/images/2f3ae2222800bf21\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image005.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image005.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/a2faa5e0b85fca13\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_6\" o:spid=\"_x0000_i1030\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\" href=\"https://cookpad.com/id/step/images/a2faa5e0b85fca13\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image006.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image006.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>3.<span xss=removed>     </span></span></span>&lt;!--[endif]--&gt;<span xss=removed>Lalu masukan cairan fiber creme. Masak hingga mendidih dan bumbu meresap. Koreksi rasa.</span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/f5760f59e39b4360\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_5\" o:spid=\"_x0000_i1029\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 3 foto\" href=\"https://cookpad.com/id/step/images/f5760f59e39b4360\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image007.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 3 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image007.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 3 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>4.<span xss=removed>     </span></span></span>&lt;!--[endif]--&gt;<span xss=removed>Sajikan.</span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/80aa144cb5098c7b\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_4\" o:spid=\"_x0000_i1028\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\" href=\"https://cookpad.com/id/step/images/80aa144cb5098c7b\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image008.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image008.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/bfe142212b3412e2\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_3\" o:spid=\"_x0000_i1027\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\" href=\"https://cookpad.com/id/step/images/bfe142212b3412e2\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image009.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image009.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/da461123f8adee05\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_2\" o:spid=\"_x0000_i1026\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\" href=\"https://cookpad.com/id/step/images/da461123f8adee05\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image010.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image010.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>5.<span xss=removed>     </span></span></span>&lt;!--[endif]--&gt;<span xss=removed>????</span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/e9034bb81d43061f\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_1\" o:spid=\"_x0000_i1025\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 5 foto\" href=\"https://cookpad.com/id/step/images/e9034bb81d43061f\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image011.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 5 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image011.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 5 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n</div>\r\n</section>', 'umu_ahyar', 1564447576, 'Sambal-Goreng-Tahu-Nangka', '', 'Draft', '', 'sambal-goreng-tahu-nangka.jpg');
INSERT INTO `tbl_artikel` (`uid`, `Title`, `Category`, `Headline`, `Content`, `Author`, `Date_posted`, `URL`, `Comment`, `Status`, `Keyword`, `Picture`) VALUES
(12, 'Pindang patin', 'Resep', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facere.lorem5 Lorem ipsum dolor sit amet.', '<section id=\"ingredients\" class=\"ingredients-container document__section\" xss=removed>\r\n<div class=\"ingredient-list card-sm\">\r\n<ol class=\"list-unstyled ingredient-list__contents ui-sortable\" xss=removed data-behavior=\"sortable\" data-sort-url=\"/id/recipes/9985062-pindang-patin/ingredients/sort\" data-record-list=\"  <li class=\" id=\"new_ingredient\" data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n    <div class=\"field-group--ingredient\">\r\n      <div class=\"ingredient__details\" itemprop=\"ingredients\" data-field-name=\"quantity_and_name\" data-field-hint=\'Tekan ENTER untuk menambah bahan\' data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">\r\n      </div>\r\n\r\n      <div class=\"ingredient__tools field-group__hover editor__tool editor__tool--pc subtle\">\r\n        <a class=\"faint\" tabindex=\"-1\" title=\"Hapus bahan\" data-behavior=\"delete\" data-message=\"Apakah kamu ingin menghapusnya? \" href=\"#\"><i class=\"icf icf--close \"></i></a>\r\n        <i data-behavior=\"handle\" class=\"icf icf--sortable \"></i>\r\n      </div>\r\n    </div>\r\n  </li>\r\n\">\r\n<li id=\"ingredient_38663212\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\" xss=removed>1/2 kg</span> ikan patin</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663213\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Garam</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663214\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Kaldu bubuk</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663215\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Gula</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663216\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Cabe rawit</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663217\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Tomat</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663218\" class=\"ingredient ingredient--headline\" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Bahan halus</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663219\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\" xss=removed>5</span> cabe merah</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663220\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\" xss=removed>3</span> bawang merah</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663221\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\" xss=removed>2</span> bawang putih</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663222\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Kunyit</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663223\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Jahe</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663224\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Cabe rawit</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663225\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Daun salam sereh skip ya krn stok habis</div>\r\n</div>\r\n</li>\r\n</ol>\r\n</div>\r\n</section>\r\n<section id=\"steps\" class=\"steps-container document__section\" xss=removed>\r\n<div class=\"document__title-container split-header\" xss=removed>\r\n<h2 class=\"document__title split-header__main\" xss=removed>Langkah</h2>\r\n<div class=\"split-header__secondary shrink-xs subtle\" xss=removed>\r\n<div id=\"cooking_time_recipe_9985062\" data-record=\"/id/resep?partial=cooking_time\">\r\n<div class=\"subtle placeholder\" xss=removed data-field=\"\" data-field-name=\"cooking_time\" data-placeholder=\"Lama memasak?\" data-maxlength=\"50\"> </div>\r\n</div>\r\n</div>\r\n</div>\r\n<ol class=\"numbered-list ui-sortable\" xss=removed data-behavior=\"sortable\" data-sort-url=\"/id/recipes/9985062-pindang-patin/steps/sort\" data-record-list=\"  <li class=\" id=\"new_step\" data-record=\"/id/recipes/9985062-pindang-patin/steps\">\r\n    <div>\r\n      <div class=\"numbered-list__contents\">\r\n        <div class=\"step__description\">\r\n          <div class=\"prose\">\r\n            <div itemprop=\"recipeInstructions\" data-field=\"textarea\" data-field-name=\"description\" data-field-hint=\'Tekan ENTER untuk menambah langkah\' data-placeholder=\"Bagaimana membuatnya?\" data-maxlength=\"500\">\r\n              <p></p>\r\n            </div>\r\n          </div>\r\n\r\n        </div>\r\n\r\n        <div class=\"step-image\" data-field=\"image\" data-field-name=\"images[1]\" data-ajax-upload=\"/id/step/images\">\r\n    <div class=\"step-image__container step-image__container--placeholder image-upload editor__tool\">\r\n    <div class=\"step-image__upload\">\r\n      <i class=\"icf icf--camera icf--medium\"></i>\r\n      <p class=\"x-small\">\r\n        <i class=\"icf icf--add \"></i>\r\n        Tambah foto\r\n      </p>\r\n      &lt;input type=\"file\" name=\"file\" aria-label=\"Tambah Foto\" /&gt;\r\n    </div>\r\n  </div>\r\n\r\n</div>\r\n<div class=\"step-image\" data-field=\"image\" data-field-name=\"images[2]\" data-ajax-upload=\"/id/step/images\">\r\n    <div class=\"step-image__container step-image__container--placeholder image-upload editor__tool\">\r\n    <div class=\"step-image__upload\">\r\n      <i class=\"icf icf--camera icf--medium\"></i>\r\n      <p class=\"x-small\">\r\n        <i class=\"icf icf--add \"></i>\r\n        Tambah foto\r\n      </p>\r\n      &lt;input type=\"file\" name=\"file\" aria-label=\"Tambah Foto\" /&gt;\r\n    </div>\r\n  </div>\r\n\r\n</div>\r\n<div class=\"step-image\" data-field=\"image\" data-field-name=\"images[3]\" data-ajax-upload=\"/id/step/images\">\r\n    <div class=\"step-image__container step-image__container--placeholder image-upload editor__tool\">\r\n    <div class=\"step-image__upload\">\r\n      <i class=\"icf icf--camera icf--medium\"></i>\r\n      <p class=\"x-small\">\r\n        <i class=\"icf icf--add \"></i>\r\n        Tambah foto\r\n      </p>\r\n      &lt;input type=\"file\" name=\"file\" aria-label=\"Tambah Foto\" /&gt;\r\n    </div>\r\n  </div>\r\n\r\n</div>\r\n\r\n\r\n        <div class=\"field-group__hover subtle editor__tool editor__tool--pc\">\r\n          <div class=\"pull-right\">\r\n            <a class=\"faint\" tabindex=\"-1\" data-behavior=\"delete\" data-message=\"Apakah kamu ingin menghapusnya? \" href=\"#\"><i class=\"icf icf--close \"></i></a>\r\n            <i data-behavior=\"handle\" class=\"icf icf--sortable \"></i>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n  </li>\r\n\">\r\n<li id=\"step_25833858\" class=\"step numbered-list__item card-sm\" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/steps\">\r\n<div data-field-group=\"\">\r\n<div class=\"numbered-list__contents\" xss=removed>\r\n<div class=\"step__description\" xss=removed>\r\n<div class=\"prose\" xss=removed>\r\n<div data-field=\"textarea\" data-field-name=\"description\" data-field-hint=\"Tekan ENTER untuk menambah langkah\" data-placeholder=\"Bagaimana membuatnya?\" data-maxlength=\"500\">\r\n<p xss=removed>Cuci ikan patin sampai bersih</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[1]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n \r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[2]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n \r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[3]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n</div>\r\n</div>\r\n</li>\r\n<li id=\"step_25834067\" class=\"step numbered-list__item card-sm\" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/steps\">\r\n<div data-field-group=\"\">\r\n<div class=\"numbered-list__contents\" xss=removed>\r\n<div class=\"step__description\" xss=removed>\r\n<div class=\"prose\" xss=removed>\r\n<div data-field=\"textarea\" data-field-name=\"description\" data-field-hint=\"Tekan ENTER untuk menambah langkah\" data-placeholder=\"Bagaimana membuatnya?\" data-maxlength=\"500\">\r\n<p xss=removed>Blender bumbu halus lalu tumis hingga harum dan masukan potongan tomat dan cabe rawit utuh</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[1]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n \r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[2]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n \r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[3]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n</div>\r\n</div>\r\n</li>\r\n<li id=\"step_25834068\" class=\"step numbered-list__item card-sm\" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/steps\">\r\n<div data-field-group=\"\">\r\n<div class=\"numbered-list__contents\" xss=removed>\r\n<div class=\"step__description\" xss=removed>\r\n<div class=\"prose\" xss=removed>\r\n<div data-field=\"textarea\" data-field-name=\"description\" data-field-hint=\"Tekan ENTER untuk menambah langkah\" data-placeholder=\"Bagaimana membuatnya?\" data-maxlength=\"500\">\r\n<p xss=removed>Lalu masukan ikan patin aduk dan tambahkan dengan air</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[1]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n \r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[2]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n \r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[3]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n</div>\r\n</div>\r\n</li>\r\n<li id=\"step_25834069\" class=\"step numbered-list__item card-sm\" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/steps\">\r\n<div data-field-group=\"\">\r\n<div class=\"numbered-list__contents\" xss=removed>\r\n<div class=\"step__description\" xss=removed>\r\n<div class=\"prose\" xss=removed>\r\n<div data-field=\"textarea\" data-field-name=\"description\" data-field-hint=\"Tekan ENTER untuk menambah langkah\" data-placeholder=\"Bagaimana membuatnya?\" data-maxlength=\"500\">\r\n<p xss=removed>Setelah itu masukan garam,gula,kaldu bubuk tes rasa.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</li>\r\n</ol>\r\n</section>', 'umu_ahyar', 1564451212, 'Pindang-patin', '', 'Published', '', 'pindang-patin.jpg'),
(13, 'Kehilangan Passport dengan Residen Visa UAE', 'Umum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facere.lorem5 Lorem ipsum dolor sit amet.', '<p>Just sharing, karena banyak request dari temen2 untuk share pengalaman pribadi saya tentang bagaimana step yang harus dilakukan jika mengalami hilang paspor di Indonesia yg memiliki residen visa uae. Kurang lebih step2 nya sebagai berikut :</p>\r\n<p>Part 1 - Di Indonesia</p>\r\n<p>1.Segera membuat laporan di kantor polisi terdekat. Buat surat rangkap 2 (1 untuk kantor imigrasi untuk buat paspor baru, 1 untuk uae konsular di Indonesia). Untuk lokasi konsular, ada di Mega kuningan, Jakarta. Silahkan cari lokasi nya di gmap.</p>\r\n<p>2.Membuat paspor baru, bawa surat kehilangan dr kepolisian. Akan ada proses BAP, tentang kronologis hilangnya paspor. Kepala kantor imigrasi akan menentukan diterima atau tidaknya BAP kita. Kemudian akan ada interview dan foto, dan penerbitan paspor baru. Usahakan membawa semua surat aseli untuk : surat keterangan kehilangan, KK, Akta kelahiran atau ijazah terakhir, KTP. Juga fotokopi paspor lama dan residence visa yang hilang, sertakan juga print salary certificate yg menerangkan kita bekerja di UAE (bahasa Inggris). Maka akan diminta mengisi form penerbitan paspor urgent, karena kita ada residen visa aktif. Lama proses bisa variatif antara 2 - 7 hari kerja, atau bahkan lebih hingga diterbitkan paspor baru, karena tergantung keputusan dr kepala kantor Imigrasi.</p>\r\n<p>3.Setelah mendapatkan paspor baru, saatnya ke UAE konsular untuk mengajukan formulir pembuatan temporary visa untuk entry lagi ke UAE. Akan dijelaskan syarat2 yg diperlukan, konfirm dl aja ke konsular untuk menanyakan apa syaratnya. (Mungkin bisa berubah sewaktu2 nanti). Waktu kejadian sy, syarat nya kurang lebih seperti ini :</p>\r\n<p>a. Paspor Baru (aseli beserta copy)</p>\r\n<p>b. Copy paspor dan visa yang hilang (jangan jadi satu halaman, satu lembar copy paspor, satu copy visa)</p>\r\n<p>c. Pas photo 4x6 background bebas, 2 lembar (Saran saya background putih, karena nantinya bisa dipakai lagi utk apply visa yang baru)</p>\r\n<p>d. Salary certificate (English dan Arabic)</p>\r\n<p>e. Surat keterangan kehilangan dr kepolisian</p>\r\n<p>f. Mengisi formulir pengajuan temporary visa</p>\r\n<p>g. Copy EIDA jika ada</p>\r\n<p>(Semua copy yg di atas usahakan copy berwarna, sesuai standar urusan di UAE)</p>\r\n<p>Untuk surat keterangan kehilangan dari kepolisian, ini harus diterjemahkan ke arabic, dan dilegalisasi.</p>\r\n<p>1. Surat aseli : disahkan di notaris, kemenkumham, kemenlu dan UAE konsular</p>\r\n<p>2. Surat terjemahan arabic : disahkan di kemenkumham, kemenlu dan UAE konsular</p>\r\n<p>Proses penerjemahan dan pengesahan, kira2 makan waktu 8 hari kerja, tergantung kondisi, bisa lebih cepat atau lebih lama (seringnya lebih lama), tau sendiri lah urusan birokrasi di Indonesia.</p>\r\n<p>Proses terjemahan dan legalisasi, saya sarankan melalui agen penerjemah yang terpercaya, untuk menghindari delay. Biaya variatif, untuk kejadian saya, 2 dokumen kena total 2.8 juta, sudah sampai selesai di konsular untuk legalisasinya. Tekankan kepada legal translator nya, penulisan nama kita di terjemahan surat kehilangan nya, harus sesuai 100?ngan penulisan nama di EIDA atau visa (arabic).</p>\r\n<p>Nah setelah semua syarat di atas komplit, barulah konsular UAE akan memproses pengajuan temporary entry visa kita ke UAE. Proses nya makan waktu kurang lebih 1-3 hari, atau satu minggu. Yg ini variatif, karena tergantung dr imigrasi UAE. Akan dikenakan biaya 130AED dan dibayar di konsular UAE, dan perlu diketahui hanya kartu MASTERCARD yg akan diterima. Jd siapkan kartu anda dan jangan lupa saldo di dalam nya.</p>\r\n<p>Tunggu hingga temporary visa anda keluar, klo sudah konfirm keluar baru silahkan arrange tiket untuk balik ke UAE.</p>\r\n<p>Part 2 - Setelah tiba di UAE</p>\r\n<p>Saat tiba di UAE, anda harus ke imigrasi yg manual, bukan auto gate. Sama officer nya akan diarahkan ke salah satu officer dr polisi imigrasi di bandara. Anda akan ditahan disana kurang lebih seminggu.... -becanda- </p>\r\n<p>Anda akan disuruh nunggu, mungkin 20 menitan. Semua dokumen akan dia bawa ke kantor, paspor dan set surat yg dikeluarkan UAE konsular di jakarta, mgkn untuk verifikasi data. Setelah semua diverifikasi, anda akan diijinkan lewat ke imigrasi, di stamp manual di passport (stamp entry uae) dan kemudian semua dokumen anda dikembalikan.</p>\r\n<p>Setelah itu silahkan kontak ke HR untuk mengajukan stamping residence visa di paspor yang baru. </p>\r\n<p>Syaratnya :</p>\r\n<p>1. Paspor baru & copy nya</p>\r\n<p>2. Copy paspor & visa yang hilang</p>\r\n<p>3. Copy EIDA</p>\r\n<p>4. Scan daman insurance (print online dari system)</p>\r\n<p>5. Copy semua dokumen yang dikeluarkan UAE konsular</p>\r\n<p>6. Pas foto 2 lembar background putih</p>\r\n<p>Dan, anda akan mendapatkan residence visa baru yg sama validity nya dengan visa yg hilang, artinya bukan 3 tahun, tp sesua sisa masa aktif visa yang hilang.</p>\r\n<p> </p>\r\n<p> </p>\r\n<p>Sekian kurang lebih sharing dr saya. Kurang lebih nya saya mohon dimaafkan, silahkan di share ke group lain nya, untuk memberi sedikit gambaran jika di kemudian hari ada yg mengalami hal yg serupa dengan saya.</p>\r\n<p>Terimakasih.</p>\r\n<p>Wassalam.</p>\r\n<p><strong>HTP</strong></p>', 'Hendri TP', 1570432022, 'KEHILANGAN-PASPOR-DENGAN-RESIDEN-VISA-UAE', '', 'Published', '', 'passport-lost.jpg'),
(14, 'Membuat Tenancy Letter di Ruwais', 'Tips', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facere.lorem5 Lorem ipsum dolor sit amet.', '<p>Ini saran nggak official sih Pak, boleh dicoba, sebagian(yang saya tahu persis teman filipino dan arab). Mereka daftar sendiri online. Tidak lewat typing center.</p>\r\n<p>Bagian yang diminta attach tenancy letter. Mereka attach dengan surat pengantar perusahaan (untuk Borouge bisa di print online, pilih yang bahasa inggris, karena yang bahasa arab tidak ada keterangan tentang akomodasi/rumah ditanggung perusahaan).</p>\r\n<p>Ada beberapa typing centre yang pakai cara ini. Ada sebagian/kebanyakan nggak mau, harus pakai tenancy contract.</p>\r\n<p>Akibat paling buruk, aplikasinya di hold. Harus melengkapi dengan tenancy contract.</p>\r\n<p>Tapi sejauh ini sih, teman teman tadi sukses. Visa nya bisa keluar.</p>\r\n<p>Monggo...</p>', 'Piccolo', 1570433079, 'Membuat-Tenancy-Letter-di-Ruwais', '', 'Published', '', 'RuwaisHousing.jpg'),
(15, 'Healthy Live with Zayed Water', 'Headline', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facere.lorem5 Lorem ipsum dolor sit amet.', '<p>Truly Emirati! Zayed Water is sustainably sourced from the natural oasis of Falaj Al Mualla that lies at the foothills of the legendary Hajar Mountains. Enriched naturally with essential minerals and low sodium, Zayed Water quenches thirst with optimum hydration</p>\r\n\r\n<h1>THIS WATER SAVES LIVES</h1>\r\n\r\n<p>663 million people in the world live without clean water. That means 1 in 10 people lack access to clean water. We are on a mission to change this with your help.</p>\r\n\r\n<p>For every bottle you purchase ZAYED donate water to a person in need of clean water through Emirates Red Crescent. Let’s give back to the world, TOGETHER. </p>\r\n\r\n<p> </p>\r\n\r\n<h1>SUSTAINABLE</h1>\r\n\r\n<p>We are committed to preservation and protection of the environement that we live and planet that we call home. Zayed Water uses 45% less plastic in packaging which has remarkable advantages to the environment. Not only does this consume less energy to manufacture, it also reduces carbon emissions. Drink responsibly, Make an impact. </p>\r\n', 'Admin', 1596256398, 'Healthy-Live-with-Zayed-Water', '', 'Published', 'keyword', 'zayedwater.png'),
(16, 'Headline News Number-1', 'Headline', 'Headline News Number-1. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Truly Emirati! Zayed Water is sustainably sourced from the natural oasis of Falaj Al Mualla that lies at the foothills of the legendary Hajar Mountains. Enriched naturally with essential minerals and low sodium, Zayed Water quenches thirst with optimum hydration</p>\r\n\r\n<h1>THIS WATER SAVES LIVES</h1>\r\n\r\n<p>663 million people in the world live without clean water. That means 1 in 10 people lack access to clean water. We are on a mission to change this with your help.</p>\r\n\r\n<p>For every bottle you purchase ZAYED donate water to a person in need of clean water through Emirates Red Crescent. Let’s give back to the world, TOGETHER. </p>\r\n\r\n<p> </p>\r\n\r\n<h1>SUSTAINABLE</h1>\r\n\r\n<p>We are committed to preservation and protection of the environement that we live and planet that we call home. Zayed Water uses 45% less plastic in packaging which has remarkable advantages to the environment. Not only does this consume less energy to manufacture, it also reduces carbon emissions. Drink responsibly, Make an impact. </p>\r\n', 'Admin', 1596256398, 'headline-news-number-1', '', 'Published', 'keyword', 'https://source.unsplash.com/lnf_RPbLw18'),
(17, 'Headline News Number-2', 'Headline', 'Headline News Number-2. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Truly Emirati! Zayed Water is sustainably sourced from the natural oasis of Falaj Al Mualla that lies at the foothills of the legendary Hajar Mountains. Enriched naturally with essential minerals and low sodium, Zayed Water quenches thirst with optimum hydration</p>\r\n\r\n<h1>THIS WATER SAVES LIVES</h1>\r\n\r\n<p>663 million people in the world live without clean water. That means 1 in 10 people lack access to clean water. We are on a mission to change this with your help.</p>\r\n\r\n<p>For every bottle you purchase ZAYED donate water to a person in need of clean water through Emirates Red Crescent. Let’s give back to the world, TOGETHER. </p>\r\n\r\n<p> </p>\r\n\r\n<h1>SUSTAINABLE</h1>\r\n\r\n<p>We are committed to preservation and protection of the environement that we live and planet that we call home. Zayed Water uses 45% less plastic in packaging which has remarkable advantages to the environment. Not only does this consume less energy to manufacture, it also reduces carbon emissions. Drink responsibly, Make an impact. </p>\r\n', 'Admin', 1596256398, 'headline-news-number-2', '', 'Published', 'keyword', 'https://source.unsplash.com/adLf6ztUQRI'),
(18, 'Headline News Number-3', 'Headline', 'Headline News Number-3. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Truly Emirati! Zayed Water is sustainably sourced from the natural oasis of Falaj Al Mualla that lies at the foothills of the legendary Hajar Mountains. Enriched naturally with essential minerals and low sodium, Zayed Water quenches thirst with optimum hydration</p>\r\n\r\n<h1>THIS WATER SAVES LIVES</h1>\r\n\r\n<p>663 million people in the world live without clean water. That means 1 in 10 people lack access to clean water. We are on a mission to change this with your help.</p>\r\n\r\n<p>For every bottle you purchase ZAYED donate water to a person in need of clean water through Emirates Red Crescent. Let’s give back to the world, TOGETHER. </p>\r\n\r\n<p> </p>\r\n\r\n<h1>SUSTAINABLE</h1>\r\n\r\n<p>We are committed to preservation and protection of the environement that we live and planet that we call home. Zayed Water uses 45% less plastic in packaging which has remarkable advantages to the environment. Not only does this consume less energy to manufacture, it also reduces carbon emissions. Drink responsibly, Make an impact. </p>\r\n', 'Admin', 1596256398, 'headline-news-number-3', '', 'Published', 'keyword', 'https://source.unsplash.com/cFRA3_hpkkY'),
(19, 'Headline News Number-4', 'Headline', 'Headline News Number-4. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Truly Emirati! Zayed Water is sustainably sourced from the natural oasis of Falaj Al Mualla that lies at the foothills of the legendary Hajar Mountains. Enriched naturally with essential minerals and low sodium, Zayed Water quenches thirst with optimum hydration</p>\r\n\r\n<h1>THIS WATER SAVES LIVES</h1>\r\n\r\n<p>663 million people in the world live without clean water. That means 1 in 10 people lack access to clean water. We are on a mission to change this with your help.</p>\r\n\r\n<p>For every bottle you purchase ZAYED donate water to a person in need of clean water through Emirates Red Crescent. Let’s give back to the world, TOGETHER. </p>\r\n\r\n<p> </p>\r\n\r\n<h1>SUSTAINABLE</h1>\r\n\r\n<p>We are committed to preservation and protection of the environement that we live and planet that we call home. Zayed Water uses 45% less plastic in packaging which has remarkable advantages to the environment. Not only does this consume less energy to manufacture, it also reduces carbon emissions. Drink responsibly, Make an impact. </p>\r\n', 'Admin', 1596256398, 'headline-news-number-4', '', 'Published', 'keyword', 'https://source.unsplash.com/WLUHO9A_xik'),
(22, 'Ruwais No Longer Restriction', 'artikel', 'headline', '<p>With immediate effect from Sunday August 9, 2020, the additional health and safety measures for Ruwais city residents will be eased. With immediate effect from Sunday August 9, 2020, the additional health and safety measures for Ruwais city residents will be eased. With immediate effect from Sunday August 9, 2020, the additional health and safety measures for Ruwais city residents will be eased.</p>\r\n\r\n<p>With immediate effect from Sunday August 9, 2020, the additional health and safety measures for Ruwais city residents will be eased. With immediate effect from Sunday August 9, 2020, the additional health and safety measures for Ruwais city residents will be eased. With immediate effect from Sunday August 9, 2020, the additional health and safety measures for Ruwais city residents will be eased.</p>\r\n\r\n<p>With immediate effect from Sunday August 9, 2020, the additional health and safety measures for Ruwais city residents will be eased. With immediate effect from Sunday August 9, 2020, the additional health and safety measures for Ruwais city residents will be eased. With immediate effect from Sunday August 9, 2020, the additional health and safety measures for Ruwais city residents will be eased.</p>\r\n\r\n<p>With immediate effect from Sunday August 9, 2020, the additional health and safety measures for Ruwais city residents will be eased. With immediate effect from Sunday August 9, 2020, the additional health and safety measures for Ruwais city residents will be eased. With immediate effect from Sunday August 9, 2020, the additional health and safety measures for Ruwais city residents will be eased.</p>\r\n', 'Admin', 1597231513, 'Ruwais-No-Longer-Restriction', '', 'Published', 'keyword', 'ruwais-half-free.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barengan`
--

CREATE TABLE `tbl_barengan` (
  `uid` int(11) NOT NULL,
  `Booker` varchar(20) NOT NULL,
  `Yg_pergi` varchar(20) NOT NULL,
  `Yg_pergi_tlp` varchar(20) NOT NULL,
  `Origin` varchar(100) NOT NULL,
  `Destination` varchar(100) NOT NULL,
  `Flight_by` varchar(100) NOT NULL,
  `Flight_dt` int(11) NOT NULL,
  `Flight_tm` int(11) NOT NULL,
  `Note` varchar(255) NOT NULL,
  `Updated_by` varchar(20) NOT NULL,
  `Created_dt` int(11) NOT NULL,
  `Updated_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barengan`
--

INSERT INTO `tbl_barengan` (`uid`, `Booker`, `Yg_pergi`, `Yg_pergi_tlp`, `Origin`, `Destination`, `Flight_by`, `Flight_dt`, `Flight_tm`, `Note`, `Updated_by`, `Created_dt`, `Updated_dtm`) VALUES
(2, 'hasmukh', 'hasmukh', '', 'DXB', 'CGK', 'Etihad, EY-472', 1585382400, 1585384448, 'Transit Singapura', 'fulan', 0, '2020-05-30 18:15:01'),
(3, 'admin', 'Firman', '0563421342', 'CGK', 'DWC', 'Etihad, EY-391', 1585605600, 1585430700, 'Etihad By Garuda', 'agusrx', 0, '2020-07-03 11:40:12'),
(26, 'vijay', 'vijay', '', 'CGK', 'AUH', 'Emirate EMR-556', 1587776400, 1587776400, 'test', '', 0, '2020-05-30 18:15:14'),
(27, 'antil', 'antil', '', 'DWC', 'CGK', 'Emirate EMR-556', 1588098600, 1588098600, 'test', '', 0, '2020-05-30 18:15:18'),
(28, 'budi', 'budi', '', 'CGK', 'DWC', 'India Air, ID-2119', 1587776400, 1587776400, 'Test', '', 0, '2020-05-30 18:15:23'),
(29, 'daniel', 'Daniel', '', 'CGK', 'AUH', 'GA-20990', 1590793200, 1590793200, 'Garuda by Etihad, Direct Flight', '', 0, '2020-06-04 16:53:29'),
(31, 'admin', 'Bharatayuda', '', 'DWC', 'CGK', 'Emirate EMR-50', 1591407000, 1591407000, 'Transit Singapura', '', 0, '2020-05-30 18:28:37'),
(33, 'admin', 'Freddy Hidayat', '0656812345', 'AUH', 'CGK', 'Emirate EMR-50', 1591425000, 1591425000, 'direct asli', '', 0, '2020-06-04 18:17:33'),
(34, 'admin', '-', '0', 'AUH', 'CGK', 'Emirate EMR-500', 1598886000, 1598886000, 'Transit to Singapore', '', 0, '2020-07-03 11:43:23'),
(35, 'admin', 'Ryan Borbon', '057687576465', 'SIL', 'DXB', 'GA-20990', 1596776400, 1596776400, 'Test Input 7am sharp', '', 0, '2020-07-03 14:10:32'),
(36, 'edik', '-', '0', 'AUH', 'CGK', 'Etihad, EY-452', 1599861600, 1599861600, 'Transit di Malaysia', '', 0, '2020-07-04 03:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_basket`
--

CREATE TABLE `tbl_basket` (
  `uid` int(11) NOT NULL,
  `Session_id` varchar(64) DEFAULT NULL,
  `Item_uid` int(11) NOT NULL,
  `Item` varchar(255) NOT NULL,
  `Item_color` varchar(50) DEFAULT NULL,
  `Item_size` varchar(50) DEFAULT NULL,
  `Price` decimal(7,2) DEFAULT NULL,
  `Tax` decimal(7,2) DEFAULT NULL,
  `Qty` text NOT NULL,
  `Date_added` int(11) NOT NULL,
  `Shopper_uid` varchar(20) NOT NULL,
  `ipAddress` varchar(60) DEFAULT NULL,
  `Notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_basket`
--

INSERT INTO `tbl_basket` (`uid`, `Session_id`, `Item_uid`, `Item`, `Item_color`, `Item_size`, `Price`, `Tax`, `Qty`, `Date_added`, `Shopper_uid`, `ipAddress`, `Notes`) VALUES
(148, '0f5r5b8mf20nen49ov7bj6nud59m2hmj', 2, 'Es Cendol', 'blank', 'blank', '10.00', '0.00', '1', 1576201116, 'bunda_yuna', '::1', ''),
(149, 'rnjqe2mmb2h3pkr5lv3b4ubhvasvabgo', 5, 'Cilor', 'blank', 'blank', '2.00', '0.00', '2', 1576560838, 'umu_ahyar', '::1', ''),
(151, 'hsbud5ncb8o7g145rlhfmmdpuu7p5al3', 6, 'Es Teler 77', 'blank', 'blank', '10.00', '0.00', '2', 1576675681, 'umu_ahyar', '::1', ''),
(152, '9i4keu7b9dl3de90hsu5lugfrdlcbeo6', 1, 'Martabak', 'blank', 'blank', '25.00', '0.00', '1', 1608544993, 'umu_ahyar', '::1', ''),
(153, 'mlaif26jdkcs9ojqhmkln6ugdict9g4p', 2, 'Es Cendol', 'blank', 'blank', '10.00', '0.00', '1', 1608547473, 'sabar', '::1', ''),
(154, 'bqbsdqruom4q54q4qe1crjv4g8mjaod1', 1, 'Martabak', 'blank', 'blank', '25.00', '0.00', '2', 1608548136, 'sabar', '::1', ''),
(155, 'qjk1vq2o2sig3b1aqu1pov2a17j8amd0', 8, 'Siomay', 'blank', 'blank', '20.00', '0.00', '1', 1608618801, 'sabar', '::1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `uid` int(11) NOT NULL,
  `Blog_Title` varchar(255) NOT NULL,
  `Blog_Categ` varchar(50) NOT NULL,
  `Blog_Content` text NOT NULL,
  `Blog_Author` varchar(50) NOT NULL,
  `Date_Published` int(11) NOT NULL,
  `Blog_URL` varchar(255) NOT NULL,
  `Blog_Comment` text NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Blog_Keyword` text NOT NULL,
  `Blog_Pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`uid`, `Blog_Title`, `Blog_Categ`, `Blog_Content`, `Blog_Author`, `Date_Published`, `Blog_URL`, `Blog_Comment`, `Status`, `Blog_Keyword`, `Blog_Pic`) VALUES
(1, 'Ayam Geprek', 'Resep', '<p>Bahan-bahan 1/2 kg ayam (buat adonan basah & adonan kering secara terpisah) Adonan basah nya menggunakan tepung yg sama tapi di beri air es Tepung serbaguna Sasa klo ga ada bisa pke terigu biasa+ royco Bahan A: 2 siung bawang putih 1/2 sdt ladaku Seujung jari jahe (geprek) Bahan Sambel : 1 buah cabai merah besar / 4 cabe keriting 20 buah cabai rawit 4 siung bawang putih 1 siung bawang merah Sepotong terasi ABC Langkah Potong ayam menjadi beberapa bagian/ sesuai selera. Resep aslinya hanya ambil dagingnya saja tp Kalau saya lebih memilih utk tidak buang tulangnya, krn saya suka bgt gtu makan daging yg nempel2 di tulang ?(kaya ada tantangannya)wkwk Kalau dagingnya. Lebih baik dipotong tipis tapi lebar. Agar bumbunya merasa di dagingnya Baluri ayam dengan bawang putih, merica, kaldu (Royco)yg telah di haluskan Ayam Geprek (masakan rumahan sederhana) recipe step 4 photo Ambil ayam satu persatu dan masukkan ke piring yang telah diisi tepung serbaguna kering. Tekan& cubit2 agar tepungnya menempel. Ayam Geprek (masakan rumahan sederhana) recipe step 5 photo Lalu celupkan ayam ke adonan tepung yang basah. Lalu ke adonan kering lagi. Ulangi sampai 5kali atau sesuai selera ya Ayam Geprek (masakan rumahan sederhana) recipe step 6 photo Setelah tepung sudah menempel lumayan tebal.Goreng ayam dengan minyak yang agak banyakan. Agar ayam nya crispy dan cantik. Ayam Geprek (masakan rumahan sederhana) recipe step 7 photo Setalah ayam berubah warna menjadi kuning keemasan, angkat ayam. Tiriskan. Ayam Geprek (masakan rumahan sederhana) recipe step 8 photo Bumbu Sambel (cabe, bawang, terasi) di haluskan. Ayam Geprek (masakan rumahan sederhana) recipe step 9 photo Geprek ayam tadi, lalu sirami ayam dengan bumbu sambel yang sudah di goreng. Dan ayam geprek pun siap dinikmati</p>\r\n<p><img src=\"C:\\\\\\\\Users\\\\\\\\abu_ahyar\\\\\\\\Pictures\\\\\\\\Adam.jpg\" alt=\"My alt text\" width=\"354\" height=\"116\"></p>', 'Chika', 1558510927, 'Ayam-Geprek', '', 'Published', '', 'ayam-geprek.jpg'),
(2, 'Bothok Teri Pepaya Jepang', 'Resep', 'Beli kelapa parutnya 500 gram, sebagian dibikin untuk menu krucils, sebagian lagi untuk menu umma & abanya\r\n\r\nIni daun pepaya jepangnya hasil panen di samping rumah ? ga perlu beli, kapan mau tinggal petik aja.   ', 'Diah Didi', 1558535054, 'Bothok-Teri-Pepaya-Jepang', '', 'Published', '', 'kk-unicorn.jpg'),
(3, 'Ayam kecap ', 'Resep', '\r\nBahan-bahan\r\n\r\n    1/2 kg ayam (potong menjadi beberapa bagian)\r\n    Minyak goreng\r\n    air bersih\r\n    Bumbu A :\r\n    4 siung bawang merah\r\n    3 siung bawang putih\r\n    1 sdt ketumbar\r\n    1 sdt merica\r\n    1 buah kemiri\r\n    Bumbu B :\r\n    3 sdm makan gula merah yg telah disisir\r\n    2 sdm kecap manis\r\n    Royco\r\n    Rempah :\r\n    2 ruas lengkuas (geprek)\r\n    1 batang serai (memarkan)\r\n    2 helai daun salam\r\n    Sedikit asam jawa\r\n\r\nLangkah\r\n\r\n    Goreng setengah matang ayam, tiriskan (supaya bumbu menyerap sampai ke dalam daging dan tekstur daging lembut)\r\n\r\n    Ulek halus bawang2, merica dan ketumbar. Lalu oseng bumbu dengan menggunakan 4 sdm minyak goreng\r\n    Ayam kecap (masakan rumahan sederhana) recipe step 2 photo\r\n\r\n    Masukkan lengkuas, salam dan serai. Oseng bumbu sampai harum\r\n    Ayam kecap (masakan rumahan sederhana) recipe step 3 photo\r\n\r\n    Setelah bumbu harum, tambahkan 3 gelas air putih bersih. Tunggu mendidih sambil di aduk\r\n    Ayam kecap (masakan rumahan sederhana) recipe step 4 photo\r\n\r\n    Setelah mendidih, masukkan ayam. Tambahkan juga gula merah dan royco juga asam jawa\r\n    Ayam kecap (masakan rumahan sederhana) recipe step 5 photo\r\n\r\n    Aduk lagi lalu tutup wajan supaya ayamnya makin empuk dan aroma mya tidak kabur. Kecilkan nyala api nya.\r\n    Ayam kecap (masakan rumahan sederhana) recipe step 6 photo\r\n\r\n    Setelah 5 menit, balikkan ayam agar bumbu nya merata ke bagian ayam yang lain.\r\n    Ayam kecap (masakan rumahan sederhana) recipe step 7 photo\r\n\r\n    Koreksi rasa lalu tambahkan kecap. tunggu sampai air nya surut\r\n    Ayam kecap (masakan rumahan sederhana) recipe step 8 photo\r\n\r\n    Ketika air nya surut dan mengental, aduk sebentar. Lalu matikan kompor dan ayam kecap siap di nikmati ^^\r\n', 'Farida Cooking', 1523509200, 'Ayam-kecap ', '', 'Published', '', 'Ayam-kecap.jpg'),
(4, 'Balado ikan asin pakang', 'Resep', 'Bumbu dasarnya sama dengan yg di resep balado teri, tapi karena gak punya cabe merah besar saya gnti dengan cabe merah keriting\r\n\r\nTIPS:\r\nTunggu tumisan bumbu balado dingin baru dicampur dengan ikan pakang supaya ikan nya awet kriuk\r\n\r\nBahan-bahan\r\n\r\n    1 bungkus ikan asin pakang\r\n    10 buah cabe merah keriting\r\n    5 siung bawang merah\r\n    3 siung bawang putih\r\n    Secukupnya garam (tidak perlu banyak2 krn ikan sdh asin)\r\n    1-2 sdt gula\r\n    1 sdt kaldu bubuk\r\n    Secukupnya minyak\r\n\r\nLangkah\r\n\r\n    Panaskan minyak, goreng ikan dengan api kecil (hati2 mudah gosong krn ikan ny tipis sekali) sampai kriuk. Sisihkan\r\n\r\n    Haluskan cabe dan bawang2 (bisa diulek/blender). Tumis bumbu hingga matang. Bumbui dengan garam, gula dan kaldu. Sisihkan\r\n\r\n    Ketika tumisan bumbu sudah dingin, campur dengan ikan pakang. Sajikan\r\n', 'Chika', 1523509200, 'Balado-ikan-asin-pakang', '', 'Published', '', 'balado-ikan-asin.jpg'),
(5, 'Sup Tomat Daging Sapi', 'Resep', '\r\n\r\nSup Tomat Daging Sapi yang satu ini memang tepat tersaji untuk segala musim. Terlebih di saat musim penghujan, kehangatan sup ini bakal menyatukan seluruh keluarga di meja makan. Bayangkan betapa lahapnya mereka menikmati sup ini, pasti ibu manapun akan bahagia melihatnya!\r\n\r\nSelain sebagai menu pendamping ataupun menu utama, yang namanya resep sup selalu cocok bagi mereka juga yang tengah menjalani masa pemulihan. Selain Nasi Tim, berbagai resep yang mudah dicerna lainnya umumnya datang dari kategori sup. Selain Sup Tomat ini, perkenalkanlah resep-resep sup lainnya seperti Sup Jamur, Sup Krim Jagung, ataupun Sup Kimlo. Rasa lezatnya akan membuat siapapun menjadi bersemangat makan!\r\n\r\nSekarang, mari kita berbelanja berbagai kebutuhan untuk membuat sup ini dan segera memasak di rumah. Isi dari sup ini begitu bervariasi, tidak sulit untuk dibuat, dan sangat bernutrisi. Pasti teman-teman sekalian akan bersemangat membuatnya!\r\nBahan-bahan\r\nRoyco Kaldu Rasa Sapi\r\nYang diperlukan:\r\nRoyco Kaldu Sapi\r\nBahan\r\n\r\n    350 g daging sapi cincang\r\n    400 g tomat merah, potong dadu kecil\r\n    2 buah kentang, potong dadu 1 cm\r\n    2 buah wortel, potong dadu kecil\r\n    1 sdm minyak, untuk menumis\r\n    1 buah bawang bombay, potong kotak kecil\r\n    3 siung bawang putih, cincang\r\n    800 ml air\r\n    ¼ sdt merica putih bubuk\r\n    1 sdm Royco Kaldu Sapi\r\n    ½ sdm gula pasir\r\n    1.5 sdt daun basil kering\r\n    1.5 sdt daun oregano kering\r\n    1 sdt daun thyme kering\r\n    150 g makaroni, rebus\r\n\r\nCara membuat\r\nMenumis bahan sup tomat daging sapi.\r\n1\r\n\r\nPanaskan minyak, tumis bawang bombay dan bawang putih hingga harum.\r\nMenumis daging untuk sup tomat.\r\n2\r\n\r\nMasukkan daging sapi cincang, wortel, dan tomat. Tumis hingga daging matang.\r\nMemasak kuah sup tomat.\r\n3\r\n\r\nTuang air, merica, dan Royco Kaldu Sapi, aduk rata.\r\nMenambahkan sayuran ke dalam kuah sup tomat.\r\n4\r\n\r\nMasukkan kentang, gula, daun basil, oregano, dan thyme. Masak kembali di atas api sedang hingga kentang matang.\r\nSup tomat tersaji di atas mangkuk putih.\r\n5\r\n\r\nMasukkan makaroni, aduk sebentar. Angkat. Sajikan.\r\n\r\nMudah bukan cara membuatnya? Sekarang tinggal menunggu waktu makan untuk menyantapnya bersama keluarga tercinta. Selamat menikmati!\r\n', 'Royco', 1523509200, 'Sup-Tomat-Daging-Sapi', '', 'Published', '', 'Sup-Tomat-Daging-Sapi.jpg'),
(8, 'Resep Keroket Enak', 'Resep', ' Contoh upload resep keroket', 'Fera', 1558697592, 'Resep-Keroket-Enak', '', 'Published', '', 'kroket-50310251.jpg'),
(9, 'Cara Membuat Es Cendol & Resep Es Cendol Pandan Yang Segar', 'Resep', '<p xss=removed>Biasanya minuman es cendol tidak jauh berbeda dengan Es Dawet Ayu Khas kota Banjar Negara Kabupaten Banyumas, akan tetapi sebutan di tiap daerah tidaklah sama untuk menyatakan minuman yang berjeniskan sama. Es cendol serta merta tidak serupa di tiap daerahnya rata rata perbedaan sanggup diliat dari komposisi atau bahan pelengkapnya. Pemanis dipakai juga kadang tidak serupa antara daerah satu dan lainnya, ada yg memanfaatkan gula merah atau gula Jawa dan ada pun yg memanfaatkan gula pasir sebagai bahan pemanisnya. Keduanya mempunyai citarasa yang tentunya nyaris sama tergantung anda lebih senang memakai mana.</p>\r\n<p xss=removed>Disaat waktu pada masa kemarau terutama di Indonesia rata-rata bakul es cendol di serang pembeli sampai anda tidak jarang ada yang tak kebagian pula. Nah kami dapat memberikan resep es cendol pada anda supaya anda dapat membuatnya sendiri di rumah anda dan tak butuh khawatir anda beli diluar rumah. Untuk hal itu simak saja resep es cendol yang berikut ini kami berikan pada anda.</p>\r\n<h2 xss=removed>Bahan-Bahan Untuk Membuat Es Cendol Pandan Yang Segar</h2>\r\n<ul xss=removed>\r\n<li xss=removed>Siapkan 125 gr tepung beras</li>\r\n<li xss=removed>Siapkan 75 gr tepung kanji</li>\r\n<li xss=removed>Siapkan 25 gr tepung hunkwe</li>\r\n<li xss=removed>Siapkan 150 ml air suji (dibuat dari 20 lembar daun suji yg dihaluskan ditambah dgn 175 ml air)</li>\r\n<li xss=removed>Siapkan 500 ml air ditambahkan 1 tetes pasta pandan</li>\r\n<li xss=removed>Siapkan 1 sendok makan air kapur sirih</li>\r\n<li xss=removed>Siapkan Es batu secukupnya</li>\r\n<li xss=removed>Siapkan 10 daging buah nangka, yang telah dipotong-potong sesuai selera anda</li>\r\n</ul>\r\n<h2 xss=removed>CaraMembuat Membuat Santan/Saus Santan Es Cendol Pandan Segar</h2>\r\n<ul xss=removed>\r\n<li xss=removed>1 liter santan yg telah dibuat dari 1 butir parutan kelapa</li>\r\n<li xss=removed>5 lembar daun dari pandan</li>\r\n<li xss=removed>1/2 sendok teh garam (secukupnya)</li>\r\n<li xss=removed>Seluruhnya bahan dimasak bersamaan sampai kemudian mendidih</li>\r\n</ul>\r\n<h2 xss=removed>Buat Membuat Juruh atau Saus Gula Merah Es Cendol</h2>\r\n<ul xss=removed>\r\n<li xss=removed>200 gr dari gula merah</li>\r\n<li xss=removed>50 gr gula pasir</li>\r\n<li xss=removed>Kemudian 100 ml air</li>\r\n</ul>\r\n<h2 xss=removed>Cara Untuk Membuat Es Cendol Pandan Segar dan Harum</h2>\r\n<ul xss=removed>\r\n<li xss=removed>Pertama campurkan tepung beras, tepung hunkwe, tepung kanji, air pasta pandan, air suji dan air kapur sirih.</li>\r\n<li xss=removed>Masaklah sambil terus di aduk-aduk sampai mengental dan meletup-letup.</li>\r\n<li xss=removed>Saring bersama dengan cetakan cendol di atas wadah yg telah diisi bersama air dingin.</li>\r\n<li xss=removed>Tekan-tekan adonan cendol sampai adonan habis jadi cendol.</li>\r\n<li xss=removed>Saringlah cendol yg telah menjadi dan kemudian tiriskan.</li>\r\n<li xss=removed>Sajikan cendol ke dalam gelas dengan penambahan saus santan pula juruh atau saus gula merah, kemudian potongan daging buah nangka dan pasti saja pecahan es batu biar cendol semakin mantap dan segar.</li>\r\n</ul>\r\n<p xss=removed>Hmm segar banget kan diwaktu cuaca panas seperti waktu panas ini. Selamat coba dan berkreasi dirumah ya. Baca juga Resep Membuat Combro Berasa Renyah dan Pedas</p>', 'fera_ijo', 1558752672, 'Cara-Membuat-Es-Cendol-Resep-Es-Cendol-Pandan-Yang-Segar', '', 'Published', '', 'web-Es_Cendol.jpg'),
(10, 'Sambal Ati Ampela Ayam', 'Resep', '<section id=\"ingredients\" class=\"ingredients-container document__section\">\r\n<div class=\"document__title-container split-header\">\r\n<div class=\"split-header__secondary shrink-xs subtle\">\r\n<div id=\"serving_recipe_9987799\" data-record=\"/id/resep?partial=serving\"> </div>\r\n</div>\r\n</div>\r\n<div class=\"ingredient-list card-sm\">\r\n<ol id=\"new_ingredient\" class=\"list-unstyled ingredient-list__contents ui-sortable\" data-behavior=\"sortable\" data-sort-url=\"/id/recipes/9987799-sambal-ati-ampela-ayam/ingredients/sort\" data-record-list=\"  <li class=\" data-record=\"/id/recipes/9987799-sambal-ati-ampela-ayam/ingredients\">\r\n<li id=\"ingredient_38668439\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">5 buah</span> Ati Ayam tanpa Ampela (bisa pake ampela juga, karna saya ga suka jadi ga pake)</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668440\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">1 ons</span> cabe merah keriting</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668441\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">5 siung</span> bawang putih</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668442\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">3 siung</span> bawang merah</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668443\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">1 buah</span> tomat</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668444\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">Secukupnya</span> garam</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668445\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">Secukupnya</span> gula</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668446\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">Secukupnya</span> masako</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38668447\" class=\"ingredient \" data-record=\"/id/recipes/9987799-sambal-ati-ayam/ingredients\">\r\n<div class=\"field-group--ingredient\" data-field-group=\"\">\r\n<div class=\"ingredient__details\" data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\">Secukupnya</span> air</div>\r\n</div>\r\n</li>\r\n</ol>\r\n</div>\r\n</section>\r\n<section id=\"steps\" class=\"steps-container document__section\">\r\n<div class=\"document__title-container split-header\">\r\n<h2 class=\"document__title split-header__main\">Langkah</h2>\r\n<div class=\"split-header__secondary shrink-xs subtle\">\r\n<div id=\"cooking_time_recipe_9987799\" data-record=\"/id/resep?partial=cooking_time\"> </div>\r\n</div>\r\n</div>\r\n<ol id=\"new_step\" class=\"numbered-list ui-sortable\" data-behavior=\"sortable\" data-sort-url=\"/id/recipes/9987799-sambal-ati-ampela-ayam/steps/sort\" data-record-list=\"  <li class=\" data-record=\"/id/recipes/9987799-sambal-ati-ampela-ayam/steps\">\r\n<li id=\"step_25836826\" class=\"step numbered-list__item card-sm\" data-record=\"/id/recipes/9987799-sambal-ati-ayam/steps\">\r\n<div data-field-group=\"\">\r\n<div class=\"numbered-list__contents\">\r\n<div class=\"step__description\">\r\n<div class=\"prose\">\r\n<div data-field=\"textarea\" data-field-name=\"description\" data-field-hint=\"Tekan ENTER untuk menambah langkah\" data-placeholder=\"Bagaimana membuatnya?\" data-maxlength=\"500\">\r\n<p>Rebus ati ayam yang sudah di bersihkan sampai matang, angkat lalu potong-potong sesuai selera.Haluskan cabai, bawang merah, bawang putih, dan tomat. (Bisa menggunakan blender, dan jangan lupa saat memblender di beri minyak sedikit) (bisa juga di giling di cobek)Tumis bumbu yang telah d haluskan di wajan dengan diberi sedikit minyak sampai harum. Masukkan garam 1/4 sdt, gula 1sdm, dan masako 1/4 sdt ke dalam 1/4 gelas air, aduk lalu masukkan ke tumisan cabai. Masak sampai airnya mengering dan cabai matang dengan sempurna lalu masukkan potong ati ayam. Aduk sebentar lalu angkat dan sajikan.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</li>\r\n</ol>\r\n</section>', 'fera_ijo', 1564450411, 'Sambal-Ati-Ampela-Ayam', '', 'Published', '', 'sambal-ati-ampela.jpg'),
(11, 'Sambal Goreng Tahu Nangka', 'Resep', '<section id=\"ingredients\" class=\"ingredients-container document__section\">\r\n<div class=\"document__title-container split-header\">\r\n<p class=\"MsoNormal\" xss=removed><strong><span xss=removed>Bahan-bahan</span></strong></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>1. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>10 buah</span></strong><span xss=removed> tahu Sumedang</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>2. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>12 batang</span></strong><span xss=removed> kacang panjang, petiki</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>3. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>500 gram</span></strong><span xss=removed> nangka muda, potong2</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>4. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>Secukupnya</span></strong><span xss=removed> gula, garam, kaldu bubuk</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>5. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>3 lembar</span></strong><span xss=removed> daun salam</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>6. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>1 jempol</span></strong><span xss=removed> lengkuas, memarkan</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>7. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>50 gram</span></strong><span xss=removed> fiber creme + 200ml air hangat aduk rata/santan)</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>8. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>Secukupnya</span></strong><span xss=removed> air</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>9. </span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>Secukupnya</span></strong><span xss=removed> tulang iga sapi, st 3 besar2</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>10.<span xss=removed>            </span></span></span>&lt;!--[endif]--&gt;<span xss=removed>Bumbu halus:</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>11.<span xss=removed>            </span></span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>7 buah</span></strong><span xss=removed> cabe merah besar (sy yg tdk pedas)</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>12.<span xss=removed>            </span></span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>5 buah</span></strong><span xss=removed> cabe merah keriting</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>13.<span xss=removed>            </span></span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>8 siung</span></strong><span xss=removed> bawang merah</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>14.<span xss=removed>            </span></span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>5 siung</span></strong><span xss=removed> bawang putih</span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>15.<span xss=removed>            </span></span></span>&lt;!--[endif]--&gt;<strong><span xss=removed>1 bungkus kecil</span></strong><span xss=removed> terasi ABC</span></p>\r\n<p class=\"MsoNormal\" xss=removed><strong><span xss=removed>Langkah</span></strong></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>1.<span xss=removed>     </span></span></span>&lt;!--[endif]--&gt;<span xss=removed>Rebus iga hingga empuk dan mnegeluarkan kaldu dengan api kecil. Lalu masukan nangka muda. Masak hingga empuk. Lalu masukan kacang panjang. Masak 1/2 matang.</span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/e270fbe9a89513b5\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"_x0000_t75\" coordsize=\"21600,21600\" o:spt=\"75\" o:preferrelative=\"t\" path=\"m@4@5l@4@11@9@11@9@5xe\" filled=\"f\" stroked=\"f\">\r\n <v joinstyle=\"miter\">\r\n <v>\r\n  <v eqn=\"if lineDrawn pixelLineWidth 0\">\r\n  <v eqn=\"sum @0 1 0\">\r\n  <v eqn=\"sum 0 0 @1\">\r\n  <v eqn=\"prod @2 1 2\">\r\n  <v eqn=\"prod @3 21600 pixelWidth\">\r\n  <v eqn=\"prod @3 21600 pixelHeight\">\r\n  <v eqn=\"sum @0 0 1\">\r\n  <v eqn=\"prod @6 1 2\">\r\n  <v eqn=\"prod @7 21600 pixelWidth\">\r\n  <v eqn=\"sum @8 21600 0\">\r\n  <v eqn=\"prod @7 21600 pixelHeight\">\r\n  <v eqn=\"sum @10 21600 0\">\r\n </v>\r\n <v o:extrusionok=\"f\" gradientshapeok=\"t\" o:connecttype=\"rect\">\r\n <o v:ext=\"edit\" aspectratio=\"t\">\r\n</v><v id=\"Picture_x0020_11\" o:spid=\"_x0000_i1035\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\" href=\"https://cookpad.com/id/step/images/e270fbe9a89513b5\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image001.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image001.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/e86d71a1d9285b14\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_10\" o:spid=\"_x0000_i1034\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\" href=\"https://cookpad.com/id/step/images/e86d71a1d9285b14\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image002.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image002.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/9eaa61ad47693993\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_9\" o:spid=\"_x0000_i1033\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\" href=\"https://cookpad.com/id/step/images/9eaa61ad47693993\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image003.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image003.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 1 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>2.<span xss=removed>     </span></span></span>&lt;!--[endif]--&gt;<span xss=removed>Tumis bumbu halus hingga harum bersama dengan lengkuas dan daun salam. Masukann dalam panci rebusan sayur. Beri gula garam dan kaldu bubuk. Masak hingga mendidih. Masukan tahu.</span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/c89619ade5e3cd4b\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_8\" o:spid=\"_x0000_i1032\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\" href=\"https://cookpad.com/id/step/images/c89619ade5e3cd4b\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image004.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image004.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/2f3ae2222800bf21\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_7\" o:spid=\"_x0000_i1031\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\" href=\"https://cookpad.com/id/step/images/2f3ae2222800bf21\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image005.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image005.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/a2faa5e0b85fca13\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_6\" o:spid=\"_x0000_i1030\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\" href=\"https://cookpad.com/id/step/images/a2faa5e0b85fca13\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image006.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image006.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 2 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>3.<span xss=removed>     </span></span></span>&lt;!--[endif]--&gt;<span xss=removed>Lalu masukan cairan fiber creme. Masak hingga mendidih dan bumbu meresap. Koreksi rasa.</span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/f5760f59e39b4360\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_5\" o:spid=\"_x0000_i1029\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 3 foto\" href=\"https://cookpad.com/id/step/images/f5760f59e39b4360\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image007.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 3 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image007.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 3 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>4.<span xss=removed>     </span></span></span>&lt;!--[endif]--&gt;<span xss=removed>Sajikan.</span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/80aa144cb5098c7b\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_4\" o:spid=\"_x0000_i1028\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\" href=\"https://cookpad.com/id/step/images/80aa144cb5098c7b\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image008.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image008.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/bfe142212b3412e2\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_3\" o:spid=\"_x0000_i1027\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\" href=\"https://cookpad.com/id/step/images/bfe142212b3412e2\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image009.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image009.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/da461123f8adee05\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_2\" o:spid=\"_x0000_i1026\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\" href=\"https://cookpad.com/id/step/images/da461123f8adee05\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image010.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image010.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 4 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n<p class=\"MsoNormal\" xss=removed>&lt;!-- [if !supportLists]--&gt;<span xss=removed><span xss=removed>5.<span xss=removed>     </span></span></span>&lt;!--[endif]--&gt;<span xss=removed>????</span></p>\r\n<p class=\"MsoNormal\" xss=removed> </p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed><a href=\"https://cookpad.com/id/step/images/e9034bb81d43061f\"><span xss=removed>&lt;!-- [if gte vml 1]><v id=\"Picture_x0020_1\" o:spid=\"_x0000_i1025\" type=\"#_x0000_t75\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 5 foto\" href=\"https://cookpad.com/id/step/images/e9034bb81d43061f\" xss=removed o:button=\"t\">\r\n <v src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image011.jpg\" o:title=\"Sambal Goreng Tahu Nangka langkah memasak 5 foto\">\r\n</v>&lt;![endif]--&gt;&lt;!-- [if !vml]--&gt;<span xss=removed><img src=\"file:///C:\\\\Users\\\\ABU_AH~1\\\\AppData\\\\Local\\\\Temp\\\\msohtmlclip1\\\\01\\\\clip_image011.jpg\" alt=\"Sambal Goreng Tahu Nangka langkah memasak 5 foto\" width=\"480\" height=\"361\" border=\"0\"></span>&lt;!--[endif]--&gt;</span></a></span></p>\r\n<p class=\"MsoNormal\" xss=removed><span xss=removed> </span></p>\r\n</div>\r\n</section>', 'umu_ahyar', 1564447576, 'Sambal-Goreng-Tahu-Nangka', '', 'Published', '', 'sambal-goreng-tahu-nangka.jpg');
INSERT INTO `tbl_blog` (`uid`, `Blog_Title`, `Blog_Categ`, `Blog_Content`, `Blog_Author`, `Date_Published`, `Blog_URL`, `Blog_Comment`, `Status`, `Blog_Keyword`, `Blog_Pic`) VALUES
(12, 'Pindang patin', 'Resep', '<section id=\"ingredients\" class=\"ingredients-container document__section\" xss=removed>\r\n<div class=\"ingredient-list card-sm\">\r\n<ol class=\"list-unstyled ingredient-list__contents ui-sortable\" xss=removed data-behavior=\"sortable\" data-sort-url=\"/id/recipes/9985062-pindang-patin/ingredients/sort\" data-record-list=\"  <li class=\" id=\"new_ingredient\" data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n    <div class=\"field-group--ingredient\">\r\n      <div class=\"ingredient__details\" itemprop=\"ingredients\" data-field-name=\"quantity_and_name\" data-field-hint=\'Tekan ENTER untuk menambah bahan\' data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">\r\n      </div>\r\n\r\n      <div class=\"ingredient__tools field-group__hover editor__tool editor__tool--pc subtle\">\r\n        <a class=\"faint\" tabindex=\"-1\" title=\"Hapus bahan\" data-behavior=\"delete\" data-message=\"Apakah kamu ingin menghapusnya? \" href=\"#\"><i class=\"icf icf--close \"></i></a>\r\n        <i data-behavior=\"handle\" class=\"icf icf--sortable \"></i>\r\n      </div>\r\n    </div>\r\n  </li>\r\n\">\r\n<li id=\"ingredient_38663212\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\" xss=removed>1/2 kg</span> ikan patin</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663213\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Garam</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663214\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Kaldu bubuk</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663215\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Gula</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663216\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Cabe rawit</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663217\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Tomat</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663218\" class=\"ingredient ingredient--headline\" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Bahan halus</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663219\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\" xss=removed>5</span> cabe merah</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663220\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\" xss=removed>3</span> bawang merah</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663221\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\"><span class=\"ingredient__quantity\" xss=removed>2</span> bawang putih</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663222\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Kunyit</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663223\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Jahe</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663224\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Cabe rawit</div>\r\n</div>\r\n</li>\r\n<li id=\"ingredient_38663225\" class=\"ingredient \" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/ingredients\">\r\n<div class=\"field-group--ingredient\" xss=removed data-field-group=\"\">\r\n<div class=\"ingredient__details\" xss=removed data-field=\"\" data-field-name=\"quantity_and_name\" data-field-hint=\"Tekan ENTER untuk menambah bahan\" data-placeholder=\"100 gram tepung\" data-maxlength=\"200\">Daun salam sereh skip ya krn stok habis</div>\r\n</div>\r\n</li>\r\n</ol>\r\n</div>\r\n</section>\r\n<section id=\"steps\" class=\"steps-container document__section\" xss=removed>\r\n<div class=\"document__title-container split-header\" xss=removed>\r\n<h2 class=\"document__title split-header__main\" xss=removed>Langkah</h2>\r\n<div class=\"split-header__secondary shrink-xs subtle\" xss=removed>\r\n<div id=\"cooking_time_recipe_9985062\" data-record=\"/id/resep?partial=cooking_time\">\r\n<div class=\"subtle placeholder\" xss=removed data-field=\"\" data-field-name=\"cooking_time\" data-placeholder=\"Lama memasak?\" data-maxlength=\"50\"> </div>\r\n</div>\r\n</div>\r\n</div>\r\n<ol class=\"numbered-list ui-sortable\" xss=removed data-behavior=\"sortable\" data-sort-url=\"/id/recipes/9985062-pindang-patin/steps/sort\" data-record-list=\"  <li class=\" id=\"new_step\" data-record=\"/id/recipes/9985062-pindang-patin/steps\">\r\n    <div>\r\n      <div class=\"numbered-list__contents\">\r\n        <div class=\"step__description\">\r\n          <div class=\"prose\">\r\n            <div itemprop=\"recipeInstructions\" data-field=\"textarea\" data-field-name=\"description\" data-field-hint=\'Tekan ENTER untuk menambah langkah\' data-placeholder=\"Bagaimana membuatnya?\" data-maxlength=\"500\">\r\n              <p></p>\r\n            </div>\r\n          </div>\r\n\r\n        </div>\r\n\r\n        <div class=\"step-image\" data-field=\"image\" data-field-name=\"images[1]\" data-ajax-upload=\"/id/step/images\">\r\n    <div class=\"step-image__container step-image__container--placeholder image-upload editor__tool\">\r\n    <div class=\"step-image__upload\">\r\n      <i class=\"icf icf--camera icf--medium\"></i>\r\n      <p class=\"x-small\">\r\n        <i class=\"icf icf--add \"></i>\r\n        Tambah foto\r\n      </p>\r\n      &lt;input type=\"file\" name=\"file\" aria-label=\"Tambah Foto\" /&gt;\r\n    </div>\r\n  </div>\r\n\r\n</div>\r\n<div class=\"step-image\" data-field=\"image\" data-field-name=\"images[2]\" data-ajax-upload=\"/id/step/images\">\r\n    <div class=\"step-image__container step-image__container--placeholder image-upload editor__tool\">\r\n    <div class=\"step-image__upload\">\r\n      <i class=\"icf icf--camera icf--medium\"></i>\r\n      <p class=\"x-small\">\r\n        <i class=\"icf icf--add \"></i>\r\n        Tambah foto\r\n      </p>\r\n      &lt;input type=\"file\" name=\"file\" aria-label=\"Tambah Foto\" /&gt;\r\n    </div>\r\n  </div>\r\n\r\n</div>\r\n<div class=\"step-image\" data-field=\"image\" data-field-name=\"images[3]\" data-ajax-upload=\"/id/step/images\">\r\n    <div class=\"step-image__container step-image__container--placeholder image-upload editor__tool\">\r\n    <div class=\"step-image__upload\">\r\n      <i class=\"icf icf--camera icf--medium\"></i>\r\n      <p class=\"x-small\">\r\n        <i class=\"icf icf--add \"></i>\r\n        Tambah foto\r\n      </p>\r\n      &lt;input type=\"file\" name=\"file\" aria-label=\"Tambah Foto\" /&gt;\r\n    </div>\r\n  </div>\r\n\r\n</div>\r\n\r\n\r\n        <div class=\"field-group__hover subtle editor__tool editor__tool--pc\">\r\n          <div class=\"pull-right\">\r\n            <a class=\"faint\" tabindex=\"-1\" data-behavior=\"delete\" data-message=\"Apakah kamu ingin menghapusnya? \" href=\"#\"><i class=\"icf icf--close \"></i></a>\r\n            <i data-behavior=\"handle\" class=\"icf icf--sortable \"></i>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n  </li>\r\n\">\r\n<li id=\"step_25833858\" class=\"step numbered-list__item card-sm\" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/steps\">\r\n<div data-field-group=\"\">\r\n<div class=\"numbered-list__contents\" xss=removed>\r\n<div class=\"step__description\" xss=removed>\r\n<div class=\"prose\" xss=removed>\r\n<div data-field=\"textarea\" data-field-name=\"description\" data-field-hint=\"Tekan ENTER untuk menambah langkah\" data-placeholder=\"Bagaimana membuatnya?\" data-maxlength=\"500\">\r\n<p xss=removed>Cuci ikan patin sampai bersih</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[1]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n \r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[2]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n \r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[3]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n</div>\r\n</div>\r\n</li>\r\n<li id=\"step_25834067\" class=\"step numbered-list__item card-sm\" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/steps\">\r\n<div data-field-group=\"\">\r\n<div class=\"numbered-list__contents\" xss=removed>\r\n<div class=\"step__description\" xss=removed>\r\n<div class=\"prose\" xss=removed>\r\n<div data-field=\"textarea\" data-field-name=\"description\" data-field-hint=\"Tekan ENTER untuk menambah langkah\" data-placeholder=\"Bagaimana membuatnya?\" data-maxlength=\"500\">\r\n<p xss=removed>Blender bumbu halus lalu tumis hingga harum dan masukan potongan tomat dan cabe rawit utuh</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[1]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n \r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[2]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n \r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[3]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n</div>\r\n</div>\r\n</li>\r\n<li id=\"step_25834068\" class=\"step numbered-list__item card-sm\" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/steps\">\r\n<div data-field-group=\"\">\r\n<div class=\"numbered-list__contents\" xss=removed>\r\n<div class=\"step__description\" xss=removed>\r\n<div class=\"prose\" xss=removed>\r\n<div data-field=\"textarea\" data-field-name=\"description\" data-field-hint=\"Tekan ENTER untuk menambah langkah\" data-placeholder=\"Bagaimana membuatnya?\" data-maxlength=\"500\">\r\n<p xss=removed>Lalu masukan ikan patin aduk dan tambahkan dengan air</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[1]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n \r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[2]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n \r\n<div class=\"step-image droppable\" xss=removed data-field=\"image\" data-field-name=\"images[3]\" data-ajax-upload=\"/id/step/images\"> </div>\r\n</div>\r\n</div>\r\n</li>\r\n<li id=\"step_25834069\" class=\"step numbered-list__item card-sm\" xss=removed data-record=\"/id/recipes/9985062-pindang-patin/steps\">\r\n<div data-field-group=\"\">\r\n<div class=\"numbered-list__contents\" xss=removed>\r\n<div class=\"step__description\" xss=removed>\r\n<div class=\"prose\" xss=removed>\r\n<div data-field=\"textarea\" data-field-name=\"description\" data-field-hint=\"Tekan ENTER untuk menambah langkah\" data-placeholder=\"Bagaimana membuatnya?\" data-maxlength=\"500\">\r\n<p xss=removed>Setelah itu masukan garam,gula,kaldu bubuk tes rasa.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</li>\r\n</ol>\r\n</section>', 'umu_ahyar', 1564451212, 'Pindang-patin', '', 'Published', '', 'pindang-patin.jpg'),
(13, 'KEHILANGAN PASPOR DENGAN RESIDEN VISA UAE', 'Umum', '<p>Just sharing, karena banyak request dari temen2 untuk share pengalaman pribadi saya tentang bagaimana step yang harus dilakukan jika mengalami hilang paspor di Indonesia yg memiliki residen visa uae. Kurang lebih step2 nya sebagai berikut :</p>\r\n<p>Part 1 - Di Indonesia</p>\r\n<p>1.Segera membuat laporan di kantor polisi terdekat. Buat surat rangkap 2 (1 untuk kantor imigrasi untuk buat paspor baru, 1 untuk uae konsular di Indonesia). Untuk lokasi konsular, ada di Mega kuningan, Jakarta. Silahkan cari lokasi nya di gmap.</p>\r\n<p>2.Membuat paspor baru, bawa surat kehilangan dr kepolisian. Akan ada proses BAP, tentang kronologis hilangnya paspor. Kepala kantor imigrasi akan menentukan diterima atau tidaknya BAP kita. Kemudian akan ada interview dan foto, dan penerbitan paspor baru. Usahakan membawa semua surat aseli untuk : surat keterangan kehilangan, KK, Akta kelahiran atau ijazah terakhir, KTP. Juga fotokopi paspor lama dan residence visa yang hilang, sertakan juga print salary certificate yg menerangkan kita bekerja di UAE (bahasa Inggris). Maka akan diminta mengisi form penerbitan paspor urgent, karena kita ada residen visa aktif. Lama proses bisa variatif antara 2 - 7 hari kerja, atau bahkan lebih hingga diterbitkan paspor baru, karena tergantung keputusan dr kepala kantor Imigrasi.</p>\r\n<p>3.Setelah mendapatkan paspor baru, saatnya ke UAE konsular untuk mengajukan formulir pembuatan temporary visa untuk entry lagi ke UAE. Akan dijelaskan syarat2 yg diperlukan, konfirm dl aja ke konsular untuk menanyakan apa syaratnya. (Mungkin bisa berubah sewaktu2 nanti). Waktu kejadian sy, syarat nya kurang lebih seperti ini :</p>\r\n<p>a. Paspor Baru (aseli beserta copy)</p>\r\n<p>b. Copy paspor dan visa yang hilang (jangan jadi satu halaman, satu lembar copy paspor, satu copy visa)</p>\r\n<p>c. Pas photo 4x6 background bebas, 2 lembar (Saran saya background putih, karena nantinya bisa dipakai lagi utk apply visa yang baru)</p>\r\n<p>d. Salary certificate (English dan Arabic)</p>\r\n<p>e. Surat keterangan kehilangan dr kepolisian</p>\r\n<p>f. Mengisi formulir pengajuan temporary visa</p>\r\n<p>g. Copy EIDA jika ada</p>\r\n<p>(Semua copy yg di atas usahakan copy berwarna, sesuai standar urusan di UAE)</p>\r\n<p>Untuk surat keterangan kehilangan dari kepolisian, ini harus diterjemahkan ke arabic, dan dilegalisasi.</p>\r\n<p>1. Surat aseli : disahkan di notaris, kemenkumham, kemenlu dan UAE konsular</p>\r\n<p>2. Surat terjemahan arabic : disahkan di kemenkumham, kemenlu dan UAE konsular</p>\r\n<p>Proses penerjemahan dan pengesahan, kira2 makan waktu 8 hari kerja, tergantung kondisi, bisa lebih cepat atau lebih lama (seringnya lebih lama), tau sendiri lah urusan birokrasi di Indonesia.</p>\r\n<p>Proses terjemahan dan legalisasi, saya sarankan melalui agen penerjemah yang terpercaya, untuk menghindari delay. Biaya variatif, untuk kejadian saya, 2 dokumen kena total 2.8 juta, sudah sampai selesai di konsular untuk legalisasinya. Tekankan kepada legal translator nya, penulisan nama kita di terjemahan surat kehilangan nya, harus sesuai 100?ngan penulisan nama di EIDA atau visa (arabic).</p>\r\n<p>Nah setelah semua syarat di atas komplit, barulah konsular UAE akan memproses pengajuan temporary entry visa kita ke UAE. Proses nya makan waktu kurang lebih 1-3 hari, atau satu minggu. Yg ini variatif, karena tergantung dr imigrasi UAE. Akan dikenakan biaya 130AED dan dibayar di konsular UAE, dan perlu diketahui hanya kartu MASTERCARD yg akan diterima. Jd siapkan kartu anda dan jangan lupa saldo di dalam nya.</p>\r\n<p>Tunggu hingga temporary visa anda keluar, klo sudah konfirm keluar baru silahkan arrange tiket untuk balik ke UAE.</p>\r\n<p>Part 2 - Setelah tiba di UAE</p>\r\n<p>Saat tiba di UAE, anda harus ke imigrasi yg manual, bukan auto gate. Sama officer nya akan diarahkan ke salah satu officer dr polisi imigrasi di bandara. Anda akan ditahan disana kurang lebih seminggu.... -becanda- </p>\r\n<p>Anda akan disuruh nunggu, mungkin 20 menitan. Semua dokumen akan dia bawa ke kantor, paspor dan set surat yg dikeluarkan UAE konsular di jakarta, mgkn untuk verifikasi data. Setelah semua diverifikasi, anda akan diijinkan lewat ke imigrasi, di stamp manual di passport (stamp entry uae) dan kemudian semua dokumen anda dikembalikan.</p>\r\n<p>Setelah itu silahkan kontak ke HR untuk mengajukan stamping residence visa di paspor yang baru. </p>\r\n<p>Syaratnya :</p>\r\n<p>1. Paspor baru & copy nya</p>\r\n<p>2. Copy paspor & visa yang hilang</p>\r\n<p>3. Copy EIDA</p>\r\n<p>4. Scan daman insurance (print online dari system)</p>\r\n<p>5. Copy semua dokumen yang dikeluarkan UAE konsular</p>\r\n<p>6. Pas foto 2 lembar background putih</p>\r\n<p>Dan, anda akan mendapatkan residence visa baru yg sama validity nya dengan visa yg hilang, artinya bukan 3 tahun, tp sesua sisa masa aktif visa yang hilang.</p>\r\n<p> </p>\r\n<p> </p>\r\n<p>Sekian kurang lebih sharing dr saya. Kurang lebih nya saya mohon dimaafkan, silahkan di share ke group lain nya, untuk memberi sedikit gambaran jika di kemudian hari ada yg mengalami hal yg serupa dengan saya.</p>\r\n<p>Terimakasih.</p>\r\n<p>Wassalam.</p>\r\n<p><strong>HTP</strong></p>', 'Hendri TP', 1570432022, 'KEHILANGAN-PASPOR-DENGAN-RESIDEN-VISA-UAE', '', 'Published', '', 'passport-lost.jpg'),
(14, 'Membuat Tenancy Letter di Ruwais', 'Tips', '<p>Ini saran nggak official sih Pak, boleh dicoba, sebagian(yang saya tahu persis teman filipino dan arab). Mereka daftar sendiri online. Tidak lewat typing center.</p>\r\n<p>Bagian yang diminta attach tenancy letter. Mereka attach dengan surat pengantar perusahaan (untuk Borouge bisa di print online, pilih yang bahasa inggris, karena yang bahasa arab tidak ada keterangan tentang akomodasi/rumah ditanggung perusahaan).</p>\r\n<p>Ada beberapa typing centre yang pakai cara ini. Ada sebagian/kebanyakan nggak mau, harus pakai tenancy contract.</p>\r\n<p>Akibat paling buruk, aplikasinya di hold. Harus melengkapi dengan tenancy contract.</p>\r\n<p>Tapi sejauh ini sih, teman teman tadi sukses. Visa nya bisa keluar.</p>\r\n<p>Monggo...</p>', 'Piccolo', 1570433079, 'Membuat-Tenancy-Letter-di-Ruwais', '', 'Published', '', 'RuwaisHousing.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `uid` bigint(20) UNSIGNED NOT NULL,
  `Categ_name` varchar(200) NOT NULL DEFAULT '',
  `Slug` varchar(200) NOT NULL DEFAULT '',
  `Description` text NOT NULL,
  `Parent` bigint(20) NOT NULL,
  `Type` varchar(15) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Sort` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`uid`, `Categ_name`, `Slug`, `Description`, `Parent`, `Type`, `Picture`, `Sort`) VALUES
(1, 'Acara', 'acara', 'Acara-acara di Ruwais', 1, 'Artikel', 'https://source.unsplash.com/aId-xYRTlEc', 0),
(2, 'Tips', 'tips', '', 0, 'artikel', 'https://source.unsplash.com/-rF4kuvgHhU', 0),
(3, 'Experience', 'experience', '', 0, 'artikel', 'https://source.unsplash.com/4R1wcvJb40c', 0),
(4, 'Recipe', 'recipe', '', 0, 'artikel', 'https://source.unsplash.com/O7sK3d3TPWQ', 0),
(5, 'Featured', 'featured', '', 0, 'artikel', 'https://source.unsplash.com/Vrv_nZHaFTc', 0),
(34, 'General', 'general', 'General things', 2, 'Food', '', 0),
(35, 'Memasak', 'memasak', 'Tips Memasak Ibu Ibu Ruwais', 2, 'Food', '', 0),
(37, 'Movie', 'movie', 'Movie Review', 0, 'Artikel', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `uid` int(11) NOT NULL,
  `Prnt_Comment_uid` int(11) NOT NULL,
  `Blog_uid` int(11) NOT NULL,
  `Sender` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Web` varchar(255) NOT NULL,
  `IP_Address` varchar(50) NOT NULL,
  `Comment_Date` int(11) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Comment` text NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`uid`, `Prnt_Comment_uid`, `Blog_uid`, `Sender`, `Email`, `Web`, `IP_Address`, `Comment_Date`, `Subject`, `Comment`, `Tanggal`, `Status`) VALUES
(1, 0, 2, 'Romi', 'romi@mail.com', 'www.romi.com', '123.234.11.345', 1223654473, '', 'Ini adalah Coment saya', '2019-05-21 08:45:25', 'Approved'),
(2, 1, 2, 'Errick', 'erick@yahoo.com', '-', '122.322.11.222', 127336447, '', 'Ini adalah koment erik', '2019-05-21 08:45:25', 'Approved'),
(3, 0, 12, 'Sofia', '', '', '', 0, '', 'Komen Sofia', '2019-08-03 12:11:35', ''),
(4, 0, 10, 'Robert T.', '', '', '', 0, '', 'Best Comment', '2019-08-03 12:13:58', ''),
(5, 0, 9, 'Saya lah', '', '', '', 0, '', 'In Komentar ku', '2019-08-03 12:15:17', ''),
(6, 0, 9, 'Romi Friend', '', '', '', 0, '', 'Oke berhasil', '2019-08-03 13:42:54', ''),
(7, 0, 12, 'Romi Friend 2', '', '', '', 0, '', 'Senang jeee...', '2019-08-03 13:43:43', ''),
(8, 3, 12, 'Meog', '', '', '', 0, '', 'Oke lahh', '2019-08-03 13:44:16', ''),
(9, 0, 12, 'Maulana', 'maulahaz@aim.com', '', '', 0, 'Web Display', 'Test', '2019-08-07 02:55:12', ''),
(10, 8, 12, 'Kucing', 'kucing@mail.com', '', '', 0, 'Kucing', 'Aku juga...', '2019-08-07 03:02:27', ''),
(11, 3, 12, 'Shafa', 'Shafa@mail.com', '', '', 0, 'Sisters', 'Ini Adiknya looo...', '2019-08-07 03:04:31', ''),
(12, 11, 12, 'Ibrahim', 'Ibrahim@mail.com', '', '', 0, 'Brothers', 'Aku juga', '2019-08-07 03:05:50', ''),
(13, 0, 11, 'Ahyar', 'ahyar_arya@yahooo.co.id', '', '', 0, 'Makanan', 'Enak niii..', '2019-08-07 05:59:47', ''),
(14, 13, 11, 'Ibrahim', 'abu_ahyar@zoho.com', '', '', 0, 'Makanan', 'Pastinya doong...', '2019-08-07 06:00:58', ''),
(15, 0, 11, 'Shafa', 'maulahaz@aim.com', '', '', 0, 'Makanan', 'Copy yaa... resep nya', '2019-08-07 06:03:55', ''),
(16, 7, 12, 'Ibrahim De', 'ibrahim@yahoo.co.id', '', '', 0, 'oke', 'Netral aza..', '2019-08-10 07:33:46', ''),
(17, 0, 13, 'Ibrahim', 'ibraxx@xxx.com', '', '', 0, 'Umum', 'Trims info nya', '2019-10-07 07:19:41', ''),
(18, 0, 14, 'Hendi', 'Hendixxx@xxx.com', '', '', 0, 'Tanya', 'Apakah tenancy letternya juga harus menyesuaikan jumlah family member yg mau renewal visa. Lalu utk proses di Tamm,  apa boleh dikasih yg copynya saja. Jazakallah khairan..', '2019-10-07 07:30:27', ''),
(19, 18, 14, 'Piccolo', 'Piccoloxxx@xxx.com', '', '', 0, 'Jawab', 'Satu tenancy letter untuk semua anggota family pak. Validityny satu tahun. Syukur2 semua family visa expired datenya berbarengan. Untuk di tamm itu nanti akan discan jadi gak perlu copy dan lain lain. Semoga bisa membantu ????', '2019-10-07 07:31:03', ''),
(20, 0, 14, 'Maulana', 'Mauxxx@xxx.com', '', '', 0, '', 'Trims infonya.. manfaat bgt.', '2019-10-07 07:38:02', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_configs`
--

CREATE TABLE `tbl_configs` (
  `uid` int(11) NOT NULL,
  `Webname` varchar(255) NOT NULL,
  `Website` varchar(255) NOT NULL,
  `Tagline` varchar(255) NOT NULL,
  `Remark` text NOT NULL,
  `Logo` varchar(255) NOT NULL,
  `Icon` varchar(255) NOT NULL,
  `Facebook` varchar(255) NOT NULL,
  `Instagram` varchar(255) NOT NULL,
  `Currency` varchar(5) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_configs`
--

INSERT INTO `tbl_configs` (`uid`, `Webname`, `Website`, `Tagline`, `Remark`, `Logo`, `Icon`, `Facebook`, `Instagram`, `Currency`, `Email`, `Address`, `Phone`) VALUES
(1, 'Ruwaiskita', 'http://www.ruwaiskita.com', 'Dimanapun Kita Bersama', 'Sebuah komunitas anak-anak bangsa di negara nun jauh disana', 'ruwaiskita.jpg', 'ruwaiskita.ico', 'http://www.facebook.com/ruwaiskita', 'http://www.instagram.com/ruwaiskita', 'IDR', 'mymailaddress@ruwaiskita.com', 'Ruwais Housing Complex 3, Abu Dhabi, UAE', '+971550055001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dagangan`
--

CREATE TABLE `tbl_dagangan` (
  `uid` int(11) NOT NULL,
  `Owner_uid` varchar(20) NOT NULL,
  `Warung_uid` int(11) NOT NULL,
  `Categ` varchar(50) NOT NULL,
  `Item` varchar(255) NOT NULL,
  `Slug` varchar(255) NOT NULL,
  `Descr` text NOT NULL,
  `uom` varchar(50) NOT NULL,
  `uom_det` varchar(50) NOT NULL,
  `Stock` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dagangan`
--

INSERT INTO `tbl_dagangan` (`uid`, `Owner_uid`, `Warung_uid`, `Categ`, `Item`, `Slug`, `Descr`, `uom`, `uom_det`, `Stock`, `Price`, `Picture`, `Status`) VALUES
(1, 'umu_ahyar', 2, 'Makanan', 'Martabak', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Porsi', '', 'Order', 25, 'martabak.jpg', 'Ada'),
(2, 'umu_ahyar', 2, 'Minuman', 'Es Cendol', '', 'Es campuran buah cendol, gula merah, nangka dan perasan kelapa segar yang bisa mengobati dahaga.', 'Cup', '-', 'Ada', 10, 'es-cendol.jpg', 'Ada'),
(3, 'Bude_Joko', 3, 'Makanan', 'Rawon', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Porsi', '', 'Order', 15, 'rawon.jpg', 'Ada'),
(4, 'Bude_Joko', 3, 'Makanan', 'Gudeg Jogja', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', 'Porsi', '', 'Order', 15, 'gudeg-jogja.jpg', 'Ada'),
(5, 'fera_ijo', 1, 'Makanan', 'Cilor', 'cilor', 'Aci Telor. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Ea', '', 'Ada', 2, 'cilor.jpg', 'Ada'),
(6, 'fera_ijo', 1, 'Minumam', 'Es Teler 77', 'es-teler-77', 'Es Teler 77. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Cup', '', 'Ada', 10, 'es-teler-77.jpg', 'Kosong'),
(7, 'umu_ahyar', 2, 'makanan', 'Cilok bumbu kacang', '', 'Adonan campuran aci dan terigu yang di racik dengan bumbu rahasia, di lumuri dengan bumbu kacang yg lezat. Per porsi 25 pcs.', 'Porsi', '-', 'Order', 15, 'cilok.jpg', 'Ada'),
(8, 'Umu_ahyar', 2, 'Makanan', 'Siomay', '', 'Siomay Spesial. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Porsi', '', 'Ada', 20, 'siomay.jpg', 'Ada'),
(9, 'bunda_3', 5, 'Makanan', 'Manisan Pala', '', 'Manisan Pala Uenak\'e pool', 'Porsi', '', 'Kosong', 15, 'manisan-pala.jpg', 'Ada'),
(10, 'bunda_3', 5, 'Makanan', 'Keripik Talas', '', 'Di buat dari Talas asli..tanpa terigu ataupun tepung', 'Paket', '', 'Order', 15, 'keripik-talas.jpg', 'Ada'),
(11, 'Umu_ahyar', 2, '', 'Es Lilin', '', 'Paket. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Paket', '-', 'Ada', 5, 'kk-math-snake.gif', ''),
(12, 'warung-yuna', 41, 'Makanan', 'Mie Aceh', '', 'Mie buatan sendiri dengan daging kepiting yg segar dan menggugah selera', 'Porsi', '-', 'Ada', 20, 'cilok.jpg', ''),
(13, 'Umu_ahyar', 2, 'Makanan', 'Es Melon', '', 'Cup. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Cup', '-', 'Order', 5, 'girl-user.jpg', 'Ada');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `uid` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Tagline` varchar(255) DEFAULT NULL,
  `Descr` text NOT NULL,
  `Start_date` int(11) NOT NULL,
  `End_date` int(11) NOT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Created_date` int(11) NOT NULL,
  `Update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`uid`, `Title`, `Tagline`, `Descr`, `Start_date`, `End_date`, `Location`, `Created_date`, `Update_at`) VALUES
(1, 'Ketemu Bikers Indonesia Pak Lilik', 'test', 'Ketemu Bikers Indonesia Pak LilikKetemu Bikers Indonesia Pak LilikKetemu Bikers Indonesia Pak Lilik Ketemu Bikers Indonesia Pak LilikKetemu Bikers Indonesia Pak LilikKetemu Bikers Indonesia Pak Lilik', 1573192800, 1573279200, 'Ruwais Big Park', 1573618366, '2019-11-13 04:28:22'),
(2, 'Malaysian Bazaar', 'test3', 'Bazaar terbesar Malaysia di Ruwais Bazaar terbesar Malaysia di Ruwais Bazaar terbesar Malaysia di Ruwais', 1572674400, 1572674400, 'Borouge Tent', 1573618530, '2019-11-13 04:28:03'),
(3, 'Umroh 2019', 'Umroh bersama Kawan Ruwais', 'Umroh bersama Kawan Ruwais pake Bus Harga 2000/orang', 1581660000, 1582178400, 'Ruwais Mall', 1573619427, '2019-11-13 04:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelola_kas`
--

CREATE TABLE `tbl_kelola_kas` (
  `uid` int(11) NOT NULL,
  `Kas_uid` int(11) NOT NULL,
  `Trans_Tgl` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Keterangan` text NOT NULL,
  `Jenis_Trans` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelola_kas`
--

INSERT INTO `tbl_kelola_kas` (`uid`, `Kas_uid`, `Trans_Tgl`, `Jumlah`, `Keterangan`, `Jenis_Trans`) VALUES
(1, 1, 124235233, 350, 'Nengok Lahiran bayi building 77', 'out'),
(2, 2, 1272722117, 550, 'Sisa Akumulasi Kas Bulan Jan 2019', 'in');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keuangan`
--

CREATE TABLE `tbl_keuangan` (
  `uid` int(11) NOT NULL,
  `Kas_Dari` varchar(20) NOT NULL,
  `Kas_BulanThn` varchar(10) NOT NULL,
  `Kas_Thn` varchar(10) NOT NULL,
  `Trans_Tgl` int(11) NOT NULL,
  `Jumlah_in` int(11) NOT NULL,
  `Jumlah_out` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keuangan`
--

INSERT INTO `tbl_keuangan` (`uid`, `Kas_Dari`, `Kas_BulanThn`, `Kas_Thn`, `Trans_Tgl`, `Jumlah_in`, `Jumlah_out`, `Jumlah`, `Type`, `Keterangan`) VALUES
(1, 'fera_ijo', '05', '2019', 1256262718, 100, 0, 1000, 'Masuk', 'Kas Bulan Mei Th 2019'),
(2, 'user_123', '12', '2018', 1272712717, 150, 0, 500, 'Masuk', 'Kas Bulan Jan Th 2019'),
(3, 'fera_ijo', '05', '19', 1559282523, 100, 0, 200, 'Masuk', 'Uang kas dari member Ruwais#3'),
(5, 'fera_ijo', '04', '19', 1559452523, 100, 0, 120, 'Masuk', 'Uang kas dari member Ruwais#3'),
(6, '', '04', '19', 1559280923, 0, 150, 50, 'Keluar', 'Pembelian buku laporan'),
(7, '', '04', '19', 1559284423, 0, 350, 550, 'Keluar', 'Sewa website Ruwaiskita'),
(8, 'ibu_3', '05', '19', 1559282523, 750, 0, 500, 'Masuk', 'Uang kas dari member Ruwais#4'),
(9, 'ibu_5', '05', '19', 1559282523, 200, 0, 670, 'Masuk', 'Uang kas dari member Ruwais#5'),
(12, '', '', '', 1559451600, 420, 0, 140, 'Masuk', 'Uang kas Januari 2019 Ibu Rembak'),
(13, '', '', '', 1559883600, 221, 0, 120, 'Masuk', 'Kas Masuk dari sdri Ibunda 5'),
(15, '', '', '', 1562389200, 0, 0, 200, 'Masuk', 'Sumbangan dari Donatur Tetap : Honda'),
(16, '', '', '', 1564203600, 0, 0, 150, 'Masuk', 'Donatur PT. Jaya'),
(25, '', '', '', 1564290000, 0, 0, 50, 'Keluar', 'Reparasi Website');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_access`
--

CREATE TABLE `tbl_menu_access` (
  `uid` int(11) NOT NULL,
  `usr_Level` varchar(50) NOT NULL,
  `Mainmenu_uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu_access`
--

INSERT INTO `tbl_menu_access` (`uid`, `usr_Level`, `Mainmenu_uid`) VALUES
(1, 'admin', 1),
(2, 'admin', 2),
(3, 'user', 2),
(4, 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_main`
--

CREATE TABLE `tbl_menu_main` (
  `uid` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Sort` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu_main`
--

INSERT INTO `tbl_menu_main` (`uid`, `Title`, `Sort`) VALUES
(1, 'Admin', 1),
(2, 'User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_sub`
--

CREATE TABLE `tbl_menu_sub` (
  `uid` int(11) NOT NULL,
  `Mainmenu_uid` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `usr_Level` varchar(5) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `isActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu_sub`
--

INSERT INTO `tbl_menu_sub` (`uid`, `Mainmenu_uid`, `Title`, `URL`, `usr_Level`, `Icon`, `isActive`) VALUES
(1, 1, 'Dashboard', 'login/dashboard', 'admin', 'fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'members/myprofile', 'user', 'fa-user', 1),
(3, 1, 'Manage Menu', 'menu/index', 'admin', 'fa fa-folder', 1),
(4, 2, 'Menu User 2', '', 'user', '', 1),
(6, 1, 'Change Password', 'fasa', 'admin', 'fa fa-folder', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mymenu`
--

CREATE TABLE `tbl_mymenu` (
  `uid` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Descr` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Sort_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mymenu`
--

INSERT INTO `tbl_mymenu` (`uid`, `Title`, `Descr`, `URL`, `Status`, `Sort_num`) VALUES
(1, 'Home', 'Home Menu', '', 1, 1),
(2, 'Contact Us', 'Contact Us', 'contactus', 1, 4),
(3, 'Artikel', '', 'arttikel', 1, 2),
(4, 'Warung', '', 'warung', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mymenu_sub`
--

CREATE TABLE `tbl_mymenu_sub` (
  `uid` int(11) NOT NULL,
  `Menu_uid` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Descr` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Sort_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mymenu_sub`
--

INSERT INTO `tbl_mymenu_sub` (`uid`, `Menu_uid`, `Title`, `Descr`, `URL`, `Status`, `Sort_num`) VALUES
(1, 2, 'Makanan', '', 'artikel/makanan', 1, 1),
(2, 2, 'Minuman', '', 'artikel/minuman', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `uid` int(11) NOT NULL,
  `Order_ref` varchar(6) DEFAULT NULL,
  `Date_created` int(11) NOT NULL,
  `Paypal_uid` int(11) DEFAULT NULL,
  `Session_id` varchar(64) DEFAULT NULL,
  `isOpen` tinyint(1) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`uid`, `Order_ref`, `Date_created`, `Paypal_uid`, `Session_id`, `isOpen`, `Status`) VALUES
(16, 'KGWNC', 1576560697, 0, '0f5r5b8mf20nen49ov7bj6nud59m2hmj', 0, 0),
(17, 'Z2UWE', 1576560870, 0, 'rnjqe2mmb2h3pkr5lv3b4ubhvasvabgo', 0, 0),
(18, 'SMXYB', 1576675721, 0, 'hsbud5ncb8o7g145rlhfmmdpuu7p5al3', 0, 0),
(19, 'TG4NV', 1608545016, 0, '9i4keu7b9dl3de90hsu5lugfrdlcbeo6', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `uid` int(11) UNSIGNED NOT NULL,
  `Date_created` int(11) UNSIGNED NOT NULL,
  `Sent_by` varchar(50) NOT NULL,
  `Sent_to` varchar(50) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `isOpen` int(1) NOT NULL,
  `Code` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`uid`, `Date_created`, `Sent_by`, `Sent_to`, `Subject`, `Message`, `isOpen`, `Code`) VALUES
(1, 1572686821, 'Admin', 'umu_ahyar', 'Selamat Datang', 'Test Pesan', 1, '8ECEY3'),
(2, 1570924800, 'Admin', 'umu_ahyar', 'Pesan-2', 'Isis Pesan-2', 1, 'JQUSZp'),
(3, 1572888176, 'Fulanah bn Fulan(maulahaz@yahoo.co.id)', 'bunda_yuna', 'Ruwaiskita', 'Mohon perbaikan untuk module warung nya', 1, 'vSMMQg'),
(4, 1572888518, 'Sabar', 'Admin', 'Komplain', 'Mohon dipercepat pembuatan websitenyaDikirim oleh: SabarEmail: presiden@ruwaiskita.com', 1, 'WYxMPu'),
(9, 1573643319, 'Fulanah bn Fulan', 'Admin', 'Ruwaiskita', 'Qo warung nya ngga bisa upload gambar..\r\nTolong benerin yaa... Dikirim oleh: Fulanah bn Fulan. Email: fulan@mail.com', 0, ''),
(10, 1573644702, 'Riomi', 'Admin', 'Umum', 'TRims. Dikirim oleh: Riomi. Email: riomi@yahoo.com', 0, ''),
(11, 1573644787, 'Jack', 'Admin', 'Warung', 'Warung nya speed up doong. Dikirim oleh: Jack. Email: Jack', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_phone`
--

CREATE TABLE `tbl_phone` (
  `uid` int(11) UNSIGNED NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone1` varchar(20) NOT NULL,
  `Phone2` varchar(20) NOT NULL,
  `Note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_phone`
--

INSERT INTO `tbl_phone` (`uid`, `Name`, `Phone1`, `Phone2`, `Note`) VALUES
(2, 'Bawadi Restorant', '028743133', '', 'Ahal Al Bawadi Kitchen, Ghayati Sonaiyya'),
(3, 'Ruwais Housing Office', '800789247', '-', 'Maintenance, etc. 800-RUWAIS (789247)'),
(4, 'Danat Bainuna', '0504466256', '', 'Restaurant Danat Bainuna, Behind Bld.160.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_cookies`
--

CREATE TABLE `tbl_site_cookies` (
  `uid` int(11) NOT NULL,
  `cookie_code` varchar(128) NOT NULL,
  `usr_ID` varchar(20) NOT NULL,
  `expiry_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sliders`
--

CREATE TABLE `tbl_sliders` (
  `uid` int(11) NOT NULL,
  `Slider_title` varchar(255) NOT NULL,
  `Tagline` varchar(255) NOT NULL,
  `Target_url` varchar(255) NOT NULL,
  `Video_url` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Alt_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sliders`
--

INSERT INTO `tbl_sliders` (`uid`, `Slider_title`, `Tagline`, `Target_url`, `Video_url`, `Picture`, `Alt_text`) VALUES
(1, 'Ruwais Housing', 'Ruwais Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero corporis dolor consequatur debitis quia, id voluptates eligendi sunt quam aperiam.', 'ruwais-housing', 'https://www.youtube.com/watch?v=cIbyjXf9Be4', 'ruwais-1.jpg', ''),
(2, 'Ruwais Blue Tower', 'Blue Tower is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero corporis dolor consequatur debitis quia sunt quam aperiam.', 'ruwais-blue-tower', '', 'Ruwais-blue-tower.jpg', ''),
(5, 'Ruwais Hospital', 'Ruwais Hospital Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero corporis dolor consequatur debitis quia.', 'ruwais-hospital', '', 'Ruwais-Hospital.jpg', 'Ruwais Hospital'),
(6, 'Ruwais Mall', 'Ruwais Mall Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates eligendi sunt quam aperiam.', 'ruwais-mall', '', 'Ruwais-Mall.jpg', 'xx'),
(8, 'Ruwais Schools', 'Ruwais School Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero corporis dolor consequatur debii sunt quam aperiam.', 'ruwais-Sabis-School', '', 'Ruwais-Sabis-School.jpg', 'cc'),
(9, 'Ruwais Building', 'Ruwais Building Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero corporis dolor consequatur debitis quia, id voluptaeriam.', 'ruwais-building', '', 'Ruwais-Bldg.jpg', ''),
(12, 'Ruwais Petrochemical', 'Petrochemical Lorem ipsum dolor sit ame, ptates eligendi sunt quam aperiam.', 'ruwais-petrochemical', '', 'Ruwais-Petrochemical.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taxi`
--

CREATE TABLE `tbl_taxi` (
  `uid` int(11) NOT NULL,
  `Driver` varchar(100) NOT NULL,
  `Driver_photo` varchar(255) NOT NULL,
  `Phone1` varchar(20) NOT NULL,
  `Phone2` varchar(20) NOT NULL,
  `Car_type` varchar(100) NOT NULL,
  `Seat_num` int(11) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Status_data` varchar(10) NOT NULL,
  `Updated_by` varchar(20) NOT NULL,
  `Updated_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_taxi`
--

INSERT INTO `tbl_taxi` (`uid`, `Driver`, `Driver_photo`, `Phone1`, `Phone2`, `Car_type`, `Seat_num`, `Photo`, `Status_data`, `Updated_by`, `Updated_dtm`) VALUES
(2, 'Ali Hamzah', 'avatar-driver2.png', '0562220093', '0503322990', 'Toyota Previa', 7, 'previa.jpg', 'active', 'admin', '2020-05-08 08:18:21'),
(5, 'Ali Hamzah', 'avatar-driver2.png', '0562220093', '0503322990', 'Honda CR-V', 5, 'honda_crv.jpg', 'active', 'admin', '2020-05-08 08:19:37'),
(6, 'Ali Hamzah', 'avatar-driver2.png', '0562220093', '0503322990', 'Prado', 4, 'prado.png', 'active', 'admin', '2020-05-08 08:19:40'),
(36, 'Ali Pakistan', 'avatar-driver3.jpg', '056', '050', 'Camry', 4, 'camry2019.jpg', '', 'admin', '2020-05-08 08:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `uid` int(11) NOT NULL,
  `Trans_code` varchar(20) DEFAULT NULL,
  `Trans_dtm` datetime NOT NULL,
  `Shopper_id` varchar(20) NOT NULL,
  `Shopper_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Amount` double(10,2) NOT NULL,
  `Paid_amount` double(10,2) NOT NULL,
  `Paid_to` varchar(100) NOT NULL,
  `Paid_from` varchar(100) NOT NULL,
  `isOpen` tinyint(1) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Receipt` varchar(255) NOT NULL,
  `Notes` varchar(255) NOT NULL,
  `Paypal_id` int(11) DEFAULT NULL,
  `Session_id` varchar(64) DEFAULT NULL,
  `Created_at` datetime NOT NULL,
  `Modified_by` varchar(20) NOT NULL,
  `Modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`uid`, `Trans_code`, `Trans_dtm`, `Shopper_id`, `Shopper_name`, `Email`, `Phone`, `Address`, `Amount`, `Paid_amount`, `Paid_to`, `Paid_from`, `isOpen`, `Status`, `Receipt`, `Notes`, `Paypal_id`, `Session_id`, `Created_at`, `Modified_by`, `Modified_at`) VALUES
(1, '20201223r6shy', '2020-12-23 07:27:44', 'sabar', 'Sabar Abu Hafshah', 'sabar_abuhafsah@yahoo.com.sg', '221', 'Ruwais 3, Building 80', 75.00, 0.00, '', '', NULL, 'Not paid', '', 'Test ok', NULL, NULL, '0000-00-00 00:00:00', '', '2020-12-23 10:27:44'),
(2, '20210102HRd6b', '2021-01-02 04:01:12', 'sabar', 'Sabar Abu Hafshah', 'sabar_abuhafsah@yahoo.com.sg', '221', 'Ruwais 3, Building 80', 45.00, 0.00, '', '', NULL, 'Not paid', '', '', NULL, NULL, '0000-00-00 00:00:00', '', '2021-01-02 07:01:12'),
(3, '20210126xWYwp', '2021-01-26 04:40:15', 'umu_ahyar', 'Neng Hamdiyah', 'umu_ahyar@yahoo.co.id', '0563723995', 'RHC#3, Building Y-5651', 55.00, 0.00, '', '', NULL, 'Not paid', '', 'Kirim jam 10 pagi', NULL, NULL, '0000-00-00 00:00:00', '', '2021-01-26 07:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi_detail`
--

CREATE TABLE `tbl_transaksi_detail` (
  `uid` int(11) NOT NULL,
  `Trans_code` varchar(20) NOT NULL,
  `Item_uid` int(11) NOT NULL,
  `Item` varchar(255) NOT NULL,
  `Item_color` varchar(50) DEFAULT NULL,
  `Item_size` varchar(50) DEFAULT NULL,
  `Price` decimal(7,2) DEFAULT NULL,
  `Qty` text NOT NULL,
  `Tax` decimal(7,2) DEFAULT NULL,
  `Notes` varchar(255) NOT NULL,
  `Created_by` varchar(20) NOT NULL,
  `Created_at` datetime NOT NULL,
  `Modified_by` varchar(20) NOT NULL,
  `Modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi_detail`
--

INSERT INTO `tbl_transaksi_detail` (`uid`, `Trans_code`, `Item_uid`, `Item`, `Item_color`, `Item_size`, `Price`, `Qty`, `Tax`, `Notes`, `Created_by`, `Created_at`, `Modified_by`, `Modified_at`) VALUES
(1, '20201223r6shy', 1, 'Martabak', NULL, NULL, '25.00', '3', NULL, '', 'sabar', '2020-12-23 07:27:44', '', '0000-00-00 00:00:00'),
(2, '20210102HRd6b', 7, 'Cilok bumbu kacang', NULL, NULL, '15.00', '3', NULL, '', 'sabar', '2021-01-02 04:01:12', '', '0000-00-00 00:00:00'),
(3, '20210126xWYwp', 6, 'Es Teler 77', NULL, NULL, '10.00', '2', NULL, '', 'umu_ahyar', '2021-01-26 04:40:15', '', '0000-00-00 00:00:00'),
(4, '20210126xWYwp', 5, 'Cilor', NULL, NULL, '2.00', '10', NULL, '', 'umu_ahyar', '2021-01-26 04:40:15', '', '0000-00-00 00:00:00'),
(5, '20210126xWYwp', 4, 'Gudeg Jogja', NULL, NULL, '15.00', '1', NULL, '', 'umu_ahyar', '2021-01-26 04:40:15', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uangkas`
--

CREATE TABLE `tbl_uangkas` (
  `uid` int(11) NOT NULL,
  `Kas_Dari` varchar(20) NOT NULL,
  `Kas_BulanThn` varchar(10) NOT NULL,
  `Kas_Thn` varchar(10) NOT NULL,
  `Trans_Tgl` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uangkas`
--

INSERT INTO `tbl_uangkas` (`uid`, `Kas_Dari`, `Kas_BulanThn`, `Kas_Thn`, `Trans_Tgl`, `Jumlah`, `Type`, `Keterangan`) VALUES
(21, 'Bude_Joko', '6', '2018', 1560315600, 150, '', ''),
(22, 'umu_ahyar', '6', '2017', 1560402000, 150, '', 'Bayar telat'),
(23, 'mamamarwah', '7', '2017', 1562302800, 2000, '', 'Okeh'),
(24, 'Bude_Joko', '7', '2017', 1564203600, 500, '', 'Bayar telat Bln Jan 2019'),
(32, 'retnoreza', '8', '2019', 1572328800, 200, '', 'Bayar telat'),
(33, 'bunda_2', '10', '2019', 1570683600, 200, '', 'Bayar telat'),
(34, 'fera_ijo', '10', '2019', 1569906000, 200, '', 'Donatur PT. Nganu'),
(35, 'fera_ijo', '10', '2017', 1569906000, 150, '', 'Donatur PT. Nganu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uid` int(11) NOT NULL,
  `usr_ID` varchar(20) NOT NULL,
  `usr_Pass` varchar(255) NOT NULL,
  `usr_Name` varchar(50) NOT NULL,
  `usr_Nickname` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Address_Group` varchar(50) NOT NULL,
  `usr_Level` varchar(5) NOT NULL,
  `usr_Status` int(11) NOT NULL,
  `usr_Email` varchar(50) NOT NULL,
  `usr_Big_pic` varchar(255) NOT NULL,
  `usr_Small_pic` varchar(255) NOT NULL,
  `usr_Phone1` varchar(15) NOT NULL,
  `usr_Phone2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `usr_ID`, `usr_Pass`, `usr_Name`, `usr_Nickname`, `Address`, `Address_Group`, `usr_Level`, `usr_Status`, `usr_Email`, `usr_Big_pic`, `usr_Small_pic`, `usr_Phone1`, `usr_Phone2`) VALUES
(1, 'umu_ahyar', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Neng Hamdiyah Maulana', 'Umi Ahyar', 'RHC-3 Bldg. Y-5651', 'RHC-3', 'admin', 1, 'umu_ahyar@yahoo.co.id', '', '', '0567567', '0567576575'),
(2, 'fera_ijo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Fera Umi Kaesar', 'Fera Ijo', 'RHC-3 Bldg.xxxx', 'RHC-3', 'user', 1, 'fera_ijo@gmail.com', '', '', '0565324', '058545'),
(3, 'Bude_Joko', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Bude Joko', 'Bunda Joko', 'RHC-4 Bldg 156-09', 'RHC-4', 'user', 1, 'ibu3@gmail.com', '', '', '0563223', '05766433'),
(4, 'bunda_2', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Namanya Bunda Dua', 'Bunda Dua', 'Blok B, Bldg 122', 'RHC-2', 'user', 1, 'ibu_2@hotmail.com', '', '', '05655345', '0564346'),
(9, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Maulana Hazmi sadd', 'Abu Ahyar', 'Abu Dhabi Petrochemical', '5', 'admin', 0, 'maulahaz@gmail.com', '', '', '7085933', ''),
(37, 'retnoreza', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Retno Istrinya Reza', 'Retno', 'Building Y-5542', 'Ruwais3', 'user', 1, 'retno@reza.com', '', '', '5676856587', ''),
(38, 'mamamarwah', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Ibu Teddy Zamora', 'Mama Marwah', 'Building Y-5621', 'Ruwais3', 'user', 1, 'mamamarwah@gmail.com', '', '', '53452352352', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warung`
--

CREATE TABLE `tbl_warung` (
  `uid` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Slug` varchar(255) NOT NULL,
  `Owner_uid` varchar(20) NOT NULL,
  `Logo` varchar(50) NOT NULL,
  `Tagline` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Created_on` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `Last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_warung`
--

INSERT INTO `tbl_warung` (`uid`, `Name`, `Slug`, `Owner_uid`, `Logo`, `Tagline`, `Address`, `Created_on`, `isActive`, `Last_update`) VALUES
(1, 'Warung Ijo', 'warung-ijo', 'fera_ijo', 'warung-1.jpg', 'Ijo Menunya, Ijo Harganya', 'RHC#3, Building 51', 1560015000, 1, '2020-12-11 14:51:48'),
(2, 'Warung Barokah', 'warung-barokah', 'umu_ahyar', 'warung-2.jpg', 'InshaAllah Barokah', 'RHC#3, Y-5651', 1560015000, 1, '2020-12-11 14:51:54'),
(3, 'Warung Bude Joko', 'warung-bude-joko', 'Bude_Joko', 'warung-3.jpg', 'Warung Khas Jogja', 'RHC#4`', 1560012000, 1, '2020-12-11 14:52:01'),
(5, 'Warung Khas Bogor', 'warung-khas-bogor', 'bunda_3', 'warung-5.jpg', 'Kembali ke selera asal', 'Ruwais 5', 156002000, 1, '2020-12-11 14:52:10'),
(33, 'Nisa Jaya', 'nisa-jaya', 'Hayumi', 'warung-6.jpg', '', 'Cilegon', 0, 1, '2020-12-11 14:52:15'),
(35, 'Batu Split', 'batu-split', 'PT. Crasher', '', '', 'Merak', 0, 0, '2020-12-11 14:52:22'),
(36, 'Kue Tart Evi', 'kue-tart-evi', 'Evi', '', '', 'Jakarta', 0, 0, '2020-12-11 14:52:35'),
(37, 'Warung Badminton', 'warung-badminton', 'Abu Zafif', 'warung-7.jpg', '', 'Ruwais 4', 0, 1, '2020-12-11 14:52:43'),
(38, 'Herbal Sehat', 'herbal-sehat', 'Abu Faisal', 'warung-8.jpg', '', 'Ruwais Blok B', 0, 1, '2020-12-11 14:52:47'),
(39, 'Mpempe', 'mpempe', 'mpo Palembang', '', '', 'Palembang', 0, 0, '2020-12-11 14:52:53'),
(41, 'Warung Yuna', 'warung-yuna', 'bunda_yuna', 'warung-teteh.jpg', 'Sajian terbaik dari yang terbaik', 'RHC-3, Bldg 5622', 1573060004, 1, '2020-12-11 14:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webpages`
--

CREATE TABLE `tbl_webpages` (
  `uid` int(11) NOT NULL,
  `Date_posted` int(11) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Slug` varchar(255) NOT NULL,
  `Headline` text NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_webpages`
--

INSERT INTO `tbl_webpages` (`uid`, `Date_posted`, `Author`, `Title`, `Slug`, `Headline`, `Category`, `Content`, `Status`) VALUES
(1, 1570899454, 'Admin', 'Homepage', '', 'Homepage', '', '', 'Published'),
(2, 1570899454, 'Admin', 'Contactus', 'contact-us', 'Contact us page', '', '', 'Published'),
(3, 1570924800, 'Admin', 'Test Posting Page', 'Test-Posting-Page', 'Homepage', '', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Published'),
(4, 1570924800, 'Admin', 'Test Posting Pages ke 2', 'Posting-Pages-ke-2', 'Testing', '', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Published'),
(5, 1570924800, 'Admin', 'The standard Lorem Ipsum passage, used since the 1500s', 'The-standard-Lorem-Ipsum-passage-use-since-the-1500s', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'Umum', 'Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\r\n\r\n1914 translation by H. Rackham\r\n\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"', 'Published'),
(6, 1570899454, 'Admin', '1914 translation by H. Rackham', '1914-translation-by-H-Rackham', '', 'Umum', '\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_websetting`
--

CREATE TABLE `tbl_websetting` (
  `Field` varchar(50) NOT NULL,
  `Value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_websetting`
--

INSERT INTO `tbl_websetting` (`Field`, `Value`) VALUES
('Address', 'Ruwais Housing Complex'),
('Email', 'info@ruwaiskita.com'),
('Facebook', 'facebook.com/ruwaiskita.com'),
('Instagram', 'instagram.com/ruwaiskita.com'),
('Phone', '0550055001'),
('Web_address', 'www.ruwaiskita.com'),
('Web_headline', 'Dimanapun tetap bersama'),
('Web_icon', 'icon_ruwaiskita.ico'),
('Web_logo', 'logo_ruwaiskita.png'),
('Web_name', 'Ruwaiskita');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_zayed_waters`
--

CREATE TABLE `tbl_zayed_waters` (
  `uid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Item` varchar(100) NOT NULL,
  `Qty` int(11) NOT NULL,
  `UOM` varchar(10) NOT NULL,
  `Notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_zayed_waters`
--

INSERT INTO `tbl_zayed_waters` (`uid`, `Name`, `Phone`, `Address`, `Item`, `Qty`, `UOM`, `Notes`) VALUES
(1, 'Maulana Hazmi', '0562681844', 'Building 56', 'Zayed water 250ml (isi 30)', 5, 'box', 'Test produk'),
(2, 'Abu Yasir', '0567789', 'Building 59', 'Zayed water 500ml (isi 24)', 10, 'box', 'Enak'),
(3, 'Zamrony', '05677553', 'B.67', 'Zayed water 500ml (isi 24)', 12, 'box', 'yes'),
(5, 'Sabar', '0562423844', '100', 'Zayed water 250ml (isi 30)', 10, 'box', 'fdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `num` (`uid`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_barengan`
--
ALTER TABLE `tbl_barengan`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_basket`
--
ALTER TABLE `tbl_basket`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_configs`
--
ALTER TABLE `tbl_configs`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_dagangan`
--
ALTER TABLE `tbl_dagangan`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_kelola_kas`
--
ALTER TABLE `tbl_kelola_kas`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_keuangan`
--
ALTER TABLE `tbl_keuangan`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_menu_access`
--
ALTER TABLE `tbl_menu_access`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_menu_main`
--
ALTER TABLE `tbl_menu_main`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_menu_sub`
--
ALTER TABLE `tbl_menu_sub`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_mymenu`
--
ALTER TABLE `tbl_mymenu`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_mymenu_sub`
--
ALTER TABLE `tbl_mymenu_sub`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_phone`
--
ALTER TABLE `tbl_phone`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_site_cookies`
--
ALTER TABLE `tbl_site_cookies`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_sliders`
--
ALTER TABLE `tbl_sliders`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `tbl_taxi`
--
ALTER TABLE `tbl_taxi`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_transaksi_detail`
--
ALTER TABLE `tbl_transaksi_detail`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_uangkas`
--
ALTER TABLE `tbl_uangkas`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `num` (`uid`);

--
-- Indexes for table `tbl_warung`
--
ALTER TABLE `tbl_warung`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_webpages`
--
ALTER TABLE `tbl_webpages`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_websetting`
--
ALTER TABLE `tbl_websetting`
  ADD UNIQUE KEY `Field` (`Field`);

--
-- Indexes for table `tbl_zayed_waters`
--
ALTER TABLE `tbl_zayed_waters`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_barengan`
--
ALTER TABLE `tbl_barengan`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_basket`
--
ALTER TABLE `tbl_basket`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `uid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_configs`
--
ALTER TABLE `tbl_configs`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_dagangan`
--
ALTER TABLE `tbl_dagangan`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kelola_kas`
--
ALTER TABLE `tbl_kelola_kas`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_keuangan`
--
ALTER TABLE `tbl_keuangan`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_menu_access`
--
ALTER TABLE `tbl_menu_access`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_menu_main`
--
ALTER TABLE `tbl_menu_main`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_menu_sub`
--
ALTER TABLE `tbl_menu_sub`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_mymenu`
--
ALTER TABLE `tbl_mymenu`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_mymenu_sub`
--
ALTER TABLE `tbl_mymenu_sub`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_phone`
--
ALTER TABLE `tbl_phone`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_site_cookies`
--
ALTER TABLE `tbl_site_cookies`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sliders`
--
ALTER TABLE `tbl_sliders`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_taxi`
--
ALTER TABLE `tbl_taxi`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_transaksi_detail`
--
ALTER TABLE `tbl_transaksi_detail`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_uangkas`
--
ALTER TABLE `tbl_uangkas`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_warung`
--
ALTER TABLE `tbl_warung`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_webpages`
--
ALTER TABLE `tbl_webpages`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_zayed_waters`
--
ALTER TABLE `tbl_zayed_waters`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
