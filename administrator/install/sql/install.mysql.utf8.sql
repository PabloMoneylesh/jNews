CREATE TABLE IF NOT EXISTS `#__jnews` (
`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`news` TEXT NOT NULL DEFAULT '',
`date` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`published` TINYINT(1) UNSIGNED NOT NULL DEFAULT '0',
PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

