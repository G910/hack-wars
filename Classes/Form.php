<?php
class Form
{
	public static function startForm($action, $method = "POST", $name = "form", $id = "null"){
		if(empty($action)){
			return "Error, no action assigned.";
		}
		print("
			<form method=\"{$method}\" action=\"{$action}\" name=\"{$name}\" id=\"{$id}\">
			");
		
	}
	
	public static function endForm(){
		print("
			</form>
			");
	}
	
	public static function input($name, $id = "null", $phol = "", $type = "text"){
		if(empty($name) || empty($id) || empty($phol)){
			return "Error, no action assigned.";
		}
		print("
		<input type=\"{$type}\" placeholder=\"{$phol}\" name=\"{$name}\" id=\"{$id}\">
		");
		
	}
	
}
?>