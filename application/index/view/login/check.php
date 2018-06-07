<?php 
include 'config.php';

$username=$_POST['username'];

// $sql="select * from user1 where username='{$username}'";

$sql="select * from user1 where usename='{$username}'";
$smt=$pdo->prepare($sql);
$smt->execute();
$row=$smt->fetch();

if($row){
	echo 0;
}else{
	echo 1;
}
 ?>