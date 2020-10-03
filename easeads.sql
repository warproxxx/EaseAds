-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 03, 2020 at 11:46 AM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easeads`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_earning`
--

CREATE TABLE `admin_earning` (
  `id` int NOT NULL,
  `month` varchar(128) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `earning_type` varchar(10) DEFAULT NULL,
  `weekday` varchar(128) DEFAULT NULL,
  `amount` decimal(19,4) NOT NULL,
  `time` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_earning`
--

INSERT INTO `admin_earning` (`id`, `month`, `year`, `type`, `earning_type`, `weekday`, `amount`, `time`) VALUES
(1, 'April', '2020', 'banner', 'view', 'Sunday', '0.0015', '1586653121'),
(2, 'April', '2020', 'banner', 'click', 'Sunday', '0.0000', '1586656126'),
(3, 'June', '2020', 'text', 'view', 'Sunday', '0.0000', '1591509738'),
(4, 'June', '2020', 'popup', 'click', 'Sunday', '0.0000', '1591509740'),
(5, 'June', '2020', 'text', 'view', 'Sunday', '0.0000', '1591522633'),
(6, 'June', '2020', 'text', 'view', 'Sunday', '0.0000', '1591522877'),
(7, 'June', '2020', 'popup', 'click', 'Sunday', '0.0000', '1591522879'),
(8, 'June', '2020', 'text', 'view', 'Monday', '0.0000', '1591585513'),
(9, 'June', '2020', 'popup', 'click', 'Monday', '0.0000', '1591585515'),
(10, 'June', '2020', 'text', 'view', 'Monday', '0.0006', '1591589176'),
(11, 'June', '2020', 'popup', 'click', 'Monday', '0.0000', '1591589178'),
(12, 'June', '2020', 'text', 'view', 'Monday', '0.0009', '1591598785'),
(13, 'June', '2020', 'popup', 'click', 'Monday', '0.0000', '1591598820'),
(14, 'October', '2020', 'banner', 'view', 'Saturday', '0.0002', '1601704405'),
(15, 'October', '2020', 'text', 'view', 'Saturday', '0.0006', '1601704411'),
(16, 'October', '2020', 'popup', 'click', 'Saturday', '0.0000', '1601704413'),
(17, 'October', '2020', 'banner', 'click', 'Saturday', '0.0000', '1601704416');

-- --------------------------------------------------------

--
-- Table structure for table `advertisers`
--

CREATE TABLE `advertisers` (
  `id` int NOT NULL,
  `firstname` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `state` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_vc` varchar(300) DEFAULT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `account_bal` decimal(19,4) DEFAULT NULL,
  `total_spent` decimal(19,4) DEFAULT NULL,
  `platform` varchar(128) DEFAULT NULL,
  `websites` text,
  `account_status` varchar(128) DEFAULT NULL,
  `browser` varchar(128) DEFAULT NULL,
  `referral_id` varchar(128) DEFAULT NULL,
  `lastlog` varchar(128) DEFAULT NULL,
  `time` int DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `email_verified` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisers`
--

INSERT INTO `advertisers` (`id`, `firstname`, `lastname`, `password`, `country`, `state`, `email`, `email_vc`, `phone`, `account_bal`, `total_spent`, `platform`, `websites`, `account_status`, `browser`, `referral_id`, `lastlog`, `time`, `token`, `email_verified`) VALUES
(20, 'Daniel', 'Sapkota', 'e20a922006822f58699cbe1e181be9be', 'Afghanistan', NULL, 'jdoe03744@gmail.com', NULL, 'warproxxx', '400.0000', '0.0000', NULL, '[\"http:\\/\\/127.0.0.1\"]', 'active', NULL, '', '1601634255', 1601632970, 'c3d83f068afd6d044dbf0ab2ca8499fd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `adv_story`
--

CREATE TABLE `adv_story` (
  `id` int NOT NULL,
  `time` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `clicks` int DEFAULT NULL,
  `cpc` decimal(19,4) DEFAULT NULL,
  `expire_time` int DEFAULT NULL,
  `start_time` int DEFAULT NULL,
  `per_click` decimal(19,4) DEFAULT NULL,
  `per_view` decimal(19,4) DEFAULT NULL,
  `cpm` decimal(19,4) DEFAULT NULL,
  `per_action` decimal(19,4) DEFAULT NULL,
  `budget` decimal(19,4) DEFAULT NULL,
  `balance` decimal(19,4) DEFAULT NULL,
  `daily_budget` decimal(19,4) DEFAULT NULL,
  `views` int DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `dest_link` varchar(259) DEFAULT NULL,
  `type` varchar(59) DEFAULT NULL,
  `size` varchar(59) DEFAULT NULL,
  `disp_link` varchar(259) DEFAULT NULL,
  `img_link` varchar(259) DEFAULT NULL,
  `keywords` varchar(128) DEFAULT NULL,
  `ref_id` varchar(225) DEFAULT NULL,
  `cpa_id` varchar(225) DEFAULT NULL,
  `text_title` varchar(255) DEFAULT NULL,
  `text_content` text,
  `spent` varchar(128) DEFAULT NULL,
  `approval` varchar(128) DEFAULT NULL,
  `edit_status` varchar(128) DEFAULT NULL,
  `status` varchar(128) DEFAULT NULL,
  `tplatform` text,
  `tcategory` text,
  `tbrowser` text,
  `tcountry` text,
  `targeting` text,
  `category` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `vertical` varchar(10) NOT NULL DEFAULT 'mainstream',
  `cr_level` varchar(12) DEFAULT NULL,
  `platform` varchar(128) DEFAULT NULL,
  `action_currency` varchar(128) DEFAULT NULL,
  `action_price` decimal(19,4) DEFAULT NULL,
  `action_type` varchar(128) DEFAULT NULL,
  `is_default` int NOT NULL DEFAULT '0',
  `billing` varchar(5) NOT NULL,
  `raw_traffic` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adv_story`
--

INSERT INTO `adv_story` (`id`, `time`, `user_id`, `clicks`, `cpc`, `expire_time`, `start_time`, `per_click`, `per_view`, `cpm`, `per_action`, `budget`, `balance`, `daily_budget`, `views`, `name`, `dest_link`, `type`, `size`, `disp_link`, `img_link`, `keywords`, `ref_id`, `cpa_id`, `text_title`, `text_content`, `spent`, `approval`, `edit_status`, `status`, `tplatform`, `tcategory`, `tbrowser`, `tcountry`, `targeting`, `category`, `vertical`, `cr_level`, `platform`, `action_currency`, `action_price`, `action_type`, `is_default`, `billing`, `raw_traffic`) VALUES
(17, 1601633765, 20, 1, '0.0000', 0, 1601633765, '0.0000', '0.0005', '0.5000', NULL, '50.0000', '49.9995', '20.0000', 1, '-banner_test', 'https://old.reddit.com/user/warproxxx/', 'banner', '300X250', NULL, 'banner43.jpeg', NULL, '18cb6d98d1dafd319456', NULL, NULL, NULL, '0.00', 'true', 'complete', 'active', NULL, NULL, NULL, NULL, 'true', '[\"Business\",\"Blog\",\"Adventure\"]', 'mainstream', '3', NULL, NULL, NULL, NULL, 0, 'cpm', 2),
(18, 1601634225, 20, 1, '0.0000', 0, 1601634225, '0.0000', '0.0020', '2.0000', NULL, '50.0000', '49.9980', '15.0000', 1, '-popunder_test', 'https://old.reddit.com/user/warproxxx/', 'popup', NULL, NULL, '', NULL, 'a2ffbae944bd61cacadd', NULL, NULL, NULL, '0.00', 'true', 'complete', 'active', NULL, NULL, NULL, NULL, 'true', '[\"Business\",\"Blog\",\"Adventure\"]', 'mainstream', '3', NULL, NULL, NULL, NULL, 0, 'cpm', 2);

-- --------------------------------------------------------

--
-- Table structure for table `affilate_clicks`
--

CREATE TABLE `affilate_clicks` (
  `id` int NOT NULL,
  `referral_id` varchar(128) DEFAULT NULL,
  `account_type` varchar(128) DEFAULT NULL,
  `time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int NOT NULL,
  `receiver` int NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `posted_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) DEFAULT NULL,
  `author` varchar(128) DEFAULT NULL,
  `author_id` varchar(128) DEFAULT NULL,
  `time` int NOT NULL,
  `time_edit` int DEFAULT NULL,
  `keywords` varchar(225) DEFAULT NULL,
  `description` varchar(225) DEFAULT NULL,
  `img_url` varchar(225) DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  `category` varchar(225) DEFAULT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'Business'),
(3, 'Blog'),
(4, 'Adventure'),
(5, 'Beauty'),
(6, 'Investing'),
(7, 'Gambling'),
(8, 'Careers'),
(9, 'Food & Drink'),
(10, 'Family & Parenting'),
(11, 'Automotive'),
(12, 'Crypto/Blog'),
(13, 'Crypto/Forum'),
(14, 'Make Money'),
(15, 'Gambling/Blog'),
(16, 'Gambling/Videos'),
(17, 'Casino/forums'),
(18, 'Ecommerce '),
(20, 'Gambling / Bingo'),
(21, 'Gambling / Bingo'),
(22, 'Gambling / Casinos'),
(23, 'Gambling /Gambling');

-- --------------------------------------------------------

--
-- Table structure for table `clicks`
--

CREATE TABLE `clicks` (
  `id` int NOT NULL,
  `time` int DEFAULT NULL,
  `story_pid` varchar(100) DEFAULT NULL,
  `space_id` varchar(100) DEFAULT NULL,
  `story_aid` varchar(100) DEFAULT NULL,
  `story_id` varchar(100) DEFAULT NULL,
  `ip` varchar(128) DEFAULT NULL,
  `status` varchar(128) DEFAULT NULL,
  `platform` varchar(128) DEFAULT NULL,
  `browser` varchar(128) DEFAULT NULL,
  `os` varchar(128) DEFAULT NULL,
  `is_mobile` varchar(128) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clicks`
--

INSERT INTO `clicks` (`id`, `time`, `story_pid`, `space_id`, `story_aid`, `story_id`, `ip`, `status`, `platform`, `browser`, `os`, `is_mobile`, `country`) VALUES
(8, 1601704413, '3', '13c81d09b430b8962b02d7f3', '20', 'a2ffbae944bd61cacadd', '127.0.0.1', NULL, 'Linux', 'Firefox', NULL, '0', NULL),
(9, 1601704416, '3', 'd4c1fa87df8fbfb3b87de3b6', '20', '18cb6d98d1dafd319456', '127.0.0.1', NULL, 'Linux', 'Firefox', NULL, '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cmessages`
--

CREATE TABLE `cmessages` (
  `id` int NOT NULL,
  `phone` int DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `title` varchar(128) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(128) DEFAULT NULL,
  `solved` varchar(128) DEFAULT NULL,
  `time` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `select_value` varchar(128) DEFAULT NULL,
  `language` varchar(128) DEFAULT NULL,
  `currency_code` varchar(128) DEFAULT NULL,
  `currency_name` varchar(128) DEFAULT NULL,
  `xchange_rate` decimal(19,4) NOT NULL,
  `minimum_cpc` decimal(19,4) NOT NULL,
  `minimum_cpa` decimal(19,4) NOT NULL,
  `minimum_paid_cpa` decimal(19,4) NOT NULL,
  `minimum_cpm` decimal(19,4) NOT NULL,
  `minimum_budget` decimal(19,4) NOT NULL,
  `minimum_deposit` decimal(19,4) NOT NULL,
  `minimum_payout` decimal(19,4) NOT NULL,
  `flag_slug` varchar(128) DEFAULT NULL,
  `time` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `select_value`, `language`, `currency_code`, `currency_name`, `xchange_rate`, `minimum_cpc`, `minimum_cpa`, `minimum_paid_cpa`, `minimum_cpm`, `minimum_budget`, `minimum_deposit`, `minimum_payout`, `flag_slug`, `time`) VALUES
(1, 'general', 'general', 'english', '$', 'USD', '1.0000', '0.0200', '0.0010', '0.0010', '0.0010', '10.0000', '50.0000', '50.0000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cpa_forms`
--

CREATE TABLE `cpa_forms` (
  `id` int NOT NULL,
  `advertisers_id` varchar(128) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `ref_id` varchar(128) DEFAULT NULL,
  `form_makeup_data` longtext,
  `form_data` longtext,
  `extra_data` longtext,
  `extra_data_position` enum('pre_form','post_form') DEFAULT NULL,
  `access_type` enum('free','paid') DEFAULT NULL,
  `price` decimal(19,4) DEFAULT NULL,
  `currency_code` varchar(128) DEFAULT NULL,
  `company_name` varchar(225) DEFAULT NULL,
  `form_slug` varchar(128) DEFAULT NULL,
  `time` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int NOT NULL,
  `user_id` varchar(128) DEFAULT NULL,
  `details` varchar(128) DEFAULT NULL,
  `action` varchar(128) DEFAULT NULL,
  `time` int DEFAULT NULL,
  `account_type` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manual_payment`
--

CREATE TABLE `manual_payment` (
  `id` int NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `deposit_1_name` varchar(50) NOT NULL,
  `deposit_1_value` varchar(50) NOT NULL,
  `deposit_2_name` varchar(50) NOT NULL,
  `deposit_2_value` varchar(50) NOT NULL,
  `deposit_3_name` varchar(50) NOT NULL,
  `deposit_3_value` varchar(50) NOT NULL,
  `deposit_4_name` varchar(50) NOT NULL,
  `deposit_4_value` varchar(50) NOT NULL,
  `deposit_5_name` varchar(50) NOT NULL,
  `deposit_5_value` varchar(50) NOT NULL,
  `values_used` int NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manual_payment`
--

INSERT INTO `manual_payment` (`id`, `payment_method`, `deposit_1_name`, `deposit_1_value`, `deposit_2_name`, `deposit_2_value`, `deposit_3_name`, `deposit_3_value`, `deposit_4_name`, `deposit_4_value`, `deposit_5_name`, `deposit_5_value`, `values_used`, `message`) VALUES
(3, 'Skrill', 'Email', 'test@skrill.com', 'Reference No', 'jdkadjkjdkjd', '', '', '', '', '', '', 2, 'Please Enter the transaction id below'),
(4, 'Bank', 'SWIFT', '23', 'Account Number', '37887382', 'Bank Name', 'Siddhartha', '', '', '', '', 3, 'This our bank account detail');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `time` varchar(128) DEFAULT NULL,
  `ctime` int DEFAULT NULL,
  `link` varchar(128) DEFAULT NULL,
  `type` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `receiver_id` varchar(128) DEFAULT NULL,
  `receiver_type` varchar(128) DEFAULT NULL,
  `title` varchar(128) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(128) DEFAULT NULL,
  `type` varchar(128) DEFAULT NULL,
  `platform_type` varchar(128) DEFAULT NULL,
  `time` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `status` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `notification` varchar(500) NOT NULL,
  `is_read` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `user_type`, `notification`, `is_read`) VALUES
(2, 20, 'advertiser', 'Your website has been approved', 0),
(3, 20, 'advertiser', 'Your website has been approved', 0),
(4, 3, 'publisher', 'Your website has been approved', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `author` varchar(128) DEFAULT NULL,
  `time` varchar(128) NOT NULL,
  `type` varchar(128) NOT NULL,
  `keywords` varchar(225) DEFAULT NULL,
  `description` varchar(225) DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `author`, `time`, `type`, `keywords`, `description`, `status`, `text`) VALUES
(1, 'Terms and Conditions', 'terms', 'admin', '', '', 'admin', 'EaseAds TOS', 'active', 'TOS');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `user_type` varchar(128) NOT NULL,
  `method` varchar(128) NOT NULL,
  `phone` int DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `amount` decimal(19,4) NOT NULL,
  `status` varchar(128) DEFAULT 'CONFIRMED',
  `particular` varchar(128) DEFAULT NULL,
  `payment_type` varchar(128) DEFAULT NULL,
  `time` varchar(128) DEFAULT NULL,
  `time_of_completion` varchar(128) DEFAULT NULL,
  `txn_id` varchar(100) DEFAULT NULL,
  `payer_id` varchar(50) DEFAULT NULL,
  `payment_token` varchar(50) DEFAULT NULL,
  `ldetails` text,
  `message` varchar(1000) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `user_type`, `method`, `phone`, `email`, `amount`, `status`, `particular`, `payment_type`, `time`, `time_of_completion`, `txn_id`, `payer_id`, `payment_token`, `ldetails`, `message`) VALUES
(22, '20', 'advertisers', 'Manual', NULL, '', '500.0000', 'CONFIRMED', NULL, 'MANUAL', '1601633643', NULL, NULL, NULL, NULL, NULL, 'Take it bro');

-- --------------------------------------------------------

--
-- Table structure for table `payment_requests`
--

CREATE TABLE `payment_requests` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `amount` int NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `method` varchar(20) NOT NULL,
  `time` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `user_id` varchar(128) DEFAULT NULL,
  `category` varchar(128) DEFAULT NULL,
  `approval` varchar(128) DEFAULT NULL,
  `time` int DEFAULT NULL,
  `link` varchar(128) DEFAULT NULL,
  `type` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` int NOT NULL,
  `firstname` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `state` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_vc` varchar(300) DEFAULT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `account_bal` decimal(19,4) DEFAULT NULL,
  `total_earned` decimal(19,4) DEFAULT NULL,
  `pending_bal` decimal(19,4) DEFAULT NULL,
  `platform` varchar(128) DEFAULT NULL,
  `account_status` varchar(128) DEFAULT NULL,
  `websites` text,
  `browser` varchar(128) DEFAULT NULL,
  `lastlog` varchar(128) DEFAULT NULL,
  `bank_name` varchar(128) DEFAULT NULL,
  `bank_acct` varchar(128) DEFAULT NULL,
  `bank_det` varchar(128) DEFAULT NULL,
  `bank_no` varchar(128) DEFAULT NULL,
  `payment_type` varchar(128) DEFAULT NULL,
  `referral_id` varchar(128) DEFAULT NULL,
  `time` int DEFAULT NULL,
  `other_name` text NOT NULL,
  `other_detail` text NOT NULL,
  `token` varchar(255) NOT NULL,
  `email_verified` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `firstname`, `lastname`, `password`, `country`, `state`, `email`, `email_vc`, `phone`, `account_bal`, `total_earned`, `pending_bal`, `platform`, `account_status`, `websites`, `browser`, `lastlog`, `bank_name`, `bank_acct`, `bank_det`, `bank_no`, `payment_type`, `referral_id`, `time`, `other_name`, `other_detail`, `token`, `email_verified`) VALUES
(3, 'Daniel', 'Sapkota', 'e20a922006822f58699cbe1e181be9be', 'Afghanistan', NULL, 'danielsapkota13@gmail.com', NULL, 'da', '0.0018', '0.0000', '0.0000', NULL, 'active', '[\"http:\\/\\/127.0.0.1\"]', NULL, '1601701151', NULL, NULL, NULL, NULL, NULL, '', 1601634282, '', '', '55555473074276e7fec14d945ae95f32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publishers_websites`
--

CREATE TABLE `publishers_websites` (
  `id` int NOT NULL,
  `publisher_id` int NOT NULL,
  `website` varchar(255) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publishers_websites`
--

INSERT INTO `publishers_websites` (`id`, `publisher_id`, `website`, `approved`) VALUES
(14, 3, 'http://127.0.0.1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pub_story`
--

CREATE TABLE `pub_story` (
  `id` int NOT NULL,
  `time` int DEFAULT NULL,
  `user_id` int NOT NULL,
  `clicks` int DEFAULT NULL,
  `views` int DEFAULT NULL,
  `status` varchar(128) DEFAULT NULL,
  `type` varchar(128) DEFAULT NULL,
  `size` varchar(128) DEFAULT NULL,
  `ref_id` varchar(128) DEFAULT NULL,
  `website` varchar(128) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `gained` varchar(128) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `div_id` varchar(22) DEFAULT NULL,
  `category` text,
  `tcategory` text,
  `vertical` varchar(10) NOT NULL DEFAULT 'mainstream',
  `platform` varchar(128) DEFAULT NULL,
  `code` text,
  `os` varchar(128) DEFAULT NULL,
  `browser` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pub_story`
--

INSERT INTO `pub_story` (`id`, `time`, `user_id`, `clicks`, `views`, `status`, `type`, `size`, `ref_id`, `website`, `name`, `gained`, `country`, `div_id`, `category`, `tcategory`, `vertical`, `platform`, `code`, `os`, `browser`) VALUES
(12, 1601701167, 3, 1, 1, 'active', 'banner', '300X250', 'd4c1fa87df8fbfb3b87de3b6', 'http://127.0.0.1', 'Banner', NULL, NULL, 'ca4', '[\"Business\",\"Blog\",\"Adventure\"]', '[\"Business\",\"Blog\",\"Adventure\"]', 'mainstream', NULL, '<script src=\"http://easeads.local/campaign_delivery/deliver_banner_js/d4c1fa87df8fbfb3b87de3b6/box\"></script>\n<center><div  class=\"w3-margin\"  id=\"ca4\">\n</div></center>', NULL, NULL),
(13, 1601701183, 3, 1, 1, 'active', 'popup', '300X250', '13c81d09b430b8962b02d7f3', 'http://127.0.0.1', 'popunder', NULL, NULL, 'aB10', '[\"Business\",\"Blog\",\"Adventure\"]', '[\"Business\",\"Blog\",\"Adventure\"]', 'mainstream', NULL, '<script src=\"http://easeads.local/campaign_delivery/deliver_popup_js/13c81d09b430b8962b02d7f3\"></script>\n<div  class=\"w3-margin\"  style=\"\" id=\"aB10\">\n</div>', NULL, NULL),
(14, 1601704317, 3, 0, 0, 'active', 'popup', '300X250', '8525e6f5ef240a6413e5deea', 'http://127.0.0.1', 'another_test', NULL, NULL, 'aE0', '[\"Business\",\"Blog\",\"Adventure\"]', '[\"Business\",\"Blog\",\"Adventure\"]', 'mainstream', NULL, '<script src=\"http://easeads.local/campaign_delivery/deliver_popup_js/8525e6f5ef240a6413e5deea\"></script>\n<div  class=\"w3-margin\"  style=\"\" id=\"aE0\">\n</div>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_var`
--

CREATE TABLE `system_var` (
  `id` int NOT NULL,
  `variable_name` varchar(128) DEFAULT NULL,
  `variable_value` varchar(128) DEFAULT NULL,
  `long_value` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_var`
--

INSERT INTO `system_var` (`id`, `variable_name`, `variable_value`, `long_value`) VALUES
(1, 'site_name', 'EaseAds', ''),
(2, 'author', 'EaseAds Inc', ''),
(3, 'tagline', '', 'Built For Ease'),
(4, 'keywords', '', 'SEO keywords'),
(5, 'description', '', 'seo description');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int NOT NULL,
  `firstname` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL,
  `perm` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `time` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `firstname`, `lastname`, `username`, `perm`, `email`, `time`, `password`) VALUES
(1, 'Daniel', 'Sapkota', 'daniel', 'daniel', 'daniel@waterbot.xyz', 'Now', 'daniel124');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int NOT NULL,
  `time` int DEFAULT NULL,
  `story_pid` varchar(100) DEFAULT NULL,
  `space_id` varchar(100) DEFAULT NULL,
  `story_aid` varchar(100) DEFAULT NULL,
  `story_id` varchar(100) DEFAULT NULL,
  `ip` varchar(128) DEFAULT NULL,
  `status` varchar(128) DEFAULT NULL,
  `platform` varchar(128) DEFAULT NULL,
  `browser` varchar(128) DEFAULT NULL,
  `is_mobile` varchar(128) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `time`, `story_pid`, `space_id`, `story_aid`, `story_id`, `ip`, `status`, `platform`, `browser`, `is_mobile`, `country`) VALUES
(50, 1601704405, '3', 'd4c1fa87df8fbfb3b87de3b6', '20', '18cb6d98d1dafd319456', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(51, 1601704411, '3', '13c81d09b430b8962b02d7f3', '20', 'a2ffbae944bd61cacadd', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `id` int NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `ref` varchar(128) NOT NULL,
  `method` varchar(128) NOT NULL,
  `phone` int DEFAULT NULL,
  `amount` decimal(19,4) NOT NULL,
  `status` varchar(128) DEFAULT NULL,
  `approval` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `time` int DEFAULT NULL,
  `details` text,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_earning`
--
ALTER TABLE `admin_earning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisers`
--
ALTER TABLE `advertisers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adv_story`
--
ALTER TABLE `adv_story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affilate_clicks`
--
ALTER TABLE `affilate_clicks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clicks`
--
ALTER TABLE `clicks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmessages`
--
ALTER TABLE `cmessages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpa_forms`
--
ALTER TABLE `cpa_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manual_payment`
--
ALTER TABLE `manual_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_requests`
--
ALTER TABLE `payment_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publishers_websites`
--
ALTER TABLE `publishers_websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pub_story`
--
ALTER TABLE `pub_story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_var`
--
ALTER TABLE `system_var`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_earning`
--
ALTER TABLE `admin_earning`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `advertisers`
--
ALTER TABLE `advertisers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `adv_story`
--
ALTER TABLE `adv_story`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `affilate_clicks`
--
ALTER TABLE `affilate_clicks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `clicks`
--
ALTER TABLE `clicks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cmessages`
--
ALTER TABLE `cmessages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cpa_forms`
--
ALTER TABLE `cpa_forms`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manual_payment`
--
ALTER TABLE `manual_payment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payment_requests`
--
ALTER TABLE `payment_requests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `publishers_websites`
--
ALTER TABLE `publishers_websites`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pub_story`
--
ALTER TABLE `pub_story`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `system_var`
--
ALTER TABLE `system_var`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
