-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 Jul 2018 pada 18.12
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasaindonesia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `no` int(8) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`no`, `nip`, `nama`, `no_hp`, `email`, `username`, `password`, `gambar`) VALUES
(1, '198503302003121012', 'Sri Chanjarwati', '085270161111', 'srichanjarwati@yahoo.com', 'chanjar', 'chanjar', 'chanjar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datalengkap_user`
--

CREATE TABLE `datalengkap_user` (
  `no` int(8) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_usaha` varchar(20) NOT NULL,
  `nama_usaha` varchar(30) NOT NULL,
  `usaha_jualbeli` varchar(30) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wilayah`
--

CREATE TABLE `data_wilayah` (
  `no` int(8) NOT NULL,
  `id_wilayah` varchar(10) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `wilayah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_wilayah`
--

INSERT INTO `data_wilayah` (`no`, `id_wilayah`, `id_kategori`, `wilayah`) VALUES
(1, 'W01', 'K01', 'Wilayah 1'),
(2, 'W02', 'K01', 'Wilayah 2'),
(3, 'W03', 'K01', 'Wilayah 3'),
(4, 'W04', 'K02', 'Wilayah 1'),
(5, 'W05', 'K02', 'Wilayah 2'),
(6, 'W06', 'K02', 'Wilayah 3'),
(7, 'W07', 'K03', 'Wilayah 1'),
(8, 'W08', 'K03', 'Wilayah 2'),
(9, 'W09', 'K03', 'Wilayah 3'),
(10, 'W10', 'K04', 'Wilayah 1'),
(11, 'W11', 'K04', 'Wilayah 2'),
(12, 'W12', 'K04', 'Wilayah 3'),
(13, 'W13', 'K05', 'Wilayah 1'),
(14, 'W14', 'K05', 'Wilayah 2'),
(15, 'W15', 'K05', 'Wilayah 3'),
(16, 'W16', 'K06', 'Wilayah 1'),
(17, 'W17', 'K06', 'Wilayah 2'),
(18, 'W18', 'K06', 'Wilayah 3'),
(19, 'W19', 'K07', 'Wilayah 1'),
(20, 'W20', 'K07', 'Wilayah 2'),
(21, 'W21', 'K07', 'Wilayah 3'),
(22, 'W22', 'K08', 'Wilayah 1'),
(23, 'W23', 'K08', 'Wilayah 2'),
(24, 'W24', 'K08', 'Wilayah 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `no` int(8) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `tanggungan_awal` varchar(20) NOT NULL,
  `batas_tanggungan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`no`, `id_kategori`, `kategori`, `tanggungan_awal`, `batas_tanggungan`) VALUES
(1, 'K01', 'Kategori 1', '0', '125000000'),
(2, 'K02', 'Kategori 2', '125000001', '200000000'),
(3, 'K03', 'Kategori 3', '200000001', '400000000'),
(4, 'K04', 'Kategori 4', '400000001', '800000000'),
(5, 'K05', 'Kategori 5', '800000001', 'âˆž'),
(6, 'K06', 'Kategori 6', 'Truck & Pick Up', 'Truck & Pick Up'),
(7, 'K07', 'Kategori 7', 'Bus', 'Bus'),
(8, 'K08', 'Kategori 8', 'Sepeda Motor', 'Sepeda Motor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_konstruksi`
--

CREATE TABLE `kelas_konstruksi` (
  `no` int(8) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `id_okupasi` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas_konstruksi`
--

INSERT INTO `kelas_konstruksi` (`no`, `id_kelas`, `id_okupasi`, `kelas`) VALUES
(1, 'K01', 'O01', 'Kelas 1'),
(2, 'K02', 'O01', 'Kelas 2'),
(3, 'K03', 'O01', 'Kelas 3'),
(4, 'K04', 'O02', 'Kelas 1'),
(5, 'K05', 'O02', 'Kelas 2'),
(6, 'K06', 'O02', 'Kelas 3'),
(7, 'K07', 'O03', 'Kelas 1'),
(8, 'K08', 'O03', 'Kelas 2'),
(9, 'K09', 'O03', 'Kelas 3'),
(10, 'K10', 'O04', 'Kelas 1'),
(11, 'K11', 'O04', 'Kelas 2'),
(12, 'K12', 'O04', 'Kelas 3'),
(13, 'K13', 'O05', 'Kelas 1'),
(14, 'K14', 'O05', 'Kelas 2'),
(15, 'K15', 'O05', 'Kelas 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `no` int(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `okupasi`
--

CREATE TABLE `okupasi` (
  `no` int(8) NOT NULL,
  `id_okupasi` varchar(10) NOT NULL,
  `kode_okupasi` varchar(10) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `okupasi`
--

INSERT INTO `okupasi` (`no`, `id_okupasi`, `kode_okupasi`, `keterangan`) VALUES
(1, 'O01', '2972', 'Rumah Tinggal'),
(2, 'O02', '2934', 'Toko'),
(3, 'O03', '2936', 'Gudang'),
(4, 'O04', '2971', 'Apartement'),
(5, 'O05', '2945', 'Restaurant');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_kebakaran`
--

CREATE TABLE `order_kebakaran` (
  `no` int(8) NOT NULL,
  `id_order` varchar(10) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `harga_pertanggungan` varchar(20) NOT NULL,
  `jenis_dinding` varchar(10) NOT NULL,
  `jenis_lantai` varchar(15) NOT NULL,
  `jenis_tiang` varchar(20) NOT NULL,
  `banyak_tingkat` varchar(5) NOT NULL,
  `jenis_penerangan` varchar(10) NOT NULL,
  `okupasi_bangunan` varchar(20) NOT NULL,
  `batas_kiri` varchar(30) NOT NULL,
  `batas_kanan` varchar(30) NOT NULL,
  `batas_belakang` varchar(30) NOT NULL,
  `batas_depan` varchar(30) NOT NULL,
  `alamat_okupasi` text NOT NULL,
  `alat_pemadam` varchar(10) NOT NULL,
  `lokasi_okupasi` varchar(5) NOT NULL,
  `awal_pertanggungan` date NOT NULL,
  `akhir_pertanggungan` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `status_button` varchar(8) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_kendaraan`
--

CREATE TABLE `order_kendaraan` (
  `no` int(8) NOT NULL,
  `id_order` varchar(10) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `merk_kend` varchar(20) NOT NULL,
  `tipe_kend` varchar(30) NOT NULL,
  `tahun_kend` varchar(5) NOT NULL,
  `no_polisi` varchar(10) NOT NULL,
  `no_rangka` varchar(20) NOT NULL,
  `no_mesin` varchar(15) NOT NULL,
  `jenis_kend` varchar(15) NOT NULL,
  `tempat_ddk` varchar(2) NOT NULL,
  `daya_angkut` varchar(10) NOT NULL,
  `kondisi_pertanggungan` varchar(10) NOT NULL,
  `harga_pertanggungan` varchar(20) NOT NULL,
  `penggunaan_kend` varchar(10) NOT NULL,
  `awal_pertanggungan` date NOT NULL,
  `akhir_pertanggungan` date NOT NULL,
  `alamat_kend` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `status_button` varchar(8) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `polis_keb`
--

CREATE TABLE `polis_keb` (
  `no` int(8) NOT NULL,
  `id_order` varchar(10) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `awal_pertanggungan` date NOT NULL,
  `akhir_pertanggungan` date NOT NULL,
  `okupasi_bangunan` varchar(20) NOT NULL,
  `harga_pertanggungan` varchar(20) NOT NULL,
  `alamat_okupasi` text NOT NULL,
  `jenis_penerangan` varchar(10) NOT NULL,
  `id_okupasi` varchar(10) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `id_rate` varchar(10) NOT NULL,
  `biaya_polis` varchar(5) NOT NULL,
  `biaya_materai` varchar(5) NOT NULL,
  `jangka_waktu` varchar(10) NOT NULL,
  `status_polis` varchar(15) NOT NULL,
  `nama_bank` varchar(20) NOT NULL,
  `nama_rek` varchar(30) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `total_tf` varchar(20) NOT NULL,
  `status_bayar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `polis_kend`
--

CREATE TABLE `polis_kend` (
  `no` int(8) NOT NULL,
  `id_order` varchar(10) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `awal_pertanggungan` date NOT NULL,
  `akhir_pertanggungan` date NOT NULL,
  `merk_kend` varchar(20) NOT NULL,
  `tipe_kend` varchar(30) NOT NULL,
  `tahun_kend` varchar(5) NOT NULL,
  `no_polisi` varchar(10) NOT NULL,
  `no_mesin` varchar(15) NOT NULL,
  `no_rangka` varchar(20) NOT NULL,
  `penggunaan_kend` varchar(10) NOT NULL,
  `harga_pertanggungan` varchar(20) NOT NULL,
  `kondisi_pertanggungan` varchar(10) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `id_wilayah` varchar(10) NOT NULL,
  `id_rate` varchar(10) NOT NULL,
  `biaya_polis` varchar(5) NOT NULL,
  `biaya_materai` varchar(5) NOT NULL,
  `jangka_waktu` varchar(10) NOT NULL,
  `status_polis` varchar(15) NOT NULL,
  `nama_bank` varchar(20) NOT NULL,
  `nama_rek` varchar(30) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `total_tf` varchar(20) NOT NULL,
  `status_bayar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rate_kebakaran`
--

CREATE TABLE `rate_kebakaran` (
  `no` int(8) NOT NULL,
  `id_rate` varchar(10) NOT NULL,
  `id_okupasi` varchar(10) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `rate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rate_kebakaran`
--

INSERT INTO `rate_kebakaran` (`no`, `id_rate`, `id_okupasi`, `id_kelas`, `rate`) VALUES
(1, 'R01', 'O01', 'K01', '0.294'),
(2, 'R02', 'O01', 'K02', '0.397'),
(3, 'R03', 'O01', 'K03', '0.499'),
(4, 'R04', 'O02', 'K04', '1.52'),
(5, 'R05', 'O02', 'K05', '2.28'),
(6, 'R06', 'O02', 'K06', '3.040'),
(7, 'R07', 'O03', 'K07', '1.127'),
(8, 'R08', 'O03', 'K08', '1.691'),
(9, 'R09', 'O03', 'K09', '2.255'),
(10, 'R10', 'O04', 'K10', '0.368'),
(11, 'R11', 'O04', 'K11', '0.497'),
(12, 'R12', 'O04', 'K12', '0.625'),
(13, 'R13', 'O05', 'K13', '1.479'),
(14, 'R14', 'O05', 'K14', '2.218'),
(15, 'R15', 'O05', 'K15', '2.958');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rate_kendaraan`
--

CREATE TABLE `rate_kendaraan` (
  `no` int(8) NOT NULL,
  `id_rate` varchar(10) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `id_wilayah` varchar(10) NOT NULL,
  `rate` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rate_kendaraan`
--

INSERT INTO `rate_kendaraan` (`no`, `id_rate`, `id_kategori`, `id_wilayah`, `rate`) VALUES
(1, 'R01', 'K01', 'W01', '3.82'),
(2, 'R02', 'K01', 'W02', '3.26'),
(3, 'R03', 'K01', 'W03', '2.53'),
(4, 'R04', 'K02', 'W04', '2.67'),
(5, 'R05', 'K02', 'W05', '2.47'),
(6, 'R06', 'K02', 'W06', '2.69'),
(7, 'R07', 'K03', 'W07', '2.18'),
(8, 'R08', 'K03', 'W08', '2.08'),
(9, 'R09', 'K03', 'W09', '1.79'),
(10, 'R10', 'K04', 'W10', '1.20'),
(11, 'R11', 'K04', 'W11', '1.20'),
(12, 'R12', 'K04', 'W12', '1.14'),
(13, 'R13', 'K05', 'W13', '1.05'),
(14, 'R14', 'K05', 'W14', '1.05'),
(15, 'R15', 'K05', 'W15', '1.05'),
(16, 'R16', 'K06', 'W16', '2.42'),
(17, 'R17', 'K06', 'W17', '2.39'),
(18, 'R18', 'K06', 'W18', '2.23'),
(19, 'R19', 'K07', 'W19', '1.04'),
(20, 'R20', 'K07', 'W20', '1.04'),
(21, 'R21', 'K07', 'W21', '0.88'),
(22, 'R22', 'K08', 'W22', '3.18'),
(23, 'R23', 'K08', 'W23', '3.18'),
(24, 'R24', 'K08', 'W24', '3.18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rate_kendaraan_tlo`
--

CREATE TABLE `rate_kendaraan_tlo` (
  `no` int(8) NOT NULL,
  `id_rate` varchar(10) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `id_wilayah` varchar(10) NOT NULL,
  `rate` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rate_kendaraan_tlo`
--

INSERT INTO `rate_kendaraan_tlo` (`no`, `id_rate`, `id_kategori`, `id_wilayah`, `rate`) VALUES
(1, 'R01', 'K01', 'W01', '0.47'),
(2, 'R02', 'K01', 'W02', '0.65'),
(3, 'R03', 'K01', 'W03', '0.51'),
(4, 'R04', 'K02', 'W04', '0.63'),
(5, 'R05', 'K02', 'W05', '0.44'),
(6, 'R06', 'K02', 'W06', '0.44'),
(7, 'R07', 'K03', 'W07', '0.41'),
(8, 'R08', 'K03', 'W08', '0.38'),
(9, 'R09', 'K03', 'W09', '0.29'),
(10, 'R10', 'K04', 'W10', '0.25'),
(11, 'R11', 'K04', 'W11', '0.25'),
(12, 'R12', 'K04', 'W12', '0.23'),
(13, 'R13', 'K05', 'W13', '0.20'),
(14, 'R14', 'K05', 'W14', '0.20'),
(15, 'R15', 'K05', 'W15', '0.20'),
(16, 'R16', 'K06', 'W16', '0.88'),
(17, 'R17', 'K06', 'W17', '1.68'),
(18, 'R18', 'K06', 'W18', '0.81'),
(19, 'R19', 'K07', 'W19', '0.23'),
(20, 'R20', 'K07', 'W20', '0.23'),
(21, 'R21', 'K07', 'W21', '0.81'),
(22, 'R22', 'K08', 'W22', '1.79'),
(23, 'R23', 'K08', 'W23', '1.80'),
(24, 'R24', 'K08', 'W24', '0.67');

-- --------------------------------------------------------

--
-- Struktur dari tabel `superadmin`
--

CREATE TABLE `superadmin` (
  `no` int(8) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_bank` varchar(20) NOT NULL,
  `nama_rek` varchar(30) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `superadmin`
--

INSERT INTO `superadmin` (`no`, `nip`, `nama`, `no_hp`, `email`, `username`, `password`, `nama_bank`, `nama_rek`, `no_rek`, `gambar`) VALUES
(1, '198503302003121002', 'Farhan Azra Hasibuan', '085270163310', 'farhanazra90@gmail.com', 'farhan', 'farhan', 'Mandiri', 'Asuransi Jasindo', '90000227162131', 'farhan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `no` int(8) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`no`, `id_user`, `nama`, `username`, `password`, `email`) VALUES
(1, 'U01', 'Farhan Azra Hasibuan', 'farhanazra', 'farhan', 'farhanazra90@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `datalengkap_user`
--
ALTER TABLE `datalengkap_user`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `data_wilayah`
--
ALTER TABLE `data_wilayah`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_wilayah` (`id_wilayah`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kelas_konstruksi`
--
ALTER TABLE `kelas_konstruksi`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_okupasi` (`id_okupasi`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `okupasi`
--
ALTER TABLE `okupasi`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_okupasi` (`id_okupasi`);

--
-- Indexes for table `order_kebakaran`
--
ALTER TABLE `order_kebakaran`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `order_kendaraan`
--
ALTER TABLE `order_kendaraan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `polis_keb`
--
ALTER TABLE `polis_keb`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `polis_kend`
--
ALTER TABLE `polis_kend`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `rate_kebakaran`
--
ALTER TABLE `rate_kebakaran`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_okupasi` (`id_okupasi`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `rate_kendaraan`
--
ALTER TABLE `rate_kendaraan`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_wilayah` (`id_wilayah`);

--
-- Indexes for table `rate_kendaraan_tlo`
--
ALTER TABLE `rate_kendaraan_tlo`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_wilayah` (`id_wilayah`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `datalengkap_user`
--
ALTER TABLE `datalengkap_user`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_wilayah`
--
ALTER TABLE `data_wilayah`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kelas_konstruksi`
--
ALTER TABLE `kelas_konstruksi`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `okupasi`
--
ALTER TABLE `okupasi`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order_kebakaran`
--
ALTER TABLE `order_kebakaran`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_kendaraan`
--
ALTER TABLE `order_kendaraan`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `polis_keb`
--
ALTER TABLE `polis_keb`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `polis_kend`
--
ALTER TABLE `polis_kend`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rate_kebakaran`
--
ALTER TABLE `rate_kebakaran`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `rate_kendaraan`
--
ALTER TABLE `rate_kendaraan`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `rate_kendaraan_tlo`
--
ALTER TABLE `rate_kendaraan_tlo`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_wilayah`
--
ALTER TABLE `data_wilayah`
  ADD CONSTRAINT `data_wilayah_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `kelas_konstruksi`
--
ALTER TABLE `kelas_konstruksi`
  ADD CONSTRAINT `kelas_konstruksi_ibfk_1` FOREIGN KEY (`id_okupasi`) REFERENCES `okupasi` (`id_okupasi`);

--
-- Ketidakleluasaan untuk tabel `rate_kebakaran`
--
ALTER TABLE `rate_kebakaran`
  ADD CONSTRAINT `rate_kebakaran_ibfk_1` FOREIGN KEY (`id_okupasi`) REFERENCES `okupasi` (`id_okupasi`),
  ADD CONSTRAINT `rate_kebakaran_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas_konstruksi` (`id_kelas`);

--
-- Ketidakleluasaan untuk tabel `rate_kendaraan`
--
ALTER TABLE `rate_kendaraan`
  ADD CONSTRAINT `rate_kendaraan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `rate_kendaraan_ibfk_2` FOREIGN KEY (`id_wilayah`) REFERENCES `data_wilayah` (`id_wilayah`);

--
-- Ketidakleluasaan untuk tabel `rate_kendaraan_tlo`
--
ALTER TABLE `rate_kendaraan_tlo`
  ADD CONSTRAINT `rate_kendaraan_tlo_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `rate_kendaraan_tlo_ibfk_2` FOREIGN KEY (`id_wilayah`) REFERENCES `data_wilayah` (`id_wilayah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
