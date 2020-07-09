<?php
$ext = array('curl','json','html','xml','sqli');
foreach ($ext as $ext) {
	echo extension_loaded($ext) ?"$ext is Loaded"."<br/>":"$ext is not Loaded !!!"."<br/>"; //extention_loaded identifies weather this extention is Loaded or not......
}