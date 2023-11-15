INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-11-02 06:42:13', '192.168.1.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-11-02 06:42:46', '192.168.1.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-11-02 07:00:05', '192.168.1.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-11-02 07:00:07', '192.168.1.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-11-02 07:01:41', '192.168.1.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (12)', '12', '1000', '', '2022-11-02 07:13:04', '192.168.1.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00012';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('Test11223', 'Test Name', '0283280121', '0283203829', 'WD180GX', 'Generalsoft Ltd, 3-5 Rickmansworth Road, Watford, Hertfordshire', 'testse@gmail.com', '1', '1', '17', 'Electric', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (13, 1, '1000', '2022-11-02 07:14:22');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00013)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'Test11223\', \'Test Name\', \'0283280121\', \'0283203829\', \'WD180GX\', \'Generalsoft Ltd, 3-5 Rickmansworth Road, Watford, Hertfordshire\', \'testse@gmail.com\', \'1\', \'1\', \'17\', \'Electric\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-11-02 07:14:22', '192.168.1.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('Comments test', 13, '1000', '2022-11-02 07:14:22');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00013)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'Comments test\', 13, \'1000\', \'2022-11-02 07:14:22\')', '2022-11-02 07:14:22', '192.168.1.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00013)', 13, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'Comments test\', 13, \'1000\', \'2022-11-02 07:14:22\')', '2022-11-02 07:14:22', '192.168.1.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('Comments test', '2022-11-02 07:14:22', 13);

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('Test12322', 'Test Name Two', '0123327768', '0283203898', 'WD180GX', 'Generalsoft Ltd, 3-5 Rickmansworth Road, Watford, Hertfordshire', 'tesssat@gmail.com', '2', '2', '46', 'Gas', 'No', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (14, 1, '1000', '2022-11-02 07:25:04');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00014)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'Test12322\', \'Test Name Two\', \'0123327768\', \'0283203898\', \'WD180GX\', \'Generalsoft Ltd, 3-5 Rickmansworth Road, Watford, Hertfordshire\', \'tesssat@gmail.com\', \'2\', \'2\', \'46\', \'Gas\', \'No\', \'manual_creation_no_data\', 1)', '2022-11-02 07:25:04', '192.168.1.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('Comments test two', 14, '1000', '2022-11-02 07:25:04');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00014)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'Comments test two\', 14, \'1000\', \'2022-11-02 07:25:04\')', '2022-11-02 07:25:04', '192.168.1.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00014)', 14, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'Comments test two\', 14, \'1000\', \'2022-11-02 07:25:04\')', '2022-11-02 07:25:04', '192.168.1.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('Comments test two', '2022-11-02 07:25:04', 14);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (14)', '14', '1000', '', '2022-11-02 07:25:16', '192.168.1.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00014';

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has logged in to the CRM', '1000', NULL, '2022-11-08 11:23:05', '192.168.1.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (14)', '14', '1000', '', '2022-11-08 11:23:28', '192.168.1.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00014';

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (14)', '14', '1000', '', '2022-11-08 11:27:19', '192.168.1.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00014';

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (14, '2', '1000');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00014)', '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (14, \'2\', \'1000\')', '2022-11-08 11:27:24', '192.168.1.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added the job status for the job(RNSB00014)', 14, '1000', 'INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`) VALUES (14, \'2\', \'1000\')', '2022-11-08 11:27:24', '192.168.1.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (14)', '14', '1000', '', '2022-11-08 11:27:34', '192.168.1.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00014';

INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES ('RNB212323', 'Test B', '0236456495', '0326565494', 'wd180gx', '43223 Rickmansworth Road, Watford, Hertfordshire', 'tesdt@gmail.com', '2', '2', '18', 'Electric', 'Yes', 'manual_creation_no_data', 1);

INSERT INTO `tbl_job_status_log` (`job_id`, `job_status_id`, `user_id`, `created_at`) VALUES (15, 1, '1000', '2022-11-08 11:28:49');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has created a new job (RNSB00015)', '1000', 'INSERT INTO `tbl_job_details` (`reference_number`, `full_name`, `phone_number`, `alternate_phone_number`, `post_code`, `address`, `email`, `job_type`, `boiler_type`, `boiler_make`, `fuel_type`, `commercial_boiler`, `received_data`, `job_status_id`) VALUES (\'RNB212323\', \'Test B\', \'0236456495\', \'0326565494\', \'wd180gx\', \'43223 Rickmansworth Road, Watford, Hertfordshire\', \'tesdt@gmail.com\', \'2\', \'2\', \'18\', \'Electric\', \'Yes\', \'manual_creation_no_data\', 1)', '2022-11-08 11:28:49', '192.168.1.187');

INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES ('tested', 15, '1000', '2022-11-08 11:28:49');

INSERT INTO `tbl_audit_log` (`audit_log_name`, `user_id`, `audit_query`, `audit_timestamp`, `audit_user_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00015)', '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'tested\', 15, \'1000\', \'2022-11-08 11:28:49\')', '2022-11-08 11:28:49', '192.168.1.187');

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has added a note for the job(RNSB00015)', 15, '1000', 'INSERT INTO `tbl_notes` (`note_desc`, `job_id`, `user_id`, `created_at`) VALUES (\'tested\', 15, \'1000\', \'2022-11-08 11:28:49\')', '2022-11-08 11:28:49', '192.168.1.187');

INSERT INTO `tbl_job_comments` (`job_comments`, `job_comment_datetime`, `job_id`) VALUES ('tested', '2022-11-08 11:28:49', 15);

INSERT INTO `tbl_job_log` (`job_log_desc`, `job_id`, `user_id`, `job_log_query`, `job_log_timestamp`, `job_log_ip`) VALUES ('Super User (Super User) has opened the job (15)', '15', '1000', '', '2022-11-08 11:28:58', '192.168.1.187');

UPDATE `tbl_job_details` SET `viewed` = 1
WHERE `job_id` = 'RNSB00015';

