<?php
print("
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<link rel=\"stylesheet\" href=\"style.css\">
<script type=\"text/javascript\" src=\"script.js\"></script>
");
$HW = TRUE;

$root_dir = "./";
$classes_dir = "./Classes/";
$images_dir = "./images/";
$templates_dir = "./Templates/";

require_once("{$classes_dir}Player.php");
require_once("{$classes_dir}Base.php");

if(!isset($_GET['lang'])){
	$lang = "pl";
}
if(!isset($_GET['page'])){
	$find = "tpl.{$lang}.index.php";
}

include_once("renderPage.php");
?>