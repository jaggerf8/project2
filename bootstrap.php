<?php
echo " we are in bootstrap file";
require_once('Autoloader.php');
spl_autoload_register('Autoloader::loader');

?>
