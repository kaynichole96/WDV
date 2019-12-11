<?php

$testboolen = true;

include 'FormValidation.php'; // access the class file

$validateTool = new FormValidation(); //instantiate a new object

echo  "Empty quotes:" . $validateTool -> validateRequiredsField("") . "<br>";
echo  "single space:" . $validateTool -> validateRequiredsField(" "). "<br>";
echo  "two spaces:" . $validateTool -> validateRequiredsField("    "). "<br>;";

echo  "a:" . $validateTool -> validateRequiredsField("a") . "<br>";
echo  "4:" . $validateTool -> validateRequiredsField("4"). "<br>";
echo  "null:" . $validateTool -> validateRequiredsField("null"). "<br>;";
echo  "NULL:" . $validateTool -> validateRequiredsField("NULL") . "<br>";
echo  "null string:" . $validateTool -> validateRequiredsField("null"). "<br>";
echo  "undefined:" . $validateTool -> validateRequiredsField("undefined"). "<br>;";



if($validateTool->validateRequiredsField("a")) {
  echo "a is valid";
 else {
   echo "a is invalid <br>";
}

if($validateTool->validateRequiredsField("a")) {
  echo "empty is valid";
 else {
   echo "empty is invalid <br>";
}


?>
