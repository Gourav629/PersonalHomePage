<?php
$array = array('fox','bear','deer','dog','cat',array('blue','black','red','orange'));
echo count($array,COUNT_NORMAL);
die;
for($i=0;$i<count($array);$i++){
	echo $array[$i].'<br/>';
}
?>