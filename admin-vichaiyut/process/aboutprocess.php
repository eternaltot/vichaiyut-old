<?php
session_start();
require_once '../config/dbconfig.php';

if(isset($_POST['btn-save']))
{
$about = trim($_POST['about']);


try
{ 

$stmt = $db_con->prepare("UPDATE about set about=:about");
$stmt->execute(array(":about"=>$about));
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