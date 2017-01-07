<?php
require 'header.php';
?>

<form method="post" action="insert_database.php">
<table class="table table-bordered" border='1' width='20%' cellpadding='2' 	cellspacing="2" align="center" bgcolor="#FFFFFF">
<caption><h2 align="center">KUESIONER PELACAKAN ALUMNI JURUSAN TEKNIK INFORMATIKA ITATS</h2></caption>
<tr><td>Tahun</td><td><select name="kuesionerTahun"><option name="kuesionerTahun" value="2016">2016</option>
<option name="kuesionerTahun" value="2017">2017</option>
<option name="kuesionerTahun" value="2018">2018</option></select></td></tr>
<tr><td>Nama Perusahaan</td><td><input style="width:500px;" type="text" name="namaperusahaan" class="form-control"></td></tr></input>
<tr><td>Alamat Perusahaan</td><td><input style="width:500px;" type="text" name="alamatperusahaan" class="form-control"></td></tr></input>
<tr><td>Telephon Perusahaan</td><td><input style="width:500px;" type="text" name="perusahaantelepon" class="form-control"></td></tr></input>
<tr><td>Posisi Kerja</td><td><input style="width:500px;" type="text" name="kerjaposisi" class="form-control"></td></tr></input>
<tr><td>Kerja Di Bidang</td><td><input style="width:500px;" type="text" name="kerjabidang" class="form-control"/></td></tr></input>
<tr><td>Sesuai Bidang</td><td><input type="radio" name="kerjabidangsesuai" value="Y">Ya</input> <input type="radio" name="kerjabidangsesuai" value="T">Tidak </td></tr></input>
<tr><td>Saran Alumni</td><td><textarea style="width:500px;" name="saranalumni" class="form-control"></textarea></td></tr>
<tr> <td>Nama Pengguna</td><td><input style="width:500px;" type="text" name="nama" class="form-control"></td></tr></input>
<tr><td>Kerja Di Posisi</td><td><input style="width:500px;" type="text" name="posisi" class="form-control"></td></tr></input>
<tr><td>Email</td><td><input style="width:500px;" type="text" name="email" class="form-control"></td></tr></input>
<tr><td>Saran Pengguna</td><td><input style="width:500px;" type="text" name="saran" class="form-control"></td></tr></input>

<tr><td>Beretika Dan Moral Dalam Bekerja</td><td><input type="radio" value="SB" name="skill1">SB</input> <input type="radio" value="B" name="skill1"/>B</input> <input type="radio" value="C" name="skill1"/>C</input> <input type="radio" value="K" name="skill1"/>K</input></tr>

<tr><td>Kehalian Berdasarkan Ilmu</td><td><input type="radio" value="SB" name="skill2">SB</input> <input type="radio" value="B" name="skill2"/>B</input> <input type="radio" value="C" name="skill2"/>C</input> <input type="radio" value="K" name="skill2"/>K</input></tr>

<tr><td>Penggunaan Bahasa Inggris</td><td><input type="radio" value="SB" name="skill3">SB</input> <input type="radio" value="B" name="skill3"/>B</input> <input type="radio" value="C" name="skill3"/>C</input> <input type="radio" value="K" name="skill3"/>K</input></tr>


<tr><td>Penggunaan Teknologi</td><td><input type="radio" value="SB" name="skill4">SB</input> <input type="radio" value="B" name="skill4"/>B</input> <input type="radio" value="C" name="skill4"/>C</input> <input type="radio" value="K" name="skill4"/>K</input></tr>


<tr><td>Komunikasi Antar Personal</td><td><input type="radio" value="SB" name="skill5">SB</input> <input type="radio" value="B" name="skill5"/>B</input> <input type="radio" value="C" name="skill5"/>C</input> <input type="radio" value="K" name="skill5"/>K</input></tr>


<tr><td>Kerjasama Tim</td><td><input type="radio" value="SB" name="skill6">SB</input> <input type="radio" value="B" name="skill6"/>B</input> <input type="radio" value="C" name="skill6"/>C</input> <input type="radio" value="K" name="skill6"/>K</input></tr>


<tr><td>Pengembangan Kemampuan Diri</td><td><input type="radio" value="SB" name="skill7">SB</input> <input type="radio" value="B" name="skill7"/>B</input> <input type="radio" value="C" name="skill7"/>C</input> <input type="radio" value="K" name="skill7"/>K</input></tr>


<tr><td>Bukti</td><td><input style="width:500px;" type="text" name="bukti" class="form-control"></input></tr>



<tr><td>alumniID</td><td><input style="width:100px;" type="text" name="alumniID" class="form-control"></td></tr></input>
<tr><td></td><td><button type="submit" name="kirim" class="btn btn-default" value="kirim">Submit</button></td></tr>


</table>
</form>
<?php
require 'footer.php';
?>