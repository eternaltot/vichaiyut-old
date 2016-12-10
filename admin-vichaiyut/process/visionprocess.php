<?php
session_start();
require_once '../config/dbconfig.php';

if(isset($_POST['btn-save']))
{
$vision = trim($_POST['vision']);


try
{ 

$stmt = $db_con->prepare("UPDATE vision set vision=:vision");
$stmt->execute(array(":vision"=>$vision));
// $row = $stmt->fetch(PDO::FETCH_ASSOC);
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