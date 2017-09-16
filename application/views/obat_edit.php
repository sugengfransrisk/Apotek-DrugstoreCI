
					        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Obat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

					<?php foreach($obat as $u){ ?>
			<form action="<?php echo base_url(). 'apotek/update'; ?>" method="post">

			
		<tr>
				<td width='20%' class='td_isi'>
					ID 
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="id" class='form-control' size='30' value="<?php echo $u->id ?>">
				</td>
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Nama Obat 
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="nama" class='form-control' size='30' value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Produksi
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="produksi" class='form-control' size='30' value="<?php echo $u->produksi ?>">
				</td>
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Tahun Pembelian
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="tahun_pembelian" class='form-control' size='30' value="<?php echo $u->tahun_pembelian ?>">
				</td>
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Harga Beli
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="harga_beli" class='form-control' size='30' value="<?php echo $u->harga_beli ?>">
				</td>
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Harga Jual
				</td>
				<td width='*' class='input-group'>
					<input type="text" name="harga_jual" class='form-control' size='30' value="<?php echo $u->harga_jual ?>">
				</td>
			</tr>



			
			
			<tr>
				<td width='100%' class='td_isi' colspan='2'>
					<input type="submit" name='tombol_simpan' value='Simpan' class='tombol'>
			<table align='right'>
				<tr>
					<td class='ew'><a  href="obat_view.php">Lhat Semua Data</td></a>
				</tr>
			</table>

				</td>
			</tr>
			</form>
				<?php }?>
			</table>
		</td>
  </table>
 