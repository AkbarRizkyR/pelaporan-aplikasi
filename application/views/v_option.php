<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<center>
		
		<h1>Edit Data</h1>
	</center>
	<?php foreach($usertelkom as $d){ ?>
	<form action="<?php echo base_url(). 'home/aksi_update'; ?>" method="post">
	<div class="row">
				<div class="form-group">
					 	<div class="col-md-offset-3 col-md-6">
						    <label for="username">Username</label>
						    <input type="hidden" name="No" value="<?php echo $d->No; ?>">
						    <input type="text" class="form-control" name="username" value="<?php echo $d->username; ?>" >
					 	</div>
				</div>
				<div class="form-group">
						<div class="col-md-offset-3 col-md-6">
						    <label for="password">Password</label>
						    <input type="text" class="form-control" name="jam_mulai" value="<?php echo $d->Password; ?>">
						</div>
				</div>
				<div class="form-group">
						<div class="col-md-offset-3 col-md-6">
						    <label for="nama_karyawan">Nama Karyawan</label>
						    <input type="text" class="form-control" name="nama_karyawan" value="<?php echo $d->nama_karyawan; ?>">
						</div>
				</div>
		
	</div>
	<br>
					 <div class="text-center">
			  		 <button type="submit" class="btn btn-primary">Submit</button>
			  		 <a href="<?=base_url('home/user')?>" class='btn btn-primary' >Back </a>	
					 </div>
	</form>	
	<?php } ?>
</body>
</html>