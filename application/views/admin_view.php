
				        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manajemen Admin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             
            </form>
            </table>
             
            
            <div class="panel-body">
                <a class="btn btn-success" href='<?php echo base_url('admin/tambah/')?>'>Register</a>
                <br>
            </br>
  
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                <tr align="center">
                    <td align='center'>No.</td>
                    <td>Nama</td>
                    <td>Username</td>
                    <td>Role</td>
                    <td>Status</td>

                    <td class='td_judul' width='20%' align='center'>Action</td>

                </TR>
						<?php 
		$no=1;

		foreach ($admin as $a) {
						# code...
										?>
				<TR align="center">
					<TD  align='center'><?php echo $no++;?></TD>
					<TD ><?php echo $a->FULLNAME;?></TD>
					<TD ><?php echo $a->USERNAME;?></TD>

					<TD >
                     <select class="form-control" value="<?php echo $a->ROLE;?>" placeholder="Role" name="role" id="role">
                                    <option value="<?php echo $a->ROLE;?>" > <?php echo $a->ROLE;?></option>
                                     <option>--PILIH--</option>
                                    <option value="admin" onclick="window.location='<?=base_url();?>admin/changeakses?uid=<?=$a->ID_ADMIN;?>&r=admin'">admin</option>
                                    <option value="pegawai" onclick="window.location='<?=base_url();?>admin/changeakses?uid=<?=$a->ID_ADMIN;?>&r=pegawai'">pegawai</option>
                    <TD ><?php echo $a->status;?></TD>

					<TD  align='center'>
                        
                        <?php
                                $ss=$a->status;
                        if($ss=="deactive")
                        {
                        ?>
                        <a class="btn btn-outline btn-success btn-xs" onclick="window.location='<?=base_url();?>admin/changestatus?uid=<?=$a->ID_ADMIN;?>&r=active'"><b>Active</b> </a>
                        <?php
                        }else{
                        ?>
                        <a class="btn btn-outline btn-warning btn-xs" onclick="window.location='<?=base_url();?>admin/changestatus?uid=<?=$a->ID_ADMIN;?>&r=deactive'"><b>Deactive</b> </a>
                        <?php } ?>
                        <a class="btn btn-outline btn-danger btn-xs" onclick="window.location='<?=base_url();?>admin/hapus/<?=$a->ID_ADMIN;?>'"><b>Delete</b> </a>
                        </td>
                        </tr>
                        <?php }
                        ?>


					</TD>
			</TR>				
				

		</td>
	</tr>
  </table>

