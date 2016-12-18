<?php

include "bootstrap.php";
echo "<br>we are in index file"."<br>";

$test = array(
        "Example" => array('ex', 'ex1', 'ex2'),
	        "Test" => array('1' , '2' , '3'),
		        "Numbers" => array(1, 2, 3),
			        "Header" => array('a', 'b', 'c')
				        );

					$header = True;
					$a = new htmlFunction();
					$a -> arrayToTable($test, $header);

echo "<br>";
$curl = new curls();
echo  $curl -> get('https://en.wikipedia.org/wiki/PHP');



?>
