<?php
class Addresses{
	static public function get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM FALL2013_Addresses');
		while ($rs = $result->fetch_assoc())
		{
			$ret[] = $rs;
		}
		$conn->close();
		return $ret;
	}
}