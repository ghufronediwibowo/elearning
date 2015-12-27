/*
SQLyog Ultimate v9.01 
MySQL - 5.6.17 : Database - elearning
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`elearning` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `elearning`;

/*Table structure for table `album` */

DROP TABLE IF EXISTS `album`;

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `album` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `album` */

LOCK TABLES `album` WRITE;

insert  into `album`(`id_album`,`album`) values (1,'Pemandangan'),(2,'Indah-indah');

UNLOCK TABLES;

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `id_berita` int(25) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(200) DEFAULT NULL,
  `isi_berita` text,
  `tanggal_publish` timestamp NULL DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `publish` varchar(5) DEFAULT NULL,
  `id_pengguna` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_berita`),
  UNIQUE KEY `id_berita` (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `berita` */

LOCK TABLES `berita` WRITE;

insert  into `berita`(`id_berita`,`judul_berita`,`isi_berita`,`tanggal_publish`,`gambar`,`video`,`publish`,`id_pengguna`) values (2,'Kemplu','<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>sdfdfg</td>\r\n			<td>dfg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>dfgd</td>\r\n			<td>dfgdf</td>\r\n		</tr>\r\n		<tr>\r\n			<td>fgdf</td>\r\n			<td>gdfg</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>assassa wqwqwqqwc ssasasaas sss swaassss fdddfsdsdds &amp;l sasasasa sss saassss aaa fd f d d f s s s as s s s</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>drfgsdrf</td>\r\n			<td>gsdfg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>gsdfgsdf</td>\r\n			<td>sdfg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>dfgsdfrg</td>\r\n			<td>sdfgs</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n','2015-12-24 07:20:00','greenschool7.jpg','				      			\r\n				      			teekjhfgdjhsdfsdfsdfsde				      		','Tidak','2147483647'),(3,'Kampret','\r\n\r\nss dssd aa dd a a saa\r\n\r\nsakjsaskamnaskmsa\r\nqq 	1\r\nqq 	1\r\nq 	1\r\n\r\n \r\n','2015-12-07 23:16:00','greenschool7.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eSMQYrNa55o\" frameborder=\"0\" allowfullscreen></iframe>','Ya','2147483647'),(9,'Mengejutkan! Sally si tukang coret-coret buku diary juara satu melukis.','<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>qqq</td>\r\n			<td>qq</td>\r\n		</tr>\r\n		<tr>\r\n			<td>qq</td>\r\n			<td>q</td>\r\n		</tr>\r\n		<tr>\r\n			<td>qq</td>\r\n			<td>qqqqq</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n','2015-12-09 09:40:00','femi rizki.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VLNj4DbUzaI\" frameborder=\"0\" allowfullscreen></iframe>	      						      		','Ya','2147483647'),(15,'www','<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>ww</td>\r\n			<td>ww</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ww</td>\r\n			<td>ww</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ww</td>\r\n			<td>www</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n','2015-12-24 07:16:00','greenschool2.jpg','				      			\r\n				      			<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VLNj4DbUzaI\" frameborder=\"0\" allowfullscreen></iframe>				      		','Tidak','2147483647'),(16,'SMA juara 3 Piala pendidikan!','<p>yjsankasnka jsanjnk ndkannn anknsnnnn ajassa<br />\r\n&nbsp;</p>\r\n','2015-12-24 07:22:00','1350324360_0048.jpg','','Ya','2147483647'),(17,'Kerja Bakti bersama memcahkan rekor waktu terlama','<p>akjanasnc aknsn aksnna nnaksnanns ansnjan asasm</p>\r\n\r\n<p>akjanasnc aknsn aksnna nnaksnanns ansnjan asasma akjanasnc aknsn aksnna nnaksnanns ansnjan asasma akjanasnc aknsn aksnna nnaksnanns ansnjan asasma akjanasnc aknsn aksnna nnaksnanns ansnjan asasma</p>\r\n','2015-12-24 07:43:00','dave.jpg','','Ya','2147483647');

UNLOCK TABLES;

/*Table structure for table `gambar_slide` */

DROP TABLE IF EXISTS `gambar_slide`;

CREATE TABLE `gambar_slide` (
  `id_gambar` int(11) NOT NULL AUTO_INCREMENT,
  `id_album` int(11) DEFAULT NULL,
  `gambar` varchar(600) DEFAULT NULL,
  `keterangan` text,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_gambar`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;

/*Data for the table `gambar_slide` */

LOCK TABLES `gambar_slide` WRITE;

insert  into `gambar_slide`(`id_gambar`,`id_album`,`gambar`,`keterangan`,`tanggal`) values (81,1,'seminar.jpg','1',NULL),(82,1,'sma2grb_logo.jpg','2',NULL),(83,1,'uyee.jpg','2',NULL),(84,1,'walt-disney-what-ever-you-do-do-it-well-650x433.jpg','3',NULL),(85,1,'DPR.jpg','5',NULL),(86,1,'Albert-Einstein-Imagination-Wallpaper-4.jpg','6',NULL),(87,1,'alur_perpustakaan.jpg','7',NULL),(118,2,'seminar.jpg','1',NULL),(119,2,'photothumb.db','2',NULL);

UNLOCK TABLES;

/*Table structure for table `kalender_kegiatan` */

DROP TABLE IF EXISTS `kalender_kegiatan`;

CREATE TABLE `kalender_kegiatan` (
  `id_kalender_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime DEFAULT NULL,
  `kegiatan` varchar(100) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_kalender_kegiatan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `kalender_kegiatan` */

LOCK TABLES `kalender_kegiatan` WRITE;

insert  into `kalender_kegiatan`(`id_kalender_kegiatan`,`tanggal`,`kegiatan`,`keterangan`) values (1,'2015-12-19 09:04:59','Kerja Bakti','Untuk semua siswa SMA N grabag');

UNLOCK TABLES;

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(20) DEFAULT NULL,
  `kelas` varchar(5) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `kelas` */

LOCK TABLES `kelas` WRITE;

insert  into `kelas`(`id_kelas`,`nama_kelas`,`kelas`,`jurusan`) values (1,'XII IPS 2','XII','Ilmu Pengetahuan Sosial'),(2,'XII IPA 1','XII','Ilmu Pengetahuan Alam'),(3,'XII IPS 1','XII','Ilmu Pengetahuan Sosial');

UNLOCK TABLES;

/*Table structure for table `kontak` */

DROP TABLE IF EXISTS `kontak`;

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `tipe` varchar(30) DEFAULT NULL,
  `telepon` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `kontak` */

LOCK TABLES `kontak` WRITE;

insert  into `kontak`(`id_kontak`,`nama`,`alamat`,`lat`,`lng`,`tipe`,`telepon`,`email`,`facebook`,`twitter`) values (10,'SMA Negeri 2 Grabag','Jl. Raya Grabag 46, Kalikuto, Grabag, Magelang',-7.377012,110.329437,'sekolah','(0293) 5529040 ','sma2grabag@yahoo.com','https://www.facebook.com/groups/578757402162337/','twitter.com/sma2grabag');

UNLOCK TABLES;

/*Table structure for table `kurikulum` */

DROP TABLE IF EXISTS `kurikulum`;

CREATE TABLE `kurikulum` (
  `id_kurikulum` int(11) NOT NULL AUTO_INCREMENT,
  `isi_kurikulum` varchar(3000) DEFAULT NULL,
  `file` varchar(1000) DEFAULT NULL,
  `publish` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_kurikulum`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `kurikulum` */

LOCK TABLES `kurikulum` WRITE;

insert  into `kurikulum`(`id_kurikulum`,`isi_kurikulum`,`file`,`publish`) values (4,'Penyusunan Struktur kurikulum didasarkan atas standar kompetensi lulusan dan standar kompetensi mata pelajaran yang telah ditetapkan oleh BSNP. Sekolah atas persetujuan Komite Sekolah dan memperhatikan keterbatasan sarana belajar serta minat peserta didik, menetapkan pengelolaan kelas sebagai berikut:...','898-1754-1-SM.pdf','Ya');

UNLOCK TABLES;

/*Table structure for table `materi` */

DROP TABLE IF EXISTS `materi`;

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) DEFAULT NULL,
  `id_tahun_ajaran` int(11) DEFAULT NULL,
  `id_pengguna` varchar(25) DEFAULT NULL,
  `judul_materi` varchar(500) DEFAULT NULL,
  `deskripsi` varchar(5000) DEFAULT NULL,
  `gambar` varchar(1000) DEFAULT NULL,
  `video` varchar(2000) DEFAULT NULL,
  `upload_file` blob,
  `tanggal` datetime DEFAULT NULL,
  `semester` varchar(2) DEFAULT NULL,
  `publish` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_materi`),
  KEY `FK_materi_tahun_ajaran` (`id_tahun_ajaran`),
  CONSTRAINT `FK_materi_tahun_ajaran` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `materi` */

LOCK TABLES `materi` WRITE;

insert  into `materi`(`id_materi`,`id_kelas`,`id_tahun_ajaran`,`id_pengguna`,`judul_materi`,`deskripsi`,`gambar`,`video`,`upload_file`,`tanggal`,`semester`,`publish`) values (1,1,1,'2317821721','hsasasa','asa',NULL,NULL,NULL,'2015-12-10 11:00:00','I','Ya'),(2,2,3,'2317821721','ss','sa',NULL,NULL,NULL,'2015-12-10 11:00:00','I','Ya'),(3,1,1,'2317821721','ss','assasasa',NULL,NULL,NULL,'2015-12-10 11:00:00','I','Ya'),(4,3,2,'2317821721','ss','sa',NULL,NULL,NULL,'2015-12-10 11:00:00','I','Ya'),(5,2,3,'2317821721','s','sa',NULL,NULL,NULL,'2015-12-10 11:00:00','I','Ya'),(6,1,4,'2317821721','ss','as',NULL,NULL,NULL,'2015-12-10 11:00:00','I','Ya'),(7,1,3,'2317821721','ss','saa',NULL,NULL,NULL,'2015-12-10 11:00:00','I','Tidak'),(8,1,3,'2317821721','sss','as',NULL,NULL,NULL,'2015-12-10 11:00:00','I','Tidak');

UNLOCK TABLES;

/*Table structure for table `mendapat_nilai` */

DROP TABLE IF EXISTS `mendapat_nilai`;

CREATE TABLE `mendapat_nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_tugas` int(11) DEFAULT NULL,
  `id_pengguna` int(25) DEFAULT NULL,
  `benar` varchar(20) DEFAULT NULL,
  `salah` varchar(20) DEFAULT NULL,
  `kosong` varchar(20) DEFAULT NULL,
  `point` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nilai` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`),
  KEY `FK_mendapat_nilai_guru` (`id_pengguna`),
  KEY `FK_mendapat_nilai_tugas` (`id_tugas`),
  CONSTRAINT `FK_mendapat_nilai_tugas` FOREIGN KEY (`id_tugas`) REFERENCES `mengelola_tugas` (`id_tugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mendapat_nilai` */

LOCK TABLES `mendapat_nilai` WRITE;

UNLOCK TABLES;

/*Table structure for table `mengajar_mapel` */

DROP TABLE IF EXISTS `mengajar_mapel`;

CREATE TABLE `mengajar_mapel` (
  `kode_mapel` varchar(4) NOT NULL,
  `mapel` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kode_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mengajar_mapel` */

LOCK TABLES `mengajar_mapel` WRITE;

insert  into `mengajar_mapel`(`kode_mapel`,`mapel`) values ('C1','Bahasa Indonesia'),('C3','Sosiologi'),('D3','Bahasa Inggris'),('K1','Kewarganegaraan'),('M1','Matematika');

UNLOCK TABLES;

/*Table structure for table `mengelola_tugas` */

DROP TABLE IF EXISTS `mengelola_tugas`;

CREATE TABLE `mengelola_tugas` (
  `id_tugas` int(11) NOT NULL,
  `kode_mapel` char(2) DEFAULT NULL,
  `id_pengguna` int(25) DEFAULT NULL,
  `id_tahun_ajaran` int(11) DEFAULT NULL,
  `judul_tugas` varchar(500) DEFAULT NULL,
  `mulai_mengerjakan` date DEFAULT NULL,
  `selesai_mengerjakan` date DEFAULT NULL,
  `waktu_mengerjakan` varbinary(10) DEFAULT NULL,
  `publish` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_tugas`),
  KEY `FK_mengelola_tugas_guru` (`id_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mengelola_tugas` */

LOCK TABLES `mengelola_tugas` WRITE;

UNLOCK TABLES;

/*Table structure for table `pengguna` */

DROP TABLE IF EXISTS `pengguna`;

CREATE TABLE `pengguna` (
  `id_pengguna` varchar(25) NOT NULL,
  `kode_mapel` varchar(10) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_tahun_ajaran` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` varchar(30) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `alamat` text,
  `telepon` varchar(15) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `foto` blob,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `verifikasi_password` char(32) DEFAULT NULL,
  `level` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pengguna` */

LOCK TABLES `pengguna` WRITE;

insert  into `pengguna`(`id_pengguna`,`kode_mapel`,`id_kelas`,`id_tahun_ajaran`,`nama`,`tempat_lahir`,`tanggal_lahir`,`agama`,`jenis_kelamin`,`alamat`,`telepon`,`status`,`foto`,`email`,`username`,`password`,`verifikasi_password`,`level`) values ('125511211222','D3',NULL,NULL,'Barjo Simatupang, S.pd','Aceh','1990-12-01','Islam','Laki-laki','asnskans','ss','Aktif','11224431_995484633817679_6770567781939204410_n.jpg','burhasasn098@gmail.com','Burhan','0cc175b9c0f1b6a831c399e269772661',NULL,'GURU'),('1271289289','K1',NULL,NULL,'Sombero Pamungkas, S.pd','Depok','1990-01-11','Lainnya','Laki-laki','Perum Gondolingin 59A, Potrobangsan, Magelang Utara','087908654568','Aktif','headmaster.jpg','kickerboxing@gmail.com','isman','0cc175b9c0f1b6a831c399e269772661',NULL,'GURU'),('2147483647',NULL,NULL,NULL,'Ghufron',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'admin','0cc175b9c0f1b6a831c399e269772661',NULL,'ADMIN'),('2317821721','C1',NULL,NULL,'Drs. Boukhari','Magelang','30/11/-0001','Islam','Laki-laki','Perum Bangsawan ','023322321','Tidak Aktif','seminar.jpg','ramcmasaas@email.com','bou','0cc175b9c0f1b6a831c399e269772661',NULL,'GURU'),('7001',NULL,1,4,'Yohanes Kristianto','Magelang','1997-07-02','Islam','Laki-laki','Bangsren','089176190198','Aktif','poster_perspective_hero.png','yhonmue@gmail.com','hannes','0cc175b9c0f1b6a831c399e269772661',NULL,'SISWA'),('7002',NULL,1,4,'Nurvia Malikah','Magelang','2015-06-09','Islam','Perempuan',' Perum Pondo Gede 67, Secang, Magelang','+6276109210290','Tidak Aktif','headmaster.jpg','malikah008@gmail.com','nurviana','0cc175b9c0f1b6a831c399e269772661',NULL,'SISWA'),('7003',NULL,2,2,'Maccarabi Mozain','Jerussalem','1998-10-11','Islam','Laki-laki',' Dongkelan 7/4, Donorejo, Secang Magelang','085643456543','AKtif','October_Desktop_Wallpaper.jpg','fromjerusslame@hotmail.com','sis','03c7c0ace395d80182db07ae2c30f034',NULL,'SISWA'),('7010',NULL,1,4,'Sulistyo Mubin','Magelang','','Islam','Laki-laki','Grabag','087890987219','Aktif','1.jpg','kickerboxing@gmail.com','bangjoy','0cc175b9c0f1b6a831c399e269772661','a','SISWA'),('8098',NULL,2,2,'Bohemian Benggolo','Kulonprogo','1998-10-01','Islam','Laki-laki','Timoho','087654109876','Tidak Aktif','sma2grb_logo.jpg','sastroyomi98@yahoo.com',NULL,NULL,NULL,'SISWA');

UNLOCK TABLES;

/*Table structure for table `sambutan` */

DROP TABLE IF EXISTS `sambutan`;

CREATE TABLE `sambutan` (
  `id_sambutan` int(11) NOT NULL AUTO_INCREMENT,
  `foto_sambutan` text,
  `sambutan` text,
  PRIMARY KEY (`id_sambutan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `sambutan` */

LOCK TABLES `sambutan` WRITE;

insert  into `sambutan`(`id_sambutan`,`foto_sambutan`,`sambutan`) values (1,'kepala.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. '),(2,'guru.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. '),(3,'siswa.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere. ');

UNLOCK TABLES;

/*Table structure for table `soal` */

DROP TABLE IF EXISTS `soal`;

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `id_tugas` int(11) DEFAULT NULL,
  `soal` varchar(1000) DEFAULT NULL,
  `pilihan_a` varchar(200) DEFAULT NULL,
  `pilihan_b` varchar(200) DEFAULT NULL,
  `pilihan_c` varchar(200) DEFAULT NULL,
  `pilihan_d` varchar(200) DEFAULT NULL,
  `pilihan_e` varchar(200) DEFAULT NULL,
  `jawaban` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_soal`),
  KEY `FK_soal_tugas` (`id_tugas`),
  CONSTRAINT `FK_soal_tugas` FOREIGN KEY (`id_tugas`) REFERENCES `mengelola_tugas` (`id_tugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `soal` */

LOCK TABLES `soal` WRITE;

UNLOCK TABLES;

/*Table structure for table `tahun_ajaran` */

DROP TABLE IF EXISTS `tahun_ajaran`;

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_ajaran` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_tahun_ajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tahun_ajaran` */

LOCK TABLES `tahun_ajaran` WRITE;

insert  into `tahun_ajaran`(`id_tahun_ajaran`,`tahun_ajaran`) values (1,'2014/2015'),(2,'2016/2017'),(3,'2017/2018'),(4,'2019/2020');

UNLOCK TABLES;

/*Table structure for table `tentang_kami` */

DROP TABLE IF EXISTS `tentang_kami`;

CREATE TABLE `tentang_kami` (
  `id_tentang_kami` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(25) DEFAULT NULL,
  `tujuan` varchar(1000) DEFAULT NULL,
  `visi` varchar(1000) DEFAULT NULL,
  `misi` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_tentang_kami`),
  KEY `FK_tentang_kami_guru` (`id_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tentang_kami` */

LOCK TABLES `tentang_kami` WRITE;

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
