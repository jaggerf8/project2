<?php
echo " we are in bootstrap file";
require_once('autoloader.php');
spl_autoload_register('Autoloader::loader');

?>
