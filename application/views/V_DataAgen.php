 <?php $this->load->view('Header'); ?>     
      <!-- partial -->
 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data Agen </h4>
                                <div align="right">
                                  
                                  </div>
                            
                            </div>
                          <div class="content table-responsive table-full">
                                <table width="101%" class="table table-hover table-striped">
                                    <thead>
                                  <th width="3%">ID</th>
                                        <th width="9%">Nama Agen </th>
                                        <th width="9%">Email</th>
                                        <th width="9%">Alamat</th>
                                        <th width="8%">No Sold To</th>
                                        <th width="10%">No Ship To</th>
                                        <th width="10%">Kota</th>
                                    
                                    <td width="1%"></thead>
                                    <tbody>
                                        <?php foreach ($Agen as $key) { ?>
                                        <tr>
                                            <td><?php echo $key['id']?></td>
                                            <td><?php echo $key['nama_agen']?></td>
                                            <td><?php echo $key['email']?></td>
                                            <td><?php echo $key['alamat']?></td>
                                            <td><?php echo $key['no_soldto']?></td>
                                            <td><?php echo $key['no_shipto']?></td>
                                            <td><?php echo $key['kota']?></td>
                                           
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
