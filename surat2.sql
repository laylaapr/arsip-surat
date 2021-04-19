CREATE TABLE `mail` (
	`id_mail` INT(11) NOT NULL AUTO_INCREMENT,
	`id_type` INT(11) NULL DEFAULT NULL,
	`id_user` INT(11) NULL DEFAULT NULL,
	`incoming_at` VARCHAR(50) NULL DEFAULT NULL,
	`mail_code` VARCHAR(50) NULL DEFAULT NULL,
	`mail_date` DATE NULL DEFAULT NULL,
	`mail_from` VARCHAR(50) NULL DEFAULT NULL,
	`mail_to` VARCHAR(50) NULL DEFAULT NULL,
	`mail_subject` VARCHAR(50) NULL DEFAULT NULL,
	`description` MEDIUMTEXT NULL,
	`file_upload` VARCHAR(50) NULL DEFAULT NULL,
	PRIMARY KEY (`id_mail`),
	UNIQUE INDEX `MAIL_PK` (`id_mail`),
	INDEX `RELATIONSHIP_1_FK` (`id_type`),
	INDEX `RELATIONSHIP_2_FK` (`id_user`),
	CONSTRAINT `mail_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`id_user`),
	CONSTRAINT `mail_ibfk_3` FOREIGN KEY (`id_type`) REFERENCES `mail_type` (`ID_TYPE`),
	CONSTRAINT `mail_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=29
;
