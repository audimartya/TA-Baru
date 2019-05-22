  <?php $this->load->view('Header'); ?>     
      <!-- partial -->

   <div class="content">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-8">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Edit Distribusi Pangkalan </h4>
                            </div>
                             <?php foreach ($satubaris as $key) { ?>
                            <div class="content">
                                <form action="<?php echo site_url(); ?>/C_DistribusiPangkalan/editDistribusiPangkalan/<?php echo $key['id_kirim1'];?>" method="post">

                                    <div class="row">
                                          <div class="col-md-8">
                                            <!-- <div class="form-group">
                                                <label>Pangkalan (disabled)</label>
                                                <input type="text" class="form-control"  value="<?php echo $satubaris->id_kirim1; ?>" name="id_kirim1">
                                            </div> -->
                                            <div class="form-group">
                                                <label>Tanggal </label>
                                                <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" value="<?php echo $key['tanggal']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Gas</label>
                                                <input type="text" class="form-control" placeholder="jumlah Gas" name="jumlah_gas" value="<?php echo $key['jumlah_gas']; ?>">
                                            </div>
                                            
                                           <div class="form-group">
                                                <select class="form-control" name="tujuan">
                                                    <option value="0">
                                                       Tujuan
                                                    </option>
                                                    <?php foreach ($dropdownNama as $key)
                                                    { echo "<option value='$key[id_member]'>$key[nama_pangkalan]</option>";}
                                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                            </div>

                                            
                                             <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="Update Data">
                                        </div>
                                                </form>
                                                <?php }?>
                                        </div>
                                    </div>
                                </div>
<?php $this->load->view('Footer'); ?>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tabelpelanggan').DataTable();
  });

  $('#notif').slideDown('slow').delay(3000).slideUp('slow');
</script>
