<?php
session_start();
require_once '../config/dbconfig.php';
if(isset($_POST['btn-save']))
{
	$home_care = $_POST["homecare"];
	try
		{ 

			$stmt = $db_con->prepare("UPDATE home_care SET home_care =:home_care WHERE ID=1");
			$stmt->bindParam(':home_care', $home_care);
			$stmt->execute();
			// $row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();

			if($stmt->rowCount() > 0){

				echo "ok";
			}
			else{

				echo "No Row Updated"; // wrong details 
			}

}
catch(PDOException $e){
	echo $e->getMessage();
}

}

?>