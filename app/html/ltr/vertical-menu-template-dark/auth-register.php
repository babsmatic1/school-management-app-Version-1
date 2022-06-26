<?php
require 'function.php';

$start = microtime(true);
getcache("registerview.php");
echo "Execution time: ".round(microtime(true)- $start, 3);

?>
