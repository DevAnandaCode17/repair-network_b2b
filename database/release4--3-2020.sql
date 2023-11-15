/*!tbl_covid_customers */

CREATE TABLE `tbl_covid_customers` (
  `customer_id` int(11) NOT NULL,
  `reference_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `customer_added_on` datetime NOT NULL,
  `country` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL DEFAULT 'united  kingdom',
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `tbl_covid_customers`
  ADD PRIMARY KEY (`customer_id`);
ALTER TABLE `tbl_covid_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;


/*!tbl_covid_notes */
CREATE TABLE `tbl_covid_notes` (
  `note_id` int(11) NOT NULL,
  `note_desc` text NOT NULL,
  `quote_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `tbl_covid_notes`
  ADD PRIMARY KEY (`note_id`);

  ALTER TABLE `tbl_covid_notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!tbl_covid_payment */
CREATE TABLE `tbl_covid_payment` (
  `payment_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `payment_method` varchar(30) NOT NULL,
  `auth_code` varchar(30) NOT NULL,
  `account_name` varchar(30) NOT NULL,
  `account_number` varchar(30) NOT NULL,
  `sort_code` varchar(30) NOT NULL,
  `first_payment_date` text NOT NULL,
  `payment_date` text NOT NULL,
  `payment_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `tbl_covid_payment`
  ADD PRIMARY KEY (`payment_id`);
  
  ALTER TABLE `tbl_covid_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!tbl_covid_quote_call_attempts */
CREATE TABLE `tbl_covid_quote_call_attempts` (
  `attempt_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `attempt_status_id` int(11) NOT NULL,
  `attempt_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `tbl_covid_quote_call_attempts`
  ADD PRIMARY KEY (`attempt_id`);

  ALTER TABLE `tbl_covid_quote_call_attempts`
  MODIFY `attempt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!tbl_covid_quotes */
CREATE TABLE `tbl_covid_quotes` (
  `quote_id` int(11) NOT NULL,
  `reference_number` varchar(30) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quote_status` int(11) NOT NULL,
  `quote_added_on` datetime NOT NULL,
  `source` varchar(100) NOT NULL,
  `viewed` tinyint(5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
ALTER TABLE `tbl_covid_quotes`
  ADD PRIMARY KEY (`quote_id`);

  ALTER TABLE `tbl_covid_quotes`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!tbl_covid_quote_call_attempt_status */
CREATE TABLE `tbl_covid_quote_call_attempt_status` (
  `attempt_status_id` int(11) NOT NULL,
  `attempt_status` varchar(30) NOT NULL,
  `attempt_status_added_on` datetime NOT NULL,
  `attempt_status_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_covid_quote_call_attempt_status` (`attempt_status_id`, `attempt_status`, `attempt_status_added_on`, `attempt_status_status`) VALUES
(1, 'Sale', '2021-02-10 13:33:51', 1),
(2, 'Not Interested', '2021-03-04 15:41:43', 1),
(3, 'Callback Interested', '2021-03-04 15:41:43', 1),
(4, 'Answer Machine/Voice Call', '2021-03-04 15:41:43', 1),
(5, 'Not Answered', '2021-03-04 15:41:43', 1),
(6, 'DNC (Do Not Call)', '2021-03-04 15:43:37', 1),
(7, 'Callback Scheduled', '2021-03-04 15:43:37', 1),
(8, 'Potential Sale', '2021-03-04 15:43:37', 1),
(9, 'Doing it online', '2021-03-04 15:43:37', 1),
(10, 'Shopping Around', '2021-03-04 15:44:43', 1),
(11, 'Alternative Provider', '2021-03-04 15:44:43', 1),
(12, 'Not Eligible', '2021-03-04 15:44:43', 1),
(13, 'Number not in Service', '2021-03-04 15:44:43', 1),
(14, 'Customer emailed', '2021-03-04 15:45:55', 1);

ALTER TABLE `tbl_covid_quote_call_attempt_status`
  ADD PRIMARY KEY (`attempt_status_id`);

  ALTER TABLE `tbl_covid_quote_call_attempt_status`
  MODIFY `attempt_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;




