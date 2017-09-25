
				        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Record Transaksi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             
            </form>
            </table>
                        	
            <div class="panel-body">
            	<td width='50%' align='right'>
                     <a class="btn btn-success" href='<?php echo base_url('transaksi/tambah/')?>'>Transaksi</a>
                     <br>
                 </br>
                </td>
                            <div class="table-responsive">
                                <table class="datatable table table-striped table-bordered">

                <tr align="center">
                    <td class='td_judul' width='*' align='center'>No.</td>
                    <td class='td_judul' width='*'>Nama Obat</td>
                    <td class='td_judul' width='*'>Nama Pasien</td>
                    <td class='td_judul' width='*'>Nama Pegawai</td>
                    <td class='td_judul' width='*'>Tanggal</td>
                    <td class='td_judul' width='*'>Total</td>
                    <td class='td_judul' width='*' align='center'>Action</td>

                </TR>
						<?php 
		$no=1;

		foreach ($transaksi as $p) {
						# code...
										?>
				<TR align='center' >
					<TD class='td_isi' align='center'><?php echo $no++;?></TD>
					<TD class='td_isi'><?php echo $p->nama_obat;?></TD>
					<TD class='td_isi'><?php echo $p->nama_pasien;?></TD>
					<TD class='td_isi'><?php echo $p->nama_pegawai;?></TD>
					<TD class='td_isi'><?php echo $p->tgl_pembelian;?></TD>
					<TD class='td_isi'><?php echo $p->total_harga;?></TD>
					<?php if ($this->session->userdata('role')=='pegawai'): ?>
					<TD class='td_isi'>Disabled by Admin</TD>
				<?php endif ?>
					
					<?php if($this->session->userdata('role')=='admin'): ?>
					<TD class='td_isi' align='center'>
                    <a class="btn btn-outline btn-info btn-xs" onclick="window.location='<?=base_url();?>transaksi/updateview?uid=<?=$p->id;?>'"><i></i> Edit</a>
                     </a>
                     <a class="btn btn-outline btn-danger btn-xs" onclick="window.location='<?=base_url();?>transaksi/hapus/<?=$p->id;?>'">
                            <b> Delete</b>
                            </a>
                        <?php endif; ?>
			</TR>			
				<?php
					}
				?>


		</td>
	</tr>
  </table>

