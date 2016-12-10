<?php
session_start();
require_once '../config/dbconfig.php';
if(isset($_POST['btn-save']))
{
	$id = 1;
	$about_us = trim($_POST['about_us']);
	if(isset($_FILES["about_img"]["type"]) && $_FILES["about_img"]["type"] <> "")
	{
		$validextensions = array("jpeg", "jpg", "png");
		$temporary = explode(".", $_FILES["about_img"]["name"]);
		$file_extension = end($temporary);
		if ((($_FILES["about_img"]["type"] == "image/png") || ($_FILES["about_img"]["type"] == "image/jpg") || ($_FILES["about_img"]["type"] == "image/jpeg")
		) && ($_FILES["about_img"]["size"] < 10000000)//Approx. 10mb files can be uploaded.
		&& in_array($file_extension, $validextensions)){
			if ($_FILES["about_img"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["about_img"]["error"] . "<br/><br/>";
			}
			else
			{
				$sourcePath = $_FILES['about_img']['tmp_name']; // Storing source path of the file in a variable
				$targetPath = "../../upload/".date('m')."/".$_FILES['about_img']['name']; // Target path where file is to be stored
				if(!file_exists("../../upload/".date('m'))){
					mkdir("../../upload/".date('m'), 0755,true);
				}
				if (file_exists($targetPath)) {
					// echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
					unlink($targetPath);
				}
		move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
		try
		{ 
			$pathsave = "upload/".date('m')."/".$_FILES['about_img']['name'];
			$stmt = $db_con->prepare("UPDATE homepage SET about_img_path = :path_img WHERE ID=:id");
			$stmt->bindParam(':path_img', $pathsave);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			// $row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();

			if($stmt->rowCount() > 0){

			}
			else{

				echo "Updated fail"; // wrong details 
			}

	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
		
	}
	}
	else
	{
		echo "<span id='invalid'>***Invalid file Size or Type***<span>";
	}
	}


	if(isset($_FILES["vision_img"]["type"]) && $_FILES["vision_img"]["type"] <> "")
	{
		$validextensions = array("jpeg", "jpg", "png");
		$temporary = explode(".", $_FILES["vision_img"]["name"]);
		$file_extension = end($temporary);
		if ((($_FILES["vision_img"]["type"] == "image/png") || ($_FILES["vision_img"]["type"] == "image/jpg") || ($_FILES["vision_img"]["type"] == "image/jpeg")
		) && ($_FILES["vision_img"]["size"] < 10000000)//Approx. 10mb files can be uploaded.
		&& in_array($file_extension, $validextensions)){
			if ($_FILES["vision_img"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["vision_img"]["error"] . "<br/><br/>";
			}
			else
			{
				$sourcePath = $_FILES['vision_img']['tmp_name']; // Storing source path of the file in a variable
				$targetPath = "../../upload/".date('m')."/".$_FILES['vision_img']['name']; // Target path where file is to be stored
				if(!file_exists("../../upload/".date('m'))){
					mkdir("../../upload/".date('m'), 0755,true);
				}
				if (file_exists($targetPath)) {
					// echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
					unlink($targetPath);
				}
		move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
		try
		{ 
			$pathsave = "upload/".date('m')."/".$_FILES['vision_img']['name'];
			$stmt = $db_con->prepare("UPDATE homepage SET vision_img_path = :path_img WHERE ID=:id");
			$stmt->bindParam(':path_img', $pathsave);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			// $row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();

			if($stmt->rowCount() > 0){

			}
			else{

				echo "Updated fail"; // wrong details 
			}

	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
		
	}
	}
	else
	{
		echo "<span id='invalid'>***Invalid file Size or Type***<span>";
	}
	}
	if(isset($_FILES["managementteam_img"]["type"]) && $_FILES["managementteam_img"]["type"] <> "")
	{
		$validextensions = array("jpeg", "jpg", "png");
		$temporary = explode(".", $_FILES["managementteam_img"]["name"]);
		$file_extension = end($temporary);
		if ((($_FILES["managementteam_img"]["type"] == "image/png") || ($_FILES["managementteam_img"]["type"] == "image/jpg") || ($_FILES["managementteam_img"]["type"] == "image/jpeg")
		) && ($_FILES["managementteam_img"]["size"] < 10000000)//Approx. 10mb files can be uploaded.
		&& in_array($file_extension, $validextensions)){
			if ($_FILES["managementteam_img"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["managementteam_img"]["error"] . "<br/><br/>";
			}
			else
			{
				$sourcePath = $_FILES['managementteam_img']['tmp_name']; // Storing source path of the file in a variable
				$targetPath = "../../upload/".date('m')."/".$_FILES['managementteam_img']['name']; // Target path where file is to be stored
				if(!file_exists("../../upload/".date('m'))){
					mkdir("../../upload/".date('m'), 0755,true);
				}
				if (file_exists($targetPath)) {
					// echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
					unlink($targetPath);
				}
		move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
		try
		{ 
			$pathsave = "upload/".date('m')."/".$_FILES['managementteam_img']['name'];
			$stmt = $db_con->prepare("UPDATE homepage SET management_img_path = :path_img WHERE ID=:id");
			$stmt->bindParam(':path_img', $pathsave);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			// $row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();

			if($stmt->rowCount() > 0){

			}
			else{

				echo "Updated fail"; // wrong details 
			}

	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
		
	}
	}
	else
	{
		echo "<span id='invalid'>***Invalid file Size or Type***<span>";
	}
	}


	try
		{ 
			$stmt = $db_con->prepare("UPDATE homepage SET about_us =:about_us WHERE ID=:id");
			$stmt->bindParam(':about_us', $about_us);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			// $row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();

			if($stmt->rowCount() > 0){
				header("Location: ../setup-homepage.php");
			}
			else{

				echo "Updated fail"; // wrong details 
			}

	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

}

?>