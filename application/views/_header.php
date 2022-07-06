 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>List Aktifitas Pegawai Witel Telkom</title>
	<link href="<?=base_url('assets/kodingan/assets/css/bootstrap.css')?>" rel="stylesheet" />
	<link href="<?=base_url ('assets/kodingan/assets/css/font-awesome.css')?>" rel="stylesheet" />
	<link href="<?=base_url ('assets/kodingan/assets/css/style.css')?>" rel="stylesheet" />
     
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                 <h4>Selamat Datang , <?php echo $this->session->userdata("nama_karyawan");  ?> </h4> 
                </div>    
            </div>
        </div>
    </header>
    <!-- HEADER END-->
    
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="<?=base_url('home')?> ">Dashboard <i class="fa fa-home"></i></a></li>
                            <li><a href="<?=base_url('home/userwitel')?>">List Absensi Pegawai <i class="fa fa-database"></i></a></li>
                            <li><a href="<?=base_url('login/logout')?>"> Logout <i class="fa fa-sign-out"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="alert alert-warning">
                        <?php $this->load->view($isi); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 "><i class="fa fa-copyright"></i>
                    Copyright 2018 | Akbar Rizky Rabbani | 1103152128 | Geladi Telkom University 2018</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="<?=base_url ('assets/kodingan/assets/js/jquery-1.11.1.js')?>"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?=base_url ('assets/kodingan/assets/js/popper.min.js')?>"></script>
    <script src="<?=base_url ('assets/kodingan/assets/js/bootstrap.js')?>"></script>
    <script src="<?=base_url ('assets/kodingan/assets/js/progressbar.js')?>"></script>

</body>
</html>