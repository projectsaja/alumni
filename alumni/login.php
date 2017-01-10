<?php
require 'header.php';
require 'koneksi.php';
?>

<?php
$username = $_POST["username"];
$password = $_POST["password"];
$STH = $DBH->prepare("select * from `login`");
if(!$STH->execute()){
	echo "Login Error";
}
else{
	echo "Login Succes";
}

?>

<?php
require 'footer.php';
?>