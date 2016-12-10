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

try
{ 

$stmt = $db_con->prepare("INSERT INTO clinic_category (name,detail,open_hours,venue,appointment,create_date) VALUES (:name,:detail,:open_hours,:venue,:appointment,now())");
$stmt->execute(array(":name"=>$name,":detail"=>$detail,":open_hours"=>$open_time,":venue"=>$venue,":appointment"=>$appointment));
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