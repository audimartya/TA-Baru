   
      <div class="content">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                              <div class="content">
                                <h4 class="title">PERBAHARUI Return Barang </h4>
                            <div class="content">
                                 <?php echo validation_errors(); ?>
                                <?php foreach($show_return as $p) {
                                  ?>
                                    <?php 
                                    echo form_open_multipart('ReturnBarang/do_update/'.$p['id_kembali'],
                                      array(
                                        'class' => 'b_validation',
                                        'novalidate' => '')
                                    );
                                  ?>
                                  <div class="row">
                                    <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Jumlah Barang </label>
                                                <input type="number" class="form-control" name="jumlah" value="<?php echo $p['jumlah'] ?>" required><div class="invalid-feedback"> Jumlah Barang Harus Diisi
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" name="keterangan" class="form-control" value="<?php echo $p['keterangan'] ?>"required><div class="invalid-feedback"> Keterangan Harus Diisi
                                            </div>
                                          </div>
                                        </div>
                                         <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label name="asal">ASAL </label>
                                                 <?php echo form_dropdown('asal', $asal, set_value( 'asal', $p['asal'] ), 'class="form-control"'); ?>
                                                <div class="invalid-feedback">Asal harus Diisi
                                            </div>
                                            </div>
                                    <?php } ?>
                                              
                                                   <button class="btn btn-primary btn-rounded btn-sm" type="submit"  >PERBAHARUI</button>
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