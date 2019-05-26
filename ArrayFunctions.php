<?php

$numbers = array(10,15,7,39,23,59);

echo "Maximum Number : ". max($numbers)."<br>";
echo "Minimum Number : ". min($numbers)."<br>";
echo "Count :" . count($numbers)."<br><br>";
echo "Sort :Assending Order.<br>";
sort($numbers);
print_r($numbers);

echo "<br><br>";
  
echo "Sort :Dicending Order.<br>";
rsort($numbers);
print_r($numbers);

?>