<script type="text/javascript">
  $(document).ready(function() {
      $('#dataReturnBarang').DataTable();
  } );
</script>     
      <!-- partial -->
 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">DATA RETURN BARANG </h4>
                                <div align="right">
                                  <a href="<?php echo site_url()."/ReturnBarang/do_insert/"; ?>">
                                <button type="button" class="btn btn-primary btn-rounded btn-sm" type="submit">TAMBAH RETURN BARANG</button>
                            </a>
                                                
                                  </div>
                            
                            </div>
                          <div class="content table-responsive table-full">
                                <table id="dataReturnBarang" width="101%" class="table table-hover table-striped">
                                    <thead>
                              <!--     <th width="3%">ID</th> -->
                                        <th width="9%">Tanggal </th>
                                        <th width="9%">Jumlah Barang </th>
                                        <th width="9%">Keterangan</th>
                                        <!-- <th width="9%">Asal</th> -->
                                        <!-- <th width="9%">No Telepon Pengecer</th>
                                        <th width="9%">Paraf Pengecer</th> -->
                                       <!--  <th width="9%"> Nama Pangkalan</th> -->
                                
                                    <td width="1%"></thead>
                                    <tbody>
                                        <?php foreach ($ReturnBarang as $key) { ?>
                                        <tr>
                                           <td><?php echo $key['tanggal']?></td>
                                            <td><?php echo $key['jumlah']?></td>
                                            <td><?php echo $key['keterangan']?></td>                                       
                                            <td>
                                             <a href="<?php echo site_url()."/ReturnBarang/do_update/"; echo $key['id_kembali']; ?>">

                                                <button type="button" class="btn btn-primary btn-rounded btn-sm" type="submit">PERBAHARUI</button>
                                              </a> 
                                              <a href="<?php echo site_url()."/ReturnBarang/do_delete/"; echo $key['id_kembali']; ?>">
                                                  <button type="button" class="btn btn-primary btn-rounded btn-sm" type="submit">DIHAPUS</button>
                                              </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                            </table>
                                                    
                                                    <!-- <img src="<?php echo base_url(); ?>/assets/img/delete.png" width="16" height="16"></a>  -->

                                                  <!--   <img src="<?php echo base_url(); ?>/assets/img/edit.png"                                       widt
                                        </tr> -->
                                         
                                   <!--  </tbody>
                              </table> -->

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
