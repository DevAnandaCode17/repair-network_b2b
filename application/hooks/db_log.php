<?php

class Db_log
{

	function __construct()
	{
	}


	function logQueries()
	{
		$CI = &get_instance();

		$filepath = APPPATH . 'logs/Query-log-' . date('M-Y') . '.php';
		$handle = fopen($filepath, "a+");
		foreach ($CI->db->queries as $key => $query) {
			$sql = $query . ";";
			$qStartsWith = substr($sql, 0, 6);
			if ($qStartsWith === 'INSERT' || $qStartsWith === 'UPDATE' || $qStartsWith === 'DELETE') {
				fwrite($handle, $sql . "\n\n");
			}
		}

		fclose($handle);
	}

}
