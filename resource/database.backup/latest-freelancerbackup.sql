#
# TABLE STRUCTURE FOR: fx_account_details
#

DROP TABLE IF EXISTS fx_account_details;

CREATE TABLE `fx_account_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(160) DEFAULT NULL,
  `company` varchar(150) NOT NULL,
  `city` varchar(40) DEFAULT NULL,
  `country` varchar(32) DEFAULT NULL,
  `address` varchar(32) NOT NULL,
  `phone` int(11) NOT NULL,
  `language` varchar(40) DEFAULT 'english',
  `avatar` varchar(32) NOT NULL DEFAULT 'default_avatar.jpg',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (1, 1, 'Julian Max', 'Gitbench Inc.', 'Manchester', 'United Kingdom', '234 - 2130 Churchill Street', 2147483647, 'english', 'USER-ADMIN-AVATAR.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (2, 2, 'Willy Mandai', 'Gitbench Inc', 'Melbourne', 'Australia', '41-00100 Melbourne', 723924858, 'spanish', 'USER-CLIENT-AVATAR.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (3, 3, 'Rodney Martins', 'Sample Company', NULL, 'South Africa', '', 0, NULL, 'avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (4, 4, 'Mari Cruz', 'IBM Africa', 'Pretoria', 'South Africa', '23 Ollo Street', 723924858, 'english', 'USER-DAVES-AVATAR.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (5, 5, 'Max Leshan', 'Sample Company', 'Nairobi', 'South Africa', '', 723934868, NULL, 'avatar3.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (6, 6, NULL, 'Sample Company', NULL, 'South Africa', '', 0, NULL, 'avatar4.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (7, 7, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (8, 8, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (9, 9, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (10, 10, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (11, 11, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (12, 12, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (13, 13, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (14, 14, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (15, 15, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (16, 16, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (17, 17, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (18, 18, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (19, 19, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (20, 20, NULL, 'Sample Company', 'Nakuru', 'KE', '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (21, 21, NULL, 'Sample Company', NULL, NULL, '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (22, 22, 'Joseph Kony', 'Sample Company', 'Duala', NULL, '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (23, 23, 'Bernard Ngeno', 'Sample Company', 'Nakuru', NULL, '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (24, 24, NULL, '', NULL, NULL, '', 0, NULL, 'default_avatar.jpg');
INSERT INTO fx_account_details (`id`, `user_id`, `fullname`, `company`, `city`, `country`, `address`, `phone`, `language`, `avatar`) VALUES (25, 25, NULL, '', NULL, NULL, '', 0, NULL, 'default_avatar.jpg');


#
# TABLE STRUCTURE FOR: fx_activities
#

DROP TABLE IF EXISTS fx_activities;

CREATE TABLE `fx_activities` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `module` varchar(32) NOT NULL,
  `module_field_id` int(11) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `activity_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `icon` varchar(32) DEFAULT 'fa-coffee',
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=320 DEFAULT CHARSET=latin1;

INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (1, 1, 'bugs', 3, 'Logged in from 127.0.0.1', '2014-02-26 17:40:59', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (2, 1, 'invoices', 1, 'Uploaded a file to a <a class=\"text-info\" href=\"projects/3\">Project</a>', '2014-02-26 17:40:59', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (3, 2, 'projects', 5, 'Added a new <a class=\"text-info\" href=\"tasks/3\">Task</a>', '2014-03-31 09:23:51', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (4, 2, 'bugs', 1, 'Sent you a <a class=\"text-info\" href=\"messages/3\">message</a>', '2014-03-31 09:24:55', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (5, 2, 'estimates', 1, 'Admin created estimate #129464', '2014-03-31 09:53:41', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (6, 1, 'bugs', 1, 'Added an Issue #5644', '2014-05-12 20:42:05', 'fa-bug', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (7, 1, 'payments', 2, 'Edited a user information', '2014-05-12 20:43:03', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (8, 1, 'general', 3, 'Edited a user information', '2014-05-14 08:58:00', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (9, 1, 'invoices', 3, 'Edited a user information', '2014-05-14 08:59:02', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (10, 2, 'bugs', 1, 'Assigned Issue #5467 to a user and marked as In Progress', '2014-05-14 09:09:10', 'fa-envelope', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (11, 1, 'bugs', 1, 'Marked Issue #5467 as Resolved', '2014-06-29 18:04:23', 'fa-check', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (12, 1, 'bugs', 3, 'Assigned Issue #5467 to a user and marked as In Progress', '2014-06-29 18:08:53', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (13, 1, 'invoices', 7, 'Payment of USD 15 received by admin', '2014-06-29 18:15:35', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (14, 1, 'invoices', 7, 'Payment of USD 100 received and applied to INVOICE 884439', '2014-06-29 18:19:10', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (15, 1, 'invoices', 8, 'INVOICE #418115 created.', '2014-06-29 18:21:26', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (16, 1, 'invoices', 8, 'INVOICE #418115marked as Sent', '2014-06-29 18:49:51', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (17, 1, 'projects', 2, 'Added a comment to Project #765546', '2014-07-04 19:43:23', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (18, 1, 'projects', 1, 'Admin edited a project #343253', '2014-07-05 16:56:44', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (19, 1, 'projects', 1, 'Admin edited a project #343253', '2014-07-05 16:59:02', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (20, 1, 'projects', 2, 'Admin edited a project #765546', '2014-07-05 17:47:55', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (21, 1, 'projects', 2, 'Admin edited a project #765546', '2014-07-05 17:48:31', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (22, 3, 'projects', 2, 'Replied to a comment', '2014-07-06 14:15:13', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (23, 1, 'projects', 7, 'Added a comment to Project #84952', '2014-07-07 10:51:35', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (24, 1, 'invoices', 1, 'Payment of USD 16 received and applied to INVOICE #923852', '2014-07-07 10:56:57', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (25, 1, 'projects', 0, 'admin deleted a file ', '2014-07-10 18:33:13', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (26, 1, 'projects', 0, 'admin deleted a file PRO-84952.png', '2014-07-10 18:34:49', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (27, 1, 'projects', 0, 'admin deleted a file Freelancer-PROJECT-84952.png', '2014-07-10 18:36:35', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (28, 1, 'projects', 7, 'admin deleted a file FREELANCER-PROJECT-849522.png', '2014-07-10 18:38:12', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (29, 1, 'projects', 7, 'Admin deleted a file FREELANCER-PROJECT-84952_.png', '2014-07-10 18:39:31', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (30, 1, 'projects', 7, 'Admin deleted a file FREELANCER-PROJECT-849521.png', '2014-07-10 18:40:27', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (31, 1, 'projects', 1, 'Admin deleted a file register.png', '2014-07-10 19:18:44', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (32, 1, 'projects', 1, 'Admin deleted a file manager2.png', '2014-07-10 19:18:53', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (33, 1, 'projects', 2, 'Admin deleted a file 8-iPhone-app-designs-UI.jpg', '2014-07-10 19:23:22', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (34, 1, 'projects', 2, 'Admin deleted a file login.png', '2014-07-10 19:23:30', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (35, 1, 'projects', 2, 'Admin deleted a file clerk1.png', '2014-07-10 19:23:38', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (36, 1, 'projects', 3, 'Added a comment to Project #46483', '2014-07-10 20:06:42', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (37, 1, 'projects', 3, 'Admin edited a project #46483', '2014-07-10 20:11:32', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (38, 1, 'projects', 3, 'Admin edited a project #46483', '2014-07-10 20:12:08', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (39, 1, 'projects', 8, 'Admin created a project #66396', '2014-07-11 19:55:29', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (40, 1, 'projects', 8, 'Added a comment to Project #66396', '2014-07-11 20:10:29', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (41, 1, 'projects', 8, 'Admin added a file FREELANCER-PROJECT-66396-0.jpg', '2014-07-11 20:15:17', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (42, 1, 'projects', 8, 'Admin deleted a file FREELANCER-PROJECT-66396-0.jpg', '2014-07-11 20:15:59', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (43, 1, 'projects', 8, 'Admin edited a project #66396', '2014-07-12 09:44:44', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (44, 1, 'projects', 8, 'Added a task Fix Local Environment Bug', '2014-07-12 10:03:09', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (45, 1, 'projects', 8, 'Edited a task Fix Local Environment Bug', '2014-07-12 10:03:57', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (46, 1, 'projects', 8, 'Admin edited a project #66396', '2014-07-12 11:16:11', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (47, 1, 'projects', 8, 'Admin edited a project #66396', '2014-07-12 11:25:39', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (48, 1, 'projects', 8, 'Admin edited a project #66396', '2014-07-12 11:32:17', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (49, 1, 'projects', 8, 'Admin added a file FREELANCER-PROJECT-66396-0.png', '2014-07-12 11:33:33', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (50, 1, 'projects', 8, 'Edited a task Fix Local Environment Bug', '2014-07-12 11:35:12', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (51, 1, 'projects', 8, 'Added a task Sliding Menu', '2014-07-12 11:57:13', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (52, 1, 'projects', 8, 'Added a task Responsive Footer', '2014-07-12 11:57:59', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (53, 1, 'projects', 1, 'Added a task Sticky Glowing Menu', '2014-07-12 14:30:45', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (54, 1, 'projects', 4, 'Added a task Logout Error fix DB', '2014-07-12 17:29:00', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (55, 1, 'projects', 5, 'Added a task Responsive Footer', '2014-07-12 17:30:14', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (56, 1, 'projects', 5, 'Added a task Sticky Glowing Menu', '2014-07-12 17:30:31', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (57, 1, 'projects', 7, 'Added a task Upload a sample project', '2014-07-18 19:07:03', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (58, 1, 'projects', 7, 'Edited a task New Bootstrap 3 Template', '2014-07-18 19:10:26', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (59, 1, 'projects', 7, 'Edited a task New Bootstrap 3 Template', '2014-07-18 19:10:43', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (60, 1, 'invoices', 9, 'INVOICE #869575 created.', '2014-07-20 18:19:51', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (61, 1, 'invoices', 9, 'Payment of USD 40 received and applied to INVOICE #869575', '2014-07-20 18:21:33', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (62, 1, 'invoices', 10, 'INVOICE #848322 created.', '2014-07-20 18:26:21', 'fa-coffee', 1);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (63, 1, 'invoices', 10, 'Payment of USD 60 received and applied to INVOICE #848322', '2014-07-20 18:33:50', 'fa-coffee', 1);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (64, 1, 'invoices', 1, 'Sent Invoice Reminder to client', '2014-07-20 18:38:58', 'fa-sales', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (65, 1, 'invoices', 10, 'Admin edited INVOICE #848322', '2014-07-20 20:05:42', 'fa-coffee', 1);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (66, 1, 'invoices', 10, 'Admin edited INVOICE #848322', '2014-07-20 20:06:26', 'fa-coffee', 1);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (67, 1, 'invoices', 10, 'Admin edited INVOICE #848322', '2014-07-20 20:07:25', 'fa-coffee', 1);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (68, 1, 'invoices', 4, 'Admin edited INVOICE #129464', '2014-07-20 20:47:55', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (69, 1, 'invoices', 11, 'INVOICE #185387 created.', '2014-07-23 18:36:13', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (70, 1, 'invoices', 11, 'INVOICE #185387 marked as Sent', '2014-07-23 18:37:37', 'fa-envelope', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (71, 1, 'invoices', 11, 'Sent Invoice Reminder to client', '2014-07-23 18:37:52', 'fa-sales', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (72, 1, 'invoices', 11, 'Sent Invoice Reminder to client', '2014-07-23 18:39:27', 'fa-shopping-cart', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (73, 1, 'invoices', 11, 'Admin edited INVOICE #185387', '2014-07-23 18:39:54', 'fa-pencil', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (74, 1, 'invoices', 11, 'Payment of USD 52.5 received and applied to INVOICE #185387', '2014-07-23 18:42:57', 'fa-usd', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (75, 1, 'invoices', 12, 'INVOICE #356413 created.', '2014-07-23 18:53:47', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (76, 1, 'estimates', 4, 'Admin edited ESTIMATE #129464', '2014-07-26 18:08:56', 'fa-pencil', 1);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (77, 1, 'estimates', 4, 'Admin edited ESTIMATE #129464', '2014-07-26 18:12:16', 'fa-pencil', 1);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (78, 1, 'estimates', 4, 'ESTIMATE #129464 Sent', '2014-07-26 19:06:29', 'fa-envelope', 1);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (79, 1, 'estimates', 4, 'ESTIMATE #129464 Sent', '2014-07-26 19:07:26', 'fa-envelope', 1);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (80, 1, 'invoices', 11, 'INVOICE #185387 marked as Sent', '2014-07-26 19:11:42', 'fa-envelope', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (81, 1, 'estimates', 4, 'ESTIMATE #129464 marked as Sent', '2014-07-26 19:11:50', 'fa-envelope', 1);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (82, 1, 'estimates', 6, 'Estimate #729633 created.', '2014-07-27 08:38:32', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (83, 1, 'estimates', 6, 'Admin edited ESTIMATE #729633', '2014-07-27 08:41:39', 'fa-pencil', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (84, 1, 'estimates', 1, 'Admin edited ESTIMATE #923852', '2014-07-27 09:04:56', 'fa-pencil', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (85, 1, 'estimates', 3, 'Admin edited ESTIMATE #673957', '2014-07-27 09:05:18', 'fa-pencil', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (86, 1, 'estimates', 3, 'Admin edited ESTIMATE #673957', '2014-07-27 09:05:58', 'fa-pencil', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (87, 1, 'estimates', 3, 'Admin edited ESTIMATE #673957', '2014-07-27 09:07:26', 'fa-pencil', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (88, 1, 'estimates', 7, 'Estimate #193461 created.', '2014-07-27 09:10:47', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (89, 1, 'estimates', 8, 'Estimate #754365 created.', '2014-07-27 09:15:05', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (90, 1, 'estimates', 8, 'ESTIMATE #754365 marked as Sent', '2014-07-27 09:17:18', 'fa-envelope', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (91, 1, 'estimates', 7, 'Converted EST #193461 to Invoice', '2014-07-27 09:46:47', 'fa-laptop', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (92, 1, 'estimates', 9, 'Estimate #191885 created.', '2014-07-27 09:47:35', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (93, 1, 'estimates', 9, 'Converted EST #191885 to Invoice', '2014-07-27 09:48:05', 'fa-laptop', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (94, 1, 'estimates', 9, 'ESTIMATE #191885 marked as Sent', '2014-07-27 09:48:37', 'fa-envelope', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (95, 1, 'estimates', 10, 'Estimate #665175 created.', '2014-07-27 09:51:39', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (96, 1, 'estimates', 10, 'ESTIMATE #665175 marked as Sent', '2014-07-27 09:51:59', 'fa-envelope', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (97, 1, 'estimates', 10, 'Converted EST #665175 to Invoice', '2014-07-27 09:52:12', 'fa-laptop', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (98, 1, 'invoices', 17, 'Converted EST #665175 to Invoice', '2014-07-27 09:52:12', 'fa-laptop', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (99, 1, 'estimates', 1, 'EST #923852 marked as declined', '2014-07-27 15:39:28', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (100, 1, 'estimates', 1, 'EST #923852 marked as accepted', '2014-07-27 15:40:07', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (101, 1, 'estimates', 1, 'EST #923852 marked as declined', '2014-07-27 15:40:18', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (102, 1, 'estimates', 1, 'Estimate #427174 created.', '2014-07-27 15:42:08', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (103, 1, 'estimates', 2, 'Estimate #734922 created.', '2014-07-27 15:42:53', 'fa-plus', 1);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (104, 1, 'estimates', 3, 'Estimate #574873 created.', '2014-07-27 15:44:00', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (105, 1, 'estimates', 3, 'ESTIMATE #574873 marked as Sent', '2014-07-27 15:44:57', 'fa-envelope', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (106, 1, 'estimates', 4, 'Estimate #882252 created.', '2014-07-27 15:45:28', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (107, 1, 'estimates', 4, 'ESTIMATE #882252 marked as Sent', '2014-07-27 15:46:32', 'fa-envelope', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (108, 1, 'estimates', 4, 'EST #882252 marked as declined', '2014-07-27 15:49:49', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (109, 1, 'estimates', 4, 'EST #882252 marked as accepted', '2014-07-27 15:50:39', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (110, 1, 'estimates', 4, 'Converted EST #882252 to Invoice', '2014-07-27 15:51:16', 'fa-laptop', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (111, 1, 'invoices', 19, 'Converted EST #882252 to Invoice', '2014-07-27 15:51:16', 'fa-laptop', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (112, 1, 'estimates', 5, 'Estimate #993223 created.', '2014-07-27 15:58:52', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (113, 1, 'estimates', 1, 'ESTIMATE #427174 marked as Sent', '2014-07-27 15:59:57', 'fa-envelope', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (114, 1, 'estimates', 1, 'EST #427174 marked as accepted', '2014-07-27 16:00:14', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (115, 1, 'invoices', 19, 'Payment of USD 1003.16 received and applied to INVOICE #882252', '2014-07-28 18:57:53', 'fa-usd', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (116, 1, 'invoices', 17, 'Payment of USD 39.27 received and applied to INVOICE #665175', '2014-07-28 19:13:24', 'fa-usd', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (117, 1, 'invoices', 1, 'INVOICE #923852 marked as Sent', '2014-07-28 19:15:56', 'fa-envelope', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (118, 1, 'invoices', 1, 'Payment of USD 7216 received and applied to INVOICE #923852', '2014-07-28 19:16:11', 'fa-usd', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (119, 1, 'invoices', 10, 'Payment of USD 15 received and applied to INVOICE #848322', '2014-07-28 20:07:49', 'fa-usd', 1);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (120, 1, 'invoices', 10, 'Payment of USD 500 received and applied to INVOICE #848322', '2014-07-28 20:08:06', 'fa-usd', 1);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (121, 1, 'projects', 8, 'Edited a task Fix Local Environment Bug', '2014-07-28 20:14:19', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (122, 1, 'bugs', 3, 'Marked Issue #5467 as Confirmed', '2014-07-28 20:19:33', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (123, 1, 'projects', 8, 'Edited a task Fix Local Environment Bug', '2014-07-30 20:00:58', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (124, 1, 'projects', 8, 'Edited a task Sliding Menu', '2014-07-30 20:01:20', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (125, 1, 'projects', 3, 'Added a task Responsive Footer', '2014-07-31 10:01:29', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (126, 1, 'bugs', 6, 'Created an Issue #6822', '2014-08-02 19:02:33', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (127, 1, 'bugs', 7, 'Created an Issue #819554', '2014-08-02 19:14:27', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (128, 1, 'bugs', 7, 'Added a comment to a bug', '2014-08-03 12:43:10', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (129, 1, 'bugs', 7, 'Added a comment to a bug', '2014-08-03 12:43:31', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (130, 1, 'bugs', 7, 'Admin added a file FREELANCER-BUG-819554-0.jpg', '2014-08-03 14:16:31', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (131, 1, 'bugs', 7, 'Admin added a file FREELANCER-BUG-819554-01.jpg', '2014-08-03 14:19:13', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (132, 1, 'bugs', 6, 'Admin added a file FREELANCER-BUG-6822-0.jpg', '2014-08-03 15:04:10', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (133, 1, 'bugs', 6, 'Admin deleted a file FREELANCER-BUG-6822-0.jpg', '2014-08-03 15:17:13', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (134, 1, 'bugs', 5, 'Admin added a file FREELANCER-BUG-5468-0.jpg', '2014-08-03 15:19:02', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (135, 1, 'bugs', 8, 'Created an Issue #326188', '2014-08-03 15:22:01', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (136, 1, 'bugs', 7, 'Marked Issue #819554 as In Progress', '2014-08-03 16:31:28', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (137, 1, 'bugs', 7, 'Marked Issue #819554 as Confirmed', '2014-08-03 16:31:48', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (138, 1, 'bugs', 7, 'Marked Issue #819554 as Resolved', '2014-08-03 16:42:54', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (139, 1, 'bugs', 8, 'Admin deleted a file FREELANCER-PROJECT-66396-0.png', '2014-08-03 18:52:09', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (140, 1, 'bugs', 7, 'Admin deleted a file FREELANCER-BUG-819554-01.jpg', '2014-08-03 18:52:33', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (141, 1, 'bugs', 7, 'Admin deleted a file FREELANCER-BUG-819554-0.jpg', '2014-08-03 18:52:41', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (142, 1, 'bugs', 7, 'Admin deleted a file FREELANCER-PROJECT-84952-01.png', '2014-08-03 18:55:28', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (143, 1, 'bugs', 7, 'Admin deleted a file FREELANCER-PROJECT-84952-0.png', '2014-08-03 18:55:35', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (144, 1, 'bugs', 7, 'Admin deleted a file FREELANCER-PROJECT-84952_1.png', '2014-08-03 18:55:41', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (145, 1, 'bugs', 7, 'Admin added a file FREELANCER-BUG-819554-0.jpg', '2014-08-03 18:56:17', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (146, 1, 'bugs', 5, 'Admin deleted a file FREELANCER-BUG-5468-0.jpg', '2014-08-03 18:56:47', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (147, 1, 'bugs', 7, 'Admin deleted a file FREELANCER-BUG-819554-0.jpg', '2014-08-03 18:59:06', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (148, 1, 'projects', 8, 'Admin deleted a file FREELANCER-PROJECT-66396-0.png', '2014-08-03 18:59:34', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (149, 1, 'projects', 7, 'Admin deleted a file FREELANCER-PROJECT-84952-01.png', '2014-08-03 18:59:51', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (150, 1, 'projects', 7, 'Admin deleted a file FREELANCER-PROJECT-84952-0.png', '2014-08-03 18:59:58', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (151, 1, 'projects', 7, 'Admin deleted a file FREELANCER-PROJECT-84952_1.png', '2014-08-03 19:00:10', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (152, 1, 'projects', 3, 'Admin deleted a file FREELANCER-PROJECT-46483-0.jpg', '2014-08-03 19:00:38', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (153, 1, 'bugs', 8, 'Marked Issue #326188 as Confirmed', '2014-08-04 18:11:30', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (154, 1, 'bugs', 8, 'Marked Issue #326188 as In Progress', '2014-08-04 18:11:44', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (155, 1, 'bugs', 8, 'Marked Issue #326188 as Resolved', '2014-08-04 18:11:52', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (156, 1, 'bugs', 8, 'Marked Issue #326188 as Verified', '2014-08-04 18:12:00', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (157, 4, 'projects', 7, 'Daves edited a project #84952', '2014-08-07 20:39:51', NULL, 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (158, 4, 'projects', 7, 'Daves edited a project #84952', '2014-08-07 20:45:57', 'fa-pencil', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (159, 4, 'projects', 7, 'Added a task Added by Daves', '2014-08-08 13:32:12', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (160, 4, 'projects', 7, 'Edited a task Added by Daves', '2014-08-08 13:42:40', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (161, 4, 'projects', 7, 'Edited a task Added by Daves', '2014-08-08 13:47:54', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (162, 4, 'projects', 7, 'Daves added a file FREELANCER-PROJECT-84952-01.jpg', '2014-08-08 15:04:25', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (163, 4, 'projects', 7, 'Daves deleted a file FREELANCER-PROJECT-84952-01.jpg', '2014-08-08 15:08:18', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (164, 4, 'projects', 7, 'Daves added a file FREELANCER-PROJECT-84952-01.jpg', '2014-08-08 15:08:50', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (165, 4, 'projects', 7, 'Daves deleted a file FREELANCER-PROJECT-84952-01.jpg', '2014-08-08 15:09:29', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (166, 4, 'projects', 7, 'Edited a task Fix Local Environment Bug', '2014-08-08 15:22:16', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (167, 4, 'projects', 7, 'Edited a task Fix Local Environment Bug', '2014-08-08 15:22:40', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (168, 4, 'projects', 7, 'Added a comment to Project #84952', '2014-08-08 15:39:52', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (169, 4, 'bugs', 6, 'Marked Issue #6822 as Confirmed', '2014-08-09 15:22:55', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (170, 4, 'bugs', 6, 'Marked Issue #6822 as In Progress', '2014-08-09 15:24:24', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (171, 4, 'bugs', 6, 'Marked Issue #6822 as Confirmed', '2014-08-09 15:24:33', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (172, 4, 'bugs', 6, 'Daves added a file FREELANCER-BUG-6822-0.jpg', '2014-08-09 15:33:09', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (173, 4, 'bugs', 6, 'Added a comment to a bug', '2014-08-09 15:36:37', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (174, 4, 'bugs', 6, 'Daves deleted a file FREELANCER-BUG-6822-0.jpg', '2014-08-09 15:40:44', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (175, 4, 'bugs', 6, 'Daves added a file FREELANCER-BUG-6822-0.jpg', '2014-08-09 15:41:21', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (176, 4, 'bugs', 6, 'Daves deleted a file FREELANCER-BUG-6822-0.jpg', '2014-08-09 15:42:03', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (177, 4, 'bugs', 9, 'Created an Issue #829999', '2014-08-09 15:56:00', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (178, 4, 'bugs', 9, 'Edited an Issue #829999', '2014-08-09 16:03:42', 'fa-edit', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (179, 4, 'bugs', 9, 'Edited an Issue #829999', '2014-08-09 16:04:55', 'fa-edit', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (180, 4, 'bugs', 9, 'Edited an Issue #829999', '2014-08-09 16:05:56', 'fa-edit', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (181, 4, 'projects', 7, 'Daves added a file FREELANCER-PROJECT-84952-0.jpg', '2014-08-09 16:12:50', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (182, 4, 'projects', 7, 'Daves deleted a file FREELANCER-PROJECT-84952-0.jpg', '2014-08-09 16:13:21', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (183, 4, 'bugs', 9, 'Marked Issue #829999 as Verified', '2014-08-09 16:14:54', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (184, 4, 'bugs', 9, 'Marked Issue #829999 as Confirmed', '2014-08-09 16:15:10', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (185, 1, 'projects', 5, 'Edited a task Sticky Glowing Menu', '2014-08-12 13:30:26', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (186, 2, 'projects', 5, 'Added a task Requested Task', '2014-08-12 19:48:45', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (187, 2, 'projects', 3, 'Client added a file FREELANCER-PROJECT-46483-0.jpg', '2014-08-12 20:01:06', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (188, 1, 'projects', 3, 'Admin added a file FREELANCER-PROJECT-46483-01.jpg', '2014-08-12 20:06:31', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (189, 2, 'projects', 3, 'Client deleted a file FREELANCER-PROJECT-46483-0.jpg', '2014-08-12 20:09:10', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (190, 2, 'projects', 3, 'Client added a file FREELANCER-PROJECT-46483-0.jpg', '2014-08-12 20:16:23', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (191, 2, 'projects', 3, 'Client added a file FREELANCER-PROJECT-46483-02.jpg', '2014-08-12 20:22:12', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (192, 2, 'projects', 3, 'Client deleted a file FREELANCER-PROJECT-46483-02.jpg', '2014-08-12 20:22:33', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (193, 2, 'projects', 3, 'Added a comment to Project #46483', '2014-08-12 20:26:48', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (194, 1, 'projects', 3, 'Admin deleted a file FREELANCER-PROJECT-46483-0.jpg', '2014-08-12 20:34:07', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (195, 1, 'projects', 3, 'Admin deleted a file FREELANCER-PROJECT-46483-01.jpg', '2014-08-12 20:34:13', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (196, 2, 'projects', 5, 'Added a comment to Project #98946', '2014-08-13 15:47:10', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (197, 2, 'bugs', 10, 'Created an Issue #191926', '2014-08-13 15:57:23', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (198, 2, 'bugs', 8, 'Client added a file FREELANCER-BUG-326188-0.jpg', '2014-08-14 18:32:26', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (199, 2, 'bugs', 8, 'Client added a file FREELANCER-BUG-326188-01.jpg', '2014-08-14 18:35:46', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (200, 2, 'projects', 8, 'Client deleted a file ', '2014-08-14 18:49:39', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (201, 2, 'bugs', 8, 'Client deleted a file FREELANCER-BUG-326188-0.jpg', '2014-08-14 18:55:18', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (202, 2, 'bugs', 8, 'Client added a file FREELANCER-BUG-326188-0.jpg', '2014-08-14 18:55:50', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (203, 2, 'bugs', 8, 'Client deleted a file FREELANCER-BUG-326188-0.jpg', '2014-08-14 18:56:14', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (204, 2, 'bugs', 8, 'Client added a file FREELANCER-BUG-326188-0.jpg', '2014-08-14 18:56:58', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (205, 2, 'bugs', 8, 'Client deleted a file FREELANCER-BUG-326188-0.jpg', '2014-08-14 19:03:01', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (206, 2, 'bugs', 5, 'Client added a file FREELANCER-BUG-5468-0.jpg', '2014-08-14 19:04:17', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (207, 2, 'bugs', 5, 'Client added a file FREELANCER-BUG-5468-01.jpg', '2014-08-14 19:11:14', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (208, 2, 'bugs', 11, 'Created an Issue #127612', '2014-08-19 17:41:20', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (209, 2, 'bugs', 12, 'Created an Issue #459519', '2014-08-19 17:42:28', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (210, 2, 'bugs', 13, 'Created an Issue #646612', '2014-08-19 18:36:13', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (211, 2, 'bugs', 14, 'Created an Issue #423426', '2014-08-19 18:41:12', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (212, 2, 'bugs', 10, 'Marked Issue #191926 as Confirmed', '2014-08-19 19:06:16', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (213, 2, 'bugs', 5, 'Client deleted a file FREELANCER-BUG-5468-01.jpg', '2014-08-19 19:21:09', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (214, 2, 'bugs', 5, 'Client deleted a file FREELANCER-BUG-5468-0.jpg', '2014-08-19 19:21:16', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (215, 2, 'bugs', 15, 'Created an Issue #892982', '2014-08-20 13:30:37', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (216, 2, 'invoices', 1, 'EST #427174 marked as declined', '2014-08-22 18:45:51', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (217, 2, 'invoices', 1, 'EST #427174 marked as accepted', '2014-08-22 18:45:57', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (218, 2, 'invoices', 4, 'EST #882252 marked as accepted', '2014-08-22 19:05:07', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (219, 2, 'invoices', 1, 'EST #427174 marked as accepted', '2014-08-22 19:12:33', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (220, 2, 'invoices', 1, 'EST #427174 marked as declined', '2014-08-22 19:14:04', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (221, 2, 'invoices', 4, 'EST #882252 marked as accepted', '2014-08-22 19:15:15', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (222, 2, 'invoices', 1, 'EST #427174 marked as accepted', '2014-08-22 19:15:25', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (223, 2, 'invoices', 1, 'EST #427174 marked as declined', '2014-08-22 19:15:31', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (224, 2, 'projects', 3, 'Client added a file PROJECT-46483-0.jpg', '2014-08-23 15:16:16', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (225, 2, 'projects', 3, 'Client added a file PROJECT-46483-01.jpg', '2014-08-23 15:27:19', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (226, 2, 'projects', 3, 'Added a task Slider in Footer', '2014-08-23 15:28:39', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (227, 2, 'projects', 3, 'Client added a file <a href=\"http://localhost/devfo/resource/project-files/PROJECT-46483-03.jpg\" target=\"_blank\">PROJECT-46483-03.jpg</a>', '2014-08-23 15:38:40', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (228, 2, 'bugs', 15, 'Client added a file PROJECT-BUG-892982-0.jpg', '2014-08-23 16:43:49', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (229, 2, 'projects', 3, 'Client deleted a file PROJECT-46483-03.jpg', '2014-08-23 16:46:52', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (230, 2, 'projects', 3, 'Client deleted a file PROJECT-46483-02.jpg', '2014-08-23 16:47:10', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (231, 2, 'projects', 3, 'Client added a file <a href=\"http://localhost/devfo/resource/project-files/PROJECT-46483-02.jpg\" target=\"_blank\">PROJECT-46483-02.jpg</a>', '2014-08-23 16:47:40', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (232, 2, 'projects', 3, 'Client deleted a file PROJECT-46483-02.jpg', '2014-08-23 16:47:56', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (233, 2, 'projects', 3, 'Added a comment to Project #46483', '2014-08-23 17:16:37', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (234, 2, 'bugs', 3, 'Added a comment to a bug', '2014-08-23 17:31:49', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (235, 2, 'bugs', 5, 'Added a comment to a bug', '2014-08-23 17:33:12', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (236, 2, 'bugs', 5, 'Client added a file PROJECT-BUG-5468-0.jpg', '2014-08-23 17:33:38', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (237, 2, 'bugs', 5, 'Client deleted a file PROJECT-BUG-5468-0.jpg', '2014-08-23 17:41:47', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (238, 2, 'bugs', 3, 'Client added a file <a href=\"http://localhost/devfo/resource/bug-files/PROJECT-BUG-5467-0.jpg\" target=\"_blank\">PROJECT-BUG-5467-0.jpg</a>', '2014-08-23 17:48:48', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (239, 2, 'bugs', 3, 'Client deleted a file PROJECT-BUG-5467-0.jpg', '2014-08-23 17:49:07', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (240, 2, 'bugs', 3, 'Client added a file <a href=\"http://localhost/devfo/resource/bug-files/PROJECT-BUG-5467-0.jpg\" target=\"_blank\">PROJECT-BUG-5467-0.jpg</a>', '2014-08-23 17:56:34', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (241, 2, 'bugs', 3, 'Client added a file <a href=\"http://localhost/devfo/resource/bug-files/PROJECT-BUG-5467-01.jpg\" target=\"_blank\">PROJECT-BUG-5467-01.jpg</a>', '2014-08-23 18:01:22', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (242, 2, 'bugs', 3, 'Client added a file <a href=\"http://localhost/devfo/resource/bug-files/PROJECT-BUG-5467-02.jpg\" target=\"_blank\">PROJECT-BUG-5467-02.jpg</a>', '2014-08-23 18:13:16', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (243, 4, 'projects', 7, 'Daves added a file PROJECT-84952-0.jpg', '2014-08-23 18:40:58', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (244, 2, 'bugs', 15, 'Client added a file <a href=\"http://localhost/devfo/resource/bug-files/PROJECT-BUG-892982-01.jpg\" target=\"_blank\">PROJECT-BUG-892982-01.jpg</a>', '2014-08-24 21:11:35', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (245, 2, 'bugs', 15, 'Client deleted a file PROJECT-BUG-892982-01.jpg', '2014-08-24 21:12:38', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (246, 2, 'bugs', 15, 'Client deleted a file PROJECT-BUG-892982-0.jpg', '2014-08-24 21:12:49', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (247, 2, 'bugs', 3, 'Client deleted a file PROJECT-BUG-5467-0.jpg', '2014-08-24 21:13:12', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (248, 2, 'bugs', 3, 'Client deleted a file PROJECT-BUG-5467-01.jpg', '2014-08-24 21:13:25', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (249, 2, 'bugs', 3, 'Client deleted a file PROJECT-BUG-5467-02.jpg', '2014-08-24 21:13:32', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (250, 4, 'projects', 7, 'Edited a task Added by Daves', '2014-08-24 23:41:08', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (251, 4, 'projects', 7, 'Added a comment to Project #84952', '2014-08-25 10:28:09', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (252, 4, 'projects', 5, 'Daves edited a project #98946', '2014-08-25 10:53:40', 'fa-pencil', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (253, 4, 'projects', 5, 'Daves edited a project #98946', '2014-08-25 10:54:08', 'fa-pencil', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (254, 4, 'projects', 5, 'Daves added a file PROJECT-98946-0.jpg', '2014-08-25 10:55:09', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (255, 4, 'projects', 5, 'Daves added a file PROJECT-98946-01.jpg', '2014-08-25 10:55:57', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (256, 4, 'projects', 5, 'Daves added a file <a href=\"http://localhost/devfo/resource/project-files/PROJECT-98946-02.jpg\" target=\"_blank\">PROJECT-98946-02.jpg</a>', '2014-08-25 10:58:49', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (257, 4, 'projects', 5, 'Daves deleted a file PROJECT-98946-02.jpg', '2014-08-25 11:02:52', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (258, 4, 'projects', 5, 'Daves deleted a file PROJECT-98946-01.jpg', '2014-08-25 11:03:07', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (259, 4, 'projects', 5, 'Daves deleted a file PROJECT-98946-0.jpg', '2014-08-25 11:03:30', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (260, 4, 'projects', 5, 'Added a task Active Record Class', '2014-08-25 11:11:32', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (261, 4, 'projects', 5, 'Edited a task Active Record Class', '2014-08-25 11:12:33', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (262, 4, 'projects', 5, 'Edited a task Active Record Class', '2014-08-25 11:16:23', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (263, 2, 'projects', 5, 'Added a task titled:  Wordpress Installer', '2014-08-25 11:17:21', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (264, 4, 'projects', 5, 'Edited a task Wordpress Installer', '2014-08-25 11:17:55', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (265, 4, 'bugs', 16, 'Created an Issue #331754', '2014-08-25 11:22:02', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (266, 4, 'projects', 7, 'Daves deleted a file PROJECT-84952-0.jpg', '2014-08-25 11:39:01', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (267, 4, 'invoices', 5, 'EST #993223 marked as accepted', '2014-08-25 14:22:54', 'fa-paperclip', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (268, 4, 'bugs', 17, 'Created an Issue #637377', '2014-08-25 15:06:32', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (269, 4, 'bugs', 15, 'Marked Issue #892982 as In Progress', '2014-08-25 15:15:07', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (270, 4, 'bugs', 15, 'Marked Issue #892982 as Resolved', '2014-08-25 15:16:20', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (271, 4, 'bugs', 16, 'Marked Issue #331754 as In Progress', '2014-08-25 15:21:14', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (272, 4, 'bugs', 9, 'Daves added a file <a href=\"http://localhost/devfo/resource/bug-files/PROJECT-BUG-829999-0.jpg\" target=\"_blank\">PROJECT-BUG-829999-0.jpg</a>', '2014-08-25 15:23:44', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (273, 2, 'bugs', 17, 'Client added a file <a href=\"http://localhost/devfo/resource/bug-files/PROJECT-BUG-637377-0.jpg\" target=\"_blank\">PROJECT-BUG-637377-0.jpg</a>', '2014-08-25 15:27:51', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (274, 4, 'bugs', 9, 'Daves deleted a file PROJECT-BUG-829999-0.jpg', '2014-08-25 15:29:50', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (275, 2, 'bugs', 17, 'Client deleted a file PROJECT-BUG-637377-0.jpg', '2014-08-25 15:30:02', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (276, 4, 'bugs', 15, 'Edited an Issue #892982', '2014-08-25 15:32:35', 'fa-edit', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (277, 2, 'bugs', 10, 'Edited an Issue #191926', '2014-08-25 15:44:41', 'fa-edit', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (278, 2, 'bugs', 16, 'Edited an Issue #331754', '2014-08-25 15:45:35', 'fa-edit', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (279, 2, 'bugs', 10, 'Edited an Issue #191926', '2014-08-25 15:54:51', 'fa-edit', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (280, 2, 'bugs', 1, 'Client added a file <a href=\"http://localhost/devfo/resource/bug-files/PROJECT-BUG-3445-0.jpg\" target=\"_blank\">PROJECT-BUG-3445-0.jpg</a>', '2014-08-25 15:56:19', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (281, 2, 'bugs', 1, 'Client deleted a file PROJECT-BUG-3445-0.jpg', '2014-08-25 15:56:32', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (282, 4, 'bugs', 16, 'Marked Issue #331754 as Verified', '2014-08-25 15:57:18', 'fa-info', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (283, 4, 'projects', 5, 'Added a task Ruby Installer', '2014-08-25 16:04:58', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (284, 2, 'bugs', 10, 'Client added a file <a href=\"http://localhost/devfo/resource/bug-files/PROJECT-BUG-191926-0.jpg\" target=\"_blank\">PROJECT-BUG-191926-0.jpg</a>', '2014-08-25 16:11:03', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (285, 2, 'bugs', 10, 'Client deleted a file PROJECT-BUG-191926-0.jpg', '2014-08-25 16:12:07', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (286, 4, 'bugs', 17, 'Daves added a file <a href=\"http://localhost/devfo/resource/bug-files/PROJECT-BUG-637377-0.jpg\" target=\"_blank\">PROJECT-BUG-637377-0.jpg</a>', '2014-08-25 16:12:58', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (287, 4, 'bugs', 17, 'Daves deleted a file PROJECT-BUG-637377-0.jpg', '2014-08-25 16:13:17', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (288, 4, 'bugs', 3, 'Daves deleted a file FREELANCER-PROJECT-46483-0.jpg', '2014-08-25 16:16:40', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (289, 4, 'bugs', 9, 'Daves added a file <a href=\"http://localhost/devfo/resource/bug-files/PROJECT-BUG-829999-0.jpg\" target=\"_blank\">PROJECT-BUG-829999-0.jpg</a>', '2014-08-25 16:17:42', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (290, 4, 'bugs', 9, 'Daves deleted a file PROJECT-BUG-829999-0.jpg', '2014-08-25 16:18:01', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (291, 4, 'projects', 7, 'Added a comment to Project #84952', '2014-08-25 16:41:13', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (292, 4, 'projects', 5, 'Added a comment to Project #98946', '2014-08-25 16:42:31', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (293, 4, 'projects', 5, 'Daves edited a project #98946', '2014-08-25 16:51:21', 'fa-pencil', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (294, 4, 'projects', 5, 'Edited a task Active Record Class', '2014-08-25 16:51:39', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (295, 4, 'projects', 5, 'Edited a task Wordpress Installer', '2014-08-25 16:52:14', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (296, 4, 'projects', 5, 'Edited a task Requested Task', '2014-08-25 16:54:13', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (297, 3, 'projects', 2, 'Edited a task Sliding Homepage ', '2014-08-25 16:57:33', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (298, 1, 'invoices', 17, 'Admin edited INVOICE #665175', '2014-08-25 23:25:01', 'fa-pencil', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (299, 1, 'invoices', 17, 'Admin edited INVOICE #665175', '2014-08-25 23:25:16', 'fa-pencil', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (300, 1, 'estimates', 3, 'Admin edited ESTIMATE #574873', '2014-08-26 10:54:48', 'fa-pencil', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (301, 1, 'estimates', 3, 'Converted EST #574873 to Invoice', '2014-08-26 10:55:02', 'fa-laptop', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (302, 1, 'invoices', 20, 'Converted EST #574873 to Invoice', '2014-08-26 10:55:02', 'fa-laptop', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (303, 1, 'estimates', 6, 'Estimate #644347 created.', '2014-08-26 10:59:27', 'fa-plus', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (304, 1, 'estimates', 6, 'ESTIMATE #644347 marked as Sent', '2014-08-26 11:23:55', 'fa-envelope', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (305, 1, 'estimates', 6, 'ESTIMATE #644347 marked as Sent', '2014-08-26 11:24:29', 'fa-envelope', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (306, 1, 'projects', 7, 'Admin added a file <a href=\"http://localhost/devfo/resource/project-files/PROJECT-84952-0.jpg\" target=\"_blank\">PROJECT-84952-0.jpg</a>', '2014-08-26 12:21:12', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (307, 1, 'projects', 7, 'Admin deleted a file PROJECT-84952-0.jpg', '2014-08-26 12:25:45', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (308, 1, 'projects', 7, 'Admin edited a project #84952', '2014-08-26 12:28:52', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (309, 1, 'projects', 7, 'Edited a task New Bootstrap 3 Template', '2014-08-26 12:29:52', 'fa-tasks', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (310, 1, 'projects', 2, 'Added a comment to Project #765546', '2014-08-26 12:46:24', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (311, 1, 'projects', 3, 'Admin deleted a file PROJECT-46483-01.jpg', '2014-08-26 13:08:54', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (312, 1, 'projects', 3, 'Admin deleted a file PROJECT-46483-0.jpg', '2014-08-26 13:09:03', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (313, 1, 'bugs', 16, 'Admin added a file <a href=\"http://localhost/devfo/resource/bug-files/PROJECT-BUG-331754-0.jpg\" target=\"_blank\">PROJECT-BUG-331754-0.jpg</a>', '2014-08-27 13:08:36', 'fa-file', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (314, 1, 'bugs', 16, 'Added a comment to a bug', '2014-08-27 13:09:23', 'fa-comment', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (315, 1, 'bugs', 16, 'Admin deleted a file PROJECT-BUG-331754-0.jpg', '2014-08-27 13:14:54', 'fa-times', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (316, 1, 'bugs', 16, 'Edited an Issue #331754', '2014-08-27 13:24:53', 'fa-coffee', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (317, 1, 'bugs', 16, 'Edited an Issue #331754', '2014-08-27 13:27:33', 'edit', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (318, 1, 'bugs', 16, 'Edited an Issue #331754', '2014-08-27 13:28:24', 'fa-edit', 0);
INSERT INTO fx_activities (`activity_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `deleted`) VALUES (319, 1, 'bugs', 16, 'Edited an Issue #331754', '2014-08-27 13:28:56', 'fa-pencil', 0);


#
# TABLE STRUCTURE FOR: fx_bug_comments
#

DROP TABLE IF EXISTS fx_bug_comments;

CREATE TABLE `fx_bug_comments` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `bug_id` int(11) NOT NULL,
  `comment_by` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_commented` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO fx_bug_comments (`c_id`, `bug_id`, `comment_by`, `comment`, `date_commented`) VALUES (1, 1, 2, 'I will say this and that', '2014-05-12 07:48:33');
INSERT INTO fx_bug_comments (`c_id`, `bug_id`, `comment_by`, `comment`, `date_commented`) VALUES (2, 1, 3, 'And i will say this and that', '2014-05-12 07:48:33');
INSERT INTO fx_bug_comments (`c_id`, `bug_id`, `comment_by`, `comment`, `date_commented`) VALUES (3, 1, 1, 'I can\'t see anything when i click the menu bar.', '2014-05-12 09:18:33');
INSERT INTO fx_bug_comments (`c_id`, `bug_id`, `comment_by`, `comment`, `date_commented`) VALUES (4, 1, 5, 'I can\'t see anything when i click the menu bar.', '2014-05-12 09:30:33');
INSERT INTO fx_bug_comments (`c_id`, `bug_id`, `comment_by`, `comment`, `date_commented`) VALUES (5, 1, 1, 'There are a few easy ways to quickly get started with Bootstrap, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.', '2014-05-12 10:01:08');
INSERT INTO fx_bug_comments (`c_id`, `bug_id`, `comment_by`, `comment`, `date_commented`) VALUES (6, 3, 1, 'I am a comment', '2014-05-12 10:02:46');
INSERT INTO fx_bug_comments (`c_id`, `bug_id`, `comment_by`, `comment`, `date_commented`) VALUES (7, 4, 1, 'I am a comment', '2014-05-25 20:43:06');
INSERT INTO fx_bug_comments (`c_id`, `bug_id`, `comment_by`, `comment`, `date_commented`) VALUES (8, 7, 1, 'Am testing the comments functionality', '2014-08-03 12:43:10');
INSERT INTO fx_bug_comments (`c_id`, `bug_id`, `comment_by`, `comment`, `date_commented`) VALUES (9, 7, 1, 'And yet another comment', '2014-08-03 12:43:31');
INSERT INTO fx_bug_comments (`c_id`, `bug_id`, `comment_by`, `comment`, `date_commented`) VALUES (10, 6, 4, 'I got that covered', '2014-08-09 15:36:37');
INSERT INTO fx_bug_comments (`c_id`, `bug_id`, `comment_by`, `comment`, `date_commented`) VALUES (11, 3, 2, 'CodeIgniter uses a modified version of the Active Record Database Pattern. This pattern allows information to be retrieved, inserted, and updated in your database with minimal scripting. In some cases only one or two lines of code are necessary to perform a database action. CodeIgniter does not require that each database table be its own class file. It instead provides a more simplified interface.\r\nBeyond simplicity, a major benefit to using the Active Record features is that it allows you to create database independent applications, since the query syntax is generated by each database adapter. It also allows for safer queries, since the values are escaped automatically by the system.', '2014-08-23 17:31:49');
INSERT INTO fx_bug_comments (`c_id`, `bug_id`, `comment_by`, `comment`, `date_commented`) VALUES (12, 5, 2, 'CodeIgniter uses a modified version of the Active Record Database Pattern. This pattern allows information to be retrieved, inserted, and updated in your database with minimal scripting. In some cases only one or two lines of code are necessary to perform a database action. CodeIgniter does not require that each database table be its own class file. It instead provides a more simplified interface.\r\n\r\nBeyond simplicity, a major benefit to using the Active Record features is that it allows you to create database independent applications, since the query syntax is generated by each database adapter. It also allows for safer queries, since the values are escaped automatically by the system.', '2014-08-23 17:33:12');
INSERT INTO fx_bug_comments (`c_id`, `bug_id`, `comment_by`, `comment`, `date_commented`) VALUES (13, 16, 1, 'The Profiler Class will display benchmark results, queries you have run, and $_POST data at the bottom of your pages. This information can be useful during development in order to help with debugging and optimization.', '2014-08-27 13:09:23');


#
# TABLE STRUCTURE FOR: fx_bug_files
#

DROP TABLE IF EXISTS fx_bug_files;

CREATE TABLE `fx_bug_files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `bug` int(11) NOT NULL,
  `file_name` text NOT NULL,
  `description` text NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO fx_bug_files (`file_id`, `bug`, `file_name`, `description`, `uploaded_by`, `date_posted`) VALUES (16, 1, 'FREELANCER-PROJECT-343253-0.png', 'Description', 1, '2014-07-10 19:19:34');
INSERT INTO fx_bug_files (`file_id`, `bug`, `file_name`, `description`, `uploaded_by`, `date_posted`) VALUES (17, 2, 'FREELANCER-PROJECT-765546-0.png', 'Description', 1, '2014-07-10 19:24:22');


#
# TABLE STRUCTURE FOR: fx_bugs
#

DROP TABLE IF EXISTS fx_bugs;

CREATE TABLE `fx_bugs` (
  `bug_id` int(11) NOT NULL AUTO_INCREMENT,
  `issue_ref` int(11) NOT NULL,
  `project` int(11) NOT NULL,
  `reporter` int(11) NOT NULL,
  `assigned_to` int(11) NOT NULL,
  `bug_status` enum('Unconfirmed','Confirmed','In Progress','Resolved','Verified') NOT NULL DEFAULT 'Unconfirmed',
  `priority` varchar(100) NOT NULL,
  `bug_description` text NOT NULL,
  `reported_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modified` varchar(64) NOT NULL,
  PRIMARY KEY (`bug_id`),
  UNIQUE KEY `issue_ref` (`issue_ref`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO fx_bugs (`bug_id`, `issue_ref`, `project`, `reporter`, `assigned_to`, `bug_status`, `priority`, `bug_description`, `reported_on`, `last_modified`) VALUES (1, 3445, 2, 2, 1, 'In Progress', 'High', 'I can\'t see anything when i click the menu bar.', '2014-05-11 00:00:00', '2014-05-14 00:00:00');
INSERT INTO fx_bugs (`bug_id`, `issue_ref`, `project`, `reporter`, `assigned_to`, `bug_status`, `priority`, `bug_description`, `reported_on`, `last_modified`) VALUES (2, 3447, 1, 17, 4, 'In Progress', 'Critical', 'The tax calculation is incorrect', '2014-05-13 00:00:00', '2014-05-11 17:27:54');
INSERT INTO fx_bugs (`bug_id`, `issue_ref`, `project`, `reporter`, `assigned_to`, `bug_status`, `priority`, `bug_description`, `reported_on`, `last_modified`) VALUES (3, 5467, 2, 12, 23, 'Confirmed', 'Medium', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable Daisy', '2014-05-14 16:51:06', '2014-06-14 15:06:40');
INSERT INTO fx_bugs (`bug_id`, `issue_ref`, `project`, `reporter`, `assigned_to`, `bug_status`, `priority`, `bug_description`, `reported_on`, `last_modified`) VALUES (5, 5468, 2, 14, 23, 'In Progress', 'Medium', 'Issue Description', '2014-07-29 16:51:06', '2014-05-11 16:51:06');
INSERT INTO fx_bugs (`bug_id`, `issue_ref`, `project`, `reporter`, `assigned_to`, `bug_status`, `priority`, `bug_description`, `reported_on`, `last_modified`) VALUES (6, 6822, 8, 1, 4, 'Confirmed', 'High', 'Hi,\r\n\r\nI like to have quote for a new feature which I need on my website. Please contact me as soon as possible in order to discuss the details.\r\n\r\nKind Regards ', '2014-08-02 19:02:33', '2014-08-02 19:02:33');
INSERT INTO fx_bugs (`bug_id`, `issue_ref`, `project`, `reporter`, `assigned_to`, `bug_status`, `priority`, `bug_description`, `reported_on`, `last_modified`) VALUES (7, 819554, 1, 13, 4, 'Resolved', 'Medium', 'Hi,\r\n\r\nI like to have quote for a new feature which I need on my website. Please contact me as soon as possible in order to discuss the details.\r\n\r\nKind Regards ', '2014-08-02 19:14:27', '2014-08-02 19:14:27');
INSERT INTO fx_bugs (`bug_id`, `issue_ref`, `project`, `reporter`, `assigned_to`, `bug_status`, `priority`, `bug_description`, `reported_on`, `last_modified`) VALUES (8, 326188, 3, 7, 4, 'Verified', 'Medium', 'Hi,\r\n\r\nI need to have a newsletter form for the front end and a backend plugin so I can manage the newsletters lists.\r\n\r\nThanks ', '2014-08-03 15:22:01', '2014-08-03 15:22:01');
INSERT INTO fx_bugs (`bug_id`, `issue_ref`, `project`, `reporter`, `assigned_to`, `bug_status`, `priority`, `bug_description`, `reported_on`, `last_modified`) VALUES (9, 829999, 7, 4, 4, 'Confirmed', 'Medium', 'Issue Description goes here', '2014-08-09 15:56:00', '2014-08-09 16:05:56');
INSERT INTO fx_bugs (`bug_id`, `issue_ref`, `project`, `reporter`, `assigned_to`, `bug_status`, `priority`, `bug_description`, `reported_on`, `last_modified`) VALUES (10, 191926, 3, 2, 5, 'Confirmed', 'Critical', 'Issue Description', '2014-08-13 15:57:23', '2014-08-25 15:54:51');
INSERT INTO fx_bugs (`bug_id`, `issue_ref`, `project`, `reporter`, `assigned_to`, `bug_status`, `priority`, `bug_description`, `reported_on`, `last_modified`) VALUES (15, 892982, 2, 2, 1, 'Resolved', 'Low', 'Issue Description', '2014-08-20 13:30:37', '2014-08-25 15:32:35');
INSERT INTO fx_bugs (`bug_id`, `issue_ref`, `project`, `reporter`, `assigned_to`, `bug_status`, `priority`, `bug_description`, `reported_on`, `last_modified`) VALUES (16, 331754, 3, 4, 4, 'Verified', 'High', 'Beyond simplicity, a major benefit to using the Active Record features is that it allows you to create database independent applications, since the query syntax is generated by each database adapter. It also allows for safer queries, since the values are escaped automatically by the system.', '2014-08-25 11:22:02', '2014-08-27 13:28:56');
INSERT INTO fx_bugs (`bug_id`, `issue_ref`, `project`, `reporter`, `assigned_to`, `bug_status`, `priority`, `bug_description`, `reported_on`, `last_modified`) VALUES (17, 637377, 2, 4, 4, 'Unconfirmed', 'Low', 'Issue Description', '2014-08-25 15:06:32', '2014-08-25 15:06:32');


#
# TABLE STRUCTURE FOR: fx_comment_replies
#

DROP TABLE IF EXISTS fx_comment_replies;

CREATE TABLE `fx_comment_replies` (
  `reply_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_comment` int(11) NOT NULL,
  `reply_msg` text NOT NULL,
  `replied_by` int(11) NOT NULL,
  `del` enum('Yes','No') NOT NULL DEFAULT 'No',
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reply_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO fx_comment_replies (`reply_id`, `parent_comment`, `reply_msg`, `replied_by`, `del`, `date_posted`) VALUES (1, 1, 'Hello buddy?', 1, 'No', '2014-01-02 14:46:55');
INSERT INTO fx_comment_replies (`reply_id`, `parent_comment`, `reply_msg`, `replied_by`, `del`, `date_posted`) VALUES (2, 1, 'Thanks for the good work', 2, 'No', '2014-01-02 14:51:46');
INSERT INTO fx_comment_replies (`reply_id`, `parent_comment`, `reply_msg`, `replied_by`, `del`, `date_posted`) VALUES (3, 7, 'That div is not allowed', 2, 'No', '2014-01-02 22:34:04');
INSERT INTO fx_comment_replies (`reply_id`, `parent_comment`, `reply_msg`, `replied_by`, `del`, `date_posted`) VALUES (4, 4, 'I replied to this comment ', 1, 'No', '2014-07-06 14:15:13');
INSERT INTO fx_comment_replies (`reply_id`, `parent_comment`, `reply_msg`, `replied_by`, `del`, `date_posted`) VALUES (5, 16, 'This issue has been reported as a bug and will be fixed as soon as possible.', 1, 'No', '2014-07-10 19:16:47');
INSERT INTO fx_comment_replies (`reply_id`, `parent_comment`, `reply_msg`, `replied_by`, `del`, `date_posted`) VALUES (6, 14, 'This is my reply', 1, 'No', '2014-07-21 13:36:11');
INSERT INTO fx_comment_replies (`reply_id`, `parent_comment`, `reply_msg`, `replied_by`, `del`, `date_posted`) VALUES (7, 11, 'Yogo yogo', 4, 'No', '2014-08-08 15:21:42');
INSERT INTO fx_comment_replies (`reply_id`, `parent_comment`, `reply_msg`, `replied_by`, `del`, `date_posted`) VALUES (8, 19, 'I tried that so what :-)', 4, 'No', '2014-08-08 18:14:49');
INSERT INTO fx_comment_replies (`reply_id`, `parent_comment`, `reply_msg`, `replied_by`, `del`, `date_posted`) VALUES (9, 20, 'I say this', 2, 'No', '2014-08-12 20:27:54');
INSERT INTO fx_comment_replies (`reply_id`, `parent_comment`, `reply_msg`, `replied_by`, `del`, `date_posted`) VALUES (10, 21, '<strong>Strong</strong> is also allowed and <blockquote>is also allowed</blockquote>', 2, 'No', '2014-08-13 15:48:00');
INSERT INTO fx_comment_replies (`reply_id`, `parent_comment`, `reply_msg`, `replied_by`, `del`, `date_posted`) VALUES (11, 13, 'CodeIgniter uses a modified version of the Active Record Database Pattern. This pattern allows information to be retrieved, inserted, and updated in your database with minimal scripting. In some cases only one or two lines of code are necessary to perform a database action. CodeIgniter does not require that each database table be its own class file. It instead provides a more simplified interface.', 4, 'No', '2014-08-25 11:08:16');
INSERT INTO fx_comment_replies (`reply_id`, `parent_comment`, `reply_msg`, `replied_by`, `del`, `date_posted`) VALUES (12, 22, 'Thanks for the heads up buddy', 1, 'No', '2014-08-26 12:45:13');


#
# TABLE STRUCTURE FOR: fx_comments
#

DROP TABLE IF EXISTS fx_comments;

CREATE TABLE `fx_comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `project` int(11) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (1, 1, 2, 'Hello there?', '2014-01-02 14:45:51', 'No');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (2, 2, 1, 'Testing deleting comments', '2014-01-02 14:53:44', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (3, 2, 2, 'Will test pagination soon', '2014-01-02 16:33:18', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (4, 2, 2, 'Yeah later', '2014-01-02 16:33:30', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (5, 3, 2, 'Posting later', '2014-01-02 16:33:43', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (6, 3, 2, 'You hit it buddy', '2014-01-02 16:34:00', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (7, 1, 2, 'Please don\'t do that [removed] [DIV]', '2014-01-02 16:34:24', 'No');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (8, 2, 2, 'This is my comment it should be able to validate the token', '2014-01-02 22:34:47', 'No');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (11, 7, 1, 'I commented', '2014-05-26 19:24:55', 'No');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (12, 7, 1, 'How much will you charge?', '2014-06-07 10:17:03', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (13, 5, 1, 'Comment added here', '2014-06-12 19:03:53', 'No');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (14, 7, 1, 'Hey', '2014-06-16 16:25:05', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (15, 2, 1, 'That was my awesome comment', '2014-07-04 19:43:23', 'No');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (16, 7, 1, 'Fix issue #2390', '2014-07-07 10:51:34', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (17, 3, 1, 'Lets check out this comment', '2014-07-10 20:06:42', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (18, 8, 1, 'First comment submitted', '2014-07-11 20:10:29', 'No');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (19, 7, 4, 'Try this out buddy', '2014-08-08 15:39:52', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (20, 3, 2, 'We say that', '2014-08-12 20:26:48', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (21, 5, 2, 'Commented by Client', '2014-08-13 15:47:10', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (22, 3, 2, 'CodeIgniter uses a modified version of the Active Record Database Pattern. This pattern allows information to be retrieved, inserted, and updated in your database with minimal scripting. In some cases only one or two lines of code are necessary to perform a database action. CodeIgniter does not require that each database table be its own class file. It instead provides a more simplified interface.', '2014-08-23 17:16:37', 'No');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (23, 7, 4, 'I will delete this', '2014-08-25 10:28:09', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (24, 7, 4, 'Try deleting this comment', '2014-08-25 16:41:13', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (25, 5, 4, 'CodeIgniter uses a modified version of the Active Record Database Pattern. This pattern allows information to be retrieved, inserted, and updated in your database with minimal scripting. In some cases only one or two lines of code are necessary to perform a database action. CodeIgniter does not require that each database table be its own class file. It instead provides a more simplified interface.', '2014-08-25 16:42:31', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (26, 2, 1, 'Creating your first CodeIgniter Migration can be a bit confusing at first, but once you learn the formula, they are very easy to spin up. For our first migration, we will be creating a very simple users table with id, email, and password columns. All migrations are kept in the application/migrations/ folder and are named with the following convention: ###_<migration_name>.php, where ### matches the migration_version in your migration.php config file. To get started, we will create a file called 001_users.php in the application/migrations/ folder. After you’ve created that file, copy and paste the following code into it:', '2014-08-26 12:46:24', 'Yes');
INSERT INTO fx_comments (`comment_id`, `project`, `posted_by`, `message`, `date_posted`, `deleted`) VALUES (27, 2, 4, 'Creating your first CodeIgniter Migration can be a bit confusing at first, but once you learn the formula, they are very easy to spin up. For our first migration, we will be creating a very simple users table with id, email, and password columns. All migrations are kept in the application/migrations/ folder and are named with the following convention: ###_<migration_name>.php, where ### matches the migration_version in your migration.php config file. To get started, we will create a file called 001_users.php in the application/migrations/ folder. After you’ve created that file, copy and paste the following code into it:', '2014-08-26 12:46:24', 'No');


#
# TABLE STRUCTURE FOR: fx_config
#

DROP TABLE IF EXISTS fx_config;

CREATE TABLE `fx_config` (
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO fx_config (`key`, `value`) VALUES ('allowed_files', 'gif|jpg|png|pdf|doc|txt|docx');
INSERT INTO fx_config (`key`, `value`) VALUES ('auth_author', 'William Mandai');
INSERT INTO fx_config (`key`, `value`) VALUES ('auth_installed_key', 'GHG23GJB');
INSERT INTO fx_config (`key`, `value`) VALUES ('auth_secret_key', 'fv23gshdjwejbb3c32h321');
INSERT INTO fx_config (`key`, `value`) VALUES ('base_url', 'http://localhost/devfo/');
INSERT INTO fx_config (`key`, `value`) VALUES ('company_address', '1 Infinite Loop <br>\r\n95014 Cuperino, CA <br>\r\nUnited States');
INSERT INTO fx_config (`key`, `value`) VALUES ('company_city', 'Barcelona');
INSERT INTO fx_config (`key`, `value`) VALUES ('company_country', 'Spain');
INSERT INTO fx_config (`key`, `value`) VALUES ('company_domain', 'http://freelancer.gitbench.com');
INSERT INTO fx_config (`key`, `value`) VALUES ('company_email', 'mandai.willy@gmail.com');
INSERT INTO fx_config (`key`, `value`) VALUES ('company_logo', 'logo.png');
INSERT INTO fx_config (`key`, `value`) VALUES ('company_name', 'Gitbench Inc.');
INSERT INTO fx_config (`key`, `value`) VALUES ('company_phone', '+123 456 789');
INSERT INTO fx_config (`key`, `value`) VALUES ('contact_person', 'John Doe');
INSERT INTO fx_config (`key`, `value`) VALUES ('default_currency', 'USD');
INSERT INTO fx_config (`key`, `value`) VALUES ('default_currency_symbol', '$');
INSERT INTO fx_config (`key`, `value`) VALUES ('default_language', 'english');
INSERT INTO fx_config (`key`, `value`) VALUES ('default_tax', '0');
INSERT INTO fx_config (`key`, `value`) VALUES ('default_terms', 'Please pay your fees before the due date to avoid over charge. Thank you for choosing Kabarak University. ');
INSERT INTO fx_config (`key`, `value`) VALUES ('demo_mode', 'FALSE');
INSERT INTO fx_config (`key`, `value`) VALUES ('developer', 'ig63Yd/+yuA8127gEyTz9TY4pnoeKq8dtocVP44+BJvtlRp8Vqcetwjk51dhSB6Rx8aVIKOPfUmNyKGWK7C/gg==');
INSERT INTO fx_config (`key`, `value`) VALUES ('email_estimate_message', 'Hi {CLIENT}\r\n\r\nThanks for your business enquiry. \r\n\r\nThe estimate EST {REF} is attached with this email. \r\nEstimate Overview:\r\nEstimate # : EST {REF}\r\nAmount: {CURRENCY} {AMOUNT}\r\n \r\nYou can view the estimate online at:\r\n{LINK}\r\n\r\nBest Regards,\r\n{COMPANY}');
INSERT INTO fx_config (`key`, `value`) VALUES ('email_invoice_message', 'Hello {CLIENT}\r\nHere is the invoice of {CURRENCY} {AMOUNT}\r\nYou can view the invoice online at:\r\n\r\n{LINK}\r\n\r\n\r\nBest Regards,\r\n\r\n{COMPANY}');
INSERT INTO fx_config (`key`, `value`) VALUES ('file_max_size', '9000');
INSERT INTO fx_config (`key`, `value`) VALUES ('paypal_cancel_url', 'paypal/cancel');
INSERT INTO fx_config (`key`, `value`) VALUES ('paypal_email', 'payments@bootstrapstore.net');
INSERT INTO fx_config (`key`, `value`) VALUES ('paypal_ipn_url', 'paypal/t_ipn/ipn');
INSERT INTO fx_config (`key`, `value`) VALUES ('paypal_live', 'TRUE');
INSERT INTO fx_config (`key`, `value`) VALUES ('paypal_success_url', 'paypal/success');
INSERT INTO fx_config (`key`, `value`) VALUES ('protocol', 'mail');
INSERT INTO fx_config (`key`, `value`) VALUES ('reminder_message', 'Hello {CLIENT}\r\nThis is a friendly reminder to pay your invoice of {CURRENCY} {AMOUNT}\r\n\r\nYou can view the invoice online at:\r\n\r\n{LINK}\r\n\r\n\r\nBest Regards,\r\n\r\n{COMPANY}');
INSERT INTO fx_config (`key`, `value`) VALUES ('site_author', 'William M.');
INSERT INTO fx_config (`key`, `value`) VALUES ('site_desc', 'Freelancer Office is a Web based PHP application for Freelancers - buy it on Codecanyon');
INSERT INTO fx_config (`key`, `value`) VALUES ('smtp_host', 'http://smtp.com');
INSERT INTO fx_config (`key`, `value`) VALUES ('smtp_pass', 'UYlINDMnpCq1JgVq+zAT1A3AyCPD9Cob/J82Cy1Duzjml/HOV+wkMizV3MMrT6ggbRj1KmXezZXPbaL8kILbsA==');
INSERT INTO fx_config (`key`, `value`) VALUES ('smtp_port', '25');
INSERT INTO fx_config (`key`, `value`) VALUES ('smtp_user', 'freelancer');
INSERT INTO fx_config (`key`, `value`) VALUES ('version', '1.1');
INSERT INTO fx_config (`key`, `value`) VALUES ('webmaster_email', 'fo@gitbench.com');
INSERT INTO fx_config (`key`, `value`) VALUES ('website_name', 'Freelancer Office');


#
# TABLE STRUCTURE FOR: fx_countries
#

DROP TABLE IF EXISTS fx_countries;

CREATE TABLE `fx_countries` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `value` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=243 DEFAULT CHARSET=latin1;

INSERT INTO fx_countries (`id`, `value`) VALUES (1, 'Afghanistan');
INSERT INTO fx_countries (`id`, `value`) VALUES (2, 'Aringland Islands');
INSERT INTO fx_countries (`id`, `value`) VALUES (3, 'Albania');
INSERT INTO fx_countries (`id`, `value`) VALUES (4, 'Algeria');
INSERT INTO fx_countries (`id`, `value`) VALUES (5, 'American Samoa');
INSERT INTO fx_countries (`id`, `value`) VALUES (6, 'Andorra');
INSERT INTO fx_countries (`id`, `value`) VALUES (7, 'Angola');
INSERT INTO fx_countries (`id`, `value`) VALUES (8, 'Anguilla');
INSERT INTO fx_countries (`id`, `value`) VALUES (9, 'Antarctica');
INSERT INTO fx_countries (`id`, `value`) VALUES (10, 'Antigua and Barbuda');
INSERT INTO fx_countries (`id`, `value`) VALUES (11, 'Argentina');
INSERT INTO fx_countries (`id`, `value`) VALUES (12, 'Armenia');
INSERT INTO fx_countries (`id`, `value`) VALUES (13, 'Aruba');
INSERT INTO fx_countries (`id`, `value`) VALUES (14, 'Australia');
INSERT INTO fx_countries (`id`, `value`) VALUES (15, 'Austria');
INSERT INTO fx_countries (`id`, `value`) VALUES (16, 'Azerbaijan');
INSERT INTO fx_countries (`id`, `value`) VALUES (17, 'Bahamas');
INSERT INTO fx_countries (`id`, `value`) VALUES (18, 'Bahrain');
INSERT INTO fx_countries (`id`, `value`) VALUES (19, 'Bangladesh');
INSERT INTO fx_countries (`id`, `value`) VALUES (20, 'Barbados');
INSERT INTO fx_countries (`id`, `value`) VALUES (21, 'Belarus');
INSERT INTO fx_countries (`id`, `value`) VALUES (22, 'Belgium');
INSERT INTO fx_countries (`id`, `value`) VALUES (23, 'Belize');
INSERT INTO fx_countries (`id`, `value`) VALUES (24, 'Benin');
INSERT INTO fx_countries (`id`, `value`) VALUES (25, 'Bermuda');
INSERT INTO fx_countries (`id`, `value`) VALUES (26, 'Bhutan');
INSERT INTO fx_countries (`id`, `value`) VALUES (27, 'Bolivia');
INSERT INTO fx_countries (`id`, `value`) VALUES (28, 'Bosnia and Herzegovina');
INSERT INTO fx_countries (`id`, `value`) VALUES (29, 'Botswana');
INSERT INTO fx_countries (`id`, `value`) VALUES (30, 'Bouvet Island');
INSERT INTO fx_countries (`id`, `value`) VALUES (31, 'Brazil');
INSERT INTO fx_countries (`id`, `value`) VALUES (32, 'British Indian Ocean territory');
INSERT INTO fx_countries (`id`, `value`) VALUES (33, 'Brunei Darussalam');
INSERT INTO fx_countries (`id`, `value`) VALUES (34, 'Bulgaria');
INSERT INTO fx_countries (`id`, `value`) VALUES (35, 'Burkina Faso');
INSERT INTO fx_countries (`id`, `value`) VALUES (36, 'Burundi');
INSERT INTO fx_countries (`id`, `value`) VALUES (37, 'Cambodia');
INSERT INTO fx_countries (`id`, `value`) VALUES (38, 'Cameroon');
INSERT INTO fx_countries (`id`, `value`) VALUES (39, 'Canada');
INSERT INTO fx_countries (`id`, `value`) VALUES (40, 'Cape Verde');
INSERT INTO fx_countries (`id`, `value`) VALUES (41, 'Cayman Islands');
INSERT INTO fx_countries (`id`, `value`) VALUES (42, 'Central African Republic');
INSERT INTO fx_countries (`id`, `value`) VALUES (43, 'Chad');
INSERT INTO fx_countries (`id`, `value`) VALUES (44, 'Chile');
INSERT INTO fx_countries (`id`, `value`) VALUES (45, 'China');
INSERT INTO fx_countries (`id`, `value`) VALUES (46, 'Christmas Island');
INSERT INTO fx_countries (`id`, `value`) VALUES (47, 'Cocos (Keeling) Islands');
INSERT INTO fx_countries (`id`, `value`) VALUES (48, 'Colombia');
INSERT INTO fx_countries (`id`, `value`) VALUES (49, 'Comoros');
INSERT INTO fx_countries (`id`, `value`) VALUES (50, 'Congo');
INSERT INTO fx_countries (`id`, `value`) VALUES (51, 'Congo');
INSERT INTO fx_countries (`id`, `value`) VALUES (52, ' Democratic Republic');
INSERT INTO fx_countries (`id`, `value`) VALUES (53, 'Cook Islands');
INSERT INTO fx_countries (`id`, `value`) VALUES (54, 'Costa Rica');
INSERT INTO fx_countries (`id`, `value`) VALUES (55, 'Ivory Coast (Ivory Coast)');
INSERT INTO fx_countries (`id`, `value`) VALUES (56, 'Croatia (Hrvatska)');
INSERT INTO fx_countries (`id`, `value`) VALUES (57, 'Cuba');
INSERT INTO fx_countries (`id`, `value`) VALUES (58, 'Cyprus');
INSERT INTO fx_countries (`id`, `value`) VALUES (59, 'Czech Republic');
INSERT INTO fx_countries (`id`, `value`) VALUES (60, 'Denmark');
INSERT INTO fx_countries (`id`, `value`) VALUES (61, 'Djibouti');
INSERT INTO fx_countries (`id`, `value`) VALUES (62, 'Dominica');
INSERT INTO fx_countries (`id`, `value`) VALUES (63, 'Dominican Republic');
INSERT INTO fx_countries (`id`, `value`) VALUES (64, 'East Timor');
INSERT INTO fx_countries (`id`, `value`) VALUES (65, 'Ecuador');
INSERT INTO fx_countries (`id`, `value`) VALUES (66, 'Egypt');
INSERT INTO fx_countries (`id`, `value`) VALUES (67, 'El Salvador');
INSERT INTO fx_countries (`id`, `value`) VALUES (68, 'Equatorial Guinea');
INSERT INTO fx_countries (`id`, `value`) VALUES (69, 'Eritrea');
INSERT INTO fx_countries (`id`, `value`) VALUES (70, 'Estonia');
INSERT INTO fx_countries (`id`, `value`) VALUES (71, 'Ethiopia');
INSERT INTO fx_countries (`id`, `value`) VALUES (72, 'Falkland Islands');
INSERT INTO fx_countries (`id`, `value`) VALUES (73, 'Faroe Islands');
INSERT INTO fx_countries (`id`, `value`) VALUES (74, 'Fiji');
INSERT INTO fx_countries (`id`, `value`) VALUES (75, 'Finland');
INSERT INTO fx_countries (`id`, `value`) VALUES (76, 'France');
INSERT INTO fx_countries (`id`, `value`) VALUES (77, 'French Guiana');
INSERT INTO fx_countries (`id`, `value`) VALUES (78, 'French Polynesia');
INSERT INTO fx_countries (`id`, `value`) VALUES (79, 'French Southern Territories');
INSERT INTO fx_countries (`id`, `value`) VALUES (80, 'Gabon');
INSERT INTO fx_countries (`id`, `value`) VALUES (81, 'Gambia');
INSERT INTO fx_countries (`id`, `value`) VALUES (82, 'Georgia');
INSERT INTO fx_countries (`id`, `value`) VALUES (83, 'Germany');
INSERT INTO fx_countries (`id`, `value`) VALUES (84, 'Ghana');
INSERT INTO fx_countries (`id`, `value`) VALUES (85, 'Gibraltar');
INSERT INTO fx_countries (`id`, `value`) VALUES (86, 'Greece');
INSERT INTO fx_countries (`id`, `value`) VALUES (87, 'Greenland');
INSERT INTO fx_countries (`id`, `value`) VALUES (88, 'Grenada');
INSERT INTO fx_countries (`id`, `value`) VALUES (89, 'Guadeloupe');
INSERT INTO fx_countries (`id`, `value`) VALUES (90, 'Guam');
INSERT INTO fx_countries (`id`, `value`) VALUES (91, 'Guatemala');
INSERT INTO fx_countries (`id`, `value`) VALUES (92, 'Guinea');
INSERT INTO fx_countries (`id`, `value`) VALUES (93, 'Guinea-Bissau');
INSERT INTO fx_countries (`id`, `value`) VALUES (94, 'Guyana');
INSERT INTO fx_countries (`id`, `value`) VALUES (95, 'Haiti');
INSERT INTO fx_countries (`id`, `value`) VALUES (96, 'Heard and McDonald Islands');
INSERT INTO fx_countries (`id`, `value`) VALUES (97, 'Honduras');
INSERT INTO fx_countries (`id`, `value`) VALUES (98, 'Hong Kong');
INSERT INTO fx_countries (`id`, `value`) VALUES (99, 'Hungary');
INSERT INTO fx_countries (`id`, `value`) VALUES (100, 'Iceland');
INSERT INTO fx_countries (`id`, `value`) VALUES (101, 'India');
INSERT INTO fx_countries (`id`, `value`) VALUES (102, 'Indonesia');
INSERT INTO fx_countries (`id`, `value`) VALUES (103, 'Iran');
INSERT INTO fx_countries (`id`, `value`) VALUES (104, 'Iraq');
INSERT INTO fx_countries (`id`, `value`) VALUES (105, 'Ireland');
INSERT INTO fx_countries (`id`, `value`) VALUES (106, 'Israel');
INSERT INTO fx_countries (`id`, `value`) VALUES (107, 'Italy');
INSERT INTO fx_countries (`id`, `value`) VALUES (108, 'Jamaica');
INSERT INTO fx_countries (`id`, `value`) VALUES (109, 'Japan');
INSERT INTO fx_countries (`id`, `value`) VALUES (110, 'Jordan');
INSERT INTO fx_countries (`id`, `value`) VALUES (111, 'Kazakhstan');
INSERT INTO fx_countries (`id`, `value`) VALUES (112, 'Kenya');
INSERT INTO fx_countries (`id`, `value`) VALUES (113, 'Kiribati');
INSERT INTO fx_countries (`id`, `value`) VALUES (114, 'Korea (north)');
INSERT INTO fx_countries (`id`, `value`) VALUES (115, 'Korea (south)');
INSERT INTO fx_countries (`id`, `value`) VALUES (116, 'Kuwait');
INSERT INTO fx_countries (`id`, `value`) VALUES (117, 'Kyrgyzstan');
INSERT INTO fx_countries (`id`, `value`) VALUES (118, 'Lao People\'s Democratic Republic');
INSERT INTO fx_countries (`id`, `value`) VALUES (119, 'Latvia');
INSERT INTO fx_countries (`id`, `value`) VALUES (120, 'Lebanon');
INSERT INTO fx_countries (`id`, `value`) VALUES (121, 'Lesotho');
INSERT INTO fx_countries (`id`, `value`) VALUES (122, 'Liberia');
INSERT INTO fx_countries (`id`, `value`) VALUES (123, 'Libyan Arab Jamahiriya');
INSERT INTO fx_countries (`id`, `value`) VALUES (124, 'Liechtenstein');
INSERT INTO fx_countries (`id`, `value`) VALUES (125, 'Lithuania');
INSERT INTO fx_countries (`id`, `value`) VALUES (126, 'Luxembourg');
INSERT INTO fx_countries (`id`, `value`) VALUES (127, 'Macao');
INSERT INTO fx_countries (`id`, `value`) VALUES (128, 'Macedonia');
INSERT INTO fx_countries (`id`, `value`) VALUES (129, 'Madagascar');
INSERT INTO fx_countries (`id`, `value`) VALUES (130, 'Malawi');
INSERT INTO fx_countries (`id`, `value`) VALUES (131, 'Malaysia');
INSERT INTO fx_countries (`id`, `value`) VALUES (132, 'Maldives');
INSERT INTO fx_countries (`id`, `value`) VALUES (133, 'Mali');
INSERT INTO fx_countries (`id`, `value`) VALUES (134, 'Malta');
INSERT INTO fx_countries (`id`, `value`) VALUES (135, 'Marshall Islands');
INSERT INTO fx_countries (`id`, `value`) VALUES (136, 'Martinique');
INSERT INTO fx_countries (`id`, `value`) VALUES (137, 'Mauritania');
INSERT INTO fx_countries (`id`, `value`) VALUES (138, 'Mauritius');
INSERT INTO fx_countries (`id`, `value`) VALUES (139, 'Mayotte');
INSERT INTO fx_countries (`id`, `value`) VALUES (140, 'Mexico');
INSERT INTO fx_countries (`id`, `value`) VALUES (141, 'Micronesia');
INSERT INTO fx_countries (`id`, `value`) VALUES (142, 'Moldova');
INSERT INTO fx_countries (`id`, `value`) VALUES (143, 'Monaco');
INSERT INTO fx_countries (`id`, `value`) VALUES (144, 'Mongolia');
INSERT INTO fx_countries (`id`, `value`) VALUES (145, 'Montserrat');
INSERT INTO fx_countries (`id`, `value`) VALUES (146, 'Morocco');
INSERT INTO fx_countries (`id`, `value`) VALUES (147, 'Mozambique');
INSERT INTO fx_countries (`id`, `value`) VALUES (148, 'Myanmar');
INSERT INTO fx_countries (`id`, `value`) VALUES (149, 'Namibia');
INSERT INTO fx_countries (`id`, `value`) VALUES (150, 'Nauru');
INSERT INTO fx_countries (`id`, `value`) VALUES (151, 'Nepal');
INSERT INTO fx_countries (`id`, `value`) VALUES (152, 'Netherlands');
INSERT INTO fx_countries (`id`, `value`) VALUES (153, 'Netherlands Antilles');
INSERT INTO fx_countries (`id`, `value`) VALUES (154, 'New Caledonia');
INSERT INTO fx_countries (`id`, `value`) VALUES (155, 'New Zealand');
INSERT INTO fx_countries (`id`, `value`) VALUES (156, 'Nicaragua');
INSERT INTO fx_countries (`id`, `value`) VALUES (157, 'Niger');
INSERT INTO fx_countries (`id`, `value`) VALUES (158, 'Nigeria');
INSERT INTO fx_countries (`id`, `value`) VALUES (159, 'Niue');
INSERT INTO fx_countries (`id`, `value`) VALUES (160, 'Norfolk Island');
INSERT INTO fx_countries (`id`, `value`) VALUES (161, 'Northern Mariana Islands');
INSERT INTO fx_countries (`id`, `value`) VALUES (162, 'Norway');
INSERT INTO fx_countries (`id`, `value`) VALUES (163, 'Oman');
INSERT INTO fx_countries (`id`, `value`) VALUES (164, 'Pakistan');
INSERT INTO fx_countries (`id`, `value`) VALUES (165, 'Palau');
INSERT INTO fx_countries (`id`, `value`) VALUES (166, 'Palestinian Territories');
INSERT INTO fx_countries (`id`, `value`) VALUES (167, 'Panama');
INSERT INTO fx_countries (`id`, `value`) VALUES (168, 'Papua New Guinea');
INSERT INTO fx_countries (`id`, `value`) VALUES (169, 'Paraguay');
INSERT INTO fx_countries (`id`, `value`) VALUES (170, 'Peru');
INSERT INTO fx_countries (`id`, `value`) VALUES (171, 'Philippines');
INSERT INTO fx_countries (`id`, `value`) VALUES (172, 'Pitcairn');
INSERT INTO fx_countries (`id`, `value`) VALUES (173, 'Poland');
INSERT INTO fx_countries (`id`, `value`) VALUES (174, 'Portugal');
INSERT INTO fx_countries (`id`, `value`) VALUES (175, 'Puerto Rico');
INSERT INTO fx_countries (`id`, `value`) VALUES (176, 'Qatar');
INSERT INTO fx_countries (`id`, `value`) VALUES (177, 'Runion');
INSERT INTO fx_countries (`id`, `value`) VALUES (178, 'Romania');
INSERT INTO fx_countries (`id`, `value`) VALUES (179, 'Russian Federation');
INSERT INTO fx_countries (`id`, `value`) VALUES (180, 'Rwanda');
INSERT INTO fx_countries (`id`, `value`) VALUES (181, 'Saint Helena');
INSERT INTO fx_countries (`id`, `value`) VALUES (182, 'Saint Kitts and Nevis');
INSERT INTO fx_countries (`id`, `value`) VALUES (183, 'Saint Lucia');
INSERT INTO fx_countries (`id`, `value`) VALUES (184, 'Saint Pierre and Miquelon');
INSERT INTO fx_countries (`id`, `value`) VALUES (185, 'Saint Vincent and the Grenadines');
INSERT INTO fx_countries (`id`, `value`) VALUES (186, 'Samoa');
INSERT INTO fx_countries (`id`, `value`) VALUES (187, 'San Marino');
INSERT INTO fx_countries (`id`, `value`) VALUES (188, 'Sao Tome and Principe');
INSERT INTO fx_countries (`id`, `value`) VALUES (189, 'Saudi Arabia');
INSERT INTO fx_countries (`id`, `value`) VALUES (190, 'Senegal');
INSERT INTO fx_countries (`id`, `value`) VALUES (191, 'Serbia and Montenegro');
INSERT INTO fx_countries (`id`, `value`) VALUES (192, 'Seychelles');
INSERT INTO fx_countries (`id`, `value`) VALUES (193, 'Sierra Leone');
INSERT INTO fx_countries (`id`, `value`) VALUES (194, 'Singapore');
INSERT INTO fx_countries (`id`, `value`) VALUES (195, 'Slovakia');
INSERT INTO fx_countries (`id`, `value`) VALUES (196, 'Slovenia');
INSERT INTO fx_countries (`id`, `value`) VALUES (197, 'Solomon Islands');
INSERT INTO fx_countries (`id`, `value`) VALUES (198, 'Somalia');
INSERT INTO fx_countries (`id`, `value`) VALUES (199, 'South Africa');
INSERT INTO fx_countries (`id`, `value`) VALUES (200, 'South Georgia and the South Sandwich Islands');
INSERT INTO fx_countries (`id`, `value`) VALUES (201, 'Spain');
INSERT INTO fx_countries (`id`, `value`) VALUES (202, 'Sri Lanka');
INSERT INTO fx_countries (`id`, `value`) VALUES (203, 'Sudan');
INSERT INTO fx_countries (`id`, `value`) VALUES (204, 'Suriname');
INSERT INTO fx_countries (`id`, `value`) VALUES (205, 'Svalbard and Jan Mayen Islands');
INSERT INTO fx_countries (`id`, `value`) VALUES (206, 'Swaziland');
INSERT INTO fx_countries (`id`, `value`) VALUES (207, 'Sweden');
INSERT INTO fx_countries (`id`, `value`) VALUES (208, 'Switzerland');
INSERT INTO fx_countries (`id`, `value`) VALUES (209, 'Syria');
INSERT INTO fx_countries (`id`, `value`) VALUES (210, 'Taiwan');
INSERT INTO fx_countries (`id`, `value`) VALUES (211, 'Tajikistan');
INSERT INTO fx_countries (`id`, `value`) VALUES (212, 'Tanzania');
INSERT INTO fx_countries (`id`, `value`) VALUES (213, 'Thailand');
INSERT INTO fx_countries (`id`, `value`) VALUES (214, 'Togo');
INSERT INTO fx_countries (`id`, `value`) VALUES (215, 'Tokelau');
INSERT INTO fx_countries (`id`, `value`) VALUES (216, 'Tonga');
INSERT INTO fx_countries (`id`, `value`) VALUES (217, 'Trinidad and Tobago');
INSERT INTO fx_countries (`id`, `value`) VALUES (218, 'Tunisia');
INSERT INTO fx_countries (`id`, `value`) VALUES (219, 'Turkey');
INSERT INTO fx_countries (`id`, `value`) VALUES (220, 'Turkmenistan');
INSERT INTO fx_countries (`id`, `value`) VALUES (221, 'Turks and Caicos Islands');
INSERT INTO fx_countries (`id`, `value`) VALUES (222, 'Tuvalu');
INSERT INTO fx_countries (`id`, `value`) VALUES (223, 'Uganda');
INSERT INTO fx_countries (`id`, `value`) VALUES (224, 'Ukraine');
INSERT INTO fx_countries (`id`, `value`) VALUES (225, 'United Arab Emirates');
INSERT INTO fx_countries (`id`, `value`) VALUES (226, 'United Kingdom');
INSERT INTO fx_countries (`id`, `value`) VALUES (227, 'United States of America');
INSERT INTO fx_countries (`id`, `value`) VALUES (228, 'Uruguay');
INSERT INTO fx_countries (`id`, `value`) VALUES (229, 'Uzbekistan');
INSERT INTO fx_countries (`id`, `value`) VALUES (230, 'Vanuatu');
INSERT INTO fx_countries (`id`, `value`) VALUES (231, 'Vatican City');
INSERT INTO fx_countries (`id`, `value`) VALUES (232, 'Venezuela');
INSERT INTO fx_countries (`id`, `value`) VALUES (233, 'Vietnam');
INSERT INTO fx_countries (`id`, `value`) VALUES (234, 'Virgin Islands (British)');
INSERT INTO fx_countries (`id`, `value`) VALUES (235, 'Virgin Islands (US)');
INSERT INTO fx_countries (`id`, `value`) VALUES (236, 'Wallis and Futuna Islands');
INSERT INTO fx_countries (`id`, `value`) VALUES (237, 'Western Sahara');
INSERT INTO fx_countries (`id`, `value`) VALUES (238, 'Yemen');
INSERT INTO fx_countries (`id`, `value`) VALUES (239, 'Zaire');
INSERT INTO fx_countries (`id`, `value`) VALUES (240, 'Zambia');
INSERT INTO fx_countries (`id`, `value`) VALUES (241, 'Zimbabwe');


#
# TABLE STRUCTURE FOR: fx_estimate_items
#

DROP TABLE IF EXISTS fx_estimate_items;

CREATE TABLE `fx_estimate_items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `estimate_id` int(11) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `unit_cost` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_cost` float NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO fx_estimate_items (`item_id`, `estimate_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (1, 1, 'Domain SSL Installation', '11.9', 3, '35.7', '2014-07-27 15:42:23');
INSERT INTO fx_estimate_items (`item_id`, `estimate_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (2, 1, 'Email Setup', '20.3', 2, '40.6', '2014-07-27 15:42:34');
INSERT INTO fx_estimate_items (`item_id`, `estimate_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (6, 3, 'Wordpress Newsletter plugin', '350', 3, '1050', '2014-07-27 15:44:11');
INSERT INTO fx_estimate_items (`item_id`, `estimate_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (7, 3, 'Domain SSL Installation', '60', 1, '60', '2014-07-27 15:44:25');
INSERT INTO fx_estimate_items (`item_id`, `estimate_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (8, 4, 'Email Setup', '320', 2, '640', '2014-07-27 15:45:41');
INSERT INTO fx_estimate_items (`item_id`, `estimate_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (9, 4, 'Domain SSL Installation', '60.98', 2, '121.96', '2014-07-27 15:46:00');
INSERT INTO fx_estimate_items (`item_id`, `estimate_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (10, 4, 'Wordpress Newsletter plugin', '350', 3, '1050', '2014-07-27 15:46:16');
INSERT INTO fx_estimate_items (`item_id`, `estimate_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (11, 5, 'Email Setup', '11.9', 6, '71.4', '2014-07-27 15:59:04');
INSERT INTO fx_estimate_items (`item_id`, `estimate_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (12, 6, 'Ruby Installer', '230', 2, '460', '2014-08-26 10:59:49');
INSERT INTO fx_estimate_items (`item_id`, `estimate_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (13, 6, 'Ruby Bootstrap Theme', '50', 3, '150', '2014-08-26 11:01:46');


#
# TABLE STRUCTURE FOR: fx_estimates
#

DROP TABLE IF EXISTS fx_estimates;

CREATE TABLE `fx_estimates` (
  `est_id` int(11) NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(32) NOT NULL,
  `client` varchar(64) NOT NULL,
  `due_date` varchar(40) NOT NULL,
  `notes` varchar(255) NOT NULL DEFAULT 'Looking forward for your business.',
  `status` enum('Accepted','Declined','Pending') NOT NULL DEFAULT 'Pending',
  `date_sent` varchar(64) NOT NULL,
  `est_deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `emailed` enum('Yes','No') NOT NULL DEFAULT 'No',
  `invoiced` enum('Yes','No') DEFAULT 'No',
  PRIMARY KEY (`est_id`),
  UNIQUE KEY `reference_no` (`reference_no`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO fx_estimates (`est_id`, `reference_no`, `client`, `due_date`, `notes`, `status`, `date_sent`, `est_deleted`, `date_saved`, `emailed`, `invoiced`) VALUES (1, '427174', '2', '13-08-2014', 'Looking forward to doing business with you.', 'Declined', '2014-07-27 15:59:57', 'No', '2014-07-27 15:42:08', 'Yes', 'No');
INSERT INTO fx_estimates (`est_id`, `reference_no`, `client`, `due_date`, `notes`, `status`, `date_sent`, `est_deleted`, `date_saved`, `emailed`, `invoiced`) VALUES (2, '734922', '3', '21-08-2014', 'Looking forward to doing business with you.', 'Pending', '', 'No', '2014-07-27 15:42:53', 'No', 'No');
INSERT INTO fx_estimates (`est_id`, `reference_no`, `client`, `due_date`, `notes`, `status`, `date_sent`, `est_deleted`, `date_saved`, `emailed`, `invoiced`) VALUES (3, '574873', '12', '26-09-2014', 'Looking forward to doing business with you.', 'Pending', '2014-07-27 15:44:57', 'No', '2014-07-27 15:44:00', 'Yes', 'Yes');
INSERT INTO fx_estimates (`est_id`, `reference_no`, `client`, `due_date`, `notes`, `status`, `date_sent`, `est_deleted`, `date_saved`, `emailed`, `invoiced`) VALUES (4, '882252', '2', '22-08-2014', 'Looking forward to doing business with you.', 'Accepted', '2014-07-27 15:46:32', 'No', '2014-07-27 15:45:28', 'Yes', 'No');
INSERT INTO fx_estimates (`est_id`, `reference_no`, `client`, `due_date`, `notes`, `status`, `date_sent`, `est_deleted`, `date_saved`, `emailed`, `invoiced`) VALUES (5, '993223', '4', '23-08-2014', 'Looking forward to doing business with you.', 'Accepted', '', 'No', '2014-07-27 15:58:52', 'Yes', 'No');
INSERT INTO fx_estimates (`est_id`, `reference_no`, `client`, `due_date`, `notes`, `status`, `date_sent`, `est_deleted`, `date_saved`, `emailed`, `invoiced`) VALUES (6, '644347', '22', '25-09-2014', 'Looking forward to doing business with you.', 'Pending', '2014-08-26 11:24:28', 'No', '2014-08-26 10:59:27', 'Yes', 'No');


#
# TABLE STRUCTURE FOR: fx_faqs
#

DROP TABLE IF EXISTS fx_faqs;

CREATE TABLE `fx_faqs` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` int(11) NOT NULL,
  `visible` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO fx_faqs (`question_id`, `question`, `answer`, `date_posted`, `author`, `visible`) VALUES (2, 'How do i submit an issue to the Finance Office?', 'When you upload an item to ThemeMisty, one of our staff will review your item to ensure it meets out standards. If your item follows our <a href=\"/pages/browse/uploading-files\">guidelines</a>,we will approve your item for sale.If your theme needs some improvements,our friendly staff will contact you with an aim of solving issues that would affect your sales negatively.', '2013-10-29 06:40:35', 1, 'Yes');
INSERT INTO fx_faqs (`question_id`, `question`, `answer`, `date_posted`, `author`, `visible`) VALUES (3, 'My fee details are wrong', 'Yes. The good news is that we do not restrict you from selling your work elsewhere.When you setup an account with us, your rate is set to 60%. Authors can earn up to 80% rate depending on sales. <a href=\"/pages/browse/payment-rates\" target=\"_blank\">Check our Payments Rates</a>', '2013-11-03 16:35:25', 2, 'Yes');
INSERT INTO fx_faqs (`question_id`, `question`, `answer`, `date_posted`, `author`, `visible`) VALUES (4, 'How do i register Units?', 'Yes, they are the authors\' work and they retain full rights to the items they sell here. We only provide a platform for selling their designs.', '2013-11-03 16:40:47', 1, 'Yes');
INSERT INTO fx_faqs (`question_id`, `question`, `answer`, `date_posted`, `author`, `visible`) VALUES (6, 'My maximum CF has exceeded the required CF', 'Payments are calculated at the end of each calendar month and paid out on the 15th of the following month. We are currently paying Authors via Paypal so you must have a <a href=\"https://paypal.com\" target=\"_blank\">PayPal Account</a>. New payment methods will be added soon and we\'ll keep you posted.', '2013-11-03 16:47:57', 2, 'Yes');
INSERT INTO fx_faqs (`question_id`, `question`, `answer`, `date_posted`, `author`, `visible`) VALUES (7, 'How do i calculate my CF?', 'It is recommended to offer support to your customers so you can increase your sales  but no, it\'s not required unless the file is actually broken.', '2013-11-03 16:47:57', 3, 'Yes');
INSERT INTO fx_faqs (`question_id`, `question`, `answer`, `date_posted`, `author`, `visible`) VALUES (8, 'If there is something wrong with the item I purchased can I get a refund?', 'If you have purchased an item and it does not work as described or is corrupt, please contact our support with information about your order number and the details of the problem. The item will be investigated, and if it is found to be faulty or not working as described it will be fixed or a refund will be offered. Please note that because of the nature of digital goods, support unfortunately cannot issue a refund unless the item is malfunctioning or corrupt, or does not work as described.<a href=\"http://support.thememisty.com\" target=\"_blank\"> Read more</a> on our knowledgebase', '2013-11-03 16:51:03', 3, 'Yes');
INSERT INTO fx_faqs (`question_id`, `question`, `answer`, `date_posted`, `author`, `visible`) VALUES (11, 'Do you have a referral program?', 'Yes,when you refer a new user to our marketplace,you get 10% of every purchase made by that user. You will continue earning money on every purchase <strong>forever</strong> (not only in first purchase).', '2014-01-01 19:39:35', 1, 'Yes');
INSERT INTO fx_faqs (`question_id`, `question`, `answer`, `date_posted`, `author`, `visible`) VALUES (13, 'Who is responsible for copyright violations in files I\'ve submitted?', 'As the author,you are required to ensure that all files uploaded to the marketplace are entirely your own original content and if it contains assets from someone else, make sure you have the permission to sell them.', '2014-01-01 19:45:31', 1, 'Yes');
INSERT INTO fx_faqs (`question_id`, `question`, `answer`, `date_posted`, `author`, `visible`) VALUES (14, 'Who determines the price of my files?', 'The Author. You know your work more than we do that\'s why you are required to set your own price.', '2014-01-01 19:48:04', 1, 'Yes');
INSERT INTO fx_faqs (`question_id`, `question`, `answer`, `date_posted`, `author`, `visible`) VALUES (15, 'Do you offer Theme customization?', 'For Theme customization please contact the author via his/her profile contact form. ThemeMisty Marketplace does not offer customization, we only sell themes.', '2014-01-03 17:47:30', 1, 'Yes');
INSERT INTO fx_faqs (`question_id`, `question`, `answer`, `date_posted`, `author`, `visible`) VALUES (16, 'When do sellers get paid?', '<table class=\"table table-striped table-bordered\">\n              <tbody><tr>\n                <th style=\"background: #2a776b; padding: 1em; color:#fff;\">Sales Period</th>\n                <th style=\"background: #2a776b; padding: 1em; color:#fff;\">Payment Date</th>\n              </tr>\n              <tr>                \n                <td>1st January - 31st January </td>\n                <td>15th February</td>\n              </tr>\n              <tr>\n                <td>1st February - 28/29th February</td>\n                <td>15th March</td>\n              \n              </tr>\n              <tr>\n                <td>1st March - 31st March </td>\n                <td>15th April</td>\n              \n              </tr>\n              <tr>\n                <td>1st April - 30th April </td>\n                <td>15th May</td>\n            \n              </tr>\n              <tr>\n               <td>1st May - 31st May </td>\n                <td>15th June</td>\n              \n              </tr>\n              <tr>\n               <td>1st June - 30th June </td>\n                <td>15th July</td>\n              \n              </tr>\n              <tr>\n               <td>1st July - 31st July </td>\n                <td>15th August</td>\n              \n              </tr>\n              <tr>\n               <td>1st August - 31st August </td>\n                <td>15th September</td>\n              \n              </tr>\n              <tr>\n               <td>1st September - 30th September </td>\n                <td>15th October</td>\n              \n              </tr>\n              <tr>\n               <td>1st October - 31st October </td>\n                <td>15th November</td>\n             \n              </tr>\n              <tr>\n               <td>1st November - 30th November </td>\n                <td>15th December</td>\n             \n              </tr>\n              <tr>\n               <td>1st December - 31st December </td>\n                <td>15th January</td>\n             \n              </tr>\n            </tbody></table>', '2013-11-03 17:17:43', 2, 'Yes');
INSERT INTO fx_faqs (`question_id`, `question`, `answer`, `date_posted`, `author`, `visible`) VALUES (17, 'What is the commission rate per author?', '<table class=\"table table-striped table-bordered\">\n              <tbody><tr>\n                <th style=\"background: #2a776b; padding: 1em; color:#fff;\">Commission Rate (%)</th>\n                <th style=\"background: #2a776b; padding: 1em; color:#fff;\">Sales in USD</th>\n              </tr>\n              <tr>                \n                <td>60% </td>\n                <td>$0.00 <span class=\"badge\">Silver Member</span></td>\n              \n              </tr>\n              <tr>\n                <td>61% </td>\n                <td>$4,500.00</td>\n             \n              </tr>\n              <tr>\n                <td>62% </td>\n                <td>$9,000.00</td>\n              \n              </tr>\n              <tr>\n                <td>63% </td>\n                <td>$13,500.00</td>\n              \n              </tr>\n              <tr>\n               <td>64% </td>\n                <td>$18,000.00</td>\n              \n              </tr>\n              <tr>\n                <td>65% </td>\n                <td>$22,500.00</td>\n              \n              </tr>\n              <tr>\n                <td>66% </td>\n                <td>$27,000.00</td>\n              \n              </tr>\n              <tr>\n                <td>67% </td>\n                <td>$31,500.00 </td>\n              \n              </tr>\n              <tr>\n                <td>68% </td>\n                <td>$36,000.00</td>\n              \n              </tr>\n              <tr>\n                <td>69% </td>\n                <td>$40,500.00</td>\n              \n              </tr>\n              <tr>\n                <td>70% </td>\n                <td>$45,000.00 <span class=\"badge badge-warning\">Gold Member</span></td>\n             \n              </tr>\n              <tr>\n                <td>71% </td>\n                <td>$49,500.00</td>\n              \n              </tr>\n              <tr>\n                <td>72% </td>\n                <td>$54,000.00</td>\n              \n              </tr>\n              <tr>\n                <td>73% </td>\n                <td>$58,500.00</td>\n              \n              </tr>\n              <tr>\n                <td>74% </td>\n                <td>$63,000.00</td>\n              \n              </tr>\n              <tr>\n                <td>75% </td>\n                <td>$67,500.00</td>\n              \n              </tr>\n              <tr>\n                <td>76% </td>\n                <td>$72,000.00</td>\n             \n              </tr>\n              <tr>\n                <td>77% </td>\n                <td>$76,500.00</td>\n              \n              </tr>\n              <tr>\n                <td>78% </td>\n                <td>$81,000.00</td>\n              \n              </tr>\n              <tr>\n                <td>79% </td>\n                <td>$85,500.00</td>\n              \n              </tr>\n              <tr>\n                <td>80% </td>\n                <td>Over $90,000.00 <span class=\"badge badge-success\">Superstar Member</span></td>\n              \n              </tr>\n            </tbody></table>', '2013-11-03 17:07:09', 3, 'Yes');


#
# TABLE STRUCTURE FOR: fx_files
#

DROP TABLE IF EXISTS fx_files;

CREATE TABLE `fx_files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `project` int(11) NOT NULL,
  `file_name` text NOT NULL,
  `description` text NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO fx_files (`file_id`, `project`, `file_name`, `description`, `uploaded_by`, `date_posted`) VALUES (16, 1, 'FREELANCER-PROJECT-343253-0.png', 'Description', 1, '2014-07-10 19:19:34');
INSERT INTO fx_files (`file_id`, `project`, `file_name`, `description`, `uploaded_by`, `date_posted`) VALUES (17, 2, 'FREELANCER-PROJECT-765546-0.png', 'Description', 1, '2014-07-10 19:24:22');


#
# TABLE STRUCTURE FOR: fx_invoices
#

DROP TABLE IF EXISTS fx_invoices;

CREATE TABLE `fx_invoices` (
  `inv_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `emailed` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`inv_id`),
  UNIQUE KEY `reference_no` (`reference_no`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (1, '923852', '2', '31-08-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', 'No', 0, 'Unpaid', 0, '2014-07-28 19:15:56', 'No', '2014-05-31 12:28:25', 'Yes');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (2, '659386', '2', '14-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-05-31 12:28:25', 'No', '2014-05-31 12:30:53', 'No');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (3, '673957', '3', '07-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-06-25 19:18:22', 'No', '2014-05-31 12:31:53', 'Yes');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (4, '129464', '4', '28-08-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', 'No', 0, 'Unpaid', 0, '2014-06-02 12:28:25', 'No', '2014-06-01 19:22:37', 'No');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (5, '423291', '3', '10-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-06-24 19:03:57', 'No', '2014-06-02 17:28:49', 'Yes');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (6, '222867', '4', '10-07-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '', 'No', '2014-06-22 13:11:12', 'No');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (7, '884439', '11', '25-06-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-06-24 19:22:29', 'No', '2014-06-22 13:12:57', 'Yes');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (8, '418115', '17', '24-07-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', '', 0, 'Unpaid', 0, '2014-06-29 18:49:51', 'No', '2014-06-29 18:21:26', 'Yes');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (9, '869575', '9', '13-08-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', 'No', 0, 'Unpaid', 0, '', 'No', '2014-07-20 18:19:51', 'No');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (10, '848322', '13', '16-08-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'No', 'Yes', 30, 'Unpaid', 0, '', 'Yes', '2014-07-20 18:26:21', 'No');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (11, '185387', '8', '09-08-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', 'No', 7, 'Unpaid', 0, '2014-07-26 19:11:42', 'No', '2014-07-23 18:36:13', 'Yes');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (12, '356413', '13', '06-08-2014', 'A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.', 'Yes', 'No', 7, 'Unpaid', 0, '', 'No', '2014-07-23 18:53:47', 'No');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (15, '193461', '3', '22-08-2014', 'Looking forward to doing business with you.', 'Yes', 'No', 31, 'Unpaid', 0, '', 'No', '2014-07-27 09:46:47', 'No');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (16, '191885', '15', '28-08-2014', 'Looking forward to doing business with you.', 'Yes', 'No', 31, 'Unpaid', 0, '', 'No', '2014-07-27 09:48:05', 'No');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (17, '665175', '12', '12-09-2014', 'Looking forward to doing business with you.', 'Yes', 'No', 31, 'Unpaid', 0, '', 'No', '2014-07-27 09:52:12', 'No');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (19, '882252', '2', '22-08-2014', 'Looking forward to doing business with you.', 'Yes', 'No', 31, 'Unpaid', 0, '', 'No', '2014-07-27 15:51:16', 'No');
INSERT INTO fx_invoices (`inv_id`, `reference_no`, `client`, `due_date`, `notes`, `allow_paypal`, `recurring`, `r_freq`, `status`, `archived`, `date_sent`, `inv_deleted`, `date_saved`, `emailed`) VALUES (20, '574873', '12', '26-09-2014', 'Looking forward to doing business with you.', 'Yes', 'No', 31, 'Unpaid', 0, '', 'No', '2014-08-26 10:55:01', 'No');


#
# TABLE STRUCTURE FOR: fx_items
#

DROP TABLE IF EXISTS fx_items;

CREATE TABLE `fx_items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `unit_cost` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_cost` float NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (1, 1, 'Sample Item', '5', 100, '1500', '2014-06-10 05:00:00');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (2, 2, 'Sample Item 2', '2', 200, '200', '2014-06-11 07:19:00');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (3, 1, 'iPhone 5 32GB White & Silver (GSM) Unlocked ', '320', 2, '640', '2014-06-11 03:00:00');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (4, 1, 'iPad mini with Wi-Fi 32GB - White & Silver ', '200', 4, '800', '2014-06-11 04:00:00');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (5, 3, 'My description here', '60', 2, '120', '2014-06-07 16:14:29');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (6, 3, 'Sample web design project', '70', 3, '210', '2014-06-07 16:46:43');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (7, 3, 'Web Project', '350', 1, '350', '2014-06-07 17:31:53');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (8, 1, 'Testing Flash data', '20', 1, '20', '2014-06-07 18:05:51');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (9, 5, 'Joomla Theme', '25', 2, '50', '2014-06-07 18:15:26');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (10, 5, 'Wordpress Plugin', '240', 1, '240', '2014-06-12 18:59:34');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (11, 7, 'Bootstrap 3 Theme Dev', '750', 1, '750', '2014-06-22 13:13:25');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (12, 7, 'Codecanyon Wordpress Plugin', '450', 2, '900', '2014-06-22 13:13:45');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (14, 8, 'Email Marketing', '50', 1, '50', '2014-06-29 18:21:50');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (15, 8, 'Mailchimp Wordpress Plugin', '350', 1, '350', '2014-06-29 18:22:12');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (16, 1, 'Wordpress Plugin', '100', 1, '100', '2014-07-07 10:56:01');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (17, 1, 'Web Design http://sample.com', '3500', 1, '3500', '2014-07-10 20:17:27');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (20, 5, 'Develop and Installation', '290', 1, '290', '2014-07-20 18:05:36');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (22, 9, 'Joomla Theme', '200', 2, '400', '2014-07-20 18:20:05');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (23, 9, 'Develop and Installation', '290', 2, '580', '2014-07-20 18:22:04');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (30, 4, 'Joomla Theme', '200', 3, '600', '2014-07-20 20:47:27');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (31, 9, 'Joomla Theme', '200', 2, '400', '2014-07-21 13:27:07');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (32, 9, 'Buy new domain', '10', 1, '10', '2014-07-21 13:27:29');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (33, 8, 'Web Development', '50', 1, '50', '2014-07-23 18:25:30');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (34, 11, 'Setup the Main Theme Menu', '25', 3, '75', '2014-07-23 18:36:41');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (35, 11, 'Wordpress Newsletter plugin', '350', 2, '700', '2014-07-23 18:37:10');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (36, 12, 'Develop and Installation', '290', 6, '1740', '2014-07-23 18:53:57');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (39, 12, 'Footer Copyright', '45', 3, '135', '2014-07-25 19:28:29');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (40, 13, 'Email Setup', '90', 1, '90', '2014-07-27 09:43:59');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (41, 13, 'Domain SSL Installation', '100', 1, '100', '2014-07-27 09:43:59');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (42, 13, 'Buy new domain', '12', 1, '12', '2014-07-27 09:43:59');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (43, 13, 'Wordpress Newsletter plugin', '11.9', 1, '11.9', '2014-07-27 09:43:59');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (44, 15, 'Email Setup', '90', 1, '90', '2014-07-27 09:46:47');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (45, 15, 'Domain SSL Installation', '100', 1, '100', '2014-07-27 09:46:47');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (48, 16, 'Wordpress Newsletter plugin', '560', 3, '1680', '2014-07-27 09:48:05');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (49, 17, 'Domain SSL Installation', '11.9', 3, '35.7', '2014-07-27 09:52:12');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (50, 19, 'Email Setup', '320', 2, '640', '2014-07-27 15:51:16');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (51, 19, 'Domain SSL Installation', '60.98', 2, '121.96', '2014-07-27 15:51:16');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (52, 19, 'Wordpress Newsletter plugin', '350', 3, '1050', '2014-07-27 15:51:16');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (53, 4, 'Develop and Installation', '290', 2, '580', '2014-08-09 19:18:41');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (54, 4, 'Joomla Theme', '200', 1, '200', '2014-08-09 19:19:06');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (56, 6, 'Joomla Plugin', '35', 2, '70', '2014-08-11 18:10:14');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (57, 15, 'Wordpress Updater', '120', 1, '120', '2014-08-25 23:18:09');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (58, 20, 'Wordpress Newsletter plugin', '350', 3, '1050', '2014-08-26 10:55:02');
INSERT INTO fx_items (`item_id`, `invoice_id`, `item_desc`, `unit_cost`, `quantity`, `total_cost`, `date_saved`) VALUES (59, 20, 'Domain SSL Installation', '60', 1, '60', '2014-08-26 10:55:02');


#
# TABLE STRUCTURE FOR: fx_items_saved
#

DROP TABLE IF EXISTS fx_items_saved;

CREATE TABLE `fx_items_saved` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_desc` varchar(200) NOT NULL,
  `unit_cost` int(11) NOT NULL,
  `deleted` enum('Yes','No') DEFAULT 'No',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO fx_items_saved (`item_id`, `item_desc`, `unit_cost`, `deleted`) VALUES (1, 'Web Development', 50, 'No');
INSERT INTO fx_items_saved (`item_id`, `item_desc`, `unit_cost`, `deleted`) VALUES (2, 'Joomla Theme', 200, 'No');
INSERT INTO fx_items_saved (`item_id`, `item_desc`, `unit_cost`, `deleted`) VALUES (3, 'Develop and Installation', 290, 'No');
INSERT INTO fx_items_saved (`item_id`, `item_desc`, `unit_cost`, `deleted`) VALUES (4, 'Footer Copyright', 50, 'No');
INSERT INTO fx_items_saved (`item_id`, `item_desc`, `unit_cost`, `deleted`) VALUES (7, 'Sliding Images', 130, 'No');
INSERT INTO fx_items_saved (`item_id`, `item_desc`, `unit_cost`, `deleted`) VALUES (9, 'Wordpress Updater', 120, 'No');
INSERT INTO fx_items_saved (`item_id`, `item_desc`, `unit_cost`, `deleted`) VALUES (10, 'Ruby Application', 350, 'No');
INSERT INTO fx_items_saved (`item_id`, `item_desc`, `unit_cost`, `deleted`) VALUES (11, 'Ruby Bootstrap 3 Theme', 230, 'No');


#
# TABLE STRUCTURE FOR: fx_login_attempts
#

DROP TABLE IF EXISTS fx_login_attempts;

CREATE TABLE `fx_login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

#
# TABLE STRUCTURE FOR: fx_messages
#

DROP TABLE IF EXISTS fx_messages;

CREATE TABLE `fx_messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_to` int(11) NOT NULL,
  `user_from` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` enum('Read','Unread') NOT NULL DEFAULT 'Unread',
  `attached_file` varchar(100) NOT NULL,
  `date_received` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO fx_messages (`msg_id`, `user_to`, `user_from`, `message`, `status`, `attached_file`, `date_received`, `deleted`) VALUES (1, 22, 2, 'Please stop killin people you bastard', 'Unread', '', '2014-08-20 16:41:25', 'Yes');
INSERT INTO fx_messages (`msg_id`, `user_to`, `user_from`, `message`, `status`, `attached_file`, `date_received`, `deleted`) VALUES (2, 2, 22, 'You can say that again ', 'Read', '', '2014-08-20 16:41:25', 'No');
INSERT INTO fx_messages (`msg_id`, `user_to`, `user_from`, `message`, `status`, `attached_file`, `date_received`, `deleted`) VALUES (3, 2, 22, 'Macedonia Tourism', 'Read', '', '2014-08-20 17:27:45', 'No');
INSERT INTO fx_messages (`msg_id`, `user_to`, `user_from`, `message`, `status`, `attached_file`, `date_received`, `deleted`) VALUES (15, 1, 4, 'This message is from collaborator', 'Read', '', '2014-08-25 12:50:59', 'Yes');
INSERT INTO fx_messages (`msg_id`, `user_to`, `user_from`, `message`, `status`, `attached_file`, `date_received`, `deleted`) VALUES (16, 4, 2, 'Okay i got it collaborator i am client 3', 'Read', '', '2014-08-25 12:51:33', 'No');
INSERT INTO fx_messages (`msg_id`, `user_to`, `user_from`, `message`, `status`, `attached_file`, `date_received`, `deleted`) VALUES (21, 5, 4, 'Do not show this', 'Read', '', '2014-08-26 12:50:59', 'No');
INSERT INTO fx_messages (`msg_id`, `user_to`, `user_from`, `message`, `status`, `attached_file`, `date_received`, `deleted`) VALUES (22, 4, 1, 'Sema Mari Cruz', 'Read', '', '2014-08-26 12:50:59', 'No');
INSERT INTO fx_messages (`msg_id`, `user_to`, `user_from`, `message`, `status`, `attached_file`, `date_received`, `deleted`) VALUES (23, 7, 4, 'Do not show this', 'Read', '', '2014-08-26 12:50:59', 'No');
INSERT INTO fx_messages (`msg_id`, `user_to`, `user_from`, `message`, `status`, `attached_file`, `date_received`, `deleted`) VALUES (24, 4, 1, 'Testing this', 'Read', '', '2014-08-27 11:08:42', 'No');
INSERT INTO fx_messages (`msg_id`, `user_to`, `user_from`, `message`, `status`, `attached_file`, `date_received`, `deleted`) VALUES (25, 12, 1, 'The Profiler Class will display benchmark results, queries you have run, and $_POST data at the bottom of your pages. This information can be useful during development in order to help with debugging and optimization.', 'Unread', '', '2014-08-27 11:20:11', 'No');
INSERT INTO fx_messages (`msg_id`, `user_to`, `user_from`, `message`, `status`, `attached_file`, `date_received`, `deleted`) VALUES (26, 1, 12, 'The Profiler Class will display benchmark results, queries you have run, and $_POST data at the bottom of your pages. This information can be useful during development in order to help with debugging and optimization.', 'Read', '', '2014-08-27 11:20:11', 'No');


#
# TABLE STRUCTURE FOR: fx_payment_methods
#

DROP TABLE IF EXISTS fx_payment_methods;

CREATE TABLE `fx_payment_methods` (
  `method_id` int(11) NOT NULL AUTO_INCREMENT,
  `method_name` varchar(64) NOT NULL DEFAULT 'Paypal',
  PRIMARY KEY (`method_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO fx_payment_methods (`method_id`, `method_name`) VALUES (1, 'Paypal');
INSERT INTO fx_payment_methods (`method_id`, `method_name`) VALUES (2, 'Cash');


#
# TABLE STRUCTURE FOR: fx_payments
#

DROP TABLE IF EXISTS fx_payments;

CREATE TABLE `fx_payments` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` int(11) NOT NULL,
  `paid_by` int(11) NOT NULL,
  `payment_method` varchar(64) NOT NULL,
  `amount` float NOT NULL,
  `trans_id` varchar(64) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `month_paid` varchar(32) NOT NULL,
  `year_paid` varchar(32) NOT NULL,
  `inv_deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO fx_payments (`p_id`, `invoice`, `paid_by`, `payment_method`, `amount`, `trans_id`, `notes`, `created_date`, `month_paid`, `year_paid`, `inv_deleted`) VALUES (1, 19, 2, '1', '900', '872741', '', '2014-06-28 18:57:53', '08', '2014', 'No');
INSERT INTO fx_payments (`p_id`, `invoice`, `paid_by`, `payment_method`, `amount`, `trans_id`, `notes`, `created_date`, `month_paid`, `year_paid`, `inv_deleted`) VALUES (2, 17, 1, '1', '39.27', '835818', '', '2014-07-28 19:13:24', '07', '2014', 'No');
INSERT INTO fx_payments (`p_id`, `invoice`, `paid_by`, `payment_method`, `amount`, `trans_id`, `notes`, `created_date`, `month_paid`, `year_paid`, `inv_deleted`) VALUES (3, 1, 1, '1', '7216', '874533', '', '2014-07-28 19:16:11', '07', '2014', 'No');
INSERT INTO fx_payments (`p_id`, `invoice`, `paid_by`, `payment_method`, `amount`, `trans_id`, `notes`, `created_date`, `month_paid`, `year_paid`, `inv_deleted`) VALUES (4, 2, 4, '2', '150', '729356', '', '2014-07-28 20:07:49', '08', '2014', 'No');
INSERT INTO fx_payments (`p_id`, `invoice`, `paid_by`, `payment_method`, `amount`, `trans_id`, `notes`, `created_date`, `month_paid`, `year_paid`, `inv_deleted`) VALUES (5, 19, 4, '1', '500', '782294', '', '2014-07-28 20:08:06', '07', '2014', 'No');


#
# TABLE STRUCTURE FOR: fx_posts
#

DROP TABLE IF EXISTS fx_posts;

CREATE TABLE `fx_posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post` text NOT NULL,
  `posted_by` int(11) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO fx_posts (`post_id`, `post`, `posted_by`, `date_posted`, `post_deleted`) VALUES (1, 'Welcome <a href=\"#\">@wmandai</a> enjoy the portal.', 1, '2014-02-25 18:08:17', 'No');
INSERT INTO fx_posts (`post_id`, `post`, `posted_by`, `date_posted`, `post_deleted`) VALUES (2, 'Hi <a href=\"\">@jonathan33</a> please send me the notes. Thanks in advance :-)', 1, '2014-02-26 18:08:17', 'No');
INSERT INTO fx_posts (`post_id`, `post`, `posted_by`, `date_posted`, `post_deleted`) VALUES (3, 'Awesome stuff!', 4, '2014-03-28 15:04:19', 'No');
INSERT INTO fx_posts (`post_id`, `post`, `posted_by`, `date_posted`, `post_deleted`) VALUES (4, 'A good programmer counts from zero', 4, '2014-03-28 15:07:58', 'No');
INSERT INTO fx_posts (`post_id`, `post`, `posted_by`, `date_posted`, `post_deleted`) VALUES (5, 'A good Programmer cares', 4, '2014-03-28 15:09:29', 'No');
INSERT INTO fx_posts (`post_id`, `post`, `posted_by`, `date_posted`, `post_deleted`) VALUES (6, 'A good programmer doesn\'t brag', 4, '2014-03-28 15:10:11', 'No');
INSERT INTO fx_posts (`post_id`, `post`, `posted_by`, `date_posted`, `post_deleted`) VALUES (7, 'I love Envato Marketplace and proud to work there.', 4, '2014-03-28 15:11:22', 'No');
INSERT INTO fx_posts (`post_id`, `post`, `posted_by`, `date_posted`, `post_deleted`) VALUES (8, '  <blockquote>\n            <p>A good programmer writes clean code.</p> <small>Author <cite title=\"William Mandai\">William Mandai</cite></small>\n          </blockquote>', 2, '2014-03-28 16:49:02', 'No');
INSERT INTO fx_posts (`post_id`, `post`, `posted_by`, `date_posted`, `post_deleted`) VALUES (9, 'Check out my new <a href=\"http://bootstrapstore.net\">Bootstrap Marketplace</a>', 5, '2014-03-30 16:52:49', 'No');


#
# TABLE STRUCTURE FOR: fx_project_timer
#

DROP TABLE IF EXISTS fx_project_timer;

CREATE TABLE `fx_project_timer` (
  `timer_id` int(11) NOT NULL AUTO_INCREMENT,
  `project` int(11) NOT NULL,
  `start_time` varchar(64) NOT NULL,
  `end_time` varchar(64) NOT NULL,
  `date_timed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`timer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (1, 2, '1404563147', '1404563173', '2014-07-02 18:48:06');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (2, 1, '1404563147', '1404563173', '2014-07-05 15:26:13');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (3, 1, '1404564042', '1404564351', '2014-07-05 15:45:51');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (4, 1, '1404564765', '1404565179', '2014-07-05 15:59:39');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (5, 1, '1404565206', '1404566421', '2014-07-05 16:20:21');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (6, 1, '1404566469', '1404566563', '2014-07-05 16:22:43');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (7, 2, '1404579536', '1404581506', '2014-07-05 20:31:46');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (8, 7, '1404665858', '1404666031', '2014-07-06 20:00:31');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (9, 1, '1404568778', '1404666058', '2014-07-06 20:00:58');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (10, 7, '1404666093', '1404666577', '2014-07-06 20:09:37');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (11, 2, '1404666404', '1404719405', '2014-07-07 10:50:05');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (12, 3, '1404666339', '1404719553', '2014-07-07 10:52:33');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (13, 7, '1404666597', '1404919962', '2014-07-09 18:32:42');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (14, 5, '1405013904', '1405094057', '2014-07-11 18:54:17');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (15, 8, '1405098980', '1405098989', '2014-07-11 20:16:29');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (16, 8, '1405099781', '1405147440', '2014-07-12 09:44:00');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (17, 4, '1405175295', '1405487517', '2014-07-16 08:11:57');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (18, 8, '1405938192', '1405938205', '2014-07-21 13:23:25');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (19, 8, '1405938214', '1406567567', '2014-07-28 20:12:47');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (20, 7, '1407436839', '1407481865', '2014-08-08 10:11:05');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (21, 3, '1407859943', '1407859967', '2014-08-12 19:12:47');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (22, 5, '1407860800', '1407861434', '2014-08-12 19:37:14');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (23, 7, '1408911200', '1408950697', '2014-08-25 10:11:37');
INSERT INTO fx_project_timer (`timer_id`, `project`, `start_time`, `end_time`, `date_timed`) VALUES (24, 7, '1409045360', '1409046693', '2014-08-26 12:51:33');


#
# TABLE STRUCTURE FOR: fx_projects
#

DROP TABLE IF EXISTS fx_projects;

CREATE TABLE `fx_projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO fx_projects (`project_id`, `project_code`, `project_title`, `client`, `start_date`, `due_date`, `hourly_rate`, `progress`, `description`, `assign_to`, `status`, `timer`, `timer_start`, `time_logged`, `proj_deleted`, `auto_progress`, `estimate_hours`, `date_created`) VALUES (1, 343253, 'Codecanyon PHP Script', 2, '2014/05/09', '2014/07/09', 5, 67, 'Description', 1, 'Active', 'Off', 0, 99387, 'No', 'FALSE', 300, '2014-05-09 22:15:07');
INSERT INTO fx_projects (`project_id`, `project_code`, `project_title`, `client`, `start_date`, `due_date`, `hourly_rate`, `progress`, `description`, `assign_to`, `status`, `timer`, `timer_start`, `time_logged`, `proj_deleted`, `auto_progress`, `estimate_hours`, `date_created`) VALUES (2, 765546, 'Themeforest Wordpress', 2, '2014/05/09', '17-07-2014', 5, 80, 'Description', 4, 'Active', 'Off', 0, 55809, 'No', 'FALSE', 0, '2014-05-09 22:15:07');
INSERT INTO fx_projects (`project_id`, `project_code`, `project_title`, `client`, `start_date`, `due_date`, `hourly_rate`, `progress`, `description`, `assign_to`, `status`, `timer`, `timer_start`, `time_logged`, `proj_deleted`, `auto_progress`, `estimate_hours`, `date_created`) VALUES (3, 46483, 'Test Project', 2, '24-05-2014', '01-08-2014', 5, 63, 'Description', 1, 'Active', 'Off', 0, 57738, 'No', 'FALSE', 0, '2014-05-24 19:40:52');
INSERT INTO fx_projects (`project_id`, `project_code`, `project_title`, `client`, `start_date`, `due_date`, `hourly_rate`, `progress`, `description`, `assign_to`, `status`, `timer`, `timer_start`, `time_logged`, `proj_deleted`, `auto_progress`, `estimate_hours`, `date_created`) VALUES (4, 21735, 'Themeforest Bootstrap Theme db', 9, '24-05-2014', '06-06-2014', 5, 21, 'Description goes here', 1, 'Active', 'Off', 0, 316722, 'No', 'TRUE', 100, '2014-05-24 19:44:20');
INSERT INTO fx_projects (`project_id`, `project_code`, `project_title`, `client`, `start_date`, `due_date`, `hourly_rate`, `progress`, `description`, `assign_to`, `status`, `timer`, `timer_start`, `time_logged`, `proj_deleted`, `auto_progress`, `estimate_hours`, `date_created`) VALUES (5, 98946, 'Test Project 2', 2, '24-05-2014', '15-05-2014', 5, 100, 'Description db', 4, 'Active', 'Off', 0, 85287, 'No', 'FALSE', 1000, '2014-05-24 19:44:56');
INSERT INTO fx_projects (`project_id`, `project_code`, `project_title`, `client`, `start_date`, `due_date`, `hourly_rate`, `progress`, `description`, `assign_to`, `status`, `timer`, `timer_start`, `time_logged`, `proj_deleted`, `auto_progress`, `estimate_hours`, `date_created`) VALUES (7, 84952, 'Codecanyon Script', 14, '04-08-2014', '12-09-2014', 5, 44, 'Project Description', 4, 'Active', 'Off', 0, 355898, 'No', 'FALSE', 0, '2014-05-26 19:19:56');
INSERT INTO fx_projects (`project_id`, `project_code`, `project_title`, `client`, `start_date`, `due_date`, `hourly_rate`, `progress`, `description`, `assign_to`, `status`, `timer`, `timer_start`, `time_logged`, `proj_deleted`, `auto_progress`, `estimate_hours`, `date_created`) VALUES (8, 66396, 'Wordpress Plugin Development', 6, '11-07-2014', '20-08-2014', 5, 61, 'CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP.', 1, 'Active', 'Off', 0, 677034, 'No', 'FALSE', 40, '2014-07-11 19:55:29');


#
# TABLE STRUCTURE FOR: fx_roles
#

DROP TABLE IF EXISTS fx_roles;

CREATE TABLE `fx_roles` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(64) NOT NULL,
  `default` int(11) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO fx_roles (`r_id`, `role`, `default`) VALUES (1, 'admin', 1);
INSERT INTO fx_roles (`r_id`, `role`, `default`) VALUES (2, 'client', 2);
INSERT INTO fx_roles (`r_id`, `role`, `default`) VALUES (3, 'collaborator', 3);


#
# TABLE STRUCTURE FOR: fx_tasks
#

DROP TABLE IF EXISTS fx_tasks;

CREATE TABLE `fx_tasks` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `added_by` int(11) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (1, 'Top Menu', 1, '[\"1\",\"2\",\"3\"]', 'Task Description', 'Yes', 40, 'Off', 1404469117, 45, 3600, 'TRUE', '2014-05-09 08:09:48', 1);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (2, 'Bug Fixes', 2, '[\"1\",\"2\",\"3\"]', 'Task Description', 'Yes', 20, 'Off', 1404469117, 60, 216000, 'TRUE', '2014-05-09 08:09:48', 1);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (3, 'Footer Menu', 2, '[\"1\",\"2\",\"3\"]', 'Task Description', 'Yes', 100, 'Off', 0, 35, 2117, 'TRUE', '2014-05-14 08:09:48', 3);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (4, 'Logout Error fix DB', 2, '23', 'Task Description DB', 'Yes', 30, 'Off', 1404469117, 30, 300, 'TRUE', '2014-05-15 08:24:48', 1);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (5, 'Modal in Dashboard', 2, '23', 'Add documentation to the proposed system.', 'Yes', 80, 'Off', 0, 40, 72115, 'TRUE', '2014-07-04 21:03:54', 1);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (6, 'Modal in Dashboard 2', 2, '5', 'Create a prototype with Twitter Bootstrap 3 ', 'Yes', 50, 'Off', 0, 82, 136, 'TRUE', '2014-07-04 21:06:08', 1);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (7, 'Sliding Homepage ', 2, '4', '<ul>\r\n<li>Create unlimited amount of tasks for your Projects!</li>\r\n<li>Tasks can be sorted by tags which allow you to organize your tasks in an efficient way.\r\n</li>\r\n</ul>', 'Yes', 100, 'Off', 0, 20, 5329, 'FALSE', '2014-07-05 18:25:29', 4);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (8, 'New Bootstrap 3 Template', 7, '5', 'Create a new web template for Clientopia. Base colors should be black and green', 'Yes', 90, 'Off', 0, 220, 780970, 'FALSE', '2014-07-05 20:53:51', 1);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (9, 'Fix Local Environment Bug', 7, '4', 'CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP.', 'Yes', 90, 'Off', 0, 50, 174774, 'FALSE', '2014-07-12 10:03:08', 4);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (10, 'Sliding Menu', 8, '5', 'Description', 'Yes', 10, 'Off', 0, 2, 0, 'FALSE', '2014-07-12 11:57:12', 1);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (11, 'Responsive Footer', 8, '5', 'Description', 'Yes', 100, 'Off', 0, 1, 27, 'FALSE', '2014-07-12 11:57:59', 1);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (12, 'Sticky Glowing Menu', 1, '23', 'Description', 'No', 100, 'Off', 0, 1, 0, 'FALSE', '2014-07-12 14:30:44', 1);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (13, 'Logout Error fix DB', 4, '5', 'Description', 'Yes', 20, 'Off', 0, 2, 0, 'FALSE', '2014-07-12 17:28:58', 1);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (14, 'Responsive Footer', 5, '23', 'Description', 'Yes', 50, 'Off', 0, 1, 618, 'FALSE', '2014-07-12 17:30:13', 1);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (15, 'Sticky Glowing Menu', 5, '5', 'Description', 'Yes', 90, 'Off', 0, 800, 2663775, 'FALSE', '2014-07-12 17:30:31', 1);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (16, 'Upload a sample project', 7, '23', 'Description', 'Yes', 100, 'Off', 0, 1, 0, 'FALSE', '2014-07-18 19:07:01', 1);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (17, 'Responsive Footer', 3, '4', 'Description', 'Yes', 60, 'Off', 0, 2, 336, 'FALSE', '2014-07-31 10:01:28', 1);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (18, 'Added by Daves', 7, '4', 'Description goes here', 'Yes', 90, 'Off', 0, 4, 539, 'FALSE', '2014-08-08 13:32:08', 4);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (19, 'Requested Task', 5, '4', 'I would like to have this done on time', 'Yes', 100, 'Off', 0, 50, 60442, 'FALSE', '2014-08-12 19:48:43', 4);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (20, 'Slider in Footer', 3, '1', 'Description', 'Yes', 0, 'Off', 0, 34, 376, 'FALSE', '2014-08-23 15:28:38', 2);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (21, 'Active Record Class', 5, '4', 'Notes is web application with CRUD(create, read, update, delete) and Search function. it built with Backbone and underscore, also used moment.js for time display. it use backbone localStorage for data model. but also you can replace with the RESTful api.', 'Yes', 100, 'Off', 0, 45, 0, 'FALSE', '2014-08-25 11:11:31', 4);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (22, 'Wordpress Installer', 5, '4', 'Description', 'Yes', 100, 'Off', 0, 3, 0, 'FALSE', '2014-08-25 11:17:18', 4);
INSERT INTO fx_tasks (`t_id`, `task_name`, `project`, `assigned_to`, `description`, `visible`, `progress`, `timer_status`, `start_time`, `estimated_hours`, `logged_time`, `auto_progress`, `date_added`, `added_by`) VALUES (23, 'Ruby Installer', 5, '4', 'Beyond simplicity, a major benefit to using the Active Record features is that it allows you to create database independent applications, since the query syntax is generated by each database adapter. It also allows for safer queries, since the values are escaped automatically by the system.', 'Yes', 100, 'Off', 0, 1, 0, 'FALSE', '2014-08-25 16:04:56', 4);


#
# TABLE STRUCTURE FOR: fx_tasks_timer
#

DROP TABLE IF EXISTS fx_tasks_timer;

CREATE TABLE `fx_tasks_timer` (
  `timer_id` int(11) NOT NULL AUTO_INCREMENT,
  `task` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `start_time` varchar(64) NOT NULL,
  `end_time` varchar(64) NOT NULL,
  `date_timed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`timer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (1, 6, 5, '1404572653', '1404572757', '2014-07-05 18:05:57');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (2, 6, 5, '1404572811', '1404572840', '2014-07-05 18:07:20');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (3, 6, 5, '1404572996', '1404573015', '2014-07-05 18:10:15');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (4, 6, 5, '1404573131', '1404573219', '2014-07-05 18:13:39');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (5, 5, 5, '1404573126', '1404573241', '2014-07-05 18:14:01');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (6, 3, 5, '1404573137', '1404573254', '2014-07-05 18:14:14');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (7, 7, 5, '1404574110', '1404579439', '2014-07-05 19:57:19');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (8, 8, 5, '1404582839', '1404584219', '2014-07-05 21:16:59');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (9, 8, 5, '1404719583', '1404719592', '2014-07-07 10:53:12');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (10, 9, 5, '1405148676', '1405150784', '2014-07-12 10:39:44');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (11, 8, 5, '1404920060', '1405699641', '2014-07-18 19:07:21');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (12, 11, 5, '1406567600', '1406567627', '2014-07-28 20:13:47');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (13, 9, 5, '1406567634', '1406739619', '2014-07-30 20:00:19');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (14, 18, 5, '1407496041', '1407496050', '2014-08-08 14:07:30');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (15, 9, 5, '1407499954', '1407500515', '2014-08-08 15:21:55');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (16, 15, 5, '1405175555', '1407839330', '2014-08-12 13:28:50');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (17, 14, 5, '1407860820', '1407861438', '2014-08-12 19:37:18');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (18, 19, 5, '1407862213', '1407922655', '2014-08-13 12:37:35');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (19, 18, 7, '1408956088', '1408956493', '2014-08-25 11:48:13');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (20, 18, 7, '1408956700', '1408956825', '2014-08-25 11:53:45');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (21, 9, 7, '1408956716', '1408956836', '2014-08-25 11:53:56');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (22, 20, 3, '1409047047', '1409047423', '2014-08-26 13:03:43');
INSERT INTO fx_tasks_timer (`timer_id`, `task`, `pro_id`, `start_time`, `end_time`, `date_timed`) VALUES (23, 17, 3, '1409047092', '1409047428', '2014-08-26 13:03:48');


#
# TABLE STRUCTURE FOR: fx_un_sessions
#

DROP TABLE IF EXISTS fx_un_sessions;

CREATE TABLE `fx_un_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO fx_un_sessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('49e3b018136645434f50bb8668e29b4f', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1409209561, 'a:5:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"4\";s:8:\"username\";s:5:\"daves\";s:7:\"role_id\";s:1:\"3\";s:6:\"status\";s:1:\"1\";}');
INSERT INTO fx_un_sessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('c0677dbeeef60a92f56e0feeead102b8', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1424335780, '');
INSERT INTO fx_un_sessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('ccfab2be91c205fdbad8d33baaaed403', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', 1409211885, 'a:5:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}');


#
# TABLE STRUCTURE FOR: fx_user_autologin
#

DROP TABLE IF EXISTS fx_user_autologin;

CREATE TABLE `fx_user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

#
# TABLE STRUCTURE FOR: fx_users
#

DROP TABLE IF EXISTS fx_users;

CREATE TABLE `fx_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (1, 'admin', '$P$BjiONJAUmQ0v1Q/1pv20J1Jtl6IXew1', 'mandai.willy@gmail.com', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-08-28 08:36:54', '2014-02-26 14:18:04', '2014-08-28 08:36:54');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (2, 'client', '$P$B5FBH5RRTVWYG32.ZfZomPDFLr.Icy0', 'mandaiwilly@gmail.com', 2, 1, 0, NULL, NULL, NULL, 'wm@gitbench.com', 'd667dab0c96e4c69397af27b53ce1d50', '::1', '2014-08-28 09:56:39', '2014-01-15 08:09:28', '2014-08-28 09:56:39');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (3, 'rodney', '$P$BBPwAlyFBXkzCiOo1LQXSvuBEOB//7.', 'bs@bootstrapstore.net', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-03-31 22:38:06', '2014-01-08 08:10:10', '2014-05-12 13:38:45');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (4, 'daves', '$P$BCMfcFPEF4jtxjvxvUlJvqOyky/HpW0', 'wm@bootstrapstore.net', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-08-28 10:06:07', '2014-02-28 08:10:37', '2014-08-28 10:06:07');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (5, 'snider', '$P$BrZZ17II5HdRVKkiqpmqpkbQNRCJCy.', 'info@bootstrapstore.net', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-04-01 09:32:25', '2014-02-28 08:11:11', '2014-05-09 15:43:30');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (6, 'joshujay', '$P$Bnjdy7HR8LKhtTu3CBoKz8SMFe.AyL1', 'joashyegon@gmail.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-02-28 10:50:14', '2014-02-28 10:49:37', '2014-05-09 15:43:16');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (7, 'jack', '$P$BiVgifm6xZQpePhmPPlBOekZceuVEH/', 'willykrw08@gmail.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-03-08 18:36:17', '2014-03-08 18:34:46', '2014-05-09 15:43:20');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (8, 'giddy', '$P$B0TSMJKO4jMGTI.XxPzL/0wF66XVVk/', 'giddy@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-04-16 16:49:55', '2014-05-12 13:39:01');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (9, 'susana', '$P$BnwBAvxBwXYxoeRkOLVA4v10EHglBy/', 'susana@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 16:50:35', '2014-05-09 16:53:30');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (10, 'vivian', '$P$BZLQEAb7Fc/U0GIFc0/hj529DzSXF41', 'vivian@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 16:50:58', '2014-05-09 16:53:32');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (11, 'sarah', '$P$B.gZT9.gbWz9gNVa5S6tbpZGmdOnXX/', 'sarah@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 16:51:16', '2014-05-09 16:53:35');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (12, 'wilson', '$P$BA.ejz7tkVJDUFKZ6Rw3.vC9i2C1ui0', 'wilson@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 16:51:38', '2014-05-09 16:53:38');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (13, 'cecilia', '$P$BUPcXTDMmd/.FjZMuCOeuX3IfjLYQ/1', 'cecilia@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 16:52:00', '2014-05-09 16:53:40');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (14, 'jacob', '$P$BUjWXE0ZkHXUbLjlL6ls5f8hAw8M.W0', 'jacob@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 16:52:21', '2014-05-09 16:53:43');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (15, 'irene', '$P$BQpoH/4gsohSQ6MFzg7ueyvLyIaj3r.', 'rene@jtl.co.ke', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-05-14 09:01:57', '2014-05-09 16:52:41', '2014-05-14 09:01:57');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (16, 'eliza', '$P$Bjuw0djqomPEUSR9r2sXYJymTEaDnm1', 'eliza@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 16:59:58', '2014-05-09 16:59:58');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (17, 'kriesi', '$P$BSoQuqEw.PEKPUQF96WjRup6LkeZAD.', 'kriesi@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 17:00:24', '2014-05-09 17:00:24');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (18, 'joanne', '$P$B2KITXYB/zSiSe27WgYufTqJql1PjC1', 'juana@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 17:00:52', '2014-05-09 17:00:52');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (19, 'erick', '$P$BEGDapuyiGVsp8ehYXV/hFFpO0dkLA/', 'erick@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-09 17:01:13', '2014-05-09 17:01:13');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (20, 'obama', '$P$B3owJCh7HmJLe8tlD.md3oUQ74sKzT/', 'oobama@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-12 13:33:19', '2014-05-12 13:33:19');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (21, 'bush', '$P$B/VPhTcshYpxsc57IpnOFnfJWBJ5NX.', 'bush@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-12 13:36:32', '2014-05-12 13:36:32');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (22, 'kony', '$P$B1TnACEsolMvLw15GmxliMeWFo4ZXX1', 'kony@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-12 14:27:35', '2014-05-14 09:09:10');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (23, 'bernard', '$P$B0Ke81CPAq/L5wR641HgD6n4FVS08A.', 'ben@me.com.au', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-05-12 15:05:05', '2014-08-04 18:26:17');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (24, 'suarez', '$P$BieWRuiPcmicCHswgkkLvzaXA2bdQt/', 'suarez@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-06-25 19:49:21', '2014-06-25 19:49:21');
INSERT INTO fx_users (`id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES (25, 'ones', '$P$BjxNeLjG9dM0Dkz4QbPD5Ftqxrl4.5/', 'ones@me.com', 2, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-06-27 10:10:42', '2014-06-27 10:10:42');


