 <?php $this->load->view('Header'); ?>     
      <!-- partial -->
 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data Pangkalan </h4>
                                <div align="right">
                                   <form action="<?php echo site_url(); echo "/C_Pangkalan/viewAdd/"; ?>" method=post>
                                                    <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="Add Pangkalan">
                                                </form>
                                  </div>
                            
                            </div>
                          <div class="content table-responsive table-full">
                                <table width="101%" class="table table-hover table-striped">
                                    <thead>
                               <!--    <th width="3%">ID Member</th> -->
                                        <th width="9%">No Registrasi </th>
                                        <th width="9%">Nama Member </th>
                                        <th width="9%">Nama Pangkalan</th>
                                        <th width="9%">Alamat</th>
                                        <th width="8%">No KTP</th>
                                        <th width="10%">No Telp</th>
                                        <!-- <th width="10%">Id Login</th> -->
                                        <!-- <th width="10%">Paraf</th> -->
                                        <!-- <th width="10%">Nama Level</th> -->
                                        <th width="7%">Action</th>
                                    <td width="1%"></thead>
                                    <tbody>
                                        <?php foreach ($Pangkalan as $key) { ?>
                                        <tr>
                                            <!-- <td><?php echo $key['id_member']?></td> -->
                                            <td><?php echo $key['no_reg']?></td>
                                            <td><?php echo $key['nama_member']?></td>
                                            <td><?php echo $key['nama_pangkalan']?></td>
                                            <td><?php echo $key['alamat']?></td>
                                            <td><?php echo $key['no_ktp']?></td>
                                            <td><?php echo $key['no_tlp']?></td>
                                            <!-- <td><?php echo $key['id_login']?></td> -->
                                            <!-- <td><?php echo $key['paraf_pembeli']?></td> -->
                                           <!--  <td><?php echo $key['jenis']?></td> -->
                                            <td>
                                                <form action="<?php echo site_url(); echo "/C_Pangkalan/editPangkalan/"; echo $key['id_member'];?>" method=post>
                                                    <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="EDIT">
                                                </form>
                                                    <!-- <img src="<?php echo base_url(); ?>/assets/img/delete.png" width="16" height="16"></a>  -->

                                                   <form action="<?php echo site_url()."/C_Pangkalan/delete/"; echo $key['id_member']; ?>" method=post>
                                                    <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="DELETE">
                                                </form> </td>
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
