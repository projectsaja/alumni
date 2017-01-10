<?php
$host="localhost";
$dbname="sim";
$user="root";
$password="";
try{
$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  echo "Koneksi Oke";
    $STH=$DBH->prepare"(update data set
    tahun=?,
    namaperusahaan=?,
    alamatperusahaan=?,
    teleponperusahaan=?,
    posisikerja=?,
    kerjadibidang=?,
    sesuaibidang=?,
    saranalumni=?,
    namapengguna=?,
    kerjadiposisi=?,
    email=?,
    saranpengguna=?,
    bukti=?
    where alumni_id=id 0001)";

    $STH->bindParam(1, $tahun);
    $STH->bindParam(2, $namaperusahaan);
    $STH->bindParam(3, $alamatperusahaan);
    $STH->bindParam(4, $teleponperusahaan);
    $STH->bindParam(5, $posisikerja);
    $STH->bindParam(6, $kerjadibidang);
    $STH->bindParam(7, $sesuaibidang);
    $STH->bindParam(8, $saranalumni);
    $STH->bindParam(9, $namapengguna);
    $STH->bindParam(10, $kerjadiposisi);
    $STH->bindParam(11, $email);
    $STH->bindParam(12, $saranpengguna);
    $STH->bindParam(13, $bukti);

    $tahun="2017";
    $namaperusahaan="Microsoft Corporated";
    $alamatperusahaan="Jln. New York City";
    $teleponperusahaan="977001002";
    $posisikerja="IT Analystic";
    $kerjadibidang="Informatic Enginering";
    $sesuaibidang="IT";
    $saranalumni="Banyakin Project";
    $namapengguna="BW dev";
    $kerjadiposisi="IT Analystic";
    $email="rizkisetiawan.root@gmail.com";
    $saranpengguna="Banyakin Project";
    $bukti="Project Manager Approval";
  }
  catch(PDOException $e){
    echo "<br>".$e->getMessage();
  }
?>
