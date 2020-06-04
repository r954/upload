<?php
echo "<pre>";
print_r($_FILES);
// die;
$countfiles = count($_FILES['file']['name']);
 
 // Looping all files
 for($i=0;$i<$countfiles;$i++){ 
$sourcePath = $_FILES['file']['tmp_name'];
//$targetPath = "../new/uploads/" . round(microtime(true)) . '.' . end($_FILES['file']['name']);
$targetPath = "uploads/" . round(microtime(true)) .'-'. $_FILES["file"]["name"][$i] ;
echo $targetPath;
move_uploaded_file($sourcePath[$i], $targetPath);
echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"][$i] . "<br>";
echo "<b>Type:</b> " . $_FILES["file"]["type"][$i] . "<br>";
echo "<b>Size:</b> " . ($_FILES["file"]["size"][$i] / 1024) . " kB<br>";
echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"][$i] . "<br>";
 }
 
 $eh =  $_FILES["file"]["name"];
 
 $eh = 'asdlkj.jkj';
 
 echo strstr($eh, '.');
?>