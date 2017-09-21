
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
					<input type="text" name="nama" class='form-control' size='30' required="" value="">
				</td>
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Produksi
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="produksi" class='form-control' required="" size='30' value="">
				</td>
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Tahun Pembelian
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="tahun_pembelian" required="" class='form-control' size='30' value="">
				</td>
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Harga Beli
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="harga" required="" class='form-control' size='30' value="">
				</td>
			</tr>
			


			
			
			<tr>
				<td width='100%' class='td_isi' colspan='2'>
					<input type="submit" name='tombol_simpan' value='Simpan' class='tombol'>
			<table align='right'>