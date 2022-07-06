<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="robots" content="no-index">
    <meta name="author" content="Rumah AITI">
    <link rel="shortcut icon" href="<?php echo base_url('assets/backend/images/logo.png');?>" type="image/png">
    <title>Login </title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/bootstrap.min.css'); ?>" type="text/css">  
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/fonts/css/font-awesome.min.css'); ?>" type="text/css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/animate.min.css'); ?>" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/style.css'); ?>" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body style="background-color:#094a63">
	<div class="container">
		<div class="row">
            <?=form_open('login/cek_login', array('class'=>'form-horizontal', 'enctype' => 'multipart/form-data' ,'role' => 'form'));?>
                <h1 class="login-title">Login</h1>
                 Welcome
                <div class="login text-center">
                    <img src="<?php echo base_url('assets/backend/images/logo.png'); ?>">
                    <?=$this->session->flashdata('notif')?>
                    <div class="login-btn">
                        <div class="input-group m-b">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input name="username" type="text" class="form-control" placeholder="Username" autofocus="">
                        </div>
                        <div class="input-group m-b">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger btn-lg btn-block">Login</button>
                        </div>
    			    </div>
    		    </div>
            <?=form_close()?>
	    </div>
	</div>
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/backend/js/jquery.min.js');?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/backend/js/bootstrap.min.js');?>"></script>
</body>
</html>