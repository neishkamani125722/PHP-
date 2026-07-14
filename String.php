<?php
//String Functions are built - in Function
//Investing Strings
//Manipulating Strings
$str1 = "     Krupal";
$str2 = "Bhimani";

echo $str1 . " " .$str2;
echo "<br>";
print($str1 .  " " .$str2);

echo "<br>";
echo strlen($str1);

echo "<br>";
$trimString = trim($str1);

echo "<br>";
echo strlen($trimString);

echo "<br>";
echo strrev($str1);

echo "<br>";
echo strtolower($str1);
echo strtolower($str2);

echo "<br>";
echo strtoupper($str1);
echo strtoupper($str2);

echo "<br>";
echo strcmp($str1,$str2);

echo "<br>";
echo strstr($str1,"R");

echo "<br>";
echo stristr($str1,"R");

echo "<br>";
echo ucfirst("i am krupal bhimani");

echo "<br>";
echo ucwords("i am krupal bhimani");

?>