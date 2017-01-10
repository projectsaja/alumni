<?php
require 'header.php';
?>
<?php
require 'koneksi.php';
?>
<?php
try {
   $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
   $result = $DBH->query('SELECT * FROM data');
   while($row = $result->fetch()) {
     echo "Nama = ".$row[8]."<br>";
     echo "Perusahaan = ".$row[1]."<br>";
     echo "<br><br>";
   }
 
   // hapus koneksi
   $dbh = null;
}
catch (PDOException $e) {
   // tampilkan pesan kesalahan jika koneksi gagal
   print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
   die();
}
?>
<?php
require 'footer.php';
?>