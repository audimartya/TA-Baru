<?php $this->load->view('header'); ?>     
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
  <h2>Edit Barang</h2>
    <form action="<?php echo site_url(); ?>/ControllerBarang/editbarang/<?php echo $satubaris->id_barang; ?>" enctype="multipart/form-data" method="post">
      <p>Nama Barang : <input type="text" name="up_nama" class="form-control" value="<?php echo $satubaris->nama_barang; ?>"></p>
      <p>Harga Barang : <input type="text" name="up_harga" class="form-control" value="<?php echo $satubaris->harga_barang; ?>"></p>
      <p>Stok Barang : <input type="text" name="up_stok" class="form-control" value="<?php echo $satubaris->stok; ?>"></p>
      <p><input class="btn btn-primary" type="submit" value="UPDATE"></input></p>
    </form>
  </div>
  <!-- content-wrapper ends -->

  <?php $this->load->view('footer'); ?>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#Barangtable').DataTable();
    });

    $('#notif').slideDown('slow').delay(3000).slideUp('slow');
  </script>