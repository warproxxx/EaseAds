-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2020 at 10:32 AM
-- Server version: 5.7.29-0ubuntu0.16.04.1
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
(2, 'January', '2020', 'text', 'view', 'Tuesday', '0.0000', '1579586110'),
(3, 'January', '2020', 'text', 'view', 'Wednesday', '0.0000', '1580278372'),
(4, 'January', '2020', 'text', 'view', 'Wednesday', '0.0000', '1580278960'),
(5, 'January', '2020', 'text', 'view', 'Wednesday', '0.0000', '1580301895'),
(6, 'January', '2020', 'text', 'view', 'Wednesday', '0.0000', '1580302312'),
(7, 'January', '2020', 'popup', 'click', 'Wednesday', '0.0000', '1580303133'),
(8, 'February', '2020', 'banner', 'click', 'Saturday', '0.0000', '1581166415'),
(9, 'February', '2020', NULL, 'click', 'Saturday', '0.0000', '1581166885'),
(10, 'February', '2020', NULL, 'click', 'Saturday', '0.0000', '1581166909'),
(11, 'February', '2020', NULL, 'click', 'Saturday', '0.0000', '1581167040'),
(12, 'February', '2020', NULL, 'click', 'Saturday', '0.0000', '1581167068'),
(13, 'February', '2020', 'popup', 'click', 'Saturday', '0.0000', '1581167092');

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
(2, 'asdasd', 'asdsdsd', 'a3f4186a2f9349f2570dc7d33d5823f6', 'Choose', NULL, 'advertiser@test.com', NULL, '3554354', '5349.0000', '0.0000', NULL, '["sd.com"]', 'active', NULL, NULL, '1582086684', 1578315045),
(3, 'Pratk', 'Kunwar', '15cc992d5177a2ec8bd741a3163b254f', 'Nepal', NULL, 'pratik@kunwar.com', NULL, '23432424', '4950.0000', '0.0000', NULL, '["google.com"]', 'active', NULL, NULL, NULL, 1579317725),
(4, 'New', 'advertiser', 'fb469d7ef430b0baf0cab6c436e70375', 'Armenia', NULL, 'new@test.com', NULL, '9882938192', '4978.0000', '0.0000', NULL, '["reddit.com"]', 'active', NULL, NULL, NULL, 1579942420),
(5, 'IM', 'Test', 'e20a922006822f58699cbe1e181be9be', 'Aruba', NULL, 'sd@aa.com', NULL, 'noobydan', '5516.0000', '0.0000', NULL, '["asdd.com"]', 'active', NULL, NULL, NULL, 1580952182);

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
(1, 1579183060, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '-dadd', 'sdd.com', 'banner', '300X250', NULL, 'rest_framewor*3zzzzzzzzzzzzz', NULL, 'b26e69fabd97c7a31808', NULL, NULL, NULL, '0.00', 'false', 'incomplete', 'incomplete', NULL, NULL, NULL, NULL, 'false', 'banking', '2', NULL, NULL, NULL, NULL, 0),
(2, 1579936613, 2, 0, 0, 1579936613, '4.0000', '0.0000', NULL, '10.0000', '10.0000', 0, '-Test', 'https://www.google.com/', 'banner', '300X250', NULL, 'Screenshot_from_2018-12-22_08-52-43.png', NULL, '6e6de8a8fab46c8ce3bc', NULL, NULL, NULL, '0.00', 'true', 'complete', 'active', '["desktop"]', NULL, '["opera","chrome","firefox"]', '["nigeria"]', 'true', 'Business', '3', NULL, NULL, NULL, NULL, 0),
(3, 1579999248, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '-tet', 'sdds.com', 'banner', '720X90', NULL, 'rest_framewor*3zzzzzzzzzzzzz', NULL, 'adb7c57f49a5ba8b7905', NULL, NULL, NULL, '0.00', 'false', 'incomplete', 'incomplete', NULL, NULL, NULL, NULL, NULL, 'Adventure', '1', NULL, NULL, NULL, NULL, 0),
(4, 1580010702, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '-asd', 'asdd', 'banner', '300X250', NULL, 'Screenshot_from_2018-08-27_07-01-41.png', NULL, '47101fb177fe0f62a417', NULL, NULL, NULL, '0.00', 'false', 'incomplete', 'incomplete', NULL, NULL, NULL, NULL, 'false', 'Business', '2', NULL, NULL, NULL, NULL, 0),
(5, 1580134689, 2, 0, 0, 1580134689, '0.1000', '0.0000', NULL, '50.0000', '50.0000', 0, '-Country Test', 'dsds.com', 'banner', '300X250', NULL, 'ran.png', NULL, '363e3520bb270306a75d', NULL, NULL, NULL, '0.00', 'Pending', 'complete', 'Pending', '["desktop","mobile","android","ios"]', NULL, '["opera","chrome","firefox","ie"]', '["AL","DZ","BD","NP"]', 'true', 'Business', '3', NULL, NULL, NULL, NULL, 0),
(6, 1580182996, 2, 0, 0, 1580182996, '0.0100', '0.0000', NULL, '50.0000', '50.0000', 0, '-Text Campaign Test', 'water.com', 'text', NULL, 'water.com', '', NULL, '809b22d287c9104c64f1', NULL, 'Text', 'Text camp ad test', '0.00', 'Pending', 'complete', 'Pending', NULL, NULL, NULL, NULL, 'true', 'Blog', '3', NULL, NULL, NULL, NULL, 0),
(14, 1580197449, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0.0000', 0, 'Default Banner', 'allahuakbar', 'banner', '300X250', NULL, 'ran1.png', NULL, 'd8695472862a4fa6f918', NULL, NULL, NULL, '0.00', 'true', 'complete', 'active', NULL, NULL, NULL, NULL, NULL, 'Admin', '1', NULL, NULL, NULL, NULL, 1),
(15, 1580201902, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Default Banner', 'ggg.com', 'text', '300X250', 'ggg.com', NULL, NULL, 'f2aec19b0aba789116a9', NULL, NULL, 'Another Test', '0.00', 'true', 'complete', 'active', NULL, NULL, NULL, NULL, NULL, 'Admin', '1', NULL, NULL, NULL, NULL, 1),
(17, 1580216836, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '-sdd', 'asddd.com', 'banner', '300X250', NULL, 'Screenshot_from_2018-07-23_06-45-57.png', NULL, '070a745c033731e8e71e', NULL, NULL, NULL, '0.00', 'false', 'incomplete', 'incomplete', NULL, NULL, NULL, NULL, NULL, 'Blog', '1', NULL, NULL, NULL, NULL, 0),
(18, 1580279017, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '-aadadsdf', 'sdad.com', 'banner', '300X250', NULL, 'Screenshot_from_2018-08-02_07-20-02.png', NULL, 'e3f06aca678d9f0e038d', NULL, NULL, NULL, '0.00', 'false', 'incomplete', 'incomplete', NULL, NULL, NULL, '["AF"]', 'true', 'Business', '2', NULL, NULL, NULL, NULL, 0),
(19, 1580285324, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '-Test Popup', 'sdsdd.com', 'recommendation', NULL, NULL, '', NULL, '47c262021808c46bcc0d', NULL, NULL, NULL, '0.00', 'false', 'incomplete', 'incomplete', NULL, NULL, NULL, NULL, 'true', 'Business', '2', NULL, NULL, NULL, NULL, 0),
(20, 1580287795, 2, 0, 0, 1580287795, '0.0000', '0.1000', NULL, '50.0000', '50.0000', 0, '-Popup Test', 'popup.com', 'popup', NULL, NULL, '', NULL, 'b2f5b738d3dcab2febea', NULL, NULL, NULL, '0.00', 'Pending', 'complete', 'Pending', NULL, NULL, NULL, NULL, 'true', 'Business', '3', NULL, NULL, NULL, NULL, 0),
(21, 1580287816, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '-asdasd', 'aaa.com', 'popup', NULL, NULL, '', NULL, '215a169ba202e31a1641', NULL, NULL, NULL, '0.00', 'false', 'incomplete', 'incomplete', NULL, NULL, NULL, NULL, 'true', 'Blog', '2', NULL, NULL, NULL, NULL, 0),
(22, 1580288431, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0.0000', 0, 'Default Banner', 'http://ask.com', 'popup', '300X250', NULL, NULL, NULL, '390044bf862378c1686c', NULL, NULL, NULL, '0.00', 'true', 'complete', 'active', NULL, NULL, NULL, NULL, NULL, 'Admin', '1', NULL, NULL, NULL, NULL, 1),
(23, 1580302087, 2, 0, 0, 1580302087, NULL, NULL, NULL, '50.0000', '50.0000', 0, '-Working Popup', 'waterbot.xyz', 'popup', NULL, NULL, '', NULL, 'b1b04aa3c1e2464d4265', NULL, NULL, NULL, '0.00', 'true', 'complete', 'active', NULL, NULL, NULL, NULL, 'true', 'Business', '3', NULL, NULL, NULL, NULL, 0),
(24, 1580305479, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '-asdd', 'http://a.com', 'popup', NULL, NULL, '', NULL, '1ad1a22c44f778c82ee0', NULL, NULL, NULL, '0.00', 'false', 'incomplete', 'incomplete', '["windows"]', NULL, '["chrome"]', NULL, 'true', 'Beauty', '2', NULL, NULL, NULL, NULL, 0),
(25, 1581164987, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '-asd', 'http://gg.com', 'banner', '300X250', NULL, 'ran2.png', NULL, 'f10fa1c99b9060923062', NULL, NULL, NULL, '0.00', 'false', 'incomplete', 'incomplete', NULL, NULL, NULL, NULL, 'true', 'Blog', '2', NULL, NULL, NULL, NULL, 0),
(26, 1581165102, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '-asdd', 'http://aa.com', 'popup', NULL, NULL, '', NULL, '7919926834d54fa810fb', NULL, NULL, NULL, '0.00', 'false', 'incomplete', 'incomplete', NULL, NULL, NULL, NULL, 'true', 'Business', '2', NULL, NULL, NULL, NULL, 0),
(27, 1581252333, 2, 0, 0, 1581252333, '0.2000', '0.0000', NULL, '50.0000', '50.0000', 0, '-Actual Test', 'htpp://aaa.com', 'popup', NULL, NULL, '', NULL, '1635f056f81b232afc1d', NULL, NULL, NULL, '0.00', 'Pending', 'complete', 'Pending', NULL, NULL, NULL, NULL, 'true', 'Business', '3', NULL, NULL, NULL, NULL, 0),
(28, 1581323171, 2, 0, 0, 1581323171, '0.1000', '0.0000', NULL, '50.0000', '50.0000', 0, '-sadd', 'http://aa.com', 'popup', NULL, NULL, '', NULL, '9133c73326a7e7934d8c', NULL, NULL, NULL, '0.00', 'Pending', 'complete', 'Pending', NULL, NULL, NULL, NULL, 'true', 'Business', '3', NULL, NULL, NULL, NULL, 0);

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
(1, 1580303133, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', NULL, '0', NULL),
(2, 1581166415, '7', '6b4ee6c4fb02909d1c3fbae2', '0', 'd8695472862a4fa6f918', '127.0.0.1', NULL, 'Linux', 'Firefox', NULL, '0', NULL),
(3, 1581166885, NULL, NULL, NULL, '390044bf862378c1686c7c05da1f7a906a50cb6f7ed4', '127.0.0.1', NULL, 'Linux', 'Firefox', NULL, '0', NULL),
(4, 1581166909, NULL, NULL, NULL, '390044bf862378c1686c7c05da1f7a906a50cb6f7ed4', '127.0.0.1', NULL, 'Linux', 'Firefox', NULL, '0', NULL),
(5, 1581167040, NULL, NULL, NULL, '390044bf862378c1686c7c05da1f7a906a50cb6f7ed4', '127.0.0.1', NULL, 'Linux', 'Firefox', NULL, '0', NULL),
(6, 1581167068, NULL, NULL, NULL, '390044bf862378c1686c7c05da1f7a906a50cb6f7ed4', '127.0.0.1', NULL, 'Linux', 'Firefox', NULL, '0', NULL),
(7, 1581167092, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', NULL, '0', NULL);

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
(1, '7', 'Your Withdrawal Request Had been Processed', 'w_process', 1579786211, 'publisher');

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
(3, '2', 'advertiser', 'paypal', NULL, '', '10.0000', 'CONFIRMED', NULL, 'deposit', '1579754186', NULL, 'PAYID-LYUSFMI4Y847822CA173270R', 'D34LDFXSNMR58', 'EC-7AT15982JL9061614', NULL, ''),
(4, '1', 'advertiser', 'manual', NULL, '', '50.0000', 'CONFIRMED', NULL, 'deposit', '1579772268', NULL, 'Manual', 'Manual', 'Manual', NULL, ''),
(5, '2', 'advertiser', 'paypal', NULL, '', '50.0000', 'CONFIRMED', NULL, 'deposit', '1580279167', NULL, 'PAYID-LYYSKPY7AH51123JT047525A', 'D34LDFXSNMR58', 'EC-4A212519D5035631K', NULL, ''),
(6, '2', 'advertiser', 'manual', NULL, '', '50.0000', 'CONFIRMED', NULL, 'deposit', '1581511274', NULL, 'Manual', 'Manual', 'Manual', NULL, ''),
(9, '2', 'advertiser', 'Skrill', NULL, '', '222.0000', 'CONFIRMED', NULL, 'deposit', '1581589157', NULL, 'Manual', 'Manual', 'Manual', NULL, ''),
(10, '2', 'advertiser', 'Skrill', NULL, '', '222.0000', 'CONFIRMED', NULL, 'deposit', '1581589159', NULL, 'Manual', 'Manual', 'Manual', NULL, ''),
(11, '2', 'advertiser', 'Skrill', NULL, '', '222.0000', 'CONFIRMED', NULL, 'deposit', '1581589304', NULL, 'Manual', 'Manual', 'Manual', NULL, ''),
(13, '2', 'advertiser', 'Bank', NULL, '', '50.0000', 'CONFIRMED', NULL, 'DEPOSIT', '1582011278', NULL, NULL, NULL, NULL, NULL, 'Hello plz'),
(14, '2', 'advertisers', 'Manual', NULL, '', '55.0000', 'CONFIRMED', NULL, 'MANUAL', '1582013032', NULL, NULL, NULL, NULL, NULL, 'Manually done by admin');

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
  `time` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `firstname`, `lastname`, `password`, `country`, `state`, `email`, `email_vc`, `phone`, `account_bal`, `total_earned`, `pending_bal`, `platform`, `account_status`, `websites`, `browser`, `lastlog`, `bank_name`, `bank_acct`, `bank_det`, `bank_no`, `payment_type`, `referral_id`, `time`) VALUES
(7, 'Publisher', 'Test', '7b1efd7be3b882eb22af3ffa4cc7d039', 'Nepal', NULL, 'publisher@test.com', NULL, '432434', '50.0000', '50.0000', '0.0000', NULL, 'active', '["waterbot.xy"]', NULL, '1581323229', NULL, 'daniel@paypal.com', NULL, NULL, 'paypal', NULL, 1579591304);

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
(1, 1579331615, 2, 0, 0, 'active', 'text', '300X250', '9fe4fca09cdb0c9c8ee14d94', 'test.com', 'Test', NULL, NULL, 'Ec8', '["advertising","entertainment","food","gambling","marketing"]', NULL, '<script src="http://127.0.0.1/ads/index.php/campaign_delivery/deliver_text_js/9fe4fca09cdb0c9c8ee14d94"></script>\n<center><div class="w3-margin" id="Ec8" style="max-width: 70%;" class="">\n</div></center>\n', NULL, NULL),
(2, 1579939308, 7, 0, 0, 'active', 'banner', '300X250', 'b1494f9c8dc5caa30bf4951c', 'waterbot.xy', 'aa', NULL, NULL, 'bC4', '["Business"]', NULL, '<script src="http://127.0.0.1/ads/campaign_delivery/deliver_banner_js/b1494f9c8dc5caa30bf4951c/box"></script>\n<center><div  class="w3-margin"  id="bC4">\n</div></center>', NULL, NULL),
(3, 1579939663, 7, 0, 0, 'active', 'banner', '300X250', '54f09680fe266eb4bd5a909a', 'waterbot.xy', 'Multiple Test', NULL, NULL, 'eE7', '["Blog","Adventure","Beauty"]', NULL, '<script src="http://127.0.0.1/ads/campaign_delivery/deliver_banner_js/54f09680fe266eb4bd5a909a/box"></script>\n<center><div  class="w3-margin"  id="eE7">\n</div></center>', NULL, NULL),
(4, 1580214769, 7, 0, 0, 'active', 'banner', '300X250', '6b4ee6c4fb02909d1c3fbae2', 'waterbot.xy', 'Test', NULL, NULL, 'AC0', '["Business","Blog","Adventure","Beauty","Investing"]', NULL, '<script src="http://127.0.0.1/ads/campaign_delivery/deliver_banner_js/6b4ee6c4fb02909d1c3fbae2/box"></script>\n<center><div  class="w3-margin"  id="AC0">\n</div></center>', NULL, NULL),
(5, 1580290225, 7, 0, 0, 'active', 'popup', '300X250', '2f2174e04cc6a9d01811cbd6', 'waterbot.xy', 'asdasdsd', NULL, NULL, 'AB8', '["Business"]', NULL, NULL, NULL, NULL),
(6, 1580290544, 7, 0, 0, 'active', 'popup', '300X250', '7c05da1f7a906a50cb6f7ed4', 'waterbot.xy', 'Popup working', NULL, NULL, 'ee6', 'null', NULL, '<script src="http://127.0.0.1/ads/campaign_delivery/deliver_popup_js/7c05da1f7a906a50cb6f7ed4"></script>\n<div  class="w3-margin"  style="" id="ee6">\n</div>', NULL, NULL),
(7, 1580302304, 7, 0, 0, 'active', 'popup', '300X250', '2f92e94f7baded459b49f0f6', 'waterbot.xy', 'adds.com', NULL, NULL, 'BE1', '["Business"]', NULL, '<script src="http://127.0.0.1/ads/campaign_delivery/deliver_popup_js/2f92e94f7baded459b49f0f6"></script>\n<div  class="w3-margin"  style="" id="BE1">\n</div>', NULL, NULL),
(8, 1581148581, 7, 0, 0, 'active', 'popup', '300X250', '17d212057b633e51ea16fb7b', 'waterbot.xy', 'asdsdd', NULL, NULL, 'cc5', '["Business","Blog","Adventure","Beauty","Investing"]', NULL, '<script src="http://127.0.0.1/ads/campaign_delivery/deliver_popup_js/17d212057b633e51ea16fb7b"></script>\n<div  class="w3-margin"  style="" id="cc5">\n</div>', NULL, NULL);

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
(3, 1579586110, '2', '9fe4fca09cdb0c9c8ee14d94', NULL, NULL, '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(4, 1580214778, '7', '6b4ee6c4fb02909d1c3fbae2', '0', 'd8695472862a4fa6f918', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(5, 1580214839, '7', '6b4ee6c4fb02909d1c3fbae2', '0', 'd8695472862a4fa6f918', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(6, 1580214848, '7', '6b4ee6c4fb02909d1c3fbae2', '0', 'd8695472862a4fa6f918', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(7, 1580214854, '7', '6b4ee6c4fb02909d1c3fbae2', '0', 'd8695472862a4fa6f918', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(8, 1580214874, '7', '6b4ee6c4fb02909d1c3fbae2', '0', 'd8695472862a4fa6f918', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(9, 1580214905, '7', '6b4ee6c4fb02909d1c3fbae2', '0', 'd8695472862a4fa6f918', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(10, 1580214909, '7', '6b4ee6c4fb02909d1c3fbae2', '0', 'd8695472862a4fa6f918', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(11, 1580278372, '2', '9fe4fca09cdb0c9c8ee14d94', NULL, NULL, '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(12, 1580278960, '2', '9fe4fca09cdb0c9c8ee14d94', NULL, NULL, '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(13, 1580301895, '7', '7c05da1f7a906a50cb6f7ed4', NULL, NULL, '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(14, 1580302099, '7', '7c05da1f7a906a50cb6f7ed4', NULL, NULL, '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(15, 1580302124, '7', '7c05da1f7a906a50cb6f7ed4', NULL, NULL, '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(16, 1580302127, '7', '7c05da1f7a906a50cb6f7ed4', NULL, NULL, '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(17, 1580302196, '7', '7c05da1f7a906a50cb6f7ed4', NULL, NULL, '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(18, 1580302257, '7', '7c05da1f7a906a50cb6f7ed4', NULL, NULL, '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(19, 1580302312, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(20, 1580302787, '7', '2f92e94f7baded459b49f0f6', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(21, 1580302839, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(22, 1580302877, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(23, 1580303131, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(24, 1580303160, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(25, 1580303205, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(26, 1580303211, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(27, 1580303266, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(28, 1580303292, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(29, 1580303295, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(30, 1580303309, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(31, 1580303434, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(32, 1580303435, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(33, 1580303454, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(34, 1580303455, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(35, 1580303456, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(36, 1580303456, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(37, 1580303472, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Chrome', '0', NULL),
(38, 1580303762, '7', '2f92e94f7baded459b49f0f6', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(39, 1581148597, '7', '17d212057b633e51ea16fb7b', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(40, 1581148665, '7', '17d212057b633e51ea16fb7b', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(41, 1581148692, '7', '17d212057b633e51ea16fb7b', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(42, 1581148736, '7', '17d212057b633e51ea16fb7b', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(43, 1581148747, '7', '17d212057b633e51ea16fb7b', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(44, 1581148783, '7', '17d212057b633e51ea16fb7b', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(45, 1581148820, '7', '17d212057b633e51ea16fb7b', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(46, 1581148821, '7', '17d212057b633e51ea16fb7b', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(47, 1581166360, '7', '6b4ee6c4fb02909d1c3fbae2', '0', 'd8695472862a4fa6f918', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(48, 1581166407, '7', '6b4ee6c4fb02909d1c3fbae2', '0', 'd8695472862a4fa6f918', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(49, 1581166517, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(50, 1581166712, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(51, 1581166736, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(52, 1581166753, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(53, 1581166793, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(54, 1581166824, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(55, 1581166879, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(56, 1581166883, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(57, 1581166885, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(58, 1581166980, '7', '6b4ee6c4fb02909d1c3fbae2', '0', 'd8695472862a4fa6f918', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(59, 1581166992, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(60, 1581167004, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(61, 1581167016, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(62, 1581167031, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(63, 1581167039, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(64, 1581167040, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(65, 1581167078, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(66, 1581167086, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(67, 1581167091, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(68, 1581167092, '7', '7c05da1f7a906a50cb6f7ed4', '0', '390044bf862378c1686c', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(69, 1581323241, '7', '17d212057b633e51ea16fb7b', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL),
(70, 1581323489, '7', '17d212057b633e51ea16fb7b', '2', 'b1b04aa3c1e2464d4265', '127.0.0.1', NULL, 'Linux', 'Firefox', '0', NULL);

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
(2, '7', '14213867760', '', 432434, '50.0000', 'processed', 'pending', 'publisher@test.com', 1579775428, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `advertisers`
--
ALTER TABLE `advertisers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `adv_story`
--
ALTER TABLE `adv_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
