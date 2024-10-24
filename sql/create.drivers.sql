CREATE TABLE `drivers` (
                           `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
                           `name` varchar(255) NOT NULL,
                           `experience` int(11) NOT NULL,
                           `drivemanual` tinyint(1) NOT NULL,
                           UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4