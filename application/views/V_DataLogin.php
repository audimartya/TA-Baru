 <?php $this->load->view('Header'); ?>     
      <!-- partial -->
 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data User </h4>
                                <div align="right">
                                   <form action="<?php echo site_url(); echo "/C_Admin/addLogin/"; ?>" method=post>
                                                    <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="Add Login">
                                                </form>
                                  </div>
                            
                            </div>
                          <div class="content table-responsive table-full">
                                <table width="101%" class="table table-hover table-striped">
                                    <thead>
                                  <th width="3%">ID</th>
                                        <th width="9%">Username </th>
                                        <th width="9%">Passsword</th>
                                        <th width="9%">Level</th>
                                        <th width="10%">Action</th>
                                    
                                    <td width="1%"></thead>
                                    <tbody>
                                        <?php foreach ($Login as $key) { ?>
                                        <tr>
                                            <td><?php echo $key['id_login']?></td>
                                            <td><?php echo $key['username']?></td>
                                            <td><?php echo $key['password']?></td>
                                            <td><?php echo $key['level']?></td>
                                            <td><form action="<?php echo site_url(); echo "/C_Admin/editLogin/"; echo $key['id_login'];?>" method=post>
                                                    <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="EDIT">
                                                </form>
                                              <form action="<?php echo site_url()."/C_Admin/deleteLogin/"; echo $key['id_login']; ?>" method=post>
                                                    <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="DELETE"></td>
                                        </tr>
                                         <?php } ?>
                                    </tbody>
                              </table>

                          </div>
                        </div>
                    </div>


                  <div class="col-md-12"></div>


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
