<?php $this->load->view('header'); ?>     
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <h2>Tambah Barang Baru</h2>
    <form action="<?php echo site_url(); ?>/ControllerBarang/addbarang" enctype="multipart/form-data" method="post">
      <p>Nama Barang : <input type="text" name="nama" class="form-control" required></p>
      <p>Harga Barang : <input type="number" name="harga" class="form-control" required></p>
      <p>Stok Barang : <input type="number" name="stok" class="form-control" required></p>
      <p><input class="btn btn-primary" type="submit" value="SEND"></input></p>
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