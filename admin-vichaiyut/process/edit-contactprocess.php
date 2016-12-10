<?php
session_start();
require_once '../config/dbconfig.php';

if(isset($_POST['btn-save']))
{
$address = trim($_POST['address']);
$tel = trim($_POST['tel']);
$fax = trim($_POST['fax']);
$email = trim($_POST['email']);
$website = trim($_POST['website']);
$facebook = trim($_POST['facebook']);
$instagram = trim($_POST['instagram']);
$twitter = trim($_POST['twitter']);
$id=1;
try
{ 

$stmt = $db_con->prepare("UPDATE contact_information SET address = :address,tel=:tel,fax = :fax , email = :email ,website = :website ,facebook = :facebook ,instagram = :instagram,twitter = :twitter  WHERE ID=:id");
$stmt->execute(array(":address"=>$address,":tel"=>$tel,":fax"=>$fax,":email"=>$email,":website"=>$website,":facebook"=>$facebook,":instagram"=>$instagram,":twitter"=>$twitter,":id"=>$id));
// $row = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();

if($count > 0){

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