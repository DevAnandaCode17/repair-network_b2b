


CREATE TABLE `tbl_en_he_quote_payment` (
  `enq_payment_id` int(11) NOT NULL,
  `enq_quote_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_code` varchar(50) DEFAULT NULL,
  `card_expiry_month` int(11) DEFAULT NULL,
  `card_expiry_year` int(11) DEFAULT NULL,
  `card_last_digits` int(11) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `failure_message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `tbl_en_he_quote_payment`
  ADD PRIMARY KEY (`enq_payment_id`);



ALTER TABLE `tbl_en_he_quote_payment`
  MODIFY `enq_payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;
