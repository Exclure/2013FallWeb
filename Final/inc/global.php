<?php
include_once('password.php');

include_once __DIR__ . '/../Models/Keywords.php';
include_once __DIR__ . '/../Models/Users.php';
include_once __DIR__ . '/../Models/Addresses.php';
include_once __DIR__ . '/../Models/Products.php';
include_once __DIR__ . '/../Models/Orders.php';

function fetch_all($sql)
{
	$ret = array();
	$conn = GetConnection();
	$result = $conn->query($sql);

	while ($rs = $result->fetch_assoc()) 
	{
		$ret[] = $rs;
	}
	
	$conn->close();
	return $ret;
}

function fetch_one($sql)
{
	$arr = fetch_all($sql);
	return $arr[0];
}
