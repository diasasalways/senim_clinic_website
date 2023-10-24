<?php
session_start();
require "db.php";

$id=$_POST['id'];
$answer=$_POST['answer'];
$query=$link->query("SELECT * FROM faq WHERE id='$id'");
$row=mysqli_fetch_array($query);
if(empty($row['answer'])){

$link->query("INSERT INTO faq(`answer`) VALUES('$answer') WHERE id='$id'");
	$link->query("UPDATE faq SET answer='$answer' WHERE id='$id'");
}

else{
$link->query("UPDATE faq SET answer='$answer' WHERE id='$id'");
}

header('Location: faq.php');
?>