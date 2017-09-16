
				        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Obat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             <tr>
          
            
                <td width='50%' align='right'>
                     <a href='<?php echo base_url('apotek/tambah/')?>'>Input Obat</a>
                </td>
            </tr>
            </form>
            </table>
            <br>
            <div class="panel-body">
                            <div class="table-responsive">
                                <table class="datatable table table-striped table-bordered">
                <tr>
                    <td class='td_judul' width='*' align='center'>No.</td>
                    <td class='td_judul' width='*'>Nama Obat</td>
                    <td class='td_judul' width='*'>Produksi</td>
                    <td class='td_judul' width='*'>Thn. Pembelian</td>
                    <td class='td_judul' width='*'>Harga Beli</td>
                    <td class='td_judul' width='*'>Harga Jual</td>
                    <td class='td_judul' width='*' align='center'>Action</td>

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
				    <a href='<?php echo base_url('apotek/edit/'.$u->id)?>'>Edit</a> | <a href='<?php echo base_url('apotek/index')?>'>Delete</a>
					</TD>
			</TR>				
				<?php
					}
				?>


		</td>
	</tr>
  </table>
