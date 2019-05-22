
<div class="content">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">TAMBAH STOCK BARANG</h4>
                            </div>
                            <div class="content">
                                <?php echo validation_errors(); ?>
                                <?php 
                                  echo form_open_multipart('StockElpiji/do_insert')
                                ?> 

                                        <!-- <div class="col-md-9">
                                            <div class="form-group">
                                                <label>TANGGAL</label>
                                                <input type="date" class="form-control"  placeholder="Tanggal" name="tanggal"
                                                 required
                                                ><div class="invalid-feedback">TANGGAL DIISI</div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-md-9">
                                            <div class="form-group">
                                                <label>STOCK DATANG</label>
                                                <input type="number" class="form-control" placeholder="Stock Datang" name="stock_datang" required>
                                                <div class="invalid-feedback"> STOCK DATANG DIISI</div>
                                        </div> -->
                                      <!-- <div class="col-md-9">
                                            <div class="form-group">
                                                <label>STOCK KELUAR</label>
                                                <input type="number" class="form-control" placeholder="Stock Keluar" name="stock_keluar" required>
                                                <div class="invalid-feedback"> STOCK KELUAR DIISI</div>
                                        </div> -->
                                        <!-- <div class="col-md-9">
                                            <div class="form-group">
                                                <label>STOCK TOTAL</label>
                                                <input type="number" class="form-control" placeholder="Stock Total" name="stock_total" required>
                                                <div class="invalid-feedback"> STOCK TOTAL DIISI</div>
                                        </div> -->
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
