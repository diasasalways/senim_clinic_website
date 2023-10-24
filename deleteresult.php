<?php
session_start();
require'db.php';
$code=$_GET['code'];
$file=$link->query("SELECT * FROM `results` WHERE `code`='$code'");
$row=mysqli_fetch_array($file);
$link->query("DELETE FROM `results` WHERE `code`='$code'");

if(!empty($row['file'])){
	$path='documents/'.$row['file'];
unlink($path);
}
header("LOcation:admin.php");


?>