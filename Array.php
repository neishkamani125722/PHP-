<?php
$array_one = array("One" , "Two" , "Three");
$array_Two = array("Four" , "Five" , 6 , 7.5);


echo "<pre>";
Print_r($array_one);
Print_r($array_Two);
echo "</pre>";


// Push
echo "<pre>";
Print_r(array_Push($array_one , "Neish"));
echo "</pre>";

echo "<pre>";
Print_r($array_one);
echo "</pre>";


// Pop
echo "<pre>";
Print_r(array_Pop($array_one));
echo "</pre>";

echo "<pre>";
Print_r($array_one);
echo "</pre>";


// Merge
echo "<pre>";
Print_r(array_Merge($array_one , $array_Two));
echo "</pre>";


//Flip
echo "<pre>";
Print_r(array_flip($array_one));
echo "</pre>";




?>