INSERT INTO `tbl_client_type` (`client_type_id`, `client_type`, `client_type_status`) VALUES ('3', 'B2B', '1');

CREATE TABLE `tbl_riq_customers` (
  `cus_id` int(11) NOT NULL,
  `cus_caller_id` int(11) NOT NULL,
  `cus_name` varchar(50) NOT NULL,
  `cus_email` varchar(70) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `tbl_riq_customers`
  ADD PRIMARY KEY (`cus_id`);

ALTER TABLE `tbl_riq_customers`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

ALTER TABLE `tbl_riq_customers` CHANGE `cus_name` `cus_name` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL;

ALTER TABLE `tbl_riq_customers` CHANGE `cus_email` `cus_email` VARCHAR(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL;
