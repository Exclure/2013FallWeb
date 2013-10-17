<?php
class Keywords{
	static public function get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM FALL2013_Keywords');
		while ($rs = $result->fetch_assoc())
		{
			$ret[] = $rs;
		}
		$conn->close();
		return $ret;
	}
}
