<?php
$host="localhost";
$dbname="sim";
$user="root";
$password="";
try{
$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
}
catch(PDOException $e){
  echo "<br>".$e->getMessage();
}
?>
