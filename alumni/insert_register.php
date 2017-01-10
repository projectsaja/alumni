<?php
require 'header.php';
?>
<?php
require 'koneksi.php';
?>
<?php
try{
$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$STH = $DBH->prepare("INSERT INTO login(username, password) values(?, ?)");
$STH -> bindParam(1, $username);
$STH -> bindParam(2, $password);
$username = $_POST["username"];
$password = $_POST["password"];
$STH -> execute();
echo "AKun Telah telah berhasil dibuat";
}
catch(PDOException $e){
	echo "<br>".$e->getMessage();
}
?>
<?php
require 'footer.php';
?>
