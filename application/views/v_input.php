<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1> Tambah Data Baru </h1>
	</center>
	<form action="<?php echo base_url(). 'home/tambah_aksi'; ?>" method="post">
		<div class="row">
					<div class="form-group">
						<div class="col-md-offset-3 col-md-6">
						    <label for="nama_karyawan">Nama Karyawan</label>
						    <input type="text" class="form-control" name="nama_karyawan" placeholder="Nama Karyawan" >
						</div>
					</div>
					 <div class="form-group">
					 	<div class="col-md-offset-3 col-md-6">
						    <label for="job_desk">Unit</label>
						    <input type="text" class="form-control" name="job_desk" placeholder="Unit" >
					 	</div>
					 </div>
					<div class="form-group">
						<div class="col-md-offset-3 col-md-6">
						    <label for="jam_mulai">Jam Masuk </label>
						    <input type="text" class="form-control" name="jam_mulai" placeholder="Jam Masuk">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-offset-3 col-md-6">
						    <label for="jam_akhir">Jam Pulang</label>
						    <input type="text" class="form-control" name="jam_akhir" placeholder="Jam Pulang">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-offset-3 col-md-6">
						    <label for="tanggal">Tanggal</label>
						    <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal">
						</div>
					</div> 	
					<div class="form-group">
					  	<div class="col-md-offset-3 col-md-6">
						    <label for="status" >Keterangan</label>
						    <select class="form-control" name="keterangan">
						      <option>Keterangan Karyawan</option>
						      <option >Cuti</option>
						      <option >Tugas Dinas</option>
						     <option> Izin </option>
						     <option>Sakit </option>
						    </select>
						</div>
					</div> 	
		</div>
		<br>
		
		<div class="text-center">
			  <button type="submit" class="btn btn-success" data-toggle='tooltip' data-placement='down' title='Submit Data'> Submit</button>
			  <a href="<?=base_url('home/userwitel')?>" class='btn btn-primary'data-toggle='tooltip' data-placement='down' title='Kembali'>Back </a>	
		</div>

	</form>	
			
</body>
</html>