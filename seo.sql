-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2016 at 04:11 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_parent_id_index` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `description`, `parent_id`) VALUES
(15, 'marketing', 'asdsd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_18_223109_Post_table', 2),
('2015_12_18_223127_tags_categories_table', 2),
('2015_12_18_232809_posts_tags', 3),
('2015_12_18_233731_categories_posts_table', 4),
('2015_12_20_123101_post_table_update', 5),
('2015_12_27_192431_post_updates', 6),
('2015_12_29_144454_updates_to_posts', 7),
('2016_01_03_214306_categories_nests', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excrypt` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `views` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `excrypt`, `content`, `created_at`, `updated_at`, `published`, `published_at`, `views`, `image`) VALUES
(1, 'What is Search Engine Optimization?', 'SEO is a marketing discipline focused on growing visibility in organic (non-paid) search engine results.', '<h2 style="text-align:center"><img alt="" src="/js/kcfinder/upload/images/crawling-and-indexing.png" style="height:251px; width:629px" /></h2>\r\n\r\n<h2><span style="color:#FF0000">Imagine the World Wide Web as a network of stops in a big city subway system.</span></h2>\r\n\r\n<p>Each stop is a unique document (usually a web page, but sometimes a PDF, JPG, or other file). The search engines need a way to &ldquo;crawl&rdquo; the entire city and find all the stops along the way, so they use the best path available&mdash;links.</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Crawling and Indexing</p>\r\n\r\n	<p>Crawling and indexing the billions of documents, pages, files, news, videos, and media on the World Wide Web.</p>\r\n	</li>\r\n	<li>Providing Answers\r\n	<p>Providing answers to user queries, most frequently through lists of relevant pages that they&#39;ve retrieved and ranked for relevancy.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h2><span style="color:#FF0000">The link structure of the web serves to bind all of the pages together.</span></h2>\r\n\r\n<p>Links allow the search engines&#39; automated robots, called &quot;crawlers&quot; or &quot;spiders,&quot; to reach the many billions of interconnected documents on the web.</p>\r\n\r\n<p>Once the engines find these pages, they decipher the code from them and store selected pieces in massive databases, to be recalled later when needed for a search query. To accomplish the monumental task of holding billions of pages that can be accessed in a fraction of a second, the search engine companies have constructed datacenters all over the world.</p>\r\n\r\n<p>These monstrous storage facilities hold thousands of machines processing large quantities of information very quickly. When a person performs a search at any of the major engines, they demand results instantaneously; even a one- or two-second delay can cause dissatisfaction, so the engines work hard to provide answers as fast as possible.</p>\r\n', '2016-02-01 10:49:51', '2016-02-04 18:23:06', 1, '0000-00-00 00:00:00', NULL, 'crawling-and-indexing.png'),
(2, 'new post', 'asd', '<p>asdasd</p>\r\n', '2016-02-04 18:10:25', '2016-02-04 18:10:25', 1, '0000-00-00 00:00:00', NULL, '10711257_10204819989925367_489680311_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts_categories`
--

CREATE TABLE IF NOT EXISTS `posts_categories` (
  `posts_id` int(10) unsigned NOT NULL,
  `categories_id` int(10) unsigned NOT NULL,
  KEY `posts_categories_posts_id_index` (`posts_id`),
  KEY `posts_categories_categories_id_index` (`categories_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts_categories`
--

INSERT INTO `posts_categories` (`posts_id`, `categories_id`) VALUES
(1, 15),
(2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `posts_tags`
--

CREATE TABLE IF NOT EXISTS `posts_tags` (
  `posts_id` int(10) unsigned NOT NULL,
  `tags_id` int(10) unsigned NOT NULL,
  KEY `posts_tags_posts_id_index` (`posts_id`),
  KEY `posts_tags_tags_id_index` (`tags_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts_tags`
--

INSERT INTO `posts_tags` (`posts_id`, `tags_id`) VALUES
(1, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`) VALUES
(1, 'tag'),
(2, 'test'),
(3, 'test tag'),
(4, 'medo'),
(5, 'seo'),
(6, 'marketing'),
(7, 'asas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `posts_categories`
--
ALTER TABLE `posts_categories`
  ADD CONSTRAINT `posts_categories_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_categories_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD CONSTRAINT `posts_tags_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_tags_tags_id_foreign` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
