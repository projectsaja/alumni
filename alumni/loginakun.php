<?php
require 'header.php';
?>
<p align="center"><h1>Masukan Username dan Password anda</h1></p><br>
<form method="post" action="login.php">
<table class="table table-bordered" border='1' width='20%' cellpadding='2' 	cellspacing="2" align="center" bgcolor="#FFFFFF">
<tr><td>Username</td><td><input style="width:500px;" name="username" class="form-control"></td></tr></input>
<tr> <td>Password</td><td><input style="width:500px;" type="text" name="password" class="form-control"></td></tr></input>
<tr><td></td><td><button type="submit" name="kirim" class="btn btn-default" value="kirim">Submit</button></td></tr>
</table></form>
<?php
require 'footer.php';
?>
