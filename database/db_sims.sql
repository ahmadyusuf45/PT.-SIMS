-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 02:26 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sims`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` varchar(50) NOT NULL,
  `foto_artikel` text NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL,
  `id_kategori_artikel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `foto_artikel`, `judul_artikel`, `isi_artikel`, `id_kategori_artikel`) VALUES
('ART001', 'artikel1.png', 'Contoh Artikel  1', '<p>Cleon merupakan layanan billing OTT, merupakan anak perusahaan dari PT. Sarana InsanMuda Selaras selaku induk perusahaan dan penyedia layanan internet dan tv berlangganan.<br />\r\n&nbsp;&nbsp; &nbsp;CLEON, dirintis sejak tahun 2013 sebagai alternatif layanan yang memberikan kemudahan bagi pelanggan dalam menikmati layanan &nbsp;internet dimana tidak perlu berlangganan cukup dengan membeli voucher ketika akan menggunaakan internet.</p>\r\n\r\n<p>&nbsp;&nbsp; &nbsp;Cleon hadir untuk segment menengah kebawah dengan harga terjangkau di lokasi yang membutuhkan layanan dengan pilihan layanan timebase, quota dan unlimited seolah-olah menggunakan layanan operator telco(quota), warnet(timebase), dan isp(unlimited) menjadi 1 layanan<br />\r\n&nbsp;&nbsp; &nbsp;Dengan target pengguna dilokasi dalam jumlah banyak Cleon bisa dipasang di Hotel, Caf&eacute;, Kost, Guest House, Angkringan, Publik Area, Fasum dll.</p>\r\n\r\n<p>&nbsp;&nbsp; &nbsp;Tahun 2017 Cleon mulai proses menjadi Perseroan Terbatas dengan Nama PT. Jaring Data Nusantara sdengan izin usaha Jasa Pemasok Barang, Jasa Konsultasi Multimedia &amp; TI, &nbsp;dan Jasa Pendidikan &amp; Pelatihan Multimedia &amp; TI</p>\r\n', 'KTA001'),
('ART002', 'artikel2.png', 'Contoh 2', '<p>Cleon merupakan layanan billing OTT, merupakan anak perusahaan dari PT. Sarana InsanMuda Selaras selaku induk perusahaan dan penyedia layanan internet dan tv berlangganan.<br />\r\n&nbsp;&nbsp; &nbsp;CLEON, dirintis sejak tahun 2013 sebagai alternatif layanan yang memberikan kemudahan bagi pelanggan dalam menikmati layanan &nbsp;internet dimana tidak perlu berlangganan cukup dengan membeli voucher ketika akan menggunaakan internet.</p>\r\n\r\n<p>&nbsp;&nbsp; &nbsp;Cleon hadir untuk segment menengah kebawah dengan harga terjangkau di lokasi yang membutuhkan layanan dengan pilihan layanan timebase, quota dan unlimited seolah-olah menggunakan layanan operator telco(quota), warnet(timebase), dan isp(unlimited) menjadi 1 layanan<br />\r\n&nbsp;&nbsp; &nbsp;Dengan target pengguna dilokasi dalam jumlah banyak Cleon bisa dipasang di Hotel, Caf&eacute;, Kost, Guest House, Angkringan, Publik Area, Fasum dll.</p>\r\n\r\n<p>&nbsp;&nbsp; &nbsp;Tahun 2017 Cleon mulai proses menjadi Perseroan Terbatas dengan Nama PT. Jaring Data Nusantara sdengan izin usaha Jasa Pemasok Barang, Jasa Konsultasi Multimedia &amp; TI, &nbsp;dan Jasa Pendidikan &amp; Pelatihan Multimedia &amp; TI</p>\r\n', 'KTA002'),
('ART003', 'artikel3.png', 'Contoh Artikel 3', '<p>Cleon merupakan layanan billing OTT, merupakan anak perusahaan dari PT. Sarana InsanMuda Selaras selaku induk perusahaan dan penyedia layanan internet dan tv berlangganan.<br />\r\n&nbsp;&nbsp; &nbsp;CLEON, dirintis sejak tahun 2013 sebagai alternatif layanan yang memberikan kemudahan bagi pelanggan dalam menikmati layanan &nbsp;internet dimana tidak perlu berlangganan cukup dengan membeli voucher ketika akan menggunaakan internet.</p>\r\n\r\n<p>&nbsp;&nbsp; &nbsp;Cleon hadir untuk segment menengah kebawah dengan harga terjangkau di lokasi yang membutuhkan layanan dengan pilihan layanan timebase, quota dan unlimited seolah-olah menggunakan layanan operator telco(quota), warnet(timebase), dan isp(unlimited) menjadi 1 layanan<br />\r\n&nbsp;&nbsp; &nbsp;Dengan target pengguna dilokasi dalam jumlah banyak Cleon bisa dipasang di Hotel, Caf&eacute;, Kost, Guest House, Angkringan, Publik Area, Fasum dll.</p>\r\n\r\n<p>&nbsp;&nbsp; &nbsp;Tahun 2017 Cleon mulai proses menjadi Perseroan Terbatas dengan Nama PT. Jaring Data Nusantara sdengan izin usaha Jasa Pemasok Barang, Jasa Konsultasi Multimedia &amp; TI, &nbsp;dan Jasa Pendidikan &amp; Pelatihan Multimedia &amp; TI</p>\r\n', 'KTA003');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id_galery` varchar(50) NOT NULL,
  `foto_galery` text NOT NULL,
  `id_kategori_galery` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id_galery`, `foto_galery`, `id_kategori_galery`) VALUES
('GRY001', 'artikel1.png', '3'),
('GRY002', 'artikel2.png', '3'),
('GRY003', 'artikel3.png', '3'),
('GRY004', 'artikel4.png', '4'),
('GRY005', 'artikel5.png', '4'),
('GRY006', 'artikel8.png', '4'),
('GRY007', 'artikel6.png', '5'),
('GRY008', 'artikel11.png', '5'),
('GRY009', 'artikel31.png', '5'),
('GRY010', 'artikel81.png', '6'),
('GRY011', 'artikel61.png', '6'),
('GRY012', 'artikel32.png', '6'),
('GRY013', 'artikel82.png', '4');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` varchar(50) NOT NULL,
  `foto_profil` text NOT NULL,
  `deskripsi_profil` text NOT NULL,
  `sekilas_profil` text NOT NULL,
  `visi_misi` text NOT NULL,
  `lisensi` text NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `fex` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `foto_profil`, `deskripsi_profil`, `sekilas_profil`, `visi_misi`, `lisensi`, `no_tlp`, `fex`, `alamat`, `map`) VALUES
('IDT001', 'tes.png', '<p>Nama Perusahaan : PT SARANAINSAN MUDASELARAS</p>\r\n\r\n<p>Badan Hukum : Persoran Terbatas</p>\r\n\r\n<p>Merk Dagang :&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Jogja Medianet</li>\r\n	<li>Kebumen Medianet</li>\r\n	<li>Bali Medianet</li>\r\n	<li>Magelang Medianet</li>\r\n	<li>Purworejo Medianet</li>\r\n	<li>Jabar Medianet</li>\r\n	<li>Makasar Medianet</li>\r\n</ul>\r\n', '<p style=\"text-align:justify\">PT SARANAINSAN MUDASELARAS adalah penyelanggara jaringan dan jasa multimedia yang handal dan dapat dipercaya pt saranainsan mudaselaras telah menunjukan kinerja yang tinggi diukur dari berbagai aktifitasnya serta telah memberikan kontribusi yang positif dalam pengembangan masyarakat di lingkungan usahanya PT SARANAINSAN MUDASELARAS siap menjalin kerjasama dengan berbagai pihak untuk mengembangkan usaha dan memberikan layanan yang makin luas dan makin baik</p>\r\n', '<div class=\"btgrid\">\r\n<div class=\"row row-1\">\r\n<div class=\"col col-md-6\">\r\n<div class=\"content\">\r\n<h1>Visi</h1>\r\n\r\n<ul>\r\n	<li>Penyelenggara Jaringan dan Jasa Multimedia yang terdepan dalam kualitas dan terlengkap dalam konten&nbsp;</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col col-md-6\">\r\n<div class=\"content\">\r\n<h1>Misi</h1>\r\n\r\n<ul>\r\n	<li>Memberikan solusi jaringan, layanan dan produk multimedia yang terfokus kepada kepuasan pelanggan dengan memberikan kualitas terbaik</li>\r\n	<li>Menciptakan trend services dan pengkayaan konten multimedia dengan pengembangan dan proses innovasi yang berkelanjutan</li>\r\n	<li>Mendorong transformasi masyarakat informasi menuju berpengetahuan dengan penguatan pada budaya , produktifitas, pertumbuhan, cerdas bermoral dan keluhuran budi pekerti</li>\r\n	<li>Membangun sinergi dan kemitraan dengan kompetensi-kompetensi lokal dan nasional dalam pengembangan produk dan aplikasi multimedia yang berdaya saing.</li>\r\n	<li>Memberikan tempat dan dukungan pada sdm yang berusaha untuk menjadi profesional yang terbaik dalam produk dan layanan multimedia</li>\r\n	<li>Menjadi mitra pemerintah dalam menciptakan iklim yang baik dalam pengembangan industri multimedia dan mempercepat implementasi services dan jaringan multimedia di masyarakat</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', '<div class=\"btgrid\">\r\n<div class=\"row row-1\">\r\n<div class=\"col col-md-6\">\r\n<div class=\"content\">\r\n<h2>Lisensi/Sertifikasi&nbsp;</h2>\r\n\r\n<p style=\"text-align:justify\">PT SARANAINSAN MUDASELARAS (SIMS) , mempunyai lisensi nasional dalam bidang jasa layanan multimedia sesuai dengan ijin prinsip penyelenggaraan jasa multimedia (3015/PT.003/Tel/DJPT-2000) dari direktur jendral pos dan telekomunikasi sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">broadcasting TV &amp; Radio</li>\r\n	<li style=\"text-align:justify\">High Speed Internet Access,</li>\r\n	<li style=\"text-align:justify\">VPN (Virtual Private Network)</li>\r\n	<li style=\"text-align:justify\">Broadband Multimedia Access</li>\r\n	<li style=\"text-align:justify\">Video on Demand, Video Conferencing</li>\r\n	<li style=\"text-align:justify\">E-Commerce , E-Government</li>\r\n	<li style=\"text-align:justify\">telecommunication , telemedicine, e-learning,</li>\r\n	<li style=\"text-align:justify\">Interactive Game,</li>\r\n	<li style=\"text-align:justify\">Information System Application Software</li>\r\n	<li style=\"text-align:justify\">System Design</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col col-md-6\">\r\n<div class=\"content\">\r\n<h2>Lisensi Diperbarui</h2>\r\n\r\n<p>Sejalan dengan perkembangan pembangunan infrastruktur layanan, maka lisensi diperbarui</p>\r\n\r\n<ul>\r\n	<li>1177/PT.003/Tel/DJPT-2002</li>\r\n	<li>1672/PT.003/Tel/DJPT-2002</li>\r\n	<li>141/Dittel/KTS/V/2002</li>\r\n	<li>1270/PT.003/Dittel/srt/2002</li>\r\n	<li>1531/PT.003/Dittel/srt/2003</li>\r\n	<li>1531/PT.003/Dittel/srt/2003</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', '+62 21 230 2826', '+62 21 230 2826', 'jl mh thamrin no 53 ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.896178372978!2d110.39419241477822!3d-7.8008153943785095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57641c01e3c9%3A0x4b14fb5ae57cbe6c!2sJogja+Medianet!5e0!3m2!1sid!2sid!4v1501649794036\" width=\"100%\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_artikel`
--

CREATE TABLE `kategori_artikel` (
  `id_kategori_artikel` varchar(100) NOT NULL,
  `nama_kategori_artikel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kategori_artikel`
--

INSERT INTO `kategori_artikel` (`id_kategori_artikel`, `nama_kategori_artikel`) VALUES
('KTA001', 'Layanan'),
('KTA002', 'CSR'),
('KTA003', 'Promo');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_galery`
--

CREATE TABLE `kategori_galery` (
  `id_kategori_galery` int(11) NOT NULL,
  `nama_kategori_galery` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_galery`
--

INSERT INTO `kategori_galery` (`id_kategori_galery`, `nama_kategori_galery`) VALUES
(3, 'HEAD END & CMTS'),
(4, 'ANTENA UNIT'),
(5, 'OPTIC & HFC NETWORK'),
(6, 'CCTV SANUR SURVILLANCE SYSTEM');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `status`) VALUES
('LG001', 'master', 'master', 'master'),
('LG002', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` varchar(50) NOT NULL,
  `foto_slide` text NOT NULL,
  `durasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `foto_slide`, `durasi`) VALUES
('SLD001', 'ex-4.png', '100'),
('SLD002', 'ex-6.png', '100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD PRIMARY KEY (`id_kategori_artikel`);

--
-- Indexes for table `kategori_galery`
--
ALTER TABLE `kategori_galery`
  ADD PRIMARY KEY (`id_kategori_galery`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_galery`
--
ALTER TABLE `kategori_galery`
  MODIFY `id_kategori_galery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
