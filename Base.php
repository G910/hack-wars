<?php
if(!$HW){
	die("Hack try.");
}

class Base
{
	private static $db;
	
	public static function query($sql){
		$x = self::$db->query($sql);
		return $x;
	}
	public static function start($host, $user, $pass, $base){
		self::$db =  new mysqli($host, $user, $pass, $base);
	}
}

?>