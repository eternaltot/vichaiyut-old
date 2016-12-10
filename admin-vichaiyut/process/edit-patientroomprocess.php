<?php
session_start();
require_once '../config/dbconfig.php';
if(isset($_POST['btn-save']))
{
	$id = trim($_POST['id']);
	$name = trim($_POST['name']);
	
	if(isset($_FILES["file"]["type"]) && $_FILES["file"]["type"] <> "")
	{
		$stmt = $db_con->prepare("UPDATE patient_room SET name=:name");
		$stmt->bindParam(":name",$name);
		$stmt->execute();
		$validextensions = array("jpeg", "jpg", "png");
		for ($key = 0 ;$key < count($_FILES["file"]["type"]);$key++) {
			$temporary = explode(".", $_FILES["file"]["name"][$key]);
			$file_extension = end($temporary);
			if ((($_FILES["file"]["type"][$key] == "image/png") || ($_FILES["file"]["type"][$key] == "image/jpg") || ($_FILES["file"]["type"][$key] == "image/jpeg")
			) && ($_FILES["file"]["size"][$key] < 10000000)//Approx. 10mb files can be uploaded.
			&& in_array($file_extension, $validextensions)){
			if ($_FILES["file"]["error"][$key] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"][$key] . "<br/><br/>";
			}
			else
			{
				$sourcePath = $_FILES['file']['tmp_name'][$key]; // Storing source path of the file in a variable
				$targetPath = "../../upload/".date('m')."/".$_FILES['file']['name'][$key]; // Target path where file is to be stored
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
					$pathsave = "upload/".date('m')."/".$_FILES['file']['name'][$key];
					$stmt = $db_con->prepare("UPDATE patient_room_gallery SET path_img=:path_img");
					$stmt->bindParam(':path_img', $pathsave);
					$stmt->execute();
					// $row = $stmt->fetch(PDO::FETCH_ASSOC);
					

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}
			
			}
			}else{
				echo "<span id='invalid'>***Invalid file Size or Type***<span>";
			}

		}
		header("Location: ../patient-room.php");
	}else
	{
		$stmt = $db_con->prepare("UPDATE patient_room SET name=:name");
		$stmt->bindParam(":name",$name);
		$stmt->execute();
		header("Location: ../patient-room.php");
	}


}

?>