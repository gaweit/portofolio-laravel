-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 28, 2021 at 07:32 PM
-- Server version: 10.3.32-MariaDB-log-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xdcom_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`, `cv`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Hello.. My name is Marpoyah, I am web developer (full stack dev) from Padang, West Sumatra, Indonesia. I have rich experience in web site design and building and customization, also I am good at Laravel. My Experience: Designer, API Integration, Web Developer.', 'uploads/1640688248.pdf', 'uploads/1640688341.webp', '2021-12-25 01:03:56', '2021-12-25 01:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SEO', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(2, 'Webdesign', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(3, 'Work', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(4, 'Wordpress', '2021-12-25 01:03:56', '2021-12-25 01:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, '082377823390', 'mycoding@401xd.com', '401XD Group, Padang, Indonesia', '2021-12-25 01:03:56', '2021-12-25 01:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `experinces`
--

CREATE TABLE `experinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experinces`
--

INSERT INTO `experinces` (`id`, `title`, `date`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Dribbble Designer', '2014 / 2015', 'fab fa-dribbble', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...', '2021-12-25 01:03:56', '2021-12-28 03:54:30'),
(2, 'Twitter Developer', '2016 / 2017', 'fab fa-twitter', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...', '2021-12-25 01:03:56', '2021-12-28 03:54:40'),
(3, 'Google Designer', '2010 / 2019', 'fab fa-google', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...', '2021-12-25 01:03:56', '2021-12-28 03:54:50'),
(4, 'Twitter API Integration', '2004 / 2008', 'fab fa-twitter', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...', '2021-12-25 01:03:56', '2021-12-28 03:55:36'),
(5, 'Twitter UI/UX Design', '2014 / 2015', 'fab fa-twitter', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...', '2021-12-25 01:03:56', '2021-12-28 03:55:21'),
(6, 'Twitter Web Designer', '2018 / 2020', 'fab fa-twitter', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...', '2021-12-25 01:03:56', '2021-12-28 03:55:45');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ml` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`id`, `key`, `en`, `bn`, `pt`, `hi`, `ml`, `custom`, `created_at`, `updated_at`) VALUES
(1, 'hire_link', 'Hire Me Now', 'আমাকে ভাড়া করুন', 'contrate-me', 'मुझे चुनिएँ', 'എന്നെ നിയമിക്കൂ', 'Hubungi Saya', '2021-12-25 01:03:56', '2021-12-28 04:04:36'),
(2, 'i_am', 'I Am', 'আমি', 'eu sou', 'मैं हूँ', 'ഞാൻ', 'I Am', '2021-12-25 01:03:56', '2021-12-28 04:08:02'),
(3, 'about_me', 'ABOUT ME', 'আমার সম্পর্কে', 'SOBRE MIM', 'मेरे बारे में', 'എന്നെ പറ്റി', 'TENTANG SAYA', '2021-12-25 01:03:56', '2021-12-28 04:05:14'),
(4, 'skill', 'My Skills.', 'আমার স্কিল', 'minhas habilidades', 'मेरे कौशल', 'എന്റെ കഴിവുകൾ.', 'Keahlian', '2021-12-25 01:03:56', '2021-12-28 04:08:13'),
(5, 'experince', 'My Experience', 'আমার অভিজ্ঞতা', 'Minha experiência', 'मेरा अनुभव', 'എന്റെ അനുഭവം', 'Pengalaman', '2021-12-25 01:03:56', '2021-12-28 04:05:41'),
(6, 'service', 'My Services', 'আমার সেবা', 'Meu serviço', 'मेरी सेवा', 'എന്റെ സേവനം', 'Layanan', '2021-12-25 01:03:56', '2021-12-28 04:05:50'),
(7, 'work', 'My Works', 'আমার কাজ', 'Meus trabalhos', 'मेरा काम', 'എന്റെ കൃതികൾ', 'Pekerjaan', '2021-12-25 01:03:56', '2021-12-28 04:05:57'),
(8, 'contact', 'Contact Me', 'আমার সাথে যোগাযোগ করুন', 'Entre em contato comigo', 'मुझसे संपर्क करें', 'എന്നെ ബന്ധപ്പെടുക', 'Hubungi Saya', '2021-12-25 01:03:56', '2021-12-28 04:06:04'),
(9, 'subs_email', 'Get The latest Update by Email', 'ইমেল দ্বারা সর্বশেষ আপডেট পান', 'Receba as atualizações mais recentes por email', 'ईमेल द्वारा नवीनतम अद्यतन प्राप्त करें', 'ഇമെയിൽ വഴി ഏറ്റവും പുതിയ അപ്‌ഡേറ്റുകൾ നേടുക', 'Dapatkan Pembaruan terbaru melalui Email', '2021-12-25 01:03:56', '2021-12-28 04:06:15'),
(10, 'cv', 'Download CV', 'সিভি ডাউনলোড করুন', 'Baixar CV', 'डाउनलोड सीवी', 'സിവി ഡൗൺലോഡുചെയ്യുക', 'Download CV', '2021-12-25 01:03:56', '2021-12-28 04:07:48'),
(11, 'phone', 'Call Me', 'আমাদের কল করুন', 'Ligue-nos', 'हमें फोन करें', 'ഞങ്ങളെ വിളിക്കുക', 'Hubungi Saya', '2021-12-25 01:03:56', '2021-12-28 04:07:43'),
(12, 'email', 'Email Us At', 'আমাদের ইমেল করুন', 'Envie-nos um e-mail para', 'हमें ईमेल करें', 'ഞങ്ങൾക്ക് ഇമെയിൽ ചെയ്യുക', 'Email Kami Di', '2021-12-25 01:03:56', '2021-12-28 04:07:34'),
(13, 'office', 'Visit Office', 'অফিস দেখুন', 'Visite o escritório', 'कार्यालय पर जाएँ', 'ഓഫീസ് സന്ദർശിക്കുക', 'Kunjungi Kantor', '2021-12-25 01:03:56', '2021-12-28 04:07:26'),
(14, 'sendmsg', 'Send Message', 'বার্তা পাঠান', 'enviar mensagem', 'मेसेज भेजें', 'സന്ദേശം അയയ്ക്കുക', 'Kirim Pesan', '2021-12-25 01:03:56', '2021-12-28 04:07:13'),
(15, 'subscibe', 'Subscibe', 'সাবস্ক্রাইব', 'se inscrever', 'सदस्यता लेने के', 'സബ്‌സ്‌ക്രൈബുചെയ്യുക', 'Berlangganan', '2021-12-25 01:03:56', '2021-12-28 04:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `target`, `name`, `created_at`, `updated_at`) VALUES
(1, '#home', 'Beranda', '2021-12-25 01:03:56', '2021-12-28 04:08:35'),
(2, '#about', 'Tentang', '2021-12-25 01:03:56', '2021-12-28 04:09:39'),
(3, '#service', 'Layanan', '2021-12-25 01:03:56', '2021-12-28 04:08:40'),
(4, '#portfolio', 'Portfolio', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(5, '#contact', 'Kontak', '2021-12-25 01:03:56', '2021-12-28 04:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_13_172510_create_tagline_table', 1),
(5, '2020_02_13_172539_create_about_table', 1),
(6, '2020_02_13_172603_create_skills_table', 1),
(7, '2020_02_13_172630_create_services_table', 1),
(8, '2020_02_13_172700_create_portfolio_table', 1),
(9, '2020_02_13_172732_create_testimonials_table', 1),
(10, '2020_02_13_172817_create_subscribers_table', 1),
(11, '2020_02_13_172843_create_contacts_table', 1),
(12, '2020_02_13_172908_create_settings_table', 1),
(13, '2020_02_13_172934_create_socials_table', 1),
(14, '2020_02_13_174757_create_category_table', 1),
(15, '2020_02_13_175502_create_scripts_table', 1),
(16, '2020_02_17_075335_create_seo_table', 1),
(17, '2020_02_19_155502_create_experinces_table', 1),
(18, '2020_02_26_120716_create_lang_table', 1),
(19, '2020_02_26_153930_create_menus_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `image`, `title`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'frontend/img/portfolio/1.jpg', '<a href=\"#\" target=\"_self\" id=\"link\">Creative Web Design</a> ', 1, '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(2, 'frontend/img/portfolio/2.jpg', '<a href=\"#\" target=\"_self\" id=\"link\">Attendence Mangment</a> ', 2, '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(3, 'frontend/img/portfolio/3.jpg', '<a href=\"#\" target=\"_self\" id=\"link\">Book Store Wocommerce</a> ', 3, '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(4, 'frontend/img/portfolio/4.jpg', '<a href=\"#\" target=\"_self\" id=\"link\">Multi Vendor Ecommerce</a> ', 4, '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(5, 'frontend/img/portfolio/5.jpg', '<a href=\"#\" target=\"_self\" id=\"link\">Laravel Multi Authentication</a> ', 5, '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(6, 'frontend/img/portfolio/6.jpg', '<a href=\"#\" target=\"_self\" id=\"link\">Creative Html5 Template</a> ', 6, '2021-12-25 01:03:56', '2021-12-25 01:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `scripts`
--

CREATE TABLE `scripts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `css` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `js` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scripts`
--

INSERT INTO `scripts` (`id`, `css`, `js`, `created_at`, `updated_at`) VALUES
(1, '<!-- Tambahkan CSS, JS, atau Kode Custom Header-->', '<!-- Tambahkan CSS, JS, atau Kode Custom Footer-->', '2021-12-25 01:03:56', '2021-12-28 04:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `meta_title`, `author`, `meta_tags`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'MC Project - Semua Tentang MC Project', 'MC Project', 'MC Project, My Portfolio, Web Portfolio', 'My name is MC Project, I am web developer (full stack dev) from Padang, West Sumatra, Indonesia. I have rich experience in web site design and building and customization, also I am good at Laravel. My Experience: Designer, API Integration, Web Developer.', '2021-12-25 01:03:56', '2021-12-25 01:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'frontend/img/service/4.png', 'Google Analytics', 'Lorem ipsum dolor sit amet consectetur adipisicing', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(2, 'frontend/img/service/5.png', 'Digital Marketing', 'Lorem ipsum dolor sit amet consectetur adipisicing', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(3, 'frontend/img/service/6.png', 'Content Managment', 'Lorem ipsum dolor sit amet consectetur adipisicing', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(4, 'frontend/img/service/1.png', 'Web Development', 'Lorem ipsum dolor sit amet consectetur adipisicing', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(5, 'frontend/img/service/2.png', 'Api integration', 'Lorem ipsum dolor sit amet consectetur adipisicing', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(6, 'frontend/img/service/3.png', 'Srarch Engine', 'Lorem ipsum dolor sit amet consectetur adipisicing', '2021-12-25 01:03:56', '2021-12-25 01:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ui` int(11) NOT NULL DEFAULT 1,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `mailchimp_api_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailchimp_list_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscribe_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hire_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `ui`, `site_name`, `home_img`, `lang`, `mailchimp_api_key`, `mailchimp_list_id`, `service_description`, `portfolio_description`, `subscribe_description`, `contact_description`, `hire_link`, `created_at`, `updated_at`) VALUES
(1, 'uploads/1640690349.png', 'uploads/16406901552.ico', 1, 'MCProject', 'uploads/home_bg.jpg', 'custom', NULL, NULL, 'Berfokus pada pengembangan, produksi dan pendistribusian karya desain, artikel, script pemrograman, source code, software aplikasi, tools, plugin, tema, dan template.', 'Toko produk digital dan jasa freelance di Indonesia. Berfokus pada pengembangan, produksi dan pendistribusian karya desain, artikel, script pemrograman, source code, software aplikasi, tools, plugin, tema, dan template.', 'Berlangganan newsletter untuk menerima informasi promo, produk gratis, berita, tutorial, pembaruan, dan rilis terbaru.', 'Anda bisa tanyakan apa saja, dan meminta bantuan apapun terkait produk dan layanan, jika ada kesulitan atau kendala silakan hubungi kami melalui dukungan pelanggan. WhatsApp 082377823390.', 'https://portfolio.401xd.com/uploads/1640688248.pdf', '2021-12-25 01:03:56', '2021-12-25 01:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `percent`, `created_at`, `updated_at`) VALUES
(1, 'Html', '95', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(2, 'Css', '90', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(3, 'Js', '60', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(4, 'PHP', '80', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(5, 'API', '85', '2021-12-28 03:56:44', '2021-12-28 03:56:44'),
(6, 'Security', '90', '2021-12-28 03:57:09', '2021-12-28 03:57:09'),
(7, 'Laravel', '100', '2021-12-28 03:57:50', '2021-12-28 03:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(1, 'fab fa-facebook', 'https://facebook.com/mycodingxd', '2021-12-25 01:03:56', '2021-12-28 04:02:05'),
(2, 'fab fa-youtube', 'https://youtube.com/c/mycodingxd', '2021-12-25 01:03:56', '2021-12-28 04:03:46'),
(3, 'fab fa-instagram', 'https://instagram.com/mycodingxd', '2021-12-25 01:03:56', '2021-12-28 04:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, '401xdssh@gmail.com', '2021-12-28 04:51:53', '2021-12-28 04:51:53'),
(2, '401xdssh@gmail.com', '2021-12-28 04:51:53', '2021-12-28 04:51:53'),
(3, '401xdssh@gmail.com', '2021-12-28 04:51:54', '2021-12-28 04:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `tagline`
--

CREATE TABLE `tagline` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_line` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tagline`
--

INSERT INTO `tagline` (`id`, `tag_line`, `created_at`, `updated_at`) VALUES
(1, 'Grapics Designer', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(2, 'Web Developer', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(3, 'Laravel Developer', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(4, 'UI/UX Designer', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(5, 'Frontend Developer', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(6, 'Backend Developer', '2021-12-28 03:53:15', '2021-12-28 03:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `avatar`, `position`, `review`, `created_at`, `updated_at`) VALUES
(1, 'Jhone Doe', 'frontend/img/profile/2.jpg', 'Xtream SoftTech', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(2, 'Jane Doe', 'frontend/img/profile/1.jpg', 'LionCoders', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an', '2021-12-25 01:03:56', '2021-12-25 01:03:56'),
(3, 'Mic Jhone', 'frontend/img/profile/3.jpg', 'XeonBD', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an', '2021-12-25 01:03:56', '2021-12-25 01:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'uploads/1579784693.png', '401xdssh@gmail.com', NULL, '$2y$10$8kLK60BoJr/t1ZVZLDdySuSg.4T1UQxLs6Ha83Fmp0CxD2RUarGVS', NULL, '2021-12-25 01:03:56', '2021-12-28 04:34:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experinces`
--
ALTER TABLE `experinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scripts`
--
ALTER TABLE `scripts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagline`
--
ALTER TABLE `tagline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experinces`
--
ALTER TABLE `experinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lang`
--
ALTER TABLE `lang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `scripts`
--
ALTER TABLE `scripts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tagline`
--
ALTER TABLE `tagline`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
