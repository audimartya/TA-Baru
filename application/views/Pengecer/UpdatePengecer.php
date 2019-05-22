   
      <div class="content">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                              <div class="content">
                                <h4 class="title">PERBAHARUI PENGECER </h4>
                            <div class="content">
                                 <?php echo validation_errors();
                                    echo form_open_multipart(current_url(), array('class' => 'b_validation','novalidate' => '') );
                                  ?>
                                  <div class="row">
                                    <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nama Lengkap Pembeli </label>
                                                <input type="text" class="form-control" name="nama_member" value="<?php echo $show_pengecer->nama_member ?>" required>
                                                <div class="invalid-feedback"> Nama Harus Diisi
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label>No Telephone</label>
                                                <input type="number" class="form-control" name="no_tlp" value="<?php echo $show_pengecer->no_tlp ?>"required><div class="invalid-feedback"> No Telephone Harus Diisi
                                            </div>
                                          </div>
                                        </div>
                                         <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Alamat Pembeli </label>
                                               <input type="text" class="form-control" name="alamat" value="<?php echo $show_pengecer->alamat ?>"required>
                                               <div class="invalid-feedback"> Alamat Harus Diisi
                                            </div>
                                          </div>
                                            <div class="form-group">
                                                <label>Paraf Pembeli</label>
                                               <input type="file" class="form-control" name="paraf_pembeli" value="<?php echo $show_pengecer->paraf_pembeli ?>"required><div class="invalid-feedback"> Paraf Harus Diisi
                                            </div>
                                          </div>
                                            </div>
                                            
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="jenis" value="Pengecer">
                                              </div>
                                            </div>
                                   
                                              
                                                   <button class="btn btn-primary btn-rounded btn-sm" type="submit"  >PERBAHARUI</button>

                           </div>
                                          </div>
                                          </form>
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