SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repairnetwork_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sc_riq_call_attempts`
--

CREATE TABLE `tbl_sc_riq_call_attempts` (
  `attempt_id` int(11) NOT NULL,
  `riq_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `attempt_status_id` int(11) NOT NULL,
  `attempt_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_sc_riq_call_attempts`
--
ALTER TABLE `tbl_sc_riq_call_attempts`
  ADD PRIMARY KEY (`attempt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_sc_riq_call_attempts`
--
ALTER TABLE `tbl_sc_riq_call_attempts`
  MODIFY `attempt_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;