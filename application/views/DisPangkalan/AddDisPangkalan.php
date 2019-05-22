
<div class="content">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">TAMBAH DISTRIBUSI PANGKALAN</h4>
                            </div>
                            <div class="content">
                                <?php echo validation_errors(); ?>
                                <?php 
                                  echo form_open_multipart('DisPangkalan/do_insert')
                                ?>
                                  
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>TANGGAL</label>
                                                <input type="date" class="form-control"  placeholder="Tanggal" name="tanggal"
                                                 required
                                                ><div class="invalid-feedback">TANGGAL DIISI</div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>JUMLAH GAS</label>
                                                <input type="number" class="form-control" placeholder="Jumlah Gas" name="jumlah_gas" required>
                                                <div class="invalid-feedback"> JUMLAH GAS DIISI</div>
                                        </div>
                                          <div class="col-md-9">
                                            <div class="form-group">
                                                <label>NAMA PEMBELI</label>
                                                <input type="text" class="form-control" placeholder="Nama Pembeli" name="nama_pembeli" required>
                                                <div class="invalid-feedback">NAMA PEMBELI DIISI</div>
                                        </div>
                                          <div class="col-md-9">
                                            <div class="form-group">
                                                <label>NO TELEPON</label>
                                                <input type="number" class="form-control" placeholder="No Telepon" name="no_tlp" required>
                                                <div class="invalid-feedback"> NO TELEPON DIISI</div>
                                        </div>
                                            <div class="col-md-9">
                                            <div class="form-group">
                                                <label>ALAMAT PEMBELI</label>
                                                <input type="text" class="form-control" placeholder="Alamat" name="alamat_pembeli" required>
                                                <div class="invalid-feedback"> ALAMAT PEMBELI DIISI</div>
                                        </div>
                                         <div class="col-md-9">
                                            <div class="form-group">
                                                <label>JENIS PEMBELI</label>
                                                <br>
                                                <SELECT name="jenis_pembeli">
                                                  <OPTION>PILIH</OPTION>
                                                  <OPTION value="RT">Rumah Tangga</OPTION>
                                                   <OPTION value="UMK">Usaha Menengah Kebawah</OPTION>
                                                    <OPTION value="Pengecer">Pengecer</OPTION>
                                                </SELECT>
                                                </div>
                                        </div>
                                            <div class="col-md-9">
                                            <div class="form-group">
                                                <label>KETERANGAN</label>
                                                <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" required>
                                                <div class="invalid-feedback"> ALAMAT PEMBELI DIISI</div>
                                        </div>
                                        </div> <div class="col-md-9">
                                            <div class="form-group">
                                                <label>PARAF PEMBELI </label>
                                                <input type="file" class="form-control" placeholder="Paraf Pembeli" name="paraf_pembeli" required>
                                                <div class="invalid-feedback"> PARAF PEMBELI</div>
                                            </div>
                                              </div> <div class="col-md-9">
                                            <div class="form-group">
                                                <label> ASAL </label>   
                                                 <?php echo form_dropdown('asal', $asal, set_value('asal'), 'class="form-control" required' ); ?>
                                                <div class="invalid-feedback"> ASAL DIISI</div>
                                                </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>TUJUAN</label>
                                                <?php echo form_dropdown('tujuan', $tujuan, set_value('tujuan'), 'class="form-control" required' ); ?>
                                                <div class="invalid-feedback"> TUJUAN DIISI</div>
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
