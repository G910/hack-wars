<?php
print("
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<link rel=\"stylesheet\" href=\"style.css\">
<script type=\"text/javascript\" src=\"script.js\"></script>
");
$HW = TRUE;

require_once("Player.php");
require_once("Base.php");

if(!isset($_GET['lang'])){
	$lang = "pl";
}
if(!isset($_GET['page'])){
	$find = "tpl.{$lang}.index.php";
}

include_once("renderPage.php");
?>