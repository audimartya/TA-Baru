 <?php $this->load->view('Header'); ?>     
      <!-- partial -->
 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data Distribusi Pangkalan </h4>
                                <div align="right">
                                   <form action="<?php echo site_url(); echo "/C_DistribusiPangkalan/viewAdd/"; ?>" method=post>
                               <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="Add Distribusi Pangkalan">
                                                </form>
                                  </div>
                            </div>
                          <div class="content table-responsive table-full">
                                <table width="101%" class="table table-hover table-striped">
                                    <thead>
                                  <!-- <th width="3%">Id Kirim</th> -->
                                        <th width="9%">Tanggal </th>
                                        <th width="9%">Jumlah gas</th>
                                        <th width="9%">Tujuan</th>
                                        <th width="7%">Action</th>
                                    <td width="1%"></thead>
                                    <tbody>
                                        <?php foreach ($all as $key) { ?>
                                        <tr>
                                           <!--  <td><?php echo $key['id_kirim1'] ?></td> -->
                                            <td><?php echo $key['tanggal'] ?></td>
                                            <td><?php echo $key['jumlah_gas'] ?></td>
                                            <td><?php echo $key['nama_pangkalan'] ?></td>
                                            <td>
                                              
                                                <form action="<?php echo site_url(); echo "/C_DistribusiPangkalan/editDistribusiPangkalan/"; echo $key['id_kirim1'];?>" method=post>
                                                    <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="EDIT">
                                                </form>

                                                   <form action="<?php echo site_url()."/C_DistribusiPangkalan/delete/"; echo $key['id_kirim1']; ?>" method=post>
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
