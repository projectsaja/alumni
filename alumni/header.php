<!DOCTYPE html>
<html>
<head>
	<title>WEB ALUMNI ITATS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style>
html,body{margin:0;padding:0;height:100%;font:13px Arial;}
#header{
	background:#f0f0f0;
	padding:5px;
	height:50px;
	color:#0000ff;
}
#footer{
    height:50px;
    line-height:50px;
    background:#f0f0f0;
    color:#000000;
    text-align: center;
 
    position:fixed;
    bottom:0px;
 
    width:100%; /*biar memenuhi layar*/
}
</style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">ITATS</a></li>
      <li><a href="form.php">Form Pendaftaran</a></li>
      <li><a href="#">Data Mahasiswa</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
</nav>
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