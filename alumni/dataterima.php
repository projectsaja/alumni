<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'itats_alumni';
$koneksi = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbname,$koneksi);
if (isset($_POST['kirim'])) {
  $kuesionerTahun = $_POST['kuesionerTahun'];
  $namaperusahaan = $_POST['namaperusahaan'];
  $alamatperusahaan = $_POST['alamatperusahaan'];
  $perusahaantelepon = $_POST['perusahaantelepon'];
  $kerjaposisi = $_POST['kerjaposisi'];
  $kerjabidang = $_POST['kerjabidang'];
  $kerjabidangsesuai = $_POST['kerjabidangsesuai'];
  $saranalumni = $_POST['saranalumni'];
  $nama = $_POST['nama'];
  $posisi = $_POST['posisi'];
  $email = $_POST['email'];
  $saran = $_POST['saran'];
  $skill1 = $_POST['skill1'];
  $skill2 = $_POST['skill2'];
  $skill3 = $_POST['skill3'];
  $skill4 = $_POST['skill4'];
  $skill5 = $_POST['skill5'];
  $skill6 = $_POST['skill6'];
  $skill7 = $_POST['skill7'];
  $bukti = $_POST['bukti'];
  $alumniID = $_POST['alumniID'];
$sql = "INSERT INTO kuesioner (tahun, kuesionerPerusahaanNama, kuesionerPerusahaanAlamat, kuesionerPerusahaanTelepon, kuesionerAlumniKerjaPosisi, kuesionerAlumniKerjaBidang, kuesionerAlumniKerjaBidangSesuai, kuesionerAlumniSaran, kuesionerPenggunaNama, kuesionerPenggunaPosisi, kuesionerPenggunaEmail, kuesionerPenggunaSaran, kuesionerSkill1, kuesionerSkill2, kuesionerSkill3, kuesionerSkill4, kuesionerSkill5, kuesionerSkill6, kuesionerSkill7, kuesionerFileBukti, alumniID)
VALUES ('$kuesionerTahun','$namaperusahaan','$alamatperusahaan','$perusahaantelepon','$kerjaposisi','$kerjabidang','$kerjabidangsesuai','$saranalumni','$nama','$posisi','$email','$saran','$skill1','$skill2','$skill3','$skill4','$skill5','$skill6','$skill7','$bukti','$alumniID')";

$tambahdata = mysql_query($sql);
if(!$tambahdata ){
	include("redirectview.php");
die('Gagal tambah data: ' . mysql_error());
} else{
	include("redirectview.php");
echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=displaypage.php'>";
}
}
mysql_close($koneksi);
?>
