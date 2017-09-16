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
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="./vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.html">Admin Apotek 1.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
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
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Dashboard<span class="fa arrow"></span></a>
                        
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="obat_view.php"><i class="fa fa-table fa-fw"></i>Tabel Obat</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i>Tambah obat</a>
                        </li>
                    
                
            
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Obat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             <tr>
                <td width='50%'>
                    <strong>Cari Data : </strong><input type="text" name="cari" class='input' value='<?php echo $_POST["cari"];?>'> <input type="submit" name='tombol_cari' value='Cari' class='tombol'>
                </td>
                <td width='50%' align='right'>
                    <?php echo anchor('apotek/tambah','Tambah Data'); ?>
                </td>
            </tr>
            </form>
            </table>
            <br>
            <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                <TR>
                    <TD class='td_judul' width='15%'>No.</TD>
                    <TD class='td_judul' width='*'>Nama Obat</TD>
                    <TD class='td_judul' width='*'>Produksi</TD>
                    <TD class='td_judul' width='*'>Thn. Pembelian</TD>
                    <TD class='td_judul' width='*'>Harga Beli</TD>
                    <TD class='td_judul' width='*'>Harga Jual</TD>
                    <TD class='td_judul' width='30%'>Action</TD>
                </TR>
                        <?php 
        $no=1;

        foreach ($obat as $u) {
                        # code...
                                        ?>
                <TR>
                    <TD class='td_isi' align='center'><?php echo $no++;?></TD>
                    <TD class='td_isi'><?php echo $u->nama;?></TD>
                    <TD class='td_isi'><?php echo $u->produksi;?></TD>
                    <TD class='td_isi'><?php echo $u->tahun_pembelian;?></TD>
                    <TD class='td_isi'><?php echo $u->harga_beli;?></TD>
                    <TD class='td_isi'><?php echo $u->harga_jual;?></TD>
                    <TD class='td_isi' align='center'>
                                          <?php echo anchor('apotek/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('apotek/hapus/'.$u->id,'Hapus'); ?>
                    </TD>
            </TR>               
                <?php
                    }
                ?>
        </td>
    </tr>
               
                        <!-- /.panel-body -->
                        
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="./vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morrisjs/morris.min.js"></script>
    <script src="./data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./dist/js/sb-admin-2.js"></script>

</body>

</html>
