-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2023 lúc 12:44 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbdoancs2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `subtitle`, `image`, `category`, `content`, `created_at`, `updated_at`) VALUES
(1, 3, 'The Personality Trait That Makes People Happier', 'Writing has always been kind of therapeutic for me', 'blog-1.jpg', 'TRAVEL', '', NULL, NULL),
(2, 3, 'This was one of our first days in Hawaii last week.', 'Writing has always been kind of therapeutic for me', 'blog-2.jpg', 'CodeLeanON', '', NULL, NULL),
(3, 3, 'Last week I had my first work trip of the year to Sonoma Valley', 'Writing has always been kind of therapeutic for me', 'blog-3.jpg', 'TRAVEL', '', NULL, NULL),
(4, 3, 'Happppppy New Year! I know I am a little late on this post', 'Writing has always been kind of therapeutic for me', 'blog-4.jpg', 'CodeLeanON', '', NULL, NULL),
(5, 3, 'Absolue collection. The Lancome team has been one…', 'Absolue collection. The Lancome team has been one…', 'blog-5.jpg', 'MODEL', '', NULL, NULL),
(6, 3, 'Writing has always been kind of therapeutic for me', 'Writing has always been kind of therapeutic for me', 'blog-6.jpg', 'CodeLeanON', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Calvin Klein', NULL, NULL),
(2, 'Diesel', NULL, NULL),
(3, 'Polo', NULL, NULL),
(4, 'Tommy Hilfigerb', NULL, '2022-11-22 06:45:43'),
(7, 'Louis Vuitton', '2022-11-23 07:46:33', '2022-11-23 07:46:33'),
(9, 'GUCCI', '2022-11-23 07:47:55', '2022-11-23 07:47:55'),
(10, 'DIOR', '2022-11-23 07:48:10', '2022-11-23 07:48:10'),
(11, 'CHANE', '2022-11-23 07:48:20', '2022-11-23 07:48:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_05_060952_create_orders_table', 1),
(6, '2022_11_05_061055_create_order_details_table', 1),
(7, '2022_11_05_061235_create_products_table', 1),
(8, '2022_11_05_061317_create_brands_table', 1),
(9, '2022_11_05_061405_create_product_categories_table', 1),
(10, '2022_11_05_061456_create_product_images_table', 1),
(11, '2022_11_05_061539_create_product_details_table', 1),
(12, '2022_11_05_061618_create_product_comments_table', 1),
(13, '2022_11_05_061650_create_blogs_table', 1),
(14, '2022_11_05_061732_create_blog_comments_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode_zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `first_name`, `last_name`, `company_name`, `country`, `street_address`, `postcode_zip`, `town_city`, `email`, `phone`, `payment_type`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'admin', 'hy', 'Son', 'vn', '26 nguyen tao', 'vn', 'da nang', 'admin@gmail.com', '0971213792', 'pay_later', 1, '2022-11-21 06:24:54', '2022-11-21 06:24:54'),
(3, 11, 'admin2', 't4rtr', 'dsasd', 'ád', 'sdfc', 'ád', 'edfg', 'admin2@gmail.com', '2222', 'online_payment', 1, '2022-11-23 16:53:31', '2022-11-23 16:53:31'),
(4, 11, 'admin2', '1222', 'dsasd', 'ád', 'sdfc', 'ád', 'edfg', 'admin2@gmail.com', '2222', 'online_payment', 1, '2022-11-23 16:56:25', '2022-11-23 16:56:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `qty`, `amount`, `total`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 1, 13, 13, '2022-11-21 06:24:54', '2022-11-21 06:24:54'),
(3, 2, 3, 1, 34, 34, '2022-11-21 06:24:54', '2022-11-21 06:24:54'),
(4, 3, 6, 1, 34, 34, '2022-11-23 16:53:31', '2022-11-23 16:53:31'),
(5, 4, 6, 1, 34, 34, '2022-11-23 16:56:25', '2022-11-23 16:56:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `product_category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `discount` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(1) NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `brand_id`, `product_category_id`, `name`, `description`, `content`, `price`, `qty`, `discount`, `weight`, `sku`, `featured`, `tag`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'Guangzhou sweater', NULL, NULL, 35, 20, 13, NULL, NULL, 1, 'Clothing', NULL, NULL),
(3, 3, 2, 'Guangzhou sweater', NULL, NULL, 35, 20, 34, NULL, NULL, 1, 'Clothing', NULL, NULL),
(4, 4, 1, 'Microfiber Wool Scarf', NULL, NULL, 64, 20, 35, NULL, NULL, 1, 'Accessories', NULL, NULL),
(5, 1, 3, 'Men\'s Painted Hat', NULL, NULL, 44, 20, 35, NULL, NULL, 0, 'Accessories', NULL, NULL),
(6, 1, 2, 'Converse Shoes', NULL, NULL, 35, 20, 34, NULL, NULL, 1, 'Clothing', NULL, NULL),
(7, 1, 1, 'Pure Pineapple', NULL, NULL, 64, 20, 35, NULL, NULL, 1, 'HandBag', NULL, NULL),
(8, 1, 1, '2 Layer Windbreaker', NULL, NULL, 44, 20, 35, NULL, NULL, 1, 'Clothing', NULL, NULL),
(9, 1, 1, 'Converse Shoes', NULL, NULL, 35, 32, 34, NULL, NULL, 1, 'Shoes', NULL, '2022-11-22 12:37:37'),
(10, 11, 6, 'sondeptria', '<p>dfgh</p>', 'alo', 44, 1, 41, 1, '2', 1, 'sd', '2022-11-23 08:05:47', '2022-11-23 08:06:22'),
(15, 10, 1, 'dior', NULL, 'dff', 22, 0, 22, 2, '2', 1, 'tg', '2022-11-24 01:45:55', '2022-11-24 01:45:55'),
(16, 11, 6, 'chane2', NULL, '1', 12, 0, 12, 1, '11', 1, 'tg', '2022-11-24 01:47:16', '2022-11-24 01:47:16'),
(17, 7, 8, 'lv1', NULL, 'ưdea', 21, 0, 22, 11, '22', 1, 'shoes', '2022-11-24 01:48:35', '2022-11-24 02:16:04'),
(18, 7, 2, 'lv1', NULL, '1', 12, 0, 11, 2, '2', 1, 'abc', '2022-11-24 02:32:19', '2022-11-24 02:38:15'),
(19, 7, 2, 'LV NIGHT - LOOK 05', '<p><em>This look makes a head-to-toe seasonal statement in the LV Night capsule&rsquo;s spirited shiny finishes. The House&rsquo;s iconic denim tailcoat jacket is reimagined in gleaming gold-coated organic cotton, while the clean-cut mini skirt is discreetly signed all over</em></p>', 'LOOK SELECTION', 1500, 20, 999, 1, '5', 1, 'womenclothes', '2022-11-24 06:36:00', '2022-11-30 17:21:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Men', NULL, NULL),
(2, 'Women', NULL, NULL),
(3, 'Kids', NULL, NULL),
(6, 'Nam', '2022-11-23 07:44:56', '2022-11-23 07:44:56'),
(7, 'Nữ', '2022-11-23 07:45:01', '2022-11-23 07:45:01'),
(8, 'Trẻ Em', '2022-11-23 07:45:17', '2022-11-23 07:45:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_comments`
--

CREATE TABLE `product_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_comments`
--

INSERT INTO `product_comments` (`id`, `product_id`, `user_id`, `email`, `name`, `messages`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'BrandonKelley@gmail.com', 'Brandon Kelley', 'Nice !', 4, NULL, NULL),
(2, 1, 5, 'RoyBanks@gmail.com', 'Roy Banks', 'Nice !', 4, NULL, NULL),
(3, 2, 2, 'aa', 'sss', 'cùi', 1, '2022-11-23 05:30:27', '2022-11-23 05:30:27'),
(4, 19, 10, 'QUANGHOANGSON2.3@GMAIL.COM', 'HOÀNG SƠN QUẢNG', '111', 1, '2022-11-30 17:28:08', '2022-11-30 17:28:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `color`, `size`, `qty`, `created_at`, `updated_at`) VALUES
(1, 2, 'blue', 'S', 5, NULL, NULL),
(2, 2, 'blue', 'L', 66, NULL, '2022-11-22 12:24:53'),
(3, 2, 'blue', 'L', 5, NULL, NULL),
(4, 2, 'blue', 'XS', 5, NULL, NULL),
(5, 1, 'yellow', 'S', 0, NULL, NULL),
(6, 1, 'violet', 'S', 0, NULL, NULL),
(8, 9, 'Đỏ', 'L', 20, '2022-11-22 12:36:50', '2022-11-22 12:36:50'),
(9, 9, 'Đỏ', 'm', 12, '2022-11-22 12:37:37', '2022-11-22 12:37:37'),
(10, 10, 'Đỏ', 'Xl', 1, '2022-11-23 08:06:22', '2022-11-23 08:06:22'),
(11, 11, 'yellow', 'Xl', 2, '2022-11-23 08:14:24', '2022-11-23 08:15:25'),
(12, 13, 'yellow', 'L', 20, '2022-11-23 16:47:57', '2022-11-23 16:47:57'),
(13, 19, 'yellow', 'L', 20, '2022-11-30 17:21:51', '2022-11-30 17:21:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, 'product-1.jpg', NULL, NULL),
(2, 1, 'product-1-1.jpg', NULL, NULL),
(3, 1, 'product-1-2.jpg', NULL, NULL),
(4, 2, 'product-2.jpg', NULL, NULL),
(5, 3, 'product-3.jpg', NULL, NULL),
(6, 4, 'product-4.jpg', NULL, NULL),
(7, 5, 'product-5.jpg', NULL, NULL),
(8, 6, 'product-6.jpg', NULL, NULL),
(9, 7, 'product-7.jpg', NULL, NULL),
(10, 8, 'product-8.jpg', NULL, NULL),
(11, 9, 'product-9.jpg', NULL, NULL),
(13, 9, 'avt1_637dd228da74b_221123_025624_jpg', '2022-11-23 07:56:24', '2022-11-23 07:56:24'),
(15, 10, 'avt1_637dd469d7aca_221123_030601_jpg', '2022-11-23 08:06:01', '2022-11-23 08:06:01'),
(16, 10, 'avt_637dd4d7736a0_221123_030751_jpg', '2022-11-23 08:07:51', '2022-11-23 08:07:51'),
(17, 11, 'sp1_637dd58559b65_221123_031045_jpg', '2022-11-23 08:10:45', '2022-11-23 08:10:45'),
(18, 11, 'avt1_637dd5890d6b1_221123_031049_jpg', '2022-11-23 08:10:49', '2022-11-23 08:10:49'),
(19, 12, 'sp1_637dd907e675a_221123_032543_jpg', '2022-11-23 08:25:43', '2022-11-23 08:25:43'),
(20, 13, 'avt2_637e4eae3ff5a_221123_114742_jpg', '2022-11-23 16:47:42', '2022-11-23 16:47:42'),
(21, 14, 'avt2_637eccad25f8a_221124_084517_jpg', '2022-11-24 01:45:17', '2022-11-24 01:45:17'),
(22, 15, 'avt2_637eccd90690c_221124_084601_jpg', '2022-11-24 01:46:01', '2022-11-24 01:46:01'),
(23, 16, 'avt2_637ecd2b2dfd5_221124_084723_jpg', '2022-11-24 01:47:23', '2022-11-24 01:47:23'),
(24, 17, 'avt2_637ecd7999ea9_221124_084841_jpg', '2022-11-24 01:48:41', '2022-11-24 01:48:41'),
(25, 18, 'sp1_637ed800a1674_221124_093336_jpg', '2022-11-24 02:33:36', '2022-11-24 02:33:36'),
(26, 19, 'lv1-2_637f116d06a2e_221124_013837_jpg', '2022-11-24 06:38:37', '2022-11-24 06:38:37'),
(27, 19, 'lv1-3_637f11714d474_221124_013841_jpg', '2022-11-24 06:38:41', '2022-11-24 06:38:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` tinyint(4) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `avatar`, `level`, `description`, `company_name`, `country`, `street_address`, `postcode_zip`, `town_city`, `phone`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$EJp5iaCEV2oQ6z822vVjwOf68bw3je8qsR29MJY38I20ZQ38y8Lhe', NULL, 'avt1_637dd1a2b309d_221123_025410_jpg', 2, NULL, 'Son', 'vn', '26 nguyen tao', '10000', 'da nang', '0971213792', NULL, '2022-11-23 07:54:10'),
(9, 'QUẢNG HOÀNG SƠN', '1IT@VKU.UDN.VN', NULL, '$2y$10$EJp5iaCEV2oQ6z822vVjwOf68bw3je8qsR29MJY38I20ZQ38y8Lhe', NULL, 'avt1_637dd194e9f59_221123_025356_jpg', 0, NULL, 'son', 'Việt Nam', '10', '111', '11', '0971213792', '2022-11-21 15:51:39', '2022-11-23 07:53:56'),
(10, 'QUẢNG HOÀNG SƠN', 'admin1@gmail.com', NULL, '$2y$10$EJp5iaCEV2oQ6z822vVjwOf68bw3je8qsR29MJY38I20ZQ38y8Lhe', 'uy64UtALGzLpgV0spwuXIMwMtJ181kwEOlJJopKcnyMGo9kR5C5ldVKe6J5k', 'avt_637ba3ff936c8_221121_111455_jpg', 1, '111', 'son', 'Việt Nam', '10', '1', '1', '0971213792', '2022-11-21 16:14:55', '2022-11-21 16:14:55'),
(11, 'admin2', 'admin2@gmail.com', NULL, '$2y$10$EJp5iaCEV2oQ6z822vVjwOf68bw3je8qsR29MJY38I20ZQ38y8Lhe', NULL, 'avt1_637dd0d3a4925_221123_025043_jpg', 0, 'sdfghjm', 'dsasd', 'ád', 'sdfc', '11', 'edfg', '2222', '2022-11-23 07:50:43', '2022-11-23 07:50:43'),
(12, 'sondeptria', 'sondeptrai@gmail.com', NULL, '$2y$10$EJp5iaCEV2oQ6z822vVjwOf68bw3je8qsR29MJY38I20ZQ38y8Lhe', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-24 10:34:20', '2023-06-24 10:34:20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
