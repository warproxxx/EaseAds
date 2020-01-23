-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2020 at 05:13 PM
-- Server version: 5.7.28-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-0ubuntu0.16.04.9

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
(1, 'January', '2020', 'text', 'view', 'Saturday', '0.0000', '1579334714'),
(2, 'January', '2020', 'text', 'view', 'Tuesday', '0.0000', '1579586110');

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
(1, 'Daniel', 'Sapkota', 'e20a922006822f58699cbe1e181be9be', 'eritrea', NULL, 'daniel@advertiser.com', NULL, '342423424', '60.0000', '0.0000', NULL, '["google.com"]', 'active', NULL, NULL, '1578141363', 1578059534),
(2, 'asdasd', 'asdsdsd', 'a3f4186a2f9349f2570dc7d33d5823f6', 'Choose', NULL, 'advertiser@test.com', NULL, '3554354', '10.0000', '0.0000', NULL, '["sd.com"]', 'active', NULL, NULL, '1579772485', 1578315045),
(3, 'Pratk', 'Kunwar', '15cc992d5177a2ec8bd741a3163b254f', 'Nepal', NULL, 'pratik@kunwar.com', NULL, '23432424', '0.0000', '0.0000', NULL, '["google.com"]', 'active', NULL, NULL, NULL, 1579317725);

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
  `action_type` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adv_story`
--

INSERT INTO `adv_story` (`id`, `time`, `user_id`, `clicks`, `expire_time`, `start_time`, `per_click`, `per_view`, `per_action`, `budget`, `balance`, `views`, `name`, `dest_link`, `type`, `size`, `disp_link`, `img_link`, `keywords`, `ref_id`, `cpa_id`, `text_title`, `text_content`, `spent`, `approval`, `edit_status`, `status`, `tplatform`, `tcategory`, `tbrowser`, `tcountry`, `targeting`, `category`, `cr_level`, `platform`, `action_currency`, `action_price`, `action_type`) VALUES
(1, 1579183060, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '-dadd', 'sdd.com', 'banner', '300X250', NULL, 'rest_framewor*3zzzzzzzzzzzzz', NULL, 'b26e69fabd97c7a31808', NULL, NULL, NULL, '0.00', 'false', 'incomplete', 'incomplete', NULL, NULL, NULL, NULL, 'false', 'banking', '2', NULL, NULL, NULL, NULL);

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
(2, 'Business');

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
  `user_email` varchar(128) DEFAULT NULL,
  `details` varchar(128) DEFAULT NULL,
  `action` varchar(128) DEFAULT NULL,
  `time` int(100) DEFAULT NULL,
  `account_type` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `status` varchar(128) DEFAULT NULL,
  `particular` varchar(128) DEFAULT NULL,
  `payment_type` varchar(128) DEFAULT NULL,
  `time` varchar(128) DEFAULT NULL,
  `time_of_completion` varchar(128) DEFAULT NULL,
  `txn_id` varchar(100) DEFAULT NULL,
  `payer_id` varchar(50) DEFAULT NULL,
  `payment_token` varchar(50) DEFAULT NULL,
  `ldetails` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `user_type`, `method`, `phone`, `email`, `amount`, `status`, `particular`, `payment_type`, `time`, `time_of_completion`, `txn_id`, `payer_id`, `payment_token`, `ldetails`) VALUES
(3, '2', 'advertiser', 'paypal', NULL, '', '10.0000', NULL, NULL, 'deposit', '1579754186', NULL, 'PAYID-LYUSFMI4Y847822CA173270R', 'D34LDFXSNMR58', 'EC-7AT15982JL9061614', NULL),
(4, '1', 'advertiser', 'manual', NULL, '', '50.0000', NULL, NULL, 'deposit', '1579772268', NULL, 'Manual', 'Manual', 'Manual', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_requests`
--

CREATE TABLE `payment_requests` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_requests`
--

INSERT INTO `payment_requests` (`id`, `user_id`, `amount`, `message`, `status`) VALUES
(1, 2, 50, 'add', 0);

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
  `time` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `firstname`, `lastname`, `password`, `country`, `state`, `email`, `email_vc`, `phone`, `account_bal`, `total_earned`, `pending_bal`, `platform`, `account_status`, `websites`, `browser`, `lastlog`, `bank_name`, `bank_acct`, `bank_det`, `bank_no`, `payment_type`, `referral_id`, `time`) VALUES
(7, 'Publisher', 'Test', '7b1efd7be3b882eb22af3ffa4cc7d039', 'Nepal', NULL, 'publisher@test.com', NULL, '432434', '50.0000', '0.0000', '50.0000', NULL, 'active', '["waterbot.xy"]', NULL, '1579772493', NULL, 'daniel@paypal.com', NULL, NULL, 'paypal', NULL, 1579591304);

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
(5, 7, 'ninjasaga.com', 1);

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
(1, 1579331615, 2, 0, 0, 'active', 'text', '300X250', '9fe4fca09cdb0c9c8ee14d94', 'test.com', 'Test', NULL, NULL, 'Ec8', '["advertising","entertainment","food","gambling","marketing"]', NULL, '<script src="http://127.0.0.1/ads/index.php/campaign_delivery/deliver_text_js/9fe4fca09cdb0c9c8ee14d94"></script>\n<center><div class="w3-margin" id="Ec8" style="max-width: 70%;" class="">\n</div></center>\n', NULL, NULL);

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
(1, 1579334714, '2', '9fe4fca09cdb0c9c8ee14d94', NULL, NULL, '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(2, 1579334724, '2', '9fe4fca09cdb0c9c8ee14d94', NULL, NULL, '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(3, 1579586110, '2', '9fe4fca09cdb0c9c8ee14d94', NULL, NULL, '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL);

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
  `details` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdrawal`
--

INSERT INTO `withdrawal` (`id`, `user_id`, `ref`, `method`, `phone`, `amount`, `status`, `approval`, `email`, `time`, `details`) VALUES
(1, '2', '14209875900', '', 3454534, '0.0000', 'pending', 'pending', 'publisher@test.com', 1579331888, NULL),
(2, '7', '14213867760', '', 432434, '50.0000', 'pending', 'pending', 'publisher@test.com', 1579775428, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clicks`
--
ALTER TABLE `clicks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cmessages`
--
ALTER TABLE `cmessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cpa_forms`
--
ALTER TABLE `cpa_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payment_requests`
--
ALTER TABLE `payment_requests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `publishers_websites`
--
ALTER TABLE `publishers_websites`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pub_story`
--
ALTER TABLE `pub_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
