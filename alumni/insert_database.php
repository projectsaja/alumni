<?php
require 'header.php';
require 'koneksi.php';
?>
<?php
try{
$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$STH = $DBH->prepare("INSERT INTO data(tahun, namaperusahaan, alamatperusahaan, 
  teleponperusahaan, posisikerja, kerjadibidang, sesuaibidang, saranalumni, namapengguna, 
  kerjadiposisi, email, saranpengguna, skill1, skill2, skill3, skill4, skill5, skill6, skill7, emailmanager, bukti, alumni_id) 
  values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  
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
  $emailmanager = $_POST["emailmanager"];
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
  $STH->bindParam(22, $emailmanager);
  
  $STH->execute();
  echo "Data Telah Di input Terima Kasih";
}
catch(PDOException $e){
  echo "<br>".$e->getMessage();
}
?>

<?php
date_default_timezone_set('Etc/UTC');
require_once('PHPMailer/PHPMailerAutoload.php');
$to = $_POST["email"];
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "devitapp@itats.ac.id";//e-mail pengguna
$mail->Password = "akumahapatuh";//password pengguna
$mail->SetFrom("devitapp@itats.ac.id");
$mail->Subject = "Welcome";
$mail->Body = "Data anda sudah di input";
$mail->AddAddress($to);
$mail->SMTPOptions = array (
    'ssl' => array (
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
 ?>

<?php
date_default_timezone_set('Etc/UTC');
require_once('PHPMailer/PHPMailerAutoload.php');
$to = $_POST["emailmanager"];
$namapengguna = $_POST["nama"];
$namaperusahaan = $_POST["namaperusahaan"];
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "devitapp@itats.ac.id";//e-mail pengguna
$mail->Password = "akumahapatuh";//password pengguna
$mail->SetFrom("devitapp@itats.ac.id");
$mail->Subject = "Approval";
$mail->Body = "Apakah ".$namapengguna." bekerja di ".$namaperusahaan." ?";
$mail->AddAddress($to);
$mail->SMTPOptions = array (
    'ssl' => array (
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
 ?>
<?php
require 'footer.php';
?>