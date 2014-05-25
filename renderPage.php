<?php
if(!$HW){
	die("Hack try.");
}

if(file_exists($templates_dir.$find)){
	$file = file_get_contents($templates_dir.$find);
	print(str_replace('<?php
if(!$HW){
	die("Hack try.");
}
?>', "", $file));
}else{
	die("ERROR.<br>Template not found.");
}
?>