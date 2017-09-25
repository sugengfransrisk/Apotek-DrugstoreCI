                                                <div id="page-wrapper">
                                  <div class="row">
                                 <div class="col-lg-12">
                                 <h1 class="page-header">Transaksi</h1>
                                    </div>
                <!-- /.col-lg-12 -->
                                </div>
            <!-- /.row -->
    

                                <form action="<?php echo base_url(). 'transaksi/tambah_aksi'; ?>" method="post">
                              
                                <fieldset>
                            
                                <label>Nama Pasien</label>
                                <div class="form-group">
                                  <select class="form-control" placeholder="Role" name="pasien" id="role">
                                    <?php 

                                    foreach ($pasien as $p ) {
                                    # code...
                                ?>
                                    <option><?php echo $p->nama;?>  </option>

                                     <?php } ?>


                                  </select>
                                </div>
                                
                                <label>Nama Obat</label>
                                <div class="form-group">
                                  <select class="form-control" placeholder="Role" name="obat" id="role">
                                    <?php 

                                    foreach ($obat as $p ) {
                                    # code...
                                ?>
                                    <option><?php echo $p->nama;?>  </option>

                                     <?php } ?>


                                  </select>
                                </div>
                                 <label>Nama Pegawai</label>
                                <div class="form-group">
                                  <select class="form-control" placeholder="Role" name="pegawai" id="role">
                                    <?php 

                                    foreach ($pegawai as $p ) {
                                    # code...
                                ?>
                                    <option><?php echo $p->nama;?>  </option>

                                     <?php } ?>
                                 </select>
                             </div>
                                <label>Tanggal</label>
                                <div class="form-group">
                                    
                                    <input class="form-control date" type="date" value="<?php echo date('d-M-Y') ?>" name="tanggal"
                                >
                                </div>
                                <label>Harga Total</label>
                                <div class="form-group">
                                    
                                    <input class="form-control" type="text"  name="harga">
                                </div>
                                
                                


                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" name="setup" class="btn btn-submit">Submit</button>
                                </div>
                                 </fieldset>
                                