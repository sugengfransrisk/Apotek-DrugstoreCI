
				        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Petugas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             <tr>
          
            
                <td width='50%' align='right'>
                     <a href='<?php echo base_url('pegawai/tambah/')?>'>Input Petugas</a>
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
                    <td class='td_judul' width='*'>Nama </td>
                    <td class='td_judul' width='*'>Alamat</td>
                    <td class='td_judul' width='*' align='center'>Action</td>

                </TR>
						<?php 
		$no=1;

		foreach ($pegawai as $p) {
						# code...
										?>
				<TR>
					<TD class='td_isi' align='center'><?php echo $no++;?></TD>
					<TD class='td_isi'><?php echo $p->nama;?></TD>
					<TD class='td_isi'><?php echo $p->alamat;?></TD>
					<TD class='td_isi' align='center'>
                    <a class="btn btn-outline btn-info btn-xs" onclick="window.location='<?=base_url();?>pegawai/updateview?uid=<?=$p->id;?>'"><i></i> Edit</a>
                     </a>
                     <a class="btn btn-outline btn-danger btn-xs" onclick="window.location='<?=base_url();?>pegawai/hapus/<?=$p->id;?>'">
                            <b> Delete</b>
                            </a>
			</TR>			
				<?php
					}
				?>


		</td>
	</tr>
  </table>
