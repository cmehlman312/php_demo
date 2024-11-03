CREATE TABLE `cars` (
                        `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
                        `make` varchar(255) NOT NULL,
                        `model` varchar(255) NOT NULL,
                        `year` year(4) NOT NULL,
                        `color` varchar(255) NOT NULL,
                        `transmission` varchar(255) NOT NULL,
                        `driver_assigned` bigint(20) unsigned DEFAULT NULL,
                        UNIQUE KEY `id` (`id`),
                        KEY `driver_assigned` (`driver_assigned`),
                        CONSTRAINT `cars_drives_fk` FOREIGN KEY (`driver_assigned`) REFERENCES `drivers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4