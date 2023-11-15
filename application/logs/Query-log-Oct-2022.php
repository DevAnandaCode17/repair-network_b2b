INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-10-13 06:56:38', '192.168.2.187');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-10-13 10:53:22', '192.168.2.187');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged out of the CRM', '1000', NULL, '2022-10-13 14:19:24', '192.168.2.187');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-10-13 14:19:28', '192.168.2.187');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-10-14 05:54:41', '192.168.2.187');

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('121', 'test', '0238239283', '0232323232', 'wd180gx', '43223 Rickmansworth Road, Watford, Hertfordshire', 'test@gmail.com', 0, 0, 0, 0, 0, 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `created_at`) VALUES (3, 1, '2022-10-14 06:05:11');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00003)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'121\', \'test\', \'0238239283\', \'0232323232\', \'wd180gx\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'test@gmail.com\', 0, 0, 0, 0, 0, \'manual_creation_no_data\', 1)', '2022-10-14 06:05:11', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (0, 3, '1000', '2022-10-14 06:05:11');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00003)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (0, 3, \'1000\', \'2022-10-14 06:05:11\')', '2022-10-14 06:05:11', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES (0, '2022-10-14 06:05:11', 3);

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('122', 'test', '0232323221', '0232332321', 'wd180gx', '43223 Rickmansworth Road, Watford, Hertfordshire', 'test@gmail.com', 'test', 'test', 'test', 'test', 'No', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `created_at`) VALUES (4, 1, '2022-10-14 06:21:09');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00004)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'122\', \'test\', \'0232323221\', \'0232332321\', \'wd180gx\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'test@gmail.com\', \'test\', \'test\', \'test\', \'test\', \'No\', \'manual_creation_no_data\', 1)', '2022-10-14 06:21:09', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('test sfshwf', 4, '1000', '2022-10-14 06:21:09');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00004)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'test sfshwf\', 4, \'1000\', \'2022-10-14 06:21:09\')', '2022-10-14 06:21:09', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('test sfshwf', '2022-10-14 06:21:09', 4);

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('124', 'test asa', '0232323321', '0232343221', 'wd180gx', '43223 Rickmansworth Road, Watford, Hertfordshire', 'test@gmail.com', 'test', 'texs', 'tes', 'tsdh', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (5, 1, '1000', '2022-10-14 06:42:12');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00005)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'124\', \'test asa\', \'0232323321\', \'0232343221\', \'wd180gx\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'test@gmail.com\', \'test\', \'texs\', \'tes\', \'tsdh\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-14 06:42:12', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('dassaffsaf', 5, '1000', '2022-10-14 06:42:12');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00005)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'dassaffsaf\', 5, \'1000\', \'2022-10-14 06:42:12\')', '2022-10-14 06:42:12', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('dassaffsaf', '2022-10-14 06:42:12', 5);

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('123', 'test', '01223892391', '01232839238', 'wd180gx', '43223 Rickmansworth Road, Watford, Hertfordshire', 'test@gmaul.com', 'test', 'test', 'test', 'test', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (3, 1, '1000', '2022-10-14 07:49:46');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00003)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'123\', \'test\', \'01223892391\', \'01232839238\', \'wd180gx\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'test@gmaul.com\', \'test\', \'test\', \'test\', \'test\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-14 07:49:46', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('test comments', 3, '1000', '2022-10-14 07:49:46');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00003)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'test comments\', 3, \'1000\', \'2022-10-14 07:49:46\')', '2022-10-14 07:49:46', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00003)', 3, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'test comments\', 3, \'1000\', \'2022-10-14 07:49:46\')', '2022-10-14 07:49:46', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('test comments', '2022-10-14 07:49:46', 3);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:06:40', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:06:50', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:07:46', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:07:50', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:08:24', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:08:27', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:09:49', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:09:52', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:11:35', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:11:46', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:11:52', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:12:02', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:12:08', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:12:15', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:12:24', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:13:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:13:34', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:14:27', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:14:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:14:55', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:17:47', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:17:51', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:29', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:31', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:31', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:18:40', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:20:26', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 12:21:14', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 13:43:58', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 13:51:48', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 13:51:50', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 13:52:27', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 13:52:32', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 13:53:22', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 13:53:45', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 13:54:02', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 13:54:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 13:54:16', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 13:54:23', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 13:54:45', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 13:55:05', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 13:55:29', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:34:08', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:34:18', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:34:27', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:34:40', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:35:18', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:35:21', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:37:56', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:38:00', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:40:10', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:40:22', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:41:20', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:41:24', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:41:42', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:41:43', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:41:44', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:41:45', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:41:53', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:46:24', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:05', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:08', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:18', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:18', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:18', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:19', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:19', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:19', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:19', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:19', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:19', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:19', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:19', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:19', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:19', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:19', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:19', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:19', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:47:21', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:55', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:55', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:55', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:55', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:55', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:48:58', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:51:01', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:52:04', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:52:19', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-14 14:57:00', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-10-17 05:46:23', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-17 09:41:04', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('1212', 'test name', '028320382', '928329378', 'wd180gx', 'Moore Stephens, 3-5 Rickmansworth Road, Watford, Hertfordshire', 'testemail@gmail.com', 'test job', 'test boiler', 'test make', 'test fuel', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (4, 1, '1000', '2022-10-17 09:52:59');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00004)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'1212\', \'test name\', \'028320382\', \'928329378\', \'wd180gx\', \'Moore Stephens, 3-5 Rickmansworth Road, Watford, Hertfordshire\', \'testemail@gmail.com\', \'test job\', \'test boiler\', \'test make\', \'test fuel\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-17 09:52:59', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('test comments', 4, '1000', '2022-10-17 09:52:59');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00004)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'test comments\', 4, \'1000\', \'2022-10-17 09:52:59\')', '2022-10-17 09:52:59', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00004)', 4, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'test comments\', 4, \'1000\', \'2022-10-17 09:52:59\')', '2022-10-17 09:52:59', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('test comments', '2022-10-17 09:52:59', 4);

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('12312123', 'test test', '028320830', '923892833', 'WD180GX', '43223 Rickmansworth Road, Watford, Hertfordshire', 'test@gmail.com', 'test', 'test', 'test', 'test', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (5, 1, '1000', '2022-10-17 09:54:43');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00005)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'12312123\', \'test test\', \'028320830\', \'923892833\', \'WD180GX\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'test@gmail.com\', \'test\', \'test\', \'test\', \'test\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-17 09:54:43', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('test comments', 5, '1000', '2022-10-17 09:54:43');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00005)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'test comments\', 5, \'1000\', \'2022-10-17 09:54:43\')', '2022-10-17 09:54:43', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00005)', 5, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'test comments\', 5, \'1000\', \'2022-10-17 09:54:43\')', '2022-10-17 09:54:43', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('test comments', '2022-10-17 09:54:43', 5);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (5)', '5', '1000', '', '2022-10-17 09:54:45', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00005';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (5)', '5', '1000', '', '2022-10-17 09:54:58', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00005';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (5)', '5', '1000', '', '2022-10-17 09:56:21', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00005';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('12243', 'test client', '0283280123', '0122123232', 'WD180GX', '43223 Rickmansworth Road, Watford, Hertfordshire', 'test@gmail.com', 'test job', 'test type', 'test make', 'test fuel', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (6, 1, '1000', '2022-10-17 10:15:51');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00006)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'12243\', \'test client\', \'0283280123\', \'0122123232\', \'WD180GX\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'test@gmail.com\', \'test job\', \'test type\', \'test make\', \'test fuel\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-17 10:15:51', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('test comments', 6, '1000', '2022-10-17 10:15:51');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00006)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'test comments\', 6, \'1000\', \'2022-10-17 10:15:51\')', '2022-10-17 10:15:51', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00006)', 6, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'test comments\', 6, \'1000\', \'2022-10-17 10:15:51\')', '2022-10-17 10:15:51', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('test comments', '2022-10-17 10:15:51', 6);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (6)', '6', '1000', '', '2022-10-17 10:15:55', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00006';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (6)', '6', '1000', '', '2022-10-17 10:25:08', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00006';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (6)', '6', '1000', '', '2022-10-17 10:26:15', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00006';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (6)', '6', '1000', '', '2022-10-17 10:26:46', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00006';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (6)', '6', '1000', '', '2022-10-17 10:37:23', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00006';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (6)', '6', '1000', '', '2022-10-17 10:37:32', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00006';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (6)', '6', '1000', '', '2022-10-17 11:11:40', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00006';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (6)', '6', '1000', '', '2022-10-17 14:08:35', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00006';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('RNSB123', 'Eeco test', '0123327923', '0283203820', 'WD180GX', '43223 Rickmansworth Road, Watford, Hertfordshire', 'test@gmail.com', 'Service', 'Combi', 'Valiant', 'Gas', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (7, 1, '1000', '2022-10-17 14:10:21');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00007)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'RNSB123\', \'Eeco test\', \'0123327923\', \'0283203820\', \'WD180GX\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'test@gmail.com\', \'Service\', \'Combi\', \'Valiant\', \'Gas\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-17 14:10:21', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('eeco comments', 7, '1000', '2022-10-17 14:10:21');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00007)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'eeco comments\', 7, \'1000\', \'2022-10-17 14:10:21\')', '2022-10-17 14:10:21', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00007)', 7, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'eeco comments\', 7, \'1000\', \'2022-10-17 14:10:21\')', '2022-10-17 14:10:21', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('eeco comments', '2022-10-17 14:10:21', 7);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:10:23', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:25:15', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:26:01', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:29:15', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:31:56', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:32:21', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_notes` (`job_id`, `note_desc`, `user_id`, `created_at`) VALUES (7, 'test note', '1000', '2022-10-17 14:32:28');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00007)', '1000', 'INSERT INTO `tbl_notes` (`job_id`, `note_desc`, `user_id`, `created_at`) VALUES (7, \'test note\', \'1000\', \'2022-10-17 14:32:28\')', '2022-10-17 14:32:28', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00007)', 7, '1000', 'INSERT INTO `tbl_notes` (`job_id`, `note_desc`, `user_id`, `created_at`) VALUES (7, \'test note\', \'1000\', \'2022-10-17 14:32:28\')', '2022-10-17 14:32:28', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:32:57', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:33:02', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:34:37', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:34:40', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:35:21', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:35:47', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:36:42', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:38:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:40:08', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

DELETE FROM `tbl_notes`
WHERE `id` = '8';

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has deleted a note for the job(RNSB00007)', '1000', 'DELETE FROM `tbl_notes`\nWHERE `id` = \'8\'', '2022-10-17 14:40:13', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has deleted a note for the job(RNSB00007)', 7, '1000', 'DELETE FROM `tbl_notes`\nWHERE `id` = \'8\'', '2022-10-17 14:40:13', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-17 14:40:25', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-10-18 05:37:46', '192.168.2.187');

DELETE FROM `tbl_job_details`
WHERE `job_id` =0;

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has deleted the job (RNSB00000)', '1000', 'DELETE FROM `tbl_job_details`\nWHERE `job_id` =0', '2022-10-18 05:39:04', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has deleted the job (RNSB00000)', 0, '1000', 'DELETE FROM `tbl_job_details`\nWHERE `job_id` =0', '2022-10-18 05:39:04', '192.168.2.187');

DELETE FROM `tbl_job_details`
WHERE `job_id` = 3;

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has deleted the job (RNSB00003)', '1000', 'DELETE FROM `tbl_job_details`\nWHERE `job_id` = 3', '2022-10-18 05:41:04', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has deleted the job (RNSB00003)', 3, '1000', 'DELETE FROM `tbl_job_details`\nWHERE `job_id` = 3', '2022-10-18 05:41:04', '192.168.2.187');

DELETE FROM `tbl_job_details`
WHERE `job_id` = 4;

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has deleted the job (RNSB00004)', '1000', 'DELETE FROM `tbl_job_details`\nWHERE `job_id` = 4', '2022-10-18 05:41:33', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has deleted the job (RNSB00004)', 4, '1000', 'DELETE FROM `tbl_job_details`\nWHERE `job_id` = 4', '2022-10-18 05:41:33', '192.168.2.187');

DELETE FROM `tbl_job_details`
WHERE `job_id` = 5;

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has deleted the job (RNSB00005)', '1000', 'DELETE FROM `tbl_job_details`\nWHERE `job_id` = 5', '2022-10-18 05:42:08', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has deleted the job (RNSB00005)', 5, '1000', 'DELETE FROM `tbl_job_details`\nWHERE `job_id` = 5', '2022-10-18 05:42:08', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 05:55:00', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 05:57:27', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 05:57:28', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 05:59:42', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 05:59:45', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:08', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:09', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:10', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (7)', '7', '1000', '', '2022-10-18 06:00:28', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('TEST121', 'Test Test', '0232933298', '9238923291', 'WD180GX', '43223 Rickmansworth Road, Watford, Hertfordshire', 'test@gmail.com', '3', '2', 'Valiant', 'Electric', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (8, 1, '1000', '2022-10-18 06:14:24');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00008)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'TEST121\', \'Test Test\', \'0232933298\', \'9238923291\', \'WD180GX\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'test@gmail.com\', \'3\', \'2\', \'Valiant\', \'Electric\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-18 06:14:24', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('Test comments', 8, '1000', '2022-10-18 06:14:24');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00008)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'Test comments\', 8, \'1000\', \'2022-10-18 06:14:24\')', '2022-10-18 06:14:24', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00008)', 8, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'Test comments\', 8, \'1000\', \'2022-10-18 06:14:24\')', '2022-10-18 06:14:24', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('Test comments', '2022-10-18 06:14:24', 8);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (8)', '8', '1000', '', '2022-10-18 06:14:25', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00008';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (8)', '8', '1000', '', '2022-10-18 06:44:35', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00008';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('Test121', 'Test Test', '0232023932', '0293023902', 'WD180GX', '43223 Rickmansworth Road, Watford, Hertfordshire', 'test@gmail.com', '1', '2', 'Valiant', 'Gas', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (1, 1, '1000', '2022-10-18 06:49:47');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00001)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'Test121\', \'Test Test\', \'0232023932\', \'0293023902\', \'WD180GX\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'test@gmail.com\', \'1\', \'2\', \'Valiant\', \'Gas\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-18 06:49:47', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('Test comments', 1, '1000', '2022-10-18 06:49:47');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00001)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'Test comments\', 1, \'1000\', \'2022-10-18 06:49:47\')', '2022-10-18 06:49:47', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00001)', 1, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'Test comments\', 1, \'1000\', \'2022-10-18 06:49:47\')', '2022-10-18 06:49:47', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('Test comments', '2022-10-18 06:49:47', 1);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (1)', '1', '1000', '', '2022-10-18 06:49:48', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00001';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (1)', '1', '1000', '', '2022-10-18 06:50:59', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00001';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (1)', '1', '1000', '', '2022-10-18 08:06:01', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00001';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (1)', '1', '1000', '', '2022-10-18 08:06:52', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00001';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (1)', '1', '1000', '', '2022-10-18 08:07:21', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00001';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (1)', '1', '1000', '', '2022-10-18 08:07:22', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00001';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (1)', '1', '1000', '', '2022-10-18 08:08:37', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00001';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (1)', '1', '1000', '', '2022-10-18 08:08:47', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00001';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('TEST12', 'TEST TEST', '0830389023', '0293029302', 'WD180GX', '43223 Rickmansworth Road, Watford, Hertfordshire', 'test@gmail.com', '2', '2', '89', 'Gas', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (1, 1, '1000', '2022-10-18 08:09:43');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00001)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'TEST12\', \'TEST TEST\', \'0830389023\', \'0293029302\', \'WD180GX\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'test@gmail.com\', \'2\', \'2\', \'89\', \'Gas\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-18 08:09:43', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('TEST COMMENTS', 1, '1000', '2022-10-18 08:09:43');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00001)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'TEST COMMENTS\', 1, \'1000\', \'2022-10-18 08:09:43\')', '2022-10-18 08:09:43', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00001)', 1, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'TEST COMMENTS\', 1, \'1000\', \'2022-10-18 08:09:43\')', '2022-10-18 08:09:43', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('TEST COMMENTS', '2022-10-18 08:09:43', 1);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (1)', '1', '1000', '', '2022-10-18 08:09:44', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00001';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (1)', '1', '1000', '', '2022-10-18 08:10:44', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00001';

DELETE FROM `tbl_notes`
WHERE `id` = '10';

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has deleted a note for the job(RNSB00001)', '1000', 'DELETE FROM `tbl_notes`\nWHERE `id` = \'10\'', '2022-10-18 08:10:50', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has deleted a note for the job(RNSB00001)', 1, '1000', 'DELETE FROM `tbl_notes`\nWHERE `id` = \'10\'', '2022-10-18 08:10:50', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (1)', '1', '1000', '', '2022-10-18 08:10:58', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00001';

INSERT INTO `tbl_notes` (`job_id`, `note_desc`, `user_id`, `created_at`) VALUES (1, 'TEST SECOND NOTE', '1000', '2022-10-18 08:11:11');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00001)', '1000', 'INSERT INTO `tbl_notes` (`job_id`, `note_desc`, `user_id`, `created_at`) VALUES (1, \'TEST SECOND NOTE\', \'1000\', \'2022-10-18 08:11:11\')', '2022-10-18 08:11:11', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00001)', 1, '1000', 'INSERT INTO `tbl_notes` (`job_id`, `note_desc`, `user_id`, `created_at`) VALUES (1, \'TEST SECOND NOTE\', \'1000\', \'2022-10-18 08:11:11\')', '2022-10-18 08:11:11', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (1)', '1', '1000', '', '2022-10-18 10:23:32', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00001';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('TEST1212', 'TEST SECOND', '0123123390', '0823238928', 'WD180GX', '43223 Rickmansworth Road, Watford, Hertfordshire', 'test@gmail.com', '1', '3', '16', 'Electric', 'No', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (2, 1, '1000', '2022-10-18 10:30:27');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00002)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'TEST1212\', \'TEST SECOND\', \'0123123390\', \'0823238928\', \'WD180GX\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'test@gmail.com\', \'1\', \'3\', \'16\', \'Electric\', \'No\', \'manual_creation_no_data\', 1)', '2022-10-18 10:30:27', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('TEST SECOND', 2, '1000', '2022-10-18 10:30:27');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00002)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'TEST SECOND\', 2, \'1000\', \'2022-10-18 10:30:27\')', '2022-10-18 10:30:27', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00002)', 2, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'TEST SECOND\', 2, \'1000\', \'2022-10-18 10:30:27\')', '2022-10-18 10:30:27', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('TEST SECOND', '2022-10-18 10:30:27', 2);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (2)', '2', '1000', '', '2022-10-18 10:30:27', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00002';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('TEST12122', 'TEST THIRD', '01291203938', '02389203092', 'WD180GX', '43223 Rickmansworth Road, Watford, Hertfordshire', 'test@gmail.com', '3', '1', '15', 'Gas', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (3, 1, '1000', '2022-10-18 10:49:04');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00003)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'TEST12122\', \'TEST THIRD\', \'01291203938\', \'02389203092\', \'WD180GX\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'test@gmail.com\', \'3\', \'1\', \'15\', \'Gas\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-18 10:49:04', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('TEST THIRD', 3, '1000', '2022-10-18 10:49:04');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00003)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'TEST THIRD\', 3, \'1000\', \'2022-10-18 10:49:04\')', '2022-10-18 10:49:04', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00003)', 3, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'TEST THIRD\', 3, \'1000\', \'2022-10-18 10:49:04\')', '2022-10-18 10:49:04', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('TEST THIRD', '2022-10-18 10:49:04', 3);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-18 10:49:05', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-18 10:49:34', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-18 10:54:03', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-18 11:05:20', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-18 11:07:27', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-18 11:09:38', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-18 11:18:39', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-18 11:21:49', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-10-18 11:27:06', '192.168.2.187');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-10-18 11:27:55', '192.168.2.187');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged out of the CRM', '1000', NULL, '2022-10-18 11:31:41', '192.168.2.187');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-10-18 11:33:45', '192.168.2.187');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-10-18 11:34:04', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (3)', '3', '1000', '', '2022-10-18 11:35:15', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('TEST121111', 'TEST FOUR', '0239203902', '0230239023', 'WD180GX', '43223 Rickmansworth Road, Watford, Hertfordshire', 'testss@gmail.com', '2', '2', '46', 'Gas', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (4, 1, '1000', '2022-10-18 11:36:15');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00004)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'TEST121111\', \'TEST FOUR\', \'0239203902\', \'0230239023\', \'WD180GX\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'testss@gmail.com\', \'2\', \'2\', \'46\', \'Gas\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-18 11:36:15', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('test four', 4, '1000', '2022-10-18 11:36:15');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00004)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'test four\', 4, \'1000\', \'2022-10-18 11:36:15\')', '2022-10-18 11:36:15', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00004)', 4, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'test four\', 4, \'1000\', \'2022-10-18 11:36:15\')', '2022-10-18 11:36:15', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('test four', '2022-10-18 11:36:15', 4);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (4)', '4', '1000', '', '2022-10-18 11:36:16', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00004';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (4)', '4', '1000', '', '2022-10-18 11:39:47', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00004';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (4)', '4', '1000', '', '2022-10-18 11:40:39', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00004';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (4)', '4', '1000', '', '2022-10-18 11:40:41', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00004';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (4)', '4', '1000', '', '2022-10-18 11:40:46', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00004';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (4)', '4', '1000', '', '2022-10-18 11:40:58', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00004';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (4)', '4', '1000', '', '2022-10-18 11:43:46', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00004';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the quote (4)', '4', '1000', '', '2022-10-18 11:44:34', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00004';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (4)', '4', '1000', '', '2022-10-18 11:45:31', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00004';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (2)', '2', '1000', '', '2022-10-18 11:45:44', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00002';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (1)', '1', '1000', '', '2022-10-18 11:45:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00001';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (4)', '4', '1000', '', '2022-10-18 11:46:05', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00004';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (3)', '3', '1000', '', '2022-10-18 11:46:23', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00003';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (4)', '4', '1000', '', '2022-10-18 11:46:33', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00004';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('TERTE3123', 'TESAE', '0238238209', '0283203820', 'WD180GX', '43223 Rickmansworth Road, Watford, Hertfordshire', 'testWDss@gmail.com', '2', '3', '66', 'Gas', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (5, 1, '1000', '2022-10-18 11:48:55');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00005)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'TERTE3123\', \'TESAE\', \'0238238209\', \'0283203820\', \'WD180GX\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'testWDss@gmail.com\', \'2\', \'3\', \'66\', \'Gas\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-18 11:48:55', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('WEFWEWFWEFW', 5, '1000', '2022-10-18 11:48:55');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00005)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'WEFWEWFWEFW\', 5, \'1000\', \'2022-10-18 11:48:55\')', '2022-10-18 11:48:55', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00005)', 5, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'WEFWEWFWEFW\', 5, \'1000\', \'2022-10-18 11:48:55\')', '2022-10-18 11:48:55', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('WEFWEWFWEFW', '2022-10-18 11:48:55', 5);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (5)', '5', '1000', '', '2022-10-18 11:48:56', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00005';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('TEWQW2112', 'TWFQW', '0283280122', '0382308234', 'WD180GX', 'Smart Cover Direct Ltd, 3-5 Rickmansworth Road, Watford, Hertfordshire', 'testDss@gmail.com', '2', '1', '80', 'Electric', 'No', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (6, 1, '1000', '2022-10-18 11:49:32');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00006)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'TEWQW2112\', \'TWFQW\', \'0283280122\', \'0382308234\', \'WD180GX\', \'Smart Cover Direct Ltd, 3-5 Rickmansworth Road, Watford, Hertfordshire\', \'testDss@gmail.com\', \'2\', \'1\', \'80\', \'Electric\', \'No\', \'manual_creation_no_data\', 1)', '2022-10-18 11:49:32', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('QWQWWFWF', 6, '1000', '2022-10-18 11:49:32');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00006)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'QWQWWFWF\', 6, \'1000\', \'2022-10-18 11:49:32\')', '2022-10-18 11:49:32', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00006)', 6, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'QWQWWFWF\', 6, \'1000\', \'2022-10-18 11:49:32\')', '2022-10-18 11:49:32', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('QWQWWFWF', '2022-10-18 11:49:32', 6);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (6)', '6', '1000', '', '2022-10-18 11:49:33', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00006';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('TWQWS1212', 'DSFFE', '0121312123', '0232323241', 'WD180GX', '43223 Rickmansworth Road, Watford, Hertfordshire', 'tDestss@gmail.com', '3', '2', '79', 'Gas', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (7, 1, '1000', '2022-10-18 11:50:14');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00007)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'TWQWS1212\', \'DSFFE\', \'0121312123\', \'0232323241\', \'WD180GX\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'tDestss@gmail.com\', \'3\', \'2\', \'79\', \'Gas\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-18 11:50:14', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('WEFFEWFEWFWF', 7, '1000', '2022-10-18 11:50:14');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00007)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'WEFFEWFEWFWF\', 7, \'1000\', \'2022-10-18 11:50:14\')', '2022-10-18 11:50:14', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00007)', 7, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'WEFFEWFEWFWF\', 7, \'1000\', \'2022-10-18 11:50:14\')', '2022-10-18 11:50:14', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('WEFFEWFEWFWF', '2022-10-18 11:50:14', 7);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (7)', '7', '1000', '', '2022-10-18 11:50:15', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00007';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('TREW23423', 'TWEWT', '0433542334', '0454335322', 'WD180GX', '43223 Rickmansworth Road, Watford, Hertfordshire', 'testWEDss@gmail.com', '2', '2', '18', 'Gas', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (8, 1, '1000', '2022-10-18 11:50:53');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00008)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'TREW23423\', \'TWEWT\', \'0433542334\', \'0454335322\', \'WD180GX\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'testWEDss@gmail.com\', \'2\', \'2\', \'18\', \'Gas\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-18 11:50:53', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('FEWFEWEWEW', 8, '1000', '2022-10-18 11:50:53');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00008)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'FEWFEWEWEW\', 8, \'1000\', \'2022-10-18 11:50:53\')', '2022-10-18 11:50:53', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00008)', 8, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'FEWFEWEWEW\', 8, \'1000\', \'2022-10-18 11:50:53\')', '2022-10-18 11:50:53', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('FEWFEWEWEW', '2022-10-18 11:50:53', 8);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (8)', '8', '1000', '', '2022-10-18 11:50:54', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00008';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('T23W2', 'TEWEQ', '0123327922', '0923892833', 'WD180GX', 'Work Creative Ltd, Keepmoat Stadium, Rickmansworth Road, Watford, Hertfordshire', 'testWEDss@gmail.com', '3', '3', '63', 'Electric', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (9, 1, '1000', '2022-10-18 11:51:32');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00009)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'T23W2\', \'TEWEQ\', \'0123327922\', \'0923892833\', \'WD180GX\', \'Work Creative Ltd, Keepmoat Stadium, Rickmansworth Road, Watford, Hertfordshire\', \'testWEDss@gmail.com\', \'3\', \'3\', \'63\', \'Electric\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-18 11:51:32', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('WEEEE', 9, '1000', '2022-10-18 11:51:32');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00009)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'WEEEE\', 9, \'1000\', \'2022-10-18 11:51:32\')', '2022-10-18 11:51:32', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00009)', 9, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'WEEEE\', 9, \'1000\', \'2022-10-18 11:51:32\')', '2022-10-18 11:51:32', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('WEEEE', '2022-10-18 11:51:32', 9);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (9)', '9', '1000', '', '2022-10-18 11:51:33', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00009';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('HWEWE23', 'TWEWW', '0123327922', '9238923291', 'WD180GX', 'Smart Cover Insurance, 3-5 Rickmansworth Road, 1st Floor AGF House, Watford, Hertfordshire', 'testsDDs@gmail.com', '1', '1', '87', 'Gas', 'No', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (10, 1, '1000', '2022-10-18 11:52:43');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00010)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'HWEWE23\', \'TWEWW\', \'0123327922\', \'9238923291\', \'WD180GX\', \'Smart Cover Insurance, 3-5 Rickmansworth Road, 1st Floor AGF House, Watford, Hertfordshire\', \'testsDDs@gmail.com\', \'1\', \'1\', \'87\', \'Gas\', \'No\', \'manual_creation_no_data\', 1)', '2022-10-18 11:52:43', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('DFWFWEWEF', 10, '1000', '2022-10-18 11:52:43');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00010)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'DFWFWEWEF\', 10, \'1000\', \'2022-10-18 11:52:43\')', '2022-10-18 11:52:43', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00010)', 10, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'DFWFWEWEF\', 10, \'1000\', \'2022-10-18 11:52:43\')', '2022-10-18 11:52:43', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('DFWFWEWEF', '2022-10-18 11:52:43', 10);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (10)', '10', '1000', '', '2022-10-18 11:52:44', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00010';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('TEWW112', 'TESTEER', '0212324234', '0223423424', 'WD180GX', 'Generalsoft Ltd, 3-5 Rickmansworth Road, Watford, Hertfordshire', 'tesWDWt@gmail.com', '3', '3', '52', 'Gas', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (11, 1, '1000', '2022-10-18 11:53:26');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00011)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'TEWW112\', \'TESTEER\', \'0212324234\', \'0223423424\', \'WD180GX\', \'Generalsoft Ltd, 3-5 Rickmansworth Road, Watford, Hertfordshire\', \'tesWDWt@gmail.com\', \'3\', \'3\', \'52\', \'Gas\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-18 11:53:26', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('WEFEWEWFEW', 11, '1000', '2022-10-18 11:53:26');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00011)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'WEFEWEWFEW\', 11, \'1000\', \'2022-10-18 11:53:26\')', '2022-10-18 11:53:26', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00011)', 11, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'WEFEWEWFEW\', 11, \'1000\', \'2022-10-18 11:53:26\')', '2022-10-18 11:53:26', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('WEFEWEWFEW', '2022-10-18 11:53:26', 11);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-18 11:53:28', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-18 13:05:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-18 13:05:47', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-18 15:02:31', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-10-19 05:39:29', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 05:39:34', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 05:42:56', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, '1', '1000');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00011)', '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, \'1\', \'1000\')', '2022-10-19 05:43:03', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00011)', 11, '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, \'1\', \'1000\')', '2022-10-19 05:43:03', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 05:44:34', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, '1', '1000');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00011)', '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, \'1\', \'1000\')', '2022-10-19 05:44:40', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00011)', 11, '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, \'1\', \'1000\')', '2022-10-19 05:44:40', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 05:49:26', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 05:50:39', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 05:50:47', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 05:52:20', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 05:54:14', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 05:54:32', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 05:56:17', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 05:56:35', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 06:10:45', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 06:11:04', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

UPDATE `tbl_job_status_log` SET `status` = 0
WHERE `id` = '1';

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has deleted the job status for the job(RNSB00011)', '1000', 'UPDATE `tbl_job_status_log` SET `status` = 0\nWHERE `id` = \'1\'', '2022-10-19 06:11:08', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has deleted the job status for the job(RNSB00011)', 11, '1000', 'UPDATE `tbl_job_status_log` SET `status` = 0\nWHERE `id` = \'1\'', '2022-10-19 06:11:08', '192.168.2.187');

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, '1', '1000');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00011)', '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, \'1\', \'1000\')', '2022-10-19 06:11:14', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00011)', 11, '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, \'1\', \'1000\')', '2022-10-19 06:11:14', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 06:11:46', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, '2', '1000');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00011)', '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, \'2\', \'1000\')', '2022-10-19 06:11:51', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00011)', 11, '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, \'2\', \'1000\')', '2022-10-19 06:11:51', '192.168.2.187');

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, '3', '1000');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00011)', '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, \'3\', \'1000\')', '2022-10-19 06:11:54', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00011)', 11, '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, \'3\', \'1000\')', '2022-10-19 06:11:54', '192.168.2.187');

UPDATE `tbl_job_status_log` SET `status` = 0
WHERE `id` = '2';

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has deleted the job status for the job(RNSB00011)', '1000', 'UPDATE `tbl_job_status_log` SET `status` = 0\nWHERE `id` = \'2\'', '2022-10-19 06:12:00', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has deleted the job status for the job(RNSB00011)', 11, '1000', 'UPDATE `tbl_job_status_log` SET `status` = 0\nWHERE `id` = \'2\'', '2022-10-19 06:12:00', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 06:23:17', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, '1', '1000');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00011)', '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, \'1\', \'1000\')', '2022-10-19 06:23:25', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00011)', 11, '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (11, \'1\', \'1000\')', '2022-10-19 06:23:25', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (11)', '11', '1000', '', '2022-10-19 06:23:29', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged out of the CRM', '1000', NULL, '2022-10-19 06:26:12', '192.168.2.187');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Engineer) has logged in to the CRM', '1000', NULL, '2022-10-19 06:26:25', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Engineer) has opened the job (11)', '11', '1000', '', '2022-10-19 06:26:39', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00011';

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged out of the CRM', '1000', NULL, '2022-10-19 06:27:27', '192.168.2.187');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-10-19 06:27:33', '192.168.2.187');

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('TEST123', 'TEST NAME', '0223898923', '0283928392', 'WD180GX', 'Articad Ltd, 3-5 Rickmansworth Road, Watford, Hertfordshire', 'test@gmail.com', '1', '3', '74', 'Electric', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (12, 1, '1000', '2022-10-19 07:14:56');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00012)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'TEST123\', \'TEST NAME\', \'0223898923\', \'0283928392\', \'WD180GX\', \'Articad Ltd, 3-5 Rickmansworth Road, Watford, Hertfordshire\', \'test@gmail.com\', \'1\', \'3\', \'74\', \'Electric\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-10-19 07:14:56', '192.168.2.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('Test comments', 12, '1000', '2022-10-19 07:14:56');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00012)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'Test comments\', 12, \'1000\', \'2022-10-19 07:14:56\')', '2022-10-19 07:14:56', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00012)', 12, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'Test comments\', 12, \'1000\', \'2022-10-19 07:14:56\')', '2022-10-19 07:14:56', '192.168.2.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('Test comments', '2022-10-19 07:14:56', 12);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-10-19 07:15:06', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-10-19 07:48:49', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-10-19 08:06:21', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

DELETE FROM `tbl_job_details`
WHERE `job_id` = 1;

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has deleted the job (RNSB00001)', '1000', 'DELETE FROM `tbl_job_details`\nWHERE `job_id` = 1', '2022-10-19 08:12:18', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has deleted the job (RNSB00001)', 1, '1000', 'DELETE FROM `tbl_job_details`\nWHERE `job_id` = 1', '2022-10-19 08:12:18', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-10-19 08:15:15', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-10-19 08:17:03', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (12, '4', '1000');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00012)', '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (12, \'4\', \'1000\')', '2022-10-19 08:17:09', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00012)', 12, '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (12, \'4\', \'1000\')', '2022-10-19 08:17:09', '192.168.2.187');

INSERT INTO `tbl_notes` (`job_id`, `note_desc`, `user_id`, `created_at`) VALUES (12, 'notes', '1000', '2022-10-19 08:17:25');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00012)', '1000', 'INSERT INTO `tbl_notes` (`job_id`, `note_desc`, `user_id`, `created_at`) VALUES (12, \'notes\', \'1000\', \'2022-10-19 08:17:25\')', '2022-10-19 08:17:25', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00012)', 12, '1000', 'INSERT INTO `tbl_notes` (`job_id`, `note_desc`, `user_id`, `created_at`) VALUES (12, \'notes\', \'1000\', \'2022-10-19 08:17:25\')', '2022-10-19 08:17:25', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-10-19 08:17:30', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-10-20 10:25:14', '192.168.2.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-10-20 10:25:22', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-10-20 10:32:28', '192.168.2.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-10-24 05:48:41', '192.168.1.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-10-24 05:48:47', '192.168.1.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-10-24 05:49:52', '192.168.1.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-10-24 05:50:07', '192.168.1.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

