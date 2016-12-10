<?php
session_start();
require_once '../config/dbconfig.php';
if(isset($_POST['btn-save']))
{
	$id = trim($_POST['id']);
	$name = trim($_POST['name']);
	$clinic = trim($_POST['clinic']);
	$specialty = trim($_POST['specialty']);
	$language = trim($_POST['language']);
	$medical_school = trim($_POST['medical_school']);
	$residencies = trim($_POST['residencies']);
	$fellowship = trim($_POST['fellowship']);
	$certificate = trim($_POST['certificate']);
	if(isset($_FILES["file"]["type"]) && $_FILES["file"]["type"] <> "")
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
			$stmt = $db_con->prepare("UPDATE clinic SET name =:name,clinic = :clinic,specialty = :specialty,language_spoken = :language_spoken,medical_school = :medical_school,residencies = :residencies,fellowship = :fellowship,certificate = :certificate,path_img = :path_img WHERE ID=:id");
			$stmt->bindParam(':name', $name);
			$stmt->bindParam(':clinic', $clinic);
			$stmt->bindParam(':specialty', $specialty);
			$stmt->bindParam(':language_spoken', $language);
			$stmt->bindParam(':medical_school', $medical_school);
			$stmt->bindParam(':residencies', $residencies);
			$stmt->bindParam(':fellowship', $fellowship);
			$stmt->bindParam(':certificate', $certificate);
			$stmt->bindParam(':path_img', $pathsave );
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			// $row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();

			if($stmt->rowCount() > 0){

				header("Location: ../clinic-profile.php");
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
}else{
	try
		{ 

			$stmt = $db_con->prepare("UPDATE clinic SET name =:name,clinic = :clinic,specialty = :specialty,language_spoken = :language_spoken,medical_school = :medical_school,residencies = :residencies,fellowship = :fellowship,certificate = :certificate WHERE ID=:id");
			$stmt->bindParam(':name', $name);
			$stmt->bindParam(':clinic', $clinic);
			$stmt->bindParam(':specialty', $specialty);
			$stmt->bindParam(':language_spoken', $language);
			$stmt->bindParam(':medical_school', $medical_school);
			$stmt->bindParam(':residencies', $residencies);
			$stmt->bindParam(':fellowship', $fellowship);
			$stmt->bindParam(':certificate', $certificate);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			// $row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();

			if($stmt->rowCount() > 0){

				header("Location: ../clinic-profile.php");
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

?>