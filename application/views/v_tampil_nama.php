<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div class="panel-body">
        <div class="col-md-offset-4 col-md-4">
            <?=form_open(uri_string(), array('class' =>'form-horizontal', 'enctype' => 'multipart/form-data' ,'role' => 'form', 'method' => 'GET'));?>
            <div class="input-group">
                <select class="form-control" name="nama_karyawan">
                    <option value="">Nama Karyawan</option>
                    <?php foreach ($nama_karyawan as $nama_karyawan ): ?>
                        <option value="<?=$nama_karyawan['nama_karyawan']?>" ><?=$nama_karyawan['nama_karyawan']?></option>
                    <?php endforeach ?>
                </select>
           
                <span class="input-group-btn"> 
                    <button type="submit" class="btn btn-info" data-toggle="tooltip" data-placement="right" title="Cara Nama Karyawan">
                    		<span class="glyphicon glyphicon-search"></span> 
                    Cari Data</button>

                </span>

            </div>
            <?=form_close()?>
        </div>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Nomor</th>
				      <th scope="col">Nama Karyawan</th>
				
				      <th scope="col">Jumlah Hari Masuk</th>
				   	  <th scope="col">Tombol Aksi</th>
				      
				    </tr>
				  </thead>
		 
		<a href="<?=base_url('home/tambah')?>" class='btn btn-info' data-toggle='tooltip' data-placement='down' title='Tambah Data'><i class="fa fa-plus-square"> Tambah Data Manual </i></a>
		
		
		<?php
				$no = 1; 
		foreach($tabelkegiatan as $u)
		{ ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $u['nama_karyawan']; ?></td>
				<td><?php echo $u['total']; ?></td>
				<td>
			      <a href="<?=base_url('home/user/').$u['username'] ?>" class='btn btn-info' data-toggle='tooltip' data-placement='right' title='Open Folder'> <i class=" fa fa-folder-open"> Buka Folder </i></a>
                 
				</td>
			</tr>
		<?php } ?>
	</table>
	<div class="text-center">
			  <a href="<?=base_url('home/userwitel')?>" class='btn btn-danger' data-toggle='tooltip' data-placement='down' title='Kembali'><i class="fa fa-arrow-left"></i> </a>	
		</div>
</body>
</html>