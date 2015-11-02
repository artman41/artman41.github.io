<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<?php
include "../php/functions.php";

$dir = './a';
$files = scandir($dir);
$htmlFiles = array();

print_r($htmlFiles);

for($x = 0; count($files); 1){
	if(endsWith($files[$x], ".html"))
		$htmlFiles[count($files)] = $files[$x];
		print_r($htmlFiles);
}

olLiTree($htmlFiles);

print_r($files);
?>
 </body>
</html>