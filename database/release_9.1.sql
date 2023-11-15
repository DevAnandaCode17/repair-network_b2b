-- --------------------------------------------------------

--
-- Table structure for table `tbl_enq_quote_payment`
--

CREATE TABLE `tbl_enq_quote_payment` (
  `enq_payment_id` int(11) NOT NULL,
  `enq_quote_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `order_code` varchar(50) DEFAULT NULL,
  `campaign` varchar(50) DEFAULT NULL,
  `postcode` varchar(20) NOT NULL,
  `card_expiry_month` int(11) DEFAULT NULL,
  `card_expiry_year` int(11) DEFAULT NULL,
  `card_last_digits` int(11) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `failure_message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Indexes for table `tbl_enq_quote_payment`
--
ALTER TABLE `tbl_enq_quote_payment`
  ADD PRIMARY KEY (`enq_payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_enq_quote_payment`
--
ALTER TABLE `tbl_enq_quote_payment`
  MODIFY `enq_payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;


--
-- Table structure for table `tbl_enq_payment_direct`
--

CREATE TABLE `tbl_enq_payment_direct` (
  `payment_id` int(11) NOT NULL,
  `enq_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `campaign` varchar(40) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `accnumber` varchar(20) NOT NULL,
  `bankname` varchar(30) NOT NULL,
  `sortcode` varchar(30) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `tbl_enq_payment_direct`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_enq_payment_direct`
--
ALTER TABLE `tbl_enq_payment_direct`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
