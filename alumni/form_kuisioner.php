<?php
require "header.php";
?>
<div class="container">
  <h2>Kuisioner</h2>
  <form class="form-horizontal">
   	
   	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Tahun</label>
      	<select>
      		<div class="col-sm-10">          
	   			<div class="radio">
  					<label><option type="radio" name="tahun" value="2015">2015</label>
				</div>
				<div class="radio">
  					<label><option type="radio" name="tahun" value="2016">2016</label>
				</div>
				<div class="radio">
  					<label><option type="radio" name="tahun" value="2017">2017</label>
				</div>
		</select>
	   </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2">Nama</label>
      	<div class="col-sm-10">
        	<input type="text" class="form-control" name="nama" placeholder="Andrei Wahyu">
      	</div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2">Alamat</label>
      	<div class="col-sm-10">          
        	<input type="text" class="form-control" name="alamat" placeholder="Jln. Arif Hakim">
      	</div>
    </div>

    <div class="form-group">
    	<label class="control-label col-sm-2">Nama Perusahaan</label>
    		<div class="col-sm-10">
				<input type="text" class="form-control" name="namaperusahaan" placeholder="PT. Microsoft">
			</div>
	</div>     			

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
<?php
require "footer.php";
?>