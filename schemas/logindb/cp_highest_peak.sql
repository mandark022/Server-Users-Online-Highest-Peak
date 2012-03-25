CREATE TABLE IF NOT EXISTS `cp_highest_peak` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `num_users` int(10) unsigned NOT NULL DEFAULT '0',
  `peak_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = MYISAM;