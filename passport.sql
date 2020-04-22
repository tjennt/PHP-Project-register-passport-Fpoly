-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 11:13 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'huuloi', 'huynh huu loi', 'loihhps08942@fpt.edu.vn', NULL, '$2y$10$Dtom8h9tV9vcF0VNKk8H2Oee9WHuNS/aJk8FhnTdMT.ObYcX7yR6e', NULL, '2019-11-08 07:43:33', '2019-11-13 13:24:41', 0),
(2, 'thelinh', 'chau the linh', 'thelinh@gmail.com', NULL, '$2y$10$1zX7ocNLnxx1E.aXvUF6U./02b3NblUQLiz0WRbvAvjjE6jDX2lCq', NULL, '2019-11-08 08:06:58', '2019-11-08 08:06:58', 1),
(3, 'tantien', 'nguyen tan tien', 'tantien@gmail.com', NULL, '$2y$10$Kf5pzYm5R60HBSD7FR8sgOnEsTN5ZwHDFKilbWjG0D48ZDDIFHKeK', NULL, '2019-11-08 08:07:18', '2019-11-08 08:07:18', 2),
(4, 'vietbinh', 'nguyen viet binh', 'vietbinh@gmail.com', NULL, '$2y$10$XynNwjnS7eTzB90.gsyZ4e2e3XS1V/tenR62vbfJZLG/IXIMbLzv6', NULL, '2019-11-08 08:07:40', '2019-11-08 08:07:40', 3),
(5, 'admin', 'admin', 'loihh16101995@gmail.com', NULL, '$2y$10$TrFOh1VgjfKjVRIlZHumFecdPZqdL8gXhnEgNLxDewTbe.1fA3Yo.', NULL, '2019-11-11 09:42:16', '2019-11-11 09:42:16', 5),
(9, 'tantien1', 'Nguyenx tantien', 'toma.nguyen675@gmail.com', NULL, '$2y$10$OvqAvFQmxDJ8kFuL8FaSd.u.15KKiowPrKJ4z52FH0NUgp9KWUr9S', NULL, '2019-11-25 12:35:18', '2019-12-10 07:09:14', 2),
(10, 'wit', 'Tiền Tiến Tiên', 'toma.nguyen675@gmail.com', NULL, '$2y$10$DjeCfeHPvWhSVp1hMYWeBuEbmhJW5jlXHAkP1OHxrV9o5e39TILW2', NULL, '2019-12-07 01:30:51', '2019-12-12 01:27:19', 3);

-- --------------------------------------------------------

--
-- Table structure for table `congdan`
--

CREATE TABLE `congdan` (
  `id_congdan` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `noisinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmnd` int(11) NOT NULL,
  `ngaycap` date NOT NULL,
  `noicap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dantoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongiao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nghenghiep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dieukienxd` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dk` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `congdan`
--

INSERT INTO `congdan` (`id_congdan`, `hoten`, `ngaysinh`, `noisinh`, `gioitinh`, `cmnd`, `ngaycap`, `noicap`, `dantoc`, `tongiao`, `nghenghiep`, `dieukienxd`, `created_at`, `updated_at`, `dk`) VALUES
(2, 'banh thi lan', '2019-11-05', 'ha noi', 'nu', 147852369, '2019-11-05', 'tphcm', 'ede', 'khong', 'boc bat ho', 1, NULL, NULL, 0),
(3, 'thomas edison', '2019-11-03', 'viet nam', 'nam', 751478798, '2019-11-05', 'ha noi', 'kinh', 'khong', 'sinh vien', 0, NULL, NULL, 0),
(4, 'do thi tram anh', '2019-11-24', 'ha noi', 'nu', 789456741, '2019-11-02', 'ha noi', 'kinh', 'khong', 'vu nu', 1, NULL, NULL, 0),
(5, 'ngoc thi trinh', '2019-11-25', 'tphcm', 'nu', 12548414, '2019-11-05', 'tphcm', 'kinh', 'khong', 'nguoi mau', 1, NULL, NULL, 0),
(6, 'Nguyễn Thiên Đường', '1990-04-18', 'TPHCM', 'Nam', 918449281, '2011-11-11', 'Công an gò vấp', 'Kinh', 'Phật giáo', 'buôn smoke weed', 0, NULL, NULL, 0),
(7, 'Quách Thái Nguyên', '1990-05-16', 'Hà Nội', 'Nam', 592962852, '2005-05-19', 'Công An Hà nội', 'Kinh', 'Thiên chúa giáo', 'Giảng viên', 0, '2019-11-11 11:40:41', '2019-11-11 11:40:41', 0),
(8, 'Hoàng Thùy Linh', '1993-05-16', 'Hà Nội', 'Nữ', 594821352, '2008-05-19', 'Công An Hà Nội', 'Kinh', 'Phật giáo', 'Sinh viên', 0, '2019-11-11 11:43:09', '2019-11-11 11:43:09', 0),
(11, 'Hoàng Thu Thủy', '1983-05-16', 'Hà Nội', 'Nữ', 322278335, '2000-05-12', 'Công An TPHCM', 'Kinh', 'Phật giáo', 'Ceo smoke weed', 0, '2019-11-11 11:47:01', '2019-11-11 11:47:01', 0),
(12, 'Hoàng Thu Thủ', '1983-05-21', 'Hà Nội', 'Nữ', 522578432, '2000-05-12', 'Công An TPHCM', 'Kinh', 'Phật giáo', 'Ceo smoke weed', 0, '2019-11-11 11:47:48', '2019-11-11 11:47:48', 0),
(13, 'Châu Thị Thủng', '1983-05-21', 'Hà Nội', 'Nữ', 423432490, '2001-05-12', 'Công An Hà nội', 'Kinh', 'Không', 'Bán giấy tờ giả', 0, '2019-11-11 11:49:52', '2019-11-11 11:49:52', 0),
(14, 'Phạm Đen Vâu', '1999-05-21', 'Hà Nội', 'Nam', 753463569, '2001-05-05', 'Công An TPHCM', 'Kinh', 'Không', 'Rap dạo ở chợ lớn', 0, '2019-11-11 11:50:45', '2019-11-11 11:50:45', 0),
(15, 'Trần Bê U Bê Gờ', '2004-05-21', 'Cà Mau', 'Nam', 856767532, '2001-05-05', 'Công An Hà nội', 'Kinh', 'Không', 'Chơi game ở net', 0, '2019-11-11 11:51:39', '2019-11-11 11:51:39', 0),
(16, 'Nguyễn Cô Đơn', '2002-05-21', 'Tây Ninh', 'Nữ', 295029182, '2001-05-01', 'Công An TPHCM', 'Kinh', 'Không', 'Công an', 0, '2019-11-11 11:53:01', '2019-11-11 11:53:01', 0),
(17, 'Nguyễn Cô Hoàng Khang', '2002-05-21', 'Đà Nẵng', 'Nam', 432434579, '2001-05-01', 'Công An Hà nội', 'Kinh', 'Phật giáo', 'Bán dừa', 0, '2019-11-11 11:54:58', '2019-11-11 11:54:58', 0),
(18, 'Lam Khánh Huỳnh', '1982-02-11', 'Nha Trang', 'Nữ', 238395821, '2001-05-01', 'Công An TPHCM', 'Kinh', 'Phật giáo', 'Bán Đất', 0, '2019-11-11 11:54:58', '2019-11-11 11:54:58', 0),
(19, 'Phạm Quốc Thưởng', '1972-12-31', 'Bến Tre', 'Nam', 958230493, '2001-05-01', 'Công An TPHCM', 'Kinh', 'Phật giáo', 'Kinh doanh bất động sản', 0, '2019-11-11 11:54:58', '2019-11-11 11:54:58', 0),
(20, 'Lê A Đam', '1986-12-12', 'TPHCM', 'Nam', 102829278, '1994-07-26', 'Công An Hà nội', 'Kinh', 'Không', 'Kinh doanh muối', 0, '2019-11-11 11:54:58', '2019-11-11 11:54:58', 0),
(21, 'Nguyễn Thiên Hoàng Duy', '1973-10-11', 'TPHCM', 'Nam', 938302834, '1992-05-04', 'Công An TPHCM', 'Kinh', 'Thiên chúa giáo', 'Không', 0, '2019-11-11 11:54:58', '2019-11-11 11:54:58', 0),
(22, 'Nguyễn Thiên Mệnh', '1982-12-02', 'Kiên Giang', 'Nữ', 312931291, '1995-02-02', 'Công An Hà nội', 'Kinh', 'Thiên chúa giáo', 'Cắt tóc', 0, '2019-11-11 11:54:58', '2019-11-11 11:54:58', 0),
(23, 'Lê Cao Quốc Anh', '1990-05-02', 'Lâm Đồng', 'Nam', 932199209, '2003-09-15', 'Công An TPHCM', 'Kinh', 'Phật giáo', 'Nội trợ cho vợ', 0, '2019-11-11 11:54:58', '2019-11-11 11:54:58', 0),
(24, 'Hồ Đăng Tải', '1995-02-02', 'Phú Quốc', 'Nam', 189283891, '2001-05-01', 'Công An Hà nội', 'Kinh', 'Thiên chúa giáo', 'Không', 0, '2019-11-11 11:54:58', '2019-11-11 11:54:58', 0),
(25, 'Tài A Phú', '1992-05-21', 'Bình Thuận', 'Nam', 129298471, '2005-05-11', 'Công An TPHCM', 'Kinh', 'Phật giáo', 'Bán Vàng giả', 0, '2019-11-11 11:54:58', '2019-11-11 11:54:58', 0),
(26, 'Đàm Cô Cô', '1984-01-04', 'Bình Dương', 'Nữ', 912780391, '1990-05-22', 'Công An Hà nội', 'Kinh', 'Không', 'Bán Sinh tố ở chợ kim biên', 0, '2019-11-11 11:54:58', '2019-11-11 11:54:58', 0),
(27, 'Gấm Thiên Hoàng Thị', '1995-01-02', 'TPHCM', 'Nữ', 102918176, '2001-08-04', 'Công An TPHCM', 'Kinh', 'Phật giáo', 'Giảng viên tại 1 trường nổi tiếng ít người biết đến', 0, '2019-11-11 11:54:58', '2019-11-11 11:54:58', 0),
(28, 'Châu Nhuận Phát', '1994-12-12', 'Long An', 'Nam', 421039318, '1991-01-03', 'Công An Hà nội', 'Kinh', 'Thiên chúa giáo', 'Đánh bài ở ma cao', 0, '2019-11-11 11:54:58', '2019-11-11 11:54:58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hochieu`
--

CREATE TABLE `hochieu` (
  `id_hochieu` int(10) UNSIGNED NOT NULL,
  `id_congdan` int(10) UNSIGNED NOT NULL,
  `id_admin` int(10) UNSIGNED NOT NULL,
  `user_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysinh` date NOT NULL,
  `noisinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmnd` int(11) NOT NULL,
  `ngaycap` date NOT NULL,
  `noicap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dantoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongiao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `dc_thuong_tru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quanhuyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dc_chi_tiet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dc_tam_tru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quanhuyen_tt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dc_chi_tiet_tt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nghenghiep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_dc_coquan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hoten_cha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh_cha` date NOT NULL,
  `hoten_me` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh_me` date NOT NULL,
  `hoten_vochong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysinh_vochong` date DEFAULT NULL,
  `tinhtrang` int(11) NOT NULL,
  `timecode` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `note_error` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hansudung` datetime DEFAULT NULL,
  `tinhtranghsd` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hochieu`
--

INSERT INTO `hochieu` (`id_hochieu`, `id_congdan`, `id_admin`, `user_admin`, `checkcode`, `hoten`, `hinh`, `ngaysinh`, `noisinh`, `gioitinh`, `cmnd`, `ngaycap`, `noicap`, `dantoc`, `tongiao`, `email`, `sdt`, `dc_thuong_tru`, `quanhuyen`, `dc_chi_tiet`, `dc_tam_tru`, `quanhuyen_tt`, `dc_chi_tiet_tt`, `nghenghiep`, `ten_dc_coquan`, `hoten_cha`, `ngaysinh_cha`, `hoten_me`, `ngaysinh_me`, `hoten_vochong`, `ngaysinh_vochong`, `tinhtrang`, `timecode`, `created_at`, `updated_at`, `note_error`, `hansudung`, `tinhtranghsd`) VALUES
(9, 4, 3, 'tantien', '$2y$10$H2VBI1WeB5ULj2ozwELvX.8ZsvkK77iRfXmTer74wVdK8ovP1lr2u', 'do thi tram anh', '23839582178600044_704425010047839_265803946717609984_n.jpg', '2019-11-05', 'tphcm', 'nam', 789456741, '2019-11-05', 'tphcm', 'kinh', 'khong', 'phieu.boy1995@gmail.com', 123132121, 'tphcm', 'hoc mon', 'hoc mon', NULL, NULL, NULL, 'sinh vien', NULL, 'bca', '1970-09-05', 'abc', '1975-01-04', 'khong', '1990-10-01', 4, '2019-12-17 01:06:05', '2019-11-08 17:44:38', '2019-12-17 01:06:05', NULL, '2019-12-17 09:04:04', 1),
(14, 2, 3, 'tantien', '$2y$10$opi.UrgnkyoynhPTKLP0LeVtsT4DqUzaRxrALVOHhbx60b1eE8M2y', 'banh thi lan', '', '2019-11-05', 'tphcm', 'nam', 147852369, '2019-11-05', 'tphcm', 'kinh', 'khong', 'huuloi16101995@gmail.com', 123132121, 'tphcm', 'hoc mon', 'hoc mon', NULL, NULL, NULL, 'sinh vien', NULL, 'bca', '1970-09-05', 'abc', '1975-01-04', 'khong', '1990-10-01', 4, '2019-11-20 08:44:24', '2019-11-09 09:23:09', '2019-11-20 08:44:24', NULL, '2019-11-20 16:38:39', 1),
(17, 5, 3, 'tantien', '$2y$10$AshiSRW4fdNcysDn2WxRkO.qOinZrlAYyKw1zCWxPeJja9.C1u3da', '12321', '', '2019-11-05', 'tphcm', 'nam', 12548414, '2019-11-05', 'tphcm', 'kinh', 'khong', 'cascasssa5@gmail.com', 123132121, 'tphcm', 'hoc mon', 'hoc mon', NULL, NULL, NULL, 'sinh vien', NULL, 'bca', '1970-09-05', 'abc', '1975-01-04', 'khong', '1990-10-01', 4, '2019-11-19 08:04:02', '2019-11-09 09:28:49', '2019-11-19 08:01:54', NULL, '2019-11-18 21:44:54', 0),
(19, 6, 3, 'tantien', NULL, 'tantien', '', '2019-10-30', 'Cần Thơ', 'Nam', 918449281, '2019-11-13', 'Cần Thơ', 'Kinh', 'Không', 'toma.nguyen675@gmail.com', 902318374, 'tphcm', 'tphcm', '111', NULL, NULL, NULL, 'buôn smoke weed', NULL, 'Nguyễn Nguyễn', '2019-11-19', 'Trần Trấn', '2019-11-14', 'Ai mà biết', '2019-11-14', 4, '2019-11-27 14:38:54', '2019-11-11 11:23:50', '2019-11-18 13:48:46', NULL, '2019-11-20 00:00:00', 0),
(30, 27, 2, 'thelinh', NULL, 'Gam Thi Hoang Lien', '102918176img1.jpg', '2019-12-13', 'TP HCM', 'Nam', 102918176, '2019-12-26', 'TP HCM', 'Kinh', 'Không', 'phieu.boy1995@gmail.com', 933911814, 'Quan 1', 'Quan 1', 'Q1 TPHCM', NULL, NULL, NULL, 'Sinh Vien', 'TPHCM', 'Abccasc Qwew', '2019-12-04', 'Bcasd Aqwe', '2019-12-13', 'Dadasdas Csdqw', '2019-12-06', 1, '2019-12-18 03:40:07', '2019-12-17 00:34:37', '2019-12-18 03:36:24', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `luutru`
--

CREATE TABLE `luutru` (
  `id_luutru` int(10) UNSIGNED NOT NULL,
  `id_hochieu` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `luutru`
--

INSERT INTO `luutru` (`id_luutru`, `id_hochieu`, `created_at`, `updated_at`) VALUES
(5, 9, '2019-11-08 18:24:22', '2019-11-08 18:24:22'),
(9, 9, '2019-11-09 09:10:07', '2019-11-09 09:10:07'),
(10, 17, '2019-11-09 09:31:20', '2019-11-09 09:31:20'),
(11, 14, '2019-11-09 09:31:56', '2019-11-09 09:31:56'),
(15, 19, '2019-11-15 07:18:09', '2019-11-15 07:18:09'),
(16, 17, '2019-11-15 07:41:31', '2019-11-15 07:41:31'),
(18, 14, '2019-11-18 13:44:54', '2019-11-18 13:44:54'),
(19, 14, '2019-11-20 08:38:39', '2019-11-20 08:38:39'),
(21, 9, '2019-12-05 01:32:28', '2019-12-05 01:32:28'),
(23, 9, '2019-12-17 01:04:04', '2019-12-17 01:04:04');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhatky`
--

CREATE TABLE `nhatky` (
  `id_nhatky` int(10) UNSIGNED NOT NULL,
  `id_admin` int(10) UNSIGNED NOT NULL,
  `id_hochieu` int(10) UNSIGNED NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhatky`
--

INSERT INTO `nhatky` (`id_nhatky`, `id_admin`, `id_hochieu`, `tinhtrang`, `created_at`, `updated_at`) VALUES
(12, 1, 9, 1, '2019-11-08 19:22:13', '2019-11-08 19:22:13'),
(13, 2, 9, 2, '2019-11-08 19:31:02', '2019-11-08 19:31:02'),
(14, 3, 9, 3, '2019-11-08 19:32:22', '2019-11-08 19:32:22'),
(21, 1, 14, 1, '2019-11-09 09:30:37', '2019-11-09 09:30:37'),
(22, 1, 17, 1, '2019-11-09 09:30:42', '2019-11-09 09:30:42'),
(23, 2, 14, 2, '2019-11-09 09:30:50', '2019-11-09 09:30:50'),
(24, 2, 17, 2, '2019-11-09 09:31:13', '2019-11-09 09:31:13'),
(25, 3, 17, 3, '2019-11-09 09:31:20', '2019-11-09 09:31:20'),
(26, 3, 14, 3, '2019-11-09 09:31:56', '2019-11-09 09:31:56'),
(37, 1, 19, 1, '2019-11-13 09:48:42', '2019-11-13 09:48:42'),
(39, 1, 17, 1, '2019-11-15 06:51:18', '2019-11-15 06:51:18'),
(40, 2, 17, 2, '2019-11-15 07:05:00', '2019-11-15 07:05:00'),
(41, 2, 19, 2, '2019-11-15 07:13:13', '2019-11-15 07:13:13'),
(43, 3, 19, 3, '2019-11-15 07:18:09', '2019-11-15 07:18:09'),
(44, 3, 17, 3, '2019-11-15 07:41:31', '2019-11-15 07:41:31'),
(48, 3, 14, 3, '2019-11-18 13:44:54', '2019-11-18 13:44:54'),
(49, 1, 14, 1, '2019-11-20 08:37:43', '2019-11-20 08:37:43'),
(50, 2, 14, 2, '2019-11-20 08:38:27', '2019-11-20 08:38:27'),
(51, 3, 14, 3, '2019-11-20 08:38:39', '2019-11-20 08:38:39'),
(55, 1, 9, 1, '2019-12-05 01:31:06', '2019-12-05 01:31:06'),
(56, 2, 9, 2, '2019-12-05 01:32:16', '2019-12-05 01:32:16'),
(57, 3, 9, 3, '2019-12-05 01:32:28', '2019-12-05 01:32:28'),
(62, 1, 9, 1, '2019-11-08 19:22:13', '2019-11-08 19:22:13'),
(63, 2, 9, 2, '2019-11-08 19:31:02', '2019-11-08 19:31:02'),
(64, 3, 9, 3, '2019-11-08 19:32:22', '2019-11-08 19:32:22'),
(65, 1, 14, 1, '2019-11-09 09:30:37', '2019-11-09 09:30:37'),
(66, 1, 17, 1, '2019-11-09 09:30:42', '2019-11-09 09:30:42'),
(67, 2, 14, 2, '2019-11-09 09:30:50', '2019-11-09 09:30:50'),
(68, 2, 17, 2, '2019-11-09 09:31:13', '2019-11-09 09:31:13'),
(69, 3, 17, 3, '2019-11-09 09:31:20', '2019-11-09 09:31:20'),
(70, 3, 14, 3, '2019-11-09 09:31:56', '2019-11-09 09:31:56'),
(74, 1, 19, 1, '2019-11-13 09:48:42', '2019-11-13 09:48:42'),
(75, 1, 17, 1, '2019-11-15 06:51:18', '2019-11-15 06:51:18'),
(76, 2, 17, 2, '2019-11-15 07:05:00', '2019-11-15 07:05:00'),
(77, 2, 19, 2, '2019-11-15 07:13:13', '2019-11-15 07:13:13'),
(78, 3, 19, 3, '2019-11-15 07:18:09', '2019-11-15 07:18:09'),
(79, 3, 17, 3, '2019-11-15 07:41:31', '2019-11-15 07:41:31'),
(80, 3, 14, 3, '2019-11-18 13:44:54', '2019-11-18 13:44:54'),
(81, 1, 14, 1, '2019-11-20 08:37:43', '2019-11-20 08:37:43'),
(82, 2, 14, 2, '2019-11-20 08:38:27', '2019-11-20 08:38:27'),
(83, 3, 14, 3, '2019-11-20 08:38:39', '2019-11-20 08:38:39'),
(87, 1, 9, 1, '2019-12-05 01:31:06', '2019-12-05 01:31:06'),
(88, 2, 9, 2, '2019-12-05 01:32:16', '2019-12-05 01:32:16'),
(89, 3, 9, 3, '2019-12-05 01:32:28', '2019-12-05 01:32:28'),
(94, 1, 9, 1, '2019-11-08 19:22:13', '2019-11-08 19:22:13'),
(95, 2, 9, 2, '2019-11-08 19:31:02', '2019-11-08 19:31:02'),
(96, 3, 9, 3, '2019-11-08 19:32:22', '2019-11-08 19:32:22'),
(97, 1, 14, 1, '2019-11-09 09:30:37', '2019-11-09 09:30:37'),
(98, 1, 17, 1, '2019-11-09 09:30:42', '2019-11-09 09:30:42'),
(99, 2, 14, 2, '2019-11-09 09:30:50', '2019-11-09 09:30:50'),
(100, 2, 17, 2, '2019-11-09 09:31:13', '2019-11-09 09:31:13'),
(101, 3, 17, 3, '2019-11-09 09:31:20', '2019-11-09 09:31:20'),
(102, 3, 14, 3, '2019-11-09 09:31:56', '2019-11-09 09:31:56'),
(106, 1, 19, 1, '2019-11-13 09:48:42', '2019-11-13 09:48:42'),
(107, 1, 17, 1, '2019-11-15 06:51:18', '2019-11-15 06:51:18'),
(108, 2, 17, 2, '2019-11-15 07:05:00', '2019-11-15 07:05:00'),
(109, 2, 19, 2, '2019-11-15 07:13:13', '2019-11-15 07:13:13'),
(110, 3, 19, 3, '2019-11-15 07:18:09', '2019-11-15 07:18:09'),
(111, 3, 17, 3, '2019-11-15 07:41:31', '2019-11-15 07:41:31'),
(112, 1, 9, 1, '2019-11-08 19:22:13', '2019-11-08 19:22:13'),
(113, 2, 9, 2, '2019-11-08 19:31:02', '2019-11-08 19:31:02'),
(114, 3, 9, 3, '2019-11-08 19:32:22', '2019-11-08 19:32:22'),
(115, 1, 14, 1, '2019-11-09 09:30:37', '2019-11-09 09:30:37'),
(116, 1, 17, 1, '2019-11-09 09:30:42', '2019-11-09 09:30:42'),
(117, 2, 14, 2, '2019-11-09 09:30:50', '2019-11-09 09:30:50'),
(118, 2, 17, 2, '2019-11-09 09:31:13', '2019-11-09 09:31:13'),
(119, 3, 17, 3, '2019-11-09 09:31:20', '2019-11-09 09:31:20'),
(120, 3, 14, 3, '2019-11-09 09:31:56', '2019-11-09 09:31:56'),
(124, 1, 19, 1, '2019-11-13 09:48:42', '2019-11-13 09:48:42'),
(125, 1, 17, 1, '2019-11-15 06:51:18', '2019-11-15 06:51:18'),
(126, 2, 17, 2, '2019-11-15 07:05:00', '2019-11-15 07:05:00'),
(127, 2, 19, 2, '2019-11-15 07:13:13', '2019-11-15 07:13:13'),
(128, 3, 19, 3, '2019-11-15 07:18:09', '2019-11-15 07:18:09'),
(129, 3, 17, 3, '2019-11-15 07:41:31', '2019-11-15 07:41:31'),
(130, 3, 14, 3, '2019-11-18 13:44:54', '2019-11-18 13:44:54'),
(131, 1, 14, 1, '2019-11-20 08:37:43', '2019-11-20 08:37:43'),
(132, 2, 14, 2, '2019-11-20 08:38:27', '2019-11-20 08:38:27'),
(133, 3, 14, 3, '2019-11-20 08:38:39', '2019-11-20 08:38:39'),
(138, 1, 9, 1, '2019-12-16 05:54:42', '2019-12-16 05:54:42'),
(139, 2, 9, 2, '2019-12-17 01:02:43', '2019-12-17 01:02:43'),
(140, 3, 9, 3, '2019-12-17 01:04:04', '2019-12-17 01:04:04'),
(146, 1, 30, 1, '2019-12-18 03:27:19', '2019-12-18 03:27:19'),
(147, 2, 30, 2, '2019-12-18 03:28:37', '2019-12-18 03:28:37'),
(148, 2, 30, 2, '2019-12-18 03:33:13', '2019-12-18 03:33:13'),
(149, 2, 30, 2, '2019-12-18 03:36:24', '2019-12-18 03:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `congdan`
--
ALTER TABLE `congdan`
  ADD PRIMARY KEY (`id_congdan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hochieu`
--
ALTER TABLE `hochieu`
  ADD PRIMARY KEY (`id_hochieu`),
  ADD KEY `hochieu_id_admin_foreign` (`id_admin`),
  ADD KEY `hochieu_id_congdan_foreign` (`id_congdan`);

--
-- Indexes for table `luutru`
--
ALTER TABLE `luutru`
  ADD PRIMARY KEY (`id_luutru`),
  ADD KEY `luutru_id_hochieu_foreign` (`id_hochieu`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhatky`
--
ALTER TABLE `nhatky`
  ADD PRIMARY KEY (`id_nhatky`),
  ADD KEY `nhatky_id_admin_foreign` (`id_admin`),
  ADD KEY `nhatky_id_hochieu_foreign` (`id_hochieu`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `congdan`
--
ALTER TABLE `congdan`
  MODIFY `id_congdan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hochieu`
--
ALTER TABLE `hochieu`
  MODIFY `id_hochieu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `luutru`
--
ALTER TABLE `luutru`
  MODIFY `id_luutru` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nhatky`
--
ALTER TABLE `nhatky`
  MODIFY `id_nhatky` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hochieu`
--
ALTER TABLE `hochieu`
  ADD CONSTRAINT `hochieu_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hochieu_id_congdan_foreign` FOREIGN KEY (`id_congdan`) REFERENCES `congdan` (`id_congdan`) ON DELETE CASCADE;

--
-- Constraints for table `luutru`
--
ALTER TABLE `luutru`
  ADD CONSTRAINT `luutru_id_hochieu_foreign` FOREIGN KEY (`id_hochieu`) REFERENCES `hochieu` (`id_hochieu`) ON DELETE CASCADE;

--
-- Constraints for table `nhatky`
--
ALTER TABLE `nhatky`
  ADD CONSTRAINT `nhatky_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nhatky_id_hochieu_foreign` FOREIGN KEY (`id_hochieu`) REFERENCES `hochieu` (`id_hochieu`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
