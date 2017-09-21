                                                <div id="page-wrapper">
                                  <div class="row">
                                 <div class="col-lg-12">
                                 <h1 class="page-header">Register</h1>
                                    </div>
                <!-- /.col-lg-12 -->
                                </div>
            <!-- /.row -->

                                <form action="<?php echo base_url(). 'admin/tambah_aksi'; ?>" method="post">

                                <fieldset>
                                <h4>Registrasi Akun Admin</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Nama Lengkap</label>
                                    <input type="text" name="fullname" placeholder="Nama Lengkap" class="f1-email form-control" id="f1-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Username</label>
                                    <input type="text" name="username" placeholder="Username" class="f1-password form-control" id="f1-password">
                                </div>
                                 <div class="form-group">
                                  <select class="form-control" placeholder="Role" name="role" id="role">
                                    <option>admin</option>
                                    <option>pegawai</option>
                            
                                  </select>
                                </div> 
                                <div class="form-group">
                                    <label class="sr-only">Password</label>
                                    <input type="password" name="password" placeholder="Password" 
                                                        class="f1-repeat-password form-control" id="f1-repeat-password">
                                </div>
                                <input type="text" name="status" hidden="" value="active" class="">


                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" name="setup" class="btn btn-submit">Submit</button>
                                </div>
                                 </fieldset>