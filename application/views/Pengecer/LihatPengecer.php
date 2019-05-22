<!-- Link Assets Data Table -->
    <!-- 
     -->
<!-- <script type="text/javascript">
  $(document).ready(function() {
      $('#tblPengecer').DataTable();
  } );
</script>  -->    
      <!-- partial -->
 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">DATA PENGECER </h4>
                                <!-- <div align="right">
                                  <a href="<?php echo site_url('Pengecer/do_insert/'); ?>">
                                    <button type="button" class="btn btn-primary btn-rounded btn-sm" type="submit">TAMBAH PENGECER</button>
                                  </a>
                                                
                                  </div> -->
                            
                            </div>
                          <div class="content table-responsive table-full">
                                <table id="tblPengecer" width="101%" class="table table-hover table-striped">
                                    <thead>
                     
                                        <th width="9%">Nama Pengecer </th>
                                        <th width="9%">Alamat Pengecer</th>
                                        <th width="9%">No Telepon Pengecer</th>
                                        <th width="9%">Paraf Pengecer</th>
                                        <th width="9%">Jenis</th>
                                       <!--  <th width="9%"> Nama Pangkalan</th> -->
                                
                                    <td width="1%"></thead>
                                    <tbody>
                                        <?php foreach ($Pengecer as $key) { ?>
                                        <tr>
                                      
                                            <td><?php echo $key['nama_member']?></td>
                                            <td><?php echo $key['alamat']?></td>
                                            <td><?php echo $key['no_tlp']?></td>
                                            <td>
                                              <img height="50px" width="50px" src="<?php echo base_url();?>assets/img/<?php echo $key ['paraf_pembeli'] ?>">
                                            </td>
                                             <td><?php echo $key['jenis']?></td>

                                                                                
                                            <td>
                                             <!--  <a href="<?php echo site_url()."/Pengecer/do_update/"; echo $key['id_member']; ?>">
                                <button type="button" class="btn btn-primary btn-rounded btn-sm" type="submit">PERBAHARUI</button>
                            </a> 
                            <a href="<?php echo site_url()."/Pengecer/do_delete/"; echo $key['id_member']; ?>">
                                <button type="button" class="btn btn-primary btn-rounded btn-sm" type="submit">DIHAPUS</button>
                            </a> -->
                                                    
                                                </form>
                                                    <!-- <img src="<?php echo base_url(); ?>/assets/img/delete.png" width="16" height="16"></a>  -->

                                                   <!--  <img src="<?php echo base_url(); ?>/assets/img/edit.png"                                       width="16" height="16"> --> </td>
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


<script type="text/javascript">
  $(document).ready(function() {
    $('#tabelpelanggan').DataTable();
  });

  $('#notif').slideDown('slow').delay(3000).slideUp('slow');
</script>
