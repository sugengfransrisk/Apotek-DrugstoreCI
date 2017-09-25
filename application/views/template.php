
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Apotek Teds</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url();?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url();?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url();?>assets/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand "  href=""><b>Admin</b>APOTEK 1.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
                                           <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Login As <b>
                                    <img src="<?php echo base_url() ?>assets/images/upload/profile/default.png" alt=""><?php echo $this->session->userdata('username'); ?>
                                    <span class=" fa fa-angle-down"></span>
                                </b></a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a class="prof" id="<?php echo $this->db->where('USERNAME', $this->session->userdata('username'))->get('admin')->row('ID_ADMIN') ?>"><i class="fa fa-user pull-right"></i> Profile</a></li>
                                    <li><a href="<?php echo base_url() ?>dashboard/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        

                        <li>
                            <a href="<?php echo base_url('Dashboard/index')?>"><i class="fa fa-bar-chart-o fa-fw"></i>Dashboard<span class=""></span></a>
                         <?php if($this->session->userdata('role')=='pegawai'): ?>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-glass fa-fw"></i> Obat<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('apotek/index')?>">Data Obat</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('apotek/tambah')?>">Input Obat</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-wheelchair fa-fw"></i> Pasien<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('pasien/index')?>">Daftar Pasien</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('pasien/tambah')?>">Input Pasien</a>
                                </li>
                            </ul>

                            <li>
                            <a href="#"><i class="fa fa-user-md fa-fw"></i> Petugas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('pegawai/index')?>">Daftar Petugas</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('pegawai/tambah')?>">Input Petugas</a>
                                </li>
                            </ul>
                             <li>
                            <a href="<?php echo base_url('transaksi/index')?>"><i class="fa fa-shopping-cart fa-fw"></i>Transaksi<span class=""></span></a>
                          <!-- /.nav-second-level -->
                        </li>
                                <?php endif; ?>
                             <?php if($this->session->userdata('role')=='admin'): ?>
                             <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Admin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('admin/index')?>">Daftar Admin</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/tambah')?>">Register</a>
                                </li>

                            </ul>
                             <li>
                            <a href="<?php echo base_url('transaksi/index')?>"><i class="fa fa-shopping-cart fa-fw"></i>Transaksi<span class=""></span></a>
                          <!-- /.nav-second-level -->
                        </li>
                        <?php endif; ?>
                    
                
            
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        <?php
			$this->load->view($main_view);
		?>

          <!-- jQuery -->
    <script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url();?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?=base_url();?>assets/vendor/raphael/raphael.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/morrisjs/morris.min.js"></script>
    <script src="<?=base_url();?>assets/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url();?>assets/dist/js/sb-admin-2.js"></script>