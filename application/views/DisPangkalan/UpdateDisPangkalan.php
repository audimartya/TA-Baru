   
   <div class="content">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">PERBAHARUI DISTRIBUSI PANGKALAN</h4>
                               
                            </div>
                            <div class="content">
                                <?php echo validation_errors(); ?>
                                <?php foreach($show_dispa as $p) {
                                  ?>
                                    <?php 
                                    echo form_open_multipart('DisPangkalan/do_update/'.$p['id_kirim2'],
                                      array(
                                        'class' => 'b_validation',
                                        'novalidate' => '')
                                    );
                                  ?>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>TANGGAL</label>
                                                <input type="date" class="form-control" name="tanggal" style="width: 160px" value="<?php echo $p['tanggal'] ?>" required><div class="invalid-feedback"> TANGGAL DIISI
                                        </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>JUMLAH GAS </label>
                                                <input type="text" class="form-control" style="width: 160px" name="jumlah_gas" value="<?php echo $p['jumlah_gas'] ?>"required><div class="invalid-feedback">JUMLAH GAS HARUS DIISI
                                         </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>NAMA PEMBELI </label>
                                                <input type="text" class="form-control" style="width: 160px" name="nama_pembeli" value="<?php echo $p['nama_pembeli'] ?>"required><div class="invalid-feedback">NAMA PEMBELI HARUS DIISI
                                         </div>
                                        </div>
                                         <div class="col-md-9">
                                            <div class="form-group">
                                                <label>NO TELEPON </label>
                                                <input type="number" class="form-control" style="width: 160px" name="no_tlp" value="<?php echo $p['no_tlp'] ?>"required><div class="invalid-feedback">NO TELEPON HARUS DIISI
                                         </div>
                                        </div>
                                         <div class="col-md-9">
                                            <div class="form-group">
                                                <label>ALAMAT PEMBELI </label>
                                                <input type="text" class="form-control" style="width: 160px" name="alamat_pembeli" value="<?php echo $p['alamat_pembeli'] ?>"required><div class="invalid-feedback">ALAMAT PEMBELI HARUS DIISI
                                         </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>JENIS PEMBELI</label>
                                                <br>
                                                <SELECT name="jenis_pembeli" value="<?php echo $p['jenis_pembeli'] ?>">
                                                  <OPTION>PILIH</OPTION>
                                                  <OPTION value="RT">Rumah Tangga</OPTION>
                                                   <OPTION value="UMK">Usaha Menengah Kebawah</OPTION>
                                                    <OPTION value="Pengecer">Pengecer</OPTION>
                                                </SELECT>
                                                </div>
                                        </div>

                                              <div class="col-md-9">
                                            <div class="form-group">
                                                <label>KETERANGAN PEMBELI </label>
                                                <input type="text" class="form-control" style="width: 160px" name="keterangan" value="<?php echo $p['keterangan'] ?>"required><div class="invalid-feedback">ALAMAT PEMBELI HARUS DIISI
                                         </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Paraf Pembeli</label>
                                               <input type="file" class="form-control" name="paraf_pembeli" value="<?php echo $p['paraf_pembeli'] ?>"required><div class="invalid-feedback"> 
                                                Paraf Harus Diisi
                                            </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label name="asal">ASAL </label>
                                                 <?php echo form_dropdown('asal', $asal, set_value( 'asal', $p['asal'] ), 'class="form-control"'); ?>
                                                <div class="invalid-feedback">ASAL HARUS DIISI
                                            </div>
                                            </div>
                                            <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label name="tujuan"> TUJUAN </label>
                                                 <?php echo form_dropdown('tujuan', $tujuan, set_value( 'tujuan', $p['tujuan'] ), 'class="form-control"'); ?>
                                                <div class="invalid-feedback">TUJUAN HARUS DIISI
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