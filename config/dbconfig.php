<?php
$db_host = "localhost";
// $db_name = "vichaiyut_eng_db";
// $db_user = "admindbeng";
// $db_pass = "Vichaiyut_Eng";
$db_name = "vichaiyut";
$db_user = "root";
$db_pass = "";
try{

$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
echo $e->getMessage();
}
?>