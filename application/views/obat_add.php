
					        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Input Obat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

					
			<form action="<?php echo base_url(). 'apotek/tambah_aksi'; ?>" method="post">

			
		<tr>
				
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Nama Obat 
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="nama" class='form-control' size='30' value="">
				</td>
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Produksi
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="produksi" class='form-control' size='30' value="">
				</td>
			</tr>
			<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div>
			<tr>
				<td width='20%' class='td_isi'>
					Harga Beli
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="harga_beli" class='form-control' size='30' value="">
				</td>
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Harga Jual
				</td>
				<td width='*' class='input-group'>
					<input type="text" name="harga_jual" class='form-control' size='30' value="">
				</td>
			</tr>



			
			
			<tr>
				<td width='100%' class='td_isi' colspan='2'>
					<input type="submit" name='tombol_simpan' value='Simpan' class='tombol'>
			<table align='right'>