<?php
$arch = array('KING','QUEEN','WIZARD','GIANT','BARBARIAN');
 print_r($arch);
 $reverse = array_reverse($arch,true);// true tag shows the original array index of each identity/string... else the index would be reinitialize.... 
 print_r($reverse);
?>