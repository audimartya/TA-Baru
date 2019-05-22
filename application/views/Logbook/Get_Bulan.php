
<div class="content">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Show Bulan </h4>
                            </div>
                            <div class="content">
                                <?php echo form_open('Logbook/get_bulan') ?>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Bulan</label>
                                                <!-- <select name="filter" onchange="this.form.submit()">
                                                  <option value="Pilih" <?php if($filter == 'Pilih' || empty($filter)) echo 'Selected';?> >Pilih</option>
                                                  <option value="01" <?php if($filter == '01') echo 'Selected'; ?>>Januari</option>
                                                  <option value="02" <?php if($filter == '02') echo 'Selected'; ?>>Februari</option>
                                                  <option value="03" <?php if($filter == '03') echo 'Selected'; ?>>Maret</option>
                                                  <option value="04" <?php if($filter == '04') echo 'Selected'; ?>>April</option>
                                                  <option value="05" <?php if($filter == '05') echo 'Selected'; ?>>Mei</option>
                                                  <option value="06" <?php if($filter == '06') echo 'Selected'; ?>>Juni</option>
                                                  <option value="07" <?php if($filter == '07') echo 'Selected'; ?>>Juli</option>
                                                  <option value="08" <?php if($filter == '08') echo 'Selected'; ?>>Agustus</option>
                                                  <option value="09" <?php if($filter == '09') echo 'Selected'; ?>>September</option>
                                                  <option value="10" <?php if($filter == '10') echo 'Selected'; ?>>Oktober</option>
                                                  <option value="11" <?php if($filter == '11') echo 'Selected'; ?>>November</option>
                                                  <option value="12" <?php if($filter == '12') echo 'Selected'; ?>>Desember</option>
                                                </select> -->

                                                <select name="bulan">
                                                  <option value="01">Januari</option>
                                                  <option value="02">Februari</option>
                                                  <option value="03">Maret</option>
                                                  <option value="04">April</option>
                                                  <option value="05">Mei</option>
                                                  <option value="06">Juni</option>
                                                  <option value="07">Juli</option>
                                                  <option value="08">Agustus</option>
                                                  <option value="09">September</option>
                                                  <option value="10">Oktober</option>
                                                  <option value="12">November</option>
                                                  <option value="12">Desember</option>
                                              </select>
                                            </div>
                                        </div>
                                        <input type="submit" name="btn" value="Cari">
                                <?php echo form_close() ?>

                                         </div>
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                       <?php if(!empty($get_logbook)){
                                       foreach($get_logbook as $key) { 
                                            echo $key['tanggal'];
                                      }}else{ echo 'no data'; } ?>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         



<script type="text/javascript">
  $(document).ready(function() {
    $('#tabelpelanggan').DataTable();
  });

  $('#notif').slideDown('slow').delay(3000).slideUp('slow');
</script>
