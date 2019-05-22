  <?php $this->load->view('Header'); ?>       
      <!-- partial -->
<?php
$arrTujuan = array();
$tujuan = $this->db->get('distribusi1')->result_array();
foreach($tujuan as $row)
{
    array_push($arrTujuan, array($row['tujuan'] => $row['tujuan']));
}
?>
   <div class="content">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Distribusi Pangkalan </h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo site_url(); ?>/C_DistribusiPangkalan/addDistribusiPangkalan/" method="post">
                                    <div class="row">
                                        <div class="col-md-8">
                                            
                                            <div class="form-group">
                                                <label>Tanggal </label>
                                                <input type="date" class="form-control" placeholder="tanggal" name="tanggal" >
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Gas </label>
                                                <input type="text" class="form-control" placeholder="jumlah_gas" name="jumlah_gas" >
                                            </div>

                                            <div class="form-group">
                                                    <label>
                                                        Tujuan
                                                        </label> 
                                                        <select name="tujuan" class="form-control">
                                                        <?php foreach ($data as $key){ 
                                                            echo "<option value='$key[id_member]'>$key[nama_pangkalan]</option>";
                                                            }?>
                                                        </select>
                                                    
                                                <!-- <?php echo validation_errors(); 
                                                    $arrTujuan = array();
                                                    $tujuan = $this->db->get('member_elpiji')->result_array();
                                                    foreach ($tujuan as $row)
                                                    {
                                                        array_push($arrTujuan, array($row['nama_pangkalan'] => $row['nama_pangkalan']));
                                                    }
                                                ?>

                                               <label> Tujuan : <?php echo form_dropdown('input_tujuan', $arrTujuan ,'','class="form-control"');?></p></b>
                                                </label> --> 
                                            </div>
                                            <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="Add Data">
                                        </div>
                                        <div class="col-md-6">
                                            </div>
                                        </div> 
                              
                                        </div>
                                            
                                                </form>
                                        </div>
                                    </div>
                                </div>
}


<?php $this->load->view('Footer'); ?>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tabelpelanggan').DataTable();
  });

  $('#notif').slideDown('slow').delay(3000).slideUp('slow');
</script>
