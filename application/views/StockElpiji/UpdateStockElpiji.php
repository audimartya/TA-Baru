   
      <div class="content">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                              <div class="content">
                                <h4 class="title">PERBAHARUI STOCK ELPIJI </h4>
                            <div class="content">
                                 <?php echo validation_errors(); ?>
                                <?php foreach($show_stock as $p) {
                                  ?>
                                    <?php 
                                    echo form_open_multipart('StockElpiji/do_update/'.$p['id_member'],
                                      array(
                                        'class' => 'b_validation',
                                        'novalidate' => '')
                                    );
                                  ?>
                                  <div class="row">
                                    <div class="col-md-5">
                                            <div class="form-group">
                                                <label>TANGGAL</label>
                                                <input type="date" class="form-control" name="tanggal" value="<?php echo $p['tanggal'] ?>" required><div class="invalid-feedback"> TANGGAL HARUS DIISI
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label>STOCK DATANG</label>
                                                <input type="number" name="stock_datang" class="form-control" value="<?php echo $p['stock_datang'] ?>"required><div class="invalid-feedback"> STOCK DATANG HARUS DIISI
                                            </div>
                                          </div>
                                        </div>
                                         <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                 <label>STOCK KELUAR</label>
                                                <input type="number" name="stock_keluar" class="form-control" value="<?php echo $p['stock_keluar'] ?>"required><div class="invalid-feedback"> STOCK KELUAR HARUS DIISI
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label>STOCK TOTAL</label>
                                                <input type="number" name="stock_total" class="form-control" value="<?php echo $p['stock_total'] ?>"required><div class="invalid-feedback"> STOCK TOTAL HARUS DIISI
                                            </div>
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