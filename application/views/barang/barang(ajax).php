<?php $this->load->view('header'); ?>     
      <!-- partial -->
      
      <div id="inputModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-title" align="center">
              <h2>INPUT DATA BARANG</h2>
            </div>
            <div class="modal-body">
              <input type="text" class="form-control ins" placeholder="Nama Barang...." id="namaBar"><br>
              <input type="text" class="form-control ins" placeholder="Harga Barang...." id="hargaBar"><br>
              <input type="text" class="form-control ins" placeholder="Stok Barang...." id="stokBar"><br>
            </div>
            <div class="modal-footer">
              <input id="submitForm" type="button" value="save" class="btn btn-success" onclick="uploadData('addnew');">
            </div>
          </div>
        </div>
      </div>

      <div class="main-panel">
        <div class="content-wrapper">
          <h2>DATA BARANG</h2>
          
          <!-- <form action="#" method=post> -->
            <input class="btn btn-success btn-fw" type="button" value="Tambah Data Barang +" id="addnew">
          <!-- </form> &nbsp; -->

        <div class="table-responsive">
          <table class="table table-hover" id="newstable">
            <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($barang as $key) { ?>
              <tr>
                <td><?php echo $key['nama_barang']?></td>
                <td><?php echo $key['harga_barang']?></td>
                <td><?php echo $key['stok']?></td>
                <td>
                <div class="form-group row">
                  <form action="<?php echo site_url(); echo "/writer/editnews/"; echo $key['id_barang'];?>" method=post>
                    <input class="btn btn-primary btn-rounded btn-sm" type="submit" value="EDIT">
                  </form> &nbsp;
                  <form action="<?php echo site_url(); echo "/writer/editnews/"; echo $key['id_barang'];?>" method=post>
                    <input class="btn btn-danger btn-rounded btn-sm" type="submit" value="DELETE">
                  </form>
                </div>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        </div>
        <!-- content-wrapper ends -->

<?php $this->load->view('footer'); ?>

<script type="text/javascript">
  $(document).ready(function() {
    $('#newstable').DataTable();
  });

  $('#notif').slideDown('slow').delay(3000).slideUp('slow');

  $(document).ready(function(){
    $('#addnew').on('click', function(){
      $('#inputModal').modal('show');
    });
    displayData(0,50);
  });

  function uploadData(data){
    var namaBarang = $('#namaBar');
    var hargaBarang = $('#hargaBar');
    var stokBarang = $('#stokBar');
    if(cekInsert(namaBarang) && cekInsert(hargaBarang) && cekInsert(stokBarang)){
      $.ajax({
        url: '<?php echo site_url(); echo "/ControllerBarang/add/";?>',
        method: 'post',
        dataType: 'text',
        data: {
          key: data,
          namaBarang: namaBarang.val(),
          hargaBarang: hargaBarang.val(),
          stokBarang: stokBarang.val()
        }, success: function (response) {
          //alert(response);
          $(".table").DataTable().destroy();
          $('tbody').empty();
          $("#inputModal").modal('hide');
          $('#inputModal').on('hidden.bs.modal', function(){
              $('.ins').val("");
          });
          displayData(0,50);
        }
      });
    }
  }

  function cekInsert(input){
    if(input.val() == ''){
      input.css('border', '1px solid red');
      return false;
    } else {
      input.css('border', '');
      return true;
    }
  }

</script>