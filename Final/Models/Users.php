<?php

class Users 
{
	
	static public function Get($id=null)
	{
		if(isset($id))
		{
			return fetch_one("SELECT * FROM Fall2013_Users WHERE id=$id");
	}
		
		else
		{
			return fetch_all('SELECT * FROM Fall2013_Users');
		}
	
	
	}
}