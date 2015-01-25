-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2014 at 06:57 
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pkl1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`no` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `kode_skpd` varchar(7) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`no`, `username`, `password`, `nama_admin`, `kode_skpd`) VALUES
(1, 'skpd421011', '011tapum', 'Bagian Tata Pemerintahan Umum', '421.011'),
(2, 'skpd421012', '012pemdes', 'Bagian Tata Pemerintahan Desa', '421.012'),
(3, 'skpd421013', '013hukum', 'Bagian Hukum', '421.013'),
(4, 'skpd421014', '014tanah', 'Bagian Pertanahan', '421.014'),
(5, 'skpd421021', 'ekonomi021', 'Bagian Perekonomian', '421.021'),
(6, 'skpd421022', 'krjsama022', 'Bagian Kerjasama', '421.022'),
(7, 'skpd421023', 'ap023', 'Bagian Administrasi Pembangunan', '421.023'),
(8, 'skpd421024', 'pde024', 'Bagian Pengelola Data Elektronik', '421.024'),
(9, 'skpd421031', '031umum', 'Bagian Umum dan Protokol', '421.031'),
(10, 'skpd421032', '032tu', 'Bagian Tata Usaha', '421.032'),
(11, 'skpd421033', '033humas', 'Bagian Hubungan Masyarakat', '421.033'),
(12, 'skpd421034', '034org', 'Bagian Organisasi', '421.034'),
(13, 'skpd421041', 'kesra041', 'Bagian Kesejahteraan Rakyat', '421.041'),
(14, 'skpd421042', 'bintal042', 'Bagian Bina Mental', '421.042'),
(15, 'skpd421050', '050setwan', 'Bagian Sekretariat Dewan', '421.050'),
(16, 'skpd421101', 'pddk101', 'Dinas Pendidikan', '421.101'),
(17, 'skpd421102', 'pora102', 'Dinas Pemuda dan olahraga', '421.102'),
(18, 'skpd421103', 'dinkes103', 'Dinas Kesehatan', '421.103'),
(19, 'skpd421104', 'sos104', 'Dinas Sosial', '421.104'),
(20, 'skpd421105', '105naker', 'Dinas Tenaga Kerja dan Transmigrasi', '421.105'),
(21, 'skpd421106', '106hubkomin', 'Dinas Perhubungan, Komunikasi dan Informatika', '421.106'),
(22, 'skpd421107', '107dukcap', 'Dinas Kependudukan dan Catatan Sipil', '421.107'),
(23, 'skpd421108', '108budpar', 'Dinas Kebudayaan dan Pariwisata', '421.108'),
(24, 'skpd421109', 'bm109', 'Dinas Bina Marga', '421.109'),
(25, 'skpd421110', 'air110', 'Dinas Pengairan', '421.110'),
(26, 'skpd421111', 'cktr111', 'Dinas Cipta Karya dan Tata Ruang', '421.111'),
(27, 'skpd421112', 'umkm112', 'Dinas Koperasi, Usaha Mikro, Kecil dan Menengah', '421.112'),
(28, 'skpd421113', '113indag', 'Dinas Perindustrian, Perdagangan dan Pasar', '421.113'),
(29, 'skpd421114', '114tanbun', 'Dinas Pertanian dan Perkebunan', '421.114'),
(30, 'skpd421115', '115laut', 'Dinas Kelautan dan Perikanan', '421.115'),
(31, 'skpd421116', '116hut', 'Dinas Kehutanan', '421.116'),
(32, 'skpd421117', 'esdm117', 'Dinas Energi dan Sumberdaya Mineral', '421.117'),
(33, 'skpd421118', 'keswan118', 'Dinas Peternakan dan Kesehatan Hewan', '421.118'),
(34, 'skpd421119', 'ppka119', 'Dinas Pendapatan, Pengelolaan Keuangan dan Aset', '421.119'),
(35, 'skpd421201', '201inspekt', 'Idinas nspektorat Kabupaten', '421.201'),
(36, 'skpd421202', '202bkd', 'Badan Kepegawaian Daerah', '421.202'),
(37, 'skpd421203', '203bappeda', 'Badan Perencanaan Pembangunan', '421.203'),
(38, 'skpd421204', '204litbang', 'Badan Penelitian dan Pengembangan', '421.204'),
(39, 'skpd421205', 'kesbang205', 'Badan Kesatuan Bangsa dan Politik', '421.205'),
(40, 'skpd421206', 'lingk206', 'Badan Lingkungan Hidup', '421.206'),
(41, 'skpd421207', 'bkp3207', 'Badan Ketahanan Pangan dan Pelaksana Penyuluhan', '421.207'),
(42, 'skpd421208', 'bpm208', 'Badan Pemberdayaan Masyarakat', '421.208'),
(43, 'skpd421209', '209diklat', 'Badan Pendidikan dan Pelatihan', '421.209'),
(44, 'skpd421210', '210kbrcn', 'Badan Keluarga Berencana', '421.210'),
(45, 'skpd421211', '211perpus', 'Badan Perpustakaan dan Arsip Daerah', '421.211');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE IF NOT EXISTS `tbl_jabatan` (
`kd_jabatan` int(10) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`kd_jabatan`, `nama_jabatan`) VALUES
(94, 'Asisten Administrasi'),
(95, 'Asisten Kesejahteraan Rakyat'),
(92, 'Asisten Pemerintahan'),
(93, 'Asisten Perekonomian dan Pembangunan'),
(112, 'Kepala'),
(91, 'Sekretaris Daerah'),
(111, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pangkat_gol`
--

CREATE TABLE IF NOT EXISTS `tbl_pangkat_gol` (
`kd_pg` int(10) NOT NULL,
  `nama_pangkat` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `ruang` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_pangkat_gol`
--

INSERT INTO `tbl_pangkat_gol` (`kd_pg`, `nama_pangkat`, `golongan`, `ruang`) VALUES
(1, '', '', ''),
(2, 'Juru Muda', 'I', 'a'),
(3, 'Juru Muda Tingkat I', 'I', 'b'),
(4, 'Juru', 'I', 'c'),
(5, 'Juru Tingkat I', 'I', 'd'),
(6, 'Pengatur Muda', 'II', 'a'),
(7, 'Pengatur Muda Tingkat I', 'II', 'b'),
(8, 'Pengatur', 'II', 'c'),
(9, 'Pengatur Tingkat I', 'II', 'd'),
(10, 'Penata Muda', 'III', 'a'),
(11, 'Penata Muda Tingkat I', 'III', 'b'),
(12, 'Penata', 'III', 'c'),
(13, 'Penata Tingkat I', 'III', 'd'),
(14, 'Pembina', 'IV', 'a'),
(15, 'Pembina Tingkat 1', 'IV', 'b'),
(16, 'Pembina Utama Muda', 'IV', 'c'),
(17, 'Pembina Utama Madya', 'IV', 'd'),
(18, 'Pembina Utama', 'IV', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sdm`
--

CREATE TABLE IF NOT EXISTS `tbl_sdm` (
  `kd_sdm` varchar(30) NOT NULL DEFAULT '',
  `nip` varchar(30) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `kd_jabatan` int(10) NOT NULL,
  `kd_pg` int(10) NOT NULL,
  `kode_skpd` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sdm`
--

INSERT INTO `tbl_sdm` (`kd_sdm`, `nip`, `nama`, `kd_jabatan`, `kd_pg`, `kode_skpd`) VALUES
('KON0001', '', 'Ahmad Isrofi, S.kom', 111, 1, '421.024'),
('PNS0001', '19570830 198209 1 001', 'Dr. ABDUL MALIK, SE, Msi', 91, 16, NULL),
('PNS0002', '19570830 198209 1 002', 'Drs. EKO SUWANTO', 92, 13, NULL),
('PNS0003', '19570830 198209 1 003', 'NURMAN RAMDANSYAH, SH, M.Hum', 93, 14, NULL),
('PNS0004', '19570830 198209 2 005', 'Dra. MADE DEWI AGGRAENI, M.Si', 94, 14, NULL),
('PNS0005', '19570830 198209 1 009', 'Drs. PRIHADI WASKITO, MMÂ ', 95, 13, ''),
('PNS0006', '19590814 198112 1 006', 'WAHYUDI, S.Pd,. M.Si', 111, 14, '421.024'),
('PNS0012', '3', 'Ir. DWI SISWAHYUDI, MT', 111, 10, '421.024'),
('PNS0013', '19661230 199503 1 003', 'Ir. HENRY MULIA BAHRUDDIN TANJUNG', 112, 13, '421.024'),
('PNS0037', '19930219 198903  100', 'Andik Setyawan, S.kom', 111, 8, '421.024'),
('PNS0038', '12131 1321 1 1341 32', 'Heri, M.kom', 112, 13, '421.042'),
('PNS0039', '3525 2452345 3434 23', 'Agus RIyanto, S.kom', 111, 2, '421.042'),
('PNS0040', '2323 23 34 32 2  233332', 'Paejan, SSS', 112, 18, '421.106');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skpd`
--

CREATE TABLE IF NOT EXISTS `tbl_skpd` (
  `kode_skpd` varchar(7) NOT NULL,
  `nama_skpd` varchar(50) NOT NULL,
  `alamat_skpd` varchar(100) NOT NULL DEFAULT '-',
  `telepon_skpd` varchar(20) NOT NULL DEFAULT '-',
  `email_skpd` varchar(30) NOT NULL DEFAULT '-',
  `website_skpd` varchar(40) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skpd`
--

INSERT INTO `tbl_skpd` (`kode_skpd`, `nama_skpd`, `alamat_skpd`, `telepon_skpd`, `email_skpd`, `website_skpd`) VALUES
('421.011', 'Bagian Tata Pemerintahan Umum', 'Jl. Panji No. 158 Kepanjen Kabupaten Malang', '', 'bag-tapum@malangkab.go.id', 'http://bag-pde.malangkab.go.id'),
('421.012', 'Bagian Tata Pemerintahan Desa', 'Jl. Panji No. 158 Kepanjen Kabupaten Malang', '', 'bag-tapemdes@malangkab.go.id', 'http://bag-tapum.malangkab.go.id'),
('421.013', 'Bagian Hukum', 'Jl. Panji No. 158 Kepanjen Kabupaten Malang', '', 'bag-hukum@malangkab.go.id', 'http://bag-tapemdes.malangkab.go.id'),
('421.014', 'Bagian Pertanahan', 'Jl. Panji No. 158 Kepanjen Kabupaten Malang', '', 'bag-pertanahan@malangkab.go.id', 'http://bag-pertanahan.malangkab.go.id'),
('421.021', 'Bagian Perekonomian', 'Jl. Panji No. 158 Kepanjen Kabupaten Malang', '', 'bag-ekonomi@malangkab.go.id', 'http://bag-hukum.malangkab.go.id'),
('421.022', 'Bagian Kerjasama', 'Jl. Panji No. 158 Kepanjen Kabupaten Malang', '', 'bag-kerjasama@malangkab.go.id', 'http://bag-ekonomi.malangkab.go.id'),
('421.023', 'Bagian Administrasi Pembangunan', 'Jl. Panji No. 158 Kepanjen Kabupaten Malang', '', 'bag-pembangunan@malangkab.go.i', 'http://bag-kerjasama.malangkab.go.id'),
('421.024', 'Bagian Pengelola Data Elektronik', 'Jl. Panji No. 158 Kepanjen Kabupaten Malang', '(0341) 392029', 'bag-pde@malangkab.go.id', 'http://bag-pembangunan.malangkab.go.id'),
('421.031', 'Bagian Umum dan Protokol', 'Jl. Panji No. 158 Kepanjen Kabupaten Malang', '', 'bag-umum@malangkab.go.id', 'http://bag-umum.malangkab.go.id'),
('421.032', 'Bagian Tata Usaha', 'Jl. Panji No. 158 Kepanjen Kabupaten Malang', '', 'bag-tu@malangkab.go.id', 'http://bag-tu.malangkab.go.id'),
('421.033', 'Bagian Hubungan Masyarakat', 'Jl. Panji No. 158 Kepanjen Kabupaten Malang', '', 'bag-humas@malangkab.go.id', 'http://bag-humas.malangkab.go.id'),
('421.034', 'Bagian Organisasi', 'Jl. Panji No. 158 Kepanjen Kabupaten Malang', '', 'bag-organisasi@malangkab.go.id', 'http://bag-organisasi.malangkab.go.id'),
('421.041', 'Bagian Kesejahteraan Rakyat', 'Jl. Panji No. 158 Kepanjen Kabupaten Malang', '', 'bag-kesra@malangkab.go.id', 'http://bag-organisasi.malangkab.go.id'),
('421.042', 'Bagian Bina Mental', 'Jl. Panji No. 158 Kepanjen Kabupaten Malang', '', 'bag-bintal@malangkab.go.id', 'http://bag-bintal.malangkab.go.id'),
('421.050', 'Bagian Sekretariat Dewan', '', '', '', ''),
('421.101', 'Dinas Pendidikan', 'Jl.Panarukan No. 1 Kepanjen', '(0341) 393935', 'dispendik@malangkab.go. id', 'http://dispendik.malangkab.go.id'),
('421.102', 'Dinas Pemuda dan olahraga', 'Jl. Trunojoyo Kompleks Stadion Kanjuruhan Kepanjen', '(0341) 399909', 'dispora@malangkab.go.id', 'http://dispora.malangkab.go.id'),
('421.103', 'Dinas Kesehatan', 'Jl. Panji No. 120, Kepanjen', '(0341) 393730', 'dinkes@malangkab.go.id', 'http://dinkes.malangkab.go.id'),
('421.104', 'Dinas Sosial', 'Jl. Majapahit No.5 Malang', '(0341) 362601', 'dinsos@malangkab.go.id', 'http://dinsos.malangkab.go.id'),
('421.105', 'Dinas Tenaga Kerja dan Transmigrasi', 'Jl.Trunojoyo Kav. 3 Kepanjen', '(0341) 393933', 'disnaker@malangkab.go.id', 'http://disnaker.malangkab.go.id'),
('421.106', 'Dinas Perhubungan, Komunikasi dan Informatika', 'Jl.Merdeka Timur No.3 Malang', '(0341) 350888', 'dishub@malangkab.go. Id', 'http://dishub.malangkab.go.id'),
('421.107', 'Dinas Kependudukan dan Catatan Sipil', 'Jl. Panji No119, Kepanjen', '(0341) 394100', 'dispenduk@malangkab.go.id', 'http://dispenduk.malangkab.go.id'),
('421.108', 'Dinas Kebudayaan dan Pariwisata', 'Jl. Raya Singosari, Malang', '(0341) 456644', 'disbudpar@malangkab.go.id', 'http://disbudpar.malangkab.go.id'),
('421.109', 'Dinas Bina Marga', 'Jl. KH.Agus Salim No.7 Malang', '(0341) 361160', 'binamarga@malangkab.go.Id', 'http://binamarga.malangkab.go.id'),
('421.110', 'Dinas Pengairan', 'Jl. Kawi No. 1, Kepanjen', '(0341) 395025', 'pengairan@malangkab.go.id', 'http://pengairan.malangkab.go.id'),
('421.111', 'Dinas Cipta Karya dan Tata Ruang', 'Jl. Trunojoyo kapling 6 Kepanjen Kabupaten Malang', '(0341) 391679 ', 'ciptakarya@malangkab.go.id', 'http://ciptakarya.malangkab.go.id'),
('421.112', 'Dinas Koperasi, Usaha Mikro, Kecil dan Menengah', 'Jl. Trunojoyo Kav. 1, Kepanjen?', '(0341) 393921', 'dinkop@malangkab.go.id', 'http://dinkop.malangkab.go.id'),
('421.113', 'Dinas Perindustrian, Perdagangan dan Pasar', 'Jl. Trunojoyo Kav. 6, Kepanjen', '(0341) 391673', 'disperindag@malangkab.go.id', 'http://disperindag.malangkab.go.id'),
('421.114', 'Dinas Pertanian dan Perkebunan', 'Jl.Sumedang No. 28 Kepanjen', '(0341) 396893', 'distanbun@malangkab.go.id', 'http://distanbun.malangkab.go.id'),
('421.115', 'Dinas Kelautan dan Perikanan', 'Jl. Panji No.119 Kepanjen Malang. Belakang kantor DPRD', '(0341) 399755', 'kelautan@malangkab.go.id', 'http://kelautan.malangkab.go.id'),
('421.116', 'Dinas Kehutanan', 'Jl. Raya Genengan KM. 9,3, Pakisaji Malang', '(0341) 806454', 'kehutanan@malangkab.go.id', 'http://kehutanan.malangkab.go.id'),
('421.117', 'Dinas Energi dan Sumberdaya Mineral', 'Jl. A. Yani Utara No. 384B Malang', '(0341) 408788', 'esdm@malangkab.go.id', 'http://esdm.malangkab.go.id'),
('421.118', 'Dinas Peternakan dan Kesehatan Hewan', 'Jl. Trunojoyo Kav. 4 Kepanjen', '(0341) 393926', 'peternakan@malangkab.go.id', 'http://peternakan.malangkab.go.id'),
('421.119', 'Dinas Pendapatan, Pengelolaan Keuangan dan Aset', 'Jl. KH.Agus Salim No.7 Malang', '(0341) 362372', 'dppka@malangkab.go.id', 'http://dppka.malangkab.go.id'),
('421.201', 'Dinas Inspektorat Kabupaten', '', '', '', ''),
('421.202', 'Badan Kepegawaian Daerah', 'Jl. KH.Agus Salim No.7 Malang', '(0341) 364776', 'bkd@malangkab.go.id', 'http://bkd.malangkab.go.id'),
('421.203', 'Badan Perencanaan Pembangunan', 'Jl. Panji No. 158 Kepanjen', '(0314) 392322', 'bappekab@malangkab.go.id', 'http://bappekab.malangkab.go.id'),
('421.204', 'Badan Penelitian dan Pengembangan', 'Jl.KH Agus Salim No 7 Malang', '(0341) 369390', 'balitbang@malangkab.go.id', 'http://balitbang.malangkab.go.id'),
('421.205', 'Badan Kesatuan Bangsa dan Politik', 'Jl.KH. Agus Salim No.7 Malang', '(0341) 366260', 'bakesbangpol@malangkab.go.id', 'http://bakesbangpol.malangkab.go.id'),
('421.206', 'Badan Lingkungan Hidup', 'Jl. KH Agus Salim No. 7 Malang', '(0341) 393924', 'lh@malangkab.go.id', 'http://lh.malangkab.go.id'),
('421.207', 'Badan Ketahanan Pangan dan Pelaksana Penyuluhan', 'Jl. Raya Karangduren No. 1 Pakisaji - Malang', '(0341) 804423', 'bkp3@malangkab.go.id', 'http://bkp3.malangkab.go.id'),
('421.208', 'Badan Pemberdayaan Masyarakat', 'Jl Merdeka Timur No. 3 Malang', '(0341) 399755', 'bpm@malangkab.go.id', 'http://bpm.malangkab.go.id'),
('421.209', 'Badan Pendidikan dan Pelatihan', 'Jl. Merdeka Timur No. 3 Malang', ' (0341) 393931', 'diklat@malangkab.go.id', 'http://diklat.malangkab.go.id'),
('421.210', 'Badan Keluarga Berencana', 'Jl. Trunojoyo 10 Kepanjen', '(0341) 395294', 'kb@malangkab.go.id', 'http://kb.malangkab.go.id'),
('421.211', 'Badan Perpustakaan dan Arsip Daerah', 'Jl. Panglima Sudirman No. 19 Kepanjen', '(0341) 397789', 'perpustakaan@malangkab.go.id', 'http://perpustakaan.malangkab.go.id'),
('421.214', 'Badan Perumahan', 'Jl. Nusa Barong No. 13 Malang', '(0341) 341894', 'perumahan@malangkab.go.id', 'http://perumahan.malangkab.go.id'),
('421.216', 'Badan Penanggulangan Bencana Daerah', 'Jl. Trunojoyo Kepanjen', '(0341) 392220', 'bpbd@malangkab.go.id', 'http://bpbd.malangkab.go.id'),
('421.302', 'Badan Pelayanan Perizinan Terpadu', 'Jl. Trunojoyo Kav. 6 Kepanjen', '(0341) 396633', 'perizinan@malangkab.go.id', 'http://perizinan.malangkab.go.id');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sppd`
--

CREATE TABLE IF NOT EXISTS `tbl_sppd` (
  `no_surat` varchar(30) NOT NULL,
  `kd_sdm` varchar(30) NOT NULL,
  `pengikut1` varchar(30) DEFAULT NULL,
  `pengikut2` varchar(30) DEFAULT NULL,
  `pengikut3` varchar(30) DEFAULT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama` varchar(5) NOT NULL,
  `untuk` text NOT NULL,
  `dari` varchar(50) NOT NULL,
  `ke` varchar(50) NOT NULL,
  `transportasi` varchar(50) NOT NULL,
  `atas_beban` varchar(30) DEFAULT NULL,
  `pasal_anggaran` varchar(30) DEFAULT NULL,
  `keterangan` text,
  `tanggal_surat` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `pejabat` varchar(30) NOT NULL,
  `kode_skpd` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sppd`
--

INSERT INTO `tbl_sppd` (`no_surat`, `kd_sdm`, `pengikut1`, `pengikut2`, `pengikut3`, `tgl_berangkat`, `tgl_kembali`, `lama`, `untuk`, `dari`, `ke`, `transportasi`, `atas_beban`, `pasal_anggaran`, `keterangan`, `tanggal_surat`, `status`, `pejabat`, `kode_skpd`) VALUES
('094/11/421.024/2014', 'PNS0037', '', '', '', '2014-11-11', '2014-11-12', '2', 'http://localhost/pemkab-malang/surat/baru http://localhost/pemkab-malang/surat/baru http://localhost/pemkab-malang/surat/baru', 'Malang', 'Malangg', 'Sepeda Motor', '', '', '', '2014-11-11', 'PNS003711102014', 'PNS0013', '421.024'),
('094/12/421.024/2014', 'PNS0013', 'PNS0012', 'PNS0006', 'KON0001', '2014-11-13', '2014-11-14', '2', 'Menghadiri Rapat Sosialisasi bagi para Camat di 60 Kecamatan se-Jawa Timur yang diselenggarakan pada hari Rabu, tanggal 18 April 2012 pukul 09.00 WIB - selesai bertempat di Hotel Satelit Surabaya, Jl. Mayjen. Sungkono no. 139, Surabaya.', 'Malang', 'Surabaya', 'Mobil', '-', '-', '-', '2014-11-13', 'PNS001313102014', 'PNS0003', '421.024'),
('094/121/421.042/2014', 'PNS0039', '', '', '', '2014-11-19', '2014-11-19', '1', 'Pakai Surat Dasar (Surat berdasarkan surat balasan)Pakai Surat Dasar (Surat berdasarkan surat balasan) Pakai Surat Dasar (Surat berdasarkan surat balasan) Pakai Surat Dasar (Surat berdasarkan surat balasan)', 'Malang', 'suravaya', 'Kereta Api', '', '', '', '2014-11-17', 'PNS003917102014', 'PNS0038', '421.042'),
('094/1231/421.024/2014', 'PNS0037', '', '', '', '0000-00-00', '0000-00-00', '1', 'Tidak memakai Surat Dasar (Diisi sebagai pembuka surat).Tidak memakai Surat Dasar (Diisi sebagai pembuka surat).Tidak memakai Surat Dasar (Diisi sebagai pembuka surat).', 'Malang', '', '', '', '', '', '2014-11-13', 'PNS003713102014', 'PNS0013', '421.024'),
('094/7/421.024/2014', 'PNS0012', 'PNS0006', '', '', '2014-11-11', '2014-11-12', '2', 'Pakai Surat Dasar (Surat berdasarkan surat balasan).', 'Malang', '', '', '', '', '', '2014-11-11', 'PNS001211102014', 'PNS0013', '421.024'),
('094/8/421.024/2014', 'PNS0006', 'PNS0012', '', '', '2014-11-11', '2014-11-12', '2', '', 'Malang', '', '', '', '', '', '2014-11-11', 'PNS000611102014', 'PNS0013', '421.024');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat_tugas`
--

CREATE TABLE IF NOT EXISTS `tbl_surat_tugas` (
  `no_surat` varchar(30) NOT NULL,
  `kd_sdm` varchar(30) NOT NULL,
  `pengikut1` varchar(30) DEFAULT NULL,
  `pengikut2` varchar(30) DEFAULT NULL,
  `pengikut3` varchar(30) DEFAULT NULL,
  `tanggal_surat` date NOT NULL,
  `tujuan` text NOT NULL,
  `dasar` text,
  `pembuka_surat` text,
  `status` varchar(30) NOT NULL,
  `pejabat` varchar(30) DEFAULT NULL,
  `kode_skpd` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_surat_tugas`
--

INSERT INTO `tbl_surat_tugas` (`no_surat`, `kd_sdm`, `pengikut1`, `pengikut2`, `pengikut3`, `tanggal_surat`, `tujuan`, `dasar`, `pembuka_surat`, `status`, `pejabat`, `kode_skpd`) VALUES
('094/11/421.024/2014', 'PNS0037', '', '', '', '2014-11-11', 'http://localhost/pemkab-malang/surat/baru http://localhost/pemkab-malang/surat/baru http://localhost/pemkab-malang/surat/baru', 'http://localhost/pemkab-malang/surat/baru http://localhost/pemkab-malang/surat/baru http://localhost/pemkab-malang/surat/baru, Dengan ini :', NULL, 'PNS003711102014', 'PNS0013', '421.024'),
('094/12/421.024/2014', 'PNS0013', 'PNS0012', 'PNS0006', 'KON0001', '2014-11-13', 'Menghadiri Rapat Sosialisasi bagi para Camat di 60 Kecamatan se-Jawa Timur yang diselenggarakan pada hari Rabu, tanggal 18 April 2012 pukul 09.00 WIB - selesai bertempat di Hotel Satelit Surabaya, Jl. Mayjen. Sungkono no. 139, Surabaya.', 'Surat Sekretaris Daerah Provinsi Jawa Timur tanggal 1000000 April 2014 nomor:079/1229/105/2012 perihal: Sosialisasi Internet (Speedy) Kecamatan se-Jatim', '', 'PNS001313102014', 'PNS0003', '421.024'),
('094/121/421.042/2014', 'PNS0039', '', '', '', '2014-11-17', 'Pakai Surat Dasar (Surat berdasarkan surat balasan)Pakai Surat Dasar (Surat berdasarkan surat balasan) Pakai Surat Dasar (Surat berdasarkan surat balasan) Pakai Surat Dasar (Surat berdasarkan surat balasan)', 'Pakai Surat Dasar (Surat berdasarkan surat balasan)Pakai Surat Dasar (Surat berdasarkan surat balasan) Pakai Surat Dasar (Surat berdasarkan surat balasan) Pakai Surat Dasar (Surat berdasarkan surat balasan)', '', 'PNS003917102014', 'PNS0038', '421.042'),
('094/1231/421.024/2014', 'PNS0037', '', '', '', '2014-11-13', 'Tidak memakai Surat Dasar (Diisi sebagai pembuka surat).Tidak memakai Surat Dasar (Diisi sebagai pembuka surat).Tidak memakai Surat Dasar (Diisi sebagai pembuka surat).', '', 'Tidak memakai Surat Dasar (Diisi sebagai pembuka surat). Tidak memakai Surat Dasar (Diisi sebagai pembuka surat). Tidak memakai Surat Dasar (Diisi sebagai pembuka surat)', 'PNS003713102014', 'PNS0013', '421.024'),
('094/7/421.024/2014', 'PNS0012', 'PNS0006', '', '', '2014-11-11', 'Pakai Surat Dasar (Surat berdasarkan surat balasan).', 'Pakai Surat Dasar (Surat berdasarkan surat balasan).', '', 'PNS001211102014', 'PNS0013', '421.024'),
('094/8/421.024/2014', 'PNS0006', 'PNS0012', '', '', '2014-11-11', '', NULL, NULL, 'PNS000611102014', 'PNS0013', '421.024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`no`), ADD KEY `kode_skpd` (`kode_skpd`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
 ADD PRIMARY KEY (`kd_jabatan`), ADD UNIQUE KEY `nama_jabatan` (`nama_jabatan`);

--
-- Indexes for table `tbl_pangkat_gol`
--
ALTER TABLE `tbl_pangkat_gol`
 ADD PRIMARY KEY (`kd_pg`);

--
-- Indexes for table `tbl_sdm`
--
ALTER TABLE `tbl_sdm`
 ADD PRIMARY KEY (`kd_sdm`), ADD KEY `kd_jabatan` (`kd_jabatan`), ADD KEY `kd_pg` (`kd_pg`);

--
-- Indexes for table `tbl_skpd`
--
ALTER TABLE `tbl_skpd`
 ADD PRIMARY KEY (`kode_skpd`);

--
-- Indexes for table `tbl_sppd`
--
ALTER TABLE `tbl_sppd`
 ADD PRIMARY KEY (`no_surat`), ADD UNIQUE KEY `status` (`status`), ADD KEY `kd_sdm` (`kd_sdm`), ADD KEY `pejabat` (`pejabat`), ADD KEY `kode_skpd` (`kode_skpd`);

--
-- Indexes for table `tbl_surat_tugas`
--
ALTER TABLE `tbl_surat_tugas`
 ADD PRIMARY KEY (`no_surat`), ADD UNIQUE KEY `status` (`status`), ADD KEY `kd_sdm` (`kd_sdm`), ADD KEY `pejabat` (`pejabat`), ADD KEY `kode_skpd` (`kode_skpd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
MODIFY `kd_jabatan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `tbl_pangkat_gol`
--
ALTER TABLE `tbl_pangkat_gol`
MODIFY `kd_pg` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
ADD CONSTRAINT `tbl_admin_ibfk_1` FOREIGN KEY (`kode_skpd`) REFERENCES `tbl_skpd` (`kode_skpd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_sdm`
--
ALTER TABLE `tbl_sdm`
ADD CONSTRAINT `tbl_sdm_ibfk_1` FOREIGN KEY (`kd_jabatan`) REFERENCES `tbl_jabatan` (`kd_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_sdm_ibfk_2` FOREIGN KEY (`kd_pg`) REFERENCES `tbl_pangkat_gol` (`kd_pg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_sppd`
--
ALTER TABLE `tbl_sppd`
ADD CONSTRAINT `tbl_sppd_ibfk_1` FOREIGN KEY (`kd_sdm`) REFERENCES `tbl_sdm` (`kd_sdm`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_sppd_ibfk_2` FOREIGN KEY (`pejabat`) REFERENCES `tbl_sdm` (`kd_sdm`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_sppd_ibfk_3` FOREIGN KEY (`kode_skpd`) REFERENCES `tbl_skpd` (`kode_skpd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_surat_tugas`
--
ALTER TABLE `tbl_surat_tugas`
ADD CONSTRAINT `tbl_surat_tugas_ibfk_1` FOREIGN KEY (`kd_sdm`) REFERENCES `tbl_sdm` (`kd_sdm`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_surat_tugas_ibfk_2` FOREIGN KEY (`kd_sdm`) REFERENCES `tbl_sdm` (`kd_sdm`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_surat_tugas_ibfk_3` FOREIGN KEY (`pejabat`) REFERENCES `tbl_sdm` (`kd_sdm`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_surat_tugas_ibfk_4` FOREIGN KEY (`kode_skpd`) REFERENCES `tbl_skpd` (`kode_skpd`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
