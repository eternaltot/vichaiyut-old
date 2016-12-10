<?php
session_start();
require_once '../config/dbconfig.php';
if(isset($_POST['btn-save']))
{
	$restaurant = $_POST["restaurant"];
	$shop = $_POST["shop"];
	try
		{ 

			$stmt = $db_con->prepare("UPDATE restaurant_and_shop SET restaurant = :restaurant ,shop=:shop WHERE ID=1");
			$stmt->bindParam(':restaurant', $restaurant);
			$stmt->bindParam(':shop', $shop);
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