<?php

$inYear = 2019;
$inMonth = 4;
$inDate = 4;


$formattedDate = date ("Y-m-d");

echo "<h1> Today is: $formattedDate </h1>";

$inputFormattedDate = date("Y-m-d", mktime(0,0,0,$inMonth,$inDate,$inYear));

echo "<h1>Input date is: $inputFormattedDate </h1>";


$formattedTime = date ("g:i:00);
echo "<h1>Input time is: $formattedTime </h1>";


?>
