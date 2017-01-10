<?php
require 'header.php';
?>
<form action='insert_register.php' method='post'>
<table class="table table-bordered" border='1' width='20%' cellpadding='2' 	cellspacing="2" align="center" bgcolor="#FFFFFF">
<caption><h2 align="center">Buat Akun Baru</h2></caption>
<tr><td>Username</td><td><input style="width:150px;" type="text" name="username" class="form-control"></td></tr></input>
<tr><td>Password</td><td><input style="width:150px;" type="password" name="password" class="form-control"></td></tr></input>
</table>
<p align="center"><tr><td></td><td><button type="submit" name="kirim" class="btn btn-default" value="kirim">Register</button></td></tr>
<tr><td></td><td><button type="Reset" name="reset" class="btn btn-default" value="kembali">Reset</button></td></tr>
<tr><td></td><td><button type="" name="cancel" class="btn btn-default" value="kembali">Cancel</button></td></tr></p>
</form>
<?php
require 'footer.php';
?>