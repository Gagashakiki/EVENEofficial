-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for evene
DROP DATABASE IF EXISTS `evene`;
CREATE DATABASE IF NOT EXISTS `evene` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `evene`;

-- Dumping structure for procedure evene.addcounter
DROP PROCEDURE IF EXISTS `addcounter`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `addcounter`()
BEGIN
update counter set counter=counter+1;
END//
DELIMITER ;

-- Dumping structure for table evene.admin
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` longtext NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table evene.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
REPLACE INTO `admin` (`id`, `username`, `password`, `updated_at`, `created_at`) VALUES
	(1, 'ad@min.com', '$2y$10$cg/VtjNc./7qLtSag81LbOCTsDm4asU3mrtSigPvXAHD3iex7dpBG', '2020-03-09 14:19:18', '2020-03-09 14:19:19');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for procedure evene.approvevendor
DROP PROCEDURE IF EXISTS `approvevendor`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `approvevendor`(
	IN `idv` VARCHAR(50)

)
BEGIN
update vendor set status='Verified' where id=idv;
END//
DELIMITER ;

-- Dumping structure for table evene.blog
DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` longtext NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` longtext NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table evene.blog: ~5 rows (approximately)
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
REPLACE INTO `blog` (`id`, `thumbnail`, `judul`, `isi`, `penulis`, `tanggal`) VALUES
	(2, 'ultah.jpg', 'Budaya Merayakan Sweet Seventeenses', '<p>Citizen6, Semarang: Usia 17 tahun merupakan angka yang dianggap spesial bagi para remaja. Umur dimana para remaja telah dianggap menginjak masa kedewasaan. Di umur 17 ini para remaja juga telah mendapat pengakuan resmi dari Negara dengan mendapat Kartu Tanda Penduduk (KTP) dan Surat Ijin Mengemudi (SIM). Lalu bagaimana budaya merayakan sweet seventeen? Ya budaya merayakan ulang tahun ke-17 memang sudah berkembang, tak hanya di luar negeri tetapi juga di Indonesia.</p><p>&nbsp;</p><p>Para remaja terutama remaja putri sangat menanti-nantikan datangnya usia 17. Perayaan yang mewah, roti yang menjulang tinggi, dekorasi yang menawan, dan berbagai macam hiburan. Itulah gambaran ketika seseorang merayakan ulang tahun ke-17. Salah satu contohnya, Tia Andriyani (18), memilih merayakan ulang tahun ke-17 secara besar-besaran di salah satu gedung di Semarang. Ia mengatakan, &quot;Ulang tahun ini hanya terjadi sekali seumur hidup jadi aku mau punya kenang-kenangan buat diceritain ke anak-anakku. Selain itu aku anak perempuan satu-satunya di keluarga jadi orangtua mendukung, tetapi bukan maksudku mau berfoya-foya cuma mau membagi kebahagiaanku sama temen-temen semua.&quot; Lalu apakah harus setiap perayaan ulang tahun ke 17 dirayakan seperti itu? Tentu tidak. Berbeda dengan Tia, Fitria Mega (18), mengungkapkan, bukan perayaannya yang penting, tetapi anugerah yang diberikan Allah SWT sehingga kita masih dapat mencapai umur 17 tahun. &quot;Ya aku memang merayakan ulangtahun ke-17 ku dulu, tapi tidak yang besar-besaran cukup makan bareng temen sama keluarga udah cukup kok, yang penting kebersamaannya,&quot; ungkapnya.</p><p>&nbsp;</p><p>&nbsp;</p><p>Ada berbagai cara untuk menyambut umur ke-17 ini. Ada yang dirayakan besar-besaran di gedung mewah dengan mengundang artis papan atas, ada pula yang sederhana dengan hanya mengundang beberapa teman dekat. Bahkan ada pula beberapa remaja yang masih peduli dengan lingkungannya dengan mengadakan perayaan bersama anak yatim piatu. Tidak ada yang salah dengan bentuk kita menyambut usia ke-17 ini, semuanya tentu berdasar rasa ingin berbagi dengan sesama yaitu berbagi kebahagiaan dan kebersamaan. Itu semua merupakan bentuk apresiasi remaja dalam menyambut usia kedewasaannya. Apapun bentuknya perayaannya yang paling penting harus kita ingat adalah rasa syukur kepada Tuhan karena telah memberikan kita umur yang panjang hingga dapat menyambut usia kedewasaan kita. (Windariani Soeryo Handadari)</p><p>&nbsp;</p>', 'James Maddison', '2020-03-11 18:41:20'),
	(3, 'ultah.jpg', 'Budaya Merayakan Sweet Seventeen', '  <p>Citizen6, Semarang: Usia 17 tahun merupakan angka yang dianggap spesial bagi para remaja. Umur dimana para remaja telah dianggap menginjak masa kedewasaan. Di umur 17 ini para remaja juga telah mendapat pengakuan resmi dari Negara dengan mendapat Kartu Tanda Penduduk (KTP) dan Surat Ijin Mengemudi (SIM). Lalu bagaimana budaya merayakan sweet seventeen?\r\n                    Ya budaya merayakan ulang tahun ke-17 memang sudah berkembang, tak hanya di luar negeri tetapi juga di Indonesia. \r\n                  </p>\r\n                  <br>\r\n                  <p>\r\n                    Para remaja terutama remaja putri sangat menanti-nantikan datangnya usia 17. Perayaan yang mewah, roti yang menjulang tinggi, dekorasi yang menawan, dan berbagai macam hiburan. Itulah gambaran ketika seseorang merayakan ulang tahun ke-17.\r\n                    Salah satu contohnya, Tia Andriyani (18), memilih merayakan ulang tahun ke-17 secara besar-besaran di salah satu gedung di Semarang. Ia mengatakan, "Ulang tahun ini hanya terjadi sekali seumur hidup jadi aku mau punya kenang-kenangan buat diceritain ke anak-anakku. Selain itu aku anak perempuan satu-satunya di keluarga jadi orangtua mendukung, tetapi bukan maksudku mau berfoya-foya cuma mau membagi kebahagiaanku sama temen-temen semua."\r\n                    Lalu apakah harus setiap perayaan ulang tahun ke 17 dirayakan seperti itu? Tentu tidak. Berbeda dengan Tia, Fitria Mega (18), mengungkapkan,  bukan perayaannya yang penting, tetapi anugerah yang diberikan Allah SWT sehingga kita masih dapat mencapai umur 17 tahun. "Ya aku memang merayakan ulangtahun ke-17 ku dulu, tapi tidak yang besar-besaran cukup makan bareng temen sama keluarga udah cukup kok, yang penting kebersamaannya," ungkapnya.\r\n                  </p>\r\n                  <br>\r\n                  <p>\r\n                    Ada berbagai cara untuk menyambut umur ke-17 ini. Ada yang dirayakan besar-besaran di gedung mewah dengan mengundang artis papan atas, ada pula yang sederhana dengan hanya mengundang beberapa teman dekat. Bahkan ada pula beberapa remaja yang masih peduli dengan lingkungannya dengan mengadakan perayaan bersama anak yatim piatu. Tidak ada yang salah dengan bentuk kita menyambut usia ke-17 ini, semuanya tentu berdasar rasa ingin berbagi dengan sesama yaitu berbagi kebahagiaan dan kebersamaan.\r\n                    Itu semua merupakan bentuk apresiasi remaja dalam menyambut usia kedewasaannya. Apapun bentuknya perayaannya yang paling penting harus kita ingat adalah rasa syukur kepada Tuhan karena telah memberikan kita umur yang panjang hingga dapat menyambut usia kedewasaan kita. (Windariani Soeryo Handadari)\r\n                  </p>', 'James Maddison', '2020-02-27 21:34:09'),
	(4, 'ultah.jpg', 'Budaya Merayakan Sweet Seventeen', '  <p>Citizen6, Semarang: Usia 17 tahun merupakan angka yang dianggap spesial bagi para remaja. Umur dimana para remaja telah dianggap menginjak masa kedewasaan. Di umur 17 ini para remaja juga telah mendapat pengakuan resmi dari Negara dengan mendapat Kartu Tanda Penduduk (KTP) dan Surat Ijin Mengemudi (SIM). Lalu bagaimana budaya merayakan sweet seventeen?\r\n                    Ya budaya merayakan ulang tahun ke-17 memang sudah berkembang, tak hanya di luar negeri tetapi juga di Indonesia. \r\n                  </p>\r\n                  <br>\r\n                  <p>\r\n                    Para remaja terutama remaja putri sangat menanti-nantikan datangnya usia 17. Perayaan yang mewah, roti yang menjulang tinggi, dekorasi yang menawan, dan berbagai macam hiburan. Itulah gambaran ketika seseorang merayakan ulang tahun ke-17.\r\n                    Salah satu contohnya, Tia Andriyani (18), memilih merayakan ulang tahun ke-17 secara besar-besaran di salah satu gedung di Semarang. Ia mengatakan, "Ulang tahun ini hanya terjadi sekali seumur hidup jadi aku mau punya kenang-kenangan buat diceritain ke anak-anakku. Selain itu aku anak perempuan satu-satunya di keluarga jadi orangtua mendukung, tetapi bukan maksudku mau berfoya-foya cuma mau membagi kebahagiaanku sama temen-temen semua."\r\n                    Lalu apakah harus setiap perayaan ulang tahun ke 17 dirayakan seperti itu? Tentu tidak. Berbeda dengan Tia, Fitria Mega (18), mengungkapkan,  bukan perayaannya yang penting, tetapi anugerah yang diberikan Allah SWT sehingga kita masih dapat mencapai umur 17 tahun. "Ya aku memang merayakan ulangtahun ke-17 ku dulu, tapi tidak yang besar-besaran cukup makan bareng temen sama keluarga udah cukup kok, yang penting kebersamaannya," ungkapnya.\r\n                  </p>\r\n                  <br>\r\n                  <p>\r\n                    Ada berbagai cara untuk menyambut umur ke-17 ini. Ada yang dirayakan besar-besaran di gedung mewah dengan mengundang artis papan atas, ada pula yang sederhana dengan hanya mengundang beberapa teman dekat. Bahkan ada pula beberapa remaja yang masih peduli dengan lingkungannya dengan mengadakan perayaan bersama anak yatim piatu. Tidak ada yang salah dengan bentuk kita menyambut usia ke-17 ini, semuanya tentu berdasar rasa ingin berbagi dengan sesama yaitu berbagi kebahagiaan dan kebersamaan.\r\n                    Itu semua merupakan bentuk apresiasi remaja dalam menyambut usia kedewasaannya. Apapun bentuknya perayaannya yang paling penting harus kita ingat adalah rasa syukur kepada Tuhan karena telah memberikan kita umur yang panjang hingga dapat menyambut usia kedewasaan kita. (Windariani Soeryo Handadari)\r\n                  </p>', 'James Maddison', '2020-02-27 21:34:09'),
	(5, 'ultah.jpg', 'Budaya Merayakan Sweet Seventeen', '  <p>Citizen6, Semarang: Usia 17 tahun merupakan angka yang dianggap spesial bagi para remaja. Umur dimana para remaja telah dianggap menginjak masa kedewasaan. Di umur 17 ini para remaja juga telah mendapat pengakuan resmi dari Negara dengan mendapat Kartu Tanda Penduduk (KTP) dan Surat Ijin Mengemudi (SIM). Lalu bagaimana budaya merayakan sweet seventeen?\r\n                    Ya budaya merayakan ulang tahun ke-17 memang sudah berkembang, tak hanya di luar negeri tetapi juga di Indonesia. \r\n                  </p>\r\n                  <br>\r\n                  <p>\r\n                    Para remaja terutama remaja putri sangat menanti-nantikan datangnya usia 17. Perayaan yang mewah, roti yang menjulang tinggi, dekorasi yang menawan, dan berbagai macam hiburan. Itulah gambaran ketika seseorang merayakan ulang tahun ke-17.\r\n                    Salah satu contohnya, Tia Andriyani (18), memilih merayakan ulang tahun ke-17 secara besar-besaran di salah satu gedung di Semarang. Ia mengatakan, "Ulang tahun ini hanya terjadi sekali seumur hidup jadi aku mau punya kenang-kenangan buat diceritain ke anak-anakku. Selain itu aku anak perempuan satu-satunya di keluarga jadi orangtua mendukung, tetapi bukan maksudku mau berfoya-foya cuma mau membagi kebahagiaanku sama temen-temen semua."\r\n                    Lalu apakah harus setiap perayaan ulang tahun ke 17 dirayakan seperti itu? Tentu tidak. Berbeda dengan Tia, Fitria Mega (18), mengungkapkan,  bukan perayaannya yang penting, tetapi anugerah yang diberikan Allah SWT sehingga kita masih dapat mencapai umur 17 tahun. "Ya aku memang merayakan ulangtahun ke-17 ku dulu, tapi tidak yang besar-besaran cukup makan bareng temen sama keluarga udah cukup kok, yang penting kebersamaannya," ungkapnya.\r\n                  </p>\r\n                  <br>\r\n                  <p>\r\n                    Ada berbagai cara untuk menyambut umur ke-17 ini. Ada yang dirayakan besar-besaran di gedung mewah dengan mengundang artis papan atas, ada pula yang sederhana dengan hanya mengundang beberapa teman dekat. Bahkan ada pula beberapa remaja yang masih peduli dengan lingkungannya dengan mengadakan perayaan bersama anak yatim piatu. Tidak ada yang salah dengan bentuk kita menyambut usia ke-17 ini, semuanya tentu berdasar rasa ingin berbagi dengan sesama yaitu berbagi kebahagiaan dan kebersamaan.\r\n                    Itu semua merupakan bentuk apresiasi remaja dalam menyambut usia kedewasaannya. Apapun bentuknya perayaannya yang paling penting harus kita ingat adalah rasa syukur kepada Tuhan karena telah memberikan kita umur yang panjang hingga dapat menyambut usia kedewasaan kita. (Windariani Soeryo Handadari)\r\n                  </p>', 'James Maddison', '2020-02-27 21:34:09');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;

-- Dumping structure for table evene.counter
DROP TABLE IF EXISTS `counter`;
CREATE TABLE IF NOT EXISTS `counter` (
  `counter` int(11) NOT NULL,
  PRIMARY KEY (`counter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table evene.counter: ~1 rows (approximately)
/*!40000 ALTER TABLE `counter` DISABLE KEYS */;
REPLACE INTO `counter` (`counter`) VALUES
	(24);
/*!40000 ALTER TABLE `counter` ENABLE KEYS */;

-- Dumping structure for procedure evene.daftaruser
DROP PROCEDURE IF EXISTS `daftaruser`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `daftaruser`(
	IN `email` VARCHAR(50),
	IN `pass` LONGTEXT

)
BEGIN
insert into users(email, pass) value(email,pass);
END//
DELIMITER ;

-- Dumping structure for procedure evene.daftaruvendor
DROP PROCEDURE IF EXISTS `daftaruvendor`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `daftaruvendor`(
	IN `idu` INT

)
    COMMENT 'user vendor'
BEGIN
select * from vendor where iduser=idu order by date desc;
END//
DELIMITER ;

-- Dumping structure for procedure evene.dataadmin
DROP PROCEDURE IF EXISTS `dataadmin`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `dataadmin`(
	IN `imel` VARCHAR(50)

)
BEGIN
select * from admin where username=imel;
END//
DELIMITER ;

-- Dumping structure for procedure evene.dataorder
DROP PROCEDURE IF EXISTS `dataorder`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `dataorder`()
BEGIN
select * from vendor where status='Not Verified';
END//
DELIMITER ;

-- Dumping structure for procedure evene.datauser
DROP PROCEDURE IF EXISTS `datauser`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `datauser`(
	IN `email` VARCHAR(50)
)
BEGIN
select * from users where users.email=email;
END//
DELIMITER ;

-- Dumping structure for procedure evene.deleteblog
DROP PROCEDURE IF EXISTS `deleteblog`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteblog`(
	IN `idb` INT
)
BEGIN
delete from blog where id=idb;
END//
DELIMITER ;

-- Dumping structure for procedure evene.deleteinsp
DROP PROCEDURE IF EXISTS `deleteinsp`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteinsp`(
	IN `idi` INT
)
BEGIN
delete from inspirasi where id=idi;
END//
DELIMITER ;

-- Dumping structure for procedure evene.deleteuser
DROP PROCEDURE IF EXISTS `deleteuser`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteuser`(
	IN `idu` INT
)
BEGIN
delete from users where id=idu;
END//
DELIMITER ;

-- Dumping structure for procedure evene.deletevendor
DROP PROCEDURE IF EXISTS `deletevendor`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `deletevendor`(
	IN `idu` VARCHAR(50)
)
BEGIN
delete from vendor where id=idu;
END//
DELIMITER ;

-- Dumping structure for procedure evene.detailblog
DROP PROCEDURE IF EXISTS `detailblog`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `detailblog`(
	IN `idb` INT
)
BEGIN
select * from blog where id=idb;
END//
DELIMITER ;

-- Dumping structure for procedure evene.detailinspirasi
DROP PROCEDURE IF EXISTS `detailinspirasi`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `detailinspirasi`(
	IN `idb` INT
)
BEGIN
select * from inspirasi where id=idb;
END//
DELIMITER ;

-- Dumping structure for procedure evene.detailvendor
DROP PROCEDURE IF EXISTS `detailvendor`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `detailvendor`(
	IN `idv` VARCHAR(50)
)
BEGIN
select * from vendor where id=idv;
END//
DELIMITER ;

-- Dumping structure for procedure evene.editblog
DROP PROCEDURE IF EXISTS `editblog`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `editblog`(
	IN `juduls` LONGTEXT,
	IN `thumbnails` LONGTEXT,
	IN `isi` LONGTEXT,
	IN `idb` INT
)
BEGIN
update blog set judul=juduls, thumbnail=thumbnails, isi=isi where id=idb;
END//
DELIMITER ;

-- Dumping structure for procedure evene.editinsp
DROP PROCEDURE IF EXISTS `editinsp`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `editinsp`(
	IN `gambarn` LONGTEXT,
	IN `eventn` LONGTEXT,
	IN `vendorn` VARCHAR(50),
	IN `idi` INT
)
BEGIN
update inspirasi set gambar=gambarn, event=eventn, vendor=vendorn where id=idi;
END//
DELIMITER ;

-- Dumping structure for procedure evene.editprofil
DROP PROCEDURE IF EXISTS `editprofil`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `editprofil`(
	IN `nama1` VARCHAR(50),
	IN `nama2` VARCHAR(50),
	IN `pict` LONGTEXT,
	IN `notelp` VARCHAR(50),
	IN `pass` LONGTEXT,
	IN `idu` INT

)
BEGIN
update users set nama1=nama1, nama2=nama2, pict=pict, notelp=notelp, pass=pass where id=idu;
END//
DELIMITER ;

-- Dumping structure for procedure evene.editvendor
DROP PROCEDURE IF EXISTS `editvendor`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `editvendor`(
	IN `idv` VARCHAR(50)
)
BEGIN
select * from vendor where id=idv;
END//
DELIMITER ;

-- Dumping structure for procedure evene.editvendorx
DROP PROCEDURE IF EXISTS `editvendorx`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `editvendorx`(
	IN `harga1` INT,
	IN `imel` VARCHAR(50),
	IN `notelp1` LONGTEXT,
	IN `alamat1` LONGTEXT,
	IN `detail1` LONGTEXT,
	IN `gambar1n` LONGTEXT,
	IN `gambar2n` LONGTEXT,
	IN `gambar3n` LONGTEXT,
	IN `gambar4n` LONGTEXT,
	IN `nama1` LONGTEXT,
	IN `judul1` LONGTEXT,
	IN `idv` VARCHAR(50)
)
BEGIN
update vendor set harga=harga1, email=imel, notelp=notelp1, alamat=alamat1, detail=detail1, gambar1=gambar1n, gambar2=gambar2n, gambar3=gambar3n, gambar4=gambar4n, nama=nama1, judul=judul1 where id=idv;
END//
DELIMITER ;

-- Dumping structure for procedure evene.emailverify
DROP PROCEDURE IF EXISTS `emailverify`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `emailverify`(
	IN `imel` VARCHAR(50)




)
    COMMENT 'untuk verif email user'
BEGIN
select email from users where email=imel;
END//
DELIMITER ;

-- Dumping structure for procedure evene.eosprice
DROP PROCEDURE IF EXISTS `eosprice`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `eosprice`()
BEGIN
select min(harga) sprice from vendor where jenis='Event Organizer' and status='verified';
END//
DELIMITER ;

-- Dumping structure for procedure evene.idcekvendor
DROP PROCEDURE IF EXISTS `idcekvendor`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `idcekvendor`(
	IN `idv` INT
)
BEGIN
select id from vendor where id=idv;
END//
DELIMITER ;

-- Dumping structure for procedure evene.insertblog
DROP PROCEDURE IF EXISTS `insertblog`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertblog`(
	IN `juduls` LONGTEXT,
	IN `thumbnails` LONGTEXT,
	IN `isi` LONGTEXT,
	IN `penulis` VARCHAR(50)
)
BEGIN
insert into blog(judul,thumbnail,isi,penulis) values(juduls, thumbnails, isi, penulis);
END//
DELIMITER ;

-- Dumping structure for procedure evene.insertinsp
DROP PROCEDURE IF EXISTS `insertinsp`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertinsp`(
	IN `gambs` LONGTEXT,
	IN `events` LONGTEXT,
	IN `vendors` VARCHAR(50)
)
BEGIN
insert into inspirasi(gambar,event,vendor) values(gambs,events,vendors);
END//
DELIMITER ;

-- Dumping structure for procedure evene.insertvendor
DROP PROCEDURE IF EXISTS `insertvendor`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertvendor`(
	IN `iduser` INT,
	IN `jenis` VARCHAR(50),
	IN `harga` INT,
	IN `email` VARCHAR(50),
	IN `notelp` VARCHAR(50),
	IN `alamat` LONGTEXT,
	IN `detail` LONGTEXT,
	IN `gambar1` LONGTEXT,
	IN `gambar2` LONGTEXT,
	IN `gambar3` LONGTEXT,
	IN `gambar4` LONGTEXT,
	IN `kategori` LONGTEXT
,
	IN `nama` VARCHAR(50)
,
	IN `idv` VARCHAR(50)
,
	IN `judul` LONGTEXT
)
BEGIN
insert into vendor(iduser, jenis, harga, email, notelp, alamat, detail, gambar1, gambar2, gambar3, gambar4, kategori, nama, id, judul) values(iduser, jenis, harga, email, notelp, alamat, detail, gambar1, gambar2,
 gambar3, gambar4, kategori, nama, idv, judul);
END//
DELIMITER ;

-- Dumping structure for table evene.inspirasi
DROP TABLE IF EXISTS `inspirasi`;
CREATE TABLE IF NOT EXISTS `inspirasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event` varchar(100) DEFAULT NULL,
  `gambar` longtext,
  `vendor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table evene.inspirasi: ~3 rows (approximately)
/*!40000 ALTER TABLE `inspirasi` DISABLE KEYS */;
REPLACE INTO `inspirasi` (`id`, `event`, `gambar`, `vendor`) VALUES
	(0, 'Make Up Wedding', 'inspirasi1.jpg', 'Coba EO'),
	(1, 'Wedding Garden Party', 'inspiarisi2.jpg', 'Cobi EO'),
	(2, 'Sweet 17', 'inspiarisi3.jpg', 'Jennifer EO');
/*!40000 ALTER TABLE `inspirasi` ENABLE KEYS */;

-- Dumping structure for procedure evene.listblog
DROP PROCEDURE IF EXISTS `listblog`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `listblog`()
BEGIN
select * from blog order by tanggal desc;
END//
DELIMITER ;

-- Dumping structure for procedure evene.musprice
DROP PROCEDURE IF EXISTS `musprice`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `musprice`()
BEGIN
select min(harga) sprice from vendor where jenis='Make Up artist' and status='verified';
END//
DELIMITER ;

-- Dumping structure for procedure evene.ordervendor
DROP PROCEDURE IF EXISTS `ordervendor`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `ordervendor`()
BEGIN
select count(id) tot from vendor where status="Not Verified";
END//
DELIMITER ;

-- Dumping structure for procedure evene.phsprice
DROP PROCEDURE IF EXISTS `phsprice`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `phsprice`()
BEGIN
select min(harga) sprice from vendor where jenis='photographer' and status='verified';
END//
DELIMITER ;

-- Dumping structure for procedure evene.statusverifying
DROP PROCEDURE IF EXISTS `statusverifying`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `statusverifying`(
	IN `email` VARCHAR(50)
)
BEGIN
update users set status='activated' where users.email=email;
END//
DELIMITER ;

-- Dumping structure for procedure evene.tampilaninspirasi
DROP PROCEDURE IF EXISTS `tampilaninspirasi`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `tampilaninspirasi`()
BEGIN
select * from inspirasi order by id desc;
END//
DELIMITER ;

-- Dumping structure for procedure evene.tdsprice
DROP PROCEDURE IF EXISTS `tdsprice`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `tdsprice`()
BEGIN
select min(harga) sprice from vendor where jenis='table decoration' and status='verified';
END//
DELIMITER ;

-- Dumping structure for procedure evene.totaluser
DROP PROCEDURE IF EXISTS `totaluser`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `totaluser`()
BEGIN
select count(id) totid from users;
END//
DELIMITER ;

-- Dumping structure for procedure evene.updateuser
DROP PROCEDURE IF EXISTS `updateuser`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateuser`(
	IN `nama1` VARCHAR(50),
	IN `nama2` VARCHAR(50),
	IN `notelp` VARCHAR(50),
	IN `pict` LONGTEXT
)
    COMMENT 'update profil user'
BEGIN
update users set nama1=nama1, nama2=nama2, notelp=notelp, pict=pict;
END//
DELIMITER ;

-- Dumping structure for table evene.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pass` longtext CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `jenis` varchar(50) NOT NULL DEFAULT 'users',
  `nama1` varchar(50) DEFAULT NULL,
  `nama2` varchar(50) DEFAULT NULL,
  `notelp` varchar(50) DEFAULT NULL,
  `pict` varchar(255) NOT NULL DEFAULT '1wdji1wd0asdjdef.png',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table evene.users: ~6 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `email`, `pass`, `status`, `jenis`, `nama1`, `nama2`, `notelp`, `pict`, `updated_at`, `created_at`) VALUES
	(2, 'coba@gmail.com', '$2y$10$R1TGiTlcpaNPxtcPViw9zu.Gyxh.VU/gTEwdnUwem9fuyiPhp9boe', 'activated', 'users', 'James', 'Kennyway', NULL, '1wdji1wd0asdjdef.png', '2020-03-22 18:30:58', '2020-02-27 09:40:51'),
	(3, 'anjay@gmail.com', '$2y$10$416jnhzCbB7G/BHifKW4f..x56itiILikrvUR7weAr0Ou6O1yXQA.', '', 'users', NULL, NULL, NULL, '1wdji1wd0asdjdef.png', '2020-03-22 18:31:03', '2020-02-26 21:04:02'),
	(10, 'sanjaime331@gmail.com', '$2y$10$3zb82b2MLEzezqiAYxtRTeauZ.V7u3a.yjfaAXhKLpbrH3V2Gs7Mu', 'activated', 'users', 'Naufals', 'Syauqi', '81246417218', 'Captureb.PNG', '2020-03-22 18:32:54', '2020-02-26 21:18:15'),
	(11, 'elok127@gmail.com', '$2y$10$Xh6ZuuKlXfMd4t3fcaFnHu2lowCwzci1jf3qGOS9A5wm/tBXnQvdS', 'activated', 'users', NULL, NULL, NULL, '1wdji1wd0asdjdef.png', '2020-03-22 18:32:44', '2020-02-27 10:01:16'),
	(14, 'dummyakun443@gmail.com', '$2y$10$qRzE70BhlUplRyyWElkd0OSeLzukHgJ2I..WY.9LilPMNjbSIlYJe', 'activated', 'users', 'Dummy', 'Akun', '6281728172832', 'jennifer-lawrence.jpg', '2020-03-06 19:42:25', '2020-03-06 12:40:32'),
	(15, 'ad@min.com', '$2y$10$cg/VtjNc./7qLtSag81LbOCTsDm4asU3mrtSigPvXAHD3iex7dpBG', 'pending', 'users', NULL, NULL, NULL, '', '2020-03-09 07:16:27', '2020-03-09 07:16:27'),
	(16, 'aslay@gmail.com', '$2y$10$rilFbKsTirYuDAcZ3ltBKO1ZtkU6WhcdzVEN/kupuI0vo7KtwMAj6', 'pending', 'users', NULL, NULL, NULL, '1wdji1wd0asdjdef.png', '2020-03-22 11:42:28', '2020-03-22 11:42:28');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for procedure evene.userstatus
DROP PROCEDURE IF EXISTS `userstatus`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `userstatus`(
	IN `imel` VARCHAR(50)
)
BEGIN
select status from users where email=imel;
END//
DELIMITER ;

-- Dumping structure for table evene.vendor
DROP TABLE IF EXISTS `vendor`;
CREATE TABLE IF NOT EXISTS `vendor` (
  `id` varchar(50) NOT NULL,
  `iduser` int(11) NOT NULL COMMENT 'penghubung ke user',
  `jenis` varchar(50) NOT NULL DEFAULT 'Event Organizer',
  `harga` int(11) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL,
  `notelp` varchar(50) NOT NULL,
  `alamat` longtext NOT NULL,
  `detail` longtext NOT NULL,
  `gambar1` longtext NOT NULL,
  `gambar2` longtext,
  `gambar3` longtext,
  `gambar4` longtext,
  `kategori` longtext NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Not Verified',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table evene.vendor: ~10 rows (approximately)
/*!40000 ALTER TABLE `vendor` DISABLE KEYS */;
REPLACE INTO `vendor` (`id`, `iduser`, `jenis`, `harga`, `email`, `notelp`, `alamat`, `detail`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `kategori`, `nama`, `status`, `date`, `judul`) VALUES
	('1222', 14, 'Make up Artist', 10000000, 'dummyakun443@gmail.com', '6281728172832', 'Holywood, LA, United States of america', '<p>An&nbsp;<strong>article</strong>&nbsp;(with the&nbsp;<a href="https://en.wikipedia.org/wiki/List_of_glossing_abbreviations">linguistic glossing abbreviation</a>&nbsp;<strong>art</strong>) is a&nbsp;<a href="https://en.wikipedia.org/wiki/Word">word</a>&nbsp;that is used with a&nbsp;<a href="https://en.wikipedia.org/wiki/Noun">noun</a>&nbsp;(as a standalone word or a&nbsp;<a href="https://en.wikipedia.org/wiki/Prefix">prefix</a>&nbsp;or&nbsp;<a href="https://en.wikipedia.org/wiki/Suffix">suffix</a>) to specify grammatical&nbsp;<a href="https://en.wikipedia.org/wiki/Definiteness">definiteness</a>&nbsp;of the noun, and in some languages extending to volume or numerical scope.</p><p>The articles in&nbsp;<a href="https://en.wikipedia.org/wiki/English_grammar">English grammar</a>&nbsp;are&nbsp;<em>the</em>&nbsp;and&nbsp;<em>a/an</em>, and in certain contexts&nbsp;<em>some</em>.&nbsp;<a href="https://en.wikipedia.org/wiki/A_and_an#Indefinite_article">&quot;An&quot; and &quot;a&quot;</a>&nbsp;are modern forms of the Old English &quot;an&quot;, which in&nbsp;<a href="https://en.wikipedia.org/wiki/Anglian_dialects">Anglian dialects</a>&nbsp;was the number &quot;one&quot; (compare &quot;on&quot; in&nbsp;<a href="https://en.wikipedia.org/wiki/Saxons">Saxon dialects</a>) and survived into&nbsp;<a href="https://en.wikipedia.org/wiki/Modern_Scots">Modern Scots</a>&nbsp;as the number &quot;owan&quot;. Both &quot;on&quot; (respelled &quot;one&quot; by the&nbsp;<a href="https://en.wikipedia.org/wiki/Norman_language">Norman language</a>) and &quot;an&quot; survived into&nbsp;<a href="https://en.wikipedia.org/wiki/Modern_English">Modern English</a>, with &quot;one&quot; used as the number and &quot;an&quot; (&quot;a&quot;, before nouns that begin with a&nbsp;<a href="https://en.wikipedia.org/wiki/Consonant">consonant</a>&nbsp;sound) as an indefinite article.</p><p>In English grammar,&nbsp;<a href="https://en.wikipedia.org/wiki/Part_of_speech#English">articles</a>&nbsp;are frequently considered part of a broader category called&nbsp;<a href="https://en.wikipedia.org/wiki/Determiner">determiners</a>, which contains articles,&nbsp;<a href="https://en.wikipedia.org/wiki/Demonstratives">demonstratives</a>&nbsp;(such as &quot;this&quot; and &quot;that&quot;),&nbsp;<a href="https://en.wikipedia.org/wiki/Possessive_determiner">possessive determiners</a>&nbsp;(such as &quot;my&quot; and &quot;his&quot;), and quantifiers (such as &quot;all&quot; and &quot;few&quot;).<a href="https://en.wikipedia.org/wiki/Article_(grammar)#cite_note-YourDictionary-1">[1]</a>&nbsp;Articles and other determiners are also sometimes counted as a type of&nbsp;<a href="https://en.wikipedia.org/wiki/Adjective">adjective</a>, since they describe the words that they precede.<a href="https://en.wikipedia.org/wiki/Article_(grammar)#cite_note-2">[2]</a></p>', 'jennifer-lawrence.jpg', 'jennifer-lawrence.jpg', '', '', 'all, Sweet 17,Wedding Party,Funeral', 'Jennifer Lawrensi', 'Not Verified', '2020-03-12 18:19:24', 'Make up by Jennifer L'),
	('2348', 14, 'Make up Artist', 10000000, 'dummyakun443@gmail.com', '6281728172832', 'Holywood, LA, United States of america', '<p>An&nbsp;<strong>article</strong>&nbsp;(with the&nbsp;<a href="https://en.wikipedia.org/wiki/List_of_glossing_abbreviations">linguistic glossing abbreviation</a>&nbsp;<strong>art</strong>) is a&nbsp;<a href="https://en.wikipedia.org/wiki/Word">word</a>&nbsp;that is used with a&nbsp;<a href="https://en.wikipedia.org/wiki/Noun">noun</a>&nbsp;(as a standalone word or a&nbsp;<a href="https://en.wikipedia.org/wiki/Prefix">prefix</a>&nbsp;or&nbsp;<a href="https://en.wikipedia.org/wiki/Suffix">suffix</a>) to specify grammatical&nbsp;<a href="https://en.wikipedia.org/wiki/Definiteness">definiteness</a>&nbsp;of the noun, and in some languages extending to volume or numerical scope.</p><p>The articles in&nbsp;<a href="https://en.wikipedia.org/wiki/English_grammar">English grammar</a>&nbsp;are&nbsp;<em>the</em>&nbsp;and&nbsp;<em>a/an</em>, and in certain contexts&nbsp;<em>some</em>.&nbsp;<a href="https://en.wikipedia.org/wiki/A_and_an#Indefinite_article">&quot;An&quot; and &quot;a&quot;</a>&nbsp;are modern forms of the Old English &quot;an&quot;, which in&nbsp;<a href="https://en.wikipedia.org/wiki/Anglian_dialects">Anglian dialects</a>&nbsp;was the number &quot;one&quot; (compare &quot;on&quot; in&nbsp;<a href="https://en.wikipedia.org/wiki/Saxons">Saxon dialects</a>) and survived into&nbsp;<a href="https://en.wikipedia.org/wiki/Modern_Scots">Modern Scots</a>&nbsp;as the number &quot;owan&quot;. Both &quot;on&quot; (respelled &quot;one&quot; by the&nbsp;<a href="https://en.wikipedia.org/wiki/Norman_language">Norman language</a>) and &quot;an&quot; survived into&nbsp;<a href="https://en.wikipedia.org/wiki/Modern_English">Modern English</a>, with &quot;one&quot; used as the number and &quot;an&quot; (&quot;a&quot;, before nouns that begin with a&nbsp;<a href="https://en.wikipedia.org/wiki/Consonant">consonant</a>&nbsp;sound) as an indefinite article.</p><p>In English grammar,&nbsp;<a href="https://en.wikipedia.org/wiki/Part_of_speech#English">articles</a>&nbsp;are frequently considered part of a broader category called&nbsp;<a href="https://en.wikipedia.org/wiki/Determiner">determiners</a>, which contains articles,&nbsp;<a href="https://en.wikipedia.org/wiki/Demonstratives">demonstratives</a>&nbsp;(such as &quot;this&quot; and &quot;that&quot;),&nbsp;<a href="https://en.wikipedia.org/wiki/Possessive_determiner">possessive determiners</a>&nbsp;(such as &quot;my&quot; and &quot;his&quot;), and quantifiers (such as &quot;all&quot; and &quot;few&quot;).<a href="https://en.wikipedia.org/wiki/Article_(grammar)#cite_note-YourDictionary-1">[1]</a>&nbsp;Articles and other determiners are also sometimes counted as a type of&nbsp;<a href="https://en.wikipedia.org/wiki/Adjective">adjective</a>, since they describe the words that they precede.<a href="https://en.wikipedia.org/wiki/Article_(grammar)#cite_note-2">[2]</a></p>', '5c99528c1cf50bdbb9adb383e90778c9_750x500.jpg', 'jennifer-lawrence.jpg', '', '', 'all, Sweet 17,Wedding Party,Funeral', 'Jennifer Lawrens', 'Not Verified', '2020-03-12 18:19:51', 'Make up by Jennifer L'),
	('3107', 10, 'Event Organizer', 2350000, 'coba@gmail.com', '81246417218', 'asdasd', '<p>LAYANAN APA SAJA YANG ANDA SEDIAKAN?<br />&nbsp;Hari koordinasi<br />&nbsp;APA JENIS PERENCANAAN YANG ANDA TAWARKAN?<br />&nbsp;Lainnya - (mohon jelaskan; pisahkan dengan koma)<br />&nbsp;APA KEAHLIAN UTAMA ANDA?<br />&nbsp;Upacara pernikahan dengan tata cara agama tertentu (harap jelaskan), Pernikahan yang intim, Pernikahan mewah, pernikahan internasional (mohon tulis rinciannya), Pernikahan tradisional (mohon jelaskan)<br />&nbsp;APAKAH KLIEN HARUS MEMBUAT JANJI DAHULU SEBELUM BERTEMU?<br />&nbsp;Ya (mohon beri rincian, jika ada) please contact +62 856-2207-964 (Ratna) to set up a schedule<br />&nbsp;JUMLAH TAMU MINIMUM DAN MAKSIMUM DI PERNIKAHAN YANG AKAN ANDA KOORDINASI<br />&nbsp;50-1000<br />&nbsp;APAKAH ANDA BISA MENYEDIAKAN LAYANAN DI KOTA ATAU NEGARA LAIN?<br />&nbsp;Ya (mohon beri rincian, jika ada) Jakarta, Bogor, Depok, Tangerang, Bekasi<br />&nbsp;BERAPA LAMA SEBELUM HARI H KLIEN ANDA SEHARUSNYA MEMBUAT JANJI?<br />&nbsp;Ideally 3 months before the due date<br />&nbsp;BERAPA JAM YANG TERMASUK DALAM LAYANAN DI HARI PERNIKAHAN?<br />&nbsp;7 hours with extra charge for extended hours<br />&nbsp;BAGAIMANA SISTEM PEMBAYARAN YANG TERSEDIA UNTUK BISNIS ANDA?<br />&nbsp;Transfer melalui bank, Tunai<br />&nbsp;BAGAIMANAKAH SYARAT PEMBAYARAN ANDA?<br />&nbsp;IDR 1.000.000 for down payment and the rest is must be paid 7 days before the wedding day<br />&nbsp;KAPAN BISNIS ANDA DIDIRIKAN?<br />&nbsp;Our Journey started way back on 2017. But, we have been worked in another Wedding Organizer since 2014.<br />&nbsp;APAKAH ANDA BISA BERBICARA BAHASA LAIN, SEANDAINYA ADA PASANGAN DARI LUAR NEGERI YANG INGIN MENGGUNAKAN LAYANAN ANDA.<br />&nbsp;Ya (mohon beri rincian, jika ada) english<br />&nbsp;APA YANG MEMBUAT LAYANAN ANDA UNIK?<br />&nbsp;&quot;Because in your wedding dreams, every detail matters.&quot; So, no need to worry, we&#39;ll acompany you till the very end of your perfect day :</p>', 'profilepict.png', '', '', '', 'all, Sweet 17', 'sd', 'Verified', '2020-03-16 21:45:16', 'asd'),
	('323', 14, 'Photographer', 10000000, 'dummyakun443@gmail.com', '6281728172832', 'Holywood, LA, United States of america', '<p>An&nbsp;<strong>article</strong>&nbsp;(with the&nbsp;<a href="https://en.wikipedia.org/wiki/List_of_glossing_abbreviations">linguistic glossing abbreviation</a>&nbsp;<strong>art</strong>) is a&nbsp;<a href="https://en.wikipedia.org/wiki/Word">word</a>&nbsp;that is used with a&nbsp;<a href="https://en.wikipedia.org/wiki/Noun">noun</a>&nbsp;(as a standalone word or a&nbsp;<a href="https://en.wikipedia.org/wiki/Prefix">prefix</a>&nbsp;or&nbsp;<a href="https://en.wikipedia.org/wiki/Suffix">suffix</a>) to specify grammatical&nbsp;<a href="https://en.wikipedia.org/wiki/Definiteness">definiteness</a>&nbsp;of the noun, and in some languages extending to volume or numerical scope.</p><p>The articles in&nbsp;<a href="https://en.wikipedia.org/wiki/English_grammar">English grammar</a>&nbsp;are&nbsp;<em>the</em>&nbsp;and&nbsp;<em>a/an</em>, and in certain contexts&nbsp;<em>some</em>.&nbsp;<a href="https://en.wikipedia.org/wiki/A_and_an#Indefinite_article">&quot;An&quot; and &quot;a&quot;</a>&nbsp;are modern forms of the Old English &quot;an&quot;, which in&nbsp;<a href="https://en.wikipedia.org/wiki/Anglian_dialects">Anglian dialects</a>&nbsp;was the number &quot;one&quot; (compare &quot;on&quot; in&nbsp;<a href="https://en.wikipedia.org/wiki/Saxons">Saxon dialects</a>) and survived into&nbsp;<a href="https://en.wikipedia.org/wiki/Modern_Scots">Modern Scots</a>&nbsp;as the number &quot;owan&quot;. Both &quot;on&quot; (respelled &quot;one&quot; by the&nbsp;<a href="https://en.wikipedia.org/wiki/Norman_language">Norman language</a>) and &quot;an&quot; survived into&nbsp;<a href="https://en.wikipedia.org/wiki/Modern_English">Modern English</a>, with &quot;one&quot; used as the number and &quot;an&quot; (&quot;a&quot;, before nouns that begin with a&nbsp;<a href="https://en.wikipedia.org/wiki/Consonant">consonant</a>&nbsp;sound) as an indefinite article.</p><p>In English grammar,&nbsp;<a href="https://en.wikipedia.org/wiki/Part_of_speech#English">articles</a>&nbsp;are frequently considered part of a broader category called&nbsp;<a href="https://en.wikipedia.org/wiki/Determiner">determiners</a>, which contains articles,&nbsp;<a href="https://en.wikipedia.org/wiki/Demonstratives">demonstratives</a>&nbsp;(such as &quot;this&quot; and &quot;that&quot;),&nbsp;<a href="https://en.wikipedia.org/wiki/Possessive_determiner">possessive determiners</a>&nbsp;(such as &quot;my&quot; and &quot;his&quot;), and quantifiers (such as &quot;all&quot; and &quot;few&quot;).<a href="https://en.wikipedia.org/wiki/Article_(grammar)#cite_note-YourDictionary-1">[1]</a>&nbsp;Articles and other determiners are also sometimes counted as a type of&nbsp;<a href="https://en.wikipedia.org/wiki/Adjective">adjective</a>, since they describe the words that they precede.<a href="https://en.wikipedia.org/wiki/Article_(grammar)#cite_note-2">[2]</a></p>', '5c99528c1cf50bdbb9adb383e90778c9_750x500.jpg', 'jennifer-lawrence.jpg', NULL, NULL, 'all, Sweet 17,Wedding Party,Funeral', 'Jennifer Lawrens', 'Verified', '2020-03-12 18:43:49', 'Make up by Jennifer L'),
	('3233', 10, 'Table Decoration', 9000000, 'kolok27@gmail.com', '6281728172832', 'Jakarta Timur', '<p>- Great Face</p><p>- Amazing&nbsp;</p><p>- Ultimate</p>', '5c99528c1cf50bdbb9adb383e90778c9_750x500.jpg', NULL, NULL, NULL, 'all, Sweet 17,Wedding Party,Bridal Shower', 'Jeniffer Loreng', 'Verified', '2020-03-12 18:19:48', 'Jennifer Lorenks'),
	('4904', 10, 'Make up Artist', 10000000, 'coba@gmail.com', '81246417218', 'asasas', '<p>ssas</p>', 'jennifer-lawrence.jpg', '', '', '', 'all, Event Organizer,Sweet 17,Bridal Shower', 'Jennifer Lawrence', 'Verified', '2020-03-12 18:19:43', 'Make up by Jennifer'),
	('6875', 10, 'Event Organizer', 2350000, 'coba@gmail.com', '81246417218', 'Indiana jones, CA, USA', '<p>Nothing</p>', 'profilepict.png', '', '', '', 'all, Event Organizer,Sweet 17,Funeral', 'Kujo Jotarou', 'Verified', '2020-03-12 18:28:17', 'The Most Precision Photographist'),
	('6948', 14, 'Event Organizer', 10000000, 'coba1@gmail.com', '6281728172832', 'asdasd', '<p><a href="https://youtu.be/LgMT4vI6St0" onclick="window.open(this.href, \'vidio\', \'resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no\'); return false;">Vidio</a></p><p>as</p>', 'jennifer-lawrence.jpg', '', '', '', 'all, Event Organizer,Sweet 17', 'Jennifer Lawrence', 'Verified', '2020-03-12 18:57:22', 'Make up by Jennifer'),
	('7291', 10, 'Event Organizer', 10000000, 'sanjaime56@gmail.com', '6281728172832', 'sd', '<p>LAYANAN APA SAJA YANG ANDA SEDIAKANs?<br />&nbsp;Hari koordinasi<br />&nbsp;APA JENIS PERENCANAAN YANG ANDA TAWARKAN?<br />&nbsp;Lainnya - (mohon jelaskan; pisahkan dengan koma)<br />&nbsp;APA KEAHLIAN UTAMA ANDA?<br />&nbsp;Upacara pernikahan dengan tata cara agama tertentu (harap jelaskan), Pernikahan yang intim, Pernikahan mewah, pernikahan internasional (mohon tulis rinciannya), Pernikahan tradisional (mohon jelaskan)<br />&nbsp;APAKAH KLIEN HARUS MEMBUAT JANJI DAHULU SEBELUM BERTEMU?<br />&nbsp;Ya (mohon beri rincian, jika ada) please contact +62 856-2207-964 (Ratna) to set up a schedule<br />&nbsp;JUMLAH TAMU MINIMUM DAN MAKSIMUM DI PERNIKAHAN YANG AKAN ANDA KOORDINASI<br />&nbsp;50-1000<br />&nbsp;APAKAH ANDA BISA MENYEDIAKAN LAYANAN DI KOTA ATAU NEGARA LAIN?<br />&nbsp;Ya (mohon beri rincian, jika ada) Jakarta, Bogor, Depok, Tangerang, Bekasi<br />&nbsp;BERAPA LAMA SEBELUM HARI H KLIEN ANDA SEHARUSNYA MEMBUAT JANJI?<br />&nbsp;Ideally 3 months before the due date<br />&nbsp;BERAPA JAM YANG TERMASUK DALAM LAYANAN DI HARI PERNIKAHAN?<br />&nbsp;7 hours with extra charge for extended hours<br />&nbsp;BAGAIMANA SISTEM PEMBAYARAN YANG TERSEDIA UNTUK BISNIS ANDA?<br />&nbsp;Transfer melalui bank, Tunai<br />&nbsp;BAGAIMANAKAH SYARAT PEMBAYARAN ANDA?<br />&nbsp;IDR 1.000.000 for down payment and the rest is must be paid 7 days before the wedding day<br />&nbsp;KAPAN BISNIS ANDA DIDIRIKAN?<br />&nbsp;Our Journey started way back on 2017. But, we have been worked in another Wedding Organizer since 2014.<br />&nbsp;APAKAH ANDA BISA BERBICARA BAHASA LAIN, SEANDAINYA ADA PASANGAN DARI LUAR NEGERI YANG INGIN MENGGUNAKAN LAYANAN ANDA.<br />&nbsp;Ya (mohon beri rincian, jika ada) english<br />&nbsp;APA YANG MEMBUAT LAYANAN ANDA UNIK?<br />&nbsp;&quot;Because in your wedding dreams, every detail matters.&quot; So, no need to worry, we&#39;ll acompany you till the very end of your perfect day :D</p>', '5c99528c1cf50bdbb9adb383e90778c9_750x500.jpg', '', '', '', 'all, Event Organizer', 'Jeniffer Loreng', 'Verified', '2020-03-16 23:35:15', 'Make up by Jennifer'),
	('7596', 10, 'Event Organizer', 5500000, 'sanjaime56@gmail.com', '6281246417218', 'asd', '<p>&quot;sds&quot;</p>', 'jennifer-lawrence.jpg', '', '', '', 'all, Sweet 17', 'asd', 'Verified', '2020-03-16 21:44:18', 'Make up by Jennifer');
/*!40000 ALTER TABLE `vendor` ENABLE KEYS */;

-- Dumping structure for procedure evene.viewcounter
DROP PROCEDURE IF EXISTS `viewcounter`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `viewcounter`()
BEGIN
select * from counter;
END//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
