<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<center>
		
		<h1>Edit Data</h1>
	</center>
	<?php foreach($tabelkegiatan as $d){ ?>
	<form action="<?php echo base_url(). 'home/update'; ?>" method="post">
	<div class="row">
					<div class="form-group">
						<div class="col-md-offset-3 col-md-6">
						    <label for="nama_karyawan">Nama Karyawan</label>
						    <input type="text" class="form-control" name="nama_karyawan" value="<?php echo $this->session->userdata("nama_karyawan"); ?> " >
						</div>
					</div>

					 <div class="form-group">
					 	<div class="col-md-offset-3 col-md-6">
						    <label for="job_desk">Unit</label>
						    <input type="hidden" name="id" value="<?php echo $d->id; ?>">
						    <input type="text" class="form-control" name="job_desk" value="<?php echo $d->job_desk; ?>" >
					 	</div>
					 </div>
					<div class="form-group">
						<div class="col-md-offset-3 col-md-6">
						    <label for="jam_mulai">Jam Masuk</label>
						    <input type="text" class="form-control" name="jam_mulai" value="<?php echo $d->jam_mulai; ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-offset-3 col-md-6">
						    <label for="jam_akhir">Jam Pulang</label>
						    <input type="text" class="form-control" name="jam_akhir" value="<?php echo $d->jam_akhir; ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-offset-3 col-md-6">
						    <label for="tanggal">Tanggal</label>
						    <input type="date" class="form-control" name="tanggal" value="<?php echo $d->tanggal; ?>">
						</div>
					</div> 
					<div class="form-group">
					  	<div class="col-md-offset-3 col-md-6">
						    <label for="status">Keterangan</label>
 
						    <select class="form-control" name="keterangan" value="<?php echo $d->progress; ?>  ">
						      <option>Keterangan Karyawan</option>
						      <option >Cuti</option>
						      <option >Tugas Dinas</option>
						     <option> Izin </option>
						     <option>Sakit </option>
						    </select>
						    </select>
						 </div>
						</div> 
	</div>
	<br>
		<div class="text-center">
			  		 <button type="submit" class="btn btn-success">Submit</button>
			  		 	 <a href="<?=base_url('home/userwitel')?>" class='btn btn-primary' >Back </a>	
		</div>
	</form>	
	<?php } ?>
</body>
</html>