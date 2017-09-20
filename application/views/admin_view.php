
				        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             <tr>
          
            
                <td width='50%' align='right'>
                     <a href='<?php echo base_url('apotek/tambah/')?>'>Register</a>
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
                    <td class='td_judul' width='*'>Nama</td>
                    <td class='td_judul' width='*'>Username</td>
                    <td class='td_judul' width='*'>Role</td>
                    <td class='td_judul' width='20%' align='center'>Action</td>

                </TR>
						<?php 
		$no=1;

		foreach ($admin as $a) {
						# code...
										?>
				<TR>
					<TD class='td_isi' align='center'><?php echo $no++;?></TD>
					<TD class='td_isi'><?php echo $a->FULLNAME;?></TD>
					<TD class='td_isi'><?php echo $a->USERNAME;?></TD>
					<TD class='td_isi'><?php echo $a->ROLE;?></TD>
					<TD class='td_isi' align='center'>
				    <a href='<?php echo base_url('admin/edit/'.$a->ID_ADMIN)?>'>Edit</a> | <a href='<?php echo base_url('admin/index')?>'>Delete</a> | <a>Deactive</a>
					</TD>
			</TR>				
				<?php
					}
				?>


		</td>
	</tr>
  </table>
