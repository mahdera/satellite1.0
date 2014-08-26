-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2014 at 09:14 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `db_satellite`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_center_box_content`
--

CREATE TABLE `tbl_center_box_content` (
  `center_box_content_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modification_date` datetime NOT NULL,
  PRIMARY KEY (`center_box_content_id`),
  KEY `modified_by` (`modified_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_center_box_content`
--

INSERT INTO `tbl_center_box_content` VALUES(1, 'This is a sample title', 'This is the content that I am writing to right now.<br>', '2014-08-12 10:52:54', 1, '2014-08-12 10:52:54');
INSERT INTO `tbl_center_box_content` VALUES(15, 'Sample Center Content', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>\r\nCenter box content modified by Mahder Neway.', '2014-08-15 12:00:30', 1, '2014-08-12 12:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_page_image_slider`
--

CREATE TABLE `tbl_home_page_image_slider` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_path` varchar(50) NOT NULL,
  `file_name` varchar(30) NOT NULL,
  `upload_date` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modification_date` datetime NOT NULL,
  PRIMARY KEY (`image_id`),
  KEY `modified_by` (`modified_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_home_page_image_slider`
--

INSERT INTO `tbl_home_page_image_slider` VALUES(1, 'image_slider', 'IPS1.jpg', '2014-08-04 01:28:55', 1, '2014-08-04 01:28:55');
INSERT INTO `tbl_home_page_image_slider` VALUES(2, 'image_slider', 'IPS2.jpg', '2014-08-04 01:29:20', 1, '2014-08-04 01:29:20');
INSERT INTO `tbl_home_page_image_slider` VALUES(3, 'image_slider', 'IPS3.jpg', '2014-08-04 01:29:28', 1, '2014-08-04 01:29:28');
INSERT INTO `tbl_home_page_image_slider` VALUES(4, 'image_slider', 'IPS4.jpg', '2014-08-04 01:29:34', 1, '2014-08-04 01:29:34');
INSERT INTO `tbl_home_page_image_slider` VALUES(5, 'image_slider', 'IPS5.jpg', '2014-08-04 03:36:07', 1, '2014-08-04 03:36:07');
INSERT INTO `tbl_home_page_image_slider` VALUES(6, 'image_slider', 'IPS6.jpg', '2014-08-04 03:37:16', 1, '2014-08-04 03:37:16');
INSERT INTO `tbl_home_page_image_slider` VALUES(7, 'image_slider', 'IPS7.jpg', '2014-08-04 03:37:25', 1, '2014-08-04 03:37:25');
INSERT INTO `tbl_home_page_image_slider` VALUES(8, 'image_slider', 'IPS8.jpg', '2014-08-04 03:37:32', 1, '2014-08-04 03:37:32');
INSERT INTO `tbl_home_page_image_slider` VALUES(9, 'image_slider', 'IPS9.jpg', '2014-08-04 03:37:39', 1, '2014-08-04 03:37:39');
INSERT INTO `tbl_home_page_image_slider` VALUES(10, 'image_slider', 'IPS10.jpg', '2014-08-11 07:34:10', 1, '2014-08-11 07:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lower_box_content`
--

CREATE TABLE `tbl_lower_box_content` (
  `lower_box_content_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) NOT NULL,
  `content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `which_column` varchar(15) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modification_date` datetime NOT NULL,
  PRIMARY KEY (`lower_box_content_id`),
  KEY `modified_by` (`modified_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_lower_box_content`
--

INSERT INTO `tbl_lower_box_content` VALUES(1, 'I am inside Metro', 'His legal team insists he had a legal right to tie funding for the public integrity unit to Lehmberg''s removal, and argues he had no legal obligation to explain his veto. Perry said on Tuesday that he would do the same thing again if faced with the same situation.', '2014-08-15 05:28:00', 'First Column', 1, '2014-08-15 05:28:00');
INSERT INTO `tbl_lower_box_content` VALUES(2, 'Second Content', '<b style="padding: 0px; margin: 0px; color: rgb(0, 0, 0); font-family: arial; line-height: 19px;">Ferguson, Missouri (CNN)</b><span style="color: rgb(0, 0, 0); font-family: arial; line-height: 19px;">&nbsp;-- At least 31 people were arrested in Ferguson after peaceful protests devolved into another night of chaos. And many of those arrested came from as far away as New York and California, said Missouri State Highway Patrol Capt. Ron Johnson early Tuesday.</span>', '2014-08-19 08:19:20', 'Second Column', 1, '2014-08-19 08:19:20');
INSERT INTO `tbl_lower_box_content` VALUES(3, 'U.S. airstrikes critical in Mosul', '<p style="padding: 0px 24px 19px 186px; margin-bottom: 0px; border: 0px; font-family: arial; vertical-align: baseline; line-height: 19px; color: rgb(0, 0, 0);"><b style="padding: 0px; margin: 0px;">(CNN)</b>&nbsp;-- U.S. airstrikes helped Kurdish and Iraqi forces take control of Mosul Dam on Monday, fighting back ISIS militants who had seized the dam, President Obama told reporters.</p><p class="cnn_storypgraphtxt cnn_storypgraph2" style="padding: 0px 24px 19px 186px; margin-bottom: 0px; border: 0px; font-family: arial; vertical-align: baseline; line-height: 19px; color: rgb(0, 0, 0);">The stakes were huge for the millions of Iraqis who live downstream from the dam, the largest in the country.</p><p class="cnn_storypgraphtxt cnn_storypgraph3" style="padding: 0px 24px 19px 186px; margin-bottom: 0px; border: 0px; font-family: arial; vertical-align: baseline; line-height: 19px; color: rgb(0, 0, 0);">"If that dam was breached it could have proven catastrophic, with floods that would have threatened the lives of thousands of civilians and endangered our embassy compound in Baghdad," the President said.</p>', '2014-08-19 08:22:36', 'Third Column', 1, '2014-08-19 08:22:36');
INSERT INTO `tbl_lower_box_content` VALUES(4, 'Column Title', '<span style="color: rgb(0, 0, 0); font-family: arial; line-height: 19px;">I remember how difficult the transition was and so not wanting to put those fears on my son I try to speak open-ended about it, like it''s a positive experience," said Garcia, who experienced "culture shock" moving from a Christian elementary school to a public junior high.</span>', '2014-08-19 08:27:30', 'Third Column', 1, '2014-08-19 08:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mail`
--

CREATE TABLE `tbl_mail` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `mail_date` datetime NOT NULL,
  `mail_title` varchar(200) NOT NULL,
  `mail_content` text NOT NULL,
  `mail_status` varchar(10) NOT NULL,
  PRIMARY KEY (`mail_id`),
  KEY `from_user_id` (`from_user_id`),
  KEY `to_user_id` (`to_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_mail`
--

INSERT INTO `tbl_mail` VALUES(1, 1, 2, '2014-07-29 02:41:59', 'this is the title', 'The above is just likely, though, as I''ve done very, very little in php, and only canned, client-site angular. But, like the above example shows, it should be possible, and used in a classical sense (well, maybe better than "classical", a properly modular sense), the php on the server and the angular on the client will know nothing about each other: the php server sends off json (perhaps retrieving it or data from some other server, perhaps just a db) in its response to the client and doesn''t care the client is angular, and the angular client gets that json, does something, and perhaps sends back json, interacting with some url from its viewpoint, never caring the server is php.\r\n', 'Unread');
INSERT INTO `tbl_mail` VALUES(2, 1, 3, '2014-07-29 02:41:59', 'this is the title', 'this is the message<br>', 'Unread');
INSERT INTO `tbl_mail` VALUES(3, 1, 3, '2014-07-30 01:21:22', 'This is a second Email', '<span style="color: rgb(68, 68, 68); font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">Order Management systems team builds robust services USING redundant light java processes and a sophisticated workflow engine to support a multitude of business scenarios resulting in a compelling and sticky solution for our clients.&nbsp; The Order Management engineering team works in a fast paced environment leveraging Agile and DevOps techniques to deliver reliable code into production frequently. &nbsp; We are looking to grow its small engineering team through the addition of a few high talent individuals.</span>', 'Unread');
INSERT INTO `tbl_mail` VALUES(4, 1, 2, '2014-07-31 03:59:53', 'Test this message', 'this is the content', 'Unread');
INSERT INTO `tbl_mail` VALUES(5, 1, 3, '2014-08-04 08:07:59', 'title', 'content of this message<br>', 'Unread');
INSERT INTO `tbl_mail` VALUES(6, 1, 3, '2014-08-12 11:28:31', 'This is a test email only to cc', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Unread');
INSERT INTO `tbl_mail` VALUES(7, 1, 2, '2014-08-12 11:30:59', 'Another mail', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>', 'Unread');
INSERT INTO `tbl_mail` VALUES(8, 1, 3, '2014-08-12 12:01:51', 'This is the title', 'It is not known exactly when the text acquired its current standard form; it may have been as late as the 1960s. Dr. Richard McClintock, a <a href="http://en.wikipedia.org/wiki/Latin" title="Latin">Latin</a> scholar who was the publications director at <a href="http://en.wikipedia.org/wiki/Hampden-Sydney_College" title="Hampden-Sydney College" class="mw-redirect">Hampden-Sydney College</a> in <a href="http://en.wikipedia.org/wiki/Virginia" title="Virginia">Virginia</a>, discovered the source of the passage sometime before 1982 while searching for instances of the Latin word "<i>consectetur</i>", rarely used in classical literature.<sup id="cite_ref-SDop_1-1" class="reference"><a href="http://en.wikipedia.org/wiki/Lorem_ipsum#cite_note-SDop-1"><span>[</span>1<span>]</span></a></sup><sup id="cite_ref-4" class="reference"><a href="http://en.wikipedia.org/wiki/Lorem_ipsum#cite_note-4"><span>[</span>a<span>]</span></a></sup> The physical source of the Lorem Ipsum text may be the 1914 <a href="http://en.wikipedia.org/wiki/Loeb_Classical_Library" title="Loeb Classical Library">Loeb Classical Library</a> Edition of the <i>De Finibus,</i> where the Latin text finishes page 34 with "Neque porro quisquam est qui do-" and begins page 36 with "lorem ipsum (et seq.)â€¦", suggesting that the galley type of that page was scrambled to make the dummy text seen today.', 'Unread');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `organization` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modification_date` datetime NOT NULL,
  PRIMARY KEY (`member_id`),
  KEY `user_id` (`user_id`),
  KEY `modified_by` (`modified_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_member`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) NOT NULL,
  `author` varchar(70) NOT NULL,
  `post_date` datetime NOT NULL,
  `news_detail` text NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modification_date` datetime NOT NULL,
  PRIMARY KEY (`news_id`),
  KEY `modified_by` (`modified_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_news`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(20) NOT NULL,
  `username` varchar(70) NOT NULL,
  `user_password` varchar(150) NOT NULL,
  `user_full_name` varchar(80) NOT NULL,
  `user_status` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `user_last_valid_login` datetime DEFAULT NULL,
  `user_first_invalid_login` datetime DEFAULT NULL,
  `user_faild_login_count` int(11) NOT NULL,
  `user_create_date` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modification_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` VALUES(1, 'Administrator', 'mahder', '0f3fbc595a293952fabc8de77ae840ca', 'Mahder Neway', 'Pending', 'mahder.neway@echoorigin.com', NULL, NULL, 0, '2014-07-26 17:11:31', 1, '2014-07-26 17:11:40');
INSERT INTO `tbl_user` VALUES(2, 'Member', 'leki', 'ce1e7cda54a9c15a42e7c81a8faa34ed', 'Lekbir Gebretsadik', 'Approved', 'lekbirgebre@yahoo.com', NULL, NULL, 0, '2014-07-29 13:44:28', 1, '2014-07-29 13:44:35');
INSERT INTO `tbl_user` VALUES(3, 'Member', 'Shesaw', '202cb962ac59075b964b07152d234b70', 'Metamegna Neway', 'Approved', 'cc3@gmail.com', NULL, NULL, 0, '2014-07-29 13:45:32', 1, '2014-07-29 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_center_box_content`
--
ALTER TABLE `tbl_center_box_content`
  ADD CONSTRAINT `tbl_center_box_content_ibfk_1` FOREIGN KEY (`modified_by`) REFERENCES `tbl_user` (`user_id`);

--
-- Constraints for table `tbl_home_page_image_slider`
--
ALTER TABLE `tbl_home_page_image_slider`
  ADD CONSTRAINT `tbl_home_page_image_slider_ibfk_1` FOREIGN KEY (`modified_by`) REFERENCES `tbl_user` (`user_id`);

--
-- Constraints for table `tbl_lower_box_content`
--
ALTER TABLE `tbl_lower_box_content`
  ADD CONSTRAINT `tbl_lower_box_content_ibfk_1` FOREIGN KEY (`modified_by`) REFERENCES `tbl_user` (`user_id`);

--
-- Constraints for table `tbl_mail`
--
ALTER TABLE `tbl_mail`
  ADD CONSTRAINT `tbl_mail_ibfk_1` FOREIGN KEY (`from_user_id`) REFERENCES `tbl_user` (`user_id`),
  ADD CONSTRAINT `tbl_mail_ibfk_2` FOREIGN KEY (`to_user_id`) REFERENCES `tbl_user` (`user_id`);

--
-- Constraints for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD CONSTRAINT `tbl_member_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`),
  ADD CONSTRAINT `tbl_member_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `tbl_user` (`user_id`);

--
-- Constraints for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD CONSTRAINT `tbl_news_ibfk_1` FOREIGN KEY (`modified_by`) REFERENCES `tbl_user` (`user_id`);

