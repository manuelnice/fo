-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2014 at 07:03 PM
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
  `icon` varchar(32) DEFAULT 'fa-coffee',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

--
-- Dumping data for table `fx_activities`
--

INSERT INTO `fx_activities` (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES
(1, 1, 'bugs', 3, 'Logged in from 127.0.0.1', '2014-02-26 14:40:59', 'fa-coffee', 0),
(2, 1, 'invoices', 1, 'Uploaded a file to a <a class="text-info" href="projects/3">Project</a>', '2014-02-26 14:40:59', 'fa-coffee', 0),
(3, 2, 'projects', 5, 'Added a new <a class="text-info" href="tasks/3">Task</a>', '2014-03-31 06:23:51', 'fa-coffee', 0),
(4, 2, 'bugs', 1, 'Sent you a <a class="text-info" href="messages/3">message</a>', '2014-03-31 06:24:55', 'fa-coffee', 0),
(5, 2, 'estimates', 1, 'Admin created estimate #129464', '2014-03-31 06:53:41', 'fa-coffee', 0),
(6, 1, 'bugs', 3, 'Added an Issue #5644', '2014-05-12 17:42:05', 'fa-coffee', 0),
(7, 1, 'payments', 2, 'Edited a user information', '2014-05-12 17:43:03', 'fa-coffee', 0),
(8, 1, 'general', 3, 'Edited a user information', '2014-05-14 05:58:00', 'fa-coffee', 0),
(9, 1, 'invoices', 3, 'Edited a user information', '2014-05-14 05:59:02', 'fa-coffee', 0),
(10, 2, 'bugs', 3, 'Assigned Issue #5467 to a user and marked as In Progress', '2014-05-14 06:09:10', 'fa-coffee', 0),
(11, 1, 'bugs', 3, 'Marked Issue #5467 as Resolved', '2014-06-29 15:04:23', 'fa-coffee', 0),
(12, 1, 'bugs', 3, 'Assigned Issue #5467 to a user and marked as In Progress', '2014-06-29 15:08:53', 'fa-coffee', 0),
(13, 1, 'invoices', 7, 'Payment of USD 15 received by admin', '2014-06-29 15:15:35', 'fa-coffee', 0),
(14, 1, 'invoices', 7, 'Payment of USD 100 received and applied to INVOICE 884439', '2014-06-29 15:19:10', 'fa-coffee', 0),
(15, 1, 'invoices', 8, 'INVOICE #418115 created.', '2014-06-29 15:21:26', 'fa-coffee', 0),
(16, 1, 'invoices', 8, 'INVOICE #418115marked as Sent', '2014-06-29 15:49:51', 'fa-coffee', 0),
(17, 1, 'projects', 2, 'Added a comment to Project #765546', '2014-07-04 16:43:23', 'fa-coffee', 0),
(18, 1, 'projects', 1, 'Admin edited a project #343253', '2014-07-05 13:56:44', 'fa-coffee', 0),
(19, 1, 'projects', 1, 'Admin edited a project #343253', '2014-07-05 13:59:02', 'fa-coffee', 0),
(20, 1, 'projects', 2, 'Admin edited a project #765546', '2014-07-05 14:47:55', 'fa-coffee', 0),
(21, 1, 'projects', 2, 'Admin edited a project #765546', '2014-07-05 14:48:31', 'fa-coffee', 0),
(22, 3, 'projects', 2, 'Replied to a comment', '2014-07-06 11:15:13', 'fa-coffee', 0),
(23, 1, 'projects', 7, 'Added a comment to Project #84952', '2014-07-07 07:51:35', 'fa-coffee', 0),
(24, 1, 'invoices', 1, 'Payment of USD 16 received and applied to INVOICE #923852', '2014-07-07 07:56:57', 'fa-coffee', 0),
(25, 1, 'projects', 0, 'admin deleted a file ', '2014-07-10 15:33:13', 'fa-coffee', 0),
(26, 1, 'projects', 0, 'admin deleted a file PRO-84952.png', '2014-07-10 15:34:49', 'fa-coffee', 0),
(27, 1, 'projects', 0, 'admin deleted a file Freelancer-PROJECT-84952.png', '2014-07-10 15:36:35', 'fa-coffee', 0),
(28, 1, 'projects', 7, 'admin deleted a file FREELANCER-PROJECT-849522.png', '2014-07-10 15:38:12', 'fa-coffee', 0),
(29, 1, 'projects', 7, 'Admin deleted a file FREELANCER-PROJECT-84952_.png', '2014-07-10 15:39:31', 'fa-coffee', 0),
(30, 1, 'projects', 7, 'Admin deleted a file FREELANCER-PROJECT-849521.png', '2014-07-10 15:40:27', 'fa-coffee', 0),
(31, 1, 'projects', 1, 'Admin deleted a file register.png', '2014-07-10 16:18:44', 'fa-coffee', 0),
(32, 1, 'projects', 1, 'Admin deleted a file manager2.png', '2014-07-10 16:18:53', 'fa-coffee', 0),
(33, 1, 'projects', 2, 'Admin deleted a file 8-iPhone-app-designs-UI.jpg', '2014-07-10 16:23:22', 'fa-coffee', 0),
(34, 1, 'projects', 2, 'Admin deleted a file login.png', '2014-07-10 16:23:30', 'fa-coffee', 0),
(35, 1, 'projects', 2, 'Admin deleted a file clerk1.png', '2014-07-10 16:23:38', 'fa-coffee', 0),
(36, 1, 'projects', 3, 'Added a comment to Project #46483', '2014-07-10 17:06:42', 'fa-coffee', 0),
(37, 1, 'projects', 3, 'Admin edited a project #46483', '2014-07-10 17:11:32', 'fa-coffee', 0),
(38, 1, 'projects', 3, 'Admin edited a project #46483', '2014-07-10 17:12:08', 'fa-coffee', 0),
(39, 1, 'projects', 8, 'Admin created a project #66396', '2014-07-11 16:55:29', 'fa-coffee', 0),
(40, 1, 'projects', 8, 'Added a comment to Project #66396', '2014-07-11 17:10:29', 'fa-comment', 0),
(41, 1, 'projects', 8, 'Admin added a file FREELANCER-PROJECT-66396-0.jpg', '2014-07-11 17:15:17', 'fa-file', 0),
(42, 1, 'projects', 8, 'Admin deleted a file FREELANCER-PROJECT-66396-0.jpg', '2014-07-11 17:15:59', 'fa-times', 0),
(43, 1, 'projects', 8, 'Admin edited a project #66396', '2014-07-12 06:44:44', 'fa-coffee', 0),
(44, 1, 'projects', 8, 'Added a task Fix Local Environment Bug', '2014-07-12 07:03:09', 'fa-tasks', 0),
(45, 1, 'projects', 8, 'Edited a task Fix Local Environment Bug', '2014-07-12 07:03:57', 'fa-tasks', 0),
(46, 1, 'projects', 8, 'Admin edited a project #66396', '2014-07-12 08:16:11', 'fa-coffee', 0),
(47, 1, 'projects', 8, 'Admin edited a project #66396', '2014-07-12 08:25:39', 'fa-coffee', 0),
(48, 1, 'projects', 8, 'Admin edited a project #66396', '2014-07-12 08:32:17', 'fa-coffee', 0),
(49, 1, 'projects', 8, 'Admin added a file FREELANCER-PROJECT-66396-0.png', '2014-07-12 08:33:33', 'fa-file', 0),
(50, 1, 'projects', 8, 'Edited a task Fix Local Environment Bug', '2014-07-12 08:35:12', 'fa-tasks', 0),
(51, 1, 'projects', 8, 'Added a task Sliding Menu', '2014-07-12 08:57:13', 'fa-tasks', 0),
(52, 1, 'projects', 8, 'Added a task Responsive Footer', '2014-07-12 08:57:59', 'fa-tasks', 0),
(53, 1, 'projects', 1, 'Added a task Sticky Glowing Menu', '2014-07-12 11:30:45', 'fa-tasks', 0),
(54, 1, 'projects', 4, 'Added a task Logout Error fix DB', '2014-07-12 14:29:00', 'fa-tasks', 0),
(55, 1, 'projects', 5, 'Added a task Responsive Footer', '2014-07-12 14:30:14', 'fa-tasks', 0),
(56, 1, 'projects', 5, 'Added a task Sticky Glowing Menu', '2014-07-12 14:30:31', 'fa-tasks', 0),
(57, 1, 'projects', 7, 'Added a task Upload a sample project', '2014-07-18 16:07:03', 'fa-tasks', 0),
(58, 1, 'projects', 7, 'Edited a task New Bootstrap 3 Template', '2014-07-18 16:10:26', 'fa-tasks', 0),
(59, 1, 'projects', 7, 'Edited a task New Bootstrap 3 Template', '2014-07-18 16:10:43', 'fa-tasks', 0),
(60, 1, 'invoices', 9, 'INVOICE #869575 created.', '2014-07-20 15:19:51', 'fa-coffee', 0),
(61, 1, 'invoices', 9, 'Payment of USD 40 received and applied to INVOICE #869575', '2014-07-20 15:21:33', 'fa-coffee', 0),
(62, 1, 'invoices', 10, 'INVOICE #848322 created.', '2014-07-20 15:26:21', 'fa-coffee', 1),
(63, 1, 'invoices', 10, 'Payment of USD 60 received and applied to INVOICE #848322', '2014-07-20 15:33:50', 'fa-coffee', 1),
(64, 1, 'invoices', 1, 'Sent Invoice Reminder to client', '2014-07-20 15:38:58', 'fa-sales', 0),
(65, 1, 'invoices', 10, 'Admin edited INVOICE #848322', '2014-07-20 17:05:42', 'fa-coffee', 1),
(66, 1, 'invoices', 10, 'Admin edited INVOICE #848322', '2014-07-20 17:06:26', 'fa-coffee', 1),
(67, 1, 'invoices', 10, 'Admin edited INVOICE #848322', '2014-07-20 17:07:25', 'fa-coffee', 1),
(68, 1, 'invoices', 4, 'Admin edited INVOICE #129464', '2014-07-20 17:47:55', 'fa-coffee', 0),
(69, 1, 'invoices', 11, 'INVOICE #185387 created.', '2014-07-23 15:36:13', 'fa-plus', 0),
(70, 1, 'invoices', 11, 'INVOICE #185387 marked as Sent', '2014-07-23 15:37:37', 'fa-envelope', 0),
(71, 1, 'invoices', 11, 'Sent Invoice Reminder to client', '2014-07-23 15:37:52', 'fa-sales', 0),
(72, 1, 'invoices', 11, 'Sent Invoice Reminder to client', '2014-07-23 15:39:27', 'fa-shopping-cart', 0),
(73, 1, 'invoices', 11, 'Admin edited INVOICE #185387', '2014-07-23 15:39:54', 'fa-pencil', 0),
(74, 1, 'invoices', 11, 'Payment of USD 52.5 received and applied to INVOICE #185387', '2014-07-23 15:42:57', 'fa-usd', 0),
(75, 1, 'invoices', 12, 'INVOICE #356413 created.', '2014-07-23 15:53:47', 'fa-plus', 0),
(76, 1, 'estimates', 4, 'Admin edited ESTIMATE #129464', '2014-07-26 15:08:56', 'fa-pencil', 1),
(77, 1, 'estimates', 4, 'Admin edited ESTIMATE #129464', '2014-07-26 15:12:16', 'fa-pencil', 1),
(78, 1, 'estimates', 4, 'ESTIMATE #129464 Sent', '2014-07-26 16:06:29', 'fa-envelope', 1),
(79, 1, 'estimates', 4, 'ESTIMATE #129464 Sent', '2014-07-26 16:07:26', 'fa-envelope', 1),
(80, 1, 'invoices', 11, 'INVOICE #185387 marked as Sent', '2014-07-26 16:11:42', 'fa-envelope', 0),
(81, 1, 'estimates', 4, 'ESTIMATE #129464 marked as Sent', '2014-07-26 16:11:50', 'fa-envelope', 1),
(82, 1, 'estimates', 6, 'Estimate #729633 created.', '2014-07-27 05:38:32', 'fa-plus', 0),
(83, 1, 'estimates', 6, 'Admin edited ESTIMATE #729633', '2014-07-27 05:41:39', 'fa-pencil', 0),
(84, 1, 'estimates', 1, 'Admin edited ESTIMATE #923852', '2014-07-27 06:04:56', 'fa-pencil', 0),
(85, 1, 'estimates', 3, 'Admin edited ESTIMATE #673957', '2014-07-27 06:05:18', 'fa-pencil', 0),
(86, 1, 'estimates', 3, 'Admin edited ESTIMATE #673957', '2014-07-27 06:05:58', 'fa-pencil', 0),
(87, 1, 'estimates', 3, 'Admin edited ESTIMATE #673957', '2014-07-27 06:07:26', 'fa-pencil', 0),
(88, 1, 'estimates', 7, 'Estimate #193461 created.', '2014-07-27 06:10:47', 'fa-plus', 0),
(89, 1, 'estimates', 8, 'Estimate #754365 created.', '2014-07-27 06:15:05', 'fa-plus', 0),
(90, 1, 'estimates', 8, 'ESTIMATE #754365 marked as Sent', '2014-07-27 06:17:18', 'fa-envelope', 0),
(91, 1, 'estimates', 7, 'Converted EST #193461 to Invoice', '2014-07-27 06:46:47', 'fa-laptop', 0),
(92, 1, 'estimates', 9, 'Estimate #191885 created.', '2014-07-27 06:47:35', 'fa-plus', 0),
(93, 1, 'estimates', 9, 'Converted EST #191885 to Invoice', '2014-07-27 06:48:05', 'fa-laptop', 0),
(94, 1, 'estimates', 9, 'ESTIMATE #191885 marked as Sent', '2014-07-27 06:48:37', 'fa-envelope', 0),
(95, 1, 'estimates', 10, 'Estimate #665175 created.', '2014-07-27 06:51:39', 'fa-plus', 0),
(96, 1, 'estimates', 10, 'ESTIMATE #665175 marked as Sent', '2014-07-27 06:51:59', 'fa-envelope', 0),
(97, 1, 'estimates', 10, 'Converted EST #665175 to Invoice', '2014-07-27 06:52:12', 'fa-laptop', 0),
(98, 1, 'invoices', 17, 'Converted EST #665175 to Invoice', '2014-07-27 06:52:12', 'fa-laptop', 0),
(99, 1, 'estimates', 1, 'EST #923852 marked as declined', '2014-07-27 12:39:28', 'fa-paperclip', 0),
(100, 1, 'estimates', 1, 'EST #923852 marked as accepted', '2014-07-27 12:40:07', 'fa-paperclip', 0),
(101, 1, 'estimates', 1, 'EST #923852 marked as declined', '2014-07-27 12:40:18', 'fa-paperclip', 0),
(102, 1, 'estimates', 1, 'Estimate #427174 created.', '2014-07-27 12:42:08', 'fa-plus', 0),
(103, 1, 'estimates', 2, 'Estimate #734922 created.', '2014-07-27 12:42:53', 'fa-plus', 0),
(104, 1, 'estimates', 3, 'Estimate #574873 created.', '2014-07-27 12:44:00', 'fa-plus', 0),
(105, 1, 'estimates', 3, 'ESTIMATE #574873 marked as Sent', '2014-07-27 12:44:57', 'fa-envelope', 0),
(106, 1, 'estimates', 4, 'Estimate #882252 created.', '2014-07-27 12:45:28', 'fa-plus', 0),
(107, 1, 'estimates', 4, 'ESTIMATE #882252 marked as Sent', '2014-07-27 12:46:32', 'fa-envelope', 0),
(108, 1, 'estimates', 4, 'EST #882252 marked as declined', '2014-07-27 12:49:49', 'fa-paperclip', 0),
(109, 1, 'estimates', 4, 'EST #882252 marked as accepted', '2014-07-27 12:50:39', 'fa-paperclip', 0),
(110, 1, 'estimates', 4, 'Converted EST #882252 to Invoice', '2014-07-27 12:51:16', 'fa-laptop', 0),
(111, 1, 'invoices', 19, 'Converted EST #882252 to Invoice', '2014-07-27 12:51:16', 'fa-laptop', 0),
(112, 1, 'estimates', 5, 'Estimate #993223 created.', '2014-07-27 12:58:52', 'fa-plus', 0),
(113, 1, 'estimates', 1, 'ESTIMATE #427174 marked as Sent', '2014-07-27 12:59:57', 'fa-envelope', 0),
(114, 1, 'estimates', 1, 'EST #427174 marked as accepted', '2014-07-27 13:00:14', 'fa-paperclip', 0),
(115, 1, 'invoices', 19, 'Payment of USD 1003.16 received and applied to INVOICE #882252', '2014-07-28 15:57:53', 'fa-usd', 0),
(116, 1, 'invoices', 17, 'Payment of USD 39.27 received and applied to INVOICE #665175', '2014-07-28 16:13:24', 'fa-usd', 0),
(117, 1, 'invoices', 1, 'INVOICE #923852 marked as Sent', '2014-07-28 16:15:56', 'fa-envelope', 0),
(118, 1, 'invoices', 1, 'Payment of USD 7216 received and applied to INVOICE #923852', '2014-07-28 16:16:11', 'fa-usd', 0),
(119, 1, 'invoices', 10, 'Payment of USD 15 received and applied to INVOICE #848322', '2014-07-28 17:07:49', 'fa-usd', 0),
(120, 1, 'invoices', 10, 'Payment of USD 500 received and applied to INVOICE #848322', '2014-07-28 17:08:06', 'fa-usd', 0),
(121, 1, 'projects', 8, 'Edited a task Fix Local Environment Bug', '2014-07-28 17:14:19', 'fa-tasks', 0),
(122, 1, 'bugs', 3, 'Marked Issue #5467 as Confirmed', '2014-07-28 17:19:33', 'fa-coffee', 0);

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
(1, 3445, 2, 2, 1, 'In Progress', 'High', 'I can''t see anything when i click the menu bar.', '2014-05-10 21:00:00', 1, '2014-05-14 00:00:00'),
(2, 3447, 1, 17, 0, 'In Progress', 'Critical', 'The tax calculation is incorrect', '2014-05-12 21:00:00', 2, '2014-05-11 17:27:54'),
(3, 5467, 2, 12, 23, 'Confirmed', 'Medium', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven''t heard of them accusamus labore sustainable Daisy', '2014-05-14 13:51:06', 3, '2014-06-14 15:06:40'),
(5, 5468, 2, 14, 23, 'In Progress', 'Medium', 'Issue Description', '2014-07-29 13:51:06', 4, '2014-05-11 16:51:06');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

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
(14, 7, 1, 'Hey', '2014-06-16 13:25:05', 'No'),
(15, 2, 1, 'That was my awesome comment', '2014-07-04 16:43:23', 'No'),
(16, 7, 1, 'Fix issue #2390', '2014-07-07 07:51:34', 'No'),
(17, 3, 1, 'Lets check out this comment', '2014-07-10 17:06:42', 'No'),
(18, 8, 1, 'First comment submitted', '2014-07-11 17:10:29', 'No');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fx_comment_replies`
--

INSERT INTO `fx_comment_replies` (`reply_id`, `parent_comment`, `reply_msg`, `replied_by`, `del`, `date_posted`) VALUES
(1, 1, 'Hello buddy?', 1, 'No', '2014-01-02 11:46:55'),
(2, 1, 'Thanks for the good work', 2, 'No', '2014-01-02 11:51:46'),
(3, 7, 'That div is not allowed', 2, 'No', '2014-01-02 19:34:04'),
(4, 4, 'I replied to this comment ', 1, 'No', '2014-07-06 11:15:13'),
(5, 16, 'This issue has been reported as a bug and will be fixed as soon as possible.', 1, 'No', '2014-07-10 16:16:47'),
(6, 14, 'This is my reply', 1, 'No', '2014-07-21 10:36:11');

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
('allowed_files', 'gif|jpg|png|pdf|doc|txt|docx'),
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
('email_estimate_message', 'Hi {CLIENT}\r\n\r\nThanks for your business enquiry. \r\n\r\nThe estimate EST {REF} is attached with this email. \r\nEstimate Overview:\r\nEstimate # : EST {REF}\r\nAmount: {CURRENCY} {AMOUNT}\r\n \r\nYou can view the estimate online at:\r\n{LINK}\r\n\r\nBest Regards,\r\n{COMPANY}'),
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
('version', '1.1'),
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
  `status` enum('Accepted','Declined','Pending') NOT NULL DEFAULT 'Pending',
  `date_sent` varchar(64) NOT NULL,
  `est_deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `emailed` enum('Yes','No') NOT NULL DEFAULT 'No',
  `invoiced` enum('Yes','No') DEFAULT 'No'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fx_estimates`
--

INSERT INTO `fx_estimates` (`est_id`, `reference_no`, `client`, `due_date`, `notes`, `status`, `date_sent`, `est_deleted`, `date_saved`, `emailed`, `invoiced`) VALUES
(1, '427174', '2', '13-08-2014', 'Looking forward to doing business with you.', 'Accepted', '2014-07-27 15:59:57', 'No', '2014-07-27 12:42:08', 'Yes', 'No'),
(2, '734922', '3', '21-08-2014', 'Looking forward to doing business with you.', 'Pending', '', 'No', '2014-07-27 12:42:53', 'No', 'No'),
(3, '574873', '12', '22-08-2014', 'Looking forward to doing business with you.', 'Pending', '2014-07-27 15:44:57', 'No', '2014-07-27 12:44:00', 'Yes', 'No'),
(4, '882252', '2', '22-08-2014', 'Looking forward to doing business with you.', 'Accepted', '2014-07-27 15:46:32', 'No', '2014-07-27 12:45:28', 'Yes', 'Yes'),
(5, '993223', '7', '23-08-2014', 'Looking forward to doing business with you.', 'Pending', '', 'No', '2014-07-27 12:58:52', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `fx_estimate_items`
--

CREATE TABLE IF NOT EXISTS `fx_estimate_items` (
`item_id` int(11) NOT NULL,
  `estimate_id` int(11) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `unit_cost` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_cost` float NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `fx_estimate_items`
--

INSERT INTO `fx_estimate_items` (`item_id`, `estimate_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES
(1, 1, 'Domain SSL Installation', 11.9, 3, 35.7, '2014-07-27 12:42:23'),
(2, 1, 'Email Setup', 20.3, 2, 40.6, '2014-07-27 12:42:34'),
(3, 2, 'Buy new domain', 11.9, 6, 71.4, '2014-07-27 12:43:06'),
(4, 2, 'Email Setup', 20.3, 1, 20.3, '2014-07-27 12:43:17'),
(5, 2, 'Email Marketing', 11.9, 3, 35.7, '2014-07-27 12:43:32'),
(6, 3, 'Wordpress Newsletter plugin', 350, 3, 1050, '2014-07-27 12:44:11'),
(7, 3, 'Domain SSL Installation', 60, 1, 60, '2014-07-27 12:44:25'),
(8, 4, 'Email Setup', 320, 2, 640, '2014-07-27 12:45:41'),
(9, 4, 'Domain SSL Installation', 60.98, 2, 121.96, '2014-07-27 12:46:00'),
(10, 4, 'Wordpress Newsletter plugin', 350, 3, 1050, '2014-07-27 12:46:16'),
(11, 5, 'Email Setup', 11.9, 6, 71.4, '2014-07-27 12:59:04');

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
  `description` text NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `fx_files`
--

INSERT INTO `fx_files` (`file_id`, `project`, `file_name`, `description`, `uploaded_by`, `date_posted`) VALUES
(13, 7, 'FREELANCER-PROJECT-84952_1.png', 'Description', 1, '2014-07-10 15:13:20'),
(14, 7, 'FREELANCER-PROJECT-84952-0.png', 'Description', 1, '2014-07-10 15:14:17'),
(15, 7, 'FREELANCER-PROJECT-84952-01.png', 'Description', 1, '2014-07-10 15:14:37'),
(16, 1, 'FREELANCER-PROJECT-343253-0.png', 'Description', 1, '2014-07-10 16:19:34'),
(17, 2, 'FREELANCER-PROJECT-765546-0.png', 'Description', 1, '2014-07-10 16:24:22'),
(18, 3, 'FREELANCER-PROJECT-46483-0.jpg', 'Description', 1, '2014-07-10 16:52:41'),
(20, 8, 'FREELANCER-PROJECT-66396-0.png', 'I adde the file here', 1, '2014-07-12 08:33:33');

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
  `allow_paypal` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `recurring` enum('Yes','No') NOT NULL DEFAULT 'No',
  `r_freq` int(11) NOT NULL DEFAULT '31',
  `status` enum('Unpaid','Paid') NOT NULL DEFAULT 'Unpaid',
  `archived` int(11) NOT NULL DEFAULT '0',
  `date_sent` varchar(64) NOT NULL,
  `inv_deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `emailed` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `fx_invoices`
--

INSERT INTO `fx_invoices` (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES
(1, '923852', '2', '31-08-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', 'No', 0, 'Unpaid', 0, '2014-07-28 19:15:56', 'No', '2014-05-31 09:28:25', 'Yes'),
(2, '659386', '2', '14-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-05-31 12:28:25', 'No', '2014-05-31 09:30:53', 'No'),
(3, '673957', '3', '07-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-06-25 19:18:22', 'No', '2014-05-31 09:31:53', 'Yes'),
(4, '129464', '4', '28-08-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', 'No', 0, 'Unpaid', 0, '2014-06-02 12:28:25', 'No', '2014-06-01 16:22:37', 'No'),
(5, '423291', '3', '10-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-06-24 19:03:57', 'No', '2014-06-02 14:28:49', 'Yes'),
(6, '222867', '22', '10-07-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '', 'No', '2014-06-22 10:11:12', 'No'),
(7, '884439', '11', '25-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-06-24 19:22:29', 'No', '2014-06-22 10:12:57', 'Yes'),
(8, '418115', '17', '24-07-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-06-29 18:49:51', 'No', '2014-06-29 15:21:26', 'Yes'),
(9, '869575', '9', '13-08-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', 'No', 0, 'Unpaid', 0, '', 'No', '2014-07-20 15:19:51', 'No'),
(10, '848322', '13', '16-08-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'No', 'Yes', 30, 'Unpaid', 0, '', 'No', '2014-07-20 15:26:21', 'No'),
(11, '185387', '8', '09-08-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', 'No', 7, 'Unpaid', 0, '2014-07-26 19:11:42', 'No', '2014-07-23 15:36:13', 'Yes'),
(12, '356413', '13', '06-08-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', 'No', 7, 'Unpaid', 0, '', 'No', '2014-07-23 15:53:47', 'No'),
(15, '193461', '3', '22-08-2014', 'Looking forward to doing business with you.', 'Yes', 'No', 31, 'Unpaid', 0, '', 'No', '2014-07-27 06:46:47', 'No'),
(16, '191885', '15', '28-08-2014', 'Looking forward to doing business with you.', 'Yes', 'No', 31, 'Unpaid', 0, '', 'No', '2014-07-27 06:48:05', 'No'),
(17, '665175', '14', '22-08-2014', 'Looking forward to doing business with you.', 'Yes', 'No', 31, 'Unpaid', 0, '', 'No', '2014-07-27 06:52:12', 'No'),
(19, '882252', '2', '22-08-2014', 'Looking forward to doing business with you.', 'Yes', 'No', 31, 'Unpaid', 0, '', 'No', '2014-07-27 12:51:16', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `fx_items`
--

CREATE TABLE IF NOT EXISTS `fx_items` (
`item_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `unit_cost` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_cost` float NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

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
(14, 8, 'Email Marketing', 50, 1, 50, '2014-06-29 15:21:50'),
(15, 8, 'Mailchimp Wordpress Plugin', 350, 1, 350, '2014-06-29 15:22:12'),
(16, 1, 'Wordpress Plugin', 100, 1, 100, '2014-07-07 07:56:01'),
(17, 1, 'Web Design http://sample.com', 3500, 1, 3500, '2014-07-10 17:17:27'),
(20, 5, 'Develop and Installation', 290, 1, 290, '2014-07-20 15:05:36'),
(22, 9, 'Joomla Theme', 200, 2, 400, '2014-07-20 15:20:05'),
(23, 9, 'Develop and Installation', 290, 2, 580, '2014-07-20 15:22:04'),
(30, 4, 'Joomla Theme', 200, 3, 600, '2014-07-20 17:47:27'),
(31, 9, 'Joomla Theme', 200, 2, 400, '2014-07-21 10:27:07'),
(32, 9, 'Buy new domain', 10, 1, 10, '2014-07-21 10:27:29'),
(33, 8, 'Web Development', 50, 1, 50, '2014-07-23 15:25:30'),
(34, 11, 'Setup the Main Theme Menu', 25, 3, 75, '2014-07-23 15:36:41'),
(35, 11, 'Wordpress Newsletter plugin', 350, 2, 700, '2014-07-23 15:37:10'),
(36, 12, 'Develop and Installation', 290, 6, 1740, '2014-07-23 15:53:57'),
(37, 10, 'Web Development', 50, 1, 50, '2014-07-23 15:57:05'),
(38, 10, 'Joomla Theme', 200, 3, 600, '2014-07-23 15:57:17'),
(39, 12, 'Footer Copyright', 45, 3, 135, '2014-07-25 16:28:29'),
(40, 13, 'Email Setup', 90, 1, 90, '2014-07-27 06:43:59'),
(41, 13, 'Domain SSL Installation', 100, 1, 100, '2014-07-27 06:43:59'),
(42, 13, 'Buy new domain', 12, 1, 12, '2014-07-27 06:43:59'),
(43, 13, 'Wordpress Newsletter plugin', 11.9, 1, 11.9, '2014-07-27 06:43:59'),
(44, 15, 'Email Setup', 90, 1, 90, '2014-07-27 06:46:47'),
(45, 15, 'Domain SSL Installation', 100, 1, 100, '2014-07-27 06:46:47'),
(46, 15, 'Buy new domain', 12, 1, 12, '2014-07-27 06:46:47'),
(47, 15, 'Wordpress Newsletter plugin', 11.9, 1, 11.9, '2014-07-27 06:46:47'),
(48, 16, 'Wordpress Newsletter plugin', 560, 3, 1680, '2014-07-27 06:48:05'),
(49, 17, 'Domain SSL Installation', 11.9, 3, 35.7, '2014-07-27 06:52:12'),
(50, 19, 'Email Setup', 320, 2, 640, '2014-07-27 12:51:16'),
(51, 19, 'Domain SSL Installation', 60.98, 2, 121.96, '2014-07-27 12:51:16'),
(52, 19, 'Wordpress Newsletter plugin', 350, 3, 1050, '2014-07-27 12:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `fx_items_saved`
--

CREATE TABLE IF NOT EXISTS `fx_items_saved` (
`item_id` int(11) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `unit_cost` int(11) NOT NULL,
  `deleted` enum('Yes','No') DEFAULT 'No'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fx_items_saved`
--

INSERT INTO `fx_items_saved` (`item_id`, `item_desc`, `unit_cost`, `deleted`) VALUES
(1, 'Web Development', 50, 'No'),
(2, 'Joomla Theme', 200, 'No'),
(3, 'Develop and Installation', 290, 'No'),
(4, 'Footer Copyright', 50, 'No'),
(7, 'Sliding Images', 130, 'No');

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
  `message` text NOT NULL,
  `status` enum('Read','Unread') NOT NULL DEFAULT 'Unread',
  `attached_file` varchar(100) NOT NULL,
  `date_received` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `fx_messages`
--

INSERT INTO `fx_messages` (`msg_id`, `user_to`, `user_from`, `message`, `status`, `attached_file`, `date_received`, `deleted`) VALUES
(1, 2, 1, '<p>Mr. Soe</p>\n		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>\n		<blockquote> <em>Morbi nec nunc condimentum, egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula. Nunc placerat purus quam, ac adipiscing arcu rutrum eu. Vestibulum adipiscing ut augue ut auctor. Vestibulum nec lorem imperdiet nibh mollis gravida ut a justo.\n			<br>\n			<br>Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis</em>\n		</blockquote>\n			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>\n			<p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\n			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>\n			<p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\n			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend</p>\n		<p>Best Regards\n		<br>Mical</p>', 'Read', '', '2013-08-21 07:59:40', 'No'),
(2, 2, 3, 'Please submit your assignments before the deadline', 'Read', '', '2014-03-15 15:13:02', 'No'),
(3, 1, 4, 'I just released some fixes to the Kabuportal ', 'Read', '', '2014-03-15 15:13:02', 'No'),
(4, 1, 5, 'Your assignment is late. You have 24 hours to submit', 'Read', '', '2014-03-15 15:14:55', 'No'),
(5, 4, 6, 'All Y4S2 students meet me every Friday at Comp Lab.', 'Read', '', '2014-03-15 15:14:55', 'Yes'),
(6, 1, 4, 'I got that covered buddy :)', 'Read', '', '2014-03-29 18:36:33', 'No'),
(7, 1, 4, 'Yieboo! It''s working mate :)', 'Read', '', '2014-03-29 18:38:00', 'No'),
(8, 1, 12, 'All Y4S2 students meet me every Friday at Comp Lab.', 'Read', '', '2014-03-29 19:09:31', 'No'),
(9, 1, 10, 'I replied to this mail :)', 'Read', '', '2014-03-29 19:18:13', 'No'),
(10, 4, 2, '<p>Mr. Soe</p>\r\n  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>\r\n  <blockquote> <em>Morbi nec nunc condimentum, egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula. Nunc placerat purus quam, ac adipiscing arcu rutrum eu. Vestibulum adipiscing ut augue ut auctor. Vestibulum nec lorem imperdiet nibh mollis gravida ut a justo.\r\n   <br>\r\n   <br>Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis</em>\r\n  </blockquote>\r\n   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>\r\n   <p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>\r\n   <p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend</p>\r\n  <p>Best Regards\r\n  <br>Mical</p>', 'Read', '', '2014-03-29 19:18:27', 'No'),
(11, 1, 14, 'Please send me your assignment.\r\n', 'Read', '', '2014-05-10 08:31:48', 'No'),
(12, 14, 1, 'Testing this message', 'Unread', '', '2014-07-13 15:05:35', 'No'),
(13, 14, 1, 'Checking this message', 'Unread', '', '2014-07-14 16:07:34', 'No'),
(14, 14, 1, 'Now send the email', 'Unread', '', '2014-07-14 16:08:25', 'Yes'),
(15, 24, 1, 'Was testing this message', 'Unread', '', '2014-07-18 17:23:22', 'No'),
(16, 1, 24, 'Was testing this message too', 'Read', '', '2014-07-18 17:34:22', 'No'),
(17, 24, 1, 'Thanks for getting back buddy', 'Unread', '', '2014-07-18 17:44:20', 'Yes'),
(18, 14, 1, 'I sent this message', 'Unread', '', '2014-07-20 08:27:34', 'Yes'),
(19, 20, 1, 'Hello Mr President i miss you', 'Unread', '', '2014-07-20 08:41:20', 'Yes'),
(20, 1, 20, 'Miss you too bastard', 'Read', '', '2014-07-20 08:43:20', 'No'),
(21, 14, 1, 'Hang on dude', 'Unread', '', '2014-07-20 08:44:35', 'Yes'),
(22, 24, 1, 'Hey u', 'Unread', '', '2014-07-20 08:46:51', 'Yes'),
(23, 24, 1, 'I got that sorted', 'Unread', '', '2014-07-20 08:47:38', 'Yes'),
(24, 20, 1, 'Hello carnivore', 'Unread', '', '2014-07-20 08:59:05', 'Yes'),
(25, 20, 1, 'Testing this hack', 'Unread', '', '2014-07-20 09:39:03', 'No'),
(26, 24, 1, 'Hey carnivore', 'Unread', '', '2014-07-21 10:32:42', 'No'),
(27, 5, 1, 'Hello Max Leshan?', 'Unread', '', '2014-07-28 17:18:20', 'No');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fx_payments`
--

INSERT INTO `fx_payments` (`p_id`, `invoice`, `paid_by`, `payment_method`, `amount`, `trans_id`, `notes`, `created_date`, `month_paid`, `year_paid`, `inv_deleted`) VALUES
(1, 19, 1, '1', 1003.16, '872741', '', '2014-06-28 15:57:53', '06', '2014', 'No'),
(2, 17, 1, '1', 39.27, '835818', '', '2014-07-28 16:13:24', '07', '2014', 'No'),
(3, 1, 1, '1', 7216, '874533', '', '2014-07-28 16:16:11', '07', '2014', 'No'),
(4, 10, 1, '2', 15, '729356', '', '2014-07-28 17:07:49', '07', '2014', 'No'),
(5, 10, 1, '1', 500, '782294', '', '2014-07-28 17:08:06', '07', '2014', 'No');

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
  `hourly_rate` int(11) NOT NULL DEFAULT '5',
  `progress` int(11) NOT NULL,
  `description` text NOT NULL,
  `assign_to` int(11) NOT NULL DEFAULT '1',
  `status` enum('On Hold','Active','Done') NOT NULL DEFAULT 'Active',
  `timer` enum('On','Off') NOT NULL DEFAULT 'Off',
  `timer_start` int(11) NOT NULL,
  `time_logged` int(11) NOT NULL,
  `proj_deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  `auto_progress` enum('TRUE','FALSE') NOT NULL DEFAULT 'FALSE',
  `estimate_hours` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `fx_projects`
--

INSERT INTO `fx_projects` (`project_id`, `project_code`, `project_title`, `client`, `start_date`, `due_date`, `hourly_rate`, `progress`, `description`, `assign_to`, `status`, `timer`, `timer_start`, `time_logged`, `proj_deleted`, `auto_progress`, `estimate_hours`, `date_created`) VALUES
(1, 343253, 'Codecanyon PHP Script', 2, '2014/05/09', '2014/07/09', 5, 67, 'Description', 1, 'Active', 'Off', 0, 99387, 'No', 'TRUE', 300, '2014-05-09 19:15:07'),
(2, 765546, 'Themeforest Wordpress', 2, '2014/05/09', '17-07-2014', 5, 80, 'Description', 1, 'Active', 'Off', 0, 55809, 'No', 'FALSE', 0, '2014-05-09 19:15:07'),
(3, 46483, 'Test Project', 2, '24-05-2014', '01-08-2014', 5, 63, 'Description', 1, 'Active', 'Off', 0, 57714, 'No', 'FALSE', 0, '2014-05-24 16:40:52'),
(4, 21735, 'Themeforest Bootstrap Theme db', 9, '24-05-2014', '06-06-2014', 5, 21, 'Description goes here', 1, 'Active', 'Off', 0, 316722, 'No', 'TRUE', 100, '2014-05-24 16:44:20'),
(5, 98946, 'Test Project 2', 2, '24-05-2014', '15-05-2014', 5, 59, 'Description db', 5, 'Active', 'Off', 0, 84653, 'No', 'TRUE', 50, '2014-05-24 16:44:56'),
(7, 84952, 'Codecanyon Script', 14, '26-05-2014', '18-06-2014', 5, 62, 'Project Description', 4, 'Active', 'Off', 0, 262842, 'No', 'FALSE', 0, '2014-05-26 16:19:56'),
(8, 66396, 'Wordpress Plugin Development', 6, '11-07-2014', '20-08-2014', 5, 61, 'CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP.', 1, 'Active', 'Off', 0, 677034, 'No', 'TRUE', 40, '2014-07-11 16:55:29');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `fx_project_timer`
--

INSERT INTO `fx_project_timer` (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES
(1, 2, '1404563147', '1404563173', '2014-07-02 15:48:06'),
(2, 1, '1404563147', '1404563173', '2014-07-05 12:26:13'),
(3, 1, '1404564042', '1404564351', '2014-07-05 12:45:51'),
(4, 1, '1404564765', '1404565179', '2014-07-05 12:59:39'),
(5, 1, '1404565206', '1404566421', '2014-07-05 13:20:21'),
(6, 1, '1404566469', '1404566563', '2014-07-05 13:22:43'),
(7, 2, '1404579536', '1404581506', '2014-07-05 17:31:46'),
(8, 7, '1404665858', '1404666031', '2014-07-06 17:00:31'),
(9, 1, '1404568778', '1404666058', '2014-07-06 17:00:58'),
(10, 7, '1404666093', '1404666577', '2014-07-06 17:09:37'),
(11, 2, '1404666404', '1404719405', '2014-07-07 07:50:05'),
(12, 3, '1404666339', '1404719553', '2014-07-07 07:52:33'),
(13, 7, '1404666597', '1404919962', '2014-07-09 15:32:42'),
(14, 5, '1405013904', '1405094057', '2014-07-11 15:54:17'),
(15, 8, '1405098980', '1405098989', '2014-07-11 17:16:29'),
(16, 8, '1405099781', '1405147440', '2014-07-12 06:44:00'),
(17, 4, '1405175295', '1405487517', '2014-07-16 05:11:57'),
(18, 8, '1405938192', '1405938205', '2014-07-21 10:23:25'),
(19, 8, '1405938214', '1406567567', '2014-07-28 17:12:47');

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
  `assigned_to` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `visible` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `progress` int(11) NOT NULL DEFAULT '0',
  `timer_status` enum('On','Off') NOT NULL DEFAULT 'Off',
  `start_time` int(11) NOT NULL,
  `estimated_hours` int(11) NOT NULL,
  `logged_time` int(11) NOT NULL DEFAULT '0',
  `auto_progress` enum('TRUE','FALSE') NOT NULL DEFAULT 'FALSE',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `fx_tasks`
--

INSERT INTO `fx_tasks` (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES
(1, 'Top Menu', 1, '["1","2","3"]', 'Task Description', 'Yes', 40, 'Off', 1404469117, 45, 3600, 'TRUE', '2014-05-09 05:09:48', 1),
(2, 'Bug Fixes', 2, '["1","2","3"]', 'Task Description', 'Yes', 20, 'Off', 1404469117, 60, 216000, 'TRUE', '2014-05-09 05:09:48', 1),
(3, 'Footer Menu', 2, '["1","2","3"]', 'Task Description', 'Yes', 100, 'Off', 0, 35, 2117, 'TRUE', '2014-05-14 05:09:48', 3),
(4, 'Logout Error fix DB', 2, '23', 'Task Description DB', 'Yes', 30, 'Off', 1404469117, 30, 300, 'TRUE', '2014-05-15 05:24:48', 1),
(5, 'Modal in Dashboard', 2, '23', 'Add documentation to the proposed system.', 'Yes', 80, 'Off', 0, 40, 72115, 'TRUE', '2014-07-04 18:03:54', 1),
(6, 'Modal in Dashboard 2', 2, '5', 'Create a prototype with Twitter Bootstrap 3 ', 'Yes', 50, 'Off', 0, 82, 136, 'TRUE', '2014-07-04 18:06:08', 1),
(7, 'Sliding Homepage ', 2, '4', '<ul>\r\n<li>Create unlimited amount of tasks for your Projects!</li>\r\n<li>Tasks can be sorted by tags which allow you to organize your tasks in an efficient way.\r\n</li>\r\n</ul>', 'Yes', 10, 'Off', 0, 20, 5329, 'TRUE', '2014-07-05 15:25:29', 1),
(8, 'New Bootstrap 3 Template', 7, '5', 'Create a new web template for Clientopia. Base colors should be black and green', 'Yes', 90, 'Off', 0, 2, 780970, 'FALSE', '2014-07-05 17:53:51', 1),
(9, 'Fix Local Environment Bug', 8, '4', 'CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP.', 'Yes', 10, 'On', 1406567634, 5, 2108, 'TRUE', '2014-07-12 07:03:08', 1),
(10, 'Sliding Menu', 8, '5', 'Description', 'Yes', 100, 'Off', 0, 2, 0, 'FALSE', '2014-07-12 08:57:12', 1),
(11, 'Responsive Footer', 8, '5', 'Description', 'Yes', 100, 'Off', 0, 1, 27, 'FALSE', '2014-07-12 08:57:59', 1),
(12, 'Sticky Glowing Menu', 1, '23', 'Description', 'Yes', 100, 'Off', 0, 1, 0, 'FALSE', '2014-07-12 11:30:44', 1),
(13, 'Logout Error fix DB', 4, '5', 'Description', 'Yes', 20, 'Off', 0, 2, 0, 'FALSE', '2014-07-12 14:28:58', 1),
(14, 'Responsive Footer', 5, '23', 'Description', 'Yes', 50, 'Off', 0, 1, 0, 'FALSE', '2014-07-12 14:30:13', 1),
(15, 'Sticky Glowing Menu', 5, '5', 'Description', 'Yes', 100, 'On', 1405175555, 1, 0, 'TRUE', '2014-07-12 14:30:31', 1),
(16, 'Upload a sample project', 7, '23', 'Description', 'Yes', 100, 'Off', 0, 1, 0, 'FALSE', '2014-07-18 16:07:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fx_tasks_timer`
--

CREATE TABLE IF NOT EXISTS `fx_tasks_timer` (
`timer_id` int(11) NOT NULL,
  `task` int(11) NOT NULL,
  `start_time` varchar(64) NOT NULL,
  `end_time` varchar(64) NOT NULL,
  `date_timed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `fx_tasks_timer`
--

INSERT INTO `fx_tasks_timer` (`timer_id`, `task`, `start_time`, `end_time`, `date_timed`) VALUES
(1, 6, '1404572653', '1404572757', '2014-07-05 15:05:57'),
(2, 6, '1404572811', '1404572840', '2014-07-05 15:07:20'),
(3, 6, '1404572996', '1404573015', '2014-07-05 15:10:15'),
(4, 6, '1404573131', '1404573219', '2014-07-05 15:13:39'),
(5, 5, '1404573126', '1404573241', '2014-07-05 15:14:01'),
(6, 3, '1404573137', '1404573254', '2014-07-05 15:14:14'),
(7, 7, '1404574110', '1404579439', '2014-07-05 16:57:19'),
(8, 8, '1404582839', '1404584219', '2014-07-05 18:16:59'),
(9, 8, '1404719583', '1404719592', '2014-07-07 07:53:12'),
(10, 9, '1405148676', '1405150784', '2014-07-12 07:39:44'),
(11, 8, '1404920060', '1405699641', '2014-07-18 16:07:21'),
(12, 11, '1406567600', '1406567627', '2014-07-28 17:13:47');

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
('c0677dbeeef60a92f56e0feeead102b8', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1424335780, ''),
('e2a7114b8c21183565d2cf773841111c', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', 1406653018, 'a:5:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"1";s:8:"username";s:5:"admin";s:7:"role_id";s:1:"1";s:6:"status";s:1:"1";}');

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
(1, 'admin', '$P$BjiONJAUmQ0v1Q/1pv20J1Jtl6IXew1', 'mandai.willy@gmail.com', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-07-29 18:13:20', '2014-02-26 14:18:04', '2014-07-29 15:13:20'),
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
 ADD PRIMARY KEY (`timer_id`);

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
MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=123;
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
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `fx_comment_replies`
--
ALTER TABLE `fx_comment_replies`
MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `fx_faqs`
--
ALTER TABLE `fx_faqs`
MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `fx_files`
--
ALTER TABLE `fx_files`
MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `fx_invoices`
--
ALTER TABLE `fx_invoices`
MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `fx_items`
--
ALTER TABLE `fx_items`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `fx_items_saved`
--
ALTER TABLE `fx_items_saved`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fx_login_attempts`
--
ALTER TABLE `fx_login_attempts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fx_messages`
--
ALTER TABLE `fx_messages`
MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `fx_news`
--
ALTER TABLE `fx_news`
MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fx_payments`
--
ALTER TABLE `fx_payments`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `fx_project_timer`
--
ALTER TABLE `fx_project_timer`
MODIFY `timer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
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
MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `fx_tasks_timer`
--
ALTER TABLE `fx_tasks_timer`
MODIFY `timer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `fx_users`
--
ALTER TABLE `fx_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
