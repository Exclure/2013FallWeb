<?php
include_once('password.php');

include_once __DIR__ . '/../Models/Keywords.php';

function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'n02108655', $sql_password, 'n02108655_db');
	return $conn;
}