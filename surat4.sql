CREATE TABLE `user` (
	`id_user` INT(11) NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(50) NULL DEFAULT NULL,
	`password` VARCHAR(50) NULL DEFAULT NULL,
	`fullname` VARCHAR(50) NULL DEFAULT NULL,
	`level` ENUM('superadmin','admin') NULL DEFAULT NULL,
	PRIMARY KEY (`id_user`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=3
;
