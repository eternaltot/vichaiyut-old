<?php
session_start();
require_once 'config/dbconfig.php';
if(isset($_POST['name']))
{
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);

try
{ 

$stmt = $db_con->prepare("INSERT INTO contact_user (name,email,phone,message) VALUES (:name,:email,:phone,:message)");
$stmt->execute(array(":name"=>$name,":email"=>$email,":phone"=>$phone,":message"=>$message));
// $row = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();

if($stmt->rowCount() > 0){

echo "ok"; 
}
else{
echo "Send Fail"; // wrong details 
}

}
catch(PDOException $e){
echo $e->getMessage();
}
}

?>