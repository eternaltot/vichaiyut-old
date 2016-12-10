<?php
session_start();
require_once '../config/dbconfig.php';

if(!isset($_GET['id'])){
    header("Location : ../patient-room.php");
}

$id = base64_decode($_GET['id']);

try
{ 
	$stmt = $db_con->prepare("SELECT * FROM patient_room WHERE ID=:id");
	$stmt->execute(array(":id"=>$id));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$count = $stmt->rowCount();
	if($count > 0){
		$stmt = $db_con->prepare("SELECT * FROM patient_room_gallery WHERE patient_ID=:id");
		$stmt->execute(array(":id"=>$id));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if (file_exists("../".$row['path_img'])) {
			unlink("../".$row['path_img']);
		}
		$stmt = $db_con->prepare("DELETE FROM patient_room WHERE ID=:id");
		$stmt->execute(array(":id"=>$id));
		$stmt = $db_con->prepare("DELETE FROM patient_room_gallery WHERE patient_ID=:id");
		$stmt->execute(array(":id"=>$id));
		header("Location: ../patient-room.php");
	}
}
catch(PDOException $e){
	echo $e->getMessage();
}

?>