-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2020 at 11:19 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aras`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'ironman', 'ironman', 'Herbalist');

-- --------------------------------------------------------

--
-- Table structure for table `tumbuhan_obat`
--

CREATE TABLE `tumbuhan_obat` (
  `id_tumbuhan` int(11) NOT NULL,
  `nama_tumbuhan` varchar(255) NOT NULL,
  `khasiat` varchar(255) NOT NULL,
  `cara_pengolahan` varchar(255) NOT NULL,
  `cara_penggunaan` varchar(255) NOT NULL,
  `bagian_tumbuhan` varchar(255) NOT NULL,
  `jenis_tumbuhan` varchar(255) NOT NULL,
  `latin` varchar(255) DEFAULT NULL,
  `famili` varchar(255) DEFAULT NULL,
  `resep` text,
  `gambar` varchar(255) DEFAULT NULL,
  `qi` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tumbuhan_obat`
--

INSERT INTO `tumbuhan_obat` (`id_tumbuhan`, `nama_tumbuhan`, `khasiat`, `cara_pengolahan`, `cara_penggunaan`, `bagian_tumbuhan`, `jenis_tumbuhan`, `latin`, `famili`, `resep`, `gambar`, `qi`) VALUES
(523, 'Ulin', 'Ginjal', 'Ditumbuk', 'Dimakan', 'Daun', 'Pohon', 'Eusideroxylan Zwageri Teijsm.et Binn', 'Lauraceae', NULL, NULL, 0.130926),
(524, 'Sahang Burung', 'Malaria', 'Direbus', 'Diminum', 'Akar', 'Pohon', 'Brucea Javanica (L) Merr', 'Simaraoubaceae', NULL, NULL, 0.0970986),
(525, 'Jengkol', 'Diabetes', 'Direbus', 'Diminum', 'Akar', 'Pohon', 'Archidendron Jiringa (Jack) I.C.Nielsen', 'Fabaceae', NULL, NULL, 0.0750026),
(526, 'Kayu Manis', 'Diabetes', 'Direbus', 'Diminum', 'Akar', 'Pohon', 'Cinnamomum Burmanii Blume', 'Lauraceae', NULL, NULL, 0.0750026),
(527, 'Pasak Bumi/Tongkat Ali', 'Malaria', 'Direbus', 'Diminum', 'Akar', 'Pohon', 'Eurycoma Longifolia Jack', 'Simaraoubaceae', NULL, NULL, 0.0970986),
(528, 'Gula Gundri', 'Batuk', 'Ditumbuk', 'Diminum', 'Daun', 'Pohon', 'Vitex trifolia L.', 'Verbenaceae', NULL, NULL, 0.183285),
(529, 'Alaban/Leban', 'Malaria', 'Direbus', 'Diminum', 'Kulit Batang', 'Pohon', 'Vitex Pinnata L.', 'Verbenaceae', NULL, NULL, 0.0776362),
(530, 'Kedemba', 'Demam', 'Direbus', 'Diminum', 'Kulit Batang', 'Pohon', 'Mitragyna Speciosia Korth', 'Rubiaceae', NULL, NULL, 0.5),
(531, 'Keminting/Perija', 'Malaria', 'Direbus', 'Diminum', 'Kulit Batang', 'Pohon', 'Aleurites moluccana (L) Willd', 'Euphorbiaceae', NULL, NULL, 0.0776362),
(532, 'Karatau', 'Diabetes', 'Direbus', 'Diminum', 'Daun', 'Pohon', 'Morus Alba L.', 'Moraceae', NULL, NULL, 0.0894225),
(533, 'Mengkudu', 'Diabetes', 'Diparut', 'Diminum', 'Buah', 'Pohon', 'Morinda Citrifolia L.', 'Rubiaceae', NULL, NULL, 0.0648163),
(534, 'Belimbing wuluh', 'Hipertensi', 'Direbus', 'Diminum', 'Daun', 'Pohon', 'Averrhoa Bilimbi L.', 'Oxalidaceae', NULL, NULL, 0.130737),
(535, 'Sukun', 'Diabetes', 'Direbus', 'Diminum', 'Daun', 'Pohon', 'Artocarpus Communis', 'Moraceae', NULL, NULL, 0.0894225),
(536, 'Pulai/plai', 'Malaria', 'Direbus', 'Diminum', 'Kulit Batang', 'Pohon', 'Aistonia iwahigensis elmer', 'Apocynaceae', NULL, NULL, 0.0776362),
(537, 'Belimbing Manis', 'Malaria', 'Langsung', 'Diminum', 'Bunga', 'Pohon', 'Averrhoa carambola', 'Oxalidaceae', NULL, NULL, 0.0663516),
(538, 'Mahkota dewa', 'Hipertensi', 'Direbus', 'Diminum', 'Buah', 'Pohon', 'Phaleria macrocarpa', 'Thymelaeceae', NULL, NULL, 0.106334),
(539, 'pepaya', 'Malaria', 'Ditumbuk', 'Diminum', 'Daun', 'Pohon', 'Carica papaya', 'Caricaceae', NULL, NULL, 0.10857),
(540, 'Murbei', 'Hipertensi', 'Direbus', 'Diminum', 'Daun', 'Pohon', 'Morus alba L.', 'Moraceae', NULL, NULL, 0.130737),
(541, 'Mengkudu', 'Hipertensi', 'Langsung', 'Dimakan', 'Buah', 'Pohon', 'M. citrifolia', 'Rubiaceae', NULL, NULL, 0.0856711),
(542, 'Nangka balanda/ sirsak', 'Hipertensi', 'Direbus', 'Diminum', 'Daun', 'Pohon', 'A. muricata', 'Annonaceae', NULL, NULL, 0.130737),
(543, 'Simpur', 'Batuk', 'Direbus', 'Dimakan', 'Daun', 'Pohon', 'Dillenia', 'Dilleniaceae', NULL, NULL, 0.181898),
(544, 'hambin buah/meniran', 'Ginjal', 'Diperas', 'Diminum', 'Daun', 'Pohon', 'Phyllanthus urinaria Linn', 'Euphorbiaceae', NULL, NULL, 0.143017),
(545, 'Murbei', 'Diabetes', 'Langsung', 'Dimakan', 'Buah', 'Pohon', 'Morus alba L.', ' Moraceae', NULL, NULL, 0.0589344),
(546, 'Murbei', 'Malaria', 'Langsung', 'Dimakan', 'Buah', 'Pohon', 'Morus alba L.', ' Moraceae', NULL, NULL, 0.0746243),
(547, 'Murbei', 'Flu', 'Langsung', 'Dimakan', 'Buah', 'Pohon', 'Morus alba L.', ' Moraceae', NULL, NULL, 0.350034),
(548, 'Murbei', 'Hepatitis', 'Langsung', 'Dimakan', 'Buah', 'Pohon', 'Morus alba L.', ' Moraceae', NULL, NULL, NULL),
(549, 'Kumpai Mahung/Kumpai Japang', 'DBD', 'Ditumbuk', 'Dimakan', 'Daun', 'Perdu', 'Eupatorium Inulaefolium H.B.&K', 'Compositae', NULL, NULL, NULL),
(550, 'Kapas Rampit', 'Diabetes', 'Direbus', 'Diminum', 'Akar', 'Perdu', 'Gossypium Acuminatum Roxb', 'Malvaceae', NULL, NULL, 0.0527331),
(551, 'Tangkan Putih/Tawar Seribu', 'Diabetes', 'Direbus', 'Diminum', 'Akar', 'Perdu', 'Bauhinia Purpurea L.', 'Fabaceae', NULL, NULL, 0.0527331),
(552, 'Tangkan Putih/Tawar Seribu', 'Hipertensi', 'Direbus', 'Diminum', 'Akar', 'Perdu', 'Bauhinia Purpurea L.', 'Fabaceae', NULL, NULL, 0.0787737),
(553, 'Jeruk Nipis', 'Batuk', 'Diperas', 'Diminum', 'Buah', 'Perdu', 'Jeruk Nipis', 'Rutaceae', NULL, NULL, 0.0957001),
(554, 'Rosela', 'Hipertensi', 'Direbus', 'Diminum', 'Bunga', 'Perdu', 'Hibiscus radiatus Cav.', 'Malvaceae', NULL, NULL, 0.0562479),
(555, 'Pecah Beling', 'Hipertensi', 'Direbus', 'Diminum', 'Daun', 'Perdu', 'Sericocalyx crispus L. Bremek', 'Acanthaceae', NULL, NULL, 0.0975451),
(556, 'Garinang', 'Hipertensi', 'Langsung', 'Dimakan', 'Buah', 'Perdu', '', '', NULL, NULL, 0.052479),
(557, 'penawar seribu/ patah tulang', 'Struk', 'Direbus', 'Mandi', 'Daun', 'Perdu', 'Euphorbia tirucalli L', 'Euphorbiaceae', NULL, NULL, NULL),
(558, 'Sambiloto', 'Hepatitis', 'Direbus', 'Diminum', 'Daun', 'Perdu', 'Andrographis paniculata', 'Acanthaceae', NULL, NULL, NULL),
(559, 'Sambiloto', 'Ginjal', 'Direbus', 'Diminum', 'Daun', 'Perdu', 'Andrographis paniculata', 'Acanthaceae', NULL, NULL, 0.108226),
(560, 'kakabat biru', 'Bengkak Hati', 'Diperas', 'Diminum', 'Daun', 'Perdu', 'Justicia gendarussa Burm.f', 'Acanthaceae', NULL, NULL, NULL),
(561, 'Cawat Palui', 'Ginjal', 'Direbus', 'Diminum', 'Batang', 'Liana', 'Cayrotia sp.', 'Vitaceae', NULL, NULL, 0.0426428),
(562, 'Kelubut/Kemot', 'Diabetes', 'Direbus', 'Diminum', 'Herba', 'Liana', 'Passiflora Foetida L.', 'Passifloraceae', NULL, NULL, 0.0220676),
(563, 'Akar Kunyit', 'Malaria', 'Direbus', 'Diminum', 'Akar', 'Liana', 'Fibraurea Tinctoria Lour', 'Menispermaceae', NULL, NULL, 0.053534),
(564, 'Tanjuk Langit', 'Kencing Batu', 'Direbus', 'Diminum', 'Akar', 'Paku - Pakuan', 'Helminthostachys Zeylanica Hook.f.', 'Ophioglossaceae', NULL, NULL, NULL),
(565, 'Alang-alang', 'Diabetes', 'Direbus', 'Diminum', 'Akar', 'Rumput', 'Imperata Cylindrica', 'Poaceae', NULL, NULL, 0.0557024),
(566, 'Hiring', 'Batuk', 'Langsung', 'Dimakan', 'Batang', 'Rumput', 'Scleria laevis willd', 'Cypereceae', NULL, NULL, 0.0659546),
(567, 'Bawang Tiwai/Bawang Dayak', 'Diabetes', 'Direbus', 'Diminum', 'Buah', 'Rumput', 'Eleuthrine Americona Merr', 'Iridaceae', NULL, NULL, 0.0513764),
(568, 'Kembat/Gandarusa', 'Batuk', 'Ditumbuk', 'Dimakan', 'Daun', 'Rumput', 'Gendarussa Vulgoris Nees', 'Acanthaceae', NULL, NULL, 0.118847),
(569, 'Tebu Salah', 'Diabetes', 'Direbus', 'Diminum', 'Batang', 'Rumput', 'Saccharum Spontaneum L.', 'Graminae', NULL, NULL, 0.0398405),
(570, 'Lemas', 'Diabetes', 'Direbus', 'Diminum', 'Rimpang', 'Rumput', 'Alpinia galangal Willd', 'Zingiberaceae', NULL, NULL, 0.0383985),
(571, 'Hambin-hambin Buah/ Meniran', 'Hepatitis', 'Direbus', 'Diminum', 'Daun', 'Rumput', 'Phyllanthus Niruri L', 'Euphorbiaceae', NULL, NULL, NULL),
(572, 'Ombung-ombung/sembung', 'Flu', 'Direbus', 'Diminum', 'Herba', 'Rumput', 'Blumea Balsamifera', 'Asteraceae', NULL, NULL, 0.221082),
(573, 'Kumis Kucing', 'Diabetes', 'Direbus', 'Diminum', 'Daun', 'Rumput', 'Orthhosiphon Aristatus (Blume) Mig', 'Larniaceae', NULL, NULL, 0.0701223),
(574, 'Kumis Kucing', 'Ginjal', 'Direbus', 'Diminum', 'Daun', 'Rumput', 'Orthhosiphon Aristatus (Blume) Mig', 'Larniaceae', NULL, NULL, 0.11434),
(575, 'Amang/Teki Ladang', 'Kaki Bengkak', 'Direbus', 'Diminum', 'Akar', 'Rumput', 'Cyperus Rotundus L.', 'Poaceae', NULL, NULL, NULL),
(576, 'ilalang', 'Ginjal', 'Direbus', 'Diminum', 'Akar', 'Rumput', 'Imperata cylindrica L', 'Gramineae atau Poaceae', NULL, NULL, 0.0962123),
(577, 'Rumput malu', 'Ginjal', 'Direbus', 'Diminum', 'Akar', 'Rumput', 'Mimosa pudica', 'fabaceae', NULL, NULL, 0.0962123),
(578, 'Pegagan', 'Ginjal', 'Direbus', 'Diminum', 'Daun', 'Rumput', 'Centella asiatica', 'Apiaceae', NULL, NULL, 0.11434),
(579, 'Kumis kucing', 'Malaria', 'Direbus', 'Diminum', 'Daun', 'Herba', 'Orthosiphon aristatus', ' Lamiaceae/Labiatae', NULL, NULL, 0.0766268),
(580, 'Mahkota dewa', 'Batuk', 'Direbus', 'Diminum', 'Buah', 'Herba', 'Phaleria macrocarpa)', 'Thymelaeaceae', NULL, NULL, 0.0886532),
(581, 'Amang', 'Kaki Bengkak', 'Direbus', 'Diminum', 'Daun', 'Herba', 'Cyperus rotundus', ' Cyperaceae', NULL, NULL, NULL),
(582, 'Jahe merah', 'Batuk', 'Direbus', 'Diminum', 'Rimpang', 'Herba', 'Zingiber officinale rosc. Var.Rubrum.', 'Zingiberaceae', NULL, NULL, 0.0654407),
(583, 'Limpasu', 'Diabetes', 'Direbus', 'Diminum', 'Akar', 'Pohon', 'Baccaurea Lanceolata ', 'Euphorbiaceae', NULL, NULL, 0.0750026),
(584, 'Bandotan', 'Malaria', 'Direbus', 'Diminum', 'Daun', 'Herba', 'Ageratum conyzoides L', 'Asteraceae', NULL, NULL, 0.0766268);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tumbuhan_obat`
--
ALTER TABLE `tumbuhan_obat`
  ADD PRIMARY KEY (`id_tumbuhan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tumbuhan_obat`
--
ALTER TABLE `tumbuhan_obat`
  MODIFY `id_tumbuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=585;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
