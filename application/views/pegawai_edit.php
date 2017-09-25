
					        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit pegawai</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <?php
                            $announce = $this->session->flashdata('announce');
                            if(!empty($announce)){
                                if($announce == 'Berhasil menyimpan data'){
                                    echo '
                                        <div class="alert alert-success">
                                        '.$announce.'
                                        </div>
                                    ';
                                }else{
                                    echo '
                                        <div class="alert alert-danger">
                                        '.$announce.'
                                        </div>
                                    ';
                                }
                            }
                        ?>
                        <?php

					echo form_open('pegawai/update?uid='.$id.'');
						?>
			
					<tr>
						</tr>
			<tr>
			
				
			</tr>
			<tr>	
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Nama pegawai
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="nama_pegawai" class='form-control' size='30'" value="<?=$nama;?>">
				</td>
			</tr>
			<tr>
				<td width='20%' class='td_isi'>
					Alamat
				</td>
				<td width='*' class='td_isi'>
					<input type="text" name="alamat" class='form-control' size='30' value="<?=$alamat;?>">
				</td>
			</tr>
			

			
			<tr>
			</tr>
			<tr>
				<td width='100%' class='td_isi' colspan='2'>
					<input type="submit" name='submit' value='Simpan' class='btn btn-success'>
			<table align='right'>