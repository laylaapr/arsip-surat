CREATE TABLE `mail_type` (
	`id_type` INT(11) NOT NULL,
	`type` VARCHAR(50) NULL DEFAULT NULL,
	PRIMARY KEY (`id_type`),
	UNIQUE INDEX `MAIL_TYPE_PK` (`id_type`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
