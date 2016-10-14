<?php
 // extract the filename
 $title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
 // replace dashes with whitespace
 $title = str_replace('_', ' ', $title);
//remove anything after . 
$pieces = explode('.', $title);
$title = $pieces[0];
 // check if the file is index, if so assign 'home' to the title instead of index
 if (strtolower($title) == 'index') {
 $title = 'home';
 }
?>