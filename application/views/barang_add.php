
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>

 </head>
 <body>
  <table cellpadding='0' cellspacing='0' width='950' align='center'>
	<tr>
		<td width='100%' class='td_utama'>
			Penjualan<br>
		</td>
	</tr>
	<tr>
		<td width='100%' class='td_isi' align='right'>
			
		</td>
	</tr>
	<tr>
		<td width='100%' class='td_isi'>
			<strong>Master Penjualan / Add Data</strong>
			<br><br>
			<table width='100%' class='td_isi' border='0'>
				<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
			<tr>
				<td width='20%' class='td_isi'>
					Nama Barang
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="nama_barang" class='input' size='30'>
				</td>
			</tr>
			<tr>
				<td width='15%' class='td_isi'>
					Kode Barang
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="kode_barang" class='input' size='50'>
				</td>
			</tr>
			<tr>
				<td width='15%' class='td_isi'>
					Stok
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="stok" class='input' size='20'>
				</td>
			</tr>
			<tr>
				<td width='15%' class='td_isi'>
					Harga 
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="harga" class='input' size='20'>
				</td>
			</tr>
			<tr>
				<td width='100%' class='td_isi' colspan='2'>
					<input type="submit" name='tombol_simpan' value='Simpan' class='tombol'>
				</td>
			</tr>
			</form>
			</table>
		</td>
	</tr>
  </table>
 </body>
</html>
