     
      <!-- partial -->
 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">DATA DISTRIBUSI PANGKALAN </h4>
                                <div align="right">
                                  <a href="<?php echo site_url()."/DisPangkalan/do_insert/"; ?>">
                                <button type="button" class="btn btn-primary btn-rounded btn-sm" type="submit">TAMBAH DISTRIBUSI PANGKALAN</button>
                            </a>
                                                
                                  </div>
                            
                            </div>
                          <div class="content table-responsive table-full">
                                <table width="101%" class="table table-hover table-striped">
                                    <thead>
                                        <th width="9%">Tanggal</th>
                                        <th width="9%">Jumlah Gas</th>
                                        <th width="9%">Nama Pembeli</th>
                                        <th width="9%">No Telepon</th>
                                        <th width="9%">Alamat Pembeli</th>
                                        <th width="9%">Jenis Pembeli</th>
                                        <th width="9%">Keterangan</th>
                                        <th width="9%">Paraf Pembeli</th>
                                        <th width="9%">Asal</th>
                                        <th width="9%">Tujuan</th>

                                        <!-- <th width="9%">No Telepon Pengecer</th>
                                        <th width="9%">Paraf Pengecer</th> -->
                                       <!--  <th width="9%"> Nama Pangkalan</th> -->
                                
                                    <td width="1%"></thead>
                                    <tbody>
                                        <?php foreach ($DisPangkalan as $key) { ?>
                                        <tr>
                                            <td><?php echo $key['tanggal']?></td>
                                            <td><?php echo $key['jumlah_gas']?></td>  
                                            <td><?php echo $key['nama_pembeli']?></td> 
                                              <td><?php echo $key['no_tlp']?></td>
                                             <td><?php echo $key['alamat_pembeli']?></td>
                                             <td><?php echo $key['jenis_pembeli']?></td>
                                             <td><?php echo $key['keterangan']?></td>       
                                             <td>
                                              <img height="50px" width="50px" src="<?php echo base_url();?>assets/img/<?php echo $key ['paraf_pembeli'] ?>">
                                            </td>
                                               <td><?php echo $key['asal']?></td>
                                                 <td><?php echo $key['tujuan']?></td>                              
                                            <td>
                                             <a href="<?php echo site_url()."/DisPangkalan/do_update/"; echo $key['id_kirim2']; ?>">

                                                <button type="button" class="btn btn-primary btn-rounded btn-sm" type="submit">PERBAHARUI</button>
                                              </a> 
                                              <a href="<?php echo site_url()."/DisPangkalan/do_delete/"; echo $key['id_kirim2']; ?>">
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
