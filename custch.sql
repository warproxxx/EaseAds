-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2020 at 01:49 AM
-- Server version: 5.7.29-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `custch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_earning`
--

CREATE TABLE `admin_earning` (
  `id` int(11) NOT NULL,
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
(2, 'April', '2020', 'banner', 'click', 'Sunday', '0.0000', '1586656126');

-- --------------------------------------------------------

--
-- Table structure for table `advertisers`
--

CREATE TABLE `advertisers` (
  `id` int(11) NOT NULL,
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
  `time` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisers`
--

INSERT INTO `advertisers` (`id`, `firstname`, `lastname`, `password`, `country`, `state`, `email`, `email_vc`, `phone`, `account_bal`, `total_spent`, `platform`, `websites`, `account_status`, `browser`, `referral_id`, `lastlog`, `time`) VALUES
(8, 'Advertiser', 'Test', 'a3f4186a2f9349f2570dc7d33d5823f6', 'Afghanistan', NULL, 'advertiser@test.com', NULL, 'advertiser', '384.0000', '0.0000', NULL, '["fdx.com"]', 'active', NULL, NULL, NULL, 1586652316);

-- --------------------------------------------------------

--
-- Table structure for table `adv_story`
--

CREATE TABLE `adv_story` (
  `id` int(11) NOT NULL,
  `time` int(100) DEFAULT NULL,
  `user_id` int(100) DEFAULT NULL,
  `clicks` int(50) DEFAULT NULL,
  `expire_time` int(100) DEFAULT NULL,
  `start_time` int(100) DEFAULT NULL,
  `per_click` decimal(19,4) DEFAULT NULL,
  `per_view` decimal(19,4) DEFAULT NULL,
  `per_action` decimal(19,4) DEFAULT NULL,
  `budget` decimal(19,4) DEFAULT NULL,
  `balance` decimal(19,4) DEFAULT NULL,
  `views` int(100) DEFAULT NULL,
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
  `category` varchar(128) DEFAULT NULL,
  `cr_level` varchar(12) DEFAULT NULL,
  `platform` varchar(128) DEFAULT NULL,
  `action_currency` varchar(128) DEFAULT NULL,
  `action_price` decimal(19,4) DEFAULT NULL,
  `action_type` varchar(128) DEFAULT NULL,
  `is_default` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adv_story`
--

INSERT INTO `adv_story` (`id`, `time`, `user_id`, `clicks`, `expire_time`, `start_time`, `per_click`, `per_view`, `per_action`, `budget`, `balance`, `views`, `name`, `dest_link`, `type`, `size`, `disp_link`, `img_link`, `keywords`, `ref_id`, `cpa_id`, `text_title`, `text_content`, `spent`, `approval`, `edit_status`, `status`, `tplatform`, `tcategory`, `tbrowser`, `tcountry`, `targeting`, `category`, `cr_level`, `platform`, `action_currency`, `action_price`, `action_type`, `is_default`) VALUES
(1, 1586652959, 8, 0, 0, 1586652959, '0.4000', '0.0050', NULL, '60.0000', '59.5950', 0, '-asdasd', 'waterbot.xyz', 'banner', '300X250', NULL, 'Screenshot_from_2020-04-08_11-44-50.png', NULL, 'f9a926d6fd09fc9d028e', NULL, NULL, NULL, '0.00', 'true', 'complete', 'active', NULL, NULL, NULL, NULL, 'false', 'Business', '3', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `affilate_clicks`
--

CREATE TABLE `affilate_clicks` (
  `id` int(11) NOT NULL,
  `referral_id` varchar(128) DEFAULT NULL,
  `account_type` varchar(128) DEFAULT NULL,
  `time` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `receiver` int(11) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `posted_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `receiver`, `active`, `title`, `message`, `posted_date`) VALUES
(1, 0, 1, 'Test Announcement', 'This is a test announcement', '2020-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) DEFAULT NULL,
  `author` varchar(128) DEFAULT NULL,
  `author_id` varchar(128) DEFAULT NULL,
  `time` int(100) NOT NULL,
  `time_edit` int(100) DEFAULT NULL,
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
  `id` int(5) NOT NULL,
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
(6, 'Investing');

-- --------------------------------------------------------

--
-- Table structure for table `clicks`
--

CREATE TABLE `clicks` (
  `id` int(11) NOT NULL,
  `time` int(100) DEFAULT NULL,
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
(1, 1586656126, '1', 'bc6c1ae50d70ba43c4cd36c6', '8', 'f9a926d6fd09fc9d028e', '27.34.13.187', NULL, 'Linux', 'Firefox', NULL, '0', 'NP');

-- --------------------------------------------------------

--
-- Table structure for table `cmessages`
--

CREATE TABLE `cmessages` (
  `id` int(11) NOT NULL,
  `phone` int(128) DEFAULT NULL,
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
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
  `user_id` varchar(128) DEFAULT NULL,
  `details` varchar(128) DEFAULT NULL,
  `action` varchar(128) DEFAULT NULL,
  `time` int(100) DEFAULT NULL,
  `account_type` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `user_id`, `details`, `action`, `time`, `account_type`) VALUES
(1, '7', 'Your Withdrawal Request Had been Processed', 'w_process', 1579786211, 'publisher'),
(2, '7', 'You make a withdrawal Request of \n      50.0000 with reference 14271385797', 'w_request', 1586166321, 'publisher'),
(3, '7', 'Your Withdrawal Request Had been Processed because', 'w_process', 1586494194, 'publisher'),
(4, '7', 'You make a withdrawal Request of \n      500.0000 with reference 14274337941', 'w_request', 1586494338, 'publisher'),
(5, '7', 'Your Withdrawal Request Had been Processed because', 'w_process', 1586495312, 'publisher');

-- --------------------------------------------------------

--
-- Table structure for table `manual_payment`
--

CREATE TABLE `manual_payment` (
  `id` int(10) NOT NULL,
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
  `values_used` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `time` varchar(128) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `link` varchar(128) DEFAULT NULL,
  `type` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `status` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `sender_id` varchar(128) DEFAULT NULL,
  `receiver_id` varchar(128) DEFAULT NULL,
  `slug` varchar(128) DEFAULT NULL,
  `contents` varchar(128) DEFAULT NULL,
  `type` varchar(128) DEFAULT NULL,
  `status` varchar(128) DEFAULT NULL,
  `time` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `user_type` varchar(128) NOT NULL,
  `method` varchar(128) NOT NULL,
  `phone` int(11) DEFAULT NULL,
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
(19, '8', 'advertiser', 'Skrill', NULL, '', '444.0000', 'CONFIRMED', NULL, 'DEPOSIT', '1586652812', NULL, NULL, NULL, NULL, NULL, 'adsd');

-- --------------------------------------------------------

--
-- Table structure for table `payment_requests`
--

CREATE TABLE `payment_requests` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `method` varchar(20) NOT NULL,
  `time` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_requests`
--

INSERT INTO `payment_requests` (`id`, `user_id`, `amount`, `message`, `status`, `method`, `time`) VALUES
(1, 2, 50, 'add', -1, '', 0),
(2, 2, 50, 'My deposit ID is ', 1, 'Skrill', 1581498527),
(3, 2, 100, 'I sent the transaction to: \r\n\r\nasdd', 1, 'Skrill', 1581567644),
(4, 2, 128, 'asdadasd fasf asdd', 1, 'Bank', 1581588923),
(5, 2, 222, 'asdad add asd', 1, 'Skrill', 1581589079);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `user_id` varchar(128) DEFAULT NULL,
  `category` varchar(128) DEFAULT NULL,
  `approval` varchar(128) DEFAULT NULL,
  `time` int(100) DEFAULT NULL,
  `link` varchar(128) DEFAULT NULL,
  `type` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` int(11) NOT NULL,
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
  `time` int(100) DEFAULT NULL,
  `other_name` text NOT NULL,
  `other_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `firstname`, `lastname`, `password`, `country`, `state`, `email`, `email_vc`, `phone`, `account_bal`, `total_earned`, `pending_bal`, `platform`, `account_status`, `websites`, `browser`, `lastlog`, `bank_name`, `bank_acct`, `bank_det`, `bank_no`, `payment_type`, `referral_id`, `time`, `other_name`, `other_detail`) VALUES
(1, 'Publisher', 'test', '7b1efd7be3b882eb22af3ffa4cc7d039', 'Afghanistan', NULL, 'publisher@test.com', NULL, 'publisher', '0.2835', '0.0000', '0.0000', NULL, 'active', '["aaa.com"]', NULL, '1586653019', NULL, NULL, NULL, NULL, NULL, NULL, 1586652267, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `publishers_websites`
--

CREATE TABLE `publishers_websites` (
  `id` int(10) NOT NULL,
  `publisher_id` int(100) NOT NULL,
  `website` varchar(255) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publishers_websites`
--

INSERT INTO `publishers_websites` (`id`, `publisher_id`, `website`, `approved`) VALUES
(4, 7, 'waterbot.xy', 1),
(5, 7, 'ninjasaga.com', 1),
(6, 8, 'http://googlee.com', 1),
(7, 9, 'http://aa.com', 1),
(8, 10, 'http://aaa.com', 1),
(9, 1, 'aaa.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pub_story`
--

CREATE TABLE `pub_story` (
  `id` int(11) NOT NULL,
  `time` int(100) DEFAULT NULL,
  `user_id` int(100) NOT NULL,
  `clicks` int(100) DEFAULT NULL,
  `views` int(100) DEFAULT NULL,
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
  `platform` varchar(128) DEFAULT NULL,
  `code` text,
  `os` varchar(128) DEFAULT NULL,
  `browser` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pub_story`
--

INSERT INTO `pub_story` (`id`, `time`, `user_id`, `clicks`, `views`, `status`, `type`, `size`, `ref_id`, `website`, `name`, `gained`, `country`, `div_id`, `category`, `platform`, `code`, `os`, `browser`) VALUES
(1, 1579331615, 2, 0, 0, 'active', 'text', '300X250', '9fe4fca09cdb0c9c8ee14d94', 'test.com', 'Test', NULL, NULL, 'Ec8', '["advertising","entertainment","food","gambling","marketing"]', NULL, '<script src="http://127.0.0.1/ads/index.php/campaign_delivery/deliver_text_js/9fe4fca09cdb0c9c8ee14d94"></script>\n<center><div class="w3-margin" id="Ec8" style="max-width: 70%;" class="">\n</div></center>\n', NULL, NULL),
(2, 1579939308, 7, 0, 0, 'active', 'banner', '300X250', 'b1494f9c8dc5caa30bf4951c', 'waterbot.xy', 'aa', NULL, NULL, 'bC4', '["Business"]', NULL, '<script src="http://127.0.0.1/ads/campaign_delivery/deliver_banner_js/b1494f9c8dc5caa30bf4951c/box"></script>\n<center><div  class="w3-margin"  id="bC4">\n</div></center>', NULL, NULL),
(3, 1579939663, 7, 0, 0, 'active', 'banner', '300X250', '54f09680fe266eb4bd5a909a', 'waterbot.xy', 'Multiple Test', NULL, NULL, 'eE7', '["Blog","Adventure","Beauty"]', NULL, '<script src="http://127.0.0.1/ads/campaign_delivery/deliver_banner_js/54f09680fe266eb4bd5a909a/box"></script>\n<center><div  class="w3-margin"  id="eE7">\n</div></center>', NULL, NULL),
(4, 1580214769, 7, 0, 0, 'active', 'banner', '300X250', '6b4ee6c4fb02909d1c3fbae2', 'waterbot.xy', 'Test', NULL, NULL, 'AC0', '["Business","Blog","Adventure","Beauty","Investing"]', NULL, '<script src="http://127.0.0.1/ads/campaign_delivery/deliver_banner_js/6b4ee6c4fb02909d1c3fbae2/box"></script>\n<center><div  class="w3-margin"  id="AC0">\n</div></center>', NULL, NULL),
(5, 1580290225, 7, 0, 0, 'active', 'popup', '300X250', '2f2174e04cc6a9d01811cbd6', 'waterbot.xy', 'asdasdsd', NULL, NULL, 'AB8', '["Business"]', NULL, NULL, NULL, NULL),
(6, 1580290544, 7, 0, 0, 'active', 'popup', '300X250', '7c05da1f7a906a50cb6f7ed4', 'waterbot.xy', 'Popup working', NULL, NULL, 'ee6', 'null', NULL, '<script src="http://127.0.0.1/ads/campaign_delivery/deliver_popup_js/7c05da1f7a906a50cb6f7ed4"></script>\n<div  class="w3-margin"  style="" id="ee6">\n</div>', NULL, NULL),
(7, 1580302304, 7, 0, 0, 'active', 'popup', '300X250', '2f92e94f7baded459b49f0f6', 'waterbot.xy', 'adds.com', NULL, NULL, 'BE1', '["Business"]', NULL, '<script src="http://127.0.0.1/ads/campaign_delivery/deliver_popup_js/2f92e94f7baded459b49f0f6"></script>\n<div  class="w3-margin"  style="" id="BE1">\n</div>', NULL, NULL),
(8, 1581148581, 7, 0, 0, 'active', 'popup', '300X250', '17d212057b633e51ea16fb7b', 'waterbot.xy', 'asdsdd', NULL, NULL, 'cc5', '["Business","Blog","Adventure","Beauty","Investing"]', NULL, '<script src="http://127.0.0.1/ads/campaign_delivery/deliver_popup_js/17d212057b633e51ea16fb7b"></script>\n<div  class="w3-margin"  style="" id="cc5">\n</div>', NULL, NULL),
(9, 1586653066, 1, 0, 0, 'active', 'banner', '300X250', 'bc6c1ae50d70ba43c4cd36c6', 'aaa.com', 'Frr', NULL, NULL, 'BC0', '["Business","Blog","Adventure","Beauty","Investing"]', NULL, '<script src="http://3.17.5.137/ads/campaign_delivery/deliver_banner_js/bc6c1ae50d70ba43c4cd36c6/box"></script>\n<center><div  class="w3-margin"  id="BC0">\n</div></center>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_var`
--

CREATE TABLE `system_var` (
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
  `time` int(100) DEFAULT NULL,
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
(1, 1586653121, '1', 'bc6c1ae50d70ba43c4cd36c6', '8', 'f9a926d6fd09fc9d028e', '27.34.13.187', NULL, 'Linux', 'Firefox', '0', 'NP'),
(2, 1586653130, '1', 'bc6c1ae50d70ba43c4cd36c6', '8', 'f9a926d6fd09fc9d028e', '27.34.13.187', NULL, 'Linux', 'Firefox', '0', 'NP'),
(3, 1586656123, '1', 'bc6c1ae50d70ba43c4cd36c6', '8', 'f9a926d6fd09fc9d028e', '27.34.13.187', NULL, 'Linux', 'Firefox', '0', 'NP');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `id` int(11) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `ref` varchar(128) NOT NULL,
  `method` varchar(128) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `amount` decimal(19,4) NOT NULL,
  `status` varchar(128) DEFAULT NULL,
  `approval` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `time` int(100) DEFAULT NULL,
  `details` text,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdrawal`
--

INSERT INTO `withdrawal` (`id`, `user_id`, `ref`, `method`, `phone`, `amount`, `status`, `approval`, `email`, `time`, `details`, `message`) VALUES
(2, '7', '14213867760', '', 432434, '50.0000', 'processed', 'pending', 'publisher@test.com', 1579775428, NULL, ''),
(3, '7', '14271385797', '', 432434, '50.0000', 'processed', 'approved', 'publisher@test.com', 1586166321, NULL, ''),
(4, '7', '14274337941', '', 432434, '500.0000', 'processed', 'approved', 'publisher@test.com', 1586494337, NULL, '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `advertisers`
--
ALTER TABLE `advertisers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `adv_story`
--
ALTER TABLE `adv_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `affilate_clicks`
--
ALTER TABLE `affilate_clicks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `clicks`
--
ALTER TABLE `clicks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cmessages`
--
ALTER TABLE `cmessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpa_forms`
--
ALTER TABLE `cpa_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `manual_payment`
--
ALTER TABLE `manual_payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `payment_requests`
--
ALTER TABLE `payment_requests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `publishers_websites`
--
ALTER TABLE `publishers_websites`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pub_story`
--
ALTER TABLE `pub_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `system_var`
--
ALTER TABLE `system_var`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
