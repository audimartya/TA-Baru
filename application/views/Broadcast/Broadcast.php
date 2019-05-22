
<div class="content">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">BROADCAST</h4>
                            </div>
                            <div class="content">
                             
                                <?php 
                                  echo form_open('Broadcast/index')
                                ?> 

                                 <div class="content table-responsive table-full">
                                <table id="tblPengecer" width="101%" class="table table-hover table-striped">
                                    <thead>
                                  
                                   <th width="9%">No Telepon </th>
                                    <td width="1%"></thead>
                                    <tbody>
                                        <?php foreach ($Broadcast as $key) { ?>
                                          <tr>
                                            <td>
                                            <button type="button" class="btn btn-primary btn-rounded btn-sm" type="submit"><?php echo $key['no_tlp']?></button>
                                              </form>
                                                     </td>
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
