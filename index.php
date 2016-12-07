<?php

include "bootstrap.php";
echo "<br>we are in index file"."<br>";

$curl = new curls();
echo  $curl -> get('https://en.wikipedia.org/wiki/PHP');



?>
