
					        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Pasien</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

			<?php foreach($pasien as $p){ ?>		
			<form action="<?php echo base_url(). 'pasien/update/'; ?>" method="post">

			
		<tr>
						</tr>
			<tr>
				<td width='20%' class='td_isi'>
					id
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="id" class='form-control' disabled="" size='30' value="<?php echo $p->id ?>">
				</td>
			</tr>
			<tr>	
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Nama Pasien
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="nama_pasien" class='form-control' size='30' value="<?php echo $p->nama ?>">
				</td>
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Alamat
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="alamat" class='form-control' size='30' value="<?php echo $p->alamat ?>">
				</td>
			</tr>
			
<?php } ?>

			
			
			<tr>
				<td width='100%' class='td_isi' colspan='2'>
					<input type="submit" name='tombol_simpan' value='Simpan' class='tombol'>
			<table align='right'>