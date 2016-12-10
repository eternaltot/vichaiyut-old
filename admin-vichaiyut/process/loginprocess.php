<?php
session_start();
require_once '../config/dbconfig.php';
require_once 'passwordLib.php';

if(isset($_POST['btn-login']))
{
$username = trim($_POST['username']);
$password = trim($_POST['password']);


try
{ 

$stmt = $db_con->prepare("SELECT * FROM user WHERE username=:username");
$stmt->execute(array(":username"=>$username));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
if(password_verify($password,$row['password'])){

echo "ok"; // log in
$_SESSION['user_session'] = $row['ID'];
}
else{

echo "email or password does not exist."; // wrong details 
}

}
catch(PDOException $e){
echo $e->getMessage();
}
}

?>