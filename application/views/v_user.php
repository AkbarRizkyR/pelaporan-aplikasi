<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div class="panel-body">
		<div class="col-md-offset-4 col-md-4">
            <?=form_open(uri_string(), array('class' =>'form-horizontal', 'enctype' => 'multipart/form-data' ,'role' => 'form', 'method' => 'GET'));?>
             
           	 <div class="input-group"> 
			    <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal Pengerjaan">
				<span class="input-group-btn"> 
					<button class="btn btn-info"><i class="fa fa-search"></i> Cari Data</button>
				<a href="<?=base_url('home/tambah')?>" class='btn btn-info' data-toggle='tooltip' data-placement='down' title='Tambah Data'><i class="fa fa-plus-square"> Tambah Data </i></a>
				
				</span>
			</div>				

            <?=form_close()?>
        </div>
       		<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Nomor</th>
				      <th scope="col">Tanggal</th>
				      <th scope="col">Nama Karyawan</th>
				      <th scope="col">Jobdesk</th>
				      <th scope="col">Jam Mulai</th>
				      <th scope="col">Jam Akhir</th>
				      <th scope="col">Jumlah Order</th>
				      <th scope="col">Progress</th>
				      <th scope="col">Status</th>
				      <th scope="col">Keterangan</th>
				      <th scope="col">Tombol Aksi </th>
				    </tr>
				  </thead>
		 

		
		<?php 
				$no = 1; 
		foreach($tabelkegiatan as $u)
		{ ?>

			 
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $u['tanggal']; ?></td>
				<td><?php echo $u['nama_karyawan']; ?></td>
				<td><?php echo $u['job_desk']; ?></td>
				<td><?php echo $u['jam_mulai']; ?></td>
				<td><?php echo $u['jam_akhir']; ?></td>
				<td><?php echo $u['jumlah_order']; ?></td>
				<td>     
					<div id="myProgressbar" class="progress " style="height: 15px;  " >
				          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $u['progress']; ?>" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $u['progress']?>%; "> <?php echo $u['progress']?>%
				          </div>
				     </div>
    			</td>
    			<td><?php echo $u['status']; ?></td>
				<td><?php echo $u['keterangan']; ?></td>
				<td>
					<?php if ($this->session->userdata('username') == $u['username']){ ?>
			      <a href="<?=base_url('home/edit/').$u['id'] ?>" class='btn btn-info' data-toggle='tooltip' data-placement='down' title='Edit Data' ><i class="fa fa-edit"></i> </a>
                  <a href="<?=base_url('home/hapus/').$u['id'] ?>" class='btn btn-danger' data-toggle='tooltip' data-placement='down' title='Hapus Data' ><i class="fa fa-trash"></i></a>
                  <?php } ?>
				</td>
			</tr>
		<?php } ?>
	</table>
		<div class="text-center">
			  <a href="<?=base_url('home/userwitel')?>" class='btn btn-danger' data-toggle='tooltip' data-placement='down' title='Kembali'><i class="fa fa-arrow-left"></i> </a>	
		</div>
</body>
</html>