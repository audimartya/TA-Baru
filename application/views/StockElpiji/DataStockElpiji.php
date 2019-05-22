     
      <!-- partial -->
 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">DATA STOCK ELPIJI</h4>
                                <div align="right">        
                                  </div>
                            </div>

                          <div class="content table-responsive table-full">
                                <table width="101%" class="table table-hover table-striped">
                                    <thead>
                                        <th width="9%">Tanggal </th>
                                        <th width="9%">Stock Datang</th>
                                        <th width="9%">Stock Keluar</th>
                                        <th width="9%">Stock Total</th>
                                        
                                    <td width="1%"></thead>
                                    <tbody>
                                        <?php foreach ($StockElpiji as $key) { ?>
                                        <tr>
                                            <td><?php echo $key['tanggal']?></td>
                                            <td><?php echo $key['stock_datang']?></td>
                                            <td><?php echo $key['stock_keluar']?></td>  
                                            <td><?php echo $key['stock_total']?></td>              
                                        </tr>
                                        <?php break; } ?>
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
