<?php
$text = "red,orange,black,white,cyan,teal,purple,pink";
$columns = "bob|nancy|rachel|molly|victoria";
$text_array = explode(",", $text);
print_r($text_array);
//restricting to 2 ;
$text_array = explode(",", $text,2);
print_r($text_array);
?>