-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2024 at 03:35 PM
-- Server version: 10.3.39-MariaDB
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pathgrih_staging`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `mission_title` varchar(255) NOT NULL,
  `mission_description` text NOT NULL,
  `vision_title` varchar(255) NOT NULL,
  `vision_description` text NOT NULL,
  `about_title` varchar(255) DEFAULT NULL,
  `about_description` text DEFAULT NULL,
  `story_title` varchar(255) DEFAULT NULL,
  `story_description` text DEFAULT NULL,
  `video_title` varchar(255) DEFAULT NULL,
  `video_description` text DEFAULT NULL,
  `video_iframe` text DEFAULT NULL,
  `btn_title` text DEFAULT NULL,
  `btn_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `heading`, `title`, `description`, `mission_title`, `mission_description`, `vision_title`, `vision_description`, `about_title`, `about_description`, `story_title`, `story_description`, `video_title`, `video_description`, `video_iframe`, `btn_title`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT US', 'We are Team Pathgriho', '<h5 class=\"text-xl font-bold mb-5\" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-weight: 700; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; line-height: 1.75rem; font-family: Oswald, sans-serif;\"><span style=\"background-color: rgb(255, 255, 255);\">A crazy group of people to inspire a nation</span></h5><p class=\"text-xl opacity-80 subpixel-antialiased leading-8 text-justify\" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-align: justify; font-size: 1.25rem; line-height: 2rem; -webkit-font-smoothing: auto; font-family: Oswald, sans-serif;\"><span style=\"background-color: rgb(255, 255, 255);\">A passionate group of people who wishes to inspire a nation and beyond. Bidyanondo is an educational voluntary organization that originated from Bangladesh. The official registration No. is S-12258/2015). Bidyanondo has been operated by 40 professionals and with help of thousands of volunteers. Our mission is to globally foster philanthropic works. By designing innovative and inspiring programs, our goal is to engage students and professionals to work together to educate, empower and lift the underprivileged. One of our endeavors is to provide free education, educational materials and support. We have established libraries and a printing press for original publications. Our motto is to teach with compassion where a good human being is developed rather than a typical human who is only professionally equipped. Starting from volunteers, their children, refugees, street children and orphans, anyone with an underprivileged background is welcome at our door. One of the highly successful projects that we carried out is the Ak-Taka-Ahar (One-taka-meal) program. Here we let people come in and purchase a meal for only 1 taka/0.012 USD. This guarantees entitlement to food while feeling self-reliance by purchasing with a minimum cost and at the same time having a decent, healthy meal with dignity. Under this program, we also provide food for people under the age of 12 and over 60 years old people. This successful venture has inspired us to launch One-Taka-Bazaar where any item sold is just 1 taka/ 0.012 USD and 1 taka Chikistsha ( One-taka-treatment). Anyone who has a need can come to get service just by paying 1 taka and we supplement the rest by crowdfunding.</span></p>', 'Our Mission', 'Our mission is to provide education, nourishment, mental and physical support to the distressed and to make people self sufficient by permanently rehabilitating them.', 'Our vision', 'Our vision is to spread humanity, kindness and bring social justice. We believe that good brings only more good and everyone deserves to live in a peaceful environment.', 'Where we work', '<span style=\"font-family: Oswald, sans-serif; font-size: 20px; text-align: justify; background-color: rgb(255, 255, 255);\">Bidyanondo initially started as an organization serving the poor communities by making learning fun and engaging. Later by crowdfunding and by massive support from the citizens of Bangladesh and International well wishers and donors we have grown into one of the biggest charities in Bangladesh. We have 6 orphanages, schools, libraries, printing press, Rohingya refugee shelters, shelters for domestic violence victims, shelters for new mothers and children who are outcast, garments and women empowerment endeavours where we train, educate and make them self sufficient. We also recently launched the CMP-Bidyanondo Field Hospital dedicated to provide quality treatment, free of cost for the CoronaVirus treatment of distressed citizens. Another new hospital is also in the making to serve the underprivileged. Some of our localised projects are flood relief, educational assistance, free eatery, religious festivals celebrations for the poor, job training etc. We generally work with some of the most vulnerable demographics and specialize in disaster relief works. Our base is in Bangladesh, South America and in North America.</span>', 'Our story', '<p><span style=\"font-family: Oswald, sans-serif; font-size: 20px; text-align: justify;\">The founder of Bidyanondo is Mr. Kishor Kumar Das, a Peru based Corporate Professional. He is a social activist and coming from an underprivileged backdrop has seen first hand how much a person has to struggle and endure to meet the simplest of human rights like food, shelter and education. Withstanding all odds he made a successful career and dreamed of forming an institution where people will be treated with dignity and their basic needs will be met while giving them a way to be self-sufficient. To serve Bidyanondo better, Mr. Kishor eventually left his highly acclaimed profession and now invests his full time to carry it further. He initiates projects that solve complex problems with his uniqueness, effectiveness and originality. Later a team of domestic and international members from various backgrounds with varied skill sets came together and joined Bidyanondo. With their time, effort, intellect, skills, networks and financial support the charity thrived. The idea eventually took shape in the form of the currently running foundation, providing education, shelter, nutrition, healthcare & legal aid to the impoverished and enabling them with skills, giving them the confidence to stand on the same pedestal as their peers. Bidyanondo started it\'s journey with just 22 students at Narayanganj in 22 December, 2013. Currently it has eight branches nationwide with hundreds of volunteers, two orphanages in Ramu & Rajbari with 135 orphan child, one Old Age Home, One full Primary school on it\'s own land with 250 students, Two libraries with thousands of books open for all. Besides these, Bidyanondo has been conducted some unique and innovative programs such as One Taka Meal, One Taka Medical Aid, One Glass of Milk, Free academic coaching, Orphanage Center, Free University admission Coaching, Scholarship Program, Photography for children, Women Empowerment, Training Center etc. Now Bidyanondo has reached a position where the name has become synonymous with trust and care. People donate here with ease and support wholeheartedly. The engaging and innovative endeavours launched in Bangladesh have become incredibly fruitful and now it has been replicated in branches across South America and North America.</span><br></p>', 'Join us', 'We need your support to spread our services and bring happiness through a cooperation and team work.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Ahwoks_dawU?si=sw0QZoPbLlJGYmhC\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Join as a Volenteers', '#', '2024-02-18 10:12:51', '2024-02-18 11:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `about_external_links`
--

CREATE TABLE `about_external_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_external_links`
--

INSERT INTO `about_external_links` (`id`, `title`, `link`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sponsor A Child', '#', 1, 1, '2024-02-16 17:27:53', '2024-02-16 17:27:53'),
(2, 'General', '#', 2, 1, '2024-02-16 17:28:16', '2024-02-16 17:28:16'),
(3, 'Donation', '#', 3, 1, '2024-02-16 17:28:26', '2024-02-16 17:28:26'),
(4, 'Career', '#', 4, 1, '2024-02-16 17:28:35', '2024-02-16 17:28:35'),
(5, 'News & Updates', '#', 5, 1, '2024-02-16 17:28:43', '2024-02-16 17:28:43'),
(6, 'Contact Us', '#', 6, 1, '2024-02-16 17:28:50', '2024-02-16 17:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `about_u_s_bottoms`
--

CREATE TABLE `about_u_s_bottoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `btntext` varchar(255) NOT NULL,
  `btnurl` varchar(255) NOT NULL,
  `iframe` text NOT NULL,
  `bticon` varchar(255) NOT NULL,
  `bttext` varchar(255) NOT NULL,
  `btdes` text NOT NULL,
  `btbtntxt` varchar(255) NOT NULL,
  `btbtnurl` varchar(255) NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_u_s_bottoms`
--

INSERT INTO `about_u_s_bottoms` (`id`, `title`, `des`, `btntext`, `btnurl`, `iframe`, `bticon`, `bttext`, `btdes`, `btbtntxt`, `btbtnurl`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Join us', 'We need your support to spread our services and bring happiness through a cooperation and team work.', 'join us', 'https://www.com', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ZIe4qtGevoc?si=ATiCa3elT4MgeiXv\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '<i class=\"fas fa-dollar-sign\"></i>', 'Donate Now', '<p>Bidyanondo is always with you at any crisis in Bangladesh to help and support you.</p>', 'sponsor now', 'https://www.com', NULL, 1, '2024-02-13 06:04:04', '2024-02-18 09:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `about_u_s_tops`
--

CREATE TABLE `about_u_s_tops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_u_s_tops`
--

INSERT INTO `about_u_s_tops` (`id`, `title`, `description`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(2, 'We are Team Pathgriho', '<p><span style=\"font-family: Poppins, sans-serif; font-size: 20px; text-align: justify; background-color: rgb(248, 250, 252);\">A passionate group of people who wishes to inspire a nation and beyond. Bidyanondo is an educational voluntary organization that originated from Bangladesh. The official registration No. is S-12258/2015). Bidyanondo has been operated by 40 professionals and with help of thousands of volunteers. Our mission is to globally foster philanthropic works. By designing innovative and inspiring programs, our goal is to engage students and professionals to work together to educate, empower and lift the underprivileged. One of our endeavors is to provide free education, educational materials and support. We have established libraries and a printing press for original publications. Our motto is to teach with compassion where a good human being is developed rather than a typical human who is only professionally equipped. Starting from volunteers, their children, refugees, street children and orphans, anyone with an underprivileged background is welcome at our door. One of the highly successful projects that we carried out is the Ak-Taka-Ahar (One-taka-meal) program. Here we let people come in and purchase a meal for only 1 taka/0.012 USD. This guarantees entitlement to food while feeling self-reliance by purchasing with a minimum cost and at the same time having a decent, healthy meal with dignity. Under this program, we also provide food for people under the age of 12 and over 60 years old people. This successful venture has inspired us to launch One-Taka-Bazaar where any item sold is just 1 taka/ 0.012 USD and 1 taka Chikistsha ( One-taka-treatment). Anyone who has a need can come to get service just by paying 1 taka and we supplement the rest by crowdfunding.</span><br></p>', 0, 1, '2024-02-14 08:22:26', '2024-02-14 08:22:26'),
(3, 'Vision & Mission', '<h2 class=\"text-5xl font-oswald font-bold text-primary \" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-size: 3rem; font-weight: 700; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: Oswald, sans-serif; line-height: 1; --tw-text-opacity: 1; background-color: rgb(248, 250, 252);\"><p class=\"text-xl opacity-80 subpixel-antialiased leading-8 text-justify mb-5\" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; text-align: justify; font-size: 1.25rem; line-height: 2rem; -webkit-font-smoothing: auto; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-weight: 400;\"><span class=\"font-bold text-2xl text-primary\" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-size: 1.5rem; line-height: 2rem; font-weight: 700; --tw-text-opacity: 1;\">Vision:</span>&nbsp;Our vision is to spread humanity, kindness and bring social justice. We believe that good brings only more good and everyone deserves to live in a peaceful environment.</p><p class=\"text-xl opacity-80 subpixel-antialiased leading-8 text-justify\" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-align: justify; font-size: 1.25rem; line-height: 2rem; -webkit-font-smoothing: auto; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-weight: 400;\"><span class=\"font-bold text-2xl text-primary\" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-size: 1.5rem; line-height: 2rem; font-weight: 700; --tw-text-opacity: 1;\">Mission:</span>&nbsp;Our mission is to provide education, nourishment, mental and physical support to the distressed and to make people self sufficient by permanently rehabilitating them.</p></h2>', 0, 1, '2024-02-14 08:23:11', '2024-02-14 08:23:11'),
(4, 'Where we work', '<p><span style=\"font-family: Poppins, sans-serif; font-size: 20px; text-align: justify; background-color: rgb(248, 250, 252);\">Bidyanondo initially started as an organization serving the poor communities by making learning fun and engaging. Later by crowdfunding and by massive support from the citizens of Bangladesh and International well wishers and donors we have grown into one of the biggest charities in Bangladesh. We have 6 orphanages, schools, libraries, printing press, Rohingya refugee shelters, shelters for domestic violence victims, shelters for new mothers and children who are outcast, garments and women empowerment endeavours where we train, educate and make them self sufficient. We also recently launched the CMP-Bidyanondo Field Hospital dedicated to provide quality treatment, free of cost for the CoronaVirus treatment of distressed citizens. Another new hospital is also in the making to serve the underprivileged. Some of our localised projects are flood relief, educational assistance, free eatery, religious festivals celebrations for the poor, job training etc. We generally work with some of the most vulnerable demographics and specialize in disaster relief works. Our base is in Bangladesh, South America and in North America.</span><br></p>', 0, 1, '2024-02-14 08:23:50', '2024-02-14 08:23:50'),
(5, 'Our story', '<div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-white); text-align: var(--bs-body-text-align); font-size: 20px;\"><font face=\"Poppins, sans-serif\">The founder of Bidyanondo is Mr. Kishor Kumar Das, a Peru based Corporate Professional. He is a social activist and coming from an underprivileged backdrop has seen first hand how much a person has to struggle and endure to meet the simplest of human rights like food, shelter and education. Withstanding all odds he made a successful career and dreamed of forming an institution where people will be treated with dignity and their basic needs will be met while giving them a way to be self-sufficient. To serve Bidyanondo better, Mr. Kishor eventually left his highly acclaimed profession and now invests his full time to carry it further. He initiates projects that solve complex problems with his uniqueness, effectiveness and originality. Later a team of domestic and international members from various backgrounds with varied skill sets came together and joined Bidyanondo. With their time, effort, intellect, skills, networks and financial support the charity thrived. The idea eventually took shape in the form of the currently running foundation, providing education, shelter, nutrition, healthcare &amp; legal aid to the impoverished and enabling them with skills, giving them the confidence to stand on the same pedestal as their peers. Bidyanondo started it\'s journey with just 22 students at Narayanganj in 22 December, 2013. Currently it has eight branches nationwide with hundreds of volunteers, two orphanages in Ramu &amp; Rajbari with 135 orphan child, one Old Age Home, One full Primary school on it\'s own land with 250 students, Two libraries with thousands of books open for all. Besides these, Bidyanondo has been conducted some unique and innovative programs such as One Taka Meal, One Taka Medical Aid, One Glass of Milk, Free academic coaching, Orphanage Center, Free University admission Coaching, Scholarship Program, Photography for children, Women Empowerment, Training Center etc. Now Bidyanondo has reached a position where the name has become synonymous with trust and care. People donate here with ease and support wholeheartedly. The engaging and innovative endeavours launched in Bangladesh have become incredibly fruitful and now it has been replicated in branches across South America and North America.</font></span></div>', 0, 1, '2024-02-14 08:24:29', '2024-02-18 09:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menus`
--

CREATE TABLE `admin_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `route` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menus`
--

INSERT INTO `admin_menus` (`id`, `permission_id`, `parent_id`, `name`, `route`, `icon`, `order`, `status`, `delete`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Settings', NULL, '<i class=\"far fa-cogs\"></i>', 100, 1, 1, '2024-02-07 07:55:58', '2024-02-07 07:55:58'),
(2, 2, 1, 'App Setting', 'admin.settings.index', NULL, 1, 1, 1, '2024-02-07 07:57:10', '2024-02-07 07:57:10'),
(3, 3, 1, 'Admin Setting', 'admin.admin-settings.index', '<i class=\"far fa-user-cog\"></i>', 2, 1, 1, '2024-02-07 07:58:56', '2024-02-07 07:58:56'),
(4, 4, 1, 'Client Menu', 'admin.client-navigation-menu.index', '<i class=\"far fa-laptop-house\"></i>', 2, 1, 1, '2024-02-07 09:08:18', '2024-02-07 10:58:53'),
(5, 5, 1, 'Admin Menu', 'admin.admin-menu.index', '<i class=\"far fa-cogs\"></i>', 4, 1, 1, '2024-02-07 10:19:56', '2024-02-07 10:19:56'),
(6, 9, NULL, 'Home Page', NULL, '<i class=\"far fa-home\"></i>', 1, 1, 1, '2024-02-08 06:54:37', '2024-02-08 06:54:37'),
(7, 10, 6, 'Slider', 'admin.slider.index', '<i class=\"far fa-laptop-house\"></i>', 1, 1, 1, '2024-02-08 06:55:10', '2024-02-08 06:55:10'),
(8, 13, NULL, 'Blog', 'admin.blog.index', '<i class=\"far fa-blog\"></i>', 2, 1, 1, '2024-02-08 09:02:30', '2024-02-08 09:02:30'),
(9, 16, 6, 'Testimonial', 'admin.testimonial.index', '<i class=\"far fa-user-cog\"></i>', 1, 1, 1, '2024-02-08 11:27:20', '2024-02-08 11:27:20'),
(10, 17, 6, 'Workout Section', 'admin.workout-section.index', '<i class=\"far fa-house-leave\"></i>', 3, 1, 1, '2024-02-08 15:54:57', '2024-02-08 16:37:06'),
(11, 20, NULL, 'Video Gallery', 'admin.video-gallery.index', '<i class=\"fas fa-video\"></i>', 3, 1, 1, '2024-02-10 06:09:45', '2024-02-10 06:09:45'),
(13, 26, NULL, 'Image Gallery', 'admin.image-gallery.index', '<i class=\"fas fa-photo-video\"></i>', 4, 1, 1, '2024-02-10 15:06:26', '2024-02-10 15:06:26'),
(17, 32, NULL, 'Team Page', NULL, '<i class=\"far fa-users-class\"></i>', 5, 1, 1, '2024-02-10 16:18:18', '2024-02-10 16:18:18'),
(18, 33, 17, 'Team Top', 'admin.team-top.index', NULL, 1, 1, 1, '2024-02-10 16:22:06', '2024-02-10 16:22:06'),
(20, 37, NULL, 'Faq Page', 'admin.faq.index', '<i class=\"fas fa-voicemail\"></i>', 6, 1, 1, '2024-02-12 06:55:44', '2024-02-13 07:38:16'),
(21, 38, NULL, 'Sticker & Banner Page', NULL, '<i class=\"fas fa-vote-yea\"></i>', 7, 1, 1, '2024-02-12 07:42:15', '2024-02-13 07:40:20'),
(22, 39, 21, 'Sticker & Banner Top Section', 'admin.sticker-banner-page-top.index', '<i class=\"fal fa-sticky-note\"></i>', 101, 1, 1, '2024-02-12 09:06:54', '2024-02-12 09:07:24'),
(23, 40, 21, 'Stickers', 'admin.stickers.index', NULL, 102, 1, 1, '2024-02-12 09:30:49', '2024-02-12 09:30:49'),
(24, 41, 21, 'X Banner', 'admin.x-banner.index', NULL, 103, 1, 1, '2024-02-12 09:54:02', '2024-02-12 09:54:02'),
(26, 43, NULL, 'Career Page', NULL, '<i class=\"fal fa-scarecrow\"></i>', 8, 1, 1, '2024-02-12 12:32:31', '2024-02-12 12:32:31'),
(30, 47, 26, 'Career Page Top Section', 'admin.career-top.index', NULL, 1, 0, 1, '2024-02-12 13:35:32', '2024-02-19 08:22:10'),
(31, 48, 26, 'Career vacant postion', 'admin.career-vacant-postion.index', NULL, 101, 0, 1, '2024-02-12 14:49:39', '2024-02-19 08:22:20'),
(32, 49, 26, 'Career Page Bottom Section', 'admin.careerpagebottom.index', NULL, 101, 0, 1, '2024-02-12 16:55:51', '2024-02-19 08:22:33'),
(33, 50, NULL, 'About Us page', NULL, '<i class=\"far fa-address-card\"></i>', 9, 0, 1, '2024-02-12 18:40:58', '2024-02-18 09:42:05'),
(34, 51, 33, 'About us top Section', 'admin.about-us-top.index', NULL, 1, 1, 1, '2024-02-12 18:41:48', '2024-02-18 09:41:49'),
(35, 52, 33, 'About Us Bottom Section', 'admin.about-us-bottom.index', NULL, 2, 1, 1, '2024-02-13 05:50:56', '2024-02-13 05:50:56'),
(36, 53, NULL, 'Contact Us Page', NULL, '<i class=\"fal fa-id-card-alt\"></i>', 10, 0, 1, '2024-02-13 06:38:14', '2024-02-18 12:50:32'),
(37, 54, 36, 'Contact us section', 'admin.contact-us.index', NULL, 1, 1, 1, '2024-02-13 06:40:54', '2024-02-13 06:40:54'),
(39, 56, 17, 'MANAGEMENT COMMITTEE LIST', 'admin.mclist.index', NULL, 2, 1, 1, '2024-02-13 09:00:51', '2024-02-13 09:00:51'),
(40, 57, 17, 'JUNIOR MANAGEMENT COMMITTEE LIST', 'admin.jmclist.index', NULL, 3, 1, 1, '2024-02-13 09:58:28', '2024-02-13 09:58:28'),
(41, 58, 17, 'BOARD MEMBERS LIST', 'admin.board-member.index', NULL, 4, 1, 1, '2024-02-13 09:59:55', '2024-02-13 10:11:48'),
(42, 59, 36, 'Contact Us Contact Section', 'admin.contact-main.index', NULL, 2, 1, 1, '2024-02-14 08:55:29', '2024-02-14 08:55:29'),
(43, 60, 1, 'Role Setup', 'admin.role.index', NULL, 5, 1, 1, '2024-02-15 04:35:35', '2024-02-15 04:35:35'),
(44, 61, 1, 'User Create', 'admin.user.index', NULL, 6, 1, 1, '2024-02-15 04:45:08', '2024-02-15 04:45:08'),
(45, 62, NULL, 'News & Articles', 'admin.news-and-article.index', '<i class=\"fal fa-newspaper\"></i>', 10, 1, 1, '2024-02-16 06:59:07', '2024-02-16 06:59:07'),
(46, 63, NULL, 'Footer Items Setup', 'admin.works-area-details.index', '<i class=\"far fa-football-ball\"></i>', 20, 1, 1, '2024-02-16 08:32:33', '2024-02-18 08:47:37'),
(47, 66, 33, 'About External Links', 'admin.about-external-link.index', '<i class=\"far fa-laptop-house\"></i>', 3, 1, 1, '2024-02-16 17:26:40', '2024-02-16 17:26:40'),
(48, 69, NULL, 'About Us Setup', 'admin.about.index', '<i class=\"fal fa-address-card\"></i>', 19, 1, 1, '2024-02-18 09:43:58', '2024-02-18 09:43:58'),
(49, 70, NULL, 'Contact Us Setup', 'admin.contact.index', '<i class=\"fal fa-address-card\"></i>', 17, 1, 1, '2024-02-18 12:51:43', '2024-02-18 12:51:43'),
(50, 71, NULL, 'Client Messages', 'admin.client-message.index', '<i class=\"fab fa-facebook-messenger\"></i>', 21, 1, 1, '2024-02-18 13:29:39', '2024-02-18 13:29:39'),
(51, 72, 26, 'Carrer Page Setup', 'admin.career.index', '<i class=\"far fa-football-ball\"></i>', 1, 1, 1, '2024-02-19 08:23:25', '2024-02-19 08:24:38'),
(52, 73, 26, 'Carrer Items Setup', 'admin.career-item.index', '<i class=\"far fa-football-ball\"></i>', 2, 1, 1, '2024-02-19 08:24:09', '2024-02-19 08:24:09'),
(53, 78, NULL, 'Whow We Are', '#', '<i class=\"fas fa-wand-magic\"></i>', 23, 1, 1, '2024-02-19 10:17:11', '2024-02-19 10:17:31'),
(54, 79, 53, 'Our Vision', 'admin.our-vision.index', NULL, 4, 1, 1, '2024-02-19 10:19:55', '2024-02-19 10:19:55'),
(55, 80, 53, 'Our Mission', 'admin.our-mission.index', NULL, 3, 1, 1, '2024-02-19 10:20:38', '2024-02-19 10:20:38'),
(56, 81, 57, 'Book Store', 'admin.book-store.index', '<i class=\"fal fa-book-heart\"></i>', 24, 1, 1, '2024-02-19 15:30:18', '2024-02-20 12:03:28'),
(57, 82, NULL, 'Store Management', NULL, '<i class=\"fal fa-book-heart\"></i>', 23, 1, 1, '2024-02-20 12:03:01', '2024-02-20 12:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu_actions`
--

CREATE TABLE `admin_menu_actions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `admin_menu_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `route` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menu_actions`
--

INSERT INTO `admin_menu_actions` (`id`, `permission_id`, `admin_menu_id`, `name`, `route`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 4, 'Create', 'admin.client-navigation-menu.create', 1, '2024-02-07 11:00:20', '2024-02-07 11:00:20'),
(2, 7, 4, 'Index', 'admin.client-navigation-menu.index', 1, '2024-02-07 11:00:48', '2024-02-07 11:00:48'),
(3, 8, 4, 'Edit', 'admin.client-navigation-menu.edit', 1, '2024-02-07 11:01:02', '2024-02-07 11:01:02'),
(4, 11, 7, 'Create', 'admin.slider.create', 1, '2024-02-08 06:55:40', '2024-02-08 06:55:40'),
(5, 12, 7, 'Edit', 'admin.slider.edit', 1, '2024-02-08 06:55:51', '2024-02-08 06:55:51'),
(6, 14, 8, 'Create', 'admin.blog.create', 1, '2024-02-08 09:02:59', '2024-02-08 09:02:59'),
(7, 15, 8, 'Edit', 'admin.blog.edit', 1, '2024-02-08 09:03:23', '2024-02-08 09:03:23'),
(8, 18, 10, 'Create', 'admin.workout-section.create', 1, '2024-02-08 15:56:38', '2024-02-08 15:56:38'),
(9, 19, 10, 'Edit', 'admin.workout-section.edit', 1, '2024-02-08 15:56:49', '2024-02-08 15:56:49'),
(10, 21, 11, 'Video create', 'admin.video-gallery.create', 1, '2024-02-10 06:20:09', '2024-02-10 06:39:47'),
(11, 22, 11, 'Video Edit', 'admin.video-gallery.edit', 1, '2024-02-10 06:20:50', '2024-02-10 06:20:50'),
(14, 27, 13, 'Image Create', 'admin.image-gallery.create', 1, '2024-02-10 15:07:32', '2024-02-10 15:07:32'),
(15, 28, 13, 'Image Edit', 'admin.image-gallery.edit', 1, '2024-02-10 15:08:09', '2024-02-10 15:08:09'),
(16, 35, 18, 'Team Page Top Section', 'admin.team-top.create', 1, '2024-02-10 16:51:20', '2024-02-10 16:51:20'),
(18, 64, 46, 'Create', 'admin.works-area-details.create', 1, '2024-02-16 08:33:01', '2024-02-16 08:33:01'),
(19, 65, 46, 'Edit', 'admin.works-area-details.edit', 1, '2024-02-16 08:33:09', '2024-02-16 08:33:09'),
(20, 67, 47, 'Create', 'admin.about-external-link.create', 1, '2024-02-16 17:27:01', '2024-02-16 17:27:01'),
(21, 68, 47, 'Edit', 'admin.about-external-link.edit', 1, '2024-02-16 17:27:09', '2024-02-16 17:27:09'),
(22, 74, 52, 'Create', 'admin.career-item.create', 1, '2024-02-19 08:25:24', '2024-02-19 08:26:35'),
(23, 75, 52, 'Edit', 'admin.career-item.edit', 1, '2024-02-19 08:25:39', '2024-02-19 08:26:26'),
(24, 76, 51, 'Create', 'admin.career.create', 1, '2024-02-19 08:28:59', '2024-02-19 08:28:59'),
(25, 77, 51, 'Edit', 'admin.career.edit', 1, '2024-02-19 08:29:13', '2024-02-19 08:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `admin_settings`
--

CREATE TABLE `admin_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `secondary_color` varchar(255) DEFAULT NULL,
  `primary_color` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_settings`
--

INSERT INTO `admin_settings` (`id`, `logo`, `favicon`, `title`, `footer_text`, `secondary_color`, `primary_color`, `facebook`, `twitter`, `linkedin`, `whatsapp`, `google`, `created_at`, `updated_at`) VALUES
(1, 'media/admin-setting/2024-02-20-tm0f4PrqO3wtXEUYKOEZiZr4xiKjhEq9G31n56Qg.png', 'media/admin-setting/2024-02-20-pvpSlQSERyiHEIxMkkgnOjEaGjimrUCiIzuv6lcO.png', 'Pathgriho', '@Copyright By', '#0094ab', '#000000', 'https://www.facebook.com/syedamir0', 'https://www.facebook.com/syedamir0', 'https://www.facebook.com/syedamir0', 'https://api.whatsapp.com/send?phone=01817807594', NULL, '2024-02-07 08:14:43', '2024-02-20 17:41:42');

-- --------------------------------------------------------

--
-- Table structure for table `app_settings`
--

CREATE TABLE `app_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `home_title` varchar(255) DEFAULT NULL,
  `faq_title` varchar(255) DEFAULT NULL,
  `services_title` varchar(255) DEFAULT NULL,
  `about_title` varchar(255) DEFAULT NULL,
  `search_title` varchar(255) DEFAULT NULL,
  `services_title_one` varchar(255) DEFAULT NULL,
  `services_title_two` varchar(255) DEFAULT NULL,
  `basic_title_one` varchar(255) DEFAULT NULL,
  `basic_title_two` text DEFAULT NULL,
  `basic_title_three` varchar(255) DEFAULT NULL,
  `basic_title_four` text DEFAULT NULL,
  `basic_title_five` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `secondary_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `banner_animation_image` varchar(255) DEFAULT NULL,
  `map_image` varchar(255) DEFAULT NULL,
  `footer_image` varchar(255) DEFAULT NULL,
  `footer_animation_image` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `threads` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `map_url` text DEFAULT NULL,
  `phone_one` varchar(255) DEFAULT NULL,
  `phone_two` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_settings`
--

INSERT INTO `app_settings` (`id`, `title`, `home_title`, `faq_title`, `services_title`, `about_title`, `search_title`, `services_title_one`, `services_title_two`, `basic_title_one`, `basic_title_two`, `basic_title_three`, `basic_title_four`, `basic_title_five`, `logo`, `secondary_logo`, `favicon`, `banner_image`, `banner_animation_image`, `map_image`, `footer_image`, `footer_animation_image`, `facebook`, `threads`, `youtube`, `whatsapp`, `twitter`, `instagram`, `linkedin`, `pinterest`, `map_url`, `phone_one`, `phone_two`, `email`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Pathgriho', NULL, 'Visit Our Facebook Page', 'Contact Us', 'About Us', 'Developed & Maintenance by Atlab', NULL, NULL, 'example.secondary@gmail.com', '<iframe             src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpathgrihobd&amp;tabs=timeline&amp;width=3000&amp;height=800&amp;small_header=true&amp;adapt_container_width=false&amp;hide_cover=false&amp;show_facepile=false&amp;appId\"             width=\"3000\"             height=\"240\"             style=\"border: none; overflow: hidden\"             scrolling=\"no\"             frameborder=\"0\"             allowfullscreen=\"true\"             allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\"           ></iframe>', 'Pathgriho Foundation, Grihobasider Milonmela, Bangladesh.', 'Pathgriho Foundation is a non-profit organization that empowers               underprivileged individuals and communities in Bangladesh               through education, youth development, women’s empowerment,               climate change, governance and poverty alleviation.', 'Pathgriho Foundation', 'media/app-setting/2024-02-17-luJCWGPra3kDsekEdNeOeRQrADGZDg3pjJpHfbzK.jpg2024-02-17-jVd72TsD7IMSeJWMisJKORNkJPFL7rCQ20s9sQ0F.png', 'media/app-setting/2024-02-17-luJCWGPra3kDsekEdNeOeRQrADGZDg3pjJpHfbzK.jpg2024-02-17-jVd72TsD7IMSeJWMisJKORNkJPFL7rCQ20s9sQ0F.png2024-02-17-AItSiqpegrU951xhTWdWAY0wnIyAusl0XNnfbT1V.png', 'media/app-setting/2024-02-17-luJCWGPra3kDsekEdNeOeRQrADGZDg3pjJpHfbzK.jpg', 'media/app-setting/2024-02-17-luJCWGPra3kDsekEdNeOeRQrADGZDg3pjJpHfbzK.jpg2024-02-17-jVd72TsD7IMSeJWMisJKORNkJPFL7rCQ20s9sQ0F.png2024-02-17-AItSiqpegrU951xhTWdWAY0wnIyAusl0XNnfbT1V.png2024-02-17-2oWHqsirFHuzLgPGwXtBFuXj1BcTqmctPvmPhtqA.png', 'media/app-setting/2024-02-17-fo4gCoRtlBNdjez7J4WanNPiqLzM4zbbWQGivSv0.jpg', NULL, 'media/app-setting/2024-02-17-9XLhMz8rmy9K64srzM8kwqGEsX6xFU9H92NNQChd.png', 'media/app-setting/2024-02-17-fo4gCoRtlBNdjez7J4WanNPiqLzM4zbbWQGivSv0.jpg2024-02-17-Kr0I7eP9VTbJxJJwSkampwUoMrfW9qY8Zz5ip0SA.jpg2024-02-17-WcyMvaLYVBbQnjZWsrbSxOcz0LuvmfCtbNjwQMa1.jpg', 'https://www.facebook.com/pathgrihobd', NULL, '#', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.97303538515!2d90.33728788013568!3d23.780818635354535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1707900588217!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '+880 17807500', '+880 17807500', 'example@gmail.com', NULL, NULL, NULL, '2024-02-07 08:41:47', '2024-02-22 14:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `video_iframe` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `type` enum('primary','secondary','normal') NOT NULL,
  `tags` tinytext DEFAULT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `short_description`, `description`, `image`, `images`, `video_iframe`, `slug`, `author`, `type`, `tags`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(2, 'What\'s Your Name', '<p><span style=\"font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span></p><p><br></p>', '<p>DSF</p>', 'media/blog/2024-02-16-FImQkSJdtZjUmd8C3U8D38RAWMz7alyzblwX5iAv.jpg', '[\"media\\/blog\\/2024-02-08-4D7lUd34wbJX1PP7n7WoQ0kV97Y75HsQjSmcPSWA.jpg\",\"media\\/blog\\/2024-02-08-1P84mj9PWbaq4NhGDjM8aFt7pvMmeSUIMHgsLnaK.jpg\",\"media\\/blog\\/2024-02-08-uBB0iT1c4IHQXx0u2GX3MS0Vd6zedAetRPcNrlSM.jpg\",\"media\\/blog\\/2024-02-08-UXGmxdgm7VmWxBSN5Q0xxDQaZsXLWMp4N7uSmLVu.jpg\"]', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zKzYdpbVtCI?si=xKReoZ9zdREX5B5p\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'whats-your-name', 'Syed Amir Ali', 'primary', NULL, 1, 1, '2024-02-08 10:18:58', '2024-02-16 04:59:05'),
(3, 'Sponsor A Child', '<p class=\"text-md text-justify tracking-wide p-2.5\" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0.625rem; text-align: justify; font-size: 17px; letter-spacing: 0.025em; font-family: Oswald, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</p><p><a href=\"http://localhost/pathgriho/public/#\" class=\"w-full text-center pt-2.5 flex items-center justify-center\" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: inherit; display: flex; width: 342.797px; align-items: center; justify-content: center; padding-top: 0.625rem; font-family: Oswald, sans-serif; font-size: medium; font-weight: 400;\"></a></p>', NULL, 'media/blog/2024-02-15-9h9XjI7F60Ksm963Co9CqC7B1D38XwHEHspr1hR4.jpg', '[\"media\\/blog\\/2024-02-15-lnLgIQeOKTgY5B0iD5LRphNo0ZD2itNhTVXjeQLs.png\"]', NULL, 'sponsor-a-child', NULL, 'primary', NULL, 2, 1, '2024-02-15 11:40:49', '2024-02-15 11:40:49'),
(4, 'Sponsor A Child', '<p class=\"text-md text-justify tracking-wide p-2.5\" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0.625rem; text-align: justify; font-size: 17px; letter-spacing: 0.025em; font-family: Oswald, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</p><p><a href=\"http://localhost/pathgriho/public/#\" class=\"w-full text-center pt-2.5 flex items-center justify-center\" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: inherit; display: flex; width: 342.797px; align-items: center; justify-content: center; padding-top: 0.625rem; font-family: Oswald, sans-serif; font-size: medium; font-weight: 400;\"></a></p>', NULL, 'media/blog/2024-02-15-WhEUlu5OrEAzsqO2Fq1Rh719BtzU7tUhhVE8I9PH.jpg', '[\"media\\/blog\\/2024-02-15-0GCcFUZiWMMLAfsEUHxDZKbRMmgz72zwqAawaRrV.png\"]', NULL, 'sponsor-a-child-1', NULL, 'primary', NULL, 2, 1, '2024-02-15 11:41:14', '2024-02-15 11:41:14'),
(7, 'Secondary Blog Section', '<p><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><br></p>', '<p><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><br></p>', 'media/blog/2024-02-16-ZEocCe9tJuVAVYbiBt7KbcMB1LTN9fdccb00OdOU.jpg', '[\"media\\/blog\\/2024-02-16-t4DSky2P9z206VnBVSwJoV15At9vBhsMAywoCVRZ.jpg\",\"media\\/blog\\/2024-02-16-Gkecu3lFXU0MhRT0crrZj0YydIV9yxC8RUE4QMNM.jpg\",\"media\\/blog\\/2024-02-16-yL4hJKzzqVpFeRRXLVCk8pMIzQSldUfQaPh1SHW6.jpg\"]', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zKzYdpbVtCI?si=xKReoZ9zdREX5B5p\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'secondary-blog-section', 'Syed Amir Ali', 'secondary', 'Religion, Education, Peace', NULL, 1, '2024-02-16 04:58:29', '2024-02-16 04:58:29'),
(8, 'Secondary Blog Section', '<p><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><br></p>', '<p><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><br></p>', 'media/blog/2024-02-16-iL4wInhUjW53FQdK8thHOzRESYYWpQORYci22AmI.jpg', '[\"media\\/blog\\/2024-02-16-7K1sVptlWQzJ2qtdLdUToewuiUqZOWi6MI1JkCkT.jpg\",\"media\\/blog\\/2024-02-16-GPURHivaiVPjRaERfveeQGOQ5blbVJUNhPxmZif5.jpg\",\"media\\/blog\\/2024-02-16-C80cnGhNGEcX3HgEPmWyCgIyn09FK9ov9PLJHOZK.jpg\"]', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zKzYdpbVtCI?si=xKReoZ9zdREX5B5p\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'secondary-blog-section-1', 'Syed Amir Ali', 'secondary', 'Religion, Education, Peace', 2, 1, '2024-02-16 04:58:38', '2024-02-16 04:58:38'),
(9, 'Secondary Blog Section', '<p><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><br></p>', '<p><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><span style=\"color: rgb(51, 65, 85); font-family: Oswald, sans-serif; font-size: 17px; letter-spacing: 0.425px; text-align: justify; background-color: var(--bs-white);\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.</span><br></p>', 'media/blog/2024-02-16-GdNSF9p1pw3n8RW10ycu36ccXzKK4WiUalNI83Z1.jpg', '[\"media\\/blog\\/2024-02-16-xsxtjQBoa6Ej0Yu7y7aLtRjgpjZYMMaTFEECfCqa.jpg\",\"media\\/blog\\/2024-02-16-EpMVWXEYLNEJ0rT54S4RoxXghoDLjE41SP7fsGmN.jpg\",\"media\\/blog\\/2024-02-16-Q6Rdy4k17HEyLHgMwssBUaulOjitKgcnXAVErl8P.jpg\"]', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zKzYdpbVtCI?si=xKReoZ9zdREX5B5p\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'secondary-blog-section-2', 'Syed Amir Ali', 'secondary', 'Religion, Education, Peace', 3, 1, '2024-02-16 04:58:43', '2024-02-16 04:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `board_m_embers`
--

CREATE TABLE `board_m_embers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `board_m_embers`
--

INSERT INTO `board_m_embers` (`id`, `name`, `position`, `image`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Rasel ahmed', 'Chairman', 'media/boardmember/2024-02-14-sVvCZ8C5rObhE3UIFB4aHqajOOv0csHC5v7oc0LT.png', 0, 1, '2024-02-14 07:34:58', '2024-02-14 07:34:58'),
(4, 'sony ahmed', 'Chairman', 'media/boardmember/2024-02-14-lbyaI2o9HLD5LXHN1xzbWpaQFC84dvPxSUuuIJhX.png', 0, 1, '2024-02-14 07:35:24', '2024-02-14 07:35:24'),
(5, 'nasim', 'Chairman', 'media/boardmember/2024-02-14-fwtA1aAdsfBlfXl1HqW8D713qpGkaaXFXmS1mxD1.png', 0, 1, '2024-02-14 07:35:54', '2024-02-14 07:35:54'),
(6, 'Ruhin', 'Chairman', 'media/boardmember/2024-02-14-LR0kBVhQBujdwNdeRyvZxvMlKu26kXDrsFsRbDnp.png', 0, 1, '2024-02-14 07:36:26', '2024-02-14 07:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `book_stores`
--

CREATE TABLE `book_stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `photos` text DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keyword` varchar(255) DEFAULT NULL,
  `seo_description` text DEFAULT NULL,
  `writer` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `ratings` int(11) DEFAULT NULL,
  `reviews` int(11) DEFAULT NULL,
  `quantities` int(11) DEFAULT NULL,
  `discount_price` double(8,2) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'new',
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `serial` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_stores`
--

INSERT INTO `book_stores` (`id`, `name`, `description`, `thumbnail`, `photos`, `price`, `seo_title`, `seo_keyword`, `seo_description`, `writer`, `category`, `ratings`, `reviews`, `quantities`, `discount_price`, `type`, `slug`, `status`, `serial`, `created_at`, `updated_at`) VALUES
(1, 'A Magical Book', '<div style=\"font-family: &quot;Fira Code&quot;, &quot;Droid Sans Mono&quot;, &quot;monospace&quot;, monospace; font-size: 18px; line-height: 24px; white-space: pre;\"><span style=\"background-color: rgb(255, 255, 255);\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias sint, quibusdam aspernatur vel ea quas voluptatum doloremque odit ex incidunt unde enim, perspiciatis velit, quis praesentium reprehenderit officiis facere dolorem! Veniam, quia eaque eum fuga illo tempore ad rem ratione nesciunt qui eveniet expedita mollitia consequatur, modi vel laudantium saepe. Veniam enim rerum reiciendis facere voluptate, ex tempora hic eius! Cumque sequi fuga deserunt. Sed expedita cumque itaque eum reiciendis aliquid, ipsa quaerat tempora cum id eligendi, voluptas impedit. Optio earum sequi magni vitae nisi cumque deleniti voluptates cum pariatur? Quas praesentium maxime similique autem blanditiis minus iste dolores numquam repudiandae alias facere eum, necessitatibus mollitia corrupti cumque beatae. Praesentium placeat asperiores tenetur necessitatibus officia rerum odio, suscipit autem et? Natus, ipsam cum accusantium provident minus itaque nihil. Quasi fuga eos animi dignissimos est enim architecto, accusantium labore ratione? Dignissimos dolorum ducimus repellendus beatae doloremque cupiditate consequatur ipsa nihil excepturi. Quas minus praesentium beatae ipsam quaerat ea nesciunt quidem? Accusantium quibusdam consequatur commodi dolores tempora tempore explicabo obcaecati doloremque nostrum et voluptatibus officia nihil at fuga non totam, placeat facere? Aut impedit sint voluptatum, quisquam pariatur alias expedita quia sunt quos repellat officiis cumque eum libero autem doloremque accusantium quasi perspiciatis explicabo non. Expedita veniam excepturi voluptates illum repellendus modi. Nihil culpa, similique voluptatum sit deleniti aliquam doloremque impedit eaque earum minima est quam molestias repellendus, velit explicabo. Eum accusantium, illum quas natus optio quibusdam soluta! Voluptate reiciendis officia sint. Blanditiis illo quia sequi ipsa, nostrum mollitia explicabo laborum sint qui, est, fugit ipsam delectus totam porro ex. Necessitatibus magni nemo facere possimus earum ipsa exercitationem neque atque similique delectus! Architecto, illo. Exercitationem, nobis reiciendis fugit in nulla quasi alias ipsa magni dolor beatae odio aliquam ratione error minima optio blanditiis hic suscipit soluta incidunt debitis vero labore laboriosam. Reiciendis.</span></div>', 'media/book-store/2024-02-20-rzC5DTPimUzz3uR9A6CcFo2vxwF2GbwgLKUJ8Zg2.jpeg', '[\"media\\/book-store\\/2024-02-20-uxExhKnILT0eUlZwF7mcYCWfR9zrTpiJMLRHHmfc.jpeg\",\"media\\/book-store\\/2024-02-20-SOxenexk3rGgZ6U9EpZB3FR34IeSKecWf2KoZSAB.jpeg\",\"media\\/book-store\\/2024-02-20-lmT3RSJgeT85qsDjcdnmRaRgXHlgNuBNQBS61rbC.jpeg\",\"media\\/book-store\\/2024-02-20-UsWMuW7VCLfhRy2OJNlKi0F47dWi8l9ToKIqFzlg.jpeg\",\"media\\/book-store\\/2024-02-20-JRrI5Oz5cGCD8uJqDc6oqQxcp7WooLco09x0k38l.jpeg\"]', 90.00, 'Book', 'a, b, c', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptate, odio corporis accusamus possimus, quod harum ex repellat rerum placeat porro! Vel perferendis distinctio ex alias quaerat voluptatibus facere itaque.', 'Jhone Mercurry', 'Thriller', 4, 120, 140, 110.00, 'new', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit', 1, 1, '2024-02-20 11:29:48', '2024-02-20 11:29:48'),
(2, 'A Magical Book', '<div style=\"font-family: &quot;Fira Code&quot;, &quot;Droid Sans Mono&quot;, &quot;monospace&quot;, monospace; font-size: 18px; line-height: 24px; white-space: pre;\"><span style=\"background-color: rgb(255, 255, 255);\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias sint, quibusdam aspernatur vel ea quas voluptatum doloremque odit ex incidunt unde enim, perspiciatis velit, quis praesentium reprehenderit officiis facere dolorem! Veniam, quia eaque eum fuga illo tempore ad rem ratione nesciunt qui eveniet expedita mollitia consequatur, modi vel laudantium saepe. Veniam enim rerum reiciendis facere voluptate, ex tempora hic eius! Cumque sequi fuga deserunt. Sed expedita cumque itaque eum reiciendis aliquid, ipsa quaerat tempora cum id eligendi, voluptas impedit. Optio earum sequi magni vitae nisi cumque deleniti voluptates cum pariatur? Quas praesentium maxime similique autem blanditiis minus iste dolores numquam repudiandae alias facere eum, necessitatibus mollitia corrupti cumque beatae. Praesentium placeat asperiores tenetur necessitatibus officia rerum odio, suscipit autem et? Natus, ipsam cum accusantium provident minus itaque nihil. Quasi fuga eos animi dignissimos est enim architecto, accusantium labore ratione? Dignissimos dolorum ducimus repellendus beatae doloremque cupiditate consequatur ipsa nihil excepturi. Quas minus praesentium beatae ipsam quaerat ea nesciunt quidem? Accusantium quibusdam consequatur commodi dolores tempora tempore explicabo obcaecati doloremque nostrum et voluptatibus officia nihil at fuga non totam, placeat facere? Aut impedit sint voluptatum, quisquam pariatur alias expedita quia sunt quos repellat officiis cumque eum libero autem doloremque accusantium quasi perspiciatis explicabo non. Expedita veniam excepturi voluptates illum repellendus modi. Nihil culpa, similique voluptatum sit deleniti aliquam doloremque impedit eaque earum minima est quam molestias repellendus, velit explicabo. Eum accusantium, illum quas natus optio quibusdam soluta! Voluptate reiciendis officia sint. Blanditiis illo quia sequi ipsa, nostrum mollitia explicabo laborum sint qui, est, fugit ipsam delectus totam porro ex. Necessitatibus magni nemo facere possimus earum ipsa exercitationem neque atque similique delectus! Architecto, illo. Exercitationem, nobis reiciendis fugit in nulla quasi alias ipsa magni dolor beatae odio aliquam ratione error minima optio blanditiis hic suscipit soluta incidunt debitis vero labore laboriosam. Reiciendis.</span></div>', 'media/book-store/2024-02-20-5Gzp8UM7e6WiCLCCkA1c2x6otRskHWflPJB1Z9YG.jpeg', '[\"media\\/book-store\\/2024-02-20-Pawba5w0Q8wYwqutotB71UtPlyRPelGGDqXwJb0a.jpeg\",\"media\\/book-store\\/2024-02-20-gnbPMpacPfNWHkeD0DgUYu1caJ8zfbD1nn082xa9.jpeg\",\"media\\/book-store\\/2024-02-20-konfl5uWaPrOIidKHwVJCelADPPyvq7uJzohPLHB.jpeg\",\"media\\/book-store\\/2024-02-20-kawheaAgUYnlMF2UdikiML37lAoIOIjpjLgji45r.jpeg\",\"media\\/book-store\\/2024-02-20-FifWXsiTZO0KwT27hSJC6Dd4qsRzv4mK4xoFEKOb.jpeg\"]', 90.00, 'Book', 'a, b, c', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptate, odio corporis accusamus possimus, quod harum ex repellat rerum placeat porro! Vel perferendis distinctio ex alias quaerat voluptatibus facere itaque.', 'Jhone Mercurry', 'Thriller', 4, 120, 140, 110.00, 'new', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-1', 1, 1, '2024-02-20 11:32:18', '2024-02-20 11:32:18'),
(3, 'A Magical Book', '<div style=\"font-family: &quot;Fira Code&quot;, &quot;Droid Sans Mono&quot;, &quot;monospace&quot;, monospace; font-size: 18px; line-height: 24px; white-space: pre;\"><span style=\"background-color: rgb(255, 255, 255);\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias sint, quibusdam aspernatur vel ea quas voluptatum doloremque odit ex incidunt unde enim, perspiciatis velit, quis praesentium reprehenderit officiis facere dolorem! Veniam, quia eaque eum fuga illo tempore ad rem ratione nesciunt qui eveniet expedita mollitia consequatur, modi vel laudantium saepe. Veniam enim rerum reiciendis facere voluptate, ex tempora hic eius! Cumque sequi fuga deserunt. Sed expedita cumque itaque eum reiciendis aliquid, ipsa quaerat tempora cum id eligendi, voluptas impedit. Optio earum sequi magni vitae nisi cumque deleniti voluptates cum pariatur? Quas praesentium maxime similique autem blanditiis minus iste dolores numquam repudiandae alias facere eum, necessitatibus mollitia corrupti cumque beatae. Praesentium placeat asperiores tenetur necessitatibus officia rerum odio, suscipit autem et? Natus, ipsam cum accusantium provident minus itaque nihil. Quasi fuga eos animi dignissimos est enim architecto, accusantium labore ratione? Dignissimos dolorum ducimus repellendus beatae doloremque cupiditate consequatur ipsa nihil excepturi. Quas minus praesentium beatae ipsam quaerat ea nesciunt quidem? Accusantium quibusdam consequatur commodi dolores tempora tempore explicabo obcaecati doloremque nostrum et voluptatibus officia nihil at fuga non totam, placeat facere? Aut impedit sint voluptatum, quisquam pariatur alias expedita quia sunt quos repellat officiis cumque eum libero autem doloremque accusantium quasi perspiciatis explicabo non. Expedita veniam excepturi voluptates illum repellendus modi. Nihil culpa, similique voluptatum sit deleniti aliquam doloremque impedit eaque earum minima est quam molestias repellendus, velit explicabo. Eum accusantium, illum quas natus optio quibusdam soluta! Voluptate reiciendis officia sint. Blanditiis illo quia sequi ipsa, nostrum mollitia explicabo laborum sint qui, est, fugit ipsam delectus totam porro ex. Necessitatibus magni nemo facere possimus earum ipsa exercitationem neque atque similique delectus! Architecto, illo. Exercitationem, nobis reiciendis fugit in nulla quasi alias ipsa magni dolor beatae odio aliquam ratione error minima optio blanditiis hic suscipit soluta incidunt debitis vero labore laboriosam. Reiciendis.</span></div>', 'media/book-store/2024-02-20-SaK74cyGBKxPeLRVJUH7So7PDe0ffA7DdhArkn6n.jpeg', '[\"media\\/book-store\\/2024-02-20-zhaY4x4tZcKH3OimhgkH4LLUtomUCgjq5tTw2evA.jpeg\",\"media\\/book-store\\/2024-02-20-FdAWq2iIT1oHGMWrGtZvav8alw8P7KlHaRjWLeWu.jpeg\",\"media\\/book-store\\/2024-02-20-wGkBqTwB4f9GbXECGwZQ8YGYt2JIL6tvbjPTH8yN.jpeg\",\"media\\/book-store\\/2024-02-20-4OwYtr6AsFKd5ZHzx2uNU8ma8AHjaS4g9ILyxCOf.jpeg\",\"media\\/book-store\\/2024-02-20-eiRWeav8pQl0CPv1HwQiSslj9ExkA5YxobTBV1O0.jpeg\"]', 90.00, 'Book', 'a, b, c', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptate, odio corporis accusamus possimus, quod harum ex repellat rerum placeat porro! Vel perferendis distinctio ex alias quaerat voluptatibus facere itaque.', 'Jhone Mercurry', 'Thriller', 4, 120, 140, 110.00, 'new', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-2', 1, 1, '2024-02-20 11:32:28', '2024-02-20 11:32:28'),
(4, 'A Magical Book', '<div style=\"font-family: &quot;Fira Code&quot;, &quot;Droid Sans Mono&quot;, &quot;monospace&quot;, monospace; font-size: 18px; line-height: 24px; white-space: pre;\"><span style=\"background-color: rgb(255, 255, 255);\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias sint, quibusdam aspernatur vel ea quas voluptatum doloremque odit ex incidunt unde enim, perspiciatis velit, quis praesentium reprehenderit officiis facere dolorem! Veniam, quia eaque eum fuga illo tempore ad rem ratione nesciunt qui eveniet expedita mollitia consequatur, modi vel laudantium saepe. Veniam enim rerum reiciendis facere voluptate, ex tempora hic eius! Cumque sequi fuga deserunt. Sed expedita cumque itaque eum reiciendis aliquid, ipsa quaerat tempora cum id eligendi, voluptas impedit. Optio earum sequi magni vitae nisi cumque deleniti voluptates cum pariatur? Quas praesentium maxime similique autem blanditiis minus iste dolores numquam repudiandae alias facere eum, necessitatibus mollitia corrupti cumque beatae. Praesentium placeat asperiores tenetur necessitatibus officia rerum odio, suscipit autem et? Natus, ipsam cum accusantium provident minus itaque nihil. Quasi fuga eos animi dignissimos est enim architecto, accusantium labore ratione? Dignissimos dolorum ducimus repellendus beatae doloremque cupiditate consequatur ipsa nihil excepturi. Quas minus praesentium beatae ipsam quaerat ea nesciunt quidem? Accusantium quibusdam consequatur commodi dolores tempora tempore explicabo obcaecati doloremque nostrum et voluptatibus officia nihil at fuga non totam, placeat facere? Aut impedit sint voluptatum, quisquam pariatur alias expedita quia sunt quos repellat officiis cumque eum libero autem doloremque accusantium quasi perspiciatis explicabo non. Expedita veniam excepturi voluptates illum repellendus modi. Nihil culpa, similique voluptatum sit deleniti aliquam doloremque impedit eaque earum minima est quam molestias repellendus, velit explicabo. Eum accusantium, illum quas natus optio quibusdam soluta! Voluptate reiciendis officia sint. Blanditiis illo quia sequi ipsa, nostrum mollitia explicabo laborum sint qui, est, fugit ipsam delectus totam porro ex. Necessitatibus magni nemo facere possimus earum ipsa exercitationem neque atque similique delectus! Architecto, illo. Exercitationem, nobis reiciendis fugit in nulla quasi alias ipsa magni dolor beatae odio aliquam ratione error minima optio blanditiis hic suscipit soluta incidunt debitis vero labore laboriosam. Reiciendis.</span></div>', 'media/book-store/2024-02-20-UpSDvbNxg6Dz6ktbTO5WpnKmDqmZdg04qr9mDY2Y.jpeg', '[\"media\\/book-store\\/2024-02-20-Z8huMBgK94ht4hs7S9YKroaL1cXaccHoTYobjDG7.jpeg\",\"media\\/book-store\\/2024-02-20-k2sPVjD0ZBLf7mGg1JzL8MtpoIF3whonHQAyrF5q.jpeg\",\"media\\/book-store\\/2024-02-20-Cd1XBPy4RWME1NwH0ny9mWdhWCe6IJ4wjPZBb3Bq.jpeg\",\"media\\/book-store\\/2024-02-20-ZRRMXIalK9sTAltppU3JnCJGUIEcNJrw9KzQJakJ.jpeg\",\"media\\/book-store\\/2024-02-20-geQ2FPKIfSJrLG5ks1oO2gvtNK0jfEega6EcW5n0.jpeg\"]', 90.00, 'Book', 'a, b, c', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptate, odio corporis accusamus possimus, quod harum ex repellat rerum placeat porro! Vel perferendis distinctio ex alias quaerat voluptatibus facere itaque.', 'Jhone Mercurry', 'Thriller', 4, 120, 140, 110.00, 'new', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-3', 1, 1, '2024-02-20 11:32:38', '2024-02-20 11:32:38'),
(5, 'A Magical Book', '<div style=\"font-family: &quot;Fira Code&quot;, &quot;Droid Sans Mono&quot;, &quot;monospace&quot;, monospace; font-size: 18px; line-height: 24px; white-space: pre;\"><span style=\"background-color: rgb(255, 255, 255);\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias sint, quibusdam aspernatur vel ea quas voluptatum doloremque odit ex incidunt unde enim, perspiciatis velit, quis praesentium reprehenderit officiis facere dolorem! Veniam, quia eaque eum fuga illo tempore ad rem ratione nesciunt qui eveniet expedita mollitia consequatur, modi vel laudantium saepe. Veniam enim rerum reiciendis facere voluptate, ex tempora hic eius! Cumque sequi fuga deserunt. Sed expedita cumque itaque eum reiciendis aliquid, ipsa quaerat tempora cum id eligendi, voluptas impedit. Optio earum sequi magni vitae nisi cumque deleniti voluptates cum pariatur? Quas praesentium maxime similique autem blanditiis minus iste dolores numquam repudiandae alias facere eum, necessitatibus mollitia corrupti cumque beatae. Praesentium placeat asperiores tenetur necessitatibus officia rerum odio, suscipit autem et? Natus, ipsam cum accusantium provident minus itaque nihil. Quasi fuga eos animi dignissimos est enim architecto, accusantium labore ratione? Dignissimos dolorum ducimus repellendus beatae doloremque cupiditate consequatur ipsa nihil excepturi. Quas minus praesentium beatae ipsam quaerat ea nesciunt quidem? Accusantium quibusdam consequatur commodi dolores tempora tempore explicabo obcaecati doloremque nostrum et voluptatibus officia nihil at fuga non totam, placeat facere? Aut impedit sint voluptatum, quisquam pariatur alias expedita quia sunt quos repellat officiis cumque eum libero autem doloremque accusantium quasi perspiciatis explicabo non. Expedita veniam excepturi voluptates illum repellendus modi. Nihil culpa, similique voluptatum sit deleniti aliquam doloremque impedit eaque earum minima est quam molestias repellendus, velit explicabo. Eum accusantium, illum quas natus optio quibusdam soluta! Voluptate reiciendis officia sint. Blanditiis illo quia sequi ipsa, nostrum mollitia explicabo laborum sint qui, est, fugit ipsam delectus totam porro ex. Necessitatibus magni nemo facere possimus earum ipsa exercitationem neque atque similique delectus! Architecto, illo. Exercitationem, nobis reiciendis fugit in nulla quasi alias ipsa magni dolor beatae odio aliquam ratione error minima optio blanditiis hic suscipit soluta incidunt debitis vero labore laboriosam. Reiciendis.</span></div>', 'media/book-store/2024-02-20-20AIlPrC0HD3wbbmsSMDzU0IIX8bnlvdNSySjze5.jpeg', '[\"media\\/book-store\\/2024-02-20-eAXESmIAm2jKnwPXMyWqboDaU6KymW27OvC68nub.jpeg\",\"media\\/book-store\\/2024-02-20-EqB2POT45HAttSSGi5257CV3lypI6FZumknYqcZn.jpeg\",\"media\\/book-store\\/2024-02-20-4ZQHLFxHRC7KHMqsFj2Q9wAKDWxV5iijoyVtOXsD.jpeg\",\"media\\/book-store\\/2024-02-20-n1fxf4t5cyJVl8aR3JRg4Z9256JZUZWW0iFIpptH.jpeg\",\"media\\/book-store\\/2024-02-20-eaTe5fdq8BrZ5trIKVncTYjMKbCo69o8eGOTkRF0.jpeg\"]', 90.00, 'Book', 'a, b, c', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptate, odio corporis accusamus possimus, quod harum ex repellat rerum placeat porro! Vel perferendis distinctio ex alias quaerat voluptatibus facere itaque.', 'Jhone Mercurry', 'Thriller', 4, 120, 140, 110.00, 'new', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-4', 1, 1, '2024-02-20 11:32:45', '2024-02-20 11:32:45'),
(6, 'A Magical Book', '<div style=\"font-family: &quot;Fira Code&quot;, &quot;Droid Sans Mono&quot;, &quot;monospace&quot;, monospace; font-size: 18px; line-height: 24px; white-space: pre;\"><span style=\"background-color: rgb(255, 255, 255);\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias sint, quibusdam aspernatur vel ea quas voluptatum doloremque odit ex incidunt unde enim, perspiciatis velit, quis praesentium reprehenderit officiis facere dolorem! Veniam, quia eaque eum fuga illo tempore ad rem ratione nesciunt qui eveniet expedita mollitia consequatur, modi vel laudantium saepe. Veniam enim rerum reiciendis facere voluptate, ex tempora hic eius! Cumque sequi fuga deserunt. Sed expedita cumque itaque eum reiciendis aliquid, ipsa quaerat tempora cum id eligendi, voluptas impedit. Optio earum sequi magni vitae nisi cumque deleniti voluptates cum pariatur? Quas praesentium maxime similique autem blanditiis minus iste dolores numquam repudiandae alias facere eum, necessitatibus mollitia corrupti cumque beatae. Praesentium placeat asperiores tenetur necessitatibus officia rerum odio, suscipit autem et? Natus, ipsam cum accusantium provident minus itaque nihil. Quasi fuga eos animi dignissimos est enim architecto, accusantium labore ratione? Dignissimos dolorum ducimus repellendus beatae doloremque cupiditate consequatur ipsa nihil excepturi. Quas minus praesentium beatae ipsam quaerat ea nesciunt quidem? Accusantium quibusdam consequatur commodi dolores tempora tempore explicabo obcaecati doloremque nostrum et voluptatibus officia nihil at fuga non totam, placeat facere? Aut impedit sint voluptatum, quisquam pariatur alias expedita quia sunt quos repellat officiis cumque eum libero autem doloremque accusantium quasi perspiciatis explicabo non. Expedita veniam excepturi voluptates illum repellendus modi. Nihil culpa, similique voluptatum sit deleniti aliquam doloremque impedit eaque earum minima est quam molestias repellendus, velit explicabo. Eum accusantium, illum quas natus optio quibusdam soluta! Voluptate reiciendis officia sint. Blanditiis illo quia sequi ipsa, nostrum mollitia explicabo laborum sint qui, est, fugit ipsam delectus totam porro ex. Necessitatibus magni nemo facere possimus earum ipsa exercitationem neque atque similique delectus! Architecto, illo. Exercitationem, nobis reiciendis fugit in nulla quasi alias ipsa magni dolor beatae odio aliquam ratione error minima optio blanditiis hic suscipit soluta incidunt debitis vero labore laboriosam. Reiciendis.</span></div>', 'media/book-store/2024-02-20-O1skMjlCtgs06lp8tzmDOUkL1XSNmQ6Rp72fBVTU.jpeg', '[\"media\\/book-store\\/2024-02-20-fOEWG7EWLXoURhRxixQIsLmVq13SHa4D193Qwtbs.jpeg\",\"media\\/book-store\\/2024-02-20-oSXjI8NGt6hxmLL0QLMSG0UVFxVtiIv6hT0MzqEv.jpeg\",\"media\\/book-store\\/2024-02-20-bEQPsY1i6CGWVzf4Y7ruohR8BXqYu9lvB5jZnzwL.jpeg\",\"media\\/book-store\\/2024-02-20-bNwmjU6xyar6ONiZtRa0EHCbxOwN8X7j32GEwKbL.jpeg\",\"media\\/book-store\\/2024-02-20-xOApSpGJs0j5PAvLPYJCOqeAWOm2iyo9hrygl7yG.jpeg\"]', 90.00, 'Book', 'a, b, c', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptate, odio corporis accusamus possimus, quod harum ex repellat rerum placeat porro! Vel perferendis distinctio ex alias quaerat voluptatibus facere itaque.', 'Jhone Mercurry', 'Thriller', 4, 120, 140, 110.00, 'new', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-5', 1, 1, '2024-02-20 11:32:53', '2024-02-20 11:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `primary_heading` varchar(255) NOT NULL,
  `primary_title` varchar(255) NOT NULL,
  `primary_description` text NOT NULL,
  `btn_title` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `heading`, `image`, `banner_image`, `title`, `description`, `primary_heading`, `primary_title`, `primary_description`, `btn_title`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, 'BE A PART OF THE TEAM', 'media/career/2024-02-19-zzJkMfOj4nme2GEgl7fPQkEXduRHe1NJV8VzYYFQ.jpg', 'media/career/2024-02-19-zzJkMfOj4nme2GEgl7fPQkEXduRHe1NJV8VzYYFQ.jpg2024-02-19-U4BXDH2c9j2hMFZbRUXFQuvFFnhmUjTeKm42GvZ0.jpg', 'Vacant Positions', '<p><span style=\"font-size: 18px;\">Diversification and dedication is what makes the JAAGO team so special. Our energetic team of employees and volunteers are the driving force behind our ground-breaking success.The team is far from being homogeneous; they come from a variety of backgrounds but share a common belief in eliminating poverty in Bangladesh through literacy. At JAAGO, diversity is considered an advantage rather than an obstacle. Individuals put aside their differences to work harmoniously as a team. Age, race, education and ethnicity hold no boundaries here. Diversification and dedication is what makes the JAAGO team so special. Our energetic team of employees and volunteers are the driving force behind our ground-breaking success.The team is far from being homogeneous; they come from a variety of backgrounds but share a common belief in eliminating poverty in Bangladesh through literacy. At JAAGO, diversity is considered an advantage rather than an obstacle. Individuals put aside their differences to work harmoniously as a team. Age, race, education and ethnicity hold no boundaries here. Diversification and dedication is what makes the JAAGO team so special. Our energetic team of employees and volunteers are the driving force behind our ground-breaking success.The team is far from being homogeneous; they come from a variety of backgrounds but share a common belief in eliminating poverty in Bangladesh through literacy. At JAAGO, diversity is considered an advantage rather than an obstacle. Individuals put aside their differences to work harmoniously as a team. Age, race, education and ethnicity hold no boundaries here.</span><br></p>', 'JOIN US', 'JOIN US TO SERVE THE HUMANITY, TO INSPIRE US, TO GROW WITH US.', 'Our strength is the calibre of our people. We succeed because we engage, develop and reward people who have the passion to make a significant contribution to our nation. Our strength is the calibre of our people. We succeed because we engage, develop and reward people who have the passion to make a significant contribution to our nation. Our strength is the calibre of our people. We succeed because we engage, develop and reward people who have the passion to make a significant contribution to our nation.', 'Become a Volenteer', '#', '2024-02-19 08:41:13', '2024-02-19 09:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `career_items`
--

CREATE TABLE `career_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `serial` int(11) DEFAULT NULL,
  `btn_title` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_items`
--

INSERT INTO `career_items` (`id`, `title`, `image`, `status`, `serial`, `btn_title`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, 'Government & Community Liaison Officer, Shopner Sharothi', 'media/career-item/2024-02-19-UOgdgUyIW5mvcEyGpmFTXePFtfrcAqdnCOp97pCS.jpg', 1, 1, 'Join as a Volenteer', '#', '2024-02-19 09:16:13', '2024-02-19 09:16:13'),
(2, 'Government & Community Liaison Officer, Shopner Sharothi', 'media/career-item/2024-02-19-oTlKqKQTCyO3CAiZXb7xqBtDUzYBpENYATzn9Vvp.jpg', 1, 2, 'Join as a Volenteer', '#', '2024-02-19 09:17:02', '2024-02-19 09:17:02'),
(3, 'Government & Community Liaison Officer, Shopner Sharothi', 'media/career-item/2024-02-19-98nWKIxp44pkspIMhoQGJQnH2L5A8XZns4WVIJoR.jpg', 1, 3, 'Join as a Volenteer', '#', '2024-02-19 09:17:04', '2024-02-19 09:17:47'),
(4, 'Government & Community Liaison Officer, Shopner Sharothi', 'media/career-item/2024-02-19-GE2AWVNjsqi7og5Q4N3hMkXmPHxTyv4BQJ2LhkYw.jpg', 1, 4, 'Join as a Volenteer', '#', '2024-02-19 09:17:05', '2024-02-19 09:17:55'),
(5, 'Government & Community Liaison Officer, Shopner Sharothi', 'media/career-item/2024-02-19-QhSFzjSYqUT3oU2k5E33xDPCApRpiDzGbWgTJYWv.jpg', 1, 5, 'Join as a Volenteer', '#', '2024-02-19 09:17:12', '2024-02-19 09:17:12'),
(6, 'Government & Community Liaison Officer, Shopner Sharothi', 'media/career-item/2024-02-19-Imc8FJDIODQfFgbWPZd2fx5KB7HLgZjFBOHxRSfN.jpg', 1, 6, 'Join as a Volenteer', '#', '2024-02-19 09:17:17', '2024-02-19 09:17:17'),
(7, 'Government & Community Liaison Officer, Shopner Sharothi', 'media/career-item/2024-02-19-dgo2mO1YS9d15ca51S4FTY0cWYA6aBBeaoTU16ST.jpg', 1, 7, 'Join as a Volenteer', '#', '2024-02-19 09:17:20', '2024-02-19 09:17:20'),
(8, 'Government & Community Liaison Officer, Shopner Sharothi', 'media/career-item/2024-02-19-En1NyzE3hmNrpniw5XyIs73r3ZooBNDf5P7mQm7a.jpg', 1, 8, 'Join as a Volenteer', '#', '2024-02-19 09:17:24', '2024-02-19 09:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `career_page_bottoms`
--

CREATE TABLE `career_page_bottoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `imagetext` varchar(255) NOT NULL,
  `spicon` varchar(255) NOT NULL,
  `sptext` varchar(255) NOT NULL,
  `spdes` varchar(255) NOT NULL,
  `spbtnurl` varchar(255) NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career_toops`
--

CREATE TABLE `career_toops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_toops`
--

INSERT INTO `career_toops` (`id`, `title`, `description`, `image`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BE A PART OF THE TEAM', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span>', 'media/careertop/2024-02-14-zAhgCZV5SgTQPXqu65kw0WZ7g9h2pKSa0cIERzls.png', NULL, 1, NULL, '2024-02-14 08:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `career_vacant_postions`
--

CREATE TABLE `career_vacant_postions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_vacant_postions`
--

INSERT INTO `career_vacant_postions` (`id`, `title`, `image`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Government & Community Liaison Officer, Shopner Sharothi 4', 'media/position/2024-02-14-VrPKAzCWJhSkCpKv91YXidNHnYyTQUKqmm0UW7Zv.png', 0, 1, '2024-02-14 08:14:59', '2024-02-14 08:14:59'),
(3, 'Government & Community Liaison Officer, Shopner Sharothi 5', 'media/position/2024-02-14-VrPKAzCWJhSkCpKv91YXidNHnYyTQUKqmm0UW7Zv.png', 0, 1, '2024-02-14 08:14:59', '2024-02-14 08:14:59'),
(4, 'Government & Community Liaison Officer, Shopner Sharothi 3', 'media/position/2024-02-14-VrPKAzCWJhSkCpKv91YXidNHnYyTQUKqmm0UW7Zv.png', 0, 1, '2024-02-14 08:14:59', '2024-02-14 08:14:59'),
(5, 'Government & Community Liaison Officer, Shopner Sharothi 1', 'media/position/2024-02-14-VrPKAzCWJhSkCpKv91YXidNHnYyTQUKqmm0UW7Zv.png', 0, 1, '2024-02-14 08:14:59', '2024-02-14 08:14:59'),
(6, 'Government & Community Liaison Officer, Shopner Sharothi 1', 'media/position/2024-02-14-VrPKAzCWJhSkCpKv91YXidNHnYyTQUKqmm0UW7Zv.png', 0, 1, '2024-02-14 08:14:59', '2024-02-14 08:14:59'),
(7, 'Government & Community Liaison Officer, Shopner Sharothi 6', 'media/position/2024-02-14-VrPKAzCWJhSkCpKv91YXidNHnYyTQUKqmm0UW7Zv.png', 0, 1, '2024-02-14 08:14:59', '2024-02-14 08:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `client_messages`
--

CREATE TABLE `client_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_messages`
--

INSERT INTO `client_messages` (`id`, `name`, `email`, `phone`, `address`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Syed Amir Ali', '01817807594', 'amiralli@gmail.com', 'Sherpur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, minima ipsum modi esse, id dicta tenetur dolorum impedit voluptatum sapiente saepe cumque, hic magnam odit necessitatibus. Reiciendis id veniam explicabo? Suscipit neque nemo amet recusandae. Similique ab iusto veritatis perferendis dicta nobis fugit nemo, officiis distinctio consequuntur. Rem dolores, ipsam accusantium fuga in corrupti quisquam exercitationem blanditiis incidunt dolore quo. Excepturi corporis, repellendus atque impedit architecto a modi eius enim eaque illum ipsum et quis suscipit, voluptas maiores deserunt quae consequatur pariatur veniam beatae doloremque sunt incidunt fugit voluptatibus. Deleniti?  repellendus atque impedit architecto a modi eius enim eaque illum ipsum et quis suscipit, voluptas maiores deserunt quae consequatur pariatur veniam beatae doloremque sunt incidunt fugit voluptatibus. Deleniti? repellendus atque impedit architecto a modi eius enim eaque illum ipsum et quis suscipit.', 1, '2024-02-18 16:11:03', '2024-02-18 16:11:03'),
(2, 'Our Mission', 'amirralli300400@gmail', 'amiralli@gmail.com', 'Sherpur', 'asdf', 1, '2024-02-19 16:30:20', '2024-02-19 16:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `client_navigation_menus`
--

CREATE TABLE `client_navigation_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `serial` int(20) DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `child_id` bigint(20) DEFAULT NULL,
  `route` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_navigation_menus`
--

INSERT INTO `client_navigation_menus` (`id`, `name`, `serial`, `parent_id`, `child_id`, `route`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Home', 1, NULL, NULL, 'frontend.home', 1, '2024-02-15 05:12:00', '2024-02-17 06:13:12'),
(11, 'Media', 2, NULL, NULL, '#', 1, '2024-02-15 05:12:07', '2024-02-15 05:12:07'),
(12, 'Events', 3, NULL, NULL, '#', 1, '2024-02-15 05:12:15', '2024-02-15 05:12:15'),
(13, 'Updates', 4, NULL, NULL, '#', 1, '2024-02-15 05:12:22', '2024-02-15 05:12:22'),
(14, 'Book Store', 5, NULL, NULL, '#', 1, '2024-02-15 05:12:31', '2024-02-19 15:01:27'),
(15, 'Documents', 6, NULL, NULL, '#', 1, '2024-02-15 05:12:43', '2024-02-15 05:12:43'),
(16, 'Who We Are', 7, NULL, NULL, '#', 1, '2024-02-15 05:12:51', '2024-02-15 05:12:51'),
(17, 'Image Gallery', 1, 11, NULL, 'frontend.image_gallery', 1, '2024-02-15 05:15:27', '2024-02-17 06:28:18'),
(18, 'Videos', 2, 11, NULL, 'frontend.video_gallery', 1, '2024-02-15 05:15:39', '2024-02-17 07:08:29'),
(19, 'Upcoming Events', 1, 12, NULL, '#', 1, '2024-02-15 05:16:30', '2024-02-15 05:16:30'),
(20, 'Past Campaigns', 2, 12, NULL, '#', 1, '2024-02-15 05:16:46', '2024-02-15 05:16:46'),
(21, 'Volunteer Opportunities', 3, 12, NULL, '#', 1, '2024-02-15 05:16:58', '2024-02-15 05:16:58'),
(22, 'Organizer Events & Campaigns', 5, 12, NULL, '#', 1, '2024-02-15 05:17:10', '2024-02-15 05:17:10'),
(23, 'Blogs', 1, 13, NULL, 'frontend.blog', 1, '2024-02-15 05:19:36', '2024-02-17 05:06:38'),
(24, 'News', 2, 13, NULL, 'frontend.news_and_article', 1, '2024-02-15 05:19:45', '2024-02-19 07:46:21'),
(25, 'Reports', 3, 13, NULL, '#', 1, '2024-02-15 05:19:55', '2024-02-15 05:19:55'),
(26, 'Our Store', 1, 14, NULL, 'frontend.book_store', 1, '2024-02-15 05:20:25', '2024-02-19 15:01:44'),
(27, 'Book Details', 2, 14, NULL, '#', 1, '2024-02-15 05:20:33', '2024-02-15 05:20:33'),
(28, 'Fiction', 3, 14, NULL, '#', 1, '2024-02-15 05:20:48', '2024-02-15 05:20:48'),
(29, 'Non-Fiction', 4, 14, NULL, '#', 1, '2024-02-15 05:21:02', '2024-02-15 05:21:02'),
(30, 'Mystery & Thriller', 5, 14, NULL, '#', 1, '2024-02-15 05:21:26', '2024-02-15 05:21:26'),
(31, 'Science Fiction & Movie', 6, 14, NULL, '#', 1, '2024-02-15 05:21:42', '2024-02-15 05:21:42'),
(32, 'Activity Reports', 1, 15, NULL, '#', 1, '2024-02-15 05:22:19', '2024-02-15 05:22:19'),
(33, 'Audit Reports', 2, 15, NULL, '#', 1, '2024-02-15 05:22:37', '2024-02-15 05:22:37'),
(34, 'Stickers And Banners', 3, 15, NULL, 'frontend.sticker_and_banner', 1, '2024-02-15 05:22:54', '2024-02-17 09:47:05'),
(35, 'Monthly Magazine', 4, 15, NULL, '#', 1, '2024-02-15 05:23:08', '2024-02-15 05:23:08'),
(36, 'Others Documen', 6, 15, NULL, '#', 1, '2024-02-15 05:23:17', '2024-02-15 05:23:17'),
(37, 'About Us', 1, 16, NULL, 'frontend.about', 1, '2024-02-15 05:23:41', '2024-02-18 08:39:30'),
(38, 'Pathgriho Team', 2, 16, NULL, 'frontend.team', 1, '2024-02-15 05:23:55', '2024-02-17 14:48:20'),
(39, 'Work With Us', 2, 16, NULL, '#', 1, '2024-02-15 05:24:05', '2024-02-15 05:24:05'),
(40, 'FAQ', 4, 16, NULL, 'frontend.faq', 1, '2024-02-15 05:24:15', '2024-02-17 08:37:32'),
(41, 'Contact', 6, 16, NULL, 'frontend.contact', 1, '2024-02-15 05:24:30', '2024-02-18 08:39:14'),
(42, 'Become A Volunteer', 1, 16, 39, '#', 1, '2024-02-15 05:29:58', '2024-02-15 05:29:58'),
(43, 'Our Partners', 2, 16, 39, '#', 1, '2024-02-15 05:30:08', '2024-02-15 05:30:08'),
(44, 'Our Mission', 3, 16, 39, 'frontend.mission', 1, '2024-02-15 05:30:19', '2024-02-19 12:03:01'),
(45, 'Our Vision', 3, 16, 39, 'frontend.vision', 1, '2024-02-15 05:30:28', '2024-02-19 14:14:14'),
(46, 'Career', 4, 16, 39, 'frontend.career', 1, '2024-02-15 05:30:57', '2024-02-19 14:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `form_heading` varchar(255) NOT NULL,
  `form_title` varchar(255) NOT NULL,
  `form_description` text NOT NULL,
  `map_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `heading`, `title`, `description`, `form_heading`, `form_title`, `form_description`, `map_title`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', 'Any questions or remarks? Just write us a message!', '<p><span style=\"font-size: 18px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, minima ipsum modi esse, id dicta tenetur dolorum impedit voluptatum sapiente saepe cumque, hic magnam odit necessitatibus. Reiciendis id veniam explicabo? Suscipit neque nemo amet recusandae. Similique ab iusto veritatis perferendis dicta nobis fugit nemo, officiis distinctio consequuntur. Rem dolores, ipsam accusantium fuga in corrupti quisquam exercitationem blanditiis incidunt dolore quo. Excepturi corporis, repellendus atque impedit architecto a modi eius enim eaque illum ipsum et quis suscipit, voluptas maiores deserunt quae consequatur pariatur veniam beatae doloremque sunt incidunt fugit voluptatibus. Deleniti? Laudantium mollitia architecto quod, provident ratione laborum voluptas natus dolores ab nisi vitae similique deserunt nesciunt quos rerum corporis, fugiat optio, consectetur omnis? Fugit quae odit placeat, dicta iste repudiandae! Iure recusandae, optio incidunt voluptate, cumque amet vitae aut sit temporibus nemo ea provident molestiae sunt laudantium nisi repellat nulla accusamus sed. Animi aspernatur itaque officiis eius et perspiciatis minima? Soluta consequatur sunt in impedit quaerat, necessitatibus voluptate earum excepturi neque obcaecati laboriosam libero omnis. Quasi cum quod, eaque adipisci quaerat a sed nisi fugit. Harum facere dolore officia eaque. Aliquam molestiae ex perferendis ratione facilis, quas quidem excepturi ipsa aspernatur autem numquam deserunt veniam consequuntur labore vero quia, necessitatibus iure. Iure, minus totam! Nam tempora odio quae temporibus voluptate. Quos sint, amet quo debitis reiciendis ipsam modi atque quod dolorum ad. Ratione, amet provident assumenda saepe officiis unde, odit inventore possimus officia quae autem harum. Quam accusantium optio veritatis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, minima ipsum modi esse, id dicta tenetur dolorum impedit voluptatum sapiente saepe cumque, hic magnam odit necessitatibus. Reiciendis id veniam explicabo? Suscipit neque nemo amet recusandae. Similique ab iusto veritatis perferendis dicta nobis fugit nemo, officiis distinctio consequuntur. Rem dolores, ipsam accusantium fuga in corrupti quisquam exercitationem blanditiis incidunt dolore quo. Excepturi corporis, repellendus atque impedit architecto a modi eius enim eaque illum ipsum et quis suscipit, voluptas maiores deserunt quae consequatur pariatur veniam beatae doloremque sunt incidunt fugit voluptatibus. Deleniti? Laudantium mollitia architecto quod, provident ratione laborum voluptas natus dolores ab nisi vitae similique deserunt nesciunt quos rerum corporis, fugiat optio, consectetur omnis? Fugit quae odit placeat, dicta iste repudiandae! Iure recusandae, optio incidunt voluptate, cumque amet vitae aut sit temporibus nemo ea provident molestiae sunt laudantium nisi repellat nulla accusamus sed. Animi aspernatur itaque officiis eius et perspiciatis minima? Soluta consequatur sunt in impedit quaerat, necessitatibus voluptate earum excepturi neque obcaecati laboriosam libero omnis. Quasi cum quod, eaque adipisci quaerat a sed nisi fugit. Harum facere dolore officia eaque. Aliquam molestiae ex perferendis ratione facilis, quas quidem excepturi ipsa aspernatur autem numquam deserunt veniam consequuntur labore vero quia, necessitatibus iure. Iure, minus totam! Nam tempora odio quae temporibus voluptate. Quos sint, amet quo debitis reiciendis ipsam modi atque quod dolorum ad. Ratione, amet provident assumenda saepe officiis unde, odit inventore possimus officia quae autem harum. Quam accusantium optio veritatis?</span><br></p>', 'About Contact Information', 'Make A Contact Request', '<p><span style=\"font-size: 18px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, minima ipsum modi esse, id dicta tenetur dolorum impedit voluptatum sapiente saepe cumque, hic magnam odit necessitatibus. Reiciendis id veniam explicabo? Suscipit neque nemo amet recusandae. Similique ab iusto veritatis perferendis dicta nobis fugit nemo, officiis distinctio consequuntur. Rem dolores, ipsam accusantium fuga in corrupti quisquam exercitationem blanditiis incidunt dolore quo. Excepturi corporis, repellendus atque impedit architecto a modi eius enim eaque illum ipsum et quis suscipit, voluptas maiores deserunt quae consequatur pariatur veniam beatae doloremque sunt incidunt fugit voluptatibus. Deleniti?&nbsp;&nbsp;</span><span style=\"font-size: 18px; background-color: var(--bs-white); text-align: var(--bs-body-text-align);\">repellendus atque impedit architecto a modi eius enim eaque illum ipsum et quis suscipit, voluptas maiores deserunt quae consequatur pariatur veniam beatae doloremque sunt incidunt fugit voluptatibus. Deleniti?&nbsp;</span><span style=\"font-size: 18px; background-color: var(--bs-white); text-align: var(--bs-body-text-align);\">repellendus atque impedit architecto a modi eius enim eaque illum ipsum et quis suscipit.</span><br></p>', 'Find Us On Google Map', '2024-02-18 13:01:32', '2024-02-18 13:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_mains`
--

CREATE TABLE `contact_us_mains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sdes` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `furl` varchar(255) NOT NULL,
  `turl` varchar(255) NOT NULL,
  `yurl` varchar(255) NOT NULL,
  `iurl` varchar(255) NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us_mains`
--

INSERT INTO `contact_us_mains` (`id`, `title`, `sdes`, `address`, `email`, `phone`, `furl`, `turl`, `yurl`, `iurl`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Contact Information', 'Fill up the form and our Team will get back to you soon.vbvcb', 'JAAGO Foundation, House #57 Road #7/B Block #H Banani, 1213, Bangladesh', 'info@jaago.com.bd', '+8801766666654', 'https://www.fasebook.com', 'https://www.fasebook.com', 'https://www.fasebook.com', 'https://www.fasebook.com', NULL, 1, '2024-02-13 07:24:44', '2024-02-14 09:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `contac_us`
--

CREATE TABLE `contac_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mtitle` varchar(255) DEFAULT NULL,
  `mdes` text DEFAULT NULL,
  `gmtitle` varchar(255) DEFAULT NULL,
  `gmiframe` text DEFAULT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contac_us`
--

INSERT INTO `contac_us` (`id`, `mtitle`, `mdes`, `gmtitle`, `gmiframe`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', '<p><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">Any questions or remarks? Just write us a message!&nbsp;</span><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">Thank you for your interest in contacting&nbsp;</span><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">Pathgiho</span><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">&nbsp;Foundation. We value your feedback, suggestions, and inquiries, and we are committed to providing you with the information and support you need.&nbsp;</span><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">To contact us, please fill out the form on this page with your name, email address, and message. We will respond to your inquiry as soon as possible, usually within 24-48 hours.&nbsp;</span><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">We also encourage you to follow us on social media for updates on our programs, events, and initiatives. You can find us on Facebook, Twitter, and Instagram using the links at the bottom of this page.&nbsp;</span><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">Thank you for your interest in&nbsp;</span><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">Pathgiho</span><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">&nbsp;Foundation. We look forward to hearing from you soon!</span></p><p><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">Any questions or remarks? Just write us a message!&nbsp;</span><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">Thank you for your interest in contacting Pathgiho Foundation. We value your feedback, suggestions, and inquiries, and we are committed to providing you with the information and support you need.</span><br style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\"><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">To contact us, please fill out the form on this page with your name, email address, and message. We will respond to your inquiry as soon as possible, usually within 24-48 hours.&nbsp;</span><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">We also encourage you to follow us on social media for updates on our programs, events, and initiatives. You can find us on Facebook, Twitter, and Instagram using the links at the bottom of this page.&nbsp;</span><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">Thank you for your interest in&nbsp;</span><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">Pathgiho</span><span style=\"font-family: Oswald, sans-serif; font-size: 17px; text-align: center; background-color: rgb(248, 250, 252);\">&nbsp;Foundation. We look forward to hearing from you soon!</span></p>', 'Find Us On Google Map', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.97303538515!2d90.33728788013568!3d23.780818635354535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1707900588217!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, 1, '2024-02-13 06:51:57', '2024-02-18 12:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `status` text NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_ones`
--

CREATE TABLE `faq_ones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faqtitle` varchar(255) DEFAULT NULL,
  `faqdescription` text DEFAULT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_ones`
--

INSERT INTO `faq_ones` (`id`, `faqtitle`, `faqdescription`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(5, 'When will my order arrive 1?', '<p><span style=\"color: rgb(120, 113, 108); font-family: Poppins, sans-serif; font-size: medium; background-color: rgb(248, 250, 252);\">Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation</span><br></p>', 0, 1, '2024-02-14 07:47:24', '2024-02-14 07:47:24'),
(6, 'When will my order arrive 2?', '<p><span style=\"color: rgb(120, 113, 108); font-family: Poppins, sans-serif; font-size: medium; background-color: rgb(248, 250, 252);\">Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation</span><br></p>', 0, 1, '2024-02-14 07:48:06', '2024-02-14 07:48:06'),
(7, 'When will my order arrive 3?', '<p><span style=\"color: rgb(120, 113, 108); font-family: Poppins, sans-serif; font-size: medium; background-color: rgb(248, 250, 252);\">Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation</span><br></p>', 0, 1, '2024-02-14 07:48:06', '2024-02-14 07:48:06'),
(8, 'When will my order arrive 4?', '<p><span style=\"color: rgb(120, 113, 108); font-family: Poppins, sans-serif; font-size: medium; background-color: rgb(248, 250, 252);\">Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation</span><br></p>', 0, 1, '2024-02-14 07:48:06', '2024-02-14 07:48:06'),
(9, 'When will my order arrive 5?', '<p><span style=\"color: rgb(120, 113, 108); font-family: Poppins, sans-serif; font-size: medium; background-color: rgb(248, 250, 252);\">Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation</span><br></p>', 0, 1, '2024-02-14 07:48:06', '2024-02-14 07:48:06'),
(10, 'When will my order arrive 6?', '<p><span style=\"color: rgb(120, 113, 108); font-family: Poppins, sans-serif; font-size: medium; background-color: rgb(248, 250, 252);\">Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation</span><br></p>', 0, 1, '2024-02-14 07:48:06', '2024-02-14 07:48:06'),
(11, 'When will my order arrive 7?', '<p><span style=\"color: rgb(120, 113, 108); font-family: Poppins, sans-serif; font-size: medium; background-color: rgb(248, 250, 252);\">Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation</span><br></p>', 0, 1, '2024-02-14 07:48:06', '2024-02-14 07:48:06'),
(12, 'When will my order arrive 8?', '<p><span style=\"color: rgb(120, 113, 108); font-family: Poppins, sans-serif; font-size: medium; background-color: rgb(248, 250, 252);\">Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation</span><br></p>', 0, 1, '2024-02-14 07:48:06', '2024-02-14 07:48:06'),
(13, 'When will my order arrive 9?', '<p><span style=\"color: rgb(120, 113, 108); font-family: Poppins, sans-serif; font-size: medium; background-color: rgb(248, 250, 252);\">Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation</span><br></p>', 0, 1, '2024-02-14 07:48:06', '2024-02-14 07:48:06'),
(14, 'When will my order arrive 10?', '<p><span style=\"color: rgb(120, 113, 108); font-family: Poppins, sans-serif; font-size: medium; background-color: rgb(248, 250, 252);\">Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation</span><br></p>', 0, 1, '2024-02-14 07:48:06', '2024-02-14 07:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `image_galleries`
--

CREATE TABLE `image_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(500) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_galleries`
--

INSERT INTO `image_galleries` (`id`, `title`, `description`, `slug`, `image`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Helth Care progrem', NULL, NULL, 'media/image-gallery/2024-02-14-RzhCwiCy5xXtCAT3qEGxFrWUR7gEI9tukVtLAk7Y.jpg', 0, 1, '2024-02-14 07:12:03', '2024-02-14 07:12:03'),
(5, 'Helth Care progrem 0', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptatum veritatis sunt fuga quaerat suscipit eius necessitatibus cum labore illum quod, distinctio, nesciunt nihil facilis, nemo numquam tenetur eveniet magnam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum provident soluta adipisci odit voluptatibus neque possimus non quisquam blanditiis, illum natus reiciendis unde eveniet, quae voluptatem pariatur placeat magni veritatis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo ea aut quis sit est omnis corporis eligendi, delectus ex, consequuntur accusamus asperiores rem, officiis nostrum dolor quia fugiat aliquid quas. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis, at. Alias doloremque nesciunt nam, ducimus doloribus quidem, similique ad consequuntur reiciendis provident culpa iure dolorem facere recusandae tenetur, quos amet! Lorem ipsum dolor sit amet consectetur adipisicing elit. Est magni enim itaque, inventore voluptas nisi, amet molestiae, eum aliquam repudiandae hic veniam. Ea vitae mollitia voluptatem eligendi expedita, deserunt omnis!', NULL, 'media/image-gallery/2024-02-14-eOn8Q4wnnW5GlIP9B5nggmGY9D0JTeiM775LIVKT.jpeg', 0, 1, '2024-02-14 07:16:21', '2024-02-17 07:05:33'),
(7, 'Helth Care progrem1', NULL, NULL, 'media/image-gallery/2024-02-14-9oJDEHi57wMdlfyEn1ASXkSItdF501G6mq3ZEzBt.jpg', 0, 1, '2024-02-14 07:18:08', '2024-02-14 07:18:08'),
(8, 'Helth Care progrem 4', NULL, NULL, 'media/image-gallery/2024-02-14-GCX31WKZnu3rBPWStArVnntpuHiabR9hBS0znE4R.jpg', 0, 1, '2024-02-14 07:19:33', '2024-02-14 07:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `j_m_c_lists`
--

CREATE TABLE `j_m_c_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `j_m_c_lists`
--

INSERT INTO `j_m_c_lists` (`id`, `name`, `position`, `image`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Saidur Rohman', 'Chairman', 'media/jmclist/2024-02-14-6v4TCjjhdzsd7tVBHzAat2qbyUhIBLHfPzelH62Y.png', 0, 1, '2024-02-14 07:32:39', '2024-02-14 07:32:39'),
(3, 'Tambir', 'Deroctor', 'media/jmclist/2024-02-14-kl05acauJcqkAPAHrmHCUryFJYHNSckxZ6MHLubp.png', 0, 1, '2024-02-14 07:33:16', '2024-02-14 07:33:16'),
(4, 'Ikram', 'Chairman', 'media/jmclist/2024-02-14-piTqOjodWhlpZ1tDvtgDtAPGQNIHq9tQ0XjcM2gl.png', 0, 1, '2024-02-14 07:33:41', '2024-02-14 07:33:41'),
(5, 'KORVI RAKSHAND', 'Chairman', 'media/jmclist/2024-02-14-nEOo9Yk5JP4Mt4FEdKMPLOnEkZpqI9A6sO5bWoNY.png', 0, 1, '2024-02-14 07:34:00', '2024-02-14 07:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_26_070249_create_permission_tables', 1),
(6, '2023_04_29_104538_create_admin_menus_table', 1),
(7, '2023_04_29_104545_create_admin_menu_actions_table', 1),
(8, '2023_04_30_095422_create_jobs_table', 1),
(9, '2023_07_16_193339_create_settings_table', 1),
(10, '2023_08_08_095304_create_admin_settings_table', 1),
(11, '2023_08_23_083356_create_portfolios_table', 1),
(12, '2023_10_03_222638_create_client_messages_table', 1),
(13, '2023_11_03_092056_create_faqs_table', 1),
(14, '2023_11_03_210340_create_terms_and_conditions_table', 1),
(15, '2023_11_02_115531_create_app_settings_table', 2),
(16, '2024_02_07_145230_create_client_navigation_menus_table', 3),
(17, '2024_02_08_130241_create_sliders_table', 4),
(18, '2024_02_08_145030_create_blogs_table', 5),
(19, '2024_02_08_162157_create_testimonials_table', 6),
(20, '2024_02_08_190216_create_workout_sections_table', 7),
(21, '2024_02_09_212435_create_video_galleries_table', 8),
(22, '2024_02_10_112914_create_video_galleries_table', 9),
(23, '2024_02_10_172000_create_photo_galleries_table', 10),
(25, '2024_02_10_205843_create_image_galleries_table', 11),
(26, '2024_02_10_223748_create_team_tops_table', 12),
(27, '2024_02_12_124130_create_faq_ones_table', 13),
(28, '2024_02_12_134646_create_s_b_page_banners_table', 14),
(30, '2024_02_12_152026_create_s_b_page_stickers_table', 15),
(31, '2024_02_12_151943_create_stickers_table', 16),
(32, '2024_02_12_154334_create_s_b_page_x_banners_table', 16),
(33, '2024_02_12_183351_create_career_toops_table', 17),
(34, '2024_02_12_204402_create_career_vacant_postions_table', 18),
(36, '2024_02_12_225829_create_career_page_bottoms_table', 19),
(37, '2024_02_13_002615_create_about_u_s_tops_table', 20),
(40, '2024_02_13_111729_create_about_u_s_bottoms_table', 21),
(42, '2024_02_13_121406_create_contac_us_table', 22),
(43, '2024_02_13_125804_create_contact_us_mains_table', 23),
(44, '2024_02_13_153712_create_m_c_lists_table', 24),
(45, '2024_02_13_160056_create_j_m_c_lists_table', 25),
(46, '2024_02_13_160844_create_board_m_embers_table', 26),
(47, '2024_02_16_124630_create_news_and_articles_table', 27),
(48, '2024_02_16_142008_create_works_area_details_table', 28),
(49, '2024_02_16_230915_create_about_external_links_table', 29),
(50, '2024_02_18_153352_create_abouts_table', 30),
(51, '2024_02_18_183816_create_contact_us_table', 31),
(52, '2024_02_19_140949_create_career_items_table', 32),
(53, '2024_02_19_140956_create_careers_table', 32),
(54, '2024_02_19_154856_create_mission_visions_table', 33),
(55, '2024_02_19_210701_create_book_stores_table', 34);

-- --------------------------------------------------------

--
-- Table structure for table `mission_visions`
--

CREATE TABLE `mission_visions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `iframe` text NOT NULL,
  `type` enum('mission','vision') NOT NULL,
  `primary_title` varchar(255) NOT NULL,
  `primary_description` text NOT NULL,
  `btn_title` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mission_visions`
--

INSERT INTO `mission_visions` (`id`, `heading`, `title`, `description`, `image`, `iframe`, `type`, `primary_title`, `primary_description`, `btn_title`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, 'We are Team Pathgriho', 'Our Mission', '<p><span style=\"font-family: Oswald, sans-serif; font-size: 20px; text-align: justify;\">The founder of Bidyanondo is Mr. Kishor Kumar Das, a Peru based Corporate Professional. He is a social activist and coming from an underprivileged backdrop has seen first hand how much a person has to struggle and endure to meet the simplest of human rights like food, shelter and education. Withstanding all odds he made a successful career and dreamed of forming an institution where people will be treated with dignity and their basic needs will be met while giving them a way to be self-sufficient. To serve Bidyanondo better, Mr. Kishor eventually left his highly acclaimed profession and now invests his full time to carry it further. He initiates projects that solve complex problems with his uniqueness, effectiveness and originality. Later a team of domestic and international members from various backgrounds with varied skill sets came together and joined Bidyanondo. With their time, effort, intellect, skills, networks and financial support the charity thrived. The idea eventually took shape in the form of the currently running foundation, providing education, shelter, nutrition, healthcare & legal aid to the impoverished and enabling them with skills, giving them the confidence to stand on the same pedestal as their peers. Bidyanondo started it\'s journey with just 22 students at Narayanganj in 22 December, 2013. Currently it has eight branches nationwide with hundreds of volunteers, two orphanages in Ramu & Rajbari with 135 orphan child, one Old Age Home, One full Primary school on it\'s own land with 250 students, Two libraries with thousands of books open for all. Besides these, Bidyanondo has been conducted some unique and innovative programs such as One Taka Meal, One Taka Medical Aid, One Glass of Milk, Free academic coaching, Orphanage Center, Free University admission Coaching, Scholarship Program, Photography for children, Women Empowerment, Training Center etc. Now Bidyanondo has reached a position where the name has become synonymous with trust and care. People donate here with ease and support wholeheartedly. The engaging and innovative endeavours launched in Bangladesh have become incredibly fruitful and now it has been replicated in branches across South America and North America.</span><br></p>', 'media/mission-vision/2024-02-19-VjkLKxMx0RpozCuhzxomBwQ5pygidvbC6RwPSNsm.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/kBwdZ5h9vOk?si=xP5dBk8MREpoSAe-\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'mission', 'Join us', 'One Glass of Milk, Free academic coaching, Orphanage Center, Free University admission Coaching, Scholarship Program, Photography for children, Women Empowerment, Training Center etc. Now Bidyanondo has reached a position where the name has become synonymous with trust and care. People donate here with ease and support wholeheartedly. The engaging and innovative endeavours launched in Bangladesh have become incredibly fruitful and now it has been replicated in branches across South America and North America.', 'Join as a Volenteer', '#sss', '2024-02-19 11:14:31', '2024-02-19 11:40:31'),
(2, 'We are Team Pathgriho', 'Our Vision', '<p><span style=\"font-family: Oswald, sans-serif; font-size: 20px; text-align: justify;\">The founder of Bidyanondo is Mr. Kishor Kumar Das, a Peru based Corporate Professional. He is a social activist and coming from an underprivileged backdrop has seen first hand how much a person has to struggle and endure to meet the simplest of human rights like food, shelter and education. Withstanding all odds he made a successful career and dreamed of forming an institution where people will be treated with dignity and their basic needs will be met while giving them a way to be self-sufficient. To serve Bidyanondo better, Mr. Kishor eventually left his highly acclaimed profession and now invests his full time to carry it further. He initiates projects that solve complex problems with his uniqueness, effectiveness and originality. Later a team of domestic and international members from various backgrounds with varied skill sets came together and joined Bidyanondo. With their time, effort, intellect, skills, networks and financial support the charity thrived. The idea eventually took shape in the form of the currently running foundation, providing education, shelter, nutrition, healthcare &amp; legal aid to the impoverished and enabling them with skills, giving them the confidence to stand on the same pedestal as their peers. Bidyanondo started it\'s journey with just 22 students at Narayanganj in 22 December, 2013. Currently it has eight branches nationwide with hundreds of volunteers, two orphanages in Ramu &amp; Rajbari with 135 orphan child, one Old Age Home, One full Primary school on it\'s own land with 250 students, Two libraries with thousands of books open for all. Besides these, Bidyanondo has been conducted some unique and innovative programs such as One Taka Meal, One Taka Medical Aid, One Glass of Milk, Free academic coaching, Orphanage Center, Free University admission Coaching, Scholarship Program, Photography for children, Women Empowerment, Training Center etc. Now Bidyanondo has reached a position where the name has become synonymous with trust and care. People donate here with ease and support wholeheartedly. The engaging and innovative endeavours launched in Bangladesh have become incredibly fruitful and now it has been replicated in branches across South America and North America.</span><br></p>', 'media/mission-vision/2024-02-19-hm7nvOOZ2CWbffoQNJXzbxO9wpdaDZ9h9267TFkN.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/kBwdZ5h9vOk?si=xP5dBk8MREpoSAe-\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'vision', 'Join us', 'One Glass of Milk, Free academic coaching, Orphanage Center, Free University admission Coaching, Scholarship Program, Photography for children, Women Empowerment, Training Center etc. Now Bidyanondo has reached a position where the name has become synonymous with trust and care. People donate here with ease and support wholeheartedly. The engaging and innovative endeavours launched in Bangladesh have become incredibly fruitful and now it has been replicated in branches across South America and North America.', 'Join as a Volenteer', '#', '2024-02-19 11:14:55', '2024-02-19 11:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 4),
(1, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 6),
(5, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Table structure for table `m_c_lists`
--

CREATE TABLE `m_c_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_c_lists`
--

INSERT INTO `m_c_lists` (`id`, `name`, `position`, `image`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(2, 'KORVI RAKSHAND', 'Chairman', 'media/mclist/2024-02-14-n81nvdbqVBRtuqW7dxbJp6L4ijcMaMOFeySeqajp.png', 0, 1, '2024-02-14 07:27:58', '2024-02-14 07:27:58'),
(3, 'KORVI RAKSHAND', 'Deroctor', 'media/mclist/2024-02-14-i212v2O7VtBTkJwtUZULsUrQzECs071e7FKmhSQs.png', 0, 1, '2024-02-14 07:28:27', '2024-02-14 07:29:47'),
(4, 'KORVI RAKSHAND', 'Deroctor', 'media/mclist/2024-02-14-vorWeo4J5E1wqpBlIOl45moZEENlvHpN1b6FNBqM.png', 0, 1, '2024-02-14 07:29:23', '2024-02-14 07:29:23'),
(5, 'KORVI RAKSHAND', 'Chairman', 'media/mclist/2024-02-14-A4T4w3uEsFgSQIavCtPhEVMhk3bz8G2HwQQ0WTpI.png', 0, 1, '2024-02-14 07:30:16', '2024-02-14 07:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `news_and_articles`
--

CREATE TABLE `news_and_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `serial` int(11) DEFAULT NULL,
  `type` enum('featured','normal') NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_and_articles`
--

INSERT INTO `news_and_articles` (`id`, `title`, `image`, `short_description`, `description`, `slug`, `serial`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'No Title', 'media/news-and-article/2024-02-16-1UPgoeWEnSr6z7EzyMSqTmWWyobHKvzYGrpyYK9y.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.<br></p>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.<br></p>', 'no-title', 1, 'featured', 1, '2024-02-16 07:03:33', '2024-02-16 07:11:44'),
(2, 'First Title', 'media/news-and-article/2024-02-16-BG646hB5ngswz16OijlEnG4THK9LCtBaxIM4yo06.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.<br></p>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.<br></p>', 'first-title', 6, 'featured', 1, '2024-02-16 07:04:22', '2024-02-16 07:10:45'),
(3, 'First Title', 'media/news-and-article/2024-02-16-2vUJezCeRyGSRZFL6MPtrxcJrnT17IQttNXDYeAA.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.<br></p>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.<br></p>', 'first-title-1', 2, 'featured', 1, '2024-02-16 07:04:28', '2024-02-16 07:04:28'),
(4, 'First Title', 'media/news-and-article/2024-02-16-2VAXDM1sGs51Bps1ANzGFHILkvcnQxYQZMbgbZWP.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.<br></p>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.<br></p>', 'first-title-2', 3, 'featured', 1, '2024-02-16 07:04:42', '2024-02-16 07:04:42'),
(5, 'First Title', 'media/news-and-article/2024-02-16-uCxwYsXlDwD6LHL2rPle7LT41GPSSjgc7pOsOl0B.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.<br></p>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.<br></p>', 'first-title-3', 4, 'featured', 1, '2024-02-16 07:04:46', '2024-02-16 07:04:46'),
(6, 'First Title', 'media/news-and-article/2024-02-16-qqMSVGSlazGxCgWh6Q0gVuK5CfltbPMRSr89FDiN.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.<br></p>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at.<br></p>', 'first-title-4', 5, 'featured', 1, '2024-02-16 07:04:50', '2024-02-16 07:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Settings', 'web', '2024-02-07 07:55:58', '2024-02-07 07:55:58'),
(2, 'admin.settings.index', 'web', '2024-02-07 07:57:10', '2024-02-07 07:57:10'),
(3, 'admin.admin-settings.index', 'web', '2024-02-07 07:58:56', '2024-02-07 07:58:56'),
(4, 'admin.client-navigation-menus.index', 'web', '2024-02-07 09:08:18', '2024-02-07 09:08:18'),
(5, 'admin.admin-menu.index', 'web', '2024-02-07 10:19:56', '2024-02-07 10:19:56'),
(6, 'admin.client-navigation-menu.create', 'web', '2024-02-07 11:00:20', '2024-02-07 11:00:20'),
(7, 'admin.client-navigation-menu.index', 'web', '2024-02-07 11:00:48', '2024-02-07 11:00:48'),
(8, 'admin.client-navigation-menu.edit', 'web', '2024-02-07 11:01:02', '2024-02-07 11:01:02'),
(9, 'Home Page', 'web', '2024-02-08 06:54:37', '2024-02-08 06:54:37'),
(10, 'admin.slider.index', 'web', '2024-02-08 06:55:10', '2024-02-08 06:55:10'),
(11, 'admin.slider.create', 'web', '2024-02-08 06:55:40', '2024-02-08 06:55:40'),
(12, 'admin.slider.edit', 'web', '2024-02-08 06:55:51', '2024-02-08 06:55:51'),
(13, 'admin.blog.index', 'web', '2024-02-08 09:02:30', '2024-02-08 09:02:30'),
(14, 'admin.blog.create', 'web', '2024-02-08 09:02:59', '2024-02-08 09:02:59'),
(15, 'admin.blog.edit', 'web', '2024-02-08 09:03:23', '2024-02-08 09:03:23'),
(16, 'admin.testimonial.edit', 'web', '2024-02-08 11:27:20', '2024-02-08 11:27:20'),
(17, 'admin.workout-section.index', 'web', '2024-02-08 15:54:57', '2024-02-08 15:54:57'),
(18, 'admin.workout-section.create', 'web', '2024-02-08 15:56:38', '2024-02-08 15:56:38'),
(19, 'admin.workout-section.edit', 'web', '2024-02-08 15:56:49', '2024-02-08 15:56:49'),
(20, 'admin.video-gallery.index', 'web', '2024-02-10 06:09:45', '2024-02-10 06:09:45'),
(21, 'admin.video-gallery.create', 'web', '2024-02-10 06:20:09', '2024-02-10 06:20:09'),
(22, 'admin.video-gallery.edit', 'web', '2024-02-10 06:20:50', '2024-02-10 06:20:50'),
(26, 'admin.image-gallery.index', 'web', '2024-02-10 15:06:26', '2024-02-10 15:06:26'),
(27, 'admin.image-gallery.create', 'web', '2024-02-10 15:07:32', '2024-02-10 15:07:32'),
(28, 'admin.image-gallery.edit', 'web', '2024-02-10 15:08:09', '2024-02-10 15:08:09'),
(32, 'Team Page', 'web', '2024-02-10 16:18:18', '2024-02-10 16:18:18'),
(33, 'admin.team-top.index', 'web', '2024-02-10 16:22:06', '2024-02-10 16:22:06'),
(35, 'admin.team-top.create', 'web', '2024-02-10 16:51:20', '2024-02-10 16:51:20'),
(37, 'Admin.faq.index', 'web', '2024-02-12 06:55:44', '2024-02-12 06:55:44'),
(38, 'Sticker & Banner Page', 'web', '2024-02-12 07:42:15', '2024-02-12 07:42:15'),
(39, 'admin.sticker-banner-page-top.index', 'web', '2024-02-12 09:06:54', '2024-02-12 09:06:54'),
(40, 'admin.stickers.index', 'web', '2024-02-12 09:30:49', '2024-02-12 09:30:49'),
(41, 'admin.x-banner.index', 'web', '2024-02-12 09:54:02', '2024-02-12 09:54:02'),
(43, 'Career Page', 'web', '2024-02-12 12:32:31', '2024-02-12 12:32:31'),
(47, 'admin.career-top.index', 'web', '2024-02-12 13:35:32', '2024-02-12 13:35:32'),
(48, 'admin.career-vacant-postion.index', 'web', '2024-02-12 14:49:39', '2024-02-12 14:49:39'),
(49, 'admin.careerpagebottom.index', 'web', '2024-02-12 16:55:51', '2024-02-12 16:55:51'),
(50, 'About Us page', 'web', '2024-02-12 18:40:58', '2024-02-12 18:40:58'),
(51, 'admin.about-us-top.index', 'web', '2024-02-12 18:41:48', '2024-02-12 18:41:48'),
(52, 'admin.about-us-bottom.index', 'web', '2024-02-13 05:50:56', '2024-02-13 05:50:56'),
(53, 'Contact Us Page', 'web', '2024-02-13 06:38:13', '2024-02-13 10:45:27'),
(54, 'admin.contact-us.index', 'web', '2024-02-13 06:40:54', '2024-02-13 06:40:54'),
(56, 'admin.mclist.index', 'web', '2024-02-13 09:00:51', '2024-02-13 09:00:51'),
(57, 'admin.jmclist.index', 'web', '2024-02-13 09:58:28', '2024-02-13 09:58:28'),
(58, 'admin.bord-member.index', 'web', '2024-02-13 09:59:55', '2024-02-13 09:59:55'),
(59, 'admin.contact-main.index', 'web', '2024-02-14 08:55:29', '2024-02-14 08:55:29'),
(60, 'admin.role.index', 'web', '2024-02-15 04:35:35', '2024-02-15 04:35:35'),
(61, 'admin.user.index', 'web', '2024-02-15 04:45:08', '2024-02-15 04:45:08'),
(62, 'admin.news-and-article.index', 'web', '2024-02-16 06:59:07', '2024-02-16 06:59:07'),
(63, 'Footer Items Setup', 'web', '2024-02-16 08:32:33', '2024-02-18 08:46:44'),
(64, 'admin.works-area-details.create', 'web', '2024-02-16 08:33:01', '2024-02-16 08:33:01'),
(65, 'admin.works-area-details.edit', 'web', '2024-02-16 08:33:09', '2024-02-16 08:33:09'),
(66, 'admin.about-external-link.index', 'web', '2024-02-16 17:26:40', '2024-02-16 17:26:40'),
(67, 'admin.about-external-link.create', 'web', '2024-02-16 17:27:01', '2024-02-16 17:27:01'),
(68, 'admin.about-external-link.edit', 'web', '2024-02-16 17:27:09', '2024-02-16 17:27:09'),
(69, 'admin.about.index', 'web', '2024-02-18 09:43:58', '2024-02-18 09:43:58'),
(70, 'admin.contact.index', 'web', '2024-02-18 12:51:43', '2024-02-18 12:51:43'),
(71, 'admin.client-message.index', 'web', '2024-02-18 13:29:39', '2024-02-18 13:29:39'),
(72, 'admin.career.index', 'web', '2024-02-19 08:23:25', '2024-02-19 08:23:25'),
(73, 'admin.career-item.index', 'web', '2024-02-19 08:24:09', '2024-02-19 08:24:09'),
(74, 'admin.career-item.create', 'web', '2024-02-19 08:25:24', '2024-02-19 08:26:35'),
(75, 'admin.career-item.edit', 'web', '2024-02-19 08:25:39', '2024-02-19 08:26:26'),
(76, 'admin.career.create', 'web', '2024-02-19 08:28:59', '2024-02-19 08:28:59'),
(77, 'admin.career.edit', 'web', '2024-02-19 08:29:13', '2024-02-19 08:29:13'),
(78, 'admin.our-mission.index', 'web', '2024-02-19 10:17:11', '2024-02-19 10:17:11'),
(79, 'admin.our-vision.index', 'web', '2024-02-19 10:19:55', '2024-02-19 10:19:55'),
(80, 'admin.our-missions.index', 'web', '2024-02-19 10:20:38', '2024-02-19 10:20:38'),
(81, 'admin.book-store.index', 'web', '2024-02-19 15:30:18', '2024-02-19 15:30:18'),
(82, 'Store Management', 'web', '2024-02-20 12:03:01', '2024-02-20 12:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `video_id` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `technologies` varchar(255) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'System Admin', 'web', '2024-02-07 07:00:10', '2024-02-07 07:00:10'),
(4, 'amir', 'web', '2024-02-15 04:48:38', '2024-02-15 04:48:38'),
(5, 'new-user', 'web', '2024-02-19 16:16:06', '2024-02-19 16:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 4),
(13, 5),
(14, 1),
(14, 4),
(14, 5),
(15, 1),
(15, 4),
(15, 5),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(20, 5),
(21, 1),
(21, 5),
(22, 1),
(22, 5),
(26, 1),
(26, 5),
(27, 1),
(27, 5),
(28, 1),
(28, 5),
(32, 1),
(33, 1),
(35, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(43, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `primary_mobile` varchar(255) DEFAULT NULL,
  `secondary_mobile` varchar(255) DEFAULT NULL,
  `primary_email` varchar(255) DEFAULT NULL,
  `secondary_email` varchar(255) DEFAULT NULL,
  `office_time` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_image` text DEFAULT NULL,
  `google_map` text DEFAULT NULL,
  `favicon` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `footer_logo` varchar(255) DEFAULT NULL,
  `placeholder` varchar(255) DEFAULT NULL,
  `facebook_page` varchar(255) DEFAULT NULL,
  `facebook_group` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(3, NULL, NULL, 'media/slider/2024-02-08-pQbGeo1387VEGkAjSp2zYJuS3dadvNm9nOPT871g.jpg', 1, 1, '2024-02-08 17:11:35', '2024-02-08 17:11:35'),
(4, NULL, NULL, 'media/slider/2024-02-08-5XveSBNPN9rcZupO9XD0BnYLIeovNoqvwlNV0R9m.jpg', 3, 1, '2024-02-08 17:12:34', '2024-02-08 17:12:34'),
(5, NULL, NULL, 'media/slider/2024-02-08-lPhA5fBUyPlzCfsp1rAXBxdpEPH46VfWut9OXi8v.jpg', 4, 1, '2024-02-08 17:12:51', '2024-02-08 17:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `stickers`
--

CREATE TABLE `stickers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_b_page_banners`
--

CREATE TABLE `s_b_page_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bannertitle` varchar(255) DEFAULT NULL,
  `bannerdescription` text DEFAULT NULL,
  `bannerbuttontext` varchar(255) DEFAULT NULL,
  `bannerbuttonurl` varchar(255) DEFAULT NULL,
  `bannerimage` varchar(255) DEFAULT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_b_page_banners`
--

INSERT INTO `s_b_page_banners` (`id`, `bannertitle`, `bannerdescription`, `bannerbuttontext`, `bannerbuttonurl`, `bannerimage`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Lorem Ipsum', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has</span><br></p>', 'join us', 'htttps://www.com', 'media/sticker-banner-top/2024-02-14-p1lDYxI9s6ypHDpkaOHHPP37vWwggrG9mhBXa1PZ.jpg', 0, 1, '2024-02-14 07:59:54', '2024-02-14 07:59:54'),
(3, 'Lorem Ipsum is simply dummy text of the printing and', '<p><span style=\"font-weight: bolder; color: rgb(108, 117, 125); margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"color: rgb(108, 117, 125); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has</span><br></p>', 'join us', 'htttps://www.com', 'media/sticker-banner-top/2024-02-14-Dp0ZcX71FGiMpxTgB6ajTDcND18jWZ1U8N7k0XeR.jpg', 0, 1, '2024-02-14 08:00:50', '2024-02-14 08:00:50'),
(4, 'Lorem Ipsum is simply dummy text of the printing and', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there i</span><br></p>', 'join us', 'htttps://www.com', 'media/sticker-banner-top/2024-02-14-lOpPbByVFTBmzDr3QF04kmCQsPxXYGZ3bLFxPhrz.png', 0, 1, '2024-02-14 08:01:37', '2024-02-14 08:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `s_b_page_stickers`
--

CREATE TABLE `s_b_page_stickers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stickerimage` varchar(255) DEFAULT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_b_page_stickers`
--

INSERT INTO `s_b_page_stickers` (`id`, `stickerimage`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(2, 'media/stickers/2024-02-14-tDjPWGwG0OhqClj9kDtedajYRtY3giHwbetNXFNq.jpg', 0, 1, '2024-02-14 08:04:24', '2024-02-14 08:04:24'),
(3, 'media/stickers/2024-02-14-WZPesomqFMB7AlZn14mcY5FN6J5dH6ESDhSD75ur.jpg', 0, 1, '2024-02-14 08:04:51', '2024-02-14 08:04:51'),
(4, 'media/stickers/2024-02-14-kfYgFYTUIIjVP4xHAxFp7gelQoc6yZzZa6kpPY8J.jpg', 0, 1, '2024-02-14 08:05:04', '2024-02-14 08:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `s_b_page_x_banners`
--

CREATE TABLE `s_b_page_x_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `xbannerimage` varchar(255) DEFAULT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_b_page_x_banners`
--

INSERT INTO `s_b_page_x_banners` (`id`, `xbannerimage`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(2, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58'),
(3, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58'),
(4, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58'),
(5, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58'),
(6, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58'),
(7, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58'),
(8, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58'),
(9, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58'),
(10, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58'),
(11, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58'),
(12, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58'),
(13, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58'),
(14, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58'),
(15, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58'),
(16, 'media/xbanner/2024-02-14-GXKrII572qPQdNdDMm4meY3ImfeQIIQN3UAB21ER.jpg', 0, 1, '2024-02-14 08:05:58', '2024-02-14 08:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `team_tops`
--

CREATE TABLE `team_tops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `first_title` varchar(255) DEFAULT NULL,
  `second_title` varchar(255) DEFAULT NULL,
  `third_title` varchar(255) DEFAULT NULL,
  `fourth_title` varchar(255) DEFAULT NULL,
  `btn_title` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_tops`
--

INSERT INTO `team_tops` (`id`, `title`, `first_title`, `second_title`, `third_title`, `fourth_title`, `btn_title`, `btn_link`, `description`, `image`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'OUR PATHGRIHO TEAM', 'OUR PATHGRIHO TEAM', 'MANAGEMENT COMMITTEE', 'JUNIOR MANAGEMENT COMMITTEE', 'BOARD MEMBERS', 'Become a Volenteer', '#', '<div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-white); text-align: var(--bs-body-text-align); font-size: 17px; letter-spacing: 0.425px;\"><font face=\"Poppins, sans-serif\">Diversification and dedication is what makes the JAAGO team so special. Our energetic team of employees and volunteers are the driving force behind our ground-breaking success.The team is far from being homogeneous; they come from a variety of backgrounds but share a common belief in eliminating poverty in Bangladesh through literacy. At JAAGO, diversity is considered an advantage rather than an obstacle. Individuals put aside their differences to work harmoniously as a team. Age, race, education and ethnicity hold no boundaries here.</font></span></div>', 'media/teamtop/2024-02-14-YbittmAVjFuG5uunPBcQvvIQvgmEdHtabWa7qgII.png', 1, 1, '2024-02-14 09:34:38', '2024-02-17 15:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` text NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `secondary_title` varchar(255) NOT NULL,
  `secondary_description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `photos` text DEFAULT NULL,
  `bg_image` varchar(255) DEFAULT NULL,
  `short_description` text NOT NULL,
  `banner_title` varchar(255) NOT NULL,
  `banner_description` text DEFAULT NULL,
  `volunteers` varchar(255) NOT NULL,
  `volunteer_title` varchar(255) DEFAULT NULL,
  `btn_title` varchar(255) NOT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `primary_btn_title` varchar(255) NOT NULL,
  `primary_btn_link` tinytext DEFAULT NULL,
  `secondary_btn_title` varchar(255) DEFAULT NULL,
  `secondary_btn_link` tinytext DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `secondary_title`, `secondary_description`, `image`, `photos`, `bg_image`, `short_description`, `banner_title`, `banner_description`, `volunteers`, `volunteer_title`, `btn_title`, `btn_link`, `primary_btn_title`, `primary_btn_link`, `secondary_btn_title`, `secondary_btn_link`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sponsor A Child', 'Who We Are?', '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero nulla quidem obcaecati quisquam. Corrupti, omnis quo quos cupiditate illum eos suscipit perspiciatis velit ipsum, in laudantium laboriosam nobis. Sunt, inventore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente, adipisci beatae amet laudantium libero maxime illo molestias, facere, obcaecati cum quae? Dolorum sit animi rerum labore quaerat officiis pariatur tenetur!<br></p>', 'media/testimonial/2024-02-16-2ikGHW1Ni2MhMizY7Q2WaJO3zf2fmjhxfRULftTS.jpg', '[\"media\\/testimonial\\/2024-02-16-6ceS8tSlMFEwWpLu4Nv6DA2DiawMK3pcpjesu5cP.jpg\",\"media\\/testimonial\\/2024-02-16-X7mkkek6cftz7xjENiUsJAeyfE6KN1rWtoYqWsHj.jpg\",\"media\\/testimonial\\/2024-02-16-NtEnsihhsb60UNobt4svGMedohZyAoS9BYgoM5fS.jpg\",\"media\\/testimonial\\/2024-02-16-Z6OcpiLyrlGOJInlZNwxlCYx7gNHAZLdMtou8C8s.jpg\"]', 'media/testimonial/2024-02-16-aTNPJHKwSROMTCdfc0r14yIZ9MbqvHdIIbz8vvk4.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis odio nobis harum iusto magnam tempora? Eligendi ipsa voluptatibus quaerat odio harum eveniet iusto soluta eos quibusdam, id libero at. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora architecto quia neque esse alias aperiam possimus unde fugit asperiores, volutes odio, consequatur desert assumenda aspernatur debitis modi nulla, ipsam maxime. Possimus, saepe fugiat recusandae alias ex sapiente ipsam vel tempore itaque, nobis velit, impedit reiciendis. Eum, error dolores. Quidem deserunt numquam cupiditate unde placeat consequatur nostrum reprehenderit beatae expedita tempore. Veniam ipsam nemo, sapiente dolor doloribus optio dicta id, rem itaque illum error excepturi.<br></p>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, sequi illum consequatur iusto quas, et perferendis maxime.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam labore ipsum voluptas corporis debitis fugiat eligendi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum odio ducimus sequi magnam! Nemo, quaerat quibusdam! Aut nostrum numquam consequatur deleniti maiores sit quis, laboriosam esse odit dolore quod doloremque? Lorem ipsum dolor sit. <span style=\"background-color: var(--bs-white); text-align: var(--bs-body-text-align);\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam labore ipsum voluptas corporis debitis fugiat eligendi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum odio ducimus sequi magnam! Nemo, quaerat quibusdam! Aut nostrum numquam consequatur deleniti maiores sit quis, laboriosam esse odit dolore quod doloremque? Lorem ipsum dolor sit. </span><span style=\"background-color: var(--bs-white); text-align: var(--bs-body-text-align);\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam labore ipsum voluptas corporis debitis fugiat eligendi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum odio ducimus sequi magnam! Nemo, quaerat quibusdam! Aut nostrum numquam consequatur deleniti maiores sit quis, laboriosam esse odit dolore quod doloremque? Lorem ipsum dolor sit. </span></p><p><span style=\"background-color: var(--bs-white); text-align: var(--bs-body-text-align);\"><br></span></p>', '50000', 'Sitll now, Voulenteers in worldwide.', 'Sponsor A Child', '#', 'Konw More About Ourself', '#', 'Sponsor Now', '#', 'Give a Little. Change a Lot.', 1, '2024-02-08 12:41:36', '2024-02-16 04:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `user_name`, `email`, `phone`, `address`, `image`, `cover_image`, `bio`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, NULL, '$2y$10$e1VFuGv0Zvw9nmltdxQCsuuYI8WrIo4aeBZAusQZx2/XLS4yBrEV2', NULL, '2024-02-07 07:00:10', '2024-02-07 07:00:10'),
(6, 1, 'Amir Ali', 'amir', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '$2y$10$uiSRUKchTftfBz2sIilXfuCuAB/FjZroDu5Xh74E/bI6CDmhF8FHW', NULL, '2024-02-15 04:51:11', '2024-02-15 04:51:11'),
(7, 1, 'Md Amir Ali', 'amirali', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '$2y$10$R2F4IQngz.KQ.6mxJcdeW.x3m6VSg1v8TAIztXrBT6gWaVgXMqF4S', NULL, '2024-02-19 16:19:01', '2024-02-19 16:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `iframe` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `serial` tinyint(255) DEFAULT NULL,
  `status` int(20) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_galleries`
--

INSERT INTO `video_galleries` (`id`, `created_at`, `updated_at`, `title`, `iframe`, `slug`, `serial`, `status`) VALUES
(9, '2024-02-14 14:57:33', '2024-02-29 16:03:32', 'পাঠগৃহবাসীদের মিলনমেলা ২০২৪||Pathgriho Milon Mela 2024', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/watch?v=cSTFx_wVbLo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'pathgrrihbaseeder-milnmela-2024pathgriho-milon-mela-2024', 0, 1),
(10, '2024-02-14 14:57:33', '2024-02-17 08:21:23', 'What is Lorem Ipsum? 2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/bld-qRdUp7M?si=nk4MaWClGbxwUgxX\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'what-is-lorem-ipsum-2', 2, 1),
(11, '2024-02-14 14:57:33', '2024-02-17 08:22:05', 'What is Lorem Ipsum? 3', '<iframe width=\"100\" height=\"75\" src=\"https://www.youtube.com/embed/bld-qRdUp7M?si=nk4MaWClGbxwUgxX\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'what-is-lorem-ipsum-3', 3, 1),
(12, '2024-02-14 14:57:33', '2024-02-17 08:22:17', 'What is Lorem Ipsum? 4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/bld-qRdUp7M?si=nk4MaWClGbxwUgxX\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'what-is-lorem-ipsum-4', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `workout_sections`
--

CREATE TABLE `workout_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_heading` varchar(255) NOT NULL,
  `first_title` varchar(255) NOT NULL,
  `primary_btn_title` varchar(255) NOT NULL,
  `primary_btn_link` varchar(255) NOT NULL,
  `main_heading` tinytext NOT NULL,
  `secondary_btn_title` varchar(255) NOT NULL,
  `secondary_btn_link` varchar(255) NOT NULL,
  `first_workout_title` varchar(255) NOT NULL,
  `first_workout` varchar(255) NOT NULL,
  `second_workout_title` varchar(255) NOT NULL,
  `second_workout` varchar(255) NOT NULL,
  `third_workout_title` varchar(255) NOT NULL,
  `third_workout` varchar(255) NOT NULL,
  `first_btn_title` varchar(255) NOT NULL,
  `first_btn_link` varchar(255) NOT NULL,
  `article_title` varchar(255) DEFAULT NULL,
  `article_heading` varchar(255) NOT NULL,
  `bg_image` varchar(255) DEFAULT NULL,
  `secondary_bg_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workout_sections`
--

INSERT INTO `workout_sections` (`id`, `first_heading`, `first_title`, `primary_btn_title`, `primary_btn_link`, `main_heading`, `secondary_btn_title`, `secondary_btn_link`, `first_workout_title`, `first_workout`, `second_workout_title`, `second_workout`, `third_workout_title`, `third_workout`, `first_btn_title`, `first_btn_link`, `article_title`, `article_heading`, `bg_image`, `secondary_bg_image`, `created_at`, `updated_at`) VALUES
(1, 'Give a Little. Change a Lot.', 'Recent Causes', 'Become a Voulenteer.', '#', 'DO YOU WANT TO WORK FOR THE UNDERPRIVILEGED COMMUNITIES AND CHANGE THEIR LIVES?', 'Konw More About Ourself', '#', 'Sitll now, Voulenteers in worldwide.', '50,000', 'Sitll now, Voulenteers in worldwide.', '1000', 'Sitll now, Voulenteers in worldwide.', '535+', 'Sponsor A Child', '#', 'Give a Little. Change a Lot.', 'News & Articles', 'media/workout-section/2024-02-08-1cQPoS0Yfqvaq0QGOVj5oGESg8lOZXw0tNVXS3OF.jpg', 'media/workout-section/2024-02-16-QdOvfHFarx5FBJNS9T3Z1bfDhQunNhI5v2JonNBz.jpg', '2024-02-08 17:02:53', '2024-02-16 13:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `works_area_details`
--

CREATE TABLE `works_area_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `btn_title` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `icon` text DEFAULT NULL,
  `type` enum('Home Page','Contact Us Page','About Page','Career Page') NOT NULL DEFAULT 'Home Page',
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works_area_details`
--

INSERT INTO `works_area_details` (`id`, `title`, `short_description`, `btn_title`, `btn_link`, `icon`, `type`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Volunteers in worldwide', 'Still now, Volunteers in worldwide. on the join team.', 'Donate Now', '#', NULL, 'Home Page', 1, 1, '2024-02-16 08:41:55', '2024-02-16 08:42:26'),
(2, 'Volunteers in worldwide', 'Still now, Volunteers in worldwide. on the join team.', 'Donate Now', '#', NULL, 'Home Page', 2, 1, '2024-02-16 08:42:00', '2024-02-16 08:42:31'),
(3, 'Volunteers in worldwide', 'Still now, Volunteers in worldwide. on the join team.', 'Donate Now', '#', NULL, 'Home Page', 3, 1, '2024-02-16 08:42:01', '2024-02-16 08:42:38'),
(4, 'DONATIONS', 'Bidyanondo is always with you at any crisis in Bangladesh to help and support you.', 'Donate Now', '#', '<i class=\"far fa-football-ball\"></i>', 'Contact Us Page', 1, 1, '2024-02-18 09:12:01', '2024-02-18 09:31:00'),
(5, 'DONATIONS', 'Bidyanondo is always with you at any crisis in Bangladesh to help and support you.', 'Donate Now', '#', '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 384 512\" width=\"50\" height=\"50\"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d=\"M14 95.8C14 42.9 56.9 0 109.8 0H274.2C327.1 0 370 42.9 370 95.8C370 129.3 352.8 158.8 326.7 175.9C352.8 193 370 222.5 370 256C370 308.9 327.1 351.8 274.2 351.8H272.1C247.3 351.8 224.7 342.4 207.7 326.9V415.2C207.7 468.8 163.7 512 110.3 512C57.5 512 14 469.2 14 416.2C14 382.7 31.2 353.2 57.2 336.1C31.2 319 14 289.5 14 256C14 222.5 31.2 193 57.2 175.9C31.2 158.8 14 129.3 14 95.8zM176.3 191.6H109.8C74.2 191.6 45.4 220.4 45.4 256C45.4 291.4 74 320.2 109.4 320.4C109.5 320.4 109.7 320.4 109.8 320.4H176.3V191.6zM207.7 256C207.7 291.6 236.5 320.4 272.1 320.4H274.2C309.7 320.4 338.6 291.6 338.6 256C338.6 220.4 309.7 191.6 274.2 191.6H272.1C236.5 191.6 207.7 220.4 207.7 256zM109.8 351.8C109.7 351.8 109.5 351.8 109.4 351.8C74 352 45.4 380.8 45.4 416.2C45.4 451.7 74.6 480.6 110.3 480.6C146.6 480.6 176.3 451.2 176.3 415.2V351.8H109.8zM109.8 31.4C74.2 31.4 45.4 60.2 45.4 95.8C45.4 131.4 74.2 160.2 109.8 160.2H176.3V31.4H109.8zM207.7 160.2H274.2C309.7 160.2 338.6 131.4 338.6 95.8C338.6 60.2 309.7 31.4 274.2 31.4H207.7V160.2z\"/></svg>', 'Contact Us Page', 2, 1, '2024-02-18 09:14:02', '2024-02-18 09:14:02'),
(6, 'DONATIONS', 'Bidyanondo is always with you at any crisis in Bangladesh to help and support you.', 'Donate Now', '#', '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 384 512\" width=\"50\" height=\"50\"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d=\"M14 95.8C14 42.9 56.9 0 109.8 0H274.2C327.1 0 370 42.9 370 95.8C370 129.3 352.8 158.8 326.7 175.9C352.8 193 370 222.5 370 256C370 308.9 327.1 351.8 274.2 351.8H272.1C247.3 351.8 224.7 342.4 207.7 326.9V415.2C207.7 468.8 163.7 512 110.3 512C57.5 512 14 469.2 14 416.2C14 382.7 31.2 353.2 57.2 336.1C31.2 319 14 289.5 14 256C14 222.5 31.2 193 57.2 175.9C31.2 158.8 14 129.3 14 95.8zM176.3 191.6H109.8C74.2 191.6 45.4 220.4 45.4 256C45.4 291.4 74 320.2 109.4 320.4C109.5 320.4 109.7 320.4 109.8 320.4H176.3V191.6zM207.7 256C207.7 291.6 236.5 320.4 272.1 320.4H274.2C309.7 320.4 338.6 291.6 338.6 256C338.6 220.4 309.7 191.6 274.2 191.6H272.1C236.5 191.6 207.7 220.4 207.7 256zM109.8 351.8C109.7 351.8 109.5 351.8 109.4 351.8C74 352 45.4 380.8 45.4 416.2C45.4 451.7 74.6 480.6 110.3 480.6C146.6 480.6 176.3 451.2 176.3 415.2V351.8H109.8zM109.8 31.4C74.2 31.4 45.4 60.2 45.4 95.8C45.4 131.4 74.2 160.2 109.8 160.2H176.3V31.4H109.8zM207.7 160.2H274.2C309.7 160.2 338.6 131.4 338.6 95.8C338.6 60.2 309.7 31.4 274.2 31.4H207.7V160.2z\"/></svg>', 'Contact Us Page', 3, 1, '2024-02-18 09:14:03', '2024-02-18 09:14:26'),
(7, 'Donation', 'Bidyanondo is always with you at any crisis in Bangladesh to help and support you.', 'Donate Now', '#', '<i class=\"fa-solid fa-frog\"></i>', 'About Page', 1, 1, '2024-02-18 09:31:35', '2024-02-18 11:29:44'),
(8, 'Donation', 'Bidyanondo is always with you at any crisis in Bangladesh to help and support you.', 'Donate Now', '#', '<i class=\"fa-regular fa-face-frown-open\"></i>', 'About Page', 2, 1, '2024-02-18 09:31:41', '2024-02-18 11:30:24'),
(9, 'Donation', 'Bidyanondo is always with you at any crisis in Bangladesh to help and support you.', 'Donate Now', '#', '<i class=\"fa-solid fa-road-lock\"></i>', 'About Page', 3, 1, '2024-02-18 09:31:44', '2024-02-18 11:30:42'),
(10, 'Donate', 'Contribute in our mission to breaking the cycle of poverty through education.', 'Read More', '#', NULL, 'Career Page', 1, 1, '2024-02-19 08:06:32', '2024-02-19 08:06:32'),
(11, 'Donate', 'Contribute in our mission to breaking the cycle of poverty through education.', 'Read More', '#', NULL, 'Career Page', 2, 1, '2024-02-19 08:06:37', '2024-02-19 08:06:37'),
(12, 'Donate', 'Contribute in our mission to breaking the cycle of poverty through education.', 'Read More', '#', NULL, 'Career Page', 3, 1, '2024-02-19 08:06:47', '2024-02-19 08:06:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_external_links`
--
ALTER TABLE `about_external_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_u_s_bottoms`
--
ALTER TABLE `about_u_s_bottoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_u_s_tops`
--
ALTER TABLE `about_u_s_tops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menus`
--
ALTER TABLE `admin_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menu_actions`
--
ALTER TABLE `admin_menu_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_settings`
--
ALTER TABLE `admin_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_settings`
--
ALTER TABLE `app_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `board_m_embers`
--
ALTER TABLE `board_m_embers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_stores`
--
ALTER TABLE `book_stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_items`
--
ALTER TABLE `career_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_page_bottoms`
--
ALTER TABLE `career_page_bottoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_toops`
--
ALTER TABLE `career_toops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_vacant_postions`
--
ALTER TABLE `career_vacant_postions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_messages`
--
ALTER TABLE `client_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_navigation_menus`
--
ALTER TABLE `client_navigation_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_mains`
--
ALTER TABLE `contact_us_mains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contac_us`
--
ALTER TABLE `contac_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_ones`
--
ALTER TABLE `faq_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_galleries`
--
ALTER TABLE `image_galleries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_galleries_slug_unique` (`slug`) USING HASH;

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `j_m_c_lists`
--
ALTER TABLE `j_m_c_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission_visions`
--
ALTER TABLE `mission_visions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `m_c_lists`
--
ALTER TABLE `m_c_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_and_articles`
--
ALTER TABLE `news_and_articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_and_articles_slug_unique` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stickers`
--
ALTER TABLE `stickers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_b_page_banners`
--
ALTER TABLE `s_b_page_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_b_page_stickers`
--
ALTER TABLE `s_b_page_stickers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_b_page_x_banners`
--
ALTER TABLE `s_b_page_x_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_tops`
--
ALTER TABLE `team_tops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
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
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workout_sections`
--
ALTER TABLE `workout_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works_area_details`
--
ALTER TABLE `works_area_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_external_links`
--
ALTER TABLE `about_external_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `about_u_s_bottoms`
--
ALTER TABLE `about_u_s_bottoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_u_s_tops`
--
ALTER TABLE `about_u_s_tops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_menus`
--
ALTER TABLE `admin_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `admin_menu_actions`
--
ALTER TABLE `admin_menu_actions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `admin_settings`
--
ALTER TABLE `admin_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_settings`
--
ALTER TABLE `app_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `board_m_embers`
--
ALTER TABLE `board_m_embers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `book_stores`
--
ALTER TABLE `book_stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_items`
--
ALTER TABLE `career_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `career_page_bottoms`
--
ALTER TABLE `career_page_bottoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `career_toops`
--
ALTER TABLE `career_toops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_vacant_postions`
--
ALTER TABLE `career_vacant_postions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `client_messages`
--
ALTER TABLE `client_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_navigation_menus`
--
ALTER TABLE `client_navigation_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us_mains`
--
ALTER TABLE `contact_us_mains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contac_us`
--
ALTER TABLE `contac_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_ones`
--
ALTER TABLE `faq_ones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `image_galleries`
--
ALTER TABLE `image_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `j_m_c_lists`
--
ALTER TABLE `j_m_c_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `mission_visions`
--
ALTER TABLE `mission_visions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_c_lists`
--
ALTER TABLE `m_c_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news_and_articles`
--
ALTER TABLE `news_and_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stickers`
--
ALTER TABLE `stickers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s_b_page_banners`
--
ALTER TABLE `s_b_page_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `s_b_page_stickers`
--
ALTER TABLE `s_b_page_stickers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `s_b_page_x_banners`
--
ALTER TABLE `s_b_page_x_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `team_tops`
--
ALTER TABLE `team_tops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `workout_sections`
--
ALTER TABLE `workout_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works_area_details`
--
ALTER TABLE `works_area_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
