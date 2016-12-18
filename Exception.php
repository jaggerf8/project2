<?php

class FileNotFoundException extends Exception {}
class UnableToWriteException extends Exception {}

$filename = "exception.txt";

try {
	try {
		$text = file_get_contents($filename);
		if($text === false)
		{
			throw new Exception();
		}
	}

	catch (Exception $e)
	{
		if(!file_exists($filename))
		{
			throw new FileNotFoundException($filename . " does not exist.");
		}
	
		else if (!is_writable($filename))
		{
			throw new UnableToWriteException($filename . " is not writable.");
		}
		
		else
		{
			throw new Exception("Unknown error accessing file.");
		}
	}
}

catch (FileNotFoundException $fe)
{
	echo $fe->getMessage();
	error_log($fe->getTraceAsString());
}

catch (UnableToWriteException $fr)
{
	echo $fr->getMessage();
	error_log($fr->getTraceAsString());
}


?>
