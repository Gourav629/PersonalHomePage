<?php
$animal1 = array('dog','cat','rat');
$animal2 = array('dog','cat','rat','cow');
$result = array_diff($animal2,$animal1);
print_r($result);
?>