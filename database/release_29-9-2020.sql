ALTER TABLE `tbl_quote_details` ADD `is_warranty` ENUM('True','False') NULL DEFAULT 'True' AFTER `company_code`, ADD `age_of_appliance` VARCHAR(50) NULL AFTER `is_warranty`;

DROP TABLE IF EXISTS `tbl_alliance_company_list`;
CREATE TABLE IF NOT EXISTS `tbl_alliance_company_list` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_code` varchar(20) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_website` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`company_id`),
  UNIQUE KEY `company_code` (`company_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
COMMIT;