<?php
session_start();
require_once '../config/dbconfig.php';

if(isset($_POST['btn-save']))
{
$name = trim($_POST['name']);
$detail = trim($_POST['detail']);
$open_time = trim($_POST['open_time']);
$venue = trim($_POST['venue']);
$appointment = trim($_POST['appointment']);
$id = trim($_POST['id']);

try
{ 

$stmt = $db_con->prepare("UPDATE clinic_category SET name = :name,detail=:detail,open_hours = :open_time , venue = :venue, appointment = :appointment WHERE ID=:id");
$stmt->execute(array(":name"=>$name,":detail"=>$detail,":open_time"=>$open_time,":venue"=>$venue,":appointment" =>$appointment,":id"=>$id));
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