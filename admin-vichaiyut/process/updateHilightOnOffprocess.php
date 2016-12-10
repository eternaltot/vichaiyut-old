<?php

require_once("../config/dbconfig.php");
if(!isset($_POST['id'])){
	echo "don't have id";
}
if(!isset($_POST['ischeck'])){
	echo "don't have checkbox value";
}
$id=$_POST['id'];
$ischeck=$_POST['ischeck'];
try
{ 

$stmt = $db_con->prepare("UPDATE hilight set isOnOff=:isOnOff WHERE ID=:id");
$stmt->execute(array(":isOnOff"=>$ischeck,":id"=>$id));
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
