ALTER TABLE `tbl_enquiries` ADD `cpmail` VARCHAR(5) NOT NULL AFTER `reference_id`, ADD `cpemail` VARCHAR(5) NOT NULL AFTER `cpmail`, ADD `cpphone` VARCHAR(5) NOT NULL AFTER `cpemail`, ADD `cpsms` VARCHAR(5) NOT NULL AFTER `cpphone`;


ALTER TABLE `tbl_enquiries` CHANGE `cpmail` `cpmail` VARCHAR(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;

ALTER TABLE `tbl_enquiries` CHANGE `cpemail` `cpemail` VARCHAR(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
ALTER TABLE `tbl_enquiries` CHANGE `cpphone` `cpphone` VARCHAR(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
ALTER TABLE `tbl_enquiries` CHANGE `cpsms` `cpsms` VARCHAR(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;