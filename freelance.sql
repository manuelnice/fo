-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2014 at 07:23 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `freelance`
--

-- --------------------------------------------------------

--
-- Table structure for table `fx_account_details`
--

CREATE TABLE IF NOT EXISTS `fx_account_details` (
`id` bigint(20) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(160) DEFAULT NULL,
  `company` varchar(150) NOT NULL,
  `city` varchar(40) DEFAULT NULL,
  `country` varchar(32) DEFAULT NULL,
  `address` varchar(32) NOT NULL,
  `phone` int(11) NOT NULL,
  `bio` varchar(255) NOT NULL DEFAULT 'Nothing to Display!',
  `timezone` varchar(40) DEFAULT NULL,
  `avatar` varchar(32) NOT NULL DEFAULT 'default_avatar.jpg'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=26 ;

--
-- Dumping data for table `fx_account_details`
--

INSERT INTO `fx_account_details` (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `bio`, `timezone`, `avatar`) VALUES
(1, 1, NULL, 'Sample Company', NULL, NULL, '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(2, 2, 'Willy Mandai', 'Sample Company', 'Nakuru', 'KE', '41-00100 Nakuru', 723924858, 'William Mandai is a Web Developer with 7 years experience. He is very passionate about the web from backend programming (PHP,Django and Ruby on Rails) to frontend frameworks(HTML 5,CSS 3).', NULL, 'avatar.jpg'),
(3, 3, 'Rodney Martins', 'Sample Company', NULL, NULL, '', 0, 'Nothing to Display!', NULL, 'avatar.jpg'),
(4, 4, 'Ronoh Gilbert', 'Sample Company', 'Nairobi', 'NR', '', 723924858, 'Nothing to Display!', NULL, 'avatar2.jpg'),
(5, 5, 'Max Leshan', 'Sample Company', 'Nairobi', 'KE', '', 723934868, 'Nothing to Display!', NULL, 'avatar3.jpg'),
(6, 6, NULL, 'Sample Company', NULL, NULL, '', 0, 'Nothing to Display!', NULL, 'avatar4.jpg'),
(7, 7, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(8, 8, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(9, 9, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(10, 10, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(11, 11, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(12, 12, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(13, 13, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(14, 14, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(15, 15, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(16, 16, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(17, 17, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(18, 18, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(19, 19, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(20, 20, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(21, 21, NULL, 'Sample Company', NULL, NULL, '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(22, 22, 'Joseph Kony', 'Sample Company', 'Duala', NULL, '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(23, 23, 'Bernard Ngeno', 'Sample Company', 'Nakuru', NULL, '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(24, 24, NULL, '', NULL, NULL, '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg'),
(25, 25, NULL, '', NULL, NULL, '', 0, 'Nothing to Display!', NULL, 'default_avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fx_activities`
--

CREATE TABLE IF NOT EXISTS `fx_activities` (
`activity_id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `module` varchar(32) NOT NULL,
  `module_field_id` int(11) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `activity_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `fx_activities`
--

INSERT INTO `fx_activities` (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `deleted`) VALUES
(1, 1, 'bugs', 3, 'Logged in from 127.0.0.1', '2014-02-26 14:40:59', 0),
(2, 1, 'invoices', 1, 'Uploaded a file to a <a class="text-info" href="projects/3">Project</a>', '2014-02-26 14:40:59', 0),
(3, 2, 'projects', 4, 'Added a new <a class="text-info" href="tasks/3">Task</a>', '2014-03-31 06:23:51', 0),
(4, 2, 'bugs', 3, 'Sent you a <a class="text-info" href="messages/3">message</a>', '2014-03-31 06:24:55', 0),
(5, 2, 'estimates', 6, 'Admin created estimate #129464', '2014-03-31 06:53:41', 0),
(6, 1, 'bugs', 3, 'Added an Issue #5644', '2014-05-12 17:42:05', 0),
(7, 1, 'payments', 2, 'Edited a user information', '2014-05-12 17:43:03', 0),
(8, 1, 'general', 3, 'Edited a user information', '2014-05-14 05:58:00', 0),
(9, 1, 'invoices', 3, 'Edited a user information', '2014-05-14 05:59:02', 0),
(10, 2, 'bugs', 3, 'Assigned Issue #5467 to a user and marked as In Progress', '2014-05-14 06:09:10', 0),
(11, 1, 'bugs', 3, 'Marked Issue #5467 as Resolved', '2014-06-29 15:04:23', 0),
(12, 1, 'bugs', 3, 'Assigned Issue #5467 to a user and marked as In Progress', '2014-06-29 15:08:53', 0),
(13, 1, 'invoices', 7, 'Payment of USD 15 received by admin', '2014-06-29 15:15:35', 0),
(14, 1, 'invoices', 7, 'Payment of USD 100 received and applied to INVOICE 884439', '2014-06-29 15:19:10', 0),
(15, 1, 'invoices', 8, 'INVOICE #418115 created.', '2014-06-29 15:21:26', 0),
(16, 1, 'invoices', 8, 'INVOICE #418115marked as Sent', '2014-06-29 15:49:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fx_bugs`
--

CREATE TABLE IF NOT EXISTS `fx_bugs` (
`bug_id` int(11) NOT NULL,
  `issue_ref` int(11) NOT NULL,
  `project` int(11) NOT NULL,
  `reporter` int(11) NOT NULL,
  `assigned_to` int(11) NOT NULL,
  `bug_status` enum('Unconfirmed','Confirmed','In Progress','Resolved','Verified') NOT NULL DEFAULT 'Unconfirmed',
  `priority` varchar(100) NOT NULL,
  `bug_description` text NOT NULL,
  `reported_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `attached_file` int(11) NOT NULL DEFAULT '0',
  `last_modified` varchar(64) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fx_bugs`
--

INSERT INTO `fx_bugs` (`bug_id`, `issue_ref`, `project`, `reporter`, `assigned_to`, `bug_status`, `priority`, `bug_description`, `reported_on`, `attached_file`, `last_modified`) VALUES
(1, 3445, 1, 2, 1, 'In Progress', 'High', 'I can''t see anything when i click the menu bar.', '2014-05-10 21:00:00', 1, '2014-05-14 00:00:00'),
(2, 3447, 2, 17, 0, 'In Progress', 'Critical', 'The tax calculation is incorrect', '2014-05-10 21:00:00', 2, '2014-05-11 17:27:54'),
(3, 5467, 1, 12, 23, 'In Progress', 'Medium', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable Daisy', '2014-05-11 13:51:06', 3, '2014-06-14 15:06:40'),
(5, 5468, 2, 14, 23, 'In Progress', 'Medium', 'Issue Description', '2014-05-11 13:51:06', 4, '2014-05-11 16:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `fx_bug_comments`
--

CREATE TABLE IF NOT EXISTS `fx_bug_comments` (
`c_id` int(11) NOT NULL,
  `bug_id` int(11) NOT NULL,
  `comment_by` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_commented` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fx_bug_comments`
--

INSERT INTO `fx_bug_comments` (`c_id`, `bug_id`, `comment_by`, `comment`, `date_commented`) VALUES
(1, 1, 2, 'I will say this and that', '2014-05-12 04:48:33'),
(2, 1, 3, 'And i will say this and that', '2014-05-12 04:48:33'),
(3, 1, 1, 'I can''t see anything when i click the menu bar.', '2014-05-12 06:18:33'),
(4, 1, 5, 'I can''t see anything when i click the menu bar.', '2014-05-12 06:30:33'),
(5, 1, 1, 'There are a few easy ways to quickly get started with Bootstrap, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.', '2014-05-12 07:01:08'),
(6, 3, 1, 'I am a comment', '2014-05-12 07:02:46'),
(7, 4, 1, 'I am a comment', '2014-05-25 17:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `fx_bug_files`
--

CREATE TABLE IF NOT EXISTS `fx_bug_files` (
`file_id` int(11) NOT NULL,
  `file_name` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fx_bug_files`
--

INSERT INTO `fx_bug_files` (`file_id`, `file_name`, `date_posted`) VALUES
(2, 'file1.jpg', '2014-03-31 06:19:35'),
(3, 'file2.jpg', '2014-03-31 06:23:51'),
(4, 'file3.jpg', '2014-03-31 06:24:55'),
(5, 'file4.jpg', '2014-03-31 11:54:41'),
(6, 'register.png', '2014-03-31 11:58:01'),
(7, 'user.png', '2014-03-31 11:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `fx_ci_session`
--

CREATE TABLE IF NOT EXISTS `fx_ci_session` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `fx_ci_session`
--

INSERT INTO `fx_ci_session` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('42643d3c84437db3f0a415264d26b1a4', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 1383941436, 'a:5:{s:9:"user_data";s:0:"";s:4:"sort";s:13:"date_uploaded";s:7:"user_id";s:1:"1";s:8:"username";s:5:"admin";s:6:"status";s:1:"1";}'),
('b883b710b852c2512fdec069bf1e5bb7', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:24.0) Gecko', 1383939276, 'a:5:{s:9:"user_data";s:0:"";s:4:"sort";s:13:"date_uploaded";s:7:"user_id";s:1:"1";s:8:"username";s:5:"admin";s:6:"status";s:1:"1";}');

-- --------------------------------------------------------

--
-- Table structure for table `fx_comments`
--

CREATE TABLE IF NOT EXISTS `fx_comments` (
`comment_id` int(11) NOT NULL,
  `project` int(11) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `fx_comments`
--

INSERT INTO `fx_comments` (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES
(1, 1, 2, 'Hello there?', '2014-01-02 11:45:51', 'No'),
(2, 2, 1, 'Testing deleting comments', '2014-01-02 11:53:44', 'Yes'),
(3, 2, 2, 'Will test pagination soon', '2014-01-02 13:33:18', 'No'),
(4, 2, 2, 'Yeah later', '2014-01-02 13:33:30', 'No'),
(5, 3, 2, 'Posting later', '2014-01-02 13:33:43', 'No'),
(6, 3, 2, 'You hit it buddy', '2014-01-02 13:34:00', 'No'),
(7, 1, 2, 'Please don''t do that [removed] [DIV]', '2014-01-02 13:34:24', 'No'),
(8, 2, 2, 'This is my comment it should be able to validate the token', '2014-01-02 19:34:47', 'No'),
(11, 7, 1, 'I commented', '2014-05-26 16:24:55', 'No'),
(12, 7, 1, 'How much will you charge?', '2014-06-07 07:17:03', 'No'),
(13, 5, 1, 'Comment added here', '2014-06-12 16:03:53', 'No'),
(14, 7, 1, 'Hey', '2014-06-16 13:25:05', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `fx_comment_replies`
--

CREATE TABLE IF NOT EXISTS `fx_comment_replies` (
`reply_id` int(11) NOT NULL,
  `parent_comment` int(11) NOT NULL,
  `reply_msg` text NOT NULL,
  `replied_by` int(11) NOT NULL,
  `del` enum('Yes','No') NOT NULL DEFAULT 'No',
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fx_comment_replies`
--

INSERT INTO `fx_comment_replies` (`reply_id`, `parent_comment`, `reply_msg`, `replied_by`, `del`, `date_posted`) VALUES
(1, 1, 'Hello buddy?', 1, 'No', '2014-01-02 11:46:55'),
(2, 1, 'Thanks for the good work', 2, 'No', '2014-01-02 11:51:46'),
(3, 7, 'That div is not allowed', 2, 'No', '2014-01-02 19:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `fx_config`
--

CREATE TABLE IF NOT EXISTS `fx_config` (
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fx_config`
--

INSERT INTO `fx_config` (`key`, `value`) VALUES
('allowed_files', 'gif|jpg|png|pdf'),
('auth_author', 'William Mandai'),
('auth_installed_key', 'GHG23GJB'),
('auth_secret_key', 'fv23gshdjwejbb3c32h321'),
('auth_sotfware_owner', 'mandai.willy@gmail.com'),
('base_url', 'http://localhost/fo/'),
('company_address', '1 Infinite Loop <br>95014 Cuperino, CA <br> United States'),
('company_city', 'Valencia'),
('company_country', 'Spain'),
('company_domain', 'http://pixelse7.com'),
('company_email', 'mandai.willy@gmail.com'),
('company_logo', 'logo.png'),
('company_name', 'Freelancer'),
('company_phone', '+123 456 789'),
('contact_person', 'John Doe'),
('default_currency', 'USD'),
('default_currency_symbol', '$'),
('default_language', 'english'),
('default_tax', '10'),
('default_terms', 'Please pay your fees before the due date to avoid over charge. Thank you for choosing Kabarak University. '),
('demo_mode', 'FALSE'),
('developer', 'ig63Yd/+yuA8127gEyTz9TY4pnoeKq8dtocVP44+BJvtlRp8Vqcetwjk51dhSB6Rx8aVIKOPfUmNyKGWK7C/gg=='),
('email_invoice_message', 'Hello {CLIENT}\r\nHere is the invoice of {CURRENCY} {AMOUNT}\r\nYou can view the invoice online at:\r\n\r\n{LINK}\r\n\r\n\r\nBest Regards,\r\n\r\n{COMPANY}'),
('file_max_size', '9000'),
('paypal_email', 'payments@bootstrapstore.net'),
('paypal_live', 'FALSE'),
('protocol', 'mail'),
('reminder_message', 'Hello {CLIENT}\r\nThis is a friendly reminder to pay your invoice of {CURRENCY} {AMOUNT}\r\n\r\nYou can view the invoice online at:\r\n\r\n{LINK}\r\n\r\n\r\nBest Regards,\r\n\r\n{COMPANY}'),
('site_author', 'William M.'),
('site_desc', 'Uniportal is a University Management system that can be used to manage University Resources in one place'),
('site_title', 'Kabarak University - Uniportal'),
('smtp_host', 'http://smtp.com'),
('smtp_pass', 'UYlINDMnpCq1JgVq+zAT1A3AyCPD9Cob/J82Cy1Duzjml/HOV+wkMizV3MMrT6ggbRj1KmXezZXPbaL8kILbsA=='),
('smtp_port', '25'),
('smtp_user', 'freelancer'),
('version', '1.1.0'),
('webmaster_email', 'info@bootstrapstore.net'),
('website_name', 'KabuPortal');

-- --------------------------------------------------------

--
-- Table structure for table `fx_contacts`
--

CREATE TABLE IF NOT EXISTS `fx_contacts` (
`contact_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `label` varchar(64) NOT NULL DEFAULT 'Public',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `fx_contacts`
--

INSERT INTO `fx_contacts` (`contact_id`, `user_id`, `contact`, `label`, `date_created`) VALUES
(1, 2, 3, 'Important', '2014-02-26 15:27:47'),
(2, 2, 4, 'Notice', '2014-02-26 15:27:47'),
(3, 2, 5, 'Classwork', '2014-02-26 15:27:47'),
(4, 2, 6, 'Important', '2014-02-26 15:27:47'),
(27, 4, 6, 'Important', '2014-03-30 08:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `fx_countries`
--

CREATE TABLE IF NOT EXISTS `fx_countries` (
`c_id` int(11) NOT NULL,
  `c_code` varchar(32) NOT NULL DEFAULT 'KE',
  `country` varchar(64) NOT NULL DEFAULT 'Kenya'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fx_estimates`
--

CREATE TABLE IF NOT EXISTS `fx_estimates` (
`est_id` int(11) NOT NULL,
  `reference_no` varchar(32) NOT NULL,
  `client` varchar(64) NOT NULL,
  `due_date` varchar(40) NOT NULL,
  `notes` varchar(255) NOT NULL DEFAULT 'Looking forward for your business.',
  `status` enum('Unpaid','Paid') NOT NULL DEFAULT 'Unpaid',
  `date_sent` varchar(64) NOT NULL,
  `est_deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `emailed` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fx_estimates`
--

INSERT INTO `fx_estimates` (`est_id`, `reference_no`, `client`, `due_date`, `notes`, `status`, `date_sent`, `est_deleted`, `date_saved`, `emailed`) VALUES
(1, '923852', '2', '31-05-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Unpaid', '2014-05-31 12:28:25', 'No', '2014-05-31 09:28:25', 'No'),
(2, '659386', '2', '14-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Unpaid', '2014-05-31 12:28:25', 'No', '2014-05-31 09:30:53', 'No'),
(3, '673957', '4', '17-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Unpaid', '2014-06-01 12:28:25', 'No', '2014-05-31 09:31:53', 'No'),
(4, '129464', '2', '05-07-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Unpaid', '2014-06-02 12:28:25', 'No', '2014-06-01 16:22:37', 'No'),
(5, '423291', '3', '10-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Unpaid', '', 'No', '2014-06-02 14:28:49', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `fx_estimate_items`
--

CREATE TABLE IF NOT EXISTS `fx_estimate_items` (
`item_id` int(11) NOT NULL,
  `estimate_id` int(11) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `unit_cost` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `fx_estimate_items`
--

INSERT INTO `fx_estimate_items` (`item_id`, `estimate_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES
(1, 1, 'Sample Item', 5, 100, 1500, '2014-06-10 02:00:00'),
(2, 2, 'Sample Item 2', 2, 200, 200, '2014-06-11 04:19:00'),
(3, 1, 'iPhone 5 32GB White & Silver (GSM) Unlocked ', 320, 2, 640, '2014-06-11 00:00:00'),
(4, 1, 'iPad mini with Wi-Fi 32GB - White & Silver ', 200, 4, 800, '2014-06-11 01:00:00'),
(5, 3, 'My description here', 60, 2, 120, '2014-06-07 13:14:29'),
(6, 3, 'Sample web design project', 70, 3, 210, '2014-06-07 13:46:43'),
(7, 3, 'Web Project', 350, 1, 350, '2014-06-07 14:31:53'),
(8, 1, 'Testing Flash data', 20, 1, 20, '2014-06-07 15:05:51'),
(9, 5, 'Joomla Theme', 25, 2, 50, '2014-06-07 15:15:26'),
(10, 5, 'Wordpress Plugin', 240, 1, 240, '2014-06-12 15:59:34'),
(11, 1, 'Subscription Form', 50, 2, 100, '2014-06-14 16:03:16'),
(12, 5, 'Subscription Form', 50, 3, 150, '2014-06-14 16:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `fx_faqs`
--

CREATE TABLE IF NOT EXISTS `fx_faqs` (
`question_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` int(11) NOT NULL,
  `visible` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `fx_faqs`
--

INSERT INTO `fx_faqs` (`question_id`, `question`, `answer`, `date_posted`, `author`, `visible`) VALUES
(2, 'How do i submit an issue to the Finance Office?', 'When you upload an item to ThemeMisty, one of our staff will review your item to ensure it meets out standards. If your item follows our <a href="/pages/browse/uploading-files">guidelines</a>,we will approve your item for sale.If your theme needs some improvements,our friendly staff will contact you with an aim of solving issues that would affect your sales negatively.', '2013-10-29 03:40:35', 1, 'Yes'),
(3, 'My fee details are wrong', 'Yes. The good news is that we do not restrict you from selling your work elsewhere.When you setup an account with us, your rate is set to 60%. Authors can earn up to 80% rate depending on sales. <a href="/pages/browse/payment-rates" target="_blank">Check our Payments Rates</a>', '2013-11-03 13:35:25', 2, 'Yes'),
(4, 'How do i register Units?', 'Yes, they are the authors'' work and they retain full rights to the items they sell here. We only provide a platform for selling their designs.', '2013-11-03 13:40:47', 1, 'Yes'),
(6, 'My maximum CF has exceeded the required CF', 'Payments are calculated at the end of each calendar month and paid out on the 15th of the following month. We are currently paying Authors via Paypal so you must have a <a href="https://paypal.com" target="_blank">PayPal Account</a>. New payment methods will be added soon and we''ll keep you posted.', '2013-11-03 13:47:57', 2, 'Yes'),
(7, 'How do i calculate my CF?', 'It is recommended to offer support to your customers so you can increase your sales  but no, it''s not required unless the file is actually broken.', '2013-11-03 13:47:57', 3, 'Yes'),
(8, 'If there is something wrong with the item I purchased can I get a refund?', 'If you have purchased an item and it does not work as described or is corrupt, please contact our support with information about your order number and the details of the problem. The item will be investigated, and if it is found to be faulty or not working as described it will be fixed or a refund will be offered. Please note that because of the nature of digital goods, support unfortunately cannot issue a refund unless the item is malfunctioning or corrupt, or does not work as described.<a href="http://support.thememisty.com" target="_blank"> Read more</a> on our knowledgebase', '2013-11-03 13:51:03', 3, 'Yes'),
(11, 'Do you have a referral program?', 'Yes,when you refer a new user to our marketplace,you get 10% of every purchase made by that user. You will continue earning money on every purchase <strong>forever</strong> (not only in first purchase).', '2014-01-01 16:39:35', 1, 'Yes'),
(13, 'Who is responsible for copyright violations in files I''ve submitted?', 'As the author,you are required to ensure that all files uploaded to the marketplace are entirely your own original content and if it contains assets from someone else, make sure you have the permission to sell them.', '2014-01-01 16:45:31', 1, 'Yes'),
(14, 'Who determines the price of my files?', 'The Author. You know your work more than we do that''s why you are required to set your own price.', '2014-01-01 16:48:04', 1, 'Yes'),
(15, 'Do you offer Theme customization?', 'For Theme customization please contact the author via his/her profile contact form. ThemeMisty Marketplace does not offer customization, we only sell themes.', '2014-01-03 14:47:30', 1, 'Yes'),
(16, 'When do sellers get paid?', '<table class="table table-striped table-bordered">\n              <tbody><tr>\n                <th style="background: #2a776b; padding: 1em; color:#fff;">Sales Period</th>\n                <th style="background: #2a776b; padding: 1em; color:#fff;">Payment Date</th>\n              </tr>\n              <tr>                \n                <td>1st January - 31st January </td>\n                <td>15th February</td>\n              </tr>\n              <tr>\n                <td>1st February - 28/29th February</td>\n                <td>15th March</td>\n              \n              </tr>\n              <tr>\n                <td>1st March - 31st March </td>\n                <td>15th April</td>\n              \n              </tr>\n              <tr>\n                <td>1st April - 30th April </td>\n                <td>15th May</td>\n            \n              </tr>\n              <tr>\n               <td>1st May - 31st May </td>\n                <td>15th June</td>\n              \n              </tr>\n              <tr>\n               <td>1st June - 30th June </td>\n                <td>15th July</td>\n              \n              </tr>\n              <tr>\n               <td>1st July - 31st July </td>\n                <td>15th August</td>\n              \n              </tr>\n              <tr>\n               <td>1st August - 31st August </td>\n                <td>15th September</td>\n              \n              </tr>\n              <tr>\n               <td>1st September - 30th September </td>\n                <td>15th October</td>\n              \n              </tr>\n              <tr>\n               <td>1st October - 31st October </td>\n                <td>15th November</td>\n             \n              </tr>\n              <tr>\n               <td>1st November - 30th November </td>\n                <td>15th December</td>\n             \n              </tr>\n              <tr>\n               <td>1st December - 31st December </td>\n                <td>15th January</td>\n             \n              </tr>\n            </tbody></table>', '2013-11-03 14:17:43', 2, 'Yes'),
(17, 'What is the commission rate per author?', '<table class="table table-striped table-bordered">\n              <tbody><tr>\n                <th style="background: #2a776b; padding: 1em; color:#fff;">Commission Rate (%)</th>\n                <th style="background: #2a776b; padding: 1em; color:#fff;">Sales in USD</th>\n              </tr>\n              <tr>                \n                <td>60% </td>\n                <td>$0.00 <span class="badge">Silver Member</span></td>\n              \n              </tr>\n              <tr>\n                <td>61% </td>\n                <td>$4,500.00</td>\n             \n              </tr>\n              <tr>\n                <td>62% </td>\n                <td>$9,000.00</td>\n              \n              </tr>\n              <tr>\n                <td>63% </td>\n                <td>$13,500.00</td>\n              \n              </tr>\n              <tr>\n               <td>64% </td>\n                <td>$18,000.00</td>\n              \n              </tr>\n              <tr>\n                <td>65% </td>\n                <td>$22,500.00</td>\n              \n              </tr>\n              <tr>\n                <td>66% </td>\n                <td>$27,000.00</td>\n              \n              </tr>\n              <tr>\n                <td>67% </td>\n                <td>$31,500.00 </td>\n              \n              </tr>\n              <tr>\n                <td>68% </td>\n                <td>$36,000.00</td>\n              \n              </tr>\n              <tr>\n                <td>69% </td>\n                <td>$40,500.00</td>\n              \n              </tr>\n              <tr>\n                <td>70% </td>\n                <td>$45,000.00 <span class="badge badge-warning">Gold Member</span></td>\n             \n              </tr>\n              <tr>\n                <td>71% </td>\n                <td>$49,500.00</td>\n              \n              </tr>\n              <tr>\n                <td>72% </td>\n                <td>$54,000.00</td>\n              \n              </tr>\n              <tr>\n                <td>73% </td>\n                <td>$58,500.00</td>\n              \n              </tr>\n              <tr>\n                <td>74% </td>\n                <td>$63,000.00</td>\n              \n              </tr>\n              <tr>\n                <td>75% </td>\n                <td>$67,500.00</td>\n              \n              </tr>\n              <tr>\n                <td>76% </td>\n                <td>$72,000.00</td>\n             \n              </tr>\n              <tr>\n                <td>77% </td>\n                <td>$76,500.00</td>\n              \n              </tr>\n              <tr>\n                <td>78% </td>\n                <td>$81,000.00</td>\n              \n              </tr>\n              <tr>\n                <td>79% </td>\n                <td>$85,500.00</td>\n              \n              </tr>\n              <tr>\n                <td>80% </td>\n                <td>Over $90,000.00 <span class="badge badge-success">Superstar Member</span></td>\n              \n              </tr>\n            </tbody></table>', '2013-11-03 14:07:09', 3, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `fx_files`
--

CREATE TABLE IF NOT EXISTS `fx_files` (
`file_id` int(11) NOT NULL,
  `project` int(11) NOT NULL,
  `file_name` text NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fx_files`
--

INSERT INTO `fx_files` (`file_id`, `project`, `file_name`, `uploaded_by`, `date_posted`) VALUES
(3, 2, 'clerk1.png', 2, '2014-03-31 06:23:51'),
(4, 2, 'login.png', 2, '2014-03-31 06:24:55'),
(5, 1, 'manager2.png', 2, '2014-03-31 11:54:41'),
(6, 1, 'register.png', 2, '2014-03-31 11:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `fx_invoices`
--

CREATE TABLE IF NOT EXISTS `fx_invoices` (
`inv_id` int(11) NOT NULL,
  `reference_no` varchar(32) NOT NULL,
  `client` varchar(64) NOT NULL,
  `due_date` varchar(40) NOT NULL,
  `notes` varchar(255) NOT NULL DEFAULT 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.',
  `allow_paypal` enum('Yes','No') NOT NULL,
  `recurring` enum('Yes','No') NOT NULL DEFAULT 'No',
  `r_freq` int(11) NOT NULL DEFAULT '31',
  `status` enum('Unpaid','Paid') NOT NULL DEFAULT 'Unpaid',
  `archived` int(11) NOT NULL DEFAULT '0',
  `date_sent` varchar(64) NOT NULL,
  `inv_deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `emailed` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `fx_invoices`
--

INSERT INTO `fx_invoices` (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES
(1, '923852', '2', '31-05-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', 'No', 0, 'Unpaid', 0, '2014-05-31 12:28:25', 'No', '2014-05-31 09:28:25', 'No'),
(2, '659386', '2', '14-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-05-31 12:28:25', 'No', '2014-05-31 09:30:53', 'No'),
(3, '673957', '3', '07-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-06-25 19:18:22', 'No', '2014-05-31 09:31:53', 'Yes'),
(4, '129464', '4', '05-07-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', 'No', 0, 'Unpaid', 0, '2014-06-02 12:28:25', 'No', '2014-06-01 16:22:37', 'No'),
(5, '423291', '3', '10-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-06-24 19:03:57', 'No', '2014-06-02 14:28:49', 'Yes'),
(6, '222867', '22', '10-07-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '', 'No', '2014-06-22 10:11:12', 'No'),
(7, '884439', '11', '25-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-06-24 19:22:29', 'No', '2014-06-22 10:12:57', 'Yes'),
(8, '418115', '17', '24-07-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-06-29 18:49:51', 'No', '2014-06-29 15:21:26', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `fx_items`
--

CREATE TABLE IF NOT EXISTS `fx_items` (
`item_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `unit_cost` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `fx_items`
--

INSERT INTO `fx_items` (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES
(1, 1, 'Sample Item', 5, 100, 1500, '2014-06-10 02:00:00'),
(2, 2, 'Sample Item 2', 2, 200, 200, '2014-06-11 04:19:00'),
(3, 1, 'iPhone 5 32GB White & Silver (GSM) Unlocked ', 320, 2, 640, '2014-06-11 00:00:00'),
(4, 1, 'iPad mini with Wi-Fi 32GB - White & Silver ', 200, 4, 800, '2014-06-11 01:00:00'),
(5, 3, 'My description here', 60, 2, 120, '2014-06-07 13:14:29'),
(6, 3, 'Sample web design project', 70, 3, 210, '2014-06-07 13:46:43'),
(7, 3, 'Web Project', 350, 1, 350, '2014-06-07 14:31:53'),
(8, 1, 'Testing Flash data', 20, 1, 20, '2014-06-07 15:05:51'),
(9, 5, 'Joomla Theme', 25, 2, 50, '2014-06-07 15:15:26'),
(10, 5, 'Wordpress Plugin', 240, 1, 240, '2014-06-12 15:59:34'),
(11, 7, 'Bootstrap 3 Theme Dev', 750, 1, 750, '2014-06-22 10:13:25'),
(12, 7, 'Codecanyon Wordpress Plugin', 450, 2, 900, '2014-06-22 10:13:45'),
(13, 3, 'Sample Web System', 450, 1, 450, '2014-06-25 08:42:05'),
(14, 8, 'Email Marketing', 50, 1, 50, '2014-06-29 15:21:50'),
(15, 8, 'Mailchimp Wordpress Plugin', 350, 1, 350, '2014-06-29 15:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `fx_items_saved`
--

CREATE TABLE IF NOT EXISTS `fx_items_saved` (
`item_id` int(11) NOT NULL,
  `item` varchar(150) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `unit_cost` int(11) NOT NULL,
  `category` enum('hours','product','service') NOT NULL DEFAULT 'product',
  `deleted` enum('Yes','No') DEFAULT 'No'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fx_items_saved`
--

INSERT INTO `fx_items_saved` (`item_id`, `item`, `item_desc`, `unit_cost`, `category`, `deleted`) VALUES
(1, 'Website', 'Web Development', 50, 'product', 'No'),
(2, 'Theme Design', 'Joomla Theme', 200, 'product', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `fx_login_attempts`
--

CREATE TABLE IF NOT EXISTS `fx_login_attempts` (
`id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fx_messages`
--

CREATE TABLE IF NOT EXISTS `fx_messages` (
`msg_id` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `user_from` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` enum('Read','Unread') NOT NULL DEFAULT 'Unread',
  `date_received` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `fx_messages`
--

INSERT INTO `fx_messages` (`msg_id`, `user_to`, `user_from`, `subject`, `message`, `status`, `date_received`, `deleted`) VALUES
(1, 2, 1, 'Hi', '<p>Mr. Soe</p>\n		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>\n		<blockquote> <em>Morbi nec nunc condimentum, egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula. Nunc placerat purus quam, ac adipiscing arcu rutrum eu. Vestibulum adipiscing ut augue ut auctor. Vestibulum nec lorem imperdiet nibh mollis gravida ut a justo.\n			<br>\n			<br>Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis</em>\n		</blockquote>\n			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>\n			<p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\n			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>\n			<p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\n			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend</p>\n		<p>Best Regards\n		<br>Mical</p>', 'Read', '2013-08-21 07:59:40', 'No'),
(2, 2, 3, 'Submit Assignment before deadline', 'Please submit your assignments before the deadline', 'Read', '2014-03-15 15:13:02', 'No'),
(3, 1, 4, 'Kabuportal has been upgraded', 'I just released some fixes to the Kabuportal ', 'Read', '2014-03-15 15:13:02', 'No'),
(4, 1, 5, 'Late Assignment', 'Your assignment is late. You have 24 hours to submit', 'Unread', '2014-03-15 15:14:55', 'No'),
(5, 4, 6, 'Research Project', 'All Y4S2 students meet me every Friday at Comp Lab.', 'Read', '2014-03-15 15:14:55', 'Yes'),
(6, 1, 4, 'Research Project', 'I got that covered buddy :)', 'Unread', '2014-03-29 18:36:33', 'No'),
(7, 1, 4, 'Research Project', 'Yieboo! It''s working mate :)', 'Unread', '2014-03-29 18:38:00', 'No'),
(8, 1, 12, 'Research Project', 'All Y4S2 students meet me every Friday at Comp Lab.', 'Unread', '2014-03-29 19:09:31', 'No'),
(9, 1, 10, 'Themeforest Theme', 'I replied to this mail :)', 'Read', '2014-03-29 19:18:13', 'No'),
(10, 1, 2, 'Affiliates Network', '<p>Mr. Soe</p>\r\n  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>\r\n  <blockquote> <em>Morbi nec nunc condimentum, egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula. Nunc placerat purus quam, ac adipiscing arcu rutrum eu. Vestibulum adipiscing ut augue ut auctor. Vestibulum nec lorem imperdiet nibh mollis gravida ut a justo.\r\n   <br>\r\n   <br>Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis</em>\r\n  </blockquote>\r\n   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>\r\n   <p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>\r\n   <p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend</p>\r\n  <p>Best Regards\r\n  <br>Mical</p>', 'Unread', '2014-03-29 19:18:27', 'No'),
(11, 1, 14, 'Assignment Overdue', 'Please send me your assignment.\r\n', 'Unread', '2014-05-10 08:31:48', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `fx_news`
--

CREATE TABLE IF NOT EXISTS `fx_news` (
`news_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `author` int(11) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  `icon` varchar(20) NOT NULL DEFAULT 'calendar'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fx_news`
--

INSERT INTO `fx_news` (`news_id`, `title`, `desc`, `author`, `date_posted`, `deleted`, `icon`) VALUES
(1, 'Registration Extended', 'Due to demand, we have enabled units registration for all students until 24 March 2014.', 3, '2014-03-08 08:37:53', 'No', 'calendar'),
(2, 'Enactus Kabarak', 'We''ll release a documentary for Enactus Kabarak (2013 National Champions) and their trip to Cancun City, Mexico.', 4, '2014-03-08 08:38:53', 'No', 'plane'),
(3, 'Results released', 'Your last semester exams have been released. Access your results using the Exams Link.', 4, '2014-03-12 08:38:53', 'No', 'calendar'),
(4, 'Bootstrap Developers Day HTML5/CSS3 Apps', 'Welcome to Bootstrap Apps showcase event to be held on this day. Come and get inspiration from top Developers who''ve designed the best selling Themes/Applications on Bootstrap Marketplaces.', 3, '2014-03-16 13:17:59', 'No', 'code');

-- --------------------------------------------------------

--
-- Table structure for table `fx_payments`
--

CREATE TABLE IF NOT EXISTS `fx_payments` (
`p_id` int(11) NOT NULL,
  `invoice` int(11) NOT NULL,
  `paid_by` int(11) NOT NULL,
  `payment_method` varchar(64) NOT NULL,
  `amount` float NOT NULL,
  `trans_id` varchar(64) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `month_paid` varchar(32) NOT NULL,
  `year_paid` varchar(32) NOT NULL,
  `inv_deleted` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `fx_payments`
--

INSERT INTO `fx_payments` (`p_id`, `invoice`, `paid_by`, `payment_method`, `amount`, `trans_id`, `notes`, `created_date`, `month_paid`, `year_paid`, `inv_deleted`) VALUES
(1, 2, 3, '1', 130, '32423432', '', '2014-05-09 06:42:11', '05', '2013', 'No'),
(2, 1, 2, '2', 500, '3243255', '', '2014-05-09 06:42:52', '04', '2014', 'No'),
(3, 1, 2, '1', 100, '3243255', '', '2014-05-09 06:42:52', '04', '2012', 'No'),
(4, 1, 3, '2', 50, '3243212', '', '2014-05-09 06:42:52', '05', '2014', 'No'),
(5, 3, 4, '1', 50, '3243214', '', '2014-05-09 06:42:52', '06', '2014', 'No'),
(6, 1, 3, '1', 200, '543442', 'Thanks', '2014-06-07 16:31:25', '06', '2014', 'No'),
(7, 5, 4, '1', 19, '448296', 'Paid via Mastercard', '2014-06-20 15:16:53', '06', '2014', 'No'),
(8, 5, 5, '1', 50, '661788', '', '2014-06-20 16:13:46', '06', '2014', 'No'),
(9, 5, 3, '1', 20, '839886', '', '2014-06-20 16:15:58', '06', '2014', 'No'),
(10, 5, 5, '1', 10, '256275', '', '2014-06-20 16:16:41', '06', '2014', 'No'),
(11, 5, 3, '1', 1, '123281', '', '2014-06-20 16:17:35', '06', '2014', 'No'),
(12, 5, 2, '1', 19, '567792', '', '2014-06-20 16:18:17', '06', '2014', 'No'),
(13, 5, 3, '1', 20, '886348', '', '2014-06-20 16:23:35', '06', '2014', 'No'),
(14, 5, 3, '1', 20, '819547', '', '2014-06-20 16:25:38', '06', '2014', 'No'),
(15, 5, 3, '1', 20, '747288', '', '2014-06-20 16:29:14', '06', '2014', 'No'),
(16, 5, 3, '1', 10, '515935', '', '2014-06-20 16:33:54', '06', '2014', 'No'),
(17, 5, 3, '1', 10, '545787', '', '2014-06-20 16:34:25', '06', '2014', 'No'),
(18, 5, 3, '1', 10, '655182', '', '2014-06-20 16:34:57', '06', '2014', 'No'),
(19, 5, 3, '1', 10, '635385', '', '2014-06-20 16:42:22', '06', '2014', 'No'),
(20, 5, 3, '1', 10, '742419', '', '2014-06-20 16:43:01', '06', '2014', 'No'),
(21, 5, 3, '1', 10, '679727', '', '2014-06-20 17:45:19', '06', '2014', 'No'),
(22, 5, 3, '1', 5, '861455', '', '2014-06-20 17:45:45', '06', '2014', 'No'),
(23, 3, 3, '1', 98, '763777', '', '2014-06-21 05:29:43', '06', '2014', 'No'),
(24, 3, 3, '1', 95, '625256', '', '2014-06-25 08:42:35', '06', '2014', 'No'),
(25, 7, 0, '1', 15, '511952', '', '2014-06-29 15:15:35', '06', '2014', 'No'),
(26, 7, 0, '1', 100, '462336', '', '2014-06-29 15:19:10', '06', '2014', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `fx_payment_methods`
--

CREATE TABLE IF NOT EXISTS `fx_payment_methods` (
`method_id` int(11) NOT NULL,
  `method_name` varchar(64) NOT NULL DEFAULT 'Paypal'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fx_payment_methods`
--

INSERT INTO `fx_payment_methods` (`method_id`, `method_name`) VALUES
(1, 'Paypal'),
(2, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `fx_posts`
--

CREATE TABLE IF NOT EXISTS `fx_posts` (
`post_id` int(11) NOT NULL,
  `post` text NOT NULL,
  `posted_by` int(11) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_deleted` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `fx_posts`
--

INSERT INTO `fx_posts` (`post_id`, `post`, `posted_by`, `date_posted`, `post_deleted`) VALUES
(1, 'Welcome <a href="#">@wmandai</a> enjoy the portal.', 1, '2014-02-25 15:08:17', 'No'),
(2, 'Hi <a href="">@jonathan33</a> please send me the notes. Thanks in advance :-)', 1, '2014-02-26 15:08:17', 'No'),
(3, 'Awesome stuff!', 4, '2014-03-28 12:04:19', 'No'),
(4, 'A good programmer counts from zero', 4, '2014-03-28 12:07:58', 'No'),
(5, 'A good Programmer cares', 4, '2014-03-28 12:09:29', 'No'),
(6, 'A good programmer doesn''t brag', 4, '2014-03-28 12:10:11', 'No'),
(7, 'I love Envato Marketplace and proud to work there.', 4, '2014-03-28 12:11:22', 'No'),
(8, '  <blockquote>\n            <p>A good programmer writes clean code.</p> <small>Author <cite title="William Mandai">William Mandai</cite></small>\n          </blockquote>', 2, '2014-03-28 13:49:02', 'No'),
(9, 'Check out my new <a href="http://bootstrapstore.net">Bootstrap Marketplace</a>', 5, '2014-03-30 13:52:49', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `fx_projects`
--

CREATE TABLE IF NOT EXISTS `fx_projects` (
`project_id` int(11) NOT NULL,
  `project_code` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL DEFAULT 'Project Title',
  `client` int(11) NOT NULL,
  `start_date` varchar(32) NOT NULL,
  `due_date` varchar(40) NOT NULL,
  `hours_spent` float NOT NULL,
  `hourly_rate` int(11) NOT NULL DEFAULT '5',
  `currency` varchar(32) NOT NULL DEFAULT 'USD',
  `progress` int(11) NOT NULL,
  `description` text NOT NULL,
  `assign_to` int(11) NOT NULL DEFAULT '1',
  `status` enum('On Hold','Active','Done') NOT NULL DEFAULT 'Active',
  `proj_deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fx_projects`
--

INSERT INTO `fx_projects` (`project_id`, `project_code`, `project_title`, `client`, `start_date`, `due_date`, `hours_spent`, `hourly_rate`, `currency`, `progress`, `description`, `assign_to`, `status`, `proj_deleted`, `date_created`) VALUES
(1, 343253, 'Codecanyon PHP Script', 2, '2014/05/09', '2014/06/09', 32, 5, 'USD', 45, 'Description', 1, 'Active', 'No', '2014-05-09 19:15:07'),
(2, 765546, 'Themeforest Wordpress', 2, '2014/05/09', '2014/06/09', 56, 5, 'USD', 80, 'Description', 1, 'Active', 'No', '2014-05-09 19:15:07'),
(3, 46483, 'Test Project', 2, '24-05-2014', '20-06-2014', 0, 5, 'USD', 56, 'Description', 1, 'Active', 'No', '2014-05-24 16:40:52'),
(4, 21735, 'Themeforest Bootstrap Theme db', 9, '24-05-2014', '06-06-2014', 0, 5, 'EUR', 21, 'Description goes here', 1, 'Active', 'No', '2014-05-24 16:44:20'),
(5, 98946, 'Test Project 2', 2, '24-05-2014', '15-05-2014', 0, 5, 'USD', 59, 'Description db', 5, 'Active', 'No', '2014-05-24 16:44:56'),
(7, 84952, 'Codecanyon Script', 14, '26-05-2014', '18-06-2014', 0, 5, 'USD', 62, 'Project Description', 4, 'Active', 'No', '2014-05-26 16:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `fx_project_timer`
--

CREATE TABLE IF NOT EXISTS `fx_project_timer` (
`timer_id` int(11) NOT NULL,
  `project` int(11) NOT NULL,
  `start_time` varchar(64) NOT NULL,
  `end_time` varchar(64) NOT NULL,
  `date_timed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fx_ratings`
--

CREATE TABLE IF NOT EXISTS `fx_ratings` (
`r_id` int(11) NOT NULL,
  `official_rated` int(11) NOT NULL,
  `rated_by` int(11) NOT NULL,
  `rated` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fx_ratings`
--

INSERT INTO `fx_ratings` (`r_id`, `official_rated`, `rated_by`, `rated`) VALUES
(1, 6, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fx_ref_country`
--

CREATE TABLE IF NOT EXISTS `fx_ref_country` (
  `alpha2` char(2) NOT NULL,
  `alpha3` char(3) NOT NULL,
  `numeric` varchar(3) NOT NULL,
  `country` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fx_ref_country`
--

INSERT INTO `fx_ref_country` (`alpha2`, `alpha3`, `numeric`, `country`) VALUES
('ao', 'ago', '024', 'Angola'),
('ai', 'aia', '660', 'Anguilla'),
('aq', 'ata', '010', 'Antarctica'),
('ag', 'atg', '028', 'Antigua and Barbuda'),
('ar', 'arg', '032', 'Argentina'),
('am', 'arm', '051', 'Armenia'),
('aw', 'abw', '533', 'Aruba'),
('au', 'aus', '036', 'Australia'),
('at', 'aut', '040', 'Austria'),
('az', 'aze', '031', 'Azerbaijan'),
('bs', 'bhs', '044', 'Bahamas'),
('bh', 'bhr', '048', 'Bahrain'),
('bd', 'bgd', '050', 'Bangladesh'),
('bb', 'brb', '052', 'Barbados'),
('by', 'blr', '112', 'Belarus'),
('be', 'bel', '056', 'Belgium'),
('bz', 'blz', '084', 'Belize'),
('bj', 'ben', '204', 'Benin'),
('bm', 'bmu', '060', 'Bermuda'),
('bt', 'btn', '064', 'Bhutan'),
('bo', 'bol', '068', 'Bolivia, Plurinational State of'),
('ba', 'bih', '070', 'Bosnia and Herzegovina'),
('bw', 'bwa', '072', 'Botswana'),
('bv', 'bvt', '074', 'Bouvet Island'),
('br', 'bra', '076', 'Brazil'),
('io', 'iot', '086', 'British Indian Ocean Territory'),
('bn', 'brn', '096', 'Brunei Darussalam'),
('bg', 'bgr', '100', 'Bulgaria'),
('bf', 'bfa', '854', 'Burkina Faso'),
('bi', 'bdi', '108', 'Burundi'),
('kh', 'khm', '116', 'Cambodia'),
('cm', 'cmr', '120', 'Cameroon'),
('ca', 'can', '124', 'Canada'),
('cv', 'cpv', '132', 'Cape Verde'),
('ky', 'cym', '136', 'Cayman Islands'),
('cf', 'caf', '140', 'Central African Republic'),
('td', 'tcd', '148', 'Chad'),
('cl', 'chl', '152', 'Chile'),
('cn', 'chn', '156', 'China'),
('cx', 'cxr', '162', 'Christmas Island'),
('cc', 'cck', '166', 'Cocos (Keeling) Islands'),
('co', 'col', '170', 'Colombia'),
('km', 'com', '174', 'Comoros'),
('cg', 'cog', '178', 'Congo'),
('cd', 'cod', '180', 'Congo, the Democratic Republic of the'),
('ck', 'cok', '184', 'Cook Islands'),
('cr', 'cri', '188', 'Costa Rica'),
('ci', 'civ', '384', 'Côte d''Ivoire'),
('hr', 'hrv', '191', 'Croatia'),
('cu', 'cub', '192', 'Cuba'),
('cy', 'cyp', '196', 'Cyprus'),
('cz', 'cze', '203', 'Czech Republic'),
('dk', 'dnk', '208', 'Denmark'),
('dj', 'dji', '262', 'Djibouti'),
('dm', 'dma', '212', 'Dominica'),
('do', 'dom', '214', 'Dominican Republic'),
('ec', 'ecu', '218', 'Ecuador'),
('eg', 'egy', '818', 'Egypt'),
('sv', 'slv', '222', 'El Salvador'),
('gq', 'gnq', '226', 'Equatorial Guinea'),
('er', 'eri', '232', 'Eritrea'),
('ee', 'est', '233', 'Estonia'),
('et', 'eth', '231', 'Ethiopia'),
('fk', 'flk', '238', 'Falkland Islands (Malvinas)'),
('fo', 'fro', '234', 'Faroe Islands'),
('fj', 'fji', '242', 'Fiji'),
('fi', 'fin', '246', 'Finland'),
('fr', 'fra', '250', 'France'),
('gf', 'guf', '254', 'French Guiana'),
('pf', 'pyf', '258', 'French Polynesia'),
('tf', 'atf', '260', 'French Southern Territories'),
('ga', 'gab', '266', 'Gabon'),
('gm', 'gmb', '270', 'Gambia'),
('ge', 'geo', '268', 'Georgia'),
('de', 'deu', '276', 'Germany'),
('gh', 'gha', '288', 'Ghana'),
('gi', 'gib', '292', 'Gibraltar'),
('gr', 'grc', '300', 'Greece'),
('gl', 'grl', '304', 'Greenland'),
('gd', 'grd', '308', 'Grenada'),
('gp', 'glp', '312', 'Guadeloupe'),
('gu', 'gum', '316', 'Guam'),
('gt', 'gtm', '320', 'Guatemala'),
('gg', 'ggy', '831', 'Guernsey'),
('gn', 'gin', '324', 'Guinea'),
('gw', 'gnb', '624', 'Guinea-Bissau'),
('gy', 'guy', '328', 'Guyana'),
('ht', 'hti', '332', 'Haiti'),
('hm', 'hmd', '334', 'Heard Island and McDonald Islands'),
('va', 'vat', '336', 'Holy See (Vatican City State)'),
('hn', 'hnd', '340', 'Honduras'),
('hk', 'hkg', '344', 'Hong Kong'),
('hu', 'hun', '348', 'Hungary'),
('is', 'isl', '352', 'Iceland'),
('in', 'ind', '356', 'India'),
('id', 'idn', '360', 'Indonesia'),
('ir', 'irn', '364', 'Iran, Islamic Republic of'),
('iq', 'irq', '368', 'Iraq'),
('ie', 'irl', '372', 'Ireland'),
('im', 'imn', '833', 'Isle of Man'),
('il', 'isr', '376', 'Israel'),
('it', 'ita', '380', 'Italy'),
('jm', 'jam', '388', 'Jamaica'),
('jp', 'jpn', '392', 'Japan'),
('je', 'jey', '832', 'Jersey'),
('jo', 'jor', '400', 'Jordan'),
('kz', 'kaz', '398', 'Kazakhstan'),
('ke', 'ken', '404', 'Kenya'),
('ki', 'kir', '296', 'Kiribati'),
('kp', 'prk', '408', 'Korea, Democratic People''s Republic of'),
('kr', 'kor', '410', 'Korea, Republic of'),
('kw', 'kwt', '414', 'Kuwait'),
('kg', 'kgz', '417', 'Kyrgyzstan'),
('la', 'lao', '418', 'Lao People''s Democratic Republic'),
('lv', 'lva', '428', 'Latvia'),
('lb', 'lbn', '422', 'Lebanon'),
('ls', 'lso', '426', 'Lesotho'),
('lr', 'lbr', '430', 'Liberia'),
('ly', 'lby', '434', 'Libyan Arab Jamahiriya'),
('li', 'lie', '438', 'Liechtenstein'),
('lt', 'ltu', '440', 'Lithuania'),
('lu', 'lux', '442', 'Luxembourg'),
('mo', 'mac', '446', 'Macao'),
('mk', 'mkd', '807', 'Macedonia, the former Yugoslav Republic of'),
('mg', 'mdg', '450', 'Madagascar'),
('mw', 'mwi', '454', 'Malawi'),
('my', 'mys', '458', 'Malaysia'),
('mv', 'mdv', '462', 'Maldives'),
('ml', 'mli', '466', 'Mali'),
('mt', 'mlt', '470', 'Malta'),
('mh', 'mhl', '584', 'Marshall Islands'),
('mq', 'mtq', '474', 'Martinique'),
('mr', 'mrt', '478', 'Mauritania'),
('mu', 'mus', '480', 'Mauritius'),
('yt', 'myt', '175', 'Mayotte'),
('mx', 'mex', '484', 'Mexico'),
('fm', 'fsm', '583', 'Micronesia, Federated States of'),
('md', 'mda', '498', 'Moldova, Republic of'),
('mc', 'mco', '492', 'Monaco'),
('mn', 'mng', '496', 'Mongolia'),
('me', 'mne', '499', 'Montenegro'),
('ms', 'msr', '500', 'Montserrat'),
('ma', 'mar', '504', 'Morocco'),
('mz', 'moz', '508', 'Mozambique'),
('mm', 'mmr', '104', 'Myanmar'),
('na', 'nam', '516', 'Namibia'),
('nr', 'nru', '520', 'Nauru'),
('np', 'npl', '524', 'Nepal'),
('nl', 'nld', '528', 'Netherlands'),
('an', 'ant', '530', 'Netherlands Antilles'),
('nc', 'ncl', '540', 'New Caledonia'),
('nz', 'nzl', '554', 'New Zealand'),
('ni', 'nic', '558', 'Nicaragua'),
('ne', 'ner', '562', 'Niger'),
('ng', 'nga', '566', 'Nigeria'),
('nu', 'niu', '570', 'Niue'),
('nf', 'nfk', '574', 'Norfolk Island'),
('mp', 'mnp', '580', 'Northern Mariana Islands'),
('no', 'nor', '578', 'Norway'),
('om', 'omn', '512', 'Oman'),
('pk', 'pak', '586', 'Pakistan'),
('pw', 'plw', '585', 'Palau'),
('ps', 'pse', '275', 'Palestinian Territory, Occupied'),
('pa', 'pan', '591', 'Panama'),
('pg', 'png', '598', 'Papua New Guinea'),
('py', 'pry', '600', 'Paraguay'),
('pe', 'per', '604', 'Peru'),
('ph', 'phl', '608', 'Philippines'),
('pn', 'pcn', '612', 'Pitcairn'),
('pl', 'pol', '616', 'Poland'),
('pt', 'prt', '620', 'Portugal'),
('pr', 'pri', '630', 'Puerto Rico'),
('qa', 'qat', '634', 'Qatar'),
('re', 'reu', '638', 'Réunion'),
('ro', 'rou', '642', 'Romania'),
('ru', 'rus', '643', 'Russian Federation'),
('rw', 'rwa', '646', 'Rwanda'),
('bl', 'blm', '652', 'Saint Barthélemy'),
('sh', 'shn', '654', 'Saint Helena'),
('kn', 'kna', '659', 'Saint Kitts and Nevis'),
('lc', 'lca', '662', 'Saint Lucia'),
('mf', 'maf', '663', 'Saint Martin (French part)'),
('pm', 'spm', '666', 'Saint Pierre and Miquelon'),
('vc', 'vct', '670', 'Saint Vincent and the Grenadines'),
('ws', 'wsm', '882', 'Samoa'),
('sm', 'smr', '674', 'San Marino'),
('st', 'stp', '678', 'Sao Tome and Principe'),
('sa', 'sau', '682', 'Saudi Arabia'),
('sn', 'sen', '686', 'Senegal'),
('rs', 'srb', '688', 'Serbia'),
('sc', 'syc', '690', 'Seychelles'),
('sl', 'sle', '694', 'Sierra Leone'),
('sg', 'sgp', '702', 'Singapore'),
('sk', 'svk', '703', 'Slovakia'),
('si', 'svn', '705', 'Slovenia'),
('sb', 'slb', '090', 'Solomon Islands'),
('so', 'som', '706', 'Somalia'),
('za', 'zaf', '710', 'South Africa'),
('gs', 'sgs', '239', 'South Georgia and the South Sandwich Islands'),
('es', 'esp', '724', 'Spain'),
('lk', 'lka', '144', 'Sri Lanka'),
('sd', 'sdn', '736', 'Sudan'),
('sr', 'sur', '740', 'Suriname'),
('sj', 'sjm', '744', 'Svalbard and Jan Mayen'),
('sz', 'swz', '748', 'Swaziland'),
('se', 'swe', '752', 'Sweden'),
('ch', 'che', '756', 'Switzerland'),
('sy', 'syr', '760', 'Syrian Arab Republic'),
('tw', 'twn', '158', 'Taiwan, Province of China'),
('tj', 'tjk', '762', 'Tajikistan'),
('tz', 'tza', '834', 'Tanzania, United Republic of'),
('th', 'tha', '764', 'Thailand'),
('tl', 'tls', '626', 'Timor-Leste'),
('tg', 'tgo', '768', 'Togo'),
('tk', 'tkl', '772', 'Tokelau'),
('to', 'ton', '776', 'Tonga'),
('tt', 'tto', '780', 'Trinidad and Tobago'),
('tn', 'tun', '788', 'Tunisia'),
('tr', 'tur', '792', 'Turkey'),
('tm', 'tkm', '795', 'Turkmenistan'),
('tc', 'tca', '796', 'Turks and Caicos Islands'),
('tv', 'tuv', '798', 'Tuvalu'),
('ug', 'uga', '800', 'Uganda'),
('ua', 'ukr', '804', 'Ukraine'),
('ae', 'are', '784', 'United Arab Emirates'),
('gb', 'gbr', '826', 'United Kingdom'),
('us', 'usa', '840', 'United States'),
('um', 'umi', '581', 'United States Minor Outlying Islands'),
('uy', 'ury', '858', 'Uruguay'),
('uz', 'uzb', '860', 'Uzbekistan'),
('vu', 'vut', '548', 'Vanuatu'),
('ve', 'ven', '862', 'Venezuela, Bolivarian Republic of'),
('vn', 'vnm', '704', 'Viet Nam'),
('vg', 'vgb', '092', 'Virgin Islands, British'),
('vi', 'vir', '850', 'Virgin Islands, U.S.'),
('wf', 'wlf', '876', 'Wallis and Futuna'),
('eh', 'esh', '732', 'Western Sahara'),
('ye', 'yem', '887', 'Yemen'),
('zm', 'zmb', '894', 'Zambia'),
('zw', 'zwe', '716', 'Zimbabwe'),
('af', 'afg', '004', 'Afghanistan'),
('ax', 'ala', '248', 'Åland Islands'),
('al', 'alb', '008', 'Albania'),
('dz', 'dza', '012', 'Algeria'),
('as', 'asm', '016', 'American Samoa'),
('ad', 'and', '020', 'Andorra');

-- --------------------------------------------------------

--
-- Table structure for table `fx_roles`
--

CREATE TABLE IF NOT EXISTS `fx_roles` (
`r_id` int(11) NOT NULL,
  `role` varchar(64) NOT NULL,
  `default` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fx_roles`
--

INSERT INTO `fx_roles` (`r_id`, `role`, `default`) VALUES
(1, 'admin', 1),
(2, 'client', 2),
(6, 'collaborator', 6);

-- --------------------------------------------------------

--
-- Table structure for table `fx_tasks`
--

CREATE TABLE IF NOT EXISTS `fx_tasks` (
`t_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `project` int(11) NOT NULL,
  `status` enum('Open','Done') NOT NULL DEFAULT 'Open',
  `assigned_to` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `visible` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `tracked_time` varchar(32) NOT NULL,
  `progress` int(11) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fx_tasks`
--

INSERT INTO `fx_tasks` (`t_id`, `task_name`, `project`, `status`, `assigned_to`, `description`, `visible`, `tracked_time`, `progress`, `date_added`, `added_by`) VALUES
(1, 'Top Menu', 1, 'Open', '["1","2","3"]', 'Task Description', 'Yes', '2', 40, '2014-05-09 05:09:48', 1),
(2, 'Bug Fixes', 2, 'Open', '["1","2","3"]', 'Task Description', 'Yes', '3', 20, '2014-05-09 05:09:48', 1),
(3, 'Footer Menu', 2, 'Done', '["1","2","3"]', 'Task Description', 'Yes', '3', 100, '2014-05-14 05:09:48', 3),
(4, 'Logout Error fix', 2, 'Open', '["1","2","3"]', 'Task Description', 'Yes', '1', 60, '2014-05-15 05:24:48', 2);

-- --------------------------------------------------------

--
-- Table structure for table `fx_tasks_timer`
--

CREATE TABLE IF NOT EXISTS `fx_tasks_timer` (
`t_id` int(11) NOT NULL,
  `task` int(11) NOT NULL,
  `start_time` varchar(64) NOT NULL,
  `end_time` varchar(64) NOT NULL,
  `date_timed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fx_un_sessions`
--

CREATE TABLE IF NOT EXISTS `fx_un_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `fx_un_sessions`
--

INSERT INTO `fx_un_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('3a4e55b1646861811b5f641ef29f715c', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', 1404058124, 'a:5:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"1";s:8:"username";s:5:"admin";s:7:"role_id";s:1:"1";s:6:"status";s:1:"1";}'),
('c0677dbeeef60a92f56e0feeead102b8', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1424335780, '');

-- --------------------------------------------------------

--
-- Table structure for table `fx_users`
--

CREATE TABLE IF NOT EXISTS `fx_users` (
`id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=26 ;

--
-- Dumping data for table `fx_users`
--

INSERT INTO `fx_users` (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 'admin', '$P$BjiONJAUmQ0v1Q/1pv20J1Jtl6IXew1', 'mandai.willy@gmail.com', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-06-29 15:57:19', '2014-02-26 14:18:04', '2014-06-29 12:57:19'),
(2, 'client', '$P$BqXoFhHwflCgnLZ/qSZG42gNwIGFvE1', 'mandaiwilly@gmail.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-04-01 07:42:04', '2014-01-15 08:09:28', '2014-05-12 10:38:35'),
(3, 'rodney', '$P$BBPwAlyFBXkzCiOo1LQXSvuBEOB//7.', 'bs@bootstrapstore.net', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-03-31 22:38:06', '2014-01-08 08:10:10', '2014-05-12 10:38:45'),
(4, 'daves', '$P$BQpoH/4gsohSQ6MFzg7ueyvLyIaj3r.', 'wm@bootstrapstore.net', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-05-14 09:06:26', '2014-02-28 08:10:37', '2014-05-14 06:06:26'),
(5, 'snider', '$P$BrZZ17II5HdRVKkiqpmqpkbQNRCJCy.', 'info@bootstrapstore.net', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-04-01 09:32:25', '2014-02-28 08:11:11', '2014-05-09 12:43:30'),
(6, 'joshujay', '$P$Bnjdy7HR8LKhtTu3CBoKz8SMFe.AyL1', 'joashyegon@gmail.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-02-28 10:50:14', '2014-02-28 10:49:37', '2014-05-09 12:43:16'),
(7, 'jack', '$P$BiVgifm6xZQpePhmPPlBOekZceuVEH/', 'willykrw08@gmail.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-03-08 18:36:17', '2014-03-08 18:34:46', '2014-05-09 12:43:20'),
(8, 'giddy', '$P$B0TSMJKO4jMGTI.XxPzL/0wF66XVVk/', 'giddy@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-04-16 16:49:55', '2014-05-12 10:39:01'),
(9, 'susana', '$P$BnwBAvxBwXYxoeRkOLVA4v10EHglBy/', 'susana@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 16:50:35', '2014-05-09 13:53:30'),
(10, 'vivian', '$P$BZLQEAb7Fc/U0GIFc0/hj529DzSXF41', 'vivian@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 16:50:58', '2014-05-09 13:53:32'),
(11, 'sarah', '$P$B.gZT9.gbWz9gNVa5S6tbpZGmdOnXX/', 'sarah@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 16:51:16', '2014-05-09 13:53:35'),
(12, 'wilson', '$P$BA.ejz7tkVJDUFKZ6Rw3.vC9i2C1ui0', 'wilson@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 16:51:38', '2014-05-09 13:53:38'),
(13, 'cecilia', '$P$BUPcXTDMmd/.FjZMuCOeuX3IfjLYQ/1', 'cecilia@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 16:52:00', '2014-05-09 13:53:40'),
(14, 'jacob', '$P$BUjWXE0ZkHXUbLjlL6ls5f8hAw8M.W0', 'jacob@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 16:52:21', '2014-05-09 13:53:43'),
(15, 'irene', '$P$BQpoH/4gsohSQ6MFzg7ueyvLyIaj3r.', 'rene@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-05-14 09:01:57', '2014-05-09 16:52:41', '2014-05-14 06:01:57'),
(16, 'eliza', '$P$Bjuw0djqomPEUSR9r2sXYJymTEaDnm1', 'eliza@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 16:59:58', '2014-05-09 13:59:58'),
(17, 'kriesi', '$P$BSoQuqEw.PEKPUQF96WjRup6LkeZAD.', 'kriesi@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 17:00:24', '2014-05-09 14:00:24'),
(18, 'joanne', '$P$B2KITXYB/zSiSe27WgYufTqJql1PjC1', 'juana@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 17:00:52', '2014-05-09 14:00:52'),
(19, 'erick', '$P$BEGDapuyiGVsp8ehYXV/hFFpO0dkLA/', 'erick@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 17:01:13', '2014-05-09 14:01:13'),
(20, 'obama', '$P$B3owJCh7HmJLe8tlD.md3oUQ74sKzT/', 'oobama@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-12 13:33:19', '2014-05-12 10:33:19'),
(21, 'bush', '$P$B/VPhTcshYpxsc57IpnOFnfJWBJ5NX.', 'bush@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-12 13:36:32', '2014-05-12 10:36:32'),
(22, 'kony', '$P$B1TnACEsolMvLw15GmxliMeWFo4ZXX1', 'kony@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-12 14:27:35', '2014-05-14 06:09:10'),
(23, 'bernard', '$P$B0Ke81CPAq/L5wR641HgD6n4FVS08A.', 'ben@me.com.au', 6, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-12 15:05:05', '2014-05-14 05:59:02'),
(24, 'suarez', '$P$BieWRuiPcmicCHswgkkLvzaXA2bdQt/', 'suarez@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-06-25 19:49:21', '2014-06-25 16:49:21'),
(25, 'ones', '$P$BjxNeLjG9dM0Dkz4QbPD5Ftqxrl4.5/', 'ones@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-06-27 10:10:42', '2014-06-27 07:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `fx_user_autologin`
--

CREATE TABLE IF NOT EXISTS `fx_user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fx_account_details`
--
ALTER TABLE `fx_account_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fx_activities`
--
ALTER TABLE `fx_activities`
 ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `fx_bugs`
--
ALTER TABLE `fx_bugs`
 ADD PRIMARY KEY (`bug_id`), ADD UNIQUE KEY `issue_ref` (`issue_ref`);

--
-- Indexes for table `fx_bug_comments`
--
ALTER TABLE `fx_bug_comments`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `fx_bug_files`
--
ALTER TABLE `fx_bug_files`
 ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `fx_ci_session`
--
ALTER TABLE `fx_ci_session`
 ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `fx_comments`
--
ALTER TABLE `fx_comments`
 ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `fx_comment_replies`
--
ALTER TABLE `fx_comment_replies`
 ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `fx_config`
--
ALTER TABLE `fx_config`
 ADD PRIMARY KEY (`key`);

--
-- Indexes for table `fx_contacts`
--
ALTER TABLE `fx_contacts`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `fx_countries`
--
ALTER TABLE `fx_countries`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `fx_estimates`
--
ALTER TABLE `fx_estimates`
 ADD PRIMARY KEY (`est_id`), ADD UNIQUE KEY `reference_no` (`reference_no`);

--
-- Indexes for table `fx_estimate_items`
--
ALTER TABLE `fx_estimate_items`
 ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `fx_faqs`
--
ALTER TABLE `fx_faqs`
 ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `fx_files`
--
ALTER TABLE `fx_files`
 ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `fx_invoices`
--
ALTER TABLE `fx_invoices`
 ADD PRIMARY KEY (`inv_id`), ADD UNIQUE KEY `reference_no` (`reference_no`);

--
-- Indexes for table `fx_items`
--
ALTER TABLE `fx_items`
 ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `fx_items_saved`
--
ALTER TABLE `fx_items_saved`
 ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `fx_login_attempts`
--
ALTER TABLE `fx_login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fx_messages`
--
ALTER TABLE `fx_messages`
 ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `fx_news`
--
ALTER TABLE `fx_news`
 ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `fx_payments`
--
ALTER TABLE `fx_payments`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `fx_payment_methods`
--
ALTER TABLE `fx_payment_methods`
 ADD PRIMARY KEY (`method_id`);

--
-- Indexes for table `fx_posts`
--
ALTER TABLE `fx_posts`
 ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `fx_projects`
--
ALTER TABLE `fx_projects`
 ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `fx_project_timer`
--
ALTER TABLE `fx_project_timer`
 ADD PRIMARY KEY (`timer_id`);

--
-- Indexes for table `fx_ratings`
--
ALTER TABLE `fx_ratings`
 ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `fx_ref_country`
--
ALTER TABLE `fx_ref_country`
 ADD PRIMARY KEY (`alpha2`), ADD UNIQUE KEY `alpha3` (`alpha3`);

--
-- Indexes for table `fx_roles`
--
ALTER TABLE `fx_roles`
 ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `fx_tasks`
--
ALTER TABLE `fx_tasks`
 ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `fx_tasks_timer`
--
ALTER TABLE `fx_tasks_timer`
 ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `fx_un_sessions`
--
ALTER TABLE `fx_un_sessions`
 ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `fx_users`
--
ALTER TABLE `fx_users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `fx_user_autologin`
--
ALTER TABLE `fx_user_autologin`
 ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fx_account_details`
--
ALTER TABLE `fx_account_details`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `fx_activities`
--
ALTER TABLE `fx_activities`
MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `fx_bugs`
--
ALTER TABLE `fx_bugs`
MODIFY `bug_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fx_bug_comments`
--
ALTER TABLE `fx_bug_comments`
MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fx_bug_files`
--
ALTER TABLE `fx_bug_files`
MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fx_comments`
--
ALTER TABLE `fx_comments`
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `fx_comment_replies`
--
ALTER TABLE `fx_comment_replies`
MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fx_contacts`
--
ALTER TABLE `fx_contacts`
MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `fx_countries`
--
ALTER TABLE `fx_countries`
MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fx_estimates`
--
ALTER TABLE `fx_estimates`
MODIFY `est_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fx_estimate_items`
--
ALTER TABLE `fx_estimate_items`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `fx_faqs`
--
ALTER TABLE `fx_faqs`
MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `fx_files`
--
ALTER TABLE `fx_files`
MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `fx_invoices`
--
ALTER TABLE `fx_invoices`
MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `fx_items`
--
ALTER TABLE `fx_items`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `fx_items_saved`
--
ALTER TABLE `fx_items_saved`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fx_login_attempts`
--
ALTER TABLE `fx_login_attempts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fx_messages`
--
ALTER TABLE `fx_messages`
MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `fx_news`
--
ALTER TABLE `fx_news`
MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fx_payments`
--
ALTER TABLE `fx_payments`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `fx_payment_methods`
--
ALTER TABLE `fx_payment_methods`
MODIFY `method_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fx_posts`
--
ALTER TABLE `fx_posts`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fx_projects`
--
ALTER TABLE `fx_projects`
MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fx_project_timer`
--
ALTER TABLE `fx_project_timer`
MODIFY `timer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fx_ratings`
--
ALTER TABLE `fx_ratings`
MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fx_roles`
--
ALTER TABLE `fx_roles`
MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `fx_tasks`
--
ALTER TABLE `fx_tasks`
MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fx_tasks_timer`
--
ALTER TABLE `fx_tasks_timer`
MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fx_users`
--
ALTER TABLE `fx_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
