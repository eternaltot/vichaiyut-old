<?php
session_start();
require_once '../config/dbconfig.php';
if(isset($_POST['btn-save']))
{
	$link = trim($_POST['link']);
	$id = trim($_POST['id']);
	$publish_date = trim($_POST['publish_date']);
	if(isset($_FILES["file"]["type"]))
	{
		$validextensions = array("jpeg", "jpg", "png");
		$temporary = explode(".", $_FILES["file"]["name"]);
		$file_extension = end($temporary);
		if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
		) && ($_FILES["file"]["size"] < 10000000)//Approx. 10mb files can be uploaded.
		&& in_array($file_extension, $validextensions)){
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
			}
			else
			{
				$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
				$targetPath = "../../upload/".date('m')."/".$_FILES['file']['name']; // Target path where file is to be stored
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
			$pathsave = "upload/".date('m')."/".$_FILES['file']['name'];
			$stmt = $db_con->prepare("INSERT INTO hilight (link,path_img,publish_date,user_create,create_date) VALUES (:link,:path_img,:publish_date,:user_create,now())");
			$stmt->bindParam(':link', $link);
			$stmt->bindParam(':path_img', $pathsave);
			$stmt->bindParam(':publish_date', $publish_date);
			$stmt->bindParam(':user_create', $id);
			$stmt->execute();
			// $row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();

			if($stmt->rowCount() > 0){

				header("Location: ../hilight.php");
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


}

?>