<?php $this->load->view('header'); ?>     
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <h2>DATA BARANG</h2>
          
          <form action="<?php echo site_url(); echo "/ControllerBarang/addbarang/";?>" method=post>
            <input class="btn btn-success btn-fw" type="submit" value="Tambah Data Barang +">
          </form> &nbsp;

        <div class="table-responsive">
          <table class="table table-hover" id="newstable">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($barang as $key) { ?>
              <tr>
                <td><?php echo $key['id_barang']?></td>
                <td><?php echo $key['nama_barang']?></td>
                <td><?php echo $key['harga_barang']?></td>
                <td><?php echo $key['stok']?></td>
                <td>
                <div class="form-group row">
                  <form action="<?php echo site_url(); echo "/ControllerBarang/editbarang/"; echo $key['id_barang'];?>" method=post>
                    <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="EDIT">
                  </form> &nbsp;
                  <form action="<?php echo site_url(); echo "/ControllerBarang/deletebarang/"; echo $key['id_barang'];?>" method=post>
                    <input class="btn btn-danger btn-rounded btn-sm" type="submit" value="DELETE">
                  </form>
                </div>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        </div>
        <!-- content-wrapper ends -->

<?php $this->load->view('footer'); ?>

<script type="text/javascript">
  $(document).ready(function() {
    $('#newstable').DataTable();
  });

  $('#notif').slideDown('slow').delay(3000).slideUp('slow');
</script>