<?php

//Watch out for directory/file names, server is linux, case sensitive.
//SQL dump available in repo.
//Add comments to important code.
//Delete all passwords before adding do repo. Replace with stars ***

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
$images_dir = "./Images/";
$templates_dir = "./Templates/";

include_once("Includes.php");

if(!isset($_GET['lang'])){
	$lang = "pl";
}
if(!isset($_GET['page'])){
	$find = "tpl.{$lang}.index.php";
}

include_once("renderPage.php");
?>