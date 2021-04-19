CREATE TABLE `disposition` (
	`id_disposition` INT(11) NOT NULL AUTO_INCREMENT,
	`id_mail` INT(11) NULL DEFAULT NULL,
	`id_user` INT(11) NULL DEFAULT NULL,
	`disposition_at` VARCHAR(50) NULL DEFAULT NULL,
	`description` TEXT NULL,
	`reply_at` VARCHAR(50) NULL DEFAULT NULL,
	`notification` VARCHAR(50) NULL DEFAULT NULL,
	`status` VARCHAR(50) NULL DEFAULT NULL,
	PRIMARY KEY (`id_disposition`),
	UNIQUE INDEX `DISPOSITION_PK` (`id_disposition`),
	UNIQUE INDEX `id_mail` (`id_mail`),
	INDEX `RELATIONSHIP_3_FK` (`id_user`),
	INDEX `RELATIONSHIP_4_FK` (`id_mail`),
	CONSTRAINT `disposition_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`id_user`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=9
;
