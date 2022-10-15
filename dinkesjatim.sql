-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 09:30 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinkesjatim`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_agenda` date NOT NULL,
  `nama_agenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `tanggal_agenda`, `nama_agenda`, `created_at`, `updated_at`) VALUES
(1, '2022-06-29', 'Hari keluarga berencana dan hari keluarga nasional.', '2022-06-26 00:03:02', '2022-06-26 00:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_bidang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`id`, `nama_bidang`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Sekretariat', 'sekretariat', '2022-06-25 23:44:55', '2022-06-25 23:44:55'),
(2, 'Bidang Kesehatan Masyarakat', 'bidang-kesehatan-masyarakat', '2022-06-25 23:44:55', '2022-06-25 23:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama_file`, `data_file`, `kategori_data`, `created_at`, `updated_at`) VALUES
(1, 'Profil Kesehatan Provinsi Jawa Timur Tahun 2020', 'post-document/JZDfA73qYBi6c13hN4PpNlrXb275R9vm6soMoKnv.pdf', 'dokumen-publikasi', '2022-06-26 00:09:38', '2022-06-26 00:09:38'),
(2, 'PMK No. 23 Th. 2021 Perubahan Ketiga atas PMK No. 10 Th. 2021', 'post-document/ZLY5W9TfuytMTxwD5ynGUwWG3Xm3pgeOgDoVub35.pdf', 'peraturan-aturan', '2022-06-26 00:10:08', '2022-06-26 00:10:08'),
(3, 'PROFIL KESEHATAN PROVINSI 2015 revisi', 'post-document/ShNiAQqBPDrvyn12NK8sPz6gWDkZnDKT347e2EqI.pdf', 'dokumen-publikasi', '2022-06-26 00:20:06', '2022-06-26 00:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `institusi`
--

CREATE TABLE `institusi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bidang_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `profil_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institusi`
--

INSERT INTO `institusi` (`id`, `bidang_id`, `user_id`, `profil_id`, `judul`, `image`, `body`, `publish_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Visi Misi', 'post-images/32NBvpiM6NkNU75mIpqyyY6wyWi5Efkpt7kEjYse.png', NULL, NULL, '2022-06-25 23:46:54', '2022-06-25 23:46:54'),
(2, 1, 1, 2, 'Tujuan', NULL, '<div>Dinas Kesehatan Provinsi Jawa Timur dalam mewujudkan misinya menetapkan tujuan sebagai berikut:</div><ol><li>Untuk mewujudkan misi ”Menggerakkan pembangunan berwawasan kesehatan“, maka ditetapkan tujuan : Mewujudkan mutu lingkungan yang lebih sehat, pengembangan sistem kesehatan lingkungan kewilayahan, serta menggerakkan pembangunan berwawasan kesehatan.</li><li>Untuk mewujudkan misi ”Mendorong terwujudnya kemandirian masyarakat untuk hidup sehat”, maka ditetapkan tujuan: Memberdayakan individu, keluarga dan masyarakat agar mampu menumbuhkan Perilaku Hidup Bersih dan Sehat (PHBS) serta mengembangkan Upaya Kesehatan Berbasis Masyarakat (UKBM).</li><li>Untuk mewujudkan misi ”Mewujudkan, memelihara dan meningkatkan pelayanan kesehatan yang bermutu, merata, dan terjangkau”, maka ditetapkan tujuan:<ul><li>Meningkatkan akses, pemerataan dan kualitas pelayanan kesehatan melalui Rumah Sakit, Balai Kesehatan, Puskesmas dan jaringannya.</li><li>Meningkatkan kesadaran gizi keluarga dalam upaya meningkatkan status gizi masyarakat.</li><li>Menjamin ketersediaan, pemerataan, pemanfaatan, mutu, keterjangkauan ob at dan perbekalan kesehatan serta pembinaan mutu makanan.</li><li>Mengembangkan kebijakan, sistem pembiayaan dan manajemen pembangunan kesehatan.</li></ul></li><li>Untuk mewujudkan misi ”Meningkatkan upaya pengendalian penyakit dan penanggulangan masalah kesehatan”, maka ditetapkan tujuan: Mencegah menurunkan dan mengendalikan penyakit menular dan tidak menular serta masalah kesehatan lainnya.</li><li>Untuk mewujudkan misi ”Meningkatkan dan mendayagunakan sumberdaya kesehatan”, maka ditetapkan tujuan: Meningkatkan jumlah, jenis, mutu dan penyebaran tenaga kesehatan sesuai standar.</li></ol><div>Tugas, Fungsi dan Struktur Organisasi Dinas Kesehatan Provinsi Jawa timur dapat dilihat <a href=\"https://dinkes.jatimprov.go.id/userimage/dokumen/Tugas_Fungsi_dan_Struktur_Organisasi.pdf\">disini</a></div><div>Peraturan Gubernur Jawa Timur No 79 Tahun 2008 Tentang Uraian Tugas Dinas Kesehatan Provinsi Jawa Timur dapat dilihat <a href=\"https://dinkes.jatimprov.go.id/userimage/dokumen/PERGUB_79_2008_URAIAN_TUGAS_DINKES_JATIM.pdf\">disini</a></div>', NULL, '2022-06-25 23:47:37', '2022-06-25 23:47:37'),
(3, 1, 1, 3, 'Motto', 'post-images/pXS5QM8UEounVW6EjL0FU54KXovtA89xjxsHeWnX.png', NULL, NULL, '2022-06-25 23:48:54', '2022-06-25 23:48:54'),
(4, 1, 1, 4, 'Kebijakan', NULL, '<div>&nbsp;Kebijakan Dinas Kesehatan Provinsi Jawa Timur dalam mewujudkan tujuan dan sasaran yang akan dicapai dirumuskan sebagai berikut:</div><ol><li>Dalam rangka mewujudkan misi “Menggerakkan pembangunan berwawasan kesehatan”, maka ditetapkan kebijakan: Pemantapan pembangunan berwawasan kesehatan.</li><li>Dalam rangka mewujudkan misi “Mendorong terwujudnya kemandirian masyarakat untuk hidup sehat”, maka ditetapkan kebijakan:<ul><li>Pengembangan Upaya Kesehatan Berbasis Masyarakat (UKBM)</li><li>Peningkatan lingkungan sehat</li></ul></li><li>Dalam rangka mewujudkan misi ”Mewujudkan, memelihara dan meningkatkan pelayanan kesehatan yang bermutu, merata, dan terjangkau”, maka ditetapkan kebijakan:<ul><li>Percepatan penurunan kematian ibu dan anak.</li><li>Peningkatan akses dan kualitas pelayanan kesehatan terutama bagi masyarakat miskin, daerah tertinggal, terpencil, perbatasan dan kepulauan.</li><li>Pemenuhan ketersediaan dan pengendalian obat, perbekalan kesehatan dan makanan.</li><li>Peningkatan pembiayaan kesehatan dan pengembangan kebijakan dan manajemen kesehatan.</li></ul></li><li>Dalam rangka mewujudkan misi ”Meningkatkan upaya pengendalian penyakit dan penanggulangan masalah kesehatan”, maka ditetapkan kebijakan :<ul><li>Penanganan masalah gizi kurang dan gizi buruk pada bayi, anak balita,ibu hamil dan menyusui</li><li>Peningkatan pencegahan, surveilans, deteksi dini penyakit menular, penyakit tidak menular, penyakit potensial KLB/wabah dan ancaman epidemi yang dikuti dengan pengobatan sesuai standar serta penanggulangan masalah kesehatan lainnya dan bencana.</li></ul></li><li>Dalam rangka mewujudkan misi ”Meningkatkan dan mendayagunakan sumberdaya kesehatan”, maka ditetapkan kebijakan: Penyediaan tenaga kesehatan di rumah sakit, balai kesehatan, puskesmas dan jaringannya serta mendayagunakan tenaga kesehatan yang kompeten sesuai kebutuhan.</li></ol><div>&nbsp;</div>', NULL, '2022-06-25 23:49:26', '2022-06-25 23:49:26'),
(5, 1, 1, 5, 'Struktur Organisasi', 'post-images/Fzpa1N6DOYsKyH8r69bCkEQXwgFurdcgKwl7TkYf.png', NULL, NULL, '2022-06-25 23:49:49', '2022-06-25 23:49:49');

-- --------------------------------------------------------

--
-- Table structure for table `kabkota`
--

CREATE TABLE `kabkota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_kabkota` double NOT NULL,
  `nama_kabkota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabkota`
--

INSERT INTO `kabkota` (`id`, `kd_kabkota`, `nama_kabkota`, `created_at`, `updated_at`) VALUES
(1, 35.1, 'Banyuwangi', '2022-06-25 23:44:55', '2022-06-25 23:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_masyarakat`
--

CREATE TABLE `laporan_masyarakat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `what` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `who` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `when` date NOT NULL,
  `how` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informasitambahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_masyarakat`
--

INSERT INTO `laporan_masyarakat` (`id`, `nama`, `email`, `what`, `who`, `when`, `how`, `bukti`, `informasitambahan`, `created_at`, `updated_at`) VALUES
(1, 'Bagas', 'roberto.bagas7@gmail.com', 'A', 'A', '2022-06-24', 'A', 'post-document/FWrVVuN5VHu7DC4oW141ZpjMSDOConvyb9caRXyX.pdf', 'A', '2022-06-26 00:24:19', '2022-06-26 00:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_12_101144_create_bidangs_table', 1),
(6, '2022_06_12_101211_create_institusis_table', 1),
(7, '2022_06_12_131641_create_profils_table', 1),
(8, '2022_06_16_062011_create_profil_pejabats_table', 1),
(9, '2022_06_17_004143_create_pejabats_table', 1),
(10, '2022_06_17_161859_create_ppids_table', 1),
(11, '2022_06_18_111725_create_public_corners_table', 1),
(12, '2022_06_19_010447_create_sosial_media_popups_table', 1),
(13, '2022_06_19_030146_create_kabkotas_table', 1),
(14, '2022_06_19_030337_create_spms_table', 1),
(15, '2022_06_19_054257_create_data_table', 1),
(16, '2022_06_19_062929_create_agendas_table', 1),
(17, '2022_06_19_064111_create_posts_table', 1),
(18, '2022_06_22_234319_create_laporan_masyarakats_table', 1),
(19, '2022_06_23_013353_create_survey_kepuasans_table', 1),
(20, '2022_06_24_025908_create_survey_puskemas_table', 1),
(21, '2022_06_25_141611_create_web_dinkes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pejabat`
--

CREATE TABLE `pejabat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posisi_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pejabat`
--

INSERT INTO `pejabat` (`id`, `posisi_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Dinas Kesehatan', '2022-06-25 23:44:55', '2022-06-25 23:44:55'),
(2, 'Sekretariat', '2022-06-25 23:44:55', '2022-06-25 23:44:55'),
(3, 'Bidang Kesehatan Masyarakat', '2022-06-25 23:44:55', '2022-06-25 23:44:55'),
(4, 'Bidang Pencegahan dan Pengendalian Penyakit', '2022-06-25 23:44:55', '2022-06-25 23:44:55'),
(5, 'Bidang Pelayanan Kesehatan', '2022-06-25 23:44:55', '2022-06-25 23:44:55'),
(6, 'Bidang Sumber Daya Kesehatan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bidang_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tampil_headline` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `bidang_id`, `kategori_post`, `judul`, `slug`, `body`, `image`, `tampil_headline`, `created_at`, `updated_at`) VALUES
(1, 1, 'artikel', 'Sinergitas Pembinaan Obat Tradisional Di Jawa Timur', 'sinergitas-pembinaan-obat-tradisional-di-jawa-timur', '<div>Perda Pelindungan obat Tradisional sebagai&nbsp; wadah&nbsp; untuk Mewujudkan Kepedulian Terhadap Obat Tradisional Dengan Meningkatkan Sinergitas Pembinaan Obat Tradisional Di Jawa Timur. Pelindungan&nbsp; obat&nbsp; tradisional&nbsp; di&nbsp; Provinsi&nbsp; Jawa&nbsp; Timur&nbsp; dilakukan dengan membentuk Peraturan Daerah sebagai sebuah instrumen hukum untuk mengatur dan&nbsp; mengurus pelindungan obat tradisional. Dalam rangka memberikan pelindungan obat tradisional, Peraturan Daerah ini mengatur mengenai jenis obat tradisional, pengembangan bahan baku obat tradisional, penelitian dan pengembangan, pemanfaatan obat tradisional, pendaftaran tanaman obat dan karya intelektual obat tradisional, perizinan, sistem informasi, peran serta masyarakat, pembinaan dan pengawasan, sanksi administratif, dan ketentuan pidana.</div><div><br>Dalam mewujudkan tujuan Perda Nomor 6 Tahun 2020 tentang Perlindungan Obat Tradisional menjamin&nbsp; keamanan,&nbsp; khasiat/ manfaat&nbsp; dan&nbsp; mutu&nbsp; obat tradisional di Daerah; mengembangkan tanaman obat, hewan, biota laut, bahan baku obat tradisional, dan produk jadi di Daerah; meningkatkan pemanfaatan obat tradisional untuk upaya promotif, &nbsp; preventif, &nbsp; kuratif, &nbsp; dan/atau &nbsp; rehabiltatif &nbsp; di Daerah; mengurangi &nbsp; ketergantungan &nbsp; pada&nbsp; &nbsp; penggunaan &nbsp; obat sintesis dalam pelayanan kesehatan di Daerah.<br><br>Kepala Dinas Kesehatan Provinsi Jawa Timur dr Herlin Ferliana, M.Kes menyampaikan bahwa upaya dalam rangka mewujudkan tujuan tersebut dengan menyusun Pedoman Sinergitas Pembinaan Sarana Obat Tradisional yang diharapkan menjadi petunjuk bagi lintas sektor untuk berperan bersama dalam meningkatkan produkstivitas dan daya saing sarana obat tradiisonal di Jawa Timur, menyusun konsep pelaksanaan Perda melalui melakukan Pertemuan diskusi, Workshop untuk Menyusun&nbsp; Draf Pergub dengan lintas sektor dan lintas program terkait&nbsp; dan membuat Media KIE tentang Tata cara Perizinan Usaha Kecil Obat Tradisional. Turut serta pula berkolaborasi dengan menjalin Kerjasama dengan Instansi&nbsp; terkait melalui Kegiatan Kegiatan pertemuan yang bertema pengembangan obat Tradisional&nbsp;</div>', 'post-images/qFpzJ8dIlqrZZrJ8TRMtZMxXquTFJNOgvlVtvcl3.jpg', 1, '2022-06-26 00:03:59', '2022-06-26 00:03:59'),
(2, 1, 'berita', 'Gubernur Khofifah Resmikan RSUD Husada Prima', 'gubernur-khofifah-resmikan-rsud-husada-prima', '<div>RSUD Husada Prima Tak Hanya Layani Pengobatan Paru, tapi juga Miliki 4 Layanan Unggulan.&nbsp;<br>Gubernur Jawa Timur Khofifah Indar Parawansa meresmikan RSUD Husada Prima yang beralamat di Jalan Karang Tembok No 39 Surabaya, Jumat (15/4) siang.&nbsp; RSUD Husada Prima dahulu dikenal dengan RS Paru Surabaya. Sejak 26 April 2021, sesuai Peraturan Gubernur Jatim No. 11 Tahun 2021 RS Paru Surabaya ini berganti nama menjadi RSUD Husada Prima.&nbsp; Meski nama rumah sakitnya berubah, namun Gubernur Khofifah menekankan bahwa core business dari layanan kesehatan di rumah sakit ini tetap untuk paru. Justru dengan perubahan nama menjadi rumah sakit umum, layanan yang diberikan di rumah sakit ini semakin diperluas.&nbsp;</div><div><br>Gubernur Khofifah menjelaskan, pengembangan atau perluasan layanan pada RSUD Husada Prima adalah bagian dari jawaban atas tuntutan dan kebutuhan akan layanan kesehatan bagi masyarakat. Di RSUD Husada Prima kini, memiliki 4 layanan unggulan. Diantaranya TB (Tuberculosis) One Stop Service / TOSS yang mampu memberikan layanan satu pintu bagi penderita penyakit paru yang dilengkapi dengan deteksi dini penyakit paru. Layanan unggulan ERACS yaitu layanan persalinan yang menggunakan metode persalinan dengan teknik operasi yang telah dikembangkan untuk mempercepat proses pemulihan dibandingkan operasi CS biasa. Lalu Medical Check Up untuk pemeriksaan kesehatan menyeluruh yang lebih mudah, akurat, cepat, ekonomis dan nyaman; Klinik Tumbuh Kembang untuk layanan tumbuh kembang anak yang terpadu, terintegrasi, dan komprehensif yang didukung dengan dokter spesialis anak, psikolog, rehabilitasi medik, behavior terapis dan nutrisionis.</div><div><br>Selain itu, di RSUD Husada Prima juga menyediakan instalasi penunjang medik yang beroperasi selama 24 jam diantaranya kamar operasi infeksius dan non infeksius, pelayanan bank darah, laboratorium dan radiologi dan fasilitas penunjang lainnya.&nbsp;</div><div>Mengusung tagline profesional melayani sepenuh hati, RSUD Husada Prima diharapkan mampu memberikan layanan secara profesional dan prima bagi seluruh masyarakat yang sedang mengikhtiarkan kesembuhan melalui RSUD ini.&nbsp;<br><br></div><div>#jawatimur&nbsp;<br>#dinkesjatim&nbsp;<br>#rsudhusadaprima</div><div>@khofifah.ip&nbsp;<br>@jatimpemprov<br>@rsud_husadaprima<br>https://www.instagram.com/p/CcaIliiPaWa/?igshid=MDJmNzVkMjY=</div>', 'post-images/I5SoeihinV1irrPyXlDx7HhqKc89NxBGVN9MjRGj.jpg', 2, '2022-06-26 00:05:35', '2022-06-26 00:05:35'),
(3, 1, 'berita', 'Pemprov Jatim Terjunkan Tim Pelayanan Kesehatan Bergerak ke Kepulauan Terpencil', 'pemprov-jatim-terjunkan-tim-pelayanan-kesehatan-bergerak-ke-kepulauan-terpencil', '<div>Pemerintah Provinsi Jawa Timur melalui Dinas Kesehatan Provinsi Jawa Timur (Dinkes Jatim) kembali melaksanakan Pelayanan Kesehatan Bergerak (PKB) di Kepulauan Sapudi, Sumenep, Jawa Timur, selama 3 (tiga) hari, mulai Senin (21/03) hingga Rabu (23/03). Pelayanan Kesehatan Bergerak yang merupakan program prioritas Gubernur Khofifah @khofifah.ip ini bertujuan untuk lebih mendekatkan akses dan meningkatkan pelayanan kesehatan yang berkualitas kepada masyarakat. Tim PKB akan memberikan pelayanan kesehatan dasar dan spesialistik, antara lain pelayanan kesehatan umum, mata, bedah, obgyne dan pelayanan kesehatan lainnya kepada masyarakat kepulauan dengan target sasaran sebanyak 95 orang.&nbsp;</div><div><br>Dalam melakukan pelayanan atau tindakan kesehatan tersebut, masyarakat difasilitasi ruangan operasi bergerak yang disiapkan sesuai standar di kapal Ganda Nusantara 1 dan Ganda Nusantara 2 yang merapat di pelabuhan Tarebong. Tim tenaga kesehatan yang ikut serta dalam PKB kali ini sebanyak 25 orang, terdiri dari dokter spesialis bedah 2 orang, spesialis mata 1 orang, spesialis anastesi 3 orang, spesialis obgyne 1 orang, PPDS 2 orang, perawat 9 orang, bidan 2 orang, apoteker 1 orang, teknisi elektromedik 1 orang, CSSD 1 orang dan tenaga lainnya 2 orang. Tim PKB tersebut gabungan dari beberapa rumah sakit, antara lain RSUD Dr. Soetomo Surabaya, RSUD Dr. Saiful Anwar Malang, RSUD M.Noer Pamekasan, RS Mata Masyarakat Jawa Timur, dan RSU Anwar Sumenep.</div><div><br>#jatimpemprov<br>#pemprovjatim<br>#jawatimur&nbsp;<br>#dinkesjatim&nbsp;<br>#pelayanankesehatanbergerak<br>#kepulauanterpencil</div><div>@humasprovjatim @jatimpemprov @kominfojatim @promkesjatim<br>https://www.instagram.com/p/CbY02MOvWZN/?utm_medium=share_sheet</div>', 'post-images/BlYIWtxe3XWhLfTv3GIMV0PoofPY2aBCfzSUKbx6.jpg', 2, '2022-06-26 00:06:21', '2022-06-26 00:06:21'),
(4, 1, 'berita', 'Vaksinasi COVID-19 Booster di Jawa Timur Telah Dimulai', 'vaksinasi-covid-19-booster-di-jawa-timur-telah-dimulai', '<div>&nbsp;Pemerintah Provinsi Jawa Timur melalui Dinas Kesehatan Provinsi Jawa Timur (Dinkes Jatim) melaksanakan pencanangan Vaksinasi COVID-19&nbsp; Booster pada 12 Januari 2022. Kick Off atau dimulainya vaksinasi di Jatim ini, digelar di kantor Dinas Tenaga Kerja dan Transmigrasi (Disnakertrans Jatim), dengan sasaran sebanyak 100 orang yang terdiri dari guru, pengurus masjid, organisasi kemasyarakatan, Forum Kerukunan Umat Beragama (FKUB) dan Persatuan Wartawan Indonesia (PWI). Jenis vaksin yang digunakan adalah Astra Zeneca dan Moderna.<br><br>Kepala Dinkes Jatim, Dr. Erwin Astha Triyono, dr., Sp.PD.KPTI. menjelaskan bahwa program vaksin COVID-19&nbsp; booster yang diberikan secara gratis ini sudah bisa diberikan kepada lansia di seluruh kabupaten/kota, sedangkan sasaran non lansia baru dapat dilaksanakan di kabupaten/ kota yang sudah mencapai cakupan dosis 1 total minimal 70%, dan cakupan dosis 1 lansia minimal 60%. “Sasaran vaksinasi COVID-19 booster ditujukan bagi seluruh masyarakat usia 18 tahun ke atas dengan prioritas lansia dan penderita imunokompromais serta telah mendapatkan vaksinasi primer dosis lengkap minimal 6 bulan sebelumnya”. terang Dr. Erwin Bagi masyarakat yang mendapatkan vaksin primer atau vaksin dosis pertama dan kedua Sinovac, maka akan diberikan vaksin booster setengah dosis Pfizer atau Astra Zeneca. Sedangkan bagi masyarakat yang mendapatkan vaksin primer AstraZeneca atau vaksin dosis pertama dan kedua AstraZeneca akan diberikan vaksin booster setengah dosis Moderna. Vaksinasi booster ini akan dilakukan di fasilitas pelayanan kesehatan milik pemerintah seperti puskesmas, rumah sakit pemerintah, serta pos vaksinasi lainnya yang ditentukan oleh daerah masing masing.&nbsp;</div>', 'post-images/mle12RycqxIJVLQJFThuUbpKzvdZpWUQj960lfFz.jpg', 2, '2022-06-26 00:07:06', '2022-06-26 00:07:06'),
(5, 1, 'berita', 'Penerimaan Penghargaan “KI AWARDS” Tahun 2021', 'penerimaan-penghargaan-ki-awards-tahun-2021', '<div>Kepala Dinas Kesehatan Provinsi Jawa Timur, Dr. Erwin Astha Triyono, dr., Sp.PD., KPTI., menerima penghargaan “KI AWARDS” Tahun 2021 secara langsung dari Ketua Komisi Informasi Jawa Timur, Imadoeddin, S.Sos., Msi sebagai Badan Publik Informatif Kategori A dan Penyedia Informasi Setiap Saat Terbaik bertempat di Dinkes Jatim, Rabu (22/12).&nbsp;<br><br>Kepala Dinkes Jatim, Dr. Erwin Astha Triyono, dr., Sp.PD, KPTI menyampaikan terima kasih kepada Komisi Informasi dan seluruh pihak yang mendukung Dinkes Jatim untuk bisa lebih baik dalam hal Keterbukaan Informasi Publik serta berkomitmen untuk terus mengakselerasi keterbukaan informasi sebagai inovasi yang tiada henti.</div>', 'post-images/4AcFm0xzvIBfPH59YdskGJd3WWZ3qGJFnqjIO3jw.jpg', 1, '2022-06-26 00:07:44', '2022-06-26 00:07:44'),
(6, 2, 'artikel', 'Si Dia Penyelamat Bumil', 'si-dia-penyelamat-bumil', '<div>Dalam rangka mensinkronisasi data kesehatan ibu, Dinas Kesehatan Provinsi Jawa Timur melanunching Sinkronisasi Data dan Inovasi Buaian (Si Dia). Nantinya, dalam Si Dia ini, data yang sangat banyak tersebar di beberapa seksi lintas bidang akan diwadahi dalam satu dashboard yang dapat memberikan&nbsp; tampilan yang mudah untuk melakukan anlisa baik Provinsi dan Kabupaten/Kota. “Sinkronisasi Data Dan Inovasi Buaian (Si Dia) Penyelamat Bumil menjadi salah satu upaya dalam mendukung penurunan angka kematian ibu di Jawa Timur. Oleh karena itu, Dinas kesehatan provinsi Jawa timur melaksanakan Pertemuan Sosialisasi Sinkronisasi Data dan Inovasi Buaian (Si Dia) Penyelamat Bumil pada tanggal 02 Juni 2021 lalu,”ujar Kepala Dinas Kesehatan Provinsi Jawa Timur dr. Herlin Ferlina M.Kes.</div><div><br>Pertemuan ini diikuti Kepala Bidang Kesehatan Masyarakat Dinas Kesehatan Kabupaten Kota se-Jatim, lintas program di Dinkes Jatim dan Tim IT yang membantu dalam pengembangan program.&nbsp; Pertemuan ini juga diikuti secara online oleh kepala seksi Kesehatan Keluarga dan Gizi Masyarakat dan pemegang program data KIA se-Jawa Timur. Herlin menyampaikan beberapa poin penting, salah satunya adalah satu tahun harus ada satu inovasi yang di terbitkan.</div><div>\"Hari ini harus lebih baik dari hari kemarin. Harus ada langkah langkah diri kita yang harus di perbaiki,\"beber Herlin. Herlin juga mengingatkan, semua terkait pidato Bapak Presiden RI, bahwa Pembangunan SDM di Indionesia merupakan kegiatan prioritas dan hal itu dimulai sejak kehamilan ibu, oleh itu mari bersama-sama terus mengawal kesehatan ibu dan bayi, guna menurunkan AKI, AKB, dan Stunting. Banyak faktor yang mempengaruhi kematian ibu di antaranya adalah budaya, geografis, pendidikan, sosial, dan pelayanan kesehatan, maka perlu penanganan yang lengkap dari hulu sampai hilir.</div>', 'post-images/HIaFOBqTcaa7bLZK2jWyWjWLUmgQUJsOimADMPr9.jpg', 1, '2022-06-26 00:11:35', '2022-06-26 00:11:35'),
(7, 1, 'artikel', 'Agenda Forum Germas Tingkat Provinsi', 'forum-germas-tingkat-provinsi', '<div>Dinas Kesehatan Provinsi Jawa Timur telah menyelenggarakan Rapat Koordinasi Forum Germas Tingkat Provinsi pada tanggal 23 Maret 2021 bertempat di Ruang.Rapat Utama Bappeda Provinsi Jwa Timur. Pertemuan ini sebagai salah satu upaya dalam mendukung Gerakan masyarakat hidup sehat (Germas) di Jawa Timur untuk meningkatkan kesadaran, kemauan dan kemampuan bagi setiap orang untuk hidup sehat. Gerakan ini dapat membantu menurunkan risiko penyakit menular dan penyakit tidak menular.</div>', 'post-images/29ADd9wbVJVGfJ2wJhjPfSIe4Gf3ECCB5JDNjWUW.jpg', 1, '2022-06-26 00:18:19', '2022-06-26 00:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `ppid`
--

CREATE TABLE `ppid` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bidang_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `halaman_profil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `halaman_profil`, `created_at`, `updated_at`) VALUES
(1, 'Visi Misi', '2022-06-25 23:44:55', '2022-06-25 23:44:55'),
(2, 'Tujuan', '2022-06-25 23:44:55', '2022-06-25 23:44:55'),
(3, 'Motto', '2022-06-25 23:44:55', '2022-06-25 23:44:55'),
(4, 'Kebijakan', '2022-06-25 23:44:55', '2022-06-25 23:44:55'),
(5, 'Struktur Organisasi', '2022-06-25 23:44:55', '2022-06-25 23:44:55'),
(6, 'Profil Pejabat', '2022-06-25 23:44:55', '2022-06-25 23:44:55'),
(7, 'Maklumat', '2022-06-25 23:44:55', '2022-06-25 23:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `profil_pejabat`
--

CREATE TABLE `profil_pejabat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bidang_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pejabat_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil_pejabat`
--

INSERT INTO `profil_pejabat` (`id`, `bidang_id`, `user_id`, `pejabat_id`, `nama`, `detail_jabatan`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 1, 'Dr. dr. ERWIN ASTHA TRIYONO, Sp.Pd, K-PTI', 'KEPALA DINAS KESEHATAN PROVINSI JAWA TIMUR', 'post-images/j5ifDOXeJSnO40uZug9jokBI2ErldE903GNwH2ms.png', '2022-06-25 23:51:42', '2022-06-25 23:51:42'),
(2, NULL, 1, 2, 'HERTANTO, SKM, M.Si', 'SEKRETARIS', 'post-images/MUaADZO2NrYNUepc9N9kn7zXWmxXJxjg0saAPVo2.png', '2022-06-25 23:52:15', '2022-06-25 23:52:15'),
(3, NULL, 1, 2, 'NUGROHO EDY SUHARTO, S.H.M.AP', 'KASUBBAG TATA USAHA', 'post-images/y6W9U1H5fCfX9WBPbSXkD5zVTGdNDHRV8n6Tw4f8.png', '2022-06-25 23:52:43', '2022-06-25 23:52:43'),
(4, NULL, 1, 2, 'EVIE EFFENDI TRI CAHYONO, SKM, M.KES', 'KASUBBAG PENYUSUNAN PROGRAM DAN ANGGARAN', 'post-images/emwVTukNdvI5g1tiMsZEuXzuR41VUvnBPqRKmG1R.png', '2022-06-25 23:53:02', '2022-06-25 23:53:02'),
(5, NULL, 1, 2, 'FAHMI ASHAR, SKM.,M.Kes', 'KASUBBAG KEUANGAN', 'post-images/dU0cDl0RL6UX3mbAoTyJjabNW6mhirS8Z512omRs.png', '2022-06-25 23:53:20', '2022-06-25 23:53:20'),
(6, NULL, 1, 3, 'drg. VITRIA DEWI, Msi', 'KEPALA BIDANG KESEHATAN MASYARAKAT', 'post-images/Tv3klkJi9HphyiCtPsKjgINLwfsrZlSvyS923crK.png', '2022-06-25 23:53:45', '2022-06-25 23:53:45'),
(7, NULL, 1, 3, 'dr WARITSAH SUKARJIYAH', 'KEPALA SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'post-images/30ZTZqZNo81GnsppaOcjth9imcAQL7JzdSgMDqR0.png', '2022-06-25 23:54:02', '2022-06-25 23:54:02'),
(8, NULL, 1, 3, '-', 'KEPALA SEKSI KESEHATAN LINGKUNGAN, KESEHATAN KERJA DAN OLAH RAGA', 'post-images/EK6ButVwzpgnoHdH3h8FC64p37wTDTtKaEH047my.png', '2022-06-25 23:54:19', '2022-06-25 23:54:19'),
(9, NULL, 1, 3, 'WAHYUTI ERIE PRASTIWI, SKM., M.Kes', 'KEPALA SEKSI PROMOSI KESEHATAN', 'post-images/hjyIj0Njcqzeq5Yf0EP8ZZ8sE9b7BzMCJcgNxpNb.png', '2022-06-25 23:54:37', '2022-06-25 23:54:37'),
(10, NULL, 1, 4, 'Drg MARIA VINCENTIA SEMINAR MAHANANI, M.Kes', 'KEPALA BIDANG PENCEGAHAN DAN PENGENDALIAN PENYAKIT', 'post-images/eTh7QcR5GyNthOekRx8YeZfRaP2O17CVJ97TCcmn.png', '2022-06-25 23:54:59', '2022-06-25 23:54:59'),
(11, NULL, 1, 4, 'GITO HARTONO, SKM, M.Kes', 'KEPALA SEKSI SURVEILANS DAN IMUNISASI', 'post-images/CKuoifKKHTzeAMB5PRVBoK531BL8eBmNZ8HyGy0e.png', '2022-06-25 23:55:15', '2022-06-25 23:55:15'),
(12, NULL, 1, 4, 'drg. SULVY DWI ANGGRAINI, M.Kes', 'KEPALA SEKSI PENCEGAHAN DAN PENGENDALIAN PENYAKIT MENULAR', 'post-images/ff1NwQHPrwyqTbhRLPirKXZbtJtiBHvIoDcQY4wz.png', '2022-06-25 23:55:32', '2022-06-25 23:55:32'),
(13, NULL, 1, 4, '-', 'KEPALA SEKSI PENCEGAHAN DAN PENGENDALIAN PENYAKIT TIDAK MENULAR & KESEHATAN JIWA', 'post-images/E7ziYtT4uCeGhSpdmhCb9f20hudwNFsMTIRPxnGr.png', '2022-06-25 23:55:48', '2022-06-25 23:55:48'),
(14, NULL, 1, 5, 'drg LILI APRILIANTI', 'KEPALA BIDANG PELAYANAN KESEHATAN', 'post-images/rRFucR8h2jkWOVbT3c8r2wDApmb3DFelV9N0GIk0.png', '2022-06-25 23:56:17', '2022-06-25 23:56:17'),
(15, NULL, 1, 5, 'dr. A.A. AYU MAS KUSUMAYANTI, M.Kes', 'KEPALA SEKSI PELAYANAN KESEHATAN PRIMER', 'post-images/C5sqQHurL4rFmZGTG4hqaIethu7Xj31v5LzRPomo.png', '2022-06-25 23:56:36', '2022-06-25 23:56:36'),
(16, NULL, 1, 5, 'dr. NINIS HERLINA KIRANA SARI', 'KEPALA SEKSI PELAYANAN KESEHATAN RUJUKAN', 'post-images/YdoXjZ1t2tKiedPvcSiomFPFFScBck516AAu3lHq.png', '2022-06-25 23:57:00', '2022-06-25 23:57:00'),
(17, NULL, 1, 5, 'Dra ELMI MUFIDAH, Apt., M.Kes', 'KEPALA SEKSI PELAYANAN KESEHATAN TRADISIONAL', 'post-images/aBiZ2DPAW2L4F7ZcrGlWAMH8EvQF5hEPkCZ4QJk6.png', '2022-06-25 23:57:18', '2022-06-25 23:57:18'),
(18, NULL, 1, 6, 'MOHAMMAD YOTO, SKM, M.Kes', 'KEPALA BIDANG SUMBER DAYA KESEHATAN', 'post-images/OCmQY4iWE8zkGrKEGNdfzGJrCsdNW2OwnFppdtF0.png', '2022-06-25 23:57:35', '2022-06-26 00:02:04'),
(19, NULL, 1, 6, '-', 'KEPALA SEKSI KEFARMASIAN', 'post-images/eQxoXggKcWNyLoLcYc3gvekSQ3x5jvO4FxZJra3M.png', '2022-06-25 23:57:49', '2022-06-25 23:57:49'),
(20, NULL, 1, 6, 'Drs MUHAMMAD ARIF ZAIDI, Apt', 'KEPALA SEKSI ALAT KESEHATAN DAN PERBEKALAN RUMAH TANGGA', 'post-images/bLPUceWutG20vjWQiqMOHC0RrOC9l7rG75MYHezz.png', '2022-06-25 23:58:04', '2022-06-25 23:58:04'),
(21, NULL, 1, 6, '-', 'KEPALA SEKSI SUMBER DAYA MANUSIA KESEHATAN', 'post-images/bhoWxA6vOtTAmT9Hh1Qhra3EYiGTqsYlf06KGj9P.png', '2022-06-25 23:58:17', '2022-06-25 23:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `public_corner`
--

CREATE TABLE `public_corner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tampil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `public_corner`
--

INSERT INTO `public_corner` (`id`, `nama`, `nik`, `email`, `notelp`, `alamat`, `jenis_kelamin`, `pekerjaan`, `pertanyaan`, `jawaban`, `tampil`, `created_at`, `updated_at`) VALUES
(1, 'Bagas', '14600000000', 'bagas@gmail.com', '088212121212', 'Gresik', 'l', 'Mahasiswa', 'Mohon informasi lokasi disekitar surabaya atau sidoarjo untuk layanan vaksin gratis dosis 2 moderna di bulan juli', 'Terima kasih. stock vaksin sesuai ketersediaan, silahkan pilih link untuk informasi vaksin,dosis dan lokasinya untuk pendaftaran online, https://dinkes.jatimprov.go.id/index.php?r=site/berita_detail&id=842, atau berkunjung di instalgram surabayasehatku Dan bisa menghubungi Puskesmas dan Dinas Kesehatan Kab/Kota setempat. Salam sehat', '1', '2022-06-26 00:12:55', '2022-06-26 00:13:14'),
(2, 'Bagaskara', '1111111111', 'roberto.bagas7@gmail.com', '211521525122', 'Gresik', 'l', 'Mahasiswa', 'Apakah masih ada vaksin ke 2 astra zeneca? Saya sekarang tinggal di surabaya. Mohon info nya', 'Terima kasih. stock vaksin sesuai ketersediaan, silahkan pilih link untuk informasi vaksin,dosis dan lokasinya untuk pendaftaran online, https://dinkes.jatimprov.go.id/index.php?r=site/berita_detail&id=842, atau berkunjung di instalgram surabayasehatku Dan bisa menghubungi Puskesmas dan Dinas Kesehatan Kab/Kota setempat. .Salam sehat', '1', '2022-06-26 00:22:13', '2022-06-26 00:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `sosial_media_popup`
--

CREATE TABLE `sosial_media_popup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sosial_media` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hyperlink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spm_file`
--

CREATE TABLE `spm_file` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_kabkota` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `file_spm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tribulan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_kepuasan`
--

CREATE TABLE `survey_kepuasan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_survey` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kritiksaran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_puskesmas`
--

CREATE TABLE `survey_puskesmas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_survey` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan11` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masukan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `saranpenyempurnaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bagas Roberto', 'bagas', 'roberto.bagas7@gmail.com', NULL, '$2y$10$seUagFD2U7xSlfROY3vrsuiImw6/MCNjzsbRtobuTMgSsSFArI2uS', NULL, '2022-06-25 23:44:55', '2022-06-25 23:44:55'),
(2, 'Dr. Eloisa Wehner', 'ohoppe', 'schmitt.sydnee@example.org', '2022-06-25 23:44:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Wtu8ngQ0oY', '2022-06-25 23:44:56', '2022-06-25 23:44:56'),
(3, 'Ms. Alayna Schulist', 'gerlach.zachary', 'ystark@example.org', '2022-06-25 23:44:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oGarxzRfoP', '2022-06-25 23:44:56', '2022-06-25 23:44:56'),
(4, 'Elsie Gleason', 'verda89', 'yquigley@example.org', '2022-06-25 23:44:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LVe6bFCUd8', '2022-06-25 23:44:56', '2022-06-25 23:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `web_dinkes`
--

CREATE TABLE `web_dinkes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kabkota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tautan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_dinkes`
--

INSERT INTO `web_dinkes` (`id`, `kabkota`, `tautan`, `created_at`, `updated_at`) VALUES
(1, 'Website Dinas Kesehatan Kota Batu', 'http://dinkes.batukota.go.id/web', NULL, NULL),
(2, 'Website Dinas Kesehatan Kota Kediri', 'http://www.dinkes.kedirikab.go.id', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bidang_nama_bidang_unique` (`nama_bidang`),
  ADD UNIQUE KEY `bidang_slug_unique` (`slug`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `institusi`
--
ALTER TABLE `institusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabkota`
--
ALTER TABLE `kabkota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_masyarakat`
--
ALTER TABLE `laporan_masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppid`
--
ALTER TABLE `ppid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_pejabat`
--
ALTER TABLE `profil_pejabat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_corner`
--
ALTER TABLE `public_corner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `public_corner_nik_unique` (`nik`);

--
-- Indexes for table `sosial_media_popup`
--
ALTER TABLE `sosial_media_popup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spm_file`
--
ALTER TABLE `spm_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_kepuasan`
--
ALTER TABLE `survey_kepuasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_puskesmas`
--
ALTER TABLE `survey_puskesmas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_username_unique` (`username`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- Indexes for table `web_dinkes`
--
ALTER TABLE `web_dinkes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institusi`
--
ALTER TABLE `institusi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kabkota`
--
ALTER TABLE `kabkota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporan_masyarakat`
--
ALTER TABLE `laporan_masyarakat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pejabat`
--
ALTER TABLE `pejabat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ppid`
--
ALTER TABLE `ppid`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profil_pejabat`
--
ALTER TABLE `profil_pejabat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `public_corner`
--
ALTER TABLE `public_corner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sosial_media_popup`
--
ALTER TABLE `sosial_media_popup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spm_file`
--
ALTER TABLE `spm_file`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_kepuasan`
--
ALTER TABLE `survey_kepuasan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_puskesmas`
--
ALTER TABLE `survey_puskesmas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `web_dinkes`
--
ALTER TABLE `web_dinkes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
