<?php
session_start();
require_once '../config/dbconfig.php';
require_once 'passwordLib.php';
if(isset($_POST['btn-save']))
{
	// $username = trim($_POST['username']);
	$email = trim($_POST['email']);
	$id = trim($_POST['id']);
	$password = password_hash(trim($_POST['password']),PASSWORD_DEFAULT);

		try
		{


				$stmt = $db_con->prepare("UPDATE user SET password=:password,email=:email WHERE ID=:id");
				$stmt->bindParam(':password', $password);
				$stmt->bindParam(':email', $email);
				$stmt->bindParam(':id', $id);
				$stmt->execute();
				$count = $stmt->rowCount();
				if($stmt->rowCount() > 0){

					echo "ok";
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