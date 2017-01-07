<?php
require 'header.php';
?>
<?php
try{
$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$STH = $DBH->prepare("INSERT INTO data(tahun, namaperusahaan, alamatperusahaan, 
  teleponperusahaan, posisikerja, kerjadibidang, sesuaibidang, saranalumni, namapengguna, 
  kerjadiposisi, email, saranpengguna, skill1, skill2, skill3, skill4, skill5, skill6, skill7, bukti, alumni_id) 
  values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  
  $kuesionerTahun = $_POST["kuesionerTahun"];
  $namaperusahaan = $_POST["namaperusahaan"];
  $alamatperusahaan = $_POST["alamatperusahaan"];
  $perusahaantelepon = $_POST["perusahaantelepon"];
  $kerjaposisi = $_POST["kerjaposisi"];
  $kerjabidang = $_POST["kerjabidang"];
  $kerjabidangsesuai = $_POST["kerjabidangsesuai"];
  $saranalumni = $_POST["saranalumni"];
  $namapengguna = $_POST["nama"];
  $posisi = $_POST["posisi"];
  $email = $_POST["email"];
  $saranpengguna = $_POST["saran"];
  $skill1 = $_POST["skill1"];
  $skill2 = $_POST["skill2"];
  $skill3 = $_POST["skill3"];
  $skill4 = $_POST["skill4"];
  $skill5 = $_POST["skill5"];
  $skill6 = $_POST["skill6"];
  $skill7 = $_POST["skill7"];
  $bukti = $_POST["bukti"];
  $alumni_id = $_POST["alumniID"];

  $STH->bindParam(1, $kuesionerTahun);
  $STH->bindParam(2, $namaperusahaan);
  $STH->bindParam(3, $alamatperusahaan);
  $STH->bindParam(4, $perusahaantelepon);
  $STH->bindParam(5, $kerjaposisi);
  $STH->bindParam(6, $kerjabidang);
  $STH->bindParam(7, $kerjabidangsesuai);
  $STH->bindParam(8, $saranalumni);
  $STH->bindParam(9, $namapengguna);
  $STH->bindParam(10, $posisi);
  $STH->bindParam(11, $email);
  $STH->bindParam(12, $saranpengguna);
  $STH->bindParam(13, $skill1);
  $STH->bindParam(14, $skill2);
  $STH->bindParam(15, $skill3);
  $STH->bindParam(16, $skill4);
  $STH->bindParam(17, $skill5);
  $STH->bindParam(18, $skill6);
  $STH->bindParam(19, $skill7);
  $STH->bindParam(20, $bukti);
  $STH->bindParam(21, $alumni_id);
  
  $STH->execute();
}
catch(PDOException $e){
  echo "<br>".$e->getMessage();
}
?>
<?php
require 'footer.php';
?>