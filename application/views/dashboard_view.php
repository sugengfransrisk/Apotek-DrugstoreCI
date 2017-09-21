
                            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
 <?php if($this->session->userdata('role')=='pegawai'): ?>
   <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-glass fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php echo $obtCount ?> 
                                    </div>
                                    <div>Jumlah Obat</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('apotek/index')?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Detail</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
        <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-md fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php echo $obtCount ?> 
                                    </div>
                                    <div>Jumlah Pegawai</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('apotek/index')?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Detail</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

          <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-wheelchair fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php echo $psnCount ?> 
                                    </div>
                                    <div>Jumlah Pasien</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('Pasien/index')?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Detail</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php echo $obtCount ?> 
                                    </div>
                                    <div>Jumlah Transaksi</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('apotek/index')?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Detail</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
                 <?php if($this->session->userdata('role')=='admin'): ?>
                 <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php echo $akunCount ?> 
                                    </div>
                                    <div>Jumlah Akun</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('admin/index')?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Detail</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <?php endif ?>
    
    

<script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/highcharts.js"></script>
<script>
$(function () {
    var chart;
    $(document).ready(function () {
        // Build the chart
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'bookgraph',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                width: null,
                height: 160
            },
            title: {
                text: null
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage}%</b>',
                percentageDecimals: 1
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            legend:{
                 align: 'right',
                 verticalAlign: 'top',
                 floating: true        
            },
            series: [{
                type: 'pie',
                name: 'Presentase',
                data: [
                    ['Buku di pinjam', <?php echo $rst2 ?>],
                    ['Buku di rak', <?php echo $min ?>],
                ]
            }]
        });
    });
     
});
</script>


