-- 
-- Table structure for table `redirects`
-- 

CREATE TABLE `redirects` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `from_url` varchar(255) NOT NULL,
  `to_url` varchar(255) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `creator` char(15) NOT NULL,
  `referrals` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `from_url` (`from_url`),
  KEY `referrals` (`referrals`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
