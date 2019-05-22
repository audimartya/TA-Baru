
<div class="content">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">TAMBAH PENGECER </h4>
                            </div>
                            <div class="content">
                                <?php echo validation_errors(); ?>
                                <?php 
                                  echo form_open_multipart('Pengecer/do_insert')
                                ?>
                                
                                <input type="hidden" value="NULL" class="form-control"  placeholder="No reg" name="no_reg" required>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>NAMA LENGKAP PEMBELI</label>
                                                <input type="text" class="form-control"  placeholder="Nama Lengkap" name="nama_member"
                                                 required >
                                                 <div class="invalid-feedback">NAMA HARUS DIISI</div>
                                            </div>
                                        </div>
                                <input type="hidden" value="NULL" class="form-control"  placeholder="Nama Lengkap" name="nama_pangkalan" required>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>ALAMAT PEMBELI</label>
                                                <input type="text" class="form-control" placeholder="Alamat Pengecer" name="alamat" required>
                                                <div class="invalid-feedback"> ALAMAT HARUS DIISI</div>
                </div>
                  <input type="hidden" value="NULL" class="form-control"  placeholder="Nama Lengkap" name="no_ktp" required>


               
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>NO TELEPON PEMBELI </label>
                                                <input type="number" class="form-control" placeholder="No Telepon Pengecer" name="no_tlp" required>
                                                <div class="invalid-feedback"> NO TELEPON HARUS DIISI</div>
                </div>

                <input type="hidden" value="id_login" class="form-control"  placeholder="Nama Lengkap" name="id_login" required>

                                        </div> <div class="col-md-6">
                                            <div class="form-group">
                                                <label>PARAF PEMBELI </label>
                                                <input type="file" class="form-control" placeholder="Paraf Pembeli" name="paraf_pembeli" required>
                                                <div class="invalid-feedback"> PARAF PEMBELI</div>
                                             </div>
                    
                                         <div class="col-md-6">
                                            <div class="form-group">
                                               <input type="hidden" class="form-control" name="jenis" value="Pengecer">
                                              </div>
                                            </div>
                                        </div>

                             
                                       <!--   <div class="col-md-6">
                                            <div class="form-group">
                                                <label>NAMA  PANGKALAN ASAL </label>
                                                <input type="text" class="form-control" placeholder="Nama Pangkalan Asal" name="namapa"value="<?php echo set_value('namapa')?>" required>
                                                <div class="invalid-feedback"> NAMA PANGKALAN ASAL HARUS DIISI</div>
                </div> -->
                             
											
                                              
                                                    <button class="btn btn-primary btn-rounded btn-sm" type="     submit"  
                                                    >Tambah</button>
                                          </div>
                                          </div>
                                          </form>
                                         </div>
                                         </div>
                                     </div>
                                         <div class="col-md-12"></div>
                                 </div>
                             </div>
                         </div>
                         



<script type="text/javascript">
  $(document).ready(function() {
    $('#tabelpelanggan').DataTable();
  });

  $('#notif').slideDown('slow').delay(3000).slideUp('slow');
</script>
