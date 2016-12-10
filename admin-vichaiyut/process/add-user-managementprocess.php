<?php
session_start();
require_once '../config/dbconfig.php';
require_once 'passwordLib.php';
if(isset($_POST['btn-save']))
{
	$username = trim($_POST['username']);
	$email = trim($_POST['email']);
	$password = password_hash(trim($_POST['password']),PASSWORD_DEFAULT);

		try
		{

			$stmt = $db_con->prepare("SELECT * FROM user WHERE username = :username");
			$stmt->bindParam(':username', $username);
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() > 0){

				echo "Username Invalid Or Duplicate";
			}else{

				$stmt_insert = $db_con->prepare("INSERT INTO user (username,password,email,create_date) VALUES (:username,:password,:email,now())");
				$stmt_insert->bindParam(':username', $username);
				$stmt_insert->bindParam(':password', $password);
				$stmt_insert->bindParam(':email', $email);
				$stmt_insert->execute();
				$count = $stmt_insert->rowCount();

				if($stmt_insert->rowCount() > 0){

					echo "ok";
				}
				else{

					echo "Updated fail"; // wrong details 
				}
			}

		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	
}


?>