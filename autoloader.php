<?php

class Autoloader {
public static function loader($class)
{
	
	$filename = strtolower($class) . '.php';
	if(!file_exists($filename))
	{
		return false;
	}
	include $filename;
}
}
?>
