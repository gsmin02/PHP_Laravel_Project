-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 25-01-27 02:46
-- 서버 버전: 10.5.25-MariaDB
-- PHP 버전: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `sale44`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `cos`
--

CREATE TABLE `cos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coname` varchar(20) NOT NULL,
  `cotel` varchar(11) NOT NULL,
  `cokind` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `cos`
--

INSERT INTO `cos` (`id`, `coname`, `cotel`, `cokind`, `created_at`, `updated_at`) VALUES
(1, '관리주식회사', '01012341234', '대기업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(2, '노기주식회사', '01094818426', '개인', '2023-12-31 15:00:01', '2024-11-21 06:03:38'),
(3, '배안주식회사', '01096029758', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(4, '윤상주식회사', '01091834099', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(5, '남윤주식회사', '01099745951', '중소기업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(6, '고은주식회사', '01066752295', '대기업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(7, '이창주식회사', '01094867737', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(8, '강주주식회사', '01097175378', '개인', '2023-12-31 15:00:01', '2024-11-21 06:01:45'),
(9, '김상주식회사', '01073282001', '벤처', '2023-12-31 15:00:01', '2024-11-21 06:03:04'),
(10, '김강주식회사', '01090696074', '대기업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(11, '양구주식회사', '01089906973', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(12, '박철주식회사', '01064517732', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(13, '이조주식회사', '01064725207', '중소기업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(14, '김안주식회사', '01047835553', '개인', '2023-12-31 15:00:01', '2024-11-21 06:03:14'),
(15, '황전주식회사', '01098549069', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(16, '원정주식회사', '01097953309', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(17, '김성주식회사', '01071564586', '개인', '2023-12-31 15:00:01', '2024-11-21 06:03:09'),
(18, '윤고주식회사', '01046674402', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(19, '손양주식회사', '01093091586', '대기업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(20, '서천주식회사', '01029609537', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(21, '최미주식회사', '01095919293', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(22, '현자주식회사', '01045525203', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(23, '고연주식회사', '01039039565', '벤처', '2023-12-31 15:00:01', '2024-11-21 06:01:50'),
(24, '임양주식회사', '01047441735', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(25, '김진주식회사', '01029752059', '개인', '2023-12-31 15:00:01', '2024-11-21 06:03:19'),
(26, '강명주식회사', '01017367547', '개인', '2023-12-31 15:00:01', '2024-11-21 06:01:37'),
(27, '김동주식회사', '01032374556', '중소기업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(28, '박지주식회사', '01032583779', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(29, '이양주식회사', '01022293628', '대기업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(30, '박자주식회사', '01035604903', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(31, '김다주식회사', '01029114044', '개인', '2023-12-31 15:00:01', '2024-11-21 06:02:45'),
(32, '임전주식회사', '01030126920', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(33, '최구주식회사', '01023734840', '중소기업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(34, '정도주식회사', '01098643720', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(35, '이영주식회사', '01065956653', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(36, '조경주식회사', '01072265535', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(37, '김만주식회사', '01034670483', '개인', '2023-12-31 15:00:01', '2024-11-21 06:03:00'),
(38, '박만주식회사', '01044184218', '개인', '2023-12-31 15:00:01', '2024-11-21 06:03:43'),
(39, '김현주식회사', '01024095317', '중소기업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(40, '박솔주식회사', '01075709030', '개인', '2023-12-31 15:00:01', '2024-11-21 06:03:47'),
(41, '권하주식회사', '01024517990', '개인', '2023-12-31 15:00:01', '2024-11-21 06:02:39'),
(42, '이성주식회사', '01036524847', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(43, '장도주식회사', '01035337719', '대기업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(44, '고일주식회사', '01096943617', '개인', '2023-12-31 15:00:01', '2024-11-21 06:03:27'),
(45, '황지주식회사', '01091057558', '벤처기업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(46, '정기주식회사', '01025764748', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(47, '양자주식회사', '01080972732', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(48, '윤성주식회사', '01030685978', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(49, '최기주식회사', '01027595634', '대기업', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(50, '오시주식회사', '01020203572', '개인사업', '2023-12-31 15:00:01', '2023-12-31 15:00:01');

-- --------------------------------------------------------

--
-- 테이블 구조 `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `gubuns`
--

CREATE TABLE `gubuns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `gubuns`
--

INSERT INTO `gubuns` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '장난감', '2024-09-23 15:12:50', '2024-12-18 15:13:18'),
(2, '하우스', '2024-09-23 15:12:54', '2024-12-18 15:13:32'),
(3, '패션', '2024-09-23 15:13:57', '2024-12-18 15:10:44'),
(4, '산책', '2024-09-23 15:14:02', '2024-12-18 15:10:57'),
(6, '영양제', '2024-09-24 11:55:02', '2024-12-18 15:14:00'),
(7, '간식', '2024-10-06 15:07:35', '2024-12-18 15:12:59'),
(8, '미용용품', '2024-10-06 15:08:07', '2024-12-18 15:12:33'),
(11, '사료', '2024-10-10 05:42:09', '2024-12-18 15:14:38'),
(12, '배변용품', '2024-10-10 05:43:31', '2024-12-18 15:12:12'),
(18, '잡화', '2024-11-12 07:09:55', '2024-12-18 15:11:26');

-- --------------------------------------------------------

--
-- 테이블 구조 `jangbus`
--

CREATE TABLE `jangbus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `io` tinyint(4) DEFAULT NULL,
  `writeday` date DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `numi` int(11) DEFAULT NULL,
  `numo` int(11) DEFAULT NULL,
  `prices` int(11) DEFAULT NULL,
  `bigo` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `jangbus`
--

INSERT INTO `jangbus` (`id`, `io`, `writeday`, `products_id`, `price`, `numi`, `numo`, `prices`, `bigo`, `created_at`, `updated_at`) VALUES
(1, 0, '2024-09-24', 2, 2000, 2, 0, 4000, '개인', '2024-09-24 13:23:34', '2024-09-24 13:41:19'),
(3, 1, '2024-09-25', 2, 2000, 0, 10, 20000, NULL, '2024-09-24 15:11:29', '2024-09-24 15:11:29'),
(4, 0, '2024-10-02', 2, 2000, 15, 0, 30000, 'B사', '2024-10-02 14:36:47', '2024-10-02 14:36:47'),
(5, 0, '2024-10-02', 3, 1500, 5, 0, 7500, 'B사', '2024-10-02 14:37:19', '2024-10-02 14:37:19'),
(6, 0, '2024-10-10', 5, 1500, 15, 0, 22500, '농심', '2024-10-10 05:45:26', '2024-10-10 05:45:26'),
(7, 1, '2024-10-10', 5, 1500, 0, 8, 12000, 'B사', '2024-10-10 06:09:33', '2024-10-10 06:09:33'),
(8, 0, '2024-10-10', 6, 1500, 20, 0, 30000, '해태', '2024-10-10 06:10:13', '2024-10-10 06:10:13'),
(9, 1, '2024-10-10', 6, 1500, 0, 15, 22500, '해태', '2024-10-10 06:10:46', '2024-10-10 06:10:46'),
(10, 1, '2024-10-10', 6, 1500, 0, 5, 7500, NULL, '2024-10-10 06:30:57', '2024-10-10 06:30:57'),
(11, 0, '2024-12-16', 7, 6000, 45, 0, 270000, NULL, '2024-12-16 08:54:22', '2024-12-16 08:54:22'),
(12, 0, '2024-12-19', 2, 4000, 40, 0, 160000, NULL, '2024-12-18 15:28:50', '2024-12-18 15:28:50'),
(13, 0, '2024-12-19', 10, 67000, 16, 0, 1072000, NULL, '2024-12-18 15:28:58', '2024-12-18 15:28:58'),
(14, 0, '2024-12-19', 2, 4000, 102, 0, 408000, NULL, '2024-12-18 15:29:10', '2024-12-18 15:29:10'),
(15, 1, '2024-12-19', 2, 4000, 0, 86, 344000, NULL, '2024-12-18 15:29:31', '2024-12-18 15:29:31'),
(16, 0, '2024-12-19', 7, 38000, 18, 0, 684000, NULL, '2024-12-18 15:29:42', '2024-12-18 15:29:42'),
(17, 1, '2024-12-19', 7, 38000, 0, 38, 1444000, NULL, '2024-12-18 15:30:00', '2024-12-18 15:30:00'),
(18, 0, '2024-12-19', 3, 18600, 102, 0, 1897200, NULL, '2024-12-18 15:30:16', '2024-12-18 15:30:16'),
(19, 1, '2024-12-19', 3, 18600, 0, 72, 1339200, NULL, '2024-12-18 15:30:51', '2024-12-18 15:30:51'),
(20, 1, '2024-12-19', 2, 4000, 0, 44, 176000, NULL, '2024-12-18 15:30:59', '2024-12-18 15:30:59');

-- --------------------------------------------------------

--
-- 테이블 구조 `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `rank` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `members`
--

INSERT INTO `members` (`id`, `uid`, `pwd`, `name`, `tel`, `rank`, `created_at`, `updated_at`) VALUES
(2, 'id2', '1234', '노기효', '01094818426', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(3, 'id3', '1234', '배안수', '01096029758', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(4, 'id4', '1234', '윤상기', '01091834099', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(5, 'id5', '1234', '남윤주', '01099745951', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(6, 'id6', '1234', '고은이', '01066752295', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(7, 'id7', '1234', '이창기', '01094867737', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(8, 'id8', '1234', '강주석', '01097175378', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(9, 'id9', '1234', '김상준', '01073282001', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(10, 'id10', '1234', '김강현', '01090696074', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(11, 'id11', '1234', '양구민', '01089906973', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(12, 'id12', '1234', '박철완', '01064517732', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(13, 'id13', '1234', '이조규', '01064725207', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(14, 'id14', '1234', '김안기', '01047835553', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(15, 'id15', '1234', '황전하', '01098549069', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(16, 'id16', '1234', '원정현', '01097953309', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(17, 'id17', '1234', '김성현', '01071564586', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(18, 'id18', '1234', '윤고영', '01046674402', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(19, 'id19', '1234', '손양진', '01093091586', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(20, 'id20', '1234', '서천범', '01029609537', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(21, 'id21', '1234', '최미은', '01095919293', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(22, 'id22', '1234', '현자석', '01045525203', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(23, 'id23', '1234', '고연진', '01039039565', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(24, 'id24', '1234', '임양진', '01047441735', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(25, 'id25', '1234', '김진형', '01029752059', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(26, 'id26', '1234', '강명한', '01017367547', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(27, 'id27', '1234', '김동진', '01032374556', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(28, 'id28', '1234', '박지영', '01032583779', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(29, 'id29', '1234', '이양성', '01022293628', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(30, 'id30', '1234', '박자형', '01035604903', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(31, 'id31', '1234', '김다우', '01029114044', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(32, 'id32', '1234', '임전철', '01030126920', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(33, 'id33', '1234', '최구선', '01023734840', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(34, 'id34', '1234', '정도솔', '01098643720', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(35, 'id35', '1234', '이영석', '01065956653', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(36, 'id36', '1234', '조경현', '01072265535', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(38, 'id38', '1234', '박만석', '01044184218', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(39, 'id39', '1234', '김현진', '01024095317', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(40, 'id40', '1234', '박솔희', '01075709030', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(41, 'id41', '1234', '권하미', '01024517990', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(42, 'id42', '1234', '이성민', '01036524847', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(43, 'id43', '1234', '장도운', '01035337719', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(44, 'id44', '1234', '고일남', '01096943617', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(45, 'id45', '1234', '황지우', '01091057558', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(46, 'id46', '1234', '정기근', '01025764748', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(47, 'id47', '1234', '양자승', '01080972732', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(48, 'id48', '1234', '윤성현', '01030685978', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(49, 'id49', '1234', '최기문', '01027595634', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(50, 'id50', '1234', '오시헌', '01020203572', 0, '2020-12-31 15:00:01', '2020-12-31 15:00:01'),
(51, 'admin', '1234', '관리자', '01012341234', 1, '2024-09-12 09:03:46', '2024-09-19 06:27:13'),
(52, 'test', 'test', '테스트', '01011111111', 0, '2024-09-19 05:17:03', '2024-09-19 05:17:03'),
(54, 'test_man', '1234', '테스트_남자', '01012341234', 0, '2024-11-14 09:33:05', '2024-11-14 09:33:05');

-- --------------------------------------------------------

--
-- 테이블 구조 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_12_153347_create_members_table', 1),
(6, '2024_09_23_235355_create_gubuns_table', 2),
(7, '2024_09_24_201853_create_products_table', 3),
(8, '2024_09_24_214412_create_jangbus_table', 4),
(9, '2024_11_14_161822_create_workers_table', 5),
(10, '2024_11_21_140809_create_cos_table', 6),
(11, '2024_12_11_002607_create_one__gubuns_table', 7),
(12, '2024_12_11_003048_create_one__concepts_table', 8),
(13, '2024_12_11_003317_create_one__members_table', 9),
(14, '2024_12_11_003618_create_one__products_table', 10),
(15, '2024_12_11_003857_create_one__companies_table', 11),
(16, '2024_12_11_004052_create_one__ledgers_table', 12),
(22, '2024_12_13_235317_modify__one__member', 13),
(23, '2024_12_16_152022_modify__one__product', 13),
(24, '2024_12_16_152238_modify__one__product', 13);

-- --------------------------------------------------------

--
-- 테이블 구조 `one__companies`
--

CREATE TABLE `one__companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `kind` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `one__companies`
--

INSERT INTO `one__companies` (`id`, `name`, `tel`, `kind`, `created_at`, `updated_at`) VALUES
(1, 'c1', '01012341234', 'Large Corp', '2024-12-13 17:16:29', '2024-12-13 17:16:29'),
(2, 'c2', '01012341234', 'SME', '2024-12-13 17:16:44', '2024-12-13 17:16:44'),
(3, 'c3', '01085208520', 'Venture', '2024-12-13 17:16:53', '2024-12-13 17:16:53'),
(5, '123', '01012340123', 'Venture', '2024-12-13 17:39:20', '2024-12-13 17:39:20'),
(6, '8520', '01085208520', 'Sole Prop', '2024-12-13 17:39:29', '2024-12-13 17:39:29'),
(7, '95210', '01085199519', 'SME', '2024-12-13 17:41:07', '2024-12-13 17:41:07');

-- --------------------------------------------------------

--
-- 테이블 구조 `one__concepts`
--

CREATE TABLE `one__concepts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `one__concepts`
--

INSERT INTO `one__concepts` (`id`, `name`, `description`, `picture`, `created_at`, `updated_at`) VALUES
(7, 'Set the table for the holiday season', 'Embrace the holiday season with a table that combines warmth and contemporary elegance for every gathering. Celebrate the joy found in every detail – from the craftsmanship of your designs to the art of table setting and serving during the festive period. Transparent glasses, highlighted by the pop of a red cherry, pair beautifully with stainless steel Italian ice cups and the soft glazes of various tableware and candleholder collections. Create a memorable, inviting table that captures the spirit of the holidays.', 'concept_1.jpg', '2024-12-16 18:21:57', '2024-12-16 18:21:57'),
(8, 'Autumnal Living Room', 'As cooler days approach, embrace the cozy nature of autumn by incorporating textures and subtle touches that create warmth and invite relaxation into your home. Combine the handwoven texture of a Kelim rug with the everyday comfort of a soft seating collection, or add a gentle, atmospheric glow by lighting a candle in a small, elegant holder.11\r\n\r\nExplore a selection of accessories, furniture, and lighting to give your living room a personal touch.', 'concept_2.jpg', '2024-12-16 18:31:42', '2024-12-21 01:27:08'),
(9, 'Modern Design for the Kitchen', 'Discover kitchen accessories designed to simplify meal preparation and enhance the dining experience with subtle pleasures. From the Muller Van Severen Arcs Salt and Pepper Grinder to the graphic Pattern Napkins, these everyday essentials bring a modern touch to both the kitchen and the table setting.', 'concept_3.jpg', '2024-12-16 18:35:37', '2024-12-16 18:35:37'),
(10, 'The Dining Collection', 'Elevate your dining space with a curated collection of dining tables, chairs, and accessories.', 'concept_4.jpg', '2024-12-16 18:35:55', '2024-12-16 18:35:55'),
(11, 'Lighting Collection', 'Explore a diverse range of modern lighting solutions, including pendant lights, table lamps, floor lamps, and more.', 'concept_5.jpg', '2024-12-16 18:36:12', '2024-12-16 18:36:12'),
(12, 'Living Outdoors', 'This summer, indulge in the best the season has to offer. Refresh yourself with a cool beverage using a stylish carafe and glasses, along with an ice cube tray. Dine with the Barro Collection, Ram Napkins, and good company, while enjoying a chilled dessert in an Italian Ice Cup. All of this, complemented by timeless outdoor furniture, or simply relax by the pool with graphic Check and Mono Towels.', 'concept_6_1.jpg', '2024-12-16 18:40:42', '2024-12-16 18:40:42'),
(13, 'Find your vase style', 'The sculptural design of a vase adds a striking element to your space, creating a unique focal point. From collaborations with designers such as Laila Gohar, Muller Van Severen, and Jessica Hans, to the innovative glass-layering techniques seen in the popular Splash Vase available in new colours, our diverse range of vases offers the perfect finishing touch for any interior. Whatever your style, there’s a vase to suit your space.', 'concept_7.jpg', '2024-12-16 18:40:59', '2024-12-16 18:40:59'),
(15, 'THAT cosy FEELING', 'Adding elegant, inviting textiles to any room can help soften the space, so you can relax in comfort. From plush Texture, Plica, or classic Dot cushions for your sofa or bed, to casual seating options like Pouf, now available in Planar and Snug versions, lounging around can look as good as it feels.', 'concept_9.jpg', '2024-12-18 14:59:40', '2024-12-18 14:59:40');

-- --------------------------------------------------------

--
-- 테이블 구조 `one__gubuns`
--

CREATE TABLE `one__gubuns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `one__gubuns`
--

INSERT INTO `one__gubuns` (`id`, `name`, `created_at`, `updated_at`) VALUES
(11, 'Seating', '2024-12-16 17:58:57', '2024-12-16 17:58:57'),
(12, 'Tables', '2024-12-16 17:59:04', '2024-12-16 17:59:04'),
(13, 'Beds', '2024-12-16 17:59:23', '2024-12-16 17:59:23'),
(14, 'Shelves', '2024-12-16 18:00:35', '2024-12-16 18:00:35'),
(15, 'Lamps', '2024-12-16 18:00:54', '2024-12-16 18:00:54'),
(16, 'Wardrobe', '2024-12-16 18:02:21', '2024-12-16 18:02:21'),
(17, 'Rugs', '2024-12-16 18:07:23', '2024-12-16 18:07:23'),
(18, 'Storage', '2024-12-16 18:09:47', '2024-12-16 18:09:47'),
(19, 'Vase', '2024-12-16 18:38:03', '2024-12-16 18:38:03');

-- --------------------------------------------------------

--
-- 테이블 구조 `one__ledgers`
--

CREATE TABLE `one__ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inout` tinyint(4) DEFAULT NULL,
  `trade_date` date DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `unit_price` int(11) DEFAULT NULL,
  `in_num` int(11) DEFAULT NULL,
  `out_num` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `memo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `one__ledgers`
--

INSERT INTO `one__ledgers` (`id`, `inout`, `trade_date`, `product_id`, `unit_price`, `in_num`, `out_num`, `total_price`, `memo`, `created_at`, `updated_at`) VALUES
(3, 0, '2024-12-18', 11, 1189000, 1, 0, 1189000, '9', '2024-12-18 00:20:11', '2024-12-18 00:20:11'),
(4, 0, '2024-12-18', 11, 1189000, 1, 0, 1189000, 'memberid_9', '2024-12-18 00:20:41', '2024-12-18 00:20:41'),
(5, 0, '2024-12-18', 10, 43000, 1, 0, 43000, 'memberid_10', '2024-12-18 00:23:21', '2024-12-18 00:23:21'),
(6, 0, '2024-12-18', 8, 18000, 1, 0, 18000, 'memberid_10', '2024-12-18 00:23:32', '2024-12-18 00:23:32'),
(7, 0, '2024-12-18', 13, 179900, 0, 0, 179900, 'memberid_10', '2024-12-18 00:25:12', '2024-12-18 00:25:12'),
(8, 1, '2024-12-18', 12, 640000, 0, 1, 640000, 'memberid_10', '2024-12-18 00:25:35', '2024-12-18 00:25:35'),
(9, 1, '2024-12-18', 13, 179900, 0, 1, 179900, 'memberid_9', '2024-12-18 12:49:32', '2024-12-18 12:49:32'),
(10, 1, '2024-12-18', 9, 25000, 0, 1, 25000, 'memberid_9', '2024-12-18 12:49:46', '2024-12-18 12:49:46'),
(11, 1, '2024-12-18', 9, 25000, 0, 1, 25000, 'memberid_9', '2024-12-18 12:49:50', '2024-12-18 12:49:50'),
(12, 1, '2024-12-18', 9, 25000, 0, 1, 25000, 'memberid_9', '2024-12-18 12:49:50', '2024-12-18 12:49:50'),
(13, 1, '2024-12-18', 13, 179900, 0, 1, 179900, 'memberid_9', '2024-12-18 12:50:02', '2024-12-18 12:50:02'),
(14, 1, '2024-12-18', 12, 640000, 0, 1, 640000, 'memberid_9', '2024-12-18 12:50:13', '2024-12-18 12:50:13'),
(15, 1, '2024-12-18', 13, 179900, 0, 1, 179900, 'memberid_9', '2024-12-18 14:00:23', '2024-12-18 14:00:23'),
(16, 1, '2024-12-19', 24, 89000, 0, 1, 89000, 'memberid_9', '2024-12-19 05:09:22', '2024-12-19 05:09:22'),
(17, 1, '2024-12-19', 16, 280000, 0, 1, 280000, 'memberid_9', '2024-12-19 05:17:35', '2024-12-19 05:17:35'),
(18, 1, '2024-12-19', 24, 89000, 0, 1, 89000, 'memberid_9', '2024-12-19 05:17:42', '2024-12-19 05:17:42'),
(19, 1, '2024-12-19', 24, 89000, 0, 1, 89000, 'memberid_9', '2024-12-19 05:17:48', '2024-12-19 05:17:48'),
(20, 1, '2024-12-19', 16, 280000, 0, 1, 280000, 'memberid_9', '2024-12-19 05:17:58', '2024-12-19 05:17:58'),
(21, 1, '2024-12-19', 18, 789000, 0, 1, 789000, 'memberid_9', '2024-12-19 05:29:32', '2024-12-19 05:29:32'),
(22, 1, '2024-12-19', 33, 8900, 0, 1, 8900, 'memberid_9', '2024-12-19 05:29:50', '2024-12-19 05:29:50'),
(23, 1, '2024-12-19', 12, 640000, 0, 1, 640000, 'memberid_9', '2024-12-19 05:30:13', '2024-12-19 05:30:13'),
(24, 0, '2024-12-18', 20, 64900, 10, 0, 649000, NULL, '2024-12-19 17:34:53', '2024-12-19 17:34:53'),
(25, 0, '2024-12-18', 29, 899000, 10, 0, 8990000, NULL, '2024-12-19 17:35:01', '2024-12-19 17:35:01'),
(26, 0, '2024-12-18', 22, 45000, 10, 0, 450000, NULL, '2024-12-19 17:35:08', '2024-12-19 17:35:08'),
(27, 0, '2024-12-18', 21, 248000, 10, 0, 2480000, NULL, '2024-12-19 17:35:17', '2024-12-19 17:35:17'),
(28, 0, '2024-12-18', 9, 25000, 10, 0, 250000, NULL, '2024-12-19 17:35:28', '2024-12-19 17:35:28'),
(29, 0, '2024-12-19', 36, 349000, 10, 0, 3490000, NULL, '2024-12-19 17:35:58', '2024-12-19 17:35:58'),
(30, 0, '2024-12-19', 32, 44900, 10, 0, 449000, NULL, '2024-12-19 17:36:06', '2024-12-19 17:36:06'),
(31, 0, '2024-12-19', 37, 79000, 10, 0, 790000, NULL, '2024-12-19 17:36:16', '2024-12-19 17:36:16'),
(32, 0, '2024-12-18', 26, 234000, 10, 0, 2340000, NULL, '2024-12-19 17:36:27', '2024-12-19 17:36:27'),
(33, 0, '2024-12-18', 18, 789000, 10, 0, 7890000, NULL, '2024-12-19 17:38:17', '2024-12-19 17:38:17'),
(34, 0, '2024-12-18', 16, 280000, 10, 0, 2800000, NULL, '2024-12-19 17:38:27', '2024-12-19 17:38:27'),
(35, 0, '2024-12-18', 12, 640000, 10, 0, 6400000, NULL, '2024-12-19 17:38:41', '2024-12-19 17:38:41'),
(36, 0, '2024-12-18', 13, 179900, 10, 0, 1799000, NULL, '2024-12-19 17:38:51', '2024-12-19 17:38:51'),
(37, 0, '2024-12-18', 24, 89000, 10, 0, 890000, NULL, '2024-12-19 17:39:00', '2024-12-19 17:39:00'),
(38, 0, '2024-12-18', 33, 8900, 10, 0, 89000, NULL, '2024-12-19 17:39:11', '2024-12-19 17:39:11'),
(39, 1, '2024-12-21', 24, 89000, 0, 1, 89000, 'memberid_9', '2024-12-20 15:52:39', '2024-12-20 15:52:39'),
(40, 1, '2024-12-23', 36, 349000, 0, 1, 349000, 'memberid_9', '2024-12-23 04:56:07', '2024-12-23 04:56:07');

-- --------------------------------------------------------

--
-- 테이블 구조 `one__members`
--

CREATE TABLE `one__members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `pw` varchar(20) NOT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rank` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `one__members`
--

INSERT INTO `one__members` (`id`, `name`, `user_id`, `pw`, `tel`, `address`, `created_at`, `updated_at`, `rank`) VALUES
(1, 'name1', 'id1', 'pw1', '01000000000', 'Address', '2024-12-13 16:12:39', '2024-12-13 16:33:20', 0),
(2, 'name2', 'id2', 'ow2', '01022222222', '222', '2024-12-13 16:17:16', '2024-12-13 16:17:16', 1),
(3, '333', '333', '333', '01033333333', '333', '2024-12-13 16:17:34', '2024-12-13 16:17:34', 2),
(4, '4444', '4444', '4444', '01044444444', '4444', '2024-12-13 16:17:45', '2024-12-13 16:17:45', 0),
(5, '55555', '55555', '55555', '01055555555', '55555', '2024-12-13 16:17:58', '2024-12-13 16:17:58', 0),
(8, '159', '159', '159', '01000000000', '159159', '2024-12-13 16:31:13', '2024-12-13 16:31:13', 1),
(9, 'admin', 'admin', '1234', '01012341234', 'Induk', '2024-12-16 14:13:29', '2024-12-16 14:13:29', 2),
(10, 'test123', 'test123', 'test123', '12312341234', 'test1234test1234', '2024-12-17 23:41:11', '2024-12-17 23:41:11', 0),
(11, '홍길동', '123', '123', '           ', '123', '2024-12-19 05:30:29', '2024-12-19 05:30:29', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `one__products`
--

CREATE TABLE `one__products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gubun_id` int(11) DEFAULT NULL,
  `concept_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `one__products`
--

INSERT INTO `one__products` (`id`, `gubun_id`, `concept_id`, `name`, `price`, `stock`, `description`, `pic`, `created_at`, `updated_at`) VALUES
(8, 18, 7, 'Italian Ice Cup', 18000, 1, 'The Italian Ice Cup is crafted from stainless steel, featuring a stem and rounded bowl perfect for scoops of ice cream or other desserts. Made in Italy.', 'c_1_product_1.jpg', '2024-12-16 18:49:20', '2024-12-16 18:49:20'),
(9, 18, 7, 'Barro Plate', 25000, 7, 'Designed by Portuguese designer Rui Pereira, the Barro Plate is part of a tableware collection that celebrates the warmth and simple beauty of terracotta. \"Barro,\" meaning \"red clay\" in Portuguese, reflects the designer\'s admiration for the traditions and uses of this ancient material. The plate’s rolled-edge detail, soft texture, and balanced proportions create a sense of stability, making it a pleasure to use. Crafted in Portugal from durable terracotta, the Barro Plate is available in a range of high-gloss glazes, offering endless possibilities for personalized combinations. The plates come in a set of two.', 'c_1_product_2.jpg', '2024-12-16 18:51:32', '2024-12-16 18:51:32'),
(10, 18, 7, 'Sobremesa Bowl', 43000, 1, 'The Sobremesa Serving Bowl is part of a design collaboration with artist Laila Gohar, celebrating the joy of gathering with family and friends over a shared meal. This beautiful tableware series is crafted from ovenproof porcelain in a range of stunning colours, ideal for both cooking and serving. Available in various sizes and designs, the bowls come in solid mono colours or with a contrasting stripe detail. They can be used individually or paired with other pieces from the same collection to create a cohesive, inviting table setting.', 'c_1_product_3.jpg', '2024-12-16 18:54:26', '2024-12-16 18:54:26'),
(11, 11, 8, 'Quilton Lift 2 Seate', 1189000, 2, 'Described by designers Doshi Levien as a \"quilted landscape sofa system,\" the Quilton collection serves as a central platform for living, working, socialising, and relaxing. The Quilton Lift Sofa combines the series\' generous dimensions and sculpted forms with solid wooden legs that lift the sofa, giving it a light, contemporary expression. The finely detailed quilting highlights the softness and volume of the foam and wadding seats, offering exceptional comfort. Available in two- and three-seater options, numerous upholstery choices, and various wood types for the legs, Quilton Lift\'s inviting aesthetics and versatility make it ideal for both domestic and public spaces.', 'c_2_product_1.jpg', '2024-12-16 18:57:03', '2024-12-16 18:57:03'),
(12, 11, 8, 'Quilton Lift Ottoman', 640000, -3, 'Described by the designers as a \"quilted landscape sofa system,\" the Quilton Lift Ottoman serves as both a functional footrest and extra seating in a sofa setup. The generously dimensioned series by Doshi Levien combines sculpted forms with solid wooden legs that elegantly lift the ottoman, creating a light, contemporary expression. The finely detailed quilting enhances the softness and volume of the foam and wadding, offering exceptional comfort. Available in a variety of upholstery options and with legs in different wood types, the Quilton Lift Ottoman\'s inviting aesthetics and versatility make it perfect for a wide range of domestic and public spaces.', 'c_2_product_2.jpg', '2024-12-16 18:58:33', '2024-12-16 19:01:30'),
(13, 17, 8, 'Shift Kelim Rug', 179900, -3, 'Handcrafted by skilled artisans, the Shift Kelim Rug blends contemporary graphic patterns with ancient rug-making techniques to create a truly unique piece. Made from wool yarn that is hand-spun on traditional charkhas before being dyed, each rug features slight variations in colour and tone due to the natural texture of the yarn. These subtle differences reflect the authentic craftsmanship behind each piece. Available in various sizes and colours, the rug’s distinct quality and natural beauty bring timeless appeal to a wide range of interior spaces.', 'c_2_product_3.jpg', '2024-12-16 19:00:19', '2024-12-18 12:11:17'),
(14, 18, 9, 'Tin Container', 30000, 0, 'Our Tin Containers are a collection of functional and decorative storage boxes featuring colourful checked patterns and a glossy finish. The lid and container are smoothly aligned, creating a sleek, seamless appearance, whilst ensuring an airtight fit that is suitable for dry food storage. Available in a wide assortment of sizes, shapes and designs, the Tin Container can be placed decoratively on shelves or tables around the home for storing and organising different items.', 'c_3_product_1.jpg', '2024-12-18 14:15:25', '2024-12-18 14:15:25'),
(15, 12, 10, 'CPH Table', 360000, 0, 'Part of the Copenhague range designed by Ronan and Erwan Bouroullec, the CPH 30 shares the same characteristic angled legs and strong identity that are consistent with the rest of the series, while this variant has a rectangular tabletop. It is available in different sizes, with tabletops and frames in a variety of wood types and materials, offering the possibility to select matching or contrasting combinations. The CPH 30’s versatility and uncluttered design make it ideal for using as a desk, conference table, or dining table in an office context or a private setting.', 'c_4_product_1.jpg', '2024-12-18 14:20:14', '2024-12-18 14:20:14'),
(16, 12, 8, 'CPH 90 Desk', 280000, -2, 'The CPH 90 brings classic desk aesthetics into a modern context. The Bouroullec brothers’ simple yet graceful asymmetrical legs coupled with the streamlined tabletop results in a functional, compact, and uncluttered design. It is available with tabletops and frames in a variety of wood types and materials, with the possibility to select matching or contrasting combinations. The Copenhague Desk’s versatile and elegant design makes it suited to a variety of corporate environments, as well ideal for working at home.', 'c_2_product_4.jpg', '2024-12-18 14:21:34', '2024-12-18 14:21:34'),
(17, 13, 8, 'Tamoto Bed', 1890000, 0, 'Developed for our company by Shane Schneck, Tamoto Bed is designed with multifunctionality in mind, which makes it easy and intuitive to integrate into a modern lifestyle. Tamoto is influenced by the draping quality of kimono sleeves, which inspired Shane\'s innovative use of folding fabric over the bed\'s frame. The soft, draped headboard is counterbalanced by the generously dimensioned steel tubing frame, creating a contemporary and comfortable bed-sofa hybrid that is not intended exclusively for sleeping, but also as a foundation for reading, working, or watching TV and other activities. With a flat-packed, easy-to-assemble design, removable headboard cover and recyclable materials, functionality has been factored in every step of the design process. Available in a variety of sizes and selected soft textiles, Tamoto is a versatile bed that fits most size bedrooms and design styles. Our company recommends using Standard Bed Slats and Standard Mattresses with Tamoto Bed for the optimal complete solution.', 'c_2_product_5.jpg', '2024-12-18 14:24:15', '2024-12-18 14:24:15'),
(18, 13, 8, 'Connect Bed', 789000, -1, 'Connect Bed takes the idea of traditional craftsmanship methods combined with the computer-controlled, high-tech tools and processes which have now become commonplace in the contemporary designer\'s world to create a minimalistic, industrial look. The result is a razor sharp design with pinpoint precision, simply consisting of four elements: two side rails and two end rails that slot together and are fastened with eight screws. Embedded in the bare frame, the screws become an interesting detail in themselves, with the joints displaying references to conventional carpentry work.', 'c_2_product_6.jpg', '2024-12-18 14:25:16', '2024-12-18 14:25:16'),
(19, 11, 12, 'Soft Edge 56', 189000, 0, 'Iskos-Berlin’s Soft Edge series features an organically shaped seat and back, blending strong curves with extreme lightness to create a minimalistic design that optimises human-centric comfort. With its plastic (PP) seat and back combined with a steel-sled base with integrated hook link, the Soft Edge 56 Chair offers uncluttered aesthetics, stability, and functionality. Its strength, stackability, and ability to link multiple chairs together make it ideal for using in private, public, and contract environments – from homes to corporate spaces and cafés. Also available with an upholstered seat in a wide range of fabric options.', 'c_6_product_1.jpg', '2024-12-18 14:27:16', '2024-12-18 14:27:16'),
(20, 11, 12, 'AAC 220', 64900, 10, 'Featuring a swivel base in aluminium, the AAC 220 has a slightly more formal expression than the other variants in the series. Retaining the fundamental idea shared by the AAC collection, this model is characterised by a curved shell with a slightly higher back. Designed with optimal functionality in mind, the shell construction offers a deep, generous seat that combines inviting aesthetics with a high level of comfort, whilst the lower armrests provide good support and enable the chair to fit underneath a table or desk. The base is available in either polished or powder-coated aluminium, with the post-consumer recycled plastic shell offered in a wide palette of contemporary colours and multiple front upholstery options. The multitude of variants and design combinations give this series a versatile expression that makes it suitable for a wide variety of corporate, private, and public contexts.', 'c_6_product_2.jpg', '2024-12-18 14:28:03', '2024-12-18 14:28:03'),
(21, 12, 12, 'Balcony Table', 248000, 10, 'Designed by Ronan and Erwan Bouroullec, the Balcony Table is an elegant dining table for outdoor use. The simple rectangular design is softened by slender legs, with the multiple holes on the table\'s surface strengthening the construction, as well as creating a distinct expression. Made in powder-coated steel with an outdoor primer for optimal resilience and durability, Balcony is available in a number of different colour and size options, making it a versatile table that can be used in all kinds of spaces, from small balconies and terraces to gardens and other larger outside areas.', 'c_6_product_3.jpg', '2024-12-18 14:29:39', '2024-12-18 14:29:39'),
(22, 11, 12, 'Balcony Dining Armch', 45000, 10, 'Designed by Ronan and Erwan Bouroullec, the Balcony Dining Chair is an elegant and functional dining chair for outdoor use. The square design is softened by the wide, rounded back, with the multiple holes in the seat and back strengthening the construction, as well as creating a distinct expression. Made in powder-coated steel with an outdoor primer for optimal resilience and durability, the Balcony Dining Chair is offered in a number of different colour options. The chair’s stackable design means it is well suited to all kinds of spaces, from small balconies and terraces to gardens and other larger outside areas. This chair is also available in a model with supportive armrests – the Balcony Dining Armchair.', 'c_6_product_4.jpg', '2024-12-18 14:30:44', '2024-12-18 14:30:44'),
(23, 19, 13, 'Tiny Vase', 43000, 0, 'Designed by Nikolaj Mentze from STUDIO 0405, the Tiny Vase is an elegant vase in clear borosilicate glass. Featuring a beautiful, simple design, the small size of the vase makes it ideal for displaying a single stem or rustic flower arrangements on tables, shelves, and other surfaces around the home.', 'c_7_product_1.jpg', '2024-12-18 14:31:59', '2024-12-18 14:31:59'),
(24, 19, 13, 'Sobremesa Vase', 89000, -3, 'As part of a design collaboration with artist Laila Gohar, the Sobremesa Stripe Vase celebrates the joy of gathering with family and friends over a good meal. This decorative vase is designed to add ambiance to any table setting. Hand-painted in stoneware with a colorful striped pattern, each vase has its own unique character. It can be used for bouquets, blooming branches, or even for storing kitchen utensils. Available in a variety of sizes and designs.', 'c_7_product_2.jpg', '2024-12-18 14:34:01', '2024-12-18 14:34:01'),
(25, 19, 13, 'Chamber Vase', 67000, 0, 'Inspired by the space where digital and physical forms meet, Wang & Söderström’s Vases are unique sculptural objects that serve as miniature pieces of art. The organically shaped 3D models are first developed in the designers’ studio, before the vases are 3D printed and moulded in porcelain and stoneware at a ceramic factory.', 'c_7_product_3.jpg', '2024-12-18 14:34:49', '2024-12-18 14:34:49'),
(26, 14, 9, 'Cabinet Tall', 234000, 10, 'Designed by Belgian designers Muller Van Severen, the Colour Cabinet collection is a series of floor standing and wall-hanging cabinets that highlight the contradictory interplay between clean, minimalist design with the vibrance and originality of colour. The collection’s versatile design and numerous options make it suitable for a wide variety of storage and display uses in many different private and public contexts. The cabinet body is crafted in organically dyed Valchromat® – a unique kind of robust MDF material that is FSC-certified, with the supporting frame made in durable steel. The Colour Cabinets are available in a wide range of different variants and sizes, in both mono- and multi-colour options. Its versatile design and numerous options make it suitable for a wide variety of storage and display uses in many different private and public contexts.', 'c_3_product_3.jpg', '2024-12-18 14:36:49', '2024-12-18 14:36:49'),
(27, 14, 8, 'Pier System 12 2', 178000, 0, 'Designed by French designers Ronan & Erwan Bouroullec, Pier System is a multifunctional storage system developed to accommodate and adapt to modern lifestyle requirements. Featuring a flat-pack design that is easy to assemble, reconfigure and recycle, the simple construction provides a flexible shelving solution for organising and storing a multitude of items. Constructed from lightweight aluminium and steel using the minimum number of components required to create a complete storage system, Pier System is available in a variety of colours and set configurations that can be combined with each other. Elements that are part of these configurations can be moved around as needed and desired, enabling the user to incorporate work, wardrobe or organisational functions into most rooms and environments, from living rooms and bedrooms to entrance halls and office areas.', 'c_2_product_7.jpg', '2024-12-18 14:38:21', '2024-12-18 14:38:21'),
(28, 14, 10, 'Pier System', 269000, 0, 'Designed by French designers Ronan & Erwan Bouroullec, Pier System is a multifunctional storage system developed to accommodate and adapt to modern lifestyle requirements. Featuring a flat-pack design that is easy to assemble, reconfigure and recycle, the simple construction provides a flexible shelving solution for organising and storing a multitude of items. Constructed from lightweight aluminium and steel using the minimum number of components required to create a complete storage system, Pier System is available in a variety of colours and set configurations that can be combined with each other. Elements that are part of these configurations can be moved around as needed and desired, enabling the user to incorporate work, wardrobe or organisational functions into most rooms and environments, from living rooms and bedrooms to entrance halls and office areas.', 'c_4_product_2.jpg', '2024-12-18 14:40:08', '2024-12-18 14:40:08'),
(29, 15, 11, 'Apollo Chandelier', 899000, 10, 'Designed by STUDIO 0405, the Apollo Chandelier is a contemporary take on a classic lamp archetype, sharing basic structural characteristics of the traditional chandelier updated in a sculptural and functional design. Comprising multiple mouth-blown opal glass shades atop curved tubular arms, creating a contrasting expression between the handcrafted, organically shaped shades and the industrial anodised aluminium tubing. The Apollo Chandelier makes an ideal room centrepiece suitable for using in a variety of private and public places. Available in two different sizes, with six or 12 arms.', 'c_5_product_1.jpg', '2024-12-18 14:41:27', '2024-12-18 14:41:27'),
(30, 15, 11, 'Pao Steel Pendant', 84500, 0, 'An exciting collaboration with Japanese designer Naoto Fukasawa, the Pao Steel Pendant is named after the soft, glowing shape of traditional Mongolian Pao tents. By keeping the aesthetics modest and simple Fukasawa creates a beautiful everyday object that is in harmony with its environment. The light source is concealed from view within the shade, resulting in a clean and simple design with no visual intrusions. The pendant’s shades are crafted from steel with a high-gloss finish and are available in different sizes and colours. Their functionality and the deliberate simplicity of the design make them suitable for a wide range of spaces and uses in domestic and corporate environments.', 'c_5_product_2.jpg', '2024-12-18 14:42:19', '2024-12-18 14:42:19'),
(31, 15, 11, 'PC Linear', 349000, 0, 'Pierre Charpin\'s PC Linear is the latest member to join the family of PC lamps. The new design shares the same simple and elegant profile that is present in the rest of the family. The PC Linear\'s shade is pressed from a single aluminium component with a wet-sprayed finish. The linear design is ideal for suspending over meeting or dining tables, as well as for illuminating exhibition shelves in commercial spaces. The PC Linear is available in black or white and is suitable for both contract and domestic use.', 'c_5_product_3.jpg', '2024-12-18 14:43:05', '2024-12-18 14:43:05'),
(32, 16, 9, 'Bolt Hook', 44900, 10, 'Compact and colourful, Bolt Hook is a multifunctional hook that is easily mounted onto a wall for hanging different items. Made in powder coated steel with a high gloss finish in a variety of colours, Bolt is ideal for hanging clothes in the bedroom, towels in the bathroom and outerwear in the hallway. Comes in a pack of two.', 'c_3_product_4.jpg', '2024-12-18 14:44:43', '2024-12-18 14:44:43'),
(33, 16, 8, 'Soft Coat Hanger', 8900, -1, 'Soft Coat Hanger is a wooden hanger with broad shoulders and a matt rubber surface that provides added friction to keep coats and jackets in place.', 'c_2_product_8.jpg', '2024-12-18 14:45:48', '2024-12-18 14:45:48'),
(34, 16, 10, 'Tape Coat Rack', 49000, 0, 'BIG-GAME’s Tape Coat Rack uses bent steel bars in a grid format to create a minimalistic and versatile design. Easy to mount on the wall, Tape Coat Rack features multiple hooks at varying heights to offer optimal hanging options. The simple design is easy to integrate in hallways, bedrooms, and other spaces in the home.', 'c_4_product_3.jpg', '2024-12-18 14:46:40', '2024-12-18 14:46:40'),
(35, 16, 10, 'Hang', 84900, 0, 'Hang is a minimalistic metal hanger that takes up less room in your closet, enabling you to store more clothes in the same amount of space. Made in wire, with different colour options.', 'c_4_product_4.jpg', '2024-12-18 14:47:28', '2024-12-18 14:47:28'),
(36, 17, 8, 'Bias Rug Tint', 349000, 10, 'Bias Rug Tint is woven with a visually appealing two-tone effect created by the cream weft being woven into a coloured warp. The subtle diagonal pattern is perfectly framed by the solid bands of colour at both ends, creating a versatile rug that can be used to elevate floor spaces in most interior contexts. Crafted in a durable blend of wool and cotton, Bias Rug Tint is available in different colour and size options. OEKO-TEX® STANDARD 100 cert. No 2176-345 DTI.', 'c_2_product_9.jpg', '2024-12-18 14:49:05', '2024-12-18 14:49:05'),
(37, 17, 10, 'Braided Rug', 79000, 10, 'The result of Clara von Zweigbergk’s exploration with braiding, crocheting and weaving techniques, the Braided Rug is a colourful handmade rug that binds braided yarn together with a contrast thread to create vibrant fragments of colour. Made in a soft, durable blend of New Zealand wool and organic cotton, it is available in different designs that bring timeless style and underfoot warmth to most interior spaces.', 'c_4_product_5.jpg', '2024-12-18 14:49:53', '2024-12-18 14:49:53'),
(38, 18, 15, 'Ribbon Cushion', 14900, 0, 'The Ribbon Cushion uses narrow stripes in bold colour combinations to create timeless designs that can be arranged horizontally, vertically, or in a mix of both to create interesting contrasts. Crafted from a durable, premium-quality textile, the Ribbon Cushion is available in several colour combinations.', 'c_9_product_1.jpg', '2024-12-18 15:02:26', '2024-12-18 15:02:26'),
(39, 18, 15, 'Plica Cushion', 20000, 0, 'The Plica series comprises a collection of versatile cushions perfect for arranging decoratively on sofas or beds. The rectangular shape features double-folded edges and is offered in a variety of fabrics and textures. Available in a wide palette of colours, ranging from neutral shades to brighter tones.', 'c_9_product_2.jpg', '2024-12-18 15:03:16', '2024-12-18 15:03:16'),
(40, 18, 15, 'Dot Cushion', 49000, 0, 'Characterized by the covered buttons in the center of the cushion, the Dot Cushion has become a design classic. Offered in a variety of fabrics and textures, the cushions are available in a wide palette of versatile colours, from neutral shades to brighter tones.', 'c_9_product_3.jpg', '2024-12-18 15:04:08', '2024-12-18 15:04:08');

-- --------------------------------------------------------

--
-- 테이블 구조 `one__temps`
--

CREATE TABLE `one__temps` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `one__temps`
--

INSERT INTO `one__temps` (`id`, `product_id`, `stock`) VALUES
(1, 8, 1),
(2, 9, 7),
(3, 10, 1),
(4, 11, 2),
(5, 12, -3),
(6, 13, -3),
(7, 16, -2),
(8, 18, -1),
(9, 20, 10),
(10, 21, 10),
(11, 22, 10),
(12, 24, -3),
(13, 26, 10),
(14, 29, 10),
(15, 32, 10),
(16, 33, -1),
(17, 36, 10),
(18, 37, 10);

-- --------------------------------------------------------

--
-- 테이블 구조 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gubuns_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `jaego` int(11) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `products`
--

INSERT INTO `products` (`id`, `gubuns_id`, `name`, `price`, `jaego`, `pic`, `created_at`, `updated_at`) VALUES
(1, 1, '바닐라향 롱롱 강아지장난감', 2000, 0, '강아지 초록 인형.jpg', '2024-09-24 11:42:31', '2024-12-18 15:18:07'),
(2, 4, '강아지 플라스틱입마개', 4000, 19, '강아지 분홍 입마개.jpg', '2024-09-24 11:55:15', '2024-12-18 15:22:22'),
(3, 6, '눈 건강 필름 영양제', 18600, 35, '강아지 눈 건강 영양제.jpg', '2024-09-24 14:26:05', '2024-12-18 15:24:57'),
(5, 11, '캐츠랑 리브레5kg*2개(전연령용)', 28600, 7, '고양이 사료 전연령.jpg', '2024-10-10 05:44:44', '2024-12-18 15:19:32'),
(6, 2, '커스텀캣타워H_가드형', 640000, 0, '고양이 하우스 캣타워.jpg', '2024-10-10 05:48:15', '2024-12-18 15:23:40'),
(7, 1, '강아지 테니스볼 스낵장난감', 38000, 25, '강아지 기계 장난감.jpg', '2024-11-14 09:49:49', '2024-12-18 15:20:45'),
(8, 6, '시스테이드 플러스 고양이', 48000, 0, '고양이 건강 영양제.jpg', '2024-12-18 15:26:02', '2024-12-18 15:26:02'),
(9, 12, '두부모래 고양이모래', 46000, 0, '고양이 배변용 모래.jpg', '2024-12-18 15:27:11', '2024-12-18 15:27:11'),
(10, 12, '고양이 모래 무향', 67000, 16, '고양이 배변 무향 모래.jpg', '2024-12-18 15:28:14', '2024-12-18 15:28:14');

-- --------------------------------------------------------

--
-- 테이블 구조 `temps`
--

CREATE TABLE `temps` (
  `id` int(11) NOT NULL,
  `products_id` int(11) DEFAULT NULL,
  `jaego` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `temps`
--

INSERT INTO `temps` (`id`, `products_id`, `jaego`) VALUES
(1, 2, 19),
(2, 3, 35),
(3, 5, 7),
(4, 6, 0),
(5, 7, 25),
(6, 10, 16);

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `workers`
--

CREATE TABLE `workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `workers`
--

INSERT INTO `workers` (`id`, `name`, `phone`, `gender`, `created_at`, `updated_at`) VALUES
(1, '관리자', '01012341234', '여자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(2, '노기효', '01094818426', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(3, '배안수', '01096029758', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(4, '윤상기', '01091834099', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(5, '남윤주', '01099745951', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(6, '고은이', '01066752295', '여자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(7, '이창기', '01094867737', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(8, '강주석', '01097175378', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(9, '김상준', '01073282001', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(10, '김강현', '01090696074', '여자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(11, '양구민', '01089906973', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(12, '박철완', '01064517732', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(13, '이조규', '01064725207', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(14, '김안기', '01047835553', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(15, '황전하', '01098549069', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(16, '원정현', '01097953309', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(17, '김성현', '01071564586', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(18, '윤고영', '01046674402', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(19, '손양진', '01093091586', '여자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(20, '서천범', '01029609537', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(21, '최미은', '01095919293', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(22, '현자석', '01045525203', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(23, '고연진', '01039039565', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(24, '임양진', '01047441735', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(25, '김진형', '01029752059', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(26, '강명한', '01017367547', '남자', '2023-12-31 15:00:01', '2024-11-15 00:57:53'),
(27, '김동진', '01032374556', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(28, '박지영', '01032583779', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(29, '이양성', '01022293628', '여자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(30, '박자형', '01035604903', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(31, '김다우', '01029114044', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(32, '임전철', '01030126920', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(33, '최구선', '01023734840', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(34, '정도솔', '01098643720', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(35, '이영석', '01065956653', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(36, '조경현', '01072265535', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(37, '김만석', '01034670483', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(38, '박만석', '01044184218', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(39, '김현진', '01024095317', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(40, '박솔희', '01075709030', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(41, '권하미', '01024517990', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(42, '이성민', '01036524847', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(43, '장도운', '01035337719', '여자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(44, '고일남', '01096943617', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(45, '황지우', '01091057558', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(46, '정기근', '01025764748', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(47, '양자승', '01080972732', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(48, '윤성현', '01030685978', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(49, '최기문', '01027595634', '여자', '2023-12-31 15:00:01', '2023-12-31 15:00:01'),
(50, '오시헌', '01020203572', '남자', '2023-12-31 15:00:01', '2023-12-31 15:00:01');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `cos`
--
ALTER TABLE `cos`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- 테이블의 인덱스 `gubuns`
--
ALTER TABLE `gubuns`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `jangbus`
--
ALTER TABLE `jangbus`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `one__companies`
--
ALTER TABLE `one__companies`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `one__concepts`
--
ALTER TABLE `one__concepts`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `one__gubuns`
--
ALTER TABLE `one__gubuns`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `one__ledgers`
--
ALTER TABLE `one__ledgers`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `one__members`
--
ALTER TABLE `one__members`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `one__products`
--
ALTER TABLE `one__products`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `one__temps`
--
ALTER TABLE `one__temps`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- 테이블의 인덱스 `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- 테이블의 인덱스 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `temps`
--
ALTER TABLE `temps`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 테이블의 인덱스 `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `cos`
--
ALTER TABLE `cos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- 테이블의 AUTO_INCREMENT `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `gubuns`
--
ALTER TABLE `gubuns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 테이블의 AUTO_INCREMENT `jangbus`
--
ALTER TABLE `jangbus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 테이블의 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- 테이블의 AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 테이블의 AUTO_INCREMENT `one__companies`
--
ALTER TABLE `one__companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 테이블의 AUTO_INCREMENT `one__concepts`
--
ALTER TABLE `one__concepts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 테이블의 AUTO_INCREMENT `one__gubuns`
--
ALTER TABLE `one__gubuns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 테이블의 AUTO_INCREMENT `one__ledgers`
--
ALTER TABLE `one__ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- 테이블의 AUTO_INCREMENT `one__members`
--
ALTER TABLE `one__members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 테이블의 AUTO_INCREMENT `one__products`
--
ALTER TABLE `one__products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- 테이블의 AUTO_INCREMENT `one__temps`
--
ALTER TABLE `one__temps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 테이블의 AUTO_INCREMENT `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 테이블의 AUTO_INCREMENT `temps`
--
ALTER TABLE `temps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 테이블의 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `workers`
--
ALTER TABLE `workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
