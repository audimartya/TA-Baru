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
                                <form action="<?php echo site_url(); ?>/C_Admin/addLogin/" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Id Login (disabled)</label>
                                                <input type="text" class="form-control" name="id_login" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Username </label>
                                                <input type="text" class="form-control" placeholder="Username" name="username">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control" placeholder="Password" name="password">
                                            </div>
                                            <div class="form-group">
                                                <label>Level </label>
                                                 <input type="text" class="form-control" name="level" value="pangkalan" readonly>
                                            </div>
                                            <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="Add Data">
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
