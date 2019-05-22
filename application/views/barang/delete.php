<?php $this->load->view('header'); ?>     
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <h2>Hapus Barang</h2>
    <h4 style="color: red">Apakah Anda Yakin Akan menghapus Data Berikut?</h4>
    <h5 style="color: red">Klik button DELETE untuk menghapus!</h5>
    <form action="<?php echo site_url(); ?>/ControllerBarang/deletebarang/<?php echo $satubaris->id_barang; ?>" enctype="multipart/form-data" method="post">
      <p>Nama Barang : <input readonly type="text" name="del_nama" class="form-control" value="<?php echo $satubaris->nama_barang; ?>"></p>
      <p>Harga Barang : <input readonly type="text" name="del_harga" class="form-control" value="<?php echo $satubaris->harga_barang; ?>"></p>
      <p>Stok Barang : <input readonly type="text" name="del_stok" class="form-control" value="<?php echo $satubaris->stok; ?>"></p>
        <p><input class="btn btn-danger" type="submit" value="DELETE"></input></p>
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