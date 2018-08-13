DROP VIEW IF EXISTS `msv_oxarticles_sr0`;
CREATE VIEW `msv_oxarticles_sr0` AS SELECT * FROM `oxv_oxarticles` WHERE (`oxv_oxarticles`.`SPECIALRIGHTS` = 0);
DROP VIEW IF EXISTS `msv_oxarticles_sr0_de`;
CREATE VIEW `msv_oxarticles_sr0_de` AS SELECT * FROM `oxv_oxarticles_de` WHERE (`oxv_oxarticles_de`.`SPECIALRIGHTS` = 0);
DROP VIEW IF EXISTS `msv_oxarticles_sr0_en`;
CREATE VIEW `msv_oxarticles_sr0_en` AS SELECT * FROM `oxv_oxarticles_en` WHERE (`oxv_oxarticles_en`.`SPECIALRIGHTS` = 0);
