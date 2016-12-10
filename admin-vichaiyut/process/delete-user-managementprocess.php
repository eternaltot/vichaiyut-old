<?php
session_start();
require_once '../config/dbconfig.php';

if(!isset($_GET['id'])){
    header("Location : ../usermanagement.php");
}

$id = base64_decode($_GET['id']);

try
{ 
	$stmt = $db_con->prepare("SELECT * FROM user WHERE ID=:id");
	$stmt->execute(array(":id"=>$id));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$count = $stmt->rowCount();
	if($count > 0){
		$stmt = $db_con->prepare("DELETE FROM user WHERE ID=:id");
		$stmt->execute(array(":id"=>$id));
		header("Location: ../user-management.php");
	}
}
catch(PDOException $e){
	echo $e->getMessage();
}

?>