<?php
$array = array(12.5,'fox','bear','deer','cat',100);
$vowels = array('a','e','i','o','u','A','E','I','O','U');


$merged_array = array_merge($vowels,$array);
print_r($merged_array);
?>