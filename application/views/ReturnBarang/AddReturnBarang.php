
<div class="content">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">TAMBAH RETURN BARANG</h4>
                            </div>
                            <div class="content">
                                <?php echo validation_errors(); ?>
                                <?php 
                                  echo form_open_multipart('ReturnBarang/do_insert')
                                ?> 
                                  
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>JUMLAH BARANG</label>
                                                <input type="text" class="form-control"  placeholder="Jumlah Barang" name="jumlah"
                                                 required
                                                ><div class="invalid-feedback">JUMLAH BARANG DIISI</div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>KETERANGAN</label>
                                                <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" required>
                                                <div class="invalid-feedback"> KETERANGAN DIISI</div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>ASAL</label>
                                                <?php echo form_dropdown('asal', $asal, set_value('asal'), 'class="form-control" required' ); ?>
                                                <div class="invalid-feedback"> ASAL PANGKALAN DIISI</div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                              <button class="btn btn-primary btn-rounded btn-sm" type="submit">Tambah</button>
                                            </div>
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
