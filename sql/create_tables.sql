CREATE TABLE `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
);
CREATE TABLE `loggedusers` (
  `sessionid` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `user_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`sessionid`)
);

