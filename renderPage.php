<?php
if(!$HW){
	die("Hack try.");
}

if(file_exists($find)){
	$file = file_get_contents($find);
	print(str_replace('<?php
if(!$HW){
	die("Hack try.");
}
?>', "", $file));
}else{
	die("ERROR.<br>Template not found.");
}
?>