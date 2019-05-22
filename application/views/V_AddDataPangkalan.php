  <?php $this->load->view('Header'); ?>     
      <!-- partial -->
   <div class="content">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Pangkalan </h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo site_url(); ?>/C_Pangkalan/addPangkalan/" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <!-- <div class="form-group">
                                                <label>Id Member (disabled)</label>
                                                <input type="text" class="form-control"  placeholder="id_member" name="id_member" readonly="">
                                            </div> -->

                                            <div class="form-group">
                                                <label>Nama Member </label>
                                                <input type="text" class="form-control" placeholder="Nama Member" name="nama_member" >
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" placeholder="Alamat" name="alamat" >
                                            </div>
                                            <div class="form-group">
                                                <label>No Telp </label>
                                                <input type="text" class="form-control" placeholder="No Telp" name="no_tlp" >
                                            </div>
                                             <!-- <div class="form-group">
                                                <label>Paraf Pembeli </label>
                                                <input type="text" class="form-control" placeholder="Paraf Pembeli" name="paraf_pembeli" >
                                            </div> -->
                                            <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="Add Data">
                                        </div>
                                 
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No Registrasi </label>
                                                <input type="text" class="form-control" placeholder="No Registrasi" name="no_reg" >
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Pangkalan </label>
                                                <input type="text" class="form-control" placeholder="Nama Pangkalan" name="nama_pangkalan" >
                                            </div>
                                            <div class="form-group">
                                                <label>No KTP Pemilik</label>
                                                <input type="text" class="form-control" placeholder="No ktp" name="no_ktp" >
                                            </div>
                                           <!--  <div class="form-group">
                                                <label>Id Login </label>
                                                <input type="text" class="form-control" placeholder="Id Login" name="id_login" >
                                            </div> -->
                                            <div class="form-group">
                                               <input type="hidden" class="form-control" name="jenis" value="Pangkalan">
                                            </div>

                                        </div>

                                                </form>
                                        </div>
                                    </div>

<?php $this->load->view('Footer'); ?>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tabelpelanggan').DataTable();
  });

  $('#notif').slideDown('slow').delay(3000).slideUp('slow');
</script>
