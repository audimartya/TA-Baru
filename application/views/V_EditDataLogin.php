  <?php $this->load->view('Header'); ?>     
      
   <div class="content">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Data User </h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo site_url(); ?>/C_Admin/editLogin/<?php echo $satubaris->id_login;?>" method="post">
                                    <div class="row">
                                          <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Id Login (disabled)</label>
                                                <input type="text" class="form-control"  value="<?php echo $satubaris->id_login; ?>" name="id_login" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Username </label>
                                                <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $satubaris->username; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control" placeholder="Password" name="password" value="<?php echo $satubaris->password; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Level </label>
                                                <input type="text" class="form-control" placeholder="Level" name="level" value="<?php echo $satubaris->level; ?>" readonly>
                                            </div>
                                            
                                            <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="Update Data">
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
