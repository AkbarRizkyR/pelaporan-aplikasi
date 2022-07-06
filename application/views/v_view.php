<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf32_unicode_ci">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="no-index">
    <link rel="shortcut icon" href="<?php echo base_url('assets/backend/images/logo.png');?>" type="image/png">
    <title><?=$title?> - BabelWar </title>
    <link href="<?=base_url('assets/backend/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/backend/fonts/css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/backend/css/animate.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/backend/css/nprogress.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/backend/css/style.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/backend/css/datepicker.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/backend/css/dataTables.responsive.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets/backend/css/sweetalert2.min.css') ?>" rel="stylesheet" type="text/css" >
    <script src="<?=base_url('assets/backend/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/backend/js/nprogress.js')?>"></script>
    <script>$(document).ready(function() {NProgress.done()});</script>
    <script type="text/javascript" src="<?=base_url('assets/backend/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/backend/js/bootstrap-select.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/backend/js/jquery.dataTables.min.js') ?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/backend/js/dataTables.responsive.min.js') ?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/backend/js/dataTables.bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/backend/js/sweetalert2.min.js'); ?>" async></script>
    <script type="text/javascript" src="<?=base_url('assets/backend/js/datepicker.min.js')?>"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="nav-md">
    <div id="wrapper">
        <!-- side nav -->
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title">
                    <a href="<?=base_url()?>" class="site-title"><i class="fa fa-home"></i></a>
                </div>
                <div class="clearfix"></div>
                <div class="profile">
                    <div class="profile-pic">
                        <?php $foto_usr = base_url('assets/backend/images/logo.png');?>
                        <img src="<?=$foto_usr?>" class="img-circle profile-img">
                    </div>
                    <div class="profile-info">
                        <span>Selamat Datang,</span>
                        <h2><?=$this->session->userdata('nama')?></h2>
                    </div>
                </div>
                <br />
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <ul class="nav side-menu">
                            <li><a href="<?=base_url('admin');?>"><i class="fa fa-home"></i> Dashboard </a></li>
                            <li><a href="<?=base_url('admin/alpro');?>"><i class="fa fa-cubes"></i> ODP </a></li>
                            <li><a><i class="fa fa-cog"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="<?=base_url('admin/target')?>">Target</a></li>
                                    <li><a href="<?=base_url().'admin/user_ubah'?>">User</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /side nav -->
        <!-- top nav -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle" class="btn btn-info"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="<?=$foto_usr?>" alt=""> <?=$this->session->userdata('nama');?> <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                <li><a href="<?=base_url('login/logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top nav -->
        <!-- content -->
        <div class="main" role="main">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-md-12">
                        <?php $this->load->view($isi); ?>
                    </div>
                </div>
            </div>
            <footer>
                <p class="pull-right">2018 <b></b> | <?=$this->benchmark->elapsed_time().'s - '.$this->benchmark->memory_usage();?> </p>
            </footer>
        </div>
        <!-- /content -->
    </div>
    <script src="<?=base_url('assets/backend/js/custom.js')?>"></script>
    <script>
        NProgress.done();
    </script>
</body>
</html>